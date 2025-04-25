-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Apr 25, 2025 at 05:59 PM
-- Server version: 9.1.0
-- PHP Version: 8.3.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `php22`
--

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

DROP TABLE IF EXISTS `reviews`;
CREATE TABLE IF NOT EXISTS `reviews` (
  `id` int NOT NULL AUTO_INCREMENT,
  `food` varchar(100) NOT NULL,
  `rating` int NOT NULL,
  `feedback` text NOT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `reviews`
--

INSERT INTO `reviews` (`id`, `food`, `rating`, `feedback`, `created_at`) VALUES
(1, 'hj', 3, 'scsdfe', '2025-04-25 17:14:50'),
(2, 'hj', 3, 'scsdfe', '2025-04-25 17:16:16'),
(3, 'hj', 4, 'sadcfsd', '2025-04-25 17:16:44'),
(4, 'dhosa', 4, 'sdwefw', '2025-04-25 17:26:54');

-- --------------------------------------------------------

--
-- Table structure for table `signpu`
--

DROP TABLE IF EXISTS `signpu`;
CREATE TABLE IF NOT EXISTS `signpu` (
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `confirmPassword` varchar(100) NOT NULL,
  `id` int NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `signpu`
--

INSERT INTO `signpu` (`username`, `password`, `confirmPassword`, `id`) VALUES
('VTharshi5889', '$2y$10$oNfswvV/J9f0RyJqnsG8beeJ5NdS0tCdM0TuwKRnntHwm43C0Zz6C', '', 1),
('asb2022029', '$2y$10$nQ0uA7Eu4r0l13t1P7t0bOlkoZQ4Ltie3JMcFajvbG/W0FN10nOki', '', 2);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
