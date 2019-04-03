<?php
include('./includes/session-user.php');
include('./includes/display-cart.php');
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
    <link rel="stylesheet" href="userasset/fonts/ionicons.min.css">
    <link rel="stylesheet" href="userasset/css/beautiful-danger-alert.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
    <link rel="stylesheet" href="userasset/css/styles.css">
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
      <a href="menu.php"><button class="btn btn-primary"  style="margin-top: 11px;background-color: rgb(246,164,40); float: right;">GO TO MENU ><br></button></a>

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
        <?php
        if(isset($_SESSION['messages']['limit'])){
          echo '<div class=alert alert-success border-danger shake animated" role="alert" id="save-sucess" style="background-color: rgba(220,148,148,0.72);border: 1px solid #c70707;"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button><i class="icon ion-android-warning mr-1" style="color: rgb(195,151,37);"></i><span style="color: rgb(41,31,7);">' . $_SESSION['messages']['limit'] . '</span></div>';
          unset($_SESSION['messages']['limit']);
        }

        if($total_row['total'] == NULL || isset($_SESSION['messages']['noAdded'])){
            echo '<div class=alert alert-success border-danger shake animated" role="alert" id="save-sucess" style="background-color: rgba(186, 186, 62, 0.72);border: 1px solid rgb(246,164,40);"><i class="icon ion-android-warning mr-1" style="color: rgb(195,151,37);"></i><span style="color: rgb(41,31,7);">' . $_SESSION['messages'] ['noAdded'] = 'You did not add any product' . '</span></div>';
            unset($_SESSION['messages']['noAdded']);
        }
        else
        {
        while($row = mysqli_fetch_array($display_result, MYSQLI_ASSOC)){
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
            echo'<a href="./includes/remove-from-cart.php?id=' . $row['ID'] . '&product_id=' . $row['product_ID'] . '" class="btn btn-primary" type="button" style="margin-top: 40px;">Remove<br></a>
             </div>
            </div>
        </div>
     </div>';
    echo '<br>';
     }
   }

      ?>
    <div class="row">
      <div class="col-md-7 mb-4"></div>
        <div class="col-md-5 mb-4">
          <div class="card h-100">
            <div class="card-body">
              <form action='./checkout.php' method='post'>
              <input type="hidden" name="action" value="checkout">
              <input type="hidden" name="user_ID" value="<?php echo $userID ?>">
              <h4 class="text-muted card-subtitle mb-2">Food Total</h4>
              <h4 class="card-title">₱<?php if($total_row['total'] == NULL) { echo '0';} else {echo $total_row['total'];} ?></h4>
              <input type="hidden" name="total" value=" <?php echo $total_row['total']; ?>">
              <h4 class="text-muted card-subtitle mb-2">Mode of Payment</h4>
              <select name="modeOfPayment" id="modeOfPayment" onChange="javascript:modeOfPaymentCheck();">
                <option id="cashOnPickUp" value="Cash On Pick-Up"  selected>Cash On Pick-Up</option>
                <option id="cashOnDelivery" value="Cash On Delivery">Cash On Delivery</option>

              </select>
              <br>
              <div id="cashOnDeliveryInputs" style="visibility:hidden">
              <h4 class="text-muted card-subtitle mb-2" style="margin-top: 2px;">Delivery Address</h4>
              <h6>User Your personal Address   <input type="radio" onclick="javascript:addressCheck();" name="address" value="personalAddress" id="personalCheck" checked></h6>
              <h6>Use another Delivery Address <input type="radio" onclick="javascript:addressCheck();" name="address" value="anotherAddress" id="anotherCheck"></h6>
              <div id="ifAnother" style="visibility:hidden">
                <select name="city">
                  <option value="Makati">Makati</option>
                  <option value="Manila">Manila</option>
                  <option value="Caloocan">Caloocan</option>
                  <option value="LasPinas">LasPinas</option>
                  <option value="Malabon">Malabon</option>
                  <option value="Marikina">Marikina</option>
                  <option value="Muntinlupa">Muntinlupa</option>
                  <option value="Navotas">Navotas</option>
                  <option value="Paranaque">Paranaque</option>
                  <option value="Pasay">Pasay</option>
                  <option value="Pasig">Pasig</option>
                  <option value="Quezon">Quezon</option>
                  <option value="San Juan">San</option>
                  <option value="Taguig">Taguig</option>
                  <option value="Valenzuela">Valenzuela</option>
                  <option value="Cavite">Cavite</option>

                </select>
              <input type="text" placeholder="address" name="address">
              </div>
            </div>
              <br>
              <button class="btn btn-primary" type="submit" style="margin-top: 11px;background-color: rgb(246,164,40);">Proceed to Checkout<br></button>
            </form>
              
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
    <script>
    function addressCheck() {
  if (document.getElementById('anotherCheck').checked) {
      document.getElementById('ifAnother').style.visibility = 'visible';
  }
  else document.getElementById('ifAnother').style.visibility = 'hidden';
}

function modeOfPaymentCheck() {
if (document.getElementById('cashOnDelivery').selected) {
  document.getElementById('cashOnDeliveryInputs').style.visibility = 'visible';
}
else
 document.getElementById('cashOnDeliveryInputs').style.visibility = 'hidden';
}


</script>
    </div>
</body>

</html>
