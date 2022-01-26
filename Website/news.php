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

        <title>News</title>
    </head>
    <body>

        <?php
            include "../templates/header.php";
        ?>

        <script>
            function show(shown, hidden, hidden2) {
                document.getElementById(shown).style.display='block';
                document.getElementById(hidden).style.display='none';
                document.getElementById(hidden2).style.display='none';
                return false;
            }
        </script>

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
                            <p>On December 26, the voice performances for Genshin Impact’s latest playable characters were shown for the first time. This included Yun Jin, the young leader of a Chinese opera company. The reaction from the Genshin community was mixed, but the moment also became an opportunity for people to experience an underappreciated aspect of Chinese culture they’d likely never seen before.</p>
    
                            <p>I’m from a little-known city called Beijing, which most Americans associate with government repression and overreach. The other thing we’re known for is the Peking opera, which is the most popular regional variant of Chinese opera. I’m broadly generalizing here, but performers generally sing it in a very high-pitched voice. The outfits and makeup are extremely exaggerated, and the dance movements involve a lot of pauses. Ours is the most famous one in China, and it’s listed as a UNESCO List of the Intangible Cultural Heritage of Humanity.</p>
                            <p>These aspects of Chinese opera were front and center during the recent Genshin Impact voice performances. Some fans enjoyed Yun Jin’s singing, while others reacted negatively to how she sang “Oh, Maestro” in a high-pitched voice (including a popular Genshin streamer, who later had to make an apology video). Some fans pointed out that laughing at a traditional Asian artform is kind of shitty at best, and racist at worst, especially for a game that’s made a point of incorporating non-western cultural touchstones throughout all its updates. But that’s not really what I want to talk about. On January 13, the official Genshin Impact YouTube account posted a video about Yun Jin that made it evident that the developers created the character with a genuine love for opera as an art form.</p>
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
                                    <a onclick="return show('Page2','Page1','Page3');"><img src="../images/halo.jpg" alt="" class="centered-image"></a>
                                </div>
                            </div>

                            <a onclick="return show('Page2','Page1','Page3');"><h4 class="h5 ms-3">Halo Infinite's Cosmetics Will Be Cheaper Starting Next Week</h4></a>
                        </li>
                        <li class="item mt-4">
                            <div class="thumbnail">
                                <div class="thumbnail-inner">
                                    <a  onclick="return show('Page3','Page1','Page2');"><img src="../images/endwalker.jpg" alt="" class="centered-image"></a>
                                </div>
                            </div>

                            <a onclick="return show('Page3','Page1','Page2');"><h4 class="h5 ms-3">Final Fantasy XIV Goes Back On Sale From January 25</h4></a>
                        </li>
                    </ul>
                </aside>
            </div>

            <div id="respond" class="col-md-9 col-lg-9">

                <h3>Leave a Comment</h3>
        
                <form action="post_comment.php" method="post" id="commentform">
            
                    <textarea name="comment" id="comment" rows="10" tabindex="4"  required="required"></textarea>
            
                    <input type="hidden" name="comment_post_ID" value="1" id="comment_post_ID" />
                    <input name="submit" type="submit" value="Submit comment" />
            
                </form>
            
            </div>
        </div>
        </div>

        <div id="Page2" class="container mt-3 display:none">
            <div class="row">
    
                <!-- Main Content -->
                <div class="col-md-8 col-lg-9">
    
                    <!-- The website article -->
                    <article class="newsPost">
    
                        <!-- The header with article metadata -->
                        <header>
                            <h1 class="h1">Halo Infinite's Cosmetics Will Be Cheaper Starting Next Week</h1>
    
                            <!-- Post Details -->  
                            <img src="../images/halo.jpg" alt="Post Banner" class="mt-4 d-block w-100">
                        </header>
    
                        <div class="blog-content clearfix my-4">
                            <p>Since Halo Infinite’s multiplayer was released in November of last year, the free-to-play shooter’s cosmetics and microtransactions have been heavily criticized and debated, with many feeling the prices on in-game items are too high. According to 343 Industries, things are about to change. Starting next week on Tuesday Jan. 18, players can expect reduced prices on cosmetic items in the store as well as some other welcomed changes, too.</p>
    
                            <p>Yesterday night on Twitter, 343’s head of design Jerry Hook explained that the developer behind the latest Halo entry has been “monitoring the discussions” around Infinite’s in-game store and was ready to announce some changes. The first and arguably best change is that prices across the store will be reduced.</p>
                            <p>Hook also explained that alongside lower prices, the “Shop experience will vary week-to-week” starting Tuesday. The studio is also planning to increase the quality and value of cosmetic bundles and plans to start offering more individual items outside of bundles, giving players more choice on what to and what not to spend their currency on.</p>
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
                                    <a onclick="return show('Page1','Page2','Page3');"><img src="../images/genshin.jpg" alt="" class="centered-image"></a>
                                </div>
                            </div>

                            <a onclick="return show('Page1','Page2','Page3');"><h4 class="h5 ms-3">Genshin Impact's Latest Controversy Shows Games Can Be Powerful Ambassadors For Art</h4></a>
                        </li>
                        <li class="item mt-4">
                            <div class="thumbnail">
                                <div class="thumbnail-inner">
                                    <a onclick="return show('Page3','Page1','Page2');"><img src="../images/endwalker.jpg" alt="" class="centered-image"></a>
                                </div>
                            </div>

                            <a onclick="return show('Page3','Page1','Page2');"><h4 class="h5 ms-3">Final Fantasy XIV Goes Back On Sale From January 25</h4></a>
                        </li>
                    </ul>
                </aside>
            </div>

            <div id="respond" class="col-md-8 col-lg-9">

                <h3>Leave a Comment</h3>
        
                <form action="post_comment.php" method="post" id="commentform">
            
                    <textarea name="comment" id="comment" rows="10" tabindex="4"  required="required"></textarea>
            
                    <input type="hidden" name="comment_post_ID" value="1" id="comment_post_ID" />
                    <input name="submit" type="submit" value="Submit comment" />
            
                </form>
            
            </div>
        </div>
        </div>

        <div id="Page3" class="container mt-3 display:none">
            <div class="row">
    
                <!-- Main Content -->
                <div class="col-md-8 col-lg-9">
    
                    <!-- The website article -->
                    <article class="newsPost">
    
                        <!-- The header with article metadata -->
                        <header>
                            <h1 class="h1">Final Fantasy XIV Goes Back On Sale From January 25</h1>
    
                            <!-- Post Details -->  
                            <img src="../images/endwalker.jpg" alt="Post Banner" class="mt-4 d-block w-100">
                        </header>
    
                        <div class="blog-content clearfix my-4">
                            <p>Final Fantasy XIV is so popular that Square Enix stopped selling the game last December. The servers were over capacity, causing long waits and impacting the experience. Now, producer Naoki Yoshida says digital versions of the game will, once again, be available for purchase starting January 25, thanks to beefed up data centers.</p>
    
                            <p>“Since officially launching on December 7 last year, Endwalker has experienced extremely high levels of congestion, causing our players a great deal of frustration,” wrote Yoshida. “The task of rebalancing jobs also remains, and we will continue working on this and other adjustments.”</p>
                            <p>“While certain Worlds continue to experience congestion during peak times, our plan to fundamentally address the problem is beginning to take shape, and I’d like to share the roadmap with you.”</p>
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
                                    <a onclick="return show('Page2','Page1','Page3');"><img src="../images/halo.jpg" alt="" class="centered-image"></a>
                                </div>
                            </div>

                            <a onclick="return show('Page2','Page1','Page3');"><h4 class="h5 ms-3">Halo Infinite's Cosmetics Will Be Cheaper Starting Next Week</h4></a>
                        </li>
                        <li class="item mt-4">
                            <div class="thumbnail">
                                <div class="thumbnail-inner">
                                    <a onclick="return show('Page1','Page2','Page3');"><img src="../images/genshin.jpg" alt="" class="centered-image"></a>
                                </div>
                            </div>

                            <a onclick="return show('Page1','Page2','Page3');"><h4 class="h5 ms-3">Genshin Impact's Latest Controversy Shows Games Can Be Powerful Ambassadors For Art</h4></a>
                        </li>
                    </ul>
                </aside>
            </div>

            <div id="respond" class="col-md-8 col-lg-9">

                <h3>Leave a Comment</h3>
        
                <form action="post_comment.php" method="post" id="commentform">
            
                    <textarea name="comment" id="comment" rows="10" tabindex="4"  required="required"></textarea>
            
                    <input type="hidden" name="comment_post_ID" value="1" id="comment_post_ID" />
                    <input name="submit" type="submit" value="Submit comment" />
            
                </form>
            
            </div>
        </div>
        </div>

        <?php
            include "../templates/footer.php";
        ?>

    </body>
</html>