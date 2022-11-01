<html>

<head>
    <title>Sistem Informasi Kelurahan Bojongsari</title>
    <link rel="stylesheet" type="text/css" href="css/kkstyle.css">
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
            <li><a href="KK.php" class="aktif">KARTU KELUARGA</a>
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
    <h1>KARTU KELUARGA</h1>
        <div class="row">
            <div class="kk">
                <h3>PERSYARATAN PENERBITAN KK BARU BAGI PENDUDUK WNI</h3>
                <ul>
                    <li>Foto copy atau menunjukkan Kutipan Akta Nikah/Kutipan Akta Perkawinan</li>
                    <li>Surat Keterangan Pindah/Surat Keterangan Pindah Datang bagi penduduk yang pindah dalam wilayah Negara Kesatuan Republik Indonesia</li>
                    <li>Surat Keterangan Datang dari Luar Negeri yang diterbitkan olej Instansi Pelaksana bagi Warga Negara Indonesia yang datang dari
                        luar negeri karena pindah</li>
                </ul>
            </div>
            <div class="kk">
                <h3>PERSYARATAN PERUBAHAN KK KARENA PENAMBAHAN ANGGOTA KELUARGA DALAM KK BAGI PENDUDUK YANG MENGALAMI KELAHIRAN</h3>
                <ul>
                    <li>KK lama</li>
                    <li>Kutipan Akta Kelahiran atau Surat Keterangan Kelahiran dari RS/Klinik/Bidan</li>
                </ul>
            </div>
            <div class="kk">
                <h3>PERSYARATAN PERUBAHAN KK KARENA PENAMBAHAN ANGGOTA KELUARGA UNTUK MENUMPANG KEDALAM KK BAGI WNI</h3>
                <ul>
                    <li>KK lama</li>
                    <li>KK yang akan ditumpangi</li>
                    <li>Surat Keterangan Pindah Datang dari luar negeri bagi WNI</li>
                </ul>
            </div>
        </div>
        <div class="row">
            <div class="kk">
                <h3>PERSYARATAN PERUBAHAN KK KARENA PENGURANGAN ANGGOTA KELUARGA DALAM KK BAGI PENDUDUK WNI</h3>
                <ul>
                    <li>KK lama</li>
                    <li>Surat Keterangan Kematian</li>
                    <li>Surat Keterangan Pindah/Surat Keterangan Pindah Datang bagi penduduk yang pindah dalam wilayah NKRI</li>
                </ul>
            </div>
            <div class="kk">
                <h3>PERSYARATAN PENERBITAN KK KARENA HILANG ATAU RUSAK BAGI PENDUDUK WNI</h3>
                <ul>
                    <li>Surat Keterangan Kehilangan dari Kepala Desa/Lurah</li>
                    <li>KK yang rusak</li>
                    <li>Foto copy atau menunjukkan Dokumen Kependudukan dari salah satu anggota</li>
                </ul>
            </div>
            <div class="kk">
                <h3>PERSYARATAN PENERBITAN KK KARENA HILANG ATAU RUSAK BAGI PENDUDUK WNA</h3>
                <ul>
                    <li>Surat Keterangan Kehilangan dari Kepala Desa/Lurah</li>
                    <li>KK yang rusak</li>
                    <li>Foto copy atau menunjukkan Dokumen Kependudukan dari salah satu anggota</li>
                    <li>Dokumen keimigrasian bagi Orang Asing</li>
                </ul>
            </div>
        </div>
        <div class="row">
            <div class="kk">
                <h3>PERSYARATAN PERUBAHAN KK KARENA PANAMBAHAN ANGGOTA KELUARGA BAGI WNA YANG MEMILIKI IZIN TINGGAL TETAP UNTUK MENUMPANG KEDALAM KK WNI ATAU
                    KK WNA</h3>
                <ul>
                    <li>KK lama atau KK yang ditumpangi</li>
                    <li>Paspor</li>
                    <li>Izin Tinggal tetap</li>
                    <li>Surat Keterangan Catatan Kepolisian bagi Orang Asing</li>
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