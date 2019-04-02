<?php
// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// Load Composer's autoloader
require('../vendor/autoload.php');

$mail = new PHPMailer(true);
//CONFIG
try{
  // $mail->SMTPDebug = 2;
  // $mail->isSMTP();
  // $mail->Host = 'smtp.gmail.com';
  // $mail->SMTPAuth = true;
  // $mail->Username = 'cw2goph@gmail.com';
  // $mail->Password = 'cw2gomail';
  // $mail->SMTPSecure = 'tls';
  // $mail->Port = 587;
  //
  // //RECIPIENTS
  // $mail->setFrom('cw2goph@gmail.com', 'Chicken Weens 2Go');
  // $mail->addAddress('dlanceallen@gmail.com');
  // $mail->addReplyTo('dlanceallen@gmail.com');
  //
  // //CONTENT
  // $mail->isHTML(true);
  // $mail->Subject = 'Your order has been delivered';
  // $mail->Body = 'Hi your order has been delivered. Please wait 1-2hrs for its arrival.';
  // $mail->send();
  // echo 'msg has been sent';
  echo $_GET['id'];
} catch(Excemption $e){
  echo 'msg could not be sent. Error: ', $mail->ErrorInfo;
}

?>
