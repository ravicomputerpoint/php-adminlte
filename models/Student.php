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

    public static function create($data){
        global $conn;
        $name = $data['name'];
        $father = $data['father'];
        $mother = $data['mother'];
        $sql = "insert into students(name, father, mother) values('$name','$father','$mother')";
        if($conn->query($sql)){
            return true;
        }else{ 
            return false;
        }
    }

    public static function count(){
        global $conn;
        $sql = 'select count(*) as total_students from students';
        $result = $conn->query($sql);
        if($result){
            return $result->fetch_assoc();
        }else{
            return ['total_students'=>0];
        }
    }
}
