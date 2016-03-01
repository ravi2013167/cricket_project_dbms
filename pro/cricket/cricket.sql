-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 28, 2015 at 11:17 AM
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
  `OVER` decimal(3,1) NOT NULL DEFAULT '0.0',
  `RUN` int(11) DEFAULT NULL,
  `WICKET` varchar(10) DEFAULT NULL,
  `EXTRA` varchar(10) DEFAULT NULL,
  `BATSMAN` varchar(10) DEFAULT NULL,
  `BOWLER` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `balls`
--

INSERT INTO `balls` (`MATCH_ID`, `INNING`, `OVER`, `RUN`, `WICKET`, `EXTRA`, `BATSMAN`, `BOWLER`) VALUES
('M1', 1, '0.1', 1, '0not', '0b', 'IND01', 'PAK01');

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
  `RESULT_DESCTIPTION` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `matches`
--

INSERT INTO `matches` (`MATCH_ID`, `VENUE`, `DATE`, `START_TIME`, `TEAM1`, `TEAM2`, `TOSS`, `TOSS_DECISION`, `WINNER`, `RESULT_DESCTIPTION`) VALUES
('M1', 'Eden garden , Kolkata', '2015-04-01', '09:00:00', 'IND', 'PAK', NULL, NULL, '', NULL),
('M2', 'Sardar Patel Stadium , Ahamdabad', '2015-04-02', '09:00:00', 'NWZ', 'RSA', NULL, NULL, NULL, NULL),
('M3', 'Feroz Shah Kotla , New Delhi', '2015-04-03', '09:00:00', 'AUS', 'PAK', NULL, NULL, NULL, NULL),
('M4', 'Vidarbha Cricket Association Stadium, Nagpur', '2015-04-04', '09:00:00', 'RSA', 'SRI', NULL, NULL, NULL, NULL),
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
('M1', 'IND', 0, 0),
('M1', 'PAK', 0, 0),
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
  `OVER_BOWLED` decimal(3,1) DEFAULT NULL,
  `BALL_PLAYED` int(11) DEFAULT NULL,
  `SIXES` int(11) DEFAULT NULL,
  `FOURS` int(11) DEFAULT NULL,
  `WICKET` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `plays_in`
--

