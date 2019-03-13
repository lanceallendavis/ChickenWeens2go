<?php
require_once('./session-admin.php');
include('./mysqli_connect.php');
$orderID = $_GET['id'];
$delivered_order_query = "UPDATE orders SET status = 'delivered', delivered_at = NOW() where ID = $orderID";
$delivered_result = mysqli_query($db_connect, $delivered_order_query);
if($delivered_result){
  $_SESSION['accept_msg'] = "Customer ID: " . $orderID . " has been stated as delivered";
  header('location: ../delivered-orders.php');
  mysqli_close();
}

 ?>
