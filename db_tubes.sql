-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Feb 26, 2014 at 12:19 PM
-- Server version: 5.5.16
-- PHP Version: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;


-- --------------------------------------------------------

--
-- Table structure for table `tb_member`
--

CREATE TABLE IF NOT EXISTS `tb_member` (
  `kary_id` int(11) NOT NULL AUTO_INCREMENT,
  `kode_mbr` varchar(5) NOT NULL,
  `nama_mbr` varchar(30) NOT NULL,
  `alamat_mbr` varchar(80) NOT NULL,
  `nohp_mbr` varchar(30) NOT NULL,
  PRIMARY KEY (`kary_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `tb_member`
--

INSERT INTO `tb_member` (`kary_id`, `kode_mbr`, `nama_mbr`, `alamat_mbr`, `nohp_mbr`) VALUES
(1, 'MA001', 'Contoh TA', 'Jln. Bunga Ros', '12021547'),
(2, 'MA002', 'Santo Santi', 'Jln. Bunga Anggrek', '54215543'),
(3, 'MA003', 'Joko Serpihanto', 'Jln. Duku', '12145555'),
(4, 'MA004', 'Eko Mbah Trio', 'Jln. Melati', '12345621'),
(5, 'MA005', 'Jackson Popsan', 'Jln. Surga Dunia', '45154233'),
(6, 'MA006', 'Sarmidun Madun', 'Ruli Sentausa', '11202135');

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE IF NOT EXISTS `tb_user` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(30) NOT NULL,
  `password` varchar(32) NOT NULL,
  `fullname` varchar(30) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`user_id`, `username`, `password`, `fullname`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'Kelompok 19');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
