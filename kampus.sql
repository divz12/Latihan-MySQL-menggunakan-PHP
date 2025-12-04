-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 04, 2025 at 01:40 PM
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
-- Database: `kampus`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_dosen`
--

CREATE TABLE `tbl_dosen` (
  `nidn` int(11) NOT NULL,
  `nama` varchar(120) DEFAULT NULL,
  `prodi` varchar(120) DEFAULT NULL,
  `email` char(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `tbl_dosen`
--

INSERT INTO `tbl_dosen` (`nidn`, `nama`, `prodi`, `email`) VALUES
(11001, 'Dr. Andi Wijaya', 'Informatika', 'andi@campus.ac.id'),
(11002, 'Nur Aisyah, M.Kom', 'Sistem Informasi', 'aisyah@campus.ac.id'),
(11003, 'Bambang Setiawan, M.T', 'Informatika', 'bambang@campus.ac.id'),
(11004, 'Rizky Fajar, M.Kom', 'Informatika', 'rizkyf@campus.ac.id'),
(11005, 'Diah Kusuma, M.T', 'Sistem Informasi', 'diah@campus.ac.id'),
(11006, 'M. Gilang Pratama, M.Kom', 'Informatika', 'gilang@campus.ac.id'),
(11007, 'Dewi Handayani, M.Kom', 'Sistem Informasi', 'handayani@campus.ac.id'),
(11008, 'Hendra Saputra, M.T', 'Informatika', 'hendra@campus.ac.id'),
(11009, 'Tasya Nurhaliza, M.Kom', 'Sistem Informasi', 'tasya@campus.ac.id'),
(11010, 'Yusuf Maulana, M.Kom', 'Informatika', 'yusuf@campus.ac.id');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_mahasiswa`
--

CREATE TABLE `tbl_mahasiswa` (
  `nim` int(11) NOT NULL,
  `nama` varchar(120) DEFAULT NULL,
  `prodi` varchar(120) DEFAULT NULL,
  `angkatan` int(11) DEFAULT NULL,
  `email` char(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `tbl_mahasiswa`
--

INSERT INTO `tbl_mahasiswa` (`nim`, `nama`, `prodi`, `angkatan`, `email`) VALUES
(2023001, 'Aulia Rahma', 'Informatika', 2023, 'aulia@campus.ac.id'),
(2023002, 'Budi Santoso', 'Sistem Informasi', 2023, 'budi@campus.ac.id'),
(2023003, 'Citra Lestari', 'Informatika', 2022, 'citra@campus.ac.id'),
(2023004, 'Dewi Permata', 'Informatika', 2023, 'dewi@campus.ac.id'),
(2023005, 'Eko Prasetyo', 'Sistem Informasi', 2022, 'eko@campus.ac.id'),
(2023006, 'Fajar Ramadhan', 'Informatika', 2024, 'fajar@campus.ac.id'),
(2023007, 'Gita Rosalia', 'Sistem Informasi', 2024, 'gita@campus.ac.id'),
(2023008, 'Hafiz Alfarizi', 'Informatika', 2023, 'hafiz@campus.ac.id'),
(2023009, 'Intan Maharani', 'Sistem Informasi', 2022, 'intan@campus.ac.id'),
(2023010, 'Joko Wibowo', 'Informatika', 2024, 'joko@campus.ac.id');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_matkul`
--

CREATE TABLE `tbl_matkul` (
  `kodeMatkul` varchar(10) NOT NULL,
  `namaMatkul` varchar(120) DEFAULT NULL,
  `sks` int(11) DEFAULT NULL,
  `nidn` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `tbl_matkul`
--

INSERT INTO `tbl_matkul` (`kodeMatkul`, `namaMatkul`, `sks`, `nidn`) VALUES
('IF101', 'Algoritma dan Struktur Data', 3, 11001),
('IF102', 'Basis Data', 3, 11002),
('IF103', 'Pemrograman Web', 3, 11003),
('IF104', 'Jaringan Komputer', 3, 11004),
('IF105', 'Sistem Operasi', 3, 11005),
('IF106', 'Rekayasa Perangkat Lunak', 3, 11006),
('IF107', 'Kecerdasan Buatan', 3, 11007),
('IF108', 'Pemrograman Mobile', 3, 11008),
('IF109', 'Keamanan Informasi', 3, 11009),
('IF110', 'Data Mining', 3, 11010);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_nilai`
--

CREATE TABLE `tbl_nilai` (
  `id_nilai` int(11) NOT NULL,
  `nilai` double DEFAULT NULL,
  `nilaiHuruf` char(1) DEFAULT NULL,
  `kodeMatkul` varchar(10) DEFAULT NULL,
  `nim` int(11) DEFAULT NULL,
  `nidn` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `tbl_nilai`
--

INSERT INTO `tbl_nilai` (`id_nilai`, `nilai`, `nilaiHuruf`, `kodeMatkul`, `nim`, `nidn`) VALUES
(1, 85, 'A', 'IF101', 2023001, 11001),
(2, 78, 'B', 'IF102', 2023001, 11002),
(3, 90, 'A', 'IF103', 2023002, 11003),
(4, 72, 'C', 'IF104', 2023003, 11004),
(5, 88, 'A', 'IF105', 2023004, 11005),
(6, 81, 'A', 'IF106', 2023005, 11006),
(7, 69, 'D', 'IF107', 2023006, 11007),
(8, 95, 'A', 'IF108', 2023007, 11008),
(9, 77, 'B', 'IF109', 2023008, 11009),
(10, 84, 'A', 'IF110', 2023009, 11010),
(11, 92, 'A', 'IF101', 2023010, 11001),
(12, 73, 'C', 'IF102', 2023004, 11002),
(13, 88, 'A', 'IF103', 2023005, 11003),
(14, 65, 'D', 'IF104', 2023006, 11004),
(15, 80, 'B', 'IF105', 2023007, 11005);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_dosen`
--
ALTER TABLE `tbl_dosen`
  ADD PRIMARY KEY (`nidn`) USING BTREE;

--
-- Indexes for table `tbl_mahasiswa`
--
ALTER TABLE `tbl_mahasiswa`
  ADD PRIMARY KEY (`nim`) USING BTREE;

--
-- Indexes for table `tbl_matkul`
--
ALTER TABLE `tbl_matkul`
  ADD PRIMARY KEY (`kodeMatkul`) USING BTREE,
  ADD KEY `nidn` (`nidn`) USING BTREE;

--
-- Indexes for table `tbl_nilai`
--
ALTER TABLE `tbl_nilai`
  ADD PRIMARY KEY (`id_nilai`) USING BTREE,
  ADD KEY `nim` (`nim`) USING BTREE,
  ADD KEY `nidn` (`nidn`) USING BTREE,
  ADD KEY `kodeMatkul` (`kodeMatkul`) USING BTREE;

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_nilai`
--
ALTER TABLE `tbl_nilai`
  MODIFY `id_nilai` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tbl_nilai`
--
ALTER TABLE `tbl_nilai`
  ADD CONSTRAINT `tbl_nilai_ibfk_1` FOREIGN KEY (`nim`) REFERENCES `tbl_mahasiswa` (`nim`),
  ADD CONSTRAINT `tbl_nilai_ibfk_2` FOREIGN KEY (`nidn`) REFERENCES `tbl_dosen` (`nidn`),
  ADD CONSTRAINT `tbl_nilai_ibfk_3` FOREIGN KEY (`kodeMatkul`) REFERENCES `tbl_matkul` (`kodeMatkul`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
