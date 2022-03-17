<?php
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);

    session_start();

    if (isset($_GET['logout'])) {
        session_destroy();
        header('Location:index.php?success=disconnect');
    }

    $email = trim(htmlspecialchars($_POST['email']));
    $username = trim(htmlspecialchars($_POST['username']));
    $password = trim(htmlspecialchars($_POST['password']));
    $password2 = trim(htmlspecialchars($_POST['password2']));

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        header("Location:index.php?message=<div>Email is invalid</div>");
        exit();
    }
    
    if (strlen($username) < 3 || strlen($username) > 100) {
        header("Location:index.php?message=<div>Username must be more than 2 characters...</div>");
        exit();
    } 
    
    if (strlen($password) < 6 || strlen($password) > 100) {
        header("Location:index.php?message=<div'>Password must be more than 5 characters...</div>");
        exit();
    }
    
    if ($password !== $password2) {
        header("Location:index.php?message=<div>Password doesn't match</div>");
        exit();
    }
    
    $password = password_hash($password, PASSWORD_DEFAULT);

    header("Location:connect.php");
    
?>


    

    