<?php

// kalau blm login bakalan mental ke login lagi, ga bakal bisa masuk index
session_start();

if (!isset($_SESSION["login"])) {
    header("Location: login.php");
    exit;
}
// koneksi ke database
require 'functions2.php';


// ambil data di URL
$id = $_GET["id"];
// query data pegawai berdasarkan nip
$visimisi = query("SELECT * FROM visimisi WHERE  id = $id")[0];


// cek apakah tombol submit sudah ditekan atau belum
if (isset($_POST["submit"])) {

    // cek data berhasil diubah atau tidak
    if (ubah($_POST) > 0) {
        echo "
        <script>
        alert('Data Berhasil diubah');
        document.location.href = 'visimisi.php';
        </script>
        ";
    } else {
        echo "
        <script>
        alert('Data Gagal diubah');
        document.location.href = 'visimisi.php';
        </script>
        ";
    }
}


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ubah Visi & Misi</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="dist/css/adminlte.min.css">
</head>

<body>
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <!-- left column -->
                <div class="col-md-6">
                    <!-- general form elements -->
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Ubah Visi & Misi</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form action="" method="post" enctype="multipart/form-data">
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="id">Silahkan Masukan VISI & MISI</label>
                                    <input type="hidden" class="form-control" name="id" id="id" required value="<?= $visimisi["id"]; ?>">
                                </div>
                                <div class="form-group">
                                    <label for="visi">visi</label>
                                    <textarea class="form-control" rows="3" name="visi" id="visi" required value="<?= $visimisi["visi"]; ?>"> </textarea>
                                </div>
                                <div class="form-group">
                                    <label for="misi">Misi</label>
                                    <textarea class="form-control" rows="10" name="misi" id="misi" required value="<?= $visimisi["misi"]; ?>"></textarea>
                                </div>

                            </div>
                            <div class="card-body">
                                <a href="visimisi.php" class="btn btn-primary">Kembali</a>
                                <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                            </div>
                    </div>
                    </form>
                </div>
                <!-- /.card -->
    </section>
</body>

</html>