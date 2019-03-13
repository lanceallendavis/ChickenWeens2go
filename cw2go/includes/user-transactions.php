<?php
require_once('mysqli_connect.php');
require_once('session-user.php');
$userID = $_SESSION['ID'];
$display_transactions_query = "SELECT * FROM orders WHERE user_ID = '$userID' ";
$display_result = mysqli_query($db_connect, $display_transactions_query);
 ?>
