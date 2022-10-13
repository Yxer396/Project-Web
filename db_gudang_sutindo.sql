-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 13, 2022 at 06:58 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_gudang_sutindo`
--

-- --------------------------------------------------------

--
-- Table structure for table `detail_surat_jalan`
--

CREATE TABLE `detail_surat_jalan` (
  `no_surat_jalan` varchar(60) NOT NULL,
  `id_item` int(25) NOT NULL,
  `jumlah` int(50) NOT NULL,
  `tonase` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `jenis_armada`
--

CREATE TABLE `jenis_armada` (
  `id_armada` int(10) NOT NULL,
  `jenis_kendaraan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `jenis_armada`
--

INSERT INTO `jenis_armada` (`id_armada`, `jenis_kendaraan`) VALUES
(7, 'motor'),
(8, 'becak');

-- --------------------------------------------------------

--
-- Table structure for table `master_armada_internal`
--

CREATE TABLE `master_armada_internal` (
  `nomor_armada_internal` int(11) NOT NULL,
  `nopol` varchar(20) NOT NULL,
  `jenis_kendaraan` varchar(50) NOT NULL,
  `company_name` varchar(10) NOT NULL,
  `pemilik` varchar(10) NOT NULL,
  `kapasitas` int(11) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `master_armada_internal`
--

INSERT INTO `master_armada_internal` (`nomor_armada_internal`, `nopol`, `jenis_kendaraan`, `company_name`, `pemilik`, `kapasitas`, `status`) VALUES
(1, 'L 5555 A', '7', '5', '3', 200, 0),
(2, 'L 5555 A', '7', '5', '3', 200, 0),
(3, 'L1234B', '7', '6', '5', 300, 0),
(4, 'L1234B', '7', '6', '5', 300, 0);

-- --------------------------------------------------------

--
-- Table structure for table `master_company`
--

CREATE TABLE `master_company` (
  `id_company` int(11) NOT NULL,
  `company_name` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `master_company`
--

INSERT INTO `master_company` (`id_company`, `company_name`) VALUES
(3, 'BAS'),
(4, 'BAS'),
(5, 'SAS'),
(6, 'mikel');

-- --------------------------------------------------------

--
-- Table structure for table `master_jenis_bongkar_muat`
--

CREATE TABLE `master_jenis_bongkar_muat` (
  `no_jenis_bongkar_muat` int(11) NOT NULL,
  `id` varchar(10) NOT NULL,
  `activity` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `master_jenis_bongkar_muat`
--

INSERT INTO `master_jenis_bongkar_muat` (`no_jenis_bongkar_muat`, `id`, `activity`) VALUES
(1, 'ME', ''),
(2, 'ME', ''),
(3, 'ME', 'me'),
(4, 'ME', '123');

-- --------------------------------------------------------

--
-- Table structure for table `master_lokasi`
--

CREATE TABLE `master_lokasi` (
  `id_lokasi` int(20) NOT NULL,
  `id_company` int(11) NOT NULL,
  `field1` varchar(20) NOT NULL,
  `field2` varchar(20) NOT NULL,
  `field3` varchar(20) NOT NULL,
  `field4` varchar(20) NOT NULL,
  `field5` varchar(20) NOT NULL,
  `field6` varchar(20) NOT NULL,
  `field7` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `master_lokasi`
--

INSERT INTO `master_lokasi` (`id_lokasi`, `id_company`, `field1`, `field2`, `field3`, `field4`, `field5`, `field6`, `field7`) VALUES
(1, 0, 'p1', 'p2', 'p3', 'p4', 'p5', 'p6', 'p7'),
(2, 0, 'p1', 'p2', 'p3', 'p4', 'p5', 'p6', 'p7'),
(3, 3, 'p1', 'p2', 'p3', 'p4', 'p5', 'p6', 'p7');

-- --------------------------------------------------------

--
-- Table structure for table `muat_eksternal`
--

CREATE TABLE `muat_eksternal` (
  `id_muat` int(20) NOT NULL,
  `tanggal_muat` date NOT NULL,
  `nopol` varchar(50) NOT NULL,
  `nama_supir` varchar(100) NOT NULL,
  `staff` varchar(100) NOT NULL,
  `operator` varchar(100) NOT NULL,
  `helper` varchar(100) NOT NULL,
  `lapor` time NOT NULL,
  `mulai` time NOT NULL,
  `selesai` time NOT NULL,
  `keterangan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `stock`
--

CREATE TABLE `stock` (
  `id_item` int(20) NOT NULL,
  `item_code` varchar(20) NOT NULL,
  `item_name` varchar(50) NOT NULL,
  `id_item_group` int(20) NOT NULL,
  `product` varchar(50) NOT NULL,
  `sub_product` varchar(50) NOT NULL,
  `grade` varchar(10) NOT NULL,
  `status` varchar(20) NOT NULL,
  `main_uom` varchar(10) NOT NULL,
  `sec_uom` varchar(10) NOT NULL,
  `is_cutting` varchar(20) NOT NULL,
  `weight` int(11) NOT NULL,
  `tolerance` int(11) NOT NULL,
  `create_time` timestamp NOT NULL DEFAULT current_timestamp(),
  `update_time` int(11) NOT NULL,
  `description` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `stock`
--

INSERT INTO `stock` (`id_item`, `item_code`, `item_name`, `id_item_group`, `product`, `sub_product`, `grade`, `status`, `main_uom`, `sec_uom`, `is_cutting`, `weight`, `tolerance`, `create_time`, `update_time`, `description`) VALUES
(1, 'AAAA', 'Test', 1, 'test', 'test', 'D', '', 'test', 'test', 'yes', 100, 100, '2022-10-01 04:27:39', 0, 'testing'),
(2, 'AAAA', 'Test', 3, 'test', 'test', 'A', '', 'test', 'test', 'no', 100, 100, '2022-10-01 04:36:30', 0, 'testing'),
(3, 'AAAA', 'Test', -1, 'test', 'test', 'A', '', 'test', 'test', 'no', 100, 100, '2022-10-01 04:37:05', 0, 'testing'),
(4, 'BBBB', 'Jo', 8, 'lo', 'halo', 'D', '', 'oj', 'oj', 'yes', 11, 12, '2022-10-05 03:25:32', 0, 'test data'),
(5, 'BBBB', 'item', 1, 'item', 'item', 'D', '', 'item1', 'item2', 'no', 10, 3, '2022-10-11 14:00:44', 0, 'item baru');

-- --------------------------------------------------------

--
-- Table structure for table `surat_jalan`
--

CREATE TABLE `surat_jalan` (
  `no_surat_jalan` varchar(60) NOT NULL,
  `tanggal` date NOT NULL,
  `nopol` varchar(15) NOT NULL,
  `supir` varchar(100) NOT NULL,
  `lokasi` varchar(10) NOT NULL,
  `armada` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `username`, `password`) VALUES
(1, 'admin', '12345');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `jenis_armada`
--
ALTER TABLE `jenis_armada`
  ADD PRIMARY KEY (`id_armada`);

--
-- Indexes for table `master_armada_internal`
--
ALTER TABLE `master_armada_internal`
  ADD PRIMARY KEY (`nomor_armada_internal`);

--
-- Indexes for table `master_company`
--
ALTER TABLE `master_company`
  ADD PRIMARY KEY (`id_company`);

--
-- Indexes for table `master_jenis_bongkar_muat`
--
ALTER TABLE `master_jenis_bongkar_muat`
  ADD PRIMARY KEY (`no_jenis_bongkar_muat`);

--
-- Indexes for table `master_lokasi`
--
ALTER TABLE `master_lokasi`
  ADD PRIMARY KEY (`id_lokasi`);

--
-- Indexes for table `muat_eksternal`
--
ALTER TABLE `muat_eksternal`
  ADD PRIMARY KEY (`id_muat`);

--
-- Indexes for table `stock`
--
ALTER TABLE `stock`
  ADD PRIMARY KEY (`id_item`);

--
-- Indexes for table `surat_jalan`
--
ALTER TABLE `surat_jalan`
  ADD PRIMARY KEY (`no_surat_jalan`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `jenis_armada`
--
ALTER TABLE `jenis_armada`
  MODIFY `id_armada` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `master_armada_internal`
--
ALTER TABLE `master_armada_internal`
  MODIFY `nomor_armada_internal` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `master_company`
--
ALTER TABLE `master_company`
  MODIFY `id_company` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `master_jenis_bongkar_muat`
--
ALTER TABLE `master_jenis_bongkar_muat`
  MODIFY `no_jenis_bongkar_muat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `master_lokasi`
--
ALTER TABLE `master_lokasi`
  MODIFY `id_lokasi` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `muat_eksternal`
--
ALTER TABLE `muat_eksternal`
  MODIFY `id_muat` int(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `stock`
--
ALTER TABLE `stock`
  MODIFY `id_item` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
