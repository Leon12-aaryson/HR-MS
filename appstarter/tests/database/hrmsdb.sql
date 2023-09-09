-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 09, 2023 at 06:48 AM
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
-- Table structure for table `admin_table`
--

CREATE TABLE `admin_table` (
  `admin_id` int(11) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `contact_number` varchar(20) NOT NULL,
  `profile_pic` varchar(255) NOT NULL,
  `admin_level` enum('0','1','','') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `allowance_table`
--

CREATE TABLE `allowance_table` (
  `allowance_id` int(11) NOT NULL,
  `employee_id` int(11) DEFAULT NULL,
  `allowance_name` varchar(50) NOT NULL,
  `allowance_amount` double NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `attendance_table`
--

CREATE TABLE `attendance_table` (
  `attendance_id` int(11) NOT NULL,
  `employee_id` int(11) DEFAULT NULL,
  `date` date NOT NULL,
  `clock_in_time` time NOT NULL DEFAULT current_timestamp(),
  `clock_out_time` time DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `department_table`
--

CREATE TABLE `department_table` (
  `department_id` int(11) NOT NULL,
  `department_name` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `employee_table`
--

CREATE TABLE `employee_table` (
  `employee_id` int(11) NOT NULL,
  `first_name` varchar(25) NOT NULL,
  `last_name` varchar(25) NOT NULL,
  `date_of_birth` date NOT NULL,
  `gender` enum('M','F','','') NOT NULL,
  `contact_number` varchar(20) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) DEFAULT NULL,
  `address` varchar(50) NOT NULL,
  `department` int(11) DEFAULT NULL,
  `position` int(11) DEFAULT NULL,
  `hire_date` date NOT NULL,
  `termination_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `notification_table`
--

CREATE TABLE `notification_table` (
  `notification_id` int(11) NOT NULL,
  `employee_id` int(11) DEFAULT NULL,
  `sender_id` int(11) DEFAULT NULL,
  `notification_title` varchar(50) NOT NULL,
  `notification_body` varchar(100) NOT NULL,
  `date_sent` date NOT NULL,
  `is_read` enum('true','false','','') NOT NULL DEFAULT 'false'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `payroll_table`
--

CREATE TABLE `payroll_table` (
  `payroll_id` int(11) NOT NULL,
  `employee_id` int(11) DEFAULT NULL,
  `pay_period_start` date DEFAULT NULL,
  `pay_period_end` date DEFAULT NULL,
  `pay_date` date DEFAULT NULL,
  `bank_name` varchar(50) NOT NULL,
  `account_number` varchar(50) NOT NULL,
  `net_pay` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `payslip_table`
--

CREATE TABLE `payslip_table` (
  `payslip_id` int(11) NOT NULL,
  `payroll_id` int(11) DEFAULT NULL,
  `gross_pay` double NOT NULL,
  `overtime_pay` double NOT NULL,
  `deductions` double NOT NULL,
  `net_pay` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `position_table`
--

CREATE TABLE `position_table` (
  `position_id` int(11) NOT NULL,
  `position_name` varchar(28) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_table`
--
ALTER TABLE `admin_table`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `allowance_table`
--
ALTER TABLE `allowance_table`
  ADD PRIMARY KEY (`allowance_id`),
  ADD KEY `emp_allowance_fk` (`employee_id`);

--
-- Indexes for table `attendance_table`
--
ALTER TABLE `attendance_table`
  ADD PRIMARY KEY (`attendance_id`),
  ADD KEY `employee_attendance_fk` (`employee_id`);

--
-- Indexes for table `department_table`
--
ALTER TABLE `department_table`
  ADD PRIMARY KEY (`department_id`);

--
-- Indexes for table `employee_table`
--
ALTER TABLE `employee_table`
  ADD PRIMARY KEY (`employee_id`),
  ADD KEY `department_fk` (`department`),
  ADD KEY `position_fk` (`position`);

--
-- Indexes for table `notification_table`
--
ALTER TABLE `notification_table`
  ADD PRIMARY KEY (`notification_id`),
  ADD KEY `sender_fk` (`sender_id`),
  ADD KEY `recipient_fk` (`employee_id`);

--
-- Indexes for table `payroll_table`
--
ALTER TABLE `payroll_table`
  ADD PRIMARY KEY (`payroll_id`),
  ADD KEY `employee_fk` (`employee_id`);

--
-- Indexes for table `payslip_table`
--
ALTER TABLE `payslip_table`
  ADD PRIMARY KEY (`payslip_id`),
  ADD KEY `payroll_fk` (`payroll_id`);

--
-- Indexes for table `position_table`
--
ALTER TABLE `position_table`
  ADD PRIMARY KEY (`position_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_table`
--
ALTER TABLE `admin_table`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `allowance_table`
--
ALTER TABLE `allowance_table`
  MODIFY `allowance_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `attendance_table`
--
ALTER TABLE `attendance_table`
  MODIFY `attendance_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `department_table`
--
ALTER TABLE `department_table`
  MODIFY `department_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `employee_table`
--
ALTER TABLE `employee_table`
  MODIFY `employee_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `notification_table`
--
ALTER TABLE `notification_table`
  MODIFY `notification_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `payroll_table`
--
ALTER TABLE `payroll_table`
  MODIFY `payroll_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `payslip_table`
--
ALTER TABLE `payslip_table`
  MODIFY `payslip_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `position_table`
--
ALTER TABLE `position_table`
  MODIFY `position_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `allowance_table`
--
ALTER TABLE `allowance_table`
  ADD CONSTRAINT `emp_allowance_fk` FOREIGN KEY (`employee_id`) REFERENCES `employee_table` (`employee_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `attendance_table`
--
ALTER TABLE `attendance_table`
  ADD CONSTRAINT `employee_attendance_fk` FOREIGN KEY (`employee_id`) REFERENCES `employee_table` (`employee_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `employee_table`
--
ALTER TABLE `employee_table`
  ADD CONSTRAINT `department_fk` FOREIGN KEY (`department`) REFERENCES `department_table` (`department_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `position_fk` FOREIGN KEY (`position`) REFERENCES `position_table` (`position_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `notification_table`
--
ALTER TABLE `notification_table`
  ADD CONSTRAINT `recipient_fk` FOREIGN KEY (`employee_id`) REFERENCES `employee_table` (`employee_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `sender_fk` FOREIGN KEY (`sender_id`) REFERENCES `admin_table` (`admin_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `payroll_table`
--
ALTER TABLE `payroll_table`
  ADD CONSTRAINT `employee_fk` FOREIGN KEY (`employee_id`) REFERENCES `employee_table` (`employee_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `payslip_table`
--
ALTER TABLE `payslip_table`
  ADD CONSTRAINT `payroll_fk` FOREIGN KEY (`payroll_id`) REFERENCES `payroll_table` (`payroll_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
