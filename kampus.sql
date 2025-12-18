-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 18, 2025 at 09:29 AM
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
(406107801, 'RICAK AGUS SETIAWAN, M.S.I', 'TEKNOLOGI REKAYASA PERANGKAT LUNAK', 'ricak@gmail.com'),
(406107802, 'HETI MULYANI S.Kom., M.Kom', 'TEKNOLOGI REKAYASA PERANGKAT LUNAK', 'heti@gmail.com'),
(406107803, 'HALIMIL FATHI, S.Kom., M.Kom', 'TEKNOLOGI REKAYASA PERANGKAT LUNAK', 'halimil@gmail.com'),
(406107804, 'MUSAWARMAN, S. Kom., M.M.S.I', 'TEKNOLOGI REKAYASA PERANGKAT LUNAK', 'musa@gmail.com'),
(406107805, 'SUKRINA HERMAN, S.Kom.,M.Kom.', 'TEKNOLOGI REKAYASA PERANGKAT LUNAK', 'rina@gmail.com'),
(406107806, 'WIDYA ANDAYANI RAHAYU, M.Pd', 'TEKNOLOGI REKAYASA PERANGKAT LUNAK', 'widya@gmail.com'),
(406107807, 'SALMAN, M.Pd.', 'TEKNOLOGI REKAYASA PERANGKAT LUNAK', 'salman@gmail.com');

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
(20404001, 'FIKRI RAMDANI', 'TEKNOLOGI REKAYASA PERANGKAT LUNAK', 2024, 'fikri@gmail.com'),
(20404004, 'SALMAN ALFARIDZI', 'TEKNOLOGI REKAYASA PERANGKAT LUNAK', 2024, 'salman@gmail.com'),
(20404009, 'MUHAMMAD GILANG RAMADAN', 'TEKNOLOGI REKAYASA PERANGKAT LUNAK', 2024, 'gilangg@gmail.com'),
(20404010, 'HELGI NUR ALAMSYAH', 'TEKNOLOGI REKAYASA PERANGKAT LUNAK', 2024, 'helgi@gmail.com'),
(20404011, 'KHAIKAL IKHSANUDDIN', 'TEKNOLOGI REKAYASA PERANGKAT LUNAK', 2024, 'khaikal@gmail.com'),
(20404013, 'MUHAMMADD SARWAN ALBARIZY', 'TEKNOLOGI REKAYASA PERANGKAT LUNAK', 2023, 'albar@gmail.com'),
(20404019, 'ZAHRA AYU TRISNA', 'TEKNOLOGI REKAYASA PERANGKAT LUNAK', 2024, 'zahra@gmail.com'),
(20404020, 'REZA ASRIANO MAULANA', 'TEKNOLOGI REKAYASA PERANGKAT LUNAK', 2024, 'reza@gmail.com'),
(20404021, 'SATRIO ILHAM SAPUTRA', 'TEKNOLOGI REKAYASA PERANGKAT LUNAK', 2024, 'satrio@gmail.com'),
(20404023, 'SUBANI MAULANA', 'TEKNOLOGI REKAYASA PERANGKAT LUNAK', 2024, 'subani@gmail.com'),
(20404025, 'DIVA ORYZA SATIVA', 'TEKNOLOGI REKAYASA PERANGKAT LUNAK', 2024, 'diva@gmail.com');

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
('MK001', 'KALKULUS', 2, 406107802),
('MK002', 'ALJABAR', 2, 406107802),
('MK003', 'BASIS DATA', 3, 406107805),
('MK004', 'AGAMA', 2, 406107807),
('MK005', 'PEMOGRAMAN WEB 2', 4, 406107801),
('MK006', 'UI/UX', 4, 406107804),
('MK007', 'SISTEM OPERASI', 4, 406107803),
('MK008', 'PEMOGRAMAN VISUAL', 4, 406107803),
('MK009', 'BAHASA INGGRIS', 2, 406107806),
('MK010', 'PEMOGRAMAN BERIONTASI OBJECT', 4, 406107804);

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
(1, 88, 'B', 'MK008', 20404001, 406107803),
(2, 75, 'B', 'MK001', 20404004, 406107802),
(3, 90, 'A', 'MK010', 20404010, 406107804),
(4, 95, 'A', 'MK005', 20404011, 406107801),
(5, 80, 'B', 'MK006', 20404013, 406107804),
(6, 88, 'B', 'MK003', 20404019, 406107805),
(7, 98, 'A', 'MK007', 20404020, 406107803),
(8, 69, 'C', 'MK002', 20404021, 406107802),
(9, 59, 'D', 'MK004', 20404023, 406107807),
(11, 100, 'A', 'MK006', 20404025, 406107804);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id` int(11) NOT NULL,
  `username` int(11) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`id`, `username`, `password`, `role`) VALUES
(1, 406107801, '12345', 'dosen'),
(2, 406107802, '12345', 'dosen'),
(3, 406107803, '12345', 'dosen'),
(4, 406107804, '12345', 'dosen'),
(5, 406107805, '12345', 'dosen'),
(6, 406107806, '12345', 'dosen'),
(7, 406107807, '12345', 'dosen'),
(8, 406107808, '12345', 'dosen'),
(9, 406107809, '12345', 'dosen'),
(10, 202404001, '12345', 'mhs'),
(11, 202404002, '12345', 'mhs'),
(12, 202404004, '12345', 'mhs'),
(13, 202404005, '12345', 'mhs'),
(14, 202404007, '12345', 'mhs'),
(15, 202404008, '12345', 'mhs'),
(16, 202404009, '12345', 'mhs'),
(17, 202404010, '12345', 'mhs'),
(18, 202404011, '12345', 'mhs'),
(19, 202404012, '12345', 'mhs'),
(20, 202404013, '12345', 'mhs'),
(21, 202404014, '12345', 'mhs'),
(22, 202404016, '12345', 'mhs'),
(23, 202404017, '12345', 'mhs'),
(24, 202404018, '12345', 'mhs'),
(25, 202404019, '12345', 'mhs'),
(26, 202404020, '12345', 'mhs'),
(27, 202404021, '12345', 'mhs'),
(28, 202404022, '12345', 'mhs'),
(29, 202404023, '12345', 'mhs'),
(30, 202404024, '12345', 'mhs'),
(31, 202404025, '12345', 'mhs');

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
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_nilai`
--
ALTER TABLE `tbl_nilai`
  MODIFY `id_nilai` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

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
