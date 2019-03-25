<?php
if($total_row['total'] == NULL){
  $_SESSION['messages']['noAdded'] = 'You did not add any product';
  header('location: cart.php');
}
if(isset($_POST['address']) && $_POST['modeOfPayment'] == 'Cash On Delivery'){
$used_address = $_POST['address'];
$mode_of_payment = $_POST['modeOfPayment'];
$city = mysqli_real_escape_string($db_connect, trim($_POST['city']));
if($used_address == 'anotherAddress'){
  $address_process_query = "SELECT * from locations where city = $city";
  $address_result = mysqli($db_connect, $address_process_query);
  $address_row = mysqli_fetch_array($address_result, MYSQLI_ASSOC);
}
else{
  $userID = $_SESSION['user']['ID'];
  $address_process_query = "SELECT address, locations.city, estimated_fee from users, locations where users.city = locations.city and  users.ID = '$userID' ";
  $address_result = mysqli_query($db_connect, $address_process_query);
  $address_row = mysqli_fetch_array($address_result, MYSQLI_ASSOC);
}
}

 ?>
