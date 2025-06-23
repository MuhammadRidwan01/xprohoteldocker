-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jun 03, 2024 at 06:34 AM
-- Server version: 10.11.7-MariaDB-4
-- PHP Version: 8.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_hotel`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `id_admin` int(2) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`id_admin`, `nama`, `username`, `password`) VALUES
(31, 'ridwan', 'rian', '123');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_jenis_kamar`
--

CREATE TABLE `tbl_jenis_kamar` (
  `id_kamar` int(11) NOT NULL,
  `jenis_kamar` varchar(30) NOT NULL,
  `harga` int(11) NOT NULL,
  `keterangan` text NOT NULL,
  `gambar` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_jenis_kamar`
--

INSERT INTO `tbl_jenis_kamar` (`id_kamar`, `jenis_kamar`, `harga`, `keterangan`, `gambar`) VALUES
(1, 'Standard', 800000, 'memiliki fasilitas, seperti\ntempat tidur, AC, TV,\nperlengkapan mandi, dan air\nminum. ukuran kasur yang\ndisediakan oleh Standard\nRoom model single bed, queen\nsize', 'https://bebeklucu.sirv.com/hotel/valeriia-bugaiova-_pPHgeHz1uk-unsplash.jpg'),
(17, 'dwiki', 1, 'hi', 'https://awsimages.detik.net.id/community/media/visual/2022/06/16/kamar-hotel_169.jpeg?w=1200');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_penyewa`
--

CREATE TABLE `tbl_penyewa` (
  `id_sewa` int(11) NOT NULL,
  `id_kamar` int(11) DEFAULT NULL,
  `nama` varchar(255) NOT NULL,
  `cekin` date NOT NULL,
  `cekout` date NOT NULL,
  `no_identitas` varchar(50) NOT NULL,
  `no_hp` varchar(20) NOT NULL,
  `jumlah_kamar` int(11) DEFAULT 1,
  `total` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_penyewa`
--

INSERT INTO `tbl_penyewa` (`id_sewa`, `id_kamar`, `nama`, `cekin`, `cekout`, `no_identitas`, `no_hp`, `jumlah_kamar`, `total`) VALUES
(1, 1, 'ridwna', '2024-05-09', '2024-05-31', '0202', '0505', 1, 17600000),
(2, 1, 'rdwian', '2024-05-21', '2024-05-22', 'rororr', 'rororr', 1, 800000),
(3, 1, 'ww', '2024-05-14', '2024-05-30', '02', '02', 1, 12800000),
(4, 1, 'ridwa', '2024-05-16', '2024-05-17', '05', '05', 1, 800000),
(5, 1, 'r', '2024-05-28', '2024-05-29', '2', '2', 1, 800000),
(6, 1, 'ww', '2024-06-26', '2024-06-27', '0220', '0220', 1, 800000),
(7, 7, 'test1111', '2024-06-01', '2024-06-02', '020202', '020202', 1, 2000000),
(8, 1, 'dwiki hitam', '2024-06-03', '2024-06-04', '15151', '15151', 1, 800000),
(9, 1, 'ridwann', '2024-06-03', '2024-06-04', '123', '123', 3, 2400000);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `tbl_jenis_kamar`
--
ALTER TABLE `tbl_jenis_kamar`
  ADD PRIMARY KEY (`id_kamar`);

--
-- Indexes for table `tbl_penyewa`
--
ALTER TABLE `tbl_penyewa`
  ADD PRIMARY KEY (`id_sewa`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `id_admin` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `tbl_jenis_kamar`
--
ALTER TABLE `tbl_jenis_kamar`
  MODIFY `id_kamar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `tbl_penyewa`
--
ALTER TABLE `tbl_penyewa`
  MODIFY `id_sewa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;