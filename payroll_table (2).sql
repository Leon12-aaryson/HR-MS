-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 16, 2024 at 07:53 AM
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
-- Table structure for table `payroll_table`
--

CREATE TABLE `payroll_table` (
  `payroll_id` int(11) NOT NULL,
  `employee_id` int(11) DEFAULT NULL,
  `desigination_id` int(11) DEFAULT NULL,
  `allowances_id` varchar(255) DEFAULT NULL,
  `deductions_id` varchar(255) DEFAULT NULL,
  `pay_date` date DEFAULT current_timestamp(),
  `net_pay` double DEFAULT NULL,
  `total_deduction` double DEFAULT NULL,
  `total_allowance` double DEFAULT NULL,
  `payment_type` varchar(50) DEFAULT NULL,
  `status` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `payroll_table`
--

INSERT INTO `payroll_table` (`payroll_id`, `employee_id`, `desigination_id`, `allowances_id`, `deductions_id`, `pay_date`, `net_pay`, `total_deduction`, `total_allowance`, `payment_type`, `status`) VALUES
(11, 63, 2, '2,4', NULL, '2024-02-14', 6999100, 5100, 4200, '1', 'paid'),
(12, 63, 2, '2,4', '2,4', '2024-02-14', 10000, 600, 600, '1', 'paid'),
(13, 63, 2, '2,4', '2,4', '2024-02-15', 9900, 1300, 1200, '1', 'paid');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `payroll_table`
--
ALTER TABLE `payroll_table`
  ADD PRIMARY KEY (`payroll_id`),
  ADD KEY `employee_fk` (`employee_id`),
  ADD KEY `payroll_id` (`payroll_id`,`employee_id`,`desigination_id`,`pay_date`,`net_pay`),
  ADD KEY `payroll_id_2` (`payroll_id`),
  ADD KEY `total_deduction` (`total_deduction`,`total_allowance`,`payment_type`,`status`),
  ADD KEY `allowances_id` (`allowances_id`,`deductions_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `payroll_table`
--
ALTER TABLE `payroll_table`
  MODIFY `payroll_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `payroll_table`
--
ALTER TABLE `payroll_table`
  ADD CONSTRAINT `employee_fk` FOREIGN KEY (`employee_id`) REFERENCES `employee_table` (`employee_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
