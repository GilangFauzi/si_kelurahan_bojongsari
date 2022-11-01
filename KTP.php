<html>

<head>
    <title>Sistem Informasi Kelurahan Bojongsari</title>
    <link rel="stylesheet" type="text/css" href="css/ktpstyle.css">
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
                                <li><a href="sk.php">SEKSI KEMASYARAKATAN</a>
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
            <li><a href="akte.php">SURAT AKTE</a>
            <li><a href="KK.php">KARTU KELUARGA</a>
            <li><a href="KTP.php" class="aktif">KARTU TANDA PENDUDUK</a>         
            <li><a href="skd.php">SURAT KETERANGAN DOMISILI</a>
            <li><a href="sktt.php">SURAT KETERANGAN TEMPAT TINGGAL</a>
            <li><a href="spawt.php">SURAT PENYATAAN AHLI WARIS</a>
            <li><a href="ik.php">IZIN KERAMAIAN</a>
            <li><a href="spindah.php">SURAT PINDAH</a>
            <li><a href="skck.php">PENGANTAR SKCK</a>
            
        </ul>
    </div>
    <hr>
    <h1>KARTU TANDA PENDUDUK</h1>
        <div class="row">
            <div class="ktp">
                <h3>PERSYARATAN PENERBITAN KARTU TANDA PENDUDUK BAGI WNI</h3>
                <ul>
                    <li>Telah berusia 17 (tujuh belas) tahun atau sudah kawin atau pernah kawin</li>
                    <li>Foto copy Kartu Keluarga</li>
                    <li>Foto copy Kutipan Akta Nikah (Akta Kawin bagi penduduk yang belum berusia 17 (tujuh belas)</li>
                    <li>Foto copy Akta Kelahiran</li>
                    <li>Surat Keterangan Datang dari Luar Negeri yang diterbitkan oleh Instansi Pelaksana bagi WNI
                        yang datang dari luar negeri</li>
                </ul>
            </div>
            <div class="ktp">
                <h3>PERSYARATAN PENERBITAN KTP KARENA HILANG ATAU RUSAK BAGI PENDUDUK WNI DAN WNA</h3>
                <ul>
                    <li>Surat Keterangan Kehilangan dari Kepolisian atau KTP yang rusak</li>
                    <li>Foto copy KK</li>
                    <li>Paspor dan izin Tinggal Tetap bagi Orang Asing</li>
                </ul>
            </div>
            <div class="ktp">
                <h3>PERSYARATAN PENERBITAN KTP KARENA PINDAH DATANG BAGI WNI</h3>
                <ul>
                    <li>Surat Keterangan Pindah/Surat Keterangan Pindah Datang</li>
                    <li>Surat Keterangan Datang dari Luar Negeri bagi WNI yang datang dari Luar Negeri karena pindah</li>
                </ul>
            </div>
        </div>
        <div class="row">
            <div class="ktp">
                <h3>PERSYARATAN PENERBITAN KTP KARENA ADANYA PERUBAHAN DATA BAGI WNI</h3>
                <ul>
                    <li>KK Asli</li>
                    <li>KTP lama</li>
                    <li>Surat Keterangan/Bukti perubahan peristiwa kependudukan penting</li>
                </ul>
            </div>
            <div class="ktp">
                <h3>PERSYARATAN KTP BARU BAGI ORANG ASING YANG MEMILIKI IZIN TINGGAL TETAP</h3>
                <ul>
                    <li>Telah berusia 17 (tujuh belas) tahun atau sudah kawin atau pernah kawin</li>
                    <li>Foto copy KK</li>
                    <li>Foto copy Kutipan Akta Nikah/Akta Kawin bagi penduduk yang belum berusia 17 (tujuh belas) tahun</li>
                    <li>Kutipan Akta Kelahiran</li>
                    <li>Paspor dan Izin Tinggal Tetap</li>
                    <li>Surat Keterangan Catatan Kepolisian</li>
                </ul>
            </div>
            <div class="ktp">
                <h3>PERSYARATAN PENERBITAN KTP KARENA PERPANJANGAN BAGI WNA YANG MEMILIKI IZIN TINGGAL TETAP</h3>
                <ul>
                    <li>Foto copy KK</li>
                    <li>KTP lama</li>
                    <li>Foto copy Paspor</li>
                    <li>Foto copy izin Tinggal Tetap</li>
                    <li>Surat Keterangan Catatan Kepolisian bagi orang asing yang memiliki izin Tinggal Tetap</li>
                </ul>
            </div>
        </div>
        <div class="row">
            <div class="ktp">
                <h3>PERSYARATAN PENERBITAN KTP KARENA ADANYA PERUBAHAN DATA BAGI PENDUDUK WNA YANG MEMILIKI IZIN TINGGAL TETAP</h3>
                <ul>
                    <li>Foto copy KK</li>
                    <li>KTP lama</li>
                    <li>Surat Keterangan/Bukti perubahan peristiwa kependudukan dan peristiwa penting</li>
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