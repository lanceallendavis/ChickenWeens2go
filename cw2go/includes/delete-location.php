<?php
require_once('./mysqli_connect.php');
$locationID = $_GET['id'];
$delete_user_query = "DELETE FROM locations WHERE ID = $locationID";

if (mysqli_query($db_connect, $delete_user_query)) {
    mysqli_close($db_connect);
    header('Location: ../admin-locations.php'); //If book.php is your main page where you list your all records
    exit;
}
else {
    echo "Error deleting record";
}
 ?>
