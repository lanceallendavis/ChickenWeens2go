<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require('../vendor/autoload.php');
require_once('./session-admin.php');
include('./mysqli_connect.php');
$orderID = $_GET['id'];
$decline_order_query = "UPDATE orders SET status  = 'declined', declined_at = NOW() where ID = $orderID";
$decline_result = mysqli_query($db_connect, $decline_order_query);

$return_query = "UPDATE stocks left join products on products.stock_name = stocks.name
left join order_details on products.ID = order_details.product_ID SET stock_count =  stock_count + order_details.stock_deduction  where order_details.order_ID = '$orderID' ";
$return_result = mysqli_query($db_connect, $return_query);

$email_to_user_query = "SELECT orders.ID as order_ID, users.email as name from users left join orders on users.ID = orders.user_ID where orders.ID = '$orderID' ";
$email_to_user_result = mysqli_query($db_connect, $email_to_user_query);
$email_array = mysqli_fetch_array($email_to_user_result, MYSQLI_ASSOC);
$email = $email_array['name'];
if($decline_result){
  $_SESSION['status_messages'] = "Customer ID: " . $orderID . " has been declined";
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
    $mail->addAddress($email);
    $mail->addReplyTo('cw2goph@gmail.com');

    //CONTENT
    $mail->isHTML(true);
    $mail->Subject = 'Order Declined';
    $mail->Body = 'Sorry, your order has been declined. ';
    $mail->send();
    header('location: ../accepted-orders.php');
    mysqli_close();
    echo $_GET['id'];
  } catch(Excemption $e){
    echo 'msg could not be sent. Error: ', $mail->ErrorInfo;
  }

  header('location: ../declined-orders.php');
  mysqli_close();
}

 ?>
