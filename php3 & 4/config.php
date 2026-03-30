<?php

$db_host = 'localhost';
$db_user = 'root';
$db_pass = '';
$db_name = 'php_hands_on_exercise';

$connection = new mysqli($db_host, $db_user, $db_pass);

if ($connection->connect_error) {
    die('Database connection failed: ' . $connection->connect_error);
}

$create_database = "CREATE DATABASE IF NOT EXISTS $db_name";

if (!$connection->query($create_database)) {
    die('Error creating database: ' . $connection->error);
}

$connection->select_db($db_name);

$create_table = "CREATE TABLE IF NOT EXISTS registered_persons (
    id INT AUTO_INCREMENT PRIMARY KEY,
    fname VARCHAR(50) NOT NULL,
    mname VARCHAR(50) NOT NULL,
    lname VARCHAR(50) NOT NULL,
    age INT NOT NULL,
    gender VARCHAR(30) NOT NULL,
    email VARCHAR(100) NOT NULL,
    address TEXT NOT NULL,
    contact VARCHAR(20) NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
)";

if (!$connection->query($create_table)) {
    die('Error creating table: ' . $connection->error);
}

?>
