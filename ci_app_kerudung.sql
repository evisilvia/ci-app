-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 18, 2019 at 09:37 PM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ci_app_kerudung`
--

-- --------------------------------------------------------

--
-- Table structure for table `kerudung`
--

CREATE TABLE `kerudung` (
  `id` int(100) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `stok` varchar(100) NOT NULL,
  `harga` varchar(100) NOT NULL,
  `bahan` varchar(100) NOT NULL,
  `warna` varchar(100) NOT NULL,
  `ukuran` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kerudung`
--

INSERT INTO `kerudung` (`id`, `nama`, `stok`, `harga`, `bahan`, `warna`, `ukuran`) VALUES
(1, 'Sahara', '15', '40.000', 'Jersy', 'Navi', 'L'),
(2, 'Rabani', '10', '90.000', 'Kaos', 'Marun', 'M'),
(3, 'rula', '5kd', '45000', 'balon', 'biru', 'L'),
(4, 'si.se.sa', '2kd', '120000', 'ceruty', 'coklat', 'XL'),
(5, 'si.se.sa', '2kd', '120000', 'ceruty', 'coklat', 'XL');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kerudung`
--
ALTER TABLE `kerudung`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `kerudung`
--
ALTER TABLE `kerudung`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
