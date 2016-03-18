-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 11, 2016 at 07:37 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `demo`
--

-- --------------------------------------------------------

--
-- Table structure for table `assets`
--

CREATE TABLE IF NOT EXISTS `assets` (
  `id` int(3) NOT NULL,
  `username` varchar(50) NOT NULL,
  `userId` varchar(12) NOT NULL,
  `roomNumber` int(3) NOT NULL,
  `roomType` varchar(8) NOT NULL,
  `hostelNumber` int(3) NOT NULL,
  `chair` int(1) NOT NULL,
  `table` int(1) NOT NULL,
  `fan` int(1) NOT NULL,
  `tubelight` int(1) NOT NULL,
  `geyser` int(1) NOT NULL,
  `tap` int(1) NOT NULL,
  `swicth Board` int(1) NOT NULL,
  `water supply` varchar(3) NOT NULL,
  `water cooler` varchar(3) NOT NULL,
  `cleaning` varchar(3) NOT NULL,
  `paint` varchar(8) NOT NULL,
  `Mosquito Repellant` varchar(8) NOT NULL,
  `Door+window` int(1) NOT NULL,
  `bed` int(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `assets`
--

INSERT INTO `assets` (`id`, `username`, `userId`, `roomNumber`, `roomType`, `hostelNumber`, `chair`, `table`, `fan`, `tubelight`, `geyser`, `tap`, `swicth Board`, `water supply`, `water cooler`, `cleaning`, `paint`, `Mosquito Repellant`, `Door+window`, `bed`) VALUES
(1, 'Bharti Gothwal', 'ug201310011', 124, 'inside', 1, 1, 1, 1, 1, 1, 6, 2, 'yes', 'yes', 'yes', 'done', 'done', 2, 2);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
