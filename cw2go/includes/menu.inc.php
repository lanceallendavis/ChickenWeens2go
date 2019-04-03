<?php
require_once('mysqli_connect.php');
$menu_query = "SELECT products.name as name, products.pieces as pieces, products.ID as product_ID, products.description, products.product_image, products.price, stocks.stock_count as stock_count
               FROM products left join stocks on products.stock_name = stocks.name";
$result = mysqli_query($db_connect, $menu_query);
?>
