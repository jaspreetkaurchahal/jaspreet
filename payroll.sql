-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 07, 2017 at 08:18 AM
-- Server version: 5.5.24-log
-- PHP Version: 5.4.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `payroll`
--

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE IF NOT EXISTS `register` (
  `regid` int(5) NOT NULL AUTO_INCREMENT,
  `reguname` varchar(20) NOT NULL,
  `regpass` varchar(15) NOT NULL,
  `regemail` varchar(40) NOT NULL,
  PRIMARY KEY (`regemail`),
  UNIQUE KEY `regid` (`regid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`regid`, `reguname`, `regpass`, `regemail`) VALUES
(1, 'Admin', 'admin', 'admin@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `Eid` int(5) NOT NULL AUTO_INCREMENT,
  `Ename` varchar(25) NOT NULL,
  `Edob` date NOT NULL,
  `Egender` varchar(6) NOT NULL,
  `Eaddress` varchar(50) NOT NULL,
  `Ecity` varchar(20) NOT NULL,
  `Eprovince` varchar(20) NOT NULL,
  `Epostal` varchar(6) NOT NULL,
  `Eemail` varchar(40) NOT NULL,
  `Ejoiningdate` date NOT NULL,
  `Eannualpay` int(11) NOT NULL,
  PRIMARY KEY (`Eid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`Eid`, `Ename`, `Edob`, `Egender`, `Eaddress`, `Ecity`, `Eprovince`, `Epostal`, `Eemail`, `Ejoiningdate`, `Eannualpay`) VALUES
(10, 'Ranjeet Singh', '1991-01-26', 'Male', 'Sunam', 'Sunam', 'punjab', '148028', 'help@gmail.com', '2016-09-19', 100000);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
