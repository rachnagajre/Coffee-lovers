-- phpMyAdmin SQL Dump
-- version 4.4.10
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 18, 2015 at 06:23 AM
-- Server version: 5.5.42
-- PHP Version: 5.6.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `CoffeeLover`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE IF NOT EXISTS `products` (
  `id` int(11) NOT NULL,
  `product_code` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `product_name` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `product_desc` tinytext COLLATE utf8_unicode_ci NOT NULL,
  `product_img_name` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `category` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `type` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `roast` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `region` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `product_code`, `product_name`, `product_desc`, `product_img_name`, `price`, `category`, `type`, `roast`, `region`) VALUES
(1, 'PD1001', 'Coffee Test 1', 'Desc 1', 'coffee1.png', '200.50', 'Coffee', 'Iced Coffee', 'Light', 'Central American'),
(2, 'PD1002', 'Coffee test 2', 'Desc 2', 'coffee2.png', '500.85', 'Coffee', 'Iced Coffee', 'Light', 'Central American'),
(3, 'PD1003', 'Coffee test 3', 'Desc 3', 'coffee3.png', '100.00', 'Coffee', 'Iced Coffee', 'Light', 'Central American'),
(4, 'PD1004', 'Coffee Test 4', 'Desc 4', 'coffee4.png', '400.30', 'Coffee', 'Iced Coffee', 'Light', 'Central American');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL COMMENT 'unique id for the user',
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL COMMENT 'unique email identifying the user',
  `firstname` text COLLATE utf8_unicode_ci NOT NULL COMMENT 'firstname',
  `lastname` text COLLATE utf8_unicode_ci NOT NULL COMMENT 'lastname',
  `bithdate` date NOT NULL COMMENT 'dob',
  `address` text COLLATE utf8_unicode_ci NOT NULL COMMENT 'full address',
  `password` text COLLATE utf8_unicode_ci NOT NULL COMMENT 'hashed password'
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT='User Details Table';

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `email`, `firstname`, `lastname`, `bithdate`, `address`, `password`) VALUES
(8, 'test@gmail.com', 'test', 'test', '2015-11-01', 'tet', '$1$yK4.TM4.$uyobADm3K48GvGdHIZZkZ.'),
(9, 'gcatarino0@gmail.com', 'Gustavo', 'Costa', '0000-00-00', '840 Villa Ave', '$1$EEGm5LfN$A870NtvKBTsg8sSRyVrYs.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `product_code` (`product_code`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'unique id for the user',AUTO_INCREMENT=10;