<?php

$hostname = "localhost";
$username = "root";
$password = "mariadb";
$database = "php_blog";

$connection = mysqli_connect($hostname, $username, $password, $database);

if(mysqli_connect_errno()){
  echo "Connection Failed \r\n" . mysqli_connect_errno();
}

?>