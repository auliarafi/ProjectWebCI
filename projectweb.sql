-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 24, 2018 at 05:14 AM
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
-- Database: `projectweb`
--

-- --------------------------------------------------------

--
-- Table structure for table `kon_sempro`
--

CREATE TABLE `kon_sempro` (
  `id_kon_sempro` int(15) NOT NULL,
  `NIM` int(15) NOT NULL,
  `NIP` int(15) NOT NULL,
  `id_sempro` int(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `sempro`
--

CREATE TABLE `sempro` (
  `id_sempro` int(15) NOT NULL,
  `judulTA` varchar(40) NOT NULL,
  `proposal` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kon_sempro`
--
ALTER TABLE `kon_sempro`
  ADD PRIMARY KEY (`id_kon_sempro`);

--
-- Indexes for table `sempro`
--
ALTER TABLE `sempro`
  ADD PRIMARY KEY (`id_sempro`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `kon_sempro`
--
ALTER TABLE `kon_sempro`
  MODIFY `id_kon_sempro` int(15) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sempro`
--
ALTER TABLE `sempro`
  MODIFY `id_sempro` int(15) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
