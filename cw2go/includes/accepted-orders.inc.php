<?php
require_once('mysqli_connect.php');
$accepted_orders_query = "SELECT orders.*, concat(users.first_name, ' ', users.last_name ) as user_name
                          FROM orders left join users on orders.user_ID = users.ID
                          WHERE status = 'accepted'";
$accepted_orders_result = mysqli_query($db_connect, $accepted_orders_query);

 ?>
