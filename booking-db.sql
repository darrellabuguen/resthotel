-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Dec 11, 2023 at 09:06 AM
-- Server version: 5.7.36
-- PHP Version: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `booking-db`
--

-- --------------------------------------------------------

--
-- Table structure for table `bookings`
--

DROP TABLE IF EXISTS `bookings`;
CREATE TABLE IF NOT EXISTS `bookings` (
  `booking_id` int(11) NOT NULL AUTO_INCREMENT,
  `check_in` varchar(250) NOT NULL,
  `check_out` varchar(250) NOT NULL,
  `night` int(250) NOT NULL,
  `time_arrive` varchar(250) NOT NULL,
  `guest_name` varchar(250) NOT NULL,
  `gender` varchar(250) NOT NULL,
  `contact` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `bed_type` varchar(250) NOT NULL,
  `guest_number` int(250) NOT NULL,
  `total_price` varchar(250) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`booking_id`)
) ENGINE=MyISAM AUTO_INCREMENT=1997 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bookings`
--

INSERT INTO `bookings` (`booking_id`, `check_in`, `check_out`, `night`, `time_arrive`, `guest_name`, `gender`, `contact`, `email`, `bed_type`, `guest_number`, `total_price`, `timestamp`) VALUES
(1987, '2023-10-04', '2023-10-06', 2, '10:40 PM', 'Darrel Labuguen', 'Male', '12345678910', 'test@email.com', 'Deluxe Queen', 3, 'P 8176', '2023-10-03 22:40:28'),
(1988, '2023-10-04', '2023-10-05', 1, '10:00 PM', 'Darrel Labuguen', 'Male', '09300515480', 'test@email.com', 'Superior King', 3, 'P 4144', '2023-10-04 08:04:24'),
(1989, '2023-10-10', '2023-10-11', 1, '10:00 PM', 'Darrel Labuguen', 'Male', '12345678910', 'test@email.com', 'Superior King', 3, 'P 4144', '2023-10-10 06:28:48'),
(1990, '2023-10-10', '2023-10-11', 1, '10:34 PM', 'Darrel Labuguen', 'Male', '12345678910', 'test@email.com', 'Superior Twin', 6, 'P 4536', '2023-10-10 06:35:00'),
(1991, '2023-10-10', '2023-10-11', 1, '09:51 PM', 'Darrel Labuguen', 'Male', '12345678910', 'test@email.com', 'Superior Twin', 6, 'P 4536', '2023-10-10 07:51:28'),
(1992, '2023-10-10', '2023-10-12', 2, '10:39 PM', 'Darrel Labuguen', 'Male', '12345678910', 'test@email.com', 'Deluxe Twin', 3, 'P 7952', '2023-10-10 08:40:19'),
(1993, '2023-10-31', '2023-11-03', 3, '10:43 PM', 'Darrel Labuguen', 'Male', '12345678910', 'test@email.com', 'Superior King', 3, 'P 12432', '2023-10-10 08:44:38'),
(1994, '2023-10-10', '2023-10-11', 1, '10:29 PM', 'Darrel Labuguen', 'Male', '12345678910', 'test@email.com', 'Deluxe Queen', 3, 'P 4088', '2023-10-10 09:30:31'),
(1995, '2023-10-10', '2023-10-11', 1, '10:29 PM', 'Darrel Labuguen', 'Male', '12345678910', 'test@email.com', 'Deluxe Queen', 2, 'P 4088', '2023-10-10 10:29:14'),
(1996, '2023-10-10', '2023-10-11', 1, '10:51 PM', 'Darrel Labuguen', 'Male', '12345678910', 'test@email.com', 'Junior Suite', 1, 'P 2296', '2023-10-10 10:51:45');

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

DROP TABLE IF EXISTS `messages`;
CREATE TABLE IF NOT EXISTS `messages` (
  `msg_id` int(11) NOT NULL AUTO_INCREMENT,
  `messenger_name` varchar(250) NOT NULL,
  `phone_num` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `messages` varchar(250) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`msg_id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`msg_id`, `messenger_name`, `phone_num`, `email`, `messages`, `timestamp`) VALUES
(1, 'Darrel', '12345678910', 'test@email.com', 'Hello', '2023-10-06 09:43:58'),
(2, 'Darrel', '12345678910', 'test@email.com', 'Konnichiwa', '2023-10-06 09:54:38'),
(3, 'Darrel', '12345678910', 'test@email.com', 'Hellow', '2023-10-25 06:11:46');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
