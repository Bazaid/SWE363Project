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

if (isset($_GET) && !empty($_GET)) {
    $userid = $_GET['userid'];
    if (isset($_GET['unban']) && !empty($_GET['unban'])) {
        $query = "UPDATE `users` SET  `ban` ='0'  WHERE `id` = '$userid'";
        if ($mysqli->query($query)) {
            $smarty->assign('alert', 2);
        }else {
            $smarty->assign('alert', -2);
        }
    }else {
        $query = "UPDATE `users` SET  `ban` ='1'  WHERE `id` = '$userid'";
        if ($mysqli->query($query)) {
            $smarty->assign('alert', 1);
        }else {
            $smarty->assign('alert', -1);
        }
    }

}


$sql = "SELECT * FROM `users` WHERE role ='0'";
$users = null;
if ($result = $mysqli->query($sql)) {
    while($row = $result->fetch_array(MYSQLI_ASSOC)) {
            $users[] = $row;
    }
}

$smarty->assign('users', $users);



$result->close();
$mysqli->close();


$smarty->display('manage_users.tpl');
