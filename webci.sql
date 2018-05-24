-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 24 Mei 2018 pada 04.38
-- Versi Server: 5.6.20
-- PHP Version: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `webci`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_dosen`
--

CREATE TABLE IF NOT EXISTS `data_dosen` (
  `id_dosen` int(11) NOT NULL,
  `nama_dosen` varchar(75) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `data_dosen`
--

INSERT INTO `data_dosen` (`id_dosen`, `nama_dosen`) VALUES
(1, 'Adi Heru Utomo, S.Kom, M.Kom'),
(2, 'Nanik Anita M., S.ST, MT'),
(3, 'Didit Rahmat hartadi, S.Kom, MT'),
(4, 'Dwi Putro Sarwo S S.Kom, M.Kom'),
(5, 'Hendra Yufit Riskiawan, S.Kom, M.Cs'),
(6, 'Ika Widiastuti, S.ST, MT'),
(7, 'Syamsul Arifin , S.Kom., M.Cs.'),
(8, 'Wahyu Kurnia Dewanto,S.Kom, MT'),
(9, 'Taufiq Rizaldi S,ST, MT'),
(10, 'Husin, S.Kom., M.MT.'),
(11, 'Hermawan Arif S.T.,MT.'),
(12, 'Faisal Lutfi S.Kom.,M.Kom.'),
(13, 'Agus Hariyanto ST, M.Kom'),
(14, 'Aji Seto Arfianto, S.ST, MT'),
(15, 'Beni Widiawan , S.ST, MT'),
(16, 'Denny Wijanarko, ST,MT'),
(17, 'Hariyono Rakhmad , S.Pd, M.Kom'),
(18, 'Nurul Zainal Fanani, S.ST, MT'),
(19, 'Surateno, S.Kom,M.Kom'),
(20, 'Bekti Maryuni S., S.Pd, M.Kom'),
(21, 'Fendik Eko Purnomo, S.Pd ,MT'),
(22, 'Ery Setiawan Julev atmaji,S.Kom,M.Cs'),
(23, 'Trismayanti Dwi P ,S.Kom, M,Cs'),
(24, 'Denny Trias Utomo, S,Si, MT'),
(25, 'Yogiswara ST ,MT'),
(26, 'Syamsiar Kautsar S.ST., MT.'),
(27, 'Agus Purwadi ST.,MT.'),
(28, 'Moh. Munih Dian W, S.Kom,MT'),
(29, 'I Putu Dody Lesmana, ST,MT'),
(30, 'Elly Antika, ST, M.Kom'),
(31, 'Nugroho Setyo Wibowo, ST,MT'),
(32, 'Prawidya Destarianto, S.Kom ,MT'),
(33, 'Ratih Ayuninghemi S.ST, M.Kom'),
(34, 'Khafidurohman A., S.Pd., M.Eng.'),
(35, 'Bety Etikasari, S.Pd., M.Pd.'),
(36, 'Zilvanhisna Emka Fitri, ST., MT.'),
(37, 'Victor Phoa, ST.,MCs.');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tabel_ta`
--

CREATE TABLE IF NOT EXISTS `tabel_ta` (
`id_ta` int(11) NOT NULL,
  `nim` varchar(15) DEFAULT NULL,
  `nama` varchar(45) DEFAULT NULL,
  `judul_ta` varchar(100) DEFAULT NULL,
  `ringkasan` longtext,
  `usulan_dosen_pembimbing` varchar(75) DEFAULT NULL,
  `nama_dosen_pengusul_ta` varchar(75) DEFAULT NULL,
  `jenis_ta` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `ta_fix`
--

CREATE TABLE IF NOT EXISTS `ta_fix` (
  `NIM` varchar(10) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `judul` varchar(125) NOT NULL,
  `dospem_fix` varchar(30) NOT NULL,
  `ringkasan` text NOT NULL,
  `dosen_pengusul` varchar(30) NOT NULL,
  `golongan` varchar(2) NOT NULL,
  `hasil_review` text NOT NULL,
  `prodi` varchar(5) NOT NULL,
  `pembagian_tugas` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbluser`
--

CREATE TABLE IF NOT EXISTS `tbluser` (
`id_user` int(11) NOT NULL,
  `username` varchar(35) NOT NULL,
  `password` varchar(15) NOT NULL,
  `level` enum('koordinator','reviewer','dosen','mahasiswa') NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data untuk tabel `tbluser`
--

INSERT INTO `tbluser` (`id_user`, `username`, `password`, `level`) VALUES
(2, 'Taufiq Rizaldi', 'taufiq', 'koordinator'),
(3, 'Samsul Arifin', 'samsul', 'reviewer'),
(4, 'Wahyu Kurnia Dewanto', 'wahyu', 'dosen'),
(5, 'Aulia Rafi Dika Pekasih', 'rafi', 'mahasiswa');

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
-- Indexes for table `ta_fix`
--
ALTER TABLE `ta_fix`
 ADD PRIMARY KEY (`NIM`);

--
-- Indexes for table `tbluser`
--
ALTER TABLE `tbluser`
 ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tabel_ta`
--
ALTER TABLE `tabel_ta`
MODIFY `id_ta` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbluser`
--
ALTER TABLE `tbluser`
MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
