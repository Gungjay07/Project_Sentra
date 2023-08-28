<?php 
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(0);
error_reporting(E_ALL);

include "koneksi.php";
// var_dump($_POST['id']);
$id= $_POST['id'];
$nama = $_POST['nama'];
$deskripsi = $_POST['deskripsi'];
$gambar_old = $_POST['gambar_old'];
$gambar = $_FILES['gambar']['name'];
if ($gambar == null) { 
    $query = mysqli_query($koneksi, "UPDATE produk SET nama='$nama', deskripsi='$deskripsi', gambar='$gambar_old' where id='$id'") or die(mysqli_error($koneksi));
    if($query = true){
        header("location:index.php?pesan=update");
    }else{
        header("location:update.php?id=$id&pesan=gagal");
    }
}
else{
   
    $ekstensi_diperbolehkan = array('png','jpg','jpeg');
    $tipe_file = $_FILES['gambar']['type'];
    $ukuran    = $_FILES['gambar']['size'];
    $file_tmp = $_FILES['gambar']['tmp_name'];
    $path = "images/".$gambar;
    if($tipe_file == "image/jpeg" || $tipe_file == "image/png"){
        if($ukuran < 1044070){
            move_uploaded_file($file_tmp, $path);
            $query = mysqli_query($koneksi, "UPDATE produk SET nama='$nama', deskripsi='$deskripsi', gambar='$gambar' where id='$id'") or die(mysqli_error($koneksi));
            if($query = true){
                header("location:update.php?pesan=update");
            }else{
                header("location: update.php?id=$id&pesan=gagal");
            }
    }else{
      header("location: update.php?id=$id&pesan=ukuran");
    }
            }else{
            header("location:update.php?id=$id&pesan=ektensi");

           }
}
// var_dump($gambar_old.$deskripsi.$harga.$kategori.$merk.$stok);