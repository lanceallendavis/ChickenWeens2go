<?php
require_once('./includes/mysqli_connect.php');
$stockID = $_GET['id'];

$select_update_query = "SELECT * FROM stocks WHERE ID = $stockID";
$select_result = mysqli_query($db_connect, $select_update_query);
$row = mysqli_fetch_array($select_result);
if(!$row){
  echo 'nothing to do here.';
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
                <td><b>Stock ID</b></td>
                <td><b>Stock Name</b></td>
                <td><b>Stock Count</b></td>
                <td><b>Demand Count</b></td>

              </tr>
              <tr>
                <form action="./includes/update-stock.php" method="post">
                  <input type='hidden' name='action' value='updateStock'>
                  <input type="hidden" name="id" value="<?php echo $row["ID"]; ?>">
                  <td><b><?php echo $row["ID"]; ?></b></td>
                  <td><label id="productName" type="text" name="stockName" size="16" maxlength="32" value="<?php echo $row['name']; ?>"><?php echo $row['name']; ?><label></td>
                  <td><input id="type" type="text" name="stockCount" size="6" maxlength="32" value="<?php echo $row['stock_count']; ?>"></td>
                  <td><input id="description" type="text" name="demand" size="6" maxlength="32" value="<?php echo $row['demand_count']; ?>"></td>
                  <button class="btn-overlay" type='submit'>
                      <span>UPDATE</span>
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
