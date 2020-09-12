-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Sep 13, 2020 at 01:49 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `chitragupta`
--

-- --------------------------------------------------------

--
-- Table structure for table `dns_lookup`
--

CREATE TABLE `dns_lookup` (
  `id` int(11) NOT NULL,
  `subdomain` varchar(250) NOT NULL,
  `ip_address` varchar(1000) NOT NULL,
  `domain` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `dns_lookup`
--

INSERT INTO `dns_lookup` (`id`, `subdomain`, `ip_address`, `domain`) VALUES
(37, '11.baidu.com', '202.108.23.222,61.135.186.230', 1),
(38, '0.baidu.com', '111.206.223.136', 1),
(39, '123.baidu.com', '112.80.248.75,112.80.248.76', 1),
(40, '3g.baidu.com', '112.80.255.162,112.80.255.163', 1),
(41, '01.baidu.com', '153.37.235.93,61.135.185.20', 1),
(42, '8.baidu.com', '111.206.37.81,112.80.255.131, 61.135.186.244', 1),
(43, 'a.baidu.com', '112.80.248.124,123.125.114.38', 1),
(44, 'ab.baidu.com', '61.135.185.81,61.135.185.90', 1),
(45, 'abc.baidu.com', '112.80.248.75,112.80.248.76', 1),
(46, 'ac.baidu.com', '112.80.248.234,202.108.23.221', 1),
(47, 'act.baidu.com', '112.80.255.85,163.177.151.90, 202.106.2.65', 1),
(48, 'ad.baidu.com ', '182.61.62.50', 1),
(49, '11.baidu.com', '202.108.23.222,61.135.186.230', 1),
(50, '0.baidu.com', '111.206.223.136', 1),
(51, '123.baidu.com', '112.80.248.75,112.80.248.76', 1),
(52, '3g.baidu.com', '112.80.255.162,112.80.255.163', 1),
(53, '01.baidu.com', '153.37.235.93,61.135.185.20', 1),
(54, '8.baidu.com', '111.206.37.81,112.80.255.131, 61.135.186.244', 1),
(55, 'a.baidu.com', '112.80.248.124,123.125.114.38', 1),
(56, 'ab.baidu.com', '61.135.185.81,61.135.185.90', 1),
(57, 'abc.baidu.com', '112.80.248.75,112.80.248.76', 1),
(58, 'ac.baidu.com', '112.80.248.234,202.108.23.221', 1),
(59, 'act.baidu.com', '112.80.255.85,163.177.151.90, 202.106.2.65', 1),
(60, 'ad.baidu.com ', '182.61.62.50', 1),
(61, '11.baidu.com', '202.108.23.222,61.135.186.230', 1),
(62, '0.baidu.com', '111.206.223.136', 1),
(63, '123.baidu.com', '112.80.248.75,112.80.248.76', 1),
(64, '3g.baidu.com', '112.80.255.162,112.80.255.163', 1),
(65, '01.baidu.com', '153.37.235.93,61.135.185.20', 1),
(66, '8.baidu.com', '111.206.37.81,112.80.255.131, 61.135.186.244', 1),
(67, 'a.baidu.com', '112.80.248.124,123.125.114.38', 1),
(68, 'ab.baidu.com', '61.135.185.81,61.135.185.90', 1),
(69, 'abc.baidu.com', '112.80.248.75,112.80.248.76', 1),
(70, 'ac.baidu.com', '112.80.248.234,202.108.23.221', 1),
(71, 'act.baidu.com', '112.80.255.85,163.177.151.90, 202.106.2.65', 1),
(72, 'ad.baidu.com ', '182.61.62.50', 1),
(73, '11.baidu.com', '202.108.23.222,61.135.186.230', 2),
(74, '0.baidu.com', '111.206.223.136', 2),
(75, '123.baidu.com', '112.80.248.75,112.80.248.76', 2),
(76, '3g.baidu.com', '112.80.255.162,112.80.255.163', 2),
(77, '01.baidu.com', '153.37.235.93,61.135.185.20', 2),
(78, '8.baidu.com', '111.206.37.81,112.80.255.131, 61.135.186.244', 2),
(79, 'a.baidu.com', '112.80.248.124,123.125.114.38', 2),
(80, 'ab.baidu.com', '61.135.185.81,61.135.185.90', 2),
(81, 'abc.baidu.com', '112.80.248.75,112.80.248.76', 2),
(82, 'ac.baidu.com', '112.80.248.234,202.108.23.221', 2),
(83, 'act.baidu.com', '112.80.255.85,163.177.151.90, 202.106.2.65', 2),
(84, 'ad.baidu.com ', '182.61.62.50', 2);

-- --------------------------------------------------------

--
-- Table structure for table `domains`
--

CREATE TABLE `domains` (
  `id` int(11) NOT NULL,
  `name` varchar(250) NOT NULL,
  `isDeleted` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `domains`
--

INSERT INTO `domains` (`id`, `name`, `isDeleted`) VALUES
(1, 'baidu.com', 0),
(2, 'baidu1.com', 0),
(3, 'google.com', 1),
(4, 'bing.com', 1),
(5, 'wel.com', 1),
(6, 'google.com', 1),
(7, 'g', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dns_lookup`
--
ALTER TABLE `dns_lookup`
  ADD PRIMARY KEY (`id`),
  ADD KEY `domain` (`domain`);

--
-- Indexes for table `domains`
--
ALTER TABLE `domains`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `dns_lookup`
--
ALTER TABLE `dns_lookup`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=85;

--
-- AUTO_INCREMENT for table `domains`
--
ALTER TABLE `domains`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `dns_lookup`
--
ALTER TABLE `dns_lookup`
  ADD CONSTRAINT `domain` FOREIGN KEY (`domain`) REFERENCES `domains` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
