<?php

$serverName = "localhost";
$username = "root";
$password = "";
$dbname = "practice";

//create connection
$connection = mysqli_connect($serverName, $username, $password, $dbname);

if (mysqli_connect_error()) {
  echo "database is not connected";
}
 ?>
