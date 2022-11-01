<?php

require 'functions2.php';
$visimisi = query("SELECT * FROM visimisi");

// tombol cari ditekan
if (isset($_POST["cari"])) {
    $visimisi = cari($_POST["keyword"]);
}

?>
<html>

<head>
    <title>Sistem Informasi Kelurahan Bojongsari</title>
    <link rel="stylesheet" type="text/css" href="vmstyle.css">
</head>

<body>
    <section class="header">
        <nav>
            <a href="index.html"><img src="gambar/Kota Depok.png"></a>
            <div class="nav-bar">
                <ul>
                    <li class="active"><a href="index.html">BERANDA</a></li>
                    <li><a href="#">PROFIL</a>
                        <div class="drop">
                            <ul>
                                <li><a href="strukturpemerintahan.html">STRUKTUR PEMERINTAHAN</a>
                                <li><a href="wp.html">WILAYAH & PENDUDUK</a>
                                <li><a href="vm.html">VISI & MISI</a>
                            </ul>
                        </div>
                    </li>
                    <li><a href="#">LAYANAN</a>
                        <div class="drop">
                            <ul>
                                <li><a href="KK.html">PEMBUATAN KK</a>
                                <li><a href="KTP.html">PEMBUATAN KTP</a>
                                <li><a href="akte.html">AKTE KELAHIRAN</a>
                                <li><a href="skematian.html">SURAT KEMATIAN</a>
                                <li><a href="spindahdatang.html">SURAT PINDAH DATANG</a>
                                <li><a href="spindah.html">SURAT PINDAH</a>
                                <li><a href="skck.html">SKCK</a>
                            </ul>
                        </div>
                    </li>
                    <li><a href="berita.html">BERITA</a></li>
                    <li><a href="galeri.html">GALERI</a></li>
                    <li><a href="kontak.html">KONTAK</a></li>
                    <li><a href="tentang.html">TENTANG</a></li>
                    <li><input type="text" placeholder="Search..." required>
                        <input class="button" type="button" value="Cari">
                    </li>
                </ul>
            </div>
        </nav>

        <div class="judul">
            <h1>VISI & MISI</h1>
        </div>
    </section>
    <div class="col-sm-8">
        <div class="content">
            <div class="container-fluid">
                <form action="" method="post">
                    <div class="row mb-3">

                </form>
                <div><a href="tambahvisimisi.php">Tambah</a></div>
                <table class="table table-striped table-responsive">

                    <tr>
                        <th>No</th>
                        <th>Visi</th>
                        <th>Misi</th>
                        <th>Aksi</th>

                    </tr>

                    <?php $i = 1; ?>
                    <?php foreach ($visimisi as $row) : ?>

                        <tr>
                            <td><?= $i; ?></td>
                            <td><?= $row["visi"]; ?></td>
                            <td><?= $row["misi"]; ?></td>

                        </tr>
                        <?php $i++; ?>
                    <?php endforeach; ?>

                </table>

                <!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content -->
    </div>
</body>

</html>