-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Aug 13, 2019 at 01:25 AM
-- Server version: 5.7.24
-- PHP Version: 7.2.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ike`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

DROP TABLE IF EXISTS `category`;
CREATE TABLE IF NOT EXISTS `category` (
  `id` mediumint(50) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `name`) VALUES
(1, 'photo');

-- --------------------------------------------------------

--
-- Table structure for table `collection`
--

DROP TABLE IF EXISTS `collection`;
CREATE TABLE IF NOT EXISTS `collection` (
  `id` mediumint(50) NOT NULL AUTO_INCREMENT,
  `relationshipId` mediumint(50) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` longtext NOT NULL,
  `coverPhoto` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `memory`
--

DROP TABLE IF EXISTS `memory`;
CREATE TABLE IF NOT EXISTS `memory` (
  `id` mediumint(50) NOT NULL AUTO_INCREMENT,
  `userId` mediumint(50) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `timestamp` timestamp NOT NULL,
  `caption` longtext NOT NULL,
  `path` varchar(255) NOT NULL,
  `categoryId` mediumint(50) NOT NULL,
  `collectionId` mediumint(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `memory`
--

INSERT INTO `memory` (`id`, `userId`, `title`, `description`, `timestamp`, `caption`, `path`, `categoryId`, `collectionId`) VALUES
(1, 11, 'memory', '', '2019-07-31 07:00:00', 'remember', 'twit.png', 1, 11),
(2, 11, 'memory', '', '2019-07-31 07:00:00', 'remember', 'twit.png', 1, 11),
(3, 11, 'memory', '', '2019-07-31 07:00:00', 'remember', 'twit.png', 1, 11),
(4, 11, 'cool time', '', '2019-07-31 07:00:00', 'it was', 'dal.png', 1, 11),
(5, 11, 'Funny Stuff', '', '2019-07-31 07:00:00', 'hahaha', 'acidic-citrus-fruit-close-up-1536871.jpg', 1, 11),
(7, 10, 'Trips', '', '2019-08-12 07:00:00', '#trippy #tunnel', 'giphy.gif', 1, 10),
(8, 10, 'Trip with Sammie', '', '2019-08-12 07:00:00', '#Mexico2019', '247dc0cbd587e988b92dc910441c470b.jpg', 1, 10),
(16, 14, 'Inner Peace', '', '2019-08-13 07:00:00', '#ugh', 'Screen+Shot+2017-10-13+at+9.48.54+AM.png', 1, 14),
(14, 14, 'Trippy Days', '', '2019-08-13 07:00:00', '#2019', 'giphy.gif', 1, 14),
(15, 14, 'Another Trip', '', '2019-08-13 07:00:00', '#2019', 'tech.gif', 1, 14);

-- --------------------------------------------------------

--
-- Table structure for table `relationship`
--

DROP TABLE IF EXISTS `relationship`;
CREATE TABLE IF NOT EXISTS `relationship` (
  `id` mediumint(50) NOT NULL AUTO_INCREMENT,
  `userAid` mediumint(50) NOT NULL,
  `userBid` mediumint(50) NOT NULL,
  `dateCreated` date NOT NULL,
  `anniversary` date NOT NULL,
  `coverPhoto` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `id` mediumint(50) NOT NULL AUTO_INCREMENT,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `photo` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `email`, `password`, `name`, `photo`) VALUES
(13, 'suzy@sweet.com', '$2y$10$II9wU.0xHXvVDk7MyzI6Tu5fVwb0/jhLF/XTYQ7jJwGaabp7md.9y', 'Suzy Sweet', 'blur-bright-close-up-1405773.jpg'),
(12, 'name@email.com', '$2y$10$bhgR9AAZ3L3VllcvQnKjs.gY4Ck7zc41vWFLstSTGCrnjWU7yUPDG', 'emily lutz', 'twit.png'),
(11, 'email@email.com', '$2y$10$EJGNdWB6Fg/ylk2I4tGbQ.XuKKzVcj/5U4d3w2RO67fdHsZq7Fvq2', 'emily lutzer', 'twit.png'),
(10, 'name@email.com', '$2y$10$TFGofiQxQKzt8V.bNxq2nOaw7D.sL6kflSBcrmjcPCz1nsmyWV3aO', 'suzy sweet', 'acidic-citrus-fruit-close-up-1536871.jpg'),
(9, 'email@email.com', '$2y$10$xbesXDnF2/p7xgqM39SQR.Hr9lMvK8l7aPxGPRlc15zbHQTd49vMW', 'emily lutz', 'abc.jpg'),
(14, 'kits@email.com', '$2y$12$88fT1n6O/ER8MbGGY5TCEOuwpbR6NVW0d5GdNJQHaFNYc/KZ8/P6q', 'Kritarth', 'me_blue.png');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
