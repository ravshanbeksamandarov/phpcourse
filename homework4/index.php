<?php
    include 'layouts/pagination.php';
?>
<?php include 'layouts/header.php' ?>
       <form action="pagination.php" method="GET" enctype="multipart/form-data">
         <div class="row">
            <div class="col-lg-12">
                <h3 class="mt-4 mb-4 text-center text-uppercase text-primary">Maqolalar</h3>
            </div>
            <?php foreach ($custs as $cust): ?>
            <div class="col-lg-3 col-xs-12 col-sm-6 col-md-4">
                <div class="card">
                    <img src="admin/<?=$cust['Image']?>" class="card-img-top" alt="" style="height: 200px">
                    <div class="card-body">
                        <h5 class="card-title"><?=$cust['Title']?></h5>
                        <p class="card-text"><?=$cust['Short']?></p>
                        <div class="text-right">
                            <?=date_format(date_create($cust['Time']),'<b>H:i</b> d/m/Y')?>
                        </div>
                        <a href="single.php?id=<?=$cust['id']?>" class="btn btn-primary">Batafsil</a>
                            <div>
                            <li><i class="glyphicon glyphicon-eye"></i><?=$cust['count']?></li>
                            </div>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
       </form>
       <?php include 'layouts/footer.php' ?>
        <!-- CONTENT END -->
     