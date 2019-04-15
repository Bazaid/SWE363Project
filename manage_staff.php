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
if (isset($_POST) && !empty($_POST)) {
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];

    $email = $_POST['email'];
    $password = password_hash($_POST['password'],PASSWORD_DEFAULT);
    $sql = "INSERT INTO `users` (`first_name`, `last_name`, `email`, `password`, `role`)
    VALUES
        ('$first_name', '$last_name', '$email', '$password', '1');
    ";
    if($mysqli->query($sql)) {
        $smarty->assign('alert', 1);
    }else {
        $smarty->assign('alert', -1);

    }

}

$sql = "SELECT * FROM `users` WHERE role ='1'";
$staff = null;
if ($result = $mysqli->query($sql)) {
    while($row = $result->fetch_array(MYSQLI_ASSOC)) {
            $staff[] = $row;
    }
}

$smarty->assign('staff', $staff);



$result->close();
$mysqli->close();


$smarty->display('manage_staff.tpl');
