<?php

    $my_file = $_FILES['my_file'];
    
    $get = file_get_contents($my_file['tmp_name']);
      
    file_put_contents('text1.txt', $get."\n", FILE_APPEND);
    
    unlink($my_file['tmp_name']);