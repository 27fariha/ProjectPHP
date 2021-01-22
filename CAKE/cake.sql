-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 13, 2020 at 09:46 AM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cake`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `Id` int(11) NOT NULL,
  `Name` varchar(20) NOT NULL,
  `Username` varchar(20) NOT NULL,
  `Email` varchar(20) NOT NULL,
  `Password` varchar(8) NOT NULL,
  `Image` varchar(500) NOT NULL,
  `role` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`Id`, `Name`, `Username`, `Email`, `Password`, `Image`, `role`) VALUES
(2, 'Altu', 'altu', 'altamash@gmail.com', 'aptech', 'myimages/pic_1556796219.jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `catagory`
--

CREATE TABLE `catagory` (
  `Id` int(11) NOT NULL,
  `Catagory` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `catagory`
--

INSERT INTO `catagory` (`Id`, `Catagory`) VALUES
(2, 'mini cup cake'),
(6, 'cup cake'),
(8, 'Cake'),
(9, 'Brownies'),
(10, 'schools');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `Id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `subject` varchar(20) NOT NULL,
  `message` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`Id`, `name`, `email`, `subject`, `message`) VALUES
(1, 'altu', 'sahar@gmail.com', 'e3ji3wjei3wj4', 'asasasasasasasasasasasasasasasasasasasasasasasasasasasasasasasasasasasas'),
(2, 'taha', 'taha@gmail.com', 'checking', 'can i get home delivery?'),
(3, 'mehak', 'mehak@gmial.com', 'checking', 'Good cakes bvuht achay cakes hain');

-- --------------------------------------------------------

--
-- Table structure for table `event`
--

