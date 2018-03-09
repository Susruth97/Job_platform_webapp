-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 02, 2017 at 03:21 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `linking`
--

-- --------------------------------------------------------

--
-- Table structure for table `carpenter`
--

CREATE TABLE `carpenter` (
  `id` int(100) NOT NULL,
  `uname` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `city` varchar(30) NOT NULL,
  `timestamp` timestamp(6) NOT NULL DEFAULT CURRENT_TIMESTAMP(6) ON UPDATE CURRENT_TIMESTAMP(6)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `coder`
--

CREATE TABLE `coder` (
  `id` int(100) NOT NULL,
  `uname` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `city` varchar(50) NOT NULL,
  `timestamp` timestamp(6) NOT NULL DEFAULT CURRENT_TIMESTAMP(6) ON UPDATE CURRENT_TIMESTAMP(6)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `cook`
--

CREATE TABLE `cook` (
  `id` int(100) NOT NULL,
  `uname` varchar(50) NOT NULL,
  `email` varchar(30) NOT NULL,
  `city` varchar(50) NOT NULL,
  `timestamp` timestamp(6) NOT NULL DEFAULT CURRENT_TIMESTAMP(6) ON UPDATE CURRENT_TIMESTAMP(6)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `electrician`
--

CREATE TABLE `electrician` (
  `id` int(100) NOT NULL,
  `uname` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `city` varchar(30) NOT NULL,
  `timestamp` timestamp(6) NOT NULL DEFAULT CURRENT_TIMESTAMP(6) ON UPDATE CURRENT_TIMESTAMP(6)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `photos`
--

CREATE TABLE `photos` (
  `id` int(100) NOT NULL,
  `image` blob NOT NULL,
  `mail` varchar(30) NOT NULL,
  `timestamp` timestamp(6) NOT NULL DEFAULT CURRENT_TIMESTAMP(6) ON UPDATE CURRENT_TIMESTAMP(6)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `plumber`
--

CREATE TABLE `plumber` (
  `id` int(100) NOT NULL,
  `uname` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `city` varchar(30) NOT NULL,
  `timestamp` timestamp(6) NOT NULL DEFAULT CURRENT_TIMESTAMP(6) ON UPDATE CURRENT_TIMESTAMP(6)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `regemp`
--

CREATE TABLE `regemp` (
  `id` int(100) NOT NULL,
  `uname` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `age` int(3) NOT NULL,
  `dob` varchar(13) NOT NULL,
  `gender` varchar(8) NOT NULL,
  `city` varchar(30) NOT NULL,
  `mobile` int(15) NOT NULL,
  `aadhar` int(15) NOT NULL,
  `experience` varchar(10) NOT NULL,
  `skill1` varchar(30) NOT NULL,
  `about` varchar(400) NOT NULL,
  `password` varchar(30) NOT NULL,
  `timestamp` timestamp(6) NOT NULL DEFAULT CURRENT_TIMESTAMP(6) ON UPDATE CURRENT_TIMESTAMP(6)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `regemp`
--

INSERT INTO `regemp` (`id`, `uname`, `email`, `age`, `dob`, `gender`, `city`, `mobile`, `aadhar`, `experience`, `skill1`, `about`, `password`, `timestamp`) VALUES
(4, 'hahaha', 'hithapanchangam@gmail.com', 20, '1997-03-31', 'F', 'vijayawada', 2147483647, 2147483647, '', 'carpenter', 'im wat im', '12345678', '2017-04-01 12:51:20.679863'),
(1, 'krishna', 'krishna2928@gmail.com', 25, '1991-01-13', 'M', 'hyd', 2147483647, 2147483647, '', 'carpenter', 'Hiiii', 'krishna', '2017-04-01 09:28:03.859642'),
(3, 'Ramanujan', 'ramsap1205@gmail.com', 25, '1992-01-13', 'M', 'Bhimavaram', 2147483647, 2147483647, '', 'carpenter', 'Hiiii', 'ramsap', '2017-04-01 09:31:19.309821'),
(13, 'sreetha', 'sreehitha@yahoo.com', 20, '1997-03-31', 'F', 'vizag', 2147483647, 2147483647, '4', 'carpenter', 'hahahahahahahah', 'abcde', '2017-04-01 19:22:48.226496'),
(7, 'srisa ranga ramanujam', 'srisa.panchangam@gmail.com', 20, '1997-03-31', 'M', 'vijayawada', 2147483647, 2147483647, '6', 'carpenter', 'im wat im', '12345678', '2017-04-01 13:45:28.577807'),
(12, 'srisa ranga ramanujam', 'SRISARAMANUJAM@GMAIL.COM', 20, '1997-03-31', 'M', 'vijayawada', 2147483647, 2147483647, '2', 'carpenter', 'im wat im', 'godha', '2017-04-01 17:40:53.707586'),
(9, 'vasamsetty sudeepthi', 'sudeepthi98@gmail.com', 19, '1998-07-04', 'F', 'bhimavaram', 2147483647, 2147483647, '3', 'cook', 'i know cooking very well', 'deepthi', '2017-04-01 14:49:25.024323'),
(21, 'susruth', 'sus@gmail.com', 19, '1997-03-31', 'F', 'HYDERABAD', 2147483647, 2147483647, '2', 'carpenter', 'khuih', 'subham', '2017-04-01 19:43:56.737790'),
(22, 'susruth', 'susruth.munna@gmail.com', 19, '1997-04-20', 'M', 'HYDERABAD', 2147483647, 2147483647, '2', 'coder', 'khiyf', '12345', '2017-04-02 00:13:00.352739'),
(5, 'srihitharamanujam', 'sutha.panchangam@gmail.com', 20, '1997-03-31', 'F', 'chandigarh', 2147483647, 2147483647, '5', 'cook', 'im wat im', '12345678', '2017-04-01 13:02:31.901636'),
(10, 'uday sai', 'udaysai2551998@gmail.com', 19, '1997-04-20', 'O', 'vizag', 2147483647, 2147483647, '1', 'carpenter', 'shunt chavagotu shunt my life my way', '12345', '2017-04-01 15:11:29.373529');

-- --------------------------------------------------------

--
-- Table structure for table `regrec`
--

CREATE TABLE `regrec` (
  `id` int(100) NOT NULL,
  `uname` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `age` int(3) NOT NULL,
  `gender` varchar(2) NOT NULL,
  `city` varchar(30) NOT NULL,
  `mobile` int(10) NOT NULL,
  `aadhar` int(15) NOT NULL,
  `about` varchar(400) NOT NULL,
  `password` varchar(50) NOT NULL,
  `timestamp` timestamp(6) NOT NULL DEFAULT CURRENT_TIMESTAMP(6) ON UPDATE CURRENT_TIMESTAMP(6)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `regrec`
--

INSERT INTO `regrec` (`id`, `uname`, `email`, `age`, `gender`, `city`, `mobile`, `aadhar`, `about`, `password`, `timestamp`) VALUES
(4, 'siva', 'siva@gmail.com', 10, 'm', 'hyderabad', 2147483647, 1234567890, 'hi', 'krishna', '2017-04-01 12:15:42.190975'),
(5, 'srisa', 'srisa.panchangam@gmail.com', 20, 'M', 'chandi', 2147483647, 123654789, 'hiii hello how are you!!!!', '1234', '2017-04-01 12:17:59.606378'),
(6, 'vasamsetty sudeepthi', 'sudeepthi98@gmail.com', 19, 'F', 'bhimavaram', 2147483647, 2147483647, 'huhkshgbjksj khubjm', 'deepthi', '2017-04-01 14:52:33.589581');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `carpenter`
--
ALTER TABLE `carpenter`
  ADD KEY `id` (`id`);

--
-- Indexes for table `coder`
--
ALTER TABLE `coder`
  ADD PRIMARY KEY (`email`),
  ADD KEY `id` (`id`);

--
-- Indexes for table `cook`
--
ALTER TABLE `cook`
  ADD PRIMARY KEY (`email`),
  ADD KEY `id` (`id`);

--
-- Indexes for table `electrician`
--
ALTER TABLE `electrician`
  ADD PRIMARY KEY (`email`),
  ADD KEY `id` (`id`);

--
-- Indexes for table `photos`
--
ALTER TABLE `photos`
  ADD PRIMARY KEY (`mail`),
  ADD KEY `id` (`id`);

--
-- Indexes for table `plumber`
--
ALTER TABLE `plumber`
  ADD PRIMARY KEY (`email`),
  ADD KEY `id` (`id`);

--
-- Indexes for table `regemp`
--
ALTER TABLE `regemp`
  ADD PRIMARY KEY (`email`),
  ADD KEY `id` (`id`),
  ADD KEY `id_2` (`id`);

--
-- Indexes for table `regrec`
--
ALTER TABLE `regrec`
  ADD PRIMARY KEY (`email`),
  ADD KEY `id` (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `carpenter`
--
ALTER TABLE `carpenter`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `coder`
--
ALTER TABLE `coder`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `cook`
--
ALTER TABLE `cook`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `electrician`
--
ALTER TABLE `electrician`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `photos`
--
ALTER TABLE `photos`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `plumber`
--
ALTER TABLE `plumber`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `regemp`
--
ALTER TABLE `regemp`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
--
-- AUTO_INCREMENT for table `regrec`
--
ALTER TABLE `regrec`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
