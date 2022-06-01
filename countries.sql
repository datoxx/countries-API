-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jun 01, 2022 at 11:35 PM
-- Server version: 8.0.29-0ubuntu0.22.04.2
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `countries`
--

-- --------------------------------------------------------

--
-- Table structure for table `country`
--

CREATE TABLE `country` (
  `id` int NOT NULL,
  `name` varchar(512) COLLATE utf8mb4_unicode_ci NOT NULL,
  `capital` varchar(512) COLLATE utf8mb4_unicode_ci NOT NULL,
  `population` bigint NOT NULL,
  `region` varchar(512) COLLATE utf8mb4_unicode_ci NOT NULL,
  `currencies` varchar(512) COLLATE utf8mb4_unicode_ci NOT NULL,
  `languages` varchar(512) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(2048) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sub_region` varchar(512) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `create_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `country`
--

INSERT INTO `country` (`id`, `name`, `capital`, `population`, `region`, `currencies`, `languages`, `image`, `sub_region`, `create_date`) VALUES
(8, 'Georgia', 'Tbilisi', 3714000, 'Asia', 'lari', 'Georgian', 'images/ge.svg', 'Western Asia', '2022-05-28 21:28:38'),
(9, 'Germany', 'Berlin', 83240525, 'Europe', 'Euro', 'German', 'images/de.svg', 'Western Europe', '2022-05-28 21:28:48'),
(11, 'Italy', 'Rome', 59554023, 'Europe', 'Euro', 'Italian', 'images/it.svg', 'Southern Europe', '2022-05-29 12:39:59'),
(12, 'China', 'Beijing', 1402112000, 'Asia', 'Chinese yuan', 'Chinese', 'images/cn.svg', 'Eastern Asia', '2022-05-29 13:03:06'),
(13, 'Ukraine', 'Kyiv', 44134693, 'Europe', 'Ukrainian hryvnia', 'Ukrainian', 'images/ua.svg', 'Eastern Europe', '2022-05-29 20:00:15'),
(14, 'Cuba', 'Havana', 11326616, 'Americas', 'Cuban convertible peso', 'Spanish', 'images/cu.svg', 'Caribbean', '2022-05-29 20:12:50'),
(16, 'Russia', 'Moscow', 144104080, 'Europe', 'Russian ruble', 'Russian', 'images/ru.svg', 'Eastern Europe', '2022-05-29 22:00:56'),
(17, 'Austria', 'Vienna', 8917205, 'Europe', 'Euro', 'Austro-Bavarian German', 'images/at.svg', 'Central Europe', '2022-05-29 22:22:57'),
(18, 'Qatar', 'Doha', 2881060, 'Asia', 'Qatari riyal', 'Arabic', 'images/qa.svg', 'Western Asia', '2022-05-30 17:12:47'),
(19, 'Australia', 'Canberra', 25687041, 'Oceania', 'Australian dollar', 'English', 'images/au.svg', 'Australia and New Zealand', '2022-05-30 21:12:20'),
(20, 'Mexico', 'Mexico City', 128932753, 'Americas', 'Mexican peso', 'Spanish', 'images/mx.svg', 'North America', '2022-05-30 21:13:47');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `country`
--
ALTER TABLE `country`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `country`
--
ALTER TABLE `country`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
