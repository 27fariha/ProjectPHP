-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 03, 2020 at 08:36 AM
-- Server version: 10.1.29-MariaDB
-- PHP Version: 7.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `carbook`
--

-- --------------------------------------------------------

--
-- Table structure for table `about`
--

CREATE TABLE `about` (
  `Id` int(11) NOT NULL,
  `Message` varchar(500) NOT NULL,
  `Location` varchar(200) NOT NULL,
  `Ph_No` varchar(30) NOT NULL,
  `All_Ph_No` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `about`
--

INSERT INTO `about` (`Id`, `Message`, `Location`, `Ph_No`, `All_Ph_No`) VALUES
(1, 'Forward a message. After you open a conversation, you can send it to a new contact at any time. Open the Messages app Android Messages .', 'Aptech NN', '03401334567', '0213458555'),
(2, 'Forward a message. After you open a conversation, you can send it to a new contact at any time. Open the Messages app Android Messages .', 'Aptech NN', '03401334567', '0213458555'),
(4, 'Forward a message. After you open a conversation, you can send it to a new contact at any time. Open the Messages app Android Messages .', 'Aptech NN', '03401334567', '0213458555');

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `Id` int(11) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Pswrd` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `picture` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`Id`, `Name`, `Pswrd`, `email`, `picture`) VALUES
(2, 'sahar', 'sahar123', 'sahar12@gmail.com', 'myimages/Admin.png');

-- --------------------------------------------------------

--
-- Table structure for table `cars`
--

CREATE TABLE `cars` (
  `Id` int(11) NOT NULL,
  `Car_name` varchar(30) NOT NULL,
  `Model_year` varchar(30) NOT NULL,
  `Company` varchar(100) NOT NULL,
  `No_plate` varchar(30) NOT NULL,
  `Price` int(11) NOT NULL,
  `rent_price` int(11) NOT NULL,
  `Specification` varchar(200) NOT NULL,
  `Available` varchar(50) NOT NULL,
  `Pic` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cars`
--

INSERT INTO `cars` (`Id`, `Car_name`, `Model_year`, `Company`, `No_plate`, `Price`, `rent_price`, `Specification`, `Available`, `Pic`) VALUES
(5, 'BMW', '2019', 'Bayerische Motoren Werke', 'ADL552', 9500000, 5000, '620d Luxury Line,19/21 KMPL,Diesel.', 'yes', 'myimages/car-2.jpg'),
(6, 'Ferrari', '2020', 'Ferrari S.P.A', 'av12', 280900, 500, ' The Ferrari FF has 1 Petrol Engine on offer. The Petrol engine is 6262 cc. It is available with the transmission. ', 'yes', 'myimages/image_3.jpg'),
(12, 'Ferrari 62', '2020', 'Ferrari S.P.A', 'ARG899', 9000000, 15000, ' dealership.', 'yes', 'myimages/bg_2.jpg'),
(14, 'BMW 122', '2020', 'Bayerische Motoren Werke AG', 'GRY691', 100000000, 20000, '620d Luxury Line,19/21 KMPL,Diesel.', 'yes', 'myimages/car-6.jpg'),
(15, 'Passo', '2018', 'Passo', 'aby132', 650000, 5000, 'abc', 'yes', 'myimages/car-11.jpg'),
(16, 'Jeep', '2019', 'JEEP', 'CV36', 5000000, 6000, ' dealership.', 'yes', 'myimages/car-8.jpg'),
(17, 'BR-V', '2019', 'BR-V', 'MNO456', 8000000, 10000, '620d Luxury Line,19/21 KMPL,Diesel.', 'yes', 'myimages/BR-V1.jpg'),
(18, 'Hybird', '2019', 'Hybird', 'KLL885', 9500000, 8000, ' dealership.', 'yes', 'myimages/Hybird.jpg'),
(19, 'Landcrusier', '2020', 'Landcrusier', 'PKP982', 150000000, 30000, '620d Luxury Line19/21 KMPL Diesel', 'yes', 'myimages/Landcrusier.jpg'),
(20, 'Fortuner', '2020', 'Fortuner', 'JPG987', 8000000, 9000, ' dealership.', 'yes', 'myimages/Fortuner.jpg'),
(21, 'Cultus', '2008', 'Suzuki', 'JHR125', 700000, 2000, ' dealership.', 'yes', 'myimages/cultus-1.jpg'),
(22, 'Swift', '2017', 'Suzuki', 'HAZ635', 900000, 3000, ' dealership.', 'yes', 'myimages/Swift.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `Id` int(11) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Message` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`Id`, `Name`, `Email`, `Message`) VALUES
(1, 'taha', 'taha13@gmail.com', 'CAR aims to expand your intellectual capacity beyond disciplinary domains and to enable you to tackle professional and global issues from a multidisciplinary perspective.'),
(2, 'ali', 'ali12@gmail.com', 'CAR aims to expand your intellectual capacity beyond disciplinary domains and to enable you to tackle professional and global issues from a multidisciplinary perspective.'),
(3, 'huda', 'huda16@gmail.com', 'CAR aims to expand your intellectual capacity beyond disciplinary domains and to enable you to tackle professional and global issues from a multidisciplinary perspective.'),
(4, 'huda', 'huda16@gmail.com', 'CAR aims to expand your intellectual capacity beyond disciplinary domains and to enable you to tackle professional and global issues from a multidisciplinary perspective.'),
(5, 'ahmed', 'ahmed16@gmail.com', 'CAR aims to expand your intellectual capacity beyond disciplinary domains and to enable you to tackle professional and global issues from a multidisciplinary perspective.'),
(6, 'shahzad', 'shahzad14@gmail.com', 'CAR aims to expand your intellectual capacity beyond disciplinary domains and to enable you to tackle professional and global issues from a multidisciplinary perspective.');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `Id` int(11) NOT NULL,
  `User_name` varchar(50) NOT NULL,
  `Pswrd` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `cnic` varchar(30) NOT NULL,
  `contact` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`Id`, `User_name`, `Pswrd`, `email`, `cnic`, `contact`) VALUES
(2, 'taha', 'taha13', 'taha14@gmail.com', '42101-97056842', '0213456787');

-- --------------------------------------------------------

--
-- Table structure for table `rentcar`
--

CREATE TABLE `rentcar` (
  `Id` int(11) NOT NULL,
  `Car_id` int(11) NOT NULL,
  `User_id` int(11) NOT NULL,
  `Duration` int(11) NOT NULL,
  `Date` varchar(50) NOT NULL,
  `Price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `salecar`
--

CREATE TABLE `salecar` (
  `Id` int(11) NOT NULL,
  `Car_id` int(11) NOT NULL,
  `User_id` int(11) NOT NULL,
  `Date` varchar(50) NOT NULL,
  `Deliverable` varchar(100) NOT NULL,
  `Price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about`
--
ALTER TABLE `about`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `cars`
--
ALTER TABLE `cars`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `rentcar`
--
ALTER TABLE `rentcar`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `Car_id` (`Car_id`),
  ADD KEY `User_id` (`User_id`);

--
-- Indexes for table `salecar`
--
ALTER TABLE `salecar`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `Car_id` (`Car_id`),
  ADD KEY `User_id` (`User_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about`
--
ALTER TABLE `about`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `cars`
--
ALTER TABLE `cars`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `rentcar`
--
ALTER TABLE `rentcar`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `salecar`
--
ALTER TABLE `salecar`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `rentcar`
--
ALTER TABLE `rentcar`
  ADD CONSTRAINT `rentcar_ibfk_1` FOREIGN KEY (`Car_id`) REFERENCES `cars` (`Id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `rentcar_ibfk_2` FOREIGN KEY (`User_id`) REFERENCES `register` (`Id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `salecar`
--
ALTER TABLE `salecar`
  ADD CONSTRAINT `salecar_ibfk_1` FOREIGN KEY (`Car_id`) REFERENCES `cars` (`Id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `salecar_ibfk_2` FOREIGN KEY (`User_id`) REFERENCES `register` (`Id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
