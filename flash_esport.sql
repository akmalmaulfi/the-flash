-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 25, 2019 at 07:03 AM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `flash_esport`
--
CREATE DATABASE IF NOT EXISTS `flash_esport` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `flash_esport`;

-- --------------------------------------------------------

--
-- Table structure for table `game`
--

DROP TABLE IF EXISTS `game`;
CREATE TABLE `game` (
  `id` int(11) NOT NULL,
  `nama_game` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `game`
--

INSERT INTO `game` (`id`, `nama_game`) VALUES
(1, 'Free Fire'),
(2, 'Mobile Legends'),
(3, 'PUBG'),
(4, 'Call Of Duty:Mobile');

-- --------------------------------------------------------

--
-- Table structure for table `kategori_merch`
--

DROP TABLE IF EXISTS `kategori_merch`;
CREATE TABLE `kategori_merch` (
  `id` int(11) NOT NULL,
  `kategori` enum('T-Shirt','Hoodie','Accesories','') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `level`
--

DROP TABLE IF EXISTS `level`;
CREATE TABLE `level` (
  `id` int(11) NOT NULL,
  `nama_level` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `level`
--

INSERT INTO `level` (`id`, `nama_level`) VALUES
(1, 'Administrator'),
(2, 'Member');

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

DROP TABLE IF EXISTS `member`;
CREATE TABLE `member` (
  `id` int(11) NOT NULL,
  `id_level` int(11) NOT NULL,
  `ign` varchar(200) NOT NULL,
  `nama` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `game` enum('PUBG','FreeFire','Mobile Legends','MobileLegends') NOT NULL,
  `role` enum('Flanker','Rusher','Support','') NOT NULL,
  `foto` varchar(200) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`id`, `id_level`, `ign`, `nama`, `email`, `password`, `game`, `role`, `foto`, `created_at`, `updated_at`) VALUES
(9, 2, 'FLS_Perdywono', 'Frederick Bayu Adji', 'perdy@gmail.com', '$2y$10$AGHSZR0OjYsHT9w/BJ3n/u.yEOEJy9zZ/HXVolbqhRPZVm3IjFTIa', 'PUBG', 'Flanker', 'team3.jpg', '2019-11-20 05:56:18', '2019-11-20 20:19:23'),
(10, 2, 'FLS_BaBe', 'Bager Gusnaldi', 'bager@gmail.com', '$2y$10$q6rwKd7K/hdc7jNwsPCFCeFYpjEzk0hbCiXTiQCViwkIVwm0dyhei', 'MobileLegends', 'Rusher', 'team3.jpg', '2019-11-20 06:03:47', '2019-11-23 14:31:07'),
(11, 1, 'FLS_Akmaru', 'Akmal Maulfy', 'akmal@gmail.com', '$2y$10$ZEdldc2sAXVzk/BNNp3ruermVBKCtE1MGUCfGOoTy3fZTL2iL.m.2', 'FreeFire', 'Rusher', 'team1.jpg', '2019-11-20 06:10:33', '2019-11-20 06:10:33'),
(12, 2, 'FLS_DevFire', 'Rizky Andreanusa', 'rizky@gmail.com', '$2y$10$I1L.rYESiTldCsIT9L762.Zrzh9OGavzqc46Q0HZeUcG6o6.ffGnC', 'MobileLegends', 'Rusher', 'team2.jpg', '2019-11-20 21:16:39', '2019-11-20 21:16:39'),
(13, 2, 'FLS_Chix', 'Chika Saputra', 'chika@gmail.com', '$2y$10$zQWwxLn12BHlt.LBKW7kKuGM5hbt6AzGMIZyfZ3fNO4oxbHpzIOrS', 'PUBG', 'Flanker', 'team4.jpg', '2019-11-23 14:32:09', '2019-11-23 14:32:09');

-- --------------------------------------------------------

--
-- Table structure for table `merch`
--

DROP TABLE IF EXISTS `merch`;
CREATE TABLE `merch` (
  `id` int(11) NOT NULL,
  `nama_barang` varchar(200) NOT NULL,
  `stok` enum('Tersedia','Habis','','') NOT NULL,
  `harga` int(11) NOT NULL,
  `kategori` enum('T-Shirt','Hoodie','Accesories','') NOT NULL,
  `foto` varchar(200) NOT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `merch`
--

INSERT INTO `merch` (`id`, `nama_barang`, `stok`, `harga`, `kategori`, `foto`, `created_at`, `updated_at`) VALUES
(2, 'Darker Flash', 'Tersedia', 200000, 'T-Shirt', 'tshirt-black.png', '2019-11-18 07:46:23', '2019-11-23 14:19:54'),
(3, 'White Flash', 'Tersedia', 300000, 'T-Shirt', 'tshirt.png', '2019-11-19 02:37:43', '2019-11-23 14:29:44'),
(4, 'BlueSky FLS', 'Tersedia', 50000, 'T-Shirt', 'tshirt-blue.png', '2019-11-20 01:07:53', '2019-11-23 14:29:53'),
(5, 'Black Flat Top', 'Tersedia', 55000, 'Accesories', 'acc-black.png', '2019-11-23 14:21:49', '2019-11-23 14:21:49'),
(6, 'Blue PWG', 'Tersedia', 50000, 'Accesories', 'acc-blue.png', '2019-11-23 14:22:25', '2019-11-23 14:22:25'),
(7, 'Red Maroon PWG', 'Tersedia', 100000, 'Accesories', 'acc-red.png', '2019-11-23 14:23:04', '2019-11-23 14:23:04'),
(8, 'Red Hoodie', 'Tersedia', 350000, 'Hoodie', 'hoodie-red.png', '2019-11-23 14:23:48', '2019-11-23 14:24:27'),
(9, 'Black Hoodie', 'Tersedia', 320000, 'Hoodie', 'hoodie-black.png', '2019-11-23 14:25:23', '2019-11-23 14:25:23'),
(10, 'White Hoodie', 'Tersedia', 250000, 'Hoodie', 'hoodie-white.png', '2019-11-23 14:26:01', '2019-11-23 14:26:01');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `game`
--
ALTER TABLE `game`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kategori_merch`
--
ALTER TABLE `kategori_merch`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `level`
--
ALTER TABLE `level`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_id_level` (`id_level`);

--
-- Indexes for table `merch`
--
ALTER TABLE `merch`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `game`
--
ALTER TABLE `game`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `kategori_merch`
--
ALTER TABLE `kategori_merch`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `level`
--
ALTER TABLE `level`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `member`
--
ALTER TABLE `member`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `merch`
--
ALTER TABLE `merch`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `member`
--
ALTER TABLE `member`
  ADD CONSTRAINT `fk_id_level` FOREIGN KEY (`id_level`) REFERENCES `level` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
