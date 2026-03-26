-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 21, 2019 at 02:02 PM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.1

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
-- Table structure for table `apply`
--

CREATE TABLE `apply` (
  `Id` int(100) NOT NULL,
  `event_name` varchar(100) NOT NULL,
  `event_dt` datetime(6) NOT NULL,
  `event_dp` varchar(500) NOT NULL,
  `event_tp` int(100) NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `apply`
--

INSERT INTO `apply` (`Id`, `event_name`, `event_dt`, `event_dp`, `event_tp`, `status`) VALUES
(1, '', '0000-00-00 00:00:00.000000', '', 0, ''),
(123, 'birthday', '2009-12-12 00:00:00.000000', 'asjdalkjdakldjaskldjask', 3000, 'Confirmed'),
(222, 'asd', '2019-09-18 12:00:00.000000', 'asafdsg', 2000, ''),
(232, 'birth', '2019-09-18 12:00:00.000000', '', 2000, 'Confirmed'),
(2312, 'hasham', '2019-09-18 12:00:00.000000', 'xgfxbgcn nggfht nhffr', 3000, ''),
(2313, '', '0000-00-00 00:00:00.000000', '', 0, 'Rejected'),
(2314, '', '0000-00-00 00:00:00.000000', '', 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `num` int(12) NOT NULL,
  `mass` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`name`, `email`, `num`, `mass`) VALUES
('arib', 'ar@gmail.com', 2147483647, 'asdd gbnf gffr fhjr ');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `Id` int(11) NOT NULL,
  `event_name` varchar(50) NOT NULL,
  `event_dt` varchar(60) NOT NULL,
  `event_dp` varchar(500) NOT NULL,
  `event_tp` int(50) NOT NULL,
  `p_image` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`Id`, `event_name`, `event_dt`, `event_dp`, `event_tp`, `p_image`) VALUES
(15, '   Corporate Dinner Event', '18-09-2019 10:00 pm', 'dinner events have evolved greatly over the last few years as event managers are increasingly experimenting with a wide range ', 20000, 'one.jpeg'),
(16, '  Night Event', '17-09-2019 11:00 pm', '2020 in celebrating humanity and all its achievements like never before', 35000, 'three.jpg');

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
(11, 'aaaa', 'aa', 'ssa@gmail.com', 'aptecch', 'aptech', '12.jpg'),
(13, 'hasham', 'hasm', ' aw@yahoo.com', 'asd', 'asd ', '10.jpg'),
(26, 'arib', 'ari', 'abc2@gmail.com', 'zzz', 'zzz', 'upload/2.jpg'),
(27, 'sajida', 'sa', 'sajidasharmeen@aptechnn.com', 'aptech', 'aptech', 'oo.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `request`
--

CREATE TABLE `request` (
  `Id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `eventname` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `request`
--

INSERT INTO `request` (`Id`, `username`, `eventname`, `status`) VALUES
(2, 'sajida', 'pizza', 'Approved'),
(3, 'sajida', 'pizza', 'Approved'),
(4, 'sajida', 'pizza', 'Rejected'),
(20, 'sajida sharmeen', ' Maga Pizza ', 'pending'),
(21, 'sajida sharmeen', '  Maga Pizza ', 'pending'),
(22, 'Areeb', '   Maga Pizza ', 'Rejected'),
(23, 'Areeb', '   Maga Pizza ', 'Rejected'),
(24, 'Areeb', '   Maga Pizza ', 'Approved');

-- --------------------------------------------------------

--
-- Table structure for table `visitor`
--

CREATE TABLE `visitor` (
  `Country` varchar(50) NOT NULL,
  `visitors` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `visitor`
--

INSERT INTO `visitor` (`Country`, `visitors`) VALUES
('Pak', 3),
('Ind', 3),
('Aus', 2),
('others', 9);

-- --------------------------------------------------------

--
-- Table structure for table `winner`
--

CREATE TABLE `winner` (
  `Id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `num` int(13) NOT NULL,
  `mass` varchar(500) NOT NULL,
  `qua` varchar(50) NOT NULL,
  `age` int(60) NOT NULL,
  `count` varchar(50) NOT NULL,
  `img` varchar(100) NOT NULL,
  `winner` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `winner`
--

INSERT INTO `winner` (`Id`, `name`, `email`, `num`, `mass`, `qua`, `age`, `count`, `img`, `winner`) VALUES
(1, 'hasham riaz', 'aptech@gmail.com', 2147483647, ' sSADASCZSSDASFSZXCXCSDWER ZFAWADCCWR WEDWES', 'CSEERFAERG', 21, 'PAK', '9.jpeg', ''),
(2, 'hasham riaz', 'aptech@gmail.com', 2147483647, ' sSADASCZSSDASFSZXCXCSDWER ZFAWADCCWR WEDWES', 'CSEERFAERG', 21, 'PAK', '9.jpeg', ''),
(3, 'hasham riaz', 'aptech@gmail.com', 2147483647, ' sSADASCZSSDASFSZXCXCSDWER ZFAWADCCWR WEDWES', 'CSEERFAERG', 21, 'PAK', '9.jpeg', ''),
(4, 'hasham riaz', 'aptech@gmail.com', 2147483647, ' sSADASCZSSDASFSZXCXCSDWER ZFAWADCCWR WEDWES', 'CSEERFAERG', 21, 'PAK', '9.jpeg', ''),
(5, 'sajida', 'aptechnn@gmail.com', 2147483647, ' adawrfsefsf fseefxdcvsrv ', 'aerse', 22, 'ada', '12.jpg', 'winner');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `apply`
--
ALTER TABLE `apply`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `reg`
--
ALTER TABLE `reg`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `request`
--
ALTER TABLE `request`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `winner`
--
ALTER TABLE `winner`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `apply`
--
ALTER TABLE `apply`
  MODIFY `Id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2315;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `reg`
--
ALTER TABLE `reg`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `request`
--
ALTER TABLE `request`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `winner`
--
ALTER TABLE `winner`
  MODIFY `Id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
