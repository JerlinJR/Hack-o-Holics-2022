-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Oct 01, 2022 at 02:16 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `RoadCare`
--

-- --------------------------------------------------------

--
-- Table structure for table `clientauth`
--

CREATE TABLE `clientauth` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `roadType` varchar(50) NOT NULL,
  `roadName` varchar(50) NOT NULL,
  `depth` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `clientauth`
--

INSERT INTO `clientauth` (`id`, `username`, `email`, `password`, `roadType`, `roadName`, `depth`) VALUES
(1, 'user', 'user@example.com', 'user', 'stateHighway', 'SH2', 2),
(2, 'user2', 'user2@example.com', 'user2', 'villageRoad', 'VR1', 1);

-- --------------------------------------------------------

--
-- Table structure for table `districtroads`
--

CREATE TABLE `districtroads` (
  `roadName` varchar(50) NOT NULL,
  `roadLength` float NOT NULL,
  `roadWidth` float NOT NULL DEFAULT 12,
  `subBaseDepth` float NOT NULL,
  `baseDepth` float NOT NULL,
  `approximatePrice` float NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `districtroads`
--

INSERT INTO `districtroads` (`roadName`, `roadLength`, `roadWidth`, `subBaseDepth`, `baseDepth`, `approximatePrice`) VALUES
('district road 1', 50000, 12, 0.225, 0.1524, 0),
('district road 2', 60000, 12, 0.225, 0.1524, 0),
('district road 3', 40000, 12, 0.225, 0.1524, 0);

-- --------------------------------------------------------

--
-- Table structure for table `materialprice`
--

CREATE TABLE `materialprice` (
  `id` int(11) NOT NULL,
  `subBaselabourCost` int(11) NOT NULL,
  `subBaseMaterialPrice` int(11) NOT NULL,
  `baseMaterialPrice` int(11) NOT NULL,
  `baseLabourCost` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `materialprice`
--

INSERT INTO `materialprice` (`id`, `subBaselabourCost`, `subBaseMaterialPrice`, `baseMaterialPrice`, `baseLabourCost`) VALUES
(1, 3, 3, 3, 2);

-- --------------------------------------------------------

--
-- Table structure for table `moderatorlogin`
--

CREATE TABLE `moderatorlogin` (
  `moderatorUsername` varchar(30) NOT NULL,
  `moderatorId` int(255) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `moderatorlogin`
--

INSERT INTO `moderatorlogin` (`moderatorUsername`, `moderatorId`, `password`) VALUES
('admin', 100, '100');

-- --------------------------------------------------------

--
-- Table structure for table `statehighway`
--

CREATE TABLE `statehighway` (
  `roadName` varchar(30) NOT NULL,
  `roadLength` float NOT NULL,
  `roadWidth` float NOT NULL DEFAULT 12,
  `subBaseDepth` float NOT NULL,
  `baseDepth` float NOT NULL,
  `approximatePrice` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `statehighway`
--

INSERT INTO `statehighway` (`roadName`, `roadLength`, `roadWidth`, `subBaseDepth`, `baseDepth`, `approximatePrice`) VALUES
('state road 2', 70000, 0.225, 0.225, 0.1524, 0),
('state road 3', 90000, 0.225, 0.225, 0.1524, 0),
('state road 1', 5000, 3.3, 0.1, 0.14, 0);

-- --------------------------------------------------------

--
-- Table structure for table `villageroads`
--

CREATE TABLE `villageroads` (
  `roadName` varchar(255) NOT NULL,
  `roadLength` float NOT NULL,
  `roadWidth` float NOT NULL DEFAULT 3.75,
  `subBaseDepth` float NOT NULL,
  `baseDepth` float NOT NULL,
  `approximatePrice` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `villageroads`
--

INSERT INTO `villageroads` (`roadName`, `roadLength`, `roadWidth`, `subBaseDepth`, `baseDepth`, `approximatePrice`) VALUES
('village road 1', 2000, 3.75, 0.2, 0.1016, 2000),
('village road 2', 3000, 3.75, 0.2, 0.1016, 0),
('village road 3', 1000, 3.75, 0.2, 0.1016, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `clientauth`
--
ALTER TABLE `clientauth`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `materialprice`
--
ALTER TABLE `materialprice`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `moderatorlogin`
--
ALTER TABLE `moderatorlogin`
  ADD PRIMARY KEY (`moderatorId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `clientauth`
--
ALTER TABLE `clientauth`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `materialprice`
--
ALTER TABLE `materialprice`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;