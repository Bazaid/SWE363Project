<?php
require_once('include/config.php');
require_once('include/template.php');
require_once('include/session.php');

if (!Session::isLoggedIn()) {
    header('Location: login.php'); 
    exit();
}
$user = Session::get("user");
if ($user->role == 0) {
    header('Location: index.php'); 
    exit();
}
if ($user->role == 1) {

    $sql = "SELECT * FROM `services`";


    if ($result = $mysqli->query($sql)) {
        while($row = $result->fetch_array(MYSQLI_ASSOC)) {
                $services[] = $row;
        }
    }
    $smarty->assign('services', $services);

    
    $sql = "SELECT * FROM `requests` WHERE staff_id='$user->id'";
    $requests = null;
    if ($result = $mysqli->query($sql)) {
        while($row = $result->fetch_array(MYSQLI_ASSOC)) {
            $requests[] = $row;
        }
    }

    $mysqli->close();
    $result->close();
    $smarty->assign('requests',$requests);
    $smarty->display('staff.tpl');

}else if ($user->role == 2){
    $mysqli->close();
    $smarty->display('admin.tpl');
}


