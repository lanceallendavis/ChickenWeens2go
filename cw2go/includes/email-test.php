<?php
$to_email = 'dlanceallen@gmail.com';
$subject = 'Testing PHP Mail';
$message = 'This mail is sent using the PHP mail function.';
$headers = 'From: noreply@chickenweens2go. com';
mail($to_email,$subject,$message,$headers);
?>
