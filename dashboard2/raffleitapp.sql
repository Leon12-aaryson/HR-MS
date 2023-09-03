-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 25, 2023 at 08:25 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `raffleitapp`
--

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE `message` (
  `id` int(11) NOT NULL,
  `message_name` varchar(100) NOT NULL,
  `email` varchar(40) NOT NULL,
  `message` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `organisation`
--

CREATE TABLE `organisation` (
  `id` int(11) NOT NULL,
  `cname` varchar(20) NOT NULL,
  `logo` varchar(40) NOT NULL,
  `website` varchar(40) NOT NULL,
  `description` varchar(100) NOT NULL,
  `email` varchar(30) NOT NULL,
  `address` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `payments`
--

CREATE TABLE `payments` (
  `id` int(11) NOT NULL,
  `product_id` float(10,2) NOT NULL,
  `transaction_id` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `payment_amount` float(10,2) NOT NULL,
  `currency_code` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `payment_status` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `invoice_id` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `product_name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `createdtime` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `payments`
--

INSERT INTO `payments` (`id`, `product_id`, `transaction_id`, `payment_amount`, `currency_code`, `payment_status`, `invoice_id`, `product_name`, `createdtime`) VALUES
(4, 1.00, 'PAYID-MGBX2DI5UK19838ER824952P', 1.00, 'USD', 'approved', '61837d07e4251', 'HP Laptop', '2021-11-04 07:26:45'),
(5, 3.00, 'PAYID-MGBX2RQ38228855H94885305', 3.00, 'USD', 'approved', '61837d40862de', 'Dell Laptop', '2021-11-04 07:27:25'),
(6, 2.00, 'PAYID-MGBX5CY0DR70480PX2276315', 2.00, 'USD', 'approved', '61837e8624ec4', 'Lenovo Laptop', '2021-11-04 07:32:51');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `price` float(10,2) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1 COMMENT '1=Active | 0=Inactive'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `image`, `price`, `status`) VALUES
(1, '1 ticket', '', 1.00, 1),
(2, '5 tickets', '', 4.00, 1),
(3, '15 tickets', '', 10.00, 1);

-- --------------------------------------------------------

--
-- Table structure for table `products1`
--

CREATE TABLE `products1` (
  `id` int(11) NOT NULL,
  `name` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `price` float(10,2) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1 COMMENT '1=Active | 0=Inactive'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `rafflepay`
--

CREATE TABLE `rafflepay` (
  `payment_id` int(11) NOT NULL,
  `item_number` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `txn_id` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `payment_gross` float(10,2) NOT NULL,
  `currency_code` varchar(5) COLLATE utf8_unicode_ci NOT NULL,
  `payment_status` varchar(20) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `raffles`
--

CREATE TABLE `raffles` (
  `id` int(10) NOT NULL,
  `hostname` varchar(20) NOT NULL,
  `reason` varchar(20) NOT NULL,
  `picture` blob DEFAULT NULL,
  `startdate` datetime NOT NULL,
  `enddate` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `raffles`
--

INSERT INTO `raffles` (`id`, `hostname`, `reason`, `picture`, `startdate`, `enddate`) VALUES
(1, 'me', 'always menfb', 0x7374617469632f75706c6f6164732f74726163794a4f792e6a706567, '2023-03-18 00:00:00', '2023-03-23 00:00:00'),
(2, 'lexp', 'always menfb', 0x7374617469632f75706c6f6164732f666f6e61682e706e67, '2023-03-22 00:00:00', '2023-03-30 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `username`, `email`, `password`, `created_at`) VALUES
(1, '', '', 'leon12', '', '$2y$10$FLq..r8b.NBYVcsKS4cjgOn/cw8nfnjwCaGZkG6FlDeFpmmzfFKbu', '2023-03-11 06:45:57'),
(2, '', '', 'lexleon12', '', '$2y$10$lJU7ceK2AFlJ8okEuPvxVOUjD19TFIzav6pvmi0AeQasO/VX4y/6y', '2023-03-11 06:52:02'),
(3, 'Salwa', 'Hope', 'hopeline', 'lexhope@gmail.com', '$2y$10$6RvrGg5jLpk8s3r69trMRegnGVMEWJVtAoQYPRpLSyFBBqEst4eRO', '2023-03-11 06:55:39'),
(4, 'Deogratious', 'Emma', 'jim12', 'admin@admin.com', '$2y$10$y2Av17G8BthBSCQVj9LfB.MBpVLb7WzrwV7MxZPHZoQWiYs6m6hAm', '2023-03-11 07:50:55'),
(5, 'Deogratious2', 'Emma2', 'jim123', 'admin@admin.com', '$2y$10$Yz3C74O8VRRn63cwsRo1NuBEcyzi48pzqLtFhCHbOKHD34GvOpFKq', '2023-03-11 07:52:53'),
(6, 'Euthalia', 'Philgence', 'Euthalia23', 'euthaliacass@gmail.com', '$2y$10$v1A84NamhapIiA5Uq0UiQOD72mclD1Id1tR63dFpTPgU1X5EKZo/.', '2023-03-11 08:30:45'),
(7, 'Garfield', 'Dawes', 'Garfield23', 'Oldfolly5@gmail.com', '$2y$10$yVw4yncel.Dg3wponTCea.mVwDQ6wCdjpzGdIC0ZEaDkv0Frt7gNu', '2023-03-11 09:03:52'),
(8, 'leonardo', 'Aaron', 'lexleon', 'aaron@gmail.com', '$2y$10$tGmdyq1lu6d9VzDoXnqniuwP6QDoELkYp1vD49sr6owZbhw1osjqC', '2023-03-22 17:42:28');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `organisation`
--
ALTER TABLE `organisation`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `payments`
--
ALTER TABLE `payments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products1`
--
ALTER TABLE `products1`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rafflepay`
--
ALTER TABLE `rafflepay`
  ADD PRIMARY KEY (`payment_id`);

--
-- Indexes for table `raffles`
--
ALTER TABLE `raffles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `message`
--
ALTER TABLE `message`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `organisation`
--
ALTER TABLE `organisation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `payments`
--
ALTER TABLE `payments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `products1`
--
ALTER TABLE `products1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `rafflepay`
--
ALTER TABLE `rafflepay`
  MODIFY `payment_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `raffles`
--
ALTER TABLE `raffles`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
