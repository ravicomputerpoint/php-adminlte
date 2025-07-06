<?php
require_once(__DIR__ . '/../config/database.php');

class Student {
    public static function all() {
        global $conn;
        $sql = "SELECT * FROM students";
        $result = $conn->query($sql);

        $students = [];
        while ($row = $result->fetch_assoc()) {
            $students[] = $row;
        }

        return $students;
    }
}
