-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 01, 2015 at 07:03 AM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `dashboard`
--

-- --------------------------------------------------------

--
-- Table structure for table `logins`
--

CREATE TABLE IF NOT EXISTS `logins` (
  `USERNAME` varchar(50) DEFAULT NULL,
  `PASSWORD` varchar(50) DEFAULT NULL,
  `POSITION` varchar(50) DEFAULT 'student',
  `INTERESTS` varchar(10) NOT NULL DEFAULT '1111111111',
  `SPORTS` varchar(10) NOT NULL DEFAULT '1111111111',
  `NAME` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `logins`
--

INSERT INTO `logins` (`USERNAME`, `PASSWORD`, `POSITION`, `INTERESTS`, `SPORTS`, `NAME`) VALUES
('2013094', '21c081dae5dbbfabbccc04b7b4cf9caa', 'student', '1111000010', '1000000000', 'Jugal Sahu'),
('vkjain', '202cb962ac59075b964b07152d234b70', 'faculty', '1011010101', '1011101010', 'VK JAIN');

-- --------------------------------------------------------

--
-- Table structure for table `notification`
--

CREATE TABLE IF NOT EXISTS `notification` (
  `Notification` varchar(500) NOT NULL,
  `Genre` varchar(20) NOT NULL,
  `User` varchar(20) NOT NULL,
  `Href` varchar(500) NOT NULL DEFAULT '#',
  `Icon` varchar(60) NOT NULL DEFAULT 'fa fa-users text-red'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `notification`
--

INSERT INTO `notification` (`Notification`, `Genre`, `User`, `Href`, `Icon`) VALUES
('You changed your username', '0', '2013094', '#', 'fa fa-users text-red'),
('5 new members joined', '1', '2013094', '#', 'fa fa-users text-red'),
('New Song relesed', '4', '2013094', '#', 'fa fa-users text-red'),
('Cricket tournament tomorrow', '11', '2013094', '#', 'fa fa-users text-red'),
('Football match today', '12', '2013094', '#', 'fa fa-users text-red'),
('Cricket match won', '11', '2013094', '#', 'fa fa-users text-red');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
