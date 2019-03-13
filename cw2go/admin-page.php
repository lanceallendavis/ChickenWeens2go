<?php
require('./includes/session-admin.php');
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
        }</style>
</head>
<body>
<!-- SIDE MENU -->
  <?php include('./includes/header-admin.html'); ?>
<!-- END OF SIDE MENU -->
<!-- MAIN DISPLAY -->
  <div id="right-panel" class="right-panel">
    <?php include('./includes/header-admin2.html'); ?>
    <div class="breadcrumbs">
      <div class="page-title">
        <h1>Dashboard</h1>
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
              <div class="stat-digit">1,012</div>
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
              <div class="stat-digit">961</div>
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
              <div class="stat-digit">770</div>
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
            <div class="stat-digit">1,012</div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <?php include('./includes/admin-scripts.html'); ?>
</body>
</html>
