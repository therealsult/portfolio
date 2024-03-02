-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 02, 2024 at 12:48 PM
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
-- Database: `portfolio_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `design`
--

CREATE TABLE `design` (
  `id` int(11) NOT NULL,
  `title` varchar(1100) NOT NULL,
  `project_description` varchar(5000) NOT NULL,
  `published_date` varchar(1100) NOT NULL,
  `project_image` varchar(1100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `design`
--

INSERT INTO `design` (`id`, `title`, `project_description`, `published_date`, `project_image`) VALUES
(1, 'example 1', 'example 1', 'December 2023', 'earbuds.png'),
(2, 'ex 2', 'ex 2', 'January 2024', 'ajax.png'),
(3, 'ex 3', 'ex 3', 'June 2022', 'quatro-1.png');

-- --------------------------------------------------------

--
-- Table structure for table `development`
--

CREATE TABLE `development` (
  `id` int(11) NOT NULL,
  `title` varchar(1100) NOT NULL,
  `project_description` varchar(5000) NOT NULL,
  `published_date` varchar(1100) NOT NULL,
  `project_image` varchar(1100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `development`
--

INSERT INTO `development` (`id`, `title`, `project_description`, `published_date`, `project_image`) VALUES
(1, 'ex 1', 'ex 1', 'August 2023', 'earbuds.png'),
(2, 'ex 2', 'ex 2', 'march 2024', 'ajax.png'),
(3, 'ex 3', 'ex 3', 'June 2022', 'quatro-1.png');

-- --------------------------------------------------------

--
-- Table structure for table `motion`
--

CREATE TABLE `motion` (
  `id` int(11) NOT NULL,
  `title` varchar(1100) NOT NULL,
  `project_description` varchar(5000) NOT NULL,
  `published_date` varchar(1100) NOT NULL,
  `project_image` varchar(1100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `motion`
--

INSERT INTO `motion` (`id`, `title`, `project_description`, `published_date`, `project_image`) VALUES
(1, 'ex 1', 'ex 1', 'September 2022', 'earbuds.png'),
(2, 'ex 2', 'ex 2', 'February 2023 ', 'ajax.png'),
(3, 'ex 3', 'ex 3', 'June 2022', 'quatro-1.png');

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

CREATE TABLE `projects` (
  `id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `project_description` varchar(5500) NOT NULL,
  `published_date` varchar(100) NOT NULL,
  `project_image` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `projects`
--

INSERT INTO `projects` (`id`, `title`, `project_description`, `published_date`, `project_image`) VALUES
(1, 'Earbus', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'November 2023', 'earbuds.png'),
(2, 'Ajax Redux', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'January 2024', 'ajax.png'),
(3, 'Quarto Reb', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'April 2023', 'quatro-1.png');

-- --------------------------------------------------------

--
-- Table structure for table `steps`
--

CREATE TABLE `steps` (
  `id` int(11) NOT NULL,
  `step_1` varchar(1000) NOT NULL,
  `step_2` varchar(1000) NOT NULL,
  `step_3` varchar(1000) NOT NULL,
  `step_4` varchar(1000) NOT NULL,
  `step_5` varchar(1000) NOT NULL,
  `step_6` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `steps`
--

INSERT INTO `steps` (`id`, `step_1`, `step_2`, `step_3`, `step_4`, `step_5`, `step_6`) VALUES
(1, 'earbuds', 'earbuds', 'earbuds', 'earbuds', 'earbuds', 'earbuds'),
(2, 'ajax', 'ajax', 'ajax', 'ajax', 'ajax', 'ajax'),
(3, 'quarto', 'quarto', 'quarto', 'quarto', 'quarto', 'quarto');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `design`
--
ALTER TABLE `design`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `development`
--
ALTER TABLE `development`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `motion`
--
ALTER TABLE `motion`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `steps`
--
ALTER TABLE `steps`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `design`
--
ALTER TABLE `design`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `development`
--
ALTER TABLE `development`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `motion`
--
ALTER TABLE `motion`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `projects`
--
ALTER TABLE `projects`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `steps`
--
ALTER TABLE `steps`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
