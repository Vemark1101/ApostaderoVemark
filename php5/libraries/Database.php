<?php

class Database {
    private $host = 'localhost';
    private $user = 'root';
    private $pass = '';
    private $dbname = 'php_hands_on_exercise';

    private $dbh;
    private $stmt;

    public function __construct() {
        $this->initializeDatabase();
    }

    private function initializeDatabase() {
        try {
            $pdo = new PDO("mysql:host=$this->host", $this->user, $this->pass, [
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
            ]);

            $pdo->exec("CREATE DATABASE IF NOT EXISTS {$this->dbname}");

            $this->dbh = new PDO("mysql:host=$this->host;dbname=$this->dbname;charset=utf8mb4", $this->user, $this->pass, [
                PDO::ATTR_PERSISTENT => false,
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
            ]);

            $this->dbh->exec("CREATE TABLE IF NOT EXISTS faculties (
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
            )");
        } catch (PDOException $e) {
            die('Database Error: ' . $e->getMessage());
        }
    }

    public function setQuery($sql) {
        $this->stmt = $this->dbh->prepare($sql);
    }

    public function bindValue($param, $value, $type = null) {
        if (is_null($type)) {
            switch (true) {
                case is_int($value):
                    $type = PDO::PARAM_INT;
                    break;
                case is_bool($value):
                    $type = PDO::PARAM_BOOL;
                    break;
                case is_null($value):
                    $type = PDO::PARAM_NULL;
                    break;
                default:
                    $type = PDO::PARAM_STR;
                    break;
            }
        }

        $this->stmt->bindValue($param, $value, $type);
    }

    public function execute() {
        return $this->stmt->execute();
    }

    public function getResultSet() {
        $this->execute();
        return $this->stmt->fetchAll(PDO::FETCH_OBJ);
    }

    public function getSingleRecord() {
        $this->execute();
        return $this->stmt->fetch(PDO::FETCH_OBJ);
    }
}
