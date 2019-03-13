<?php
require_once('./session-admin.php');
include('./mysqli_connect.php');
$orderID = $_GET['id'];
  $accept_order_query = "UPDATE orders SET status = 'accepted', accepted_at = NOW() where ID = '$orderID'";
$accept_result = mysqli_query($db_connect, $accept_order_query);
if($accept_result){
  $_SESSION['accept_msg'] = "Customer ID: " . $orderID . " has been accepted";
  header('location: ../accepted-orders.php');
  mysqli_close();
}
 ?>
