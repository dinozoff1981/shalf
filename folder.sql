-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 08, 2022 at 08:46 AM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `codehunter_demo`
--

-- --------------------------------------------------------

--
-- Table structure for table `table23`
--

CREATE TABLE `table23` (
  `id` int(11) NOT NULL,
  `ticketnumber` varchar(100) NOT NULL,
   `invno` varchar(100) NOT NULL,
    `company` varchar(100) NOT NULL,
     `fullname` varchar(100) NOT NULL,
   `destination` varchar(100) NOT NULL,
  `issuedate` date NOT NULL,
   `fare` double(12,2) NOT NULL,
  `ar` double(12,2) NOT NULL,
  `ap` double(12,2) NOT NULL,
   `vendor` varchar(100) NOT NULL,
    `bank` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `table23`
--


--
-- Indexes for dumped tables
--

--
-- Indexes for table `table23`
--
ALTER TABLE `table23`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `table23`
--
ALTER TABLE `table23`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
