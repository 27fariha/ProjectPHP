-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 25, 2020 at 11:18 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `auction`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `Id` int(11) NOT NULL,
  `UserName` varchar(50) NOT NULL,
  `Password` varchar(50) NOT NULL,
  `Image` varchar(50) NOT NULL,
  `Address` varchar(50) NOT NULL,
  `Email` varchar(20) NOT NULL,
  `Phone` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`Id`, `UserName`, `Password`, `Image`, `Address`, `Email`, `Phone`) VALUES
(1, 'aatika', 'aptech', 'image/person_1.png', 'karachi', 'auction@gmail.com', '033425637891');

-- --------------------------------------------------------

--
-- Table structure for table `auctionsuccess`
--

CREATE TABLE `auctionsuccess` (
  `Id` int(11) NOT NULL,
  `bidId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `auctionsuccess`
--

INSERT INTO `auctionsuccess` (`Id`, `bidId`) VALUES
(2, 11),
(3, 13),
(12, 15);

-- --------------------------------------------------------

--
-- Table structure for table `bid`
--

CREATE TABLE `bid` (
  `Id` int(11) NOT NULL,
  `BuyerId` int(11) NOT NULL,
  `ProductId` int(11) NOT NULL,
  `BidPrice` int(11) NOT NULL,
  `Date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bid`
--

INSERT INTO `bid` (`Id`, `BuyerId`, `ProductId`, `BidPrice`, `Date`) VALUES
(11, 18, 15, 300, '2020-10-18'),
(12, 19, 14, 450, '2020-10-18'),
(13, 20, 14, 500, '2020-10-18'),
(14, 18, 16, 1000010, '2020-10-21'),
(15, 19, 16, 1000020, '2020-10-21'),
(16, 19, 19, 2000010, '2020-10-25'),
(17, 20, 18, 220, '2020-10-25');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `Id` int(11) NOT NULL,
  `FirstName` varchar(50) NOT NULL,
  `LastName` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `TelNum` int(11) NOT NULL,
  `Message` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`Id`, `FirstName`, `LastName`, `Email`, `TelNum`, `Message`) VALUES
(1, 'aatika', 'aptech', 'aatika@gmail.com', 2147483647, 'thanks for give information'),
(2, 'mehwish', 'tariq', 'mehwish@gmail.com', 322567894, 'Nice service');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `Id` int(11) NOT NULL,
  `SellerId` int(11) NOT NULL,
  `ProductName` varchar(50) NOT NULL,
  `Description` varchar(50) NOT NULL,
  `InitialBid` varchar(50) NOT NULL,
  `Image` varchar(100) NOT NULL,
  `DateOfPost` date NOT NULL,
  `ClosingDate` date NOT NULL,
  `Status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`Id`, `SellerId`, `ProductName`, `Description`, `InitialBid`, `Image`, `DateOfPost`, `ClosingDate`, `Status`) VALUES
(14, 18, 'Shoes', 'stylish shoes', '400', 'dashboard/pages/image/product_1.jpg', '2020-10-17', '2020-10-19', 'sold'),
(15, 19, 'calculator', 'new advance calculator', '200', 'dashboard/pages/image/img_2.jpg', '2020-10-14', '2020-10-19', 'sold'),
(16, 20, 'laptop', 'nice laptop', '100000', 'dashboard/pages/image/careerbuilder.jpg', '2020-10-20', '2020-10-24', 'sold'),
(17, 18, 'Bag', 'A bag pack', '1000', 'dashboard/pages/image/bag.jpg', '2020-10-25', '2020-10-31', 'pending'),
(18, 18, 'cap', 'nice daily wear cap', '200', 'dashboard/pages/image/cap.jpg', '2020-10-25', '2020-11-07', 'pending'),
(19, 20, 'Wahing machine', 'Good condition working', '200000', 'dashboard/pages/image/wm.jpg', '2020-10-25', '2020-11-07', 'pending'),
(20, 20, 'Television', 'WorkingProperly', '400000', 'dashboard/pages/image/tv.jpg', '2020-10-25', '2020-11-03', 'pending'),
(21, 19, 'Fridge', 'new not used', '500000', 'dashboard/pages/image/fridge.jpg', '2020-10-25', '2020-12-01', 'pending');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `Id` int(11) NOT NULL,
  `FirstName` varchar(50) NOT NULL,
  `LastName` varchar(50) NOT NULL,
  `Cnic` int(20) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Image` varchar(50) NOT NULL,
  `DateOfBirth` varchar(50) NOT NULL,
  `Password` varchar(50) NOT NULL,
  `Contact` int(11) NOT NULL,
  `Company` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`Id`, `FirstName`, `LastName`, `Cnic`, `Email`, `Image`, `DateOfBirth`, `Password`, `Contact`, `Company`) VALUES
(18, 'humaira', 'asghar', 2147483647, 'humaira@gmail.com', 'dashboard/pages/image/ab.jpg', '2002-10-17', 'aptech', 4565756, 'aptech'),
(19, 'junaid', 'ahmed', 2147483647, 'junaid@gmail.com', 'dashboard/pages/image/person_2.png', '2002-10-15', 'aptech', 3256542, 'aptech'),
(20, 'Ahmed', 'Iqbal', 42101, 'ahmed@gmail.com', 'dashboard/pages/image/BH_E1-Garver.jpg', '2002-10-10', 'aptech', 382828228, 'aptech');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `auctionsuccess`
--
ALTER TABLE `auctionsuccess`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `bidId` (`bidId`);

--
-- Indexes for table `bid`
--
ALTER TABLE `bid`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `ProductId` (`ProductId`),
  ADD KEY `BuyerId` (`BuyerId`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `SellerId` (`SellerId`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `auctionsuccess`
--
ALTER TABLE `auctionsuccess`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `bid`
--
ALTER TABLE `bid`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `auctionsuccess`
--
ALTER TABLE `auctionsuccess`
  ADD CONSTRAINT `auctionsuccess_ibfk_1` FOREIGN KEY (`bidId`) REFERENCES `bid` (`Id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `bid`
--
ALTER TABLE `bid`
  ADD CONSTRAINT `bid_ibfk_1` FOREIGN KEY (`BuyerId`) REFERENCES `users` (`Id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `bid_ibfk_2` FOREIGN KEY (`ProductId`) REFERENCES `product` (`Id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `product_ibfk_1` FOREIGN KEY (`SellerId`) REFERENCES `users` (`Id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
