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
-- Table structure for table `cabs`
--

CREATE TABLE `cabs` (
  `id` int(5) NOT NULL,
  `origin` varchar(50) NOT NULL,
  `destination` varchar(50) NOT NULL,
  `distance` float NOT NULL,
  `time` int(10) NOT NULL,
  `originCode` varchar(10) NOT NULL,
  `destinationCode` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cabs`
--

INSERT INTO `cabs` (`id`, `origin`, `destination`, `distance`, `time`, `originCode`, `destinationCode`) VALUES
(1, 'Guwahati', 'Shillong', 99, 125, 'GAU', 'SHL'),
(2, 'Guwahati', 'Mumbai', 275, 119, 'GAU', 'MUM'),
(3, 'Guwahati', 'Bangalore', 900, 250, 'GAU', 'BANG'),
(4, 'Shilong', 'Guwahati', 99, 125, 'SHL', 'GAU'),
(5, 'Shilong', 'Mumbai', 99, 125, 'SHL', 'MUM'),
(6, 'Shilong', 'Bangalore', 900, 950, 'SHL', 'BANG'),
(7, 'Mumbai', 'Guwahati', 276, 119, 'MUM', 'GAU'),
(8, 'Mumbai', 'Bangalore', 90, 197, 'MUM', 'BANG'),
(9, 'Mumbai', 'Shilong', 900, 1136, 'MUM', 'SHL'),
(10, 'Bangalore', 'Shilong', 900, 950, 'BANG', 'SHL'),
(11, 'Bangalore', 'Mumbai', 90, 197, 'BANG', 'MUM'),
(12, 'Bangalore', 'Guwahati', 900, 250, 'BANG', 'GAU');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cabs`
--
ALTER TABLE `cabs`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cabs`
--
ALTER TABLE `cabs`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
