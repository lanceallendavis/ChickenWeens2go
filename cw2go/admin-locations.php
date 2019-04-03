<?php
require_once('./includes/session-admin.php');
require('./includes/mysqli_connect.php');
$list_products = "SELECT * FROM locations";
$products_result = mysqli_query($db_connect, $list_products);
?>
<!doctype html>
<html class="no-js" lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <?php include('./includes/admin-styles.html'); ?>
    <title>Ween's Admin Page</title>

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
        <li class="active">
          <a href="admin-locations.php" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa   fa-location-arrow"></i>Locations</a>
        </li>
      </ul>
      <br>
      <center><a href= "logout.php"><button type="button" class="btn btn-danger" style="padding-top; 30px; width: 80%; ">LOGOUT</button></a></center>
  </nav>
</aside>

    <div id="right-panel" class="right-panel">
        <h1 class="text-center" style="font-family: 'Black Han Sans', sans-serif;letter-spacing: 6px;color: rgb(248,157,19);background-color: #1b120f; height: 80px; padding-top: 20px; font-size: 28px;">Location</h1>
        <table id="customers" >
        <tr>
          <form action="./includes/products.inc.php" method="post" enctype="multipart/form-data">
        <tr>
          <th style="width: 10%;"><b>Location</b></th>
          <th><b>Distance</b></th>
          <th><b>Estimated Fee</b></th>
          <th><b>Date Added</b></th>
          <th><b>EDIT</b></th>
          <th><b>DELETE</b></th>
        </tr>
      <?php
        if($products_result){
          while($row = mysqli_fetch_array($products_result, MYSQLI_ASSOC)){
          echo '<tr><td>' . $row['city'] . '</td><td>' . $row['distance']  . 'KM' . '</td><td>₱' . $row['estimated_fee'];
          echo '</td><td>' . $row['added_at'] . '</td>';
          echo "<td><a href='edit-product-page.php?id=".$row['ID']."' class='btn btn-danger' style='background-color: #f89d13; margin-left: 15px;'>EDIT</a></td>";
          echo "<td><a href='delete-product.php?id=".$row['ID']."' class='btn btn-danger' style='background-color: #f86a4e; margin-left: 15px;'>DELETE</a></td></tr>";
          }
          mysqli_free_result ($products_result);
        }
        ?>
        </form>
      </table><br>
        <a href="#popUp" id="openPopUp" style="font-family: Lato, sans-serif;" > <i class="menu-icon fa fa-plus"> &nbsp; Add Location</i></a>
        <aside id="popUp" class="popup">
        <div class="popUpContainer">
        <header>
        <a href="#!" class="closePopUp">X</a>
        <h2 style="font-family: 'Black Han Sans', sans-serif; font-size: 24px; padding: 25px;">ADD PRODUCTS</h2>
        </header>
        <article>
      	<table id="customers" >
          <form action="./includes/add-location.php" method="post" enctype="multipart/form-data">
         <center> <br><br><br>  <input type='hidden' name='action' value='addLocation'>
            <input placeholder="Location Name" class="productinput" style="margin-left: 5px;" id="productName" type="text" name="locationName" size="32" maxlength="32" value="<?php if (isset($_POST['locationName'])) echo $_POST['locationName']; ?>"> <br>
            <input placeholder="Location Distance(KM)" id="type" class="productinput"  type="text" name="distance" size="32" maxlength="32" value="<?php if (isset($_POST['distance'])) echo $_POST['distance']; ?>"><br>
            <input placeholder="Estimated Fee(PHP)" id="description" class="productinput" type="text" name="estimatedFee" size="64" maxlength="32" value="<?php if (isset($_POST['estimatedFee'])) echo $_POST['estimatedFee']; ?>"><br>
            <input id="submit" type="submit" name="submit" value="ADD" class="btn btn-danger" style="font-weight: bold; background-color: #f89d13; width: 100%; height: 50px; margin-top: 80px;">
             </center>
            </form>
            </table>
        </article>
        </div>
        <a href="#!" class="closePopUpOutSide"></a>
        </aside>
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
</body>
</html>
