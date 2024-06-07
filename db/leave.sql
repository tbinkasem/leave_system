-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 07, 2024 at 11:56 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.4.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `leave`
--

-- --------------------------------------------------------

--
-- Table structure for table `address`
--

CREATE TABLE `address` (
  `ID` int(11) NOT NULL,
  `homeID` varchar(7) DEFAULT NULL,
  `street` varchar(100) DEFAULT NULL,
  `soi` varchar(100) DEFAULT NULL,
  `tambol` varchar(100) DEFAULT NULL,
  `amphue` varchar(100) DEFAULT NULL,
  `province` varchar(100) DEFAULT NULL,
  `phone` varchar(12) DEFAULT NULL,
  `UserName` varchar(13) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `address`
--

INSERT INTO `address` (`ID`, `homeID`, `street`, `soi`, `tambol`, `amphue`, `province`, `phone`, `UserName`) VALUES
(1, '10/128', 'หนองจิก', '-', 'สะบารัง', 'เมือง', 'ปัตตานี', '084-633-0706', '3969900025845'),
(6, '18', '8', '-', 'สะบาแปด', 'แปด', 'ปัตตานี', '081-818-8216', '1219900025845'),
(7, '10/97', 'หนองจิก', '-', 'สะบารัง', 'เมือง', 'ปัตตานี', '095-649-7749', '3949900243761');

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `passwd` varchar(40) NOT NULL,
  `fullname` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `email`, `passwd`, `fullname`) VALUES
(1, 'admin@test.com', '7c222fb2927d828af22f592134e8932480637c0d', 'หัวหน้างานบุคลากร');

-- --------------------------------------------------------

--
-- Table structure for table `data`
--

CREATE TABLE `data` (
  `Id` int(11) NOT NULL,
  `title` varchar(50) NOT NULL,
  `FullName` varchar(100) NOT NULL,
  `Position` varchar(50) NOT NULL,
  `mCaseNow` varchar(50) NOT NULL,
  `Case1Now` varchar(200) NOT NULL,
  `Case2Now` varchar(200) NOT NULL,
  `sdayNow` varchar(20) NOT NULL,
  `ldayNow` varchar(20) NOT NULL,
  `sumdayNow` varchar(2) NOT NULL,
  `homeId` varchar(7) NOT NULL,
  `street` varchar(100) NOT NULL,
  `soi` varchar(100) NOT NULL,
  `tambol` varchar(100) NOT NULL,
  `amphue` varchar(100) NOT NULL,
  `province` varchar(100) NOT NULL,
  `phone` varchar(12) NOT NULL,
  `placeMan` varchar(100) NOT NULL,
  `attachment` varchar(100) NOT NULL,
  `ybudget` varchar(4) NOT NULL,
  `UserName` varchar(13) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `data`
--

INSERT INTO `data` (`Id`, `title`, `FullName`, `Position`, `mCaseNow`, `Case1Now`, `Case2Now`, `sdayNow`, `ldayNow`, `sumdayNow`, `homeId`, `street`, `soi`, `tambol`, `amphue`, `province`, `phone`, `placeMan`, `attachment`, `ybudget`, `UserName`) VALUES
(16, 'ลาป่วย', 'นายขยัน  ลาน้อย', 'ครู', 'ป่วย', 'ไปหาหมอ', '-', '11 ธันวาคม 2566', '12 ธันวาคม 2566', '2', '18', '8', '-', 'สะบาแปด', 'แปด', 'ปัตตานี', '081-818-8216', 'นายอิมรอน  สุหลง', '', '2567', '1219900025845'),
(18, 'ลาป่วย', 'นายธวัชชัย สุขสันติดิลก', 'ครู', 'ป่วย', '-', '-', '08 ธันวาคม 2566', '12 ธันวาคม 2566', '5', '10/97', 'หนองจิก', '-', 'สะบารัง', 'เมือง', 'ปัตตานี', '095-649-7749', 'นายธีรวัตฒ์ หมวกชุมบก', '', '2567', '3949900243761'),
(19, 'ลาป่วย', 'นายธีระ  บินกาเซ็ม', 'ครู', 'ป่วย', 'พบแพทย์', '-', '01 พฤศจิกายน 2566', '01 พฤศจิกายน 2566', '1', '10/128', 'หนองจิก', '-', 'สะบารัง', 'เมือง', 'ปัตตานี', '084-633-0706', 'นายอิมรอน  สุหลง', '', '2567', '3969900025845'),
(20, 'ลากิจส่วนตัว', 'นายธีระ  บินกาเซ็ม', 'ครู', 'กิจส่วนตัว', '-', 'จัดการลูกชายเสียชีวิต', '20 กุมภาพันธ์ 2567', '23 กุมภาพันธ์ 2567', '4', '10/128', 'หนองจิก', '-', 'สะบารัง', 'เมือง', 'ปัตตานี', '084-633-0706', 'นายซูฟียัน  แวดือรามัน', '', '2567', '3969900025845'),
(22, 'ลาป่วย', 'ธีระ  บินกาเซ็ม', 'ครู', 'ป่วย', '-', '-', '17 พฤษภาคม 2567', '17 พฤษภาคม 2567', '1', '10/128', 'หนองจิก', '-', 'สะบารัง', 'เมือง', 'ปัตตานี', '084-633-0706', 'นายอิมรอน  สุหลง', '', '2567', '3969900025845');

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE `member` (
  `UserID` int(3) UNSIGNED ZEROFILL NOT NULL,
  `UserName` varchar(13) NOT NULL,
  `Password` varchar(40) NOT NULL,
  `FullName` varchar(100) NOT NULL,
  `Status` varchar(5) NOT NULL DEFAULT 'user',
  `Photo` varchar(17) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`UserID`, `UserName`, `Password`, `FullName`, `Status`, `Photo`) VALUES
(001, '3969900025845', '7c222fb2927d828af22f592134e8932480637c0d', 'ธีระ  บินกาเซ็ม', 'user', '3969900025845.jpg'),
(002, '1940100172776', '7c4a8d09ca3762af61e59520943dc26494f8941b', 'ฟาดีละห์  ดีแม', 'user', ''),
(003, '1219900025845', '7c222fb2927d828af22f592134e8932480637c0d', 'นายขยัน  ลาน้อย', 'user', ''),
(004, '3949900243761', '7c4a8d09ca3762af61e59520943dc26494f8941b', 'ธวัชชัย  สุขสันติดิลก', 'user', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `address`
--
ALTER TABLE `address`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `data`
--
ALTER TABLE `data`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`UserID`),
  ADD UNIQUE KEY `Username` (`UserName`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `address`
--
ALTER TABLE `address`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `data`
--
ALTER TABLE `data`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `member`
--
ALTER TABLE `member`
  MODIFY `UserID` int(3) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
