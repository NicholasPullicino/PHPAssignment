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
        <script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>
        
        <link rel="stylesheet" href="style.css">

        <title>Profile</title>
    </head>
    <body>
        <?php
            include "../templates/header.php";
            include "../includes/profile-inc.php"
        ?>

    <div class="container mt-3">
        <div class="row">
            <div class="col-md-8 col-lg-9 profile-desc profile-info">
                <article class="profile-box profile-info">
                    <header>
                    <div class="">
                            <figure class="profile-circle mb-0">
                                <div class="thumbnail w-30">
                                    <div class="thumbnail-inner">
                                    <?php echo"<img class='full-bg' src='../images/" . $image . "' alt='Profile Icon'/>"; ?>                                 
                                    </div>
                                    <?php echo"<h1 class='h1'>" . $username . " </h1>"; ?>
                                </div>
                            </figure>
                    </div>
                    </header>

                    <div class="item-content clearfix my-2">
                        <h4 class="">Bio:</h4>
                    </div>
                    <div class="item-content clearfix my-2">
                        <p>Hi</p>
                    </div>
                </article>   
                                
            <div class="col-md-8 col-lg-12 mt-5 profile-info profile-box">
                <article>
                    <div class="item-content clearfix my-3">
                        <h4 class="">Recent Achievments</h4>
                        <img src="../images/memory.png" alt="Hat Icon"/>
                        <img src="../images/memory.png" alt="Hat Icon"/>
                        <img src="../images/memory.png" alt="Hat Icon"/>
                        <img src="../images/memory.png" alt="Hat Icon"/>
                        <img src="../images/memory.png" alt="Hat Icon"/>
                    </div>
                </article>
            </div>

            <div class="col-md-12 col-lg-12 mt-5 profile-info profile-box">
                <article>
                    <div class="item-content clearfix my-3">
                        <div class="container-fluid">
                            <h1 class="h1">Games Owned</h1>
                            <div class="row grid-container">
                                <a href="gamelist.php"><div class="grid-item full-bg" style="background-image: url(../images/outerworlds.jpg);"></div></a> 
                                <a href="gamelist.php"><div class="grid-item full-bg" style="background-image: url(../images/It-Takes-Two.jpg);"></div></a>
                                <a href="gamelist.php"><div class="grid-item full-bg" style="background-image: url(../images/beforeyoureyes.jpeg);"></div></a>
                            </div>
                        </div>
                    </div>
                </article>
            </div>        

        </div>
            <!-- Aside -->
            <div class="col-md-4 col-lg-3 d-md-block level-table profile-info">               
                <aside class="p-4">
                    <h3 class="h4 fw-normal">Level 50</h3>
                    <ul class="uses list-unstyled m-0">
                        <li class="item mt-4">
                            <h4 class="h5 ms-3">2344/5000 EXP</h4>
                        </li>
                    </ul>
                </aside>
                <h1 class="h1">Borders:</h1>
                <button type="button" class="btn btn-primary" onclick="borderBlue()">Blue Border</button>
                <button type="button" class="btn btn-success" onclick="borderGreen()">Green Border</button>
                <button type="button" class="btn btn-danger" onclick="borderRed()">Red Border</button> 
                <button type="button" class="btn btn-light" onclick="defaultBorder()">Default</button>
                <h1 class="h1">Backgrounds:</h1>
                <button type="button" class="btn btn-primary" onclick="backBlue()">Blue Background</button>
                <button type="button" class="btn btn-success" onclick="backGreen()">Green Background</button>
                <button type="button" class="btn btn-danger" onclick="backRed()">Red Background</button>
                <button type="button" class="btn btn-light" onclick="defaultBack()">Default</button>
                <h1 class="h1">Management:</h1>
                    <div class="card mx-auto shadow profile-reg">
                        <form action="../includes/profile-inc.php" method="post">
                            <div>
                                <label for="input-name">Username:</label>
                                <input type="text" name="username" id="input-name" value=<?php echo $username ?>>
                            </div>

                            <div>
                                <label for="input-email">Email:</label>
                                <input type="text" name="email" id="input-email" readonly value=<?php echo $email ?>>
                            </div>

                            <div>
                                <label for="input-password">Password:</label>
                                <input type="password" name="pass" id="input-password">
                            </div>

                            <div>
                                <label for="input-confPassword">Confirm Password:</label>
                                <input type="password" name="confirmPass" id="input-confPassword">
                            </div>

                            <button type="submit" name="submit" value="update" class="btn btn-primary">Update Profile</button>
                            <button type="submit" name="submit" value="delete" class="btn btn-danger">Delete Profile</button>
                        </form>
                    </div>
                </div>
            </div>

    <?php
                if (isset($_GET["error"])){
                    $error = $_GET["error"];
                    if ($error == "none") {
                        echo "<p>Profile has been updated.</p>";
                    }
                    elseif ($error == "updatefailed"){
                        echo "<p>Could not update Profile.</p>";
                    }
                    elseif ($error == "deletefailed"){
                        echo "<p>Could not delete Profile.</p>";
                    }
                    elseif ($error == "filesize"){
                        echo "<p>File size is too large.</p>";
                    }
                    elseif ($error == "fileupload"){
                        echo "<p>File could not be uplaoded.</p>";
                    }
                    elseif ($error == "filetype"){
                        echo "<p>File type not accepted.</p>";
                    }
                }
            ?>

    <script>
        function borderBlue() {
            var element = document.querySelectorAll(".profile-info");
            var index = 0, length = element.length;
            for ( ; index < length; index++) {
                element[index].style.borderColor = "blue";
            }
        }
        function borderGreen() {
            var element = document.querySelectorAll(".profile-info");
            var index = 0, length = element.length;
            for ( ; index < length; index++) {
                element[index].style.borderColor = "green";
            }
        }
        function borderRed() {
            var element = document.querySelectorAll(".profile-info");
            var index = 0, length = element.length;
            for ( ; index < length; index++) {
                element[index].style.borderColor = "red";
            }
        }
        function defaultBorder() {
            var element = document.querySelectorAll(".profile-info");
            var index = 0, length = element.length;
            for ( ; index < length; index++) {
                element[index].style.borderColor = "#b9b9b9";
            }
        }
        function backBlue() {
            var element = document.querySelectorAll(".profile-box");
            var index = 0, length = element.length;
            for ( ; index < length; index++) {
                element[index].style.backgroundColor = "blue";
            }
        }
        function backGreen() {
            var element = document.querySelectorAll(".profile-box");
            var index = 0, length = element.length;
            for ( ; index < length; index++) {
                element[index].style.backgroundColor = "green";
            }
        }
        function backRed() {
            var element = document.querySelectorAll(".profile-box");
            var index = 0, length = element.length;
            for ( ; index < length; index++) {
                element[index].style.backgroundColor = "red";
            }
        }
        function defaultBack() {
            var element = document.querySelectorAll(".profile-box");
            var index = 0, length = element.length;
            for ( ; index < length; index++) {
                element[index].style.backgroundColor = "#313131";
            }
        }
    </script>

        <?php
            include "../templates/footer.php";
        ?>
    </body>
</html>