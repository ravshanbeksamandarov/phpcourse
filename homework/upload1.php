<?php

     $myfile = $_FILES['my_file'];
     $path = 'upload';
     $name = uniqid();
     $full_path = $name.'.txt';
     move_uploaded_file($myfile['tmp_name'], $full_path);