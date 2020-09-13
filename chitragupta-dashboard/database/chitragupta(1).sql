-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Sep 13, 2020 at 01:01 PM
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
  `ip_address` varchar(1000) DEFAULT '',
  `domain` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `dns_lookup`
--

INSERT INTO `dns_lookup` (`id`, `subdomain`, `ip_address`, `domain`) VALUES
(8618, 'mail.baidu1.com', '', 8113),
(8619, ' webdisk.baidu1.com', '', 8113),
(8620, ' webmail.baidu1.com', '', 8113),
(8621, ' baidu1.com', '', 8113),
(8622, ' www.baidu1.com', '', 8113),
(8623, ' cpanel.baidu1.com', '', 8113),
(8624, 'cpcontacts.spring360.in', '', 8114),
(8625, ' webdisk.spring360.in', '', 8114),
(8626, ' ndkolar.spring360.in', '', 8114),
(8627, ' cpanel.spring360.in', '', 8114),
(8628, ' mail.spring360.in', '', 8114),
(8629, ' www.spring360.in', '', 8114),
(8630, ' www.ndkolar.spring360.in', '', 8114),
(8631, ' spring360.in', '', 8114),
(8632, ' www.ndekolar.spring360.in', '', 8114),
(8633, ' ndekolar.spring360.in', '', 8114),
(8634, ' cpcalendars.spring360.in', '', 8114),
(8635, ' webmail.spring360.in', '', 8114);

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
(8113, 'baidu1.com', 0),
(8114, 'spring360.in', 0);

-- --------------------------------------------------------

--
-- Table structure for table `ip_table`
--

CREATE TABLE `ip_table` (
  `id` int(11) NOT NULL,
  `domain` int(11) NOT NULL,
  `subdomain` int(11) NOT NULL,
  `value` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ip_table`
--

INSERT INTO `ip_table` (`id`, `domain`, `subdomain`, `value`) VALUES
(2531, 8113, 8619, 'www.webdisk.baidu1.com'),
(2532, 8113, 8621, 'www.baidu1.com'),
(2533, 8113, 8620, 'www.webmail.baidu1.com'),
(2535, 8114, 8624, 'www.cpcontacts.spring360.in'),
(2536, 8114, 8625, 'www.webdisk.spring360.in'),
(2537, 8114, 8626, 'www.ndkolar.spring360.in'),
(2538, 8114, 8627, 'www.cpanel.spring360.in'),
(2539, 8114, 8628, 'www.mail.spring360.in'),
(2540, 8114, 8630, 'www.www.ndkolar.spring360.in'),
(2541, 8114, 8631, '194.59.164.76'),
(2542, 8114, 8629, 'www.www.spring360.in'),
(2543, 8114, 8632, 'www.www.ndekolar.spring360.in'),
(2544, 8114, 8633, 'www.ndekolar.spring360.in'),
(2545, 8114, 8634, 'www.cpcalendars.spring360.in'),
(2546, 8114, 8635, 'www.webmail.spring360.in'),
(2547, 8113, 8622, 'www.www.baidu1.com'),
(2548, 8113, 8618, 'www.mail.baidu1.com'),
(2549, 8113, 8618, 'www.mail.baidu1.com'),
(2550, 8113, 8622, 'www.www.baidu1.com'),
(2551, 8113, 8623, 'www.cpanel.baidu1.com'),
(2552, 8113, 8623, 'www.cpanel.baidu1.com');

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
-- Indexes for table `ip_table`
--
ALTER TABLE `ip_table`
  ADD PRIMARY KEY (`id`),
  ADD KEY `domain_map` (`domain`),
  ADD KEY `subdomain_map` (`subdomain`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `dns_lookup`
--
ALTER TABLE `dns_lookup`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8636;

--
-- AUTO_INCREMENT for table `domains`
--
ALTER TABLE `domains`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8116;

--
-- AUTO_INCREMENT for table `ip_table`
--
ALTER TABLE `ip_table`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2553;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `dns_lookup`
--
ALTER TABLE `dns_lookup`
  ADD CONSTRAINT `domain` FOREIGN KEY (`domain`) REFERENCES `domains` (`id`);

--
-- Constraints for table `ip_table`
--
ALTER TABLE `ip_table`
  ADD CONSTRAINT `domain_map` FOREIGN KEY (`domain`) REFERENCES `domains` (`id`),
  ADD CONSTRAINT `subdomain_map` FOREIGN KEY (`subdomain`) REFERENCES `dns_lookup` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
