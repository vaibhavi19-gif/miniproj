-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 22, 2020 at 06:04 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `intern_db`
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
  `file` varchar(100) NOT NULL,
  `int_id` int(11) NOT NULL,
  `applicant_email` text NOT NULL,
  `date_applied` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `internship_apply`
--

INSERT INTO `internship_apply` (`apply_id`, `fname`, `lname`, `sem`, `file`, `int_id`, `applicant_email`, `date_applied`) VALUES
(10, 'Shreya', 'Kulkarni', '5', 'trial_intern.docx', 1, 'kulkarni.sr@somaiya.edu', '2020-11-21 20:02:48'),
(15, 'Laxmi', 'Vidya', '3', 'trial_intern.docx', 4, 'laxmi.vidya@somaiya.edu', '2020-11-21 20:03:40'),
(16, 'Vaibhavi', 'Kundle', '5', 'trial_intern.docx', 2, 'vaibhavi.kundle@somaiya.edu', '2020-11-22 00:28:49');

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
  MODIFY `apply_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
