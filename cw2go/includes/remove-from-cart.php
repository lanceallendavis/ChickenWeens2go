<?php
require_once('mysqli_connect.php');
$cartID = $_GET['id'];
$productID = $_GET['product_id'];
var_dump($_GET);
$delete_user_query = "DELETE FROM cart WHERE ID = '$cartID' OR product_ID = '$productID'";

if (mysqli_query($db_connect, $delete_user_query)) {
    mysqli_close($db_connect);
    header('Location: ../cart.php'); //If book.php is your main page where you list your all records
    exit;
}
else {
    echo "Error deleting record";
}
 ?>
