-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 03, 2025 at 09:53 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `suga`
--

-- --------------------------------------------------------

--
-- Table structure for table `laporan`
--

CREATE TABLE `laporan` (
  `id_laporan` int(11) NOT NULL,
  `judul_laporan` varchar(255) NOT NULL,
  `deskripsi_laporan` text NOT NULL,
  `nama_lengkap` varchar(255) NOT NULL,
  `email_laporan` varchar(255) NOT NULL,
  `no_telp` varchar(13) NOT NULL,
  `alamat_laporan` text NOT NULL,
  `disetujui` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `laporan`
--

INSERT INTO `laporan` (`id_laporan`, `judul_laporan`, `deskripsi_laporan`, `nama_lengkap`, `email_laporan`, `no_telp`, `alamat_laporan`, `disetujui`) VALUES
(7, 'Kebisingan Berlebihan dari Tetangga', 'Saya ingin menyampaikan keluhan terkait kebisingan yang sering terjadi dari rumah tetangga saya. Suara musik yang sangat keras dan aktivitas yang bising terjadi hampir setiap hari, terutama di malam hari, dan sangat mengganggu kenyamanan saya dan keluarga.', 'Bang Slam', 'slam@gmail.com', '088213292687', 'Karsamenak, Kec. Kawalu, Kab. Tasikmalaya, Jawa Barat 46182', 1);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `nama` text NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` enum('admin','user') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `nama`, `username`, `password`, `role`) VALUES
(0, 'Udin', '12102005', '12102005', 'user'),
(101010, 'admin', 'admin', 'admin', 'admin'),
(0, 'user', 'user', 'user', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `laporan`
--
ALTER TABLE `laporan`
  ADD PRIMARY KEY (`id_laporan`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `laporan`
--
ALTER TABLE `laporan`
  MODIFY `id_laporan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
