-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 23, 2024 at 01:05 PM
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
-- Database: `lastprojectdatabase`
--

-- --------------------------------------------------------

--
-- Table structure for table `feedbacks`
--

CREATE TABLE `feedbacks` (
  `id` int(6) UNSIGNED NOT NULL,
  `feedbackerName` varchar(50) NOT NULL,
  `feedbackerEmail` varchar(50) NOT NULL,
  `feedbackDescription` text DEFAULT NULL,
  `feedbackForProductCode` varchar(15) NOT NULL,
  `reg_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `productCode` varchar(15) NOT NULL,
  `productName` varchar(70) NOT NULL,
  `productCategory` varchar(50) NOT NULL,
  `productGender` varchar(6) NOT NULL,
  `productBrand` varchar(50) NOT NULL,
  `productDescription` text DEFAULT NULL,
  `productSpecification` varchar(10) DEFAULT NULL,
  `buyPrice` decimal(10,2) NOT NULL,
  `productAvailability` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`productCode`, `productName`, `productCategory`, `productGender`, `productBrand`, `productDescription`, `productSpecification`, `buyPrice`, `productAvailability`) VALUES
('1', 'Test Bag 1.0', 'TEST', 'Unisex', 'SAMPLE', 'Test Product 1.0, test sample', 'None', 999999.00, 1),
('2', 'Test Bag 2.0', 'TEST', 'Unisex', 'SAMPLE', 'Test Product 2.0, test sample 2', 'None', 88888.00, 1),
('3', 'Test Bag 3.0', 'TEST', 'Unisex', 'SAMPLE', 'Test Product 3.0, test sample 3', 'None', 7777.00, 1),
('4', 'Test Bag 4.0', 'TEST4', 'Male', 'SAMPLE4', 'Test Product 4.0, test sample 4', 'None', 666.00, 1),
('5', 'Test Bag 5.0', 'TEST5', 'Female', 'SAMPLE5', 'Test Product 5.0, test sample 5', 'yes', 55.00, 1),
('6', 'Test Bag 6.0', 'TEST6', 'Female', 'SAMPLE6', 'Test Product 6.0, test sample 6', 'no', 4.00, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `feedbacks`
--
ALTER TABLE `feedbacks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`productCode`),
  ADD UNIQUE KEY `productCode` (`productCode`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `feedbacks`
--
ALTER TABLE `feedbacks`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
