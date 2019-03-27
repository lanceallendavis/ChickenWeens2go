<?php
session_start();
if(!isset($_SESSION['user']['role']) || ($_SESSION['user']['role'] !== 'user')){
  header('location: index.php');
}
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Chicken Ween's 2go - Home</title>
    <link rel="stylesheet" href="userasset/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="userasset/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Black+Han+Sans">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">
    <link rel="stylesheet" href="userasset/css/Card-hover-affect-1.css">
    <link rel="stylesheet" href="userasset/css/Header-Blue.css">
    <link rel="stylesheet" href="userasset/css/Highlight-Blue.css">
    <link rel="stylesheet" href="userasset/css/Highlight-Phone.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.1.1/aos.css">
    <link rel="stylesheet" href="userasset/css/Pretty-Footer.css">
    <link rel="stylesheet" href="userasset/css/MUSA_carousel-product-cart-slider.css">
    <link rel="stylesheet" href="userasset/css/News-Cards.css">
    <link rel="shortcut icon" href="userasset/img/icon.png" type="image/x-icon" />
    <link rel="stylesheet" href="userasset/css/NMDIG-Testimonials.css">
    <link rel="stylesheet" href="userasset/css/Team-Boxed.css">
    <link rel="stylesheet" href="userasset/css/Team-Grid.css">
    <link rel="stylesheet" href="userasset/css/Team-with-rotating-cards.css">
</head>

<body>
   <nav class="navbar navbar-light navbar-expand-lg fixed-top text-center" id="mainNav" style="height: 98px;background-color: #1b120f;font-family: Lato, sans-serif;">
  <div class="container"><a class="navbar-brand js-scroll-trigger" href="user-page.php"><img src="userasset/img/sojubtry.png" style="height: 81px;width: 217px;margin-left: 28px;"></a><button class="navbar-toggler navbar-toggler-right" data-toggle="collapse" data-target="#navbarResponsive"
  type="button" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation" style="background-color: rgba(78,69,18,0);color: rgba(255,255,255,0.5);"><i class="fa fa-align-justify"></i></button>
    <div class="collapse navbar-collapse" id="navbarResponsive" style="color: rgb(230,222,221);padding-right: 27px;">
      <ul class="nav navbar-nav ml-auto" style="background-color: rgba(27,18,15,0.85);">
        <li class="nav-item" role="presentation"><a class="nav-link js-scroll-trigger" href="user-page.php" style="color: #f05f40 ;">Home</a></li>
        <li class="nav-item" role="presentation"><a class="nav-link" href="menu.php" style="color: rgb(230,222,221) ;">MENU</a></li>
        <li class="nav-item" role="presentation"><a class="nav-link js-scroll-trigger" href="cart.php" style="color:rgb(230,222,221) ;font-family: Lato, sans-serif;">Cart</a></li>
        <li class="nav-item" role="presentation"><img src="./images/user-images/<?php echo $_SESSION['user']['profile_photo']; ?>" alt="Profile Pic" style="width:40px;height:40px; border-radius: 20px;"></li>
        <li class="nav-item dropdown"><a class="dropdown-toggle nav-link" data-toggle="dropdown" aria-expanded="false" href="#" style="color: rgb(230,222,221);">PROFILE</a>
        <div class="dropdown-menu" role="menu" style="font-family: Lato, sans-serif;color: rgb(230,222,221);background-color: rgb(27,18,15);"><a class="dropdown-item" role="presentation" href="edit-profile.php" style="font-family: Lato, sans-serif;font-weight: bold;color: rgb(230,222,221);">EDIT PROFILE</a><a class="dropdown-item" role="presentation" href="transactions.php"
        style="font-weight: bold;color: rgb(230,222,221);">TRANSACTIONS</a><a class="dropdown-item" role="presentation" href="logout.php" style="font-weight: bold;color: rgb(230,222,221);">LOGOUT</a></div>
        </li>
      </ul>
    </div>
  </div>
