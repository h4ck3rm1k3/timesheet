-- phpMyAdmin SQL Dump
-- version 3.5.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Sep 10, 2013 at 06:25 PM
-- Server version: 5.5.30-30.2
-- PHP Version: 5.3.17

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `ardian_timesheet`
--

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

CREATE TABLE IF NOT EXISTS `projects` (
  `project_id` int(11) NOT NULL AUTO_INCREMENT,
  `project_name` varchar(64) NOT NULL,
  `users_id` int(11) NOT NULL,
  `project_hour` int(11) NOT NULL,
  `remaining_hours` int(255) NOT NULL,
  `project_description` text NOT NULL,
  `project_deadline` date NOT NULL,
  PRIMARY KEY (`project_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `projects`
--

INSERT INTO `projects` (`project_id`, `project_name`, `users_id`, `project_hour`, `remaining_hours`, `project_description`, `project_deadline`) VALUES
(1, 'BIRN', 1, 45, -52, 'BIRN project', '0000-00-00'),
(2, 'GazetaJNK', 1, 50, -19, 'GazetaJNK', '0000-00-00'),
(3, 'NED', 1, 80, 78, 'ssss', '2013-08-07'),
(4, 'Umbrella', 1, 30, 30, 'qadra', '2013-09-23');

-- --------------------------------------------------------

--
-- Table structure for table `time_sheet`
--

CREATE TABLE IF NOT EXISTS `time_sheet` (
  `time_id` int(11) NOT NULL AUTO_INCREMENT,
  `projects_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `month` int(15) NOT NULL,
  `day` int(50) NOT NULL,
  `hour` int(255) NOT NULL,
  PRIMARY KEY (`time_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=94 ;

--
-- Dumping data for table `time_sheet`
--

INSERT INTO `time_sheet` (`time_id`, `projects_id`, `user_id`, `month`, `day`, `hour`) VALUES
(1, 1, 0, 9, 1, 3),
(2, 1, 0, 9, 2, 2),
(3, 1, 0, 9, 3, 4),
(4, 1, 0, 9, 4, 5),
(5, 1, 0, 9, 5, 5),
(6, 1, 0, 9, 6, 0),
(7, 1, 0, 9, 7, 0),
(8, 1, 0, 9, 8, 8),
(9, 1, 0, 9, 9, 2),
(10, 1, 0, 9, 10, 4),
(11, 1, 0, 9, 11, 0),
(12, 1, 0, 9, 12, 0),
(13, 1, 0, 9, 13, 0),
(14, 1, 0, 9, 14, 0),
(15, 1, 0, 9, 15, 4),
(16, 1, 0, 9, 16, 4),
(17, 1, 0, 9, 17, 4),
(18, 1, 0, 9, 18, 4),
(19, 1, 0, 9, 19, 4),
(20, 1, 0, 9, 20, 0),
(21, 1, 0, 9, 21, 0),
(22, 1, 0, 9, 22, 4),
(23, 1, 0, 9, 23, 8),
(24, 1, 0, 9, 24, 6),
(25, 1, 0, 9, 25, 6),
(26, 1, 0, 9, 26, 4),
(27, 1, 0, 9, 27, 0),
(28, 1, 0, 9, 28, 0),
(29, 1, 0, 9, 29, 8),
(30, 1, 0, 9, 30, 8),
(31, 1, 0, 9, 31, 8),
(32, 2, 0, 9, 1, 4),
(33, 2, 0, 9, 2, 4),
(34, 2, 0, 9, 3, 7),
(35, 2, 0, 9, 4, 3),
(36, 2, 0, 9, 5, 3),
(37, 2, 0, 9, 6, 0),
(38, 2, 0, 9, 7, 0),
(39, 2, 0, 9, 8, 0),
(40, 2, 0, 9, 9, 6),
(41, 2, 0, 9, 10, 0),
(42, 2, 0, 9, 11, 0),
(43, 2, 0, 9, 12, 0),
(44, 2, 0, 9, 13, 0),
(45, 2, 0, 9, 14, 0),
(46, 2, 0, 9, 15, 6),
(47, 2, 0, 9, 16, 4),
(48, 2, 0, 9, 17, 4),
(49, 2, 0, 9, 18, 4),
(50, 2, 0, 9, 19, 4),
(51, 2, 0, 9, 20, 0),
(52, 2, 0, 9, 21, 0),
(53, 2, 0, 9, 22, 4),
(54, 2, 0, 9, 23, 0),
(55, 2, 0, 9, 24, 2),
(56, 2, 0, 9, 25, 2),
(57, 2, 0, 9, 26, 4),
(58, 2, 0, 9, 27, 0),
(59, 2, 0, 9, 28, 0),
(60, 2, 0, 9, 29, 0),
(61, 2, 0, 9, 30, 0),
(62, 2, 0, 9, 31, 0),
(63, 3, 0, 9, 1, 0),
(64, 3, 0, 9, 2, 0),
(65, 3, 0, 9, 3, 2),
(66, 3, 0, 9, 4, 0),
(67, 3, 0, 9, 5, 0),
(68, 3, 0, 9, 6, 0),
(69, 3, 0, 9, 7, 0),
(70, 3, 0, 9, 8, 0),
(71, 3, 0, 9, 9, 0),
(72, 3, 0, 9, 10, 0),
(73, 3, 0, 9, 11, 0),
(74, 3, 0, 9, 12, 0),
(75, 3, 0, 9, 13, 0),
(76, 3, 0, 9, 14, 0),
(77, 3, 0, 9, 15, 0),
(78, 3, 0, 9, 16, 0),
(79, 3, 0, 9, 17, 0),
(80, 3, 0, 9, 18, 0),
(81, 3, 0, 9, 19, 0),
(82, 3, 0, 9, 20, 0),
(83, 3, 0, 9, 21, 0),
(84, 3, 0, 9, 22, 0),
(85, 3, 0, 9, 23, 0),
(86, 3, 0, 9, 24, 0),
(87, 3, 0, 9, 25, 0),
(88, 3, 0, 9, 26, 0),
(89, 3, 0, 9, 27, 0),
(90, 3, 0, 9, 28, 0),
(91, 3, 0, 9, 29, 0),
(92, 3, 0, 9, 30, 0),
(93, 3, 0, 9, 31, 0);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(20) NOT NULL,
  `password` varchar(64) NOT NULL,
  `activity` int(20) NOT NULL,
  `permissions` varchar(15) NOT NULL,
  PRIMARY KEY (`user_id`),
  UNIQUE KEY `user_id_2` (`user_id`),
  KEY `user_id` (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `username`, `password`, `activity`, `permissions`) VALUES
(1, 'admin', 'ardian', 1, 'manager'),
(2, 'jetoni', 'jeta', 1, 'user'),
(3, 'Jetoni', '', 1, ''),
(4, 'behari', 'beha', 1, 'manager'),
(5, 'Test', '', 1, ''),
(6, 'vleran', 'vleran', 1, 'manager'),
(10, 'fitore', 'fitore', 1, 'hr'),
(11, 'fitore', 'fitore', 1, 'hr');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
