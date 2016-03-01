-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 18, 2015 at 07:51 AM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `cricket`
--

-- --------------------------------------------------------

--
-- Table structure for table `balls`
--

CREATE TABLE IF NOT EXISTS `balls` (
  `MATCH_ID` varchar(10) NOT NULL DEFAULT '',
  `INNING` int(6) NOT NULL DEFAULT '0',
  `OVER` int(11) NOT NULL DEFAULT '0',
  `RUN` int(11) DEFAULT NULL,
  `WICKET` varchar(50) DEFAULT NULL,
  `EXTRA` int(10) DEFAULT NULL,
  `BATSMAN` varchar(10) DEFAULT NULL,
  `BOWLER` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `balls`
--

INSERT INTO `balls` (`MATCH_ID`, `INNING`, `OVER`, `RUN`, `WICKET`, `EXTRA`, `BATSMAN`, `BOWLER`) VALUES
('M1', 1, 1, 4, '', 0, 'IND02', 'PAK11'),
('M1', 1, 2, 3, '', 0, 'IND02', 'PAK11'),
('M1', 1, 3, 3, '', 0, 'IND01', 'PAK11'),
('M1', 1, 4, 0, 'b Sohail Khan w', 0, 'IND02', 'PAK11'),
('M1', 1, 5, 0, '', 0, 'IND03', 'PAK11'),
('M1', 1, 10, 0, '', 0, 'IND03', 'PAK11'),
('M1', 1, 11, 6, '', 0, 'IND01', 'PAK10'),
('M1', 1, 12, 2, '', 0, 'IND01', 'PAK10'),
('M1', 1, 13, 2, '', 0, 'IND01', 'PAK10'),
('M1', 1, 14, 0, '', 0, 'IND01', 'PAK10'),
('M1', 1, 15, 0, '', 0, 'IND01', 'PAK10'),
('M1', 1, 20, 0, '', 0, 'IND01', 'PAK10'),
('M1', 1, 21, 4, '', 0, 'IND03', 'PAK09'),
('M1', 1, 22, 1, '', 0, 'IND03', 'PAK09'),
('M1', 1, 23, 0, '', 0, 'IND01', 'PAK09'),
('M1', 1, 24, 0, '', 0, 'IND01', 'PAK09'),
('M1', 1, 25, 0, '', 0, 'IND01', 'PAK09'),
('M1', 1, 30, 0, '', 0, 'IND01', 'PAK09'),
('M1', 1, 31, 6, '', 0, 'IND03', 'PAK11'),
('M1', 1, 32, 6, '', 0, 'IND03', 'PAK11'),
('M1', 1, 33, 6, '', 0, 'IND03', 'PAK11'),
('M1', 1, 34, 0, '', 0, 'IND03', 'PAK11'),
('M1', 1, 35, 0, '', 0, 'IND03', 'PAK11'),
('M1', 1, 40, 1, '', 0, 'IND03', 'PAK11'),
('M1', 1, 41, 4, '', 0, 'IND03', 'PAK10'),
('M1', 1, 42, 2, '', 0, 'IND03', 'PAK10'),
('M1', 1, 43, 3, '', 0, 'IND03', 'PAK10'),
('M1', 1, 44, 1, '', 0, 'IND01', 'PAK10'),
('M1', 1, 45, 4, '', 0, 'IND03', 'PAK10'),
('M1', 1, 50, 4, '', 0, 'IND03', 'PAK10'),
('M1', 1, 51, 6, '', 0, 'IND01', 'PAK09'),
('M1', 1, 52, 4, '', 0, 'IND01', 'PAK09'),
('M1', 1, 53, 0, 'b Wahab Riaz c Sarfraz Ahmed', 0, 'IND01', 'PAK09'),
('M1', 1, 54, 1, '', 0, 'IND04', 'PAK09'),
('M1', 1, 55, 4, '', 0, 'IND03', 'PAK09'),
('M1', 1, 60, 2, '', 0, 'IND03', 'PAK09'),
('M1', 1, 61, 6, '', 0, 'IND04', 'PAK08'),
('M1', 1, 62, 0, 'b Rahat Ali w', 0, 'IND04', 'PAK08'),
('M1', 1, 63, 0, 'b Rahat Ali w', 0, 'IND05', 'PAK08'),
('M1', 1, 64, 2, '', 0, 'IND06', 'PAK08'),
('M1', 1, 65, 6, '', 0, 'IND06', 'PAK08'),
('M1', 1, 70, 0, '', 0, 'IND06', 'PAK08'),
('M1', 1, 71, 0, '', 0, 'IND03', 'PAK07'),
('M1', 1, 72, 4, '', 0, 'IND03', 'PAK07'),
('M1', 1, 73, 2, '', 0, 'IND03', 'PAK07'),
('M1', 1, 74, 0, 'b Shahid Afridi w', 0, 'IND03', 'PAK07'),
('M1', 1, 75, 0, '', 0, 'IND07', 'PAK07'),
('M1', 1, 80, 0, '', 0, 'IND07', 'PAK07'),
('M1', 1, 81, 6, '', 0, 'IND06', 'PAK08'),
('M1', 1, 82, 4, '', 0, 'IND06', 'PAK08'),
('M1', 1, 83, 6, '', 0, 'IND06', 'PAK08'),
('M1', 1, 84, 2, '', 0, 'IND06', 'PAK08'),
('M1', 1, 85, 3, '', 0, 'IND06', 'PAK08'),
('M1', 1, 90, 2, '', 0, 'IND07', 'PAK08'),
('M1', 1, 91, 0, '', 0, 'IND06', 'PAK11'),
('M1', 1, 92, 0, '', 0, 'IND06', 'PAK11'),
('M1', 1, 93, 0, '', 0, 'IND06', 'PAK11'),
('M1', 1, 94, 0, '', 0, 'IND06', 'PAK11'),
('M1', 1, 95, 0, '', 0, 'IND06', 'PAK11'),
('M1', 1, 100, 0, '', 0, 'IND06', 'PAK11'),
('M1', 1, 101, 1, '', 0, 'IND07', 'PAK08'),
('M1', 1, 102, 0, '', 0, 'IND06', 'PAK08'),
('M1', 1, 103, 4, '', 0, 'IND06', 'PAK08'),
('M1', 1, 104, 2, '', 0, 'IND06', 'PAK08'),
('M1', 1, 105, 1, '', 0, 'IND06', 'PAK08'),
('M1', 1, 110, 0, 'b Rahat Ali w', 0, 'IND07', 'PAK08'),
('M1', 1, 111, 4, '', 0, 'IND06', 'PAK10'),
('M1', 1, 112, 2, '', 0, 'IND06', 'PAK10'),
('M1', 1, 113, 0, '', 0, 'IND06', 'PAK10'),
('M1', 1, 114, 0, '', 0, 'IND06', 'PAK10'),
('M1', 1, 115, 6, '', 0, 'IND06', 'PAK10'),
('M1', 1, 120, 0, '', 0, 'IND06', 'PAK10'),
('M1', 1, 121, 0, 'b Rahat Ali l', 0, 'IND08', 'PAK08'),
('M1', 1, 122, 0, '', 0, 'IND09', 'PAK08'),
('M1', 1, 123, 0, '', 0, 'IND09', 'PAK08'),
('M1', 1, 124, 0, 'b Rahat Ali w', 0, 'IND09', 'PAK08'),
('M1', 1, 125, 4, '', 0, 'IND10', 'PAK08'),
('M1', 1, 130, 4, '', 0, 'IND10', 'PAK08'),
('M1', 1, 131, 3, '', 0, 'IND06', 'PAK07'),
('M1', 1, 132, 1, '', 0, 'IND10', 'PAK07'),
('M1', 1, 133, 1, '', 0, 'IND06', 'PAK07'),
('M1', 1, 134, 0, '', 1, 'IND10', 'PAK07'),
('M1', 1, 135, 1, '', 2, 'IND10', 'PAK07'),
('M1', 1, 140, 0, '', 0, 'IND06', 'PAK07'),
('M1', 1, 141, 4, '', 2, 'IND10', 'PAK09'),
('M1', 1, 142, 1, '', 0, 'IND10', 'PAK09'),
('M1', 1, 143, 0, '', 0, 'IND06', 'PAK09'),
('M1', 1, 144, 0, '', 4, 'IND06', 'PAK09'),
('M1', 1, 145, 3, '', 0, 'IND06', 'PAK09'),
('M1', 1, 150, 1, '', 0, 'IND10', 'PAK09'),
('M1', 1, 151, 6, '', 0, 'IND10', 'PAK07'),
('M1', 1, 152, 0, '', 0, 'IND10', 'PAK07'),
('M1', 1, 153, 0, '', 0, 'IND10', 'PAK07'),
('M1', 1, 154, 0, 'b Shahid Afridi w', 0, 'IND10', 'PAK07'),
('M1', 1, 155, 2, '', 0, 'IND11', 'PAK07'),
('M1', 1, 160, 1, '', 0, 'IND11', 'PAK07'),
('M1', 1, 161, 1, '', 0, 'IND11', 'PAK10'),
('M1', 1, 162, 2, '', 0, 'IND06', 'PAK10'),
('M1', 1, 163, 1, '', 0, 'IND06', 'PAK10'),
('M1', 1, 164, 0, '', 0, 'IND11', 'PAK10'),
('M1', 1, 165, 4, '', 0, 'IND11', 'PAK10'),
('M1', 1, 170, 4, '', 0, 'IND11', 'PAK10'),
('M1', 1, 171, 6, '', 0, 'IND06', 'PAK11'),
('M1', 1, 172, 1, '', 0, 'IND06', 'PAK11'),
('M1', 1, 173, 0, 'b Sohail Khan w', 0, 'IND11', 'PAK11'),
('M1', 2, 1, 1, '', 0, 'PAK02', 'IND11'),
('M1', 2, 2, 0, 'b Umesh Yadav c MS Dhoni', 0, 'PAK01', 'IND11'),
('M1', 2, 3, 1, '', 0, 'PAK03', 'IND11'),
('M1', 2, 4, 0, '', 0, 'PAK02', 'IND11'),
('M1', 2, 5, 0, '', 0, 'PAK02', 'IND11'),
('M1', 2, 10, 0, '', 0, 'PAK02', 'IND11'),
('M1', 2, 11, 2, '', 0, 'PAK03', 'IND10'),
('M1', 2, 12, 0, '', 0, 'PAK03', 'IND10'),
('M1', 2, 13, 0, '', 0, 'PAK03', 'IND10'),
('M1', 2, 14, 1, '', 0, 'PAK03', 'IND10'),
('M1', 2, 15, 4, '', 0, 'PAK02', 'IND10'),
('M1', 2, 20, 0, '', 0, 'PAK02', 'IND10'),
('M1', 2, 21, 0, 'b Umesh Yadav l', 0, 'PAK03', 'IND11'),
('M1', 2, 22, 6, '', 0, 'PAK04', 'IND11'),
('M1', 2, 23, 4, '', 0, 'PAK04', 'IND11'),
('M1', 2, 24, 2, '', 0, 'PAK04', 'IND11'),
('M1', 2, 25, 4, '', 0, 'PAK04', 'IND11'),
('M1', 2, 30, 6, '', 0, 'PAK04', 'IND11'),
('M1', 2, 31, 0, '', 0, 'PAK02', 'IND10'),
('M1', 2, 32, 0, '', 0, 'PAK02', 'IND10'),
('M1', 2, 33, 1, '', 0, 'PAK02', 'IND10'),
('M1', 2, 34, 6, '', 0, 'PAK04', 'IND10'),
('M1', 2, 35, 4, '', 0, 'PAK04', 'IND10'),
('M1', 2, 40, 3, '', 0, 'PAK04', 'IND10'),
('M1', 2, 41, 0, '', 2, 'PAK04', 'IND09'),
('M1', 2, 42, 0, '', 1, 'PAK04', 'IND09'),
('M1', 2, 43, 0, '', 0, 'PAK04', 'IND09'),
('M1', 2, 44, 0, '', 0, 'PAK04', 'IND09'),
('M1', 2, 45, 6, '', 0, 'PAK04', 'IND09'),
('M1', 2, 50, 1, '', 0, 'PAK04', 'IND09'),
('M1', 2, 51, 4, '', 0, 'PAK04', 'IND05'),
('M1', 2, 52, 1, '', 0, 'PAK04', 'IND05'),
('M1', 2, 53, 0, 'b Suresh Raina w', 0, 'PAK02', 'IND05'),
('M1', 2, 54, 2, '', 0, 'PAK05', 'IND05'),
('M1', 2, 55, 0, 'Run Out', 0, 'PAK05', 'IND05'),
('M1', 2, 60, 1, '', 0, 'PAK06', 'IND05'),
('M1', 2, 61, 4, '', 0, 'PAK06', 'IND08'),
('M1', 2, 62, 3, '', 0, 'PAK06', 'IND08'),
('M1', 2, 63, 6, '', 0, 'PAK04', 'IND08'),
('M1', 2, 64, 0, '', 0, 'PAK04', 'IND08'),
('M1', 2, 65, 4, '', 0, 'PAK04', 'IND08'),
('M1', 2, 70, 3, '', 0, 'PAK04', 'IND08'),
('M1', 2, 71, 0, '', 0, 'PAK04', 'IND09'),
('M1', 2, 72, 0, '', 0, 'PAK04', 'IND09'),
('M1', 2, 73, 4, '', 0, 'PAK04', 'IND09'),
('M1', 2, 74, 2, '', 0, 'PAK04', 'IND09'),
('M1', 2, 75, 1, '', 0, 'PAK04', 'IND09'),
('M1', 2, 80, 2, '', 0, 'PAK06', 'IND09'),
('M1', 2, 81, 4, '', 0, 'PAK04', 'IND11'),
('M1', 2, 82, 2, '', 0, 'PAK04', 'IND11'),
('M1', 2, 83, 2, '', 0, 'PAK04', 'IND11'),
('M1', 2, 84, 0, '', 0, 'PAK04', 'IND11'),
('M1', 2, 85, 0, '', 2, 'PAK04', 'IND11'),
('M1', 2, 90, 1, '', 0, 'PAK04', 'IND11'),
('M1', 2, 91, 6, '', 0, 'PAK04', 'IND10'),
('M1', 2, 92, 0, '', 0, 'PAK04', 'IND10'),
('M1', 2, 93, 0, '', 0, 'PAK04', 'IND10'),
('M1', 2, 94, 0, '', 0, 'PAK04', 'IND10'),
('M1', 2, 95, 2, '', 0, 'PAK04', 'IND10'),
('M1', 2, 100, 0, '', 0, 'PAK04', 'IND10'),
('M1', 2, 101, 0, '', 0, 'PAK06', 'IND09'),
('M1', 2, 102, 0, '', 0, 'PAK06', 'IND09'),
('M1', 2, 103, 0, '', 0, 'PAK06', 'IND09'),
('M1', 2, 104, 0, '', 0, 'PAK06', 'IND09'),
('M1', 2, 105, 0, '', 0, 'PAK06', 'IND09'),
('M1', 2, 110, 0, '', 0, 'PAK06', 'IND09'),
('M1', 2, 111, 2, '', 0, 'PAK04', 'IND08'),
('M1', 2, 112, 2, '', 0, 'PAK04', 'IND08'),
('M1', 2, 113, 2, '', 0, 'PAK04', 'IND08'),
('M1', 2, 114, 0, '', 0, 'PAK04', 'IND08'),
('M1', 2, 115, 0, '', 0, 'PAK04', 'IND08'),
('M1', 2, 120, 1, '', 0, 'PAK04', 'IND08'),
('M1', 2, 121, 6, '', 0, 'PAK04', 'IND05'),
('M1', 2, 122, 6, '', 0, 'PAK04', 'IND05'),
('M1', 2, 123, 0, '', 0, 'PAK04', 'IND05'),
('M1', 2, 124, 0, '', 0, 'PAK04', 'IND05'),
('M1', 2, 125, 0, 'b Suresh Raina c Ravichandran Ashwin', 0, 'PAK04', 'IND05'),
('M1', 2, 130, 0, '', 0, 'PAK07', 'IND05'),
('M1', 2, 131, 0, 'b Ravichandran Ashwin w', 0, 'PAK06', 'IND08'),
('M1', 2, 132, 6, '', 0, 'PAK08', 'IND08'),
('M1', 2, 133, 6, '', 0, 'PAK08', 'IND08'),
('M1', 2, 134, 0, 'b Ravichandran Ashwin w', 0, 'PAK08', 'IND08'),
('M1', 2, 135, 0, 'b Ravichandran Ashwin w', 0, 'PAK09', 'IND08'),
('M1', 2, 140, 0, '', 0, 'PAK10', 'IND08'),
('M1', 2, 141, 6, '', 0, 'PAK07', 'IND11'),
('M1', 2, 142, 6, '', 0, 'PAK07', 'IND11'),
('M1', 2, 143, 6, '', 0, 'PAK07', 'IND11'),
('M1', 2, 144, 0, 'b Umesh Yadav w', 0, 'PAK07', 'IND11'),
('M1', 2, 145, 0, 'b Umesh Yadav w', 0, 'PAK11', 'IND11');

-- --------------------------------------------------------

--
-- Table structure for table `logins`
--

CREATE TABLE IF NOT EXISTS `logins` (
  `USERNAME` varchar(32) DEFAULT NULL,
  `PASSWORD` varchar(32) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `logins`
--

INSERT INTO `logins` (`USERNAME`, `PASSWORD`) VALUES
('root', '63a9f0ea7bb98050796b649e85481845');

-- --------------------------------------------------------

--
-- Table structure for table `matches`
--

CREATE TABLE IF NOT EXISTS `matches` (
  `MATCH_ID` varchar(10) NOT NULL,
  `VENUE` varchar(50) DEFAULT NULL,
  `DATE` date DEFAULT NULL,
  `START_TIME` time DEFAULT NULL,
  `TEAM1` varchar(10) DEFAULT NULL,
  `TEAM2` varchar(10) DEFAULT NULL,
  `TOSS` varchar(10) DEFAULT NULL,
  `TOSS_DECISION` varchar(20) DEFAULT NULL,
  `WINNER` varchar(10) DEFAULT NULL,
  `RESULT_DESCRIPTION` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `matches`
--

INSERT INTO `matches` (`MATCH_ID`, `VENUE`, `DATE`, `START_TIME`, `TEAM1`, `TEAM2`, `TOSS`, `TOSS_DECISION`, `WINNER`, `RESULT_DESCRIPTION`) VALUES
('M1', 'Eden garden , Kolkata', '2015-04-01', '09:00:00', 'IND', 'PAK', 'IND', 'BAT', 'IND', 'IND won by 38 runs'),
('M2', 'Sardar Patel Stadium , Ahamdabad', '2015-04-02', '09:00:00', 'NWZ', 'RSA', NULL, NULL, NULL, ''),
('M3', 'Feroz Shah Kotla , New Delhi', '2015-04-03', '09:00:00', 'AUS', 'PAK', NULL, NULL, NULL, ''),
('M4', 'Vidarbha Cricket Association Stadium, Nagpur', '2015-04-04', '09:00:00', 'RSA', 'SRI', NULL, NULL, NULL, ''),
('M5', 'Eden garden , Kolkata', '2015-04-05', '09:00:00', 'IND', 'AUS', NULL, NULL, NULL, NULL),
('M6', 'Feroz Shah Kotla , New Delhi', '2015-04-06', '09:00:00', 'NWZ', 'SRI', NULL, NULL, NULL, NULL),
('M7', 'Sardar Patel Stadium , Ahamdabad', '2015-04-10', '09:00:00', NULL, NULL, NULL, NULL, NULL, NULL),
('M8', 'Vidarbha Cricket Association Stadium, Nagpur', '2015-04-12', '09:00:00', NULL, NULL, NULL, NULL, NULL, NULL),
('M9', 'Eden garden , Kolkata', '2015-04-15', '09:00:00', NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `players`
--

CREATE TABLE IF NOT EXISTS `players` (
  `PLAYER_ID` varchar(10) NOT NULL DEFAULT '',
  `PLAYER_NAME` varchar(20) DEFAULT NULL,
  `TEAM_ID` varchar(10) DEFAULT NULL,
  `SKILLS` varchar(10) DEFAULT NULL,
  `AGE` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `players`
--

INSERT INTO `players` (`PLAYER_ID`, `PLAYER_NAME`, `TEAM_ID`, `SKILLS`, `AGE`) VALUES
('AUS01', 'Aaron Finch', 'AUS', 'Batsman', 28),
('AUS02', 'David Warner', 'AUS', 'Batsman', 28),
('AUS03', 'Steven Smith', 'AUS', 'Batsman', 25),
('AUS04', 'Glenn Maxwell', 'AUS', 'Allrounder', 26),
('AUS05', 'Shane Watson', 'AUS', 'Allrounder', 33),
('AUS06', 'Michael Clarke', 'AUS', 'Batsman', 33),
('AUS07', 'James Faulkner', 'AUS', 'Allrounder', 24),
('AUS08', 'Brad Haddin', 'AUS', 'Batsman', 37),
('AUS09', 'Mitchell Johnson', 'AUS', 'Bowler', 33),
('AUS10', 'Mitchell Starc', 'AUS', 'Bowler', 24),
('AUS11', 'Josh Hazlewood', 'AUS', 'Bowler', 24),
('AUS12', 'George Bailey', 'AUS', 'Batman', 32),
('AUS13', 'Pat Cummins', 'AUS', 'Bowler', 21),
('AUS14', 'Xavier Doherty', 'AUS', 'Batsman', 32),
('AUS15', 'Mitchell Marsh', 'AUS', 'Allrounder', 23),
('IND01', 'Rohit Sharma', 'IND', 'Batsman', 27),
('IND02', 'Shikhar Dhawan', 'IND', 'Batsman', 29),
('IND03', 'Virat Kohli', 'IND', 'Batsman', 26),
('IND04', 'Ajinkya Rahane', 'IND', 'Batsman', 26),
('IND05', 'Suresh Raina', 'IND', 'Allrounder', 28),
('IND06', 'MS Dhoni', 'IND', 'Batsman', 33),
('IND07', 'Ravindra Jadega', 'IND', 'Allrounder', 26),
('IND08', 'Ravichandran Ashwin', 'IND', 'Allrounder', 28),
('IND09', 'Mohammed Shami', 'IND', 'Bowler', 24),
('IND10', 'Mohit Sharma', 'IND', 'Bowler', 26),
('IND11', 'Umesh Yadav', 'IND', 'Bowler', 27),
('IND12', 'Axar Patel', 'IND', 'Bowler', 21),
('IND13', 'Ambati Rayudu', 'IND', 'Batsman', 29),
('IND14', 'Bhuvaneshwar Kumar', 'IND', 'Bowler', 25),
('IND15', 'Stuart Binny', 'IND', 'Allrounder', 30),
('NWZ01', 'Martin Guptill', 'NWZ', 'Batsman', 28),
('NWZ02', 'Brendon McCullum', 'NWZ', 'Batsman', 23),
('NWZ03', 'Kane Williamson', 'NWZ', 'Batsman', 24),
('NWZ04', 'Ross Taylor', 'NWZ', 'Batsman', 31),
('NWZ05', 'Grant Elliot', 'NWZ', 'Batsman', 36),
('NWZ06', 'Corey Anderson', 'NWZ', 'Allrounder', 24),
('NWZ07', 'Luke Ronchi', 'NWZ', 'Batsman', 33),
('NWZ08', 'Daniel Vettori', 'NWZ', 'Allrounder', 36),
('NWZ09', 'Matt Henry', 'NWZ', 'Bowler', 23),
('NWZ10', 'Tim Southee', 'NWZ', 'Bowler', 26),
('NWZ11', 'Trent Boult', 'NWZ', 'Bowler', 25),
('NWZ12', 'Adam Milne', 'NWZ', 'Bowler', 22),
('NWZ13', 'Kyle Mills', 'NWZ', 'Bowler', 36),
('NWZ14', 'Nathan McCullum', 'NWZ', 'Bowler', 34),
('NWZ15', 'Tom Latham', 'NWZ', 'Allrounder', 22),
('PAK01', 'Ahmed Shehzad', 'PAK', 'Batsman', 25),
('PAK02', 'Sarfraz Ahmed', 'PAK', 'Batsman', 26),
('PAK03', 'Haris Sohail', 'PAK', 'Batsman', 24),
('PAK04', 'Misbah-ul-Haq', 'PAK', 'Batsman', 40),
('PAK05', 'Younis Khan', 'PAK', 'Batsman', 38),
('PAK06', 'Umar Akmal', 'PAK', 'Batsman', 28),
('PAK07', 'Shahid Afridi', 'PAK', 'Allround', 33),
('PAK08', 'Rahat Ali', 'PAK', 'Bowler', 27),
('PAK09', 'Wahab Riaz', 'PAK', 'Bowler', 29),
('PAK10', 'Ehsan Adil', 'PAK', 'Bowler', 27),
('PAK11', 'Sohail Khan', 'PAK', 'Bowler', 25),
('PAK12', 'Yasir Shah', 'PAK', 'Batsman', 28),
('PAK13', 'Mohammad Hafeez', 'PAK', 'Allrounder', 27),
('PAK14', 'Junaid Khan', 'PAK', 'Bowler', 28),
('PAK15', 'Sohaib Maqsood', 'PAK', 'Batsman', 25),
('RSA01', 'Hashim Amla', 'RSA', 'Batsman', 31),
('RSA02', 'Quinton de Kock', 'RSA', 'Batsman', 22),
('RSA03', 'Faf du Plessis', 'RSA', 'Allrounder', 30),
('RSA04', 'Rilee Rossouw', 'RSA', 'Batsman', 25),
('RSA05', 'AB de Villiers', 'RSA', 'Batsman', 30),
('RSA06', 'David Miller', 'RSA', 'Batsman', 25),
('RSA07', 'Jean-Paul Duminy', 'RSA', 'Allrounder', 30),
('RSA08', 'Vernon Philander', 'RSA', 'Bowler', 29),
('RSA09', 'Dale Steyn', 'RSA', 'Bowler', 31),
('RSA10', 'Morne Morkel', 'RSA', 'Bowler', 30),
('RSA11', 'Imran Tahir', 'RSA', 'Bowler', 35),
('RSA12', 'Kyle Abbott', 'RSA', 'Bowler', 27),
('RSA13', 'Farhaan Behardien', 'RSA', 'Batsman', 31),
('RSA14', 'Aaron Phangiso', 'RSA', 'Bowler', 31),
('RSA15', 'Wayne Parnell', 'RSA', 'Bowler', 25),
('SRI01', 'Kusal Perera', 'SRI', 'Batsman', 24),
('SRI02', 'Tilakarathne Dilshan', 'SRI', 'Allrounder', 38),
('SRI03', 'Kumar Sangakkara', 'SRI', 'Batsman', 37),
('SRI04', 'Lahiru Thirimanne', 'SRI', 'Batsman', 25),
('SRI05', 'Mahela Jayawardene', 'SRI', 'Batsman', 37),
('SRI06', 'Angelo Mathews', 'SRI', 'Allrounder', 27),
('SRI07', 'Thisara Perera', 'SRI', 'Allrounder', 25),
('SRI08', 'Nuwan Kulasekara', 'SRI', 'Allrounder', 32),
('SRI09', 'Tharindu Kaushal', 'SRI', 'Batsman', 22),
('SRI10', 'Dushmantha Chameera', 'SRI', 'Bowler', 23),
('SRI11', 'Lasith Malinga', 'SRI', 'Bowler', 31),
('SRI12', 'Lahiru Thitimanne', 'SRI', 'Batsman', 25),
('SRI13', 'Suranga Lakmal', 'SRI', 'Bowler', 28),
('SRI14', 'Seekkuge Prasanna', 'SRI', 'Allrounder', 29),
('SRI15', 'Sachitra Senanayake', 'SRI', 'Allrounder', 30);

-- --------------------------------------------------------

--
-- Table structure for table `plays`
--

CREATE TABLE IF NOT EXISTS `plays` (
  `MATCH_ID` varchar(10) NOT NULL DEFAULT '',
  `TEAM_ID` varchar(10) NOT NULL DEFAULT '',
  `SCORE_RUN` int(11) DEFAULT NULL,
  `SCORE_WICKET` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `plays`
--

INSERT INTO `plays` (`MATCH_ID`, `TEAM_ID`, `SCORE_RUN`, `SCORE_WICKET`) VALUES
('M1', 'IND', 193, 10),
('M1', 'PAK', 155, 10),
('M2', 'NWZ', 0, 0),
('M2', 'RSA', 0, 0),
('M3', 'AUS', 0, 0),
('M3', 'PAK', 0, 0),
('M4', 'RSA', 0, 0),
('M4', 'SRI', 0, 0),
('M5', 'AUS', 0, 0),
('M5', 'IND', 0, 0),
('M6', 'NWZ', 0, 0),
('M6', 'SRI', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `plays_in`
--

CREATE TABLE IF NOT EXISTS `plays_in` (
  `MATCH_ID` varchar(10) NOT NULL,
  `PLAYER_ID` varchar(10) NOT NULL,
  `RUN_SCORED` int(11) DEFAULT NULL,
  `RUN_CONCEDED` int(11) DEFAULT NULL,
  `OVER_BOWLED` int(11) DEFAULT NULL,
  `BALL_PLAYED` int(11) DEFAULT NULL,
  `SIXES` int(11) DEFAULT NULL,
  `FOURS` int(11) DEFAULT NULL,
  `WICKET` int(11) DEFAULT NULL,
  `OUTS` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `plays_in`
--

INSERT INTO `plays_in` (`MATCH_ID`, `PLAYER_ID`, `RUN_SCORED`, `RUN_CONCEDED`, `OVER_BOWLED`, `BALL_PLAYED`, `SIXES`, `FOURS`, `WICKET`, `OUTS`) VALUES
('M1', 'IND01', 24, 0, 0, 15, 2, 1, 0, 'b Wahab Riaz c Sarfraz Ahmed'),
('M1', 'IND02', 7, 0, 0, 3, 0, 1, 0, 'b Sohail Khan w '),
('M1', 'IND03', 53, 0, 0, 21, 3, 6, 0, 'b Shahid Afridi w '),
('M1', 'IND04', 7, 0, 0, 3, 1, 0, 0, 'b Rahat Ali w '),
('M1', 'IND05', 0, 20, 12, 1, 0, 0, 3, 'b Rahat Ali w '),
('M1', 'IND06', 65, 0, 0, 34, 5, 3, 0, NULL),
('M1', 'IND07', 3, 0, 0, 5, 0, 0, 0, 'b Rahat Ali w '),
('M1', 'IND08', 0, 39, 18, 1, 0, 0, 3, 'b Rahat Ali l '),
('M1', 'IND09', 0, 16, 18, 3, 0, 0, 0, 'b Rahat Ali w '),
('M1', 'IND10', 22, 29, 18, 12, 1, 3, 0, 'b Shahid Afridi w '),
('M1', 'IND11', 12, 51, 23, 7, 0, 2, 4, 'b Sohail Khan w '),
('M1', 'PAK01', 0, 0, 0, 1, 0, 0, 0, 'b Umesh Yadav c MS Dhoni'),
('M1', 'PAK02', 6, 0, 0, 10, 0, 1, 0, 'b Suresh Raina w '),
('M1', 'PAK03', 4, 0, 0, 6, 0, 0, 0, 'b Umesh Yadav l '),
('M1', 'PAK04', 103, 0, 0, 48, 8, 7, 0, 'b Suresh Raina c Ravichandran Ashwin'),
('M1', 'PAK05', 2, 0, 0, 2, 0, 0, 0, 'Run Out'),
('M1', 'PAK06', 10, 0, 0, 11, 0, 1, 0, 'b Ravichandran Ashwin w '),
('M1', 'PAK07', 18, 21, 18, 5, 3, 0, 2, 'b Umesh Yadav w '),
('M1', 'PAK08', 12, 53, 24, 3, 2, 0, 5, 'b Ravichandran Ashwin w '),
('M1', 'PAK09', 0, 31, 18, 1, 0, 0, 1, 'b Ravichandran Ashwin w '),
('M1', 'PAK10', 0, 52, 24, 1, 0, 0, 0, NULL),
('M1', 'PAK11', 0, 36, 21, 1, 0, 0, 2, 'b Umesh Yadav w '),
('M2', 'NWZ01', 0, 0, 0, 0, 0, 0, 0, NULL),
('M2', 'NWZ02', 0, 0, 0, 0, 0, 0, 0, NULL),
('M2', 'NWZ03', 0, 0, 0, 0, 0, 0, 0, NULL),
('M2', 'NWZ04', 0, 0, 0, 0, 0, 0, 0, NULL),
('M2', 'NWZ05', 0, 0, 0, 0, 0, 0, 0, NULL),
('M2', 'NWZ06', 0, 0, 0, 0, 0, 0, 0, NULL),
('M2', 'NWZ07', 0, 0, 0, 0, 0, 0, 0, NULL),
('M2', 'NWZ08', 0, 0, 0, 0, 0, 0, 0, NULL),
('M2', 'NWZ09', 0, 0, 0, 0, 0, 0, 0, NULL),
('M2', 'NWZ10', 0, 0, 0, 0, 0, 0, 0, NULL),
('M2', 'NWZ11', 0, 0, 0, 0, 0, 0, 0, NULL),
('M2', 'RSA01', 0, 0, 0, 0, 0, 0, 0, NULL),
('M2', 'RSA02', 0, 0, 0, 0, 0, 0, 0, NULL),
('M2', 'RSA03', 0, 0, 0, 0, 0, 0, 0, NULL),
('M2', 'RSA04', 0, 0, 0, 0, 0, 0, 0, NULL),
('M2', 'RSA05', 0, 0, 0, 0, 0, 0, 0, NULL),
('M2', 'RSA06', 0, 0, 0, 0, 0, 0, 0, NULL),
('M2', 'RSA07', 0, 0, 0, 0, 0, 0, 0, NULL),
('M2', 'RSA08', 0, 0, 0, 0, 0, 0, 0, NULL),
('M2', 'RSA09', 0, 0, 0, 0, 0, 0, 0, NULL),
('M2', 'RSA10', 0, 0, 0, 0, 0, 0, 0, NULL),
('M2', 'RSA11', 0, 0, 0, 0, 0, 0, 0, NULL),
('M3', 'AUS01', 0, 0, 0, 0, 0, 0, 0, NULL),
('M3', 'AUS02', 0, 0, 0, 0, 0, 0, 0, NULL),
('M3', 'AUS03', 0, 0, 0, 0, 0, 0, 0, NULL),
('M3', 'AUS04', 0, 0, 0, 0, 0, 0, 0, NULL),
('M3', 'AUS05', 0, 0, 0, 0, 0, 0, 0, NULL),
('M3', 'AUS06', 0, 0, 0, 0, 0, 0, 0, NULL),
('M3', 'AUS07', 0, 0, 0, 0, 0, 0, 0, NULL),
('M3', 'AUS08', 0, 0, 0, 0, 0, 0, 0, NULL),
('M3', 'AUS09', 0, 0, 0, 0, 0, 0, 0, NULL),
('M3', 'AUS10', 0, 0, 0, 0, 0, 0, 0, NULL),
('M3', 'AUS11', 0, 0, 0, 0, 0, 0, 0, NULL),
('M3', 'PAK01', 0, 0, 0, 0, 0, 0, 0, NULL),
('M3', 'PAK02', 0, 0, 0, 0, 0, 0, 0, NULL),
('M3', 'PAK03', 0, 0, 0, 0, 0, 0, 0, NULL),
('M3', 'PAK04', 0, 0, 0, 0, 0, 0, 0, NULL),
('M3', 'PAK05', 0, 0, 0, 0, 0, 0, 0, NULL),
('M3', 'PAK06', 0, 0, 0, 0, 0, 0, 0, NULL),
('M3', 'PAK07', 0, 0, 0, 0, 0, 0, 0, NULL),
('M3', 'PAK08', 0, 0, 0, 0, 0, 0, 0, NULL),
('M3', 'PAK09', 0, 0, 0, 0, 0, 0, 0, NULL),
('M3', 'PAK10', 0, 0, 0, 0, 0, 0, 0, NULL),
('M3', 'PAK11', 0, 0, 0, 0, 0, 0, 0, NULL),
('M4', 'RSA01', 0, 0, 0, 0, 0, 0, 0, NULL),
('M4', 'RSA02', 0, 0, 0, 0, 0, 0, 0, NULL),
('M4', 'RSA03', 0, 0, 0, 0, 0, 0, 0, NULL),
('M4', 'RSA04', 0, 0, 0, 0, 0, 0, 0, NULL),
('M4', 'RSA05', 0, 0, 0, 0, 0, 0, 0, NULL),
('M4', 'RSA06', 0, 0, 0, 0, 0, 0, 0, NULL),
('M4', 'RSA07', 0, 0, 0, 0, 0, 0, 0, NULL),
('M4', 'RSA08', 0, 0, 0, 0, 0, 0, 0, NULL),
('M4', 'RSA09', 0, 0, 0, 0, 0, 0, 0, NULL),
('M4', 'RSA10', 0, 0, 0, 0, 0, 0, 0, NULL),
('M4', 'RSA11', 0, 0, 0, 0, 0, 0, 0, NULL),
('M4', 'SRI01', 0, 0, 0, 0, 0, 0, 0, NULL),
('M4', 'SRI02', 0, 0, 0, 0, 0, 0, 0, NULL),
('M4', 'SRI03', 0, 0, 0, 0, 0, 0, 0, NULL),
('M4', 'SRI04', 0, 0, 0, 0, 0, 0, 0, NULL),
('M4', 'SRI05', 0, 0, 0, 0, 0, 0, 0, NULL),
('M4', 'SRI06', 0, 0, 0, 0, 0, 0, 0, NULL),
('M4', 'SRI07', 0, 0, 0, 0, 0, 0, 0, NULL),
('M4', 'SRI08', 0, 0, 0, 0, 0, 0, 0, NULL),
('M4', 'SRI09', 0, 0, 0, 0, 0, 0, 0, NULL),
('M4', 'SRI10', 0, 0, 0, 0, 0, 0, 0, NULL),
('M4', 'SRI11', 0, 0, 0, 0, 0, 0, 0, NULL),
('M5', 'AUS01', 0, 0, 0, 0, 0, 0, 0, NULL),
('M5', 'AUS02', 0, 0, 0, 0, 0, 0, 0, NULL),
('M5', 'AUS03', 0, 0, 0, 0, 0, 0, 0, NULL),
('M5', 'AUS04', 0, 0, 0, 0, 0, 0, 0, NULL),
('M5', 'AUS05', 0, 0, 0, 0, 0, 0, 0, NULL),
('M5', 'AUS06', 0, 0, 0, 0, 0, 0, 0, NULL),
('M5', 'AUS07', 0, 0, 0, 0, 0, 0, 0, NULL),
('M5', 'AUS08', 0, 0, 0, 0, 0, 0, 0, NULL),
('M5', 'AUS09', 0, 0, 0, 0, 0, 0, 0, NULL),
('M5', 'AUS10', 0, 0, 0, 0, 0, 0, 0, NULL),
('M5', 'AUS11', 0, 0, 0, 0, 0, 0, 0, NULL),
('M5', 'IND01', 0, 0, 0, 0, 0, 0, 0, NULL),
('M5', 'IND02', 0, 0, 0, 0, 0, 0, 0, NULL),
('M5', 'IND03', 0, 0, 0, 0, 0, 0, 0, NULL),
('M5', 'IND04', 0, 0, 0, 0, 0, 0, 0, NULL),
('M5', 'IND05', 0, 0, 0, 0, 0, 0, 0, NULL),
('M5', 'IND06', 0, 0, 0, 0, 0, 0, 0, NULL),
('M5', 'IND07', 0, 0, 0, 0, 0, 0, 0, NULL),
('M5', 'IND08', 0, 0, 0, 0, 0, 0, 0, NULL),
('M5', 'IND09', 0, 0, 0, 0, 0, 0, 0, NULL),
('M5', 'IND10', 0, 0, 0, 0, 0, 0, 0, NULL),
('M5', 'IND11', 0, 0, 0, 0, 0, 0, 0, NULL),
('M6', 'NWZ01', 0, 0, 0, 0, 0, 0, 0, NULL),
('M6', 'NWZ02', 0, 0, 0, 0, 0, 0, 0, NULL),
('M6', 'NWZ03', 0, 0, 0, 0, 0, 0, 0, NULL),
('M6', 'NWZ04', 0, 0, 0, 0, 0, 0, 0, NULL),
('M6', 'NWZ05', 0, 0, 0, 0, 0, 0, 0, NULL),
('M6', 'NWZ06', 0, 0, 0, 0, 0, 0, 0, NULL),
('M6', 'NWZ07', 0, 0, 0, 0, 0, 0, 0, NULL),
('M6', 'NWZ08', 0, 0, 0, 0, 0, 0, 0, NULL),
('M6', 'NWZ09', 0, 0, 0, 0, 0, 0, 0, NULL),
('M6', 'NWZ10', 0, 0, 0, 0, 0, 0, 0, NULL),
('M6', 'NWZ11', 0, 0, 0, 0, 0, 0, 0, NULL),
('M6', 'SRI01', 0, 0, 0, 0, 0, 0, 0, NULL),
('M6', 'SRI02', 0, 0, 0, 0, 0, 0, 0, NULL),
('M6', 'SRI03', 0, 0, 0, 0, 0, 0, 0, NULL),
('M6', 'SRI04', 0, 0, 0, 0, 0, 0, 0, NULL),
('M6', 'SRI05', 0, 0, 0, 0, 0, 0, 0, NULL),
('M6', 'SRI06', 0, 0, 0, 0, 0, 0, 0, NULL),
('M6', 'SRI07', 0, 0, 0, 0, 0, 0, 0, NULL),
('M6', 'SRI08', 0, 0, 0, 0, 0, 0, 0, NULL),
('M6', 'SRI09', 0, 0, 0, 0, 0, 0, 0, NULL),
('M6', 'SRI10', 0, 0, 0, 0, 0, 0, 0, NULL),
('M6', 'SRI11', 0, 0, 0, 0, 0, 0, 0, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `teams`
--

CREATE TABLE IF NOT EXISTS `teams` (
  `TEAM_ID` varchar(10) NOT NULL DEFAULT '',
  `TEAM_NAME` varchar(20) DEFAULT NULL,
  `POOL` varchar(1) DEFAULT NULL,
  `POINTS` int(10) DEFAULT NULL,
  `CAPTAIN` varchar(10) DEFAULT NULL,
  `WICKET_KEEPER` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `teams`
--

INSERT INTO `teams` (`TEAM_ID`, `TEAM_NAME`, `POOL`, `POINTS`, `CAPTAIN`, `WICKET_KEEPER`) VALUES
('AUS', 'AUSTRALIA', 'A', 0, 'AUS06', 'AUS08'),
('IND', 'INDIA', 'A', 2, 'IND06', 'IND06'),
('NWZ', 'NEW ZEALAND', 'B', 0, 'NWZ02', 'NWZ02'),
('PAK', 'PAKISTAN', 'A', 0, 'PAK04', 'PAK02'),
('RSA', 'SOUTH AFRICA', 'B', 0, 'RSA05', 'RSA02'),
('SRI', 'SRI LANKA', 'B', 0, 'SRI03', 'SRI03');

-- --------------------------------------------------------

--
-- Table structure for table `umpire`
--

CREATE TABLE IF NOT EXISTS `umpire` (
  `UMPIRE_ID` varchar(10) NOT NULL DEFAULT '',
  `UMPIRE_NAME` varchar(10) DEFAULT NULL,
  `NO_OF_MATCHES` int(11) DEFAULT NULL,
  `AGE` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `umpire`
--

INSERT INTO `umpire` (`UMPIRE_ID`, `UMPIRE_NAME`, `NO_OF_MATCHES`, `AGE`) VALUES
('UMP01', 'Aleem Dar', 171, 46),
('UMP02', 'Billy Bowd', 83, 51),
('UMP03', 'Ian Gould', 103, 57),
('UMP04', 'Rod Tucker', 58, 50),
('UMP05', 'Steve Davi', 135, 62),
('UMP06', 'Marais Era', 62, 51);

-- --------------------------------------------------------

--
-- Table structure for table `umpires`
--

CREATE TABLE IF NOT EXISTS `umpires` (
  `UMPIRE_ID` varchar(10) NOT NULL DEFAULT '',
  `MATCH_ID` varchar(10) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `umpires`
--

INSERT INTO `umpires` (`UMPIRE_ID`, `MATCH_ID`) VALUES
('UMP01', 'M1'),
('UMP02', 'M1'),
('UMP03', 'M1'),
('UMP02', 'M2'),
('UMP03', 'M2'),
('UMP04', 'M2'),
('UMP03', 'M3'),
('UMP04', 'M3'),
('UMP05', 'M3'),
('UMP04', 'M4'),
('UMP05', 'M4'),
('UMP06', 'M4'),
('UMP01', 'M5'),
('UMP02', 'M5'),
('UMP03', 'M5'),
('UMP04', 'M6'),
('UMP05', 'M6'),
('UMP06', 'M6'),
('UMP04', 'M7'),
('UMP05', 'M7'),
('UMP06', 'M7'),
('UMP01', 'M8'),
('UMP02', 'M8'),
('UMP03', 'M8'),
('UMP02', 'M9'),
('UMP03', 'M9'),
('UMP04', 'M9');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `balls`
--
ALTER TABLE `balls`
 ADD PRIMARY KEY (`MATCH_ID`,`INNING`,`OVER`), ADD KEY `BATSMAN` (`BATSMAN`), ADD KEY `BOWLER` (`BOWLER`);

--
-- Indexes for table `matches`
--
ALTER TABLE `matches`
 ADD PRIMARY KEY (`MATCH_ID`), ADD KEY `TEAM1` (`TEAM1`), ADD KEY `TEAM2` (`TEAM2`), ADD KEY `TOSS` (`TOSS`);

--
-- Indexes for table `players`
--
ALTER TABLE `players`
 ADD PRIMARY KEY (`PLAYER_ID`), ADD KEY `TEAM_ID` (`TEAM_ID`);

--
-- Indexes for table `plays`
--
ALTER TABLE `plays`
 ADD PRIMARY KEY (`MATCH_ID`,`TEAM_ID`), ADD KEY `TEAM_ID` (`TEAM_ID`);

--
-- Indexes for table `plays_in`
--
ALTER TABLE `plays_in`
 ADD PRIMARY KEY (`MATCH_ID`,`PLAYER_ID`), ADD KEY `PLAYER_ID` (`PLAYER_ID`);

--
-- Indexes for table `teams`
--
ALTER TABLE `teams`
 ADD PRIMARY KEY (`TEAM_ID`), ADD KEY `CAPTAIN` (`CAPTAIN`), ADD KEY `WICKET_KEEPER` (`WICKET_KEEPER`);

--
-- Indexes for table `umpire`
--
ALTER TABLE `umpire`
 ADD PRIMARY KEY (`UMPIRE_ID`);

--
-- Indexes for table `umpires`
--
ALTER TABLE `umpires`
 ADD PRIMARY KEY (`UMPIRE_ID`,`MATCH_ID`), ADD KEY `MATCH_ID` (`MATCH_ID`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `balls`
--
ALTER TABLE `balls`
ADD CONSTRAINT `BALLS_ibfk_1` FOREIGN KEY (`MATCH_ID`) REFERENCES `matches` (`MATCH_ID`),
ADD CONSTRAINT `BALLS_ibfk_2` FOREIGN KEY (`BATSMAN`) REFERENCES `players` (`PLAYER_ID`),
ADD CONSTRAINT `BALLS_ibfk_3` FOREIGN KEY (`BOWLER`) REFERENCES `players` (`PLAYER_ID`);

--
-- Constraints for table `matches`
--
ALTER TABLE `matches`
ADD CONSTRAINT `MATCHES_ibfk_1` FOREIGN KEY (`TEAM1`) REFERENCES `teams` (`TEAM_ID`),
ADD CONSTRAINT `MATCHES_ibfk_2` FOREIGN KEY (`TEAM2`) REFERENCES `teams` (`TEAM_ID`),
ADD CONSTRAINT `MATCHES_ibfk_3` FOREIGN KEY (`TOSS`) REFERENCES `teams` (`TEAM_ID`);

--
-- Constraints for table `players`
--
ALTER TABLE `players`
ADD CONSTRAINT `PLAYERS_ibfk_1` FOREIGN KEY (`TEAM_ID`) REFERENCES `teams` (`TEAM_ID`);

--
-- Constraints for table `plays`
--
ALTER TABLE `plays`
ADD CONSTRAINT `PLAYS_ibfk_1` FOREIGN KEY (`MATCH_ID`) REFERENCES `matches` (`MATCH_ID`),
ADD CONSTRAINT `PLAYS_ibfk_2` FOREIGN KEY (`TEAM_ID`) REFERENCES `teams` (`TEAM_ID`);

--
-- Constraints for table `plays_in`
--
ALTER TABLE `plays_in`
ADD CONSTRAINT `PLAYS_IN_ibfk_1` FOREIGN KEY (`MATCH_ID`) REFERENCES `matches` (`MATCH_ID`),
ADD CONSTRAINT `PLAYS_IN_ibfk_2` FOREIGN KEY (`PLAYER_ID`) REFERENCES `players` (`PLAYER_ID`);

--
-- Constraints for table `teams`
--
ALTER TABLE `teams`
ADD CONSTRAINT `TEAMS_ibfk_1` FOREIGN KEY (`CAPTAIN`) REFERENCES `players` (`PLAYER_ID`),
ADD CONSTRAINT `TEAMS_ibfk_2` FOREIGN KEY (`WICKET_KEEPER`) REFERENCES `players` (`PLAYER_ID`);

--
-- Constraints for table `umpires`
--
ALTER TABLE `umpires`
ADD CONSTRAINT `UMPIRES_ibfk_1` FOREIGN KEY (`UMPIRE_ID`) REFERENCES `umpire` (`UMPIRE_ID`),
ADD CONSTRAINT `UMPIRES_ibfk_2` FOREIGN KEY (`MATCH_ID`) REFERENCES `matches` (`MATCH_ID`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
