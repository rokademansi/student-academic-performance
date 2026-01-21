-- phpMyAdmin SQL Dump
-- version 3.2.0.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Feb 09, 2024 at 01:38 PM
-- Server version: 5.1.36
-- PHP Version: 5.3.0

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `StudentAcademicPerformance`
--

-- --------------------------------------------------------

--
-- Table structure for table `evaluation`
--

CREATE TABLE IF NOT EXISTS `evaluation` (
  `PrnNo` text NOT NULL,
  `EnrollNo` text NOT NULL,
  `Class` text NOT NULL,
  `SubCode` text NOT NULL,
  `Test1` text NOT NULL,
  `Test2` text NOT NULL,
  `Mid` text NOT NULL,
  `Final` text NOT NULL,
  `Midper` text NOT NULL,
  `FinPer` text NOT NULL,
  `Difference` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `evaluation`
--


-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE IF NOT EXISTS `student` (
  `PrnNo` text NOT NULL,
  `EnrollNo` text NOT NULL,
  `Class` text NOT NULL,
  `Division` text NOT NULL,
  `Faculty` text NOT NULL,
  `Name` text NOT NULL,
  `Gender` text NOT NULL,
  `Caste` text NOT NULL,
  `ContNo` text NOT NULL,
  `Emailid` text NOT NULL,
  `Password` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--


-- --------------------------------------------------------

--
-- Table structure for table `subject`
--

CREATE TABLE IF NOT EXISTS `subject` (
  `SrNo` int(11) NOT NULL,
  `Class` text NOT NULL,
  `SubCode` text NOT NULL,
  `Description` text NOT NULL,
  `ForSem` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subject`
--


-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `Userid` text NOT NULL,
  `UserName` text NOT NULL,
  `ContNo` text NOT NULL,
  `Password` text NOT NULL,
  `Emailid` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

