-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 14, 2018 at 05:56 PM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `d_angga`
--

-- --------------------------------------------------------

--
-- Table structure for table `t_cerita`
--

CREATE TABLE `t_cerita` (
  `Nim` bigint(10) NOT NULL,
  `Kode_file` varchar(20) NOT NULL,
  `Cerita` varchar(100) NOT NULL,
  `File_gambar` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `t_jurnal6`
--

CREATE TABLE `t_jurnal6` (
  `Nim` bigint(20) NOT NULL,
  `Nama` varchar(35) NOT NULL,
  `Kelas` text NOT NULL,
  `Jenis_kelamin` text NOT NULL,
  `Hobi` text NOT NULL,
  `Fakultas` text NOT NULL,
  `Alamat` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `t_cerita`
--
ALTER TABLE `t_cerita`
  ADD PRIMARY KEY (`Nim`);

--
-- Indexes for table `t_jurnal6`
--
ALTER TABLE `t_jurnal6`
  ADD PRIMARY KEY (`Nim`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
