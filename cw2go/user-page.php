<?php
session_start();
if(!isset($_SESSION['role']) or ($_SESSION['role'] !== 'user')){
  header('location: index.php');
}
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Untitled</title>
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
    <link rel="stylesheet" href="userasset/css/NMDIG-Testimonials.css">
    <link rel="stylesheet" href="userasset/css/Team-Boxed.css">
    <link rel="stylesheet" href="userasset/css/Team-Grid.css">
    <link rel="stylesheet" href="userasset/css/Team-with-rotating-cards.css">
</head>

<body>
  <?php include('./includes/header-user.html'); ?>
  <div class="highlight-phone" style="padding-top: 136px;background-color: rgb(230,222,221);height: 543px;">
    <div class="container">
      <div class="row" style="height: 342px;">
        <div class="col-sm-5"><img style="background-image: url(&quot;userasset/img/loop.gif&quot;);width: 436px;height: 316px;margin-top: 16px;"></div>
        <div class="col-md-7">
          <div class="intro" style="margin-top: 24px;padding-top: 1px;">
            <h2 data-aos="fade-up" data-aos-duration="250" data-aos-delay="150" style="font-family: 'Black Han Sans', sans-serif;color: rgb(237,90,58);letter-spacing: 7px;margin-top: 26px;">Highlights</h2>
            <p data-aos="fade-up" data-aos-duration="250" data-aos-delay="150" style="font-family: Lato, sans-serif;font-size: 19px;margin-top: -8px;">Nunc luctus in metus eget fringilla. Aliquam sed justo ligula. Vestibulum nibh erat, pellentesque ut laoreet vitae. Aliqua sed justo ligula.</p><a class="btn btn-primary" role="button" href="#" data-bs-hover-animate="tada" style="background-color: rgb(248,157,19);font-family: Lato, sans-serif;">START ORDERING</a>
          </div>
        </div>
      </div>
    </div>
  </div>
    <section style="height: 377px;background-color: #e6dedd;">
        <div class="container" style="height: 362px; padding-bottom: 90px">
            <div class="row" style="margin-top: -121px;padding-left: 62px;padding-top: 36px;"><div class="col"><figure class="snip1573">
  <img src="userasset/img/ck1.jpg" alt="sample89" />
  <figcaption>
    <h3>Buy Now</h3>
  </figcaption>
  <a href="#"></a>
</figure>
<figure class="snip1573 hover"><img src="userasset/img/ck3.jpg" alt="sample94" />
  <figcaption>
    <h3>Buy Now</h3>
  </figcaption>
  <a href="#"></a>
</figure>
<figure class="snip1573"><img src="userasset/img/ck2.jpg" alt="sample92" />
  <figcaption>
    <h3>Buy Now</h3>
  </figcaption>
  <a href="#"></a>
