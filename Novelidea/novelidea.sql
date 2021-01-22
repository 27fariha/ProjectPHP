-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 15, 2020 at 12:28 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `novelidea`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `Admin_ID` int(11) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `Gender` varchar(100) NOT NULL,
  `Image` varchar(100) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`Admin_ID`, `Name`, `Gender`, `Image`, `Email`, `Password`) VALUES
(9, 'Bilal Misbah', 'Male', '../images/WhatsApp Image 2018-07-18 at 9.55.32 PM.jpeg', 'bilalmisbah@gmail.com', 'bilal'),
(10, 'Muhammad Zain', 'Male', '../images/WhatsApp Image 2018-07-18 at 9.55.31 PM.jpeg', 'mohammadzain77@hotmail.com', 'zain');

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `Book_ID` int(11) NOT NULL,
  `Book_Name` varchar(100) NOT NULL,
  `Brief_Description` varchar(100) NOT NULL,
  `Detailed_Description` varchar(250) NOT NULL,
  `Author` varchar(100) NOT NULL,
  `Release_Date` date NOT NULL,
  `Category_ID_F` int(11) NOT NULL,
  `Price` int(11) DEFAULT NULL,
  `Hardcopy_Availability` varchar(100) NOT NULL,
  `PDF_File` varchar(100) NOT NULL,
  `Book_Cover` varchar(100) NOT NULL,
  `Premium` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`Book_ID`, `Book_Name`, `Brief_Description`, `Detailed_Description`, `Author`, `Release_Date`, `Category_ID_F`, `Price`, `Hardcopy_Availability`, `PDF_File`, `Book_Cover`, `Premium`) VALUES
(16, 'Shoe Dog', 'Shoe Dog is a memoir by Nike co-founder Phil Knight.', 'Shoe Dog is a memoir by Nike co-founder Phil Knight. The memoir chronicles the history of Nike from its early struggles to its evolution into one of the world\'s most recognized and profitable companies.', 'Phil Knight', '2016-04-26', 11, 10, 'Yes', '../ebooks/shoedog.pdf', '../images/shoedog.jpg', 'Yes'),
(17, 'How to Win Friends and Influence People', 'A self-help book written by Dale Carnegie, published in 1936.', 'How to Win Friends and Influence People is a self-help book written by Dale Carnegie, published in 1936. Over 30 million copies have been sold worldwide, making it one of the best-selling books of all time.', 'Dale Carnegie', '1936-07-08', 12, 0, 'No', '../ebooks/howtowin.pdf', '../images/howtowin.jpg', 'No'),
(18, 'The Alchemist', 'The Alchemist is a novel by Brazilian author Paulo Coelho', ' The Alchemist is a novel by Brazilian author Paulo Coelho that was first published in 1988. Originally written in Portuguese, it became a widely translated international bestseller. ', 'Paulo Coelho', '1988-06-15', 6, 15, 'Yes', '../ebooks/thealchemist.pdf', '../images/thealchemist.jpg', 'Yes'),
(19, 'The Subtle Art of Not Giving a F*ck', 'A Counterintuitive Approach to Living a Good Life.', 'In it Manson argues that life\'s struggles give it meaning, and that the mindless positivity of typical self-help books is neither practical nor helpful. It was a bestseller.', 'Mark Manson', '2016-09-14', 12, 12, 'Yes', '../ebooks/thesubtleart.pdf', '../images/thesubtleart.jpg', 'Yes'),
(20, 'The Guns of August', 'It is centered on the first month of World War I.', 'After introductory chapters, Tuchman describes in great detail the opening events of the conflict. Its focus then becomes a military history of the contestants, chiefly the great powers.', 'Barbara W. Tuchman', '1962-02-13', 1, 0, 'No', '../ebooks/TheGunsofAugust.pdf', '../images/TheGunsofAugust.jpg', 'Yes'),
(21, 'Batman: The Killing Joke', 'Batman: The Killing Joke is a 1988 DC Comics one-shot graphic novel featuring the characters Batman.', 'The Killing Joke provides an origin story for the supervillain the Joker, loosely adapted from the 1951 story arc \"The Man Behind the Red Hood!\".', 'Alan Moore', '1988-03-17', 5, 20, 'Yes', '../ebooks/TheKillingJoke.pdf', '../images/TheKillingJoke.jpg', 'No'),
(22, 'Beloved', 'Beloved is a 1987 novel by the American writer Toni Morrison.', 'Set after the American Civil War, it is inspired by the life of Margaret Garner, an African American who escaped slavery in Kentucky in late January 1856 by crossing the Ohio River to Ohio, a free state.', 'Toni Morrison', '2015-10-13', 7, 7, 'Yes', '../ebooks/beloved.pdf', '../images/beloved.jpg', 'No'),
(23, 'A History of the World in 100 Objects', 'Discover how humans created their world from the objects they left behind.', 'Discover how humans created their world from the objects they left behind - from the US Constitution to the first iPhone.', 'Neil MacGregor', '2010-06-18', 9, 0, 'No', '../ebooks/ahistoryofworld.pdf', '../images/ahistoryofworld.jpg', 'No');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `Category_ID` int(11) NOT NULL,
  `Category_Name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`Category_ID`, `Category_Name`) VALUES
(1, 'History'),
(5, 'Comics'),
(6, 'Novels'),
(7, 'Stories'),
(9, 'General Knowledge'),
(11, 'Autobiographies'),
(12, 'Self Help');

-- --------------------------------------------------------

--
-- Table structure for table `info`
--

CREATE TABLE `info` (
  `Info_ID` int(11) NOT NULL,
  `phone` int(11) NOT NULL,
  `address` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `fax` int(11) NOT NULL,
  `facebook` varchar(100) NOT NULL,
  `twitter` varchar(100) NOT NULL,
  `instagram` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `info`
--

INSERT INTO `info` (`Info_ID`, `phone`, `address`, `email`, `fax`, `facebook`, `twitter`, `instagram`) VALUES
(2, 36692490, 'Address: SD-1, Block A North Nazimabad Town, Karachi, Karachi City, Sindh 74700', 'administration@anovelidea.com', 90078601, 'https://www.facebook.com/anovelideapk', 'https://www.twitter.com/novelideaygk', 'https://www.instagram.com/a.novel.idea');

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

CREATE TABLE `members` (
  `Member_ID` int(11) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Password` varchar(100) NOT NULL,
  `Card_Details` varchar(100) NOT NULL,
  `Subscription_ID_F` int(11) NOT NULL,
  `Date_Registered` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `members`
