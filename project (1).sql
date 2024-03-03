-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 30, 2023 at 05:56 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `cars`
--

CREATE TABLE `cars` (
  `id` int(11) NOT NULL,
  `brand` varchar(50) NOT NULL,
  `model` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cars`
--

INSERT INTO `cars` (`id`, `brand`, `model`) VALUES
(0, 'audi', 'A5'),
(0, 'audi', 'RS3'),
(0, 'audi', 'RS4'),
(0, 'audi', 'RS5'),
(0, 'mercedes', 'C-CLASS'),
(0, 'mercedes', 'E-CLASS'),
(0, 'mercedes', 'S-CLASS'),
(0, 'mercedes', 'GLA'),
(0, 'chevrolet', 'EQUINOX'),
(0, 'chevrolet', 'BLAZER'),
(0, 'chevrolet', 'TRAILBLAZER'),
(0, 'chevrolet', 'SUBURBAN'),
(0, 'fiat', '500X'),
(0, 'fiat', '124SPIDER'),
(0, 'fiat', '500L'),
(0, 'fiat', '500C'),
(0, 'jeep', 'GRAND-CHEROKEE'),
(0, 'jeep', 'WRANGLER'),
(0, 'jeep', 'RENEGADE'),
(0, 'jeep', 'COMPASS'),
(0, 'nissan', 'GTR'),
(0, 'nissan', 'ROUGE'),
(0, 'nissan', 'MAXIMA'),
(0, 'nissan', 'ALTIMA');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id` int(11) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `message` varchar(10000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id`, `subject`, `message`) VALUES
(0, 'wefc', 'dcxz'),
(0, 'gfvcxz', 'fvcsxx');

-- --------------------------------------------------------

--
-- Table structure for table `test_drive_requests`
--

CREATE TABLE `test_drive_requests` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(13) NOT NULL,
  `brand` varchar(50) NOT NULL,
  `model` varchar(50) NOT NULL,
  `date` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `test_drive_requests`
--

INSERT INTO `test_drive_requests` (`id`, `name`, `email`, `phone`, `brand`, `model`, `date`) VALUES
(8, 'Mostafa Elleathy', 'mostafaelleathy0031@gmail.com', '0510221845210', 'bmw', 'bmw1', 'Apr 30, 2023');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `username` varchar(30) NOT NULL,
  `name` text NOT NULL,
  `password` varchar(50) NOT NULL,
  `mobile` varchar(50) NOT NULL,
  `mobile2` varchar(50) NOT NULL,
  `region` text NOT NULL,
  `address` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `username`, `name`, `password`, `mobile`, `mobile2`, `region`, `address`) VALUES
(0, 'mostafaelleathy0031@gmail.com', 'mostafa', 'Mostafa Elleathy', 'mostafa2004', '01551236733', '01122152721', 'Al Qāhirah', 'Third thetlment'),
(0, 'ziadahmed@gmail.com', 'ziad', 'ziad ahmed', 'ziad2003', '01551236733', '01122152721', 'Al Qāhirah', 'Third thetlment');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `test_drive_requests`
--
ALTER TABLE `test_drive_requests`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `test_drive_requests`
--
ALTER TABLE `test_drive_requests`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
