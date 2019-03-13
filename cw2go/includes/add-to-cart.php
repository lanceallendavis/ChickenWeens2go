<?php
require_once('session-user.php');
require_once('mysqli_connect.php');
if(isset($_SESSION['ID']) && $_SERVER['REQUEST_METHOD'] == "POST"){
  $productID = mysqli_real_escape_string($db_connect,trim($_POST['product_ID']));
  $userID = mysqli_real_escape_string($db_connect,trim($_SESSION['ID']));
  $quantity = mysqli_real_escape_string($db_connect,trim($_POST['quantity']));
  $add_to_cart_query = "INSERT INTO cart (user_ID, product_ID, quantity, added_at) VALUES ('$userID', '$productID', '$quantity', NOW())";
  $result = mysqli_query($db_connect, $add_to_cart_query);
if($result){
  header('location: ../cart.php');
}



}

 ?>