--

INSERT INTO `members` (`Member_ID`, `Name`, `Email`, `Password`, `Card_Details`, `Subscription_ID_F`, `Date_Registered`) VALUES
(13, 'Rida Fatima', 'ridafatima@gmail.com', 'rida', 'VISA Gold', 6, '2020-09-15');

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `Message_ID` int(11) NOT NULL,
  `Date_Sent` date NOT NULL,
  `Sender_Name` varchar(100) NOT NULL,
  `Sender_Email` varchar(100) NOT NULL,
  `Subject` varchar(100) NOT NULL,
  `Message` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`Message_ID`, `Date_Sent`, `Sender_Name`, `Sender_Email`, `Subject`, `Message`) VALUES
(4, '2020-09-15', 'Bilal Misbah', 'bilalmisbah@gmail.com', 'Hello', 'Hello Admin!');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `grand_total` float(10,2) NOT NULL,
  `created` datetime NOT NULL,
  `phone` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `Address` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `status` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `customer_id`, `grand_total`, `created`, `phone`, `Address`, `status`) VALUES
(11, 13, 12.00, '2020-09-12 10:09:18', '03042341871', 'Nazimabad Block-1, Karachi', 'Delivered'),
(12, 13, 14.00, '2020-09-13 20:08:59', '03001591871', 'Nazimabad Block-3, Karachi', 'Pending'),
(13, 13, 89.00, '2020-09-13 20:30:21', '03042341871', 'Nazimabad Block-1, Karachi', 'Cancelled'),
(14, 13, 20.00, '2020-09-14 00:19:42', '03042341871', 'Nazimabad Block-1, Karachi', 'Pending'),
(36, 13, 10.00, '2020-09-14 01:53:21', '03042341871', 'Nazimabad Block-1, Karachi', 'Pending'),
(37, 13, 10.00, '2020-09-14 01:57:00', '03042341871', 'Nazimabad Block-1, Karachi', 'Pending'),
(38, 13, 12.00, '2020-09-14 01:57:55', '03042341871', 'Nazimabad Block-1, Karachi', 'Pending'),
(39, 13, 32.00, '2020-09-14 01:58:28', '03042341871', 'Nazimabad Block-1, Karachi', 'Pending'),
(40, 13, 32.00, '2020-09-14 01:59:42', '03042341871', 'Nazimabad Block-1, Karachi', 'Pending'),
(41, 13, 32.00, '2020-09-14 02:02:50', '03042341871', 'Nazimabad Block-1, Karachi', 'Pending');

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
(16, 11, 19, 1),
(17, 12, 22, 2),
(18, 13, 22, 1),
(19, 13, 16, 2),
(20, 13, 19, 1),
(21, 13, 21, 1),
(22, 13, 18, 2),
(23, 14, 21, 1),
(52, 36, 16, 1),
(53, 37, 16, 1),
(54, 38, 19, 1),
(55, 39, 16, 2),
(56, 39, 19, 1),
(57, 40, 19, 1),
(58, 40, 16, 2),
(59, 41, 19, 1),
(60, 41, 16, 2);

