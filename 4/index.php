<?php 
require 'functions.php';
$produk = query("SELECT * FROM produk")
?>


<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <title>Dumbways</title>
  </head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark text-white">
  <h1>Data Sepeda</h1>
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item ml-1">
        <button class="btn btn-primary ml-auto" data-toggle="modal" data-target="#tambahProduk">Tambah Produk</button> 
    </ul>
  </div>
</nav>

<div class="dropdown my-4 ml-3">
  <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Pilih Kategori
  </button>
  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
    <a class="dropdown-item" href="index.php">Produk</a>
    <a class="dropdown-item" href="importir.php">Importir</a>
  </div>
</div>

<?php $i = 1;
foreach ($produk as $p) : ?>
<div class="d-flex justify-content-start">
  <div class="card m-3" style="width: 18rem;">
    <img src="<?php echo $p['foto']; ?>" class="card-img-top" alt="">
    <div class="card-body">
      <h4 class="card-title"> <?php echo $p['nama']; ?></h4> <br>
      <p class="card-text"> Stok: <?php echo $p['stok'] ?></p>
      <p class="card-text"> Harga: <?php echo $p['harga'] ?></p>
      <a href="detail.php?id=<?php echo $p['id'] ?>" class="btn btn-primary">Detail</a>
      
  </div>
</div>
<?php endforeach; ?>


<!-- Modal Tambah Importir-->
<?php

if (isset($_POST['tambahProduk'])) {
    tambahProduk($_POST);}
?>
<div class="modal" tabindex="-1" role="dialog" id="tambahProduk">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Tambah Produk</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <div class="m-2">
        <form action="" method="POST">
          <div class="form-group">
            <label for="">Nama Produk</label>
            <input type="text" class="form-control" name="nama" required="">
          </div>
          <div class="form-group">
            <label for="">Importir</label>
            <input type="text" class="form-control" name="importir_id" required="">
          </div>
          <div class="form-group">
            <label for="">Foto</label>
            <input type="file" class="form-control" name="foto" required="">
          <div class="form-group">
            <label for="">Harga</label>
            <input type="text" class="form-control" name="harga" required="">
          </div>
          <div class="form-group">
            <label for="">Stok</label>
            <input type="text" class="form-control" name="stok" required="">
          </div>
          <br>
          <a href="index.php" class="btn btn-secondary mr-2"> Kembali</a>
          <button type="submit" class="btn btn-primary" name="tambahProduk">Simpan</button>
        </form>
      </div>
      </div>
    </div>
  </div>
</div>



    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  </body>
</html>