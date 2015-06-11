-- phpMyAdmin SQL Dump
-- version 2.11.11.3
-- http://www.phpmyadmin.net
--
-- Host: 10.0.11.226
-- Generation Time: Mar 09, 2015 at 07:20 AM
-- Server version: 5.0.96
-- PHP Version: 5.3.4

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `rmitchelle`
--

-- --------------------------------------------------------

--
-- Table structure for table `regionTab`
--

DROP TABLE IF EXISTS `regionTab`;
CREATE TABLE IF NOT EXISTS `regionTab` (
  `regionID` tinyint(4) NOT NULL,
  `regionName` varchar(16) NOT NULL,
  PRIMARY KEY  (`regionID`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `regionTab`
--

INSERT INTO `regionTab` VALUES(1, 'Northeast');
INSERT INTO `regionTab` VALUES(2, 'Southeast');
INSERT INTO `regionTab` VALUES(3, 'Northwest');
INSERT INTO `regionTab` VALUES(4, 'Southwest');
