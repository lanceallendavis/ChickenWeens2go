<?php
require_once('./includes/session-admin.php');
require_once('./includes/delivered-orders.inc.php');
 ?>
<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Ween's Admin Page</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="apple-touch-icon" href="apple-icon.png">
    <link rel="stylesheet" href="vendors/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="vendors/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="vendors/themify-icons/css/themify-icons.css">
    <link rel="stylesheet" href="vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="shortcut icon" href="userasset/img/icon.png" type="image/x-icon" />
    <link rel="stylesheet" href="vendors/selectFX/css/cs-skin-elastic.css">
    <link rel="stylesheet" href="vendors/selectFX/css/table.css">
    <link rel="stylesheet" href="vendors/jqvmap/dist/jqvmap.min.css">
    <link rel="stylesheet" href="assets/css/adminstyle.css">
    <link rel="stylesheet" href="assets/css/table.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Black+Han+Sans">
    <link rel="stylesheet" href="userasset/fonts/ionicons.min.css">
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
        <li class="menu-item-has-children dropdown">
          <a href="admin-stocks.php" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa   fa-archive"></i>Stocks</a>
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
        <li class="active">
          <a href="delivered-orders.php" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-truck"></i>Delivered Orders</a>
        </li>
        <li class="menu-item-has-children dropdown">
          <a href="daily-sales.php" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa  fa-bar-chart-o"></i>Daily Sales</a>
        </li>
        <li class="menu-item-has-children dropdown">
          <a href="sales-by-product.php" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa  fa-bookmark-o"></i>Sales By Product</a>
        </li>
        <li class="menu-item-has-children dropdown">
          <a href="admin-all-orders.php" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa   fa-sort"></i>Orders Summary</a>
        </li>
        <li class="menu-item-has-children dropdown">
          <a href="admin-locations.php" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa  fa-location-arrow"></i>Locations</a>
        </li>
      </ul>
      <br>
      <center><a href= "logout.php"><button type="button" class="btn btn-danger" style="padding-top; 30px; width: 80%; ">LOGOUT</button></a></center>
  </nav>
</aside>
    <div id="right-panel" class="right-panel">
        <h1 class="text-center" style="font-family: 'Black Han Sans', sans-serif;letter-spacing: 6px;color: rgb(248,157,19);background-color: #1b120f; height: 80px; padding-top: 20px; font-size: 28px;">Delivered Orders</h1>
    <?php if(isset($_SESSION['status_messages'])) { 
    echo '<div class="alert alert-success shake animated" role="alert" id="save-sucess" style="background-color: #B4F7D2!important; border: 1px solid #0C6D38 width: 98%; margin-left: 15px;;"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button><i class="icon ion-checkmark-round mr-1"></i><span style="color: #0C6D38 !important;">' . $_SESSION['status_messages'] . '<br></span></div>';
      unset($_SESSION['status_messages']); }
      ?>
         <div class="col-md-12">
                    <div class="card">
                    <div class="card-body">
                    <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
                    <thead>
                    <tr>
                    <th style="color: #1b120f;">Order ID</th>
                    <th style="color: #1b120f">CUSTOMER NAME</th>
                    <th style="color: #1b120f">TOTAL</th>
                    <th style="color: #1b120f">DATE DELIVERED</th>

                        </tr>
                <tbody>
               <?php
                 while($row = mysqli_fetch_array($delivered_orders_result, MYSQLI_ASSOC)){
                 echo '<tr>';
                 echo '<td>'. $row['ID'] . '</td>';
                 echo '<td>'. $row['user_name'] . '</td>';
                 echo '<td>'. $row['total'] . '</td>';
                 echo '<td>'. $row['delivered_at'] . '</td>';
                 echo '</tr>';
                 };
                 ?>
                 </tbody>
                </table>
                </div>
                </div>
                </div>
        
    </div>

    <script src="vendors/jquery/dist/jquery.min.js"></script>
    <script src="vendors/popper.js/dist/umd/popper.min.js"></script>
    <script src="vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="assets/js/main.js"></script>
    <script src="vendors/jquery/dist/jquery.min.js"></script>
    <script src="vendors/popper.js/dist/umd/popper.min.js"></script>
    <script src="vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="assets/js/main.js"></script>
    <script src="vendors/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="vendors/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="vendors/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
    <script src="vendors/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js"></script>
    <script src="vendors/jszip/dist/jszip.min.js"></script>
    <script src="vendors/pdfmake/build/pdfmake.min.js"></script>
    <script src="vendors/pdfmake/build/vfs_fonts.js"></script>
    <script src="vendors/datatables.net-buttons/js/buttons.html5.min.js"></script>
    <script src="vendors/datatables.net-buttons/js/buttons.print.min.js"></script>
    <script src="vendors/datatables.net-buttons/js/buttons.colVis.min.js"></script>
    <script src="assets/js/init-scripts/data-table/datatables-init.js"></script>


    <script src="vendors/chart.js/dist/Chart.bundle.min.js"></script>
    <script src="assets/js/dashboard.js"></script>
    <script src="assets/js/widgets.js"></script>
    <script src="vendors/jqvmap/dist/jquery.vmap.min.js"></script>
    <script src="vendors/jqvmap/examples/js/jquery.vmap.sampledata.js"></script>
    <script src="vendors/jqvmap/dist/maps/jquery.vmap.world.js"></script>

</body>

</html>
