-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 23, 2020 at 09:56 AM
-- Server version: 5.6.12-log
-- PHP Version: 5.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `tour_guide`
--
CREATE DATABASE IF NOT EXISTS `tour_guide` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `tour_guide`;

-- --------------------------------------------------------

--
-- Table structure for table `accomadation_details`
--

CREATE TABLE IF NOT EXISTS `accomadation_details` (
  `nic` varchar(30) NOT NULL,
  `accomadation_name` varchar(100) NOT NULL,
  `customer_name` varchar(100) NOT NULL,
  `contact` varchar(30) NOT NULL,
  `No_of_days` int(10) NOT NULL,
  `No_of_members` int(10) NOT NULL,
  `country` varchar(50) NOT NULL,
  `email` varchar(30) NOT NULL,
  `comment` text NOT NULL,
  PRIMARY KEY (`nic`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `accomadation_details`
--

INSERT INTO `accomadation_details` (`nic`, `accomadation_name`, `customer_name`, `contact`, `No_of_days`, `No_of_members`, `country`, `email`, `comment`) VALUES
('4441', 'Luxury Hotel', 'ss', '223242', 3, 4, 'Belarus', 's@gmail.com', 'ddd'),
('444444', 'Bangalows', 'dddddddd', '4444', 4, 2, 'Barbados', 's@gmail.com', 'ss'),
('546', 'Luxury Hotel', 'sss', '666', 6, 6, 'Bangladesh', 's@gmail.com', 'ss'),
('554', 'Semi Luxury Hotels', 'sf', '555', 5, 5, 'Albania', 's@gmail.com', 'ss'),
('5555', 'Apartments', 'yyyyyyy', '555', 5, 5, 'Barbados', 's@gmail.com', 'ffff'),
('666', 'Cabanas', 'yyyyy', '65', 2, 1, 'Falkland Islands', 's@gmail.com', 'dd');

-- --------------------------------------------------------

--
-- Table structure for table `feedback_details`
--

CREATE TABLE IF NOT EXISTS `feedback_details` (
  `id` int(15) NOT NULL AUTO_INCREMENT,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `feedback` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `feedback_details`
--

INSERT INTO `feedback_details` (`id`, `username`, `email`, `feedback`) VALUES
(1, 'tharaka', 's@gmail.com', 'ssssssssssssssssssssssss');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE IF NOT EXISTS `login` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `username`, `password`) VALUES
(1, 'user', 'pwd');

-- --------------------------------------------------------

--
-- Table structure for table `message_details`
--

CREATE TABLE IF NOT EXISTS `message_details` (
  `id` int(15) NOT NULL AUTO_INCREMENT,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `message` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `message_details`
--

INSERT INTO `message_details` (`id`, `username`, `email`, `message`) VALUES
(1, 'admin', 's@gmail.com', 'sssssssss'),
(2, 'kkka', 'a@gmail.com', 'ffffffffffffffff'),
(3, 'narmi', 'ddd@gmail.com', 'ddd');

-- --------------------------------------------------------

--
-- Table structure for table `packages`
--

CREATE TABLE IF NOT EXISTS `packages` (
  `nic` varchar(15) NOT NULL,
  `package_name` varchar(50) NOT NULL,
  `customer_name` varchar(100) NOT NULL,
  `contact` int(20) NOT NULL,
  `country` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `comment` longtext NOT NULL,
  PRIMARY KEY (`nic`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `packages`
--

INSERT INTO `packages` (`nic`, `package_name`, `customer_name`, `contact`, `country`, `email`, `comment`) VALUES
('123456781v', 'Couple package', 'John Michel', 2147483647, 'United Kingdom', 'john@hotmail.com', 'N/A'),
('123456782', 'Driving package', 'Dreson Angeloo', 2147483647, 'Australia', 'dreson@gmail.com', 'Can I extend the package? I want two more days.'),
('123456789v', 'Beach holiday package', 'Asanka Perera', 712345678, 'Sri Lanka', 'asanka@gmail.com', 'N/A'),
('223456789v', 'Wildlife package', 'Tharindu Madhushan', 1234567811, 'Sri Lanka', 'tharindu@gmail.com', 'N/A'),
('3455675433', 'Hiking package', 'Mohmmad T. Khan ', 2147483647, 'United Arab Erimates', 'moho.t@yahoo.com', 'N/A'),
('4567', 'Hiking package', 's', 4543, 'Andorra', 'ww', 'q'),
('666', 'Hiking package', 'aaa', 8966, 'Bahrain', 's@gmail.com', 'aaa');

-- --------------------------------------------------------

--
-- Table structure for table `payment_details`
--

CREATE TABLE IF NOT EXISTS `payment_details` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `FName` varchar(50) NOT NULL,
  `LName` varchar(50) NOT NULL,
  `address` varchar(100) NOT NULL,
  `StrAddress` varchar(100) NOT NULL,
  `city` varchar(50) NOT NULL,
  `state` varchar(50) NOT NULL,
  `PostalCode` varchar(20) NOT NULL,
  `country` varchar(50) NOT NULL,
  `CHolderName` varchar(100) NOT NULL,
  `CNumber` int(50) NOT NULL,
  `ExpireDate` date NOT NULL,
  `password` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `payment_details`
--

INSERT INTO `payment_details` (`id`, `FName`, `LName`, `address`, `StrAddress`, `city`, `state`, `PostalCode`, `country`, `CHolderName`, `CNumber`, `ExpireDate`, `password`) VALUES
(3, 'aa', 'ss', 'dffss', 'dfss', 'sss', 'aaa', '443', 'bc', 'ggg', 6574, '2020-10-01', '33333eee'),
(4, 'dd', 'fdf', 'ddd', 'ddddddd', 'ddddddd', 'dddddd', '555', 'ddddddddddd', 'hhh', 2147483647, '2020-10-08', '3333333eeee');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
