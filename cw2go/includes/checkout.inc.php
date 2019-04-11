<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require('../vendor/autoload.php');
include('mysqli_connect.php');
require_once('session-user.php');
$userID = mysqli_real_escape_string($db_connect,trim($_POST['user_ID']));
$total = mysqli_real_escape_string($db_connect,trim($_POST['total']));
$mode_of_payment = mysqli_real_escape_string($db_connect,trim($_POST['modeOfPayment']));
if(isset($_POST['pickUpTime'])){
  $city = NULL;
  $pick_up_time = mysqli_real_escape_string($db_connect,trim($_POST['pickUpTime']));
}
else {
  $pick_up_time = NULL;
}
if(isset($_POST['deliveryAddress'])){
  $city = mysqli_real_escape_string($db_connect,trim($_POST['city']));
  $delivery_address = mysqli_real_escape_string($db_connect,trim($_POST['deliveryAddress']));
}
else{
  $delivery_address = NULL;
}

if($_SERVER['REQUEST_METHOD'] == "POST" && $_POST['action'] == "checkout"){
if(!isset($_POST['noProduct'])){
$order_query = "INSERT INTO orders (user_ID, total, status, mode_of_payment, delivery_address, city, pick_up_time, placed_at)
                VALUES ('$userID', '$total', 'pending', '$mode_of_payment', '$delivery_address','$city', '$pick_up_time',   now())";
$order_result = mysqli_query($db_connect, $order_query);
$order_ID = mysqli_insert_id($db_connect);
  if($order_result){
    $i = 0;
    while(count($_POST['product_ID']) > $i) {
      $productID = $_POST['product_ID'][$i];
      $quantity = $_POST['quantity'][$i];
      $price = $_POST['subtotal'][$i];
      $deduct_to_stocks = $_POST['deductToStocks'][$i];
      $order_details_query = "INSERT INTO order_details (order_ID, product_ID, quantity, subtotal, stock_deduction)
                              VALUES ('$order_ID', '$productID', '$quantity', '$price', '$deduct_to_stocks')";
      $order_details_result = mysqli_query($db_connect, $order_details_query);

      $deduct_query = "UPDATE stocks left join products on products.stock_name = stocks.name
      left join order_details on products.ID = order_details.product_ID SET stock_count =  stock_count - $deduct_to_stocks where products.ID = $productID";
      $deduct_result = mysqli_query($db_connect, $deduct_query);


      $i++;

    }
    if($order_details_result){
      $delete_cart_query = "DELETE FROM cart WHERE user_ID = '$userID'";
      $delete_result = mysqli_query($db_connect, $delete_cart_query);
      if($delete_result){
        $mail = new PHPMailer(true);
        //CONFIG
        try{
          $mail->SMTPDebug = 2;
          $mail->isSMTP();
          $mail->Host = 'smtp.gmail.com';
          $mail->SMTPAuth = true;
          $mail->Username = 'cw2goph@gmail.com';
          $mail->Password = 'cw2gomail';
          $mail->SMTPSecure = 'tls';
          $mail->Port = 587;

          //RECIPIENTS
          $mail->setFrom('cw2goph@gmail.com', 'Chicken Weens 2Go');
          $mail->addAddress('cw2goph@gmail.com');
          $mail->addReplyTo('cw2goph@gmail.com');

          //CONTENT
          $mail->isHTML(true);
          $mail->Subject = 'An order has been placed';
          $mail->Body = 'A new order has been placed by a user. Please check your pendings orders page.';
          $mail->send();




      $_SESSION['checkout_msg'] = "Your order has been placed. Please wait 5-10 minutes for the confirmation in the e-mail you have used for this account.";
      header('location: ../transactions.php');
    } catch(Excemption $e){
      echo 'msg could not be sent. Error: ', $mail->ErrorInfo;
    }
    }
  }
  }
}
else {
    die('No item data to process');
}
}


 ?>
