<?php
    class Epicodus
    {
        private $students = array();

        function addStudent($student) {
          array_push($this->students, $student);
        }

        function getStudentCount() {
          return count($this->students);
        }
    }


?>
