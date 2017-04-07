-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 26, 2016 at 07:18 AM
-- Server version: 5.5.27
-- PHP Version: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `dbpbo`
--

-- --------------------------------------------------------

--
-- Table structure for table `absen`
--

CREATE TABLE IF NOT EXISTS `absen` (
  `id_absen` int(11) NOT NULL AUTO_INCREMENT,
  `nis` varchar(4) NOT NULL,
  `id_semester` int(1) NOT NULL,
  `tanggal` date NOT NULL,
  `absen` varchar(1) NOT NULL,
  PRIMARY KEY (`id_absen`),
  KEY `id_semester` (`id_semester`) USING BTREE,
  KEY `nis` (`nis`) USING BTREE
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `absen`
--

INSERT INTO `absen` (`id_absen`, `nis`, `id_semester`, `tanggal`, `absen`) VALUES
(1, '0120', 1, '2015-12-21', 'S'),
(2, '0121', 1, '2015-12-02', 'A'),
(3, '0125', 1, '2015-12-16', 'T'),
(4, '0211', 1, '2016-01-03', 'I'),
(5, '0212', 1, '2016-01-07', 'T'),
(6, '0212', 1, '2016-01-08', 'S'),
(7, '0211', 1, '2016-01-07', 'A');

-- --------------------------------------------------------

--
-- Table structure for table `kelas`
--

CREATE TABLE IF NOT EXISTS `kelas` (
  `id_kelas` varchar(2) NOT NULL,
  `kelas` varchar(32) NOT NULL,
  PRIMARY KEY (`id_kelas`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kelas`
--

INSERT INTO `kelas` (`id_kelas`, `kelas`) VALUES
('01', 'Kelas I'),
('02', 'Kelas II'),
('03', 'Kelas III'),
('04', 'Kelas IV'),
('05', 'Kelas V'),
('06', 'Kelas VI');

-- --------------------------------------------------------

--
-- Table structure for table `semester`
--

CREATE TABLE IF NOT EXISTS `semester` (
  `id_semester` int(1) NOT NULL,
  `status` enum('Y','N') NOT NULL,
  PRIMARY KEY (`id_semester`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `semester`
--

INSERT INTO `semester` (`id_semester`, `status`) VALUES
(1, 'Y'),
(2, 'N');

-- --------------------------------------------------------

--
-- Table structure for table `siswa`
--

CREATE TABLE IF NOT EXISTS `siswa` (
  `nis` varchar(4) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `id_kelas` varchar(2) NOT NULL,
  PRIMARY KEY (`nis`),
  KEY `id_kelas` (`id_kelas`) USING BTREE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `siswa`
--

INSERT INTO `siswa` (`nis`, `nama`, `id_kelas`) VALUES
('0013', 'ipul', '05'),
('0120', 'Ridwan', '01'),
('0121', 'Anton Setiawan', '01'),
('0122', 'Gilang', '01'),
('0123', 'Fajar', '01'),
('0124', 'Ayu ', '01'),
('0125', 'Devi', '01'),
('0210', 'Andrea', '02'),
('0211', 'Fauzan', '02'),
('0212', 'ratih', '02');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id_user` int(1) NOT NULL,
  `username` varchar(32) NOT NULL,
  `password` varchar(32) NOT NULL,
  PRIMARY KEY (`id_user`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `username`, `password`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `absen`
--
ALTER TABLE `absen`
  ADD CONSTRAINT `fk_absen_semester` FOREIGN KEY (`id_semester`) REFERENCES `semester` (`id_semester`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_absen_siswa` FOREIGN KEY (`nis`) REFERENCES `siswa` (`nis`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `siswa`
--
ALTER TABLE `siswa`
  ADD CONSTRAINT `fk_siswa_kelas` FOREIGN KEY (`id_kelas`) REFERENCES `kelas` (`id_kelas`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
