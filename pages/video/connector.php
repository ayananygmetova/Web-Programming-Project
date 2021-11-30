<?php
ini_set('error_reporting', E_ALL);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);

$servername = "127.0.0.1"; // локалхост
$port = "3306";
$username = "root"; // имя пользователя
$password = "mysql_root_password"; // пароль если существует
$dbname = "kbtube"; // база данных

$link = mysqli_init();
$success = mysqli_real_connect(
   $link, 
   $servername, 
   $username, 
   $password, 
   $dbname,
   $port
);
?>