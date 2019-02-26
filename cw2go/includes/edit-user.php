<?php
require_once('./mysqli_connect.php');
$login_errors = array();
if($_SERVER['REQUEST_METHOD'] == 'POST'){

  if(isset($_POST['id'])){
  $id = $_POST['id'];
  $username = mysqli_real_escape_string($db_connect,trim($_POST['username']));
  $firstName = mysqli_real_escape_string($db_connect,trim($_POST['firstName']));
  $lastName = mysqli_real_escape_string($db_connect,trim($_POST['lastName']));
  $email = mysqli_real_escape_string($db_connect,trim($_POST['email']));
  $address = mysqli_real_escape_string($db_connect,trim($_POST['address']));

$edit_query = "UPDATE users SET username='$username', first_name='$firstName', last_name='$lastName', email='$email', address='$address' WHERE id = '$id'";
$result = mysqli_query($db_connect, $edit_query);
if($result){
  header('location: ../admin-userslist.php');
  echo 'edit successful';
}
}
}
?>
