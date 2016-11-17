-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 17, 2016 at 07:06 PM
-- Server version: 5.6.24
-- PHP Version: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `eventreg`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `admin_id` int(11) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `buy_ticket`
--

CREATE TABLE IF NOT EXISTS `buy_ticket` (
  `buy_id` int(11) NOT NULL,
  `date` date NOT NULL,
  `paid` varchar(50) DEFAULT NULL,
  `ordered` varchar(50) DEFAULT NULL,
  `count` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE IF NOT EXISTS `customer` (
  `cus_id` int(11) NOT NULL,
  `cus_name` varchar(255) NOT NULL,
  `user_name` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `provider` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `event`
--

CREATE TABLE IF NOT EXISTS `event` (
  `event_id` int(11) NOT NULL,
  `event_name` varchar(50) NOT NULL,
  `event_provider` varchar(100) NOT NULL,
  `category` varchar(100) NOT NULL,
  `e_date` date NOT NULL,
  `start_time` time NOT NULL,
  `end_time` time NOT NULL,
  `status` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `hall`
--

CREATE TABLE IF NOT EXISTS `hall` (
  `hall_id` int(11) NOT NULL,
  `seats` int(11) NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE IF NOT EXISTS `order` (
  `order_id` int(11) NOT NULL,
  `order_status` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `other_party`
--

CREATE TABLE IF NOT EXISTS `other_party` (
  `p_id` int(11) NOT NULL,
  `service_provider` varchar(100) NOT NULL,
  `password` varchar(50) NOT NULL,
  `contact_number` varchar(10) NOT NULL,
  `email` varchar(50) DEFAULT NULL,
  `catergory` varchar(100) NOT NULL,
  `description` varchar(255) NOT NULL,
  `url` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `package`
--

CREATE TABLE IF NOT EXISTS `package` (
  `pack_id` int(11) NOT NULL,
  `pack_name` varchar(100) NOT NULL,
  `price` int(11) NOT NULL,
  `description` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `package_item`
--

CREATE TABLE IF NOT EXISTS `package_item` (
  `item_id` int(11) NOT NULL,
  `item_name` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `private`
--

CREATE TABLE IF NOT EXISTS `private` (
  `private_id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `ticket`
--

CREATE TABLE IF NOT EXISTS `ticket` (
  `ticket_id` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `state` varchar(50) NOT NULL,
  `available` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `buy_ticket`
--
ALTER TABLE `buy_ticket`
  ADD PRIMARY KEY (`buy_id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`cus_id`);

--
-- Indexes for table `event`
--
ALTER TABLE `event`
  ADD PRIMARY KEY (`event_id`);

--
-- Indexes for table `hall`
--
ALTER TABLE `hall`
  ADD PRIMARY KEY (`hall_id`);

--
-- Indexes for table `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `other_party`
--
ALTER TABLE `other_party`
  ADD PRIMARY KEY (`p_id`);

--
-- Indexes for table `package`
--
ALTER TABLE `package`
  ADD PRIMARY KEY (`pack_id`);

--
-- Indexes for table `package_item`
--
ALTER TABLE `package_item`
  ADD PRIMARY KEY (`item_id`);

--
-- Indexes for table `private`
--
ALTER TABLE `private`
  ADD PRIMARY KEY (`private_id`);

--
-- Indexes for table `ticket`
--
ALTER TABLE `ticket`
  ADD PRIMARY KEY (`ticket_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `buy_ticket`
--
ALTER TABLE `buy_ticket`
  MODIFY `buy_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `cus_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `event`
--
ALTER TABLE `event`
  MODIFY `event_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `hall`
--
ALTER TABLE `hall`
  MODIFY `hall_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `order`
--
ALTER TABLE `order`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `other_party`
--
ALTER TABLE `other_party`
  MODIFY `p_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `package`
--
ALTER TABLE `package`
  MODIFY `pack_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `package_item`
--
ALTER TABLE `package_item`
  MODIFY `item_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `private`
--
ALTER TABLE `private`
  MODIFY `private_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `ticket`
--
ALTER TABLE `ticket`
  MODIFY `ticket_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `admin`
--
ALTER TABLE `admin`
ADD CONSTRAINT `FK_admin_event` FOREIGN KEY (`admin_id`) REFERENCES `event` (`event_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `buy_ticket`
--
ALTER TABLE `buy_ticket`
ADD CONSTRAINT `FK_buy_ticket_customer` FOREIGN KEY (`buy_id`) REFERENCES `customer` (`cus_id`) ON DELETE CASCADE ON UPDATE CASCADE,
ADD CONSTRAINT `FK_buy_ticket_ticket` FOREIGN KEY (`buy_id`) REFERENCES `ticket` (`ticket_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `event`
--
ALTER TABLE `event`
ADD CONSTRAINT `FK_event_customer` FOREIGN KEY (`event_id`) REFERENCES `customer` (`cus_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `hall`
--
ALTER TABLE `hall`
ADD CONSTRAINT `FK_hall_event` FOREIGN KEY (`hall_id`) REFERENCES `event` (`event_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `order`
--
ALTER TABLE `order`
ADD CONSTRAINT `FK_order_event` FOREIGN KEY (`order_id`) REFERENCES `event` (`event_id`) ON DELETE CASCADE ON UPDATE CASCADE,
ADD CONSTRAINT `FK_order_other_party` FOREIGN KEY (`order_id`) REFERENCES `other_party` (`p_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `package`
--
ALTER TABLE `package`
ADD CONSTRAINT `FK_package_other_party` FOREIGN KEY (`pack_id`) REFERENCES `other_party` (`p_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `package_item`
--
ALTER TABLE `package_item`
ADD CONSTRAINT `FK_package_item_package` FOREIGN KEY (`item_id`) REFERENCES `package` (`pack_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `private`
--
ALTER TABLE `private`
ADD CONSTRAINT `FK_private_event` FOREIGN KEY (`private_id`) REFERENCES `event` (`event_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `ticket`
--
ALTER TABLE `ticket`
ADD CONSTRAINT `FK_ticket_event` FOREIGN KEY (`ticket_id`) REFERENCES `event` (`event_id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
