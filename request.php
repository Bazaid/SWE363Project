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
$user = Session::get("user");

$smarty->assign('requestId', $id);

if (isset($_POST['comment']) && !empty($_POST['comment'])) {
    $com = $_POST['comment'];
    $date = date('Y-m-d'); 
    $sql = "INSERT INTO `comments` 
    (`requests_id`, `user_id`, `comment`, `date`)
    VALUES
        ($id, $user->id, '$com', '$date');
    ";
    $mysqli->query($sql);
}


$sql = "SELECT * FROM `requests` where id ='$id'";
$result = $mysqli->query($sql);
$request = ($result->fetch_object());
if (!isset($request)) {
    header('Location: track.php'); 
    exit();
}
$smarty->assign('request', $request);


$sql2 = "SELECT * FROM `services` where id ='$request->service_id'";
$result = $mysqli->query($sql2);
$service = ($result->fetch_object());
$smarty->assign('service', $service);


$sql = "SELECT * FROM `comments` where requests_id ='$id' ORDER BY `date`";

if ($result = $mysqli->query($sql)) {

    while($row = $result->fetch_array(MYSQLI_ASSOC)) {
        $userid = $row["user_id"];
        $sql = "SELECT `first_name`, `last_name` FROM `users` where id ='$id'";
        $result2 = $mysqli->query($sql);
        $user = ($result2->fetch_object());
        $row['user_name'] = $user->first_name." ".$user->last_name;
        $commm[] = $row;
        
    }
}
if (!isset($commm)) {
    $commm = null;
}

$smarty->assign('commm', $commm);

$result->close();
$mysqli->close();

$smarty->display('request.tpl');

