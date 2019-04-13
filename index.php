<?php
require_once('include/config.php');
require_once('include/session.php');

require_once('include/template.php');

$sql = "SELECT * FROM `services`";


if ($result = $mysqli->query($sql)) {
    while($row = $result->fetch_array(MYSQLI_ASSOC)) {
            $services[] = $row;
    }
}



$result->close();
$mysqli->close();

$smarty->assign('services', $services);
$smarty->display('home.tpl');