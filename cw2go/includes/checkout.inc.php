<?php
include('mysqli_connect.php');
$userID = mysqli_real_escape_string($db_connect,trim($_POST['user_ID']));
$total = mysqli_real_escape_string($db_connect,trim($_POST['total']));
$mode_of_payment = mysqli_real_escape_string($db_connect,trim($_POST['modeOfPayment']));
$delivery_address = mysqli_real_escape_string($db_connect,trim($_POST['deliveryAddress']));

if($_SERVER['REQUEST_METHOD'] == "POST" && $_POST['action'] == "checkout"){
if(!isset($_POST['noProduct'])){
$order_query = "INSERT INTO orders (user_ID, total, status, mode_of_payment, delivery_address, placed_at)
                VALUES ('$userID', '$total', 'pending', '$mode_of_payment', '$delivery_address',   now())";
$order_result = mysqli_query($db_connect, $order_query);
$order_ID = mysqli_insert_id($db_connect);
  if($order_result){
    $i = 0;
    while(count($_POST['product_ID']) > $i) {
      $productID = $_POST['product_ID'][$i];
      $quantity = $_POST['quantity'][$i];
      $price = $_POST['subtotal'][$i];
      $order_details_query = "INSERT INTO order_details (order_ID, product_ID, quantity, subtotal)
                              VALUES ('$order_ID', '$productID', '$quantity', '$price')";
      $order_details_result = mysqli_query($db_connect, $order_details_query);
      $i++;
    }
    if($order_details_result){
      $delete_cart_query = "DELETE FROM cart WHERE user_ID = '$userID'";
      $delete_result = mysqli_query($db_connect, $delete_cart_query);
      if($delete_result){
      $_SESSION['checkout_msg'] = "Your order has been placed. Please wait 5-10 minutes on this page for confirmation.";
      header('location: ../transactions.php');
    }
  }
  }
}
else {
    die('No item data to process');
}
}


 ?>
