<?php

    $dsn = 'mysql:host=localhost;dbname=news';
    $db_user = 'root';
    $password = '';
    
    $connection = new PDO($dsn, $db_user, $password);
    $title=$_POST["title"];
    $short=$_POST["short"];
    $content=$_POST["content"];
     $photo=$_FILES["photo"];
    
    $name=uniqid();
    $full_path='uploads/'.$name.'.jpg';
    move_uploaded_file($photo["tmp_name"], $full_path);
    
    // $insert = $connection
    // ->prepare("INSERT INTO `new`(`Title`, `Short`, `Content`, `Image`, `Time`)
    //         value(?, ?, ?, ?, NOW()")  
    // ->execute([$_POST["title"], $_POST["short"], $_POST["content"], '$full_path']);
    //         if($insert){
    //             header("Location:lesson3.php");
    //         } else
    //         {
    //             var_export($connection->errorInfo());
    //         }
    $insert = "INSERT INTO `new`(`Title`, `Short`, `Content`, `Image`, `Time`)
     VALUES ('$title', '$short', '$content', '$full_path', NOW())";
          $connection->exec($insert);
          $connection = null;
?>
