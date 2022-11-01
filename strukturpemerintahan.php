<?php
require 'functions.php';
$pegawai = query("SELECT * FROM pegawai");

$bagan = query("SELECT * FROM bagan");
?>
<html>

<head>
    <title>Sistem Informasi Kelurahan Bojongsari</title>
    <link rel="stylesheet" type="text/css" href="css/strukturstyle.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
    <section class="header">
        <nav>
            <a href="index.html"><img src="css/gambar/Kota Depok.png"></a>
            <div class="nav-bar" id="navbar">
                <i class="fa fa-times" onclick="hideMenu()"></i>
                <ul>
                    <li class="active"><a href="index.php">BERANDA</a></li>
                    <li><a href="#" class="aktif">PROFIL</a>
                        <div class="drop">
                            <ul>
                                <li><a href="strukturpemerintahan.php" class="aktif">STRUKTUR PEMERINTAHAN</a>
                                <li><a href="wp.php">WILAYAH & PENDUDUK</a>
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
            <h1>STRUKTUR PEMERINTAHAN</h1>
            <p>Halaman ini berisi tentang Struktur Pemerintahan yang ada di Kelurahan Bojongsari</p>
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

    <!-------Struktur-------->

    <section class="struktur">
        <div class="bagan">
            <table>
                <tr>
                    <th>Bagan Struktur Pemerintahan</th>
                </tr>

                <?php $i = 1; ?>
                <?php foreach ($bagan as $row) : ?>

                    <tr>

                        <td><a href="img/<?= $row["gambar"]; ?>"><img src="img/<?= $row["gambar"]; ?>" width="100%"></a></td>

                    </tr>
                    <?php $i++; ?>
                <?php endforeach; ?>

            </table>
        </div>
        <hr>
        <div class="struk">
            <h1>STRUKTUR PEMERINTAHAN</h1>
            <table>

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
                        <td><img src="img/<?= $row["gambar"]; ?>" width="100"></td>

                    </tr>
                    <?php $i++; ?>
                <?php endforeach; ?>
            </table>
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