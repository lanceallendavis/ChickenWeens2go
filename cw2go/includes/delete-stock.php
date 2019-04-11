<?php
require_once('./mysqli_connect.php');
$stockID = $_GET['id'];
$delete_user_query = "DELETE FROM stocks WHERE ID = $stockID";

if (mysqli_query($db_connect, $delete_user_query)) {
    mysqli_close($db_connect);
    header('Location: ../admin-stocks.php'); //If book.php is your main page where you list your all records
    exit;
}
else {
    echo "Error deleting record";
}
 ?>
