-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               5.6.24 - MySQL Community Server (GPL)
-- Server OS:                    Win32
-- HeidiSQL Version:             9.3.0.4984
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- Dumping database structure for eventreg
CREATE DATABASE IF NOT EXISTS `eventreg` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `eventreg`;


-- Dumping structure for table eventreg.admin
CREATE TABLE IF NOT EXISTS `admin` (
  `admin_id` int(11) NOT NULL,
  `password` varchar(50) NOT NULL,
  PRIMARY KEY (`admin_id`),
  CONSTRAINT `FK_admin_event` FOREIGN KEY (`admin_id`) REFERENCES `event` (`event_id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Data exporting was unselected.


-- Dumping structure for table eventreg.buy_ticket
CREATE TABLE IF NOT EXISTS `buy_ticket` (
  `buy_id` int(11) NOT NULL,
  `date` date NOT NULL,
  `paid` varchar(50) DEFAULT NULL,
  `ordered` varchar(50) DEFAULT NULL,
  `count` int(11) NOT NULL,
  PRIMARY KEY (`buy_id`),
  CONSTRAINT `FK_buy_ticket_customer` FOREIGN KEY (`buy_id`) REFERENCES `customer` (`cus_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `FK_buy_ticket_ticket` FOREIGN KEY (`buy_id`) REFERENCES `ticket` (`ticket_id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Data exporting was unselected.


-- Dumping structure for table eventreg.customer
CREATE TABLE IF NOT EXISTS `customer` (
  `cus_id` int(11) NOT NULL,
  `cus_name` varchar(255) NOT NULL,
  `user_name` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `provider` varchar(255) NOT NULL,
  PRIMARY KEY (`cus_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Data exporting was unselected.


-- Dumping structure for table eventreg.event
CREATE TABLE IF NOT EXISTS `event` (
  `event_id` int(11) NOT NULL,
  `event_name` varchar(50) NOT NULL,
  `event_provider` varchar(100) NOT NULL,
  `category` varchar(100) NOT NULL,
  `date` date NOT NULL,
  `start_time` time NOT NULL,
  `end_time` time NOT NULL,
  `status` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`event_id`),
  CONSTRAINT `FK_event_customer` FOREIGN KEY (`event_id`) REFERENCES `customer` (`cus_id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Data exporting was unselected.


-- Dumping structure for table eventreg.hall
CREATE TABLE IF NOT EXISTS `hall` (
  `hall_id` int(11) NOT NULL,
  `seats` int(11) NOT NULL,
  `status` varchar(50) NOT NULL,
  PRIMARY KEY (`hall_id`),
  CONSTRAINT `FK_hall_event` FOREIGN KEY (`hall_id`) REFERENCES `event` (`event_id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Data exporting was unselected.


-- Dumping structure for table eventreg.order
CREATE TABLE IF NOT EXISTS `order` (
  `order_id` int(11) NOT NULL,
  `order_status` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`order_id`),
  CONSTRAINT `FK_order_event` FOREIGN KEY (`order_id`) REFERENCES `event` (`event_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `FK_order_other_party` FOREIGN KEY (`order_id`) REFERENCES `other_party` (`p_id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Data exporting was unselected.


-- Dumping structure for table eventreg.other_party
CREATE TABLE IF NOT EXISTS `other_party` (
  `p_id` int(11) NOT NULL,
  `service_provider` varchar(100) NOT NULL,
  `password` varchar(50) NOT NULL,
  `contact_number` varchar(10) NOT NULL,
  `email` varchar(50) DEFAULT NULL,
  `catergory` varchar(100) NOT NULL,
  `description` varchar(255) NOT NULL,
  `url` varchar(255) NOT NULL,
  PRIMARY KEY (`p_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Data exporting was unselected.


-- Dumping structure for table eventreg.package
CREATE TABLE IF NOT EXISTS `package` (
  `pack_id` int(11) NOT NULL,
  `pack_name` varchar(100) NOT NULL,
  `price` int(11) NOT NULL,
  `description` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`pack_id`),
  CONSTRAINT `FK_package_other_party` FOREIGN KEY (`pack_id`) REFERENCES `other_party` (`p_id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Data exporting was unselected.


-- Dumping structure for table eventreg.package_item
CREATE TABLE IF NOT EXISTS `package_item` (
  `item_id` int(11) NOT NULL,
  `item_name` int(11) NOT NULL,
  PRIMARY KEY (`item_id`),
  CONSTRAINT `FK_package_item_package` FOREIGN KEY (`item_id`) REFERENCES `package` (`pack_id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Data exporting was unselected.


-- Dumping structure for table eventreg.private
CREATE TABLE IF NOT EXISTS `private` (
  `private_id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  PRIMARY KEY (`private_id`),
  CONSTRAINT `FK_private_event` FOREIGN KEY (`private_id`) REFERENCES `event` (`event_id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Data exporting was unselected.


-- Dumping structure for table eventreg.ticket
CREATE TABLE IF NOT EXISTS `ticket` (
  `ticket_id` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `state` varchar(50) NOT NULL,
  `available` int(11) NOT NULL,
  PRIMARY KEY (`ticket_id`),
  CONSTRAINT `FK_ticket_event` FOREIGN KEY (`ticket_id`) REFERENCES `event` (`event_id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Data exporting was unselected.
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
