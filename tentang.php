<html>

<head>
    <title>Sistem Informasi Kelurahan Bojongsari</title>
    <link rel="stylesheet" type="text/css" href="css/tentangstyle.css">
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
                                <li><a href="sk.php">SEKSI KEMASYARAKATAN DAN PELAYANAN</a>
                            </ul>
                        </div>
                    </li>
                    <li><a href="galeri2.php">GALERI</a></li>
                    <li><a href="kontak.php">KONTAK</a></li>
                    <li><a href="tentang.php" class="aktif">TENTANG</a></li>
                </ul>
            </div>
            <i class="fa fa-bars" onclick="showMenu()"></i>
        </nav>

        <div class="judul">
            <h1>TENTANG</h1>
            <p>Halaman ini berisi tentang sejarah Kelurahan Bojongsari</p>
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
        <div class="tentang">
            <div class="sejarah">
                <h1>SEJARAH KELURAHAN BOJONGSARI</h1>
                <p>Secara historis Bojongsari adalah tanah Perkebunan karet yang dijajah Pemerintahan Belanda, pada tahun 1960 setelah Indonesia Merdeka tanah
                    tersebut dikuasai oleh rakyat atas kesepakatan bersama Pemerintah dan tokoh masyarakat Bojongsari maka dibangunlah Balai Desa Bojongsari pada
                    tahun 1970.pada waktu itu Desa Bojongsari Masih satu wilayah Kecamatan Sawangan Kabupaten Bogor setelah ditetapkan peraturan baru
                    Pembentukan Daerah Undang-undang Otonomi No 15 tahun 1999 Daerah tentang Pembentukan Pemerintah Daerah Kota Madya TK II Cilegon dan Kota Madya
                    DT II Depok Dari Desa di tetapkan menjadi Kelurahan Bojongsari dengan adanya Peraturan Daerah Kota Depok, kelurahan Bojongsari mempunyai 14 Ketua
                    Rukun Warga, 36 Ketua Rukun Tetangga, 1 Ketua LPM Bojongsari, 1 Babinkamtibmas, dan 1 Babinsa.</p>
            </div>
            <div class="logo"><img src="css/gambar/depok.png"></div>
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