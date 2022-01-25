<?php
    if(isset($_POST["submit"])) {
        $username = $_POST["username"];
        $password = $_POST["pass"];

        require_once "dbh-inc.php";
        require_once "functions-inc.php";

        //echo $username . " " . $password;

        if (emptyInputLogin($username, $password) !== false) {
            header("location: ../Website/login.php?error=emptyinput");
            exit();
        }

        loginUser($conn, $username, $password);
    }
    else
    {
        //echo "test";
        header("location: ../Website/login.php");
        exit();
    }
?>