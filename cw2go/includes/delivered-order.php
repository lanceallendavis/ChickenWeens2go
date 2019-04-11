<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require('../vendor/autoload.php');
require_once('./session-admin.php');
include('./mysqli_connect.php');
$orderID = $_GET['id'];
$delivered_order_query = "UPDATE orders SET status = 'delivered', delivered_at = NOW() where ID = $orderID";
$delivered_result = mysqli_query($db_connect, $delivered_order_query);
$email_to_user_query = "SELECT orders.ID as order_ID, users.email as name from users left join orders on users.ID = orders.user_ID where orders.ID = '$orderID' ";
$email_to_user_result = mysqli_query($db_connect, $email_to_user_query);
$email_array = mysqli_fetch_array($email_to_user_result, MYSQLI_ASSOC);
$email = $email_array['name'];

if($delivered_result){
  $_SESSION['status_messages'] = "Order ID: " . $orderID . " has been stated as delivered";
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
    $mail->Subject = 'Order Delivered';
    $mail->Body = 'Hi your order has been delivered!';
    $mail->send();
    header('location: ../delivered-orders.php');
    mysqli_close();


  } catch(Excemption $e){
    echo 'msg could not be sent. Error: ', $mail->ErrorInfo;
  header('location: ../delivered-orders.php');
  mysqli_close();
}
}
 ?>
