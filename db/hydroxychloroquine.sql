-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Host: localhost:3307
-- Generation Time: Jun 29, 2020 at 03:05 PM
-- Server version: 5.7.24
-- PHP Version: 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hydroxychloroquine`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_hydroxychloroquine`
--

CREATE TABLE IF NOT EXISTS `tbl_hydroxychloroquine` (
  `code` int(11) NOT NULL,
  `mobile_no` varchar(20) NOT NULL,
  `unique_code` varchar(50) NOT NULL,
  `yes_no` varchar(10) DEFAULT NULL,
  `created_at` timestamp NOT NULL,
  `updated_at` timestamp NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_hydroxychloroquine`
--

INSERT INTO `tbl_hydroxychloroquine` (`code`, `mobile_no`, `unique_code`, `yes_no`, `created_at`, `updated_at`) VALUES
(1, '9999999999', '12345', 'Yes', '2020-06-29 14:44:19', '2020-06-29 09:33:53');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_hydroxychloroquine`
--
ALTER TABLE `tbl_hydroxychloroquine`
  ADD PRIMARY KEY (`code`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_hydroxychloroquine`
--
ALTER TABLE `tbl_hydroxychloroquine`
  MODIFY `code` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
