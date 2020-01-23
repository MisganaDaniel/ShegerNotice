-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 04, 2018 at 11:15 AM
-- Server version: 5.6.16
-- PHP Version: 5.5.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `social`
--

-- --------------------------------------------------------

--
-- Table structure for table `friends`
--

CREATE TABLE IF NOT EXISTS `friends` (
  `user` varchar(16) DEFAULT NULL,
  `friend` varchar(16) DEFAULT NULL,
  KEY `user` (`user`(6)),
  KEY `friend` (`friend`(6))
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `friends`
--

INSERT INTO `friends` (`user`, `friend`) VALUES
('getinet', 'm15ga3'),
('m15ga3', 'miku'),
('miku', 'messay'),
('miku', 'm15ga3'),
('yt', 'm15ga3');

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

CREATE TABLE IF NOT EXISTS `members` (
  `user` varchar(16) DEFAULT NULL,
  `pass` varchar(16) DEFAULT NULL,
  KEY `user` (`user`(6))
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `members`
--

INSERT INTO `members` (`user`, `pass`) VALUES
('getinet', '12345678'),
('joe', '1234'),
('m15ga3', '1234'),
('miku', '12345'),
('messay', '21'),
('MasterAdmin', 'thegreatestalive'),
('yt', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE IF NOT EXISTS `messages` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `auth` varchar(16) DEFAULT NULL,
  `recip` varchar(16) DEFAULT NULL,
  `pm` char(1) DEFAULT NULL,
  `time` int(10) unsigned DEFAULT NULL,
  `message` varchar(4096) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `auth` (`auth`(6)),
  KEY `recip` (`recip`(6))
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`id`, `auth`, `recip`, `pm`, `time`, `message`) VALUES
(1, 'getinet', 'getinet', '0', 1503484467, 'I love Ethiopian'),
(2, 'miku', 'miku', '0', 1529571178, 'hi'),
(3, 'messay', 'miku', '0', 1529574260, 'hi mike'),
(4, 'miku', 'miku', '0', 1529583811, 'how are you doing'),
(5, 'm15ga3', 'm15ga3', '0', 1529866112, 'hello\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `profiles`
--

CREATE TABLE IF NOT EXISTS `profiles` (
  `user` varchar(16) DEFAULT NULL,
  `text` varchar(4096) DEFAULT NULL,
  KEY `user` (`user`(6))
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `profiles`
--

INSERT INTO `profiles` (`user`, `text`) VALUES
('getinet', ''),
('m15ga3', '');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
