-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Dec 07, 2021 at 03:16 PM
-- Server version: 5.7.33
-- PHP Version: 7.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_web`
--

-- --------------------------------------------------------

--
-- Table structure for table `tblpetshop`
--

CREATE TABLE `tblpetshop` (
  `id_barang` int(20) NOT NULL,
  `nama_barang` varchar(20) NOT NULL,
  `jns_peliharaan` varchar(20) NOT NULL,
  `ket_barang` varchar(20) NOT NULL,
  `harga` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblpetshop`
--

INSERT INTO `tblpetshop` (`id_barang`, `nama_barang`, `jns_peliharaan`, `ket_barang`, `harga`) VALUES
(1, 'Wiskas 1kg', 'Cat', '10 pcs', '75.000'),
(2, 'Wiskas 1kg', 'Dog', '5 pcs', '100.000');

-- --------------------------------------------------------

--
-- Table structure for table `tblrescure`
--

CREATE TABLE `tblrescure` (
  `id_hewan` int(20) NOT NULL,
  `nama_hewan` varchar(20) NOT NULL,
  `jns_peliharaan` varchar(20) NOT NULL,
  `umur_peliharaan` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblrescure`
--

INSERT INTO `tblrescure` (`id_hewan`, `nama_hewan`, `jns_peliharaan`, `umur_peliharaan`) VALUES
(1, 'Nana', 'Cat', 2),
(2, 'Lala', 'Cat', 2),
(11, 'coki', 'burung', 2),
(12, 'kimi', 'cupang', 2);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(20) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `username`, `password`) VALUES
(1, 'admin', 'admin'),
(11, 'piyik', '12345');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tblpetshop`
--
ALTER TABLE `tblpetshop`
  ADD PRIMARY KEY (`id_barang`);

--
-- Indexes for table `tblrescure`
--
ALTER TABLE `tblrescure`
  ADD PRIMARY KEY (`id_hewan`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tblpetshop`
--
ALTER TABLE `tblpetshop`
  MODIFY `id_barang` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tblrescure`
--
ALTER TABLE `tblrescure`
  MODIFY `id_hewan` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
