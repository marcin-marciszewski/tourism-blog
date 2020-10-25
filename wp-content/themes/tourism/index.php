<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <?php wp_head(); ?>
        <title>Travel Blog</title>
    </head>
    <body id="home">
        <header class="showcase">
            <nav class="navbar">
                <a class="logo logo--white" href="#"><img src="./assets/images/logo-white.png" alt=""></a>
                <a class="logo logo--black" href="#"><img src="./assets/images/logo.png" alt=""></a>
                <ul>
                    <li><a href="">aaa</a></li>
                    <li><a href="">aaa</a></li>
                    <li><a href="">aaa</a></li>
                </ul>
            </nav>
            <div class="showcase__quote">
                <h1>People don't take trips, trips take people.</h1>
                <p>Discover incredible palaces with me.</p>
            </div>
            <div class="arrow-down">
                <i class="fas fa-chevron-down"></i>
            </div>
        </header>
        <section id="posts">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="post d-flex">
                            <div class="post__image">
                                <img src="../src/assets/images/beach.jpg" alt="">
                            </div>
                            <div class="post__text">
                                <h1>Post Title</h1>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam harum facilis eveniet corrupti, soluta numquam repellendus cumque ratione cum accusantium similique voluptatibus? Nisi nihil delectus saepe, iure et voluptate quos. Modi ut voluptatibus perferendis ullam esse necessitatibus? Placeat debitis ipsum laboriosam sunt asperiores fuga sequi aspernatur error, voluptatum adipisci exercitationem!</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <div class="post d-flex">
                            <div class="post__image">
                                <img src="../src/assets/images/beach.jpg" alt="">
                            </div>
                            <div class="post__text">
                                <h1>Post Title</h1>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam harum facilis eveniet corrupti, soluta numquam repellendus cumque ratione cum accusantium similique voluptatibus? Nisi nihil delectus saepe, iure et voluptate quos. Modi ut voluptatibus perferendis ullam esse necessitatibus? Placeat debitis ipsum laboriosam sunt asperiores fuga sequi aspernatur error, voluptatum adipisci exercitationem!</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <footer>
            <div class="container">
                <div class="row">
                    <div class="col">
                        <a class="logo logo--white" href="#"><img class="mx-auto d-block" src="./assets/images/logo-white.png" alt=""></a>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                       <ul class="footer-links">
                           <li><a href="#">Privacy Policy</a></li>
                           <li><a href="#">Security</a></li>
                           <li><a href="#">Terms of Service</a></li>
                           <li><a href="#">Sitemap</a></li>
                       </ul>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                       <ul class="footer-social">
                           <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                           <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                           <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                           <li><a href="#"><i class="fab fa-pinterest-p"></i></a></li>
                       </ul>
                       <div class="text-center text-white">Copyrights 	&#169; <span id="current-year"></span></div>
                    </div>
                </div>
            </div>
        </footer>
        <?php wp_footer() ?>
    </body>
</html>