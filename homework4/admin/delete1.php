<?php

        include '../app/connection.php';

        $delete=$connection
             ->prepare("DELETE FROM new WHERE `id`=?");
        
        
        $delete->execute([$_POST['id']]);

        if($delete)
        {
            header("Location:edit.php");
        }else
        {
            var_export($connection->errorInfo());
        }
?>