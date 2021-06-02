-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jan 25, 2021 at 11:50 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.4.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbms_prison`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `name` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`name`, `password`) VALUES
('admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `cell_location`
--

CREATE TABLE `cell_location` (
  `cell_no` char(4) NOT NULL,
  `block_no` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `cleaner`
--

CREATE TABLE `cleaner` (
  `cno` varchar(250) NOT NULL,
  `cname` varchar(20) NOT NULL,
  `DOB` date NOT NULL,
  `sex` varchar(6) NOT NULL,
  `starting_date` date NOT NULL,
  `caddress` varchar(20) NOT NULL,
  `assigned_cellno` char(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cleaner`
--

INSERT INTO `cleaner` (`cno`, `cname`, `DOB`, `sex`, `starting_date`, `caddress`, `assigned_cellno`) VALUES
('clnr001', 'Jane Doe', '2000-03-01', 'Female', '2021-01-04', 'Thika', '100');

-- --------------------------------------------------------

--
-- Table structure for table `cook`
--

CREATE TABLE `cook` (
  `no` varchar(250) NOT NULL,
  `name` varchar(250) NOT NULL,
  `DOB` date NOT NULL,
  `sex` varchar(250) NOT NULL,
  `starting_date` date NOT NULL,
  `address` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cook`
--

INSERT INTO `cook` (`no`, `name`, `DOB`, `sex`, `starting_date`, `address`) VALUES
('cook001', 'Jane Doe', '1990-03-07', 'Female', '2021-01-06', 'Thika'),
('cook100', 'Jane Smith', '2000-01-01', 'Female', '2020-12-01', 'Thika');

-- --------------------------------------------------------

--
-- Table structure for table `guard`
--

CREATE TABLE `guard` (
  `gno` char(5) NOT NULL,
  `gname` varchar(20) NOT NULL,
  `DOB` date NOT NULL,
  `address` varchar(20) NOT NULL,
  `starting_date` date NOT NULL,
  `sex` varchar(8) NOT NULL,
  `assigned_block` char(4) NOT NULL,
  `shift` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `guard`
--

INSERT INTO `guard` (`gno`, `gname`, `DOB`, `address`, `starting_date`, `sex`, `assigned_block`, `shift`, `password`) VALUES
('1111', 'Askal', '1997-11-13', 'Goa', '2000-11-12', 'Female', '8888', 'Morning', 'icecream'),
('200', 'John Doe', '2000-01-01', 'Thika', '2021-01-12', 'Male', '100', 'Night', 'vanilla');

-- --------------------------------------------------------

--
-- Table structure for table `prisoner`
--

CREATE TABLE `prisoner` (
  `pno` varchar(250) NOT NULL,
  `Name` varchar(20) NOT NULL,
  `admit_date` date NOT NULL,
  `DOB` date NOT NULL,
  `address` varchar(20) NOT NULL,
  `crime` varchar(20) NOT NULL,
  `sex` varchar(6) NOT NULL,
  `ptype` varchar(20) NOT NULL,
  `duration` varchar(30) NOT NULL,
  `cellno` char(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `prisoner`
--

INSERT INTO `prisoner` (`pno`, `Name`, `admit_date`, `DOB`, `address`, `crime`, `sex`, `ptype`, `duration`, `cellno`) VALUES
('211', 'John Doe', '2020-12-31', '2000-01-12', 'Thika', 'Murder', 'Male', 'Standard security', '18 months', '123'),
('prsn001', 'Mary Smith', '2021-01-04', '2000-01-04', 'Thika', 'Robbery', 'Female', 'Maximum security', '60 Months', '123'),
('prsn002', 'Him His', '2021-01-06', '1995-02-11', 'Nairobi', 'Robbery', 'Male', 'Standard security', '18 months', '005'),
('prsn003', 'Somebody Someone', '2021-01-12', '1990-02-14', 'Thika', 'Robbery', 'Male', 'Maximum security', '18 months', '100');

-- --------------------------------------------------------

--
-- Table structure for table `visitor`
--

CREATE TABLE `visitor` (
  `id` int(50) NOT NULL,
  `name` varchar(250) NOT NULL,
  `sex` varchar(250) NOT NULL,
  `prisoner` varchar(250) NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp(),
  `address` varchar(250) NOT NULL,
  `relation` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `visitor`
--

INSERT INTO `visitor` (`id`, `name`, `sex`, `prisoner`, `date`, `address`, `relation`) VALUES
(1, 'Somebody Someone', 'Male', 'John Doe', '2021-01-04 18:56:21', 'Nairobi', 'Brother');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`name`);

--
-- Indexes for table `cleaner`
--
ALTER TABLE `cleaner`
  ADD PRIMARY KEY (`cno`);

--
-- Indexes for table `cook`
--
ALTER TABLE `cook`
  ADD PRIMARY KEY (`no`);

--
-- Indexes for table `guard`
--
ALTER TABLE `guard`
  ADD PRIMARY KEY (`gno`);

--
-- Indexes for table `prisoner`
--
ALTER TABLE `prisoner`
  ADD PRIMARY KEY (`pno`);

--
-- Indexes for table `visitor`
--
ALTER TABLE `visitor`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `visitor`
--
ALTER TABLE `visitor`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
