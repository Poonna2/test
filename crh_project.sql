-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Feb 03, 2024 at 08:39 AM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `crh_project`
--

-- --------------------------------------------------------

--
-- Table structure for table `caddress`
--

CREATE TABLE `caddress` (
  `Cid` char(10) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL,
  `AN` text CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci,
  `AG` text CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci,
  `AAlley` text CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci,
  `ATumbon` text CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci,
  `AAumper` text CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci,
  `AP` text CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci,
  `AZip` text CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `caddress`
--

INSERT INTO `caddress` (`Cid`, `AN`, `AG`, `AAlley`, `ATumbon`, `AAumper`, `AP`, `AZip`) VALUES
('1', '', '', '', '', '', '', ''),
('2', '', '', '', '', '', '', ''),
('3', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `clogin`
--

CREATE TABLE `clogin` (
  `Cid` char(10) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL,
  `CLoname` varchar(10) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL,
  `CGmail` varchar(50) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL,
  `Cpass` varchar(100) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `clogin`
--

INSERT INTO `clogin` (`Cid`, `CLoname`, `CGmail`, `Cpass`) VALUES
('1', 'poon', 'poon@gmail.com', '5f4dcc3b5aa765d61d8327deb882cf99'),
('2', 'ww', 'poon2@gmail.com', 'ad57484016654da87125db86f4227ea3'),
('3', 'two', 'poon3@gmail.com', '4621e7de262af2e13bb586950a94c53c');

-- --------------------------------------------------------

--
-- Table structure for table `ctelephone`
--

CREATE TABLE `ctelephone` (
  `Cid` char(10) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL,
  `CTelephone` varchar(10) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `ctelephone`
--

INSERT INTO `ctelephone` (`Cid`, `CTelephone`) VALUES
('1', '0987654321'),
('2', 'ww'),
('3', '0987654322');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `Cid` char(10) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL,
  `Cprefix` varchar(10) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL,
  `CFname` varchar(40) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL,
  `CLname` varchar(40) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`Cid`, `Cprefix`, `CFname`, `CLname`) VALUES
('1', 'นาย', 'สืบสกุล', 'สุขสำอางค์'),
('2', 'ww', 'ww', 'ww'),
('3', 'นาย', 'สอง', 'นะ');

-- --------------------------------------------------------

--
-- Table structure for table `program`
--

CREATE TABLE `program` (
  `Pid` float NOT NULL,
  `Cid` char(10) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL,
  `Tid` char(10) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL,
  `Serial_Number` varchar(20) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL,
  `Repair_Date` text CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL,
  `Status` varchar(20) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci DEFAULT 'ยังไม่เสร็จ',
  `Return_Date` text CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci,
  `Cost` int DEFAULT NULL,
  `Note` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `program`
--

INSERT INTO `program` (`Pid`, `Cid`, `Tid`, `Serial_Number`, `Repair_Date`, `Status`, `Return_Date`, `Cost`, `Note`) VALUES
(1, '1', '1', '55555', '2024-02-03 04:22:09', 'เสร็จแล้ว', '2024-02-03 06:59:20', 300, 'ลงวินโดว์'),
(2, '2', '1', 'wwww', '2024-02-03 04:42:49', 'เสร็จแล้ว', '2024-02-03 06:59:00', 300, 'ลงวินโดว์'),
(3, '1', '2', '55555', '2024-02-03 07:27:47', 'ยังไม่เสร็จ', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `technician`
--

CREATE TABLE `technician` (
  `Tid` char(10) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL,
  `Tprefix` varchar(10) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL,
  `TFname` varchar(40) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL,
  `TLname` varchar(40) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL,
  `status` varchar(12) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL DEFAULT 'พร้อม'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `technician`
--

INSERT INTO `technician` (`Tid`, `Tprefix`, `TFname`, `TLname`, `status`) VALUES
('1', 'นาย', 'สม', 'ปอง', 'ยังไม่พร้อม'),
('2', 'นาง', 'สง', 'สาร', 'พร้อม'),
('3', 'นาย', 'สูน', 'เด', 'พร้อม');

-- --------------------------------------------------------

--
-- Table structure for table `tlogin`
--

CREATE TABLE `tlogin` (
  `Tid` char(10) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL,
  `TLoname` varchar(10) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL,
  `TGmail` varchar(50) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL,
  `Tpass` varchar(100) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `tlogin`
--

INSERT INTO `tlogin` (`Tid`, `TLoname`, `TGmail`, `Tpass`) VALUES
('1', 'som', 'sompong@gmail.com', '5f4dcc3b5aa765d61d8327deb882cf99'),
('2', 'song', 'song@gmail.com', '5f4dcc3b5aa765d61d8327deb882cf99'),
('3', 'soon', 'soon@gmail.com', '5f4dcc3b5aa765d61d8327deb882cf99');

-- --------------------------------------------------------

--
-- Table structure for table `ttelephone`
--

CREATE TABLE `ttelephone` (
  `Tid` char(10) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL,
  `TTelephone` varchar(10) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `ttelephone`
--

INSERT INTO `ttelephone` (`Tid`, `TTelephone`) VALUES
('1', '0987412365'),
('2', '0963258741'),
('3', '0951847623');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `caddress`
--
ALTER TABLE `caddress`
  ADD PRIMARY KEY (`Cid`);

--
-- Indexes for table `clogin`
--
ALTER TABLE `clogin`
  ADD PRIMARY KEY (`Cid`,`CLoname`,`CGmail`);

--
-- Indexes for table `ctelephone`
--
ALTER TABLE `ctelephone`
  ADD PRIMARY KEY (`Cid`,`CTelephone`),
  ADD UNIQUE KEY `Cid` (`Cid`),
  ADD UNIQUE KEY `Cid_2` (`Cid`,`CTelephone`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`Cid`);

--
-- Indexes for table `program`
--
ALTER TABLE `program`
  ADD PRIMARY KEY (`Pid`),
  ADD KEY `Tid` (`Tid`) USING BTREE,
  ADD KEY `Cid_3` (`Cid`,`Tid`) USING BTREE;

--
-- Indexes for table `technician`
--
ALTER TABLE `technician`
  ADD PRIMARY KEY (`Tid`);

--
-- Indexes for table `tlogin`
--
ALTER TABLE `tlogin`
  ADD PRIMARY KEY (`Tid`);

--
-- Indexes for table `ttelephone`
--
ALTER TABLE `ttelephone`
  ADD PRIMARY KEY (`Tid`,`TTelephone`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `caddress`
--
ALTER TABLE `caddress`
  ADD CONSTRAINT `caddress_ibfk_1` FOREIGN KEY (`Cid`) REFERENCES `customer` (`Cid`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Constraints for table `ctelephone`
--
ALTER TABLE `ctelephone`
  ADD CONSTRAINT `ctelephone_ibfk_1` FOREIGN KEY (`Cid`) REFERENCES `customer` (`Cid`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Constraints for table `customer`
--
ALTER TABLE `customer`
  ADD CONSTRAINT `customer_ibfk_1` FOREIGN KEY (`Cid`) REFERENCES `clogin` (`Cid`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Constraints for table `program`
--
ALTER TABLE `program`
  ADD CONSTRAINT `program_ibfk_1` FOREIGN KEY (`Cid`) REFERENCES `customer` (`Cid`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `program_ibfk_2` FOREIGN KEY (`Tid`) REFERENCES `technician` (`Tid`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Constraints for table `technician`
--
ALTER TABLE `technician`
  ADD CONSTRAINT `technician_ibfk_1` FOREIGN KEY (`Tid`) REFERENCES `tlogin` (`Tid`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Constraints for table `ttelephone`
--
ALTER TABLE `ttelephone`
  ADD CONSTRAINT `ttelephone_ibfk_1` FOREIGN KEY (`Tid`) REFERENCES `technician` (`Tid`) ON DELETE RESTRICT ON UPDATE RESTRICT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
