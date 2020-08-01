-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 17, 2020 at 07:04 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cv1`
--

-- --------------------------------------------------------

--
-- Table structure for table `ans`
--

CREATE TABLE `ans` (
  `name` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL,
  `city` varchar(50) NOT NULL,
  `state` varchar(50) NOT NULL,
  `country` varchar(50) NOT NULL,
  `birthPlace` varchar(40) NOT NULL,
  `nationality` varchar(40) NOT NULL,
  `email` varchar(40) NOT NULL,
  `mobile` int(50) NOT NULL,
  `sname` varchar(50) NOT NULL,
  `spercent` int(40) NOT NULL,
  `puc` varchar(40) NOT NULL,
  `pupercent` int(40) NOT NULL,
  `course` varchar(40) NOT NULL,
  `skills1` varchar(50) NOT NULL,
  `pos1` varchar(40) NOT NULL,
  `co1` varchar(40) NOT NULL,
  `pos2` varchar(40) NOT NULL,
  `co2` varchar(40) NOT NULL,
  `pos3` varchar(40) NOT NULL,
  `co3` varchar(40) NOT NULL,
  `birthday` varchar(40) NOT NULL,
  `countryCode` varchar(50) NOT NULL,
  `postal` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ans`
--

INSERT INTO `ans` (`name`, `address`, `city`, `state`, `country`, `birthPlace`, `nationality`, `email`, `mobile`, `sname`, `spercent`, `puc`, `pupercent`, `course`, `skills1`, `pos1`, `co1`, `pos2`, `co2`, `pos3`, `co3`, `birthday`, `countryCode`, `postal`) VALUES
(' abcd', '#12 street', 'bangalore', 'karnataka', 'India', ' banglore', 'United States', 'abcd@gmail.com', 876543210, 'CBSC', 80, 'PCMB', 87, 'Bba', 'sing', ' manager', ' wipro', ' ', ' ', ' ', ' ', '1999-12-12', '44', 560087),
(' bellu', ' 13,3rd street ', ' mangalore', 'karnataka', 'India', ' mangalore', 'India', 'bellu@gmail.com', 876543219, 'ICSE', 90, 'Commerce', 87, 'Bcom', 'sports', ' manager', ' wipro', ' tester', ' ibm', ' ', ' ', '2004-06-08', '44', 560043),
('disha', '#12 street', 'bangalore', 'karnataka', 'India', 'bangalore', 'Bangladesh', 'disha@gmail.com', 2147483647, 'CBSC', 80, 'PCMB', 85, 'BMS', 'cooking', 'manager', 'df', 'tester', 'oracle', 'hjhfu', 'jgfyft', '2020-06-16', '44', 560087),
(' jeera', 'r.v street', 'bangalore', 'karnataka', 'India', ' ooty', 'India', 'jeera@gmail.com', 965478654, 'ICSE', 80, 'Commerce', 90, 'Bcom', 'Dance', ' manager', ' xyz', ' tester', ' abc', ' xyz', ' zzz', '2020-06-22', '44', 560023),
('bellu', '13,3rd street', 'mangalore', 'karnataka', 'India', ' mangalore', 'The Bahamas', 'lekha@gmail.com', 234567890, 'CBSC', 80, 'Commerce', 87, 'Diploma', 'dance', ' manager', ' wipro', ' tester', ' ibm', ' ', ' ', '2020-06-22', '44', 560043);

-- --------------------------------------------------------

--
-- Table structure for table `fbk`
--

CREATE TABLE `fbk` (
  `sl.no` int(255) NOT NULL,
  `email` varchar(50) NOT NULL,
  `msg` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `fbk`
--

INSERT INTO `fbk` (`sl.no`, `email`, `msg`) VALUES
(1, 'jeera@gmail.com', 'gd'),
(2, 'priya@gmail.com', 'not bad'),
(3, 'priya@gmail.com', 'gd'),
(4, 'megu@gmail.com', 'kauhdi'),
(5, 'jeera@gmail.com', 'good'),
(8, 'jeera@gmail.com', 'nh'),
(9, 'don@gmail.com', 'bg'),
(10, 'jeera@gmail.com', 'good'),
(11, 'abcd@gmail.com', 'good'),
(12, 'abcd@gmail.com', 'good'),
(13, 'abcd@gmail.com', 'good'),
(14, 'abcd@gmail.com', 'good'),
(15, 'abcd@gmail.com', 'good'),
(16, 'abcd@gmail.com', 'good'),
(17, 'abcd@gmail.com', 'good'),
(18, 'abcd@gmail.com', 'hi'),
(19, 'jeera@gmail.com', 'nice'),
(20, 'bellu@gmail.com', 'good'),
(21, 'bellu@gmail.com', 'nice');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `username` varchar(50) NOT NULL,
  `password` int(20) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`username`, `password`, `email`) VALUES
('abcd', 1111, 'abcd@gmail.com'),
('bellu', 2727, 'bellu@gmail.com'),
('disha', 1111, 'disha@gmail.com'),
('don', 7777, 'don@gmail.com'),
('jeera', 8888, 'jeera@gmail.com'),
('kiru', 7777, 'kiru@gmail.com'),
('reena', 12345, 'meera@gmail.com'),
('megu', 2222, 'megu@gmail.com'),
('priya', 5555, 'priya@gmail.com'),
('tinnu', 1234, 'tinnu@gmail.com'),
('uma', 9999, 'uma@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ans`
--
ALTER TABLE `ans`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `fbk`
--
ALTER TABLE `fbk`
  ADD PRIMARY KEY (`sl.no`),
  ADD KEY `email` (`email`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `fbk`
--
ALTER TABLE `fbk`
  MODIFY `sl.no` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `fbk`
--
ALTER TABLE `fbk`
  ADD CONSTRAINT `email_fk` FOREIGN KEY (`email`) REFERENCES `register` (`email`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
