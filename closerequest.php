<?php
require_once('include/config.php');
require_once('include/template.php');
require_once('include/session.php');

if (!Session::isLoggedIn()) {
    http_response_code(400);
    exit('eror1');
}

if (!isset($_GET['request_id']) || empty($_GET['request_id']))  {
    http_response_code(400);
    exit('error2');
}

$request_id = $_GET['request_id'];
$user = Session::get("user");

$sql = "SELECT * FROM `requests` where id='$request_id' and (`user_id` = $user->id OR `staff_id` = $user->id )";
$result = $mysqli->query($sql);
$request = ($result->fetch_object());

if ($request) {
    if (!empty($request->id)) {
        $sql = "DELETE FROM requests
        WHERE id='$request->id';";
        if(!$mysqli->query($sql)) {
            http_response_code(400);
            exit('error deletion');
        }
    }
}else {
    http_response_code(400);
    exit('error3');
}
$result->close();
$mysqli->close();
