<?php
require_once __DIR__ . '/../models/Student.php';

class StudentController {
    private $student;

    public function __construct() {
        $this->student = new Student();
    }

    // 📊 Show all students
    public function index() {
        $students = $this->student->getAll();
        require __DIR__ . '/../views/student/list.php';
    }

    // ➕ Show add form
    public function create() {
        require __DIR__ . '/../views/student/add.php';
    }

    // 💾 Save new student
    public function store() {
        if (!isset($_POST['csrf_token']) || $_POST['csrf_token'] !== $_SESSION['csrf_token']) {
            echo "Invalid request";
            return;
        }

        $errors = $this->validateStudentData($_POST);
        if (!empty($errors)) {
            // Handle errors, for now redirect or show
            echo "Validation errors: " . implode(', ', $errors);
            return;
        }
        $this->student->create($_POST);
        header("Location: index.php");
        exit;
    }

    // ❌ Delete student
    public function delete() {
        if (!isset($_POST['csrf_token']) || $_POST['csrf_token'] !== $_SESSION['csrf_token']) {
            echo "Invalid request";
            return;
        }

        if ($this->student->delete($_POST['id'])) {
            header("Location: index.php");
            exit;
        } else {
            echo "Failed to delete student";
        }
    }

    // ✏️ Show edit form
    public function edit() {
        $result = $this->student->getById($_GET['id']);
        if ($result->num_rows == 0) {
            echo "Student not found";
            return;
        }
        $student = $result->fetch_assoc();
        require __DIR__ . '/../views/student/edit.php';
    }

    // 🔄 Update student
    public function update() {
        if (!isset($_POST['csrf_token']) || $_POST['csrf_token'] !== $_SESSION['csrf_token']) {
            echo "Invalid request";
            return;
        }

        $errors = $this->validateStudentData($_POST);
        if (!empty($errors)) {
            echo "Validation errors: " . implode(', ', $errors);
            return;
        }
        if ($this->student->update($_POST['id'], $_POST)) {
            header("Location: index.php");
            exit;
        } else {
            echo "Failed to update student";
        }
    }

    // 🔍 LIVE SEARCH (clean MVC using partial view)
    public function search() {
        $keyword = $_GET['keyword'] ?? '';
        $students = $this->student->search($keyword);

        // return only table rows (partial)
        require __DIR__ . '/../views/student/partials/table.php';
    }

    private function validateStudentData($data) {
        $errors = [];
        if (empty(trim($data['student_id']))) $errors[] = 'Student ID is required';
        if (empty(trim($data['name']))) $errors[] = 'Name is required';
        if (!filter_var($data['email'], FILTER_VALIDATE_EMAIL)) $errors[] = 'Invalid email';
        // Add more validations as needed
        return $errors;
    }
}