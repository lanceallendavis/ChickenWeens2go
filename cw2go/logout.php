<?php
session_start();//access the current session. #1
// if no session variable exists then redirect the user
if (!isset($_SESSION['ID'])) { #2
  header("location:index.php");
  exit();
//cancel the session and redirect the user:
}
else{ //cancel the session #3
  session_destroy(); // Destroy the session
  header("location:index.php");
  var_dump($_SESSION);
  exit();
}
?>
