-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 03, 2024 at 11:27 AM
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
-- Table structure for table `add_vehicle`
--

CREATE TABLE `add_vehicle` (
  `v_id` int(50) NOT NULL,
  `vehicle_type` varchar(200) NOT NULL,
  `v_reg_no` varchar(200) NOT NULL,
  `v_insurance_no` varchar(200) NOT NULL,
  `v_insurance_valid` date NOT NULL,
  `v_emission_valid` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `add_vehicle`
--

INSERT INTO `add_vehicle` (`v_id`, `vehicle_type`, `v_reg_no`, `v_insurance_no`, `v_insurance_valid`, `v_emission_valid`) VALUES
(2, 'Car', 'KA 19 MD 9876', 'ththbh', '2024-11-08', '2024-11-19'),
(3, 'Bus', 'KA 19 AE 1432', '54533fe4', '2024-11-13', '2024-11-20'),
(4, 'Bus', 'KA 19 AA 1143\r\n', 'ds9027918ws', '2024-11-21', '2024-11-13'),
(5, 'Car', 'KA 19 MF 5834', 'ffgfdg3w22', '2024-11-27', '2024-11-08'),
(6, 'Bus', 'KA 19 A 5762', '6476434', '2024-11-11', '2024-11-16'),
(7, 'Bus', 'KA 19 D 9812', '6476434', '2024-11-11', '2024-11-16');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `add_vehicle`
--
ALTER TABLE `add_vehicle`
  ADD PRIMARY KEY (`v_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `add_vehicle`
--
ALTER TABLE `add_vehicle`
  MODIFY `v_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
