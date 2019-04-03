<?php
require('./includes/session-admin.php');
require('./includes/mysqli_connect.php');
$list_products = "SELECT * FROM products";
$products_result = mysqli_query($db_connect, $list_products);

$list_stocks = "SELECT * FROM stocks";
$stocks_result = mysqli_query($db_connect, $list_stocks);
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
        <li class="active">
          <a href="admin-products.php" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-book"></i>Products</a>
        </li>
        <li class="menu-item-has-children dropdown">
          <a href="admin-stocks.php" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa  fa-location-arrow"></i>Stocks</a>
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

  </nav>
</aside>

    <div id="right-panel" class="right-panel">
      <?php include('./includes/header-admin2.html'); ?>
        <table id="customers" width: 100%; >
        <tr>
          <form action="./includes/products.inc.php" method="post" enctype="multipart/form-data">
        <tr>
          <th><b>Product Name</b></th>
          <th><b>Pieces</b></th>
          <th><b>Corresponding Stock</b></th>
          <th><b>Description</b></th>
          <th><b>Price</b></th>
          <th><b>Availability</b></th>
          <th><b>Date Added</b></th>
          <th><b>EDIT</b></th>
          <th><b>DELETE</b></th>
        </tr>
      <?php
        if($products_result){
          while($row = mysqli_fetch_array($products_result, MYSQLI_ASSOC)){
          echo '<tr><td>' . $row['name'] . '</td><td>' . $row['pieces'] . '</td><td>' . $row['stock_name'] . '</td><td>' . $row['description'] . '</td><td>' . $row['price'] . '</td><td>' . $row['availability'];
          echo '</td><td>' . $row['added_at'] . '</td>';
          echo "<td><a href='edit-product-page.php?id=".$row['ID']."' class='btn btn-danger' style='background-color: #f89d13; margin-left: 15px;'>EDIT</a></td>";
          echo "<td><a href='delete-product.php?id=".$row['ID']."' class='btn btn-danger' style='background-color: #f86a4e; margin-left: 15px;'>DELETE</a></td></tr>";
          }
          mysqli_free_result ($products_result);
        }
        ?>
        </form>
      </table><br>
        <a href="#popUp" id="openPopUp" style="font-family: Lato, sans-serif;" > <i class="menu-icon fa fa-plus"> &nbsp; Add Products </i></a>
        <aside id="popUp" class="popup">
        <div class="popUpContainer">
        <header>
        <a href="#!" class="closePopUp">X</a>
        <h2 style="font-family: 'Black Han Sans', sans-serif; font-size: 24px; padding: 25px;">ADD PRODUCTS</h2>
        </header>
        <article>
      	<table id="customers" >
          <form action="./includes/products.inc.php" method="post" enctype="multipart/form-data">
         <center> <br>  <input type='hidden' name='action' value='addProduct'><input placeholder="Product Name" class="productinput" style="margin-left: 5px;" id="productName" type="text" name="productName" size="32" maxlength="42" value="<?php if (isset($_POST['productName'])) echo $_POST['productName']; ?>"> <br>
           <input placeholder="Pieces" id="description" class="productinput" type="text" name="pieces" size="2" maxlength="2" value="<?php if (isset($_POST['pieces'])) echo $_POST['pieces']; ?>"><br>
            <input placeholder="Product Description" id="description" class="productinput" type="text" name="description" size="64" maxlength="252" value="<?php if (isset($_POST['description'])) echo $_POST['description']; ?>"><br>
            <input placeholder="Product Price" id="price" class="productinput"  type="text" name="price" size="32" maxlength="64" value="<?php if (isset($_POST['price'])) echo $_POST['price']; ?>" ><br>
                   <span size="16"class="productinput" style="margin-left: 5px;" id="productName">Corresponding Stock
           <select name="stockName">
             <option value="N/A" size="16">Stock Name</option>
             <?php
             if($stocks_result){
               while($stocks_row = mysqli_fetch_array($stocks_result, MYSQLI_ASSOC)){

               echo '<option size="16" value="'. $stocks_row['name'] . '">' . $stocks_row['name'] . '</option>';
             }
             }
              ?>
              </select>
            </span>
            <input placeholder="Enter Product Image" type="file" style="width: 230px; margin-bottom: 10px;" class=btn btn-danger; name="productImage" id="productImage"><br>
            <input id="submit" type="submit" name="submit" value="ADD" class="btn btn-danger" style="font-weight: bold; background-color: #f89d13; width: 100%; height: 50px; margin-top: 23px;">
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