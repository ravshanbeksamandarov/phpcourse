<?php
    // var_dump($_POST); exit;
    $dsn = 'mysql:host=localhost;dbname=news';
    $db_user = 'root';
    $password = '';
    $connection = new PDO($dsn, $db_user, $password);
    //$connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  //  $query = $connection->query("SELECT * FROM `new`");
  //  $data = $query->fetchAll();
    // function validate($type, $validType = 'image')
    // {
    //     $parsed = explode('/', $type);
    //     if(isset($parsed[0]) && $parsed[0] == $validType)
    //         return true;
    //         return 0;
    // }
    // var_dump($data);
    $title=$_POST["title"];
    $short=$_POST["short"];
    $content=$_POST["content"];
    $image=$_FILES["image"];
    // $check_image = validate($image['type'], 'image');
    
    $name=uniqid();
    $full_path = 'photos/'.$name.'.jpg';
    move_uploaded_file($image["tmp_name"], $full_path); 
    
    $insert = $connection
                ->prepare("INSERT INTO `new`(`Title`, `Short`, `Content`, `Image`, `Time`)
            VALUES(:title, :short, :content, :img, NOW())");  
     
     $insert->execute([
          ':title' => $_POST["title"], 
          ':short' => $_POST["short"], 
          ':content' => $_POST["content"], 
          ':img' => $full_path
         ]);
         if($insert){
                       header("Location:lesson1.html");
                   } else
                   {
                       var_export($connect->errorInfo());
           }
     
//     $insert = "INSERT INTO `new`(`Title`, `Short`, `Content`, `Image`, `Time`)
//          VALUES ('$title', '$short', '$content', '$full_path', NOW())";
//           $connection->exec($insert);
//           if($insert){
//             header("Location:lesson1.html");
//         } else
//         {
//             var_export($connect->errorInfo());
// }
?>
