-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 19, 2024 at 08:12 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `codecrane`
--

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

CREATE TABLE `members` (
  `id` int(11) NOT NULL,
  `full_name` varchar(255) NOT NULL,
  `education` varchar(255) DEFAULT NULL,
  `post` varchar(255) NOT NULL,
  `department` varchar(255) DEFAULT NULL,
  `facebook` text DEFAULT NULL,
  `instagram` text DEFAULT NULL,
  `linkedin` text DEFAULT NULL,
  `twitter` text DEFAULT NULL,
  `youtube` text DEFAULT NULL,
  `github` text DEFAULT NULL,
  `image` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `members`
--

INSERT INTO `members` (`id`, `full_name`, `education`, `post`, `department`, `facebook`, `instagram`, `linkedin`, `twitter`, `youtube`, `github`, `image`) VALUES
(1, 'MD ', 'BSMR', '1', 'GRA', 'wd', '3', 'r', 'q', '4', 'q', 'assets/img/members/1915356815.png'),
(2, 'MD ', 'BSMR', '1', 'GRA', 'wd', '3', 'r', 'q', '4', 'q', 'assets/img/members/1123657141.png'),
(3, 'MD ', 'BSMR', '1', 'GRA', 'wd', '3', 'r', 'q', '4', 'q', 'assets/img/members/894206772.png'),
(4, 'MD ', 'BSMR', '1', 'GRA', 'wd', '3', 'r', 'q', '4', 'q', 'assets/img/members/252882423.png'),
(5, 'MD siya', 'BSMR', '1', 'GRA', 'wd', '3', 'r', 'q', '4', 'q', 'assets/img/members/1977660496.png'),
(6, 'MD siya', 'BSMR', '1', 'GRA', 'wd', '3', 'r', 'q', '4', 'q', 'assets/img/members/1009062989.png'),
(7, 'MD siya', 'BSMR', '1', 'GRA', 'wd', '3', 'r', 'q', '4', 'q', 'assets/img/members/378115763.png'),
(8, 'MD siya', 'BSMR', '1', 'GRA', 'wd', '3', 'r', 'q', '4', 'q', 'assets/img/members/1094114215.png');

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

CREATE TABLE `projects` (
  `id` int(11) NOT NULL,
  `project_name` varchar(255) DEFAULT NULL,
  `short_description` varchar(255) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `image` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `projects`
--

INSERT INTO `projects` (`id`, `project_name`, `short_description`, `description`, `image`) VALUES
(4, 'SImocwes', 'fewfw', '<p><mark class=\"marker-yellow\">Hwello my name</mark></p>', 'assets/img/Projects/1293173816.png');

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE `questions` (
  `id` int(11) NOT NULL,
  `question` text NOT NULL,
  `answer` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`id`, `question`, `answer`) VALUES
(9, 'Whats your name?', 'MY name is siyam.'),
(19, 'How are you?', 'Iam fine');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` int(11) NOT NULL,
  `service_name` text DEFAULT NULL,
  `short_description` text DEFAULT NULL,
  `description` text DEFAULT NULL,
  `service_image` text DEFAULT NULL,
  `added_on` varchar(255) DEFAULT NULL,
  `author` varchar(255) DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `service_name`, `short_description`, `description`, `service_image`, `added_on`, `author`, `status`) VALUES
(8, 'dd', 'n', '<p>d</p>', 'assets/img/services/CodeCrane-65a9bfa7cc1c14.4489658320240107_171509_0000-982x500.png', NULL, NULL, 1),
(9, 'qq', 'qq', '<p>qqqq</p>', 'assets/img/services/IMG-65a9bebd1de148.95410943express-delivery-girl-receiving-parcel-home-banner-982x500.webp', NULL, NULL, 0),
(10, 'tt', 'tt', '<p>tt</p>', 'assets/img/services/IMG-65a9bf5917f0a1.1178224620240107_171509_0000-982x500.png', NULL, NULL, 0),
(11, 'mmmm', 'dd', '<p>w</p>', 'assets/img/services/IMG-65a9bfa7cc1ca6.1053636620240107_171509_0000-982x500.png', NULL, NULL, 0),
(12, 'psd', 'g', '<p>444</p>', 'assets/img/services/IMG-65aa3be34c6911.6995320720240107_171509_0000-982x500.png', NULL, NULL, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `members`
--
ALTER TABLE `members`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `members`
--
ALTER TABLE `members`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `projects`
--
ALTER TABLE `projects`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `questions`
--
ALTER TABLE `questions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
