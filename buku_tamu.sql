-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 01, 2024 at 07:47 PM
-- Server version: 10.1.24-MariaDB
-- PHP Version: 7.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `buku_tamu`
--

-- --------------------------------------------------------

--
-- Table structure for table `keperluan`
--

CREATE TABLE `keperluan` (
  `id` int(11) NOT NULL,
  `keperluan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `keperluan`
--

INSERT INTO `keperluan` (`id`, `keperluan`) VALUES
(12, 'meeting'),
(13, 'Interview'),
(14, 'Lainnya');

-- --------------------------------------------------------

--
-- Table structure for table `tamu`
--

CREATE TABLE `tamu` (
  `id` int(20) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `alamat` text NOT NULL,
  `no_tlp` varchar(12) DEFAULT NULL,
  `jenis_kelamin` enum('Laki-laki','Perempuan') NOT NULL,
  `bertemu` varchar(50) DEFAULT NULL,
  `keperluan` varchar(100) NOT NULL,
  `waktu` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='TEXT';

--
-- Dumping data for table `tamu`
--

INSERT INTO `tamu` (`id`, `nama`, `alamat`, `no_tlp`, `jenis_kelamin`, `bertemu`, `keperluan`, `waktu`) VALUES
(1, 'sapriadi sudirman', '', NULL, 'Laki-laki', NULL, 'menginap', '2024-05-21 22:03:23'),
(2, 'sudirman', '', NULL, 'Laki-laki', NULL, 'hari selasa - kamis', '2024-05-21 22:03:23'),
(3, 'sapriadi', 'tondo', '082297183353', 'Laki-laki', NULL, '', '2024-05-21 22:03:23'),
(4, 'fikran', 'palu', '09383774', 'Laki-laki', NULL, '', '2024-05-21 22:03:23'),
(5, 'gading', 'lagarutu', '082298761231', 'Laki-laki', NULL, 'Meeting', '2024-05-21 22:03:23'),
(6, 'masda', 'masomba', '087266217762', 'Laki-laki', NULL, 'Intermilan', '2024-05-21 22:03:23'),
(7, 'fadly', 'mamboro', '082276589012', 'Laki-laki', 'Manager', 'Interview', '2024-05-21 22:03:23'),
(8, 'irma', 'ogoamas', '082998127722', 'Perempuan', 'HRD', 'Meeting', '2024-05-21 22:03:23'),
(9, 'abdul', 'sidera', '082345611783', 'Laki-laki', 'Manager', 'Interview', '2024-05-21 22:04:24'),
(10, 'siddik', 'merpati', '082316526217', 'Laki-laki', 'Staff', 'Interview', '2024-05-22 15:17:03'),
(11, 'rizky', 'pengawu', '082271630012', 'Laki-laki', 'HRD', 'Meeting', '2024-05-22 15:43:40'),
(12, '', '', NULL, 'Laki-laki', NULL, 'HRD', '2024-05-22 19:04:16'),
(13, '', '', NULL, 'Laki-laki', NULL, 'HRD', '2024-05-23 22:28:37'),
(14, '', '', NULL, 'Laki-laki', NULL, 'Intermilan', '2024-05-23 22:31:19'),
(15, '', '', NULL, 'Laki-laki', NULL, 'HRD', '2024-05-24 13:33:12'),
(16, '', '', NULL, 'Laki-laki', NULL, 'HRD', '2024-05-24 19:52:09'),
(17, '', '', NULL, 'Laki-laki', NULL, 'meeting', '2024-05-26 16:37:58'),
(18, '', '', NULL, 'Laki-laki', NULL, 'meeting', '2024-05-26 16:38:13');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `keperluan`
--
ALTER TABLE `keperluan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tamu`
--
ALTER TABLE `tamu`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `keperluan`
--
ALTER TABLE `keperluan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `tamu`
--
ALTER TABLE `tamu`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
