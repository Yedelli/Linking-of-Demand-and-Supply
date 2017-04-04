-- phpMyAdmin SQL Dump
-- version 2.11.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 19, 2016 at 05:17 PM
-- Server version: 5.0.51
-- PHP Version: 5.2.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

--
-- Database: `wallet`
--

-- --------------------------------------------------------

--
-- Table structure for table `canteen_cash`
--

CREATE TABLE IF NOT EXISTS `canteen_cash` (
  `id` int(11) NOT NULL auto_increment,
  `paid_by` varchar(30) NOT NULL,
  `amount` int(11) NOT NULL,
  `time` timestamp NOT NULL default CURRENT_TIMESTAMP on update CURRENT_TIMESTAMP,
  `final_amount` int(11) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `canteen_cash`
--

INSERT INTO `canteen_cash` (`id`, `paid_by`, `amount`, `time`, `final_amount`) VALUES
(1, 'Saurabh', 12, '2016-10-19 21:59:13', 12);


-- --------------------------------------------------------
--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `name` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `pwd` varchar(30) NOT NULL,
  `number` varchar(10) NOT NULL,
  
) ENGINE=MyISAM  DEFAULT CHARSET=latin1  ;





-- --------------------------------------------------------
--
-- Table structure for table `library_cash`
--

CREATE TABLE IF NOT EXISTS `library_cash` (
  `id` int(11) NOT NULL auto_increment,
  `paid_by` varchar(30) NOT NULL,
  `amount` int(11) NOT NULL,
  `time` timestamp NOT NULL default CURRENT_TIMESTAMP on update CURRENT_TIMESTAMP,
  `final_amount` int(11) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `library_cash`
--

INSERT INTO `library_cash` (`id`, `paid_by`, `amount`, `time`, `final_amount`) VALUES
(1, 'Saurabh', 45, '2016-10-19 21:59:09', 45);

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE IF NOT EXISTS `student` (
  `name` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `pwd` varchar(30) NOT NULL,
  `branch` varchar(30) NOT NULL,
  `division` varchar(10) NOT NULL,
  `number` varchar(10) NOT NULL,
  `wallet_id` varchar(10) NOT NULL,
  `amount` varchar(5) NOT NULL default '0',
  PRIMARY KEY  (`wallet_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`name`, `email`, `pwd`, `branch`, `division`, `number`, `wallet_id`, `amount`) VALUES
('Miten', 'mike@gmail.com', '12345', 'INFT', 'D15', '9773890704', 'M123', '100'),
('Saurabh', 'sau@gmail.com', '12345', 'INFT', 'D15', '9876543213', 'S123', '31'),
('Deepa', 'deepa@gmail.com', '12345', 'INFT', 'D15', '5432678432', 'D123', '100');

-- --------------------------------------------------------

--
-- Table structure for table `xerox_cash`
--

CREATE TABLE IF NOT EXISTS `xerox_cash` (
  `id` int(11) NOT NULL auto_increment,
  `paid_by` varchar(30) NOT NULL,
  `amount` int(11) NOT NULL,
  `time` timestamp NOT NULL default CURRENT_TIMESTAMP on update CURRENT_TIMESTAMP,
  `final_amount` int(11) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `xerox_cash`
--

INSERT INTO `xerox_cash` (`id`, `paid_by`, `amount`, `time`, `final_amount`) VALUES
(1, 'Saurabh', 12, '2016-10-19 21:59:20', 12);
