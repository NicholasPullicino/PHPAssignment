<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.2/css/all.css" />
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
        <!-- Bootstrap JavaScript Bundles -->
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    
        <link rel="stylesheet" href="style.css">

        <title>Register</title>
    </head>
    <body>     
        <?php
            include "../templates/header.php";
        ?>

<div class="container">
            <div class="card mt-5 w-50 mx-auto shadow profile-reg">
                <form action="../includes/register-inc.php" method="post">
                    <div class="form-group">
                    <div class="form-group">
                        <label for="Username"><b>Username</b></label>
                        <input type="text" class="form-control" placeholder="Enter username" name="username" required>
                    </div>
                    <div class="form-group">
                        <label for="email"><b>Email</b></label>
                        <input type="email" class="form-control" placeholder="Enter email" name="email" required>
                    </div>
                    <div class="form-group">
                        <label for="password"><b>Password</b></label>
                        <input type="password" class="form-control" placeholder="Enter password" name="pass" required>
                    </div>
                    <div class="form-group">
                        <label for="confirmpass"><b>Confirm Password</b></label>
                        <input type="password" class="form-control" placeholder="Confirm password" name="confirmpass" required>
                    </div>
                    <div class="form-group custom-file">
                        <input class='custom-file-input' type="file" name="imgfile" id="imgfile">
                        <label for="imgfile" class='custom-file-label'><b>Upload profile image</b></label>
                    </div>
                        
                    <div class="form-group text-center">
                        <button type="submit" class="btn btn-primary" name="submit">Register</button>     
                    </div>
                </form>
                <a href='login.php' class='card-link text-center'>Already have an account? Login Here</a>

                <?php
                if (isset($_GET["error"])){
                    $error = $_GET["error"];
                    if ($error == "emptyinput") {
                        echo "<p>Please fill in all fields.</p>";
                    }
                    elseif ($error == "invalidusername"){
                        echo "<p>Please choose a proper username.</p>";
                    }
                    elseif ($error == "invalidemail"){
                        echo "<p>Please choose a proper email.</p>";
                    }
                    elseif ($error == "passwordmatch"){
                        echo "<p>Passwords do not match.</p>";
                    }
                    elseif ($error == "usernametaken"){
                        echo "<p>Username already in use.</p>";
                    }
                    elseif ($error == "stmtfailed"){
                        echo "<p>Something went wrong, please try again.</p>";
                    }
                    elseif ($error == "none"){
                        echo "<p>Registration completed successfully.</p>";
                    }
                }
            ?>
        </div>
    </div>

            </div>
        </div>

        <?php
            include "../templates/footer.php";
        ?>

    </body>
</html>