<?php
session_start();
if(!isset($_SESSION['user']['role']) or ($_SESSION['user']['role'] !== 'user')){
  header('location: index.php');
}
 ?>
