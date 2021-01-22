-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 08, 2020 at 07:36 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `radiocabs1`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `ID` int(11) NOT NULL,
  `username` varchar(10) NOT NULL,
  `password` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`ID`, `username`, `password`) VALUES
(1, 'sam', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `company`
--

CREATE TABLE `company` (
  `Advertise_ID` int(11) NOT NULL,
  `Company_Name` varchar(50) NOT NULL,
  `Logo` varchar(50) NOT NULL,
  `Designation` varchar(50) NOT NULL,
  `Address` varchar(50) NOT NULL,
  `Mobile` varchar(50) NOT NULL,
  `Telephone` varchar(50) NOT NULL,
  `Fax_Number` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Description` varchar(50) NOT NULL,
  `Membership` varchar(50) NOT NULL,
  `Payment` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `company`
--

INSERT INTO `company` (`Advertise_ID`, `Company_Name`, `Logo`, `Designation`, `Address`, `Mobile`, `Telephone`, `Fax_Number`, `Email`, `Description`, `Membership`, `Payment`, `password`) VALUES
(1, 'ITUS', 'myimages/img_2.jpg', 'IT', 'Pochinki', '2234245', '090078601', '0900', 'itus@gmail.com', 'Normally, a task like this that involves producing', 'Premium', 'Monthly', 'abc'),
(2, 'VNO', 'myimages/loc.png', 'AI', 'DHA phase 8', '031422789888', '02134567698', '23476', 'fdsfas@DSJDS.COM', 'Highly Advertisement', 'Premium', 'Monthly', ''),
(3, 'VLO', 'myimages/loc.png', 'AI', 'DHA phase 8', '031422789888', '02134567698', '23476', 'fdsfas@DSJDS.COM', 'Highly Advertisement', 'Basic', 'Quaterly', '');

-- --------------------------------------------------------

--
-- Table structure for table `driver`
--

CREATE TABLE `driver` (
  `Driver_ID` int(11) NOT NULL,
  `Driver_Name` text NOT NULL,
  `Password` varchar(50) NOT NULL,
  `Contact_Person` varchar(50) NOT NULL,
  `Address` varchar(50) NOT NULL,
  `City` varchar(50) NOT NULL,
  `Mobile` varchar(50) NOT NULL,
  `Telephone` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Experience` varchar(50) NOT NULL,
  `Description` varchar(50) NOT NULL,
  `Payment` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `driver`
--

INSERT INTO `driver` (`Driver_ID`, `Driver_Name`, `Password`, `Contact_Person`, `Address`, `City`, `Mobile`, `Telephone`, `Email`, `Experience`, `Description`, `Payment`) VALUES
(2, 'Maib1', '12345', '0314-27815371', 'block 9-DHA Karachi', 'Karachi', '0315-789313', '21312312', 'syed@gmail.com', '5 years', 'nope', 'Premium'),
(3, 'Altuuu', '123', '23456', '23456', 'khi', '456784567', '2345678', 'aaltamash846@gmail.com', '2 years', 'Berozgarr', 'Monthly');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `Feedback_ID` int(11) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Mobile_Number` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `City` varchar(50) NOT NULL,
  `Feedback_Type` varchar(50) NOT NULL,
  `Description` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`Feedback_ID`, `Name`, `Mobile_Number`, `Email`, `City`, `Feedback_Type`, `Description`) VALUES
(1, 'dsasda', '32323432', 'sadads@gmail.com', 'karachi', 'Suggestion', 'Normally, a task like this that involves producing');

-- --------------------------------------------------------

--
-- Table structure for table `history`
--

CREATE TABLE `history` (
  `ID` int(11) NOT NULL,
  `CompID` int(11) NOT NULL,
  `Date` varchar(50) NOT NULL,
  `Payment_Detail` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `monthly`
--

CREATE TABLE `monthly` (
  `ID` int(11) NOT NULL,
  `Month` varchar(50) NOT NULL,
  `CompID` int(11) NOT NULL,
  `Date` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `monthly`
--

INSERT INTO `monthly` (`ID`, `Month`, `CompID`, `Date`) VALUES
(1, '230', 1, '2020-03-20'),
(2, 'march', 2, '2020-03-17');

-- --------------------------------------------------------

--
-- Table structure for table `quartly`
--

CREATE TABLE `quartly` (
  `ID` int(11) NOT NULL,
  `Quater` varchar(50) NOT NULL,
  `CompID` int(11) NOT NULL,
  `Date` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `quartly`
--

INSERT INTO `quartly` (`ID`, `Quater`, `CompID`, `Date`) VALUES
(1, '25500', 1, '2020-03-05');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `company`
--
ALTER TABLE `company`
  ADD PRIMARY KEY (`Advertise_ID`);

--
-- Indexes for table `driver`
--
ALTER TABLE `driver`
  ADD PRIMARY KEY (`Driver_ID`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`Feedback_ID`);

--
-- Indexes for table `history`
--
ALTER TABLE `history`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `CompID` (`CompID`);

--
-- Indexes for table `monthly`
--
ALTER TABLE `monthly`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `CompID` (`CompID`);

--
-- Indexes for table `quartly`
--
ALTER TABLE `quartly`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `CompID` (`CompID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `company`
--
ALTER TABLE `company`
  MODIFY `Advertise_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `driver`
--
ALTER TABLE `driver`
  MODIFY `Driver_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `Feedback_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `history`
--
ALTER TABLE `history`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `monthly`
--
ALTER TABLE `monthly`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `quartly`
--
ALTER TABLE `quartly`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `monthly`
--
ALTER TABLE `monthly`
  ADD CONSTRAINT `monthly_ibfk_1` FOREIGN KEY (`CompID`) REFERENCES `company` (`Advertise_ID`);

--
-- Constraints for table `quartly`
--
ALTER TABLE `quartly`
  ADD CONSTRAINT `quartly_ibfk_1` FOREIGN KEY (`CompID`) REFERENCES `company` (`Advertise_ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
