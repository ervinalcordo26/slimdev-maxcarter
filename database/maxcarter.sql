-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Apr 12, 2022 at 06:32 PM
-- Server version: 8.0.21
-- PHP Version: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `maxcarter`
--

-- --------------------------------------------------------

--
-- Table structure for table `tblaccount`
--

DROP TABLE IF EXISTS `tblaccount`;
CREATE TABLE IF NOT EXISTS `tblaccount` (
  `lid` int NOT NULL AUTO_INCREMENT,
  `lrefno` varchar(20) DEFAULT NULL,
  `lusername` varchar(50) DEFAULT NULL,
  `lpassword` varchar(50) DEFAULT NULL,
  `ltimestamp` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`lid`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `tblaccount`
--

INSERT INTO `tblaccount` (`lid`, `lrefno`, `lusername`, `lpassword`, `ltimestamp`) VALUES
(1, '3180413e322022f40021', 'admin', 'd41d8cd98f00b204e9800998ecf8427e', '2022-04-12 18:19:04');

-- --------------------------------------------------------

--
-- Table structure for table `tblcustomer`
--

DROP TABLE IF EXISTS `tblcustomer`;
CREATE TABLE IF NOT EXISTS `tblcustomer` (
  `lid` int NOT NULL AUTO_INCREMENT,
  `lrefno` varchar(20) DEFAULT NULL,
  `lcustomerid` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `llname` varchar(50) DEFAULT NULL,
  `lfname` varchar(50) DEFAULT NULL,
  `lcompany` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `laddress` text,
  `lcity` varchar(50) DEFAULT NULL,
  `lstate` varchar(50) DEFAULT NULL,
  `lcountry` varchar(50) DEFAULT NULL,
  `lpostalcode` varchar(50) DEFAULT NULL,
  `lphone` varchar(50) DEFAULT NULL,
  `lfax` varchar(50) DEFAULT NULL,
  `lemail` varchar(50) DEFAULT NULL,
  `ltimestamp` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`lid`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `tblcustomer`
--

INSERT INTO `tblcustomer` (`lid`, `lrefno`, `lcustomerid`, `llname`, `lfname`, `lcompany`, `laddress`, `lcity`, `lstate`, `lcountry`, `lpostalcode`, `lphone`, `lfax`, `lemail`, `ltimestamp`) VALUES
(1, '1b604132992022c83023', 'CC-0001', 'Alcordo', 'Ervin', 'Ervin Alcordo', 'Block 2 Lot 64 Phase 6-A Tierra Nevada Subd, Brgy. San Francisco', 'General Trias', 'Cavite', 'Philippines', '4107', '+639754083676', '', 'alcordoervin@gmail.com', '2022-04-12 18:31:22');

-- --------------------------------------------------------

--
-- Table structure for table `tblemployee`
--

DROP TABLE IF EXISTS `tblemployee`;
CREATE TABLE IF NOT EXISTS `tblemployee` (
  `lid` int NOT NULL AUTO_INCREMENT,
  `lrefno` varchar(20) DEFAULT NULL,
  `lempid` varchar(20) DEFAULT NULL,
  `llname` varchar(50) DEFAULT NULL,
  `lfname` varchar(50) DEFAULT NULL,
  `ltitle` varchar(50) DEFAULT NULL,
  `lreport_to` varchar(50) DEFAULT NULL,
  `lbirth_date` date DEFAULT NULL,
  `lhire_date` date DEFAULT NULL,
  `lsalary` float(255,2) DEFAULT NULL,
  `laddress` text,
  `lcity` varchar(50) DEFAULT NULL,
  `lstate` varchar(50) DEFAULT NULL,
  `lcountry` varchar(50) DEFAULT NULL,
  `lpostalcode` varchar(50) DEFAULT NULL,
  `lphone` varchar(50) DEFAULT NULL,
  `lfax` varchar(50) DEFAULT NULL,
  `lemail` varchar(50) DEFAULT NULL,
  `ltimestamp` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`lid`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `tblemployee`
--

INSERT INTO `tblemployee` (`lid`, `lrefno`, `lempid`, `llname`, `lfname`, `ltitle`, `lreport_to`, `lbirth_date`, `lhire_date`, `lsalary`, `laddress`, `lcity`, `lstate`, `lcountry`, `lpostalcode`, `lphone`, `lfax`, `lemail`, `ltimestamp`) VALUES
(1, 'bdc04133bd2022f3a022', 'EE-0001', 'Alcordo', 'Ervin', 'Software Web Developer', 'Admin', '1993-06-26', '2022-04-13', 60000.00, 'Block 2 Lot 64 PH6-A', 'Tierra Nevada Subd', 'Cavite', 'Philippines', '4107', '09754083676', 'NA', 'alcordoervin@gmail.com', '2022-04-12 18:29:41'),
(2, 'f010413ad62022755023', 'EE-0002', 'Doe', 'John', 'Project Manager', 'michael', '0000-00-00', '0000-00-00', 10000.00, 'a', '', '', '', '', '', '', 'johndoe@gmail.com', '2022-04-12 18:30:11'),
(3, 'bfe0413de020227df023', 'EE-0003', 'Johnson', 'Michael', 'Secretary', '', '0000-00-00', '0000-00-00', 5000.00, '', '', '', '', '', '', '', 'johnsonmichael@gmail.com', '2022-04-12 18:31:09');

-- --------------------------------------------------------

--
-- Table structure for table `tblinvoice`
--

DROP TABLE IF EXISTS `tblinvoice`;
CREATE TABLE IF NOT EXISTS `tblinvoice` (
  `lid` int NOT NULL AUTO_INCREMENT,
  `lrefno` varchar(20) DEFAULT NULL,
  `linvoiceno` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `lcustomerid` varchar(50) DEFAULT NULL,
  `linvoicedate` date DEFAULT NULL,
  `lbillingaddress` text,
  `lbillingcity` varchar(50) DEFAULT NULL,
  `lbillingstate` varchar(50) DEFAULT NULL,
  `lbillingcountry` varchar(50) DEFAULT NULL,
  `lbillingpostal` varchar(50) DEFAULT NULL,
  `ltotal` float(255,2) DEFAULT NULL,
  `ltimestamp` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`lid`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `tblinvoice`
--

INSERT INTO `tblinvoice` (`lid`, `lrefno`, `linvoiceno`, `lcustomerid`, `linvoicedate`, `lbillingaddress`, `lbillingcity`, `lbillingstate`, `lbillingcountry`, `lbillingpostal`, `ltotal`, `ltimestamp`) VALUES
(1, 'b06041340d2022b4b023', 'INV-0001', '1b604132992022c83023', '2022-04-13', 'Block 2 Lot 64 Phase 6-A Tierra Nevada Subd, Brgy. San Francisco', 'General Trias', 'Cavite', 'Philippines', '4107', 80000.00, '2022-04-12 18:31:37');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
