<?php

// kalau blm login bakalan mental ke login lagi, ga bakal bisa masuk index
session_start();

if (!isset($_SESSION["login"])) {
    header("Location: login.php");
    exit;
}
// koneksi ke database
require 'functions5.php';


// ambil data di URL
$nik = $_GET["nik"];
// query data pegawai berdasarkan nip
$saran = query("SELECT * FROM saran WHERE  nik = $nik")[0];


// cek apakah tombol submit sudah ditekan atau belum
if (isset($_POST["submit"])) {

    // cek data berhasil diubah atau tidak
    if (ubah($_POST) > 0) {
        echo "
        <script>
        alert('Data Berhasil diubah');
        document.location.href = 'saran.php';
        </script>
        ";
    } else {
        echo "
        <script>
        alert('Data Gagal diubah');
        document.location.href = 'saran.php';
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
    <title>Tambah Saram</title>
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
                            <h3 class="card-title">Ubah Saran</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form action="" method="post" enctype="multipart/form-data">
                            <input type="hidden" name="nip" value="<?= $saran[" nip"]; ?>">
                            <input type="hidden" name="gambarLama" value="<?= $saran[" gambar"]; ?>">
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="nik">NIP</label>
                                    <input type="text" class="form-control" name="nik" id="nik" required value="<?= $saran["nik"]; ?>" ?>
                                </div>
                                <div class="form-group">
                                    <label for="nama">Nama</label>
                                    <input type="text" class="form-control" name="nama" id="nama" required value="<?= $saran["nama"]; ?>">
                                </div>
                                <div class="form-group">
                                    <label for="alamat">Alamat</label>
                                    <input type="text" class="form-control" name="alamat" id="alamat" required value="<?= $saran["alamat"]; ?>">
                                </div>
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input type="text" class="form-control" name="email" id="email" required value="<?= $saran["email"]; ?>">
                                </div>
                                <div class="form-group">
                                    <label for="pesan">Saran</label>
                                    <textarea class="form-control" rows="10" name="pesan" id="pesan" required value="<?= $saran["pesan"]; ?>"></textarea>
                                </div>
                            </div>
                    </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
    </div>
    <!-- /.card-body -->

    <div class="card-footer">
        <button type="submit" name="submit" class="btn btn-primary">Submit</button>
    </div>
    <div class="card-footer">
        <a href="saran.php">Kembali</a>
    </div>
    </form>
    </div>
    </div>
    </div>
    </div>
    <!-- /.card -->
    </section>
</body>

</html>