CREATE TABLE `event` (
  `Id` int(11) NOT NULL,
  `type` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `event`
--

INSERT INTO `event` (`Id`, `type`) VALUES
(1, 'Birthday party'),
(2, 'Mhendi event'),
(3, 'wedding event'),
(4, 'anniversary event'),
(5, 'Engagement event'),
(8, 'Regular cakes');

-- --------------------------------------------------------

--
-- Table structure for table `orderr`
--

CREATE TABLE `orderr` (
  `Id` int(11) NOT NULL,
  `Name` varchar(20) NOT NULL,
  `Contact` varchar(50) NOT NULL,
  `Delivery_address` varchar(30) NOT NULL,
  `Delivery_date` varchar(50) NOT NULL,
  `Total_Price` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orderr`
--

INSERT INTO `orderr` (`Id`, `Name`, `Contact`, `Delivery_address`, `Delivery_date`, `Total_Price`) VALUES
(14, 'taha', '03427635426', 'karachi', '2020-03-24', '14,324.00'),
(28, 'maha', '03427635426', 'karachi', '2020-03-13', '4,000.00'),
(29, 'saba', '0345678645', 'bufer zone', '2020-03-13', '5,500.00');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `Id` int(11) NOT NULL,
  `Cid` int(11) NOT NULL,
  `eid` int(11) NOT NULL,
  `Cake_name` varchar(20) NOT NULL,
  `Price` int(11) NOT NULL,
  `Available` varchar(20) NOT NULL,
  `type` varchar(20) NOT NULL,
  `itemcode` varchar(11) NOT NULL,
  `image` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`Id`, `Cid`, `eid`, `Cake_name`, `Price`, `Available`, `type`, `itemcode`, `image`) VALUES
(6, 2, 2, 'uiwwdhned', 2324, 'Yes', 'With Egg', '9067986', 'myimages/c1.jpg'),
(7, 8, 1, 'red velvet', 2000, 'Yes', 'Eggless', '101', 'myimages/b.jpg'),
(8, 8, 1, 'customize kids birth', 5000, 'Yes', 'With Egg', '102', 'myimages/b1.jpg'),
(9, 8, 1, 'flower cake', 2000, 'Yes', 'Eggless ', '103', 'myimages/b2.jpg'),
(13, 8, 1, 'picture cake', 1500, 'Yes', 'With Egg', '104', 'myimages/b3.jpg'),
(14, 8, 1, 'chocolate cake', 1500, 'Yes', 'Eggless', '105', 'myimages/b4.jpg'),
(15, 8, 1, 'Rainbow layers cake', 2000, 'Yes', 'Eggless', '106', 'myimages/b5.jpg'),
(16, 8, 1, 'customize unicorn ca', 4000, 'Yes', 'With Egg', '107', 'myimages/b44.jpg'),
(17, 2, 5, 'Simple Engagement ca', 2000, 'Yes', 'With Egg', '108', 'myimages/e1.jpeg'),
(18, 8, 3, 'customize 3 layer ca', 10000, 'Yes', 'With Egg', '109', 'myimages/w5.jpg'),
(20, 2, 4, 'customize cake', 4000, 'Yes', 'Eggless', '110', 'myimages/a1.png'),
(24, 2, 8, 'teacake', 1500, 'Yes', 'Eggless', '111', 'myimages/s2.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `recipe`
--

CREATE TABLE `recipe` (
  `Id` int(11) NOT NULL,
  `Title` varchar(20) NOT NULL,
  `Ingredience` varchar(500) NOT NULL,
  `Image` varchar(500) NOT NULL,
  `Recipe` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `recipe`
--

INSERT INTO `recipe` (`Id`, `Title`, `Ingredience`, `Image`, `Recipe`) VALUES
(1, 'choclate cake', 'butter,eggs,choclate,cream,choco powder,ascen,milk,flour,sugar,white choclate', 'myimages/a6.jpg', 'Melt coconut oil/vegetable shortening in a saucepan over medium to high heat. Add the sugar and stir gently. Add cocoa and milk powder and fold the ingredients in while stirring. Add the vanilla or chocolate extract to bring a kick to the chocolaty flavor. Mix everything until a smooth and silky consistency is achieved. Pour the chocolate mixture into silicone molds. If you don’t have any, you can simply use an ice tray. Shake and tap the mold a bit to remove any air bubbles that might be present. Refrigerate the chocolate for 2 hours or until the chocolate completely sets.  Homemade chocolate typically lasts 3-4 months, but we all know it would be finished in less than a week! Even though homemade chocolate comes with a shorter shelf life, as long as you make them in small batches, you won’t be wasting any ingredients and will be eating a much healthier alternative to factory-manufactured chocolates. The best part is that you can experiment with different flavors and create your own v'),
(2, 'white choclate cake', 'butter,eggs,choclate,cream,choco powder,ascen,milk,flour,sugar,white choclate', 'myimages/b.jpg', 'Melt coconut oil/vegetable shortening in a saucepan over medium to high heat. Add the sugar and stir gently. Add cocoa and milk powder and fold the ingredients in while stirring. Add the vanilla or chocolate extract to bring a kick to the chocolaty flavor. Mix everything until a smooth and silky consistency is achieved. Pour the chocolate mixture into silicone molds. If you don’t have any, you can simply use an ice tray. Shake and tap the mold a bit to remove any air bubbles that might be present. Refrigerate the chocolate for 2 hours or until the chocolate completely sets.  Homemade chocolate typically lasts 3-4 months, but we all know it would be finished in less than a week! Even though homemade chocolate comes with a shorter shelf life, as long as you make them in small batches, you won’t be wasting any ingredients and will be eating a much healthier alternative to factory-manufactured chocolates. The best part is that you can experiment with different flavors and create your own v');

-- --------------------------------------------------------

--
-- Table structure for table `role`
--

CREATE TABLE `role` (
  `R_id` int(11) NOT NULL,
  `rolename` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `role`
--

INSERT INTO `role` (`R_id`, `rolename`) VALUES
(1, 'Admin'),
(2, 'User');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `Id` int(11) NOT NULL,
  `Name` varchar(20) NOT NULL,
  `Username` varchar(20) NOT NULL,
  `Email` varchar(20) NOT NULL,
  `Password` varchar(8) NOT NULL,
  `image` varchar(20) NOT NULL,
  `role` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`Id`, `Name`, `Username`, `Email`, `Password`, `image`, `role`) VALUES
(5, 'sahar', 'sahar12', 'saharmushtaq@gmail.c', 'sdsfr', '', 2),
(6, 'maib khan', 'maib', 'maib@gmail.com', 'dsegtj', '', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `role` (`role`);

--
-- Indexes for table `catagory`
--
ALTER TABLE `catagory`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `event`
--
ALTER TABLE `event`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `orderr`
--
ALTER TABLE `orderr`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`Id`),
  ADD UNIQUE KEY `itemcode` (`itemcode`),
  ADD KEY `Cid` (`Cid`),
  ADD KEY `eid` (`eid`);

--
-- Indexes for table `recipe`
--
ALTER TABLE `recipe`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`R_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `role` (`role`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `catagory`
--
ALTER TABLE `catagory`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `event`
--
ALTER TABLE `event`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `orderr`
--
ALTER TABLE `orderr`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `recipe`
--
ALTER TABLE `recipe`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `role`
--
ALTER TABLE `role`
  MODIFY `R_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `admin`
--
ALTER TABLE `admin`
  ADD CONSTRAINT `admin_ibfk_1` FOREIGN KEY (`role`) REFERENCES `role` (`R_id`);

--
-- Constraints for table `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `product_ibfk_1` FOREIGN KEY (`Cid`) REFERENCES `catagory` (`Id`),
  ADD CONSTRAINT `product_ibfk_2` FOREIGN KEY (`eid`) REFERENCES `event` (`Id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `user_ibfk_1` FOREIGN KEY (`role`) REFERENCES `role` (`R_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