INSERT INTO `plays_in` (`MATCH_ID`, `PLAYER_ID`, `RUN_SCORED`, `RUN_CONCEDED`, `OVER_BOWLED`, `BALL_PLAYED`, `SIXES`, `FOURS`, `WICKET`) VALUES
('M1', 'IND01', 0, 0, '0.0', 0, 0, 0, '0'),
('M1', 'IND02', 0, 0, '0.0', 0, 0, 0, '0'),
('M1', 'IND03', 0, 0, '0.0', 0, 0, 0, '0'),
('M1', 'IND04', 0, 0, '0.0', 0, 0, 0, '0'),
('M1', 'IND05', 0, 0, '0.0', 0, 0, 0, '0'),
('M1', 'IND06', 0, 0, '0.0', 0, 0, 0, '0'),
('M1', 'IND07', 0, 0, '0.0', 0, 0, 0, '0'),
('M1', 'IND08', 0, 0, '0.0', 0, 0, 0, '0'),
('M1', 'IND09', 0, 0, '0.0', 0, 0, 0, '0'),
('M1', 'IND10', 0, 0, '0.0', 0, 0, 0, '0'),
('M1', 'IND11', 0, 0, '0.0', 0, 0, 0, '0'),
('M1', 'PAK01', 0, 0, '0.0', 0, 0, 0, '0'),
('M1', 'PAK02', 0, 0, '0.0', 0, 0, 0, '0'),
('M1', 'PAK03', 0, 0, '0.0', 0, 0, 0, '0'),
('M1', 'PAK04', 0, 0, '0.0', 0, 0, 0, '0'),
('M1', 'PAK05', 0, 0, '0.0', 0, 0, 0, '0'),
('M1', 'PAK06', 0, 0, '0.0', 0, 0, 0, '0'),
('M1', 'PAK07', 0, 0, '0.0', 0, 0, 0, '0'),
('M1', 'PAK08', 0, 0, '0.0', 0, 0, 0, '0'),
('M1', 'PAK09', 0, 0, '0.0', 0, 0, 0, '0'),
('M1', 'PAK10', 0, 0, '0.0', 0, 0, 0, '0'),
('M1', 'PAK11', 0, 0, '0.0', 0, 0, 0, '0'),
('M2', 'NWZ01', 0, 0, '0.0', 0, 0, 0, '0'),
('M2', 'NWZ02', 0, 0, '0.0', 0, 0, 0, '0'),
('M2', 'NWZ03', 0, 0, '0.0', 0, 0, 0, '0'),
('M2', 'NWZ04', 0, 0, '0.0', 0, 0, 0, '0'),
('M2', 'NWZ05', 0, 0, '0.0', 0, 0, 0, '0'),
('M2', 'NWZ06', 0, 0, '0.0', 0, 0, 0, '0'),
('M2', 'NWZ07', 0, 0, '0.0', 0, 0, 0, '0'),
('M2', 'NWZ08', 0, 0, '0.0', 0, 0, 0, '0'),
('M2', 'NWZ09', 0, 0, '0.0', 0, 0, 0, '0'),
('M2', 'NWZ10', 0, 0, '0.0', 0, 0, 0, '0'),
('M2', 'NWZ11', 0, 0, '0.0', 0, 0, 0, '0'),
('M2', 'RSA01', 0, 0, '0.0', 0, 0, 0, '0'),
('M2', 'RSA02', 0, 0, '0.0', 0, 0, 0, '0'),
('M2', 'RSA03', 0, 0, '0.0', 0, 0, 0, '0'),
('M2', 'RSA04', 0, 0, '0.0', 0, 0, 0, '0'),
('M2', 'RSA05', 0, 0, '0.0', 0, 0, 0, '0'),
('M2', 'RSA06', 0, 0, '0.0', 0, 0, 0, '0'),
('M2', 'RSA07', 0, 0, '0.0', 0, 0, 0, '0'),
('M2', 'RSA08', 0, 0, '0.0', 0, 0, 0, '0'),
('M2', 'RSA09', 0, 0, '0.0', 0, 0, 0, '0'),
('M2', 'RSA10', 0, 0, '0.0', 0, 0, 0, '0'),
('M2', 'RSA11', 0, 0, '0.0', 0, 0, 0, '0'),
('M3', 'AUS01', 0, 0, '0.0', 0, 0, 0, '0'),
('M3', 'AUS02', 0, 0, '0.0', 0, 0, 0, '0'),
('M3', 'AUS03', 0, 0, '0.0', 0, 0, 0, '0'),
('M3', 'AUS04', 0, 0, '0.0', 0, 0, 0, '0'),
('M3', 'AUS05', 0, 0, '0.0', 0, 0, 0, '0'),
('M3', 'AUS06', 0, 0, '0.0', 0, 0, 0, '0'),
('M3', 'AUS07', 0, 0, '0.0', 0, 0, 0, '0'),
('M3', 'AUS08', 0, 0, '0.0', 0, 0, 0, '0'),
('M3', 'AUS09', 0, 0, '0.0', 0, 0, 0, '0'),
('M3', 'AUS10', 0, 0, '0.0', 0, 0, 0, '0'),
('M3', 'AUS11', 0, 0, '0.0', 0, 0, 0, '0'),
('M3', 'PAK01', 0, 0, '0.0', 0, 0, 0, '0'),
('M3', 'PAK02', 0, 0, '0.0', 0, 0, 0, '0'),
('M3', 'PAK03', 0, 0, '0.0', 0, 0, 0, '0'),
('M3', 'PAK04', 0, 0, '0.0', 0, 0, 0, '0'),
('M3', 'PAK05', 0, 0, '0.0', 0, 0, 0, '0'),
('M3', 'PAK06', 0, 0, '0.0', 0, 0, 0, '0'),
('M3', 'PAK07', 0, 0, '0.0', 0, 0, 0, '0'),
('M3', 'PAK08', 0, 0, '0.0', 0, 0, 0, '0'),
('M3', 'PAK09', 0, 0, '0.0', 0, 0, 0, '0'),
('M3', 'PAK10', 0, 0, '0.0', 0, 0, 0, '0'),
('M3', 'PAK11', 0, 0, '0.0', 0, 0, 0, '0'),
('M4', 'RSA01', 0, 0, '0.0', 0, 0, 0, '0'),
('M4', 'RSA02', 0, 0, '0.0', 0, 0, 0, '0'),
('M4', 'RSA03', 0, 0, '0.0', 0, 0, 0, '0'),
('M4', 'RSA04', 0, 0, '0.0', 0, 0, 0, '0'),
('M4', 'RSA05', 0, 0, '0.0', 0, 0, 0, '0'),
('M4', 'RSA06', 0, 0, '0.0', 0, 0, 0, '0'),
('M4', 'RSA07', 0, 0, '0.0', 0, 0, 0, '0'),
('M4', 'RSA08', 0, 0, '0.0', 0, 0, 0, '0'),
('M4', 'RSA09', 0, 0, '0.0', 0, 0, 0, '0'),
('M4', 'RSA10', 0, 0, '0.0', 0, 0, 0, '0'),
('M4', 'RSA11', 0, 0, '0.0', 0, 0, 0, '0'),
('M4', 'SRI01', 0, 0, '0.0', 0, 0, 0, '0'),
('M4', 'SRI02', 0, 0, '0.0', 0, 0, 0, '0'),
('M4', 'SRI03', 0, 0, '0.0', 0, 0, 0, '0'),
('M4', 'SRI04', 0, 0, '0.0', 0, 0, 0, '0'),
('M4', 'SRI05', 0, 0, '0.0', 0, 0, 0, '0'),
('M4', 'SRI06', 0, 0, '0.0', 0, 0, 0, '0'),
('M4', 'SRI07', 0, 0, '0.0', 0, 0, 0, '0'),
('M4', 'SRI08', 0, 0, '0.0', 0, 0, 0, '0'),
('M4', 'SRI09', 0, 0, '0.0', 0, 0, 0, '0'),
('M4', 'SRI10', 0, 0, '0.0', 0, 0, 0, '0'),
('M4', 'SRI11', 0, 0, '0.0', 0, 0, 0, '0'),
('M5', 'AUS01', 0, 0, '0.0', 0, 0, 0, '0'),
('M5', 'AUS02', 0, 0, '0.0', 0, 0, 0, '0'),
('M5', 'AUS03', 0, 0, '0.0', 0, 0, 0, '0'),
('M5', 'AUS04', 0, 0, '0.0', 0, 0, 0, '0'),
('M5', 'AUS05', 0, 0, '0.0', 0, 0, 0, '0'),
('M5', 'AUS06', 0, 0, '0.0', 0, 0, 0, '0'),
('M5', 'AUS07', 0, 0, '0.0', 0, 0, 0, '0'),
('M5', 'AUS08', 0, 0, '0.0', 0, 0, 0, '0'),
('M5', 'AUS09', 0, 0, '0.0', 0, 0, 0, '0'),
('M5', 'AUS10', 0, 0, '0.0', 0, 0, 0, '0'),
('M5', 'AUS11', 0, 0, '0.0', 0, 0, 0, '0'),
('M5', 'IND01', 0, 0, '0.0', 0, 0, 0, '0'),
('M5', 'IND02', 0, 0, '0.0', 0, 0, 0, '0'),
('M5', 'IND03', 0, 0, '0.0', 0, 0, 0, '0'),
('M5', 'IND04', 0, 0, '0.0', 0, 0, 0, '0'),
('M5', 'IND05', 0, 0, '0.0', 0, 0, 0, '0'),
('M5', 'IND06', 0, 0, '0.0', 0, 0, 0, '0'),
('M5', 'IND07', 0, 0, '0.0', 0, 0, 0, '0'),
('M5', 'IND08', 0, 0, '0.0', 0, 0, 0, '0'),
('M5', 'IND09', 0, 0, '0.0', 0, 0, 0, '0'),
('M5', 'IND10', 0, 0, '0.0', 0, 0, 0, '0'),
('M5', 'IND11', 0, 0, '0.0', 0, 0, 0, '0'),
('M6', 'NWZ01', 0, 0, '0.0', 0, 0, 0, '0'),
('M6', 'NWZ02', 0, 0, '0.0', 0, 0, 0, '0'),
('M6', 'NWZ03', 0, 0, '0.0', 0, 0, 0, '0'),
('M6', 'NWZ04', 0, 0, '0.0', 0, 0, 0, '0'),
('M6', 'NWZ05', 0, 0, '0.0', 0, 0, 0, '0'),
('M6', 'NWZ06', 0, 0, '0.0', 0, 0, 0, '0'),
('M6', 'NWZ07', 0, 0, '0.0', 0, 0, 0, '0'),
('M6', 'NWZ08', 0, 0, '0.0', 0, 0, 0, '0'),
('M6', 'NWZ09', 0, 0, '0.0', 0, 0, 0, '0'),
('M6', 'NWZ10', 0, 0, '0.0', 0, 0, 0, '0'),
('M6', 'NWZ11', 0, 0, '0.0', 0, 0, 0, '0'),
('M6', 'SRI01', 0, 0, '0.0', 0, 0, 0, '0'),
('M6', 'SRI02', 0, 0, '0.0', 0, 0, 0, '0'),
('M6', 'SRI03', 0, 0, '0.0', 0, 0, 0, '0'),
('M6', 'SRI04', 0, 0, '0.0', 0, 0, 0, '0'),
('M6', 'SRI05', 0, 0, '0.0', 0, 0, 0, '0'),
('M6', 'SRI06', 0, 0, '0.0', 0, 0, 0, '0'),
('M6', 'SRI07', 0, 0, '0.0', 0, 0, 0, '0'),
('M6', 'SRI08', 0, 0, '0.0', 0, 0, 0, '0'),
('M6', 'SRI09', 0, 0, '0.0', 0, 0, 0, '0'),
('M6', 'SRI10', 0, 0, '0.0', 0, 0, 0, '0'),
('M6', 'SRI11', 0, 0, '0.0', 0, 0, 0, '0');

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
('AUS', 'AUSTRALIA', 'A', 0, 'AUS01', 'AUS02'),
('IND', 'INDIA', 'A', 0, 'IND01', 'IND02'),
('NWZ', 'NEW ZEALAND', 'B', 0, 'NWZ01', 'NWZ02'),
('PAK', 'PAKISTAN', 'A', 0, 'PAK01', 'PAK02'),
('RSA', 'SOUTH AFRICA', 'B', 0, 'RSA01', 'RSA02'),
('SRI', 'SRI LANKA', 'B', 0, 'SRI01', 'SRI02');

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
