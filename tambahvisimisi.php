<?php

// kalau blm login bakalan mental ke login lagi, ga bakal bisa masuk index
session_start();

if (!isset($_SESSION["login"])) {
    header("Location: login.php");
    exit;
}
// koneksi ke database
require 'functions2.php';
// cek apakah tombol submit sudah ditekan atau belum
if (isset($_POST["submit"])) {

    // cek data berhasil ditambahkan atau tidak
    if (tambah($_POST) > 0) {
        echo "
        <script>
        alert('Data Berhasil di Simpan');
        document.location.href = 'visimisi.php';
        </script>
        ";
    } else {
        echo "
        <script>
        alert('Data Gagal di Simpan');
        document.location.href = 'visimisi.php';
        </script>
        ";
    }
}


?>


<!-- <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data Pegawai</title>
</head>

<body>
    <h1>Tambah Data Pegawai</h1>
    <form action="" method="post" enctype="multipart/form-data">
        <ul>
            <li>
                <label for="nip">NIP : </label>
                <input type="text" name="nip" id="nip" required>
            </li>
            <li>
                <label for="nama">Nama : </label>
                <input type="text" name="nama" id="nama" required>
            </li>
            <li>
                <label for="jabatan">Jabatan : </label>
                <input type="text" name="jabatan" id="jabatan" required>
            </li>
            <li>
                <label for="gambar">Gambar : </label>
                <input type="file" name="gambar" id="gambar">
            </li>
            <li>
                <button type="submit" name="submit">Tambah ken</button>
            </li>
        </ul>
    </form>

</body>

</html>

<!DOCTYPE html>
<html lang="en"> -->

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Visi & Misi</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="dist/css/adminlte.min.css">
</head>

<body>
    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <!-- left column -->
                <div class="col-md-6">
                    <!-- general form elements -->
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Input Visi & Misi</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form action="" method="post" enctype="multipart/form-data">
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="visi">Visi</label>
                                    <textarea class="form-control" rows="3" name="visi" id="visi" placeholder="Enter ..."></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="misi">Misi</label>
                                    <textarea class="form-control" rows="8" name="misi" id="misi" placeholder="Enter ..."></textarea>
                                </div>

                                <!-- /.card-body -->

                                <div class="card-footer">
                                    <a href="visimisi.php" class="btn btn-primary">Kembali</a>
                                    <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                                </div>
                        </form>
                    </div>
                    <!-- /.card -->
    </section>
</body>

</html>