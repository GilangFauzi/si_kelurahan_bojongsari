-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 01, 2022 at 10:55 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbsisteminformasidesa`
--

-- --------------------------------------------------------

--
-- Table structure for table `agama`
--

CREATE TABLE `agama` (
  `nomer` int(50) NOT NULL,
  `uraian` varchar(100) NOT NULL,
  `jumlah` varchar(50) NOT NULL,
  `tanggal` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `agama`
--

INSERT INTO `agama` (`nomer`, `uraian`, `jumlah`, `tanggal`) VALUES
(5, 'Islam', '10730', '2021-05-27'),
(6, 'Kristen Katolik', '873', '2021-05-27'),
(7, 'Kristen Protestan', '196', '2021-05-27'),
(8, 'Budha', '168', '2021-05-27'),
(9, 'Hindu', '19', '2021-05-27'),
(10, 'Konghucu', '59', '2021-06-07');

-- --------------------------------------------------------

--
-- Table structure for table `bagan`
--

CREATE TABLE `bagan` (
  `id` int(100) NOT NULL,
  `gambar` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bagan`
--

INSERT INTO `bagan` (`id`, `gambar`) VALUES
(1, '608102c843f5d.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `foto`
--

CREATE TABLE `foto` (
  `id` int(50) NOT NULL,
  `gambar` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `foto`
--

INSERT INTO `foto` (`id`, `gambar`) VALUES
(2, '6080dad6c9610.jpg'),
(3, '6080dae522002.jpg'),
(4, '6080daf713185.jpg'),
(5, '6080db190f6bb.jpg'),
(6, '6080dd5808aa3.jpg'),
(7, '6080dd5fba365.jpg'),
(8, '6080dd66d4099.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `galeri`
--

CREATE TABLE `galeri` (
  `id` int(100) NOT NULL,
  `gambar` varchar(100) NOT NULL,
  `keterangan` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `galeri`
--

INSERT INTO `galeri` (`id`, `gambar`, `keterangan`) VALUES
(9, '6077ae71c6bea.png', 'Itu adalah tugas kampus'),
(11, '6073c6fe92628.jpg', 'Itu Panda'),
(12, '6094b6fb760dd.jpg', 'Semester 1');

-- --------------------------------------------------------

--
-- Table structure for table `informasi`
--

CREATE TABLE `informasi` (
  `id` int(50) NOT NULL,
  `gambar` varchar(50) NOT NULL,
  `info` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `informasi`
--

INSERT INTO `informasi` (`id`, `gambar`, `info`) VALUES
(6, '60934c8ab7ab1.jpg', 'Poster cara mencegah penyebaran COVID-19'),
(9, '6094e48a7a0bc.jpg', 'Perawatan pasien COVID-19'),
(10, '6094e57b60ea7.jpg', 'Poster gejala COVID-19');

-- --------------------------------------------------------

--
-- Table structure for table `matapencaharian`
--

CREATE TABLE `matapencaharian` (
  `nomer` int(50) NOT NULL,
  `uraian` varchar(100) NOT NULL,
  `jumlah` varchar(50) NOT NULL,
  `tanggal` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `matapencaharian`
--

INSERT INTO `matapencaharian` (`nomer`, `uraian`, `jumlah`, `tanggal`) VALUES
(1, 'IT', '100', '2021-05-27'),
(2, 'PNS', '100', '2021-05-27'),
(3, 'Petani', '15', '2021-06-07');

-- --------------------------------------------------------

--
-- Table structure for table `pegawai`
--

CREATE TABLE `pegawai` (
  `nip` varchar(100) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `jabatan` varchar(100) NOT NULL,
  `gambar` varchar(100) NOT NULL,
  `fungsi` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pegawai`
--

INSERT INTO `pegawai` (`nip`, `nama`, `jabatan`, `gambar`, `fungsi`) VALUES
('111', 'ujang', 'Juragan', '60fcc0c63ddc3.jpeg', 'Dokumentasi'),
('12323', 'ujang', 'dd', '60fcf43e46b60.jpeg', 'Dokumentasi'),
('181011400312', 'Gilang Fauzi', 'Direktur Utama', '60c9a979760d9.png', 'IT'),
('181011400328', 'Gilang', 'Juragan', '60fcc0a4f13e9.jpeg', 'Dokumentasi'),
('23423', 'ujang', 'dd', '610a69102a06d.jpg', 'Dokumentasi'),
('23424', 'saffas', 'dd', '610a693019c82.jpg', 'Dokumentasi'),
('453', 'teeeew', 'Juragan', '60fcea7537f5f.jpeg', 'Dokumentasi');

-- --------------------------------------------------------

--
-- Table structure for table `penduduk`
--

CREATE TABLE `penduduk` (
  `rw` varchar(20) NOT NULL,
  `perempuan` varchar(50) NOT NULL,
  `lakilaki` varchar(50) NOT NULL,
  `tanggal` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `penduduk`
--

INSERT INTO `penduduk` (`rw`, `perempuan`, `lakilaki`, `tanggal`) VALUES
('0', '0', '2 WNA', NULL),
('01', '511', '478', '2021-06-17'),
('02', '558', '608', NULL),
('03', '677', '661', NULL),
('04', '326', '374', NULL),
('05', '538', '389', NULL),
('06', '395', '415', NULL),
('07', '504', '285', NULL),
('08', '497', '514', NULL),
('09', '480', '481', NULL),
('10', '474', '237', NULL),
('11', '275', '571', NULL),
('12', '335', '330', NULL),
('13', '244', '242', NULL),
('14', '321', '318', '2021-06-07');

-- --------------------------------------------------------

--
-- Table structure for table `saran`
--

CREATE TABLE `saran` (
  `nik` varchar(50) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `pesan` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `saran`
--

INSERT INTO `saran` (`nik`, `nama`, `alamat`, `email`, `pesan`) VALUES
('123', 'Ucup Bramasta', 'sa', 'rertsemangat', 'rertsemangat'),
('9898908908', 'ujang', 'Gunung Sindur', 'esportrak@gmail.com', 'Pak');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`) VALUES
(4, 'adminbojongsari', '$2y$10$ebp8Ap1.uk.3jYNtn3YPWOS/uw05aNlYhz9fUq.cri8COOsLstbzK'),
(5, 'servergilang', '$2y$10$9WSguD8TFXu7TW4FMDwDg.o2tKHzQlhbCfoGJIodZVpQCqGC55pN6'),
(6, 'gilang', '$2y$10$ZenCJl8T3e0bVk.V01Xx1eM6caD.PhNs6qitwL4JihW1GC73GZ4aO'),
(7, 'adm', '$2y$10$kEOu..JiZh0bT7d787zhaecIo8QBPWUgrYADoW8sLAGBYEbBGHvwu'),
(8, '11', '$2y$10$72BXXUYZ5rkwSwy6yc5YJ.ALFYepKs74RA8eBVYCZmriOCOY0o3.m'),
(9, 'gilangfauzi', '$2y$10$FQqYzFmNssOGVIv0/a2uputOs0S2nPaOz8D1wnbtPmb4MAGxdB9NC'),
(10, 'irgifahlevi', '$2y$10$ga.Brph3ijbuQxAwNmPbhurQnE5MwLvpFQTKebzZ4.sLApoxQTx9m'),
(11, 'bojongsari', '$2y$10$sW9Y4ft7Kk6FwuHDgyp9OO1zGfXmBWMezm8pmaNHZuf/4kUeg43L2');

-- --------------------------------------------------------

--
-- Table structure for table `visimisi`
--

CREATE TABLE `visimisi` (
  `id` int(100) NOT NULL,
  `visi` varchar(1000) NOT NULL,
  `misi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `visimisi`
--

INSERT INTO `visimisi` (`id`, `visi`, `misi`) VALUES
(34, ' â€œTerwujudnya Kelurahan Bojongsari yang Lebih Maju dan Sejahteraâ€\r\n', '\r\nMeningkatkan Kualitas Hidup Masyarakat. Mewujudkan Pemerintahan yang Baik (Good Governance), melalui Peningkatan Kualitas Pelayanan Kepada Masyarakat. Meningkatkan Pembangunan Berbasis Pada Partisipasi Masyarakat.Dalam Perencanaan, Pelaksanaan dan Pengawasan Pembangunan.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `agama`
--
ALTER TABLE `agama`
  ADD PRIMARY KEY (`nomer`);

--
-- Indexes for table `bagan`
--
ALTER TABLE `bagan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `foto`
--
ALTER TABLE `foto`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `galeri`
--
ALTER TABLE `galeri`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `informasi`
--
ALTER TABLE `informasi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `matapencaharian`
--
ALTER TABLE `matapencaharian`
  ADD PRIMARY KEY (`nomer`);

--
-- Indexes for table `pegawai`
--
ALTER TABLE `pegawai`
  ADD PRIMARY KEY (`nip`);

--
-- Indexes for table `penduduk`
--
ALTER TABLE `penduduk`
  ADD PRIMARY KEY (`rw`);

--
-- Indexes for table `saran`
--
ALTER TABLE `saran`
  ADD PRIMARY KEY (`nik`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `visimisi`
--
ALTER TABLE `visimisi`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `agama`
--
ALTER TABLE `agama`
  MODIFY `nomer` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `bagan`
--
ALTER TABLE `bagan`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `foto`
--
ALTER TABLE `foto`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `galeri`
--
ALTER TABLE `galeri`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `informasi`
--
ALTER TABLE `informasi`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `matapencaharian`
--
ALTER TABLE `matapencaharian`
  MODIFY `nomer` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `visimisi`
--
ALTER TABLE `visimisi`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
