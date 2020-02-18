<?php

     include 'connection.php';

    if (!empty($_GET['key'])) {
        $key = $_GET['key'];
        $key = '%'.trim($key).'%';
        // $query = $connection->query('SELECT * FROM `news` WHERE `title` LIKE "%'.$key.'%"');
        // $data = $query->fetchAll();

        $query = $connection->prepare("SELECT * FROM `new` 
                            WHERE `Title` LIKE :key 
                            OR `Short` LIKE :key 
                            OR `Content` LIKE :key 
                            ORDER BY `id` DESC
                            LIMIT 3");

        $query->execute([':key' => $key]);
                
        
        $custs = $query->fetchAll();
    }

    
