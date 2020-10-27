-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 27, 2020 at 02:14 PM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sidehustle`
--

-- --------------------------------------------------------

--
-- Table structure for table `intern`
--

CREATE TABLE `intern` (
  `intern_id` int(11) NOT NULL,
  `username` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `mentor`
--

CREATE TABLE `mentor` (
  `mentor_id` int(11) NOT NULL,
  `username` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `intern`
--
ALTER TABLE `intern`
  ADD PRIMARY KEY (`intern_id`);

--
-- Indexes for table `mentor`
--
ALTER TABLE `mentor`
  ADD PRIMARY KEY (`mentor_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `intern`
--
ALTER TABLE `intern`
  MODIFY `intern_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `mentor`
--
ALTER TABLE `mentor`
  MODIFY `mentor_id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
