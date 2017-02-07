<?php
    class Student
    {
        private $name;
        private $track;

        function __construct($name, $track) {
            $this->name = $name;
            $this->track = $track;
        }

        function setName($new_name) {
            $this->name = $new_name;
        }

        function getName() {
            return $this->name;
        }

        function setTrack($new_track){
            $this->track = $new_track;
        }

        function getTrack(){
            return $this->track;
        }

    }

?>
