<?php
    // var_dump($_POST); exit;
    include 'app/connection.php';

    $title=$_POST["title"];
    $short=$_POST["tel"];
    $mail=$_FILES["mail"];
    $content=$_POST["content"];
    
    $insert = $connection
                ->prepare("INSERT INTO `featback`(`ism`, `telefon`, `e-mail`, `content`, `time`)
            VALUES(:title, :short, :mail, :content, NOW())");  
     
     $insert->execute([
          ':title' => $_POST["title"], 
          ':short' => $_POST["tel"], 
          ':mail' => $_POST["mail"],
          ':content' => $_POST["content"], 
         ]);
         if($insert){
                       header("Location:contact.php");
                   } else
                   {
                       var_export($connect->errorInfo());
           }
     
?>
