<?php
require_once(__DIR__ . '/../models/Student.php');

class StudentController {
    public function index() {
        $students = Student::all();
        include(__DIR__ . '/../views/students/index.php');
    }
}
