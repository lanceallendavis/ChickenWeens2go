<?php
if($total_row['total'] == NULL){
  $_SESSION['messages']['noAdded'] = 'You did not add any product';
  header('location: cart.php');
}
$mode_of_payment = $_POST['modeOfPayment'];

if(isset($_POST['address']) && $_POST['modeOfPayment'] == 'Cash On Delivery'){
$used_address = $_POST['address'];
$city = mysqli_real_escape_string($db_connect, trim($_POST['city']));
if($used_address == 'anotherAddress'){
  $address_process_query = "SELECT * from locations where city = $city";
  $address_result = mysqli($db_connect, $address_process_query);
  $address_row = mysqli_fetch_array($address_result, MYSQLI_ASSOC);
  $overall_total = $total_row['total'] + $address_row['estimated_fee'];

}
else{
  $userID = $_SESSION['user']['ID'];
  $address_process_query = "SELECT address, locations.city as city, estimated_fee from users, locations where users.city = locations.city and  users.ID = '$userID' ";
  $address_result = mysqli_query($db_connect, $address_process_query);
  $address_row = mysqli_fetch_array($address_result, MYSQLI_ASSOC);
  $overall_total = $total_row['total'] + $address_row['estimated_fee'];
}
}
else{
  $overall_total = $total_row['total'];
}


 ?>
