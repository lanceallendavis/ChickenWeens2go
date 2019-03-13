<?php
require_once('mysqli_connect.php');
$display_cart_query = "SELECT cart.ID, user.ID as user_ID, prod.ID as product_ID, prod.name as product_name,
prod.pieces as product_pieces, prod.description as product_description, prod.price as product_price,
cart.quantity as cart_quantity, cart.quantity*prod.price AS subtotal
                      FROM products prod
                      inner join cart cart on prod.ID =  cart.product_ID
                      inner join users user on user.ID = cart.user_ID";
$display_result = mysqli_query($db_connect, $display_cart_query);

$total_query = "SELECT SUM(cart.quantity*prod.price) AS total from products prod
inner join cart cart on prod.ID =  cart.product_ID inner join users user on user.ID = cart.user_ID";
$display_total_result = mysqli_query($db_connect, $total_query);

 ?>
