<?php

// kalau blm login bakalan mental ke login lagi, ga bakal bisa masuk index
session_start();

if (!isset($_SESSION["login"])) {
    header("Location: login.php");
    exit;
}
// koneksi ke database
require 'functions8.php';


// ambil data di URL
$nomer = $_GET["nomer"];
// query data pegawai berdasarkan nip
$agama = query("SELECT * FROM agama WHERE  nomer = $nomer")[0];


// cek apakah tombol submit sudah ditekan atau belum
if (isset($_POST["submit"])) {

    // cek data berhasil diubah atau tidak
    if (ubah($_POST) > 0) {
        echo "
        <script>
        alert('Data Berhasil diubah');
        document.location.href = 'agama.php';
        </script>
        ";
    } else {
        echo "
        <script>
        alert('Data Gagal diubah');
        document.location.href = 'agama.php';
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
    <title>Ubah Agama</title>
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
                            <h3 class="card-title">Ubah Data Agama</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form action="" method="post" enctype="multipart/form-data">
                            <input type="hidden" class="form-control" name="nomer" id="nomer" required value="<?= $agama["nomer"]; ?>" ?>
                            <div class="card-body">
                                <div class="form-group">

                                </div>
                                <div class="form-group">
                                    <label for="uraian">Uraian</label>
                                    <input type="text" class="form-control" name="uraian" id="uraian" required value="<?= $agama["uraian"]; ?>">
                                </div>
                                <div class="form-group">
                                    <label for="jumlah">Jumlah</label>
                                    <input type="text" class="form-control" name="jumlah" id="jumlah" required value="<?= $agama["jumlah"]; ?>">
                                </div>
                            </div>
                            <div class="card-body">
                                <a href="agama.php" class="btn btn-primary">Kembali</a>
                                <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                            </div>
                    </div>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
    </div>
    <!-- /.card-body -->
    </form>
    </div>
    </div>
    </div>
    </div>
    <!-- /.card -->
    </section>
</body>

</html>