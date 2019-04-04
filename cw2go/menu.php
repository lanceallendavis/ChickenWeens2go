<?php
  include('./includes/session-user.php');
  include('./includes/menu.inc.php');


 ?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
  <title>Ween's Menu</title>
  <link rel="stylesheet" href="userasset/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="userasset/fonts/font-awesome.min.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Black+Han+Sans">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">
  <link rel="stylesheet" href="userasset/css/Animated-Pretty-Product-List-v12.css">
  <link rel="shortcut icon" href="userasset/img/icon.png" type="image/x-icon" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
  <link rel="stylesheet" href="userasset/css/MUSA_carousel-product-cart-slider-1.css">
  <link rel="stylesheet" href="userasset/css/Pretty-Footer.css">
  <link rel="stylesheet" href="userasset/css/MUSA_carousel-product-cart-slider.css">
    <link rel="stylesheet" href="userasset/fonts/ionicons.min.css">
</head>
<body>

  <nav class="navbar navbar-light navbar-expand-lg fixed-top text-center" id="mainNav" style="height: 98px;background-color: #1b120f;font-family: Lato, sans-serif;">
  <div class="container"><a class="navbar-brand js-scroll-trigger" href="user-page.php"><img src="userasset/img/sojubtry.png" style="height: 81px;width: 217px;margin-left: 28px;"></a><button class="navbar-toggler navbar-toggler-right" data-toggle="collapse" data-target="#navbarResponsive"
  type="button" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation" style="background-color: rgba(78,69,18,0);color: rgba(255,255,255,0.5);"><i class="fa fa-align-justify"></i></button>
    <div class="collapse navbar-collapse" id="navbarResponsive" style="color: rgb(230,222,221);padding-right: 27px;">
      <ul class="nav navbar-nav ml-auto" style="background-color: rgba(27,18,15,0.85);">
        <li class="nav-item" role="presentation"><a class="nav-link js-scroll-trigger" href="user-page.php" style="color: rgb(230,222,221);">Home</a></li>
        <li class="nav-item" role="presentation"><a class="nav-link active" href="menu.php" style="color: #f05f40 ;">MENU</a></li>
        <li class="nav-item" role="presentation"><a class="nav-link js-scroll-trigger" href="cart.php" style="color: rgb(230,222,221);font-family: Lato, sans-serif;">Cart</a></li>
        <li class="nav-item" role="presentation"><img src="./images/user-images/<?php echo $_SESSION['user']['profile_photo']; ?>" alt="HTML5 Icon" style="width:40px;height:40px; border-radius: 20px;"></li>
        <li class="nav-item dropdown"><a class="dropdown-toggle nav-link" data-toggle="dropdown" aria-expanded="false" href="#" style="color: rgb(230,222,221);">PROFILE</a>
        <div class="dropdown-menu" role="menu" style="font-family: Lato, sans-serif;color: rgb(230,222,221);background-color: rgb(27,18,15);"><a class="dropdown-item" role="presentation" href="edit-profile.php" style="font-family: Lato, sans-serif;font-weight: bold;color: rgb(230,222,221);">EDIT PROFILE</a><a class="dropdown-item" role="presentation" href="transactions.php"
        style="font-weight: bold;color: rgb(230,222,221);">TRANSACTIONS</a><a class="dropdown-item" role="presentation" href="logout.php" style="font-weight: bold;color: rgb(230,222,221);">LOGOUT</a></div>
        </li>
      </ul>
    </div>
  </div>
</nav>
  <div class="container" style="padding-top: 112px;padding-bottom: 58px;">
  <div class="row product-list dev">
  <?php
  if($result->num_rows != 0 ){
  while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
  if(!($row['stock_count'] < 22) ){
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
  echo '<div class="dropdown-menu" role="menu">';
  if($row['stock_count']>= 12){ echo '<option value="1" class="dropdown-item" role="presentation">1</option>';}
  if($row['stock_count']>= 24){ echo '<option value="2" class="dropdown-item" role="presentation" >2</option>';}
  if($row['stock_count']>= 36){ echo '<option value="3" class="dropdown-item" role="presentation">3</a></div>';}
  if($row['stock_count']>= 48){ echo '<option value="4" class="dropdown-item" role="presentation">4</option>';}
  if($row['stock_count']>= 60){ echo '<option value="5" class="dropdown-item" role="presentation" >5</option>';}
  if($row['stock_count']>= 72){ echo '<option value="6" class="dropdown-item" role="presentation">6</a></div>';}
  if($row['stock_count']>= 84){ echo '<option value="7" class="dropdown-item" role="presentation">7</option>';}
  if($row['stock_count']>= 96){ echo '<option value="8" class="dropdown-item" role="presentation" >8</option>';}
  if($row['stock_count']>= 108){ echo '<option value="9" class="dropdown-item" role="presentation">9</a></div>';}
  if($row['stock_count']>= 120){ echo '<option value="10" class="dropdown-item" role="presentation">10</a></div>';}
  echo '</select></div>';
  echo '  </div>';
  echo '  </div>';
  echo '<div class="product-rating"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-half"></i><a href="#" class="small-text">82 reviews</a></div>';
  echo '    <div class="row">';
  echo '    <div class="col-12">';
  echo '  <p class="product-description">' . $row['description'] . ' </p>';
  echo '    <div class="row">';
  echo '    <div class="col-6"><form action="./includes/add-to-cart.php" method="post">
            <input type="hidden" name="product_ID" value=' . $row['product_ID'] . '>
            <button class="btn btn-light" type="submit" style="background-color: rgb(235,56,18);">Add to Cart </button></div></form>';
  echo '    <div class="col-6">';
  echo '  <p class="product-price">₱ '. $row['price'] . '.00</p>';
  echo '</div>';
  echo '    </div>';
  echo '    </div>';
  echo '  </div>';
  echo '  </div>';
  echo '    </div>';
}
}
}
else echo 'Sorry, there are no available products at the moment. Please try again another time.';


  ?>
</div>
</div>
  <!-- FOOTER -->
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
</body>

</html>
