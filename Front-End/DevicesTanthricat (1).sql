-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Apr 23, 2020 at 05:34 AM
-- Server version: 8.0.19-0ubuntu0.19.10.3
-- PHP Version: 7.3.11-0ubuntu0.19.10.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `appliances`
--

-- --------------------------------------------------------

--
-- Table structure for table `DevicesTanthricat`
--

CREATE TABLE `DevicesTanthricat` (
  `KeyID` int NOT NULL DEFAULT '0',
  `Model` varchar(30) NOT NULL DEFAULT '0',
  `Nickname` varchar(25) NOT NULL DEFAULT '',
  `Name` varchar(30) NOT NULL,
  `ManufacturerName` varchar(30) NOT NULL,
  `EnergyRating` int NOT NULL,
  `Category` varchar(30) NOT NULL,
  `State` tinyint(1) NOT NULL DEFAULT '1',
  `Room` varchar(30) DEFAULT NULL,
  `LastOnDate` varchar(15) DEFAULT NULL,
  `LastOnTime` varchar(15) DEFAULT NULL,
  `EnergyUsed` int DEFAULT NULL,
  `Duration` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `DevicesTanthricat`
--

INSERT INTO `DevicesTanthricat` (`KeyID`, `Model`, `Nickname`, `Name`, `ManufacturerName`, `EnergyRating`, `Category`, `State`, `Room`, `LastOnDate`, `LastOnTime`, `EnergyUsed`, `Duration`) VALUES
(12345678, '32LM6300PLA', '66', 'LG 32', 'LG', 36, 'General Appliances', 1, 'Bedroom1', '2020/03/14', '03:28:38pm', 20, 20),
(12345678, '22222222', 'BedLight', 'samsung light', 'samsung', 222, 'Lighting', 0, 'Bedroom1', '2020/03/14', '03:28:48pm', 46, 60),
(12345678, 'PHETL', 'BedsideLamp', 'PHILIPS Hue Explore Table Lamp', 'PHILIPS', 6, 'Lighting', 0, 'MasterBedroom', '2020/03/14', '03:28:51pm', 43, 40),
(12345678, '5555555', 'boiler', 'house boiler', 'unsure', 55, 'heating-appliances', 0, 'UltilityRoom', '2020/03/17', '08:22:41pm', 79, 170),
(12345678, 'UE43RU7470UXXU', 'saad', 'SAMSUNG 43', 'SAMSUNG', 70, 'TV / Entertainment', 0, 'LivingRoom', '2020/03/14', '03:29:04pm', 12, 90),
(12345678, '12312312321', 'test1', '123', 'LG123', 36, 'General Appliances', 0, 'Kitchen', '2020/03/17', '08:21:06pm', 22, 30),
(12345678, 'CID641BB', 'testing1', 'HOTPOINT Smart Electric Induct', 'HOTPOINT', 230, 'kitchen', 0, 'Kitchen', '2020/03/17', '06:52:34pm', 69, 10),
(12345678, '11111111', 'tv', 'samsung tv', 'samsung', 333, 'TV / Entertainment', 0, 'Kitchen', '2020/03/17', '08:21:26pm', 65, 120);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `DevicesTanthricat`
--
ALTER TABLE `DevicesTanthricat`
  ADD PRIMARY KEY (`KeyID`,`Nickname`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
