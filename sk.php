<html>

<head>
    <title>Sistem Informasi Kelurahan Bojongsari</title>
    <link rel="stylesheet" type="text/css" href="css/skstyle.css">
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
                    <li><a href="#" class="aktif">LAYANAN</a>
                        <div class="drop">
                            <ul>
                                <li><a href="akte.php">SEKSI PEMERINTAHAN</a>
                                <li><a href="sedp.php">SEKSI EKONOMI DAN PEMBANGUNAN</a>
                                <li><a href="sk.php" class="aktif">SEKSI KEMASYARAKATAN DAN PELAYANAN</a>
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
            <h1>SEKSI KEMASYARAKATAN DAN PELAYANAN</h1>
            <p>Halaman ini berisi tentang layanan pengurusan surat-surat yang berhubungan dengan Kemasyarakatan</p>
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
        <div class="row">
            <div class="sk">
                <h3>SURAT KETERANGAN TIDAK MAMPU (SKTM)</h3>
                <ul>
                    <li>Surat Pengantar dari RT/RW</li>
                    <li>Foto Copy KTP/KK</li>
                    <li>Surat Pernyataan Tidak Mampu (Materai 6000)
                </ul>
            </div>
            <div class="sk">
                <h3>DISPENSASI NIKAH</h3>
                <ul>
                    <li>Surat Pengantar dari RT/RW</li>
                    <li>Foto Copy KTP/KK Pemohon Calon</li>
                    <li>Surat Pernyataan Tidak Terkait Pernikahan</li>
                    <li>Surat Keterangan Jejaka/Perawan (diketahui Oleh RT/RW) Materai 6000</li>
                </ul>
            </div>
            <div class="sk">
                <h3>SANTUNAN KEMATIAN</h3>
                <ul>
                    <li>Surat Pengantar RT/RW</li>
                    <li>KTP/KK Asli yang Meninggal</li>
                    <li>Foto Copy KTP Ahli Waris</li>
                    <li>Jaminan Kesehatan (KIS/BPJS)</li>
                    <li>Surat Keterangan Kematian dari RS, KLINIK, PUSKESMAS.</li>
                    <li>Surat Keterangan dari Kelurahan</li>
                    <li>Surat Pernyataan Ahli Waris</li>
                </ul>
            </div>
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