-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 16, 2024 at 07:54 AM
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
-- Database: `hrmsdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `displinary_table`
--

CREATE TABLE `displinary_table` (
  `displinary_id` int(11) NOT NULL,
  `displinary_case` varchar(100) NOT NULL,
  `victim` varchar(100) NOT NULL,
  `punishment` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `warning_letter` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `displinary_table`
--

INSERT INTO `displinary_table` (`displinary_id`, `displinary_case`, `victim`, `punishment`, `description`, `warning_letter`) VALUES
(1, 'stealing', 'derick', '', 'knhkj bvlsjkmfnsrfa', 'uploads/Upload_warning_Letter/Advanced PHP Notes.pdf');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `displinary_table`
--
ALTER TABLE `displinary_table`
  ADD PRIMARY KEY (`displinary_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `displinary_table`
--
ALTER TABLE `displinary_table`
  MODIFY `displinary_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
