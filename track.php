<?php
require_once('include/config.php');
require_once('include/template.php');
require_once('include/session.php');

if (!Session::isLoggedIn()) {
    header('Location: login.php'); 
    exit();
}

$user = Session::get("user");

$sql = "SELECT * FROM `requests` where user_id ='$user->id'";
if ($result = $mysqli->query($sql)) {
    while($row = $result->fetch_array(MYSQLI_ASSOC)) {
            $requests[] = $row;
    }
}

$sql2 = "SELECT * FROM `services`";


if ($result = $mysqli->query($sql2)) {
    while($row = $result->fetch_array(MYSQLI_ASSOC)) {
            $services[] = $row;
    }
}

$smarty->assign('services', $services);
$smarty->assign('requests', $requests);
$CompletedCount = array_filter($requests,
function($element) {
  return $element['completed'] == 1;
});
$smarty->assign('CompletedCount', sizeof($CompletedCount));

$PindingCount = array_filter($requests,
function($element) {
  return $element['completed'] == 0;
});
$smarty->assign('PindingCount', sizeof($PindingCount));

$smarty->display('track.tpl');