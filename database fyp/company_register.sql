-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 05, 2024 at 02:30 PM
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
-- Database: `placement_application`
--

-- --------------------------------------------------------

--
-- Table structure for table `company_register`
--

CREATE TABLE `company_register` (
  `company_name` varchar(500) NOT NULL,
  `company_address` varchar(500) NOT NULL,
  `company_website` varchar(500) NOT NULL,
  `job_position` varchar(500) NOT NULL,
  `job_description` varchar(1000) NOT NULL,
  `interview_preferences` date NOT NULL,
  `eligibility` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `company_register`
--

INSERT INTO `company_register` (`company_name`, `company_address`, `company_website`, `job_position`, `job_description`, `interview_preferences`, `eligibility`) VALUES
('hh', 'sulur', 'https://web.whatsapp.com/', 'java dev', 'startup', '0000-00-00', 'bsccs bca bscit bcom ca'),
('hh', 'sulur', 'https://web.whatsapp.com/', 'java dev', 'startup', '2024-02-07', 'bsccs bca bscit bcom ca'),
('hh', 'sulur', 'https://web.whatsapp.com/', 'java dev', 'startup', '2024-02-05', 'bsccs bca bscit bcom ca');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
