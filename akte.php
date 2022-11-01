<html>

<head>
    <title>Sistem Informasi Kelurahan Bojongsari</title>
    <link rel="stylesheet" type="text/css" href="css/aktestyle.css">
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
                                <li><a href="akte.php" class="aktif">SEKSI PEMERINTAHAN</a>
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
            <h1>SEKSI PEMERINTAHAN</h1>
            <p>Halaman ini berisi tentang layanan pengantar surat-surat yang berhubungan dengan Pemerintahan</p>
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
    <div class="subnav-bar">
        <ul>
            <li><a href="akte.php" class="aktif">SURAT AKTE</a>
            <li><a href="KK.php">KARTU KELUARGA</a>
            <li><a href="KTP.php">KARTU TANDA PENDUDUK</a>         
            <li><a href="skd.php">SURAT KETERANGAN DOMISILI</a>
            <li><a href="sktt.php">SURAT KETERANGAN TEMPAT TINGGAL</a>
            <li><a href="spawt.php">SURAT PENYATAAN AHLI WARIS</a>
            <li><a href="ik.php">IZIN KERAMAIAN</a>
            <li><a href="spindah.php">SURAT PINDAH</a>
            <li><a href="skck.php">PENGANTAR SKCK</a>
            
        </ul>
    </div>
    <hr>
        <h1>SURAT AKTE</h1>
        <div class="row">
            <div class="akte">
                <h3>PERSYARATAN PEMBUATAN SURAT AKTE KELAHIRAN</h3>
                <ul>
                    <li>Surat Pengantar dari RT/RW</li>
                    <li>Foto Copy KK/KTP Suami Istri</li>
                    <li>Surat Nikah atau Isbat Nikah</li>
                    <li>Surat Keterangan Kelahiran dari Bidan/RS/Puskesmas/RB</li>
                    <li>(Proses Pembuatan 14 Hari Kerja)
                </ul>
            </div>
            <div class="akte">
                <h3>PEMBUATAN AKTE PEMBAGIAN HAK BERSAMA</h3>
                <ul>
                    <li>Sertifikat Tanah yang telah dicek ke Kantor Badan Pertanahan Kota Depok</li>
                    <li>Girik Asli dan Copy C Desa/Kelurahan yang telah dilegalisir Lurah</li>
                    <li>Riwayat Tanah dari Kelurahan bagi yang belum Bersertifikat</li>
                    <li>BAP Lokasi yang disediakan oleh RT/RW</li>
                    <li>Poto copy KTP/KK Ahli Waris yang telah dilegalisir</li>
                    <li>BPHTB bagi yang terkena Pajak Daerah Diatas 60 Juta (Pembeli 2,5 % Penjual 5 %) dari total diatas 100 Juta dikurangi 60 Juta</li>
                    <li>Surat Pernyataan Waris Pemilik Sudah Meninggal</li>
                    <li>Denah Lokasi yang Belum Bersertifikat</li>
                    <li>Surat Pernyataan tidak sengketa diketahui RT/RW</li>
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
                kelurahanbojongari2020@gmail.com</a>
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