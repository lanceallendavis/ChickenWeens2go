<?php
require_once('mysqli_connect.php');
$menu_query = "SELECT * FROM products";
$result = mysqli_query($db_connect, $menu_query);
?>
