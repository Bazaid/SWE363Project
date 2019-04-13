<?php
require_once('include/config.php');
require_once('include/template.php');
require_once('include/session.php');

if (Session::isLoggedIn()) {
    header('Location: index.php'); 
    exit();
}

if (isset($_POST['email'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM `users` where email='$email'";
    $result = $mysqli->query($sql);

    $user = ($result->fetch_object());

    if(password_verify($password,$user->password)) {
        Session::set('login',true);
        Session::set('user',$user);
        header('Location: index.php'); 
        exit();
    }else {
        echo 'error';
    }
}

$smarty->display('login.tpl');