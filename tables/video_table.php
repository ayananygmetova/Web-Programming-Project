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

$video_table_create = "CREATE TABLE videos(
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    video_url VARCHAR(500) NOT NULL,
    video_title VARCHAR(250) NOT NULL,
    video_description TEXT,
    date_created TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    user_id INT(6) UNSIGNED,
    FOREIGN KEY (user_id) REFERENCES kbtube.users(id)
        ON DELETE CASCADE )";
  

if ($conn->query($video_table_create) === TRUE) {
    echo "Таблица Videos создана успешно";
 }
 else {
    echo "Ошибка создания таблицы: " . $conn->error;
 }  

?>