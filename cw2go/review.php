<?php
require_once('./includes/session-admin.php');
?>
<!doctype html>
<html class="no-js" lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Ween's Admin Page</title>
    <meta name="description" content="Sufee Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="apple-touch-icon" href="apple-icon.png">
    <link rel="stylesheet" href="vendors/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="vendors/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="vendors/themify-icons/css/themify-icons.css">
    <link rel="stylesheet" href="vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="vendors/selectFX/css/cs-skin-elastic.css">
    <link rel="stylesheet" href="vendors/selectFX/css/table.css">
    <link rel="shortcut icon" href="userasset/img/icon.png" type="image/x-icon" />
    <link rel="stylesheet" href="vendors/jqvmap/dist/jqvmap.min.css">
    <link rel="stylesheet" href="assets/css/adminstyle.css">
    <link rel="stylesheet" href="assets/css/table.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Black+Han+Sans">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>
</head>

<body>
<aside id="left-panel" class="left-panel">
  <nav class="navbar navbar-expand-sm navbar-default">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
      <i class="fa fa-bars"></i>
    </button>
    <a class="navbar-brand" href="admin-page.php"><img src="images/sojubtry.png" alt="Logo" style="margin-top: 10px;"></a>
      <ul class="nav navbar-nav">
        <li class="menu-item-has-children dropdown">
          <a href="admin-page.php"> <i class="menu-icon fa fa-dashboard"></i>Dashboard </a>
        </li>
        <li class="menu-item-has-children dropdown">
          <a href="admin-userslist.php" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-users"></i>Users</a>
        </li>
        <li class="menu-item-has-children dropdown">
          <a href="admin-products.php" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-book"></i>Products</a>
        </li>
        <h3 class="menu-title">Orders</h3>
        <li class="menu-item-has-children dropdown">
          <a href="pending-orders.php" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-clock-o"></i>Pending Orders</a>
        </li>
        <li class="menu-item-has-children dropdown">
          <a href="accepted-orders.php" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-check-circle"></i>Accepted Orders</a>
        </li>
        <li class="menu-item-has-children dropdown">
          <a href="declined-orders.php" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-minus-square"></i>Declined Orders</a>
        </li>
        <li class="menu-item-has-children dropdown">
          <a href="delivered-orders.php" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-truck"></i>Delivered Orders</a>
        </li>
        <li class="menu-item-has-children dropdown">
          <a href="daily-sales.php" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa  fa-bar-chart-o"></i>Daily Sales</a>
        </li>
        <li class="active">
          <a href="sales-by-product.php" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa  fa-bookmark-o"></i>Sales By Product</a>
        </li>
        <li class="menu-item-has-children dropdown">
          <a href="admin-all-orders.php" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa   fa-sort"></i>Orders Summary</a>
        </li>
        <li class="menu-item-has-children dropdown">
          <a href="admin-locations.php" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa   fa-location-arrow"></i>Locations</a>
        </li>
      </ul>
  </nav>
</aside>
    <div id="right-panel" class="right-panel">
    <?php include('./includes/header-admin2.html'); ?>
     <h1 data-aos="slide-up" style="padding-top: 30px;padding-left: 10px;font-family: 'Black Han Sans', sans-serif;letter-spacing: 6px;color: rgb(248,157,19);">Reviews</h1>
    <div style="padding-top: 0px;">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <h1 style="font-size: 17px;padding-top: 15px;font-family: Lato, sans-serif;font-weight: bold;">Username</h1>
                    <p style="font-family: Roboto, sans-serif;line-height: 15px;"><br>Lorem ipsum dolor am consectetur adipiscing elit. Nulla accumsan nunc eget orci posuere, id efficitur erat dignissim. Fusce sed ipsum felis. Etiam lobort<br></p>
                </div>
                <div class="col-md-3">
                    <h1 style="font-size: 17px;padding-top: 15px;font-family: Lato, sans-serif;font-weight: bold;">Username</h1>
                    <p style="font-family: Roboto, sans-serif;line-height: 15px;"><br>Lorem ipsum dolor am consectetur adipiscing elit. Nulla accumsan nunc eget orci posuere, id efficitur erat dignissim. Fusce sed ipsum felis. Etiam lobort<br></p>
                </div>
                <div class="col-md-3">
                    <h1 style="font-size: 17px;padding-top: 15px;font-family: Lato, sans-serif;font-weight: bold;">Username</h1>
                    <p style="font-family: Roboto, sans-serif;line-height: 15px;"><br>Lorem ipsum dolor am consectetur adipiscing elit. Nulla accumsan nunc eget orci posuere, id efficitur erat dignissim. Fusce sed ipsum felis. Etiam lobort<br></p>
                </div>
                <div class="col-md-3">
                    <h1 style="font-size: 17px;padding-top: 15px;font-family: Lato, sans-serif;font-weight: bold;">Username</h1>
                    <p style="font-family: Roboto, sans-serif;line-height: 15px;"><br>Lorem ipsum dolor am consectetur adipiscing elit. Nulla accumsan nunc eget orci posuere, id efficitur erat dignissim. Fusce sed ipsum felis. Etiam lobort<br></p>
                </div>
            </div>
        </div>
    </div>
    </div>

    <script src="vendors/jquery/dist/jquery.min.js"></script>
    <script src="vendors/popper.js/dist/umd/popper.min.js"></script>
    <script src="vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="assets/js/main.js"></script>


    <script src="vendors/chart.js/dist/Chart.bundle.min.js"></script>
    <script src="assets/js/dashboard.js"></script>
    <script src="assets/js/widgets.js"></script>
    <script src="vendors/jqvmap/dist/jquery.vmap.min.js"></script>
    <script src="vendors/jqvmap/examples/js/jquery.vmap.sampledata.js"></script>
    <script src="vendors/jqvmap/dist/maps/jquery.vmap.world.js"></script>

</body>

</html>
