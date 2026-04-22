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
        $this->student->create($_POST);
        header("Location: index.php");
        exit;
    }

    // ❌ Delete student
    public function delete() {
        $this->student->delete($_GET['id']);
        header("Location: index.php");
        exit;
    }

    // ✏️ Show edit form
    public function edit() {
        $result = $this->student->getById($_GET['id']);
        $student = $result->fetch_assoc();
        require __DIR__ . '/../views/student/edit.php';
    }

    // 🔄 Update student
    public function update() {
        $this->student->update($_POST['id'], $_POST);
        header("Location: index.php");
        exit;
    }

    // 🔍 LIVE SEARCH (clean MVC using partial view)
    public function search() {
        $keyword = $_GET['keyword'] ?? '';
        $students = $this->student->search($keyword);

        // return only table rows (partial)
        require __DIR__ . '/../views/student/partials/table.php';
    }
}