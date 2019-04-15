<?php
  $mysqli =  mysqli_connect("127.0.0.1:32807","root","","project");

  if (!$mysqli) {
   die('Could not connect: ' . mysql_error());
}