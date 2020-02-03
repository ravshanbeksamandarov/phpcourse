<?php

    include 'myclass.php';

    class Student extends Person
    {
        public $group;
        public $univer;
        
        public function getGroup()
        {
            return $this->univer.'::'.$this->group;
        }
        public function getFullName()
        {
            $this->first_name .= "bek";
            return parent::getFullName();
        }
    }
    $student = new Student();
    $student->first_name = "Rustam";
    $student->last_name = "Ramanov";
    $student->univer = "TUITUB";
    $student->group = "942-18";

    echo $student->getFullName();
    echo '<br>';
    echo $student->getGroup();