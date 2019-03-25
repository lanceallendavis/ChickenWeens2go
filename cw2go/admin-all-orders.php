<?php
require_once('./includes/session-admin.php');

require_once('./includes/admin-all-orders.inc.php');

 ?>
<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Summary of Orders</title>
    <meta name="description" content="Summary Orders">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="apple-touch-icon" href="apple-icon.png">
    <link rel="shortcut icon" href="favicon.ico">
    <link rel="stylesheet" href="vendors/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="vendors/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="vendors/themify-icons/css/themify-icons.css">
    <link rel="stylesheet" href="vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="vendors/selectFX/css/cs-skin-elastic.css">
    <link rel="stylesheet" href="vendors/datatables.net-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="vendors/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css">
    <link href="https://fonts.googleapis.com/css?family=Staatliches" rel="stylesheet">
    <link rel="shortcut icon" href="userasset/img/icon.png" type="image/x-icon" />
    <link href="https://fonts.googleapis.com/css?family=Lato:700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Anonymous+Pro" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/adminstyle.css">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>
</head>

<body>
    <!-- Left Panel -->
    <?php include('./includes/header-admin.html'); ?>
    <div id="right-panel" class="right-panel">
    <?php include('./includes/header-admin2.html'); ?>
        <div class="col-md-12" style="padding: 0px;">
            <div class="card">
                <div class="card-body">
                    <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
                        <thead style="background color: #f89d13;">
                            <tr>
                                <th>ID</th>
                                <th>CUSTOMER NAME</th>
                                <th>TOTAL</th>
                                <th>CURRENT STATUS</th>
                                <th>MODE OF PAYMENT</th>
                                <th>DELIVERY ADDRESS</th>
                                <th>DATE PLACED</th>
                                <th>DATE ACCEPTED</th>
                                <th>DATE DECLINED</th>
                                <th>DATE DELIVERED</th>
                                <th>DATE CANCELLED</th>
                            </tr>
                        </thead>

                        <tbody>
                          <?php


                          while($row = mysqli_fetch_array($all_orders_result, MYSQLI_ASSOC)){
                            $placed_at = abs(strtotime($row['placed_at']));


                            echo '<tr>';
                              echo '<td>'. $row['ID'] . '</td>';
                              echo '<td>'. $row['user_ID']. '</td>';
                              echo '<td>'. $row['total'] . '</td>';
                              echo '<td>'. $row['status'] . '</td>';
                              echo '<td>'. $row['mode_of_payment']. '</td>';
                              echo '<td>'. $row['delivery_address']. '</td>';
                              echo '<td>'. date('l jS \of F Y h:i:s A',strtotime($row['placed_at'])). '</td>';
                              if($row['accepted_at']){
                                echo '<td>'.date('l jS \of F Y h:i:s A',strtotime($row['accepted_at'])). '</td>';
                              }
                              else {
                                echo '<td>N/A</td>';
                              }
                              if($row['declined_at']){
                                echo '<td>'. date('l jS \of F Y h:i:s A',strtotime($row['declined_at'])). '</td>';
                              }
                              else {
                                echo '<td>N/A</td>';
                              }
                              if($row['delivered_at']){
                                echo '<td>'. date('l jS \of F Y h:i:s A',strtotime($row['delivered_at'])). '</td>';
                              }
                              else {
                                echo '<td>N/A</td>';
                              }
                              if($row['cancelled_at']){
                                echo '<td>'. $row['cancelled_at']. '</td>';
                              }
                              else {
                                echo '<td>N/A</td>';
                              }
                          echo '  </tr>';
                        }
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


</body>

</html>
