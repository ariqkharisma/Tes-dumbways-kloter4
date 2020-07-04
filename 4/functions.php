<?php
function koneksi(){
    return mysqli_connect('localhost', 'root', '', 'dumbways');
}
function query($query){
    $conn = koneksi();
    $result = mysqli_query($conn, $query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
return $rows;
}

function tambahProduk($data){
    $conn = koneksi();

    $nama = $data['nama'];
    $importir_id = $data['importir_id'];
    $foto = $data['foto'];
    $stok = $data['stok'];
    $harga = $data['harga'];
    
    $query = "INSERT INTO produk VALUES (null, '$nama', '$importir_id', '$foto', '$stok', '$harga')";

    mysqli_query($conn, $query) or die(mysqli_error($conn));

    return mysqli_affected_rows($conn);
}

function tambahImportir($data){
    $conn = koneksi();

    $nama = $data['nama'];
    $alamat= $data['alamat'];
    $telepon = $data['telepon'];
    
    
    $query = "INSERT INTO importir VALUES (null, '$nama', '$alamat', '$telepon')";

    mysqli_query($conn, $query) or die(mysqli_error($conn));

    return mysqli_affected_rows($conn);

}


function hapus($id) {
    $conn = koneksi();
    mysqli_query($conn, "DELETE FROM produk WHERE id = $id") or die(mysqli_erorr($conn));
    mysqli_query($conn, "DELETE FROM importir WHERE id = $id") or die(mysqli_erorr($conn));
    return mysqli_affected_rows($conn);

}


function ubah($data){
    $conn = koneksi();

    $id = $id['id'];
    $nama = $data['nama'];
    $importir_id = $data['importir_id'];
    $foto = $data['foto'];
    $stok = $data['stok'];
    $harga = $data['harga'];
    
    $query = "UPDATE produk SET 
                nama = '$nama',
                importir_id = '$importir_id',
                foto = '$foto',
                stok = '$stok',
                harga = '$harga
              WHERE id = $id";

    mysqli_query($conn, $query) or die(mysqli_error($conn));

    return mysqli_affected_rows($conn);

}
