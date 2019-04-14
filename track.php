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
if (!isset($requests)) {
    $requests = null;
}
$smarty->assign('requests', $requests);


$sql2 = "SELECT * FROM `services`";


if ($result = $mysqli->query($sql2)) {
    while($row = $result->fetch_array(MYSQLI_ASSOC)) {
            $services[] = $row;
    }
}

$smarty->assign('services', $services);

if (isset($requests)) {
    $CompletedCount = array_filter($requests,
    function($element) {
      return $element['completed'] == 1;
    });
    $CompletedCount = sizeof($CompletedCount);

    $PindingCount = array_filter($requests,
    function($element) {
        return $element['completed'] == 0;
    });
    $PindingCount = sizeof($PindingCount);
}else {
    $CompletedCount = 0;
    $PindingCount = 0;

}



$smarty->assign('CompletedCount', $CompletedCount);

$smarty->assign('PindingCount', $PindingCount);

$smarty->display('track.tpl');