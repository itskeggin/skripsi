-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 20, 2018 at 06:54 PM
-- Server version: 5.6.21
-- PHP Version: 5.5.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `db_skripsi`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_galeri`
--

CREATE TABLE IF NOT EXISTS `tb_galeri` (
`id_galeri` int(11) NOT NULL,
  `id_survei` int(11) NOT NULL,
  `nama_galeri` varchar(255) NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `ket_galeri` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=43 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_galeri`
--

INSERT INTO `tb_galeri` (`id_galeri`, `id_survei`, `nama_galeri`, `gambar`, `ket_galeri`) VALUES
(37, 16, 'masjid', '2203masjidagung.jpg', ''),
(38, 17, 'riau fantasi', '3109riaufantasi.jpg', ''),
(39, 18, 'boombara', '3798boombara.jpg', ''),
(40, 19, 'danau buatan', '6208danaubuatan.jpg', ''),
(41, 20, 'museum', '3331museum.jpg', ''),
(42, 21, 'kebun binatang', '2905kebunbinatang.jpg', '');

-- --------------------------------------------------------

--
-- Table structure for table `tb_laporan`
--

CREATE TABLE IF NOT EXISTS `tb_laporan` (
`id_laporan` int(11) NOT NULL,
  `id_survei` int(11) NOT NULL,
  `peminjam` varchar(30) NOT NULL,
  `tgl_survei` date NOT NULL,
  `daerah_survei` varchar(20) NOT NULL,
  `nm_surveyor` varchar(30) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_laporan`
--

INSERT INTO `tb_laporan` (`id_laporan`, `id_survei`, `peminjam`, `tgl_survei`, `daerah_survei`, `nm_surveyor`) VALUES
(7, 4, 'Sulmaliki', '2018-05-14', 'pekanbaru', 'Kevin'),
(8, 5, 'Kevien', '2018-05-16', 'rohul', 'Fauzan'),
(9, 7, 'Frolingcia', '2018-05-12', 'kampar', 'Kevin'),
(10, 6, 'Hamudin', '2018-05-29', 'dumai', 'Kevin'),
(11, 8, 'Indra', '2018-05-13', 'kuantan singingi', 'Suanudin');

-- --------------------------------------------------------

--
-- Table structure for table `tb_rooting`
--

CREATE TABLE IF NOT EXISTS `tb_rooting` (
`id_rooting` int(11) NOT NULL,
  `nm_peminjam` varchar(30) NOT NULL,
  `alamat` varchar(30) NOT NULL,
  `lama_bekerja` varchar(10) NOT NULL,
  `kontak` varchar(12) NOT NULL,
  `nm_usaha` varchar(30) NOT NULL,
  `alamat_usaha` varchar(30) NOT NULL,
  `kredit` varchar(30) NOT NULL,
  `plafon` varchar(30) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_rooting`
--

INSERT INTO `tb_rooting` (`id_rooting`, `nm_peminjam`, `alamat`, `lama_bekerja`, `kontak`, `nm_usaha`, `alamat_usaha`, `kredit`, `plafon`) VALUES
(1, 'Sulmaliki', 'Jalan Sudirman', '50', '082309120932', 'Cafe Kitakora', 'Jalan Sembilang', '200.000.000', '230.000.000'),
(2, 'Kevien', 'Jalan Cempedak', '30', '082384558477', 'Havana Residence', 'Jalan Sudirman', '1.000.000.000', '1.200.000.000'),
(3, 'Hamudin', 'Jalan Pelita', '32', '0812803281', 'Rumah Makan Mewah', 'Jalan Marpoyan Damai', '500.000.000', '600.000.000'),
(4, 'Frolingcia', 'Jalan M.Yamin', '20', '081223334455', 'Butik Froling', 'Jalan Ahmad Yani', '700.000.000', '780.000.000'),
(5, 'Indra', 'Jalan Diponegoro', '40', '082388994412', 'Auto Car Expert', 'Jalan Sudirman', '2.000.000.000', '2.300.000.000');

-- --------------------------------------------------------

--
-- Table structure for table `tb_survei`
--

CREATE TABLE IF NOT EXISTS `tb_survei` (
`id_survei` int(11) NOT NULL,
  `peminjam` varchar(30) NOT NULL,
  `nm_usaha` varchar(30) NOT NULL,
  `jenis_usaha` varchar(30) NOT NULL,
  `p_usaha` varchar(30) NOT NULL,
  `keterangan` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_survei`
--

INSERT INTO `tb_survei` (`id_survei`, `peminjam`, `nm_usaha`, `jenis_usaha`, `p_usaha`, `keterangan`) VALUES
(4, 'Sulmaliki', 'Cafe Kitakora', 'Kuliner', '3.000.000', 'Test'),
(5, 'Kevien', 'Havana Residence', 'Furniture', '10.000.000', 'Test'),
(6, 'Hamudin', 'Rumah Makan Mewah', 'Kuliner', '4.000.000', 'Test'),
(7, 'Frolingcia', 'Butik Froling', 'Fashion', '2.000.000', 'Test'),
(8, 'Indra', 'Auto Car Expert', 'Automotive', '7.000.000', 'Test');

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE IF NOT EXISTS `tb_user` (
`id_user` int(11) NOT NULL,
  `username` varchar(10) NOT NULL,
  `password` varchar(32) NOT NULL,
  `nik` varchar(11) NOT NULL,
  `level` int(11) NOT NULL,
  `nama_lengkap` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`id_user`, `username`, `password`, `nik`, `level`, `nama_lengkap`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', '12223331', 1, 'Leli'),
(4, 'surveyor', '108b973b479d0fccbe63143f8904c180', '17072003', 2, 'Kevien');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_galeri`
--
ALTER TABLE `tb_galeri`
 ADD PRIMARY KEY (`id_galeri`);

--
-- Indexes for table `tb_laporan`
--
ALTER TABLE `tb_laporan`
 ADD PRIMARY KEY (`id_laporan`);

--
-- Indexes for table `tb_rooting`
--
ALTER TABLE `tb_rooting`
 ADD PRIMARY KEY (`id_rooting`);

--
-- Indexes for table `tb_survei`
--
ALTER TABLE `tb_survei`
 ADD PRIMARY KEY (`id_survei`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
 ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_galeri`
--
ALTER TABLE `tb_galeri`
MODIFY `id_galeri` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=43;
--
-- AUTO_INCREMENT for table `tb_laporan`
--
ALTER TABLE `tb_laporan`
MODIFY `id_laporan` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `tb_rooting`
--
ALTER TABLE `tb_rooting`
MODIFY `id_rooting` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `tb_survei`
--
ALTER TABLE `tb_survei`
MODIFY `id_survei` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `tb_user`
--
ALTER TABLE `tb_user`
MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
