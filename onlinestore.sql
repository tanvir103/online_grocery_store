-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 25, 2023 at 08:07 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `onlinestore`
--

-- --------------------------------------------------------

--
-- Table structure for table `paymentinfo`
--

CREATE TABLE `paymentinfo` (
  `PaymentID` int(11) NOT NULL,
  `UserID` int(11) NOT NULL,
  `ProductID` int(11) NOT NULL,
  `Amount` varchar(50) NOT NULL,
  `PaymentDate` varchar(40) NOT NULL,
  `PaymentStatus` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `paymentinfo`
--

INSERT INTO `paymentinfo` (`PaymentID`, `UserID`, `ProductID`, `Amount`, `PaymentDate`, `PaymentStatus`) VALUES
(10, 12, 2, '0', '06-09-2023', 'Active'),
(11, 12, 3, '0', '06-09-2023', 'Active'),
(12, 12, 2, '0', '06-09-2023', 'Inactive'),
(13, 12, 2, '300', '06-09-2023', 'Active'),
(14, 11, 2, '900', '04-11-2023', 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `productinfo`
--

CREATE TABLE `productinfo` (
  `ProductID` int(11) NOT NULL,
  `ProductName` varchar(50) NOT NULL,
  `ProductCategory` varchar(50) NOT NULL,
  `ProductPrice` varchar(40) NOT NULL,
  `ProductQuantity` varchar(40) NOT NULL,
  `ProductPicture` varchar(200) NOT NULL,
  `UserID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `productinfo`
--

INSERT INTO `productinfo` (`ProductID`, `ProductName`, `ProductCategory`, `ProductPrice`, `ProductQuantity`, `ProductPicture`, `UserID`) VALUES
(1, 'NAN Milk', 'Dairy', '200', '6', '../Image/Product Picture/68b5edcb6f58da5a98ab999e24e63c58.jpg', 0),
(2, 'Marks Milk', 'Dairy', '300', '-2', '../Image/Product Picture/images.jpeg', 0),
(3, 'Tiger', 'Frozen Foods', '40', '19', '../Image/Product Picture/can-webside00.png', 0);

-- --------------------------------------------------------

--
-- Table structure for table `userinfo`
--

CREATE TABLE `userinfo` (
  `UserID` int(11) NOT NULL,
  `Password` varchar(100) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Username` varchar(100) NOT NULL,
  `Phone` varchar(40) NOT NULL,
  `Role` varchar(40) NOT NULL,
  `Status` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `userinfo`
--

INSERT INTO `userinfo` (`UserID`, `Password`, `Email`, `Username`, `Phone`, `Role`, `Status`) VALUES
(6, '1234', 'imran@gmail.com', 'imran103', '01771266034', 'Sales Person', 'Active'),
(7, '1234', 'ta', 'tanvir', '01746140732', 'Admin', 'Active'),
(11, '12345678', 'tanvirh103@gmail.com', 'tanvirh103', '01534103985', 'Customer', 'Active'),
(12, '12345678', 'tanv5656irh103@gmail.com', 'Tanvir Hasan Tamal', '01534103985', 'Customer', 'Active');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `paymentinfo`
--
ALTER TABLE `paymentinfo`
  ADD PRIMARY KEY (`PaymentID`);

--
-- Indexes for table `productinfo`
--
ALTER TABLE `productinfo`
  ADD PRIMARY KEY (`ProductID`);

--
-- Indexes for table `userinfo`
--
ALTER TABLE `userinfo`
  ADD PRIMARY KEY (`UserID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `paymentinfo`
--
ALTER TABLE `paymentinfo`
  MODIFY `PaymentID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `productinfo`
--
ALTER TABLE `productinfo`
  MODIFY `ProductID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `userinfo`
--
ALTER TABLE `userinfo`
  MODIFY `UserID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
