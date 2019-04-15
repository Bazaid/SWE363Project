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

if (!isset($_GET) && !empty($_GET)) {
    http_response_code(400);
    exit('error');
} 
$sql2 = "SELECT * FROM `services`";


if ($result = $mysqli->query($sql2)) {
    while($row = $result->fetch_array(MYSQLI_ASSOC)) {
            $services[] = $row;
    }
}

$smarty->assign('services', $services);


$id = $_GET['id'];
if(isset($_GET['request_id']) & !empty($_GET['request_id'])) {
    $rid = $_GET['request_id'];
    $query = "UPDATE `requests` SET  `staff_id` ='$id'  WHERE `id` = '$rid'";
    if ($mysqli->query($query)) {
        $smarty->assign('alert', 1);
    }else {
        $smarty->assign('alert', -1);
    }

}

$sql = "SELECT * FROM `requests` WHERE staff_id='-1'";
$requests = null;
if ($result = $mysqli->query($sql)) {
    while($row = $result->fetch_array(MYSQLI_ASSOC)) {
            $requests[] = $row;
    }
}




$smarty->assign('staff_id', $id);

$result->close();
$mysqli->close();

$smarty->assign('requests', $requests);
$smarty->display('assign_requests.tpl');
