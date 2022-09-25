-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Sep 25, 2022 at 06:58 PM
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
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `clientauth`
--

INSERT INTO `clientauth` (`id`, `username`, `email`, `password`) VALUES
(1, 'user', 'user@example.com', 'user'),
(2, 'user2', 'user2@example.com', 'user2');

-- --------------------------------------------------------

--
-- Table structure for table `districtroads`
--

CREATE TABLE `districtroads` (
  `roadName` varchar(50) NOT NULL,
  `roadLengthInKM` float NOT NULL,
  `roadWidth` float NOT NULL DEFAULT 12
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `districtroads`
--

INSERT INTO `districtroads` (`roadName`, `roadLengthInKM`, `roadWidth`) VALUES
('district road 1', 50, 12),
('district road 2', 30, 12),
('district road 3', 60, 12),
('district road 4', 10, 12),
('district road 5', 80, 12);

-- --------------------------------------------------------

--
-- Table structure for table `materialprice`
--

CREATE TABLE `materialprice` (
  `id` int(11) NOT NULL,
  `cement` int(11) NOT NULL,
  `mcent` int(11) NOT NULL,
  `agrigator` int(11) NOT NULL,
  `labourcharge` int(11) NOT NULL,
  `bitumin` int(11) NOT NULL,
  `laying` int(11) NOT NULL,
  `mixing` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `materialprice`
--

INSERT INTO `materialprice` (`id`, `cement`, `mcent`, `agrigator`, `labourcharge`, `bitumin`, `laying`, `mixing`) VALUES
(1, 3, 3, 3, 3, 3, 3, 3);

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
  `stateRoad` varchar(30) NOT NULL,
  `lengthInKM` float NOT NULL,
  `roadWidthInMeter` float NOT NULL DEFAULT 12
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `statehighway`
--

INSERT INTO `statehighway` (`stateRoad`, `lengthInKM`, `roadWidthInMeter`) VALUES
('state road 1', 50, 12),
('state road 2', 150, 12),
('state road 1', 50, 12),
('state road 3', 70, 12),
('state road 4', 100, 12),
('state road 5', 10, 12);

-- --------------------------------------------------------

--
-- Table structure for table `villageroads`
--

CREATE TABLE `villageroads` (
  `roadName` varchar(255) NOT NULL,
  `roadLengthInKM` float NOT NULL,
  `roadWidth` float NOT NULL DEFAULT 3.75
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `villageroads`
--

INSERT INTO `villageroads` (`roadName`, `roadLengthInKM`, `roadWidth`) VALUES
('village road 1', 2, 3.75),
('village road 2', 3, 3.75),
('village road 3', 1, 3.75),
('village road 4', 5, 3.75),
('village road 5', 2, 3.75);

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