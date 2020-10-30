-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 30, 2020 at 07:09 PM
-- Server version: 10.1.10-MariaDB
-- PHP Version: 7.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
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
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `user_name` varchar(100) NOT NULL,
  `password` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`user_name`, `password`) VALUES
('admin', 'recordex');

-- --------------------------------------------------------

--
-- Table structure for table `advance_payment`
--

CREATE TABLE `advance_payment` (
  `adpayment_id` int(100) NOT NULL,
  `charge` double NOT NULL,
  `date` datetime NOT NULL,
  `c_id` int(100) NOT NULL,
  `studio_id` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `audio_gear`
--

CREATE TABLE `audio_gear` (
  `audio_id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `description` varchar(100) NOT NULL,
  `studio_id` int(100) NOT NULL,
  `available_qty` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
  `password` varchar(60) NOT NULL,
  `email_verified` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`c_id`, `first_name`, `last_name`, `email`, `tele_no`, `password`, `email_verified`) VALUES
(23, 'nuwan', 'nuwan', 'nuwan@gmail.com', 779726091, '12ea8d6a2aba2db083396f05b87a2254cf2402de', 1),
(24, 'nimal', 'perera', 'sdfkjg@gmail.com', 75479, '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', 0),
(25, 'nimal', 'perera', 'sdfkjgksjfhg@gmail.com', 75479, '6643521711328a1e282daf5a5da43970eb11a089', 0),
(26, 'sasindu', 'sensly', 'yasasindusubodhaka@gmail.com', 455, '51eac6b471a284d3341d8c0c63d0f1a286262a18', 1),
(27, 'sasindu', 'sensly', 'sasindusubodhakasensly@gmail.com', 98374, '0ec09ef9836da03f1add21e3ef607627e687e790', 0),
(28, 'alibaba', 'dfd', 'abcd@gmail.com', 917646, '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 1),
(29, 'sasindu', 'sensly', 'senslym@gmail.com', 779726091, '53c7e6b7ac752f5c494b59018e2f3789a9629b9e', 0),
(30, 'nimal', 'kumara', 'nimal@gmail.com', 3456, '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 0),
(40, 'john', 'perera', 'john@gmail.com', 77259765, 'a51dda7c7ff50b61eaea0444371f4a6a9301e501', 0),
(41, 'sasindu', 'subodhaka', 'sasindusubodhaka@gmail.com', 779726091, '53c7e6b7ac752f5c494b59018e2f3789a9629b9e', 0);

-- --------------------------------------------------------

--
-- Table structure for table `customer_complaint`
--

CREATE TABLE `customer_complaint` (
  `complaint_id` int(100) NOT NULL,
  `c_id` int(100) NOT NULL,
  `studio_id` int(100) NOT NULL,
  `description` varchar(500) NOT NULL,
  `flag` tinyint(4) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer_complaint`
--

INSERT INTO `customer_complaint` (`complaint_id`, `c_id`, `studio_id`, `description`, `flag`) VALUES
(9, 23, 28, 'sasindu', 1),
(10, 23, 28, 'sasindu', 1),
(11, 23, 28, 'sffdfdfsdf', 1),
(12, 23, 28, 'dfdkfjdkjf', 0),
(13, 23, 28, 'dfkjdhfjdhf', 0);

-- --------------------------------------------------------

--
-- Table structure for table `email_verification`
--

CREATE TABLE `email_verification` (
  `id` int(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `token` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `email_verification`
--

INSERT INTO `email_verification` (`id`, `email`, `token`) VALUES
(13, 'sasindusubodhaka@gmail.com', 'e3e0dcc71094a74a01910c1672b132265f89377803473');

-- --------------------------------------------------------

--
-- Table structure for table `instrument`
--

CREATE TABLE `instrument` (
  `instrument_id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `description` varchar(100) NOT NULL,
  `studio_id` int(100) NOT NULL,
  `available_qty` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `membership_payment`
--

CREATE TABLE `membership_payment` (
  `mpay_id` int(100) NOT NULL,
  `charge` double NOT NULL,
  `date` date NOT NULL,
  `studio_id` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE `message` (
  `c_id` int(100) NOT NULL,
  `studio_id` int(100) NOT NULL,
  `date` datetime NOT NULL,
  `content` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
(5, 'nimal', 'fernando', 'nimal@gmail.com', 654),
(6, 'sanath', 'kumara', 'sanath@gmail.com', 779726091),
(7, 'sasindu', 'sensly', 'hjk@gmail.com', 234),
(8, 'nimal', 'sensly', 'nji@gmail.com', 234),
(9, 'sasindu', 'sensly', 'abc@gmail.com', 123456),
(10, 'chandana', 'liyanarchchi', 'chandana@gmail.com', 775610043),
(11, 'addv', 'jjvj', 'jhvjhvjv@jbbh.com', 5445454),
(13, 'jhjvjv', 'hbjjb', 'kkbjb@jhgjvh.com', 2111),
(14, 'igiug', 'uggu', 'oihhoih@yfyfuyf.com', 455454),
(15, 'jgyguyg', 'yguyguyg', 'gugygu@jjhv.com', 4545);

-- --------------------------------------------------------

--
-- Table structure for table `rate`
--

CREATE TABLE `rate` (
  `c_id` int(100) NOT NULL,
  `studio_id` int(100) NOT NULL,
  `rates` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `reserved_audio_gear`
--

CREATE TABLE `reserved_audio_gear` (
  `audio_id` int(100) NOT NULL,
  `job_id` int(100) NOT NULL,
  `qty` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `reserved_instrument`
--

CREATE TABLE `reserved_instrument` (
  `instrument_id` int(100) NOT NULL,
  `job_id` int(100) NOT NULL,
  `qty` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `reserved _job`
--

CREATE TABLE `reserved _job` (
  `job_id` int(100) NOT NULL,
  `c_id` int(100) NOT NULL,
  `studio_id` int(100) NOT NULL,
  `adpayment_id` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `service`
--

CREATE TABLE `service` (
  `service_id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
  `owner_id` int(100) NOT NULL,
  `verified` tinyint(4) NOT NULL DEFAULT '0',
  `email_verified` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `studio`
--

INSERT INTO `studio` (`studio_id`, `studio_name`, `s_address_line1`, `s_address_line2`, `s_city`, `distric`, `postalcode`, `s_email`, `password`, `s_tele_no`, `owner_id`, `verified`, `email_verified`) VALUES
(26, 'ABC', 'DEF', 'GHI', 'JKL', 'JKL', '234', 'ABC@gmail.com', '', 55, 4, 1, 0),
(27, 'CDE', 'sdjhg', 'fkjh', 'kjhs', 'kjhs', '67', 'nimalstudio@gmail.com', '6643521711328a1e282daf5a5da43970eb11a089', 4569, 5, 1, 0),
(28, 'sanathstudio', 'rathnaputa', 'rathnapura', 'rathnapura', 'rathnapura', '23', 'sanathstudio@gmail.com', 'd1e9e8ca064dafb40c71e7ff8d9161f4a2ef63de', 779726091, 6, 0, 0),
(29, 'sanathbogodastudio', 'balangoda', 'balangoda', 'balangoda', 'balangoda', '23', 'sanathbodgo@gmail.com', '04326d95aad2ca113e57c3329e753c564e7f64b5', 4674, 6, 0, 0),
(30, 'hjf', 'fdf', 'dfdf', 'fdfdfdf', 'fdfdfdf', '454', 'nimalstudiosen@gmail.com', '51eac6b471a284d3341d8c0c63d0f1a286262a18', 234, 7, 0, 0),
(31, 'chandanastudios', '02', 'hettiweeiya', 'nugegoda', 'nugegoda', '123', 'chandanastudios@gmail.com', '6c3f5e05b273fece80a7e7d7c269701f365d43dd', 455610043, 10, 1, 1),
(34, 'pll', 'plpl', 'plplp', 'plplplp', 'plplplp', '45454', 'pavinduavishka@gmail.com', '7b21848ac9af35be0ddb2d6b9fc3851934db8420', 545454, 15, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `studio_complaint`
--

CREATE TABLE `studio_complaint` (
  `complaint_id` int(11) NOT NULL,
  `studio_id` int(100) NOT NULL,
  `c_id` int(100) NOT NULL,
  `description` varchar(500) NOT NULL,
  `flag` tinyint(4) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `studio_complaint`
--

INSERT INTO `studio_complaint` (`complaint_id`, `studio_id`, `c_id`, `description`, `flag`) VALUES
(1, 28, 23, 'sdsd', 0),
(2, 28, 23, 'sddfjdhbf', 0),
(3, 28, 23, 'sdfjdgfdjfgd', 0);

-- --------------------------------------------------------

--
-- Table structure for table `studio_reserved_sevice`
--

CREATE TABLE `studio_reserved_sevice` (
  `job_id` int(100) NOT NULL,
  `studio_id` int(100) NOT NULL,
  `service_id` int(100) NOT NULL,
  `service_charge` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `studio_service`
--

CREATE TABLE `studio_service` (
  `studio_id` int(100) NOT NULL,
  `service_id` int(100) NOT NULL,
  `service_charge` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `time_slot`
--

CREATE TABLE `time_slot` (
  `t_id` int(100) NOT NULL,
  `date` date NOT NULL,
  `starting_time` time NOT NULL,
  `end_time` time NOT NULL,
  `studio_id` int(100) NOT NULL,
  `job_id` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
(4, 'sasindusubodhaka@gmail.com', 'ff5e459a91a4356a000949461eb39d505f797b4fb1d6c'),
(5, 'sdfkjg@gmail.com', '03d7c0f3ed38795399f7a3dcbf2ba81b5f7b745e4ccf7'),
(6, 'sdfkjg@gmail.com', 'c513cdb55b95b98c49cb9ad2c4a9b0c45f7b74662a020'),
(7, 'sasindusubodhaka@gmail.com', 'f6c8f8ee4a39326c6c6dd91fe6495e515f7b74a173588'),
(8, 'sasindusubodhaka@gmail.com', '2c89bac2197c3520889b31dc9dd3ffb55f7b74cc4fcfb'),
(9, 'sasindusubodhaka@gmail.com', '186a4c26e5822973b650f08b5476a4e55f7b750db02ef'),
(10, 'sasindusubodhaka@gmail.com', '24718a3b154c80dd91c4a9321818b4dc5f7b7594b1561'),
(11, 'sasindusubodhaka@gmail.com', '7b06a51c433383028e0b861475fdab775f7b76ad417f0');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `advance_payment`
--
ALTER TABLE `advance_payment`
  ADD PRIMARY KEY (`adpayment_id`),
  ADD KEY `c_id` (`c_id`),
  ADD KEY `studio_id` (`studio_id`);

--
-- Indexes for table `audio_gear`
--
ALTER TABLE `audio_gear`
  ADD PRIMARY KEY (`audio_id`),
  ADD KEY `studio_id` (`studio_id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`c_id`);

--
-- Indexes for table `customer_complaint`
--
ALTER TABLE `customer_complaint`
  ADD PRIMARY KEY (`complaint_id`),
  ADD KEY `c_id` (`c_id`,`studio_id`),
  ADD KEY `studio_id` (`studio_id`);

--
-- Indexes for table `email_verification`
--
ALTER TABLE `email_verification`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `instrument`
--
ALTER TABLE `instrument`
  ADD PRIMARY KEY (`instrument_id`),
  ADD KEY `studio_id` (`studio_id`);

--
-- Indexes for table `membership_payment`
--
ALTER TABLE `membership_payment`
  ADD PRIMARY KEY (`mpay_id`),
  ADD KEY `studio_id` (`studio_id`);

--
-- Indexes for table `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`c_id`,`studio_id`),
  ADD KEY `studio_id` (`studio_id`);

--
-- Indexes for table `owner`
--
ALTER TABLE `owner`
  ADD PRIMARY KEY (`owner_id`);

--
-- Indexes for table `rate`
--
ALTER TABLE `rate`
  ADD PRIMARY KEY (`c_id`,`studio_id`),
  ADD KEY `studio_id` (`studio_id`);

--
-- Indexes for table `reserved_audio_gear`
--
ALTER TABLE `reserved_audio_gear`
  ADD PRIMARY KEY (`audio_id`,`job_id`),
  ADD KEY `job_id` (`job_id`);

--
-- Indexes for table `reserved_instrument`
--
ALTER TABLE `reserved_instrument`
  ADD PRIMARY KEY (`instrument_id`,`job_id`),
  ADD KEY `job_id` (`job_id`);

--
-- Indexes for table `reserved _job`
--
ALTER TABLE `reserved _job`
  ADD PRIMARY KEY (`job_id`),
  ADD KEY `c_id` (`c_id`),
  ADD KEY `studio_id` (`studio_id`),
  ADD KEY `adpayment_id` (`adpayment_id`);

--
-- Indexes for table `service`
--
ALTER TABLE `service`
  ADD PRIMARY KEY (`service_id`);

--
-- Indexes for table `studio`
--
ALTER TABLE `studio`
  ADD PRIMARY KEY (`studio_id`),
  ADD KEY `owner_id` (`owner_id`);

--
-- Indexes for table `studio_complaint`
--
ALTER TABLE `studio_complaint`
  ADD PRIMARY KEY (`complaint_id`),
  ADD KEY `studio_id` (`studio_id`,`c_id`),
  ADD KEY `c_id` (`c_id`);

--
-- Indexes for table `studio_reserved_sevice`
--
ALTER TABLE `studio_reserved_sevice`
  ADD PRIMARY KEY (`job_id`,`studio_id`,`service_id`),
  ADD KEY `studio_id` (`studio_id`),
  ADD KEY `service_id` (`service_id`);

--
-- Indexes for table `studio_service`
--
ALTER TABLE `studio_service`
  ADD PRIMARY KEY (`studio_id`,`service_id`),
  ADD KEY `service_id` (`service_id`);

--
-- Indexes for table `time_slot`
--
ALTER TABLE `time_slot`
  ADD PRIMARY KEY (`t_id`),
  ADD KEY `studio_id` (`studio_id`,`job_id`),
  ADD KEY `job_id` (`job_id`);

--
-- Indexes for table `tokens`
--
ALTER TABLE `tokens`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `advance_payment`
--
ALTER TABLE `advance_payment`
  MODIFY `adpayment_id` int(100) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `audio_gear`
--
ALTER TABLE `audio_gear`
  MODIFY `audio_id` int(100) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `c_id` int(60) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;
--
-- AUTO_INCREMENT for table `customer_complaint`
--
ALTER TABLE `customer_complaint`
  MODIFY `complaint_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `email_verification`
--
ALTER TABLE `email_verification`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `instrument`
--
ALTER TABLE `instrument`
  MODIFY `instrument_id` int(100) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `membership_payment`
--
ALTER TABLE `membership_payment`
  MODIFY `mpay_id` int(100) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `owner`
--
ALTER TABLE `owner`
  MODIFY `owner_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `reserved _job`
--
ALTER TABLE `reserved _job`
  MODIFY `job_id` int(100) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `service`
--
ALTER TABLE `service`
  MODIFY `service_id` int(100) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `studio`
--
ALTER TABLE `studio`
  MODIFY `studio_id` int(60) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
--
-- AUTO_INCREMENT for table `studio_complaint`
--
ALTER TABLE `studio_complaint`
  MODIFY `complaint_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `time_slot`
--
ALTER TABLE `time_slot`
  MODIFY `t_id` int(100) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tokens`
--
ALTER TABLE `tokens`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `advance_payment`
--
ALTER TABLE `advance_payment`
  ADD CONSTRAINT `advance_payment_ibfk_1` FOREIGN KEY (`c_id`) REFERENCES `customer` (`c_id`),
  ADD CONSTRAINT `advance_payment_ibfk_2` FOREIGN KEY (`studio_id`) REFERENCES `studio` (`studio_id`);

--
-- Constraints for table `customer_complaint`
--
ALTER TABLE `customer_complaint`
  ADD CONSTRAINT `customer_complaint_ibfk_1` FOREIGN KEY (`c_id`) REFERENCES `customer` (`c_id`),
  ADD CONSTRAINT `customer_complaint_ibfk_2` FOREIGN KEY (`studio_id`) REFERENCES `studio` (`studio_id`);

--
-- Constraints for table `membership_payment`
--
ALTER TABLE `membership_payment`
  ADD CONSTRAINT `membership_payment_ibfk_1` FOREIGN KEY (`studio_id`) REFERENCES `studio` (`studio_id`);

--
-- Constraints for table `message`
--
ALTER TABLE `message`
  ADD CONSTRAINT `message_ibfk_1` FOREIGN KEY (`c_id`) REFERENCES `customer` (`c_id`),
  ADD CONSTRAINT `message_ibfk_2` FOREIGN KEY (`studio_id`) REFERENCES `studio` (`studio_id`);

--
-- Constraints for table `rate`
--
ALTER TABLE `rate`
  ADD CONSTRAINT `rate_ibfk_1` FOREIGN KEY (`c_id`) REFERENCES `customer` (`c_id`),
  ADD CONSTRAINT `rate_ibfk_2` FOREIGN KEY (`studio_id`) REFERENCES `studio` (`studio_id`) ON DELETE CASCADE;

--
-- Constraints for table `reserved_audio_gear`
--
ALTER TABLE `reserved_audio_gear`
  ADD CONSTRAINT `reserved_audio_gear_ibfk_1` FOREIGN KEY (`job_id`) REFERENCES `reserved _job` (`job_id`),
  ADD CONSTRAINT `reserved_audio_gear_ibfk_2` FOREIGN KEY (`audio_id`) REFERENCES `audio_gear` (`audio_id`);

--
-- Constraints for table `reserved_instrument`
--
ALTER TABLE `reserved_instrument`
  ADD CONSTRAINT `reserved_instrument_ibfk_1` FOREIGN KEY (`instrument_id`) REFERENCES `instrument` (`instrument_id`),
  ADD CONSTRAINT `reserved_instrument_ibfk_2` FOREIGN KEY (`job_id`) REFERENCES `reserved _job` (`job_id`);

--
-- Constraints for table `reserved _job`
--
ALTER TABLE `reserved _job`
  ADD CONSTRAINT `reserved _job_ibfk_1` FOREIGN KEY (`adpayment_id`) REFERENCES `advance_payment` (`adpayment_id`);

--
-- Constraints for table `studio`
--
ALTER TABLE `studio`
  ADD CONSTRAINT `studio_ibfk_1` FOREIGN KEY (`owner_id`) REFERENCES `owner` (`owner_id`);

--
-- Constraints for table `studio_complaint`
--
ALTER TABLE `studio_complaint`
  ADD CONSTRAINT `studio_complaint_ibfk_1` FOREIGN KEY (`studio_id`) REFERENCES `studio` (`studio_id`),
  ADD CONSTRAINT `studio_complaint_ibfk_2` FOREIGN KEY (`c_id`) REFERENCES `customer` (`c_id`);

--
-- Constraints for table `studio_reserved_sevice`
--
ALTER TABLE `studio_reserved_sevice`
  ADD CONSTRAINT `studio_reserved_sevice_ibfk_1` FOREIGN KEY (`job_id`) REFERENCES `reserved _job` (`job_id`),
  ADD CONSTRAINT `studio_reserved_sevice_ibfk_2` FOREIGN KEY (`studio_id`) REFERENCES `studio` (`studio_id`),
  ADD CONSTRAINT `studio_reserved_sevice_ibfk_3` FOREIGN KEY (`service_id`) REFERENCES `service` (`service_id`);

--
-- Constraints for table `studio_service`
--
ALTER TABLE `studio_service`
  ADD CONSTRAINT `studio_service_ibfk_1` FOREIGN KEY (`service_id`) REFERENCES `service` (`service_id`),
  ADD CONSTRAINT `studio_service_ibfk_2` FOREIGN KEY (`studio_id`) REFERENCES `studio` (`studio_id`);

--
-- Constraints for table `time_slot`
--
ALTER TABLE `time_slot`
  ADD CONSTRAINT `time_slot_ibfk_1` FOREIGN KEY (`job_id`) REFERENCES `reserved _job` (`job_id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
