<?php
session_start();
if(!isset($_SESSION['role']) or ($_SESSION['role'] !== 'admin')){
header('location: index.php');
}
?>
