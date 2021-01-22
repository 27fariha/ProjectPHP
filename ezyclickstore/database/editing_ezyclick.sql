-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 04, 2018 at 08:28 AM
-- Server version: 5.6.26
-- PHP Version: 5.5.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `editing_ezyclick`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_login`
--

CREATE TABLE IF NOT EXISTS `admin_login` (
  `user_id` int(11) NOT NULL,
  `user_name` varchar(250) NOT NULL,
  `user_password` varchar(250) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_login`
--

INSERT INTO `admin_login` (`user_id`, `user_name`, `user_password`) VALUES
(3, 'admin', 'Pakistan..132'),
(4, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE IF NOT EXISTS `orders` (
  `order_id` int(250) NOT NULL,
  `p_names` varchar(250) NOT NULL,
  `cus_name` varchar(250) NOT NULL,
  `contact_no` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `address` varchar(250) NOT NULL,
  `country` varchar(250) NOT NULL,
  `details` varchar(250) NOT NULL,
  `zip_code` int(250) NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `quantity` int(250) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`order_id`, `p_names`, `cus_name`, `contact_no`, `email`, `address`, `country`, `details`, `zip_code`, `time`, `quantity`) VALUES
(6, 'Adorable Purple Drop Zircon Earrings', 'anas', '06546494', 'anas@gmail.com', 'dha phase 3', 'sudia', 'gfnhj', 646465, '2018-11-22 07:04:32', 12),
(7, 'Zircon Encrusted Shield Earrings', 'anas', '06546494', 'anas@gmail.com', 'dha phase 3', 'sudia', 'gfnhj', 646465, '2018-11-22 07:04:32', 12),
(8, 'Blushed Nudes Eyeshadow Palette', 'kami', '7282', 'kamimemmon@gmail.com', 'jsdghb gkjn', 'pakistan', 'jgmyykykjgk', 0, '2018-11-24 06:54:52', 12),
(9, 'Double Trouble Soft Matte Lip Cream  08 San Paulo  Soft Matte Lip ', 'kami', '7282', 'kamimemmon@gmail.com', 'jsdghb gkjn', 'pakistan', 'jgmyykykjgk', 0, '2018-11-24 06:54:52', 12),
(10, 'Colossal Kajal TwelveHr Black', 'kami', '7282', 'kamimemmon@gmail.com', 'jsdghb gkjn', 'pakistan', 'jgmyykykjgk', 0, '2018-11-24 06:54:52', 12),
(11, 'Volum Express Falsies Drama Mascara - Black', 'kami', '7282', 'kamimemmon@gmail.com', 'jsdghb gkjn', 'pakistan', 'jgmyykykjgk', 0, '2018-11-24 06:54:52', 12),
(12, 'PASSA KUNDAN HEAVY PRL.-GLD-RED', 'kami', '7282', 'kamimemmon@gmail.com', 'jsdghb gkjn', 'pakistan', 'jgmyykykjgk', 0, '2018-11-24 06:54:52', 12),
(13, 'Zircon Donut Beaded Bracelet', 'kami', '7282', 'kamimemmon@gmail.com', 'jsdghb gkjn', 'pakistan', 'jgmyykykjgk', 0, '2018-11-24 06:54:52', 12),
(14, 'Happy Hearts Pandent', 'kami', '7282', 'kamimemmon@gmail.com', 'jsdghb gkjn', 'pakistan', 'jgmyykykjgk', 0, '2018-11-24 06:54:52', 12),
(15, 'Adorable Purple Drop Zircon Earrings', 'kami', '7282', 'kamimemmon@gmail.com', 'jsdghb gkjn', 'pakistan', 'jgmyykykjgk', 0, '2018-11-24 06:54:52', 12),
(16, 'Stretchy Tri-Loop Bead Fashion Bracelet', 'Azan Ahmed', '3353905266', 'azana681@gmail.com', 'sec 15/A3 house no r413 bufferzone', 'pakistan', 'fafds', 75850, '2018-12-02 18:13:20', 43),
(17, 'Happy Hearts Pandent', 'Azan Ahmed', '3353905266', 'azana681@gmail.com', 'sec 15/A3 house no r413 bufferzone', 'pakistan', 'fafds', 75850, '2018-12-02 18:13:21', 43),
(18, 'Wreath Style Glamorous Fancy Cuff Bracelet', 'Azan Ahmed', '3353905266', 'azana681@gmail.com', 'sec 15/A3 house no r413 bufferzone', 'pakistan', 'fafds', 75850, '2018-12-02 18:13:21', 43),
(19, 'Zircon Donut Beaded Bracelet', 'Azan Ahmed', '3353905266', 'azana681@gmail.com', 'sec 15/A3 house no r413 bufferzone', 'pakistan', 'fafds', 75850, '2018-12-02 18:13:21', 43),
(20, 'Adorable Purple Drop Zircon Earrings', 'Azan Ahmed', '3353905266', 'azana681@gmail.com', 'sec 15/A3 house no r413 bufferzone', 'pakistan', 'fafds', 75850, '2018-12-02 18:13:21', 43),
(21, 'Volum Express Falsies Drama Mascara - Black', 'abhi', '3353905266', 'azana681@gmail.com', 'sec 15/A3 house no r413 bufferzone', '-- Country --', 'dsfdsd', 75850, '2018-12-03 22:06:55', 12),
(22, 'Blushed Nudes Eyeshadow Palette', 'abhi', '3353905266', 'azana681@gmail.com', 'sec 15/A3 house no r413 bufferzone', '-- Country --', 'dsfdsd', 75850, '2018-12-03 22:06:55', 12),
(23, 'Rich Matte lipstick ', 'abhi', '3353905266', 'azana681@gmail.com', 'sec 15/A3 house no r413 bufferzone', '-- Country --', 'dsfdsd', 75850, '2018-12-03 22:06:56', 12),
(24, 'TOPS DBL FLWR ZC-SLVR-BLUE', 'admin', '6456', 'shanmughal32@gmail.com', 'tydftydtyc', 'pakistan', 'fsdfsd', 4566, '2018-12-04 06:36:28', 4),
(25, 'Happy Hearts Pandent', 'admin', '6456', 'shanmughal32@gmail.com', 'tydftydtyc', 'pakistan', 'fsdfsd', 4566, '2018-12-04 06:36:28', 4);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE IF NOT EXISTS `products` (
  `product_id` int(250) NOT NULL,
  `product_name` varchar(250) NOT NULL,
  `image` varchar(250) NOT NULL,
  `product_type` varchar(250) NOT NULL,
  `price` int(250) NOT NULL,
  `c_price` int(250) NOT NULL,
  `details` varchar(50) NOT NULL,
  `brand` varchar(50) NOT NULL,
  `tags` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=33 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `product_name`, `image`, `product_type`, `price`, `c_price`, `details`, `brand`, `tags`) VALUES
(5, 'Zircon Encrusted Shield Earrings', '1542553590_zircon.png', 'dress', 5400, 8000, 'These earrings feature a large shield shaped struc', 'Forge', 'zircon,fashion,new,blue marquise'),
(6, 'EARING FNCY ZC FLW 4434-SLVR-CLEAR', '1542554238_26128_1.png', 'dress', 2900, 3500, 'These earrings feature a large shield shaped', 'forge', 'zircon,fashion,new,blue marquise'),
(7, 'Adorable Purple Drop Zircon Earrings', '1542554489_19613_1.png', 'dress', 1750, 2200, 'These earrings feature a large shield shaped', 'Forge', 'zircon,fashion,new,purple drop'),
(8, 'TOPS DBL FLWR ZC-SLVR-BLUE', '1542554574_27750_1.png', 'dress', 2700, 3300, 'These earrings feature a large shield shaped', 'Forge', 'zircon,fashion,new,purple drop'),
(9, 'Stretchy Bar Bead Fashion Bracelet', '1542554693_16135_1.png', 'dress', 1200, 2000, 'bracelet', 'Bella Mia', 'fashion,new'),
(10, 'Stretchy Tri-Loop Bead Fashion Bracelet', '1542554771_16157_1.png', 'dress', 1200, 2000, 'Stretchy Tri-Loop Bead Fashion Bracelet', 'Bella Mia', 'fashion,new'),
(11, 'Zircon Donut Beaded Bracelet', '1542554829_16147_1.png', 'dress', 1000, 1500, 'Zircon Donut Beaded Bracelet', 'Bella Mia', 'fashion,new'),
(12, 'Wreath Style Glamorous Fancy Cuff Bracelet', '1542554906_8379_1.png', 'dress', 9800, 12000, 'Wreath Style Glamorous Fancy Cuff Bracelet', 'Bella Mia', 'fashion,new'),
(13, 'PASSA POLKI LG MET DROP.-GLD-CHAMP', '1542555032_29466_1.png', 'dress', 6200, 7000, 'PASSA POLKI LG MET DROP.-GLD-CHAMP', 'Pandora', 'fashion,new'),
(15, ' NEW JHOOMAR KUN ZC PRL DROP F-GLD-CHAMP', '1542555195_27302_1.png', 'dress', 6800, 7500, '\r\nNEW JHOOMAR KUN ZC PRL DROP F-GLD-CHAMP', 'Pandora', 'fashion,new'),
(16, 'PASSA KUNDAN HEAVY PRL.-GLD-RED', '1542555254_29427_1.png', 'dress', 13800, 15000, 'PASSA KUNDAN HEAVY PRL.-GLD-RED', 'Pandora', 'fashion,new'),
(19, 'Volum Express Colossal Smoky Eyes Mascara', '1542556358_gdsghdf.jpg', 'cosmetics', 999, 1199, 'Volum Express Colossal Smoky Eyes Mascara', 'Loreal', 'beauty,skin,eye'),
(20, 'Thirty Two Colors Eyeshadow Palette Shimmer Matte Color Eye Shadow', '1542556422_bfb6ce3ef47bf9c8d11c47a9bd47d2df.jpg', 'cosmetics', 320, 500, 'Thirty Two Colors Eyeshadow Palette Shimmer Matte ', 'Loreal', 'beauty,skin,eye'),
(21, 'Colossal Kajal TwelveHr Black', '1542556469_54eb0e8597384c6965159ffac74fb21e.jpg', 'cosmetics', 399, 499, 'Colossal Kajal TwelveHr Black', 'Loreal', 'beauty,skin,eye'),
(23, 'Hd Studio Photogenic Eyeshadow Base', '1542556581_1542556524_28a3930118a9c7d2d7e20d6e237b1d22.jpg', 'cosmetics', 799, 999, 'Hd Studio Photogenic Eyeshadow Base', 'Loreal', 'beauty,skin,eye'),
(24, 'Volum Express Falsies Drama Mascara - Black', '1542556656_21d54c57eb76a95d4f69ead2ae538e97.jpg', 'cosmetics', 1199, 1800, 'Volum Express Falsies Drama Mascara - Black', 'Maybeline', 'beauty,skin,eye'),
(25, 'Blushed Nudes Eyeshadow Palette', '1542556704_877bee06cd9b05c785019f434ec36bea.jpg', 'cosmetics', 2899, 3500, 'Blushed Nudes Eyeshadow Palette', 'Maybeline', 'beauty,skin,eye'),
(26, 'Volume Million Lashes Excess Mascara - Black', '1542556774_04ba7eec43b5271999ba1203287dea2e (1).jpg', 'cosmetics', 2499, 3000, 'Volume Million Lashes Excess Mascara - Black', 'Maybeline', 'beauty,skin,eye'),
(27, 'Double Trouble Soft Matte Lip Cream  08 San Paulo  Soft Matte Lip ', '1542556854_b5bd90d96652083e7214d345a0888791.jpg', 'cosmetics', 1299, 2000, 'Double Trouble Soft Matte Lip Cream  08 San Paulo ', 'Maybeline', 'beauty,skin,eye'),
(28, 'Miss Rose Pink Beeper Lipstick Shade ', '1542556975_061a747244309b0cc048b6c0863f5a88.jpg', 'cosmetics', 399, 500, 'Miss Rose Pink Beeper Lipstick Shade ', 'Chanel', 'beauty,skin,eye,lips'),
(29, 'Rich Matte lipstick ', '1542557045_ad892df41ff98252e8d856cc49b18220.jpg', 'cosmetics', 196, 250, 'Rich Matte lipstick ', 'Chanel', 'beauty,skin,eye,lips'),
(30, 'Soft Matte Lip Cream  Amsterdam', '1542557113_d3ee3cb63c32a6a6f63aee87e1120a55.jpg', 'cosmetics', 749, 1000, 'Soft Matte Lip Cream  Amsterdam', 'Chanel', 'beauty,skin,eye,lips'),
(31, 'Superstay Matte Ink Liquid Lipstick Voyager', '1542557170_1c1686d703f1317a4080497ddc392887.jpg', 'cosmetics', 1799, 2500, 'Superstay Matte Ink Liquid Lipstick Voyager', 'Chanel', 'beauty,skin,eye,lips'),
(32, 'Happy Hearts Pandent', '1542635237_797482-5201_1_1.jpg', 'dress', 5500, 7000, '18- Carrat Rose Gold And Natural Black Onyx', 'Forge', 'fashion,new,rose gold,black,onyx');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_login`
--
ALTER TABLE `admin_login`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_login`
--
ALTER TABLE `admin_login`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `order_id` int(250) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=26;
--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(250) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=33;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
