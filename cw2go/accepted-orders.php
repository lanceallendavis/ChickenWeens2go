<?php
require_once('./includes/session-admin.php');
require_once('./includes/accepted-orders.inc.php');
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
    <link rel="stylesheet" href="vendors/jqvmap/dist/jqvmap.min.css">
    <link rel="stylesheet" href="assets/css/adminstyle.css">
    <link rel="stylesheet" href="assets/css/table.css">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>
</head>

<body>
<?php include('./includes/header-admin.html') ?>
    <div id="right-panel" class="right-panel">
    <?php include('./includes/header-admin2.html'); ?>
      <table id="customers">
        <tr>
          <th style="color: #1b120f;">Order ID</th>
          <th style="color: #1b120f">CUSTOMER NAME</th>
          <th style="color: #1b120f">TOTAL</th>
          <th style="color: #1b120f">DATE ACCEPTED</th>
          <th style="color: #1b120f">SET ACCEPTED STATUS</th>
        </tr>
    <?php
    while($row = mysqli_fetch_array($accepted_orders_result, MYSQLI_ASSOC)){
    echo '<tr>';
      echo '<td>'. $row['ID'] . '</td>';
      echo '<td>'. $row['user_name'] . '</td>';
      echo '<td>'. $row['total'] . '</td>';
      echo '<td>'. $row['accepted_at'] . '</td>';
      echo '<td style="text-align: center;"><a href="./includes/delivered-order.php?id=' . $row['ID'] . '" class="btn btn-primary" type="button" style="margin-top: 6px; margin-right: 6px; ">Delivered<br></a>';
      echo '<a href="./includes/cancel-order.php?id=' . $row['ID'] . '" class="btn btn-primary" type="button" style="margin-top: 6px;">Cancel<br></td>';
    echo '</tr>';
    };
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
    <script src="vendors/jqvmap/dist/maps/jquery.vmap.world.js"></script>

</body>

</html>
