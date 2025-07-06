<?php

require_once(__DIR__ . '/../models/Student.php');

class DashboardController {
    public function index(){
        $total_students = Student::count();
        include(__DIR__ . '/../views/dashboard.php');
    }
}