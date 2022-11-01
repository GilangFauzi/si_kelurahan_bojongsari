<?php
require 'functions6.php';
$penduduk = query("SELECT * FROM penduduk");
$matapencaharian = query("SELECT * FROM matapencaharian");
$agama = query("SELECT * FROM agama");
?>

<html>

<head>
    <title>Sistem Informasi Kelurahan Bojongsari</title>
    <link rel="stylesheet" type="text/css" href="css/wpstyle.css">
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
                    <li><a href="#" class="aktif">PROFIL</a>
                        <div class="drop">
                            <ul>
                                <li><a href="strukturpemerintahan.php">STRUKTUR PEMERINTAHAN</a>
                                <li><a href="wp.php" class="aktif">GAMBARAN UMUM</a>
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
            <h1>GAMBARAN UMUM</h1>
            <p>Halaman Website ini berisi tentang gambaran umum dari Kelurahan Bojongsari
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

    <!-------langkah------->

    <section class="konten">
        <div class="wilayah">
            <h1>WILAYAH</h1>
            <table>
                <th>Luas Tanah</th>
                <td>Kelurahan Bojongsari merupakan salah satu wilayah yang berada dalam
                    lingkungan Kecamatan Bojongsari Kota Depok dengan luas wilayah : 169,3 Ha.
                </td>
                </tr>
                <tr>
                    <th>Letak Daerah</th>
                    <td>Letak Kelurahan Bojongsari berada di Wilayah Kecamatan Bojongsari Kota Depok</td>
                </tr>
                <tr>
                    <th>Batas Wilayah Daerah</th>
                    <td>Sebelah Utara:&emsp;Wilayah Kel Kedaung Kec. Sawangan<br>
                        Sebelah Timur:&emsp;Wilayah Kel Sawangan Kec. Sawangan<br>
                        Sebelah Selatan:&emsp;Wilayah Kel Duren Mekar Kec. Bojongsari<br>
                        Sebelah Barat:&emsp;Wilayah Kel Bojongsari Baru Kec. Sawangan</td>
                </tr>
                <tr>
                    <th>Peta Wilayah Kelurahan Bojongsari</th>
                    <td><a href="css/gambar/peta kelurahan bojongsari.jpg"><img class="peta" src="css/gambar/peta kelurahan bojongsari.jpg"></a></td>
                </tr>
                <tr>
                    <th>Iklim/Cuaca</th>
                    <td>Wilayah Kelurahan Bojongsari Beriklim Tropis dan pada musim hujan keadaan angin relatif kencang</td>
                </tr>
            </table>
        </div>
        <hr><br>
        <div class="penduduk">
            <h1>PENDUDUK</h1>
            <table>
                <tr>

                    <th>RW</th>
                    <th>Laki-Laki</th>
                    <th>Perempuan</th>
                    <th>Jumlah</th>

                </tr>

                <?php $i = 1; ?>
                <?php foreach ($penduduk as $row) : ?>
                    <?php
                    $jumlah = 0;
                    //OPERATOR ARITMATIKA
                    $b = $row["lakilaki"];
                    $a = $row["perempuan"];
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
                    <th>Total Jumlah</th>

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
            <hr><br>
            <h1>MATA PENCAHARIAN</h1>
            <table>

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
                </tr>

            </table>
            <hr><br>
            <h1>AGAMA</h1>
            <table>
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