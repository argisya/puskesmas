-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 21, 2025 at 09:35 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.1.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `puskesmas`
--

-- --------------------------------------------------------

--
-- Table structure for table `dokter`
--

CREATE TABLE `dokter` (
  `nip` int(5) NOT NULL,
  `nama_dokter` varchar(255) NOT NULL,
  `poli` varchar(255) NOT NULL,
  `jadwal` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `dokter`
--

INSERT INTO `dokter` (`nip`, `nama_dokter`, `poli`, `jadwal`) VALUES
(10032, 'dr. Fira Salma, Sp.A.', 'anak', 'kamis'),
(20032, 'dr. Andika Prasetya, S.Ked.', 'umum', 'senin'),
(30032, 'drg. Amelia Siregar, S.KG.', 'gigi', 'senin'),
(40032, 'dr. Amelia Kartika, Sp.M.', 'mata', 'jumat');

-- --------------------------------------------------------

--
-- Table structure for table `pasien`
--

CREATE TABLE `pasien` (
  `nama_pasien` varchar(50) DEFAULT NULL,
  `no_rek_medis` varchar(20) NOT NULL,
  `poli` varchar(20) DEFAULT NULL,
  `tgl` date DEFAULT NULL,
  `layanan` varchar(50) DEFAULT NULL,
  `klmpk_pasien` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pasien`
--

INSERT INTO `pasien` (`nama_pasien`, `no_rek_medis`, `poli`, `tgl`, `layanan`, `klmpk_pasien`) VALUES
('bbb', '98022101', 'Umum', '2025-05-20', 'Rawat Inap', 'Asuransi'),
('Agus', '98023020', 'Umum', '2025-05-20', 'Rawat Jalan', 'Pribadi'),
('Zaki', '98023054', 'Umum', '2025-04-15', 'Medical Check Up', 'Asuransi'),
('aaa', '98023144', 'Umum', '2025-04-10', 'Medical Check Up', 'Asuransi'),
('Beni', '98023155', 'Umum', '2025-03-25', 'Rawat Inap', 'Pribadi'),
('Asep', '98023177', 'Mata', '2025-03-10', 'Rawat Jalan', 'BPJS'),
('Ucup', '98023183', 'Anak', '2025-02-20', 'Rawat Jalan', 'Pribadi');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `username` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `nama`, `username`, `password`) VALUES
(1, 'Administrator', 'admin', '0192023a7bbd73250516f069df18b500'),
(2, 'a', 'asdfghjkl', '12345'),
(3, 'user', 'user', 'user123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dokter`
--
ALTER TABLE `dokter`
  ADD PRIMARY KEY (`nip`);

--
-- Indexes for table `pasien`
--
ALTER TABLE `pasien`
  ADD PRIMARY KEY (`no_rek_medis`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
