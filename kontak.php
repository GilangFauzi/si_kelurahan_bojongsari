<?php
// koneksi ke database
require 'functions5.php';
// cek apakah tombol submit sudah ditekan atau belum
if (isset($_POST["submit"])) {

    // cek data berhasil ditambahkan atau tidak
    if (tambah($_POST) > 0) {
        echo "
        <script>
        alert('Saran Sukses Terkirim || tunggu balasan via E-mail');
        document.location.href = 'kontak.php';
        </script>
        ";
    } else {
        echo "
        <script>
        alert('Anda sudah pernah mengirimkan saran, tunggu beberpa hari lagi');
        document.location.href = 'kontak.php';
        </script>
        ";
    }
}


?>
<html>

<head>
    <title>Sistem Informasi Kelurahan Bojongsari</title>
    <link rel="stylesheet" type="text/css" href="css/kontakstyle.css">
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
                                <li><a href="sk.php">SEKSI KEMASYARAKATAN</a>
                            </ul>
                        </div>
                    </li>
                    <li><a href="galeri2.php">GALERI</a></li>
                    <li><a href="kontak.php" class="aktif">KONTAK</a></li>
                    <li><a href="tentang.php">TENTANG</a></li>
                </ul>
            </div>
            <i class="fa fa-bars" onclick="showMenu()"></i>
        </nav>

        <div class="judul">
            <h1>KONTAK</h1>
            <p>Halaman Website ini berisi tentang cara menghubungi Kelurahan Bojongsari</p>
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
        <div class="container-fluid">
            <form action="" method="post" enctype="multipart/form-data">
                <table>
                    <tr>
                        <th colspan="2">KOTAK SARAN & PERTANYAAN</th>
                    </tr>
                    <tr>
                        <td>
                            <label for="nik">NIK</label>
                        </td>
                        <td>
                            <input type="text" class="form-control" name="nik" id="nik" placeholder="ex:3271046504930002" required>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="nama">Nama</label>
                        </td>
                        <td>
                            <input type="text" class="form-control" name="nama" id="nama" placeholder="Masukan Nama" required>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="alamat">Alamat</label>
                        </td>
                        <td>
                            <textarea type="text" class="form-control" rows="5" name="alamat" id="alamat" placeholder="Masukan Alamat" required></textarea>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="email">E-mail</label>
                        </td>
                        <td>
                            <input type="text" class="form-control" name="email" id="email" placeholder="ex:ucup12@gmail.com" required>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="pesan">Saran</label>
                        </td>
                        <td>
                            <textarea class="form-control" rows="10" name="pesan" id="pesan" placeholder="Masukan pesan yang ingin anda sampaikan" required></textarea>
                        </td>
                    </tr>
                    <tr>
                        <th colspan="2">
                            <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                        </th>
                    </tr>
                </table>
            </form>
        </div>
        <div class="kontak">
            <table>
                <tr>
                    <td><i class="fa fa-envelope"></td>
                    <td>kelurahanbojongsari2020@gmail.com</td>
                </tr>
                <tr>
                    <td><i class="fa fa-facebook-square"></i></td>
                    <td>Kelurahan Bojongsari Depok</td>
                </tr>
                <tr>
                    <td><i class="fa fa-instagram"></i></td>
                    <td>kelurahan_bojongsari</p>
                </tr>
                <tr>
                    <td><i class="fa fa-twitter-square"></td>
                    <td>BojongsariLama</td>
                </tr>
                <tr>
                    <td><i class="fa fa-map-marker"></td>
                    <td>Bojongsari, Depok.</p>
                </tr>
            </table>
        </div>
        <div class="lokasi">
            <h1>LOKASI KELURAHAN BOJONGSARI</h1>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d991.243284263919!2d106.7428674848842!3d-6.
                397463228425926!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69e8b92c58f767%3A0xd10b9230bc490fcc!2sBojongsari%20Lama%2C%20Kec.
                %20Bojongsari%2C%20Kota%20Depok%2C%20Jawa%20Barat!5e0!3m2!1sid!2sid!4v1618968653371!5m2!1sid!2sid" width="80%" height="500" style="border:0;" allowfullscreen="" loading="lazy">
            </iframe>
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