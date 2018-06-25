-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 25, 2018 at 08:24 PM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sipeta`
--

-- --------------------------------------------------------

--
-- Table structure for table `daftar_sempro`
--

CREATE TABLE `daftar_sempro` (
  `id_sempro` int(15) NOT NULL,
  `NIM` varchar(10) NOT NULL,
  `Nama` varchar(22) NOT NULL,
  `Judul` varchar(40) NOT NULL,
  `File_Proposal` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `daftar_sempro`
--

INSERT INTO `daftar_sempro` (`id_sempro`, `NIM`, `Nama`, `Judul`, `File_Proposal`) VALUES
(11, 'E13161084', 'Muhammad Sony Fajar Ag', 'AR ikatan Kimia', 'Bab_32.pdf');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `daftar_sempro`
--
ALTER TABLE `daftar_sempro`
  ADD PRIMARY KEY (`id_sempro`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `daftar_sempro`
--
ALTER TABLE `daftar_sempro`
  MODIFY `id_sempro` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
