<?php
require_once('mysqli_connect.php');
require_once('session-user.php');
$id = $_GET['order_id'];
$query = "
SELECT * 
FROM `orders`
RIGHT JOIN `order_details`
ON `orders`.`ID` = `order_details`.`order_ID`
INNER JOIN `products`
ON `order_details`.`product_ID` = `products`.`ID`
WHERE `orders`.`ID` = $id";
$display_result = mysqli_query($db_connect, $query);
 ?>
