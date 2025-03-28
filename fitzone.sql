-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Nov 17, 2024 at 01:43 PM
-- Server version: 8.2.0
-- PHP Version: 8.2.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fitzone`
--

-- --------------------------------------------------------

--
-- Table structure for table `book`
--

DROP TABLE IF EXISTS `book`;
CREATE TABLE IF NOT EXISTS `book` (
  `id` int NOT NULL AUTO_INCREMENT,
  `FullName` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Number` varchar(50) NOT NULL,
  `Date` varchar(50) NOT NULL,
  `Session` varchar(50) NOT NULL,
  `Gender` enum('male','female','other') NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `book`
--

INSERT INTO `book` (`id`, `FullName`, `Email`, `Number`, `Date`, `Session`, `Gender`) VALUES
(1, 'Priyashan Prabhashwara', 'priyashan419@gmail.com', '0763079330', '2024-11-19', 'Cardio', 'male'),
(3, 'Pawan Mihisara', 'pawanmihisara1@gmail.com', '0752145695', '2024-11-26', 'Cardio', 'male'),
(4, 'Nirsaha Savindi', 'nirashasavi2001@gmail.com', '0751234567', '2025-02-01', 'Yoga', 'female'),
(5, 'Sithara Roshana', 'sitharar345@gmail.com', '0715463214', '2025-12-06', 'Strength Training', 'male'),
(6, 'Dilushika Madushani', 'dilushi345@hotmail.com', '0712344567', '2025-01-06', 'Cardio', 'female'),
(7, 'Harry Styles', 'harry45@yahoo.com', '0705569985', '2025-01-25', 'Strength Training', 'male'),
(9, 'Zayn Malik', 'zaynmalikonedirection@gmail.com', '0756254425', '2025-05-01', 'Strength Training', 'male');

-- --------------------------------------------------------

--
-- Table structure for table `query`
--

DROP TABLE IF EXISTS `query`;
CREATE TABLE IF NOT EXISTS `query` (
  `id` int NOT NULL AUTO_INCREMENT,
  `Name` varchar(50) NOT NULL,
  `Email` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `Query` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=21 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `query`
--

INSERT INTO `query` (`id`, `Name`, `Email`, `Query`) VALUES
(20, 'Priyashan Prabhashwara', 'priyashan419@gmail.com', 'Perfect!'),
(14, 'Priyashan Prabhashwara', 'priyashan419@gmail.com', 'FitZone has completely transformed my fitness jour'),
(17, 'Chirantha Kumarasiri', 'chirantha123@gmail.com', 'What I love about FitZone is the variety of classe'),
(16, 'Nirsaha Savindi', 'nirashasavi2001@gmail.com', 'The group classes at FitZone are amazing! There’s '),
(15, 'Dilushika Madushani', 'dilushi345@hotmail.com', 'I love how clean and well-maintained the facilitie');

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

DROP TABLE IF EXISTS `registration`;
CREATE TABLE IF NOT EXISTS `registration` (
  `id` int NOT NULL AUTO_INCREMENT,
  `FirstName` varchar(50) NOT NULL,
  `LastName` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Number` varchar(50) NOT NULL,
  `Password` varchar(50) NOT NULL,
  `Gender` enum('male','female','other') NOT NULL,
  `Plan` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`id`, `FirstName`, `LastName`, `Email`, `Number`, `Password`, `Gender`, `Plan`) VALUES
(6, 'Chirantha ', 'Kumarasiri', 'chirantha123@gmail.com', '0712345678', '12345', 'male', 'Premium'),
(5, 'Sithara', 'Roshana', 'sitharar345@gmail.com', '0756547899', '101010', 'male', 'Pro'),
(9, 'Nirasha', 'Savindi', 'nirashasavi2001@gmail.com', '0701234567', '55555', 'female', 'Premium'),
(10, 'Geeshan', 'Kumara', 'geeshankumara@gmail.com', '0763079330', '505050', 'male', 'Pro'),
(11, 'Priyashan', 'Prabhashwara', 'priyashan419@gmail.com', '0763079330', '123456', 'male', 'Premium'),
(12, 'Priyashan', 'Prabhashwara', 'priyashan419@gmail.com', '0763079330', '101010', 'male', 'Premium'),
(13, 'Shehan', 'GLK', 'shehang@gmail.com', '0765454552', '8493', 'male', 'Premium');

-- --------------------------------------------------------

--
-- Table structure for table `shopform`
--

DROP TABLE IF EXISTS `shopform`;
CREATE TABLE IF NOT EXISTS `shopform` (
  `Email` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `ProductName` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `Quantity` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `shopform`
--

INSERT INTO `shopform` (`Email`, `ProductName`, `Quantity`) VALUES
('priyashan419@gmail.com', 'Kettlebells', '2'),
('priyashan419@gmail.com', 'Kettlebells', '55'),
('priyashan419@gmail.com', 'Dumbell', '2'),
('priyashan419@gmail.com', 'Kettlebells', '52'),
('priyashan419@gmail.com', 'Kettlebells2', '3'),
('priyashan419@gmail.com', 'Kettlebells', '69'),
('priyashan419@gmail.com', 'Protein Powders', '2');

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

DROP TABLE IF EXISTS `staff`;
CREATE TABLE IF NOT EXISTS `staff` (
  `id` int NOT NULL AUTO_INCREMENT,
  `Username` varchar(50) NOT NULL,
  `Password` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`id`, `Username`, `Password`) VALUES
(1, 'priyashan419@gmail.com', 'ABC@#123'),
(2, 'Ishan ', '12345'),
(3, 'lochana', '12345'),
(4, 'priya', '12345'),
(5, 'priya', '12345'),
(6, 'priya', '12345'),
(7, 'priyashan419@gmail.com', '12345'),
(8, 'dasun madushan', '2020');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
