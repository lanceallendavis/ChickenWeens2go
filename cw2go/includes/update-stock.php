<?php
require_once('./mysqli_connect.php');
$login_errors = array();
if($_SERVER['REQUEST_METHOD'] == 'POST'){
  if($_POST['action'] == 'updateStock'){
  if(isset($_POST['id'])){
  $id = $_POST['id'];
  $stock_count = mysqli_real_escape_string($db_connect,trim($_POST['stockCount']));
  $demand = mysqli_real_escape_string($db_connect,trim($_POST['demand']));

$update_query = "UPDATE stocks SET stock_count='$stock_count', demand_count='$demand', updated_at=NOW() WHERE ID = '$id'";
$result = mysqli_query($db_connect, $update_query);
if($result){
  header('location: ../admin-stocks.php');
  exit(success);
}

else {
  echo 'error';
}
}
}
}
?>
