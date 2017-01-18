-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jan 11, 2017 at 05:57 AM
-- Server version: 5.5.16
-- PHP Version: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `com_main`
--

-- --------------------------------------------------------

--
-- Table structure for table `com_list`
--

CREATE TABLE IF NOT EXISTS `com_list` (
  `com_id` int(20) NOT NULL AUTO_INCREMENT,
  `com_name` varchar(255) NOT NULL,
  `com_phone` int(20) NOT NULL,
  `com_type` varchar(11) NOT NULL,
  `com_detail` varchar(255) NOT NULL,
  `com_date` varchar(11) NOT NULL,
  `com_status` int(20) NOT NULL,
  PRIMARY KEY (`com_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `com_list`
--

INSERT INTO `com_list` (`com_id`, `com_name`, `com_phone`, `com_type`, `com_detail`, `com_date`, `com_status`) VALUES
(1, 'นายสมชาย ทำคอมพัง', 800808080, 'Notebook', 'ทำน้ำหกใส่', '05/01/17', 1);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
