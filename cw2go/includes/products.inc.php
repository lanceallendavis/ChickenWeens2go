<?php // Connect to the database
// Execute an insert query with checking
require_once('./mysqli_connect.php');
$errors = array();

if ($_SERVER['REQUEST_METHOD'] == 'POST') { #1
// Initialize an error array.
  // Check if username is entered

  if($_POST['action'] == 'addProduct'){
  if (empty($_POST['productName'])) {
    $errors[] = 'You did not enter a Product Name.';
  }
  else { $product_name = mysqli_real_escape_string($db_connect,trim($_POST['productName']));
  }
  if (empty($_POST['type'])) {
    $errors[] = 'You did not enter a type.';
  }
  else { $type = mysqli_real_escape_string($db_connect, trim($_POST['type']));
  }
  if (empty($_POST['description'])) {
    $errors[] = 'You did not enter a description.';
  }
  else { $description = mysqli_real_escape_string($db_connect, trim($_POST['description']));
  }
  if (empty($_POST['price'])) {
    $errors[] = 'You did not enter a price.';
  }
  else { $price = mysqli_real_escape_string($db_connect, trim($_POST['price']));
  }

  $check_products_query = "SELECT name FROM products where name = '$product_name'";
  $products_result = mysqli_query($db_connect, $check_products_query);
  if (mysqli_num_rows($products_result) != 0){
     $errors[] = 'Product already exists.';
     echo 'error';
   }
  //Check if all fields are filled out correctly
  if (empty($errors)) {
  $add_query = "INSERT INTO products (name, type, description, price , added_at)
  VALUES ('$product_name', '$type', '$description', '$price', NOW() )"; #6
  $add_result = mysqli_query($db_connect, $add_query);
  if($add_result){
    header('location: ../admin-products.php');
    exit();
  }
}
}
} // End of the main Submit conditional
?>
