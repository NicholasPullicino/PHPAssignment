<?php
   function emptyInputSignup($email, $username, $password, $confPassword) {
        $result;
        if (empty($email) || empty($username) || empty($password) || empty($confPassword)) {
            $result = true;
        }
        else
        {
            $result = false;
        }

        return $result;
    }

    function invalidUid($username) {
        $result;
        // allow letters and numbers, but nothing else
        if (!preg_match("/^[a-zA-Z0-9]*$/", $username)) {
            $result = true;
        }
        else
        {
            $result = false;
        }

        return $result;
    }

    function invalidEmail($email) {
        $result;
        // built in php function to check email
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $result = true;
        }
        else
        {
            $result = false;
        }

        return $result;
    }

    function passwordMatch($password, $confPassword) {
        $result;
        if ($password !== $confPassword) {
            $result = true;
        }
        else
        {
            $result = false;
        }

        return $result;
    }

    function userExists($conn, $username, $email) {
        // ? is a placeholder for prepared statements
        // prepared statements are used to secure against SQL Injection
        $sql = "SELECT * FROM users WHERE username = ? OR email = ?;";
        $stmt = mysqli_stmt_init($conn);
        if (!mysqli_stmt_prepare($stmt,$sql)){
            header("location: ../Website/register.php?error=stmtfailed");
            exit();
        }

        // ss means we are passing 2 strings
        mysqli_stmt_bind_param($stmt, "ss", $username, $email);
        mysqli_stmt_execute($stmt);

        $resultData = mysqli_stmt_get_result($stmt);
        mysqli_stmt_close($stmt);

        // getting data from database in associative array
        // data fetched iDs stored in $row within the if condition itself
        if ($row = mysqli_fetch_assoc($resultData)){
            return $row;
        }
        else
        {
            // cannot register
            $result = false;
            return $result;
        }
    }


    function createUser($conn, $username, $email, $password, $image) {
        
        $sql = "INSERT INTO users (username, email, password, image) VALUES (?,?,?,?)";
        $stmt = mysqli_stmt_init($conn);
        if (!mysqli_stmt_prepare($stmt,$sql)){
            header("location: ../Website/register.php?error=stmtfailed");
            exit();
        }

        // Hashed Password for security
        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

        mysqli_stmt_bind_param($stmt, "ssss", $email, $username, $hashedPassword, $image);
        mysqli_stmt_execute($stmt);
        mysqli_stmt_close($stmt);

        // redirect back to sign up page once registration is complete
        header("location: ../Website/register.php?error=none");
    }

    function updateUser($conn, $username, $password, $userID) {
        $sql = "UPDATE users SET username = ?, password = ? WHERE userID = ?;";
        $stmt = mysqli_stmt_init($conn);
        if (!mysqli_stmt_prepare($stmt,$sql)){
            header("location: ../Website/profile.php?error=updatefailed");
            exit();
        }

        // Hashed Password for security
        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

        mysqli_stmt_bind_param($stmt, "sss", $username, $hashedPassword, $userID);
        mysqli_stmt_execute($stmt);
        mysqli_stmt_close($stmt);

        // redirect back to sign up page once registration is complete
        //echo $username;
        $_SESSION["username"] = $username;
        header("location: ../Website/profile.php?error=none");
    }

    function deleteUser($conn, $username) {
        $sql = "DELETE FROM users WHERE username = ?;";
        $stmt = mysqli_stmt_init($conn);
        if (!mysqli_stmt_prepare($stmt,$sql)){
            header("location: ../Website/profile.php?error=deletefailed");
            exit();
        }

        mysqli_stmt_bind_param($stmt, "s", $username);
        mysqli_stmt_execute($stmt);
        mysqli_stmt_close($stmt);

        include "logout-inc.php";

        // redirect back to sign up page once user deletion is complete
        header("location: ../Website/register.php");
    }

    function emptyInputLogin($username, $password) {
        $result;
        if (empty($username) || empty($password)) {
            $result = true;
        }
        else
        {
            $result = false;
        }

        return $result;
    }

    function loginUser($conn, $username, $password) {
        // using the username in both parameters allows us to allow users to login using email instead of username
        $userExists = userExists($conn, $username, $username);

        if ($userExists === false){
            header("location: ../Website/login.php?error=incorrectlogin");
            //echo "test";
            exit();
        }

        $hashedPassword = $userExists["password"];        
        $checkPassword = password_verify($password,$hashedPassword);

        //echo $hashedPassword, $checkPassword;
        //exit();

        if ($checkPassword === false){
            header("location: ../Website/login.php?error=incorrectlogin");
            echo $checkPassword;
            exit();
        }
        elseif($checkPassword === true){
            session_start();            
            $_SESSION["userID"] = $userExists["userID"];
            $_SESSION["username"] = $userExists["username"];

            header("location: ../Website/profile.php");
            exit();
        }
    }

    function loadGames($conn) {
        $sql = "SELECT * FROM games;";
        $stmt = mysqli_stmt_init($conn);
        if (!mysqli_stmt_prepare($stmt,$sql)){
            header("location: ../Website/gamelist.php?error=stmtfailed");
            exit();
        }

        mysqli_stmt_execute($stmt);

        $resultData = mysqli_stmt_get_result($stmt);
        mysqli_stmt_close($stmt);

        return $resultData;
    }

    function loadGame($conn, $id) {
        $sql = "SELECT * FROM games WHERE gameID = ?;";
        $stmt = mysqli_stmt_init($conn);
        if (!mysqli_stmt_prepare($stmt,$sql)){
            header("location: ../Website/game.php?error=stmtfailed");
            exit();
        }

        mysqli_stmt_bind_param($stmt, "s", $id);
        mysqli_stmt_execute($stmt);

        $resultsData = mysqli_stmt_get_result($stmt);
        mysqli_stmt_close($stmt);

        if ($row = mysqli_fetch_assoc($resultsData)){
            return $row;
        }
        else
        {
            $result = false;
            return $result;
        }
    }

    function loadGamesLimit($conn, $start, $amount) {
        $sql = "SELECT * FROM games LIMIT ?, ?;";
        $stmt = mysqli_stmt_init($conn);
        if (!mysqli_stmt_prepare($stmt,$sql)){
            header("location: ../Website/users.php?error=stmtfailed");
            exit();
        }

        mysqli_stmt_bind_param($stmt, "ss", $start, $amount);
        mysqli_stmt_execute($stmt);

        $resultData = mysqli_stmt_get_result($stmt);
        mysqli_stmt_close($stmt);

        return $resultData;
    }

?>