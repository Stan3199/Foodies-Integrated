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
-- Table structure for table `clients`
--

CREATE TABLE `clients` (
  `S.no` int(3) NOT NULL,
  `UserName` varchar(30) NOT NULL,
  `Contact` int(10) NOT NULL,
  `Password` varchar(30) NOT NULL,
  `Vegetarian` varchar(10) NOT NULL,
  `Non-vegetarian` varchar(10) DEFAULT NULL,
  `Restaraunt` varchar(20) NOT NULL,
  `Role` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `clients`
--

INSERT INTO `clients` (`S.no`, `UserName`, `Contact`, `Password`, `Vegetarian`, `Non-vegetarian`, `Restaraunt`, `Role`) VALUES
(3, ':fname', 0, ':pass', ':veg', ':Nveg', ':rest', 0),
(4, ':fname', 0, ':pass', ':veg', ':Nveg', ':rest', 0),
(5, 'asd', 213213, 'qwewqe', '0', '0', 'user', 1),
(6, 'name', 2345678, 'wert', '1', '1', 'rest', 2),
(7, 'user', 132123, 'asdf', '1', '1', 'Rest', 2),
(8, 'Reet', 1231, 'wqewq', '1', '1', 'Rest2', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`S.no`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `clients`
--
ALTER TABLE `clients`
  MODIFY `S.no` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
