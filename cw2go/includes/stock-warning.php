<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require('../vendor/autoload.php');
require_once('./session-admin.php');
include('./mysqli_connect.php');

$stock_warning_query = "SELECT * FROM stocks";
$stock_warning_result = mysqli_query($db_connect, $stock_warning_query);
$message_array = array();
while($row = mysqli_fetch_array($stock_warning_result, MYSQLI_ASSOC)){
  if($row['stock_count'] <= 22){
    $message_array = 'Your stocks on ' . $row['name'] . ' only has ' . $row['stock_count'] . ' left! ';
  }
}
if($message_array != NULL){
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
    $mail->Subject = 'WARNING. LOW ON STOCKS.';
    $mail->Body = $message_array;
    $mail->send();
header('location: ../accepted-orders.php');
mysqli_close();
}
catch(Excemption $e){
  echo 'msg could not be sent. Error: ', $mail->ErrorInfo;
  header('location: ../accepted-orders.php');
  mysqli_close();
}
}
header('location: ../accepted-orders.php');

 ?>
