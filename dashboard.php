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
    $smarty->display('staff.tpl');
    $mysqli->close();
    exit();
}else if ($user->role == 2){
    $smarty->display('admin.tpl');
    $mysqli->close();
    exit();
}


