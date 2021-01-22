-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 15, 2020 at 11:07 AM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.3.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cakes`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `Id` int(11) NOT NULL,
  `User_name` varchar(20) NOT NULL,
  `Password` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Phone` varchar(50) NOT NULL,
  `Address` varchar(50) NOT NULL,
  `Address_Detail` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`Id`, `User_name`, `Password`, `Email`, `Phone`, `Address`, `Address_Detail`) VALUES
(1, 'khizer', 'aptech', 'khizer1996@gmail.com', '            0324-2259007', '            DHA Phase I', '            125 baker street , Karachi');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Subject` varchar(50) NOT NULL,
  `Message` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `Name`, `Email`, `Subject`, `Message`) VALUES
(2, 'Ahsan Saleem', 'saleemahsan36@gmail.com', 'hello', 'how can i get my order?'),
(6, 'Mahnoor', '1805c1@gmail.com', 'aptech', 'give my order'),
(10, 'farhan', 'junaidtrm@yahoo.com', 'fdg', 'agfhgfhgfhgfhf'),
(14, 'MAH', 'saba@gmail.com', 'checking', 'ACHIHAI');

-- --------------------------------------------------------

--
-- Table structure for table `customer_details`
--

CREATE TABLE `customer_details` (
  `Id` int(11) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Email` varchar(50) DEFAULT NULL,
  `password` varchar(50) NOT NULL,
  `Contact` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer_details`
--

INSERT INTO `customer_details` (`Id`, `Name`, `Email`, `password`, `Contact`) VALUES
(4, 'Ahsan', 'ahsan@gmail.com', 'aptech', '0348-1000422'),
(9, 'Mahnoor', 'mahnoor@gmail.com', 'aptech', '033529568774');

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `id` int(11) NOT NULL,
  `Event_Name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`id`, `Event_Name`) VALUES
(6, 'Birthday'),
(7, 'Anniversary'),
(8, 'Wedding');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `grand_total` float(10,2) NOT NULL,
  `created` datetime NOT NULL,
  `status` enum('Pending','Completed','Cancelled') COLLATE utf8_unicode_ci NOT NULL DEFAULT 'Pending',
  `phone` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `Address` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `customer_id`, `grand_total`, `created`, `status`, `phone`, `Address`) VALUES
(5, 4, 1300.00, '2020-09-14 12:56:39', 'Pending', '03427635426', 'north nazimabad'),
(6, 4, 5200.00, '2020-09-14 13:13:59', 'Pending', '03427635426', 'north karachi'),
(7, 4, 8200.00, '2020-09-15 12:58:25', 'Pending', '03427635426', 'north nazimabad'),
(8, 4, 1300.00, '2020-09-15 13:07:18', 'Pending', '03427635426', 'north karachi'),
(9, 4, 1300.00, '2020-09-15 13:20:07', 'Pending', '03427635426', 'north karachi');

-- --------------------------------------------------------

--
-- Table structure for table `order_items`
--

