-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 22, 2018 at 02:25 PM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 7.2.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `database_web2`
--

-- --------------------------------------------------------

--
-- Table structure for table `dosen`
--

CREATE TABLE `dosen` (
  `NIP` varchar(25) NOT NULL,
  `NAMA` varchar(30) DEFAULT NULL,
  `DOSEN_PRODI` char(3) DEFAULT NULL,
  `KUOTA` char(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dosen`
--

INSERT INTO `dosen` (`NIP`, `NAMA`, `DOSEN_PRODI`, `KUOTA`) VALUES
('19710408 200112 1 003', 'Wahyu Kurnia Dewanto,S.Kom, MT', 'MIF', '10'),
('19830109 201703 1 001', 'Hermawan Arif S.T.,MT.', 'MIF', '10'),
('19890329 201503 1 001', 'Taufiq Rizaldi S,ST,MT', 'MIF', '10');

-- --------------------------------------------------------

--
-- Table structure for table `kelas`
--

CREATE TABLE `kelas` (
  `GOLONGAN` char(1) DEFAULT NULL,
  `PRODI` char(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kelas`
--

INSERT INTO `kelas` (`GOLONGAN`, `PRODI`) VALUES
('A', 'MIF'),
('B', 'MIF'),
('C', 'MIF'),
('D', 'MIF'),
('A', 'TKK'),
('B', 'TKK'),
('C', 'TKK'),
('D', 'TKK'),
('A', 'TIF'),
('B', 'TIF'),
('C', 'TIF'),
('D', 'TIF');

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `NIM` varchar(10) NOT NULL,
  `NAMA` varchar(30) DEFAULT NULL,
  `JUDUL_TA_FIX` varchar(50) DEFAULT NULL,
  `PRODI` char(3) DEFAULT NULL,
  `GOLONGAN` char(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mahasiswa`
--

INSERT INTO `mahasiswa` (`NIM`, `NAMA`, `JUDUL_TA_FIX`, `PRODI`, `GOLONGAN`) VALUES
('E31161241', 'Aulia Rafi Dika Pekasih', NULL, 'MIF', 'C');

-- --------------------------------------------------------

--
-- Table structure for table `membimbing`
--

CREATE TABLE `membimbing` (
  `NIP` varchar(25) NOT NULL,
  `NIM` varchar(10) NOT NULL,
  `NAMA_MAHASISWA` char(30) DEFAULT NULL,
  `NAMA_DOSEN` char(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `membimbing`
--

INSERT INTO `membimbing` (`NIP`, `NIM`, `NAMA_MAHASISWA`, `NAMA_DOSEN`) VALUES
('19710408 200112 1 003', 'E31161241', 'Aulia Rafi Dika Pekasih', 'Wahyu Kurnia Dewanto,S.Kom, MT');

-- --------------------------------------------------------

--
-- Table structure for table `penelitian`
--

CREATE TABLE `penelitian` (
  `JUDUL_PENELITIAN` varchar(50) NOT NULL,
  `NIP` varchar(25) DEFAULT NULL,
  `NAMA_DOSEN` varchar(30) DEFAULT NULL,
  `RINGKASAN` text,
  `FILE_BERKAS` char(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `penelitian`
--

INSERT INTO `penelitian` (`JUDUL_PENELITIAN`, `NIP`, `NAMA_DOSEN`, `RINGKASAN`, `FILE_BERKAS`) VALUES
('Pemodelan Berbasis 3D Politeknik Negeri Jember', '19710408 200112 1 003', 'Wahyu Kurnia Dewanto,S.Kom, MT', 'Aplikasi yang memodelkan POLIJE ke dalam virtual tour yang berbasis 3D dan berjalan pada aplikasi dekstop', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `ta_fix`
--

CREATE TABLE `ta_fix` (
  `NIM` varchar(10) NOT NULL,
  `NAMA` varchar(30) NOT NULL,
  `JUDUL_TA_FIX` varchar(50) NOT NULL,
  `DOSEN_PENGUSUL` varchar(30) DEFAULT NULL,
  `RINGKASAN` text,
  `DOSPEM` varchar(30) DEFAULT NULL,
  `JENIS` char(10) DEFAULT NULL,
  `REVIEW` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ta_fix`
--

INSERT INTO `ta_fix` (`NIM`, `NAMA`, `JUDUL_TA_FIX`, `DOSEN_PENGUSUL`, `RINGKASAN`, `DOSPEM`, `JENIS`, `REVIEW`) VALUES
('E31161241', 'Aulia Rafi Dika Pekasih', 'Pemodelan Berbasis 3D Politeknik Negeri Jember', 'Wahyu Kurnia Dewanto,S.Kom, MT', 'Aplikasi Pemodelan gedung berbasis 3D untuk Polteknik Negeri Jember berbasis dekstop', 'Wahyu Kurnia Dewanto,S.Kom, MT', 'Kelompok', '');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `USERNAME` varchar(15) NOT NULL,
  `PASSWORD` varchar(10) DEFAULT NULL,
  `HAK_AKSES` char(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `usulan_ta`
--

CREATE TABLE `usulan_ta` (
  `JUDUL_TA` varchar(50) NOT NULL,
  `NIM` varchar(10) DEFAULT NULL,
  `RINGKASAN` text,
  `DOSEN_PENGUSUL` varchar(30) DEFAULT NULL,
  `USULAN_DOSPEM` varchar(30) DEFAULT NULL,
  `JENIS` char(10) DEFAULT NULL,
  `REVIEW` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `usulan_ta`
--

INSERT INTO `usulan_ta` (`JUDUL_TA`, `NIM`, `RINGKASAN`, `DOSEN_PENGUSUL`, `USULAN_DOSPEM`, `JENIS`, `REVIEW`) VALUES
('Pemodelan Berbasis 3D Politeknik Negeri Jember', 'E31161241', 'Aplikasi Pemodelan gedung berbasis 3D untuk Polteknik Negeri Jember berbasis dekstop', 'Wahyu Kurnia Dewanto,S.Kom, MT', 'Wahyu Kurnia Dewanto,S.Kom, MT', 'Kelompok', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dosen`
--
ALTER TABLE `dosen`
  ADD PRIMARY KEY (`NIP`);

--
-- Indexes for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`NIM`),
  ADD KEY `FK_MENGAJUKAN` (`JUDUL_TA_FIX`);

--
-- Indexes for table `membimbing`
--
ALTER TABLE `membimbing`
  ADD PRIMARY KEY (`NIM`,`NIP`),
  ADD KEY `FK_MEMBIMBING2` (`NIP`);

--
-- Indexes for table `penelitian`
--
ALTER TABLE `penelitian`
  ADD PRIMARY KEY (`JUDUL_PENELITIAN`),
  ADD KEY `FK_MEMILIKI` (`NIP`);

--
-- Indexes for table `ta_fix`
--
ALTER TABLE `ta_fix`
  ADD PRIMARY KEY (`JUDUL_TA_FIX`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`USERNAME`);

--
-- Indexes for table `usulan_ta`
--
ALTER TABLE `usulan_ta`
  ADD PRIMARY KEY (`JUDUL_TA`),
  ADD KEY `FK_MENGUSULKAN` (`NIM`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD CONSTRAINT `FK_MENGAJUKAN` FOREIGN KEY (`JUDUL_TA_FIX`) REFERENCES `ta_fix` (`JUDUL_TA_FIX`);

--
-- Constraints for table `membimbing`
--
ALTER TABLE `membimbing`
  ADD CONSTRAINT `FK_MEMBIMBING` FOREIGN KEY (`NIM`) REFERENCES `mahasiswa` (`NIM`),
  ADD CONSTRAINT `FK_MEMBIMBING2` FOREIGN KEY (`NIP`) REFERENCES `dosen` (`NIP`);

--
-- Constraints for table `penelitian`
--
ALTER TABLE `penelitian`
  ADD CONSTRAINT `FK_MEMILIKI` FOREIGN KEY (`NIP`) REFERENCES `dosen` (`NIP`);

--
-- Constraints for table `usulan_ta`
--
ALTER TABLE `usulan_ta`
  ADD CONSTRAINT `FK_MENGUSULKAN` FOREIGN KEY (`NIM`) REFERENCES `mahasiswa` (`NIM`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
