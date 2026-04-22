<?php

class User {
    private $conn;

    public function __construct() {
        require __DIR__ . '/../config/database.php';

        // 🔥 THIS LINE FIXES YOUR ERROR
        $this->conn = $conn;
    }

    public function login($username, $password) {
        $query = "SELECT * FROM users WHERE username='$username'";
        $result = mysqli_query($this->conn, $query);

        if ($row = mysqli_fetch_assoc($result)) {
            if (password_verify($password, $row['password'])) {
                return $row;
            }
        }

        return false;
    }
}