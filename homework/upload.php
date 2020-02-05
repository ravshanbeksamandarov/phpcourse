<?php
    
    $get = file_get_contents($_FILES['my_file']['tmp_name']);
      
    file_put_contents('text1.txt', "\n".$get."\n", FILE_APPEND);
    
    //unlink($_FILES['my_file']['tmp_name']);