-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 28, 2017 at 05:26 PM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `Flights`
--

-- --------------------------------------------------------

--
-- Table structure for table `Maskapai`
--

CREATE TABLE `Maskapai` (
  `id_maskapai` int(11) NOT NULL,
  `nama_maskapai` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Maskapai`
--

INSERT INTO `Maskapai` (`id_maskapai`, `nama_maskapai`) VALUES
(1, 'Garuda Indonesia'),
(2, 'Qatar Airways'),
(4, 'GGGG AI'),
(6, 'Garuda'),
(7, 'aaa');

-- --------------------------------------------------------

--
-- Table structure for table `penerbangan`
--

CREATE TABLE `penerbangan` (
  `id_flights` varchar(255) NOT NULL,
  `darimana` varchar(255) NOT NULL,
  `kemana` varchar(255) NOT NULL,
  `harga` varchar(255) NOT NULL,
  `id_maskapai` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `penerbangan`
--

INSERT INTO `penerbangan` (`id_flights`, `darimana`, `kemana`, `harga`, `id_maskapai`) VALUES
('AB123', 'Polinema', 'UB', 'Rp.8.000.000', 1),
('GA133', 'Jayapura', 'Jakarta', 'Rp. 70.000.000', 1),
('GA888', 'Surabayaa', 'Jakarta', 'Rp. 3.120.000', 1),
('GA999', 'Makassar', 'SURABNAYA', '1234', 1);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `email`, `password`) VALUES
(1, 'Ahmad Rizaldi', 'e00b29d5b34c3f78df09d45921c9ec47'),
(2, 'Rakha Hidayat', 'e00b29d5b34c3f78df09d45921c9ec47'),
(3, 'ahmadrizaldi97.jr@gmail.com', 'e00b29d5b34c3f78df09d45921c9ec47'),
(4, 'oon@gmail.com', 'e00b29d5b34c3f78df09d45921c9ec47'),
(5, 'eee@gmail.com', '202cb962ac59075b964b07152d234b70');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Maskapai`
--
ALTER TABLE `Maskapai`
  ADD PRIMARY KEY (`id_maskapai`);

--
-- Indexes for table `penerbangan`
--
ALTER TABLE `penerbangan`
  ADD PRIMARY KEY (`id_flights`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Maskapai`
--
ALTER TABLE `Maskapai`
  MODIFY `id_maskapai` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
