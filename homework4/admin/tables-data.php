<?php

    include '../app/connection.php';

    $query = $connection->query("SELECT * FROM `featback`");
    $data = $query->fetchAll();
    // $limit = 3;
    // $page = $_GET['id'];
    // $start = ($page - 1) * $limit;
    // $result = $connection->query("SELECT * FROM featback ORDER BY id DESC LIMIT $start, $limit");
    // $contents = $result->fetchALL();

    // $result1 = $connection->query("SELECT COUNT(id) AS id FROM featback");
    // $custCount = $result1->fetchAll();
    // $total = $custCount[0]['id'];
    // $pages = ceil( $total / $limit );

    // $previous = $page - 1;
    // $next = $page + 1;
?>

<!doctype html>
<html class="no-js" lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Sufee Admin - HTML5 Admin Template</title>
    <meta name="description" content="Sufee Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="apple-icon.png">
    <link rel="shortcut icon" href="favicon.ico">


    <link rel="stylesheet" href="../vendors/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../vendors/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="../vendors/themify-icons/css/themify-icons.css">
    <link rel="stylesheet" href="../vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="../vendors/selectFX/css/cs-skin-elastic.css">
    <link rel="stylesheet" href="../vendors/datatables.net-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="../vendors/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css">

    <link rel="stylesheet" href="../assets1/css/style.css">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>
</head>

<body>
         <div class="row">
            <div class="col-lg-12">
    <div id="right-panel" class="right-panel">

<div class="content mt-3">
<div class="animated fadeIn">
<div class="row">

<div class="col-md-12">
<div class="card">
<div class="card-body">
    <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Ism</th>
                <th>Telefon</th>
                <th>E-mail</th>
                <th>Content</th>
                <th>Time</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($data as $content): ?>
            <tr>
                <td><?=$content['id']?></td>
                <td><?=$content['ism'] ?></td>
                <td><?=$content['telefon']?></td>
                <td><?=$content['e-mail']?></td>
                <td><?=$content['content']?></td>
                <th><?=$content['time']?></th>
            </tr>
            <?php endforeach; ?>
          </div>
      <!-- SCRIPTS -->
      <script src="../assets/js/jquery.js"></script>
          <script src="../assets/js/bootstrap.js"></script>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
         </div>
    <script src="../vendors/jquery/dist/jquery.min.js"></script>
    <script src="../vendors/popper.js/dist/umd/popper.min.js"></script>
    <script src="../vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="../assets1/js/main.js"></script>


    <script src="../vendors/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="../vendors/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="../vendors/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
    <script src="../vendors/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js"></script>
    <script src="../vendors/jszip/dist/jszip.min.js"></script>
    <script src="../vendors/pdfmake/build/pdfmake.min.js"></script>
    <script src="../vendors/pdfmake/build/vfs_fonts.js"></script>
    <script src="../vendors/datatables.net-buttons/js/buttons.html5.min.js"></script>
    <script src="../vendors/datatables.net-buttons/js/buttons.print.min.js"></script>
    <script src="../vendors/datatables.net-buttons/js/buttons.colVis.min.js"></script>
    <script src="../assets1/js/init-scripts/data-table/datatables-init.js"></script>
</body>
</html>
