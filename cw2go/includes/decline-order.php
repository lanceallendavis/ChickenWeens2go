<?php
require_once('./session-admin.php');
include('./mysqli_connect.php');
$orderID = $_GET['id'];
$decline_order_query = "UPDATE orders SET status  = 'declined', declined_at = NOW() where ID = $orderID";
$decline_result = mysqli_query($db_connect, $decline_order_query);
if($decline_result){
  $_SESSION['accept_msg'] = "Customer ID: " . $orderID . " has been accepted";
  header('location: ../declined-orders.php');
  mysqli_close();
}

 ?>
