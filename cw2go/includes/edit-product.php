<?php
require_once('./mysqli_connect.php');
$login_errors = array();
if($_SERVER['REQUEST_METHOD'] == 'POST'){
  if($_POST['action'] == 'editProduct'){
  if(isset($_POST['id'])){
  $id = $_POST['id'];
  $product_name = mysqli_real_escape_string($db_connect,trim($_POST['productName']));
  $type = mysqli_real_escape_string($db_connect,trim($_POST['type']));
  $description = mysqli_real_escape_string($db_connect,trim($_POST['description']));
  $price = mysqli_real_escape_string($db_connect,trim($_POST['price']));
  $availability = mysqli_real_escape_string($db_connect,trim($_POST['availability']));

$edit_query = "UPDATE products SET name='$product_name', type='$type', description='$description', price='$price', availability='$availability' WHERE ID = '$id'";
$result = mysqli_query($db_connect, $edit_query);
if($result){
  header('location: ../admin-products.php');
  exit(success);
}

else {
  echo 'error';
}
}
}
}
?>
