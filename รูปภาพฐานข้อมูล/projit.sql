-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 21, 2018 at 08:56 AM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `projit`
--

-- --------------------------------------------------------

--
-- Table structure for table `company`
--

CREATE TABLE `company` (
  `id_company` int(10) UNSIGNED ZEROFILL NOT NULL,
  `name_company` varchar(100) NOT NULL,
  `domicile_company` varchar(200) NOT NULL,
  `phon_company` varchar(50) NOT NULL,
  `fax_company` varchar(50) NOT NULL,
  `email_company` varchar(50) NOT NULL,
  `id_STay` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `company`
--

INSERT INTO `company` (`id_company`, `name_company`, `domicile_company`, `phon_company`, `fax_company`, `email_company`, `id_STay`) VALUES
(0000000008, 'บริษัท อลูเสติคอน', '97/8 หมู่ที่ 9 ต.หนองหนาม อ.เมือง จ.ลำพูน', '099-555-8888', '22-56-5555', 'jantip4107@hotmail.co.th', 1),
(0000000009, 'บริษัท FinDer', 'บ้านแป้น 97/8 หมู่ที่ 9 ต.หนองหนาม อ.เมือง จ.ลำพูน', '068-846-7856', '22-56-5555', 'suddanpai@gmail.com', 2),
(0000000010, 'ชุ้ยการช้าง', '88/8 หมู่ที่ 9 ต.หนองหนาม อ.เมือง จ.ลำพูน', '099-555-8888', '22-56-5555', 'jantip4107@hotmail.co.th', 1),
(0000000011, 'แรดออฟจิด', 'บ้านแป้น 97/8 หมู่ที่ 9 ต.หนองหนาม อ.เมือง จ.ลำพูน', '099-555-8888', '22-56-5555', 'suddanpai@gmail.com', 2);

-- --------------------------------------------------------

--
-- Table structure for table `dura`
--

CREATE TABLE `dura` (
  `id` int(6) UNSIGNED NOT NULL,
  `id_karu` varchar(50) NOT NULL,
  `name_karu` varchar(100) NOT NULL,
  `pos_karu` varchar(100) NOT NULL,
  `price_karu` int(10) NOT NULL,
  `member_karu` int(10) NOT NULL,
  `ID_STay` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `dura`
--

INSERT INTO `dura` (`id`, `id_karu`, `name_karu`, `pos_karu`, `price_karu`, `member_karu`, `ID_STay`) VALUES
(8, '1234564564', 'เก้าอี้', 'ห้องประชุม', 1200, 3, 2),
(9, '1234564564', 'โต๊ะ', 'อองอ๋อ1', 4500, 5, 2);

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE `member` (
  `id_Mb` int(4) UNSIGNED ZEROFILL NOT NULL,
  `username_Mb` varchar(20) NOT NULL,
  `password_Mb` varchar(20) NOT NULL,
  `firstname_Mb` varchar(50) NOT NULL,
  `lastname_Mb` varchar(50) NOT NULL,
  `mobile_Mb` varchar(10) NOT NULL,
  `status_Mb` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`id_Mb`, `username_Mb`, `password_Mb`, `firstname_Mb`, `lastname_Mb`, `mobile_Mb`, `status_Mb`) VALUES
(0001, 'admin', '123456', 'นันทวิกา', 'สุทธิพันธ์', '', 'เจ้าหน้าที่'),
(0002, 'user1', '123456', 'ศิญาพัฒน์', 'เสนจันทร์ฒิไชย', '', 'อาจารย์'),
(0003, 'user4', '123456', 'จักรกฤษ', 'แปงเมืองด', '', 'นักศึกษา'),
(0004, 'user5', '123456', 'สุรพงษ์', 'บุญกอบ', '0956823581', 'นักศึกษา'),
(0005, 'user2', '123456', 'ณิชานภาพร', 'จงกะสิกิจ', '', 'อาจารย์'),
(0006, 'user3', '123456', 'ศักดิ์ชัย', 'ศีรมากรณ์', '', 'อาจารย์'),
(0007, 'user6', '123456', 'เจริญ', 'จันทร์ทิพย์', '', 'นักศึกษา');

-- --------------------------------------------------------

--
-- Table structure for table `op`
--

CREATE TABLE `op` (
  `id` int(6) UNSIGNED ZEROFILL NOT NULL,
  `name` varchar(50) NOT NULL,
  `pos` varchar(100) NOT NULL,
  `price` int(6) NOT NULL,
  `number_op` int(6) NOT NULL,
  `name_company` varchar(100) NOT NULL,
  `domicile_company` varchar(200) NOT NULL,
  `phon_company` varchar(50) NOT NULL,
  `fax_company` varchar(50) NOT NULL,
  `email_company` varchar(50) NOT NULL,
  `look` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `op`
--

INSERT INTO `op` (`id`, `name`, `pos`, `price`, `number_op`, `name_company`, `domicile_company`, `phon_company`, `fax_company`, `email_company`, `look`) VALUES
(000003, 'ดินสอ2B', 'ตู้สาขา', 8, 30, 'บริษัท อลูเสติคอน', '97/8 หมู่ที่ 9 ต.หนองหนาม อ.เมือง จ.ลำพูน', '099-555-8888', '22-56-5555', 'jantip4107@hotmail.co.th', 'แท่ง'),
(000004, 'แม็ค', 'ตู้สาขา', 15, 5, 'บริษัท อลูเสติคอน', '97/8 หมู่ที่ 9 ต.หนองหนาม อ.เมือง จ.ลำพูน', '099-555-8888', '33-656-5555', 'jantip4107@hotmail.co.th', 'อัน'),
(000006, 'ชองใส่แผ่น CD', 'ตู้สาขา', 40, 50, 'บริษัท อลูเสติคอน', '97/8 หมู่ที่ 9 ต.หนองหนาม อ.เมือง จ.ลำพูน', '099-555-8888', '023-566-5555', 'jantip4107@hotmail.co.th', 'แผ่น');

-- --------------------------------------------------------

--
-- Table structure for table `op_dura_company`
--

CREATE TABLE `op_dura_company` (
  `id` int(4) NOT NULL,
  `Name` varchar(100) CHARACTER SET utf32 NOT NULL,
  `number` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `op_dura_company`
--

INSERT INTO `op_dura_company` (`id`, `Name`, `number`) VALUES
(1, 'วัสดุอุปกรณ์', 1),
(2, 'ครุภัณฑ์', 2),
(3, 'บริษัท/ห้าง/ร้าน', 3);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `company`
--
ALTER TABLE `company`
  ADD PRIMARY KEY (`id_company`);

--
-- Indexes for table `dura`
--
ALTER TABLE `dura`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`id_Mb`);

--
-- Indexes for table `op`
--
ALTER TABLE `op`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `op_dura_company`
--
ALTER TABLE `op_dura_company`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `company`
--
ALTER TABLE `company`
  MODIFY `id_company` int(10) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `dura`
--
ALTER TABLE `dura`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `member`
--
ALTER TABLE `member`
  MODIFY `id_Mb` int(4) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `op`
--
ALTER TABLE `op`
  MODIFY `id` int(6) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `op_dura_company`
--
ALTER TABLE `op_dura_company`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
