-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 15, 2024 at 07:34 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

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
  `date` date NOT NULL DEFAULT current_timestamp(),
  `clock_in_time` time NOT NULL DEFAULT current_timestamp(),
  `clock_out_time` time DEFAULT NULL,
  `status` varchar(200) NOT NULL DEFAULT 'OFFLINE'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `attendance_table`
--

INSERT INTO `attendance_table` (`attendance_id`, `employee_id`, `date`, `clock_in_time`, `clock_out_time`, `status`) VALUES
(3, 28, '0000-00-00', '21:43:00', NULL, '\"ONLINE\",\"OFFLINE\"'),
(4, 28, '0000-00-00', '21:46:00', NULL, '\"ONLINE\",\"OFFLINE\"'),
(5, 28, '0000-00-00', '23:15:00', NULL, '\"ONLINE\",\"OFFLINE\"'),
(6, NULL, '0000-00-00', '23:15:00', NULL, '\"ONLINE\",\"OFFLINE\"'),
(7, NULL, '2024-02-13', '23:21:00', NULL, '\"ONLINE\",\"OFFLINE\"'),
(8, NULL, '2024-02-13', '23:23:00', NULL, '\"ONLINE\",\"OFFLINE\"'),
(9, NULL, '2024-02-13', '23:23:00', NULL, '\"ONLINE\",\"OFFLINE\"'),
(10, 28, '2024-02-13', '23:35:00', NULL, '\"ONLINE\",\"OFFLINE\"'),
(11, 28, '2024-02-13', '23:41:00', NULL, '\"ONLINE\",\"OFFLINE\"'),
(12, 28, '2024-02-13', '23:44:00', NULL, '\"ONLINE\",\"OFFLINE\"'),
(13, 32, '2024-02-14', '09:24:00', NULL, '\"ONLINE\",\"OFFLINE\"'),
(14, 35, '2024-02-14', '09:41:00', NULL, 'OFFLINE'),
(15, 35, '2024-02-14', '10:44:00', NULL, 'OFFLINE'),
(16, 35, '2024-02-14', '10:54:00', NULL, 'OFFLINE'),
(17, 38, '2024-02-14', '11:17:00', NULL, 'OFFLINE'),
(18, 38, '2024-02-14', '12:35:00', NULL, 'OFFLINE'),
(19, 38, '2024-02-14', '12:49:00', NULL, 'OFFLINE'),
(20, 38, '2024-02-14', '12:54:00', NULL, 'OFFLINE'),
(21, 38, '2024-02-14', '12:57:00', NULL, 'OFFLINE'),
(22, NULL, '2024-02-14', '12:57:00', NULL, 'OFFLINE'),
(23, 38, '2024-02-14', '13:00:00', NULL, 'OFFLINE'),
(24, NULL, '2024-02-14', '13:00:00', NULL, 'OFFLINE'),
(25, 38, '2024-02-14', '13:06:00', NULL, 'OFFLINE'),
(26, 31, '2024-02-15', '09:00:00', NULL, 'OFFLINE'),
(27, 31, '2024-02-15', '09:04:00', NULL, 'OFFLINE'),
(28, 31, '2024-02-15', '09:09:00', NULL, 'OFFLINE'),
(29, 31, '2024-02-15', '09:22:00', NULL, 'OFFLINE');

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
(1, 'Ntungamo'),
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
  `department_name` varchar(30) NOT NULL,
  `salary` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `department_table`
--

INSERT INTO `department_table` (`department_id`, `department_name`, `salary`) VALUES
(1, 'ICT', ''),
(2, 'Security', '');

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
  `branch` varchar(30) NOT NULL,
  `designation` varchar(100) NOT NULL,
  `payement_type` varchar(100) NOT NULL,
  `contract_type` varchar(100) NOT NULL,
  `job_type` varchar(100) NOT NULL,
  `permission` int(11) DEFAULT NULL,
  `position` int(11) DEFAULT NULL,
  `hire_date` date NOT NULL DEFAULT current_timestamp(),
  `termination_date` date NOT NULL,
  `bank_name` varchar(100) NOT NULL,
  `account_holder_name` varchar(100) NOT NULL,
  `bank_branch` varchar(100) DEFAULT NULL,
  `account_number` varchar(100) NOT NULL,
  `bank_identifier_code` varchar(100) NOT NULL,
  `tax_payer_id` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `employee_table`
