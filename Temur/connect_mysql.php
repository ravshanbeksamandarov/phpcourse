<?php
    $server_name="localhost";
    $user_name="root";
    $password="";
    try 
    {
        $conn = new PDO("mysql:host=$server_name;dbname=connect_php", $user_name, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $title=$_POST["title"];
        $short=$_POST["short"];
        $content=$_POST["content"];
        $photo=$_FILES["photo"];

        $p_name=uniqid();
        $path='uploads/'.$p_name.'.jpg';
        move_uploaded_file($photo["tmp_name"],$path);

        $sql = "INSERT INTO news (`title`, `short`, `content`, `time`, `img`)
        VALUES ('$title', '$short', '$content', 'NOW()', '$path')";
        // use exec() because no results are returned
        $conn->exec($sql);
        echo "New record created successfully";
    }
    catch(PDOException $e)
    {
        echo $sql . "<br>" . $e->getMessage();
    }
    $conn = null;
?>