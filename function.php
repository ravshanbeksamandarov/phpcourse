<?php
    //keyword function_name (param1,param2, param3)
    // function getNowDate() {
        
    //     return date('Y.m.d'); 
    // }

    //Get time
    // function getNowTime() {
        
    //     return date('H:i:s'); 
    // }

    // echo getNowTime();

    // function add($a, $b) {
    //     return $a+$b;
    // }
    // function add($a, $b) {
    //     echo $a+$b;
    // }

    // echo add(5, 10);
    $myFunction = function ($a, $b){
        return $a - $b;
    };
    echo $myFunction(5, 10);
    