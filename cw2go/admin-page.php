<?php
require('./includes/session-admin.php');

include('./includes/mysqli_connect.php');
 

$sql = "Select * from  users";
$result = mysqli_query($db_connect,$sql);
$row = mysqli_num_rows($result);

$sql2 = "Select * from  orders where status = 'pending'";
$result2 = mysqli_query($db_connect,$sql2);
$row2 = mysqli_num_rows($result2);

$sql3 = "Select * from  orders ";
$result3 = mysqli_query($db_connect,$sql3);
$row3 = mysqli_num_rows($result3);

$sql4 = "Select * from  order_details ";
$result4 = mysqli_query($db_connect,$sql4);
$row4 = mysqli_num_rows($result4);
?>

<!doctype html>
<html class="no-js" lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <?php include('./includes/admin-styles.html'); ?>
  <title>Chicken Ween's 2Go - Admin Page</title>
    <style>
        canvas {
        width: 550px;
        height: 100px;
        background-color: white;    
        }</style>
</head>
<body>
<!-- SIDE MENU -->
  <?php include('./includes/header-admin.html'); ?>
<!-- END OF SIDE MENU -->
<!-- MAIN DISPLAY -->
  <div id="right-panel" class="right-panel" style="background-color: white;">
      <h1 class="text-center" style="font-family: 'Black Han Sans', sans-serif;letter-spacing: 6px;color: rgb(248,157,19);background-color: #1b120f; height: 70px; padding-top: 20px; font-size: 28px;">Dashboard</h1>
    <div class="breadcrumbs">
      <div class="page-title">
      </div>
      <center><canvas id="bar-chart" width="400" height="150"></canvas></center>
    </div>
   <div class="col-xl-3 col-lg-6">
      <div class="card">
        <div class="card-body">
          <div class="stat-widget-one">
            <div class="stat-icon dib"><i class="ti-server text-success border-success"></i></div>
            <div class="stat-content dib">
              <div class="stat-text">Total Sold</div>
              <div class="stat-digit"><?php echo $row4; ?></div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-xl-3 col-lg-6">
      <div class="card">
        <div class="card-body">
          <div class="stat-widget-one">
            <div class="stat-icon dib"><i class="ti-clipboard text-primary border-primary"></i></div>
            <div class="stat-content dib">
              <div class="stat-text">Total Orders</div>
              <div class="stat-digit"><?php echo $row3; ?></div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-xl-3 col-lg-6">
      <div class="card">
        <div class="card-body">
          <div class="stat-widget-one">
            <div class="stat-icon dib"><i class="ti-bell text-warning border-warning"></i></div>
            <div class="stat-content dib">
              <div class="stat-text">Pending Orders</div>
              <div class="stat-digit"><?php echo $row2; ?></div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="card">
      <div class="card-body">
        <div class="stat-widget-one">
          <div class="stat-icon dib"><i class="ti-user text-ti-bell border-danger"></i></div>
          <div class="stat-content dib">
            <div class="stat-text">Users</div>
            <div class="stat-digit"><?php echo $row; ?></div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <?php include('./includes/admin-scripts.html'); ?>
</body>
</html>
