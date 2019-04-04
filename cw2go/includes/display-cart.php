<?php
require_once('mysqli_connect.php');
$userID = $_SESSION['user']['ID'];
$display_cart_query = "SELECT product_image, prod.pieces as pieces, user.address as user_address, user.city as user_city, cart.ID, user.ID as user_ID, prod.ID as product_ID, prod.name as product_name,
prod.pieces as product_pieces, prod.description as product_description, prod.price as product_price,
SUM(cart.quantity) as cart_quantity, cart.quantity*prod.price AS subtotal
                      FROM products prod
                      inner join cart cart on prod.ID =  cart.product_ID
                      inner join users user on user.ID = cart.user_ID
                      WHERE user.ID = '$userID' GROUP BY prod.ID";
$display_result = mysqli_query($db_connect, $display_cart_query);

$total_query = "SELECT SUM(cart.quantity*prod.price) AS total from products prod
inner join cart cart on prod.ID =  cart.product_ID inner join users user on user.ID = cart.user_ID
WHERE user.ID = '$userID'";
$display_total_result = mysqli_query($db_connect, $total_query);
$total_row = mysqli_fetch_array($display_total_result, MYSQLI_ASSOC);

$locations_query = "SELECT * FROM locations";
$locations_result = mysqli_query($db_connect, $locations_query);

while($a = mysqli_fetch_array($locations_result, MYSQLI_ASSOC)) {
    $rows[] = $a;
}
 ?>
