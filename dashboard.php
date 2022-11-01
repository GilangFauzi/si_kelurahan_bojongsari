<?php

// kalau blm login bakalan mental ke login lagi, ga bakal bisa masuk index
session_start();

if (!isset($_SESSION["login"])) {
    header("Location: index.php");
    exit;
}
require 'functions.php';
$pegawai = query("SELECT * FROM pegawai");
$penduduk = query("SELECT * FROM penduduk");
$matapencaharian = query("SELECT * FROM matapencaharian");
$agama = query("SELECT * FROM agama");
$bagan = query("SELECT * FROM bagan");


?>

<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Kelurahan Bojongsari</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="dist/css/adminlte.min.css">
</head>

<body class="hold-transition sidebar-mini">
    <div class="wrapper">

        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="#" class="nav-link">Dashboard</a>
                </li>
            </ul>

            <!-- Right navbar links -->
            <ul class="navbar-nav ml-auto">
                <!-- Navbar Search -->
                <li class="nav-item">
                    <div class="navbar-search-block">
                        <form class="form-inline">
                            <div class="input-group input-group-sm">
                            </div>
                        </form>
                    </div>
                </li>

                <!-- Messages Dropdown Menu -->

                <!-- Notifications Dropdown Menu -->
            </ul>
        </nav>

        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            <a href="#" class="brand-link">
                <img src="logo depok.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
                <span class="brand-text font-weight-light">Kelurahan Bojongsari</span>
            </a>

            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar user panel (optional) -->
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="info">
                        <a href="#" class="d-block">FORM Dashboard</a>
                    </div>
                </div>

                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                        <li class="nav-item">
                            <a href="dashboard.php" class="nav-link">
                                <i class="nav-icon fas fa-th"></i>
                                <p>Dashboard
                                </p>
                            </a>
                        </li>
                        <li class="nav-item menu-open">
                            <a href="#" class="nav-link active">
                                <i class="fas fa-id-card"></i>
                                <p>
                                    Data Pegawai
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="pegawai.php" class="nav-link active">
                                        <i class="fas fa-user-tie"></i>
                                        <p>Pegawai</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="bagan.php" class="nav-link">
                                        <i class="fas fa-sitemap"></i>
                                        <p>Bagan</p>
                                    </a>

                                </li>
                            </ul>
                        </li>
                        <li class="nav-item menu-open">
                            <a href="#" class="nav-link active">
                                <i class="fas fa-users"></i>
                                <p>
                                    Data Penduduk
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="penduduk.php" class="nav-link active">
                                        <i class="fas fa-user-friends"></i>
                                        <p>Penduduk</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="matapencaharian.php" class="nav-link">
                                        <i class="fas fa-briefcase"></i>
                                        <p>Mata Pencaharian</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="agama.php" class="nav-link">
                                        <i class="fas fa-heart"></i>
                                        <p>Agama
                                        </p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a href="visimisi.php" class="nav-link">
                                <i class="fas fa-file-alt"></i>
                                <p>Visi & Misi
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="galeri.php" class="nav-link">
                                <i class="fas fa-image"></i>
                                <p>Galeri
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="foto.php" class="nav-link">
                                <i class="fas fa-image"></i>
                                <p>Foto
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="informasi.php" class="nav-link">
                                <i class="fas fa-info"></i>
                                <p>Informasi
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="saran.php" class="nav-link">
                                <i class="fas fa-file-alt"></i>
                                <p>Saran
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="logout.php" class="nav-link">
                                <i class="fas fa-sign-out-alt"></i>
                                <p>Logout
                                </p>
                            </a>
                        </li>
                    </ul>
                </nav>
                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>


        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                        </div><!-- /.row -->
                    </div><!-- /.container-fluid -->
                </div>

                <div class="col-sm-10">
                    <div class="content">
                        <div class="container-fluid">
                            <form action="" method="post">
                                <div class="row mb-3">
                            </form>
                            <table class="table table-striped table-responsive">
                                <tr>
                                    <th> Informasi Struktur Kelurahan</th>
                                </tr>
                                <?php $i = 1; ?>
                                <?php foreach ($bagan as $row) : ?>

                                    <tr>

                                        <td><img src="img/<?= $row["gambar"]; ?>" width="770"> </td>
                                    </tr>
                                    <?php $i++; ?>
                                <?php endforeach; ?>

                            </table>
                        </div>
                        <!-- /.row -->
                    </div><!-- /.container-fluid -->
                </div>
                <!-- /.content -->
            </div>
            <section class="content">

                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-10">
                            <div class="col-sm-10">
                                <h2>Informasi Pegawai</h2>
                                <div class="content">
                                    <div class="container-fluid">
                                        <table class="table table-striped table-responsive">

                                            <tr>
                                                <th>No</th>
                                                <th>NIP</th>
                                                <th>Nama</th>
                                                <th>Jabatan</th>
                                                <th>Fungsi</th>
                                                <th>Gambar</th>
                                            </tr>

                                            <?php $i = 1; ?>
                                            <?php foreach ($pegawai as $row) : ?>

                                                <tr>
                                                    <td><?= $i; ?></td>
                                                    <td><?= $row["nip"]; ?></td>
                                                    <td><?= $row["nama"]; ?></td>
                                                    <td><?= $row["jabatan"]; ?></td>
                                                    <td><?= $row["fungsi"]; ?></td>
                                                    <td><img src="img/<?= $row["gambar"]; ?>" width="50" </td>

                                                </tr>
                                                <?php $i++; ?>
                                            <?php endforeach; ?>

                                        </table>

                                    </div><!-- /.container-fluid -->
                                </div>
                                <!-- /.content -->
                            </div>
                            <!-- /PENDUDUK-->
                            <div class="col-sm-8">
                                <h2>Informasi Penduduk</h2>
                                <div class="content">
                                    <div class="container-fluid">
                                        <form action="" method="post">
                                            <div class="row mb-3">

                                        </form>

                                        <table class="table table-striped table-responsive">

                                            <tr>

                                                <th>RW</th>
                                                <th>Laki-Laki</th>
                                                <th>Perempuan</th>

                                                <th>Jumlah</th>


                                            </tr>

                                            <?php $i = 1; ?>
                                            <?php foreach ($penduduk as $row) : ?>
                                                <?php
                                                //OPERATOR ARITMATIKA
                                                $a = $row["perempuan"];
                                                $b = $row["lakilaki"];
                                                $jumlah = $a + $b;
                                                ?>
                                                <tr>

                                                    <td><?= $row["rw"]; ?></td>
                                                    <td><?= $row["lakilaki"]; ?></td>
                                                    <td><?= $row["perempuan"]; ?></td>

                                                    <td>
                                                        <?php echo $jumlah ?>
                                                    </td>

                                                </tr>

                                            <?php endforeach; ?>
                                            <tr>
                                                <th colspan="1">Total</th>



                                                <?php
                                                // perintah tampil data
                                                $q = mysqli_query($koneksi, "SELECT * FROM penduduk");

                                                $total = 0;
                                                $total_jumlah = 0;
                                                $total_perempuan = 0;
                                                $total_lakilaki = 0;
                                                $no = 1;

                                                while ($r = $q->fetch_assoc()) {
                                                    // total adalah hasil dari harga x qty
                                                    $total = $r['perempuan'] + $r['lakilaki'];
                                                    // total bayar adalah penjumlahan dari keseluruhan total
                                                    $total_jumlah += $total;
                                                    $total_perempuan += $r['perempuan'];
                                                    $total_lakilaki += $r['lakilaki'];
                                                ?>
                                                <?php
                                                }
                                                ?>


                                                <td><?= $total_lakilaki ?></td>
                                                <td><?= $total_perempuan ?></td>

                                                <td><?= $total_jumlah ?></td>
                                            </tr>
                                        </table>

                                    </div><!-- /.container-fluid -->
                                </div>
                                <!-- /.content -->
                            </div>
                            <!-- /MATA PENCAHARIAN -->
                            <h2>Informasi Mata Pecaharian Penduduk</h2>
                            <div class="col-sm-8">

                                <div class="content">
                                    <div class="container-fluid">
                                        <form action="" method="post">
                                            <div class="row mb-3">
                                        </form>

                                        <table class="table table-striped table-responsive">

                                            <tr>

                                                <th>No</th>
                                                <th>Uraian</th>
                                                <th>Jumlah</th>


                                            </tr>

                                            <?php $i = 1; ?>
                                            <?php foreach ($matapencaharian as $row) : ?>
                                                <tr>

                                                    <td><?= $i; ?></td>
                                                    <td><?= $row["uraian"]; ?></td>
                                                    <td><?= $row["jumlah"]; ?></td>


                                                </tr>
                                                <?php $i++; ?>
                                            <?php endforeach; ?>
                                            <tr>

                                                <th colspan="2">Total Jumlah</th>
                                                <?php
                                                // perintah tampil data
                                                $q = mysqli_query($koneksi, "SELECT * FROM matapencaharian");

                                                $total = 0;
                                                $total_jumlah = 0;
                                                $no = 1;

                                                while ($r = $q->fetch_assoc()) {
                                                    // total adalah hasil dari harga x qty
                                                    $total = $r['jumlah'];
                                                    // total bayar adalah penjumlahan dari keseluruhan total
                                                    $total_jumlah += $total;
                                                ?>
                                                <?php
                                                }
                                                ?>
                                                <td><?= $total_jumlah ?></td>
                                            <tr>
                                        </table>


                                    </div><!-- /.container-fluid -->
                                </div>

                            </div>
                            <!-- /Agama -->
                            <h2>Informasi Agama</h2>
                            <div class="col-sm-100">
                                <div class="content">
                                    <div class="container-fluid">


                                        <table class="table table-striped table-responsive">

                                            <tr>

                                                <th>No</th>
                                                <th>Uraian</th>
                                                <th>Jumlah</th>

                                            </tr>

                                            <?php $i = 1; ?>
                                            <?php foreach ($agama as $row) : ?>
                                                <tr>

                                                    <td><?= $i; ?></td>
                                                    <td><?= $row["uraian"]; ?></td>
                                                    <td><?= $row["jumlah"]; ?></td>

                                                </tr>
                                                <?php $i++; ?>
                                            <?php endforeach; ?>

                                            <tr>

                                                <th colspan="2">Total Jumlah</th>

                                                <?php
                                                // perintah tampil data
                                                $q = mysqli_query($koneksi, "SELECT * FROM agama");

                                                $total = 0;
                                                $total_jumlah = 0;
                                                $no = 1;

                                                while ($r = $q->fetch_assoc()) {
                                                    // total adalah hasil dari harga x qty
                                                    $total = $r['jumlah'];
                                                    // total bayar adalah penjumlahan dari keseluruhan total
                                                    $total_jumlah += $total;
                                                ?>
                                                <?php
                                                }
                                                ?>


                                                <td><?= $total_jumlah ?></td>
                                            </tr>


                                        </table>


                                    </div>
                                </div><!-- /.container-fluid -->
                            </div>

                        </div>
                        <!-- Control Sidebar -->
                        <aside class="control-sidebar control-sidebar-dark">
                            <!-- Control sidebar content goes here -->
                            <div class="p-3">
                                <h5>Title</h5>
                                <p>Sidebar content</p>
                            </div>
                        </aside>
                        <!-- /.control-sidebar -->

                        <!-- REQUIRED SCRIPTS -->

                        <!-- jQuery -->
                        <script src="plugins/jquery/jquery.min.js"></script>
                        <!-- Bootstrap 4 -->
                        <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
                        <!-- AdminLTE App -->
                        <script src="dist/js/adminlte.min.js"></script>

</body>

</html>