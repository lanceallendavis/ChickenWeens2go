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
  <aside id="left-panel" class="left-panel">
    <nav class="navbar navbar-expand-sm navbar-default">
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
        <i class="fa fa-bars"></i>
      </button>
      <a class="navbar-brand" href="admin-page.php"><img src="images/sojubtry.png" alt="Logo" style="margin-top: 10px;"></a>
      <div id="main-menu" class="main-menu collapse navbar-collapse">
        <ul class="nav navbar-nav">
          <li class="active">
          <a href="admin-page.php"> <i class="menu-icon fa fa-dashboard"></i>Dashboard </a>
          </li>
          <h3 class="menu-title">Users</h3>
          <li class="menu-item-has-children dropdown">
          <a href="admin-userslist.php" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-th"></i>Regular Users</a>
          </li>
          <li class="menu-item-has-children dropdown">
          <a href="admin-products.php" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-th"></i>Edit Products</a>
          </li>           
          <h3 class="menu-title">Orders</h3>
          <li class="menu-item-has-children dropdown">
          <a href="tables-basic.html" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-th"></i>Pending Order</a>
          </li>
          <li class="menu-item-has-children dropdown">
          <a href="forms-advanced.html" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-th"></i>Accepted Order</a>
          </li>
          <li class="menu-item-has-children dropdown">
          <a href="forms-basic.html" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-th"></i>Declined Order</a>
          </li>
          <li class="menu-item-has-children dropdown">
          <a href="tables-data.html" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-th"></i>Delivered Order</a>
          </li>
        </ul>
      </div>
    </nav>
  </aside>
<!-- END OF SIDE MENU -->
<!-- MAIN DISPLAY -->
  <div id="right-panel" class="right-panel">
    <header id="header" class="header">
      <div class="header-menu">
        <div class="col-sm-7">
          <a id="menuToggle" class="menutoggle pull-left"><i class="fa fa fa-tasks"></i></a>
          <div class="header-left">
      <!-- NOTIF -->
            <div class="dropdown for-message">
              <button class="btn btn-secondary dropdown-toggle" type="button" id="message" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="ti-email"></i>
                <span class="count bg-primary">9</span>
              </button>
              <div class="dropdown-menu" aria-labelledby="message">
                <p class="red">You have 4 Mails</p>
                <a class="dropdown-item media bg-flat-color-1" href="#">
                <span class="photo media-left"><img alt="avatar" src="images/avatar/1.jpg"></span>
                <span class="message media-body">
                <span class="name float-left">Jonathan Smith</span>
                <span class="time float-right">Just now</span>
                <p>Hello, this is an example msg</p>
                </span>
                </a>
                <a class="dropdown-item media bg-flat-color-4" href="#">
                  <span class="photo media-left"><img alt="avatar" src="images/avatar/2.jpg"></span>
                  <span class="message media-body">
                  <span class="name float-left">Jack Sanders</span>
                  <span class="time float-right">5 minutes ago</span>
                  <p>Lorem ipsum dolor sit amet, consectetur</p>
                  </span>
                </a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-5">
                    <div class="user-area dropdown float-right">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img class="user-avatar rounded-circle" src="images/Avatar/1.jpg" alt="User Avatar">
                        </a>

                        <div class="user-menu dropdown-menu">
                            <a class="nav-link" href="#"><i class="fa fa-user"></i> My Profile</a>

                            <a class="nav-link" href="#"><i class="fa fa-user"></i> Notifications <span class="count">13</span></a>

                            <a class="nav-link" href="#"><i class="fa fa-cog"></i> Settings</a>

                            <a class="nav-link" href="logout.php"><i class="fa fa-power-off"></i> Logout</a>
                        </div>
                    </div>
                </div>
            </div>
        </header>
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
      <script>
      // Chart.defaults.global.elements.rectangle.backgroundColor = '#FF0000';

    var bar_ctx = document.getElementById('bar-chart').getContext('2d');

    var purple_orange_gradient = bar_ctx.createLinearGradient(0, 0, 0, 600);
    purple_orange_gradient.addColorStop(0, '#f89d13');
    purple_orange_gradient.addColorStop(1, '#ac3f21');

    var bar_chart = new Chart(bar_ctx, {
        type: 'bar',
        data: {
        labels: ["January", "Febuary", "March", "April", "May", "June", "July", "August"],
        datasets: [{
        label: '# of Sales',
        data: [12, 19, 3, 8, 14, 5, 10, 11],
        backgroundColor: purple_orange_gradient,
        hoverBackgroundColor: purple_orange_gradient,
        hoverBorderWidth: 2,
        hoverBorderColor: '#1b120f'
        }]
        },
        options: {
        scales: {
        yAxes: [{
        ticks: {
        beginAtZero:true
        }
        }]
        }
        }
        });  
      </script>
    </div>
</body>

</html>
