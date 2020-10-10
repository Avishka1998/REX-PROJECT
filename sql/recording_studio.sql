-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 07, 2020 at 06:25 PM
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
-- Table structure for table `complain`
--

CREATE TABLE `complain` (
  `complain_id` int(100) NOT NULL,
  `discription` varchar(500) NOT NULL
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
  `password` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`c_id`, `first_name`, `last_name`, `email`, `tele_no`, `password`) VALUES
(22, 'sasindu', 'sensly', 'sasindusubodhaka@gmail.com', 876575, '0ec09ef9836da03f1add21e3ef607627e687e790'),
(23, 'nuwan', 'nuwan', 'nuwan@gmail.com', 1234, '12ea8d6a2aba2db083396f05b87a2254cf2402de'),
(24, 'nimal', 'perera', 'sdfkjg@gmail.com', 75479, '7110eda4d09e062aa5e4a390b0a572ac0d2c0220'),
(25, 'nimal', 'perera', 'sdfkjgksjfhg@gmail.com', 75479, '6643521711328a1e282daf5a5da43970eb11a089'),
(26, 'sasindu', 'sensly', 'yasasindusubodhaka@gmail.com', 455, '51eac6b471a284d3341d8c0c63d0f1a286262a18'),
(27, 'sasindu', 'sensly', 'sasindusubodhakasensly@gmail.com', 98374, '0ec09ef9836da03f1add21e3ef607627e687e790');

-- --------------------------------------------------------

--
-- Table structure for table `customer_studio_complain`
--

CREATE TABLE `customer_studio_complain` (
  `c_id` int(100) NOT NULL,
  `studio_id` int(100) NOT NULL,
  `complain_id` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
(9, 'sasindu', 'sensly', 'abc@gmail.com', 123456);

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
  `owner_id` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `studio`
--

INSERT INTO `studio` (`studio_id`, `studio_name`, `s_address_line1`, `s_address_line2`, `s_city`, `distric`, `postalcode`, `s_email`, `password`, `s_tele_no`, `owner_id`) VALUES
(26, 'ABC', 'DEF', 'GHI', 'JKL', 'JKL', '234', 'ABC@gmail.com', '', 55, 4),
(27, 'CDE', 'sdjhg', 'fkjh', 'kjhs', 'kjhs', '67', 'nimalstudio@gmail.com', '6643521711328a1e282daf5a5da43970eb11a089', 4569, 5),
(28, 'sanathstudio', 'rathnaputa', 'rathnapura', 'rathnapura', 'rathnapura', '23', 'sanathstudio@gmail.com', 'd1e9e8ca064dafb40c71e7ff8d9161f4a2ef63de', 779726091, 6),
(29, 'sanathbogodastudio', 'balangoda', 'balangoda', 'balangoda', 'balangoda', '23', 'sanathbodgo@gmail.com', '04326d95aad2ca113e57c3329e753c564e7f64b5', 4674, 6),
(30, 'hjf', 'fdf', 'dfdf', 'fdfdfdf', 'fdfdfdf', '454', 'nimalstudiosen@gmail.com', '51eac6b471a284d3341d8c0c63d0f1a286262a18', 234, 7);

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
-- Indexes for table `complain`
--
ALTER TABLE `complain`
  ADD PRIMARY KEY (`complain_id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`c_id`);

--
-- Indexes for table `customer_studio_complain`
--
ALTER TABLE `customer_studio_complain`
  ADD PRIMARY KEY (`c_id`,`studio_id`,`complain_id`),
  ADD KEY `studio_id` (`studio_id`),
  ADD KEY `complain_id` (`complain_id`);

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
-- AUTO_INCREMENT for table `complain`
--
ALTER TABLE `complain`
  MODIFY `complain_id` int(100) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `c_id` int(60) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

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
  MODIFY `owner_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

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
  MODIFY `studio_id` int(60) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

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
-- Constraints for table `customer_studio_complain`
--
ALTER TABLE `customer_studio_complain`
  ADD CONSTRAINT `customer_studio_complain_ibfk_1` FOREIGN KEY (`studio_id`) REFERENCES `studio` (`studio_id`),
  ADD CONSTRAINT `customer_studio_complain_ibfk_2` FOREIGN KEY (`c_id`) REFERENCES `customer` (`c_id`) ON DELETE CASCADE,
  ADD CONSTRAINT `customer_studio_complain_ibfk_3` FOREIGN KEY (`complain_id`) REFERENCES `complain` (`complain_id`);

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
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;