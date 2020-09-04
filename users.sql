-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Mar 28, 2019 at 04:04 AM
-- Server version: 5.7.21
-- PHP Version: 5.6.35

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `users`
--

-- --------------------------------------------------------

--
-- Table structure for table `usercontacts`
--

DROP TABLE IF EXISTS `usercontacts`;
CREATE TABLE IF NOT EXISTS `usercontacts` (
  `Email` varchar(100) NOT NULL,
  `ImgURL` varchar(100) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `Profmail` varchar(100) NOT NULL,
  PRIMARY KEY (`Profmail`),
  UNIQUE KEY `Email` (`Email`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `userprofile`
--

DROP TABLE IF EXISTS `userprofile`;
CREATE TABLE IF NOT EXISTS `userprofile` (
  `Name` varchar(50) NOT NULL,
  `ImgURL` varchar(100) NOT NULL,
  `Email` varchar(100) NOT NULL,
  PRIMARY KEY (`Email`),
  UNIQUE KEY `ImgURL` (`ImgURL`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `userprofile`
--

INSERT INTO `userprofile` (`Name`, `ImgURL`, `Email`) VALUES
('Prasanna J S', 'prasanna4800.github.io', 'prasanna4800@gmail.com'),
('Rakshith Holla', 'https://lh6.googleusercontent.com/-9KD41ihIojg/AAAAAAAAAAI/AAAAAAAAAWI/v-FaG2U0aI8/s96-c/photo.jpg', 'rakshithholla31@gmail.com'),
('Megharaj M', 'megharajp143.com', 'megharajp143@gmail.com'),
('', '', '');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
