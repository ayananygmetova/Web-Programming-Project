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

$video_table_create = "CREATE TABLE videos(
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    video_url VARCHAR(500) NOT NULL,
    video_title VARCHAR(250) NOT NULL,
    video_description TEXT,
    date_created TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    user_id INT(6) UNSIGNED,
    FOREIGN KEY (user_id) REFERENCES kbtube.users(id)
        ON DELETE CASCADE )";

$likes_table_create = "CREATE TABLE likes(
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    user_id INT(6) UNSIGNED,
    video_id INT(6) UNSIGNED,
    FOREIGN KEY (user_id) REFERENCES kbtube.users(id)
        ON DELETE CASCADE,
    FOREIGN KEY (video_id) REFERENCES kbtube.videos(id)
        ON DELETE CASCADE )";

$dislikes_table_create = "CREATE TABLE dislikes(
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    user_id INT(6) UNSIGNED,
    video_id INT(6) UNSIGNED,
    FOREIGN KEY (user_id) REFERENCES kbtube.users(id)
        ON DELETE CASCADE,
    FOREIGN KEY (video_id) REFERENCES kbtube.videos(id)
        ON DELETE CASCADE )";

$comments_table_create = "CREATE TABLE comments(
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    comment_text TEXT,
    user_id INT(6) UNSIGNED,
    date_created TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    video_id INT(6) UNSIGNED,
    FOREIGN KEY (user_id) REFERENCES kbtube.users(id)
        ON DELETE CASCADE,
    FOREIGN KEY (video_id) REFERENCES kbtube.videos(id)
        ON DELETE CASCADE )";

if ($conn->query($comments_table_create) === TRUE) {
    echo "Таблица Users создана успешно";
 }
 else {
    echo "Ошибка создания таблицы: " . $conn->error;
 }
?>
