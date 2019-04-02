<?php

require_once('./mysqli_connect.php');
$errors = array();
var_dump($_POST);

if ($_SERVER['REQUEST_METHOD'] == 'POST') { #1
// Initialize an error array.
  // Check if username is entered


  if($_POST['action'] == 'addLocation'){
  if (empty($_POST['locationName'])) {
    $errors[] = 'You did not enter a Product Name.';
  }
  else { $location_name = mysqli_real_escape_string($db_connect,trim($_POST['locationName']));
  }

  if (empty($_POST['distance'])) {
    $errors[] = 'You did not enter a description.';
  }
  else { $distance = mysqli_real_escape_string($db_connect, trim($_POST['distance']));
  }
  if (empty($_POST['estimatedFee'])) {
    $errors[] = 'You did not enter a price.';
  }
  else { $estimated_fee = mysqli_real_escape_string($db_connect, trim($_POST['estimatedFee']));
  }

   }
  //Check if all fields are filled out correctly
  if (empty($errors)) {
  $add_query = "INSERT INTO locations (city, distance, estimated_fee, added_at)
  VALUES ('$location_name', '$distance', '$estimated_fee', NOW() )"; #6
  $add_result = mysqli_query($db_connect, $add_query);
  if($add_result){
    header('location: ../admin-locations.php');
    exit();
  }
}

} // End of the main Submit conditional
?>
