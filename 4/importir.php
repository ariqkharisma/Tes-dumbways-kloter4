<?php 
require 'functions.php';
$importir = query("SELECT * FROM importir")
?>


<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <title>importir</title>
  </head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark text-white">
  <h1>Data Sepeda</h1>
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item ml-1">
        <button class="btn btn-primary ml-auto" data-toggle="modal" data-target="#tambahimportir"> Tambah Importir </button>
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

<div id="produk">
<?php $i = 1;
foreach ($importir as $i) : ?>
<div class="d-flex justify-content-start">
  <div class="card ml-3 mt-5" style="width: 18rem;">
    <div class="card-body">
      <h4 class="card-title"> <?php echo $i['nama']; ?></h4> <br>
      <p class="card-text"> Alamat:  <?php echo $i['alamat'] ?></p>
      <p class="card-text"> Nomor Telepon: <?php echo $i['telepon'] ?></p>

      <div>
      <a href="" class="btn btn-primary">Detail</a>
      <a class="btn btn-warning ml-2" href= ""> Ubah</a>
      <a class="btn btn-danger ml-2" href= "hapus.php?id=<?php echo $i['id']?>"> Hapus </a>
      
      </div>
      
  </div>
</div>
<?php endforeach; ?>
</div>

<!-- Modal Tambah Importir-->
<?php

if (isset($_POST['tambahImportir'])) {
    tambahImportir($_POST);}
?>
<div class="modal" tabindex="-1" role="dialog" id="tambahimportir">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Tambah Importir</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <div class="m-1">
        <form action="" method="POST">
          <div class="form-group">
            <label for="">Nama Importir</label>
            <input required="" type="text" class="form-control" name="nama">
          </div>
          <div class="form-group">
            <label for="">Alamat</label>
            <input required="" type="text" class="form-control" name="alamat">
          </div>
          <div class="form-group">
            <label for="">Nomor Telepon</label>
            <input required="" type="text" class="form-control" name="telepon">
          </div>
          <br>
          <button data-dismiss="modal" class="btn btn-secondary mr-2"> Kembali</button>
          <button type="submit" class="btn btn-primary" name="tambahImportir">Simpan</button>
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