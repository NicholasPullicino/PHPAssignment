<?php
    // we need database handler and functions to be able to connect to db
    require_once "dbh-inc.php";
    require_once "functions-inc.php";


    // if not submit, then this is initial page load
    if (!isset($_POST["submit"]))
    {
        if (isset($_SESSION["username"])) {
            $username = $_SESSION["username"];
            $user = userExists($conn, $username, $username);
            $email = $user["email"];
            $image = $user["image"];
        }
        else{
            header("location: ../Website/login.php");
            exit();
        }
    }
    else
    {
        session_start();
        if ($_POST["submit"] === "upload")
        {
            if (isset($_SESSION["username"]))
            {
                $fileName = $_FILES["userfile"]["name"];
                $fileTmpName = $_FILES["userfile"]["tmp_name"];
                $fileSize = $_FILES["userfile"]["size"];
                $fileError = $_FILES["userfile"]["error"];
                $fileType = $_FILES["userfile"]["type"];

                $fileExt = explode(".", $fileName);
                $fileActualExt = strtolower(end($fileExt)); // end() gets the last element of an array

                $allowed = array("jpg","jpeg","png");
                if (in_array($fileActualExt, $allowed)) {
                    if ($fileError === 0) {
                        if ($fileSize < 5) {  // 500000kb = ~500mb
                            $fileNameNew = uniqid("", true);  // creates a unique number that cannot be recreated
                            $fileNameNew = $fileNameNew . "." . $fileActualExt;

                            $uploadDir = "../images/";
                            $uploadFile = $uploadDir . $fileNameNew;

                            move_uploaded_file($fileTmpName, $uploadFile);

                            header("location: ../Website/profile.php?error=none");
                            exit();
                        }
                        else
                        {
                            header("location: ../Website/profile.php?error=filesize");
                            exit();
                        }
                    }
                    else
                    {
                        header("location: ../Website/profile.php?error=fileupload");
                        exit();
                    }
                }
                else
                {
                    header("location: ../Website/profile.php?error=filetype");
                    exit();
                }
            }
        }
        else
        {
            $username = $_POST["username"];
            $password = $_POST["pass"];
            $userID = $_SESSION["userID"];

            if ($_POST["submit"] === "update")
            {
                updateUser($conn, $username, $password, $userID);
            }
            else if ($_POST["submit"] === "delete")
            {
                deleteUser($conn, $username);
            }
        }
    }


?>
