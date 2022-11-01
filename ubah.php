<?php

// kalau blm login bakalan mental ke login lagi, ga bakal bisa masuk index
session_start();

if (!isset($_SESSION["login"])) {
    header("Location: login.php");
    exit;
}
// koneksi ke database
require 'functions.php';


// ambil data di URL
$nip = $_GET["nip"];
// query data pegawai berdasarkan nip
$pegawai = query("SELECT * FROM pegawai WHERE  nip = $nip")[0];


// cek apakah tombol submit sudah ditekan atau belum
if (isset($_POST["submit"])) {

    // cek data berhasil diubah atau tidak
    if (ubah($_POST) > 0) {
        echo "
        <script>
        alert('Data Berhasil diubah');
        document.location.href = 'pegawai.php';
        </script>
        ";
    } else {
        echo "
        <script>
        alert('Data Gagal diubah');
        document.location.href = 'pegawai.php';
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
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
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
                            <h3 class="card-title">Ubah Data Pegawai</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form action="" method="post" enctype="multipart/form-data">
                            <input type="hidden" name="nip" value='<?= $pegawai[" nip"]; ?>'>
                            <input type="hidden" name="gambarLama" value='<?= $pegawai[" gambar"]; ?>'>
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="nip">NIP</label>
                                    <input type="text" class="form-control" name="nip" id="nip" required
                                        value="<?= $pegawai["nip"]; ?>">
                                </div>
                                <div class="form-group">
                                    <label for="nama">Nama</label>
                                    <input type="text" class="form-control" name="nama" id="nama" required
                                        value="<?= $pegawai["nama"]; ?>">
                                </div>
                                <div class="form-group">
                                    <label for="jabatan">Jabatan</label>
                                    <input type="text" class="form-control" name="jabatan" id="jabatan" required
                                        value="<?= $pegawai["jabatan"]; ?>">
                                </div>
                                <div class="form-group">
                                    <label for="fungsi">Fungsi</label>
                                    <input type="text" class="form-control" name="fungsi" id="fungsi" required
                                        value="<?= $pegawai["fungsi"]; ?>">
                                </div>
                                <div class="form-group">
                                    <label for="gambar">File input</label>
                                    <div class="input-group">
                                        <div class="custom-file">
                                            <input type="file" name="gambar" class="custom-file-input" id="gambar">

                                            <label class="custom-file-label" for="gambar">Pilih Gambar</label>

                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-5">
                                <div class="card card-primary">
                                    <div class="card-header">
                                        <h4 class="card-title">Gambar</h4>
                                    </div>
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-sm-5">
                                                <a href="#" data-toggle="lightbox" data-title="sample 1 - white"
                                                    data-gallery="gallery">
                                                    <img src="img/<?= $pegawai['gambar']; ?>" class="img-fluid mb-2"
                                                        alt="white sample" />
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    </div>
                    <div class="card-body">
                        <a href="pegawai.php" class="btn btn-primary">Kembali</a>
                        <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                    </div>
                </div>

    </section>
    </div>
    </form>
    </section>
</body>

</html>