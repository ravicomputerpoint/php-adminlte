<?php
require_once(__DIR__ . '/../models/Student.php');

class StudentController {
    public function index() {
        $students = Student::all();
        include(__DIR__ . '/../views/students/index.php');
    }
    public function create(){
        include(__DIR__ . '/../views/students/create.php');
    }
    public function store(){
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $name = $_POST['name'] ?? '';
            $father = $_POST['father'] ?? '';
            $mother = $_POST['mother'] ?? '';

            Student::create([
                'name' => $name,
                'father' => $father,
                'mother' => $mother
            ]);

            header('Location: ?page=students');
            exit();
        }
    }

}
