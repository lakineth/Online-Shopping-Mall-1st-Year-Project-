-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 23, 2020 at 08:02 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `user`
--

-- --------------------------------------------------------

--
-- Table structure for table `adminreg`
--

CREATE TABLE `adminreg` (
  `id` int(11) NOT NULL,
  `ademail` varchar(50) NOT NULL,
  `adnumber` bigint(10) NOT NULL,
  `adname` varchar(50) NOT NULL,
  `adpassword` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `adminreg`
--

INSERT INTO `adminreg` (`id`, `ademail`, `adnumber`, `adname`, `adpassword`) VALUES
(1, 'Lakindu.nethmi@gmail.com', 767059067, 'Nethmin', 'Laki123'),
(2, 'Tharaka123@gmail.com', 748521654, 'Tharaka Pathum', 'Tharaka4356'),
(3, 'Deshn.456@gmail.com', 711116032, 'Deshan', 'Ddeshan123'),
(4, 'Sudeepa.sranga@gmail.com', 711655948, 'Saranga', 'Sudeepa124'),
(5, 'Jithma.Vithange@gmail.com', 716693257, 'Jithma', 'Jithma123#');

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `Feedback_ID` int(10) NOT NULL,
  `Feedback_type` varchar(50) NOT NULL,
  `Feedback_message` text NOT NULL,
  `Name` varchar(250) NOT NULL,
  `emial` varchar(100) NOT NULL,
  `Created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `pname` varchar(100) NOT NULL,
  `pprice` float NOT NULL,
  `pdesc` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `ID` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `number` bigint(10) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(20) NOT NULL,
  `Firstname` varchar(50) NOT NULL,
  `Lastname` varchar(50) NOT NULL,
  `Address` varchar(150) NOT NULL,
  `City` varchar(30) NOT NULL,
  `Postalcode` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`ID`, `email`, `number`, `username`, `password`, `Firstname`, `Lastname`, `Address`, `City`, `Postalcode`) VALUES
(1, 'Nimal.2345@gmail.com', 785963214, 'Nimal', 'Naimal123', 'Nimal', 'Wijesingha', 'No.215,walasmulla road,Middeniya', 'Middeniya', 8090),
(2, 'Dinesh.Perera@gmail.com', 715486913, 'Dinesh', 'dinesh123', 'Dinesh', 'Perera', 'no.23/a,galle road,kaluthara', 'Kaluthara', 8564);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adminreg`
--
ALTER TABLE `adminreg`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`Feedback_ID`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `adminreg`
--
ALTER TABLE `adminreg`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `Feedback_ID` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
