<?php
   include('./includes/session-user.php');
   include('./includes/user-transactions-specific.php');

   $rows = [];


    while($a = mysqli_fetch_array($display_result, MYSQLI_ASSOC)) {
        $rows[] = $a;
    }
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
      <link rel="stylesheet" href="userasset/fonts/ionicons.min.css">
      <link rel="stylesheet" href="userasset/css/beautiful-danger-alert.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
      <link rel="stylesheet" href="userasset/css/styles.css">
   </head>
   <body style="padding-top: 118px;">
      <?php
         include('./includes/header-user.html');
         ?>
       <div class="container">
       <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?php echo 'transactions.php' ?>">Products</a></li>
            <li class="breadcrumb-item active" aria-current="page">Order Transaction: <?php echo date('F d, Y g:i A', strtotime($rows[0]['placed_at'])) ?></li>
          </ol>
        </nav>
       </div>
      <h1 class="my-4" style="font-family: 'Black Han Sans', sans-serif;color: rgb(246,164,40);letter-spacing: 6px; margin-left: 180px;">Order Transaction: <?php echo $_GET['order_id'] ?></h1>
       <div class="container">
          <div class="row">
             <div class="col-md-12">
                <div class="card">
                   <div class="card-body">
                      <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
                         <thead>
                            <tr>
                               <th style="color: #1b120f;">ID</th>
                               <th style="color: #1b120f">Product Name</th>
                               <th style="color: #1b120f">Pieces</th>
                               <th style="color: #1b120f">Subtotal</th>
                            </tr>
                         <tbody>
                            <?php foreach($rows as $row): ?>
                               <tr>
                                   <td><?php echo $row['ID'] ?></td>
                                   <td><?php echo $row['name'] ?></td>
                                   <td><?php echo $row['pieces'] ?></td>
                                   <td><?php echo $row['subtotal'] ?></td>
                               </tr>
                            <?php endforeach ?>
                         </tbody>
                      </table>
                   </div>
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
            </div>
            <div class="col-md-4 footer-about">
               <h4 style="font-family: Roboto, sans-serif;">About the company</h4>
               <p style="font-family: Lato, sans-serif;"> Chicken Ween's 2go was establish last March 2017, that specialize in flavored chicken wings. </p>
               <div class="social-links social-icons"><a href="#" title="Facebook"><i class="fa fa-facebook"></i></a><a href="#"><i class="fa fa-twitter"></i></a><a target="_blank" rel="noopener noreferrer" href="https://www.instagram.com/chickenweens2go/?hl=en" title="Instagram"><i class="fa fa-instagram" ></i></a><a target="_blank" rel="noopener noreferrer" href="User%20Manual.pdf" title="User Manual"><i class="fa fa-book"></i></a></div>
            </div>
            <div class="col-sm-6 col-md-4 footer-contacts">
               <div>
                  <span class="fa fa-map-marker footer-contacts-icon"> </span>
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
