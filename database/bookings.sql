-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 19, 2024 at 06:34 AM
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
  `id` int(11) NOT NULL,
  `vehicle` varchar(255) NOT NULL,
  `travel_date` date NOT NULL,
  `purpose` text NOT NULL,
  `num_people` int(11) NOT NULL,
  `num_days` int(11) NOT NULL,
  `pickup_from` varchar(255) NOT NULL,
  `pickup_time` time NOT NULL,
  `drop_to` varchar(255) NOT NULL,
  `drop_time` time NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `booking_status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `bookings`
--

INSERT INTO `bookings` (`id`, `vehicle`, `travel_date`, `purpose`, `num_people`, `num_days`, `pickup_from`, `pickup_time`, `drop_to`, `drop_time`, `created_at`, `booking_status`) VALUES
(6, 'Car', '2024-11-21', 'c c ccc  c', 44, 0, 'eeee', '02:34:00', 'bddj', '04:37:00', '2024-11-12 06:54:45', ''),
(7, 'Tempo Traveller', '2024-11-25', 'mnsmnmsnmnsmmssns', 34, 0, 'sjec', '07:44:00', 'mangalore', '07:41:00', '2024-11-12 09:15:51', ''),
(8, 'Bus', '2024-11-13', 'kkkk', 99, 0, 'rkkjkjrk', '13:09:00', 'fffff', '18:08:00', '2024-11-14 07:34:13', ''),
(9, 'Bus', '2024-11-06', 'nbbbmmm', 88, 0, 'nnnn', '18:10:00', 'bddj', '18:13:00', '2024-11-14 07:38:08', ''),
(10, 'Bus', '2024-11-06', 'nbbbmmm', 88, 0, 'nnnn', '18:10:00', 'bddj', '18:13:00', '2024-11-14 07:38:14', ''),
(11, 'car', '2024-11-05', 'rrtrfert', 55, 0, 'bbcbbcb', '26:12:25', 'gfdgdg', '21:12:25', '2024-11-14 07:43:12', 'hod_approved'),
(12, 'Tempo Traveller', '2024-11-27', 'mmsnmnama', 45, 0, 'rrrr', '20:21:00', 'ffffff', '20:22:00', '2024-11-14 08:46:27', ''),
(13, 'Tempo Traveller', '2024-11-25', 'kjkekekek', 44, 0, 'kkekek', '15:55:00', 'nddkkd', '16:56:00', '2024-11-19 05:21:16', ''),
(14, 'Tempo Traveller', '2024-11-25', 'kjkekekek', 44, 0, 'kkekek', '15:55:00', 'nddkkd', '16:56:00', '2024-11-19 05:23:58', ''),
(15, 'Bus', '2024-11-25', 'kjkekekek', 100, 0, 'kkekek', '15:55:00', 'nddkkd', '16:56:00', '2024-11-19 05:24:19', ''),
(16, 'Car', '2024-11-25', 'nbdsnbnsds', 100, 0, 'nnnk', '15:55:00', 'mdmdmd', '15:00:00', '2024-11-19 05:25:59', ''),
(17, 'Car', '2024-11-26', 'nvvbvbvbvn', 5, 0, 'eeee', '15:03:00', 'mangalore', '16:05:00', '2024-11-19 05:30:51', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bookings`
--
ALTER TABLE `bookings`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`),
  ADD UNIQUE KEY `id_2` (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bookings`
--
ALTER TABLE `bookings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
