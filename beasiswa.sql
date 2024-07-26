-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jul 26, 2024 at 03:01 AM
-- Server version: 8.0.30
-- PHP Version: 8.2.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `beasiswa`
--

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `id` int NOT NULL,
  `foto` varchar(100) DEFAULT NULL,
  `nim` varchar(20) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `nohp` varchar(100) NOT NULL,
  `semester` tinyint UNSIGNED NOT NULL,
  `ipk` double NOT NULL,
  `jns_beasiswa` varchar(100) NOT NULL,
  `status_ajuan` varchar(50) DEFAULT 'Belum di verifikasi',
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `mahasiswa`
--

INSERT INTO `mahasiswa` (`id`, `foto`, `nim`, `nama`, `email`, `nohp`, `semester`, `ipk`, `jns_beasiswa`, `status_ajuan`, `created_at`) VALUES
(1, '3x4.png', '210202031', 'Dhimas Afrisetiawan', 'dhimas@gmail.com', '089671141721', 8, 3.5, 'Beasiswa Bidikmisi', 'Belum di verifikasi', '2024-07-25 09:08:39'),
(2, '210202031.png', '210202033', 'Ikmal Ghozali', 'ikmal@gmail.com', '089737177211', 3, 3.2, 'Beasiswa KIPK', 'Belum di verifikasi', '2024-07-25 09:09:16'),
(4, '210202031.png', '210202031', 'Dhimas Afrisetiawan', 'dhimasgame153@gmail.com', '099876767', 3, 3.5, 'Beasiswa Bidikmisi', 'Belum di verifikasi', '2024-07-26 01:52:14');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
