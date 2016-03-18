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
-- Table structure for table `iitj`
--

CREATE TABLE IF NOT EXISTS `iitj` (
  `userId` varchar(12) NOT NULL,
  `date` date NOT NULL,
  `username` varchar(50) NOT NULL,
  `hostel_number` int(3) NOT NULL,
  `room_number` int(4) NOT NULL,
  `room_type` varchar(8) NOT NULL,
  `problem_id` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `iitj`
--

INSERT INTO `iitj` (`userId`, `date`, `username`, `hostel_number`, `room_number`, `room_type`, `problem_id`) VALUES
('ug201310000', '2016-03-09', 'komal', 4, 455, 'outside', 'f12'),
('ug201310000', '2016-03-09', 'komal', 4, 455, 'outside', 'f12'),
('ug201310011', '2016-03-09', 'Bharti Gothwal', 1, 124, 'inside', 'f12'),
('ug201312020', '2016-03-09', 'Lokesh Swami', 1, 124, 'inside', 'f12'),
('ug201312020', '0000-00-00', 'Lokesh Swami', 1, 124, 'inside', 'f12'),
('ug201312020', '0000-00-00', 'Lokesh Swami', 1, 124, 'inside', 'f12'),
('ug201312020', '0000-00-00', 'Lokesh Swami', 1, 124, 'inside', 'f12');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
