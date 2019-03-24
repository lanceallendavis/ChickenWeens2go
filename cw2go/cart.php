<?php
include('./includes/display-cart.php');
include('./includes/session-user.php');
 ?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Cart - Chicken Ween's 2Go</title>
    <link rel="stylesheet" href="userasset/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="userasset/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="userasset/fonts/simple-line-icons.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Black+Han+Sans">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">
    <link rel="shortcut icon" href="userasset/img/icon.png" type="image/x-icon" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="userasset/css/Pretty-Footer.css">
    <link rel="stylesheet" href="userasset/css/Review-rating-Star-Review-Button-1.css">
    <link rel="stylesheet" href="userasset/css/Review-rating-Star-Review-Button.css">
    <link rel="stylesheet" href="userasset/css/Reviews.css">
</head>
<body style="padding-top: 98px;">
  <nav class="navbar navbar-light navbar-expand-lg fixed-top text-center" id="mainNav" style="height: 98px;background-color: #1b120f;font-family: Lato, sans-serif;">
  <div class="container"><a class="navbar-brand js-scroll-trigger" href="user-page.php"><img src="userasset/img/sojubtry.png" style="height: 81px;width: 217px;margin-left: 28px;"></a><button class="navbar-toggler navbar-toggler-right" data-toggle="collapse" data-target="#navbarResponsive"
  type="button" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation" style="background-color: rgba(78,69,18,0);color: rgba(255,255,255,0.5);"><i class="fa fa-align-justify"></i></button>
    <div class="collapse navbar-collapse" id="navbarResponsive" style="color: rgb(230,222,221);padding-right: 27px;">
      <ul class="nav navbar-nav ml-auto" style="background-color: rgba(27,18,15,0.85);">
        <li class="nav-item" role="presentation"><a class="nav-link js-scroll-trigger" href="user-page.php" style="color: rgb(230,222,221);">Home</a></li>
        <li class="nav-item" role="presentation"><a class="nav-link" href="menu.php" style="color: rgb(230,222,221) ;">MENU</a></li>
        <li class="nav-item" role="presentation"><a class="nav-link js-scroll-trigger" href="cart.php" style="color: #f05f40 ;font-family: Lato, sans-serif;">Cart</a></li>
        <li class="nav-item" role="presentation"><img src="./images/user-images/<?php echo $_SESSION['user']['profile_photo']; ?>" alt="HTML5 Icon" style="width:40px;height:40px; border-radius: 20px;"></li>
        <li class="nav-item dropdown"><a class="dropdown-toggle nav-link" data-toggle="dropdown" aria-expanded="false" href="#" style="color: rgb(230,222,221);">PROFILE</a>
        <div class="dropdown-menu" role="menu" style="font-family: Lato, sans-serif;color: rgb(230,222,221);background-color: rgb(27,18,15);"><a class="dropdown-item" role="presentation" href="edit-profile.php" style="font-family: Lato, sans-serif;font-weight: bold;color: rgb(230,222,221);">EDIT PROFILE</a><a class="dropdown-item" role="presentation" href="transactions.php"
        style="font-weight: bold;color: rgb(230,222,221);">TRANSACTIONS</a><a class="dropdown-item" role="presentation" href="logout.php" style="font-weight: bold;color: rgb(230,222,221);">LOGOUT</a></div>
        </li>
      </ul>
    </div>
  </div>
</nav>
  <div class="container">
      <h1 class="my-4" style="font-family: 'Black Han Sans', sans-serif;color: rgb(246,164,40);letter-spacing: 6px;">Your Cart</h1>
      
      <div>
        <div class="container">
            <div class="row">
                <div class="col-md-3"></div>
                <div class="col-md-3">
                    <h1 class="text-center" style="font-family: 'Black Han Sans', sans-serif;color: rgb(27,18,15);font-size: 20px;letter-spacing: 3px;padding-top: 39px;">Product</h1>
                </div>
                <div class="col-md-3">
                    <h1 class="text-center" style="font-family: 'Black Han Sans', sans-serif;color: rgb(27,18,15);font-size: 20px;letter-spacing: 3px;padding-top: 39px;">Quantity</h1>
                </div>
                <div class="col-md-3">
                    <h1 style=" margin-left: 20px;font-family: 'Black Han Sans', sans-serif;color: rgb(27,18,15);font-size: 20px;letter-spacing: 3px;padding-top: 39px;">Price</h1>
                </div>
            </div>
        </div>
    </div>
    <div>
        <?php while($row = mysqli_fetch_array($display_result, MYSQLI_ASSOC)){
        echo '<div class="container">
            <div class="row">
                <div class="col-md-3"><img src="userasset/img/ck1.jpg" style="width: 175px;height: 115px; margin-left: 60px;"></div>
                <div class="col-md-3 text-center" style="padding-top: 20px;">';
                  echo'  <h1 style="font-weight: bold; font-family: Lato, sans-serif;font-size: 20px;">'. $row['product_name'] . '</h1>';
                  echo '  <p style="font-family: Roboto, sans-serif;">'. $row['product_description'] . '</p>
                </div>
                <div class="col-md-3">';
                  echo'  <h1 class="text-center" style="font-family: Lato, sans-serif;font-size: 20px;padding-top: 40px;">' . $row['cart_quantity'] . '</h1>';
              echo'  </div>
                <div class="col">';
                    echo'<h1 class="text-center" style="font-family: Lato, sans-serif;font-size: 20px;padding-top: 40px;">' . $row['product_price'] . '</h5>';
              echo' </div>
              <div class="col">';
            echo'<a href="./includes/remove-from-cart.php?id=' . $row['ID'] . '" class="btn btn-primary" type="button" style="margin-top: 40px;">Remove<br></a>
             </div>
            </div>
        </div>
     </div>'; 
    echo '<br>';
     }
      ?>
    <div class="row">
      <div class="col-md-7 mb-4"></div>
        <div class="col-md-5 mb-4">
          <div class="card h-100">
            <div class="card-body">
              <h6 class="text-muted card-subtitle mb-2">Food Total</h6>
              <h4 class="card-title"><?php $total_row = mysqli_fetch_array($display_total_result, MYSQLI_ASSOC); echo $total_row['total']; ?></h4>
              <input type="hidden" name="total" value=" <?php echo $total_row['total']; ?>">
              <h6 class="text-muted card-subtitle mb-2">Delivery Charge</h6>
              <h4 class="card-title">P60</h4>
              <h6 class="text-muted card-subtitle mb-2">Grand Total</h6>
              <h4 class="card-title"><?php echo $total_row['total']+60; ?></h4><a href="checkout.php"><button class="btn btn-primary" type="button" style="margin-top: 11px;background-color: rgb(246,164,40);">Proceed to Checkout<br></button></a>
            </div>
          </div>
        </div>
      </div>
  </div>
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.1.1/aos.js"></script>
    <script src="userasset/js/Review-rating-Star-Review-Button.js"></script>
    </div>
</body>

</html>
