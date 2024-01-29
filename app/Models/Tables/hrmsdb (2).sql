-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 19, 2023 at 11:42 AM
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

--
-- Dumping data for table `admin_table`
--

INSERT INTO `admin_table` (`admin_id`, `first_name`, `last_name`, `email`, `password`, `contact_number`, `profile_pic`, `admin_level`) VALUES
(1, 'Abas', 'Pandsa', 'panda@gmail.com', '', '111111111', '', '1'),
(2, 'Norman', 'Hacker', 'normanmukama@gmail.com', '', '3333333333', '', '1'),
(3, 'kainja', 'Bills', 'bills@gmail.com', '', '22222222', '', '');

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

--
-- Dumping data for table `attendance_table`
--

INSERT INTO `attendance_table` (`attendance_id`, `employee_id`, `date`, `clock_in_time`, `clock_out_time`) VALUES
(1, 1, '2023-10-17', '00:00:00', '12:57:28'),
(2, 2, '2023-10-23', '00:00:00', '13:57:28');

-- --------------------------------------------------------

--
-- Table structure for table `branch_manager_table`
--

CREATE TABLE `branch_manager_table` (
  `branch_manager_id` int(11) NOT NULL,
  `branch` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `branch_manager_table`
--

INSERT INTO `branch_manager_table` (`branch_manager_id`, `branch`) VALUES
(1, 'Kawuku'),
(3, 'Mbarara'),
(4, 'Wakiso'),
(5, 'Entebbe');

-- --------------------------------------------------------

--
-- Table structure for table `contract_table`
--

CREATE TABLE `contract_table` (
  `contract_id` int(11) NOT NULL,
  `contract_type` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contract_table`
--

INSERT INTO `contract_table` (`contract_id`, `contract_type`) VALUES
(1, 'Adhesion'),
(2, 'Sales');

-- --------------------------------------------------------

--
-- Table structure for table `deduction_table`
--

CREATE TABLE `deduction_table` (
  `deduction_id` int(11) NOT NULL,
  `deduction_option` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `deduction_table`
--

INSERT INTO `deduction_table` (`deduction_id`, `deduction_option`) VALUES
(1, 'NSSF'),
(2, 'PAYE');

-- --------------------------------------------------------

--
-- Table structure for table `department_table`
--

CREATE TABLE `department_table` (
  `department_id` int(11) NOT NULL,
  `department_name` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `department_table`
--

INSERT INTO `department_table` (`department_id`, `department_name`) VALUES
(1, 'ICT'),
(2, 'Security');

-- --------------------------------------------------------

--
-- Table structure for table `designation_table`
--

CREATE TABLE `designation_table` (
  `designation_id` int(11) NOT NULL,
  `designation` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `designation_table`
--

INSERT INTO `designation_table` (`designation_id`, `designation`) VALUES
(1, 'Teacher'),
(2, 'supervisor');

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

--
-- Dumping data for table `employee_table`
--

INSERT INTO `employee_table` (`employee_id`, `first_name`, `last_name`, `date_of_birth`, `gender`, `contact_number`, `email`, `password`, `address`, `department`, `position`, `hire_date`, `termination_date`) VALUES
(1, 'George', 'Adrian', '2023-10-01', 'M', '8888888888', 'george@gmail.com', 'george123', 'Masaka', 2, 2, '2023-10-02', '2023-10-08'),
(2, 'Lisa', 'Don Lisa', '2023-10-09', 'F', '98888888888', 'lisa@gmail.com', 'lisa4445', 'Kololo', 1, 1, '2023-10-16', '2023-10-31');

-- --------------------------------------------------------

--
-- Table structure for table `job_type_table`
--

CREATE TABLE `job_type_table` (
  `job_type_id` int(11) NOT NULL,
  `job_type` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `job_type_table`
--

INSERT INTO `job_type_table` (`job_type_id`, `job_type`) VALUES
(1, 'cleanig'),
(2, 'Teaching');

-- --------------------------------------------------------

--
-- Table structure for table `leave_type_table`
--

CREATE TABLE `leave_type_table` (
  `leave_id` int(11) NOT NULL,
  `leave_type` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `leave_type_table`
--

INSERT INTO `leave_type_table` (`leave_id`, `leave_type`) VALUES
(1, 'Maternal'),
(2, 'sick');

-- --------------------------------------------------------

--
-- Table structure for table `loan_table`
--

CREATE TABLE `loan_table` (
  `loan_id` int(11) NOT NULL,
  `loan_type` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `loan_table`
--

INSERT INTO `loan_table` (`loan_id`, `loan_type`) VALUES
(1, 'Personal '),
(2, 'Term');

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
-- Table structure for table `payement_table`
--

CREATE TABLE `payement_table` (
  `payement_id` int(11) NOT NULL,
  `payement_type` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `payement_table`
--

INSERT INTO `payement_table` (`payement_id`, `payement_type`) VALUES
(1, 'Credit'),
(2, 'Cash'),
(3, 'Mobile Money');

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

--
-- Dumping data for table `payroll_table`
--

INSERT INTO `payroll_table` (`payroll_id`, `employee_id`, `pay_period_start`, `pay_period_end`, `pay_date`, `bank_name`, `account_number`, `net_pay`) VALUES
(1, 2, '2023-10-16', '2023-10-18', '2023-10-18', 'Equity', '998585858585', 20000000),
(2, 1, '2023-10-21', '2023-10-23', '2023-10-23', 'Centenary', '888838388383', 1400000);

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

--
-- Dumping data for table `payslip_table`
--

INSERT INTO `payslip_table` (`payslip_id`, `payroll_id`, `gross_pay`, `overtime_pay`, `deductions`, `net_pay`) VALUES
(1, 2, 20000, 50000, 10000, 40000),
(2, 1, 90000, 40000, 30000, 110000);

-- --------------------------------------------------------

--
-- Table structure for table `position_table`
--

CREATE TABLE `position_table` (
  `position_id` int(11) NOT NULL,
  `position_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `position_table`
--

INSERT INTO `position_table` (`position_id`, `position_name`) VALUES
(1, 'class teacher'),
(2, 'main gate supervisor');

-- --------------------------------------------------------

--
-- Table structure for table `shift_table`
--

CREATE TABLE `shift_table` (
  `shift_id` int(11) NOT NULL,
  `shift` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `shift_table`
--

INSERT INTO `shift_table` (`shift_id`, `shift`) VALUES
(1, 'Night'),
(2, 'Day');

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
-- Indexes for table `branch_manager_table`
--
ALTER TABLE `branch_manager_table`
  ADD PRIMARY KEY (`branch_manager_id`);

--
-- Indexes for table `contract_table`
--
ALTER TABLE `contract_table`
  ADD PRIMARY KEY (`contract_id`);

--
-- Indexes for table `deduction_table`
--
ALTER TABLE `deduction_table`
  ADD PRIMARY KEY (`deduction_id`);

--
-- Indexes for table `department_table`
--
ALTER TABLE `department_table`
  ADD PRIMARY KEY (`department_id`);

--
-- Indexes for table `designation_table`
--
ALTER TABLE `designation_table`
  ADD PRIMARY KEY (`designation_id`);

--
-- Indexes for table `employee_table`
--
ALTER TABLE `employee_table`
  ADD PRIMARY KEY (`employee_id`),
  ADD KEY `department_fk` (`department`),
  ADD KEY `position_fk` (`position`);

--
-- Indexes for table `job_type_table`
--
ALTER TABLE `job_type_table`
  ADD PRIMARY KEY (`job_type_id`);

--
-- Indexes for table `leave_type_table`
--
ALTER TABLE `leave_type_table`
  ADD PRIMARY KEY (`leave_id`);

--
-- Indexes for table `loan_table`
--
ALTER TABLE `loan_table`
  ADD PRIMARY KEY (`loan_id`);

--
-- Indexes for table `notification_table`
--
ALTER TABLE `notification_table`
  ADD PRIMARY KEY (`notification_id`),
  ADD KEY `sender_fk` (`sender_id`),
  ADD KEY `recipient_fk` (`employee_id`);

--
-- Indexes for table `payement_table`
--
ALTER TABLE `payement_table`
  ADD PRIMARY KEY (`payement_id`);

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
-- Indexes for table `shift_table`
--
ALTER TABLE `shift_table`
  ADD PRIMARY KEY (`shift_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_table`
--
ALTER TABLE `admin_table`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `allowance_table`
--
ALTER TABLE `allowance_table`
  MODIFY `allowance_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `attendance_table`
--
ALTER TABLE `attendance_table`
  MODIFY `attendance_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `branch_manager_table`
--
ALTER TABLE `branch_manager_table`
  MODIFY `branch_manager_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `contract_table`
--
ALTER TABLE `contract_table`
  MODIFY `contract_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `deduction_table`
--
ALTER TABLE `deduction_table`
  MODIFY `deduction_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `department_table`
--
ALTER TABLE `department_table`
  MODIFY `department_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `designation_table`
--
ALTER TABLE `designation_table`
  MODIFY `designation_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `employee_table`
--
ALTER TABLE `employee_table`
  MODIFY `employee_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `job_type_table`
--
ALTER TABLE `job_type_table`
  MODIFY `job_type_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `leave_type_table`
--
ALTER TABLE `leave_type_table`
  MODIFY `leave_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `loan_table`
--
ALTER TABLE `loan_table`
  MODIFY `loan_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `notification_table`
--
ALTER TABLE `notification_table`
  MODIFY `notification_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `payement_table`
--
ALTER TABLE `payement_table`
  MODIFY `payement_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `payroll_table`
--
ALTER TABLE `payroll_table`
  MODIFY `payroll_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `payslip_table`
--
ALTER TABLE `payslip_table`
  MODIFY `payslip_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `position_table`
--
ALTER TABLE `position_table`
  MODIFY `position_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `shift_table`
--
ALTER TABLE `shift_table`
  MODIFY `shift_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

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
