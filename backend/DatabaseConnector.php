<?php

class DatabaseConnector {

    private $dbConnection = null;
    public function __construct()
    {
        try {
            
            $servername = "127.0.0.1:3306"; // локалхост
            $username = "root"; // имя пользователя
            $password = "mysql_root_password"; // пароль если существует
            $dbname = "kbtube"; // база данных
        
            $this->dbConnection =  new mysqli($servername, $username, $password, $dbname);
        } catch (Exception $e) {
            exit($e->getMessage());
        }
    }

    public function getConnection()
    {
        return $this->dbConnection;
    }
}