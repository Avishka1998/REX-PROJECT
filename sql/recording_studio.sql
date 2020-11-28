-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 28, 2020 at 11:56 AM
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
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `c_id` int(6) NOT NULL,
  `first_name` varchar(60) NOT NULL,
  `last_name` varchar(60) NOT NULL,
  `email` varchar(60) NOT NULL,
  `tele_no` int(10) NOT NULL,
  `password` varchar(60) NOT NULL,
  `email_verified` tinyint(1) NOT NULL DEFAULT '0',
  `blocked` int(1) NOT NULL DEFAULT '0',
  `image` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`c_id`, `first_name`, `last_name`, `email`, `tele_no`, `password`, `email_verified`, `blocked`, `image`) VALUES
(23, 'nuwan', 'fernando', 'nuwan@gmail.com', 765610043, '6edf8b2bd1b6e03a535504401e6969c850269632', 1, 0, 'ford-mustang-apollo-edition-3840x2160-mustang-white-sport-cars-7638.jpg'),
(47, 'Pavindu', 'Avishka', 'pavinduavishka@gmail.com', 765845445, '6216f8a75fd5bb3d5f22b6f9958cdede3fc086c2', 1, 0, '');

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
(13, 'sasindusubodhaka@gmail.com', 'e3e0dcc71094a74a01910c1672b132265f89377803473'),
(14, 'sanathhome@gmail.com', '1f7a0cc68cbffa9d26f453eec0a747a95f9d9b24338b7'),
(15, '123@gmail.com', '287cef6106486a6b9e65a8d2b3aaf9f55f9ee81d1e718'),
(16, 'sasindusubodhaka@gmail.com', 'b9152bf75bca4121302ac6237d9a68dc5f9ee8ba2f40f'),
(18, 'sasindusubodhaka@gmail.com', '7fc86fa24a31ddc1a7cf5ba3d3b0b8395faaa6a807b5d'),
(23, 'vishkaavinash@gmail.com', '702ff56cb1716dff6b5d8588c487530c5fad66d3e2586'),
(25, 'vishkaavinash@gmail.com', '7a3810f024dab70375543147e6a592535fae2119cf9ff'),
(26, 'vishkaavinash@gmail.com', '894f9407e5d7d99aac8a18a5eb153a785fae24d1987bb');

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
(21, 'wfjnjono', 'ononon', 'pavinduavishka@gmail.com', 644646);

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
  `s_tele_no` int(10) NOT NULL,
  `owner_id` int(100) NOT NULL,
  `profile` varchar(500) NOT NULL,
  `cover` varchar(500) NOT NULL,
  `description` text NOT NULL,
  `latitude` varchar(50) NOT NULL,
  `longitude` varchar(50) NOT NULL,
  `verified` tinyint(4) NOT NULL DEFAULT '0',
  `email_verified` tinyint(1) NOT NULL DEFAULT '0',
  `owner_verified` tinyint(1) NOT NULL DEFAULT '0',
  `blocked` int(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `studio`
--

INSERT INTO `studio` (`studio_id`, `studio_name`, `s_address_line1`, `s_address_line2`, `s_city`, `distric`, `postalcode`, `s_email`, `password`, `s_tele_no`, `owner_id`, `profile`, `cover`, `description`, `latitude`, `longitude`, `verified`, `email_verified`, `owner_verified`, `blocked`) VALUES
(26, 'ABC', 'DEF', 'GHI', 'JKL', 'JKL', '234', 'ABC@gmail.com', '', 55, 4, '', '', '', '', '', 1, 0, 0, 0),
(28, 'sanathstudio', 'rathnaputa', 'rathnapura', 'rathnapura', 'rathnapura', '23', 'sanathstudio@gmail.com', 'd1e9e8ca064dafb40c71e7ff8d9161f4a2ef63de', 779726091, 6, '', '', '', '6.261826', '80.4910', 0, 1, 1, 0),
(29, 'sanathbogodastudio', 'balangoda', 'balangoda', 'balangoda', 'balangoda', '23', 'sanathbodgo@gmail.com', '04326d95aad2ca113e57c3329e753c564e7f64b5', 4674, 6, '', '', '', '', '', 0, 1, 0, 0),
(30, 'hjf', 'fdf', 'dfdf', 'fdfdfdf', 'fdfdfdf', '454', 'nimalstudiosen@gmail.com', '51eac6b471a284d3341d8c0c63d0f1a286262a18', 234, 7, '', '', '', '', '', 1, 1, 0, 0),
(31, 'CHASTUDIO', '396/B', 'Kandy Rd', 'Miriswatta', 'Gampaha', '184472', 'chandanastudios@gmail.com', '6c3f5e05b273fece80a7e7d7c269701f365d43dd', 455610043, 10, 'imageedit_1_7612725206.jpg', '4f513e2e6ebdd99d743b8925195f4bbf.jpg', 'World Wrestling Entertainment, WWE, is an American integrated media and entertainment company that is primarily known for professional wrestling. WWE has also branched out into other fields, including movies, football, and various other business ventures.', '6.9022', '79.8612', 1, 1, 0, 0),
(35, 'sanathhomestudio', 'abcd', 'a', 'colombo', 'colombo', '234', 'sanathhome@gmail.com', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', 7645609, 6, '', '', '', '', '', 1, 0, 0, 0);

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
  `flag` tinyint(4) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `studio_complaint`
--

INSERT INTO `studio_complaint` (`complaint_id`, `studio_id`, `c_id`, `description`, `flag`) VALUES
(1, 28, 23, 'sdsd', 1),
(2, 28, 23, 'sddfjdhbf', 1),
(3, 28, 23, 'sdfjdgfdjfgd', 1);

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
(1, 31, 'Qc6otXqaL0I', 'w7gPF3kYJgA', '', 'v29rQgxF-FY');

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
  MODIFY `c_id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;
--
-- AUTO_INCREMENT for table `customer_complaint`
--
ALTER TABLE `customer_complaint`
  MODIFY `complaint_id` int(100) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `email_verification`
--
ALTER TABLE `email_verification`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
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
  MODIFY `studio_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;
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
  ADD CONSTRAINT `studio_complaint_ibfk_1` FOREIGN KEY (`studio_id`) REFERENCES `studio` (`studio_id`),
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

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
