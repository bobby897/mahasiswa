-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 01, 2021 at 12:04 PM
-- Server version: 10.1.35-MariaDB
-- PHP Version: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `latihan`
--

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `id` int(11) NOT NULL,
  `Nama` varchar(100) NOT NULL,
  `Nim` char(9) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Jurusan` varchar(100) NOT NULL,
  `Gambar` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mahasiswa`
--

INSERT INTO `mahasiswa` (`id`, `Nama`, `Nim`, `Email`, `Jurusan`, `Gambar`, `password`) VALUES
(1, 'dinosa', '123456789', 'Matematika', 'dino@gmail.com', '', 'dinosa'),
(2, 'dina', '987654321', 'Kimll', 'dina@gmial.com', '', 'dina'),
(3, 'eni', '333222111', 'Ipa', 'eni@gmail.om', '', 'eni');

-- --------------------------------------------------------

--
-- Table structure for table `m_makul`
--

CREATE TABLE `m_makul` (
  `id` int(10) NOT NULL,
  `nama_makul` varchar(100) NOT NULL,
  `jml_sks` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `m_makul`
--

INSERT INTO `m_makul` (`id`, `nama_makul`, `jml_sks`) VALUES
(1, 'Matematika', 3),
(2, 'Kimia', 3),
(3, 'Bhs.Inggris', 2),
(4, 'Bhs.Indonesia', 2),
(5, 'Pemrograman Dasar', 4),
(6, 'Pemrograman lanjut', 4),
(7, 'Rekayasa Perangkat Lunak', 5),
(8, 'Rekayasa Manajemen Kebutuhan', 3);

-- --------------------------------------------------------

--
-- Table structure for table `t_makul_mahasiswa`
--

CREATE TABLE `t_makul_mahasiswa` (
  `id` int(10) NOT NULL,
  `id_makul` int(100) NOT NULL,
  `nim` int(9) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_makul_mahasiswa`
--

INSERT INTO `t_makul_mahasiswa` (`id`, `id_makul`, `nim`) VALUES
(1, 0, 123456789);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `m_makul`
--
ALTER TABLE `m_makul`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `t_makul_mahasiswa`
--
ALTER TABLE `t_makul_mahasiswa`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `m_makul`
--
ALTER TABLE `m_makul`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `t_makul_mahasiswa`
--
ALTER TABLE `t_makul_mahasiswa`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
