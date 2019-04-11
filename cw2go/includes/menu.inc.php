<?php
require_once('mysqli_connect.php');
$menu_query = "SELECT products.pieces, products.name as name, products.ID as product_ID, products.description, products.product_image, products.price, stocks.stock_count as stock_count
               FROM products left join stocks on products.stock_name = stocks.name WHERE availability = 1";
$result = mysqli_query($db_connect, $menu_query);
?>
