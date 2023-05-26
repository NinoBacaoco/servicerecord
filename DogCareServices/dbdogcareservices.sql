-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 26, 2023 at 07:05 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbdogcareservices`
--

-- --------------------------------------------------------

--
-- Table structure for table `tblservicerecord`
--

CREATE TABLE `tblservicerecord` (
  `id` int(11) NOT NULL,
  `servicename` varchar(120) DEFAULT NULL,
  `servicedescription` varchar(120) DEFAULT NULL,
  `price` varchar(120) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Dumping data for table `tblservicerecord`
--

INSERT INTO `tblservicerecord` (`id`, `servicename`, `servicedescription`, `price`) VALUES
(1, 'asd', 'asd', 'asd');

-- --------------------------------------------------------

--
-- Table structure for table `tblservicerecord`
--

CREATE TABLE `tblservicerecord` (
  `id` int(11) NOT NULL,
  `servicename` varchar(120) DEFAULT NULL,
  `servicedescription` varchar(120) DEFAULT NULL,
  `price` varchar(120) DEFAULT NULL,
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbluseraccount`
--

CREATE TABLE `tbluseraccount` (
  `userid` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` int(255) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbluseraccount`
--

INSERT INTO `tbluseraccount` (`userid`, `username`, `password`, `firstname`, `lastname`) VALUES
(1, 'q', 1, 'ryan', 'marfa'),
(2, 'qwe', 0, 'qwe', 'qwe');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tblservicerecord`
--
ALTER TABLE `tblservicerecord`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbluseraccount`
--
ALTER TABLE `tbluseraccount`
  ADD PRIMARY KEY (`userid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tblservicerecord`
--
ALTER TABLE `tblservicerecord`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `tbluseraccount`
--
ALTER TABLE `tbluseraccount`
  MODIFY `userid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
