<?php
require_once('include/config.php');
require_once('include/template.php');
require_once('include/session.php');

if (!Session::isLoggedIn()) {
    header('Location: index.php'); 
    exit();
}

if (!isset($_GET['id'])) {
    header('Location: track.php');
    exit();
}
$id = $_GET['id'];
$sql = "SELECT * FROM `requests` where id ='$id'";
$result = $mysqli->query($sql);
$request = ($result->fetch_object());
$smarty->assign('request', $request);


$sql2 = "SELECT * FROM `services` where id ='$request->service_id'";
$result = $mysqli->query($sql2);
$service = ($result->fetch_object());
$smarty->assign('service', $service);


$smarty->display('request.tpl');