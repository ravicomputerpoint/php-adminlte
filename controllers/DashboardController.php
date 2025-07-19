<?php

require_once(__DIR__ . '/../models/Student.php');
require_once(__DIR__ . '/../models/Teacher.php');

class DashboardController {
    public function index(){
        $total_students = Student::count();
        $total_teachers = Teacher::count();
        include(__DIR__ . '/../views/dashboard.php');

    }
}