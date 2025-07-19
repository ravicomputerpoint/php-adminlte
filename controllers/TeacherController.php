<?php
require_once(__DIR__ . '/../models/Teacher.php');

class TeacherController {
    public function index() {
        $teachers = Teacher::all();
        include(__DIR__ . '/../views/teachers/index.php');
    }
    public function create(){
        include(__DIR__ . '/../views/teachers/create.php');
    }
    public function store(){
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $name = $_POST['name'] ?? '';
            $subject = $_POST['subject'] ?? '';
            $salary = $_POST['salary'] ?? '';

            Teacher::create([
                'name' => $name,
                'subject' => $subject,
                'salary' => $salary
            ]);

            header('Location: ?page=teachers');
            exit();
        }
    }

}
