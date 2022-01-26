<?php
    // Start Session
    session_start();
?>

<!-- Header with navigation -->
<nav class="navbar navbar-expand-md navbar-dark" style="background-color: #1B5A44;">
    <a href="index.php" class="navbar-brand">Home</a>

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#website-navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="website-navigation">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a href="news.php" class="nav-link">News</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="gamelist.php">Store</a>
        </ul>
        <ul class="navbar-nav ml-auto">
            <?php 
                if (isset($_SESSION["username"])) {
                echo "<li class='nav-item'>
                        <a href='../includes/logout-inc.php' class='nav-link'>Log Out</a>
                    </li>";
                echo "<li class='nav-item'>
                        <a href='../Website/profile.php' class='nav-link'>Profile</a>
                    </li>";
                echo "<li class='nav-item'>
                        <a href='gamelist.php' class='nav-item nav-link active'>
                        <h5 class='px-5 cart'>
                        <i class='fas fa-shopping-cart'></i> Cart ";

                    if (isset($_SESSION['cart'])){
                        $count = count($_SESSION['cart']);
                        echo "<span id=\"cart_count\" class=\"text-warning\">$count</span>";
                    }else{
                        echo "<span id=\"cart_count\" class=\"text-warning\">0</span>";
                    }
                    echo "
                </h5>
            </a>
                    </li>";

                }
                else{
                    echo "<li class='nav-item'>
                        <a href='../Website/login.php' class='nav-link'>Log In</a>
                    </li>";
                    echo "<li class='nav-item'>
                        <a href='../Website/register.php' class='nav-link'>Sign Up</a>
                    </li>";
                    
                }
            ?>
        </ul>
    </div>
</nav>
<!-- Header with navigation -->
