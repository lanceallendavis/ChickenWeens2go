-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 02, 2019 at 02:49 PM
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
(1, 'Manila', 13, 130, '2019-03-25 06:12:22'),
(2, 'Munti', 20, 200, '2019-03-29 05:39:10');

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
(28, 22, 448, 'accepted', 'Cash On Delivery', 'Manila', '2019-04-01 21:36:14', '2019-04-02 05:36:30', NULL, NULL, NULL),
(29, 22, 318, 'accepted', 'Cash On Pick-Up', '', '2019-04-01 21:41:04', '2019-04-02 05:41:52', NULL, NULL, NULL),
(30, 22, 318, 'accepted', 'Cash On Pick-Up', '', '2019-04-01 21:43:10', '2019-04-02 05:44:46', NULL, NULL, NULL),
(31, 22, 808, 'accepted', 'Cash On Pick-Up', '', '2019-04-02 06:01:05', '2019-04-02 14:02:00', NULL, NULL, NULL),
(32, 22, 2716, 'delivered', 'Cash On Pick-Up', '', '2019-04-02 06:04:12', '2019-04-02 14:04:36', NULL, '2019-04-02 14:05:01', NULL),
(33, 22, 1590, 'accepted', 'Cash On Pick-Up', '', '2019-04-02 06:10:54', '2019-04-02 14:11:29', NULL, NULL, NULL),
(34, 22, 2557, 'accepted', 'Cash On Pick-Up', '', '2019-04-02 06:57:42', '2019-04-02 14:58:22', NULL, NULL, NULL),
(35, 22, 196, 'accepted', 'Cash On Pick-Up', '', '2019-04-02 09:39:54', '2019-04-02 17:41:30', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `order_details`
--

CREATE TABLE `order_details` (
  `ID` int(32) NOT NULL,
  `order_ID` int(32) NOT NULL,
  `product_ID` int(32) NOT NULL,
  `quantity` int(16) NOT NULL,
  `subtotal` int(16) NOT NULL,
  `stock_deduction` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `order_details`
--

INSERT INTO `order_details` (`ID`, `order_ID`, `product_ID`, `quantity`, `subtotal`, `stock_deduction`) VALUES
(39, 22, 57, 4, 636, 48),
(40, 22, 58, 6, 954, 6),
(41, 22, 59, 5, 245, 5),
(42, 23, 58, 8, 1272, 8),
(43, 23, 59, 7, 343, 7),
(44, 24, 57, 2, 318, 24),
(45, 25, 57, 2, 318, 24),
(46, 26, 57, 2, 318, 24),
(47, 27, 57, 2, 318, 24),
(48, 28, 57, 2, 318, 24),
(49, 29, 57, 2, 318, 24),
(50, 30, 57, 2, 318, 24),
(51, 31, 57, 2, 318, 24),
(52, 31, 59, 10, 294, 10),
(53, 32, 57, 6, 954, 72),
(54, 32, 58, 8, 1272, 8),
(55, 32, 59, 10, 490, 10),
(56, 33, 57, 10, 1590, 120),
(57, 34, 57, 7, 1113, 84),
(58, 34, 58, 6, 954, 6),
(59, 34, 59, 10, 294, 10),
(60, 35, 59, 4, 196, 4);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `ID` int(8) UNSIGNED NOT NULL,
  `name` varchar(32) NOT NULL,
  `stock_name` varchar(16) DEFAULT NULL,
  `pieces` varchar(16) NOT NULL,
  `description` varchar(256) NOT NULL,
  `price` int(8) NOT NULL,
  `product_image` varchar(256) NOT NULL,
  `availability` tinyint(1) NOT NULL DEFAULT '1',
  `added_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `stock` int(8) NOT NULL,
  `demand` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`ID`, `name`, `stock_name`, `pieces`, `description`, `price`, `product_image`, `availability`, `added_at`, `stock`, `demand`) VALUES
(57, 'Spicy Wings', 'Chicken', '12', 'Spicy AF', 159, 'Buffalo.jpg', 1, '2019-04-01 20:32:56', 0, 0),
(58, 'Spicy Tenders', 'Tenders', '1', 'Spicy AF', 159, 'Wings only logo .png', 1, '2019-04-01 20:36:38', 0, 0),
(59, 'BBQ Fries', 'Fries', '1', 'Yummy Barbeque Flavored Fries', 49, 'Wings only logo .png', 1, '2019-04-01 20:33:45', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `stocks`
--

CREATE TABLE `stocks` (
  `ID` int(11) NOT NULL,
  `name` varchar(16) NOT NULL,
  `stock_count` int(11) NOT NULL,
  `demand_count` int(11) NOT NULL,
  `added_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `stocks`
--

INSERT INTO `stocks` (`ID`, `name`, `stock_count`, `demand_count`, `added_at`, `updated_at`) VALUES
(1, 'Chicken', 116, 200, '2019-04-01 14:31:26', '2019-04-02 06:54:18'),
(2, 'Fries', 186, 200, '2019-04-01 18:40:00', '2019-04-02 06:55:56'),
(3, 'Tenders', 194, 300, '2019-04-01 18:40:28', '2019-04-02 06:56:01');

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
(19, 'user', 'abel', 'Abel', 'Weeknd', 'abel@gmail.com', 'LPC', '', '270ccadd491759f6149d7c6344907790b31eec91', 'sparda.png', '2019-03-24 14:35:57'),
(22, 'user', 'lanceallendavis', 'LA', 'Davis', 'lanceallendavis@gmail.com', 'Manila', 'Manila', '12dea96fec20593566ab75692c9949596833adc9', 'sparda.png', '2019-03-30 14:08:58');

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
-- Indexes for table `stocks`
--
ALTER TABLE `stocks`
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
  MODIFY `ID` int(32) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `locations`
--
ALTER TABLE `locations`
  MODIFY `ID` int(16) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `ID` int(16) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `order_details`
--
ALTER TABLE `order_details`
  MODIFY `ID` int(32) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `ID` int(8) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;

--
-- AUTO_INCREMENT for table `stocks`
--
ALTER TABLE `stocks`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `ID` int(16) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
