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

        <title>Sitemap</title>
    </head>
    <body>

        <?php
            include "../templates/header.php";
        ?>

        <div class="container-fluid">
            <div class="card mt-5 w-50 mx-auto shadow">
                <div class="col-12">
                    <h1 class="text-center">Sitemap</a>
                </div>
                <div class="col-12">
                    <a href="index.php" class="card-link text-center">Home Page</a>
                </div>
                <div class="col-12">
                    <a href="gamelist.php" class="card-link text-center">Store Page</a>
                </div>
                <div class="col-12">
                    <a href="news.php" class="card-link text-center">News Page</a>
                </div>
                <div class="col-12">
                    <a href="profile.php" class="card-link text-center">Profile Page</a>
                </div>
                <div class="col-12">
                    <a href="login.php" class="card-link text-center">Login Page</a>
                </div>
                <div class="col-12">
                    <a href="register.php" class="card-link text-center">Register Page</a>
                </div>
            </div>
        </div>

        <?php
            include "../templates/footer.php";
        ?>

    </body>
</html>