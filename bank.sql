-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 18, 2023 at 11:13 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bank`
--

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `accId` int(5) NOT NULL,
  `accName` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `currentBalance` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`accId`, `accName`, `email`, `currentBalance`) VALUES
(101, 'Harshitha', 'harsh@gmail.com', 300000),
(102, 'Aravind', 'arav@gmail.com', 40000),
(103, 'Xavier', 'xav@gmail.com', 14500),
(104, 'Meghana', 'megh@gmail.com', 10000),
(105, 'Leslie', 'les@gmail.com', 20900),
(106, 'Bellamy', 'bell@gmail.com', 40000),
(107, 'Sindhu', 'sin@gmail.com', 15000),
(108, 'Gaurav Pandey', 'pandey@gmail.com', 20090),
(109, 'Nimisha', 'nimi@gmail.com', 400360),
(110, 'Yatharva', 'yathu@gmail.com', 7890);

-- --------------------------------------------------------

--
-- Table structure for table `history`
--

CREATE TABLE `history` (
  `senderName` varchar(40) NOT NULL,
  `receiverName` varchar(50) NOT NULL,
  `amtSent` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `history`
--

INSERT INTO `history` (`senderName`, `receiverName`, `amtSent`) VALUES
('Harshitha', 'Yatharva', 50000),
('Aravind', 'Xavier', 9000),
('Meghana', 'Leslie', 500),
('Sindhu', 'Nimisha', 360);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`accId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `accId` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=111;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
