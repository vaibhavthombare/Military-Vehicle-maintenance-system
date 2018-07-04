-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 11, 2017 at 10:01 AM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `indian_army`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `regiment_name` varchar(50) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `middle_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(70) NOT NULL,
  `mobile_number` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`regiment_name`, `first_name`, `middle_name`, `last_name`, `email`, `password`, `mobile_number`) VALUES
('Rajputana Rifles', 'Shubham', 'Ganpatrao', 'Madankar', 'sgmadankar@gmail.com', '4b306bc83ee0e73f9235f37226e3199e', '9898998989'),
('Madras Regiment', 'Vaibhav', 'Shivaji', 'Thombare', 'vaibhavthombare8186@gmail.com', '4b306bc83ee0e73f9235f37226e3199e', '9898989898');

-- --------------------------------------------------------

--
-- Table structure for table `cardiary`
--

CREATE TABLE `cardiary` (
  `vno` varchar(50) NOT NULL,
  `nature` varchar(50) NOT NULL,
  `tdate` varchar(10) NOT NULL,
  `fromplace` varchar(50) NOT NULL,
  `todest` varchar(50) NOT NULL,
  `currkilo` int(11) NOT NULL,
  `kilorun` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `ctotal` int(15) NOT NULL,
  `des` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cardiary`
--

INSERT INTO `cardiary` (`vno`, `nature`, `tdate`, `fromplace`, `todest`, `currkilo`, `kilorun`, `total`, `ctotal`, `des`) VALUES
('MH7888', 'gerneral', '2017-11-08', 'sangli', 'miraj', 10, 200, 190, 190, 'transfer'),
('MH7888', 'Night', '2017-11-08', 'Sangli', 'Kolhapur', 200, 250, 50, 240, 'Fast forward Duty'),
('MH7888', 'Night', '2017-11-09', 'Sangli', 'Solapur', 240, 400, 160, 400, 'Just'),
('MH7888', 'Night', '2017-11-09', 'Kol', 'nagpur', 400, 21000, 20600, 21000, 'Just'),
('MH7888', 'Night', '2017-11-09', 'sangli', 'miraj', 21000, 21007, 7, 21007, 'just');

-- --------------------------------------------------------

--
-- Table structure for table `logbook`
--

