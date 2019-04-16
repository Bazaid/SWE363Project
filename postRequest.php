<?php
require_once('include/config.php');
require_once('include/template.php');
require_once('include/session.php');

if (!Session::isLoggedIn()) {
    echo 'no';
    http_response_code(400);
    exit();
}


if (!isset($_POST['service_id']) || !isset($_POST['info']) || empty($_POST['info'])) {
    var_dump($_POST);
    http_response_code(400);
    exit();
}

$info = $_POST['info'];
$service_id = $_POST['service_id'];
$user = Session::get("user");
$date = date('Y-m-d');
$sql = "INSERT INTO `requests` (`service_id`, `user_id`, `staff_id`, `info`, `completed`, `created_at`, `completed_at`, `room`, `building`)
VALUES
	('$service_id', '$user->id', -1, '$info', 0, '$date', NULL, $user->room, $user->building);
";
if ($result = $mysqli->query($sql)) {

    $result->close();
    $mysqli->close();
    exit('done');
}else {

    $mysqli->close();
    http_response_code(400);
    exit(); 
}
