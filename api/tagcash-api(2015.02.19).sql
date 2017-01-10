-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 19, 2015 at 04:17 PM
-- Server version: 5.5.32
-- PHP Version: 5.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `tagcash-api`
--
CREATE DATABASE IF NOT EXISTS `tagcash-api` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `tagcash-api`;

-- --------------------------------------------------------

--
-- Table structure for table `completes`
--

CREATE TABLE IF NOT EXISTS `completes` (
  `id` int(8) NOT NULL AUTO_INCREMENT,
  `source_network` text NOT NULL,
  `email` varchar(50) DEFAULT NULL,
  `main_network` text,
  `instagram` int(11) DEFAULT NULL,
  `twitter` int(11) DEFAULT NULL,
  `facebook` int(11) DEFAULT NULL,
  `country` varchar(50) DEFAULT NULL,
  `retailer` varchar(50) DEFAULT NULL,
  `note` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE IF NOT EXISTS `contacts` (
  `id` int(8) NOT NULL AUTO_INCREMENT,
  `source_network` text NOT NULL,
  `email` varchar(50) DEFAULT NULL,
  `instagram` int(8) DEFAULT NULL,
  `twitter` int(8) DEFAULT NULL,
  `facebook` int(8) DEFAULT NULL,
  `retailer` varchar(50) DEFAULT NULL,
  `note` varchar(50) DEFAULT NULL,
  `country` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `leads`
--

CREATE TABLE IF NOT EXISTS `leads` (
  `id` int(8) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `source` varchar(50) NOT NULL DEFAULT 'LinkShare',
  `pose` int(8) NOT NULL DEFAULT '0',
  `lookbook` int(8) NOT NULL DEFAULT '0',
  `chictopia` int(8) NOT NULL DEFAULT '0',
  `hashtag` varchar(50) DEFAULT NULL,
  `preserve` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf32 AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
