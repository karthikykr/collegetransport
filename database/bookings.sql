-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 14, 2024 at 04:54 PM
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
-- Table structure for table `bookings`
--

CREATE TABLE `bookings` (
  `id` int(50) NOT NULL,
  `vehicle` varchar(255) NOT NULL,
  `travel_date` date NOT NULL,
  `purpose` text NOT NULL,
  `num_people` int(11) NOT NULL,
  `num_days` int(50) NOT NULL,
  `pickup_from` varchar(255) NOT NULL,
  `pickup_time` time NOT NULL,
  `drop_to` varchar(255) NOT NULL,
  `drop_time` time NOT NULL,
  `booking_status` varchar(250) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `bookings`
--

INSERT INTO `bookings` (`id`, `vehicle`, `travel_date`, `purpose`, `num_people`, `num_days`, `pickup_from`, `pickup_time`, `drop_to`, `drop_time`, `booking_status`, `user_id`, `created_at`) VALUES
(1, 'Car', '2024-11-21', 'c c ccc  c', 44, 0, 'eeee', '02:34:00', 'bddj', '04:37:00', '', NULL, '2024-11-12 06:54:45'),
(2, 'Tempo Traveller', '2024-11-25', 'mnsmnmsnmnsmmssns', 34, 0, 'sjec', '07:44:00', 'mangalore', '07:41:00', 'hod_approved', NULL, '2024-11-12 09:15:51'),
(3, 'Car', '2024-11-18', 'grvb', 4, 0, 'hfhgdhd', '13:09:00', 'rrgfbgfg', '00:12:00', 'a_d_approved', 2, '2024-11-13 04:40:28'),
(4, 'Bus', '2024-11-13', 'dghbnbn gfnh', 5, 0, 'zfbb', '22:55:00', 'ncbvnb ', '14:55:00', '', NULL, '2024-11-19 05:22:54'),
(5, 'Bus', '2024-11-30', '4rfegdffdgf', 4, 3, 'zfbb', '08:33:00', 'rrgfbgfg', '20:33:00', 'hod_approved', NULL, '2024-11-24 03:33:13'),
(6, 'Bus', '2024-11-30', '4rfegdffdgf', 4, 3, 'zfbb', '08:33:00', 'rrgfbgfg', '20:33:00', 'hod_approved', NULL, '2024-11-24 03:33:52'),
(7, 'Car', '2024-11-30', '4rfegdffdgf', 4, 3, 'zfbb', '08:33:00', 'rrgfbgfg', '20:33:00', 'hod_approved', NULL, '2024-11-24 03:48:45'),
(10, 'Car', '2024-11-12', 'eghhfgfgg', 10, 10, 'jkhjk', '21:54:00', 'rrgfbgfg', '21:55:00', 'pending', NULL, '2024-11-25 16:20:39'),
(11, 'Car', '2024-11-14', 'dsfgdgfgfgfg', 10, 10, 'hfhgdhd', '13:53:00', 'ncbvnb ', '21:59:00', 'p_approved', 2, '2024-11-25 16:23:58'),
(12, 'Car', '2024-12-17', 'hjefjjjs', 100, 1, 'sjec', '09:54:00', 'mangalore', '12:50:00', '', 5, '2024-12-03 10:19:36'),
(13, 'Bus', '2024-12-23', 'aaadaaddddad', 100, 1, 'sjec', '22:58:00', 'mangalore', '21:58:00', 'hod_approved', 6, '2024-12-03 10:22:39'),
(14, 'Tempo Traveller', '2024-12-16', 'klj', 88, 1, 'gg', '08:37:00', 'ii', '08:33:00', 'p_rejected', 5, '2024-12-05 10:03:32'),
(15, 'Bus', '2024-12-13', 'nothing', 49, 4, 'kochi', '17:56:00', 'ddddd', '15:56:00', 'p_approved', 9, '2024-12-12 09:27:24'),
(16, 'Tempo Traveller', '2024-12-08', 'ssss', 22, 33, 'wwwww', '03:22:00', 'www', '03:21:00', 'hod_approved', 5, '2024-12-12 09:48:36'),
(17, 'Bus', '2024-12-17', 'egssjhsjshjsjhsjhs', 100, 2, 'sjec', '09:17:00', 'mangalore', '11:19:00', 'pending', 5, '2024-12-13 12:45:15');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bookings`
--
ALTER TABLE `bookings`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_user_id` (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bookings`
--
ALTER TABLE `bookings`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `bookings`
--
ALTER TABLE `bookings`
  ADD CONSTRAINT `fk_user_id` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
