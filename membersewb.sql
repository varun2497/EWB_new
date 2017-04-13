-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 31, 2017 at 01:38 PM
-- Server version: 5.7.9
-- PHP Version: 5.6.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `varun`
--

-- --------------------------------------------------------

--
-- Table structure for table `membersewb`
--

DROP TABLE IF EXISTS `membersewb`;
CREATE TABLE IF NOT EXISTS `membersewb` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `Name` varchar(20) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `DOB` varchar(20) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `Age` int(4) NOT NULL,
  `Gender` varchar(20) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `College` varchar(50) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `Contact` varchar(20) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `Email` varchar(30) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `Biography` varchar(400) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `Interests` varchar(400) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
