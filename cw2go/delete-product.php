<?php
require_once('./includes/mysqli_connect.php');
$productID = $_GET['id'];
$delete_product_query = "DELETE FROM products WHERE ID = $productID";

if (mysqli_query($db_connect, $delete_product_query)) {
    mysqli_close($db_connect);
    header('Location: admin-products.php');
    exit;
}
else {
    echo "Error deleting product";
}
 ?>
