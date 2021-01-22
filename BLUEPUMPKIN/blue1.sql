-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 13, 2020 at 07:23 AM
-- Server version: 5.6.26
-- PHP Version: 5.5.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blue1`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE IF NOT EXISTS `category` (
  `id` int(11) NOT NULL,
  `category_name` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `category_name`) VALUES
(5, 'Meeting'),
(6, 'Competition'),
(7, 'Games');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE IF NOT EXISTS `contact` (
  `id` int(11) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Contact_no` int(11) NOT NULL,
  `Message` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `Name`, `Contact_no`, `Message`, `email`) VALUES
(7, 'maib', 2147483647, 'thia is message', 'maib@gmail.com'),
(8, 'maib', 2147483647, 'thia is message', 'maib@gmail.com'),
(9, 'maib', 2147483647, 'thia is message', 'maib@gmail.com'),
(10, 'maib', 2147483647, 'thia is message', 'maib@gmail.com'),
(15, 'name', 0, 'yy', ''),
(16, 'hjkh', 2147483647, 'hjkjhk', 'jhkjhk@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `employee_register1`
--

CREATE TABLE IF NOT EXISTS `employee_register1` (
  `id` int(11) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `Qualification` varchar(50) NOT NULL,
  `DOB` date NOT NULL,
  `Cnic` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL,
  `number` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `CV` varchar(50) NOT NULL,
  `image` varchar(500) NOT NULL,
  `role` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=72 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `employee_register1`
--

INSERT INTO `employee_register1` (`id`, `Name`, `username`, `email`, `Qualification`, `DOB`, `Cnic`, `address`, `number`, `password`, `CV`, `image`, `role`) VALUES
(60, 'maib', 'maib1', 'maib@gmail.com', 'bscs', '9999-09-09', '234567890', 'naavaal', '0315', 'Aptech123', 'cvdocx/CV (2) (4).docx', 'myimages/gg.png', 1),
(67, 'David', 'Davidcos', 'davidcos@yahoo.com', 'bscs', '1991-09-09', '4567899876', 'bafferzone', '03120900601', 'Aptech123', 'cvdocx/CV (2) (4) (1).docx', 'myimages/unnamed.jpg', 2),
(68, 'waseem badami', 'waseem', 'waseem@yahoo.com', 'bscs', '1992-09-09', '42401-13443221-1', 'gulshan-e-iqbal', '03223234564', 'Aptech123', 'cvdocx/CV (2) (4) (1).docx', 'myimages/waseem1.jpg', 2),
(71, 'shahid afridi', 'afridi', 'afridi@yahoo.com', 'bscs', '1889-03-13', '42401-13443221-1', 'gulshan-e-iqbal', '03223234564', 'Aptech123', 'cvdocx/CV (2) (4).docx', 'myimages/Shahid_Afridi_in_2017.jpg', 2);

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE IF NOT EXISTS `events` (
  `id` int(11) NOT NULL,
  `category` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `date` date NOT NULL,
  `duration` varchar(50) NOT NULL,
  `time` time NOT NULL,
  `Brief_Dis` varchar(50) NOT NULL,
  `Detail_Dis` varchar(5000) NOT NULL,
  `image` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=49 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`id`, `category`, `name`, `date`, `duration`, `time`, `Brief_Dis`, `Detail_Dis`, `image`) VALUES
(31, 5, 'Decision making', '2020-03-27', '2 hours', '11:00:00', 'decision-making meeting', 'A Decision Making Meeting is used by teams when they need to formally agree on a significant decision and secure commitment to act on that decision.', 'eventimg/reunions-collabe1460449178958.png'),
(34, 5, 'Innovation meetings	', '2020-03-23', '2 hours	', '09:00:00', 'Innovation meetings	', 'Energize your meetings by confounding expectations with the following tactics, exercises, and suggestions. In advance of a meeting, frame a problem or issue to address.', 'eventimg/team-meeting.png'),
(37, 5, 'Team building meeting	', '2020-03-30', '2 hours', '13:00:00', 'Team building meeting	', 'Team building meetings should combine work with fun, featuring team building activities that let team members share experiences together, get to know each other	', 'eventimg/5e01235730edc2e32f76847d267cb514.png'),
(41, 7, 'Football', '2020-03-24', '1 hours', '23:11:00', 'About Football', 'We are organizing an event of football where all employees can able to play football we are organizing this event in 24-3-2020 and this date office will be off and employee can play its favorite game. And the venue is football Ground ', 'eventimg/tttt.jpg'),
(42, 7, 'Cricket', '2020-03-22', '7 hours', '19:00:00', 'About Cricket', 'We are organizing an event of cricket where all employees can able to play cricket we are organizing this event in 22-3-2020 and this date office will be off and employee can play its favourite game. And the venue is National Stadium ', 'eventimg/sarfraz240119.png'),
(44, 7, 'Basketball	', '2020-03-18', '3 hours', '23:00:00', 'About Basketball	', 'We are organizing an event of Basketball where all employees can able to play Basketball we are organizing this event in 22-3-2020 and this date office will be off and employee can play its favourite game. And the venue is Basketball Ground', 'eventimg/zion-lebron.png'),
(46, 6, 'Typing Competition', '2020-04-02', '20 min', '01:11:00', 'About Typing', 'We are organizing an event of Typing Speed test event where all employees can able to compete with each other typing skills we are organizing this event in 2-4-2020 and this date office will be off and employee can take part of this competition', 'eventimg/gettyimages-1145992692-640x640.jpg'),
(47, 6, 'Food competition', '2020-01-04', '1 hours', '15:00:00', 'About Food', 'We are organizing an event of Food competition event where all employees can able to compete with each other Food making skills we are organizing this event in 1-4-2020 and this date office will be off and employee can take part of this competition', 'eventimg/food.jpg'),
(48, 6, 'client competition', '2020-04-05', '12 hours', '17:04:00', 'About client', 'We are organizing an event of Client Competition event where all employees can able to compete with each other for making more client. We are organizing this event in 5-4-2020 and this date office will be off and employee can take part of this competition', 'eventimg/bb.png');

-- --------------------------------------------------------

--
-- Table structure for table `participant`
--

CREATE TABLE IF NOT EXISTS `participant` (
  `id` int(11) NOT NULL,
  `event_id` int(11) NOT NULL,
  `employee_id` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=52 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `participant`
--

INSERT INTO `participant` (`id`, `event_id`, `employee_id`) VALUES
(49, 41, 67),
(50, 37, 68),
(51, 46, 71);

-- --------------------------------------------------------

--
-- Table structure for table `role_table`
--

CREATE TABLE IF NOT EXISTS `role_table` (
  `role` int(11) NOT NULL,
  `role_name` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `role_table`
--

INSERT INTO `role_table` (`role`, `role_name`) VALUES
(1, 'Admin'),
(2, 'Employee');

-- --------------------------------------------------------

--
-- Table structure for table `winner`
--

CREATE TABLE IF NOT EXISTS `winner` (
  `id` int(11) NOT NULL,
  `p_id` int(11) NOT NULL,
  `prize` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=70 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `winner`
--

INSERT INTO `winner` (`id`, `p_id`, `prize`) VALUES
(67, 50, '16000'),
(68, 51, '16000'),
(69, 49, '16000');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employee_register1`
--
ALTER TABLE `employee_register1`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD KEY `role` (`role`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cat` (`category`);

--
-- Indexes for table `participant`
--
ALTER TABLE `participant`
  ADD PRIMARY KEY (`id`),
  ADD KEY `event_id` (`event_id`),
  ADD KEY `employee_id` (`employee_id`);

--
-- Indexes for table `role_table`
--
ALTER TABLE `role_table`
  ADD PRIMARY KEY (`role`);

--
-- Indexes for table `winner`
--
ALTER TABLE `winner`
  ADD PRIMARY KEY (`id`),
  ADD KEY `winner_ibfk_1` (`p_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `employee_register1`
--
ALTER TABLE `employee_register1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=72;
--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=49;
--
-- AUTO_INCREMENT for table `participant`
--
ALTER TABLE `participant`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=52;
--
-- AUTO_INCREMENT for table `role_table`
--
ALTER TABLE `role_table`
  MODIFY `role` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `winner`
--
ALTER TABLE `winner`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=70;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `employee_register1`
--
ALTER TABLE `employee_register1`
  ADD CONSTRAINT `employee_register1_ibfk_1` FOREIGN KEY (`role`) REFERENCES `role_table` (`role`);

--
-- Constraints for table `events`
--
ALTER TABLE `events`
  ADD CONSTRAINT `events_ibfk_1` FOREIGN KEY (`category`) REFERENCES `category` (`id`);

--
-- Constraints for table `participant`
--
ALTER TABLE `participant`
  ADD CONSTRAINT `participant_ibfk_2` FOREIGN KEY (`employee_id`) REFERENCES `employee_register1` (`id`),
  ADD CONSTRAINT `participant_ibfk_3` FOREIGN KEY (`event_id`) REFERENCES `events` (`id`);

--
-- Constraints for table `winner`
--
ALTER TABLE `winner`
  ADD CONSTRAINT `winner_ibfk_1` FOREIGN KEY (`p_id`) REFERENCES `participant` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
