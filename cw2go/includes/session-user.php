<?php
session_start();
if(!isset($_SESSION['role']) or ($_SESSION['role'] !== 'user')){
  header('location: index.php');
}
 ?>
