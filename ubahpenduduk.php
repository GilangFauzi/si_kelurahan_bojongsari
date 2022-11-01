<?php

// kalau blm login bakalan mental ke login lagi, ga bakal bisa masuk index
session_start();

if (!isset($_SESSION["login"])) {
    header("Location: login.php");
    exit;
}
// koneksi ke database
require 'functions6.php';


// ambil data di URL
$rw = $_GET["rw"];
// query data pegawai berdasarkan nip
$penduduk = query("SELECT * FROM penduduk WHERE  rw = $rw")[0];


// cek apakah tombol submit sudah ditekan atau belum
if (isset($_POST["submit"])) {

    // cek data berhasil diubah atau tidak
    if (ubah($_POST) > 0) {
        echo "
        <script>
        alert('Data Berhasil diubah');
        document.location.href = 'penduduk.php';
        </script>
        ";
    } else {
        echo "
        <script>
        alert('Data Gagal diubah');
        document.location.href = 'penduduk.php';
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
    <title>Tambah Data Pegawai</title>
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
                            <h3 class="card-title">Ubah Data Penduduk</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form action="" method="post" enctype="multipart/form-data">
                            <input type="hidden" name="rw" value="<?= $penduduk[" rw"]; ?>">
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="rw">RW</label>
                                    <input type="text" class="form-control" name="rw" id="rw" required value="<?= $penduduk["rw"]; ?>" ?>
                                </div>
                                <div class="form-group">
                                    <label for="perempuan">Perempuan</label>
                                    <input type="text" class="form-control" name="perempuan" id="perempuan" required value="<?= $penduduk["perempuan"]; ?>">
                                </div>
                                <div class="form-group">
                                    <label for="lakilaki">Laki-laki</label>
                                    <input type="text" class="form-control" name="lakilaki" id="lakilaki" required value="<?= $penduduk["lakilaki"]; ?>">
                                </div>
                            </div>
                            <div class="card-body">
                                <a href="penduduk.php" class="btn btn-primary">Kembali</a>
                                <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                            </div>
                    </div>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
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