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

$mysqli->close();
$smarty->display('admin.tpl');
