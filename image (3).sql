-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 15, 2019 at 08:57 AM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `smart_village`
--

-- --------------------------------------------------------

--
-- Table structure for table `image`
--

CREATE TABLE IF NOT EXISTS `image` (
  `id` int(3) NOT NULL,
  `filename` text NOT NULL,
  `details` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `image`
--

INSERT INTO `image` (`id`, `filename`, `details`) VALUES
(1, 'IMG-20190213-WA0003.jpg', 'Sharayu Mobile Shop\r\n(Opening Time-: 8am To 9pm)\r\n(Contact.No-:8275154875)'),
(1, 'LRM_EXPORT_53532360571021_20190101_115144888.jpeg.jpg', 'Durva Mobile Shop\r\n(Opening Time-: 8 am To 9pm)\r\n(Contact.No-:7620279020)'),
(2, 'LRM_EXPORT_52861633604981_20190101_113938319.jpeg.jpg', 'Hotel Vighnesh\r\n(Opening Time -:1pm To 10pm )\r\n(Contact.No-:7756822146)'),
(2, 'LRM_EXPORT_53074761880147_20190101_114407289.jpeg.jpg', 'Hotel Om Sai\r\n(Opening Time-:12am To 10pm)\r\n(Contact.No-:7038585252)');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
