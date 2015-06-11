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
-- Table structure for table `stateTab`
--

DROP TABLE IF EXISTS `stateTab`;
CREATE TABLE IF NOT EXISTS `stateTab` (
  `state_id` smallint(5) unsigned NOT NULL auto_increment COMMENT 'PK: Unique state ID',
  `state_name` varchar(32) collate utf8_unicode_ci NOT NULL COMMENT 'State name with first letter capital',
  `state_abbr` varchar(8) collate utf8_unicode_ci default NULL COMMENT 'Optional state abbreviation (US is 2 capital letters)',
  `region` tinyint(4) NOT NULL,
  PRIMARY KEY  (`state_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=52 ;

--
-- Dumping data for table `stateTab`
--

INSERT INTO `stateTab` VALUES(1, 'Alabama', 'AL', 2);
INSERT INTO `stateTab` VALUES(2, 'Alaska', 'AK', 3);
INSERT INTO `stateTab` VALUES(3, 'Arizona', 'AZ', 4);
INSERT INTO `stateTab` VALUES(4, 'Arkansas', 'AR', 2);
INSERT INTO `stateTab` VALUES(5, 'California', 'CA', 4);
INSERT INTO `stateTab` VALUES(6, 'Colorado', 'CO', 3);
INSERT INTO `stateTab` VALUES(7, 'Connecticut', 'CT', 1);
INSERT INTO `stateTab` VALUES(8, 'Delaware', 'DE', 1);
INSERT INTO `stateTab` VALUES(9, 'District of Columbia', 'DC', 1);
INSERT INTO `stateTab` VALUES(10, 'Florida', 'FL', 2);
INSERT INTO `stateTab` VALUES(11, 'Georgia', 'GA', 2);
INSERT INTO `stateTab` VALUES(12, 'Hawaii', 'HI', 4);
INSERT INTO `stateTab` VALUES(13, 'Idaho', 'ID', 3);
INSERT INTO `stateTab` VALUES(14, 'Illinois', 'IL', 1);
INSERT INTO `stateTab` VALUES(15, 'Indiana', 'IN', 1);
INSERT INTO `stateTab` VALUES(16, 'Iowa', 'IA', 3);
INSERT INTO `stateTab` VALUES(17, 'Kansas', 'KS', 3);
INSERT INTO `stateTab` VALUES(18, 'Kentucky', 'KY', 2);
INSERT INTO `stateTab` VALUES(19, 'Louisiana', 'LA', 2);
INSERT INTO `stateTab` VALUES(20, 'Maine', 'ME', 1);
INSERT INTO `stateTab` VALUES(21, 'Maryland', 'MD', 2);
INSERT INTO `stateTab` VALUES(22, 'Massachusetts', 'MA', 1);
INSERT INTO `stateTab` VALUES(23, 'Michigan', 'MI', 1);
INSERT INTO `stateTab` VALUES(24, 'Minnesota', 'MN', 3);
INSERT INTO `stateTab` VALUES(25, 'Mississippi', 'MS', 2);
INSERT INTO `stateTab` VALUES(26, 'Missouri', 'MO', 4);
INSERT INTO `stateTab` VALUES(27, 'Montana', 'MT', 3);
INSERT INTO `stateTab` VALUES(28, 'Nebraska', 'NE', 3);
INSERT INTO `stateTab` VALUES(29, 'Nevada', 'NV', 4);
INSERT INTO `stateTab` VALUES(30, 'New Hampshire', 'NH', 1);
INSERT INTO `stateTab` VALUES(31, 'New Jersey', 'NJ', 1);
INSERT INTO `stateTab` VALUES(32, 'New Mexico', 'NM', 4);
INSERT INTO `stateTab` VALUES(33, 'New York', 'NY', 1);
INSERT INTO `stateTab` VALUES(34, 'North Carolina', 'NC', 2);
INSERT INTO `stateTab` VALUES(35, 'North Dakota', 'ND', 3);
INSERT INTO `stateTab` VALUES(36, 'Ohio', 'OH', 1);
INSERT INTO `stateTab` VALUES(37, 'Oklahoma', 'OK', 4);
INSERT INTO `stateTab` VALUES(38, 'Oregon', 'OR', 3);
INSERT INTO `stateTab` VALUES(39, 'Pennsylvania', 'PA', 1);
INSERT INTO `stateTab` VALUES(40, 'Rhode Island', 'RI', 1);
INSERT INTO `stateTab` VALUES(41, 'South Carolina', 'SC', 2);
INSERT INTO `stateTab` VALUES(42, 'South Dakota', 'SD', 3);
INSERT INTO `stateTab` VALUES(43, 'Tennessee', 'TN', 2);
INSERT INTO `stateTab` VALUES(44, 'Texas', 'TX', 4);
INSERT INTO `stateTab` VALUES(45, 'Utah', 'UT', 3);
INSERT INTO `stateTab` VALUES(46, 'Vermont', 'VT', 1);
INSERT INTO `stateTab` VALUES(47, 'Virginia', 'VA', 2);
INSERT INTO `stateTab` VALUES(48, 'Washington', 'WA', 3);
INSERT INTO `stateTab` VALUES(49, 'West Virginia', 'WV', 2);
INSERT INTO `stateTab` VALUES(50, 'Wisconsin', 'WI', 3);
INSERT INTO `stateTab` VALUES(51, 'Wyoming', 'WY', 3);
