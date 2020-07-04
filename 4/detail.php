<?php
require 'functions.php';
$id = $_GET['id'];
$produk = query("SELECT * FROM produk WHERE id = $id");
?>


<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
</head>
<body>
<?php $i = 1;
foreach ($produk as $p) : ?>
<div>
    <div class="row m-3">
        <h1> <?php echo $p['nama']; ?></h1>        
    </div >
    <div class="m-3">
        <a href="ubah.php?id=<?php echo $p['id']?>" class="btn btn-Warning ml-auto text-center">Ubah</a>
        <a href="hapus.php?id=<?php echo $p['id']?>" class="btn btn-danger ml-2 text-center">Hapus</a>
    </div>
    <div class= "text-center">
        <img style="width: 30rem" src="<?php echo $p['foto']; ?>" alt="">   
        <p class="card-text"> Harga: <?php echo $p['harga'] ?></p>
        <p class="card-text"> Stok: <?php echo $p['stok'] ?></p>
        <a href="index.php" class="btn btn-primary">Kembali</a>
    </div>
</div>
<?php endforeach; ?>
    

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>
</html>