<?php
$login_errors = array();
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  if($_POST['action'] == 'login'){

 if (!empty($_POST['username'])) {
 $username = mysqli_real_escape_string($db_connect, $_POST['username']);
 } else {
 $username= FALSE;
 $login_errors[] = '<p class="error">You forgot to enter your username.</p>';
 }
 // Validate the password
 if (!empty($_POST['password'])) {
 $password= mysqli_real_escape_string($db_connect, $_POST['password']);
 } else {
 $password= FALSE;
 $login_errors[] = '<p class="error">You forgot to enter your password.</p>';
 }
 if ($username && $password){//if no problems #2
//CHECK LOGIN CREDENTIALS
$login_query = "SELECT ID, first_name, role FROM users WHERE (username='$username' AND password=SHA1('$password'))";
// Run the query and assign it to the variable $result
$result = mysqli_query($db_connect, $login_query);
if (@mysqli_num_rows($result) == 1) {//if one database row (record) matches the input:-
// Start the session, fetch the record and insert the three values in an array
session_start();
$_SESSION = mysqli_fetch_array($result, MYSQLI_ASSOC);
// Use a ternary operation to set the URL #4
$url = ($_SESSION['role'] === 'admin') ? 'admin-page.php' : 'customer-page.php';
header('Location: ' . $url); // Make the browser load either the members’ or the admin page
exit(); // Cancel the rest of the script
 mysqli_free_result($result);
 mysqli_close($db_connect);
 }
 else {
   $login_errors[] = 'Invalid username or password';
 }
 }
 else{
   $login_errors[] = 'Please try again';
 }
}
mysqli_close($db_connect);
} // End of SUBMIT conditional.
?>