--

INSERT INTO `employee_table` (`employee_id`, `first_name`, `last_name`, `date_of_birth`, `gender`, `contact_number`, `email`, `password`, `address`, `department`, `branch`, `designation`, `payement_type`, `contract_type`, `job_type`, `permission`, `position`, `hire_date`, `termination_date`, `bank_name`, `account_holder_name`, `bank_branch`, `account_number`, `bank_identifier_code`, `tax_payer_id`) VALUES
(28, 'Ava', 'Drake', '2024-07-14', '', '862', 'becanecev@mailinator.com', 'Pa$$w0rd!', 'Hic dolores dolorem ', NULL, 'Ntungamo', 'Teacher', 'Cash', 'Adhesion', '0', NULL, 1, '0000-00-00', '0000-00-00', 'Piper Bradford', 'Chester Travis', 'Velit labore aperiam', '466', 'Dolor consequatur f', 'Dolorem facere esse '),
(31, 'Gabriel', 'Mendez', '2020-10-05', '', '157', 'povin@mailinator.com', 'Pa$$w0rd!', 'Nostrud quod et qui ', NULL, 'Entebbe', 'Teacher', 'Mobile Money', 'Sales', '0', NULL, 1, '0000-00-00', '0000-00-00', 'Eric Talley', 'Sybil Parker', 'Dolore maxime et nat', '354', 'Omnis aperiam sunt a', 'Harum fuga Sunt cup'),
(32, 'Amela', 'Schultz', '1991-02-22', '', '790', 'xoti@mailinator.com', 'Pa$$w0rd!', 'Excepteur ea laborum', NULL, 'Entebbe', 'supervisor', 'Mobile Money', 'Adhesion', '0', NULL, 1, '0000-00-00', '0000-00-00', 'Kessie Martinez', 'Brady Camacho', 'A architecto quasi v', '363', 'Id fugiat expedita ', 'Dolor vero architect'),
(35, 'Ina', 'Decker', '1991-03-25', '', '50', 'daqip@mailinator.com', 'Pa$$w0rd!', 'Tempore irure volup', NULL, 'Mbarara', 'supervisor', 'Credit', 'Adhesion', '0', NULL, 1, '0000-00-00', '0000-00-00', 'Carol Petersen', 'Melvin Head', 'Id nulla iusto esse', '226', 'Fuga Ut animi vita', 'Consectetur similiqu'),
(36, 'Todd', 'Bush', '1987-02-28', '', '826', 'mywopi@mailinator.com', 'Pa$$w0rd!', 'Consequatur non exp', NULL, 'Entebbe', 'Teacher', 'Mobile Money', 'Adhesion', '0', NULL, 1, '0000-00-00', '0000-00-00', 'Jescie Slater', 'Eve Gould', 'Assumenda et libero ', '911', 'Quas in aut excepteu', 'Provident molestias'),
(37, 'Idola', 'Hines', '1994-12-24', '', '145', 'syruz@mailinator.com', 'Pa$$w0rd!', 'Ratione ut culpa min', NULL, 'Mbarara', 'supervisor', 'Cash', 'Sales', '0', NULL, 1, '0000-00-00', '0000-00-00', 'Philip Rivers', 'Yoshi Poole', 'Voluptatem Velit su', '31', 'Voluptatem magna ad', 'Sit sed vitae nostr'),
(38, 'Dora', 'Crane', '2024-10-03', '', '282', 'vema@mailinator.com', 'Pa$$w0rd!', 'Odit explicabo Ut c', NULL, 'Wakiso', 'Teacher', 'Cash', 'Adhesion', '0', NULL, 2, '0000-00-00', '0000-00-00', 'Melissa Leonard', 'Vernon Mcgee', 'Dolores voluptatem ', '501', 'Odit excepteur minim', 'Facere est velit c'),
(39, 'Dora', 'Crane', '2024-10-03', '', '282', 'vema@mailinator.com', '', 'Odit explicabo Ut c', NULL, 'Wakiso', 'Teacher', 'Cash', 'Adhesion', '0', NULL, 2, '0000-00-00', '0000-00-00', 'Melissa Leonard', 'Vernon Mcgee', 'Dolores voluptatem ', '501', 'Odit excepteur minim', 'Facere est velit c'),
(47, 'Baxter', 'Rollins', '2017-07-28', '', '155', 'qynytem@mailinator.com', 'Pa$$w0rd!', 'Reprehenderit cupida', 1, 'Mbarara', 'supervisor', 'Cash', 'Adhesion', '0', NULL, NULL, '0000-00-00', '0000-00-00', 'Ezekiel Decker', 'Dawn Hale', 'Do aliquip numquam n', '237', 'Consectetur esse qua', 'Ullam nulla ipsum in'),
(48, 'Kenneth', 'Conley', '1985-09-19', '', '509', 'cahytubuw@mailinator.com', 'Pa$$w0rd!', 'At voluptate corpori', 2, 'Mbarara', 'supervisor', 'Credit', 'Adhesion', '0', NULL, NULL, '0000-00-00', '0000-00-00', 'Cody Berg', 'Brock Cabrera', 'Consequatur Adipisi', '801', 'Totam laborum vitae ', 'Necessitatibus quas '),
(49, 'Urielle', 'Foley', '1997-02-26', '', '813', 'noxi@mailinator.com', 'Pa$$w0rd!', 'Magni obcaecati iste', 2, 'Ntungamo', 'supervisor', 'Cash', 'Adhesion', '2', NULL, NULL, '0000-00-00', '0000-00-00', 'Acton Sparks', 'Karleigh Kaufman', 'Quidem sequi repelle', '831', 'Officia reprehenderi', 'Est repudiandae dolo'),
(50, 'Brent', 'Pierce', '1985-01-17', '', '968', 'gytonaqa@mailinator.com', 'Pa$$w0rd!', 'Ad voluptatibus irur', 2, 'Ntungamo', 'supervisor', 'Cash', 'Sales', '1', NULL, NULL, '2024-01-29', '0000-00-00', 'David Ward', 'Odette Potts', 'Eum officia voluptat', '867', 'Et sed nihil maiores', 'Adipisci ea ullam la'),
(51, 'Adrienne', 'Rutledge', '1982-05-20', '', '361', 'lole@mailinator.com', 'Pa$$w0rd!', 'Reprehenderit quo u', 1, 'Mbarara', 'supervisor', 'Mobile Money', 'Sales', '0', NULL, NULL, '2024-01-29', '0000-00-00', 'Madonna Lane', 'Audra Mitchell', 'Quos molestiae fugit', '620', 'Sunt atque dolorum ', 'Ut praesentium labor'),
(53, 'Cleo', 'Leach', '1975-07-05', '', '939', 'vovimaziz@mailinator.com', 'Pa$$w0rd!', 'Laboris quaerat amet', 2, 'Entebbe', 'Teacher', 'Mobile Money', 'Adhesion', '0', NULL, 1, '2024-01-29', '0000-00-00', 'Erasmus Hurst', 'Casey Ratliff', 'Ea et pariatur Id ', '71', 'Incididunt sed quasi', 'In perspiciatis quo'),
(54, 'Debra', 'Bates', '2008-10-09', '', '663', 'pecere@mailinator.com', 'Pa$$w0rd!', 'Aliquam id veniam ', 2, 'Mbarara', 'supervisor', 'Cash', 'Sales', '0', NULL, 2, '2024-01-29', '0000-00-00', 'Caesar Parsons', 'Hannah Kirby', 'Repudiandae enim ist', '603', 'Nihil maxime ut nemo', 'Esse architecto est'),
(55, 'Ryan', 'Caldwell', '2021-12-09', '', '950', 'samap@mailinator.com', 'Pa$$w0rd!', 'Nostrud temporibus u', 2, 'Wakiso', 'Teacher', 'Cash', 'Adhesion', 'Betting', NULL, 1, '2024-01-29', '0000-00-00', 'Xanthus Harvey', 'Alan Morris', 'Recusandae Nihil iu', '198', 'Ex expedita ex expli', 'Cum exercitation qui'),
(56, 'Nicole', 'Farrell', '1991-05-10', '', '463', 'tidubocy@mailinator.com', 'Pa$$w0rd!', 'Veritatis perferendi', 1, 'Wakiso', 'Teacher', 'Cash', 'Adhesion', 'Farming', NULL, 2, '2024-01-29', '0000-00-00', 'Plato Owen', 'Maggie Schwartz', 'Fugiat quaerat occae', '828', 'Nihil incididunt sit', 'Velit saepe ullam of'),
(57, 'Quentin', 'Lindsey', '1973-03-23', '', '280', 'conuruha@mailinator.com', 'Pa$$w0rd!', 'Adipisci sunt nihil ', 2, 'Entebbe', 'Teacher', 'Cash', 'Sales', 'Teaching', NULL, 2, '2024-01-29', '0000-00-00', 'Ainsley Castro', 'Kim Goodwin', 'Error nemo do quis n', '274', 'Temporibus ea ex lab', 'Quod vitae repudiand'),
(58, 'Amal', 'Burton', '2008-06-20', '', '299', 'comylyf@mailinator.com', 'Pa$$w0rd!', 'Nulla nemo consequat', 2, 'Entebbe', 'supervisor', 'Cash', 'Adhesion', 'betpawa', NULL, 2, '2024-01-29', '0000-00-00', 'Sydnee Hood', 'Eden Roth', 'Et incidunt aliqua', '321', 'Sapiente tempor dolo', 'Nobis incididunt et '),
(59, 'Amal', 'Burton', '2008-06-20', '', '299', 'comylyf@mailinator.com', '', 'Nulla nemo consequat', 2, 'Entebbe', 'supervisor', 'Cash', 'Adhesion', 'betpawa', NULL, 2, '2024-01-29', '0000-00-00', 'Sydnee Hood', 'Eden Roth', 'Et incidunt aliqua', '321', 'Sapiente tempor dolo', 'Nobis incididunt et '),
(60, 'Norman', 'Hategyekamukama', '2003-08-07', '', '358', 'normanmukama11@gmail.com', 'Pa$$w0rd!', 'Inventore eveniet c', 2, 'Wakiso', 'supervisor', 'Mobile Money', 'Adhesion', 'cleanig', NULL, 2, '2024-01-29', '0000-00-00', 'Mark Branch', 'Ocean Rose', 'Dolore consequuntur ', '788', 'Reprehenderit et lor', 'Dicta sequi consequu'),
(61, 'Merrill', 'Sykes', '2001-07-02', '', '960', 'nuvacumow@mailinator.com', 'Pa$$w0rd!', 'Velit in sit qui non', 1, 'Mbarara', 'Teacher', 'Cash', 'Adhesion', 'betpawa', NULL, 2, '2024-01-29', '0000-00-00', 'Melvin Chambers', 'Alexis Hopper', 'Voluptatibus aut qui', '547', 'Ea sequi quia cillum', 'Corporis incidunt i'),
(62, 'Yuri', 'Nolan', '1998-11-19', '', '937', 'muzohu@mailinator.com', 'Pa$$w0rd!', 'Incididunt sunt in q', 1, 'Entebbe', 'supervisor', 'Mobile Money', 'Adhesion', 'cleanig', NULL, 2, '2024-01-29', '0000-00-00', 'Azalia Jennings', 'Blythe Collins', 'Beatae a aspernatur ', '961', 'Alias natus obcaecat', 'Quasi pariatur Impe'),
(63, 'George', 'Woods', '1971-10-07', '', '743', 'subib@mailinator.com', 'Pa$$w0rd!', 'Quis asperiores temp', 1, 'Ntungamo', 'supervisor', 'Credit', 'Adhesion', 'cleanig', NULL, 2, '2024-01-31', '0000-00-00', 'Nora Andrews', 'Joy Flores', 'Cumque ipsa adipisc', '304', 'Elit unde quia ut n', 'Dolor omnis id culpa'),
(64, 'Priscilla', 'Hampton', '1993-03-18', '', '22', 'jobukul@mailinator.com', 'Pa$$w0rd!', 'Omnis lorem ut provi', 2, 'Wakiso', 'Teacher', 'Credit', 'Sales', 'Farming', NULL, 1, '2024-01-31', '0000-00-00', 'Noel Wong', 'Dora Baxter', 'Reprehenderit nisi d', '999', 'Illo exercitationem ', 'Nihil magnam maxime '),
(65, 'Priscilla', 'Hampton', '1993-03-18', '', '22', 'jobukul@mailinator.com', '', 'Omnis lorem ut provi', 2, 'Wakiso', 'Teacher', 'Credit', 'Sales', 'Farming', NULL, 1, '2024-01-31', '0000-00-00', 'Noel Wong', 'Dora Baxter', 'Reprehenderit nisi d', '999', 'Illo exercitationem ', 'Nihil magnam maxime '),
(66, 'Basil', 'Mccray', '2020-01-11', '', '992', 'zovu@mailinator.com', 'Pa$$w0rd!', 'Ipsum eiusmod nulla', 2, 'Entebbe', 'Teacher', 'Credit', 'Adhesion', 'betpawa', NULL, 1, '2024-01-31', '0000-00-00', 'Jael Norton', 'Gemma Torres', 'Deserunt omnis itaqu', '133', 'Earum tempore aut m', 'Libero amet sit cul');

