<?php
  header("Access-Control-Allow-Origin: *");
  $mysqli =  mysqli_connect("127.0.0.1:32811","root","","project");
  define('__URL', 'http://localhost:8000/');
  if (!$mysqli) {
   die('Could not connect: ' . mysql_error());
}