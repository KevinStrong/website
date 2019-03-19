-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 03, 2013 at 11:13 AM
-- Server version: 5.5.27-log
-- PHP Version: 5.4.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `myinfo`
--

-- --------------------------------------------------------

--
-- Table structure for table `approveduser`
--

CREATE TABLE IF NOT EXISTS `approveduser` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `LastName` varchar(30) NOT NULL,
  `FirstName` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `username` varchar(30) NOT NULL,
  `Password` varchar(32) NOT NULL,
  `ActivationKey` varchar(32) NOT NULL,
  `Verified` tinyint(1) NOT NULL DEFAULT '0',
  `Hasmet` int(11) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=20 ;

--
-- Dumping data for table `approveduser`
--

INSERT INTO `approveduser` (`ID`, `LastName`, `FirstName`, `email`, `username`, `Password`, `ActivationKey`, `Verified`, `Hasmet`) VALUES
(14, 'Kevin', 'strong', 'narcindin@gmail.com', 'narcindin', '900150983cd24fb0d6963f7d28e17f72', '3ce9c7c258d3e4f010a7aaf41f943a0e', 1, 6),
(15, 'notkevin', 'notstrong', 'test@test.com', 'myface', '912ec803b2ce49e4a541068d495ab570', 'I love Kevin!', 1, 4),
(16, 'Bob', 'Barker', 'bob@bob.com', 'TheRealBobBarker', '962012d09b8170d912f0669f6d7d9d07', 'I love Kevin!', 1, 1),
(17, 'Katie', 'Strong', 'Katie@jap.jn', 'Commaucto', '59711de3621f4c82ea4d068a787f3a6d', 'I love Kevin!', 1, 1),
(18, 'Final', 'Test', 'test@final.com', 'Testing', '098f6bcd4621d373cade4e832627b4f6', 'I love Kevin!', 1, 0),
(19, 'akjd', 'ewlknr', 'asenr@klasnd.com', 'lkanwer', 'e3ae9aac5e647161a3ea7cf57674a59a', 'I love Kevin!', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `meetings`
--

CREATE TABLE IF NOT EXISTS `meetings` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `location` varchar(50) NOT NULL,
  `time` time NOT NULL,
  `date` date NOT NULL,
  `name` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=111 ;

--
-- Dumping data for table `meetings`
--

INSERT INTO `meetings` (`id`, `location`, `time`, `date`, `name`) VALUES
(1, 'Test Location two', '11:00:00', '2013-04-10', 'Bob Barker Son'),
(75, 'Toranto', '14:23:36', '1999-01-23', 'Lambo'),
(103, 'zxcv', '24:59:59', '1999-01-23', 'Kevin strong'),
(104, 'My House', '02:23:23', '1777-02-26', 'Kevin strong'),
(105, 'anothertest', '24:59:59', '1777-02-26', 'Kevin strong'),
(106, 'Nowhere', '11:54:33', '1993-11-03', 'notkevin notstrong'),
(107, 'asdf', '24:59:59', '1800-02-23', 'Katie Strong'),
(108, 'The Price is Right', '12:12:12', '1999-01-23', 'Bob Barker'),
(109, '2place', '05:05:05', '1995-05-19', 'notkevin notstrong'),
(110, 'asdf', '12:12:12', '1888-02-26', 'notkevin notstrong');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
