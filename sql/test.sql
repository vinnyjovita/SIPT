-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 21, 2022 at 01:48 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `test`
--

-- --------------------------------------------------------

--
-- Table structure for table `krs`
--

CREATE TABLE `krs` (
  `kode_krs` varchar(15) NOT NULL,
  `StudentID` varchar(10) NOT NULL,
  `kode_term` varchar(4) NOT NULL,
  `keterangan` text NOT NULL,
  `id_krs` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `krs`
--

INSERT INTO `krs` (`kode_krs`, `StudentID`, `kode_term`, `keterangan`, `id_krs`) VALUES
('100000001', '100000001', '1212', '', 1),
('100000002', '100000001', '1213', '', 2),
('100000003', '100000002', '1212', '', 3),
('100000004', '100000002', '1213', '', 4);

-- --------------------------------------------------------

--
-- Table structure for table `krs_detail`
--

CREATE TABLE `krs_detail` (
  `kode_krsdetail` varchar(15) NOT NULL,
  `kode_krs` varchar(15) NOT NULL,
  `kode_matakuliah` varchar(6) NOT NULL,
  `id_krs_detail` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `krs_detail`
--

INSERT INTO `krs_detail` (`kode_krsdetail`, `kode_krs`, `kode_matakuliah`, `id_krs_detail`) VALUES
('10000000101', '100000001', '2793', 1),
('10000000102', '100000001', '2765', 2),
('10000000201', '100000002', '2759', 3),
('10000000202', '100000002', '2550', 4),
('10000000301', '100000003', '2538', 5),
('10000000302', '100000003', '2510', 6);

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `StudentID` varchar(10) NOT NULL,
  `Nama` varchar(50) NOT NULL,
  `Jurusan` varchar(30) NOT NULL,
  `Tahun_masuk` varchar(4) NOT NULL,
  `id_mahasiswa` int(11) NOT NULL,
  `term` varchar(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mahasiswa`
--

INSERT INTO `mahasiswa` (`StudentID`, `Nama`, `Jurusan`, `Tahun_masuk`, `id_mahasiswa`, `term`) VALUES
('0308120004', 'Vinny Jovita', 'Sistem Informasi', '2020', 1, '1212');

-- --------------------------------------------------------

--
-- Table structure for table `matakuliah`
--

CREATE TABLE `matakuliah` (
  `kode_matakuliah` varchar(6) NOT NULL,
  `nama_matakuliah` varchar(50) NOT NULL,
  `sks` int(11) NOT NULL,
  `id_matakuliah` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `matakuliah`
--

INSERT INTO `matakuliah` (`kode_matakuliah`, `nama_matakuliah`, `sks`, `id_matakuliah`) VALUES
('2793', 'AUDIT & KONTROL SISTEM INFORMASI', 4, 1),
('2765', 'PEMROGRAMAN APLIKASI BISNIS', 4, 2),
('2759', 'PEMASARAN DIGITAL', 3, 3),
('2550', 'SISTEM INFORMASI PERUSAHAAN', 3, 4),
('2538', 'MANAJEMEN STRATEGI PERUSAHAAN', 3, 5),
('2510', 'DASAR MANAJEMEN KEUANGAN PERUSAHAAN', 3, 6);

-- --------------------------------------------------------

--
-- Table structure for table `term`
--

CREATE TABLE `term` (
  `kode_term` varchar(4) NOT NULL,
  `tahun_ajar` varchar(4) NOT NULL,
  `semester` varchar(10) NOT NULL,
  `keterangan` text NOT NULL,
  `id_term` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `term`
--

INSERT INTO `term` (`kode_term`, `tahun_ajar`, `semester`, `keterangan`, `id_term`) VALUES
('1212', '2020', 'GANJIL', '', 1),
('1213', '2020', 'GENAP', '', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `krs`
--
ALTER TABLE `krs`
  ADD PRIMARY KEY (`id_krs`);

--
-- Indexes for table `krs_detail`
--
ALTER TABLE `krs_detail`
  ADD PRIMARY KEY (`id_krs_detail`);

--
-- Indexes for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`id_mahasiswa`);

--
-- Indexes for table `matakuliah`
--
ALTER TABLE `matakuliah`
  ADD PRIMARY KEY (`id_matakuliah`);

--
-- Indexes for table `term`
--
ALTER TABLE `term`
  ADD PRIMARY KEY (`id_term`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `krs`
--
ALTER TABLE `krs`
  MODIFY `id_krs` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `krs_detail`
--
ALTER TABLE `krs_detail`
  MODIFY `id_krs_detail` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  MODIFY `id_mahasiswa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `matakuliah`
--
ALTER TABLE `matakuliah`
  MODIFY `id_matakuliah` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `term`
--
ALTER TABLE `term`
  MODIFY `id_term` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
