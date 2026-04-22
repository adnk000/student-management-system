<?php

require_once __DIR__ . '/../src/controllers/AuthController.php';

$auth = new AuthController();


require_once __DIR__ . '/../src/controllers/StudentController.php';

$controller = new StudentController();

$action = $_GET['action'] ?? 'index';

session_start();

if (!isset($_SESSION['user']) && $action !== 'login' && $action !== 'doLogin') {
    header("Location: index.php?action=login");
    exit;
}

switch ($action) {
    case 'create':
        $controller->create();
        break;

    case 'store':
        $controller->store();
        break;

    case 'delete':
        $controller->delete();
        break;

    case 'edit':
    $controller->edit();
    break;

    case 'update':
    $controller->update();
    break;

    case 'search':
    $controller->search();
    break;

    case 'login':
    $auth->showLogin();
    break;

    case 'doLogin':
    $auth->login();
    break;

    case 'logout':
    $auth->logout();
    break;

    default:
    $controller->index();
}

