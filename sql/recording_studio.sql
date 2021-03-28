-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 28, 2021 at 01:00 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.2

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
-- Table structure for table `blocked_dates`
--

CREATE TABLE `blocked_dates` (
  `bid` int(5) NOT NULL,
  `sid` int(5) NOT NULL,
  `dates` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `blocked_dates`
--

INSERT INTO `blocked_dates` (`bid`, `sid`, `dates`) VALUES
(2, 31, '2021-03-25'),
(6, 31, '2021-05-11'),
(7, 31, '2021-07-13');

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
  `image` varchar(500) NOT NULL,
  `status` varchar(10) NOT NULL DEFAULT 'Active now'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`c_id`, `first_name`, `last_name`, `email`, `tele_no`, `password`, `email_verified`, `blocked`, `image`, `status`) VALUES
(23, 'Dinindu', 'Navanjana', 'nuwan@gmail.com', 722345147, '7c222fb2927d828af22f592134e8932480637c0d', 1, 0, 'maxresdefault.jpg', 'Active now'),
(48, 'Ariana', 'Grande', 'ariana@example.com', 412282222, '7c222fb2927d828af22f592134e8932480637c0d', 1, 0, '5bc79179fc7e160bf846da82.jfif', 'Active now'),
(49, 'Charlie', 'Puth', 'charlie@example.com', 718822545, '7c222fb2927d828af22f592134e8932480637c0d', 1, 0, 'charlie-puth-summertime-ball-2017-1-1497126768-custom-0.jpg', 'Active now'),
(51, 'Jogn', 'Paul', 'paula@example.com', 742558744, '7c222fb2927d828af22f592134e8932480637c0d', 1, 1, '', 'Active now');

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
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `msg_id` int(100) NOT NULL,
  `c_id` int(10) NOT NULL,
  `s_id` int(10) NOT NULL,
  `incoming_msg` varchar(255) NOT NULL DEFAULT '0',
  `outgoing_msg` varchar(255) NOT NULL DEFAULT '0',
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
(21, 'Ravindu', 'Bhagya', 'pavinduavishka@gmail.com', 725645879),
(22, 'Pual', 'Stirling', 'pauls@example.com', 725566456);

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
-- Table structure for table `removed_users`
--

