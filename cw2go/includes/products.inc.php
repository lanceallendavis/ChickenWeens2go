<?php
require_once('./mysqli_connect.php');
$errors = array();
$name = $_FILES['productImage']['name'];
$path = "../images/product-images/" . $name;
move_uploaded_file($_FILES['productImage']['tmp_name'], $path);

if ($_SERVER['REQUEST_METHOD'] == 'POST') { #1
// Initialize an error array.
  // Check if username is entered

  if($_POST['action'] == 'addProduct'){
  if (empty($_POST['productName'])) {
    $errors[] = 'You did not enter a Product Name.';
  }
  else { $product_name = mysqli_real_escape_string($db_connect,trim($_POST['productName']));
  }
  if (empty($_POST['pieces'])) {
    $errors[] = 'You did not enter a number of pieces.';
  }
  else { $pieces = mysqli_real_escape_string($db_connect,trim($_POST['pieces']));
  }
  if (empty($_POST['stockName'])) {
    $errors[] = 'You did not enter a corresponding stock.';
  }
  else { $stock_name = mysqli_real_escape_string($db_connect, trim($_POST['stockName']));
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

   }
  //Check if all fields are filled out correctly
  if (empty($errors)) {
  $add_query = "INSERT INTO products (name, pieces, stock_name, description, price, product_image, added_at)
  VALUES ('$product_name', '$pieces', '$stock_name', '$description', '$price', '$name', NOW() )"; #6
  $add_result = mysqli_query($db_connect, $add_query);
  if($add_result){

   header('location: ../admin-products.php');
    exit();
  }
}

} // End of the main Submit conditional
?>
