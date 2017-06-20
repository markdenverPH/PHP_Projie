-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 20, 2017 at 10:16 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 7.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pakitoairlines`
--

-- --------------------------------------------------------

--
-- Table structure for table `airplane`
--

CREATE TABLE `airplane` (
  `PL_ID` int(11) NOT NULL,
  `PL_SEATS` int(11) NOT NULL,
  `PL_ROUTE` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `flight`
--

CREATE TABLE `flight` (
  `FL_ID` int(11) NOT NULL,
  `FL_CLASS` int(11) NOT NULL,
  `FL_DEPARTDATE` date NOT NULL,
  `FL_RETURNDATE` date NOT NULL,
  `FL_TO` varchar(11) NOT NULL,
  `FL_FROM` varchar(11) NOT NULL,
  `FL_TYPE` varchar(1000) NOT NULL,
  `FL_PASSQTY` int(11) NOT NULL,
  `FL_FARE` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `passenger`
--

CREATE TABLE `passenger` (
  `PASS_ID` int(11) NOT NULL,
  `PASS_AGE` int(11) NOT NULL,
  `PASS_ADDRESS` varchar(100) NOT NULL,
  `PASS_GENDER` varchar(100) NOT NULL,
  `PASS_FIRSTNAME` varchar(100) NOT NULL,
  `PASS_MIDDLENAME` varchar(100) NOT NULL,
  `PASS_LASTNAME` varchar(100) NOT NULL,
  `PASS_EMAIL` varchar(100) NOT NULL,
  `PASS_PASSWORD` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `passenger`
--

INSERT INTO `passenger` (`PASS_ID`, `PASS_AGE`, `PASS_ADDRESS`, `PASS_GENDER`, `PASS_FIRSTNAME`, `PASS_MIDDLENAME`, `PASS_LASTNAME`, `PASS_EMAIL`, `PASS_PASSWORD`) VALUES
(8, 18, '1020a, Metrica St., Sampaloc, Manila', 'MALE', 'Angelo', 'Ecura', 'Ganaden Jr', 'angelojrganaden@gmail.com', '12345678');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `airplane`
--
ALTER TABLE `airplane`
  ADD PRIMARY KEY (`PL_ID`);

--
-- Indexes for table `flight`
--
ALTER TABLE `flight`
  ADD PRIMARY KEY (`FL_ID`);

--
-- Indexes for table `passenger`
--
ALTER TABLE `passenger`
  ADD PRIMARY KEY (`PASS_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `airplane`
--
ALTER TABLE `airplane`
  MODIFY `PL_ID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `flight`
--
ALTER TABLE `flight`
  MODIFY `FL_ID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `passenger`
--
ALTER TABLE `passenger`
  MODIFY `PASS_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
