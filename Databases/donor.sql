-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 13, 2022 at 05:09 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `donor`
--

-- --------------------------------------------------------

--
-- Table structure for table `detail`
--

CREATE TABLE `detail` (
  `id` int(11) NOT NULL,
  `firstname` varchar(200) NOT NULL,
  `lastname` varchar(200) NOT NULL,
  `age` varchar(11) DEFAULT NULL,
  `gender` varchar(60) DEFAULT NULL,
  `state` varchar(11) DEFAULT NULL,
  `municipality` varchar(50) DEFAULT NULL,
  `ward` varchar(11) DEFAULT NULL,
  `zone` varchar(50) DEFAULT NULL,
  `district` text DEFAULT NULL,
  `phone_no` varchar(100) DEFAULT NULL,
  `bloodtypes` text DEFAULT NULL,
  `blood_amount` varchar(150) DEFAULT NULL,
  `email` varchar(200) DEFAULT NULL,
  `feedbacks` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `detail`
--

INSERT INTO `detail` (`id`, `firstname`, `lastname`, `age`, `gender`, `state`, `municipality`, `ward`, `zone`, `district`, `phone_no`, `bloodtypes`, `blood_amount`, `email`, `feedbacks`) VALUES
(15, 'Kritagya', 'poudel', '20', 'Male', '1', 'sundar-haraicha', '10', 'koshi', 'Morang', '9817381698', 'O+ve', '2 ', 'whodisgirl999@gmail.com', 'test'),
(16, 'kavya', 'poudel', '22', 'Gender', '1', 'sdfsdaf', '10', 'ghgv', 'bfbdbh', '9817308463', 'AB+ve', '2 ', 'whodisgirl999@gmail.com', 'asdfasf'),
(17, 'sabnam', 'poudel', '25', 'Female', '2', 'b,jq,hkf', '12', 'koshi', 'sunsari', '985927551', 'O-ve', '2', 'whodisgirl999@gmail.com', 'test'),
(18, 'Karuna', 'Adhikari', '22', 'Female', '1', 'sundar-haraicha', '12', 'koshi', 'Morang', '9817308463', 'O+ve', '2 ', 'karunadhikari@gmail.com', 'test'),
(19, 'Karuna', 'Adhikari', '22', 'Female', '1', 'sundar-haraicha', '10', 'koshi', 'Morang', '9817308463', 'O+ve', '2 pints', 'karunadhikari@gmail.com', 'dsfdf'),
(20, 'Aayusha', 'Dahal', '25', 'Female', '1', 'sundar-haraicha', '10', 'koshi', 'Morang', '9817308463', 'A+ve', '2 pints', 'karunadhikari@gmail.com', 'test');

-- --------------------------------------------------------

--
-- Table structure for table `request`
--

CREATE TABLE `request` (
  `Message_to_donor` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `request`
--

INSERT INTO `request` (`Message_to_donor`) VALUES
('test123');

-- --------------------------------------------------------

--
-- Table structure for table `requests`
--

CREATE TABLE `requests` (
  `id` int(11) NOT NULL,
  `Bloodgroup` varchar(100) NOT NULL,
  `Unit_required` int(50) NOT NULL,
  `Recipient_name` varchar(100) NOT NULL,
  `Needed_blood_in` int(50) NOT NULL,
  `Phone` varchar(100) NOT NULL,
  `Message_to_donor` varchar(100) NOT NULL,
  `created_at` int(11) NOT NULL DEFAULT current_timestamp(),
  `status` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `requests`
--

INSERT INTO `requests` (`id`, `Bloodgroup`, `Unit_required`, `Recipient_name`, `Needed_blood_in`, `Phone`, `Message_to_donor`, `created_at`, `status`) VALUES
(1, 'A+ve', 2, 'prateek', 4, '9852059442', 'test123', 2147483647, 0),
(2, 'A+ve', 2, 'prapti', 4, '9852059442', 'test123', 2147483647, 0),
(3, 'AB+ve', 2, 'mohini', 3, '9852059442', 'test123', 2147483647, 0),
(4, 'A+ve', 2, 'prateek', 3, '9852059442', 'test123', 2147483647, 0),
(5, 'A+ve', 2, 'prateek', 3, '9852059442', 'test123', 2147483647, 0),
(6, 'eqf', 0, 'dfr', 0, 'sdas', 'xvfg', 2147483647, 0),
(7, 'fgr', 0, 'sfrgf', 0, 'fvadc', 'dsfr', 2147483647, 0);

-- --------------------------------------------------------

--
-- Table structure for table `test`
--

CREATE TABLE `test` (
  `id` int(11) NOT NULL,
  `first_name` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `test`
--

INSERT INTO `test` (`id`, `first_name`) VALUES
(1, 'TestName'),
(2, 'Testname');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(90) DEFAULT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(200) NOT NULL,
  `role` enum('admin','staff') NOT NULL DEFAULT 'staff',
  `remember_token` text DEFAULT NULL,
  `login_ip` varchar(100) DEFAULT NULL,
  `last_login` datetime DEFAULT NULL,
  `status` enum('active','inactive') NOT NULL DEFAULT 'inactive',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `role`, `remember_token`, `login_ip`, `last_login`, `status`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin@gmail.com', '1234567', 'admin', '12334', '192.01.01.1', NULL, 'active', '2021-09-17 06:19:03', '2021-09-17 06:19:03');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `detail`
--
ALTER TABLE `detail`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `requests`
--
ALTER TABLE `requests`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `test`
--
ALTER TABLE `test`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `detail`
--
ALTER TABLE `detail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `requests`
--
ALTER TABLE `requests`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `test`
--
ALTER TABLE `test`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
