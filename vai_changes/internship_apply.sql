-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 21, 2020 at 01:34 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `vailogin`
--

-- --------------------------------------------------------

--
-- Table structure for table `internship_apply`
--

CREATE TABLE `internship_apply` (
  `apply_id` int(11) NOT NULL,
  `fname` text NOT NULL,
  `lname` text NOT NULL,
  `sem` text NOT NULL,
  `file` blob NOT NULL,
  `id` int(11) NOT NULL,
  `job_seeker` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `internship_apply`
--

INSERT INTO `internship_apply` (`apply_id`, `fname`, `lname`, `sem`, `file`, `id`, `job_seeker`) VALUES
(1, 'Shreya', 'Kulkarni', '2', 0x313831343132375f46696c6568616e646c696e672e706466, 1, ''),
(3, 'Shreya', 'Kulkarni', '2', 0x313831343132375f56616962686176695f43424f45484d2e706466, 2, '<br />\r\n<b>Notice</b>:  Undefined index: email in <b>C:xampphtdocsminiprojstudent_shreya_newjob-single.php</b> on line <b>74</b><br />\r\n'),
(4, 'Shreya', 'Kulkarni', '2', 0x313831343132375f56616962686176695f43424f45484d2e706466, 2, ''),
(5, 'Shreya', 'Kulkarni', '2', 0x313831343132375f56616962686176695f43424f45484d2e706466, 2, ''),
(6, 'Shreya', 'Kulkarni', '2', 0x313831343132375f76616962686176695f41692e706466, 2, ''),
(7, 'Shreya', 'Kulkarni', '2', 0x313831343132375f76616962686176695f41692e706466, 2, ''),
(8, 'Shreya', 'Kulkarni', '2', 0x313831343132375f76616962686176695f41692e706466, 2, '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `internship_apply`
--
ALTER TABLE `internship_apply`
  ADD PRIMARY KEY (`apply_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `internship_apply`
--
ALTER TABLE `internship_apply`
  MODIFY `apply_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
