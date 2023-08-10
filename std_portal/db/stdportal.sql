-- phpMyAdmin SQL Dump
------------------------------------------
--
-- Host: 127.0.0.1
-- Generation Time: Jul 12, 2020 at 07:46 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 7.2.19ion 4.9.0.1
-- http

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;


-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `UserName` varchar(100) NOT NULL,
  `Password` varchar(100) NOT NULL,
  `updationDate` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `UserName`, `Password`, `updationDate`) VALUES
(1, 'admin', '5c428d8875d2948607f3e3fe134d71b4', '2023-08-08 12:22:38');

-- --------------------------------------------------------
--
-- Table structure for table `tblusers`
--

CREATE TABLE `tblstudent` (
  `id` int(11) NOT NULL auto_increment,
  `FullName` varchar(120) DEFAULT NULL,
  `StudentId` int(100) DEFAULT NULL,
  `Gender` varchar(100) DEFAULT NULL,
  `EmailId` varchar(100) DEFAULT NULL,
  `ContactNo` char(12) DEFAULT NULL,
  `dob` varchar(100) DEFAULT NULL,
  `Address` varchar(255) DEFAULT NULL,
  `BloodGroup` varchar(100) DEFAULT NULL,
  `AdmissionDate` varchar(100) DEFAULT NULL,
  `Course` varchar(100) DEFAULT NULL,
  `Subject` varchar(100) DEFAULT NULL,
  `RegDate` timestamp NULL DEFAULT current_timestamp(),
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
---------------------------------------------------------
--;
