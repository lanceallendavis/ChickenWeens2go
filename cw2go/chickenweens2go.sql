-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 25, 2019 at 09:06 AM
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
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `ID` int(32) UNSIGNED NOT NULL,
  `user_ID` int(16) UNSIGNED NOT NULL,
  `product_ID` int(16) UNSIGNED NOT NULL,
  `quantity` int(8) UNSIGNED NOT NULL DEFAULT '1',
  `added_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `locations`
--

CREATE TABLE `locations` (
  `ID` int(16) UNSIGNED NOT NULL,
  `city` varchar(128) NOT NULL,
  `distance` double DEFAULT NULL,
  `estimated_fee` double NOT NULL,
  `added_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `locations`
--

INSERT INTO `locations` (`ID`, `city`, `distance`, `estimated_fee`, `added_at`) VALUES
(1, 'Manila', 13, 130, '2019-03-25 06:12:22');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `ID` int(16) NOT NULL,
  `user_ID` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `status` varchar(11) NOT NULL,
  `mode_of_payment` varchar(32) NOT NULL,
  `delivery_address` varchar(128) NOT NULL,
  `placed_at` timestamp NULL DEFAULT NULL,
  `accepted_at` datetime DEFAULT NULL,
  `declined_at` datetime DEFAULT NULL,
  `delivered_at` datetime DEFAULT NULL,
  `cancelled_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`ID`, `user_ID`, `total`, `status`, `mode_of_payment`, `delivery_address`, `placed_at`, `accepted_at`, `declined_at`, `delivered_at`, `cancelled_at`) VALUES
(1, 20, 1235, 'pending', 'Cash On Delivery', 'Manila', '2019-03-25 08:03:50', NULL, NULL, NULL, NULL),
(2, 20, 325, 'pending', 'Cash On Delivery', 'Manila', '2019-03-25 08:04:27', NULL, NULL, NULL, NULL);

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

--
-- Dumping data for table `order_details`
--

INSERT INTO `order_details` (`ID`, `order_ID`, `product_ID`, `quantity`, `subtotal`) VALUES
(1, 1, 45, 1, 65),
(2, 1, 44, 8, 1040),
(3, 2, 45, 1, 65),
(4, 2, 44, 1, 130);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `ID` int(8) UNSIGNED NOT NULL,
  `name` varchar(32) NOT NULL,
  `type` varchar(16) DEFAULT NULL,
  `pieces` varchar(16) NOT NULL,
  `description` varchar(256) NOT NULL,
  `price` int(8) NOT NULL,
  `product_image` varchar(256) NOT NULL,
  `availability` tinyint(1) NOT NULL DEFAULT '1',
  `added_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`ID`, `name`, `type`, `pieces`, `description`, `price`, `product_image`, `availability`, `added_at`) VALUES
(44, 'Spicy Wings', 'Food', '', 'Spicy AF', 130, 'Buffalo.jpg', 1, '2019-03-12 18:44:25'),
(45, 'Fries', 'Food', '', 'BBQ', 65, 'Wings only logo .png', 1, '2019-03-12 18:45:05'),
(46, 'sddz', 'dzsdszd', '', 'zsdzsd', 0, 'sparda.png', 1, '2019-03-23 08:50:39');

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
  `city` varchar(32) NOT NULL,
  `password` varchar(64) NOT NULL,
  `profile_photo` varchar(256) NOT NULL,
  `registered_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`ID`, `role`, `username`, `first_name`, `last_name`, `email`, `address`, `city`, `password`, `profile_photo`, `registered_at`) VALUES
(15, 'admin', 'yaboyLA', 'LA', 'Davis', 'dlanceallen@gmail.com', 'LPC', '', '6c7ca345f63f835cb353ff15bd6c5e052ec08e7a', '', '2019-02-25 08:59:41'),
(16, 'user', 'lably', 'lably', 'endozo', 'lab@gmail.com', 'munti', '', 'b3daa77b4c04a9551b8781d03191fe098f325e67', 'lady.jpeg', '2019-03-13 01:57:25'),
(17, 'user', 'lada', 'LA', 'Davis', 'lada@gmail.com', 'lpc', '', 'b3daa77b4c04a9551b8781d03191fe098f325e67', 'IMG_5695.jpg', '2019-03-13 12:19:45'),
(18, 'user', 'qwe', 'qwe', 'qwe', 'qwe@gmail.com', 'qwe', '', '056eafe7cf52220de2df36845b8ed170c67e23e3', 'sparda.png', '2019-03-23 09:12:27'),
(19, 'user', 'abel', 'Abel', 'Weeknd', 'abel@gmail.com', 'LPC', '', '270ccadd491759f6149d7c6344907790b31eec91', 'sparda.png', '2019-03-24 14:35:57'),
(20, 'user', 'user', 'user', 'user', 'user@gmail.com', 'Ermita', 'Manila', '12dea96fec20593566ab75692c9949596833adc9', '', '2019-03-25 06:12:09');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `locations`
--
ALTER TABLE `locations`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
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
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `ID` int(32) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `locations`
--
ALTER TABLE `locations`
  MODIFY `ID` int(16) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `ID` int(16) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `order_details`
--
ALTER TABLE `order_details`
  MODIFY `ID` int(32) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `ID` int(8) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `ID` int(16) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
