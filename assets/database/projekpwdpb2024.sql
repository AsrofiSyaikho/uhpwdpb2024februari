-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Feb 15, 2024 at 03:19 AM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `projekpwdpb2024`
--

-- --------------------------------------------------------

--
-- Table structure for table `jadwalhari`
--

CREATE TABLE `jadwalhari` (
  `hari` varchar(20) COLLATE utf8mb4_general_ci NOT NULL,
  `jadwal1` varchar(30) COLLATE utf8mb4_general_ci NOT NULL,
  `jadwal2` varchar(30) COLLATE utf8mb4_general_ci NOT NULL,
  `jadwal3` varchar(30) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `jadwalhari`
--

INSERT INTO `jadwalhari` (`hari`, `jadwal1`, `jadwal2`, `jadwal3`) VALUES
('Senin', 'Kabur', 'Minum', 'Makan');

-- --------------------------------------------------------

--
-- Table structure for table `useraccount`
--

CREATE TABLE `useraccount` (
  `username` varchar(30) COLLATE utf8mb4_general_ci NOT NULL,
  `email` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `password` varchar(30) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `useraccount`
--

INSERT INTO `useraccount` (`username`, `email`, `password`) VALUES
('Asrofi', 'asrofi@gmail.com', '123'),
('Didi', '', 'satusampedelapan');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `jadwalhari`
--
ALTER TABLE `jadwalhari`
  ADD PRIMARY KEY (`hari`);

--
-- Indexes for table `useraccount`
--
ALTER TABLE `useraccount`
  ADD PRIMARY KEY (`username`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
