-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 15, 2020 at 09:47 PM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 5.6.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `perpustakaan`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `ID_ADMIN` varchar(10) NOT NULL,
  `USERNAME` varchar(128) DEFAULT NULL,
  `PASSWORD` mediumtext,
  `LAST_LOGIN` varchar(40) DEFAULT NULL,
  `ROLE` varchar(15) DEFAULT NULL,
  `FULLNAME` varchar(128) DEFAULT NULL,
  `JENKEL` char(1) DEFAULT NULL,
  `NO_TELP` varchar(20) DEFAULT NULL,
  `ALAMAT` mediumtext,
  `PHOTO` mediumtext,
  `DTE_CREATED` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`ID_ADMIN`, `USERNAME`, `PASSWORD`, `LAST_LOGIN`, `ROLE`, `FULLNAME`, `JENKEL`, `NO_TELP`, `ALAMAT`, `PHOTO`, `DTE_CREATED`) VALUES
('AD001', 'admin', '21232f297a57a5a743894a0e4a801fc3', '15-01-2020 21:38:36', 'superadmin', 'Erzi Hutama', NULL, NULL, NULL, 'default.png', '2020-01-13'),
('AD002', 'randi', '9f8b4c019d3b7bc89e82a85fbd0d4008', '15-01-2020 21:38:16', 'admin', 'Randi Putra', NULL, NULL, NULL, 'default.png', '2020-01-13'),
('AD003', 'adam', 'd094c0a6c7ec4f01f75837ace20925fa', '16-07-2017 08:47:03', 'superadmin', 'Adam Jordy', 'L', '088788899', 'Jl semeru', 'default.png', '2020-01-13'),
('AD004', 'iqbal', '977dca586aea0eac2674a89793e252ec', '26-06-2017 18:12:38', 'admin', 'Riski Ananda W. P.', NULL, NULL, NULL, 'default.png', '2020-01-13');

-- --------------------------------------------------------

--
-- Table structure for table `anggota`
--

