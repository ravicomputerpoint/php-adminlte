<?php
require_once(__DIR__ . '/../config/database.php');

class Teacher {
    public static function all() {
        global $conn;
        $sql = "SELECT * FROM teachers";
        $result = $conn->query($sql);

        $teachers = [];
        while ($row = $result->fetch_assoc()) {
            $teachers[] = $row;
        }

        return $teachers;
    }

    public static function create($data){
        global $conn;
        $name = $data['name'];
        $subject = $data['subject'];
        $salary = $data['salary'];
        $sql = "insert into teachers(name, subject, salary) values('$name','$subject','$salary')";
        if($conn->query($sql)){
            return true;
        }else{ 
            return false;
        }
    }

    public static function count(){
        global $conn;
        $sql = 'select count(*) as total_teachers from teachers';
        $result = $conn->query($sql);
        if($result){
            return $result->fetch_assoc();
        }else{
            return ['total_teachers'=>0];
        }
    }
}
