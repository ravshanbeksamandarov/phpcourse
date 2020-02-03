<?php
    
    //$myArray = [6, 7, 8, 10, 5, 4, 9];
    
    // $searchedIndex = array_search(8, $myArray);
    // var_dump($myArray); 
    // echo $searchedIndex;
    
    // $randomIndex = array_rand($myArray);
    // echo $randomIndex;
    // echo '<br>';
    // echo $myArray[$randomIndex];
    
    // var_dump($myArray);
    // echo '<br>';
    // sort($myArray);
    // var_dump($myArray);
   
    // $reversed = array_reverse($myArray);
    // var_dump($reversed);

    // $myString = 'Ravshanbek Samandarov, 998937576699, 20';
    // $myParsetArray = explode(',', $myString);
    // var_dump($myParsetArray);

    $students = ['Ravshanbek', 'Temur', 'Rustam', 'Jamshid', 'Muhammad'];
    $imploded = implode(', => ' , $students);
     echo $imploded;