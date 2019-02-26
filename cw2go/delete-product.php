<?php
require_once('./includes/mysqli_connect.php');
$productID = $_GET['id'];
$delete_product_query = "DELETE FROM products WHERE ID = $productID";

if (mysqli_query($db_connect, $delete_user_query)) {
    mysqli_close($db_connect);
    header('Location: admin-products.php'); //If book.php is your main page where you list your all records
    exit;
}
else {
    echo "Error deleting product";
}
 ?>
