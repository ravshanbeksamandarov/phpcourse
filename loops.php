<?php
    //For
    // for($index=0; $index<20; $index++){
    //     echo $index;
    //     echo '<br>';
    // }
    $a = 0;
    // while($a <= 10){
    //     echo $a;
    //     echo '<br>';
    //     $a++;
    // }
    // do{
    //     echo $a;
    //     echo '<br>';
    //     echo '<hr>';
    //     $a++;
    // }while($a <= 10);
    $myArray = [8, 5, 4, 3, 6]; 
    // foreach($myArray AS $index => $values){
    //     echo $index ."==>". $values;
    //     echo '<br>';
    // }
    for($index = 0; $index < count($myArray); $index++){
        echo $index ."==>". $myArray[$index];
        echo '<br>';
    }