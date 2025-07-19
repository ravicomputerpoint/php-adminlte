<?php
require_once(__DIR__ . '/controllers/StudentController.php');
require_once(__DIR__ . '/controllers/DashboardController.php');
require_once(__DIR__ . '/controllers/TeacherController.php');

$page = $_GET['page'] ?? 'dashboard';

switch ($page) {
    case 'dashboard':
        $controller = new DashboardController();
        $controller->index();
        break;

    case 'students':
        $controller = new StudentController();
        $controller->index();
        break;
    
    case 'teachers':
        $controller = new TeacherController();
        $controller->index();
        break;
        
    case 'students_create':
        $controller = new StudentController();
        $controller->create();
        break;

    case 'teachers_create':
        $controller = new TeacherController();
        $controller->create();
        break;

    case 'students_store':
        $controller = new StudentController();
        $controller->store();
        break;

    case 'teachers_store':
        $controller = new TeacherController();
        $controller->store();
        break;

    default:
        include __DIR__ . '/views/partials/header.php';
        echo "<h1>404 - Page Not Found</h1>";
        include __DIR__ . '/views/partials/footer.php';
        break;
}
