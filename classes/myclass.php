<?php
 
    /**
     * Property va Method bo'lishi mumkin:
     * public
     * protected
     * private
     */

   class Person
    {
       public $first_name , $last_name;
       public function getFullName()
       {
        return $this->first_name.' '.$this->last_name;
       }
    }
       $ravshanbek = new Person();
       
        $ravshanbek->first_name = "Ravshan";
        $ravshanbek->last_name = "Samandarov";
        //Method'ga murojaat qilish bu yerda getFullName() method
        echo $ravshanbek -> getFullName();