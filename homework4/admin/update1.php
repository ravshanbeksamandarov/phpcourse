<?php

        include '../app/connection.php';
          
        
        $image=$_FILES["Image"];
    
        $name=uniqid();
        $full_path = 'photos/'.$name.'.jpg';
        move_uploaded_file($image["tmp_name"], $full_path); 

        $update=$connection
           ->prepare("UPDATE `new` SET `Title`=?, `Short`=?, `Content`=?,
         `Image`=?, `Time`=?, `count`=? WHERE `id`=?");
        $update->execute([
            $_POST["Title"], 
            $_POST["Short"], 
            $_POST["Content"], 
            $full_path,
            $_POST["Time"],
            $_POST["count"],
            $_POST["id"]
        ]);
        if($update)
        {
            header("Location:edit.php");
        }else   
        {
            var_export($connection->errorInfo());
         }   
?>