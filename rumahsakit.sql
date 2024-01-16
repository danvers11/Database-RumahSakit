-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 05, 2019 at 08:51 AM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rumahsakit`
--

-- --------------------------------------------------------

--
-- Table structure for table `form`
--

CREATE TABLE `form` (
  `idpembayaran` varchar(50) NOT NULL,
  `tanggalpembayaran` varchar(50) NOT NULL,
  `idpasien` varchar(50) NOT NULL,
  `namapasien` varchar(50) NOT NULL,
  `kelasrawatinap` varchar(50) NOT NULL,
  `dokter` varchar(50) NOT NULL,
  `jenisberobat` varchar(50) NOT NULL,
  `lamaberobat` varchar(50) NOT NULL,
  `biaya` varchar(50) NOT NULL,
  `fasilitas` varchar(700) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `form`
--

INSERT INTO `form` (`idpembayaran`, `tanggalpembayaran`, `idpasien`, `namapasien`, `kelasrawatinap`, `dokter`, `jenisberobat`, `lamaberobat`, `biaya`, `fasilitas`) VALUES
('1', '3-3-2020', '23', 'Salsa', 'VIP', 'Spesialis', 'Asuransi', '4', '1045000', 'Single Room, Kamar Mandi, Shower Set (Hot/Cold), AC + Remote, AC + remote, TV LCD 26inch + remote, DVD Player + remote, Meja Mayo, Telepon Intercom, Lemari Pakaian, Lemari Es, Sofa Bed, Set Meja Tamu, Bedside Locker, Welcome Drink, Parcel Buah'),
('3', '11-9-2019', '213', 'Abah', 'VIP', 'Spesialis', 'Asuransi', '3', '1045000', 'Single Room, Kamar Mandi, Shower Set (Hot/Cold), AC + Remote, AC + remote, TV LCD 26inch + remote, DVD Player + remote, Meja Mayo, Telepon Intercom, Lemari Pakaian, Lemari Es, Sofa Bed, Set Meja Tamu, Bedside Locker, Welcome Drink, Parcel Buah');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `Username` varchar(50) NOT NULL,
  `Password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`Username`, `Password`) VALUES
('admin', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `form`
--
ALTER TABLE `form`
  ADD PRIMARY KEY (`idpembayaran`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
