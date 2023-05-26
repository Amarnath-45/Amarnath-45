-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 06, 2022 at 08:00 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `esas`
--

-- --------------------------------------------------------

--
-- Table structure for table `adminlogin`
--

CREATE TABLE `adminlogin` (
  `admin_name` varchar(50) NOT NULL,
  `admin_password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `adminlogin`
--

INSERT INTO `adminlogin` (`admin_name`, `admin_password`) VALUES
('amarnath', 'amarm1376');

-- --------------------------------------------------------

--
-- Table structure for table `room`
--

CREATE TABLE `room` (
  `slno` int(4) NOT NULL,
  `roomno` int(4) NOT NULL,
  `capacity` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `room`
--

INSERT INTO `room` (`slno`, `roomno`, `capacity`) VALUES
(1, 0, 50),
(2, 0, 12),
(23, 50, 45),
(58, 0, 0),
(59, 11, 45),
(60, 11, 45),
(61, 11, 45),
(62, 11, 45),
(63, 11, 45),
(64, 11, 45),
(65, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `slno` int(11) NOT NULL,
  `name` text NOT NULL,
  `password` varchar(30) NOT NULL,
  `cnfpw` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `rollno` varchar(4) NOT NULL,
  `phoneno` varchar(15) NOT NULL,
  `gender` text NOT NULL,
  `dob` varchar(15) NOT NULL,
  `stream` text NOT NULL,
  `year` varchar(10) NOT NULL,
  `examtype` varchar(10) NOT NULL,
  `address` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`slno`, `name`, `password`, `cnfpw`, `email`, `rollno`, `phoneno`, `gender`, `dob`, `stream`, `year`, `examtype`, `address`) VALUES
(1, 'amar', 'amar', 'amar', 'amar@mras.com', '13', '9090616402', 'male', '02/12/1998', 'BCA', '3rd year', 'annual', 'Berhampur'),
(2, 'amar', '1212', '1212', 'amar@mras.com', '13', '9090616402', 'male', '02/12/1998', '3rd year', '1st', 'annual', 'berhampur'),
(3, 'Rishi', 'rishi', 'rishi', 'rishi@rishi.com', '45', '4546454645', 'female', '30/02/2000', 'bca', '1st', 'annual', 'berhampur'),
(4, 'M', 'M', 'M', 'mla@mla.com', '76', '7855866563', 'female', '03/05/2001', 'BCA', '1st year', 'Annual', 'berhampur'),
(5, '', '', '', '', '', '', '', '', '', '', 'Annual', ''),
(6, 'amar', 'ererwe', 'erwtet', 'amar@mras.com', '13', '9090616402', 'male', '02/12/1998', 'BCA', '', 'Internal', 'berhampur'),
(7, 'amar', 'yhuyh', 'jgh', 'amar@mras.com', '13', '9090616402', 'male', '02/12/1998', 'BCA', '1st', 'Annual', 'berhampur'),
(9, 'Rishi', '5566', '6655', 'rishi@rishi.com', '45', '4546454645', 'female', '30/02/2001', 'BCA', '1st year', 'Internal', 'berhampur'),
(10, '', '', '', '', '', '', 'female', '2022-01-05', '', '', 'Annual', ''),
(11, '', '', '', '', '', '', '', '', 'bba', '', '', ''),
(12, 'amar', '4354', '643536', 'amar@mras.com', '13', '9090616402', 'male', '2021-12-02', 'bca', '1st year', 'Internal', 'berhampur');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `room`
--
ALTER TABLE `room`
  ADD PRIMARY KEY (`slno`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`slno`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `room`
--
ALTER TABLE `room`
  MODIFY `slno` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `slno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
