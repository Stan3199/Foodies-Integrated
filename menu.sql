-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 17, 2020 at 02:32 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `internshala`
--

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `RestName` varchar(30) NOT NULL,
  `Veg` int(1) NOT NULL,
  `Item1` varchar(30) DEFAULT NULL,
  `Item2` varchar(30) DEFAULT NULL,
  `Item3` varchar(30) DEFAULT NULL,
  `Item4` varchar(30) DEFAULT NULL,
  `Item5` varchar(30) DEFAULT NULL,
  `Item6` varchar(30) DEFAULT NULL,
  `Item7` varchar(30) DEFAULT NULL,
  `Item8` varchar(30) DEFAULT NULL,
  `Item9` varchar(30) DEFAULT NULL,
  `Item10` varchar(30) DEFAULT NULL,
  `Restaraunt_id` int(2) NOT NULL,
  `S.no` int(3) NOT NULL,
  `Non-veg` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`RestName`, `Veg`, `Item1`, `Item2`, `Item3`, `Item4`, `Item5`, `Item6`, `Item7`, `Item8`, `Item9`, `Item10`, `Restaraunt_id`, `S.no`, `Non-veg`) VALUES
('Rest', 0, 'first', 'second', 'third', 'fourth', 'fifth', NULL, NULL, NULL, NULL, NULL, 7, 6, 0),
('Rest2', 1, 'asda', 'wqeqwe', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 8, 11, 0),
('Rest2', 1, 'asdas', 'wqewqewq', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 8, 12, 1),
('Rest2', 1, 'Item1', 'Item2', 'Item3', 'Item4', 'Item5', NULL, NULL, NULL, NULL, NULL, 8, 13, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`S.no`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `S.no` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
