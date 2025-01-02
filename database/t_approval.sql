-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 02, 2025 at 10:38 AM
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
-- Database: `collegetransport`
--

-- --------------------------------------------------------

--
-- Table structure for table `t_approval`
--

CREATE TABLE `t_approval` (
  `c_id` int(50) NOT NULL,
  `book_id` int(50) NOT NULL,
  `vehicle_id` int(50) NOT NULL,
  `driver_id` int(50) NOT NULL,
  `open_km` varchar(250) NOT NULL,
  `close_km` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `t_approval`
--

INSERT INTO `t_approval` (`c_id`, `book_id`, `vehicle_id`, `driver_id`, `open_km`, `close_km`) VALUES
(1, 20, 5, 2, '0', '0'),
(2, 19, 5, 2, '0', '0');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `t_approval`
--
ALTER TABLE `t_approval`
  ADD PRIMARY KEY (`c_id`),
  ADD KEY `cont_fk` (`book_id`),
  ADD KEY `cont_vi` (`vehicle_id`),
  ADD KEY `cont_di` (`driver_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `t_approval`
--
ALTER TABLE `t_approval`
  MODIFY `c_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `t_approval`
--
ALTER TABLE `t_approval`
  ADD CONSTRAINT `cont_di` FOREIGN KEY (`driver_id`) REFERENCES `driver` (`d_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
