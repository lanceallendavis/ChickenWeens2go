<?php
require_once('./includes/mysqli_connect.php');
$userID = $_GET['id'];
$delete_user_query = "DELETE FROM users WHERE ID = $userID";

if (mysqli_query($db_connect, $delete_user_query)) {
    mysqli_close($db_connect);
    header('Location: admin-userslist.php'); //If book.php is your main page where you list your all records
    exit;
}
else {
    echo "Error deleting record";
}
 ?>
