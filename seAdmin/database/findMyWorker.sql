-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 01, 2017 at 10:44 PM
-- Server version: 5.7.17-0ubuntu0.16.04.1
-- PHP Version: 7.0.15-0ubuntu0.16.04.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `findMyWorker`
--

-- --------------------------------------------------------

--
-- Table structure for table `cook`
--

CREATE TABLE `cook` (
  `UID` bigint(100) NOT NULL,
  `rating` float NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cook`
--

INSERT INTO `cook` (`UID`, `rating`) VALUES
(1111, 2.5);

-- --------------------------------------------------------

--
-- Table structure for table `driver`
--

CREATE TABLE `driver` (
  `UID` bigint(100) NOT NULL,
  `rating` float NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `driver`
--

INSERT INTO `driver` (`UID`, `rating`) VALUES
(1111, 4.1),
(2222, 4.3);

-- --------------------------------------------------------

--
-- Table structure for table `electrician`
--

CREATE TABLE `electrician` (
  `UID` bigint(100) NOT NULL,
  `rating` float NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `electrician`
--

INSERT INTO `electrician` (`UID`, `rating`) VALUES
(1234, 3.8);

-- --------------------------------------------------------

--
-- Table structure for table `employers`
--

CREATE TABLE `employers` (
  `UID` bigint(100) NOT NULL,
  `fullName` varchar(40) NOT NULL,
  `contactNo` varchar(10) NOT NULL,
  `email` varchar(500) NOT NULL,
  `password` varchar(200) NOT NULL,
  `aadharNo` varchar(16) NOT NULL,
  `companyName` varchar(30) NOT NULL,
  `address` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `maid`
--

CREATE TABLE `maid` (
  `UID` bigint(100) NOT NULL,
  `rating` float NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tiffinwala`
--

CREATE TABLE `tiffinwala` (
  `UID` bigint(100) NOT NULL,
  `rating` float NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tiffinwala`
--

INSERT INTO `tiffinwala` (`UID`, `rating`) VALUES
(2222, 3.9);

-- --------------------------------------------------------

--
-- Table structure for table `workers`
--

CREATE TABLE `workers` (
  `UID` bigint(100) NOT NULL,
  `fullName` varchar(30) NOT NULL,
  `password` varchar(300) NOT NULL,
  `contactNo` varchar(10) NOT NULL,
  `DOB` date NOT NULL,
  `aadharNo` varchar(16) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `skills` varchar(1000) NOT NULL,
  `city` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `workers`
--

INSERT INTO `workers` (`UID`, `fullName`, `password`, `contactNo`, `DOB`, `aadharNo`, `gender`, `skills`, `city`) VALUES
(1111, 'Abhinav Valecha', 'hahaha', '123', '2017-04-04', '78945484515', 'Male', 'Cook,Driver', 'Mumbai'),
(1234, 'Ravi Yadav', 'a', '7854587', '2017-04-03', '659569', 'Male', 'Electrician', 'Pune'),
(2222, 'Saurabh Tripathi', 'askdfjsajfdasjf', '7845854', '2017-04-12', '48948798786', 'Male', 'Tiffinwala,Driver', 'Nagpur');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cook`
--
ALTER TABLE `cook`
  ADD PRIMARY KEY (`UID`);

--
-- Indexes for table `driver`
--
ALTER TABLE `driver`
  ADD PRIMARY KEY (`UID`);

--
-- Indexes for table `electrician`
--
ALTER TABLE `electrician`
  ADD PRIMARY KEY (`UID`);

--
-- Indexes for table `employers`
--
ALTER TABLE `employers`
  ADD PRIMARY KEY (`UID`),
  ADD UNIQUE KEY `contactNo` (`contactNo`,`email`,`aadharNo`);

--
-- Indexes for table `maid`
--
ALTER TABLE `maid`
  ADD PRIMARY KEY (`UID`);

--
-- Indexes for table `tiffinwala`
--
ALTER TABLE `tiffinwala`
  ADD PRIMARY KEY (`UID`);

--
-- Indexes for table `workers`
--
ALTER TABLE `workers`
  ADD PRIMARY KEY (`UID`),
  ADD UNIQUE KEY `contactNo` (`contactNo`,`aadharNo`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `employers`
--
ALTER TABLE `employers`
  MODIFY `UID` bigint(100) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `workers`
--
ALTER TABLE `workers`
  MODIFY `UID` bigint(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12346;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
