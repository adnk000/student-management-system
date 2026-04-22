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

    $student_id = $this->conn->real_escape_string($data['student_id']);
    $name = $this->conn->real_escape_string($data['name']);
    $father_name = $this->conn->real_escape_string($data['father_name']);
    $gender = $this->conn->real_escape_string($data['gender']);
    $dob = $this->conn->real_escape_string($data['dob']);
    $course = $this->conn->real_escape_string($data['course']);
    $address = $this->conn->real_escape_string($data['address']);
    $email = $this->conn->real_escape_string($data['email']);
    $phone = $this->conn->real_escape_string($data['phone']);

    $sql = "INSERT INTO students 
    (student_id, name, father_name, gender, dob, course, address, email, phone)
    VALUES 
    ('$student_id','$name','$father_name','$gender','$dob','$course','$address','$email','$phone')";

    return $this->conn->query($sql);
}

    public function delete($id) {
        return $this->conn->query("DELETE FROM students WHERE id=$id");
    }

    public function getById($id) {
    return $this->conn->query("SELECT * FROM students WHERE id=$id");
}

    public function update($id, $data) {
    $sql = "UPDATE students SET 
        name='{$data['name']}',
        course='{$data['course']}'
        WHERE id=$id";

    return $this->conn->query($sql);
}
    public function search($keyword) {
    $keyword = $this->conn->real_escape_string($keyword);

    return $this->conn->query("
        SELECT * FROM students 
        WHERE name LIKE '%$keyword%' 
        OR course LIKE '%$keyword%'
        OR student_id LIKE '%$keyword%'
    ");
}
}


