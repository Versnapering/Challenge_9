-- phpMyAdmin SQL Dump
-- version 5.1.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: May 07, 2026 at 09:39 AM
-- Server version: 5.7.24
-- PHP Version: 8.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `challenge_9`
--

-- --------------------------------------------------------

--
-- Table structure for table `ticket`
--

CREATE TABLE `ticket` (
  `id` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `email` varchar(250) NOT NULL,
  `leeftijd` int(5) NOT NULL,
  `groep` varchar(15) NOT NULL,
  `datum` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `ticket`
--

INSERT INTO `ticket` (`id`, `username`, `email`, `leeftijd`, `groep`, `datum`) VALUES
(1, 'Luuk Guliker', 'luukgulikergeo@gmail.com', 19, 'volwassen', '2026-05-06 12:27:57'),
(2, 'Luuk Guliker', 'luukgulikergeo@gmail.com', 19, 'volwassen', '2026-05-06 12:28:00'),
(3, 'Luuk Guliker', 'luukgulikergeo@gmail.com', 19, 'volwassen', '2026-05-06 12:28:04'),
(4, 'Luuk Guliker', 'luukgulikergeo@gmail.com', 19, 'volwassen', '2026-05-06 12:28:06'),
(5, 'Luuk Guliker', 'luukgulikergeo@gmail.com', 19, 'volwassen', '2026-05-06 12:28:07'),
(6, 'Luuk Guliker', 'luukgulikergeo@gmail.com', 19, 'volwassen', '2026-05-06 12:28:10'),
(7, 'Luuk Guliker', 'luukgulikergeo@gmail.com', 19, 'volwassen', '2026-05-06 12:28:11'),
(8, 'Luuk Guliker', 'luukgulikergeo@gmail.com', 19, 'volwassen', '2026-05-06 12:28:12'),
(9, 'Luuk Guliker', 'luukgulikergeo@gmail.com', 19, 'volwassen', '2026-05-06 12:28:13'),
(10, 'Luuk Guliker', 'luukgulikergeo@gmail.com', 19, 'volwassen', '2026-05-06 12:28:14'),
(11, 'Luuk Guliker', 'luukgulikergeo@gmail.com', 19, 'volwassen', '2026-05-06 12:28:15'),
(12, 'Luuk Guliker', 'luukgulikergeo@gmail.com', 19, 'volwassen', '2026-05-06 12:28:16'),
(13, 'Luuk Guliker', 'luukgulikergeo@gmail.com', 19, 'volwassen', '2026-05-06 12:28:17'),
(14, 'Luuk Guliker', 'luukgulikergeo@gmail.com', 19, 'volwassen', '2026-05-06 12:28:18'),
(15, 'Luuk Guliker', 'luukgulikergeo@gmail.com', 19, 'volwassen', '2026-05-06 12:28:19'),
(16, 'Luuk Guliker', 'luukgulikergeo@gmail.com', 19, 'volwassen', '2026-05-06 12:28:21'),
(17, 'Luuk Guliker', 'luukgulikergeo@gmail.com', 19, 'volwassen', '2026-05-06 12:28:22'),
(18, 'Luuk Guliker', 'luukgulikergeo@gmail.com', 19, 'volwassen', '2026-05-06 12:28:23'),
(19, 'Luuk Guliker', 'luukgulikergeo@gmail.com', 19, 'volwassen', '2026-05-06 12:28:24'),
(20, 'Luuk Guliker', 'luukgulikergeo@gmail.com', 19, 'volwassen', '2026-05-06 12:28:25'),
(21, 'Luuk Guliker', 'luukgulikergeo@gmail.com', 19, 'volwassen', '2026-05-06 12:28:26'),
(22, 'Luuk Guliker', 'luukgulikergeo@gmail.com', 19, 'volwassen', '2026-05-06 12:28:28'),
(23, 'Luuk Guliker', 'luukgulikergeo@gmail.com', 19, 'volwassen', '2026-05-06 12:28:29'),
(24, 'Luuk Guliker', 'luukgulikergeo@gmail.com', 19, 'volwassen', '2026-05-06 12:28:30'),
(25, 'Luuk Guliker', 'luukgulikergeo@gmail.com', 19, 'volwassen', '2026-05-06 12:28:31'),
(26, 'Luuk Guliker', 'luukgulikergeo@gmail.com', 19, 'volwassen', '2026-05-06 12:28:32'),
(27, 'Luuk Guliker', 'luukgulikergeo@gmail.com', 19, 'volwassen', '2026-05-06 12:28:33'),
(28, 'Luuk Guliker', 'luukgulikergeo@gmail.com', 19, 'volwassen', '2026-05-06 12:28:34'),
(29, 'Luuk Guliker', 'luukgulikergeo@gmail.com', 19, 'volwassen', '2026-05-06 12:28:35'),
(30, 'Luuk Guliker', 'luukgulikergeo@gmail.com', 19, 'volwassen', '2026-05-06 12:28:36'),
(31, 'Luuk Guliker', 'luukgulikergeo@gmail.com', 19, 'volwassen', '2026-05-06 12:28:37'),
(32, 'Luuk Guliker', 'luukgulikergeo@gmail.com', 19, 'volwassen', '2026-05-06 12:28:38'),
(33, 'Luuk Guliker', 'luukgulikergeo@gmail.com', 19, 'volwassen', '2026-05-06 12:28:39'),
(34, 'Luuk Guliker', 'luukgulikergeo@gmail.com', 19, 'volwassen', '2026-05-06 12:28:40'),
(35, 'Luuk Guliker', 'luukgulikergeo@gmail.com', 19, 'volwassen', '2026-05-06 12:28:41'),
(36, 'Luuk Guliker', 'luukgulikergeo@gmail.com', 19, 'volwassen', '2026-05-06 12:28:42'),
(37, 'Luuk Guliker', 'luukgulikergeo@gmail.com', 19, 'volwassen', '2026-05-06 12:28:43'),
(38, 'Luuk Guliker', 'luukgulikergeo@gmail.com', 19, 'volwassen', '2026-05-06 12:28:45'),
(39, 'Luuk Guliker', 'luukgulikergeo@gmail.com', 19, 'volwassen', '2026-05-06 12:28:46'),
(40, 'Luuk Guliker', 'luukgulikergeo@gmail.com', 19, 'volwassen', '2026-05-06 12:28:47'),
(41, 'Luuk Guliker', 'luukgulikergeo@gmail.com', 19, 'volwassen', '2026-05-06 12:28:48'),
(42, 'Luuk Guliker', 'luukgulikergeo@gmail.com', 19, 'volwassen', '2026-05-06 12:28:49'),
(43, 'Luuk Guliker', 'luukgulikergeo@gmail.com', 19, 'volwassen', '2026-05-06 12:28:50'),
(44, 'Luuk Guliker', 'luukgulikergeo@gmail.com', 19, 'volwassen', '2026-05-06 12:28:51'),
(45, 'Luuk Guliker', 'luukgulikergeo@gmail.com', 19, 'volwassen', '2026-05-06 12:28:52'),
(46, 'Luuk Guliker', 'luukgulikergeo@gmail.com', 19, 'volwassen', '2026-05-06 12:28:53'),
(47, 'Luuk Guliker', 'luukgulikergeo@gmail.com', 19, 'volwassen', '2026-05-06 12:28:54'),
(48, 'Luuk Guliker', 'luukgulikergeo@gmail.com', 19, 'volwassen', '2026-05-06 12:28:55'),
(49, 'Luuk Guliker', 'luukgulikergeo@gmail.com', 19, 'volwassen', '2026-05-06 12:28:56'),
(50, 'Luuk Guliker', 'luukgulikergeo@gmail.com', 19, 'volwassen', '2026-05-06 12:28:57'),
(51, 'Luuk Guliker', 'luukgulikergeo@gmail.com', 19, 'volwassen', '2026-05-06 12:28:58'),
(52, 'Luuk Guliker', 'luukgulikergeo@gmail.com', 19, 'volwassen', '2026-05-06 12:28:59'),
(53, 'Luuk Guliker', 'luukgulikergeo@gmail.com', 19, 'volwassen', '2026-05-06 12:29:00'),
(54, 'Luuk Guliker', 'luukgulikergeo@gmail.com', 19, 'volwassen', '2026-05-06 12:29:01'),
(55, 'Luuk Guliker', 'luukgulikergeo@gmail.com', 19, 'volwassen', '2026-05-06 12:29:02'),
(56, 'Luuk Guliker', 'luukgulikergeo@gmail.com', 19, 'volwassen', '2026-05-06 12:29:03'),
(57, 'Luuk Guliker', 'luukgulikergeo@gmail.com', 19, 'volwassen', '2026-05-06 12:29:04'),
(58, 'Luuk Guliker', 'luukgulikergeo@gmail.com', 19, 'volwassen', '2026-05-06 12:29:05'),
(59, 'Luuk Guliker', 'luukgulikergeo@gmail.com', 19, 'volwassen', '2026-05-06 12:29:07'),
(60, 'Luuk Guliker', 'luukgulikergeo@gmail.com', 19, 'volwassen', '2026-05-06 12:29:08'),
(61, 'Luuk Guliker', 'luukgulikergeo@gmail.com', 19, 'volwassen', '2026-05-06 12:29:09'),
(62, 'Harry', 'luukgulikergeo@gmail.com', 19, 'volwassen', '2026-05-07 07:33:49'),
(63, 'Paph', 'luukgulikergeo@gmail.com', 22, 'volwassen', '2026-05-07 08:40:24'),
(64, 'Mike', 'luukgulikergeo@gmail.com', 28, 'volwassen', '2026-05-07 08:54:14');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ticket`
--
ALTER TABLE `ticket`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ticket`
--
ALTER TABLE `ticket`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
