-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 19, 2021 at 06:53 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `projectmeteor`
--

-- --------------------------------------------------------

--
-- Table structure for table `cabdrivers`
--

CREATE TABLE `cabdrivers` (
  `carID` int(5) NOT NULL,
  `carType` varchar(30) NOT NULL,
  `carModel` varchar(30) NOT NULL,
  `color` varchar(30) NOT NULL,
  `carNo` varchar(20) NOT NULL,
  `driverRating` varchar(10) NOT NULL,
  `imagee` varchar(600) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cabdrivers`
--

INSERT INTO `cabdrivers` (`carID`, `carType`, `carModel`, `color`, `carNo`, `driverRating`, `imagee`) VALUES
(9, 'SUV', 'Mahindra Thar', 'RED', 'ka-19-ec-6794', '4', 'mahindra thar.jfif'),
(10, 'SUV', 'Hyundai Creta', 'Black', 'KA-20-PR-0749', '3', 'Hyundai Creta.jfif'),
(12, 'Luxury', 'Toyota Innova Crysta', 'White', 'KA-20-EW-2113', '4', 'Toyota Innova Crysta.jfif'),
(13, 'Sedan', 'Honda City', 'gray', 'ka-19-QC-3012', '3.4', 'Honda city.jfif'),
(15, 'Sedan', 'Toyota Yaris', 'Red', 'kA-20-EX-9701', '4.2', 'Toyota Yaris.jfif');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cabdrivers`
--
ALTER TABLE `cabdrivers`
  ADD PRIMARY KEY (`carID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cabdrivers`
--
ALTER TABLE `cabdrivers`
  MODIFY `carID` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
