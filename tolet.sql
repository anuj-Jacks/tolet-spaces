-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 27, 2017 at 12:11 PM
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
(4, '', '', '', '0', '', '', 0, 0, 0, 'residential', 0, 'anuj', 'toletspaces@gmail.com', 2147483647, 0, '', '');

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
  MODIFY `uniqueid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
