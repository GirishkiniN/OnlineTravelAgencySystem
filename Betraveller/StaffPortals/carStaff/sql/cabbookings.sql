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
-- Table structure for table `cabbookings`
--

CREATE TABLE `cabbookings` (
  `bookingID` int(11) NOT NULL,
  `username` varchar(25) NOT NULL,
  `date` varchar(20) NOT NULL,
  `cancelled` varchar(10) NOT NULL,
  `origin` varchar(30) NOT NULL,
  `destination` varchar(30) NOT NULL,
  `carID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cabbookings`
--

INSERT INTO `cabbookings` (`bookingID`, `username`, `date`, `cancelled`, `origin`, `destination`, `carID`) VALUES
(1, 'Mayur', '08-06-2021', 'yes', 'Mumbai', 'Bangalore', 8),
(2, 'Mayur', '08-06-2021', 'yes', 'Mumbai', 'Bangalore', 12),
(3, 'Mayur', '08-06-2021', 'yes', 'Guwahati', 'Bangalore', 12),
(4, 'Mayur', '08-06-2021', 'yes', 'Mumbai', 'Bangalore', 10),
(5, 'Mayur', '08-06-2021', 'yes', 'Mumbai', 'Bangalore', 9),
(6, 'Mayur', '08-06-2021', 'yes', 'Mumbai', 'Bangalore', 13),
(7, 'mayur', '10-06-2021', 'yes', 'Mumbai', 'Bangalore', 10),
(8, 'Mayur', '10-06-2021', 'yes', 'Mumbai', 'Bangalore', 10);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cabbookings`
--
ALTER TABLE `cabbookings`
  ADD PRIMARY KEY (`bookingID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cabbookings`
--
ALTER TABLE `cabbookings`
  MODIFY `bookingID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
