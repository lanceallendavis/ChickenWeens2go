<?php
include('mysqli_connect.php');
$sales_product_query = "SELECT products.name as product_name, sum(order_details.quantity) as quantity, sum(subtotal) as total from products left join order_details on products.ID = order_details.product_ID group by products.ID order by quantity desc limit 5";
$sales_product_results = mysqli_query($db_connect, $sales_product_query);

?>
