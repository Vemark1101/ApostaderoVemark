<?php

require_once(APP_ROOT . '/libraries/Database.php');

class FacultyModel {
    private $db;

    public function __construct() {
        $this->db = new Database();
    }

    public function getAllRecords() {
        $this->db->setQuery("SELECT * FROM faculties ORDER BY faculty_id DESC");
        return $this->db->getResultSet();
    }

    public function getFacultyById($id) {
        $this->db->setQuery("SELECT * FROM faculties WHERE faculty_id = :id");
        $this->db->bindValue(':id', (int) $id);
        return $this->db->getSingleRecord();
    }

    public function store($data = []) {
        $this->db->setQuery("INSERT INTO faculties (
            faculty_fname,
            faculty_mname,
            faculty_lname,
            faculty_age,
            faculty_gender,
            faculty_address,
            faculty_position,
            faculty_salary
        ) VALUES (
            :fname,
            :mname,
            :lname,
            :age,
            :gender,
            :address,
            :position,
            :salary
        )");

        $this->db->bindValue(':fname', $data['fname']);
        $this->db->bindValue(':mname', $data['mname']);
        $this->db->bindValue(':lname', $data['lname']);
        $this->db->bindValue(':age', (int) $data['age']);
        $this->db->bindValue(':gender', $data['gender']);
        $this->db->bindValue(':address', $data['address']);
        $this->db->bindValue(':position', $data['position']);
        $this->db->bindValue(':salary', $data['salary']);

        return $this->db->execute();
    }

    public function update($data = []) {
        $this->db->setQuery("UPDATE faculties SET
            faculty_fname = :fname,
            faculty_mname = :mname,
            faculty_lname = :lname,
            faculty_age = :age,
            faculty_gender = :gender,
            faculty_address = :address,
            faculty_position = :position,
            faculty_salary = :salary
            WHERE faculty_id = :id");

        $this->db->bindValue(':id', (int) $data['id']);
        $this->db->bindValue(':fname', $data['fname']);
        $this->db->bindValue(':mname', $data['mname']);
        $this->db->bindValue(':lname', $data['lname']);
        $this->db->bindValue(':age', (int) $data['age']);
        $this->db->bindValue(':gender', $data['gender']);
        $this->db->bindValue(':address', $data['address']);
        $this->db->bindValue(':position', $data['position']);
        $this->db->bindValue(':salary', $data['salary']);

        return $this->db->execute();
    }

    public function delete($id) {
        $this->db->setQuery("DELETE FROM faculties WHERE faculty_id = :id");
        $this->db->bindValue(':id', (int) $id);
        return $this->db->execute();
    }
}