</figure></div></div>
        </div>
    </section>
    <div style="height: 80px; background-color: transparent;"></div>
    <div class="team-grid" style="background-color: rgb(27,18,15);">
        <div class="container">
            <div class="intro">
                <h2 class="text-center" style="font-family: 'Black Han Sans', sans-serif;color: rgb(246,164,40);letter-spacing: 7px;">New Arrivals</h2>
                <p class="text-center">Nunc luctus in metus eget fringilla. Aliquam sed justo ligula. Vestibulum nibh erat, pellentesque ut laoreet.&nbsp; </p>
            </div>
            <div class="row people">
                <div class="col-md-4 col-lg-3 item">
                    <div class="box" style="background-image:url(userasset/img/1.jpg)">
                        <div class="cover">
                            <h3 class="name">Ben Johnson</h3>
                            <p class="title">Musician</p>
                            <div class="social"><a href="#"><i class="fa fa-facebook-official"></i></a><a href="#"><i class="fa fa-twitter"></i></a><a href="#"><i class="fa fa-instagram"></i></a></div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-lg-3 item">
                    <div class="box" style="background-image:url(userasset/img/2.jpg)">
                        <div class="cover">
                            <h3 class="name">Emily Clark</h3>
                            <p class="title">Artist </p>
                            <div class="social"><a href="#"><i class="fa fa-facebook-official"></i></a><a href="#"><i class="fa fa-twitter"></i></a><a href="#"><i class="fa fa-instagram"></i></a></div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-lg-3 item">
                    <div class="box" style="background-image:url(userasset/img/3.jpg)">
                        <div class="cover">
                            <h3 class="name">Carl Kent</h3>
                            <p class="title">Stylist </p>
                            <div class="social"><a href="#"><i class="fa fa-facebook-official"></i></a><a href="#"><i class="fa fa-twitter"></i></a><a href="#"><i class="fa fa-instagram"></i></a></div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-lg-3 item">
                    <div class="box" style="background-image:url(userasset/img/4.jpg)">
                        <div class="cover">
                            <h3 class="name">Felicia Adams</h3>
                            <p class="title">Model </p>
                            <div class="social"><a href="#"><i class="fa fa-facebook-official"></i></a><a href="#"><i class="fa fa-twitter"></i></a><a href="#"><i class="fa fa-instagram"></i></a></div>
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
                                <div class="cover-imagia"><img src="https://unsplash.it/720/500?image=1067" alt=""></div>
                                <div class="user-imagia"><img src="https://unsplash.it/120/120?image=64" class="img-circle" alt=""></div>
                                <div class="content-imagia">
                                    <h3 class="name-imagia">John Doe</h3>
                                    <p class="subtitle-imagia">Subtitle </p>
                                    <p class="text-center"><em>Tantum autem cuique tribuendum, primum quantum ipse efficere possis, deinde etiam quantum ille quem diligas atque adiuves.</em></p>
                                </div>
                                <div class="footer-imagia"><span><i class="fa fa-plus"></i> More info</span></div>
                            </div>
                            <div class="back-imagia">
                                <div class="content-imagia content-back-imagia">
                                    <div>
                                        <h3 class="text-center" style="font-family: 'Black Han Sans', sans-serif;color: rgb(248,157,19);">Lorem Ipsum</h3>
                                        <p class="text-center" style="font-family: Lato, sans-serif;">Et hanc quidem praeter oppida multa duae civitates exornant Seleucia opus Seleuci regis, et Claudiopolis quam deduxit coloniam Claudius Caesar. Isaura enim antehac nimium potens, olim subversa ut rebellatrix interneciva
                                            aegre vestigia claritudinis pristinae monstrat admodum pauca. </p>
                                    </div>
                                </div>
                                <div class="footer-imagia">
                                    <div class="social-imagia text-center"><a href="#"><i class="fa fa-facebook"></i></a><a href="#"><i class="fa fa-linkedin"></i></a><a href="#"><i class="fa fa-twitter"></i></a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4">
                    <div class="card-container-imagia">
                        <div class="card-imagia">
                            <div class="front-imagia">
                                <div class="cover-imagia cover-gradient"></div>
                                <div class="user-imagia"><img src="https://unsplash.it/120/120?image=64" class="img-circle" alt=""></div>
                                <div class="content-imagia">
                                    <h3 class="name-imagia">John Doe</h3>
                                    <p class="subtitle-imagia">Subtitle </p>
                                    <p class="text-center"><em>Tantum autem cuique tribuendum, primum quantum ipse efficere possis, deinde etiam quantum ille quem diligas atque adiuves. </em></p>
                                </div>
                                <div class="footer-imagia"><span><i class="fa fa-plus"></i> More info</span></div>
                            </div>
                            <div class="back-imagia">
                                <div class="content-imagia content-back-imagia">
                                    <div>
                                        <h3 class="text-center" style="font-family: 'Black Han Sans', sans-serif;">Lorem Ipsum</h3>
                                        <p class="text-center" style="font-family: Lato, sans-serif;">Et hanc quidem praeter oppida multa duae civitates exornant Seleucia opus Seleuci regis, et Claudiopolis quam deduxit coloniam Claudius Caesar. Isaura enim antehac nimium potens, olim subversa ut rebellatrix interneciva
                                            aegre vestigia claritudinis pristinae monstrat admodum pauca. </p>
                                    </div>
                                </div>
                                <div class="footer-imagia">
                                    <div class="social-imagia text-center"><a href="#"><i class="fa fa-facebook"></i></a><a href="#"><i class="fa fa-linkedin"></i></a><a href="#"><i class="fa fa-twitter"></i></a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4">
                    <div class="card-container-imagia">
                        <div class="card-imagia">
                            <div class="front-imagia">
                                <div class="cover-imagia"><img src="https://unsplash.it/720/500?image=1067" alt=""></div>
                                <div class="user-imagia"><img src="https://unsplash.it/120/120?image=64" class="img-circle" alt=""></div>
                                <div class="content-imagia">
                                    <h3 class="name-imagia">John Doe</h3>
                                    <p class="subtitle-imagia">Subtitle </p>
                                    <p class="text-center"><em>Tantum autem cuique tribuendum, primum quantum ipse efficere possis, deinde etiam quantum ille quem diligas atque adiuves. </em></p>
                                </div>
                                <div class="footer-imagia"><span><i class="fa fa-plus"></i> More info</span></div>
                            </div>
                            <div class="back-imagia">
                                <div class="content-imagia content-back-imagia">
                                    <div>
                                        <h3 class="text-center" style="color: rgb(248,157,19);font-family: 'Black Han Sans', sans-serif;">Lorem Ipsum</h3>
                                        <p class="text-center" style="font-family: Lato, sans-serif;">Et hanc quidem praeter oppida multa duae civitates exornant Seleucia opus Seleuci regis, et Claudiopolis quam deduxit coloniam Claudius Caesar. Isaura enim antehac nimium potens, olim subversa ut rebellatrix interneciva
                                            aegre vestigia claritudinis pristinae monstrat admodum pauca. </p>
                                    </div>
                                </div>
                                <div class="footer-imagia">
                                    <div class="social-imagia text-center"><a href="#"><i class="fa fa-facebook"></i></a><a href="#"><i class="fa fa-linkedin"></i></a><a href="#"><i class="fa fa-twitter"></i></a></div>
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
                <p class="links" style="font-family: Roboto, sans-serif;"><a href="#">Home</a><strong> · </strong><a href="#">Blog</a><strong> · </strong><a href="#">Pricing</a><strong> · </strong><a href="#">About</a><strong> · </strong><a href="#">Faq</a><strong> · </strong><a href="#">Contact</a></p>
                <p class="company-name"
                    style="font-family: Lato, sans-serif;">Company Name © 2015 </p>
            </div>
            <div class="col-sm-6 col-md-4 footer-contacts">
                <div><span class="fa fa-map-marker footer-contacts-icon"> </span>
                    <p style="font-family: Lato, sans-serif;"><span class="new-line-span" style="font-family: Roboto, sans-serif;">21 Revolution Street</span> Paris, France</p>
                </div>
                <div><i class="fa fa-phone footer-contacts-icon"></i>
                    <p class="footer-center-info email text-left" style="font-family: Lato, sans-serif;"> +1 555 123456</p>
                </div>
                <div><i class="fa fa-envelope footer-contacts-icon"></i>
                    <p> <a href="#" target="_blank" style="font-family: Roboto, sans-serif;">support@company.com</a></p>
                </div>
            </div>
            <div class="clearfix"></div>
            <div class="col-md-4 footer-about">
                <h4 style="font-family: Roboto, sans-serif;">About the company</h4>
                <p style="font-family: Lato, sans-serif;"> Lorem ipsum dolor sit amet, consectateur adispicing elit. Fusce euismod convallis velit, eu auctor lacus vehicula sit amet. </p>
                <div class="social-links social-icons"><a href="#"><i class="fa fa-facebook"></i></a><a href="#"><i class="fa fa-twitter"></i></a><a href="#"><i class="fa fa-linkedin"></i></a><a href="#"><i class="fa fa-github"></i></a></div>
            </div>
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
</body>

</html>
