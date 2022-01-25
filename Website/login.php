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

        <title>Login</title>
    </head>
    <body>

        <?php
            include "../templates/header.php";
        ?>

        <div class="container">
            <div class="card mt-5 w-50 mx-auto shadow profile-reg">
            <form action="../includes/login-inc.php" method="post" id="login">
                    <div class="form-group">
                    <div class="form-group">
                        <label for="Username"><b>Username</b></label>
                        <input type="text" class="form-control" placeholder="Enter username" name="username" id="username">
                    </div>
                    <div class="form-group">
                        <label for="password"><b>Password</b></label>
                        <input type="password" class="form-control" placeholder="Enter password" name="pass" id="password">
                    </div>                       
                    <div class="form-group text-center">
                        <button type="submit" class="btn btn-primary" name="submit">Log in</button>     
                    </div>
                </form>
                <a href='register.php' class='card-link text-center'>
                    Don't have an account? Register here
                </a>
                <?php
                if (isset($_GET["error"])){
                    $error = $_GET["error"];
                    if ($error == "emptyinput") {
                        echo "<p>Please fill in all fields.</p>";
                    }
                    elseif ($error == "incorrectlogin"){
                        echo "<p>Incorrect login credentials.</p>";
                    }
                }
                ?>
            </div>
        </div>

        <?php
            include "../templates/footer.php";
        ?>

    </body>
</html>