CREATE TABLE `anggota` (
  `ID_ANGGOTA` varchar(10) NOT NULL,
  `ID_ADMIN` varchar(10) DEFAULT NULL,
  `FULL_NAME` varchar(128) DEFAULT NULL,
  `TMP_LAHIR` varchar(90) DEFAULT NULL,
  `TGL_LAHIR` varchar(20) DEFAULT NULL,
  `ALAMAT` mediumtext,
  `GENDER` char(1) DEFAULT NULL,
  `TELP` varchar(20) DEFAULT NULL,
  `FOTO` mediumtext,
  `D_CREATED` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `anggota`
--

INSERT INTO `anggota` (`ID_ANGGOTA`, `ID_ADMIN`, `FULL_NAME`, `TMP_LAHIR`, `TGL_LAHIR`, `ALAMAT`, `GENDER`, `TELP`, `FOTO`, `D_CREATED`) VALUES
('AGT002', 'AD001', 'Galbie Elinour', 'Malang', '06/16/2017', 'Jl. Kawi no. 89, Malang Kota', 'P', '0897786788954', 'default.png', '2020-01-13'),
('AGT003', 'AD001', 'Alfan Cahyo Wicaksono', 'Malang', '10/13/1998', 'Jl. Silak Kesam 101', 'L', '087669887654', 'default.png', '2020-01-13'),
('AGT004', 'AD001', 'Sasna Salsabila Hapsari', 'Madiun', '03/08/1999', 'Perum. Aspol 443, Kota Madiun', 'P', '0818897546788', 'default.png', '2020-01-13'),
('AGT005', 'AD001', 'Riski Ananda Widiya P', 'Tulungagung', '02/19/2000', 'Perum. Grand Emerald ZU3, Tulungagung', 'P', '093889765643', 'default.png', '2020-01-13'),
('AGT006', 'AD001', 'Anggyanisa Mutia Putri', 'Madiun', '08/18/2000', 'Gg. Pattimura 89', 'P', '085389755644', 'default.png', '2020-01-13'),
('AGT007', 'AD001', 'Prasetya Ananta W. S.', 'Malang', '06/16/1999', 'Sulfat Indah 89', 'L', '08267599432', 'default.png', '2020-01-13');

-- --------------------------------------------------------

--
-- Table structure for table `buku`
--

CREATE TABLE `buku` (
  `ID_BUKU` varchar(10) NOT NULL,
  `ID_ADMIN` varchar(10) DEFAULT NULL,
  `TITLE` varchar(150) DEFAULT NULL,
  `AUTHOR` varchar(128) DEFAULT NULL,
  `PUBLISHER` varchar(128) DEFAULT NULL,
  `YEAR` char(4) DEFAULT NULL,
  `ISBN` varchar(20) DEFAULT NULL,
  `QTY` int(11) DEFAULT NULL,
  `KELUAR` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `buku`
--

INSERT INTO `buku` (`ID_BUKU`, `ID_ADMIN`, `TITLE`, `AUTHOR`, `PUBLISHER`, `YEAR`, `ISBN`, `QTY`, `KELUAR`) VALUES
('BKO004', 'AD003', 'Mikrotik Kung Fu : Kitab 1', 'Rendra Towidjojo', 'Jasakom', '2016', '9790071772686', 2, 2),
('BKO005', 'AD001', 'Windows 10 : Panduan Lengkap', 'Indra Susanto', 'Jasakom', '2013', '9790071772900', 4, 1),
('BKO006', 'AD001', 'Bisnis Online Revolution', 'Iwan Kenrianto', 'Gramedia', '2015', '6770071772686', 2, 1),
('BKO007', 'AD001', '3 Tools Facebook Graph Gratisan', 'Suryadin Laoddang', 'Dosen Jualan', '2015', '9790065772686', 1, 2),
('BKO008', 'AD001', 'Mengolah Database Excel', 'Sumonggo Surya', 'Andi Publisher', '2001', '9790371777373', 0, 2),
('BKO009', 'AD001', 'Mahir Corel Draw Dalam 4 Hari', 'Yuli Kristanto S', 'Izuka Komp', '2008', '2948576654918', 1, 2),
('BKO011', 'AD001', 'Teknik Profesional Photoshop CS3', 'Rahmat Widiyanto', 'Elex Media Computindo', '2009', '9890756488711', 3, 3),
('BKO013', 'AD001', 'Hacking Wireless Network', 'Suryatama Udin', 'Jasakom', '2014', '9776482361662', 6, 3),
('BKO015', 'AD001', 'Aplikasi Berbasis Android', 'Hyua Hendra La', 'Moklet Publisher', '2019', '9007588645321', 3, 1),
('BKO018', 'AD001', 'Buku Panduan ASUS', 'Herman Dzumavo', 'Samsara', '2008', '9545677381276', 3, 0);

-- --------------------------------------------------------

--
-- Table structure for table `detail_pinjam`
--

CREATE TABLE `detail_pinjam` (
  `ID_DIPINJAM` int(11) NOT NULL,
  `ID_PINJAM` varchar(10) DEFAULT NULL,
  `ID_BUKU` varchar(10) DEFAULT NULL,
  `TGL_KEMBALI` date DEFAULT NULL,
  `DENDA` int(11) DEFAULT NULL,
  `STATUS` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `detail_pinjam`
--

INSERT INTO `detail_pinjam` (`ID_DIPINJAM`, `ID_PINJAM`, `ID_BUKU`, `TGL_KEMBALI`, `DENDA`, `STATUS`) VALUES
(13, 'P170623001', 'BKO005', '2017-06-25', 0, 'Sudah Kembali'),
(14, 'P170623001', 'BKO008', NULL, 0, 'Belum Kembali'),
(15, 'P170623001', 'BKO013', NULL, 0, 'Belum Kembali'),
(16, 'P170623002', 'BKO008', NULL, 0, 'Belum Kembali'),
(17, 'P170624001', 'BKO013', '2017-07-09', 4000, 'Sudah Kembali'),
(18, 'P170624001', 'BKO007', NULL, 0, 'Belum Kembali'),
(19, 'P170624001', 'BKO011', NULL, 0, 'Belum Kembali'),
(23, 'P170624003', 'BKO011', NULL, 0, 'Belum Kembali'),
(24, 'P170624003', 'BKO004', NULL, 0, 'Belum Kembali'),
(25, 'P170624003', 'BKO015', NULL, 0, 'Belum Kembali'),
(27, 'P170624005', 'BKO013', NULL, 0, 'Belum Kembali'),
(28, 'P170624005', 'BKO006', NULL, 0, 'Belum Kembali'),
(29, 'P170624006', 'BKO011', '2017-06-25', 0, 'Sudah Kembali'),
(30, 'P170624006', 'BKO018', '2017-07-10', 4500, 'Sudah Kembali');

-- --------------------------------------------------------

--
-- Table structure for table `notif`
--

CREATE TABLE `notif` (
  `ID_NOTIF` int(11) NOT NULL,
  `ID_ADMIN` varchar(128) NOT NULL,
  `JUDUL` varchar(128) NOT NULL,
  `ISI` varchar(128) NOT NULL,
  `DT` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `notif`
--

INSERT INTO `notif` (`ID_NOTIF`, `ID_ADMIN`, `JUDUL`, `ISI`, `DT`) VALUES
(2, 'AD003', 'Fokus target', 'Kejar sesuai kemampuan, open book', '2017-07-03'),
(5, 'AD003', 'Hahha', 'hehee', '2017-07-03'),
(6, 'AD003', 'THR Turun', 'silahkan antri di ruang bendahara jam 12.00', '2017-07-09'),
(10, 'AD001', 'Hallo', 'test halo', '2017-07-13');

-- --------------------------------------------------------

--
-- Table structure for table `peminjaman`
--

CREATE TABLE `peminjaman` (
  `ID_PINJAM` varchar(10) NOT NULL,
  `ID_ANGGOTA` varchar(10) DEFAULT NULL,
  `ID_ADMIN` varchar(10) DEFAULT NULL,
  `TGL_PINJAM` date DEFAULT NULL,
  `JML_BUKU` int(11) NOT NULL,
  `STATS` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `peminjaman`
--

INSERT INTO `peminjaman` (`ID_PINJAM`, `ID_ANGGOTA`, `ID_ADMIN`, `TGL_PINJAM`, `JML_BUKU`, `STATS`) VALUES
('P170623001', 'AGT002', 'AD004', '2017-06-23', 3, 'Belum Kembali'),
('P170623002', 'AGT003', 'AD004', '2017-06-23', 1, 'Belum Kembali'),
('P170624001', 'AGT007', 'AD004', '2017-06-24', 3, 'Belum Kembali'),
('P170624003', 'AGT004', 'AD004', '2017-06-24', 3, 'Belum Kembali'),
('P170624005', 'AGT007', 'AD004', '2017-06-24', 2, 'Belum Kembali'),
('P170624006', 'AGT005', 'AD004', '2017-06-24', 2, 'Sudah Kembali');

-- --------------------------------------------------------

--
-- Table structure for table `perpus`
--

CREATE TABLE `perpus` (
  `ID_PERPUS` int(11) NOT NULL,
  `NAMA_P` varchar(128) DEFAULT NULL,
  `ALAMAT_P` mediumtext,
  `ABOUT` mediumtext
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`ID_ADMIN`),
  ADD UNIQUE KEY `ADMIN_PK` (`ID_ADMIN`);

--
-- Indexes for table `anggota`
--
ALTER TABLE `anggota`
  ADD PRIMARY KEY (`ID_ANGGOTA`),
  ADD UNIQUE KEY `ANGGOTA_PK` (`ID_ANGGOTA`),
  ADD KEY `MAKE_FK` (`ID_ADMIN`);

--
-- Indexes for table `buku`
--
ALTER TABLE `buku`
  ADD PRIMARY KEY (`ID_BUKU`),
  ADD UNIQUE KEY `BUKU_PK` (`ID_BUKU`),
  ADD KEY `CREATE_FK` (`ID_ADMIN`);

--
-- Indexes for table `detail_pinjam`
--
ALTER TABLE `detail_pinjam`
  ADD PRIMARY KEY (`ID_DIPINJAM`),
  ADD UNIQUE KEY `DETAIL_PINJAM_PK` (`ID_DIPINJAM`),
  ADD KEY `MEMILIKI_FK` (`ID_PINJAM`),
  ADD KEY `MENGAMBIL_FK` (`ID_BUKU`);

--
-- Indexes for table `notif`
--
ALTER TABLE `notif`
  ADD PRIMARY KEY (`ID_NOTIF`),
  ADD KEY `FK_NOTIF_MEMBUAT_ADMIN` (`ID_ADMIN`);

--
-- Indexes for table `peminjaman`
--
ALTER TABLE `peminjaman`
  ADD PRIMARY KEY (`ID_PINJAM`),
  ADD UNIQUE KEY `PEMINJAMAN_PK` (`ID_PINJAM`),
  ADD KEY `MELAKUKAN_FK` (`ID_ANGGOTA`),
  ADD KEY `MELAYANI_FK` (`ID_ADMIN`);

--
-- Indexes for table `perpus`
--
ALTER TABLE `perpus`
  ADD PRIMARY KEY (`ID_PERPUS`),
  ADD UNIQUE KEY `PERPUS_PK` (`ID_PERPUS`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `detail_pinjam`
--
ALTER TABLE `detail_pinjam`
  MODIFY `ID_DIPINJAM` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT for table `notif`
--
ALTER TABLE `notif`
  MODIFY `ID_NOTIF` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `perpus`
--
ALTER TABLE `perpus`
  MODIFY `ID_PERPUS` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `anggota`
--
ALTER TABLE `anggota`
  ADD CONSTRAINT `FK_ANGGOTA_MAKE_ADMIN` FOREIGN KEY (`ID_ADMIN`) REFERENCES `admin` (`ID_ADMIN`);

--
-- Constraints for table `buku`
--
ALTER TABLE `buku`
  ADD CONSTRAINT `FK_BUKU_CREATE_ADMIN` FOREIGN KEY (`ID_ADMIN`) REFERENCES `admin` (`ID_ADMIN`);

--
-- Constraints for table `detail_pinjam`
--
ALTER TABLE `detail_pinjam`
  ADD CONSTRAINT `FK_DETAIL_P_MEMILIKI_PEMINJAM` FOREIGN KEY (`ID_PINJAM`) REFERENCES `peminjaman` (`ID_PINJAM`),
  ADD CONSTRAINT `FK_DETAIL_P_MENGAMBIL_BUKU` FOREIGN KEY (`ID_BUKU`) REFERENCES `buku` (`ID_BUKU`);

--
-- Constraints for table `notif`
--
ALTER TABLE `notif`
  ADD CONSTRAINT `FK_NOTIF_MEMBUAT_ADMIN` FOREIGN KEY (`ID_ADMIN`) REFERENCES `admin` (`ID_ADMIN`);

--
-- Constraints for table `peminjaman`
--
ALTER TABLE `peminjaman`
  ADD CONSTRAINT `FK_PEMINJAM_MELAKUKAN_ANGGOTA` FOREIGN KEY (`ID_ANGGOTA`) REFERENCES `anggota` (`ID_ANGGOTA`),
  ADD CONSTRAINT `FK_PEMINJAM_MELAYANI_ADMIN` FOREIGN KEY (`ID_ADMIN`) REFERENCES `admin` (`ID_ADMIN`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
