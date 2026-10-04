<?php
require_once __DIR__ . '/../config/database.php';

class Student {
    private $conn;

    public function __construct() {
        $db = new Database();
        $this->conn = $db->connect();
    }

    public function getAll() {
        return $this->conn->query("SELECT * FROM students");
    }

    public function create($data) {
        $stmt = $this->conn->prepare("INSERT INTO students 
            (student_id, name, father_name, gender, dob, course, address, email, phone)
            VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)");
        $stmt->bind_param("sssssssss", 
            $data['student_id'], $data['name'], $data['father_name'], $data['gender'], 
            $data['dob'], $data['course'], $data['address'], $data['email'], $data['phone']);
        return $stmt->execute();
    }

    public function delete($id) {
        $stmt = $this->conn->prepare("DELETE FROM students WHERE id = ?");
        $stmt->bind_param("i", $id);
        return $stmt->execute();
    }

    public function getById($id) {
        $stmt = $this->conn->prepare("SELECT * FROM students WHERE id = ?");
        $stmt->bind_param("i", $id);
        $stmt->execute();
        return $stmt->get_result();
    }

    public function update($id, $data) {
        $stmt = $this->conn->prepare("UPDATE students SET 
            student_id = ?, name = ?, father_name = ?, gender = ?, dob = ?, course = ?, address = ?, email = ?, phone = ?
            WHERE id = ?");
        $stmt->bind_param("sssssssssi", 
            $data['student_id'], $data['name'], $data['father_name'], $data['gender'], 
            $data['dob'], $data['course'], $data['address'], $data['email'], $data['phone'], $id);
        return $stmt->execute();
    }
    public function search($keyword) {
        $keyword = "%$keyword%";
        $stmt = $this->conn->prepare("
            SELECT * FROM students 
            WHERE name LIKE ? 
            OR course LIKE ? 
            OR student_id LIKE ?
        ");
        $stmt->bind_param("sss", $keyword, $keyword, $keyword);
        $stmt->execute();
        return $stmt->get_result();
    }
}


