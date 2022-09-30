-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Sep 30, 2022 at 12:16 PM
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
(1, 43298, 324, 234, 234);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `materialprice`
--
ALTER TABLE `materialprice`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `materialprice`
--
ALTER TABLE `materialprice`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;