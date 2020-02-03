<?php

//var_dump($_POST);

$ismi = $_POST['ism'];
$fam = $_POST['familiya'];
$sharif = $_POST['sharif'];
$text = $_POST['matn'];
if(isset($_POST['gender'])){
    $gender = $_POST['gender'];
}else{
    $gender = false;
}
    $gender = $_POST['gender'] ?? false;
    $check = $_POST['check'] ?? false;
    echo $ismi;
    echo $fam;
    echo $sharif;
    echo $text;
    echo $gender;
    echo $check;