<?php

    include 'app/connection.php';

    $coll=$_GET['id'];
        $query = $connection->query("SELECT `count` FROM new WHERE `id`=$coll");

        $query2=$connection->query("UPDATE `new` SET `count` = `count` + 1 WHERE `id`=$coll");
        $que=$query2->fetch();

        $single = $connection->query("SELECT * FROM `new` WHERE `id` = $coll");
        $content = $single->fetch();
?>
<!DOCTYPE html>
<html>
<head>
<title>ColorMag | Single</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
<section id="contentbody">
 
        <h2><?=$content['Title']?></h2>
        <h2><?=$content['Short']?></h2>
        <img text-align='center' src="admin/<?=$content['Image']?>" alt="">            
        <h2><?=$content['Content']?></h2>
             
</section>
<footer id="footer">
  
        <p class="pull-left">Ravshanbek &copy; 2020 </p>
        <p class="pull-right">Developed By WpFreeware</p>
        
</footer>
</body>
</html>