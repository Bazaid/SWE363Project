<?php
  $mysqli =  mysqli_connect("127.0.0.1:32807","root","","project");
  define('__URL', 'http://localhost:8000/');
  if (!$mysqli) {
   die('Could not connect: ' . mysql_error());
}