-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 06, 2018 at 08:27 AM
-- Server version: 10.1.29-MariaDB
-- PHP Version: 7.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tolet`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `Uid` int(11) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `Username` varchar(100) NOT NULL,
  `password` varchar(50) NOT NULL,
  `Contact` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`Uid`, `Name`, `Username`, `password`, `Contact`) VALUES
(1, 'anuj kumar', 'anuj@gmail.com', '1234', 9876),
(2, 'anuj kumar', 'anuj@gmail.com', '1234', 9876);

-- --------------------------------------------------------

--
-- Table structure for table `property`
--

CREATE TABLE `property` (
  `uniqueid` int(10) NOT NULL,
  `Country` varchar(50) NOT NULL,
  `State` varchar(50) NOT NULL,
  `City` varchar(50) NOT NULL,
  `Locality` varchar(50) NOT NULL,
  `Housenum` varchar(50) NOT NULL,
  `Landmark` varchar(50) NOT NULL,
  `pincode` int(6) NOT NULL,
  `bhk` int(10) NOT NULL,
  `Area` int(20) NOT NULL,
  `Type` varchar(50) NOT NULL,
  `Budget` int(10) NOT NULL,
  `Oname` varchar(50) NOT NULL,
  `Oemail` varchar(50) NOT NULL,
  `Ocontact` int(20) NOT NULL,
  `floor` int(10) NOT NULL,
  `Furnishing` varchar(20) NOT NULL,
  `ResType` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `property`
--

INSERT INTO `property` (`uniqueid`, `Country`, `State`, `City`, `Locality`, `Housenum`, `Landmark`, `pincode`, `bhk`, `Area`, `Type`, `Budget`, `Oname`, `Oemail`, `Ocontact`, `floor`, `Furnishing`, `ResType`) VALUES
(4, 'India', 'UP', 'Lucknow', 'Gomtinagar', '23', 'nearabout', 226010, 2, 1200, 'residential', 10200, 'anuj', 'toletspaces@gmail.com', 2147483647, 1, 'Semi furnished', 'family'),
(5, 'India', 'UP', 'Lucknow', 'Gomtinagar extension', '45', 'verynear', 226010, 3, 1500, 'residential', 13000, 'random', 'thisone@random', 90909, 2, 'not furnished ', 'bachelor'),
(6, 'India', 'UP', 'Lucknow', 'Gomtinagar extension', '345', 'verynear', 226010, 4, 1700, 'residential', 20000, 'rishabh', 'ptani@gmail', 45657483, 0, 'furnished', 'family'),
(7, 'India', 'UP', 'Lucknow', 'Gomtinagar extension', '34', 'verynear', 226010, 0, 1500, 'commercial', 25000, 'amit', 'amit@gmail.com', 12345, 1, 'not furnished ', ''),
(8, 'India', 'UP', 'Lucknow', 'Gomtinagar', '54', 'verynear', 226010, 3, 1600, 'residential', 15000, 'deepak', 'deepak@gmail.cvom', 123456, 14, 'semi furnished', 'family'),
(9, 'India', 'UP', 'Lucknow', 'gomtinagar', '76', 'verynear', 226010, 0, 1000, 'commercial', 18000, 'yash', 'yash@gmail.com', 1234567, 0, 'furnished', ''),
(10, 'India', 'UP', 'Lucknow', 'Gomtinagar extension', '34', 'verynear', 226010, 3, 1400, 'residential', 12000, 'sud', 'sud@gmail.com', 12345678, 2, 'not furnished ', 'bachelor');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD UNIQUE KEY `Uid` (`Uid`);

--
-- Indexes for table `property`
--
ALTER TABLE `property`
  ADD PRIMARY KEY (`uniqueid`,`Country`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `Uid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `property`
--
ALTER TABLE `property`
  MODIFY `uniqueid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