</nav>
    <div class="highlight-phone" style="padding-top: 136px;background-color: rgb(230,222,221);height: 543px;">
        <div class="container">
            <div class="row" style="height: 342px;">
                <div class="col-sm-5"><img style="background-image: url(&quot;userasset/img/loop.gif&quot;);width: 436px;height: 316px;margin-top: 16px;"></div>
                <div class="col-md-7">
                    <div class="intro" style="margin-top: 24px;padding-top: 1px;">
                        <h2 data-aos="fade-up" data-aos-duration="250" data-aos-delay="150" style="font-family: 'Black Han Sans', sans-serif;color: rgb(237,90,58);letter-spacing: 7px;margin-top: 26px;">Highlights</h2>
                        <p data-aos="fade-up" data-aos-duration="250" data-aos-delay="150" style="font-family: Lato, sans-serif;font-size: 19px;margin-top: -8px;">Here are some of our top seller flavored wings that you might want in your bag. A wings that our customer currently love. Try it now!</p><a class="btn btn-primary" role="button" href="menu.php" data-bs-hover-animate="tada" style="background-color: rgb(248,157,19);font-family: Lato, sans-serif;">START ORDERING</a></div>
                </div>
            </div>
        </div>
    </div>
    <section style="height: 377px;background-color: #e6dedd;">
        <div class="container" style="height: 362px; padding-bottom: 90px">
            <div class="row" style="margin-top: -121px;padding-left: 62px;padding-top: 36px;"><div class="col">
  <figure class="snip1573">
  <img src="userasset/img/ck1.jpg" alt="sample89" />
  <figcaption>
    <h3>Buy Now</h3>
  </figcaption>
  <a href="menu.php"></a>
  </figure> 
  <figure class="snip1573">
  <img src="userasset/img/ck3.jpg" alt="sample89" />
  <figcaption>
  <h3>Buy Now</h3>
  </figcaption>
  <a href="menu.php"></a>
  </figure>

<figure class="snip1573"><img src="userasset/img/ck2.jpg" alt="sample92" />
  <figcaption>
    <h3>Buy Now</h3>
  </figcaption>
  <a href="menu.php"></a>
