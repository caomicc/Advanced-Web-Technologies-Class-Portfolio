-- phpMyAdmin SQL Dump
-- version 2.11.11.3
-- http://www.phpmyadmin.net
--
-- Host: 10.0.11.226
-- Generation Time: Jan 27, 2014 at 12:37 PM
-- Server version: 5.0.96
-- PHP Version: 5.3.4

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

--
-- Database: `rmitchelle`
--

-- --------------------------------------------------------

--
-- Table structure for table `cusTab`
--

DROP TABLE IF EXISTS `cusTab`;
CREATE TABLE IF NOT EXISTS `cusTab` (
  `cusID` int(11) NOT NULL auto_increment,
  `cusLast` varchar(25) NOT NULL,
  `cusFirst` varchar(20) default NULL,
  `cusZip` varchar(5) NOT NULL,
  `cusStreet` varchar(40) NOT NULL,
  `cusSex` enum('m','f','u') NOT NULL default 'u',
  `cusSource` int(11) NOT NULL,
  `cusAge` int(2) default NULL,
  `cusBirth` date default NULL,
  `cusComment` text,
  `cusEntered` datetime NOT NULL,
  `cusUpdated` datetime default NULL,
  PRIMARY KEY  (`cusID`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=39 ;

--
-- Dumping data for table `cusTab`
--

INSERT INTO `cusTab` VALUES(35, 'Monroe', 'Mary', '12254', '214 Mason Ave', 'f', 32, 25, '2000-01-13', 'comment', '2014-01-02 14:34:31', NULL);
INSERT INTO `cusTab` VALUES(36, 'Jackson', 'Jerry', '65854', '', 'm', 33, 40, '1995-01-07', NULL, '2014-01-03 14:35:19', NULL);
INSERT INTO `cusTab` VALUES(37, 'Clinton', 'Carol', '54874', '', 'u', 34, 40, '1950-05-06', NULL, '2014-01-10 14:36:29', NULL);
INSERT INTO `cusTab` VALUES(38, 'Nixon', 'Nathon', '54125', '55 North Ave', 'm', 35, 51, '1955-11-22', NULL, '2014-01-06 14:37:24', NULL);