-- --------------------------------------------------------

--
-- Table structure for table `subscription`
--

CREATE TABLE `subscription` (
  `Subscription_ID` int(11) NOT NULL,
  `Subscription_Name` varchar(100) NOT NULL,
  `Duration` varchar(100) NOT NULL,
  `Charges` int(11) DEFAULT NULL,
  `Description` varchar(250) NOT NULL,
  `Image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `subscription`
--

INSERT INTO `subscription` (`Subscription_ID`, `Subscription_Name`, `Duration`, `Charges`, `Description`, `Image`) VALUES
(3, 'Gold', 'Yearly', 1000, ' Access to all premium and non-premium eBooks and Cash on delivery services. ', '../images/gold.jpg'),
(6, 'Silver', 'Half-Yearly', 500, 'Access to non-premium eBooks and Cash on delivery services.', '../images/silver.jpg'),
(7, 'Bronze', 'Lifetime', 0, 'Access to Cash on delivery services.', '../images/bronze.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`Admin_ID`);

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`Book_ID`),
  ADD KEY `Category_ID` (`Category_ID_F`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`Category_ID`);

--
-- Indexes for table `info`
--
ALTER TABLE `info`
  ADD PRIMARY KEY (`Info_ID`);

--
-- Indexes for table `members`
--
ALTER TABLE `members`
  ADD PRIMARY KEY (`Member_ID`),
  ADD KEY `Subscription_ID_F` (`Subscription_ID_F`),
  ADD KEY `Subscription_ID_F_2` (`Subscription_ID_F`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`Message_ID`);

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
-- Indexes for table `subscription`
--
ALTER TABLE `subscription`
  ADD PRIMARY KEY (`Subscription_ID`),
  ADD KEY `Subscription_Name` (`Subscription_Name`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `Admin_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
  MODIFY `Book_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `Category_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `info`
--
ALTER TABLE `info`
  MODIFY `Info_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `members`
--
ALTER TABLE `members`
  MODIFY `Member_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `Message_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `order_items`
--
ALTER TABLE `order_items`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- AUTO_INCREMENT for table `subscription`
--
ALTER TABLE `subscription`
  MODIFY `Subscription_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `books`
--
ALTER TABLE `books`
  ADD CONSTRAINT `books_ibfk_1` FOREIGN KEY (`Category_ID_F`) REFERENCES `category` (`Category_ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `members`
--
ALTER TABLE `members`
  ADD CONSTRAINT `members_ibfk_1` FOREIGN KEY (`Subscription_ID_F`) REFERENCES `subscription` (`Subscription_ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`customer_id`) REFERENCES `members` (`Member_ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `order_items`
--
ALTER TABLE `order_items`
  ADD CONSTRAINT `order_items_ibfk_1` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `order_items_ibfk_2` FOREIGN KEY (`product_id`) REFERENCES `books` (`Book_ID`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
