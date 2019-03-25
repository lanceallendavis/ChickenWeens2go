<?php
require_once('./includes/mysqli_connect.php');
$productID = $_GET['id'];

$select_edit_query = "SELECT * FROM products WHERE ID = $productID";
$result = mysqli_query($db_connect, $select_edit_query);
$row = mysqli_fetch_array($result);
if(!$row){
  echo 'nothing to do here';
}

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
        <?php include('./includes/header-admin.html'); ?>
          <div id="right-panel" class="right-panel">
            <?php include('./includes/header-admin2.html'); ?>



              <table>
              <tr>
                <td><b>Product ID</b></td>
                <td><b>Product Name</b></td>
                <td><b>Type</b></td>
                <td><b>Description</b></td>
                <td><b>Price</b></td>
                <td><b>Availability</b></td>
              </tr>
              <tr>
                <form action="./includes/edit-product.php" method="post">
                  <input type='hidden' name='action' value='editProduct'>
                  <input type="hidden" name="id" value="<?php echo $row["ID"]; ?>">
                  <td><b><?php echo $row["ID"]; ?></b></td>
                  <td><input id="productName" type="text" name="productName" size="16" maxlength="32" value="<?php echo $row['name']; ?>"></td>
                  <td><input id="type" type="text" name="type" size="8" maxlength="32" value="<?php echo $row['type']; ?>"></td>
                  <td><input id="description" type="text" name="description" size="32" maxlength="32" value="<?php echo $row['description']; ?>"></td>
                  <td><input id="price" type="text" name="price" size="8" maxlength="64" value="<?php echo $row['price']; ?>" ></td>
                  <td><input id="availability" type="text" name="availability" size="1" maxlength="254" value="<?php echo $row['availability']; ?>" ></td>
                  <button class="btn-overlay" type='submit'>
                      <span>EDIT</span>
                  </button>
                </form>
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
