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
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="userasset/css/Pretty-Footer.css">
    <link rel="stylesheet" href="userasset/css/Review-rating-Star-Review-Button-1.css">
    <link rel="stylesheet" href="userasset/css/Review-rating-Star-Review-Button.css">
    <link rel="stylesheet" href="userasset/css/Reviews.css">
</head>
<body style="padding-top: 98px;">
  <?php include('./includes/header-user.html'); ?>
  <div class="container">
      <h1 class="my-4" style="font-family: 'Black Han Sans', sans-serif;color: rgb(246,164,40);letter-spacing: 6px;">Your Cart</h1>
      <?php while($row = mysqli_fetch_array($display_result, MYSQLI_ASSOC)){
      echo '<div class="row">
        <div class="col-md-7 mb-4" style="width: 611px;">
          <div class="card h-100"><a href="#"><img class="img-fluid" src="http://placehold.it/700x300" style="width: 671px;"></a></div>
        </div>
        <div class="col-md-5 mb-4">
          <div class="card h-100">
            <div class="card-body">';
        echo' <h4 class="card-title" style="font-family: Roboto, sans-serif;">'. $row['product_name'] . '</h4>';
        echo' <h5 class="text-muted card-subtitle mb-2">' . $row['product_pieces'] . '</h5>';
        echo' <h5 class="text-muted card-subtitle mb-2">Quantity: ' . $row['cart_quantity'] . '</h5>';
        echo' <h5 class="text-muted card-subtitle mb-2">Product Price: ' . $row['product_price'] . '</h5>';
        echo' <h5 class="text-muted card-subtitle mb-2">Subtotal: ' . $row['subtotal'] . '</h5>';
        echo' <p class="card-text" style="font-family: Roboto, sans-serif;">'. $row['product_description'] . '</p>
              <a href="./includes/remove-from-cart.php?id=' . $row['ID'] . '" class="btn btn-primary" type="button" style="margin-top: 6px;">Remove<br></a>
            </div>
          </div>
        </div>
      </div>'; }
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
                <div class="social-links social-icons"><a href="#"><i class="fa fa-facebook"></i></a><a href="#"><i class="fa fa-twitter"></i></a><a target="_blank" rel="noopener noreferrer" href="https://www.instagram.com/chickenweens2go/?hl=en"><i class="fa fa-instagram" ></i></a></div>
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
</body>

</html>
