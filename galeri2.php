<?php

// kalau blm login bakalan mental ke login lagi, ga bakal bisa masuk index
require 'functions3.php';
$galeri = query("SELECT * FROM galeri");
$foto = query("SELECT * FROM foto");

?>

<html>

<head>
    <title>Sistem Informasi Kelurahan Bojongsari</title>
    <link rel="stylesheet" type="text/css" href="css/galeristyle.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
    <section class="header">
        <nav>
            <a href="index.php"><img src="css/gambar/Kota Depok.png"></a>
            <div class="nav-bar" id="navbar">
                <i class="fa fa-times" onclick="hideMenu()"></i>
                <ul>
                    <li class="active"><a href="index.php">BERANDA</a></li>
                    <li><a href="strukturpemerintahan.php">PROFIL</a>
                        <div class="drop">
                            <ul>
                                <li><a href="strukturpemerintahan.php">STRUKTUR PEMERINTAHAN</a>
                                <li><a href="wp.php">GAMBARAN UMUM</a>
                                <li><a href="vm.php">VISI & MISI</a>
                            </ul>
                        </div>
                    </li>
                    <li><a href="akte.php">LAYANAN</a>
                        <div class="drop">
                            <ul>
                                <li><a href="akte.php">SEKSI PEMERINTAHAN</a>
                                <li><a href="sedp.php">SEKSI EKONOMI DAN PEMBANGUNAN</a>
                                <li><a href="sk.php">SEKSI KEMASYARAKATAN PELAYANAN</a>
                            </ul>
                        </div>
                    </li>
                    <li><a href="galeri2.php" class="aktif">GALERI</a></li>
                    <li><a href="kontak.php">KONTAK</a></li>
                    <li><a href="tentang.php">TENTANG</a></li>
                </ul>
            </div>
            <i class="fa fa-bars" onclick="showMenu()"></i>
        </nav>

        <div class="judul">
            <h1>GALERI</h1>
            <p>Halaman Website ini berisi tentang galeri dari Keluarahan Bojongsari</p>
        </div>
    </section>

    <!--JavaScript-->

    <script>
        var navbar = document.getElementById("navbar");

        function showMenu() {
            navbar.style.right = "0";
        }

        function hideMenu() {
            navbar.style.right = "-30%";
        }
    </script>

    <!-------langkah------->

    <section class="konten">
        <div class="galeri">
            <table>
                <tr>
                    <th>FOTO</th>
                    <th>KETERANGAN</th>

                </tr>

                <?php foreach ($galeri as $row) : ?>

                    <tr>
                        <td><a href="img/<?= $row["gambar"]; ?>"><img src="img/<?= $row["gambar"]; ?>" width="400"></a></td>
                        <td><?= $row["keterangan"]; ?></td>

                    </tr>

                <?php endforeach; ?>

            </table>
        </div>
        <hr>
        <div class="foto">
            <h1>FOTO LAINNYA</h1>
            <?php $i = 1; ?>
            <?php foreach ($foto as $row) : ?>


                <a href="img/<?= $row["gambar"]; ?>"><img src="img/<?= $row["gambar"]; ?>" width="200"></a>

                <?php $i++; ?>
            <?php endforeach; ?>
        </div>
    </section>

    <!--------footer-------->

    <section class="footer">
        <div class="admin">
            <a href="login.php"><i class="fa fa-user"></i>
                Admin</a>
            <a><i class="fa fa-envelope"></i>
                kelurahanbojongsari2020@gmail.com</a>
            <a><i class="fa fa-facebook-square"></i>
                Kelurahan Bojongsari Depok</a>
            <a><i class="fa fa-instagram"></i>
                kelurahan_bojongsari</a>
            <a><i class="fa fa-twitter-square"></i>
                @BojongsariLama</a>
        </div>
        <p>©2021 Kelurahan Bojongsari All Right Reserved</p>
    </section>
</body>

</html>