-- phpMyAdmin SQL Dump
-- version 2.11.11.3
-- http://www.phpmyadmin.net
--
-- Host: 10.0.11.226
-- Generation Time: Jan 27, 2014 at 12:31 PM
-- Server version: 5.0.96
-- PHP Version: 5.3.4

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

--
-- Database: `rmitchelle`
--

-- --------------------------------------------------------

--
-- Table structure for table `srcTab`
--

DROP TABLE IF EXISTS `srcTab`;
CREATE TABLE IF NOT EXISTS `srcTab` (
  `srcID` int(11) NOT NULL auto_increment,
  `srcName` varchar(25) NOT NULL,
  `srcComment` text,
  `srcEntered` datetime NOT NULL,
  `srcUpdated` datetime default NULL,
  PRIMARY KEY  (`srcID`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=36 ;

--
-- Dumping data for table `srcTab`
--

INSERT INTO `srcTab` VALUES(32, 'TV Ad', NULL, '0000-00-00 00:00:00', NULL);
INSERT INTO `srcTab` VALUES(33, 'Radio Ad', NULL, '0000-00-00 00:00:00', NULL);
INSERT INTO `srcTab` VALUES(34, 'Web Special', NULL, '2014-01-27 14:30:34', NULL);
INSERT INTO `srcTab` VALUES(35, 'Other', 'sample comment', '2014-01-08 14:30:52', NULL);
