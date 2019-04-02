<?php
require_once('session-user.php');
require_once('mysqli_connect.php');
if(isset($_SESSION['user']['ID']) && $_SERVER['REQUEST_METHOD'] == "POST"){
  $productID = mysqli_real_escape_string($db_connect,trim($_POST['product_ID']));
  $userID = mysqli_real_escape_string($db_connect,trim($_SESSION['user']['ID']));
  $quantity = mysqli_real_escape_string($db_connect,trim($_POST['quantity']));

  $compare_query = "SELECT SUM(quantity) as total_quantity FROM cart where product_ID = '$productID'";
  $compare_result = mysqli_query($db_connect, $compare_query);
  $compare_row = mysqli_fetch_array($compare_result, MYSQLI_ASSOC);

  if($compare_row['total_quantity']+$quantity <= 10){
  $add_to_cart_query = "INSERT INTO cart (user_ID, product_ID, quantity, added_at) VALUES ('$userID', '$productID', '$quantity', NOW())";
  $result = mysqli_query($db_connect, $add_to_cart_query);
}
  else{
    $_SESSION['messages']['limit'] = 'Sorry, but you cannot add more than a total of 10 quantities for each item.';

  }
  header('location: ../cart.php');
}

 ?>
