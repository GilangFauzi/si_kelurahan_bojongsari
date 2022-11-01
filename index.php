<?php
session_start();

require 'functions4.php';
$informasi = query("SELECT * FROM informasi");

?>
<html>

<head>
    <title>Sistem Informasi Kelurahan Bojongsari</title>
    <link rel="stylesheet" type="text/css" href="css/berandastyle.css">
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
                    <li class="active"><a href="index.php" class="aktif">BERANDA</a></li>
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
                                <li><a href="sk.php">SEKSI KEMASYARAKATAN DAN PELAYANAN</a>
                            </ul>
                        </div>
                    </li>
                    <li><a href="galeri2.php">GALERI</a></li>
                    <li><a href="kontak.php">KONTAK</a></li>
                    <li><a href="tentang.php">TENTANG</a></li>
                </ul>
            </div>
            <i class="fa fa-bars" onclick="showMenu()"></i>
        </nav>

        <div class="judul">
            <h1>KELURAHAN BOJONGSARI</h1>
            <p>Selamat Datang di Website Sistem Informasi Kelurahan Bojongsari
            </p>
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

    <!---------Konten-------->

    <section class="informasi">
        <div class="text">
            <h1>
                <marquee behavior="scroll" direction="left" height="75" scrollamount="5">SELAMAT DATANG DI WEBSITE SISTEM INFORMASi KELURAHAN BOJONGSARI</marquee>
            </h1>
        </div>
        <table>

            <tr>
                <th class="papan">PAPAN INFORMASI</th>

            </tr>
            <?php $i = 1; ?>
            <?php foreach ($informasi as $row) : ?>

                <tr>
                    <th><a href="img/<?= $row["gambar"]; ?>"><img class="Poster" src="img/<?= $row["gambar"]; ?>"></a></th>
                </tr>
                <tr>
                    <td><?= $row["info"]; ?></td>
                </tr>
                <?php $i++; ?>
            <?php endforeach; ?>
        </table>
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