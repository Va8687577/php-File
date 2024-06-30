-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 30, 2024 at 03:42 PM
-- Server version: 5.5.8
-- PHP Version: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `library_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `categorytbl`
--

CREATE TABLE IF NOT EXISTS `categorytbl` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `catname` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `categorytbl`
--

INSERT INTO `categorytbl` (`id`, `catname`) VALUES
(2, 'bba'),
(5, 'magazines'),
(8, 'bhagvad gita'),
(9, 'icc'),
(10, 'vishal agrawal'),
(11, 'vishal agrawal');
