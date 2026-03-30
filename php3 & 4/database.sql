CREATE DATABASE IF NOT EXISTS php_hands_on_exercise;

USE php_hands_on_exercise;

CREATE TABLE IF NOT EXISTS registered_persons (
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
);
