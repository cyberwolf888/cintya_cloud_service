-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 22, 2017 at 02:21 PM
-- Server version: 5.5.16
-- PHP Version: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `db_saas`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_bayarcust`
--

CREATE TABLE IF NOT EXISTS `tb_bayarcust` (
  `id_bayarcust` int(5) NOT NULL AUTO_INCREMENT,
  `id_booking` int(5) NOT NULL,
  `tgl_bayar` date NOT NULL,
  `jumlah_bayar` varchar(50) NOT NULL,
  PRIMARY KEY (`id_bayarcust`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tb_bayarmember`
--

CREATE TABLE IF NOT EXISTS `tb_bayarmember` (
  `id_bayarm` int(5) NOT NULL AUTO_INCREMENT,
  `nama` varchar(50) NOT NULL,
  `tgl_bayar` date NOT NULL,
  `jml_bayar` varchar(20) NOT NULL,
  PRIMARY KEY (`id_bayarm`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `tb_bayarmember`
--

INSERT INTO `tb_bayarmember` (`id_bayarm`, `nama`, `tgl_bayar`, `jml_bayar`) VALUES
(3, 'merdeka shop', '0000-00-00', '98000');

-- --------------------------------------------------------

--
-- Table structure for table `tb_booking`
--

CREATE TABLE IF NOT EXISTS `tb_booking` (
  `id_booking` int(5) NOT NULL AUTO_INCREMENT,
  `nama_cust` varchar(50) NOT NULL,
  `id_paket` int(5) NOT NULL,
  `tanggal` date NOT NULL,
  `cod_bookingan` date NOT NULL,
  `status_bookingan` varchar(10) NOT NULL,
  `total_payment` varchar(50) NOT NULL,
  PRIMARY KEY (`id_booking`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tb_layanan`
--

CREATE TABLE IF NOT EXISTS `tb_layanan` (
  `id_layanan` int(11) NOT NULL AUTO_INCREMENT,
  `nama_paket` varchar(50) NOT NULL,
  `harga_paket` int(11) NOT NULL,
  `durasi` int(10) NOT NULL,
  `keterangan` text,
  PRIMARY KEY (`id_layanan`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `tb_layanan`
--

INSERT INTO `tb_layanan` (`id_layanan`, `nama_paket`, `harga_paket`, `durasi`, `keterangan`) VALUES
(2, 'Platinum', 1000000, 6, 'tidak ada'),
(3, 'silber', 8900000, 9, 'nul');

-- --------------------------------------------------------

--
-- Table structure for table `tb_tour`
--

CREATE TABLE IF NOT EXISTS `tb_tour` (
  `id_tour` int(5) NOT NULL AUTO_INCREMENT,
  `id_user` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `harga_tour` varchar(10) NOT NULL,
  `deskripsi` text NOT NULL,
  `gambar` varchar(100) NOT NULL,
  `status` int(1) NOT NULL,
  PRIMARY KEY (`id_tour`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `tb_tour`
--

INSERT INTO `tb_tour` (`id_tour`, `id_user`, `nama`, `harga_tour`, `deskripsi`, `gambar`, `status`) VALUES
(1, 6, 'Sightseeing Bali 3D2n', '1789000', 'bla bla bla', 'aaa', 2);

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE IF NOT EXISTS `tb_user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(40) NOT NULL,
  `alamat` text NOT NULL,
  `tlpn` varchar(12) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `type` int(1) NOT NULL,
  `status` int(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`id`, `nama`, `alamat`, `tlpn`, `email`, `password`, `type`, `status`) VALUES
(1, 'Cintya', 'Denpasar', '2147483647', 'admin@mail.com', '7fef6171469e80d32c0559f88b377245', 1, 1),
(6, 'merdeka', 'denpasar', '9877', 'member@mail.com', 'd4e8e64db20cf66905b04f8e01e6e5ab', 2, 1),
(8, 'putu', 'denpasar', '89786555', 'putu@mail.com', '0192023a7bbd73250516f069df18b500', 1, 1),
(11, 'Made Jaya', 'Denpasar', '087861620726', 'cintya@ymail.com', '0f9e9c56f3e4019ac716f90a8861aa89', 3, 1),
(12, '', '', '', '', 'd41d8cd98f00b204e9800998ecf8427e', 3, 1);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
