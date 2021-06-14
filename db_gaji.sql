-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 14, 2021 at 08:56 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_gaji`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_gaji`
--

CREATE TABLE `tb_gaji` (
  `id_gaji` varchar(10) NOT NULL,
  `id_spv` varchar(10) DEFAULT NULL,
  `gaji_pokok` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_gaji`
--

INSERT INTO `tb_gaji` (`id_gaji`, `id_spv`, `gaji_pokok`) VALUES
('001', '15062001', '4.500.000'),
('002', '16062001', '4.000.000'),
('003', '17072001', '3.500.000'),
('004', '18072001', '2.000.000'),
('005', '19082001', '2.500.000');

-- --------------------------------------------------------

--
-- Table structure for table `tb_spv`
--

CREATE TABLE `tb_spv` (
  `id_spv` varchar(10) NOT NULL,
  `nama_spv` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_spv`
--

INSERT INTO `tb_spv` (`id_spv`, `nama_spv`) VALUES
('15062001', 'Sherina Natasya'),
('16062001', 'Lissa Subandi'),
('17072001', 'Welly Damara'),
('18072001', 'Felix Oxa'),
('19082001', 'Ananda Zefanya');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_gaji`
--
ALTER TABLE `tb_gaji`
  ADD PRIMARY KEY (`id_gaji`),
  ADD KEY `id_spv` (`id_spv`);

--
-- Indexes for table `tb_spv`
--
ALTER TABLE `tb_spv`
  ADD PRIMARY KEY (`id_spv`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tb_gaji`
--
ALTER TABLE `tb_gaji`
  ADD CONSTRAINT `tb_gaji_ibfk_1` FOREIGN KEY (`id_spv`) REFERENCES `tb_spv` (`id_spv`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