CREATE TABLE `removed_users` (
  `id` int(5) NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `reserved_audio_gear`
--

CREATE TABLE `reserved_audio_gear` (
  `audio_id` int(5) NOT NULL,
  `job_id` int(5) NOT NULL,
  `name` varchar(100) NOT NULL,
  `charge` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `reserved_audio_gear`
--

INSERT INTO `reserved_audio_gear` (`audio_id`, `job_id`, `name`, `charge`) VALUES
(4, 39, 'Tube Microphone', 1400),
(6, 39, '2X Guitars', 450);

-- --------------------------------------------------------

--
-- Table structure for table `reserved_job`
--

CREATE TABLE `reserved_job` (
  `job_id` int(5) NOT NULL,
  `c_id` int(5) NOT NULL,
  `studio_id` int(5) NOT NULL,
  `date` date NOT NULL,
  `choose_time` timestamp NULL DEFAULT NULL,
  `isplaced` int(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `reserved_job`
--

INSERT INTO `reserved_job` (`job_id`, `c_id`, `studio_id`, `date`, `choose_time`, `isplaced`) VALUES
(39, 23, 31, '2021-03-27', '2021-03-27 10:10:34', 1);

-- --------------------------------------------------------

--
-- Table structure for table `reserved_services`
--

CREATE TABLE `reserved_services` (
  `res_id` int(5) NOT NULL,
  `job_id` int(5) NOT NULL,
  `service_name` varchar(100) NOT NULL,
  `charge` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `reserved_services`
--

INSERT INTO `reserved_services` (`res_id`, `job_id`, `service_name`, `charge`) VALUES
(80, 39, 'Dubbing', 3200),
(81, 39, 'Mastering', 1500);

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
  `paypal` varchar(100) NOT NULL,
  `owner_id` int(100) NOT NULL,
  `profile` varchar(500) NOT NULL,
  `cover` varchar(500) NOT NULL,
  `description` text NOT NULL,
  `latitude` varchar(50) NOT NULL,
  `longitude` varchar(50) NOT NULL,
  `verified` tinyint(4) NOT NULL DEFAULT 0,
  `email_verified` tinyint(1) NOT NULL DEFAULT 0,
  `owner_verified` tinyint(1) NOT NULL DEFAULT 0,
  `blocked` int(1) NOT NULL DEFAULT 0,
  `status` varchar(10) NOT NULL DEFAULT 'Active now'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `studio`
--

INSERT INTO `studio` (`studio_id`, `studio_name`, `s_address_line1`, `s_address_line2`, `s_city`, `distric`, `postalcode`, `s_email`, `password`, `s_tele_no`, `paypal`, `owner_id`, `profile`, `cover`, `description`, `latitude`, `longitude`, `verified`, `email_verified`, `owner_verified`, `blocked`, `status`) VALUES
(31, 'InWave Music Studio', '396/B', 'Tangalle Rd', 'Weeraketiya', 'Hambantota', '184481', 'chandanastudios@gmail.com', '7c222fb2927d828af22f592134e8932480637c0d', 770866346, 'lakaisui@gmail.com', 10, 'man-profile-silhouette-with-headphone-music-vector-1305904.jpg', '0ec5c569226647.5b79b483096c1.jpg', 'Abbey Road studios are now regarded as the most iconic set of studios going, you can bet almost anyone has heard of them even if they’re not in the music industry. With their high-end gear and clientele boasting some of the most legendary names in the music business from The Beatles and Aretha Franklin to Kanye West and Lady Gaga, it’s no surprise they take the number one spot on our list.One of my favourite things about their online mastering service is they give you the option to handpick your own mastering engineer from a list of 5 Abbey Road approved mastering specialists included in their online mastering package starting at just £90.', '6.9022', '79.8612', 1, 1, 0, 0, 'Active now'),
(36, 'Lahiru Audio Vision', '19/2', 'Kottawa Rd', 'Piliyandala', 'Colombo', '45714', 'lahiruaudio@example.com', '7c222fb2927d828af22f592134e8932480637c0d', 714568794, '', 21, '579ac30d06d7f66d701da57d_profile.jpg', '83ff029f775b748955df61a8805fdcee.jpg', 'Lahiru studios are now regarded as the most iconic set of studios going, you can bet almost anyone has heard of them even if they’re not in the music industry. With their high-end gear and clientele boasting some of the most legendary names in the music business from The Beatles and Aretha Franklin to Kanye West and Lady Gaga, it’s no surprise they take the number one spot on our list. You will be surprised that the price range can be fairly affordable considering what you get for your money and it’s worth noting that what’s charged to major clients is more than independent musicians and unsigned artists, so always ask if there’s wiggle room on their rates. ', '6.214754', '80.12547', 1, 1, 0, 0, 'Active now'),
(38, 'Vaanavil Studio', '654', 'Kandy Rd', 'Kannathiddy', 'Jaffna', '84721', 'vaanavil@example.com', '7c222fb2927d828af22f592134e8932480637c0d', 714568977, '', 21, '', '', '', '9.6615', '80.0255', 0, 1, 0, 0, 'Active now'),
(39, 'Static Audio Productions', '53', 'Estate Rd', 'Wilgoda', 'Kurunegala', '80400', 'static@example.com', '7c222fb2927d828af22f592134e8932480637c0d', 723778899, '', 16, '', '', '', '7.4818', '80.3609', 0, 1, 0, 0, 'Active now'),
(46, 'Paul Audio Productions', 'Lesly Ranagala Rd', 'Vanathamulla', 'Borella', 'Colombo', '52478', 'paulstudio@example.com', '7c222fb2927d828af22f592134e8932480637c0d', 716542147, '', 22, 'profile-204302-1071312414840020034.png', 'music-review-blog-youtube-banner-design-template-0f6f36593959a5fe315a97e1b3e48534_screen.jpg', '', '', '', 1, 1, 0, 0, 'Active now'),
(52, 'Pavi Production', '396', 'Deniyaya Rd', 'Morawaka', 'Matara', '81470', 'naveenudara356@gmail.com', '7c222fb2927d828af22f592134e8932480637c0d', 768404899, '', 21, '', '', '', '', '', 1, 1, 0, 0, 'Active now');

-- --------------------------------------------------------

--
-- Table structure for table `studio_audio_gear`
--

CREATE TABLE `studio_audio_gear` (
  `audio_id` int(5) NOT NULL,
  `studio_id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `charge` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `studio_audio_gear`
--

INSERT INTO `studio_audio_gear` (`audio_id`, `studio_id`, `name`, `charge`) VALUES
(1, 31, 'Tube Microphone', 1400),
(2, 31, 'Tube Microphone', 1400),
(3, 31, 'Tube Microphone', 1400),
(4, 31, 'Tube Microphone', 1400),
(5, 31, '2X Guitars', 450),
(6, 31, '2X Guitars', 450),
(7, 31, '2X Guitars', 450);

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
(1, 31, 'HKgL-ZnKXYY', '0FuIX3yHmdo', 'TwXQYOlFKeY', 'Y6RzPqoEEJM');

-- --------------------------------------------------------

--
-- Table structure for table `studio_schedule`
--

CREATE TABLE `studio_schedule` (
  `id` int(5) NOT NULL,
  `issatblocked` int(1) NOT NULL DEFAULT 0,
  `issunblocked` int(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `studio_schedule`
--

INSERT INTO `studio_schedule` (`id`, `issatblocked`, `issunblocked`) VALUES
(31, 1, 1),
(36, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `studio_service`
--

CREATE TABLE `studio_service` (
  `studio_id` int(100) NOT NULL,
  `service_name` varchar(100) NOT NULL,
  `service_charge` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `studio_service`
--

INSERT INTO `studio_service` (`studio_id`, `service_name`, `service_charge`) VALUES
(31, 'Dubbing', 3200),
(31, 'Mastering', 1500),
(31, 'Mixing', 1250),
(31, 'Recording', 750),
(31, 'Singing', 1450);

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
-- Indexes for table `blocked_dates`
--
ALTER TABLE `blocked_dates`
  ADD PRIMARY KEY (`bid`),
  ADD KEY `sid` (`sid`);

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
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`msg_id`),
  ADD KEY `c_id` (`c_id`),
  ADD KEY `s_id` (`s_id`);

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
-- Indexes for table `removed_users`
--
ALTER TABLE `removed_users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reserved_audio_gear`
--
ALTER TABLE `reserved_audio_gear`
  ADD PRIMARY KEY (`audio_id`,`job_id`),
  ADD KEY `job_id` (`job_id`);

--
-- Indexes for table `reserved_job`
--
ALTER TABLE `reserved_job`
  ADD PRIMARY KEY (`job_id`),
  ADD KEY `c_id` (`c_id`),
  ADD KEY `studio_id` (`studio_id`);

--
-- Indexes for table `reserved_services`
--
ALTER TABLE `reserved_services`
  ADD PRIMARY KEY (`res_id`),
  ADD KEY `job_id` (`job_id`),
  ADD KEY `service_name` (`service_name`);

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
  ADD PRIMARY KEY (`audio_id`),
  ADD KEY `studio_id` (`studio_id`);

--
-- Indexes for table `studio_complaint`
--
ALTER TABLE `studio_complaint`
  ADD PRIMARY KEY (`complaint_id`),
  ADD KEY `studio_id` (`studio_id`,`c_id`),
  ADD KEY `c_id` (`c_id`);

--
-- Indexes for table `studio_portfolio`
--
ALTER TABLE `studio_portfolio`
  ADD PRIMARY KEY (`id`),
  ADD KEY `studio_id` (`studio_id`);

--
-- Indexes for table `studio_schedule`
--
ALTER TABLE `studio_schedule`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `studio_service`
--
ALTER TABLE `studio_service`
  ADD PRIMARY KEY (`studio_id`,`service_name`),
  ADD KEY `service_name` (`service_name`);

--
-- Indexes for table `tokens`
--
ALTER TABLE `tokens`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blocked_dates`
--
ALTER TABLE `blocked_dates`
  MODIFY `bid` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `c_id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT for table `customer_complaint`
--
ALTER TABLE `customer_complaint`
  MODIFY `complaint_id` int(100) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `email_verification`
--
ALTER TABLE `email_verification`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT for table `membership_payment`
--
ALTER TABLE `membership_payment`
  MODIFY `mpay_id` int(100) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `msg_id` int(100) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `owner`
--
ALTER TABLE `owner`
  MODIFY `owner_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `owner_verification`
--
ALTER TABLE `owner_verification`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `removed_users`
--
ALTER TABLE `removed_users`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `reserved_job`
--
ALTER TABLE `reserved_job`
  MODIFY `job_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `reserved_services`
--
ALTER TABLE `reserved_services`
  MODIFY `res_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=82;

--
-- AUTO_INCREMENT for table `sample_service`
--
ALTER TABLE `sample_service`
  MODIFY `service_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `studio`
--
ALTER TABLE `studio`
  MODIFY `studio_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT for table `studio_audio_gear`
--
ALTER TABLE `studio_audio_gear`
  MODIFY `audio_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

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
-- AUTO_INCREMENT for table `tokens`
--
ALTER TABLE `tokens`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `blocked_dates`
--
ALTER TABLE `blocked_dates`
  ADD CONSTRAINT `blocked_dates_ibfk_1` FOREIGN KEY (`sid`) REFERENCES `studio` (`studio_id`) ON DELETE CASCADE ON UPDATE CASCADE;

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
-- Constraints for table `messages`
--
ALTER TABLE `messages`
  ADD CONSTRAINT `messages_ibfk_1` FOREIGN KEY (`c_id`) REFERENCES `customer` (`c_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `messages_ibfk_2` FOREIGN KEY (`s_id`) REFERENCES `studio` (`studio_id`) ON DELETE CASCADE ON UPDATE CASCADE;

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
  ADD CONSTRAINT `reserved_audio_gear_ibfk_1` FOREIGN KEY (`job_id`) REFERENCES `reserved_job` (`job_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `reserved_audio_gear_ibfk_2` FOREIGN KEY (`audio_id`) REFERENCES `studio_audio_gear` (`audio_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `reserved_services`
--
ALTER TABLE `reserved_services`
  ADD CONSTRAINT `reserved_services_ibfk_1` FOREIGN KEY (`job_id`) REFERENCES `reserved_job` (`job_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `reserved_services_ibfk_2` FOREIGN KEY (`service_name`) REFERENCES `studio_service` (`service_name`);

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
-- Constraints for table `studio_portfolio`
--
ALTER TABLE `studio_portfolio`
  ADD CONSTRAINT `studio_portfolio_ibfk_1` FOREIGN KEY (`studio_id`) REFERENCES `studio` (`studio_id`) ON UPDATE NO ACTION;

--
-- Constraints for table `studio_schedule`
--
ALTER TABLE `studio_schedule`
  ADD CONSTRAINT `studio_schedule_ibfk_1` FOREIGN KEY (`id`) REFERENCES `studio` (`studio_id`) ON DELETE CASCADE ON UPDATE NO ACTION;

--
-- Constraints for table `studio_service`
--
ALTER TABLE `studio_service`
  ADD CONSTRAINT `studio_service_ibfk_2` FOREIGN KEY (`studio_id`) REFERENCES `studio` (`studio_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
