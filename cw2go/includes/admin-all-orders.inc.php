<?php
include('mysqli_connect.php');
$all_orders_query = "SELECT * FROM orders,users where users.ID = orders.user_ID";
$all_orders_result = mysqli_query($db_connect, $all_orders_query);
 ?>
