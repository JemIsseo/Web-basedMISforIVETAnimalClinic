-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Dec 01, 2022 at 04:07 AM
-- Server version: 5.7.36
-- PHP Version: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbivetclinic`
--

-- --------------------------------------------------------

--
-- Table structure for table `tblarcprofile`
--

DROP TABLE IF EXISTS `tblarcprofile`;
CREATE TABLE IF NOT EXISTS `tblarcprofile` (
  `profileid` int(11) NOT NULL AUTO_INCREMENT,
  `petname` varchar(45) NOT NULL,
  `age` int(11) NOT NULL,
  `sex` varchar(45) NOT NULL,
  `weight` varchar(45) NOT NULL,
  `owner` varchar(100) NOT NULL,
  `phone` varchar(45) NOT NULL,
  `email` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`profileid`)
) ENGINE=MyISAM AUTO_INCREMENT=62 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tblarcprofile`
--

INSERT INTO `tblarcprofile` (`profileid`, `petname`, `age`, `sex`, `weight`, `owner`, `phone`, `email`) VALUES
(59, 'awdwadadw', 4, 'Male', '4', 'awdwadwa', '45465757', '43435@wadw'),
(58, 'Kitkat', 3, 'Male', '53kg', 'Jessica', '0945346575', 'jessicasotto242@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `tblprofile`
--

DROP TABLE IF EXISTS `tblprofile`;
CREATE TABLE IF NOT EXISTS `tblprofile` (
  `profileid` int(11) NOT NULL AUTO_INCREMENT,
  `petname` varchar(100) NOT NULL,
  `age` int(11) NOT NULL,
  `sex` varchar(45) NOT NULL,
  `weight` varchar(45) NOT NULL,
  `ownername` varchar(100) NOT NULL,
  `phone` varchar(45) NOT NULL,
  `email` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`profileid`)
) ENGINE=MyISAM AUTO_INCREMENT=123 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tblprofile`
--

INSERT INTO `tblprofile` (`profileid`, `petname`, `age`, `sex`, `weight`, `ownername`, `phone`, `email`) VALUES
(111, 'Tsaris', 12, 'Female', '10kg', 'James', '09545656', 'libertyjeremy23@gmail.com'),
(102, 'Gekgek', 11, 'Male', '10kg', 'awdwdww', '09099223039', 'jemawawe@email.com'),
(110, 'Hannah', 2, 'Female', '11kg', 'wrerwrer', '039434374', 'libertypogi@gmail.com'),
(117, 'Pusa', 3, 'Male', '10kg', 'Ara', '0956565656', 'araara23@gmail.com'),
(120, 'Tiger', 1, 'Male', '2kg', 'Jayson', '0934354564', 'jayson13@gmail.com'),
(122, 'Bigboy', 3, 'Male', '5kg', 'Bim', '0916238722', 'Bimsalinga@gmailcom');

-- --------------------------------------------------------

--
-- Table structure for table `tbluseraccount`
--

DROP TABLE IF EXISTS `tbluseraccount`;
CREATE TABLE IF NOT EXISTS `tbluseraccount` (
  `username` varchar(45) NOT NULL,
  `password` varchar(45) NOT NULL,
  `usertype` varchar(45) NOT NULL,
  `emailaddress` varchar(100) NOT NULL,
  `image` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`username`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbluseraccount`
--

INSERT INTO `tbluseraccount` (`username`, `password`, `usertype`, `emailaddress`, `image`) VALUES
('sample', '123', 'IT Expert', 'jem@gmail.com', 'IMG-63882477116708.49032779.jpg'),
('ITEXPERT', 'helloteam', 'IT Expert', 'itexpert53@gmail.com', 'IMG-63878a0ccee5e7.17731728.jpg'),
('sec', '55555', 'Secretary', 'secretary21@gmail.com', 'IMG-638789dfa0cc97.20558446.jpeg'),
('admin101', '123', 'Admin', 'administrator23@gmail.com', 'IMG-638789b54c2df7.07455096.png');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
