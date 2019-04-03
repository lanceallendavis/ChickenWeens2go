<?php
require_once('./includes/mysqli_connect.php');
$productID = $_GET['id'];

$select_edit_query = "SELECT * FROM products WHERE ID = $productID";
$result = mysqli_query($db_connect, $select_edit_query);
$row = mysqli_fetch_array($result);
if(!$row){
  echo 'nothing to do here.';
}

$list_stocks = "SELECT * FROM stocks";
$stocks_result = mysqli_query($db_connect, $list_stocks);
?>
<!doctype html>
<html lang=en>
<head>
  <title>Register</title>
  <meta charset=utf-8>
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <?php include('./includes/admin-styles.html'); ?>
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
        <li class="active">
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
        <li class="menu-item-has-children dropdown">
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
              <h1 class="text-center" style="font-family: 'Black Han Sans', sans-serif;letter-spacing: 6px;color: rgb(248,157,19);background-color: #1b120f; height: 80px; padding-top: 20px; font-size: 28px;">Edit Product</h1>
                <table id="customers" width: 100%; >
        <tr>
          <th style= "width:10%;"><b>Product Name</b></th>
          <th><b>Corresponding Stock</b></th>
          <th><b>Description</b></th>
          <th><b>Price</b></th>
          <th><b>Availability</b></th>
          <th><b>UPDATE</b></th>
        </tr>
              <tr>
                <form action="./includes/edit-product.php" method="post">
                  <input type='hidden' name='action' value='editProduct'>
                  <input type="hidden" name="id" value="<?php echo $row["ID"]; ?>">
                  <td><input id="productName" type="text" name="productName" size="16" maxlength="32" value="<?php echo $row['name']; ?>"></td>
                  <td>
                  <select name="stockName" style="width: 230px;">
                    <option value="<?php $row['stock_name'] ?>" size="16"><?php $row['stock_name'] ?></option>
                    <?php
                    if($stocks_result){
                      while($stocks_row = mysqli_fetch_array($stocks_result, MYSQLI_ASSOC)){
                      if($row['stock_name'] != $stocks_row['name']){
                      echo '<option size="16" value="'. $stocks_row['name'] . '">' . $stocks_row['name'] . '</option>';
                    }
                    }
                    }
                     ?>
                     </select>
                 </td>
                  <td><input id="description" type="text" name="description" size="32" maxlength="32" value="<?php echo $row['description']; ?>"></td>
                  <td><input id="price" type="text" name="price" size="8" maxlength="64" value="<?php echo $row['price']; ?>" ></td>
                  <td><input id="availability" type="text" name="availability" size="1" style="width: 180px;" maxlength="254" value="<?php echo $row['availability']; ?>" ></td>
                  <td><button class="btn btn-danger" style="background-color: #f89d13; margin-left: 15px;" type='submit'>
                      <span>UPDATE</span>
                      </button></td>
                </form>
                </tr>
              </table>
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
          <script src="vendors/jqvmap/dist/mapsS/jquery.vmap.world.js"></script>
          <script>
              (function($) {
                  "use strict";

                  jQuery('#vmap').vectorMap({
                      map: 'world_en',
                      backgroundColor: null,
                      color: '#ffffff',
                      hoverOpacity: 0.7,
                      selectedColor: '#1de9b6',
                      enableZoom: true,
                      showTooltip: true,
                      values: sample_data,
                      scaleColors: ['#1de9b6', '#03a9f5'],
                      normalizeFunction: 'polynomial'
                  });
              })(jQuery);

          </script>

      </body>
      </html>
