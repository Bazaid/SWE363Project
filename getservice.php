<?php
require_once('include/config.php');

if (isset($_GET['service_id'])) {
    $service_id = $_GET['service_id'];
    $sql = "SELECT `name`, `description`, `logo` FROM `services` where id='$service_id'";
    
    if ($result = $mysqli->query($sql)) {
    
        while($row = $result->fetch_array(MYSQLI_ASSOC)) {
                $myArray[] = $row;
        }
        echo json_encode($myArray);
    }
    
    
    $result->close();
    $mysqli->close();
}
