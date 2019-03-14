<?php
require_once('mysqli_connect.php');
$daily_sales_query = "SELECT DATE(accepted_at) as date, SUM(total) total, count(user_ID) customer_count FROM orders GROUP BY  DATE(accepted_at)";
$dailyresult = mysqli_query($db_connect, $daily_sales_query);
?>
