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
        <link href="https://vjs.zencdn.net/7.17.0/video-js.css" rel="stylesheet" />


        <title>Home</title>
    </head>
    <body>
    <?php
        include "../templates/header.php";
    ?>

<div id="carouselControls" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#carouselIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselIndicators" data-slide-to="1"></li>
        <li data-target="#carouselIndicators" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
    <div class="carousel-item active">
        <img class="d-block w-100" src="../images/dying2.jpg" alt="First game">
    </div>
    <div class="carousel-item">
        <img class="d-block w-100" src="../images/aubanner.jpg" alt="Second game">
    </div>
    <div class="carousel-item">
        <img class="d-block w-100" src="../images/ff.png" alt="Third game">
    </div>
    </div>
    <a class="carousel-control-prev" href="#carouselControls" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselControls" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>

<!--<video
  id="my-video"
  class="video-js"
  controls
  preload="auto"
  width="640"
  height="264"
  poster="images/It-Takes-Two.jpg"
  data-setup='{"techOrder": ["youtube"]} , "src": "https://www.youtube.com/watch?v=ohClxMmNLQQ&ab_channel=ElectronicArts" }'
>

<source src="https://www.youtube.com/watch?v=ohClxMmNLQQ&ab_channel=ElectronicArts" type="video/youtube" />
    <source src="https://www.youtube.com/watch?v=ohClxMmNLQQ&ab_channel=ElectronicArts" type="video/youtube" />
    <p class="vjs-no-js">
      To view this video please enable JavaScript, and consider upgrading to a
      web browser that
      <a href="https://videojs.com/html5-video-support/" target="_blank"
        >supports HTML5 video</a
      >
    </p>
</video>-->
<h1 class="h1">Videos</h1>

<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="container-fluid">
                <div class="row grid-container3">
                    <div class="iframe=container">
                        <iframe width="560" height="315" src="https://www.youtube.com/embed/ohClxMmNLQQ" title="YouTube video player" 
                        frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
                        allowfullscreen></iframe>
                    </div>
                    <div class="iframe=container">
                        <iframe width="560" height="315" src="https://www.youtube.com/embed/hN2aqi5MhXo" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                    
            </div>
        </div>
    </div>
</div>

<h1 class="h1">Featured Games</h1>

<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="container-fluid">
                <div class="row grid-container3">
                    <a href="gamelist.php"><div class="grid-item3 full-bg" style="background-image: url(../images/outerworlds.jpg);"></div></a> 
                    <a href="gamelist.php"><div class="grid-item3 full-bg" style="background-image: url(../images/It-Takes-Two.jpg);"></div></a>
                    <a href="gamelist.php"><div class="grid-item3 full-bg" style="background-image: url(../images/beforeyoureyes.jpeg);"></div></a>
                </div>
            </div>
        </div>
    </div>
</div>

<h1 class="h1">Trending News</h1>

<div id="Page1" class="container mt-3 display:none">
    <div class="row">

        <!-- Main Content -->
        <div class="col-md-8 col-lg-9">

            <!-- The website article -->
            <article class="newsPost">

                <!-- The header with article metadata -->
                <header>
                    <h1 class="h1">Genshin Impact's Latest Controversy Shows Games Can Be Powerful Ambassadors For Art</h1>

                    <!-- Post Details -->  
                    <img src="../images/genshin.jpg" alt="Post Banner" class="mt-4 d-block w-100">
                </header>

                <div class="blog-content clearfix my-4">
                    <p>On December 26, the voice performances for Genshin Impact’s latest playable characters were shown for the first time. This included Yun Jin, the young leader of a Chinese opera company...</p>
                </div>
            </article>

        <!-- Side Content -->
    </div>

    <div class="col-md-10 col-lg-3">
            
        <!-- Sidebar box -->
        <aside class="p-4">
            <h3 class="h4 fw-normal">Trending Posts</h3>

            <ul class="trending-posts list-unstyled m-0">
                <li class="item mt-4">
                    <div class="thumbnail">
                        <div class="thumbnail-inner">
                            <a href="news.php"><img src="../images/halo.jpg" alt="" class="centered-image"></a>
                        </div>
                    </div>

                    <a href="news.php"><h4 class="h5 ms-3">Halo Infinite's Cosmetics Will Be Cheaper Starting Next Week</h4></a>
                </li>
                <li class="item mt-4">
                    <div class="thumbnail">
                        <div class="thumbnail-inner">
                            <a href="news.php"><img src="../images/endwalker.jpg" alt="" class="centered-image"></a>
                        </div>
                    </div>

                    <a href="news.php"><h4 class="h5 ms-3">Final Fantasy XIV Goes Back On Sale From January 25</h4></a>
                </li>
            </ul>
        </aside>
    </div>

</div>
</div>

        <?php
            include "../templates/footer.php";
        ?>
    <script src="https://vjs.zencdn.net/7.17.0/video.min.js"></script>
    </body>
</html> 