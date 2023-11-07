-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 13, 2023 at 08:14 AM
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
-- Database: `ci1`
--

-- --------------------------------------------------------

--
-- Table structure for table `admi`
--

CREATE TABLE `admi` (
  `id` int(10) NOT NULL,
  `name` text NOT NULL,
  `phone` int(10) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `created_at` date DEFAULT NULL,
  `updated_at` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admi`
--

INSERT INTO `admi` (`id`, `name`, `phone`, `email`, `password`, `created_at`, `updated_at`) VALUES
(2, 'esha jaaa', 89898989, 'piano@123.co', 'piano@123.co', NULL, '2023-07-30'),
(3, 'esha ra', 78889906, 'esha@gmail.com', 'esha@gmail.com', NULL, '2023-07-30'),
(4, 'sdfadf', 2147483647, 'asdfa@sf.co', '$2y$10$JBOUlwK1LwdNVJ86OdkEluCF7A2MtFWSwPbUvjcTOKAESB4ahbuE.', '2023-07-26', NULL),
(5, 'ram', 87656521, 'ramsdsd@123.com', '$2y$10$kxyyFnCJg04jZ.OfR/8IkO7tF/ThdHcFaGSv.vLUKn2LNAit33.se', '2023-07-26', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(10) NOT NULL,
  `name` text DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `phone` int(100) DEFAULT NULL,
  `active` enum('','ACTIVE','DEACTIVE') DEFAULT NULL,
  `creat_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `email`, `password`, `phone`, `active`, `creat_at`, `updated_at`) VALUES
(2, 'ram aaaab', 'ram@123.com', '$2y$10$.7BspUf60f5FwMS9LXBx6.1OoKURZPgsW6JiSSEyPtbr52xbGBOuK', 89898989, 'ACTIVE', '2023-07-06 07:38:45', '2023-08-12 02:22:33'),
(3, 'ramesh', 'ram@12345.com', '$2y$10$apIcsyAU2rBNH7aQndp/2OpLOWAt5k6N3LQoUY8PVfzzb1jcJWc2a', 87656521, '', '2023-07-15 23:42:49', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `co_id` int(10) NOT NULL,
  `course` text NOT NULL,
  `price` int(10) NOT NULL,
  `email` varchar(100) NOT NULL,
  `teacher` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `update_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`co_id`, `course`, `price`, `email`, `teacher`, `created_at`, `update_at`) VALUES
(22, 'piano', 1000, '', 'esha raa', '2023-07-28 11:40:15', '2023-07-28 06:10:15'),
(24, 'piano', 100, '', 'esha raa', '2023-07-29 07:23:24', '2023-07-29 12:53:24'),
(25, 'pianosem1', 100, '', 'sdfadf', '2023-07-29 07:25:15', '2023-07-29 12:55:15'),
(26, 'piano', 500, '', 'esha jaaa ', '2023-08-11 00:53:15', '2023-08-11 06:23:15'),
(27, 'guitar', 999000, '', 'esha jaaa', '2023-08-11 05:56:58', '2023-08-11 11:26:58');

-- --------------------------------------------------------

--
-- Table structure for table `enroll`
--

CREATE TABLE `enroll` (
  `er_id` int(11) NOT NULL,
  `co_id` int(10) NOT NULL,
  `id` int(10) NOT NULL,
  `trans_id` varchar(100) NOT NULL,
  `mode` text NOT NULL,
  `amount` int(100) NOT NULL,
  `duration` int(100) NOT NULL,
  `startdate` date DEFAULT NULL,
  `validtill` date DEFAULT NULL,
  `renewdate` date DEFAULT NULL,
  `status` text NOT NULL,
  `img` mediumtext DEFAULT NULL,
  `created_a` date DEFAULT NULL,
  `updated_at` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `enroll`
--

INSERT INTO `enroll` (`er_id`, `co_id`, `id`, `trans_id`, `mode`, `amount`, `duration`, `startdate`, `validtill`, `renewdate`, `status`, `img`, `created_a`, `updated_at`) VALUES
(37, 20, 2, '89008800', 'G-pay', 1000, -8, '2023-07-03', '2023-08-03', '2023-08-04', 'Due', NULL, '2023-07-28', '2023-08-12'),
(38, 21, 2, 'gvvfuytftfty', 'G-pay', 100, 9, '2023-07-20', '2023-08-20', '2023-08-21', 'Active', NULL, '2023-07-28', '2023-08-12'),
(41, 20, 3, '12323323232s', 'G-pay', 788, -20, '2023-07-10', '2023-07-20', '2023-07-21', 'pending', '1691693631_bc5958ec5f1e00fe9880.png', '2023-07-30', '2023-08-10'),
(42, 21, 3, '12323323232s', 'G-pay', 788, -10, '2023-07-19', '2023-08-01', '2023-08-02', 'pending', '1691826522_42ef534c8c71deb6ec6f.png', '2023-07-30', '2023-08-12');

-- --------------------------------------------------------

--
-- Table structure for table `master`
--

CREATE TABLE `master` (
  `id` int(10) NOT NULL,
  `name` text NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `master`
--

INSERT INTO `master` (`id`, `name`, `email`, `password`) VALUES
(1, 'master', 'master@gmail.com', 'master@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `pt_id` int(10) NOT NULL,
  `id` int(10) NOT NULL,
  `trans_id` varchar(100) NOT NULL,
  `mode` text NOT NULL,
  `amount` int(10) NOT NULL,
  `start_date` date DEFAULT NULL,
  `end_date` date DEFAULT NULL,
  `img` mediumtext NOT NULL,
  `created_at` date DEFAULT NULL,
  `updated_at` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`pt_id`, `id`, `trans_id`, `mode`, `amount`, `start_date`, `end_date`, `img`, `created_at`, `updated_at`) VALUES
(11, 2, '1232323123', '', 111, '2023-07-12', '2023-08-12', '', '2023-06-12', NULL),
(15, 2, '89008800', '', 1000, '2023-07-03', '2023-08-03', '', '2023-07-28', NULL),
(16, 2, 'gvvfuytftfty', '', 100, '2023-07-20', '2023-08-20', '', '2023-07-28', NULL),
(17, 3, '12323323232s', '', 788, '2023-06-01', '2023-07-01', '', '2023-07-30', NULL),
(18, 3, 'lkl km', '', 67777, '2023-07-04', '2023-07-11', '', '2023-07-30', NULL),
(19, 3, '1232323123test2', '', 101, '2023-07-11', '2023-07-18', '1690712993_e1a18417dac9513a2d93.jpg', '2023-07-30', NULL),
(20, 3, '1232323123test', '', 111, '2023-07-19', '2023-08-01', '1690714654_98dfe72961f68cc2c54c.jpg', '2023-07-30', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admi`
--
ALTER TABLE `admi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`co_id`);

--
-- Indexes for table `enroll`
--
ALTER TABLE `enroll`
  ADD PRIMARY KEY (`er_id`);

--
-- Indexes for table `master`
--
ALTER TABLE `master`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`pt_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admi`
--
ALTER TABLE `admi`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `co_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `enroll`
--
ALTER TABLE `enroll`
  MODIFY `er_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `master`
--
ALTER TABLE `master`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `pt_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
