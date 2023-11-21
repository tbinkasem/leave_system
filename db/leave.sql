-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 20, 2023 at 12:56 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

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
-- Table structure for table `data`
--

CREATE TABLE `data` (
  `ID` int(11) NOT NULL,
  `title` varchar(50) NOT NULL,
  `fullname` varchar(100) NOT NULL,
  `position` varchar(50) NOT NULL,
  `mcaseNow` varchar(50) NOT NULL,
  `case1Now` varchar(200) NOT NULL,
  `case2Now` varchar(200) NOT NULL,
  `sdayNow` varchar(20) NOT NULL,
  `ldayNow` varchar(20) NOT NULL,
  `sundayNow` varchar(2) NOT NULL,
  `homeID` varchar(7) NOT NULL,
  `street` varchar(100) NOT NULL,
  `soi` varchar(100) NOT NULL,
  `tambol` varchar(100) NOT NULL,
  `amphue` varchar(100) NOT NULL,
  `province` varchar(100) NOT NULL,
  `phone` varchar(12) NOT NULL,
  `placeMan` varchar(100) NOT NULL,
  `photo` varchar(200) NOT NULL,
  `UserName` varchar(13) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE `member` (
  `UserID` int(3) UNSIGNED ZEROFILL NOT NULL,
  `UserName` varchar(13) NOT NULL,
  `Password` varchar(16) NOT NULL,
  `FullName` varchar(100) NOT NULL,
  `Status` varchar(5) NOT NULL DEFAULT 'user',
  `Photo` varchar(17) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`UserID`, `UserName`, `Password`, `FullName`, `Status`, `Photo`) VALUES
(001, '3969900025845', '12345678', 'ธีระ  บินกาเซ็ม', 'user', '3969900025845.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data`
--
ALTER TABLE `data`
  ADD PRIMARY KEY (`ID`);

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
-- AUTO_INCREMENT for table `data`
--
ALTER TABLE `data`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `member`
--
ALTER TABLE `member`
  MODIFY `UserID` int(3) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
