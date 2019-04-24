-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 24, 2019 at 04:22 PM
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

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`ID`, `user_ID`, `product_ID`, `quantity`, `added_at`) VALUES
(11, 22, 58, 1, '2019-04-04 15:13:58');

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
(2, 'Muntinlupa', 20, 200, '2019-04-05 01:34:11'),
(4, 'Cavite', 28, 270, '2019-04-05 01:31:12'),
(5, 'Rizal', 20, 190, '2019-04-05 01:33:16'),
(6, 'Laguna', 34, 335, '2019-04-05 01:33:59'),
(7, 'Makati', 2, 20, '2019-04-05 01:34:33'),
(8, 'Las Piñas', 14, 135, '2019-04-05 01:35:06'),
(9, 'Malabon', 15, 145, '2019-04-05 01:35:28'),
(10, 'Marikina', 10, 108, '2019-04-05 01:35:56'),
(11, 'Navotas', 13, 130, '2019-04-05 01:36:17'),
(12, 'Parañaque', 11, 111, '2019-04-05 01:36:36'),
(13, 'Pasay', 6, 55, '2019-04-05 01:36:55'),
(14, 'Pasig', 5, 50, '2019-04-05 01:37:22'),
(15, 'Quezon City', 13, 130, '2019-04-05 01:37:47'),
(16, 'San Juan', 3, 30, '2019-04-05 01:38:05'),
(17, 'Taguig', 6, 60, '2019-04-05 01:38:22'),
(18, 'Valenzuela', 14, 140, '2019-04-05 01:38:40'),
(19, 'Mandaluyong', 3, 30, '2019-04-05 01:39:19');

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
  `city` varchar(16) NOT NULL,
  `delivery_address` varchar(128) NOT NULL,
  `placed_at` timestamp NULL DEFAULT NULL,
  `accepted_at` datetime DEFAULT NULL,
  `declined_at` datetime DEFAULT NULL,
  `delivered_at` datetime DEFAULT NULL,
  `cancelled_at` timestamp NULL DEFAULT NULL,
  `pick_up_time` varchar(16) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`ID`, `user_ID`, `total`, `status`, `mode_of_payment`, `city`, `delivery_address`, `placed_at`, `accepted_at`, `declined_at`, `delivered_at`, `cancelled_at`, `pick_up_time`) VALUES
(18, 30, 780, 'declined', 'Cash On Pick-Up', '', '', '2019-04-11 03:29:21', NULL, '2019-04-11 11:29:41', NULL, NULL, '1:00 PM'),
(19, 30, 1020, 'declined', 'Cash On Pick-Up', '', '', '2019-04-11 03:40:12', NULL, '2019-04-11 11:40:33', NULL, NULL, '1:00 PM');

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
(32, 18, 60, 2, 240, 10),
(33, 18, 61, 2, 300, 10),
(34, 18, 63, 2, 240, 10),
(35, 19, 60, 2, 240, 10),
(36, 19, 61, 2, 300, 10),
(37, 19, 63, 2, 240, 10),
(38, 19, 64, 2, 240, 10);

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
(60, 'Korean Barbeque Wings', 'Chicken', '5', 'Taste the sweet-spicy flavor wings of Korean Barbeque Wings!', 120, '1.jpg', 1, '2019-04-05 01:44:58', 0, 0),
(61, 'Honey Garlic Wings', 'Chicken', '5', 'Sweet spicy and garlicky chicken wings!', 150, '4.jpg', 1, '2019-04-05 01:46:00', 0, 0),
(62, 'Buffalo Wings', 'Chicken', '5', 'Inspired from the original new york buffalo wings!', 150, '2.jpg', 0, '2019-04-05 05:08:00', 0, 0),
(63, 'Buttered Soy Chicken Wings', 'Chicken', '5', 'Taste the magic that happens between butter and soy sauce!', 120, '6.jpg', 1, '2019-04-05 01:48:04', 0, 0),
(64, 'Chicken Parmesan Wings', 'Chicken', '5', 'Tender Wings topped with cheese! For people who don\'t like it spicy.', 120, '3.jpg', 1, '2019-04-05 01:49:43', 0, 0),
(65, 'Sriracha Chicken Wings', 'Chicken', '5', 'The ultimate hot and spicy chicken wings!', 150, '5.jpg', 1, '2019-04-05 01:50:32', 0, 0);

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
(1, 'Chicken', 25, 200, '2019-04-01 14:31:26', '2019-04-11 03:28:53'),
(3, 'Tenders', 270, 300, '2019-04-01 18:40:28', '2019-04-05 03:26:18');

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
(22, 'user', 'lanceallendavis', 'LA', 'Davis', 'lanceallendavis@gmail.com', 'Manila', 'Manila', '12dea96fec20593566ab75692c9949596833adc9', 'sparda.png', '2019-03-30 14:08:58'),
(24, 'user', 'Airam', 'Airam', 'Santos', 'santosairam.as@gmail.com', 'ARSC', 'Manila', '12dea96fec20593566ab75692c9949596833adc9', 'download.jpg', '2019-04-05 01:08:46'),
(25, 'user', 'Lably', 'Lovely', 'Endozo', 'ellaendozo457@gmail.com', 'Block 9 Lot 13 Arellano Str. Katarungan Village', 'Muntinlupa', 'b3daa77b4c04a9551b8781d03191fe098f325e67', 'download.jpg', '2019-04-05 03:17:11'),
(26, 'user', 'wtf', '123', '123', 'dasfd@gmail.com', 'sdasd', 'Manila', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', '', '2019-04-05 03:44:51'),
(27, 'user', 'user', 'sample', 'sample', 'lanceallendavis@gmail.com', 'sample street', 'Manila', '12dea96fec20593566ab75692c9949596833adc9', 'IMG_5695.jpg', '2019-04-05 04:35:11'),
(28, 'user', 'username', 'sample', 'sample', 'lanceallendavis@gmail.com', 'sample street', 'Manila', '12dea96fec20593566ab75692c9949596833adc9', 'IMG_5695.jpg', '2019-04-05 04:36:12'),
(29, 'user', 'lance', 'lance', 'davis', 'lanceallendavis@gmail.com', 'Manila', 'Manila', '12dea96fec20593566ab75692c9949596833adc9', '', '2019-04-05 04:37:26'),
(30, 'user', 'someone', 'anyone', 'anyone', 'someone@gmail.com', 'somewhere', 'Manila', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 'sparda.png', '2019-04-11 03:11:09');

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
  MODIFY `ID` int(32) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `locations`
--
ALTER TABLE `locations`
  MODIFY `ID` int(16) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `ID` int(16) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `order_details`
--
ALTER TABLE `order_details`
  MODIFY `ID` int(32) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `ID` int(8) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;

--
-- AUTO_INCREMENT for table `stocks`
--
ALTER TABLE `stocks`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `ID` int(16) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
