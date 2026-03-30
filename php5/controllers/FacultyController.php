<?php

require_once('./models/FacultyModel.php');

class FacultyController {
    private $model;

    public function __construct() {
        $this->model = new FacultyModel();
    }

    public function index($editId = null, $formData = [], $errors = []) {
        $active = 'faculty';
        $data = $this->model->getAllRecords();
        $facultyData = null;

        if (!empty($editId)) {
            $facultyData = $this->model->getFacultyById($editId);
        }

        require_once('./views/faculty/index.php');
    }

    public function store($post = []) {
        $record = $this->sanitizeData($post);
        $errors = $this->validate($record);

        if (!empty($errors)) {
            $this->index(null, $record, $errors);
            return;
        }

        if ($this->model->store($record)) {
            set_flash_message('faculty_alert', 'Faculty record saved successfully.', 'success');
        }

        header('Location: ' . APP_URL);
        exit;
    }

    public function update($post = []) {
        $record = $this->sanitizeData($post);
        $record['id'] = isset($post['id']) ? (int) $post['id'] : 0;
        $errors = $this->validate($record, true);

        if (!empty($errors)) {
            $this->index($record['id'], $record, $errors);
            return;
        }

        if ($this->model->update($record)) {
            set_flash_message('faculty_alert', 'Faculty record updated successfully.', 'success');
        }

        header('Location: ' . APP_URL);
        exit;
    }

    public function delete($id) {
        if ($this->model->delete($id)) {
            set_flash_message('faculty_alert', 'Faculty record deleted successfully.', 'success');
        }

        header('Location: ' . APP_URL);
        exit;
    }

    private function sanitizeData($data = []) {
        return [
            'fname' => trim(htmlspecialchars(isset($data['fname']) ? $data['fname'] : '')),
            'mname' => trim(htmlspecialchars(isset($data['mname']) ? $data['mname'] : '')),
            'lname' => trim(htmlspecialchars(isset($data['lname']) ? $data['lname'] : '')),
            'age' => trim(htmlspecialchars(isset($data['age']) ? $data['age'] : '')),
            'gender' => trim(htmlspecialchars(isset($data['gender']) ? $data['gender'] : '')),
            'address' => trim(htmlspecialchars(isset($data['address']) ? $data['address'] : '')),
            'position' => trim(htmlspecialchars(isset($data['position']) ? $data['position'] : '')),
            'salary' => trim(htmlspecialchars(isset($data['salary']) ? $data['salary'] : ''))
        ];
    }

    private function validate($data = [], $isUpdate = false) {
        $errors = [];

        foreach (['fname', 'mname', 'lname', 'age', 'gender', 'address', 'position', 'salary'] as $field) {
            if (!isset($data[$field]) || $data[$field] === '') {
                $errors[$field] = 'This field is required.';
            }
        }

        if (!empty($data['age']) && (!is_numeric($data['age']) || $data['age'] < 1 || $data['age'] > 120)) {
            $errors['age'] = 'Age must be between 1 and 120.';
        }

        if (!empty($data['salary']) && (!is_numeric($data['salary']) || $data['salary'] < 0)) {
            $errors['salary'] = 'Salary must be a valid positive number.';
        }

        if ($isUpdate && empty($data['id'])) {
            $errors['id'] = 'Invalid faculty record.';
        }

        return $errors;
    }
}
