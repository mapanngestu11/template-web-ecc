-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 03, 2023 at 01:25 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 5.6.40

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_ecc`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_jadwal_kursus`
--

CREATE TABLE `tbl_jadwal_kursus` (
  `id` int(10) NOT NULL,
  `hari` varchar(20) NOT NULL,
  `jam` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_jadwal_kursus`
--

INSERT INTO `tbl_jadwal_kursus` (`id`, `hari`, `jam`) VALUES
(1, 'senin', '09 : 00 -  11 : 00'),
(2, 'senin', '13 : 30 - 15 :  00'),
(3, 'senin', '15 : 00 - 17 :  00'),
(4, 'senin', '19 : 30 - 20 :  30'),
(5, 'selasa', '09 : 00 - 11 :  00'),
(6, 'selasa', '13 : 30 - 15 :  00'),
(7, 'selasa', '15 : 00 - 17 :  00'),
(8, 'selasa', '19 : 30 - 20 :  30'),
(9, 'rabu', '09 : 00 - 11 :  00'),
(10, 'rabu', '13 : 30 - 15 :  00'),
(11, 'rabu', '15 : 00 - 17 :  00'),
(12, 'rabu', '19 : 30 - 20 :  30'),
(13, 'kamis', '09 : 00 - 11 :  00'),
(14, 'kamis', '13 : 30 - 15 :  00'),
(15, 'kamis', '15 : 00 - 17 :  00'),
(16, 'jumat', '13 : 30 - 15 :  00'),
(17, 'jumat', '15 : 00 - 17 :  00'),
(18, 'sabtu', '09 : 00 - 11 :  00'),
(19, 'sabtu', '13 : 30 - 15 :  00'),
(20, 'sabtu', '15 : 00 - 17 :  00'),
(21, 'minggu', '09 : 00 - 11 :  00'),
(22, 'minggu', '13 : 30 - 15 :  00'),
(23, 'minggu', '15 : 00 - 17 :  00'),
(24, 'minggu', '19 : 30 - 20 :  30');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_siswa`
--

CREATE TABLE `tbl_siswa` (
  `id` int(10) NOT NULL,
  `no_pendaftar` varchar(50) NOT NULL,
  `nama_lengkap` varchar(50) NOT NULL,
  `tempat_lahir` varchar(50) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `asal` varchar(50) NOT NULL,
  `jenis_kelamin` varchar(20) NOT NULL,
  `no_hp` varchar(13) NOT NULL,
  `nama_ayah` varchar(50) NOT NULL,
  `nama_ibu` varchar(50) NOT NULL,
  `alamat` text NOT NULL,
  `program_kursus` varchar(20) NOT NULL,
  `hari_pertama` varchar(10) NOT NULL,
  `jam_pertama` varchar(20) NOT NULL,
  `hari_kedua` varchar(10) NOT NULL,
  `jam_kedua` varchar(20) NOT NULL,
  `hari_ketiga` varchar(10) DEFAULT NULL,
  `jam_ketiga` varchar(20) DEFAULT NULL,
  `validasi_data` varchar(10) NOT NULL,
  `foto` text,
  `username` varchar(20) NOT NULL,
  `password` varchar(100) NOT NULL,
  `last_login` datetime NOT NULL,
  `tanggal` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_siswa`
--

INSERT INTO `tbl_siswa` (`id`, `no_pendaftar`, `nama_lengkap`, `tempat_lahir`, `tgl_lahir`, `asal`, `jenis_kelamin`, `no_hp`, `nama_ayah`, `nama_ibu`, `alamat`, `program_kursus`, `hari_pertama`, `jam_pertama`, `hari_kedua`, `jam_kedua`, `hari_ketiga`, `jam_ketiga`, `validasi_data`, `foto`, `username`, `password`, `last_login`, `tanggal`) VALUES
(1, '1', 'BUDI 1', '1', '2022-12-07', '1', 'laki-laki', '1', '1', '1', '1', 'Microsoft Office', 'jumat', '13 : 30 - 15 :  00', 'selasa', '09 : 00 - ', '', '', '', 'dc303253bcb637341f970ca766421b75.jpg', '1', '202cb962ac59075b964b07152d234b70', '0000-00-00 00:00:00', '2022-12-29 02:51:12'),
(3, '2', '2', '2', '2022-12-19', '2', 'laki-laki', '2', '2', '2', '2', 'Microsoft Office', 'sabtu', '09 : 00 - 11 :  00', 'minggu', '09 : 00 - ', '', '', 'sudah', NULL, '2', 'c81e728d9d4c2f636f067f89cc14862c', '0000-00-00 00:00:00', '2022-12-29 03:03:42');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id` int(10) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(200) NOT NULL,
  `hak_akses` varchar(20) NOT NULL,
  `last_login` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`id`, `nama`, `username`, `password`, `hak_akses`, `last_login`) VALUES
(1, 'Admin123', 'admin', '0192023a7bbd73250516f069df18b500', 'Admin', '2022-12-23 10:27:45');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_jadwal_kursus`
--
ALTER TABLE `tbl_jadwal_kursus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_siswa`
--
ALTER TABLE `tbl_siswa`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_jadwal_kursus`
--
ALTER TABLE `tbl_jadwal_kursus`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `tbl_siswa`
--
ALTER TABLE `tbl_siswa`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
