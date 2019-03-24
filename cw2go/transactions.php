<?php
include('./includes/user-transactions.php');
 ?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Weens Transaction</title>
    <link rel="stylesheet" href="userasset/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="userasset/fonts/simple-line-icons.min.css">
    <link rel="stylesheet" href="userasset/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Black+Han+Sans">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="userasset/css/Pretty-Footer.css">
    <link rel="shortcut icon" href="userasset/img/icon.png" type="image/x-icon" />
    <link rel="stylesheet" href="userasset/css/Review-rating-Star-Review-Button-1.css">
    <link rel="stylesheet" href="userasset/css/Review-rating-Star-Review-Button.css">
    <link rel="stylesheet" href="userasset/css/Reviews.css">
</head>
<body style="padding-top: 118px;">
  <?php
    include('./includes/header-user.html');
    if(isset($_SESSION['checkout_msg'])){
    $checkout_msg = $_SESSION['checkout_msg'];
    echo '<h4>'. $checkout_msg . '</h4>';
    unset($_SESSION['checkout_msg']);
  }
  ?>
  
  <h1 class="my-4" style="font-family: 'Black Han Sans', sans-serif;color: rgb(246,164,40);letter-spacing: 6px; margin-left: 90px;">Order Transaction</h1>
  <?php while($row = mysqli_fetch_array($display_result, MYSQLI_ASSOC))
   {
    echo'<div class="container">
    <div class="row">
      <div class="col-md-5 mb-4">
        <div class="card h-100">
          <div class="card-body">';
          echo '  <h4 class="card-title">Order ID #: '. $row['ID'] .'</h4>';
          echo '  <h6 class="text-muted card-subtitle mb-2">Total: '. $row['total'] .'</h6>';
          echo '  <h6 class="text-muted card-subtitle mb-2">Status: '. $row['status'] .'</h6>';

          echo'  <div class="container">
  	          <div class="row" style="margin-top:40px;">
  		          <div class="col-md-6">
      	           <div class="well well-sm">
                     <div class="text-right">
                       <a class="btn btn-success btn-green" href="#reviews-anchor" id="open-review-box">Leave a Review</a>
                     </div>
                     <div class="row" id="post-review-box" style="display:none;">
                       <div class="col-md-12">
                         <form accept-charset="UTF-8" action="" method="post">
                          <input id="ratings-hidden" name="rating" type="hidden">
                          <textarea class="form-control animated" cols="50" id="new-review" name="comment" placeholder="Enter your review here..." rows="5"></textarea>
                          <div class="text-right">
                            <div class="stars starrr" data-rating="0"></div>
                            <a class="btn btn-danger btn-sm" href="#" id="close-review-box" style="display:none; margin-right: 10px;">
                            <span class="glyphicon glyphicon-remove"></span>Cancel</a>
                            <button class="btn btn-success btn-md" type="submit">submit</button>
                          </div>
                        </form>
                      </div>
                    </div>
                  </div>
  		          </div>
  	          </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>';
} ?>
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

</body>

</html>
