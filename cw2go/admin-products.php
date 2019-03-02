<?php
// require('./includes/session-admin.php');
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
    <div id="right-panel" class="right-panel">
      <header id="header" class="header">
        <div class="header-menu">
          <div class="col-sm-7">
            <a id="menuToggle" class="menutoggle pull-left"><i class="fa fa fa-tasks"></i></a>
            <div class="header-left">
              <div class="dropdown for-notification">
                <button class="btn btn-secondary dropdown-toggle" type="button" id="notification" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="fa fa-bell"></i>
                  <span class="count bg-danger">5</span>
                </button>
                <div class="dropdown-menu" aria-labelledby="notification">
                  <p class="red">You have 3 Notification</p>
                  <a class="dropdown-item media bg-flat-color-1" href="#">
                  <i class="fa fa-check"></i>
                  <p>Server #1 overloaded.</p>
                </a>
                <a class="dropdown-item media bg-flat-color-4" href="#">
                  <i class="fa fa-info"></i>
                  <p>Server #2 overloaded.</p>
                </a>
                <a class="dropdown-item media bg-flat-color-5" href="#">
                                    <i class="fa fa-warning"></i>
                                    <p>Server #3 overloaded.</p>
                                </a>
                            </div>
                        </div>

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
                                <a class="dropdown-item media bg-flat-color-5" href="#">
                                    <span class="photo media-left"><img alt="avatar" src="images/avatar/3.jpg"></span>
                                    <span class="message media-body">
                                        <span class="name float-left">Cheryl Wheeler</span>
                                        <span class="time float-right">10 minutes ago</span>
                                        <p>Hello, this is an example msg</p>
                                    </span>
                                </a>
                                <a class="dropdown-item media bg-flat-color-3" href="#">
                                    <span class="photo media-left"><img alt="avatar" src="images/avatar/4.jpg"></span>
                                    <span class="message media-body">
                                        <span class="name float-left">Rachel Santos</span>
                                        <span class="time float-right">15 minutes ago</span>
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
        <table id="customers" >
        <tr>
          <form action="./includes/products.inc.php" method="post">
            <input type='hidden' name='action' value='addProduct'>
            <td><label class="label" for="ID"></label></td>
            <td><input placeholder="Enter Product Name" id="productName" type="text" name="productName" size="32" maxlength="32" value="<?php if (isset($_POST['username'])) echo $_POST['username']; ?>"></td>
            <td><input placeholder="Enter Product Type" id="type" type="text" name="type" size="32" maxlength="32" value="<?php if (isset($_POST['firstName'])) echo $_POST['firstName']; ?>"></td>
            <td><input placeholder="Enter Product description" id="description" type="text" name="description" size="32" maxlength="32" value="<?php if (isset($_POST['lastName'])) echo $_POST['lastName']; ?>"></td>
            <td><input placeholder="Enter Product Price" id="price" type="text" name="price" size="32" maxlength="64" value="<?php if (isset($_POST['email'])) echo $_POST['email']; ?>" ></td>
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
