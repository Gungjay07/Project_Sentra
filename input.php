<?php
include "koneksi.php";

if (isset($_POST['btn'])) {

    $nama = $_POST['nama'];
    $deskripsi = $_POST['deskripsi'];
    $gambar = $_FILES['gambar']['name'];


    $ekstensi_diperbolehkan = ['png', 'jpg', 'jpeg'];
    $name_file = $_FILES['gambar']['name'];
    $x = explode('.', $name_file);
    $ekstensi = strtolower(end($x));
    $ukuran    = $_FILES['gambar']['size'];
    $file_tmp = $_FILES['gambar']['tmp_name'];


    if (in_array($ekstensi, $ekstensi_diperbolehkan) === true) {
        if ($ukuran < 1044070) {
            move_uploaded_file($file_tmp, 'images/' . $name_file);
            $query = mysqli_query($koneksi, "INSERT INTO produk (nama, deskripsi, gambar) VALUES ('$nama', '$deskripsi', '$gambar')");
            if ($query) {
                // echo 'FILE BERHASIL DI UPLOAD';
                header('Location: index.php');
            } else {
                echo 'GAGAL MENGUPLOAD GAMBAR';
            }
        } else {
            echo 'UKURAN FILE TERLALU BESAR';
        }
    } else {
        echo 'EKSTENSI FILE YANG DI UPLOAD TIDAK DI PERBOLEHKAN';
    }

    // $sql = $koneksi->query("INSERT INTO produk (nama, merk, harga, deskripsi, gambar, kategori) VALUES('$nama', '$merkproduk', '$harga', '$deskripsi', '$gambar', '$kategori')");
    // if (isset($sql)) {
    // 	header('location:pagecustomor.php');
    // }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <title>Insert Page</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg">
        <div class="container-fluid">
            <img src="assets/adhi.jpeg" width="60" alt="">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-3">
                    <li class="nav-item m-2">
                        <a class="btn btn-outline-warning" aria-current="page" href="index.php">Back</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="mt-5 container  border w-25 pt-3 pb-3 rounded-4">
        <div>

            <form action="" method="POST" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="">Nama Produk</label>
                    <input type="text" name="nama" class="form-control" id="">
                </div>
                <div class="form-group mt-3">
                    <label for="">Deskripsi</label>
                    <input type="text" name="deskripsi" class="form-control" id="">
                </div>
                <div class="form-group mt-3">
                    <label for="">Gambar</label>
                    <input type="file" name="gambar" class="form-control" id="">
                </div>
                <div class="mt-3">
                    <button type="submit" class="btn btn-success" name="btn">Submit</button>
                </div>

            </form>

        </div>
    </div>

</body>

</html>