</figure></div></div>
        </div>
    </section>
    <div style="height: 80px; background-color: #e6dedd;"></div>
    <div class="team-grid" style="background-color: rgb(27,18,15);">
        <div class="container">
            <div class="intro">
                <h2 class="text-center" style="font-family: 'Black Han Sans', sans-serif;color: rgb(246,164,40);letter-spacing: 7px;">New Arrivals</h2>
                <p class="text-center">Here are some of our new chicken wing flavor that we are offering dor this month. &nbsp; </p>
            </div>
            <div class="row people">
                <div class="col-md-4 col-lg-3 item">
                    <div class="box" style="background-image:url(userasset/img/ck1.jpg)">
                        <div class="cover">
                            <p class="title">New Product </p>
                            <h3 class="name">Buffalo Wings</h3>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-lg-3 item">
                    <div class="box" style="background-image:url(userasset/img/ck4.jpg)">
                        <div class="cover">
                            <p class="title">New Product </p>
                            <h3 class="name">Buffalo Wings</h3>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-lg-3 item">
                    <div class="box" style="background-image:url(userasset/img/ck5.jpg)">
                        <div class="cover">
                            <p class="title">New Product </p>
                            <h3 class="name">Buffalo Wings</h3>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-lg-3 item">
                    <div class="box" style="background-image:url(userasset/img/ck6.jpg)">
                        <div class="cover">
                            <p class="title">New Product </p>
                            <h3 class="name">Korean Sweet Wings</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <section class="card-section-imagia" style="padding-top: -53px;background-color: rgb(230,222,221);">
        <h1 style="color: rgb(248,157,19);font-family: 'Black Han Sans', sans-serif;letter-spacing: 6px;">Holiday Discount</h1>
        <h2 style="font-family: Lato, sans-serif;">Posset maiora firmatum nunc cuniculis</h2>
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-md-4">
                    <div class="card-container-imagia">
                        <div class="card-imagia">
                            <div class="front-imagia">
                                <div class="cover-imagia"><img src="userasset/img/menu-bg.jpg" alt=""></div>
                                <div class="user-imagia"><img src="userasset/img/birthday.png" class="img-circle" alt=""></div>
                                <div class="content-imagia">
                                    <h3 class="name-imagia">Valentines Day</h3>
                                    <p class="subtitle-imagia">Discount </p>
                                    <p class="text-center"><em>We are taking it to the next level we give 10% discount in every purchase on Febuary 14th.</em></p>
                                </div>
                                <div class="footer-imagia"><span><i class="fa fa-plus"></i> More info</span></div>
                            </div>
                            <div class="back-imagia">
                                <div class="content-imagia content-back-imagia">
                                    <div>
                                        <h3 class="text-center" style="font-family: 'Black Han Sans', sans-serif;color: rgb(248,157,19);">Valentines Day</h3>
                                        <p class="text-center" style="font-family: Lato, sans-serif;">Valentine's Day, also called Saint Valentine's Day or the Feast of Saint Valentine, is celebrated annually on February 14. It originated as a Western Christian feast day honoring one or two early saints named Valentinus. </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4">
                    <div class="card-container-imagia">
                        <div class="card-imagia">
                            <div class="front-imagia">
                                <div class="cover-imagia"><img src="userasset/img/menu-bg.jpg" alt=""></div>
                                <div class="user-imagia"><img src="userasset/img/toga.png" class="img-circle" alt=""></div>
                                <div class="content-imagia">
                                    <h3 class="name-imagia">Graduation Day</h3>
                                    <p class="subtitle-imagia">Discount </p>
                                    <p class="text-center"><em>Congratulations! We will have a special offer of chicken deals in every first week of June. </em></p>
                                </div>
                                <div class="footer-imagia"><span><i class="fa fa-plus"></i> More info</span></div>
                            </div>
                            <div class="back-imagia">
                                <div class="content-imagia content-back-imagia">
                                    <div>
                                        <h3 class="text-center" style="font-family: 'Black Han Sans', sans-serif;color: rgb(248,157,19);">Graduation Day</h3>
                                        <p class="text-center" style="font-family: Lato, sans-serif;">Graduation is getting a diploma or academic degree or the ceremony that is sometimes associated with it, in which students become graduates. Before the graduation, candidates are referred to as graduands. The date of graduation is often called graduation day. </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4">
                    <div class="card-container-imagia">
                        <div class="card-imagia">
                            <div class="front-imagia">
                                <div class="cover-imagia"><img src="userasset/img/menu-bg.jpg" alt=""></div>
                                <div class="user-imagia"><img src="userasset/img/xmastree.png" class="img-circle" alt=""></div>
                                <div class="content-imagia">
                                    <h3 class="text-center">Christmas Day</h3>
                                    <p class="subtitle-imagia">Discount </p>
                                    <p class="text-center"><em>Merry Christmas! Enjoy a variety of chicken for this holiday. We give 15% discount every December 25th.</em></p>
                                </div>
                                <div class="footer-imagia"><span><i class="fa fa-plus"></i> More info</span></div>
                            </div>
                            <div class="back-imagia">
                                <div class="content-imagia content-back-imagia">
                                    <div>
                                        <h3 class="text-center" style="color: rgb(248,157,19);font-family: 'Black Han Sans', sans-serif;">Christmas Day</h3>
                                        <p class="text-center" style="font-family: Lato, sans-serif;">Christmas is an annual festival, commemorating the birth of Jesus Christ, observed primarily on December 25 as a religious and cultural celebration among billions of people around the world. </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
       <footer style="margin-top: 3px;background-color: rgb(27,18,15);">
        <div class="row">
            <div class="col-sm-6 col-md-4 footer-navigation">
                <h3><a href="#"><img src="userasset/img/sojubtry.png" style="width: 226px;height: 87px;"></a></h3>
                <p class="company-name"
                    style="font-family: Lato, sans-serif;">Chicken Ween's 2go © 2019 </p>
            </div> <div class="col-md-4 footer-about">
                <h4 style="font-family: Roboto, sans-serif;">About the company</h4>
                <p style="font-family: Lato, sans-serif;"> Chicken Ween's 2go was establish last March 2017, that specialize in flavored chicken wings. </p>
                <div class="social-links social-icons"><a href="#" title="Facebook"><i class="fa fa-facebook"></i></a><a href="#"><i class="fa fa-twitter"></i></a><a target="_blank" rel="noopener noreferrer" href="https://www.instagram.com/chickenweens2go/?hl=en" title="Instagram"><i class="fa fa-instagram" ></i></a><a target="_blank" rel="noopener noreferrer" href="User%20Manual.pdf" title="User Manual"><i class="fa fa-book"></i></a></div>
            </div>
            <div class="col-sm-6 col-md-4 footer-contacts">
                <div><span class="fa fa-map-marker footer-contacts-icon"> </span>
                    <p style="font-family: Lato, sans-serif;"><span class="new-line-span" style="font-family: Roboto, sans-serif;">Califonia Garden Square</span> Mandaluyong City</p>
                </div>
            </div>
            <div class="clearfix"></div>
           
        </div>
    </footer>
    <script src="userasset/js/jquery.min.js"></script>
    <script src="userasset/bootstrap/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js"></script>
    <script src="userasset/js/creative.js"></script>
    <script src="userasset/js/--mp---Testimonials-Slider.js"></script>
    <script src="https://www.youtube.com/iframe_api"></script>
    <script src="userasset/js/Dynamically-Queue-Videos.js"></script>
    <script src="userasset/js/Animated-Pretty-Product-List-v12.js"></script>
    <script src="userasset/js/bs-animation.js"></script>
    <script src="userasset/js/Card-hover-affect-1.js"></script>
    <script src="userasset/js/Grid-and-List-view-V10.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.1.1/aos.js"></script>
    <script src="https://use.fontawesome.com/1744f3f671.js"></script>
    <script src="userasset/js/Profile-Edit-Form.js"></script>
    <script src="userasset/js/Subscribe-window.js"></script>
    <script src="userasset/js/Testimonial-Slider-9.js"></script>
    <script src="userasset/js/Video-Parallax-Background-v2.js"></script>
    <script src="userasset/js/Video-Parallax-Background.js"></script>
    <!-- Go to www.addthis.com/dashboard to customize your tools -->
    <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5c63d0112981ca8c"></script>


</body>

</html>