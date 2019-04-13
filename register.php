<?php
require_once('include/config.php');
require_once('include/template.php');
require_once('include/session.php');

if (Session::isLoggedIn()) {
    header('Location: index.php'); 
    exit();
}

if (isset($_POST['email'])) {
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];

    $email = $_POST['email'];
    $password = password_hash($_POST['password'],PASSWORD_DEFAULT);
    $building = $_POST['building'];
    $room = $_POST['room'];
    $sql = "INSERT INTO `users` (`first_name`, `last_name`, `email`, `password`, `room`, `building`)
    VALUES
        ('$first_name', '$last_name', '$email', '$password', '$room', '$building');
    ";
    if($result = $mysqli->query($sql)) {
        header('Location: login.php'); 
        exit();
    }else {

    }

}

$smarty->display('register.tpl');