-- --------------------------------------------------------

--
-- Table structure for table `events_table`
--

CREATE TABLE `events_table` (
  `event_id` int(11) NOT NULL,
  `event_name` varchar(255) DEFAULT NULL,
  `start_date` date DEFAULT NULL,
  `end_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `events_table`
--

INSERT INTO `events_table` (`event_id`, `event_name`, `start_date`, `end_date`) VALUES
(1, 'Indigo Wheeler', '1995-12-12', '1974-06-01'),
(2, 'Lester Gallegos', '2022-10-15', '2019-03-14'),
(3, 'Cally Villarreal', '2020-05-21', '1986-07-13');

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
(2, 'Teaching'),
(4, 'Farming'),
(5, 'Betting'),
(6, 'betpawa'),
(7, 'coding'),
(8, 'software engineering');

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
(2, 'sick'),
(3, 'sick'),
(4, 'Chilling');

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
(5, 60, '2024-01-01', '2024-01-02', '2024-01-02', 'Stanbic bank', '8585858', 47777755),
(6, 59, '2024-01-09', '2024-01-17', '2024-01-17', 'Centenary', '75757', 8666666),
(7, 56, '2023-12-04', '2025-03-12', '2026-04-09', 'centenary', '8658686868', 646547564574);

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
(2, 'Day'),
(4, 'Morning');

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
-- Indexes for table `events_table`
--
ALTER TABLE `events_table`
  ADD PRIMARY KEY (`event_id`);

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
  MODIFY `attendance_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

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
  MODIFY `deduction_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `department_table`
--
ALTER TABLE `department_table`
  MODIFY `department_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `designation_table`
--
ALTER TABLE `designation_table`
  MODIFY `designation_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `employee_table`
--
ALTER TABLE `employee_table`
  MODIFY `employee_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=68;

--
-- AUTO_INCREMENT for table `events_table`
--
ALTER TABLE `events_table`
  MODIFY `event_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `job_type_table`
--
ALTER TABLE `job_type_table`
  MODIFY `job_type_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `leave_type_table`
--
ALTER TABLE `leave_type_table`
  MODIFY `leave_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

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
  MODIFY `payroll_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

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
  MODIFY `shift_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

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
