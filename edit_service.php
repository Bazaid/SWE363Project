<?php
require_once('include/config.php');
require_once('include/template.php');
require_once('include/session.php');

if (!Session::isLoggedIn()) {
    header('Location: login.php'); 
    exit();
}

$user = Session::get("user");
if ($user->role != 2){
    header('Location: index.php'); 
    exit();
   
}
if (!isset($_GET) || empty($_GET)) {
    header('Location: index.php'); 
    exit();
}

if (!empty($_GET['delete']) && !empty($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "DELETE FROM services
    WHERE id='$id';";
    if ($mysqli->query($sql)) {
        header('Location: manage_services.php'); 
        exit();
    }else{
        http_response_code(400);
        exit('error2');
    }
}
if (!empty($_POST['name']) && !empty($_POST['desc'])) {
    $id = $_GET['id'];
    $name =$_POST['name'];
    $desc = $_POST['desc'];
    $query = "UPDATE `services` SET `name` = '$name', `description` ='$desc'  WHERE `id` = '$id'";
    $mysqli->query($query);
}
$id = $_GET['id'];
$sql = "SELECT * FROM `services` WHERE id='$id'";
$result = $mysqli->query($sql);
$service = ($result->fetch_object());

$result->close();
$mysqli->close();

$smarty->assign('service', $service);

$smarty->display('service.tpl');
