-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 24, 2018 at 05:44 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `projectweb`
--

-- --------------------------------------------------------

--
-- Table structure for table `data_dosen`
--

CREATE TABLE `data_dosen` (
  `id_dosen` int(11) NOT NULL,
  `nip` varchar(25) NOT NULL,
  `nama_dosen` varchar(75) DEFAULT NULL,
  `prodi` char(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_dosen`
--

INSERT INTO `data_dosen` (`id_dosen`, `nip`, `nama_dosen`, `prodi`) VALUES
(1, '19711115 199802 1 001', 'Adi Heru Utomo, S.Kom, M.Kom', 'MIF'),
(2, '19860609 200812 2 004', 'Nanik Anita M., S.ST, MT', 'MIF'),
(3, '19770929 200501 1 003', 'Didit Rahmat hartadi, S.Kom, MT', 'MIF'),
(4, '19800517 200812 1 002', 'Dwi Putro Sarwo S S.Kom, M.Kom', 'MIF'),
(5, '19830203 200604 1 003', 'Hendra Yufit Riskiawan, S.Kom, M.Cs', 'MIF'),
(6, '197808119 200502 2 001', 'Ika Widiastuti, S.ST, MT', 'MIF'),
(7, '19810615 200604 1 002', 'Syamsul Arifin , S.Kom., M.Cs.', 'MIF'),
(8, '19710408 200112 1 003', 'Wahyu Kurnia Dewanto,S.Kom, MT', 'MIF'),
(9, '19890329 201503 1 001', 'Taufiq Rizaldi S,ST, MT', 'MIF'),
(10, '19880702 201610 1 001', 'Husin, S.Kom., M.MT.', 'MIF'),
(11, '19830109 201803 1 001', 'Hermawan Arif S.T.,MT.', 'MIF'),
(12, '19910429 201710 1 001', 'Faisal Lutfi S.Kom.,M.Kom.', 'MIF'),
(13, '19780817 200312 1 005', 'Agus Hariyanto ST, M.Kom', 'TKK'),
(14, '19851128 200812 1 002', 'Aji Seto Arfianto, S.ST, MT', 'TIF'),
(15, '19780816 200501 1 002', 'Beni Widiawan , S.ST, MT', 'TKK'),
(16, '19780908 200501 1 001', 'Denny Wijanarko, ST,MT', 'TKK'),
(17, '19701128 200312 1 001', 'Hariyono Rakhmad , S.Pd, M.Kom', 'TKK'),
(18, '19810115 200501 1 001', 'Nurul Zainal Fanani, S.ST, MT', 'TKK'),
(19, '19790703 200312 1 001', 'Surateno, S.Kom,M.Kom', 'TKK'),
(20, '19840625 201504 1 004', 'Bekti Maryuni S., S.Pd, M.Kom', 'TKK'),
(21, '19860319 201403 1 001', 'Fendik Eko Purnomo, S.Pd ,MT', 'TKK'),
(22, '19890710 201509 1 001', 'Ery Setiawan Julev atmaji,S.Kom,M.Cs', 'TKK'),
(23, '19900227 201503 2 001', 'Trismayanti Dwi P ,S.Kom, M,Cs', 'TKK'),
(24, '19711009 200312 1 001', 'Denny Trias Utomo, S,Si, MT', 'TKK'),
(25, '19700929 200312 1 001', 'Yogiswara ST ,MT', 'TKK'),
(26, '19910315 201703 1 001', 'Syamsiar Kautsar S.ST., MT.', 'TKK'),
(27, '19730831 200801 1 003', 'Agus Purwadi ST.,MT.', 'TKK'),
(28, '19700831 199803 1 001', 'Moh. Munih Dian W, S.Kom,MT', 'TIF'),
(29, '19790921 200501 1 001', 'I Putu Dody Lesmana, ST,MT', 'TIF'),
(30, '19781011 200501 2 002', 'Elly Antika, ST, M.Kom', 'TIF'),
(31, '19740519 200312 1 002', 'Nugroho Setyo Wibowo, ST,MT', 'TIF'),
(32, '19801212 200501 1 001', 'Prawidya Destarianto , S.Kom ,MT', 'TIF'),
(33, '19860802 201504 2 002', 'Ratih Ayuninghemi S.ST, M.Kom', 'TIF'),
(34, '19911211 201610 1 001', 'Khafidurohman A., S.Pd., M.Eng.', 'TIF'),
(35, '19920528 201610 2 001', 'Bety Etikasari, S.Pd., M.Pd.', 'TIF'),
(36, '19920302 201803 2 001', 'Zilvanhisna Emka Fitri ST., MT.', 'TIF'),
(37, '19851031 201803 1 001', 'Victor Phoa ST.,MCs.', 'TKK');

-- --------------------------------------------------------

--
-- Table structure for table `tabel_ta`
--

CREATE TABLE `tabel_ta` (
  `id_ta` int(11) NOT NULL,
  `nim` varchar(15) DEFAULT NULL,
  `nama` varchar(45) DEFAULT NULL,
  `judul_ta` varchar(100) DEFAULT NULL,
  `ringkasan` longtext,
  `usulan_dosen_pembimbing` varchar(75) DEFAULT NULL,
  `nama_dosen_pengusul_ta` varchar(75) DEFAULT NULL,
  `jenis_ta` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbluser`
--

CREATE TABLE `tbluser` (
  `id_user` int(11) NOT NULL,
  `username` varchar(35) NOT NULL,
  `password` varchar(15) NOT NULL,
  `level` enum('koordinator','reviewer','dosen','mahasiswa') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbluser`
--

INSERT INTO `tbluser` (`id_user`, `username`, `password`, `level`) VALUES
(2, 'Taufiq Rizaldi', 'taufiq', 'koordinator'),
(3, 'Samsul Arifin', 'samsul', 'reviewer'),
(4, 'Wahyu Kurnia Dewanto', 'wahyu', 'dosen'),
(5, 'Aulia Rafi Dika Pekasih', 'rafi', 'mahasiswa');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_dospem`
--

CREATE TABLE `tbl_dospem` (
  `NIP` int(10) NOT NULL,
  `nama_dosen` varchar(30) NOT NULL,
  `anak_bimbingan` varchar(30) NOT NULL,
  `judul` varchar(50) NOT NULL,
  `prodi` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data_dosen`
--
ALTER TABLE `data_dosen`
  ADD PRIMARY KEY (`id_dosen`);

--
-- Indexes for table `tabel_ta`
--
ALTER TABLE `tabel_ta`
  ADD PRIMARY KEY (`id_ta`);

--
-- Indexes for table `tbluser`
--
ALTER TABLE `tbluser`
  ADD PRIMARY KEY (`id_user`);

--
-- Indexes for table `tbl_dospem`
--
ALTER TABLE `tbl_dospem`
  ADD PRIMARY KEY (`NIP`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `data_dosen`
--
ALTER TABLE `data_dosen`
  MODIFY `id_dosen` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;
--
-- AUTO_INCREMENT for table `tabel_ta`
--
ALTER TABLE `tabel_ta`
  MODIFY `id_ta` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbluser`
--
ALTER TABLE `tbluser`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