CREATE TABLE `logbook` (
  `vno` varchar(10) NOT NULL,
  `eno` varchar(20) NOT NULL,
  `chasis_no` varchar(20) NOT NULL,
  `tyreno1` varchar(20) NOT NULL,
  `tyreno2` varchar(20) NOT NULL,
  `tyreno3` varchar(20) NOT NULL,
  `tyreno4` varchar(20) NOT NULL,
  `tyreno5` varchar(20) NOT NULL,
  `tyreno6` varchar(20) NOT NULL,
  `engineoil` date NOT NULL,
  `steringoil` date NOT NULL,
  `tyrerotation` date NOT NULL,
  `lifeofbattery` int(11) NOT NULL,
  `kilometer_tyre_rotation` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `logbook`
--

INSERT INTO `logbook` (`vno`, `eno`, `chasis_no`, `tyreno1`, `tyreno2`, `tyreno3`, `tyreno4`, `tyreno5`, `tyreno6`, `engineoil`, `steringoil`, `tyrerotation`, `lifeofbattery`, `kilometer_tyre_rotation`) VALUES
('MH7888', 'JN1212N', '  12', '  NJKKJ121', '  NJKKJ122', '  NJKKJ123', '  NJKKJ124', '  MNKNK31', '  MNKNK38', '2017-08-12', '2017-08-12', '2017-08-06', 8, 21007);

-- --------------------------------------------------------

--
-- Table structure for table `major_issue`
--

CREATE TABLE `major_issue` (
  `vno` varchar(10) NOT NULL,
  `date` date NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `major_issue`
--

INSERT INTO `major_issue` (`vno`, `date`, `description`) VALUES
('MH7888', '2017-11-01', 'Accident near Solapur\r\n'),
('MH7888', '2008-11-11', 'trye burst'),
('MH7888', '2008-11-11', 'accident near sangli'),
('MH7888', '2017-11-08', 'tyre puncture near sangli'),
('MH7888', '2017-11-11', 'tyre puncture near sangli.'),
('MH7888', '2017-11-11', 'tyre puncture, near sangli.'),
('MH7888', '2008-11-11', 'tyre burst');

-- --------------------------------------------------------

--
-- Table structure for table `motion`
--

CREATE TABLE `motion` (
  `vno` varchar(20) NOT NULL,
  `notif_title` varchar(20) NOT NULL,
  `notification_details` varchar(50) NOT NULL,
  `status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `nearbyunits`
--

CREATE TABLE `nearbyunits` (
  `regiment_name` varchar(255) NOT NULL,
  `longi` float NOT NULL,
  `lati` float NOT NULL,
  `loc` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `nearbyunits`
--

INSERT INTO `nearbyunits` (`regiment_name`, `longi`, `lati`, `loc`) VALUES
('Dogra Regiment\r\n', 17.0295, 74.6078, 'tasgaon'),
('madras Regiment ', 16.705, 74.2433, 'Kolhapur'),
('Maratha Infantry', 16.8165, 74.6425, 'Miraj\r\n'),
('Rajupatana Rifles', 17.6599, 75.9064, 'Solapur'),
('Sikkim Scouts', 16.709, 74.4561, 'Ichalkaranji');

-- --------------------------------------------------------

--
-- Table structure for table `notification`
--

CREATE TABLE `notification` (
  `vno` varchar(50) NOT NULL,
  `notif_title` varchar(50) NOT NULL,
  `notification_details` varchar(255) NOT NULL,
  `status` int(1) NOT NULL,
  `remaining_days` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `notification`
--

INSERT INTO `notification` (`vno`, `notif_title`, `notification_details`, `status`, `remaining_days`) VALUES
('MH7888', 'Engine Oil', 'For vehicle MH7888 Number of days remaining to change Engine Oil is', 1, 3),
('MH7888', 'Stering Oil', 'For vehicle MH7888 Number of days remaining to change Stering Oil is', 1, 3),
('MH7888', 'Tyre Rotation', 'For vehicle MH7888 Tyre maintainance has exceeded the maintenance date. Please perform the Tyre maintenance', 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `notification_status`
--

CREATE TABLE `notification_status` (
  `vno` varchar(50) NOT NULL,
  `date` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `notification_status`
--

INSERT INTO `notification_status` (`vno`, `date`) VALUES
('MH7888', '2017-11-09');

-- --------------------------------------------------------

--
-- Table structure for table `part_change`
--

CREATE TABLE `part_change` (
  `vno` varchar(10) NOT NULL,
  `date` date NOT NULL,
  `des` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `part_change`
--

INSERT INTO `part_change` (`vno`, `date`, `des`) VALUES
('MH7888', '2017-11-08', 'Rear Wheel');

-- --------------------------------------------------------

--
-- Table structure for table `temperature`
--

CREATE TABLE `temperature` (
  `vno` varchar(20) NOT NULL,
  `notif_title` varchar(20) NOT NULL,
  `notification_details` varchar(50) NOT NULL,
  `status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `vehicle`
--

CREATE TABLE `vehicle` (
  `regiment_name` varchar(50) NOT NULL,
  `vno` varchar(50) NOT NULL,
  `tacno` varchar(15) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `middle_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `mobile_number` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `vehicle`
--

INSERT INTO `vehicle` (`regiment_name`, `vno`, `tacno`, `first_name`, `middle_name`, `last_name`, `email`, `password`, `mobile_number`) VALUES
('Rajputana Rifles', 'MH7888', '12', 'Satish', 'Manjunath', 'Kamble', 'pravinl3893@gmail.com', '202cb962ac59075b964b07152d234b70', '9856565625');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `logbook`
--
ALTER TABLE `logbook`
  ADD PRIMARY KEY (`vno`),
  ADD UNIQUE KEY `vno` (`vno`);

--
-- Indexes for table `motion`
--
ALTER TABLE `motion`
  ADD PRIMARY KEY (`vno`);

--
-- Indexes for table `nearbyunits`
--
ALTER TABLE `nearbyunits`
  ADD PRIMARY KEY (`regiment_name`),
  ADD UNIQUE KEY `regiment_name` (`regiment_name`);

--
-- Indexes for table `notification`
--
ALTER TABLE `notification`
  ADD PRIMARY KEY (`notification_details`);

--
-- Indexes for table `notification_status`
--
ALTER TABLE `notification_status`
  ADD PRIMARY KEY (`vno`),
  ADD UNIQUE KEY `vno` (`vno`);

--
-- Indexes for table `temperature`
--
ALTER TABLE `temperature`
  ADD PRIMARY KEY (`vno`);

--
-- Indexes for table `vehicle`
--
ALTER TABLE `vehicle`
  ADD PRIMARY KEY (`vno`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `vno` (`vno`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
