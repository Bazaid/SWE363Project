<?php
require_once('include/config.php');
require_once('include/template.php');
require_once('include/session.php');

if (!Session::isLoggedIn()) {
    header('Location: login.php'); 
    exit();
}
$userSession = Session::get("user");
if (isset($_POST) && !empty($_POST)) {
    $email = $_POST['email'];
    $room = $_POST['room'];
    $building = $_POST['building'];

    $query = "UPDATE `users` SET `email` = '$email', `building` = '$building', `room` ='$room'  WHERE `id` = '$userSession->id'";

    $mysqli->query($query);
  
}

$sql = "SELECT * FROM `users` where id='$userSession->id'";
$result = $mysqli->query($sql);

$user = ($result->fetch_object());
$smarty->assign('user', $user);
$result->close();
$mysqli->close();

$smarty->display('profile.tpl');