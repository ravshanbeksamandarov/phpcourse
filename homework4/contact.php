<?php
    include 'app/connection.php';
?>
<?php include 'layouts/header.php' ?>
<h1>Comment</h1>
<form action="contact1.php" method="POST" enctype="multipart/form-data">
    <div class="">
        <label for="">Ism</label>
        <input type="text" name="title" class="form-control">
    </div>
    <div class="">
        <label for="">Telefon</label>
        <input type="text" name="tel" class="form-control">
    </div>
    <div class="">
        <label for="">E-Mail</label>
        <input type="text" name="mail" class="form-control">
    </div>
    <div class="">
        <label for="">Content</label>
        <textarea name="content" class="form-control" id="" cols="30" rows="10"></textarea>
    </div>
    <button type="submit" class="btn btn-primary mt-2">Yuborish</button>
</form>
