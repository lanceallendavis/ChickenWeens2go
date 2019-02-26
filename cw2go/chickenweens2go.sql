-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 26, 2019 at 08:54 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `chickenweens2go`
--

-- --------------------------------------------------------

--
-- Table structure for table `bag`
--

CREATE TABLE `bag` (
  `ID` int(32) UNSIGNED NOT NULL,
  `user_ID` int(16) UNSIGNED NOT NULL,
  `product_ID` int(16) UNSIGNED NOT NULL,
  `quantity` int(8) UNSIGNED NOT NULL,
  `added_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `ID` int(11) NOT NULL,
  `user_ID` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `placed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `accepted_at` datetime DEFAULT NULL,
  `rejected_at` datetime DEFAULT NULL,
  `delivered_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `order_details`
--

CREATE TABLE `order_details` (
  `ID` int(32) NOT NULL,
  `order_ID` int(32) NOT NULL,
  `product_ID` int(32) NOT NULL,
  `quantity` int(16) NOT NULL,
  `subtotal` int(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `ID` int(8) UNSIGNED NOT NULL,
  `name` varchar(32) NOT NULL,
  `type` varchar(16) DEFAULT NULL,
  `description` varchar(256) NOT NULL,
  `price` int(8) NOT NULL,
  `availability` tinyint(1) NOT NULL DEFAULT '1',
  `added_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`ID`, `name`, `type`, `description`, `price`, `availability`, `added_at`) VALUES
(4, 'Spicy Wings', 'Food', 'Extra Hot', 130, 0, '2019-02-25 07:46:10'),
(5, 'Lemonade', 'Drink', 'Natural', 50, 1, '2019-02-25 09:02:00');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `ID` int(16) UNSIGNED NOT NULL,
  `role` varchar(8) NOT NULL DEFAULT 'user',
  `username` varchar(16) NOT NULL,
  `first_name` varchar(32) NOT NULL,
  `last_name` varchar(32) NOT NULL,
  `email` varchar(32) NOT NULL,
  `address` varchar(256) NOT NULL,
  `password` varchar(64) NOT NULL,
  `registered_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`ID`, `role`, `username`, `first_name`, `last_name`, `email`, `address`, `password`, `registered_at`) VALUES
(15, 'admin', 'yaboyLA', 'LA', 'Davis', 'dlanceallen@gmail.com', 'LPC', '6c7ca345f63f835cb353ff15bd6c5e052ec08e7a', '2019-02-25 08:59:41'),
(17, 'user', 'ram', 'Airam', 'Santos', 'mariamarchel@gmail.com', 'cavite', 'b3daa77b4c04a9551b8781d03191fe098f325e67', '2019-02-25 09:05:35');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bag`
--
ALTER TABLE `bag`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `order_details`
--
ALTER TABLE `order_details`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bag`
--
ALTER TABLE `bag`
  MODIFY `ID` int(32) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `order_details`
--
ALTER TABLE `order_details`
  MODIFY `ID` int(32) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `ID` int(8) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `ID` int(16) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
