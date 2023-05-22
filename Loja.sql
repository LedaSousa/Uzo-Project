-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Feb 02, 2023 at 05:25 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `Loja`
--

-- --------------------------------------------------------

--
-- Table structure for table `Accessories`
--

CREATE TABLE `Accessories` (
  `nome` varchar(255) NOT NULL,
  `id` int(11) NOT NULL,
  `modelo` varchar(55) DEFAULT NULL,
  `marca` varchar(55) DEFAULT NULL,
  `preco_cheio` double NOT NULL,
  `cor` varchar(55) NOT NULL,
  `desconto` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `Accessories`
--

INSERT INTO `Accessories` (`nome`, `id`, `modelo`, `marca`, `preco_cheio`, `cor`, `desconto`) VALUES
('Apple AirPods com Caixa de carregamento', 1, 'Airpods', 'Apple', 159.99, 'branco', 0),
('Carregador Apple MagSafe', 2, 'Magsafe', 'Apple', 45.99, 'branco', 0),
('Capa em silicone com MagSafe para iPhone 14 Pro Max', 3, 'MagSafe', 'Apple', 59.99, 'Rosa Giz', 0),
('Carregador Samsung 45W + Cabo USB-C', 4, '45W', 'Samsung', 49.99, 'preto', 10),
('Carregador Rápido Sem Fios Samsung 15W', 5, 'Rápido sem fios', 'Samsung', 59.99, 'preto', 10),
('Coluna Portátil Xiaomi Mi Compact Bluetooth 2', 6, 'Mi Compact', 'Xiaomi', 14.99, 'branco', 0),
('Carregador Wireless para Carro Xiaomi Mi 20W', 7, 'Wireless', 'Xiaomi', 34.99, 'branco', 15),
('Powerbank Xiaomi Redmi 20000 mAh', 8, 'Redmi', 'Xiaomi', 34.99, 'preto', 5);

-- --------------------------------------------------------

--
-- Table structure for table `Orders`
--

CREATE TABLE `Orders` (
  `OrderId` int(11) NOT NULL,
  `Client` varchar(255) DEFAULT NULL,
  `DateIn` date DEFAULT NULL,
  `ProductsQuantity` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `Permissions`
--

CREATE TABLE `Permissions` (
  `PermId` int(11) NOT NULL,
  `PermissionType` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `ProfilesType`
--

CREATE TABLE `ProfilesType` (
  `UserID` int(11) NOT NULL,
  `PermID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `Smartphones`
--

CREATE TABLE `Smartphones` (
  `NameTitle` varchar(255) NOT NULL,
  `SmartphoneId` int(11) NOT NULL,
  `Model` varchar(55) DEFAULT NULL,
  `Brand` varchar(55) DEFAULT NULL,
  `RawPrice` double DEFAULT NULL,
  `Color` varchar(55) NOT NULL,
  `Discount` int(11) NOT NULL,
  `MainImg` varchar(255) NOT NULL,
  `Description` varchar(2000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `Smartphones`
--

INSERT INTO `Smartphones` (`NameTitle`, `SmartphoneId`, `Model`, `Brand`, `RawPrice`, `Color`, `Discount`, `MainImg`, `Description`) VALUES
('Apple iPhone 13 128GB', 1, 'iphone 13', 'apple', 929.99, 'verde', 0, '', ''),
('Apple iPhone 14 128GB', 2, 'iphone 14', 'apple', 1039.99, 'meia-noite', 0, '', ''),
('Apple iPhone 11 64GB', 3, 'iphone 11', 'apple', 539.99, 'preto', 0, '', ''),
('Samsung Galaxy A53 5G 128GB', 4, 'A53', 'samsung', 419.99, 'branco', 0, '', ''),
('Samsung Galaxy S22 Ultra 5G 512GB', 5, 'S22', 'samsung', 1329.99, 'preto', 130, '', ''),
('Samsung Galaxy A33 5G 128GB', 6, 'A33', 'samsung', 329.99, 'preto', 0, '', ''),
('Xiaomi Redmi Note 11 Pro 5G', 7, 'Redmi Note 11', 'Xiaomi', 379.99, 'cinza', 0, '', ''),
('Xiaomi 12T 5G 256GB', 8, '12T', 'Xiaomi', 649.99, 'preto', 0, '', ''),
('Xiaomi Redmi 9C NFC', 9, 'Redmi 9C', 'Xiaomi', 149.99, 'cinzento', 0, '', '');

-- --------------------------------------------------------

--
-- Table structure for table `Users`
--

CREATE TABLE `Users` (
  `UserId` int(11) NOT NULL,
  `Name` varchar(55) DEFAULT NULL,
  `Address` varchar(55) DEFAULT NULL,
  `Phone_number` int(11) DEFAULT NULL,
  `Email` varchar(255) DEFAULT NULL,
  `PassW` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `UsersLogin`
--

CREATE TABLE `UsersLogin` (
  `UserId` int(11) NOT NULL,
  `UserName` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Accessories`
--
ALTER TABLE `Accessories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `Orders`
--
ALTER TABLE `Orders`
  ADD PRIMARY KEY (`OrderId`);

--
-- Indexes for table `Permissions`
--
ALTER TABLE `Permissions`
  ADD PRIMARY KEY (`PermId`);

--
-- Indexes for table `ProfilesType`
--
ALTER TABLE `ProfilesType`
  ADD PRIMARY KEY (`UserID`,`PermID`),
  ADD KEY `PermID` (`PermID`);

--
-- Indexes for table `Smartphones`
--
ALTER TABLE `Smartphones`
  ADD PRIMARY KEY (`SmartphoneId`),
  ADD KEY `Nome` (`NameTitle`);

--
-- Indexes for table `Users`
--
ALTER TABLE `Users`
  ADD PRIMARY KEY (`UserId`);

--
-- Indexes for table `UsersLogin`
--
ALTER TABLE `UsersLogin`
  ADD PRIMARY KEY (`UserId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Accessories`
--
ALTER TABLE `Accessories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `Orders`
--
ALTER TABLE `Orders`
  MODIFY `OrderId` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `Permissions`
--
ALTER TABLE `Permissions`
  MODIFY `PermId` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `Smartphones`
--
ALTER TABLE `Smartphones`
  MODIFY `SmartphoneId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `UsersLogin`
--
ALTER TABLE `UsersLogin`
  MODIFY `UserId` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `ProfilesType`
--
ALTER TABLE `ProfilesType`
  ADD CONSTRAINT `profilestype_ibfk_1` FOREIGN KEY (`UserID`) REFERENCES `UsersLogin` (`UserId`),
  ADD CONSTRAINT `profilestype_ibfk_2` FOREIGN KEY (`PermID`) REFERENCES `Permissions` (`PermId`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
