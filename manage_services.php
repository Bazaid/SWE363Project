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
if (isset($_POST) && !empty($_POST) && isset($_FILES) && !empty($_FILES)) {
$name = $_POST['name'];
$description = $_POST['description'];
$target_dir = "./assets/img/";
$date = date('Y-m-d'); 
$target_file = $target_dir . basename($_FILES["logo"]["name"]);
if (move_uploaded_file($_FILES["logo"]["tmp_name"], $target_file)) {
    $logo = basename( $_FILES["logo"]["name"]);

    $sql = "INSERT INTO `services` 
    (`logo`, `name`, `description`, `creation_date`)
    VALUES
        ('$logo', '$name', '$description', '$date');
    ";
    $smarty->assign('alert', 1);

    $mysqli->query($sql);
}else {
    $smarty->assign('alert', -1);
}
}
$sql = "SELECT * FROM `services`";

if ($result = $mysqli->query($sql)) {
    while($row = $result->fetch_array(MYSQLI_ASSOC)) {
            $services[] = $row;
    }
}



$result->close();
$mysqli->close();

$smarty->assign('services', $services);
$smarty->display('manage_services.tpl');
