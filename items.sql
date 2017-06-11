-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jun 08, 2017 at 08:38 PM
-- Server version: 5.6.35
-- PHP Version: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sddesig2_nufro-idm232`
--

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE `items` (
  `id` int(11) NOT NULL,
  `itemImg` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `itemTitle` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `itemCost` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`id`, `itemImg`, `itemTitle`, `itemCost`) VALUES
(1, 'images/1.jpg', 'White & Denim', '$50.00'),
(2, 'images/2.jpg', 'Black & Denim\r\n', '$50.00'),
(3, 'images/3.jpg', 'Black & Yellow Raincoat', '$60.00'),
(4, 'images/4.jpg', 'Yellow Poppin Jacket', '$55.00'),
(5, 'images/5.jpg', 'White & Yellow Raincoat', '$60.00'),
(6, 'images/6.jpg', 'Bleached Denim', '$55.00'),
(7, 'images/7.jpg', 'Deep Blue Denim', '$55.00'),
(8, 'images/8.jpg', 'Black & Yellow Poppin Jacket', '$50.00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `items`
--
ALTER TABLE `items`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
