-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 25, 2016 at 05:46 AM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `proyek1`
--

-- --------------------------------------------------------

--
-- Table structure for table `bab_1`
--

CREATE TABLE IF NOT EXISTS `bab_1` (
`id_bab` int(10) NOT NULL,
  `latar_belakang` varchar(200) DEFAULT NULL,
  `identifikasi_masalah` varchar(200) DEFAULT NULL,
  `tujuan` varchar(200) DEFAULT NULL,
  `ruang_lingkup` varchar(200) DEFAULT NULL,
  `sistematika_penulisan` varchar(200) DEFAULT NULL,
  `npm` int(11) DEFAULT NULL,
  `nik` int(11) DEFAULT NULL,
  `landasan_teori` varchar(100) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bab_1`
--

INSERT INTO `bab_1` (`id_bab`, `latar_belakang`, `identifikasi_masalah`, `tujuan`, `ruang_lingkup`, `sistematika_penulisan`, `npm`, `nik`, `landasan_teori`) VALUES
(4, 'aaa', 'ddd', '0', 'sssss', 'aaaa', 1134024, 0, ' ssssss');

-- --------------------------------------------------------

--
-- Table structure for table `bimbingan`
--

CREATE TABLE IF NOT EXISTS `bimbingan` (
`id_bimbingan` int(10) NOT NULL,
  `d_bimbingan` date NOT NULL,
  `uraian` varchar(200) NOT NULL,
  `ttd` varchar(10) NOT NULL,
  `npm` int(11) DEFAULT NULL,
  `nik` int(11) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bimbingan`
--

INSERT INTO `bimbingan` (`id_bimbingan`, `d_bimbingan`, `uraian`, `ttd`, `npm`, `nik`) VALUES
(3, '2016-01-10', 'jakakaaaaaa', 'validate', 1134063, 312112),
(4, '2016-01-11', 'bimbingan bab II fix', 'validate', 1134063, 312112),
(5, '2016-02-22', 'Revisi Proposal', 'validate', 1134034, 21388110),
(6, '2016-02-24', 'bab 2', 'validate', 1134034, 21388110),
(7, '2016-02-24', 'Bab 3 Revisi', 'validate', 1134034, 21388110);

-- --------------------------------------------------------

--
-- Table structure for table `dosen_pembimbing`
--

CREATE TABLE IF NOT EXISTS `dosen_pembimbing` (
  `nik` int(11) NOT NULL,
  `nama` varchar(25) DEFAULT NULL,
  `no_hp` varchar(13) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dosen_pembimbing`
--

INSERT INTO `dosen_pembimbing` (`nik`, `nama`, `no_hp`) VALUES
(312112, 'Rolly Maulana', '08881911'),
(10378069, 'Roni Habibi, S.Kom., M.T', NULL),
(10579081, 'Woro Isti Rahayu, ST., MT', NULL),
(11380159, 'M.Nurkamal, ST., MT.', NULL),
(21388097, 'Roni A, ST., M.Kom', NULL),
(21388109, 'M. Harry K Saputra, ST.', NULL),
(21388110, 'Syafrial Fahrie Pane, ST.', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `draf_laporan1`
--

CREATE TABLE IF NOT EXISTS `draf_laporan1` (
`id_draf` int(11) NOT NULL,
  `judul` varchar(30) NOT NULL,
  `D_pengumpulan` date NOT NULL,
  `draf` varchar(30) NOT NULL,
  `npm` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `draf_laporan1`
--

INSERT INTO `draf_laporan1` (`id_draf`, `judul`, `D_pengumpulan`, `draf`, `npm`) VALUES
(1, 'nnnnnn', '2016-01-30', 'Laporan1454114943.pdf', 1134063),
(2, 'mmmmm', '2016-01-30', 'Laporan1454115667.pdf', 1134063),
(3, 'mmmmmm', '2016-01-30', 'Laporan1454115689.pdf', 1134063),
(4, 'mmmmmm', '2016-01-30', 'Laporan1454115739.pdf', 1134063),
(5, 'jjajajajaj', '2016-01-30', 'Laporan1454119733.pdf', 1134063),
(6, 'Laporan', '2016-02-08', 'Laporan1454926783.pdf', 1134063),
(7, 'Laporan', '2016-02-22', 'Laporan1456132520.pdf', 1134024),
(8, 'laporan', '2016-02-24', 'Laporan1456329810.pdf', 1134034);

-- --------------------------------------------------------

--
-- Table structure for table `history`
--

CREATE TABLE IF NOT EXISTS `history` (
`id_history` int(10) NOT NULL,
  `judul` varchar(50) DEFAULT NULL,
  `D_update` date DEFAULT NULL,
  `D_acc` date DEFAULT NULL,
  `D_proposal` date DEFAULT NULL,
  `file` varchar(30) DEFAULT NULL,
  `type_file` varchar(15) DEFAULT NULL,
  `ket` varchar(10) DEFAULT NULL,
  `nik` int(11) DEFAULT NULL,
  `npm` int(11) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=133 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `history`
--

INSERT INTO `history` (`id_history`, `judul`, `D_update`, `D_acc`, `D_proposal`, `file`, `type_file`, `ket`, `nik`, `npm`) VALUES
(10, 'Proposal1', '2016-02-03', '2016-02-03', '0000-00-00', 'Proposal_1454512165.pdf', 'application/pdf', 'proposal1', NULL, 1134063),
(11, 'Proposal1', '2016-02-03', '2016-02-03', '0000-00-00', 'Proposal_1454512165.pdf', 'Proposal_145451', 'diterima', 312112, 1134063),
(12, 'Coba1', '2016-02-05', '2016-02-03', '2016-02-03', 'Proposal_1454454262.pdf', 'Proposal_145445', 'Diterima', 10579081, 1134034),
(13, 'Proposal1', '2016-02-05', '2016-02-03', '0000-00-00', 'Proposal_1454512165.pdf', 'Proposal_145451', 'Revisi', 21388109, 1134063),
(14, 'Proposal1', '2016-02-05', '2016-02-03', '2016-02-05', 'Proposal_1454512165.pdf', 'Proposal_145451', 'Revisi', 11380159, 1134063),
(15, 'Proposal1', '2016-02-08', '2016-02-03', '2016-02-05', 'Proposal_1454512165.pdf', 'Proposal_145451', 'Diterima', 11380159, 1134063),
(16, 'Proposal1', '2016-02-08', '2016-02-03', '2016-02-05', 'Proposal_1454512165.pdf', 'Proposal_145451', 'Diterima', 21388110, 1134063),
(17, 'Test', '2016-02-15', '2016-02-15', '2016-02-15', 'Proposal_1455556090.pdf', 'application/pdf', 'proposal2', NULL, 1134034),
(18, 'Jaka', '2016-02-17', '2016-02-17', '0000-00-00', 'Proposal_1455723373.pdf', 'application/pdf', 'proposal1', NULL, 1134063),
(19, 'Jaka', '2016-02-17', '2016-02-17', '0000-00-00', 'Proposal_1455723373.pdf', 'Proposal_145572', 'Revisi', 312112, 1134063),
(20, 'Jaka', '2016-02-17', '2016-02-17', '0000-00-00', 'Proposal_1455725255.pdf', 'application/pdf', 'proposal1', NULL, 1134063),
(21, 'Lugas', '2016-02-17', '2016-02-17', '0000-00-00', 'Proposal_1455725291.pdf', 'application/pdf', 'proposal1', NULL, 1134034),
(22, 'Lugas', '2016-02-17', '2016-02-17', '0000-00-00', 'Proposal_1455725291.pdf', 'Proposal_145572', 'Revisi', 312112, 1134034),
(23, 'jaka', '2016-02-17', '2016-02-17', '0000-00-00', 'Proposal_1455725835.pdf', 'application/pdf', 'proposal1', NULL, 1134063),
(24, 'lugas 1', '2016-02-17', '2016-02-17', '2016-02-17', 'Proposal_1455725873.pdf', 'application/pdf', 'proposal2', NULL, 1134034),
(25, 'JAKA', '2016-02-17', '2016-02-17', '0000-00-00', 'Proposal_1455726047.pdf', 'application/pdf', 'proposal1', NULL, 1134063),
(26, 'luvgasss', '2016-02-17', '2016-02-17', '0000-00-00', 'Proposal_1455726244.pdf', 'application/pdf', 'proposal2', NULL, 1134034),
(27, 'jeeek', '2016-02-17', '2016-02-17', '0000-00-00', 'Proposal_1455726428.pdf', 'application/pdf', 'proposal1', NULL, 1134063),
(28, 'tolak', '2016-02-17', '2016-02-17', '2016-02-17', 'Proposal_1455726675.pdf', 'application/pdf', 'proposal2', NULL, 1134063),
(29, 'Lugasss', '2016-02-17', '2016-02-17', '0000-00-00', 'Proposal_1455749646.pdf', 'application/pdf', 'proposal1', NULL, 1134034),
(30, 'Jaka tolak', '2016-02-17', '2016-02-17', '2016-02-17', 'Proposal_1455750124.pdf', 'application/pdf', 'proposal2', NULL, 1134063),
(31, 'Lugas 123', '2016-02-19', '2016-02-19', '2016-02-19', 'Proposal_1455840158.pdf', 'application/pdf', 'proposal2', NULL, 1134034),
(32, 'Lugas tolak', '2016-02-19', '2016-02-19', '2016-02-19', 'Proposal_1455841939.pdf', 'application/pdf', 'proposal2', NULL, 1134034),
(33, 'Coba', '2016-02-22', '2016-02-22', '0000-00-00', 'Proposal_1456129626.pdf', 'application/pdf', 'proposal1', NULL, 1134024),
(34, 'Coba', '2016-02-22', '2016-02-22', '0000-00-00', 'Proposal_1456129626.pdf', 'Proposal_145612', 'Diterima', 21388110, 1134024),
(35, 'Coba', '2016-02-22', '2016-02-22', '0000-00-00', 'Proposal_1456133062.pdf', 'application/pdf', 'proposal1', NULL, 1134052),
(36, 'Test', '2016-02-23', '2016-02-23', '2016-02-23', 'Proposal_1456213138.pdf', 'application/pdf', 'proposal2', NULL, 1134034),
(37, 'Test', '2016-02-23', '2016-02-23', '2016-02-23', 'Proposal_1456213276.pdf', 'application/pdf', 'proposal2', NULL, 1134034),
(38, 'Lugas', '2016-02-23', '2016-02-23', '2016-02-23', 'Proposal_1456213313.pdf', 'application/pdf', 'proposal2', NULL, 1134034),
(39, 'Lugas', '2016-02-23', '2016-02-23', '2016-02-23', 'Proposal_1456213368.pdf', 'application/pdf', 'proposal2', NULL, 1134034),
(40, 'Test', '2016-02-23', '2016-02-23', '2016-02-23', 'Proposal_1456213571.pdf', 'application/pdf', 'proposal2', NULL, 1134034),
(41, 'Test', '2016-02-23', '2016-02-23', '2016-02-23', 'Proposal_1456213691.pdf', 'application/pdf', 'proposal2', NULL, 1134024),
(42, 'Update', '2016-02-23', '2016-02-23', '2016-02-23', 'Proposal_1456214369.pdf', 'application/pdf', 'proposal2', NULL, 1134024),
(43, 'Coba', '2016-02-23', '2016-02-23', '2016-02-23', 'Proposal_1456214522.pdf', 'application/pdf', 'proposal2', NULL, 1134024),
(44, 'Lagi', '2016-02-23', '2016-02-23', '2016-02-23', 'Proposal_1456214533.pdf', 'application/pdf', 'proposal2', NULL, 1134024),
(45, 'Lagi', '2016-02-23', '2016-02-23', '2016-02-23', 'Proposal_1456214830.pdf', 'application/pdf', 'proposal2', NULL, 1134024),
(46, 'Lagi', '2016-02-23', '2016-02-23', '2016-02-23', 'Proposal_1456214869.pdf', 'application/pdf', 'proposal2', NULL, 1134024),
(47, 'Lagi', '2016-02-23', '2016-02-23', '2016-02-23', 'Proposal_1456215008.pdf', 'application/pdf', 'proposal2', NULL, 1134024),
(48, 'Lagi', '2016-02-23', '2016-02-23', '2016-02-23', 'Proposal_1456215095.pdf', 'application/pdf', 'proposal2', NULL, 1134024),
(49, 'Lagi', '2016-02-23', '2016-02-23', '2016-02-23', 'Proposal_1456215126.pdf', 'application/pdf', 'proposal2', NULL, 1134024),
(50, 'Coba', '2016-02-23', '2016-02-23', '2016-02-23', 'Proposal_1456216050.pdf', 'application/pdf', 'proposal2', NULL, 1134024),
(51, 'Lugas', '2016-02-23', '2016-02-23', '0000-00-00', 'Proposal_1456216107.pdf', 'application/pdf', 'proposal1', NULL, 1134034),
(52, 'Lugas1', '2016-02-23', '2016-02-23', '2016-02-23', 'Proposal_1456216198.pdf', 'application/pdf', 'proposal2', NULL, 1134034),
(53, 'Test', '2016-02-23', '2016-02-23', '2016-02-23', 'Proposal_1456220213.pdf', 'application/pdf', 'proposal2', NULL, 1134034),
(54, 'Test', '2016-02-23', '2016-02-23', '2016-02-23', 'Proposal_1456220433.pdf', 'application/pdf', 'proposal2', NULL, 1134034),
(55, 'Jaka', '2016-02-23', '2016-02-23', '0000-00-00', 'Proposal_1456220690.pdf', 'application/pdf', 'proposal1', NULL, 1134063),
(56, 'Ganti', '2016-02-23', '2016-02-23', '2016-02-23', 'Proposal_1456220908.pdf', 'application/pdf', 'proposal2', NULL, 1134063),
(57, 'Coba', '2016-02-23', '2016-02-23', '2016-02-23', 'Proposal_1456229543.pdf', 'application/pdf', 'proposal2', NULL, 1134063),
(58, 'Coba', '2016-02-23', '2016-02-23', '2016-02-23', 'Proposal_1456229817.pdf', 'application/pdf', 'proposal2', NULL, 1134063),
(59, 'Test', '2016-02-23', '2016-02-23', '2016-02-23', 'Proposal_1456229855.pdf', 'application/pdf', 'proposal2', NULL, 1134063),
(60, 'Test', '2016-02-23', '2016-02-23', '2016-02-23', 'Proposal_1456230778.pdf', 'application/pdf', 'proposal2', NULL, 1134063),
(61, 'Test', '2016-02-23', '2016-02-23', '2016-02-23', 'Proposal_1456231082.pdf', 'application/pdf', 'proposal2', NULL, 1134063),
(62, 'Jaka 1', '2016-02-23', '2016-02-23', '2016-02-23', 'Proposal_1456232985.pdf', 'application/pdf', 'proposal2', NULL, 1134063),
(63, 'Lugas 1', '2016-02-23', '2016-02-23', '0000-00-00', 'Proposal_1456233054.pdf', 'application/pdf', 'proposal1', NULL, 1134034),
(64, 'Lugas', '2016-02-23', '2016-02-23', '2016-02-23', 'Proposal_1456233092.pdf', 'application/pdf', 'proposal2', NULL, 1134034),
(65, 'Coba terus', '2016-02-23', '2016-02-23', '2016-02-23', 'Proposal_1456233254.pdf', 'application/pdf', 'proposal2', NULL, 1134034),
(66, 'Tak jajal meneh', '2016-02-23', '2016-02-23', '2016-02-23', 'Proposal_1456233341.pdf', 'application/pdf', 'proposal2', NULL, 1134034),
(67, 'Meneh yo', '2016-02-23', '2016-02-23', '2016-02-23', 'Proposal_1456235644.pdf', 'application/pdf', 'proposal2', NULL, 1134034),
(68, 'tes', '2016-02-23', '2016-02-23', '0000-00-00', 'Proposal_1456240167.pdf', 'application/pdf', 'proposal1', NULL, 1134063),
(69, 'tes', '2016-02-23', '2016-02-23', '0000-00-00', 'Proposal_1456240167.pdf', 'Proposal_145624', 'Revisi', 312112, 1134063),
(70, 'tes', '2016-02-24', '2016-02-23', '0000-00-00', 'Proposal_1456240167.pdf', 'Proposal_145624', 'Revisi', 10579081, 1134063),
(71, 'tes', '2016-02-24', '2016-02-23', '0000-00-00', 'Proposal_1456240167.pdf', 'Proposal_145624', 'Revisi', 312112, 1134063),
(72, 'tes', '2016-02-24', '2016-02-23', '0000-00-00', 'Proposal_1456240167.pdf', 'Proposal_145624', 'Revisi', 312112, 1134063),
(73, 'tes', '2016-02-24', '2016-02-23', '0000-00-00', 'Proposal_1456240167.pdf', 'Proposal_145624', 'Revisi', 312112, 1134063),
(74, 'tes', '2016-02-24', '2016-02-23', '0000-00-00', 'Proposal_1456240167.pdf', 'Proposal_145624', 'Revisi', 312112, 1134063),
(75, 'tes', '2016-02-24', '2016-02-23', '0000-00-00', 'Proposal_1456240167.pdf', 'Proposal_145624', 'Revisi', 312112, 1134063),
(76, 'tes', '2016-02-24', '2016-02-23', '0000-00-00', 'Proposal_1456240167.pdf', 'Proposal_145624', 'Revisi', 312112, 1134063),
(77, 'tes', '2016-02-24', '2016-02-23', '0000-00-00', 'Proposal_1456240167.pdf', 'Proposal_145624', 'Revisi', 312112, 1134063),
(78, 'tes', '2016-02-24', '2016-02-23', '0000-00-00', 'Proposal_1456240167.pdf', 'Proposal_145624', 'Revisi', 312112, 1134063),
(79, 'tes', '2016-02-24', '2016-02-23', '0000-00-00', 'Proposal_1456240167.pdf', 'Proposal_145624', 'Revisi', 312112, 1134063),
(80, 'tes', '2016-02-24', '2016-02-23', '0000-00-00', 'Proposal_1456240167.pdf', 'Proposal_145624', 'Revisi', 312112, 1134063),
(81, 'tes', '2016-02-24', '2016-02-23', '0000-00-00', 'Proposal_1456240167.pdf', 'Proposal_145624', 'Revisi', 312112, 1134063),
(82, 'tes', '2016-02-24', '2016-02-23', '0000-00-00', 'Proposal_1456240167.pdf', 'Proposal_145624', 'Revisi', 312112, 1134063),
(83, 'tes', '2016-02-24', '2016-02-23', '0000-00-00', 'Proposal_1456240167.pdf', 'Proposal_145624', 'Revisi', 11380159, 1134063),
(84, 'tes', '2016-02-24', '2016-02-23', '0000-00-00', 'Proposal_1456240167.pdf', 'Proposal_145624', 'Revisi', 11380159, 1134063),
(85, '0', '0000-00-00', '0000-00-00', '0000-00-00', '0', '0', '0', 0, 0),
(86, '0', '0000-00-00', '0000-00-00', '0000-00-00', '0', '0', '0', 0, 0),
(87, 'tes', '2016-02-24', '2016-02-23', '0000-00-00', 'Proposal_1456240167.pdf', 'Proposal_145624', 'Revisi', 312112, 1134063),
(88, 'tes', '2016-02-24', '2016-02-23', '0000-00-00', 'Proposal_1456240167.pdf', 'Proposal_145624', 'Revisi', 312112, 1134063),
(89, 'tes', '2016-02-24', '2016-02-23', '0000-00-00', 'Proposal_1456240167.pdf', 'Proposal_145624', 'Revisi', 312112, 1134063),
(90, 'tes', '2016-02-24', '2016-02-23', '0000-00-00', 'Proposal_1456240167.pdf', 'Proposal_145624', 'Revisi', 312112, 1134063),
(91, 'tes', '2016-02-24', '2016-02-23', '0000-00-00', 'Proposal_1456240167.pdf', 'Proposal_145624', 'Revisi', 312112, 1134063),
(92, 'tes', '2016-02-24', '2016-02-23', '0000-00-00', 'Proposal_1456240167.pdf', 'Proposal_145624', 'Revisi', 312112, 1134063),
(93, 'tes', '2016-02-24', '2016-02-23', '0000-00-00', 'Proposal_1456240167.pdf', 'Proposal_145624', 'Revisi', 312112, 1134063),
(94, 'tes', '2016-02-24', '2016-02-23', '0000-00-00', 'Proposal_1456240167.pdf', 'Proposal_145624', 'Diterima', 312112, 1134063),
(95, 'tes', '2016-02-24', '2016-02-23', '0000-00-00', 'Proposal_1456240167.pdf', 'Proposal_145624', 'Diterima', 312112, 1134063),
(96, 'tes', '2016-02-24', '2016-02-23', '0000-00-00', 'Proposal_1456240167.pdf', 'Proposal_145624', 'Diterima', 312112, 1134063),
(97, 'tes', '2016-02-24', '2016-02-23', '0000-00-00', 'Proposal_1456240167.pdf', 'Proposal_145624', 'Revisi', 312112, 1134063),
(98, 'tes', '2016-02-24', '2016-02-23', '0000-00-00', 'Proposal_1456240167.pdf', 'Proposal_145624', 'Revisi', 312112, 1134063),
(99, 'tes', '2016-02-24', '2016-02-23', '0000-00-00', 'Proposal_1456240167.pdf', 'Proposal_145624', 'Diterima', 312112, 1134063),
(100, 'tes', '2016-02-24', '2016-02-23', '0000-00-00', 'Proposal_1456240167.pdf', 'Proposal_145624', 'Diterima', 312112, 1134063),
(101, 'tes', '2016-02-24', '2016-02-23', '0000-00-00', 'Proposal_1456240167.pdf', 'Proposal_145624', 'Diterima', 312112, 1134063),
(102, 'tes', '2016-02-24', '2016-02-23', '0000-00-00', 'Proposal_1456240167.pdf', 'Proposal_145624', 'Diterima', 312112, 1134063),
(103, 'tes', '2016-02-24', '2016-02-23', '0000-00-00', 'Proposal_1456240167.pdf', 'Proposal_145624', 'Diterima', 312112, 1134063),
(104, 'tes', '2016-02-24', '2016-02-23', '0000-00-00', 'Proposal_1456240167.pdf', 'Proposal_145624', 'Diterima', 312112, 1134063),
(105, 'tes', '2016-02-24', '2016-02-23', '0000-00-00', 'Proposal_1456240167.pdf', 'Proposal_145624', 'Diterima', 312112, 1134063),
(106, 'tes', '2016-02-24', '2016-02-23', '0000-00-00', 'Proposal_1456240167.pdf', 'Proposal_145624', 'Diterima', 312112, 1134063),
(107, 'tes', '2016-02-24', '2016-02-23', '0000-00-00', 'Proposal_1456240167.pdf', 'Proposal_145624', 'Diterima', 312112, 1134063),
(108, 'tes', '2016-02-24', '2016-02-23', '0000-00-00', 'Proposal_1456240167.pdf', 'Proposal_145624', 'Diterima', 312112, 1134063),
(109, 'tes', '2016-02-24', '2016-02-23', '0000-00-00', 'Proposal_1456240167.pdf', 'Proposal_145624', 'Diterima', 312112, 1134063),
(110, 'tes', '2016-02-24', '2016-02-23', '0000-00-00', 'Proposal_1456240167.pdf', 'Proposal_145624', 'Diterima', 312112, 1134063),
(111, 'tes', '2016-02-24', '2016-02-23', '0000-00-00', 'Proposal_1456240167.pdf', 'Proposal_145624', 'Diterima', 312112, 1134063),
(112, 'tes', '2016-02-24', '2016-02-23', '0000-00-00', 'Proposal_1456240167.pdf', 'Proposal_145624', 'Diterima', 312112, 1134063),
(113, 'tes', '2016-02-24', '2016-02-23', '0000-00-00', 'Proposal_1456240167.pdf', 'Proposal_145624', 'Diterima', 312112, 1134063),
(114, 'tes', '2016-02-24', '2016-02-23', '0000-00-00', 'Proposal_1456240167.pdf', 'Proposal_145624', 'Diterima', 312112, 1134063),
(115, 'tes', '2016-02-24', '2016-02-23', '0000-00-00', 'Proposal_1456240167.pdf', 'Proposal_145624', 'Diterima', 312112, 1134063),
(116, 'tes', '2016-02-24', '2016-02-23', '0000-00-00', 'Proposal_1456240167.pdf', 'Proposal_145624', 'Diterima', 312112, 1134063),
(117, 'tes', '2016-02-24', '2016-02-23', '0000-00-00', 'Proposal_1456240167.pdf', 'Proposal_145624', 'Diterima', 312112, 1134063),
(118, 'tes', '2016-02-24', '2016-02-23', '0000-00-00', 'Proposal_1456240167.pdf', 'Proposal_145624', 'Diterima', 10579081, 1134063),
(119, 'tes', '2016-02-24', '2016-02-23', '0000-00-00', 'Proposal_1456240167.pdf', 'Proposal_145624', 'Revisi', 10579081, 1134063),
(120, 'Jaka', '2016-02-24', '2016-02-24', '2016-02-24', 'Proposal_1456285369.pdf', 'application/pdf', 'revisi', NULL, 1134063),
(121, 'Lugas', '2016-02-24', '2016-02-24', '0000-00-00', 'Proposal_1456285470.pdf', 'application/pdf', 'proposal1', NULL, 1134034),
(122, 'Upload', '2016-02-24', '2016-02-24', '2016-02-24', 'Proposal_1456285615.pdf', 'application/pdf', 'proposal2', NULL, 1134034),
(123, 'Test', '2016-02-24', '2016-02-24', '0000-00-00', 'Proposal_1456285721.pdf', 'application/pdf', 'proposal1', NULL, 1134024),
(124, 'Test', '2016-02-24', '2016-02-24', '2016-02-24', 'Proposal_1456285777.pdf', 'application/pdf', 'proposal1', NULL, 1134024),
(125, 'Upload', '2016-02-24', '2016-02-24', '2016-02-24', 'Proposal_1456285615.pdf', 'Proposal_145628', 'Diterima', 21388110, 1134034),
(126, 'Test', '2016-02-24', '2016-02-24', '2016-02-24', 'Proposal_1456285777.pdf', 'Proposal_145628', 'Ditolak', 10378069, 1134024),
(127, 'Sarah', '2016-02-24', '2016-02-24', '2016-02-24', 'Proposal_1456286659.pdf', 'application/pdf', 'proposal2', NULL, 1134024),
(128, 'Sarah', '2016-02-24', '2016-02-24', '2016-02-24', 'Proposal_1456286659.pdf', 'Proposal_145628', 'Diterima', 10579081, 1134024),
(129, 'Sarah', '2016-02-24', '2016-02-24', '2016-02-24', 'Proposal_1456286659.pdf', 'Proposal_145628', 'Diterima', 10579081, 1134024),
(130, 'Sarah', '2016-02-24', '2016-02-24', '2016-02-24', 'Proposal_1456286659.pdf', 'Proposal_145628', 'Diterima', 10579081, 1134024),
(131, 'Jaka', '2016-02-24', '2016-02-24', '2016-02-24', 'Proposal_1456285369.pdf', 'Proposal_145628', 'Diterima', 10579081, 1134063),
(132, 'Jaka', '2016-02-24', '2016-02-24', '2016-02-24', 'Proposal_1456285369.pdf', 'Proposal_145628', 'Diterima', 10579081, 1134063);

-- --------------------------------------------------------

--
-- Table structure for table `jadwal_bimbingan`
--

CREATE TABLE IF NOT EXISTS `jadwal_bimbingan` (
`id_jadwal` int(11) NOT NULL,
  `hari` varchar(10) DEFAULT NULL,
  `npm` int(11) DEFAULT NULL,
  `nik` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa`
--

CREATE TABLE IF NOT EXISTS `mahasiswa` (
  `npm` int(11) NOT NULL,
  `nama_lengkap` varchar(50) DEFAULT NULL,
  `kelas` varchar(6) DEFAULT NULL,
  `jurusan` varchar(20) DEFAULT NULL,
  `alamat` varchar(100) DEFAULT NULL,
  `no_hp` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mahasiswa`
--

INSERT INTO `mahasiswa` (`npm`, `nama_lengkap`, `kelas`, `jurusan`, `alamat`, `no_hp`) VALUES
(1134024, 'Sarah Agustin', 'D4 3B', 'Teknik Informatika', 'Sariasih Blok II', '087654321234'),
(1134034, 'Lugas Akta Frimanda', '3b', 'd4t1', 'sariasih', '09990808088'),
(1134052, 'Noval', '3A', 'Teknik Informatika', 'Buciper', '089675431234'),
(1134063, 'jaka karang tunggal', '3b', 'd4 ti', 'tirtasari', '09988088');

-- --------------------------------------------------------

--
-- Table structure for table `proposal`
--

CREATE TABLE IF NOT EXISTS `proposal` (
`id_proposal` int(10) NOT NULL,
  `judul` varchar(50) NOT NULL,
  `D_update` date DEFAULT NULL,
  `D_acc` date DEFAULT NULL,
  `D_proposal` date NOT NULL,
  `file` varchar(30) NOT NULL,
  `type_file` varchar(15) NOT NULL,
  `ket` varchar(10) NOT NULL,
  `nik` int(11) DEFAULT NULL,
  `npm` int(11) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=42 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `proposal`
--

INSERT INTO `proposal` (`id_proposal`, `judul`, `D_update`, `D_acc`, `D_proposal`, `file`, `type_file`, `ket`, `nik`, `npm`) VALUES
(38, 'Jaka', '2016-02-24', '2016-02-24', '2016-02-24', 'Proposal_1456285369.pdf', 'Proposal_145628', 'Diterima', 10579081, 1134063),
(39, 'Upload', '2016-02-24', '2016-02-24', '2016-02-24', 'Proposal_1456285615.pdf', 'Proposal_145628', 'Diterima', 21388110, 1134034),
(41, 'Sarah', '2016-02-24', '2016-02-24', '2016-02-24', 'Proposal_1456286659.pdf', 'Proposal_145628', 'revisi', 10579081, 1134024);

-- --------------------------------------------------------

--
-- Table structure for table `status_proposal`
--

CREATE TABLE IF NOT EXISTS `status_proposal` (
`id_status` int(5) NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `status_proposal`
--

INSERT INTO `status_proposal` (`id_status`, `status`) VALUES
(1, 'Diterima'),
(2, 'Revisi'),
(3, 'Ditolak');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
`id_user` int(11) NOT NULL,
  `username` int(11) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `level` varchar(10) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=154 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `username`, `password`, `level`) VALUES
(145, 1134060, '827ccb0eea8a706c4c34a16891f84e7b', 'mahasiswa'),
(146, 101, '827ccb0eea8a706c4c34a16891f84e7b', 'admin'),
(147, 312112, '827ccb0eea8a706c4c34a16891f84e7b', 'kordinator'),
(148, 312113, '827ccb0eea8a706c4c34a16891f84e7b', 'dosen'),
(149, 1134063, '827ccb0eea8a706c4c34a16891f84e7b', 'mahasiswa'),
(150, 1134034, '827ccb0eea8a706c4c34a16891f84e7b', 'mahasiswa'),
(151, 21388110, '827ccb0eea8a706c4c34a16891f84e7b', 'dosen'),
(153, 1134024, '827ccb0eea8a706c4c34a16891f84e7b', 'mahasiswa');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bab_1`
--
ALTER TABLE `bab_1`
 ADD PRIMARY KEY (`id_bab`);

--
-- Indexes for table `bimbingan`
--
ALTER TABLE `bimbingan`
 ADD PRIMARY KEY (`id_bimbingan`), ADD KEY `npm` (`npm`,`nik`);

--
-- Indexes for table `dosen_pembimbing`
--
ALTER TABLE `dosen_pembimbing`
 ADD PRIMARY KEY (`nik`), ADD UNIQUE KEY `nik` (`nik`);

--
-- Indexes for table `draf_laporan1`
--
ALTER TABLE `draf_laporan1`
 ADD PRIMARY KEY (`id_draf`);

--
-- Indexes for table `history`
--
ALTER TABLE `history`
 ADD PRIMARY KEY (`id_history`);

--
-- Indexes for table `jadwal_bimbingan`
--
ALTER TABLE `jadwal_bimbingan`
 ADD PRIMARY KEY (`id_jadwal`);

--
-- Indexes for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
 ADD PRIMARY KEY (`npm`), ADD UNIQUE KEY `npm` (`npm`);

--
-- Indexes for table `proposal`
--
ALTER TABLE `proposal`
 ADD PRIMARY KEY (`id_proposal`), ADD KEY `nik` (`nik`,`npm`), ADD KEY `npm` (`npm`);

--
-- Indexes for table `status_proposal`
--
ALTER TABLE `status_proposal`
 ADD PRIMARY KEY (`id_status`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
 ADD PRIMARY KEY (`id_user`), ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bab_1`
--
ALTER TABLE `bab_1`
MODIFY `id_bab` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `bimbingan`
--
ALTER TABLE `bimbingan`
MODIFY `id_bimbingan` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `draf_laporan1`
--
ALTER TABLE `draf_laporan1`
MODIFY `id_draf` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `history`
--
ALTER TABLE `history`
MODIFY `id_history` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=133;
--
-- AUTO_INCREMENT for table `jadwal_bimbingan`
--
ALTER TABLE `jadwal_bimbingan`
MODIFY `id_jadwal` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `proposal`
--
ALTER TABLE `proposal`
MODIFY `id_proposal` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=42;
--
-- AUTO_INCREMENT for table `status_proposal`
--
ALTER TABLE `status_proposal`
MODIFY `id_status` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=154;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `proposal`
--
ALTER TABLE `proposal`
ADD CONSTRAINT `proposal_ibfk_1` FOREIGN KEY (`npm`) REFERENCES `mahasiswa` (`npm`) ON DELETE CASCADE ON UPDATE CASCADE,
ADD CONSTRAINT `proposal_ibfk_2` FOREIGN KEY (`nik`) REFERENCES `dosen_pembimbing` (`nik`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
