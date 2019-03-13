<?php // Connect to the database
// Execute an insert query with checking
require_once('mysqli_connect.php');
$errors = array();

$name = $_FILES['profileImage']['name'];
$path = "../images/user-images/" . $name;
move_uploaded_file($_FILES['profileImage']['tmp_name'], $path);

if ($_SERVER['REQUEST_METHOD'] == 'POST') { #1
// Initialize an error array.
  // Check if username is entered
  if($_POST['action'] == 'register'){
  if (empty($_POST['username'])) {
    $errors[] = 'You did not enter your username.';
  }
  else { $username = mysqli_real_escape_string($db_connect,trim($_POST['username']));
  }
  if (empty($_POST['firstName'])) {
    $errors[] = 'You did not enter your first name.';
  }
  else { $first_name = mysqli_real_escape_string($db_connect, trim($_POST['firstName']));
  }
  // Check if last name is entered
  if (empty($_POST['lastName'])) {
    $errors[] = 'You did not enter your last name.';
  }
  else { $last_name = mysqli_real_escape_string($db_connect, trim($_POST['lastName']));
  }
  // Check if email is entered
  if (empty($_POST['email'])) {
    $errors[] = 'You did not enter your email address.';
  }
  else { $email = mysqli_real_escape_string($db_connect, trim($_POST['email']));
  }
  // Check if address is entered
  if (empty($_POST['address'])) {
    $errors[] = 'You did not enter your address.';
  }
  else { $address = trim($_POST['address']);
  }
   // Check if entered passwords match
  if (!empty($_POST['password'])) {
    if ($_POST['password'] != $_POST['repeatPass']) {
      $errors[] = 'Your passwords were not the same.';
    }
    else { $password = mysqli_real_escape_string($db_connect, trim($_POST['password']));
    }
  }
  else { $errors[] = 'You did not enter your password.';
  }
  $check_username_query = "SELECT username FROM users where username = '$username'";
  $username_result = mysqli_query($db_connect, $check_username_query);
  if (mysqli_num_rows($username_result) != 0){
     $errors[] = 'username already exists.';
     ;
   }
  //Check if all fields are filled out correctly
  if (empty($errors)) {
  $register_query = "INSERT INTO users (username, first_name, last_name, email, address, password, profile_photo, registered_at)
  VALUES ('$username', '$first_name', '$last_name', '$email', '$address', SHA1('$password'), '$name',  NOW() )"; #6
  $result = mysqli_query($db_connect, $register_query);

   // Run the query. #7
  if ($result) {
  // Check if connection and query is successful
    if ($email && $password){//if no problems #2
    //CHECK LOGIN CREDENTIALS
    $login_query = "SELECT ID, first_name, profile_photo, role FROM users WHERE (email='$email' AND password=SHA1('$password'))";
    $result = mysqli_query($db_connect, $login_query);

      if (@mysqli_num_rows($result) == 1) {//if one database row (record) matches the input:-
        // Start the session, fetch the record and insert the three values in an array
        session_start();
        $_SESSION = mysqli_fetch_array($result, MYSQLI_ASSOC);
        // Use a ternary operation to set the URL #4
        $url = ($_SESSION['role'] === 'admin') ? 'admin-page.php' : 'user-page.php';
        header('Location: ../' . $url); // Make the browser load either the members’ or the admin page
        exit(); // Cancel the rest of the script
        mysqli_free_result($result);
        mysqli_close($db_connect);
      }
   }
 }
}
}
} // End of the main Submit conditional
?>
