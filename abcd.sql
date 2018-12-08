-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 07, 2018 at 05:24 AM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `abcd`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `blood_group` varchar(20) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(17) NOT NULL,
  `city` varchar(55) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=19 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `firstname`, `lastname`, `username`, `password`, `blood_group`, `email`, `phone`, `city`) VALUES
(8, 'anil', 'janawad', 'anil', '123456', '', '', '', ''),
(9, '', '', 'anil', '123456', '', '', '', ''),
(10, 'an', 'aj', 'ani', 'ani123456', 'a', 'mac', '123', 'ss'),
(11, '', '', '', '', '', '', '', ''),
(12, '', '', '', '', '', '', '', ''),
(13, '', '', '', 'ajajaj', '', '', '', ''),
(14, 'Anil', 'Janawad', 'Anil', '123456', 'A +ve', 'janawadanil@gmail.com', '9164942431', 'Bangalore'),
(15, '', '', '', '', '', '', '', ''),
(16, '', '', '', '123456', '', '', '', ''),
(17, '', '', '', '123456', '', '', '', ''),
(18, 'macleghfgh', '', 'macledffgh', '123456', '', '', '', '');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
