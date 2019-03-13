<?php
  session_start();
  include('./includes/menu.inc.php');
  if(!isset($_SESSION['role']) or ($_SESSION['role'] !== 'user')){
    header('location: index.php');
  }
 ?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
  <title>Ween's Menu</title>
  <link rel="stylesheet" href="userasset/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic">
  <link rel="stylesheet" href="userasset/fonts/font-awesome.min.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Black+Han+Sans">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">
  <link rel="stylesheet" href="userasset/css/Animated-Pretty-Product-List-v12.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
  <link rel="stylesheet" href="userasset/css/MUSA_carousel-product-cart-slider-1.css">
  <link rel="stylesheet" href="userasset/css/Pretty-Footer.css">
  <link rel="stylesheet" href="userasset/css/MUSA_carousel-product-cart-slider.css">
</head>
<body>

  <?php include('./includes/header-user.html'); ?>
  <div class="container" style="padding-top: 112px;padding-bottom: 58px;">
  <div class="row product-list dev">
  <?php
  while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){

  echo '<div class="col-sm-6 col-md-4 product-item animation-element slide-rotate-counterclockwise-180">';
  echo '  <div class="product-container">';
  echo '  <div class="row">';
  echo '  <div class="col-md-12"><a href="#" class="product-image"><img src="./images/product-images/' . $row['product_image'] . '"></a></div>';
  echo '  </div>';
  echo '<div class="row">';
  echo '  <div class="col-8">';
  echo '    <h2>'. $row['name'] . '</a></h2>';
  
  echo '  </div>';
  echo '    <div class="col-4"><form action="./includes/add-to-cart.php" method="post">';
  echo '<div class="dropdown"><select name="quantity">
  <option class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-expanded="true" style="padding-right: 3px;margin-left: -14px;height: 43px;width: 117px;background-color: rgb(248,157,19);" value="1">QUANTITY</option>';
  echo '<div class="dropdown-menu" role="menu">
  <option value="1" class="dropdown-item" role="presentation">1</option>
  <option value="2" class="dropdown-item" role="presentation" >2</option>
  <option value="3" class="dropdown-item" role="presentation">3</a></div>
  <option value="4" class="dropdown-item" role="presentation">4</option>
  <option value="5" class="dropdown-item" role="presentation" >5</option>
  <option value="6" class="dropdown-item" role="presentation">6</a></div>
  <option value="7" class="dropdown-item" role="presentation">7</option>
  <option value="8" class="dropdown-item" role="presentation" >8</option>
  <option value="9" class="dropdown-item" role="presentation">9</a></div>
  <option value="10" class="dropdown-item" role="presentation">10</a></div>';
  echo '</select></div>';
  echo '  </div>';
  echo '  </div>';
  echo '<div class="product-rating"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-half"></i><a href="#" class="small-text">82 reviews</a></div>';
  echo '    <div class="row">';
  echo '    <div class="col-12">';
  echo '  <p class="product-description">' . $row['description'] . ' </p>';
  echo '    <div class="row">';
  echo '    <div class="col-6"><form action="./includes/add-to-cart.php" method="post">
            <input type="hidden" name="product_ID" value=' . $row['ID'] . '>
            <button class="btn btn-light" type="submit" style="background-color: rgb(235,56,18);">Add to Cart </button></div></form>';
  echo '    <div class="col-6">';
  echo '  <p class="product-price">₱ '. $row['price'] . '</p>';
  echo '</div>';
  echo '    </div>';
  echo '    </div>';
  echo '  </div>';
  echo '  </div>';
  echo '    </div>';
}
  ?>
</div>
</div>
  <!-- FOOTER -->
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
