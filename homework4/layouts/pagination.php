<?php 
include 'app/connection.php';
      
      // $query = $connection
      // ->query("SELECT * FROM `new` ORDER BY `id` DESC LIMIT 3");
        //    $views = $query->fetchAll();

      $limit = 4;
      $page = $_GET['id'];
      $start = ($page - 1) * $limit;
      $result = $connection->query("SELECT * FROM new ORDER BY id DESC LIMIT $start, $limit");
      $custs = $result->fetchALL();

      $result1 = $connection->query("SELECT COUNT(id) AS id FROM new");
      $custCount = $result1->fetchAll();
      $total = $custCount[0]['id'];
      $pages = ceil( $total / $limit );

      $previous = $page - 1;
      $next = $page + 1;

?>