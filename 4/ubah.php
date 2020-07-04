<?php 
require 'functions.php';

$id=$_GET['id'];

$p = query("SELECT * FROM produk WHERE id = $id ")[0];

if (isset($_POST['ubah'])) {
    if (ubah($_POST) > 0) {
        echo " <script>
        alert('data berhasil diubah');
        document.location.href = 'index.php';
        </script> ";
    }
    else {
        echo "data gagal diubah";
    }
}


?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <title>Ubah Produk</title>
</head>
<body>
    <div class="m-3">
        <h1>Ubah Produk</h1>
    </div>
      <div class="m-5">
        <form action="" method="POST">
          <input type="hidden" class="form-control" name="nama" value="<?php echo $p['id'] ?>">
          <div class="form-group">
            <label for="">Nama Produk</label>
            <input type="text" class="form-control" name="nama" value="<?php echo $p['nama'] ?>">
          </div>
          <div class="form-group">
            <label for="">Importir</label>
            <input type="text" class="form-control" name="importir_id" value="<?php echo $p['importir_id'] ?>">
          </div>
          <div class="form-group">
            <label for="">Foto</label>
            <input type="file" class="form-control" name="foto" value="<?php echo $p['foto'] ?>">
          <div class="form-group">
            <label for="">Harga</label>
            <input type="text" class="form-control" name="harga" value="<?php echo $p['harga'] ?>">
          </div>
          <div class="form-group">
            <label for="">Stok</label>
            <input type="text" class="form-control" name="stok" value="<?php echo $p['stok'] ?>">
          </div>
          <br>
          <a href="index.php" class="btn btn-secondary mr-2"> Kembali</a>
          <button type="submit" class="btn btn-primary" name="ubah">Ubah</button>
        </form>
      </div>



      <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    
</body>
</html>
     
      