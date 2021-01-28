-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 27, 2021 at 02:55 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `covid`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_info`
--

CREATE TABLE `admin_info` (
  `id` int(11) NOT NULL,
  `pass` text NOT NULL,
  `fname` varchar(20) NOT NULL,
  `lname` varchar(20) NOT NULL,
  `designation` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin_info`
--

INSERT INTO `admin_info` (`id`, `pass`, `fname`, `lname`, `designation`) VALUES
(181, 'm172', 'Abdul', 'Malek', 'Dept. Head'),
(183, '456', 'SIFAT', 'Ullah', 'Assistant Software Engineer'),
(184, '789', 'Nobat', 'khan', 'Data Scientist');

-- --------------------------------------------------------

--
-- Table structure for table `doctor_info`
--

CREATE TABLE `doctor_info` (
  `id` int(11) NOT NULL,
  `pass` text NOT NULL,
  `fname` varchar(20) DEFAULT NULL,
  `lname` varchar(20) DEFAULT NULL,
  `dob` date DEFAULT NULL,
  `gender` varchar(1) DEFAULT NULL,
  `speciality` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `doctor_info`
--

INSERT INTO `doctor_info` (`id`, `pass`, `fname`, `lname`, `dob`, `gender`, `speciality`) VALUES
(1, 'arnob123', 'rahim', 'Arnob', '1888-10-03', 'm', 'Medicine'),
(2, '123', 'junaid', 'Hossain', '2021-01-06', 'm', 'surgery'),
(3, '321', 'Nursat', 'Prithila', '2021-01-06', 'f', 'Medicine'),
(4, '456', 'Mahin', 'Jaman', '2021-01-13', 'm', 'Child');

-- --------------------------------------------------------

--
-- Table structure for table `nurse`
--

CREATE TABLE `nurse` (
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `age` int(122) NOT NULL,
  `dieseases` varchar(122) NOT NULL,
  `bed` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `nurse`
--

INSERT INTO `nurse` (`firstname`, `lastname`, `age`, `dieseases`, `bed`) VALUES
('Maliha ', 'jahan', 45, 'CANCER', 1),
('ABUL', 'KALAM', 89, 'COVID', 2),
('JAFOR', 'KHAN', 89, 'COVID', 3),
('EALHAM', 'REZA', 26, 'AIDS', 5),
('SIAM', 'FARABI', 45, 'HYPER TENSION', 7),
('JIBON', 'HOSSAIN', 29, 'KIDNEY FAILURE', 8),
('sANIA', 'JAHAN', 45, 'KIDNEY FAILURE', 9),
('HUMAYRA HOSSAIN', 'ANONNA', 24, 'MENTAL DISODER', 10),
('PRITHILA', 'JAMAN', 26, 'HYPER TENSION', 12),
('junaid', 'HOSSINA KHAN', 23, 'COVID', 16),
('junaid', 'ISLAM', 45, 'COVID', 22),
('BM', 'AYON', 26, 'AIDS', 23),
('ABUL', 'JAIN', 45, 'HYPER TENSION', 29),
('trisna', 'jaman', 45, 'CANCER', 41),
('junaid', 'khan', 85, 'covid', 55),
('MAHINA', 'HOSSAIN', 78, 'AIDS', 65),
('ISLAM', 'JAMAN', 96, 'COVID', 66),
('saik', 'hossain', 15, 'COVID', 88),
('ABUL', 'REZA', 45, 'HEART ATTACK', 100);

-- --------------------------------------------------------

--
-- Table structure for table `patient_history`
--

CREATE TABLE `patient_history` (
  `fname` varchar(20) NOT NULL,
  `lname` varchar(20) NOT NULL,
  `age` int(3) NOT NULL,
  `disease` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `patient_history`
--

INSERT INTO `patient_history` (`fname`, `lname`, `age`, `disease`) VALUES
('fgsf', 'gfhd', 32, 'chikongunia'),
('ggggg', 'ezzzzzz', 45, 'toxic'),
('Kala', 'asdasd', 2, 'qwewqe'),
('dasd', 'asda', 33, 'dsfasd'),
('sfasa', 'dfv', 45, '2ghdf'),
('sdaf', 'dfsgd', 34, 'qwewqe'),
('junaid', 'khan', 45, 'covid-202222'),
('', '', 0, ''),
('junaid', 'khan', 100, 'COVID'),
('', '', 0, ''),
('', '', 0, ''),
('', '', 0, ''),
('', '', 0, ''),
('', '', 0, ''),
('', '', 0, ''),
('', '', 0, ''),
('JUNAID', 'KHAN', 45, 'african corona'),
('JUNAID', 'islam', 45, 'corona'),
('junaid', 'khan', 45, 'fever'),
('junaid', 'khan', 45, 'COVID'),
('', '', 0, ''),
('askdjasd', 'sadas', 78, 'chulkani'),
('', '', 0, ''),
('JUNAID', 'khan', 45, 'aids'),
('junaid', 'khan', 45, 'COVID'),
('ded', 'ede', 45, 'cancer');

-- --------------------------------------------------------

--
-- Table structure for table `patient_status`
--

CREATE TABLE `patient_status` (
  `bed` int(11) NOT NULL,
  `patient_condition` varchar(35) DEFAULT NULL,
  `medicine` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `patient_status`
--

INSERT INTO `patient_status` (`bed`, `patient_condition`, `medicine`) VALUES
(1, 'normal', '  not prescribed'),
(2, 'MEDIUM', 'prescribed'),
(3, 'CRITICAL', 'Not prescribed'),
(5, 'CRITICAL', ' prescribed'),
(7, 'CRITICAL', 'Not prescribed'),
(8, 'NORMAL', 'Not prescribed'),
(9, 'CRITICAL', 'Not prescribed'),
(10, 'CRITICAL', 'Not prescribed'),
(12, 'normal', 'Not prescribed'),
(16, 'NORMAL', 'Not prescribed'),
(22, 'NORMAL', 'Not prescribed'),
(23, 'NORMAL', 'Not prescribed'),
(29, 'NORMAL', 'Not prescribed'),
(41, 'CRITICAL', 'Not prescribed'),
(55, 'normal', 'Not prescribed'),
(65, 'NORMAL', 'Not prescribed'),
(66, 'NORMAL', 'Not prescribed'),
(88, 'critical', 'Not prescribed'),
(100, 'CRITICAL', 'Not prescribed');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `doctor_info`
--
ALTER TABLE `doctor_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `nurse`
--
ALTER TABLE `nurse`
  ADD PRIMARY KEY (`bed`);

--
-- Indexes for table `patient_status`
--
ALTER TABLE `patient_status`
  ADD PRIMARY KEY (`bed`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `patient_status`
--
ALTER TABLE `patient_status`
  ADD CONSTRAINT `patient_status_ibfk_1` FOREIGN KEY (`bed`) REFERENCES `nurse` (`bed`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
