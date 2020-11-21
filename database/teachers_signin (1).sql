-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 21, 2020 at 06:13 AM
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
-- Table structure for table `teachers_signin`
--

CREATE TABLE `teachers_signin` (
  `fname` varchar(20) NOT NULL,
  `lname` varchar(20) NOT NULL,
  `username` varchar(20) NOT NULL,
  `userpass` varchar(8) NOT NULL,
  `position` varchar(40) NOT NULL,
  `branch` varchar(40) NOT NULL,
  `faculty_num` varchar(10) NOT NULL,
  `dob` date NOT NULL,
  `email_id` varchar(30) NOT NULL,
  `pno` varchar(10) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `working_addr` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `teachers_signin`
--

INSERT INTO `teachers_signin` (`fname`, `lname`, `username`, `userpass`, `position`, `branch`, `faculty_num`, `dob`, `email_id`, `pno`, `gender`, `working_addr`) VALUES
('Radhika', 'Patil', 'radhika.patil', 'Patil#22', 'assnprof', 'COMPS', '1190324', '1982-07-02', 'radhika.patil@somaiya.edu', '1234567891', 'female', 'K.J.Somaiya College of enginee'),
('Ram', 'Patel', 'rampatel', 'Rampat#1', 'prof', 'ETRX', '1200456', '1982-02-16', 'ram.patel@somaiya.edu', '1234567891', 'female', 'K.J.Somaiya College of enginee'),
('Tanvi', 'Ahuja', 'tanvi12', 'Tanvi@12', 'assocprof', 'ETRX', '1200043', '1975-05-26', 'tanvi.ahuja@somaiya.edu', '1234567891', 'female', 'Morning hills, M.J circle, Mum'),
('Madhura', 'Gupta', 'madhurag', 'Tool1234', 'assocprof', 'COMPS', '1763456', '1983-02-02', 'madhura.gupta@somaiya.edu', '1234567891', 'female', 'K.J.Somaiya College of enginee');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
