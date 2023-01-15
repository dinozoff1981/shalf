-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Värd: 127.0.0.1
-- Tid vid skapande: 07 jan 2023 kl 21:40
-- Serverversion: 10.4.25-MariaDB
-- PHP-version: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Databas: `folder`
--

-- --------------------------------------------------------

--
-- Tabellstruktur `table23`
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
  `shalomcom` double(12,2) NOT NULL,
  `vendor` varchar(100) NOT NULL,
  `bank` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumpning av Data i tabell `table23`
--

INSERT INTO `table23` (`id`, `ticketnumber`, `invno`, `company`, `fullname`, `destination`, `issuedate`, `fare`, `ar`, `ap`, `shalomcom`, `vendor`, `bank`) VALUES
(13, '5489798748484', 'CSI-6444', 'ethio', 'vjhfgjv', 'ADD ARN ADD', '2023-01-18', 465438.00, 838938.00, 564564.00, 0.00, 'Ethiopian Airlines', 'United Bank');

--
-- Index för dumpade tabeller
--

--
-- Index för tabell `table23`
--
ALTER TABLE `table23`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT för dumpade tabeller
--

--
-- AUTO_INCREMENT för tabell `table23`
--
ALTER TABLE `table23`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
