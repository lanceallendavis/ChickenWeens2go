<?php
require_once('./mysqli_connect.php');
$login_errors = array();
var_dump($_POST);
var_dump($_FILES);
if($_SERVER['REQUEST_METHOD'] == 'POST'){
  $name = $_FILES['profileImage']['name'];
  $path = "../images/user-images/" . $name;
  move_uploaded_file($_FILES['profileImage']['tmp_name'], $path);

  $id = mysqli_real_escape_string($db_connect,trim($_POST['id']));
  $firstName = mysqli_real_escape_string($db_connect,trim($_POST['firstName']));
  $lastName = mysqli_real_escape_string($db_connect,trim($_POST['lastName']));
  $email = mysqli_real_escape_string($db_connect,trim($_POST['email']));
  $address = mysqli_real_escape_string($db_connect,trim($_POST['address']));
  $password = mysqli_real_escape_string($db_connect,trim($_POST['oldPassword']));
$edit_query = "UPDATE users SET first_name='$firstName', last_name='$lastName', email='$email', address='$address'
               WHERE ID = '$id' AND password = SHA1('$password')";
$result = mysqli_query($db_connect, $edit_query);
 if($result){
 header('location: ../user-page.php');
 echo 'edit successful';
}
}
?>
