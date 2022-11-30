-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 30, 2022 at 06:02 AM
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
-- Table structure for table `item`
--

CREATE TABLE `item` (
  `id_item` int(11) NOT NULL,
  `id_stock` int(11) NOT NULL,
  `item_name` varchar(100) NOT NULL,
  `jumlah_item` int(11) NOT NULL,
  `satuan` varchar(50) NOT NULL
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
(9, 'mobil'),
(10, 'motor'),
(11, 'becak');

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
(4, 'L1234B', '9', '', '5', 300, 0),
(5, 'L2345B', 'becak', '5', '5', 300, 0),
(6, 'L2345B', 'becak', '5', '5', 300, 0),
(7, 'L 1890 AB', 'becak', 'RRS', 'SSR', 700, 0),
(8, 'L ASBASB NS', 'mobil', 'SAS', 'SAS', 100, 0),
(9, 'L ASBASB NS', 'mobil', 'SAS', 'SAS', 100, 0),
(10, 'L 5555 A', 'motor', 'mikel', 'mikel', 9000, 0),
(11, 'L 5555 A', 'motor', 'mikel', 'mikel', 9000, 0),
(12, 'L 1890 AB', 'becak', '', 'SAS', 200, 0),
(13, 'L1234B', 'mobil', '', 'SSR', 501, 0),
(14, 'L1234B', '9', '7', '8', 500, 0),
(15, 'L1234B', '9', '7', '8', 500, 0),
(16, 'L1234B', '9', '7', '8', 500, 0),
(17, 'L1234B', '9', '7', '8', 500, 0),
(18, 'L1234B', '9', '7', '8', 500, 0),
(19, 'L1234B', '9', '7', '8', 500, 0),
(20, 'L1234B', '9', '7', '8', 500, 0),
(21, 'L1234B', '9', '7', '8', 500, 0),
(22, 'L1234B', '9', '7', '8', 500, 0),
(23, 'L1234B', '9', '7', '8', 500, 0),
(24, 'L 5555 A', '10', '8', '6', 7000, 0),
(25, 'L 5555 A', '8', '5', '5', 2, 0),
(26, 'L 1234 NS', '10', '', '6', 101, 0);

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
(5, 'SAS'),
(6, 'mikel'),
(7, 'RRS'),
(8, 'SSR');

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
(1, 'ME', 'me'),
(2, 'ME', 'mu'),
(3, 'ME', 'me'),
(4, 'ME', '123'),
(6, 'MI', 'Muat Internal');

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
(2, 0, 'p1', 'p2', 'p3', 'p4', 'p5', 'p6', 'p7'),
(3, 3, 'p1', 'p2', 'p3', 'p4', 'p5', 'p6', 'p7'),
(4, 7, 'p1', 'p2', 'p3', 'p4', 'p5', 'p6', 'p7');

-- --------------------------------------------------------

--
-- Table structure for table `muat_eksternal`
--

CREATE TABLE `muat_eksternal` (
  `id_muat` int(20) NOT NULL,
  `tanggal_muat` date NOT NULL,
  `nopol` varchar(50) NOT NULL,
  `nama_supir` varchar(100) NOT NULL,
  `coy` varchar(20) NOT NULL,
  `armada` varchar(20) NOT NULL,
  `staff` varchar(100) NOT NULL,
  `operator` varchar(100) NOT NULL,
  `helper` varchar(100) NOT NULL,
  `lapor` time NOT NULL,
  `mulai` time NOT NULL,
  `selesai` time NOT NULL,
  `keterangan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `muat_eksternal`
--

INSERT INTO `muat_eksternal` (`id_muat`, `tanggal_muat`, `nopol`, `nama_supir`, `coy`, `armada`, `staff`, `operator`, `helper`, `lapor`, `mulai`, `selesai`, `keterangan`) VALUES
(1, '1970-01-01', '', '', '', '', 'Jo', 'Nathan', 'Oj', '00:00:00', '00:00:00', '00:00:00', 'Testing\r\n '),
(2, '1970-01-01', '', '', '', '', 'Jo', 'Nathan', 'Oj', '00:00:00', '00:00:00', '00:00:00', ' Test'),
(3, '1970-01-01', '', '', '', '', '', '', '', '00:00:00', '00:00:00', '00:00:00', ' '),
(4, '2022-10-29', '', '', '', '', '', '', '', '00:00:00', '00:00:00', '00:00:00', ' '),
(5, '2022-10-29', '', '', '', '', 'Jo', 'Nathan', 'Oj', '00:00:00', '00:00:00', '00:00:00', ' Test'),
(6, '2022-10-29', '', '', '', '', '', '', '', '00:00:00', '00:00:00', '00:00:00', ' '),
(7, '0000-00-00', '$nopolmuat', '$supir', '$lokasi', '$jenisarmadamuat', '$staff', '$operator', '$helper', '00:00:00', '00:00:00', '00:00:00', '$keterangan'),
(8, '0000-00-00', '$nopolmuat', '$supir', '$lokasi', '$jenisarmadamuat', '$staff', '$operator', '$helper', '00:00:00', '00:00:00', '00:00:00', '$keterangan'),
(9, '2022-10-29', '', '', '', '', '', '', '', '00:00:00', '00:00:00', '00:00:00', ' '),
(10, '2022-10-29', '', '', '', '', '', '', '', '00:00:00', '00:00:00', '00:00:00', ' '),
(11, '2022-10-29', '', '', '', '', '', '', '', '00:00:00', '00:00:00', '00:00:00', ' '),
(12, '2022-10-29', '', '', '', '', '', '', '', '00:00:00', '00:00:00', '00:00:00', ' '),
(13, '2022-10-29', '', '', '', '', '', '', '', '00:00:00', '00:00:00', '00:00:00', ' '),
(14, '2022-10-31', '', '', '', '', '', '', '', '00:00:00', '00:00:00', '00:00:00', ' '),
(15, '2022-11-01', '', '', '', '', '', '', '', '00:00:00', '00:00:00', '00:00:00', ' '),
(16, '2022-11-01', '', '', '', '', '', '', '', '00:00:00', '00:00:00', '00:00:00', ' '),
(17, '0000-00-00', '', '', '', '', '', '', '', '00:00:00', '00:00:00', '00:00:00', ''),
(18, '0000-00-00', '$nopolmuat', '$supir', '$lokasi', '$jenisarmadamuat', '$staff', '$operator', '$helper', '00:00:00', '00:00:00', '00:00:00', '$keterangan'),
(19, '2022-11-01', '123', '123', '5', '8', '', '', '', '00:00:00', '00:00:00', '00:00:00', ' '),
(20, '0000-00-00', '', '', '', '', '', '', '', '00:00:00', '00:00:00', '00:00:00', ''),
(21, '0000-00-00', '', '', '', '', '', '', '', '00:00:00', '00:00:00', '00:00:00', ''),
(22, '0000-00-00', '', '', '', '', '', '', '', '00:00:00', '00:00:00', '00:00:00', ''),
(23, '0000-00-00', '', '', '', '', '', '', '', '00:00:00', '00:00:00', '00:00:00', ''),
(24, '0000-00-00', '', '', '', '', '', '', '', '00:00:00', '00:00:00', '00:00:00', ''),
(25, '2022-11-01', '', '', '5', '8', '', '', '', '00:00:00', '00:00:00', '00:00:00', ' '),
(26, '0000-00-00', '', '', '', '', '', '', '', '00:00:00', '00:00:00', '00:00:00', ''),
(27, '2022-11-01', 'asdasd', '', '5', '8', '', '', '', '00:00:00', '00:00:00', '00:00:00', ' '),
(28, '2022-11-01', 'test', '', '5', '8', '', '', '', '00:00:00', '00:00:00', '00:00:00', ' '),
(29, '2022-11-01', '123', '', '', '', '', '', '', '00:00:00', '00:00:00', '00:00:00', ''),
(30, '2022-11-01', '123', '', '5', '8', '', '', '', '00:00:00', '00:00:00', '00:00:00', ' '),
(31, '2022-11-01', '', '', '', '', '', '', '', '00:00:00', '00:00:00', '00:00:00', ''),
(32, '2022-11-01', '', '', '5', '8', '', '', '', '00:00:00', '00:00:00', '00:00:00', ' '),
(33, '2022-11-01', 'test', '', '5', '8', '', '', '', '00:00:00', '00:00:00', '00:00:00', ' '),
(34, '2022-11-01', 'test', '', '', '', '', '', '', '00:00:00', '00:00:00', '00:00:00', ''),
(35, '2022-11-01', 'test', '', '5', '8', '', '', '', '00:00:00', '00:00:00', '00:00:00', ' '),
(36, '0000-00-00', '', '', '', '', '', '', '', '00:00:00', '00:00:00', '00:00:00', ''),
(37, '0000-00-00', '$nopolmuat', '$supir', '$lokasi', '$jenisarmadamuat', '$staff', '$operator', '$helper', '00:00:00', '00:00:00', '00:00:00', '$keterangan'),
(38, '2022-11-01', 'L 5555 A', 'Jo', '5', '8', '', '', '', '00:00:00', '00:00:00', '00:00:00', ' '),
(39, '2022-11-01', 'L 5555 A', 'Jo', '5', '8', '', '', '', '00:00:00', '00:00:00', '00:00:00', ' '),
(40, '0000-00-00', '', '', '', '', '', '', '', '00:00:00', '00:00:00', '00:00:00', ''),
(41, '0000-00-00', '', '', '', '', '', '', '', '00:00:00', '00:00:00', '00:00:00', ''),
(42, '0000-00-00', '', '', '', '', '', '', '', '00:00:00', '00:00:00', '00:00:00', ''),
(43, '0000-00-00', '', '', '', '', '', '', '', '00:00:00', '00:00:00', '00:00:00', ''),
(44, '0000-00-00', '', '', '', '', '', '', '', '00:00:00', '00:00:00', '00:00:00', ''),
(45, '2022-11-24', 'L 1829 A', 'Jo', '7', '10', 'JO', 'OJ', 'NATHAN', '00:00:00', '00:00:00', '00:00:00', ' MASUK'),
(46, '2022-11-24', '', '', '5', '9', '', '', '', '00:00:00', '00:00:00', '00:00:00', ' '),
(47, '0000-00-00', '', '', '', '', '', '', '', '00:00:00', '00:00:00', '00:00:00', ''),
(48, '0000-00-00', '', '', '', '', '', '', '', '00:00:00', '00:00:00', '00:00:00', ''),
(49, '0000-00-00', '', '', '', '', '', '', '', '00:00:00', '00:00:00', '00:00:00', ''),
(50, '0000-00-00', '', '', '', '', '', '', '', '00:00:00', '00:00:00', '00:00:00', ''),
(51, '0000-00-00', '', '', '', '', '', '', '', '00:00:00', '00:00:00', '00:00:00', '');

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `no_staff` int(10) NOT NULL,
  `id_staff` varchar(10) NOT NULL,
  `nama_staff` varchar(100) NOT NULL,
  `jabatan` varchar(50) NOT NULL,
  `status` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`no_staff`, `id_staff`, `nama_staff`, `jabatan`, `status`) VALUES
(1, 'N01', 'Jonathan', 'ITE', 0);

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
  `id_sj` int(20) NOT NULL,
  `nomor_sj` varchar(50) NOT NULL,
  `id_item` int(20) NOT NULL,
  `nama_item` varchar(150) NOT NULL,
  `quantity` int(20) NOT NULL,
  `tonase` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `level` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `username`, `password`, `nama`, `level`) VALUES
(1, 'admin', 'admin', 'Jonathan', '1');

-- --------------------------------------------------------

--
-- Table structure for table `waktu_stock`
--

CREATE TABLE `waktu_stock` (
  `id_waktu` int(11) NOT NULL,
  `id_item` int(11) NOT NULL,
  `css` date NOT NULL,
  `cso` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`no_staff`);

--
-- Indexes for table `stock`
--
ALTER TABLE `stock`
  ADD PRIMARY KEY (`id_item`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- Indexes for table `waktu_stock`
--
ALTER TABLE `waktu_stock`
  ADD PRIMARY KEY (`id_waktu`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `jenis_armada`
--
ALTER TABLE `jenis_armada`
  MODIFY `id_armada` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `master_armada_internal`
--
ALTER TABLE `master_armada_internal`
  MODIFY `nomor_armada_internal` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `master_company`
--
ALTER TABLE `master_company`
  MODIFY `id_company` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `master_jenis_bongkar_muat`
--
ALTER TABLE `master_jenis_bongkar_muat`
  MODIFY `no_jenis_bongkar_muat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `master_lokasi`
--
ALTER TABLE `master_lokasi`
  MODIFY `id_lokasi` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `muat_eksternal`
--
ALTER TABLE `muat_eksternal`
  MODIFY `id_muat` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT for table `staff`
--
ALTER TABLE `staff`
  MODIFY `no_staff` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

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

--
-- AUTO_INCREMENT for table `waktu_stock`
--
ALTER TABLE `waktu_stock`
  MODIFY `id_waktu` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
