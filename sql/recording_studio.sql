-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 29, 2020 at 06:54 AM
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
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `c_id` int(6) NOT NULL,
  `first_name` varchar(60) NOT NULL,
  `last_name` varchar(60) NOT NULL,
  `email` varchar(60) NOT NULL,
  `tele_no` int(10) NOT NULL,
  `password` varchar(60) NOT NULL,
  `email_verified` tinyint(1) NOT NULL DEFAULT 0,
  `blocked` int(1) NOT NULL DEFAULT 0,
  `image` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`c_id`, `first_name`, `last_name`, `email`, `tele_no`, `password`, `email_verified`, `blocked`, `image`) VALUES
(23, 'Nuwan ', 'Fernando', 'nuwan@gmail.com', 765610043, '7c222fb2927d828af22f592134e8932480637c0d', 1, 0, 'intro-1528215750.jpg'),
(48, 'Ariana', 'Grande', 'ariana@example.com', 412282222, '83c682f6086bd7654e46ea8e6ecf31a6b495bd75', 1, 0, '5bc79179fc7e160bf846da82.jfif'),
(49, 'Charlie', 'Puth', 'charlie@example.com', 718822545, 'a498b9d11fa928bc649f5e2bf888d751a0620f81', 1, 0, 'charlie-puth-summertime-ball-2017-1-1497126768-custom-0.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `customer_complaint`
--

CREATE TABLE `customer_complaint` (
  `complaint_id` int(100) NOT NULL,
  `c_id` int(100) NOT NULL,
  `studio_id` int(100) NOT NULL,
  `description` varchar(500) NOT NULL,
  `flag` tinyint(4) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `email_verification`
--

CREATE TABLE `email_verification` (
  `id` int(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `token` varchar(100) NOT NULL
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
(10, 'chandana', 'Gamage', 'chandana@gmail.com', 775610041),
(11, 'addv', 'jjvj', 'jhvjhvjv@jbbh.com', 5445454),
(13, 'jhjvjv', 'hbjjb', 'kkbjb@jhgjvh.com', 2111),
(14, 'igiug', 'uggu', 'oihhoih@yfyfuyf.com', 455454),
(15, 'jgyguyg', 'yguyguyg', 'gugygu@jjhv.com', 4545),
(16, 'Kalana', 'Perera', 'kalana@gmail.com', 77),
(18, 'xfvg', 'Avishka', 'ggu@jjhv.com', 2147483647),
(21, 'Ravindu', 'Bhagya', 'pavinduavishka@gmail.com', 725645879);

-- --------------------------------------------------------

--
-- Table structure for table `owner_verification`
--

CREATE TABLE `owner_verification` (
  `id` int(5) NOT NULL,
  `email` varchar(50) NOT NULL,
  `st_email` varchar(50) NOT NULL,
  `token` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `owner_verification`
--

INSERT INTO `owner_verification` (`id`, `email`, `st_email`, `token`) VALUES
(7, 'chandana@gmail.com', 'chandanastudios@gmail.com', '8d2952c557505b11a6cc1b34c761daae5fb6a03b1c0d4');

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
-- Table structure for table `sample_equipment`
--

CREATE TABLE `sample_equipment` (
  `id` int(100) NOT NULL,
  `name` varchar(150) NOT NULL,
  `type` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sample_equipment`
--

INSERT INTO `sample_equipment` (`id`, `name`, `type`) VALUES
(1, 'Mitchell MD150PK', 0),
(2, 'Fender telecaster electric guitar', 0),
(3, 'Yamaha grand piano', 0),
(4, 'Marshall guitar amp', 1),
(5, 'Tube microphone', 1),
(6, 'Neumann M 150 Tube', 1);

-- --------------------------------------------------------

--
-- Table structure for table `sample_service`
--

CREATE TABLE `sample_service` (
  `service_id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sample_service`
--

INSERT INTO `sample_service` (`service_id`, `name`) VALUES
(1, 'Recording'),
(2, 'Mastering'),
(3, 'Mixing'),
(4, 'Dubbing');

-- --------------------------------------------------------

--
-- Table structure for table `studio`
--

CREATE TABLE `studio` (
  `studio_id` int(5) NOT NULL,
  `studio_name` varchar(100) NOT NULL,
  `s_address_line1` varchar(100) NOT NULL,
  `s_address_line2` varchar(100) NOT NULL,
  `s_city` varchar(100) NOT NULL,
  `distric` varchar(100) NOT NULL,
  `postalcode` varchar(100) NOT NULL,
  `s_email` varchar(100) NOT NULL,
  `password` varchar(200) NOT NULL,
  `s_tele_no` int(20) NOT NULL,
  `owner_id` int(100) NOT NULL,
  `profile` varchar(500) NOT NULL,
  `cover` varchar(500) NOT NULL,
  `description` text NOT NULL,
  `latitude` varchar(50) NOT NULL,
  `longitude` varchar(50) NOT NULL,
  `verified` tinyint(4) NOT NULL DEFAULT 0,
  `email_verified` tinyint(1) NOT NULL DEFAULT 0,
  `owner_verified` tinyint(1) NOT NULL DEFAULT 0,
  `blocked` int(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `studio`
--

INSERT INTO `studio` (`studio_id`, `studio_name`, `s_address_line1`, `s_address_line2`, `s_city`, `distric`, `postalcode`, `s_email`, `password`, `s_tele_no`, `owner_id`, `profile`, `cover`, `description`, `latitude`, `longitude`, `verified`, `email_verified`, `owner_verified`, `blocked`) VALUES
(31, 'InWave Music Studio', '396/B', 'Kandy Rd', 'Nugegoda', 'Colombo', '184472', 'chandanastudios@gmail.com', '7c222fb2927d828af22f592134e8932480637c0d', 770866346, 10, 'man-profile-silhouette-with-headphone-music-vector-1305904.jpg', '0ec5c569226647.5b79b483096c1.jpg', 'Abbey Road studios are now regarded as the most iconic set of studios going, you can bet almost anyone has heard of them even if they’re not in the music industry. With their high-end gear and clientele boasting some of the most legendary names in the music business from The Beatles and Aretha Franklin to Kanye West and Lady Gaga, it’s no surprise they take the number one spot on our list.One of my favourite things about their online mastering service is they give you the option to handpick your own mastering engineer from a list of 5 Abbey Road approved mastering specialists included in their online mastering package starting at just £90.', '6.9022', '79.8612', 1, 1, 0, 0),
(36, 'Lahiru Audio Vision', '19/2', 'Kottawa Rd', 'Piliyandala', 'Colombo', '45714', 'lahiruaudio@example.com', '7c222fb2927d828af22f592134e8932480637c0d', 714568794, 21, '579ac30d06d7f66d701da57d_profile.jpg', '83ff029f775b748955df61a8805fdcee.jpg', 'Lahiru studios are now regarded as the most iconic set of studios going, you can bet almost anyone has heard of them even if they’re not in the music industry. With their high-end gear and clientele boasting some of the most legendary names in the music business from The Beatles and Aretha Franklin to Kanye West and Lady Gaga, it’s no surprise they take the number one spot on our list. You will be surprised that the price range can be fairly affordable considering what you get for your money and it’s worth noting that what’s charged to major clients is more than independent musicians and unsigned artists, so always ask if there’s wiggle room on their rates. ', '6.214754', '80.12547', 1, 1, 0, 0),
(37, 'D-TAP Studios', '41/2', 'Kumaratunga Mawatha', 'Matara', 'Matara', '81470', 'dtap@example.com', '7c222fb2927d828af22f592134e8932480637c0d', 784568971, 21, 'profile-204302-1071312414840020034.png', 'music-review-blog-youtube-banner-design-template-0f6f36593959a5fe315a97e1b3e48534_screen.jpg', 'D-TAP studios are now regarded as the most iconic set of studios going, you can bet almost anyone has heard of them even if they’re not in the music industry. With their high-end gear and clientele boasting some of the most legendary names in the music business from The Beatles and Aretha Franklin to Kanye West and Lady Gaga, it’s no surprise they take the number one spot on our list. In 1970 the studios were renamed as Abbey Road Studios after the legendary Beatles album had struck fame. Fast forward to 2012 the studios became the property of Universal Music Group as they took over EMI for a cool £1.2 billion.', '6.25472', '75.2145', 1, 1, 0, 0),
(38, 'Vaanavil Studio', '654', 'Kandy Rd', 'Kannathiddy', 'Jaffna', '84721', 'vaanavil@example.com', '263b13a12a96eababc0c9c377c7711672b8e18d5', 714568977, 21, '', '', '', '9.6615', '80.0255', 0, 1, 0, 0),
(39, 'Static Audio Productions', '53', 'Estate Rd', 'Wilgoda', 'Kurunegala', '80400', 'static@example.com', 'b67d0ef0ae8a0e5052065b6dfc1d8737de68ed49', 723778899, 16, '', '', '', '7.4818', '80.3609', 0, 1, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `studio_audio_gear`
--

CREATE TABLE `studio_audio_gear` (
  `studio_id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `qty` int(100) NOT NULL,
  `charge` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `studio_complaint`
--

CREATE TABLE `studio_complaint` (
  `complaint_id` int(11) NOT NULL,
  `studio_id` int(100) NOT NULL,
  `c_id` int(100) NOT NULL,
  `description` varchar(500) NOT NULL,
  `flag` tinyint(4) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `studio_instrument`
--

CREATE TABLE `studio_instrument` (
  `studio_id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `qty` int(100) NOT NULL,
  `charge` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `studio_portfolio`
--

CREATE TABLE `studio_portfolio` (
  `id` int(5) NOT NULL,
  `studio_id` int(5) NOT NULL,
  `port1` varchar(15) DEFAULT 'pGCNVz4USLM',
  `port2` varchar(15) NOT NULL DEFAULT '0dUMGM7cu88',
  `port3` varchar(15) NOT NULL DEFAULT 'QzBACI0YP84',
  `port4` varchar(15) NOT NULL DEFAULT 'taOtlyhftU4'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `studio_portfolio`
--

INSERT INTO `studio_portfolio` (`id`, `studio_id`, `port1`, `port2`, `port3`, `port4`) VALUES
(1, 31, 'puJHdlB-SZs', 'gY230MyEcMg', '8D9d9weVQnI', 'vYC_7mzFzoc');

-- --------------------------------------------------------

--
-- Table structure for table `studio_reserved_sevice`
--

CREATE TABLE `studio_reserved_sevice` (
  `job_id` int(100) NOT NULL,
  `studio_id` int(100) NOT NULL,
  `service_name` varchar(100) NOT NULL,
  `service_charge` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `studio_service`
--

CREATE TABLE `studio_service` (
  `studio_id` int(100) NOT NULL,
  `service_name` varchar(100) NOT NULL,
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
-- Indexes for table `owner_verification`
--
ALTER TABLE `owner_verification`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `sample_equipment`
--
ALTER TABLE `sample_equipment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sample_service`
--
ALTER TABLE `sample_service`
  ADD PRIMARY KEY (`service_id`);

--
-- Indexes for table `studio`
--
ALTER TABLE `studio`
  ADD PRIMARY KEY (`studio_id`),
  ADD KEY `owner_id` (`owner_id`);

--
-- Indexes for table `studio_audio_gear`
--
ALTER TABLE `studio_audio_gear`
  ADD PRIMARY KEY (`studio_id`,`name`),
  ADD KEY `studio_id` (`studio_id`);

--
-- Indexes for table `studio_complaint`
--
ALTER TABLE `studio_complaint`
  ADD PRIMARY KEY (`complaint_id`),
  ADD KEY `studio_id` (`studio_id`,`c_id`),
  ADD KEY `c_id` (`c_id`);

--
-- Indexes for table `studio_instrument`
--
ALTER TABLE `studio_instrument`
  ADD PRIMARY KEY (`studio_id`,`name`),
  ADD KEY `studio_id` (`studio_id`);

--
-- Indexes for table `studio_portfolio`
--
ALTER TABLE `studio_portfolio`
  ADD PRIMARY KEY (`id`),
  ADD KEY `studio_id` (`studio_id`);

--
-- Indexes for table `studio_reserved_sevice`
--
ALTER TABLE `studio_reserved_sevice`
  ADD PRIMARY KEY (`job_id`,`studio_id`,`service_name`),
  ADD KEY `studio_id` (`studio_id`),
  ADD KEY `service_id` (`service_name`);

--
-- Indexes for table `studio_service`
--
ALTER TABLE `studio_service`
  ADD PRIMARY KEY (`studio_id`,`service_name`),
  ADD KEY `service_name` (`service_name`);

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
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `c_id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT for table `customer_complaint`
--
ALTER TABLE `customer_complaint`
  MODIFY `complaint_id` int(100) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `email_verification`
--
ALTER TABLE `email_verification`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `membership_payment`
--
ALTER TABLE `membership_payment`
  MODIFY `mpay_id` int(100) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `owner`
--
ALTER TABLE `owner`
  MODIFY `owner_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `owner_verification`
--
ALTER TABLE `owner_verification`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `reserved _job`
--
ALTER TABLE `reserved _job`
  MODIFY `job_id` int(100) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sample_service`
--
ALTER TABLE `sample_service`
  MODIFY `service_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `studio`
--
ALTER TABLE `studio`
  MODIFY `studio_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `studio_complaint`
--
ALTER TABLE `studio_complaint`
  MODIFY `complaint_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `studio_portfolio`
--
ALTER TABLE `studio_portfolio`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `time_slot`
--
ALTER TABLE `time_slot`
  MODIFY `t_id` int(100) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tokens`
--
ALTER TABLE `tokens`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT;

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
  ADD CONSTRAINT `reserved_audio_gear_ibfk_1` FOREIGN KEY (`job_id`) REFERENCES `reserved _job` (`job_id`);

--
-- Constraints for table `reserved_instrument`
--
ALTER TABLE `reserved_instrument`
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
-- Constraints for table `studio_audio_gear`
--
ALTER TABLE `studio_audio_gear`
  ADD CONSTRAINT `studio_audio_gear_ibfk_1` FOREIGN KEY (`studio_id`) REFERENCES `studio` (`studio_id`);

--
-- Constraints for table `studio_complaint`
--
ALTER TABLE `studio_complaint`
  ADD CONSTRAINT `studio_complaint_ibfk_1` FOREIGN KEY (`studio_id`) REFERENCES `studio` (`studio_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `studio_complaint_ibfk_2` FOREIGN KEY (`c_id`) REFERENCES `customer` (`c_id`);

--
-- Constraints for table `studio_instrument`
--
ALTER TABLE `studio_instrument`
  ADD CONSTRAINT `studio_instrument_ibfk_1` FOREIGN KEY (`studio_id`) REFERENCES `studio` (`studio_id`);

--
-- Constraints for table `studio_portfolio`
--
ALTER TABLE `studio_portfolio`
  ADD CONSTRAINT `studio_portfolio_ibfk_1` FOREIGN KEY (`studio_id`) REFERENCES `studio` (`studio_id`) ON UPDATE NO ACTION;

--
-- Constraints for table `studio_reserved_sevice`
--
ALTER TABLE `studio_reserved_sevice`
  ADD CONSTRAINT `studio_reserved_sevice_ibfk_1` FOREIGN KEY (`job_id`) REFERENCES `reserved _job` (`job_id`),
  ADD CONSTRAINT `studio_reserved_sevice_ibfk_2` FOREIGN KEY (`studio_id`) REFERENCES `studio` (`studio_id`),
  ADD CONSTRAINT `studio_reserved_sevice_ibfk_3` FOREIGN KEY (`service_name`) REFERENCES `studio_service` (`service_name`);

--
-- Constraints for table `studio_service`
--
ALTER TABLE `studio_service`
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
