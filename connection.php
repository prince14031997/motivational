<?php

$serverName = "sql12.freemysqlhosting.net";
$username = "sql12252643";
$password = "NScb87CJcD";
$dbname = "sql12252643";

//create connection
$connection = mysqli_connect($serverName, $username, $password, $dbname);

if (mysqli_connect_error()) {
  echo "database is not connected";
}
 ?>
