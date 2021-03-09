-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 09, 2021 at 01:32 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sportstracker_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `tc_table`
--

CREATE TABLE `tc_table` (
  `tc_id` int(11) NOT NULL,
  `tc_name` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tc_table`
--

INSERT INTO `tc_table` (`tc_id`, `tc_name`) VALUES
(16, 'Stark Wolves'),
(18, 'Baratheon Stags'),
(19, 'Lannister Lions'),
(20, 'Tyrell Roses'),
(21, 'Martell Snakes'),
(22, 'Greyjoy Krakens'),
(23, 'Arryn Falcons'),
(24, 'Targaryen Dragons');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tc_table`
--
ALTER TABLE `tc_table`
  ADD PRIMARY KEY (`tc_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tc_table`
--
ALTER TABLE `tc_table`
  MODIFY `tc_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
