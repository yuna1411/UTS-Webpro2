-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 26, 2022 at 02:51 PM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `florist`
--

-- --------------------------------------------------------

--
-- Table structure for table `bunga`
--

CREATE TABLE `bunga` (
  `kode` int(10) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `kategori` varchar(50) NOT NULL,
  `jenis` varchar(50) NOT NULL,
  `harga` decimal(10,0) NOT NULL,
  `tangkai` tinyint(3) NOT NULL,
  `warna` varchar(50) NOT NULL,
  `deskripsi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bunga`
--

INSERT INTO `bunga` (`kode`, `nama`, `kategori`, `jenis`, `harga`, `tangkai`, `warna`, `deskripsi`) VALUES
(112001, 'White Rose of York', 'Tanaman Hias', 'Mawar Alba', '15800', 1, 'Putih', 'Mawar alba adalah mawar putih hasil persilangan Rosa arvanensi dan Rosa alba. Mawar ini memiliki kelopak lebar bergelombang yang mekar dengan indah. Di tengahnya terdapat benang sari berwarna kuning dan inti berwarna merah.'),
(112002, 'Old Blues China', 'Tanaman Hias', 'Mawar China', '17200', 1, 'Fuschia', 'Mawar China bisa memekarkan bunga sepanjang musim panas hingga musim gugur. Dua varietasnya adalah old blues china dan mutabilis. Berwarna fuschia dengan corak gradasi pink.'),
(112003, 'Tea Roses', 'Tanaman Hias', 'Tea Roses', '47000', 15, 'Gradasi ', 'Mawar teh atau tea roses adalah hasil persilangan Hume\'s Blush China atau Parks Yellow Tea Scented China dengan berbagai jenis Bourbon dan Noisette. Tanaman bisa berbunga berkali-kali, namun tidak berbau harum.'),
(112005, 'Tes', 'Tes', 'Tes', '145555', 2, 'Tes', 'Tes'),
(112006, 'Coba', 'Coba', 'Coba', '100000', 5, 'Coba', 'Coba');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bunga`
--
ALTER TABLE `bunga`
  ADD PRIMARY KEY (`kode`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bunga`
--
ALTER TABLE `bunga`
  MODIFY `kode` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=112007;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
