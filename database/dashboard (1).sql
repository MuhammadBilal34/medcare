-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 05, 2019 at 03:34 PM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.1.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dashboard`
--

-- --------------------------------------------------------

--
-- Table structure for table `appionment`
--

CREATE TABLE `appionment` (
  `id` int(11) NOT NULL,
  `p_name` varchar(250) NOT NULL,
  `deases_name` varchar(250) NOT NULL,
  `dr_name` varchar(250) NOT NULL,
  `dr_timing` varchar(250) NOT NULL,
  `location` varchar(250) NOT NULL,
  `status` varchar(250) NOT NULL,
  `p_contact` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `appionment`
--

INSERT INTO `appionment` (`id`, `p_name`, `deases_name`, `dr_name`, `dr_timing`, `location`, `status`, `p_contact`) VALUES
(1, 'asdd', 'qww', ' ahmed', ' 5:00', ' karachi', 'Decline', '1233'),
(2, 'aamir', 'fever', ' sajida', ' 12', ' lahore', 'Decline', '546456');

-- --------------------------------------------------------

--
-- Table structure for table `city`
--

CREATE TABLE `city` (
  `id` int(11) NOT NULL,
  `city_name` varchar(250) NOT NULL,
  `postal_code` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `city`
--

INSERT INTO `city` (`id`, `city_name`, `postal_code`) VALUES
(2, 'karachi', '7800'),
(3, 'lahore', '89000');

-- --------------------------------------------------------

--
-- Table structure for table `dr`
--

CREATE TABLE `dr` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `av` varchar(50) NOT NULL,
  `ed` varchar(50) NOT NULL,
  `ex` varchar(50) NOT NULL,
  `img` varchar(250) NOT NULL,
  `location` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dr`
--

INSERT INTO `dr` (`id`, `name`, `av`, `ed`, `ex`, `img`, `location`) VALUES
(3, ' zainb', ' mmbs', ' sd', 'aptech', 'find_user.png', 'sadasd '),
(4, 'ahmed', 'dsfd', 'eerw', 'gfhgf', 'find_user.png', 'fgfgfh');

-- --------------------------------------------------------

--
-- Table structure for table `p_login`
--

CREATE TABLE `p_login` (
  `id` int(11) NOT NULL,
  `name` varchar(250) NOT NULL,
  `d_user` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL,
  `r_password` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `p_login`
--

INSERT INTO `p_login` (`id`, `name`, `d_user`, `email`, `password`, `r_password`) VALUES
(1, 'ahmed', 'ahmed', 'abc@gmail.com', '12345', '12345'),
(2, 'ahmed', 'ahmed', 'abc@gmail.com', '12345', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `reg`
--

CREATE TABLE `reg` (
  `Id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `r_password` varchar(50) NOT NULL,
  `img` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reg`
--

INSERT INTO `reg` (`Id`, `name`, `username`, `email`, `password`, `r_password`, `img`) VALUES
(29, 'ahmed', 'ahmed', 'admin@gmail.com', 'admin123', 'admin123', 'upload/find_user.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `appionment`
--
ALTER TABLE `appionment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `city`
--
ALTER TABLE `city`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dr`
--
ALTER TABLE `dr`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `p_login`
--
ALTER TABLE `p_login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reg`
--
ALTER TABLE `reg`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `appionment`
--
ALTER TABLE `appionment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `city`
--
ALTER TABLE `city`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `dr`
--
ALTER TABLE `dr`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `p_login`
--
ALTER TABLE `p_login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `reg`
--
ALTER TABLE `reg`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
