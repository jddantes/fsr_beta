-- phpMyAdmin SQL Dump
-- version 4.0.9
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 02, 2014 at 10:58 AM
-- Server version: 5.5.34
-- PHP Version: 5.4.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `test`
--

DELIMITER $$
--
-- Procedures
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `test_multi_sets`()
    DETERMINISTIC
begin
        select user() as first_col;
        select user() as first_col, now() as second_col;
        select user() as first_col, now() as second_col, now() as third_col;
        end$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `admin_work`
--

CREATE TABLE IF NOT EXISTS `admin_work` (
  `tid` int(11) NOT NULL,
  `position` varchar(50) NOT NULL,
  `office` varchar(50) NOT NULL,
  `credits` int(11) NOT NULL,
  `id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `tid` (`tid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `offices`
--

CREATE TABLE IF NOT EXISTS `offices` (
  `id` int(11) NOT NULL,
  `office` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `offices`
--

INSERT INTO `offices` (`id`, `office`) VALUES
(1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `teachers`
--

CREATE TABLE IF NOT EXISTS `teachers` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(30) NOT NULL,
  `password` char(128) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `middle_initial` varchar(50) NOT NULL,
  `nickname` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `mobile` char(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `teachers`
--

INSERT INTO `teachers` (`id`, `username`, `password`, `last_name`, `first_name`, `middle_initial`, `nickname`, `email`, `mobile`) VALUES
(1, 'jmdantes', 'leaf', 'Dantes', 'Joseph Daniel', 'M.', 'Jd', 'jddantes@gmail.com', '0917577624'),
(2, 'jmdantes2', 'cookie', '', '', '', '', '', '0'),
(3, 'lbajamundi', 'cookie', 'Bajamundi', 'Lyon Miguel', 'B', 'Lyon', 'lyon@gmail.com', '09999999999'),
(4, 'amesenas', 'cookie', 'Mesenas', 'Aloysius Joseph', 'O', 'Otep', 'otep@yahoo.com', '09999999999'),
(5, 'arodriguez', 'cookie', 'Rodriguez', 'Alessandro Konstantin', 'P', 'Sandro', 'sandro@yahoo.com', '09999999999'),
(6, 'jtorres', 'cookie', 'Torres', 'Jherico Gabriel', 'Q', 'Jherico', 'jherico@yahoo.com', '09999999999');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
