<?php
require_once('mysqli_connect.php');
$delivered_orders_query = "SELECT orders.*, concat(users.first_name, ' ', users.last_name ) as user_name
                          FROM orders inner join users on orders.user_ID = users.ID
                          WHERE status = 'delivered'";
$delivered_orders_result = mysqli_query($db_connect, $delivered_orders_query);

 ?>
