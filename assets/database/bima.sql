-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 18, 2018 at 06:52 PM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bima`
--

-- --------------------------------------------------------

--
-- Table structure for table `agama`
--

CREATE TABLE `agama` (
  `id` int(11) NOT NULL,
  `agama` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `agama`
--

INSERT INTO `agama` (`id`, `agama`) VALUES
(1, 'ISLAM'),
(2, 'KRISTEN'),
(3, 'HINDU'),
(4, 'BUDHA'),
(5, 'KATOLIK'),
(6, 'KONGHUCU');

-- --------------------------------------------------------

--
-- Table structure for table `gender`
--

CREATE TABLE `gender` (
  `id` int(11) NOT NULL,
  `gender` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gender`
--

INSERT INTO `gender` (`id`, `gender`) VALUES
(1, 'Laki - Laki'),
(2, 'Perempuan');

-- --------------------------------------------------------

--
-- Table structure for table `level`
--

CREATE TABLE `level` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `level`
--

INSERT INTO `level` (`id`, `name`) VALUES
(3, 'magang'),
(4, 'pegawai'),
(5, 'penduduk');

-- --------------------------------------------------------

--
-- Table structure for table `sts_perkawinan`
--

CREATE TABLE `sts_perkawinan` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sts_perkawinan`
--

INSERT INTO `sts_perkawinan` (`id`, `nama`) VALUES
(1, 'Belum Kawin'),
(2, 'Sudah Kawin');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `nik` varchar(30) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `gender` int(11) NOT NULL,
  `tmp_lahir` varchar(50) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `agama` int(11) NOT NULL,
  `sts_perkawinan` int(11) NOT NULL,
  `pekerjaan` varchar(100) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `phone` bigint(20) NOT NULL,
  `notif` varchar(255) NOT NULL,
  `level` int(11) NOT NULL,
  `status` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`nik`, `name`, `email`, `password`, `gender`, `tmp_lahir`, `tgl_lahir`, `agama`, `sts_perkawinan`, `pekerjaan`, `alamat`, `phone`, `notif`, `level`, `status`) VALUES
('1506021903000001', 'Muchtar Ludfi', 'muchtar@gmail.com', '$2y$10$cZF/mtt9ZdoWJhtfJLyfbeL4njHbDhwX8pgyAd1V9nOoATYGPSXbe', 1, 'Ponorogo', '1999-04-19', 1, 1, 'Pelajar/Mahasiswa', 'Jl. Tirtotejo 20 RT.02/RW.02 Cokromenggalan Ponorogo', 89345787378, 'KTP Anda sudah jadi ', 5, 'active'),
('35002091905700001', 'Muhamad Khoiri', 'muhamad.k@gmail.com', '$2y$10$oV6d1e91JRa5y8pTpWKDPODVpdj5zDc/aQZVKwN2g66RiZ2cx8W2a', 1, 'Ponorogo', '1970-03-20', 1, 1, 'Karyawan', 'Dukuh Jetis II RT.04/RW.01 Jetis, Ponorogo', 89355643583, 'Maaf KTP Anda BELUM JADI!!', 5, 'active'),
('35002091905700006', 'septian herlambang', 'septian@gmail.com', '$2y$10$roY.Ou5laMZUD6kWZI0oZO1r7q0ZUHeZQ/XkohV75MYlDZFrnv.FW', 1, 'Ponorogo', '1999-01-10', 1, 1, 'Swasta', 'jl mawar mangkujayan ponorogo', 85677432123, '', 3, 'deleted'),
('35002091905700007', 'Moch Sukron Rizky Fatkhurohmman', 'kikidev6@gmail.com', '$2y$10$ho3qogLEH9W0O0t.hCnHr.td6Vcn48Dz7cns0hm2evmrFTdmQ71U6', 1, 'Ponorogo', '1999-06-01', 1, 1, 'Pelajar/Mahasiswa', 'Jl. Sekarjagad 19a cokromenggalan Ponorogo', 89646346324, '', 4, 'active'),
('35002091905700045', 'bagio', 'bagbag@gmail.com', '$2y$10$c/X0drxmVrCSVKX/hVkc9ONTB6SL.Zy29r/8jOgczQJN.CAV.xSbS', 1, 'Purwantoro', '2000-10-25', 3, 2, 'Kawen', 'Jl. Menuju Neraka Ds. Kawen Kec. Maksiat', 89344225346, '', 5, 'active'),
('3502010107000001', 'Dody Eka Mahendra', 'dody@gmail.com', '$2y$10$uqoee15MkPRwpCN9krWIV.ofajx4kKT4FEuO8r2JPJrMXRUQqvR2K', 1, 'Ponorogo', '2000-10-21', 1, 1, 'Pelajar/Mahasiswa', 'Asem Legi RT.02/RW.01 Plancungan Slahung', 89457882735, '', 3, 'active'),
('3502091905700009', 'burhan ujib', 'burhan@gmail.com', '$2y$10$VuJh.N2F/7jYyKTyHXcTs.DV.kIt8nPYDkGgqO8/1JXauM7NQ2G9m', 1, 'Ponorogo', '2000-11-12', 1, 1, 'Pelajar/Mahasiswa', 'jl.asam mawar niten ponorogo', 81235476509, '', 5, 'active'),
('3502092006010001', 'Debby Dimas Shanasta Khoirian Putra', 'debby@gmail.com', '$2y$10$X0O48RgkgGbUSY4j9IHOFO7zsOTKR.KrlKNI5IpYumB4RfoeKDrUe', 1, 'Ponorogo', '2000-04-23', 1, 1, 'Pelajar/Mahasiswa', 'Dukuh Jetis II RT.04/RW.01 Jetis, Ponorogo', 8945463454, '', 3, 'active'),
('3502171408990003', 'Deva Gusmarty', 'deva@gmail.com', '$2y$10$qhkr9N4Ofvl5HPcRCf124e0xZpyIqIwUmH8YHu0PYwKMsR3WkvBFe', 1, 'Ponorogo', '2000-12-11', 1, 1, 'Pelajar/Mahasiswa', 'Jl. Letjs. Parman 171 Keniten, Ponorogo', 89456345253, '', 3, 'active'),
('3502173008000001', 'Adam Mustofa', 'adam@gmail.com', '$2y$10$ApyvhcRCpGKbVOcLmBdnkeliogZOpKq.zibOyAZ4BbH0LNuZX8/9C', 1, 'Ponorogo', '2000-06-24', 1, 1, 'Pelajar/Mahasiswa', 'Jl. Mangga 29 RT.01/RW.01 Beduri Ponorogo', 89345778368, '', 5, 'active'),
('3507220607000001', 'Bima Windu Aji', 'bimawindu67@gmail.com', '$2y$10$ZIUlf46HRp3B4GtFRldgqO38hW5YaJpHAunweecnhoSBNrG7Fjigu', 1, 'Ponorogo', '2001-08-25', 1, 1, 'Pelajar/Mahasiswa', 'Jl. pahlawan no.63 Ponorogo', 81011081987, '', 3, 'active');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `agama`
--
ALTER TABLE `agama`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gender`
--
ALTER TABLE `gender`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `level`
--
ALTER TABLE `level`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sts_perkawinan`
--
ALTER TABLE `sts_perkawinan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`nik`),
  ADD KEY `gender` (`gender`),
  ADD KEY `level` (`level`),
  ADD KEY `sts_perkawinan` (`sts_perkawinan`),
  ADD KEY `pekerjaan` (`pekerjaan`),
  ADD KEY `user_ibfk_3` (`agama`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `agama`
--
ALTER TABLE `agama`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `gender`
--
ALTER TABLE `gender`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `level`
--
ALTER TABLE `level`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `sts_perkawinan`
--
ALTER TABLE `sts_perkawinan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `user_ibfk_1` FOREIGN KEY (`gender`) REFERENCES `gender` (`id`),
  ADD CONSTRAINT `user_ibfk_2` FOREIGN KEY (`level`) REFERENCES `level` (`id`),
  ADD CONSTRAINT `user_ibfk_3` FOREIGN KEY (`agama`) REFERENCES `agama` (`id`),
  ADD CONSTRAINT `user_ibfk_4` FOREIGN KEY (`sts_perkawinan`) REFERENCES `sts_perkawinan` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
