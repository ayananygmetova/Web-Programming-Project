<?php


$servername = "127.0.0.1:3306"; // локалхост
$username = "root"; // имя пользователя
$password = "mysql_root_password"; // пароль если существует
$dbname = "kbtube"; // база данных

// Создание соединения
$conn = new mysqli($servername, $username, $password, $dbname);
// Проверка соединения
if ($conn->connect_error) {
   die("Ошибка подключения: " . $conn->connect_error);
}

$user_table_create = "CREATE TABLE users(
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    firstname VARCHAR(30) NOT NULL,
    lastname VARCHAR(30) NOT NULL,
    email VARCHAR(50),
    password VARCHAR(50) )";

if ($conn->query($user_table_create) === TRUE) {
    echo "Таблица Users создана успешно";
 }
 else {
    echo "Ошибка создания таблицы: " . $conn->error;
 }
?>
