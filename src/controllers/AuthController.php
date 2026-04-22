<?php
require_once __DIR__ . '/../models/User.php';

class AuthController {
    private $user;

    public function __construct() {
        $this->user = new User();
    }

    public function showLogin() {
        require __DIR__ . '/../views/auth/login.php';
    }

    public function login() {
        $user = $this->user->login($_POST['username'], $_POST['password']);

        if ($user) {
            $_SESSION['user'] = $user['username'];
            header("Location: index.php");
        } else {
            echo "Invalid credentials";
        }
    }

    public function logout() {
        session_destroy();
        header("Location: index.php?action=login");
    }
}

