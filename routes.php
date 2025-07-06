<?php
require_once(__DIR__ . '/controllers/StudentController.php');
require_once(__DIR__ . '/controllers/DashboardController.php');

$page = $_GET['page'] ?? 'dashboard';

switch ($page) {
    case 'students':
        $controller = new StudentController();
        $controller->index();
        break;

    case 'dashboard':
        $controller = new DashboardController();
        $controller->index();
        break;

    case 'students_create':
        $controller = new StudentController();
        $controller->create();
        break;

    case 'students_store':
        $controller = new StudentController();
        $controller->store();
        break;

    default:
        include __DIR__ . '/views/partials/header.php';
        echo "<h1>404 - Page Not Found</h1>";
        include __DIR__ . '/views/partials/footer.php';
        break;
}
