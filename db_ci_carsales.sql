-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 26, 2015 at 03:15 AM
-- Server version: 5.6.11
-- PHP Version: 5.5.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `db_ci_carsales`
--
CREATE DATABASE IF NOT EXISTS `db_ci_carsales` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `db_ci_carsales`;

-- --------------------------------------------------------

--
-- Table structure for table `bayar_cicilan`
--

CREATE TABLE IF NOT EXISTS `bayar_cicilan` (
  `kode_cicilan` int(4) NOT NULL AUTO_INCREMENT,
  `kode_kredit` int(4) NOT NULL,
  `tgl_cicilan` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `jumlah_cicilan` int(4) NOT NULL,
  `cicilan_ke` int(4) NOT NULL,
  `cicilan_sisa_ke` int(4) NOT NULL,
  `cicilan_sisa_harga` int(20) NOT NULL,
  PRIMARY KEY (`kode_cicilan`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `beli_cash`
--

CREATE TABLE IF NOT EXISTS `beli_cash` (
  `kode_cash` int(4) NOT NULL AUTO_INCREMENT,
  `ktp` int(20) NOT NULL,
  `kode_mobil` int(4) NOT NULL,
  `cash_tgl` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `cash_bayar` int(50) NOT NULL,
  PRIMARY KEY (`kode_cash`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Triggers `beli_cash`
--
DROP TRIGGER IF EXISTS `TransactionCash_CarStock-Min`;
DELIMITER //
CREATE TRIGGER `TransactionCash_CarStock-Min` AFTER INSERT ON `beli_cash`
 FOR EACH ROW BEGIN
	UPDATE mobil SET stok=stok-1
	WHERE kode_mobil=NEW.kode_mobil;
END
//
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `beli_kredit`
--

CREATE TABLE IF NOT EXISTS `beli_kredit` (
  `kode_kredit` int(4) NOT NULL AUTO_INCREMENT,
  `ktp` int(30) NOT NULL,
  `kode_mobil` int(4) NOT NULL,
  `uang_muka` int(25) NOT NULL,
  `jumlah_cicilan` int(4) NOT NULL,
  `bunga` int(20) NOT NULL,
  `nilai_cicilan` int(20) NOT NULL,
  `tgl_kredit` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `fotokopi_ktp` varchar(100) NOT NULL,
  `fotokopi_kk` varchar(100) NOT NULL,
  `fotokopi_slip_gaji` varchar(100) NOT NULL,
  `status` enum('Lunas','Belum Lunas') NOT NULL,
  PRIMARY KEY (`kode_kredit`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Triggers `beli_kredit`
--
DROP TRIGGER IF EXISTS `TransactionCredit_CarStock-Min`;
DELIMITER //
CREATE TRIGGER `TransactionCredit_CarStock-Min` AFTER INSERT ON `beli_kredit`
 FOR EACH ROW BEGIN
	UPDATE mobil SET stok=stok-1
	WHERE kode_mobil=NEW.kode_mobil;
END
//
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `kredit`
--

CREATE TABLE IF NOT EXISTS `kredit` (
  `kode_kredit` int(4) NOT NULL AUTO_INCREMENT,
  `ktp` int(20) NOT NULL,
  `kode_paket` int(4) NOT NULL,
  `kode_mobil` int(4) NOT NULL,
  `tgl_kredit` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `fotokopi_ktp` varchar(75) NOT NULL,
  `fotokopi_kk` varchar(75) NOT NULL,
  `fotokopi_slip_gaji` varchar(75) NOT NULL,
  PRIMARY KEY (`kode_kredit`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `mobil`
--

CREATE TABLE IF NOT EXISTS `mobil` (
  `kode_mobil` int(4) NOT NULL AUTO_INCREMENT,
  `merk` varchar(100) NOT NULL,
  `type` varchar(100) NOT NULL,
  `warna` varchar(50) NOT NULL,
  `harga_mobil` int(20) NOT NULL,
  `gambar` varchar(125) NOT NULL,
  `stok` int(4) NOT NULL,
  PRIMARY KEY (`kode_mobil`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `pembeli`
--

CREATE TABLE IF NOT EXISTS `pembeli` (
  `ktp` int(20) NOT NULL,
  `nama_pembeli` varchar(100) NOT NULL,
  `alamat_pembeli` text NOT NULL,
  `telp_pembeli` int(12) NOT NULL,
  PRIMARY KEY (`ktp`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `pengguna`
--

CREATE TABLE IF NOT EXISTS `pengguna` (
  `kode_pengguna` int(4) NOT NULL AUTO_INCREMENT,
  `username` varchar(21) NOT NULL,
  `password` varchar(125) NOT NULL,
  `email` varchar(75) NOT NULL,
  `nama` varchar(175) NOT NULL,
  `level` enum('Admin','Pegawai') NOT NULL,
  `status` enum('Aktif','Tidak Aktif') NOT NULL,
  PRIMARY KEY (`kode_pengguna`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `pengguna`
--

INSERT INTO `pengguna` (`kode_pengguna`, `username`, `password`, `email`, `nama`, `level`, `status`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'admincarsales@rpl-starbhak.com', 'Administrator Carsales', 'Admin', 'Aktif'),
(2, 'pegawai', '047aeeb234644b9e2d4138ed3bc7976a', 'pegawaicarsales@rpl-stabhak.com', 'Pegawai Carsales', 'Pegawai', 'Aktif');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
