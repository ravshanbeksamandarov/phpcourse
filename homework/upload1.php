<?php

     $my_file = $_FILES['my_file'];
     $name = $my_file['tmp_name'];
   
     $read = fopen($name, 'r');
     $data = fread($read , 1000);
     fclose($read);

     $write = fopen('mytext.txt', 'w');
     $datas = $data;
     $datas .= "\n";
     fwrite($write, $datas);
     fclose($write);
//     if(isset($_POST["submit"]))
//     {
//       $my_file = $_FILES['my_file'];
//       $check = $my_file['tmp_name'];
//       $file = fopen($check, 'r');
//       $yozish = fread($file, 10000);

//       $file_yozish = fopen('mytext.txt', 'w');
//       fwrite($file_yozish, $yozish);
//       fclose($file);
//       fclose($file_yozish);

//       unlink($my_file['tmp_name']);
//   }