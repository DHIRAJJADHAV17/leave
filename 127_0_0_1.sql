-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 07, 2023 at 10:05 AM
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
CREATE DATABASE IF NOT EXISTS `ci1` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `ci1`;

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(10) NOT NULL,
  `name` text NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `email`, `password`) VALUES
(1, 'master', 'master@gmail.com', 'master@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `coach`
--

CREATE TABLE `coach` (
  `id` int(10) NOT NULL,
  `name` text NOT NULL,
  `phone` bigint(11) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `created_at` date DEFAULT NULL,
  `updated_at` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `coach`
--

INSERT INTO `coach` (`id`, `name`, `phone`, `email`, `password`, `created_at`, `updated_at`) VALUES
(2, 'esha lio', 99999999, 'piano@123.com', 'piano@123.co', NULL, '2023-08-26'),
(3, 'esha ra', 2147483647, 'esha@gmail.com', 'esha@gmail.com', NULL, '2023-08-23'),
(4, 'sdfadf', 2147483647, 'asdfa@sf.co', '$2y$10$JBOUlwK1LwdNVJ86OdkEluCF7A2MtFWSwPbUvjcTOKAESB4ahbuE.', '2023-07-26', NULL),
(5, 'ram', 87656521, 'ramsdsd@123.com', '$2y$10$kxyyFnCJg04jZ.OfR/8IkO7tF/ThdHcFaGSv.vLUKn2LNAit33.se', '2023-07-26', NULL),
(7, 'ram bhai', 87656521, 'ram@123455.com', '$2y$10$up6xn33duwdGf.l6Bc3z1.oDpESpEUV3lgoq1VKXC369OF6VkBvJ.', '2023-08-21', NULL),
(8, 'ram fggggg', 87656521, 'ram@123sss.com', '$2y$10$uZdWTJTh0fBO3watbZ320uPtoGl4M0oQpkMklOC5gs98CL8oDwlGy', '2023-08-21', NULL),
(11, 'ram shaa', 87656521, 'ram@123.comm', '$2y$10$59keIyQNEMME6ZKbc0HQCutEvA.t6aMXCCMAE4jdhY3wzjp576kfO', '2023-08-26', NULL),
(17, 'DHIARJ JADHAV .', 8208835029, 'dhiraj.jadhav20@pccoepune.org', '$2y$10$MVxgjSMoKA/4sGd6oYogTOgDj52dqUOjFQfV1kPalSpv/fPb2mAEm', '2023-09-09', NULL);

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
(24, 'pianoo', 1000, '', 'esha raa', '2023-08-26 18:21:56', '2023-08-26 12:51:56'),
(25, 'pianosem1', 100, '', 'sdfadf', '2023-07-29 07:25:15', '2023-07-29 12:55:15'),
(28, '', 0, '', 'esha jaaa', '2023-08-23 14:12:51', '2023-08-23 19:42:51'),
(29, 'piano', 100, '', 'ram shaa ', '2023-08-26 17:02:38', '2023-08-26 11:32:38'),
(31, '', 0, '', '', '2023-09-03 06:07:43', '2023-09-03 11:37:43'),
(32, '', 0, '', '', '2023-09-03 06:07:49', '2023-09-03 11:37:49'),
(34, '', 0, '', '', '2023-09-03 06:09:10', '2023-09-03 11:39:10'),
(35, '', 0, '', '', '2023-09-03 06:11:42', '2023-09-03 11:41:42'),
(39, '', 0, '', '', '2023-09-03 06:20:18', '2023-09-03 11:50:18');

-- --------------------------------------------------------

--
-- Table structure for table `enroll`
--

CREATE TABLE `enroll` (
  `er_id` int(11) NOT NULL,
  `co_id` int(10) NOT NULL,
  `id` int(10) NOT NULL,
  `trans_id` varchar(24) NOT NULL,
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
(37, 20, 2, '89008800', 'G-pay', 1000, -95, '2023-07-03', '2023-08-03', '2023-08-04', 'Due', NULL, '2023-07-28', '2023-11-07'),
(38, 21, 2, 'gvvfuytftfty', 'G-pay', 100, -78, '2023-07-20', '2023-08-20', '2023-08-21', 'Due', NULL, '2023-07-28', '2023-11-07'),
(41, 20, 3, '12323323232s', 'G-pay', 788, -20, '2023-07-10', '2023-07-20', '2023-07-21', 'pending', '1691693631_bc5958ec5f1e00fe9880.png', '2023-07-30', '2023-08-10'),
(42, 21, 3, '12323323232s', 'G-pay', 788, -10, '2023-07-19', '2023-08-01', '2023-08-02', 'pending', '1691826522_42ef534c8c71deb6ec6f.png', '2023-07-30', '2023-08-12'),
(43, 24, 3, '12323323232s', 'G-pay', 1000, -67, '2023-08-01', '2023-08-31', '2023-09-01', 'Due', '1692526424_30a2f0646465bc65bf5f.jpg', '2023-08-20', '2023-11-07'),
(44, 24, 20, '12323323232s', 'G-pay', 788, -67, '2023-08-01', '2023-08-31', '2023-09-01', 'Due', '1693068982_738cd9454b2b498887da.png', '2023-08-26', '2023-11-07'),
(45, 24, 20, '4333333333333333', 'G-pay', 1111, -67, '2023-08-02', '2023-08-31', '2023-09-01', 'Due', '1693069064_4d9d52dd432d7ab01772.png', '2023-08-26', '2023-11-07'),
(46, 24, 20, 'jhhhhh8888', 'Patym', 78888888, -83, '2023-08-02', '2023-08-15', '2023-08-16', 'Due', '1693069148_1a520a8d3bbf76e5b043.png', '2023-08-26', '2023-11-07'),
(47, 24, 3, '89999999', 'PhonePay', 0, -75, '2023-08-01', '2023-08-23', '2023-08-24', 'Due', '1693075857_61e5ebebad43a9bb3392.png', '2023-08-26', '2023-11-07'),
(48, 24, 3, '122222222211', 'G-pay', 788, -67, '2023-08-23', '2023-08-31', '2023-09-01', 'Due', '1693759930_402dd9152039f0bd9857.png', '2023-08-26', '2023-11-07'),
(50, 25, 36, '', 'Paytm', 333, -48, '2023-09-02', '2023-09-19', '2023-09-20', 'Due', '', '2023-09-12', '2023-11-07'),
(51, 25, 36, '', 'Cash', 1000, -61, '2023-09-08', '2023-09-06', '2023-09-07', 'Due', NULL, '2023-09-12', '2023-11-07'),
(52, 25, 36, '', 'Paytm', 788, -41, '2023-09-01', '2023-09-26', '2023-09-27', 'Due', '', '2023-09-12', '2023-11-07'),
(53, 24, 36, '', 'PhonePay', 700, -41, '2023-09-05', '2023-09-26', '2023-09-27', 'Due', '', '2023-09-12', '2023-11-07'),
(54, 25, 36, '', 'Cash', 1222, -47, '2023-09-05', '2023-09-20', '2023-09-21', 'Due', '', '2023-09-18', '2023-11-07'),
(55, 25, 36, '', 'Cash', 0, -41, '2023-09-11', '2023-09-26', '2023-09-27', 'Due', '', '2023-09-18', '2023-11-07');

-- --------------------------------------------------------

--
-- Table structure for table `notice`
--

CREATE TABLE `notice` (
  `title` varchar(50) NOT NULL,
  `notice` longtext NOT NULL,
  `id` int(11) NOT NULL,
  `created_at` date NOT NULL,
  `updated_at` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `notice`
--

INSERT INTO `notice` (`title`, `notice`, `id`, `created_at`, `updated_at`) VALUES
('holiday', '														qwerewrrqerqrqe		', 7, '2023-11-01', '0000-00-00'),
('Drive', '							drive at ganeh talav									', 8, '2023-11-03', '0000-00-00');

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
  `img` mediumtext DEFAULT NULL,
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
(20, 3, '1232323123test', '', 111, '2023-07-19', '2023-08-01', '1690714654_98dfe72961f68cc2c54c.jpg', '2023-07-30', NULL),
(21, 3, '12323323232s', '', 1000, '2023-08-01', '2023-08-31', '1692526424_30a2f0646465bc65bf5f.jpg', '2023-08-26', NULL),
(22, 3, '99000000', '', 90, '2023-08-01', '2023-08-23', '1693071671_583e995048644bd36d3e.png', '2023-08-26', NULL),
(23, 3, '88999999', '', 333, '2023-08-01', '2023-08-16', '1693072572_d2477ed9acf27c2e5e2c.png', '2023-08-26', NULL),
(24, 20, '12323323232s', '', 788, '2023-08-01', '2023-08-31', '1693068982_738cd9454b2b498887da.png', '2023-08-26', NULL),
(25, 20, '4333333333333333', '', 1111, '2023-08-02', '2023-08-31', '1693069064_4d9d52dd432d7ab01772.png', '2023-08-26', NULL),
(26, 20, 'jhhhhh8888', '', 78888888, '2023-08-02', '2023-08-15', '1693069148_1a520a8d3bbf76e5b043.png', '2023-08-26', NULL),
(27, 3, '1222222222', '', 788, '2023-08-17', '2023-08-22', '1693758772_6f898604aa491581123b.png', '2023-09-03', NULL),
(28, 3, '12222222221', '', 788, '2023-08-23', '2023-08-31', '1693759568_9ec60539a4138e3e0c78.png', '2023-09-03', NULL),
(29, 36, '12323323232s', '', 333, '2023-09-02', '2023-09-19', '1694532061_24514e2f98bfb29db63d.png', '2023-09-12', NULL),
(30, 36, '1222222222', '', 700, '2023-09-05', '2023-09-07', '1694532845_a14703d95122e8ac9d91.png', '2023-09-12', NULL),
(31, 36, '12323323232s', '', 1000, '2023-09-08', '2023-09-06', '1694533218_1267c564a05c736ea4fb.png', '2023-09-12', NULL),
(32, 36, 'test1', '', 788, '2023-09-01', '2023-09-26', '1694534872_054d1707a568033d45f9.png', '2023-09-12', NULL),
(33, 36, '', '', 1000, '2023-09-11', '2023-09-26', NULL, '2023-09-18', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) NOT NULL,
  `name` text DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `phone` bigint(11) DEFAULT NULL,
  `active` enum('','ACTIVE','DEACTIVE') DEFAULT NULL,
  `creat_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `phone`, `active`, `creat_at`, `updated_at`) VALUES
(2, 'ram aaaab', 'ram@123.comm', '$2y$10$.7BspUf60f5FwMS9LXBx6.1OoKURZPgsW6JiSSEyPtbr52xbGBOuK', 8989898999, '', '2023-07-06 07:38:45', '2023-08-26 13:24:46'),
(3, 'ramesh', 'ram@12345.com', '$2y$10$apIcsyAU2rBNH7aQndp/2OpLOWAt5k6N3LQoUY8PVfzzb1jcJWc2a', 87656521, '', '2023-07-15 23:42:49', NULL),
(14, 'ram bhai', 'ram@123455.com', '$2y$10$3m1hPRDgx1tmwdlhXx2NkemZYBHdttb81WIfnud7Gm0zM1xmKdPP6', 87656521, NULL, '2023-08-21 03:45:27', NULL),
(36, 'DHIARJ JADHAV .', 'dhiraj.jadhav20@pccoepune.org', '$2y$10$IdFo8VTCxTzxkBfRfd042.2aAfuaHkdjQgtLqWSmKHCY6MgMFgYE2', 8208835029, NULL, '2023-09-10 06:17:54', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `waste`
--

CREATE TABLE `waste` (
  `id` int(10) NOT NULL,
  `wid` int(10) NOT NULL,
  `department` varchar(20) DEFAULT NULL,
  `days` varchar(100) DEFAULT NULL,
  `from` varchar(10) DEFAULT NULL,
  `reason` varchar(100) DEFAULT NULL,
  `status` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `waste`
--

INSERT INTO `waste` (`id`, `wid`, `department`, `days`, `from`, `reason`, `status`) VALUES
(36, 1, 'IT', '1', '4-6-3 to 5', 'medical', 'Approved'),
(36, 2, 'IT', '1', '4-7-3 to 5', 'medical', 'Approved'),
(36, 4, 'IT', '2', '4-7-3 to 6', 'medical', 'Approved');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `coach`
--
ALTER TABLE `coach`
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
-- Indexes for table `notice`
--
ALTER TABLE `notice`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`pt_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `waste`
--
ALTER TABLE `waste`
  ADD PRIMARY KEY (`wid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `coach`
--
ALTER TABLE `coach`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `co_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `enroll`
--
ALTER TABLE `enroll`
  MODIFY `er_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- AUTO_INCREMENT for table `notice`
--
ALTER TABLE `notice`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `pt_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `waste`
--
ALTER TABLE `waste`
  MODIFY `wid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- Database: `phpmyadmin`
--
CREATE DATABASE IF NOT EXISTS `phpmyadmin` DEFAULT CHARACTER SET utf8 COLLATE utf8_bin;
USE `phpmyadmin`;

-- --------------------------------------------------------

--
-- Table structure for table `pma__bookmark`
--

CREATE TABLE `pma__bookmark` (
  `id` int(10) UNSIGNED NOT NULL,
  `dbase` varchar(255) NOT NULL DEFAULT '',
  `user` varchar(255) NOT NULL DEFAULT '',
  `label` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '',
  `query` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Bookmarks';

-- --------------------------------------------------------

--
-- Table structure for table `pma__central_columns`
--

CREATE TABLE `pma__central_columns` (
  `db_name` varchar(64) NOT NULL,
  `col_name` varchar(64) NOT NULL,
  `col_type` varchar(64) NOT NULL,
  `col_length` text DEFAULT NULL,
  `col_collation` varchar(64) NOT NULL,
  `col_isNull` tinyint(1) NOT NULL,
  `col_extra` varchar(255) DEFAULT '',
  `col_default` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Central list of columns';

-- --------------------------------------------------------

--
-- Table structure for table `pma__column_info`
--

CREATE TABLE `pma__column_info` (
  `id` int(5) UNSIGNED NOT NULL,
  `db_name` varchar(64) NOT NULL DEFAULT '',
  `table_name` varchar(64) NOT NULL DEFAULT '',
  `column_name` varchar(64) NOT NULL DEFAULT '',
  `comment` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '',
  `mimetype` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '',
  `transformation` varchar(255) NOT NULL DEFAULT '',
  `transformation_options` varchar(255) NOT NULL DEFAULT '',
  `input_transformation` varchar(255) NOT NULL DEFAULT '',
  `input_transformation_options` varchar(255) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Column information for phpMyAdmin';

-- --------------------------------------------------------

--
-- Table structure for table `pma__designer_settings`
--

CREATE TABLE `pma__designer_settings` (
  `username` varchar(64) NOT NULL,
  `settings_data` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Settings related to Designer';

-- --------------------------------------------------------

--
-- Table structure for table `pma__export_templates`
--

CREATE TABLE `pma__export_templates` (
  `id` int(5) UNSIGNED NOT NULL,
  `username` varchar(64) NOT NULL,
  `export_type` varchar(10) NOT NULL,
  `template_name` varchar(64) NOT NULL,
  `template_data` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Saved export templates';

-- --------------------------------------------------------

--
-- Table structure for table `pma__favorite`
--

CREATE TABLE `pma__favorite` (
  `username` varchar(64) NOT NULL,
  `tables` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Favorite tables';

-- --------------------------------------------------------

--
-- Table structure for table `pma__history`
--

CREATE TABLE `pma__history` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `username` varchar(64) NOT NULL DEFAULT '',
  `db` varchar(64) NOT NULL DEFAULT '',
  `table` varchar(64) NOT NULL DEFAULT '',
  `timevalue` timestamp NOT NULL DEFAULT current_timestamp(),
  `sqlquery` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='SQL history for phpMyAdmin';

-- --------------------------------------------------------

--
-- Table structure for table `pma__navigationhiding`
--

CREATE TABLE `pma__navigationhiding` (
  `username` varchar(64) NOT NULL,
  `item_name` varchar(64) NOT NULL,
  `item_type` varchar(64) NOT NULL,
  `db_name` varchar(64) NOT NULL,
  `table_name` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Hidden items of navigation tree';

-- --------------------------------------------------------

--
-- Table structure for table `pma__pdf_pages`
--

CREATE TABLE `pma__pdf_pages` (
  `db_name` varchar(64) NOT NULL DEFAULT '',
  `page_nr` int(10) UNSIGNED NOT NULL,
  `page_descr` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='PDF relation pages for phpMyAdmin';

-- --------------------------------------------------------

--
-- Table structure for table `pma__recent`
--

CREATE TABLE `pma__recent` (
  `username` varchar(64) NOT NULL,
  `tables` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Recently accessed tables';

--
-- Dumping data for table `pma__recent`
--

INSERT INTO `pma__recent` (`username`, `tables`) VALUES
('root', '[{\"db\":\"ci1\",\"table\":\"waste\"},{\"db\":\"ci1\",\"table\":\"users\"},{\"db\":\"ci1\",\"table\":\"admin\"}]');

-- --------------------------------------------------------

--
-- Table structure for table `pma__relation`
--

CREATE TABLE `pma__relation` (
  `master_db` varchar(64) NOT NULL DEFAULT '',
  `master_table` varchar(64) NOT NULL DEFAULT '',
  `master_field` varchar(64) NOT NULL DEFAULT '',
  `foreign_db` varchar(64) NOT NULL DEFAULT '',
  `foreign_table` varchar(64) NOT NULL DEFAULT '',
  `foreign_field` varchar(64) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Relation table';

-- --------------------------------------------------------

--
-- Table structure for table `pma__savedsearches`
--

CREATE TABLE `pma__savedsearches` (
  `id` int(5) UNSIGNED NOT NULL,
  `username` varchar(64) NOT NULL DEFAULT '',
  `db_name` varchar(64) NOT NULL DEFAULT '',
  `search_name` varchar(64) NOT NULL DEFAULT '',
  `search_data` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Saved searches';

-- --------------------------------------------------------

--
-- Table structure for table `pma__table_coords`
--

CREATE TABLE `pma__table_coords` (
  `db_name` varchar(64) NOT NULL DEFAULT '',
  `table_name` varchar(64) NOT NULL DEFAULT '',
  `pdf_page_number` int(11) NOT NULL DEFAULT 0,
  `x` float UNSIGNED NOT NULL DEFAULT 0,
  `y` float UNSIGNED NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Table coordinates for phpMyAdmin PDF output';

-- --------------------------------------------------------

--
-- Table structure for table `pma__table_info`
--

CREATE TABLE `pma__table_info` (
  `db_name` varchar(64) NOT NULL DEFAULT '',
  `table_name` varchar(64) NOT NULL DEFAULT '',
  `display_field` varchar(64) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Table information for phpMyAdmin';

-- --------------------------------------------------------

--
-- Table structure for table `pma__table_uiprefs`
--

CREATE TABLE `pma__table_uiprefs` (
  `username` varchar(64) NOT NULL,
  `db_name` varchar(64) NOT NULL,
  `table_name` varchar(64) NOT NULL,
  `prefs` text NOT NULL,
  `last_update` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Tables'' UI preferences';

-- --------------------------------------------------------

--
-- Table structure for table `pma__tracking`
--

CREATE TABLE `pma__tracking` (
  `db_name` varchar(64) NOT NULL,
  `table_name` varchar(64) NOT NULL,
  `version` int(10) UNSIGNED NOT NULL,
  `date_created` datetime NOT NULL,
  `date_updated` datetime NOT NULL,
  `schema_snapshot` text NOT NULL,
  `schema_sql` text DEFAULT NULL,
  `data_sql` longtext DEFAULT NULL,
  `tracking` set('UPDATE','REPLACE','INSERT','DELETE','TRUNCATE','CREATE DATABASE','ALTER DATABASE','DROP DATABASE','CREATE TABLE','ALTER TABLE','RENAME TABLE','DROP TABLE','CREATE INDEX','DROP INDEX','CREATE VIEW','ALTER VIEW','DROP VIEW') DEFAULT NULL,
  `tracking_active` int(1) UNSIGNED NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Database changes tracking for phpMyAdmin';

-- --------------------------------------------------------

--
-- Table structure for table `pma__userconfig`
--

CREATE TABLE `pma__userconfig` (
  `username` varchar(64) NOT NULL,
  `timevalue` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `config_data` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='User preferences storage for phpMyAdmin';

--
-- Dumping data for table `pma__userconfig`
--

INSERT INTO `pma__userconfig` (`username`, `timevalue`, `config_data`) VALUES
('root', '2023-11-07 08:25:08', '{\"Console\\/Mode\":\"collapse\",\"NavigationWidth\":0}');

-- --------------------------------------------------------

--
-- Table structure for table `pma__usergroups`
--

CREATE TABLE `pma__usergroups` (
  `usergroup` varchar(64) NOT NULL,
  `tab` varchar(64) NOT NULL,
  `allowed` enum('Y','N') NOT NULL DEFAULT 'N'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='User groups with configured menu items';

-- --------------------------------------------------------

--
-- Table structure for table `pma__users`
--

CREATE TABLE `pma__users` (
  `username` varchar(64) NOT NULL,
  `usergroup` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Users and their assignments to user groups';

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pma__bookmark`
--
ALTER TABLE `pma__bookmark`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pma__central_columns`
--
ALTER TABLE `pma__central_columns`
  ADD PRIMARY KEY (`db_name`,`col_name`);

--
-- Indexes for table `pma__column_info`
--
ALTER TABLE `pma__column_info`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `db_name` (`db_name`,`table_name`,`column_name`);

--
-- Indexes for table `pma__designer_settings`
--
ALTER TABLE `pma__designer_settings`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `pma__export_templates`
--
ALTER TABLE `pma__export_templates`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `u_user_type_template` (`username`,`export_type`,`template_name`);

--
-- Indexes for table `pma__favorite`
--
ALTER TABLE `pma__favorite`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `pma__history`
--
ALTER TABLE `pma__history`
  ADD PRIMARY KEY (`id`),
  ADD KEY `username` (`username`,`db`,`table`,`timevalue`);

--
-- Indexes for table `pma__navigationhiding`
--
ALTER TABLE `pma__navigationhiding`
  ADD PRIMARY KEY (`username`,`item_name`,`item_type`,`db_name`,`table_name`);

--
-- Indexes for table `pma__pdf_pages`
--
ALTER TABLE `pma__pdf_pages`
  ADD PRIMARY KEY (`page_nr`),
  ADD KEY `db_name` (`db_name`);

--
-- Indexes for table `pma__recent`
--
ALTER TABLE `pma__recent`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `pma__relation`
--
ALTER TABLE `pma__relation`
  ADD PRIMARY KEY (`master_db`,`master_table`,`master_field`),
  ADD KEY `foreign_field` (`foreign_db`,`foreign_table`);

--
-- Indexes for table `pma__savedsearches`
--
ALTER TABLE `pma__savedsearches`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `u_savedsearches_username_dbname` (`username`,`db_name`,`search_name`);

--
-- Indexes for table `pma__table_coords`
--
ALTER TABLE `pma__table_coords`
  ADD PRIMARY KEY (`db_name`,`table_name`,`pdf_page_number`);

--
-- Indexes for table `pma__table_info`
--
ALTER TABLE `pma__table_info`
  ADD PRIMARY KEY (`db_name`,`table_name`);

--
-- Indexes for table `pma__table_uiprefs`
--
ALTER TABLE `pma__table_uiprefs`
  ADD PRIMARY KEY (`username`,`db_name`,`table_name`);

--
-- Indexes for table `pma__tracking`
--
ALTER TABLE `pma__tracking`
  ADD PRIMARY KEY (`db_name`,`table_name`,`version`);

--
-- Indexes for table `pma__userconfig`
--
ALTER TABLE `pma__userconfig`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `pma__usergroups`
--
ALTER TABLE `pma__usergroups`
  ADD PRIMARY KEY (`usergroup`,`tab`,`allowed`);

--
-- Indexes for table `pma__users`
--
ALTER TABLE `pma__users`
  ADD PRIMARY KEY (`username`,`usergroup`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pma__bookmark`
--
ALTER TABLE `pma__bookmark`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pma__column_info`
--
ALTER TABLE `pma__column_info`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pma__export_templates`
--
ALTER TABLE `pma__export_templates`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pma__history`
--
ALTER TABLE `pma__history`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pma__pdf_pages`
--
ALTER TABLE `pma__pdf_pages`
  MODIFY `page_nr` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pma__savedsearches`
--
ALTER TABLE `pma__savedsearches`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- Database: `sy`
--
CREATE DATABASE IF NOT EXISTS `sy` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `sy`;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `version` varchar(255) NOT NULL,
  `class` varchar(255) NOT NULL,
  `group` varchar(255) NOT NULL,
  `namespace` varchar(255) NOT NULL,
  `time` int(11) NOT NULL,
  `batch` int(11) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- Database: `test`
--
CREATE DATABASE IF NOT EXISTS `test` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `test`;
--
-- Database: `u174044573_doctor`
--
CREATE DATABASE IF NOT EXISTS `u174044573_doctor` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `u174044573_doctor`;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_appointments`
--

CREATE TABLE `tbl_appointments` (
  `appointment_id` int(11) NOT NULL,
  `token_number` int(11) NOT NULL,
  `appointment_date` date NOT NULL,
  `first_name` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `last_name` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `contact` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `message` text CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `appointment_status` int(11) NOT NULL DEFAULT 0,
  `created_date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_doctors`
--

CREATE TABLE `tbl_doctors` (
  `doctor_id` int(11) NOT NULL,
  `doctor_name` varchar(255) NOT NULL,
  `doctor_email` varchar(255) DEFAULT NULL,
  `doctor_username` varchar(255) NOT NULL,
  `doctor_password` varchar(255) NOT NULL,
  `doctor_mobile` varchar(255) DEFAULT NULL,
  `doctor_image` varchar(255) DEFAULT NULL,
  `doctor_type` int(11) NOT NULL,
  `doctor_status` int(11) NOT NULL DEFAULT 1,
  `created_by` int(11) DEFAULT NULL,
  `created_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_noticeboards`
--

CREATE TABLE `tbl_noticeboards` (
  `id` int(11) NOT NULL,
  `notice` text CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `status` int(11) NOT NULL,
  `created_date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_schedules`
--

CREATE TABLE `tbl_schedules` (
  `schedule_id` int(11) NOT NULL,
  `from_date` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `to_date` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `created_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_schedule_details`
--

CREATE TABLE `tbl_schedule_details` (
  `id` int(11) NOT NULL,
  `schedule_id` int(11) NOT NULL,
  `schedule_date` date NOT NULL,
  `appointments` int(11) NOT NULL,
  `split` int(11) DEFAULT NULL,
  `remaining_appointments` int(11) NOT NULL,
  `start_date` date NOT NULL,
  `start_appointment_time` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `start_time` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `end_time` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `display_token_number` int(11) NOT NULL DEFAULT 0,
  `created_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_appointments`
--
ALTER TABLE `tbl_appointments`
  ADD PRIMARY KEY (`appointment_id`);

--
-- Indexes for table `tbl_doctors`
--
ALTER TABLE `tbl_doctors`
  ADD PRIMARY KEY (`doctor_id`);

--
-- Indexes for table `tbl_noticeboards`
--
ALTER TABLE `tbl_noticeboards`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_schedules`
--
ALTER TABLE `tbl_schedules`
  ADD PRIMARY KEY (`schedule_id`);

--
-- Indexes for table `tbl_schedule_details`
--
ALTER TABLE `tbl_schedule_details`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_appointments`
--
ALTER TABLE `tbl_appointments`
  MODIFY `appointment_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_doctors`
--
ALTER TABLE `tbl_doctors`
  MODIFY `doctor_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_noticeboards`
--
ALTER TABLE `tbl_noticeboards`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_schedules`
--
ALTER TABLE `tbl_schedules`
  MODIFY `schedule_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_schedule_details`
--
ALTER TABLE `tbl_schedule_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
