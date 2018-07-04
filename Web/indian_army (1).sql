-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 31, 2017 at 07:39 PM
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
('Rajputana Rifles', 'Shubhjabjdbjabdab', 'ad', 'Maflkhajfhjskfnkjsfjkshf', 'a@gmail.com', '3691308f2a4c2f6983f2880d32e29c84', '9589564646'),
('Rajputana Rifles', 'Ganeshchana', 'chna', 'Madankarmanakakak', 'g@gmail.com', '1f0e3dad99908345f7439f8ffabdffc4', '9856545131'),
('Dogra Regiment', 'Nikhil', 'Shridhar', 'Telhandeee', 'nikhiltelhande@gmail.com', '3691308f2a4c2f6983f2880d32e29c84', '9465456456'),
('Madras Regiment', 'Nikhil', 'Domaji', 'Thool', 'nt@gmail.com', '3691308f2a4c2f6983f2880d32e29c84', '8381081869'),
('Rajputana Rifles', 'Shubham', 'G', 'M', 'p@gmail.com', 'c20ad4d76fe97759aa27a0c99bff6710', '7478655555'),
('Rajputana Rifles', 'ShubhamG', 'Ganpatrao', 'Madankar', 'sgmadankar@gmail.com', '9f6e6800cfae7749eb6c486619254b9c', '8381081869');

-- --------------------------------------------------------

--
-- Table structure for table `cardiary`
--

CREATE TABLE `cardiary` (
  `vno` varchar(50) NOT NULL,
  `nature` varchar(50) NOT NULL,
  `tdate` date NOT NULL,
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
('MH4772', 'general', '2017-10-17', 'solapur', 'wardha', 45, 2121, 21, 12, 'just tp\r\n'),
('MH4772', 'general', '2017-10-02', 'solapur', 'andjahndj', 531, 32123, 1, 231, 'adasdad\r\n'),
('MH122', 'sb', '2017-10-03', 'jbdshs', 'sjfjksd', 52, 212, 21, 21, '2=sfnmvsgfhfbsdf'),
('', 'jhagdha', '2017-10-04', 'adkjha', 'sfhj', 55, 15, -40, 191, '2111'),
('', 'ja', '2017-10-04', 'fss', 'sdsdf', 151, 3123, 2972, 3203, '15sf5sdfsf'),
('', 'fsbj', '2017-10-23', 'fas', 'fsfa', 54, 515, 461, 3664, 'asfasd\r\n'),
('MH4772', 'najdn', '2017-10-18', 'adqa', 'dakdm', 15, 51, 36, 3700, '12das'),
('MH4774', 'General', '2017-10-11', 'Hgt', 'shegao', 12, 15, 3, 3703, 'hello'),
('MH4774', 'mbshf', '2017-10-04', 'solapur', 'nagpur', 54, 4, -50, 3653, '');

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
  `lifeofbattery` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `logbook`
--

INSERT INTO `logbook` (`vno`, `eno`, `chasis_no`, `tyreno1`, `tyreno2`, `tyreno3`, `tyreno4`, `tyreno5`, `tyreno6`, `engineoil`, `steringoil`, `tyrerotation`, `lifeofbattery`) VALUES
('MH4772', '12', '2121', '21', '221', '212', '1', '12', '12', '2017-10-04', '2017-10-04', '2017-10-25', 6),
('MH4774', '', '', '', '', '', '', '', '', '0000-00-00', '0000-00-00', '0000-00-00', 0);

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
('22222221', '2017-10-25', 'Hello'),
('21', '2017-10-25', 'Hello'),
('122', '2017-10-03', 'Changed'),
('1222', '2017-10-03', 'Changed'),
('1222232', '2017-10-03', 'Changed'),
('151', '2017-10-02', 'abc'),
('152', '2017-10-02', 'abc');

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
('1222232', '2017-10-10', 'Chjanged it');

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
('Rajputana Rifles', 'MH4772', '211', 'Saket', 'Shivaji', 'Kulkarni', 'sgmadankar@gmail.com', '8b5ad7a718c411e9802ef4449086752f', '7777777777'),
('Dogra Regiment', 'MH4774', '12', 'Shubham', 'G', 'Madankar', 'shubhammadankar1000@gmail.com', 'f23bb1de6697e449a79ce4abefd6f41a', '8381081869');

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
-- Indexes for table `vehicle`
--
ALTER TABLE `vehicle`
  ADD PRIMARY KEY (`vno`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `vno` (`vno`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
