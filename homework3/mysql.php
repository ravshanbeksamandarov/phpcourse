<?php
 
    $dbs     = 'mysql:host=localhost;dbname=news';
    $db_user = 'root';
    $db_pass = '';

    $connection = new PDO($dbs, $db_user, $db_pass);
    $query = $connection->query("SELECT * FROM `new` ORDER BY `id` DESC LIMIT 3");
    $views = $query->fetchAll();
    //var_dump($views);
?>