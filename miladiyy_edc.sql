-- phpMyAdmin SQL Dump
-- version 4.9.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Mar 23, 2020 at 08:25 AM
-- Server version: 5.7.29
-- PHP Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `miladiyy_edc`
--

-- --------------------------------------------------------

--
-- Table structure for table `ci_sessions`
--

CREATE TABLE `ci_sessions` (
  `session_id` varchar(40) NOT NULL DEFAULT '0',
  `ip_address` varchar(16) NOT NULL DEFAULT '0',
  `user_agent` varchar(120) NOT NULL,
  `last_activity` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `user_data` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ci_sessions`
--

INSERT INTO `ci_sessions` (`session_id`, `ip_address`, `user_agent`, `last_activity`, `user_data`) VALUES
('52a220b446da880f8670eeba7f0b79a0', '110.138.203.117', 'Mozilla/5.0 (Linux; Android 9; RMX1805) AppleWebKi', 1584765132, 'a:2:{s:9:\"user_data\";s:0:\"\";s:16:\"flash:old:sukses\";s:20:\"Anda berhasil logout\";}'),
('6a9a5fb3d3ff4b54d2528984f0c97662', '110.138.203.117', 'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/53', 1584767814, 'a:2:{s:9:\"user_data\";s:0:\"\";s:16:\"flash:old:sukses\";s:20:\"Anda berhasil logout\";}'),
('73df0ca0cad1ff960eb6c819b64b406a', '110.138.203.117', 'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/53', 1584766430, 'a:8:{s:9:\"user_data\";s:0:\"\";s:8:\"username\";s:10:\"yudigopels\";s:4:\"nama\";s:10:\"yudigopels\";s:8:\"id_login\";s:23:\"18656098665e75997b200ca\";s:5:\"stlog\";s:1:\"1\";s:4:\"stat\";s:1:\"1\";s:2:\"id\";s:1:\"1\";s:4:\"foto\";s:0:\"\";}'),
('bc96b8f6edd147f527e0d86a6fd07248', '36.82.99.72', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (K', 1584948664, 'a:8:{s:9:\"user_data\";s:0:\"\";s:8:\"username\";s:5:\"kirom\";s:4:\"nama\";s:7:\"M Kirom\";s:8:\"id_login\";s:22:\"8896400185e7865c4b7b7e\";s:5:\"stlog\";s:1:\"1\";s:4:\"stat\";s:1:\"0\";s:2:\"id\";s:1:\"3\";s:4:\"foto\";s:0:\"\";}'),
('e49cef5a5c8b97945b5dd37a7c2b1baa', '202.80.214.230', 'Mozilla/5.0 (Linux; Android 9; RMX1805) AppleWebKi', 1584821602, 'a:2:{s:9:\"user_data\";s:0:\"\";s:16:\"flash:old:sukses\";s:20:\"Anda berhasil logout\";}');

-- --------------------------------------------------------

--
-- Table structure for table `data_kota`
--

CREATE TABLE `data_kota` (
  `id` int(11) NOT NULL,
  `id_prov` int(11) NOT NULL,
  `nama_kota` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_kota`
--

INSERT INTO `data_kota` (`id`, `id_prov`, `nama_kota`) VALUES
(1, 1, 'Banda Aceh'),
(3, 1, 'Kabupaten Aceh Barat');

-- --------------------------------------------------------

--
-- Table structure for table `data_merchant`
--

CREATE TABLE `data_merchant` (
  `id` int(11) NOT NULL,
  `nama_merc` varchar(100) NOT NULL,
  `alamat` varchar(200) NOT NULL,
  `id_kota` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_merchant`
--

INSERT INTO `data_merchant` (`id`, `nama_merc`, `alamat`, `id_kota`) VALUES
(1, 'TOKO MAS BINTANG ASIA ', 'Jl. Contoh', 1),
(2, 'PASAR SWALAYAN ADA', 'Jl. Panglima Sudirman', 3);

-- --------------------------------------------------------

--
-- Table structure for table `data_prov`
--

CREATE TABLE `data_prov` (
  `id` int(11) NOT NULL,
  `namaprov` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_prov`
--

INSERT INTO `data_prov` (`id`, `namaprov`) VALUES
(1, 'Nangroe Aceh Darussalam');

-- --------------------------------------------------------

--
-- Table structure for table `data_user`
--

CREATE TABLE `data_user` (
  `id` int(11) NOT NULL,
  `nama_petugas` varchar(255) CHARACTER SET latin1 NOT NULL,
  `username` varchar(32) CHARACTER SET latin1 NOT NULL,
  `password` varchar(200) CHARACTER SET latin1 NOT NULL,
  `status` int(11) NOT NULL,
  `foto` varchar(200) CHARACTER SET latin1 NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `data_user`
--

INSERT INTO `data_user` (`id`, `nama_petugas`, `username`, `password`, `status`, `foto`) VALUES
(1, 'yudigopels', 'yudigopels', '6d0b6748cd5416f7d982803e996bda8adf7535569a44eff811f0cb172d04db31a881c11d1b694e6ed69354e3b3d807b34518f9070e568889a7a9ebcadfe2e5f3GHI16QiMi6LyaLRqee5GXNykc1+GQAjyKk7WmnQuaFU=', 1, ''),
(2, 'Firman', 'firman', '0a5037463592455597e0c4003b71f43aa78302955b59b7c86e6c1aba053953b05467531d4eec8a86f5fbc15ab16718aa1fba1a34fec2262997ec52c4fde2ba9fCcetEQ9AyOIxH1O/0VhgynNvE9dEyKoTAD7kL7zDshQ=', 2, ''),
(3, 'M Kirom', 'kirom', '894e93d390411d4e5ddcbbb40cc17f8323c11ab6ea10db1bec01cbc85d6b905669a24394a500b3d925864998a57229576b62f5fab16bdd093eb3acc665277c68QOuAMH0g9QWkrTWqO4WS8Gan/BcimGjW3hcq5Y/YD6g=', 0, ''),
(4, 'User Demo', 'demo', '5db20ddd674c99c71b72059e57a8775a3740ba050212a9d95eed3b0c31aa2490341df11141cdc3c80e22e20cf93dc4b4d5497259c591c0e692040e2c8c1248998x8jX2HgSMZAZz9LbGgtaOaexms8kir8tqZ1TZNhzYE=', 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `logs`
--

CREATE TABLE `logs` (
  `id` int(11) NOT NULL,
  `bank_id` int(11) NOT NULL,
  `method` varchar(100) NOT NULL,
  `status_req` int(11) DEFAULT NULL,
  `tgl` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `master_edc`
--

CREATE TABLE `master_edc` (
  `id` int(11) NOT NULL,
  `merk` varchar(50) NOT NULL,
  `tipe` varchar(50) NOT NULL,
  `part_number` varchar(25) NOT NULL,
  `sn_awal` varchar(11) NOT NULL,
  `sn_update` varchar(11) NOT NULL,
  `crm` varchar(25) NOT NULL,
  `tid` char(10) NOT NULL,
  `ket2` varchar(25) NOT NULL,
  `warna` varchar(25) NOT NULL,
  `no_po` varchar(50) NOT NULL,
  `no_pks` varchar(50) NOT NULL,
  `status` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `master_edc`
--

INSERT INTO `master_edc` (`id`, `merk`, `tipe`, `part_number`, `sn_awal`, `sn_update`, `crm`, `tid`, `ket2`, `warna`, `no_po`, `no_pks`, `status`) VALUES
(1, 'Verifone', 'Verifone VX 520G Mobile', 'M252-779-13-EU1-2', '281-381-009', '281-381-009', 'Ada di CRM', '69371818', 'NO SWAP', 'Spesial Color', '1612/PO/TFS.PFA.SS1/2012', '0025/SPP/TIB.SPC.SS1/2019 ', 'Sewa'),
(2, 'Verifone', 'Verifone VX 520G Counter Top', 'M252-779-13-EU1-2', '281-383-035', '281-383-035', 'Ada di CRM', '69272713', 'NO SWAP', 'Special Colour', '1612/PO/TFS.PFA.SS1/2012', '0025/SPP/TIB.SPC.SS1/2019 ', 'Sewa');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ci_sessions`
--
ALTER TABLE `ci_sessions`
  ADD PRIMARY KEY (`session_id`),
  ADD KEY `last_activity_idx` (`last_activity`);

--
-- Indexes for table `data_kota`
--
ALTER TABLE `data_kota`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `data_merchant`
--
ALTER TABLE `data_merchant`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `data_prov`
--
ALTER TABLE `data_prov`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `data_user`
--
ALTER TABLE `data_user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `logs`
--
ALTER TABLE `logs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `master_edc`
--
ALTER TABLE `master_edc`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `data_kota`
--
ALTER TABLE `data_kota`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `data_merchant`
--
ALTER TABLE `data_merchant`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `data_prov`
--
ALTER TABLE `data_prov`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `data_user`
--
ALTER TABLE `data_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `logs`
--
ALTER TABLE `logs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `master_edc`
--
ALTER TABLE `master_edc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
