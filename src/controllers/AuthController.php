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
        if (!isset($_POST['csrf_token']) || $_POST['csrf_token'] !== $_SESSION['csrf_token']) {
            $this->showLoginError('Invalid request');
            return;
        }

        $username = trim($_POST['username'] ?? '');
        $password = $_POST['password'] ?? '';

        if (empty($username) || empty($password)) {
            $this->showLoginError('Username and password are required');
            return;
        }

        $user = $this->user->login($username, $password);

        if ($user) {
            $_SESSION['user'] = $user['username'];
            header("Location: index.php");
            exit;
        } else {
            $this->showLoginError('Invalid credentials');
        }
    }

    private function showLoginError($message) {
        echo "<script>alert('$message'); window.location.href='index.php?action=login';</script>";
    }

    public function logout() {
        session_destroy();
        header("Location: index.php?action=login");
    }
}

