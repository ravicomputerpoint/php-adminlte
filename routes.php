<?php

// If no `page` param is set, default to 'dashboard'
$page = $_GET['page'] ?? 'dashboard';

switch ($page) {
    case 'students':
        require_once __DIR__ . '/controllers/StudentController.php';
        $controller = new StudentController();
        $controller->index();
        break;

    case 'dashboard':
        include __DIR__ . '/views/partials/header.php';
        echo "<h1>Welcome to Dashboard</h1>";
        include __DIR__ . '/views/partials/footer.php';
        break;

    default:
        include __DIR__ . '/views/partials/header.php';
        echo "<h1>404 - Page Not Found</h1>";
        include __DIR__ . '/views/partials/footer.php';
        break;
}
