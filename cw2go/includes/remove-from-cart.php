<?php
require_once('mysqli_connect.php');
$cartID = $_GET['id'];
$delete_user_query = "DELETE FROM cart WHERE ID = $cartID";

if (mysqli_query($db_connect, $delete_user_query)) {
    mysqli_close($db_connect);
    header('Location: ../cart.php'); //If book.php is your main page where you list your all records
    exit;
}
else {
    echo "Error deleting record";
}
 ?>
