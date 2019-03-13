<?php
require_once('./includes/mysqli_connect.php');
$declined_orders_query = "SELECT orders.*, concat(users.first_name, ' ', users.last_name ) as user_name
                          FROM orders inner join users on orders.user_ID = users.ID
                          WHERE status = 'declined'";
$declined_orders_result = mysqli_query($db_connect, $declined_orders_query);


 ?>
