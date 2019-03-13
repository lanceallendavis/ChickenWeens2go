<?php
require_once('mysqli_connect.php');
$pending_orders_query = "SELECT user.ID as user_ID, CONCAT(user.first_name, ' ', user.last_name) as full_name, o.ID as order_ID, total, placed_at
                           from users user inner join orders o on user.ID = o.user_ID AND status = 'pending'";
$display_result = mysqli_query($db_connect, $pending_orders_query);

 ?>
