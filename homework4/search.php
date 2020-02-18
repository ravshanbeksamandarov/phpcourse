<?php
    
    include 'app/search.php';
    
?>
<?php include 'layouts/header.php' ?>
<h4>Qidiruv natijalari</h4>

<?php if (!isset($key)): ?>
    <div class="alert alert-danger text-center">
        Siz kalit yozmadingiz!
    </div>
    <?php elseif (count($custs) == 0): ?>
        <div class="alert alert-danger text-center">
            Natija topilmadi!
        </div>
        <?php else: ?>
            <?php foreach ($custs as $view): ?>
                <h3><?= $view['Title'] ?></h3>
                <p><?= $view['Short'] ?></p>
                <p><?= $view['Content'] ?></p>
                <?php endforeach; ?>
                <?php endif; ?>
            
                                                         