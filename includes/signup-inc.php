<?php
    if (isset($_POST["submit"])) {
        $email = $_POST["email"];
        $username = $_POST["username"];
        $password = $_POST["pass"];
        $confPassword = $_POST["conifrmpass"];
        $image = $_POST["imgfile"];

        // we need database handler and functions to be able to connect to db
        require_once "dbh-inc.php";
        require_once "functions-inc.php";

        if (emptyInputSignup($email, $username, $password, $confPassword) !== false) {
            header("location: ../signup.php?error=emptyinput");
            
            // Exit function stops the script from running
            exit();
        }
        if (invalidUid($username) !== false) {
            header("location: ../signup.php?error=invalidusername");
            exit();
        }
        if (invalidEmail($email) !== false) {
            header("location: ../signup.php?error=invalidemail");
            exit();
        }
        if (passwordMatch($password, $confPassword) !== false) {
            header("location: ../signup.php?error=passwordmatch");
            exit();
        }
        if (userExists($conn, $username, $email) !== false) {
            header("location: ../signup.php?error=usernametaken");
            exit();
        }

        createUser($conn, $email, $username, $password, $image);

    }
    else {
        header("location: ../signup.php");
        exit();
    }
?>