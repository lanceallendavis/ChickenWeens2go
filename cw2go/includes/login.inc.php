<?php
session_start();
require_once('mysqli_connect.php');

if($_POST['action'] == 'login' && $_SERVER['REQUEST_METHOD'] === 'POST'){
    
    $login_errors = [];
    if (empty($_POST['username'])) {
       $login_errors[] = 'You forgot to enter your username.';
    }

     if (empty($_POST['password'])) { 
        $login_errors[] = 'You forgot to enter your password.';
     }
      
    $username = mysqli_real_escape_string($db_connect, $_POST['username']);
    $password= mysqli_real_escape_string($db_connect, $_POST['password']);

    $login_query = "SELECT * FROM users WHERE (username='$username' AND password=SHA1('$password'))";
    $result = mysqli_query($db_connect, $login_query);

    if (@mysqli_num_rows($result) <= 0) {
       $login_errors[] = 'Invalid username or password';
    }
    
    if (count($login_errors) > 0) {
        $_SESSION['errors'] = $login_errors;
        header('Location: ../login.php');
        die();
    }
    
    $_SESSION['user'] = mysqli_fetch_assoc($result);
    $url = $_SESSION['user']['role'] === 'admin' ? 'admin-page.php' : 'user-page.php';
    header('Location: ../' . $url);
    die();
}
