<?php
require('./includes/session-admin.php');
require('./includes/users-list.inc.php');
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
        <table id="customers">
        <tr>
          <th style="color: #1b120f;"><b>ID</b></th>
          <th style="color: #1b120f;"><b>Username</b></th>
          <th style="color: #1b120f;"><b>Role</b></th>
          <th style="color: #1b120f;"><b>Registered At</b></th>
          <th style="color: #1b120f;"><b>Delete</b></th>
          <th style="color: #1b120f;"><b>Edit</b></th>
        </tr>
      <?php  while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
        echo '<tr><td>' . $row['ID'] . '</td><td>' . $row['username'] . '</td><td>' . $row['role'] . '</td><td>' . $row['registered_at'] . '</td>';
        echo "<td><a href='delete-user.php?id=".$row['ID']."'>DELETE</a></td>";
        echo "<td><a href='edit-user-page.php?id=".$row['ID']."'>EDIT</a></td></tr>";
      }

         mysqli_free_result ($result);

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
