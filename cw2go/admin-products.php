<?php
require('./includes/session-admin.php');
require('./includes/mysqli_connect.php');
$list_products = "SELECT * FROM products";
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
  <?php include('./includes/header-admin.html'); ?>

    <div id="right-panel" class="right-panel">
      <?php include('./includes/header-admin2.html'); ?>

        <table id="customers" >
        <tr>
          <form action="./includes/products.inc.php" method="post" enctype="multipart/form-data">
            <input type='hidden' name='action' value='addProduct'>
            <td><label class="label" for="ID"></label></td>
            <td><input placeholder="Enter Product Name" id="productName" type="text" name="productName" size="32" maxlength="32" value="<?php if (isset($_POST['productName'])) echo $_POST['productName']; ?>"></td>
            <td><input placeholder="Enter Product Type" id="type" type="text" name="type" size="32" maxlength="32" value="<?php if (isset($_POST['type'])) echo $_POST['type']; ?>"></td>
            <td><input placeholder="Enter Product Description" id="description" type="text" name="description" size="32" maxlength="32" value="<?php if (isset($_POST['description'])) echo $_POST['description']; ?>"></td>
            <td><input placeholder="Enter Product Price" id="price" type="text" name="price" size="32" maxlength="64" value="<?php if (isset($_POST['price'])) echo $_POST['email']; ?>" ></td>
              <td><input placeholder="Enter Product Image" type="file" name="productImage" id="productImage"></div>

            <td><input id="submit" type="submit" name="submit" value="Add">
          </form>
        </tr>
        <tr>
          <th><b>Product ID</b></th>
          <th style="width: 10%;"><b>Product Name</b></th>
          <th><b>Type</b></th>
          <th><b>Description</b></th>
          <th><b>Price</b></th>
          <th><b>Availability</b></th>
          <th><b>Date Added</b></th>
          <th><b>DELETE</b></th>
          <th><b>EDIT</b></th>
        </tr>
      <?php
        if($products_result){
          while($row = mysqli_fetch_array($products_result, MYSQLI_ASSOC)){
          echo '<tr><td>' . $row['ID'] . '</td><td>' . $row['name'] . '</td><td>' . $row['type'] . '</td><td>' . $row['description'] . '</td><td>' . $row['price'] . '</td><td>' . $row['availability'];
          echo '</td><td>' . $row['added_at'] . '</td>';
          echo "<td><a href='delete-product.php?id=".$row['ID']."'>DELETE</a></td>";
          echo "<td><a href='edit-product-page.php?id=".$row['ID']."'>EDIT</a></td></tr>";
          }
          mysqli_free_result ($products_result);
        }
        ?>
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
