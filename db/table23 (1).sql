-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Värd: 127.0.0.1
-- Tid vid skapande: 07 jan 2023 kl 22:50
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
(15, '123456', 'CSI-6444', 'shalom', 'dino zoff', 'ADD ARN ADD', '2023-01-11', 7678689.00, 68968.00, 8000.00, 60968.00, 'Dawe Emede', 'United Bank'),
(16, '07164573800', 'CSI-6444', 'munch', 'dino zoff', 'add-ger-add', '2023-01-26', 10000.00, 54654.00, 8000.00, 46654.00, 'Ethiopian Airlines', 'Nib Bank'),
(17, '154856', 'CSI-15489', 'ethio ceramics', 'abebe balcha', 'add-frn-add', '2023-01-26', 215485.00, 145256.00, 56245.00, 89011.00, '', 'Commercial Bank'),
(18, '88888888', 'CSI-888888', 'addis media', 'sara mohammed', 'add-oslo-add', '2021-02-02', 58457878.00, 1452185.00, 54135.00, 1398050.00, '', 'Dashen Bank'),
(19, '666666455', 'CSI-54542', 'TATO INT SOLUTION AGENCY', 'dino girma', 'add-frn-add', '2023-01-19', 10000.00, 9000.00, 8000.00, 1000.00, 'Four Winds ', 'United Bank');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
