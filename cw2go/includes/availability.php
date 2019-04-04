<?php
require_once('./mysqli_connect.php');
require('./session-admin.php');

$productID = $_GET['id'];


$select_edit_query = "SELECT * FROM products WHERE ID = $productID";
$result = mysqli_query($db_connect, $select_edit_query);
$row = mysqli_fetch_array($result);
if($row['availability'] == 1){
  $to_available_query = "UPDATE products SET availability = 0 WHERE ID = '$productID'";
  $to_available_result = mysqli_query($db_connect, $to_available_query);
  header('location: ../admin-products.php');
}
else{
  $to_available_query = "UPDATE products SET availability = 1 WHERE ID = '$productID'";
  $to_available_result = mysqli_query($db_connect, $to_available_query);
  header('location: ../admin-products.php');
}

?>
