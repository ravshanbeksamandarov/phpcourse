<?php

    //include 'mysql.php';
    // include 'lesson3.php';
    $coll=$_GET['id'];
    foreach($views as $value)
    {
        if($value['id'] == $coll)
        {
            $query2=$connection->query("SELECT `count` FROM `new` WHERE `id`=$coll");
            $que=$query2->fetch();
            $que['count']=intval($que['count']);
            $que['count']+=1;
            $counts=$que['count'];
            $query3=$connection->prepare("UPDATE `new` SET 'count'=? WHERE `id`=?");
            $a=$query3->execute([$counts, $coll]);
            // $connection->exec($query3);
        }
    }
?>