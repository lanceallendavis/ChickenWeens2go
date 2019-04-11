<?php
require_once('./mysqli_connect.php');
$login_errors = array();

if($_SERVER['REQUEST_METHOD'] == 'POST'){

  $id = mysqli_real_escape_string($db_connect,trim($_POST['id']));
  $city = mysqli_real_escape_string($db_connect,trim($_POST['city']));
  $distance = mysqli_real_escape_string($db_connect,trim($_POST['distance']));
  $estimated_fee = mysqli_real_escape_string($db_connect,trim($_POST['estimated_fee']));
$edit_query = "UPDATE locations SET city='$city', distance='$distance', estimated_fee='$estimated_fee'
               WHERE ID = '$id'";
$result = mysqli_query($db_connect, $edit_query);
 if($result){
 header('location: ../admin-locations.php');
 echo 'edit successful';
}
}
?>
