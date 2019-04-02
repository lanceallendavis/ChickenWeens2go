<?php
require_once('./mysqli_connect.php');
$errors = array();

if ($_SERVER['REQUEST_METHOD'] == 'POST') { #1
// Initialize an error array.
  // Check if username is entered


  if($_POST['action'] == 'addStock'){
  if (empty($_POST['stockName'])) {
    $errors[] = 'You did not enter a Stock Name.';
  }
  else { $stock_name = mysqli_real_escape_string($db_connect,trim($_POST['stockName']));
  }
  if (empty($_POST['stockCount'])) {
    $errors[] = 'You did not enter a number of stocks.';
  }
  else { $stock_count = mysqli_real_escape_string($db_connect, trim($_POST['stockCount']));
  }
  if (empty($_POST['demand'])) {
    $errors[] = 'You did not enter a number of demand.';
  }
  else { $demand = mysqli_real_escape_string($db_connect, trim($_POST['demand']));
  }

   }
  //Check if all fields are filled out correctly
  if (empty($errors)) {
  $add_query = "INSERT INTO stocks (name, stock_count, demand_count, added_at)
  VALUES ('$stock_name', '$stock_count', '$demand', NOW() )"; #6
  $add_result = mysqli_query($db_connect, $add_query);
  if($add_result){
    header('location: ../admin-stocks.php');
    exit();
  }
}

} // End of the main Submit conditional
?>
