<?php
require_once('./includes/mysqli_connect.php');
$users_list_query = "SELECT ID, username, role, registered_at FROM users";
$result = mysqli_query($db_connect, $users_list_query);
?>