CREATE TABLE `order_items` (
  `id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `quantity` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `order_items`
--

INSERT INTO `order_items` (`id`, `order_id`, `product_id`, `quantity`) VALUES
(11, 5, 5, 1),
(12, 6, 5, 4),
(13, 7, 20, 1),
(14, 7, 12, 1),
(15, 7, 7, 1),
(16, 7, 5, 1),
(17, 8, 5, 1),
(18, 9, 5, 1);

-- --------------------------------------------------------

--
-- Table structure for table `product_details`
--

CREATE TABLE `product_details` (
  `Id` int(11) NOT NULL,
  `Item_code` int(20) NOT NULL,
  `event_id_f` int(11) NOT NULL,
  `Product_name` varchar(50) NOT NULL,
  `Type` varchar(50) NOT NULL,
  `Image` varchar(50) NOT NULL,
  `Description` varchar(50) NOT NULL,
  `Price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product_details`
--

INSERT INTO `product_details` (`Id`, `Item_code`, `event_id_f`, `Product_name`, `Type`, `Image`, `Description`, `Price`) VALUES
(5, 3, 7, 'Vanilla Yumms Cake', 'Egg', 'myimages/BBB113-Vanilla-Celebration-Cake-FINAL.jpg', 'Good Taste', 1300),
(7, 6, 6, 'Chocolate Banana Cake', 'Eggless', 'myimages/Banana-cake-e977d1b.jpg', 'Love', 700),
(8, 3, 7, 'Choco Lava Cake', 'Eggless', 'myimages/Hot_Chocolate_Lava_Cake.jpg', 'Its so Delecious', 2000),
(9, 6, 6, 'PineApple Cake', 'Egg', 'myimages/Pineapple-Sunshine-Cake-9a.jpg', 'Awsome cake', 1450),
(10, 3, 7, 'Occean Cake', 'Egg', 'myimages/beach-birthday-cake.jpg', 'fabolous', 4000),
(11, 3, 6, '                         Black Forrest Cake', 'Eggless', 'myimages/images.jpg', '                        nice', 3500),
(12, 6, 7, 'white Forrest Cake', 'Egg', 'myimages/white-forest.jpg', 'Sweetie', 4500),
(13, 3, 6, 'Blue Berry', 'Eggless', 'myimages/freshcream2.jpg', 'Tasty ', 2000),
(16, 3, 8, 'Chocolate Chip Cake', 'Egg', 'myimages/baadc57b-0b1e-450e-9c6a-23c551c5d323.jpg', 'soo Yummy', 1500),
(17, 9, 8, 'Marble Cake', 'Eggless', 'myimages/Nudo-Al-caffe-1.jpg', 'Good taste', 500),
(18, 6, 8, 'Coffee Crunch Cake', 'Eggless', 'myimages/4f041061-88a3-4886-98ae-e65da19e79bd.jpg', 'Delicious cake', 1800),
(19, 3, 7, 'Strawberry Crunch Cakes', 'Egg', 'myimages/3123908=s1280=h960.jpg', 'Tasty', 1200),
(20, 9, 7, 'Lemon Berry Cake ', 'Egg', 'myimages/4415c7da-d4f9-421d-a928-63ef88f80114.jpg', 'wovderful', 1700);

--
-- Triggers `product_details`
--
DELIMITER $$
CREATE TRIGGER `mytrigger` BEFORE INSERT ON `product_details` FOR EACH ROW SET NEW.Id = 
  CONCAT("CAT",COALESCE((SELECT MAX(Id)+1 from product_details),1))
$$
DELIMITER ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`Id`),
  ADD UNIQUE KEY `Email` (`Email`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `Email` (`Email`);

--
-- Indexes for table `customer_details`
--
ALTER TABLE `customer_details`
  ADD PRIMARY KEY (`Id`),
  ADD UNIQUE KEY `Email` (`Email`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `customer_id` (`customer_id`);

--
-- Indexes for table `order_items`
--
ALTER TABLE `order_items`
  ADD PRIMARY KEY (`id`),
  ADD KEY `order_id` (`order_id`),
  ADD KEY `product_id` (`product_id`);

--
-- Indexes for table `product_details`
--
ALTER TABLE `product_details`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `event_id_f` (`event_id_f`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `customer_details`
--
ALTER TABLE `customer_details`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `order_items`
--
ALTER TABLE `order_items`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `product_details`
--
ALTER TABLE `product_details`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`customer_id`) REFERENCES `customer_details` (`Id`) ON DELETE CASCADE ON UPDATE NO ACTION;

--
-- Constraints for table `order_items`
--
ALTER TABLE `order_items`
  ADD CONSTRAINT `order_items_ibfk_1` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION,
  ADD CONSTRAINT `order_items_ibfk_2` FOREIGN KEY (`product_id`) REFERENCES `product_details` (`Id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `product_details`
--
ALTER TABLE `product_details`
  ADD CONSTRAINT `product_details_ibfk_1` FOREIGN KEY (`event_id_f`) REFERENCES `events` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
