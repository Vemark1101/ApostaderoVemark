CREATE DATABASE IF NOT EXISTS php_hands_on_exercise;

USE php_hands_on_exercise;

CREATE TABLE IF NOT EXISTS faculties (
    faculty_id INT AUTO_INCREMENT PRIMARY KEY,
    faculty_fname VARCHAR(50) NOT NULL,
    faculty_mname VARCHAR(50) NOT NULL,
    faculty_lname VARCHAR(50) NOT NULL,
    faculty_age INT NOT NULL,
    faculty_gender VARCHAR(30) NOT NULL,
    faculty_address TEXT NOT NULL,
    faculty_position VARCHAR(100) NOT NULL,
    faculty_salary DECIMAL(12,2) NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
