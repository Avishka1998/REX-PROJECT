-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 05, 2020 at 04:34 AM
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
-- Database: `recording_studio`
--

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `c_id` int(60) NOT NULL,
  `first_name` varchar(60) NOT NULL,
  `last_name` varchar(60) NOT NULL,
  `email` varchar(60) NOT NULL,
  `tele_no` int(10) NOT NULL,
  `password` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`c_id`, `first_name`, `last_name`, `email`, `tele_no`, `password`) VALUES
(19, 'sasindu', 'sensly', 'sasindusubodhaka@gmail.com', 234, '0ec09ef9836da03f1add21e3ef607627e687e790'),
(20, 'sasindu', 'sensly', 'sasindusubodhaka@gmail.com', 234, '35139ef894b28b73bea022755166a23933c7d9cb'),
(21, 'sasindu', 'sensly', 'sas@gmail.com', 678, 'ee9e0798bad3a3cd3e36269fdad06f969b9141a0');

-- --------------------------------------------------------

--
-- Table structure for table `owner`
--

CREATE TABLE `owner` (
  `owner_id` int(100) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `e_mail` varchar(150) NOT NULL,
  `tp_number` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `owner`
--

INSERT INTO `owner` (`owner_id`, `first_name`, `last_name`, `e_mail`, `tp_number`) VALUES
(1, 'sasindu', 'sensly', 'sas@gmail.com', 77972091),
(2, 'sasindu', 'sensly', 'vpn@gmail.com', 2345),
(3, 'sasindu', 'sensly', 'sasindu@gmail.com', 2345),
(4, 'nuwan', 'ms', 'sasindusensly@gmail.com', 2345678),
(5, 'nimal', 'fernando', 'nimal@gmail.com', 654);

-- --------------------------------------------------------

--
-- Table structure for table `studio`
--

CREATE TABLE `studio` (
  `studio_id` int(60) NOT NULL,
  `studio_name` varchar(100) NOT NULL,
  `s_address_line1` varchar(100) NOT NULL,
  `s_address_line2` varchar(100) NOT NULL,
  `s_city` varchar(100) NOT NULL,
  `distric` varchar(100) NOT NULL,
  `postalcode` varchar(100) NOT NULL,
  `s_email` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `s_tele_no` int(10) NOT NULL,
  `owner_id` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `studio`
--

INSERT INTO `studio` (`studio_id`, `studio_name`, `s_address_line1`, `s_address_line2`, `s_city`, `distric`, `postalcode`, `s_email`, `password`, `s_tele_no`, `owner_id`) VALUES
(26, 'ABC', 'DEF', 'GHI', 'JKL', 'JKL', '234', 'ABC@gmail.com', '', 55, 4),
(27, 'CDE', 'sdjhg', 'fkjh', 'kjhs', 'kjhs', '67', 'nimalstudio@gmail.com', '6643521711328a1e282daf5a5da43970eb11a089', 4569, 5);

-- --------------------------------------------------------

--
-- Table structure for table `tokens`
--

CREATE TABLE `tokens` (
  `id` int(20) NOT NULL,
  `email` varchar(100) NOT NULL,
  `token` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tokens`
--

INSERT INTO `tokens` (`id`, `email`, `token`) VALUES
(1, 'sasindusubodhaka@gmail.com', '99a25872a83a6b45d5220070537a8d9f5f79718268399'),
(2, 'sasindusubodhaka@gmail.com', 'aa1f83edeb71ea2aa2dd8947ce235b8c5f7973d8a223a'),
(3, 'sasindusubodhaka@gmail.com', 'b81952fda83f402d033c3735e3de6fb75f797b47b2f2b'),
(4, 'sasindusubodhaka@gmail.com', 'ff5e459a91a4356a000949461eb39d505f797b4fb1d6c');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`c_id`);

--
-- Indexes for table `owner`
--
ALTER TABLE `owner`
  ADD PRIMARY KEY (`owner_id`);

--
-- Indexes for table `studio`
--
ALTER TABLE `studio`
  ADD PRIMARY KEY (`studio_id`),
  ADD KEY `owner_id` (`owner_id`);

--
-- Indexes for table `tokens`
--
ALTER TABLE `tokens`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `c_id` int(60) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `owner`
--
ALTER TABLE `owner`
  MODIFY `owner_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `studio`
--
ALTER TABLE `studio`
  MODIFY `studio_id` int(60) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `tokens`
--
ALTER TABLE `tokens`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `studio`
--
ALTER TABLE `studio`
  ADD CONSTRAINT `studio_ibfk_1` FOREIGN KEY (`owner_id`) REFERENCES `owner` (`owner_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
