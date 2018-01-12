-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 12, 2018 at 10:35 AM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bileezy`
--

-- --------------------------------------------------------

--
-- Table structure for table `car_body_type`
--

CREATE TABLE IF NOT EXISTS `car_body_type` (
  `body_type` varchar(50) COLLATE utf8_danish_ci NOT NULL,
  PRIMARY KEY (`body_type`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_danish_ci;

--
-- Dumping data for table `car_body_type`
--

REPLACE INTO `car_body_type` (`body_type`) VALUES
('4x4'),
('Cabriolet'),
('Coupe'),
('Hatchback'),
('Sedan'),
('Stationcar'),
('SUV'),
('Targa');

-- --------------------------------------------------------

--
-- Table structure for table `car_brands`
--

CREATE TABLE IF NOT EXISTS `car_brands` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `brand` varchar(50) COLLATE utf8_danish_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_danish_ci;

--
-- Dumping data for table `car_brands`
--

REPLACE INTO `car_brands` (`id`, `brand`) VALUES
(1, 'BMW'),
(2, 'Audio');

-- --------------------------------------------------------

--
-- Table structure for table `car_condition`
--

CREATE TABLE IF NOT EXISTS `car_condition` (
  `car_condition` varchar(50) COLLATE utf8_danish_ci NOT NULL,
  PRIMARY KEY (`car_condition`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_danish_ci;

--
-- Dumping data for table `car_condition`
--

REPLACE INTO `car_condition` (`car_condition`) VALUES
('Brugt'),
('Ny');

-- --------------------------------------------------------

--
-- Table structure for table `car_model_info`
--

CREATE TABLE IF NOT EXISTS `car_model_info` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `model` varchar(50) COLLATE utf8_danish_ci DEFAULT NULL,
  `brand` int(11) DEFAULT NULL,
  `car_body_type` varchar(50) COLLATE utf8_danish_ci DEFAULT NULL,
  `equipment_model` varchar(50) COLLATE utf8_danish_ci DEFAULT NULL,
  `engine_size` float DEFAULT NULL COMMENT 'liter with decimal',
  `engine_type` varchar(50) COLLATE utf8_danish_ci DEFAULT NULL,
  `horsepower` tinyint(4) DEFAULT NULL,
  `torque` tinyint(4) DEFAULT NULL,
  `consumption` float DEFAULT NULL COMMENT 'kilometer/liter',
  `top_speed` tinyint(4) DEFAULT NULL,
  `acceleration` float DEFAULT NULL COMMENT '0-100km/t in seconds',
  `transmission_type` varchar(50) COLLATE utf8_danish_ci DEFAULT NULL,
  `gears` tinyint(4) DEFAULT NULL,
  `new_price` int(11) DEFAULT NULL,
  `car_weight` tinyint(4) DEFAULT NULL COMMENT 'kg',
  `doors` tinyint(4) DEFAULT NULL,
  `airbags` tinyint(4) DEFAULT NULL,
  `cylinders` tinyint(4) DEFAULT NULL,
  `drivetrain` varchar(50) COLLATE utf8_danish_ci DEFAULT NULL,
  `load_capacity` varchar(50) COLLATE utf8_danish_ci DEFAULT NULL,
  `seats` tinyint(4) DEFAULT NULL,
  `fuel_type` varchar(50) COLLATE utf8_danish_ci DEFAULT NULL,
  `tank_capacity` int(11) DEFAULT NULL COMMENT 'liter',
  `year_start` year(4) DEFAULT NULL COMMENT 'year the model started',
  `year_end` year(4) DEFAULT NULL COMMENT 'year the model ended',
  PRIMARY KEY (`id`),
  KEY `model` (`model`),
  KEY `car_body_type` (`car_body_type`),
  KEY `fuel_type` (`fuel_type`),
  KEY `drivetrain` (`drivetrain`),
  KEY `transmission_type` (`transmission_type`),
  KEY `engine_type` (`engine_type`),
  KEY `brand` (`brand`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8 COLLATE=utf8_danish_ci;

--
-- Dumping data for table `car_model_info`
--

REPLACE INTO `car_model_info` (`id`, `model`, `brand`, `car_body_type`, `equipment_model`, `engine_size`, `engine_type`, `horsepower`, `torque`, `consumption`, `top_speed`, `acceleration`, `transmission_type`, `gears`, `new_price`, `car_weight`, `doors`, `airbags`, `cylinders`, `drivetrain`, `load_capacity`, `seats`, `fuel_type`, `tank_capacity`, `year_start`, `year_end`) VALUES
(20, 'Cancer', 1, '4x4', '', 0, 'Række 3', 0, 0, 0, 0, 0, 'Automatisk', 0, 0, 0, 1, 1, 2, 'Baghjulstræk', '', 1, 'Benzin', 0, 0000, 0000);

-- --------------------------------------------------------

--
-- Table structure for table `drivetrain`
--

CREATE TABLE IF NOT EXISTS `drivetrain` (
  `drivetrain` varchar(50) COLLATE utf8_danish_ci NOT NULL,
  PRIMARY KEY (`drivetrain`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_danish_ci;

--
-- Dumping data for table `drivetrain`
--

REPLACE INTO `drivetrain` (`drivetrain`) VALUES
('Baghjulstræk'),
('Firehjulstræk'),
('Forhjulstræk');

-- --------------------------------------------------------

--
-- Table structure for table `engine_type`
--

CREATE TABLE IF NOT EXISTS `engine_type` (
  `engine_type` varchar(50) COLLATE utf8_danish_ci NOT NULL,
  PRIMARY KEY (`engine_type`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_danish_ci;

--
-- Dumping data for table `engine_type`
--

REPLACE INTO `engine_type` (`engine_type`) VALUES
('Række 3'),
('Række 4'),
('Række 5'),
('Række 6'),
('V10'),
('V12'),
('V6'),
('V8'),
('W12'),
('W16');

-- --------------------------------------------------------

--
-- Table structure for table `fuel_type`
--

CREATE TABLE IF NOT EXISTS `fuel_type` (
  `type` varchar(50) COLLATE utf8_danish_ci NOT NULL,
  PRIMARY KEY (`type`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_danish_ci;

--
-- Dumping data for table `fuel_type`
--

REPLACE INTO `fuel_type` (`type`) VALUES
('Benzin'),
('Brint'),
('Diesel'),
('El'),
('Hybrid (Benzin)'),
('Hybrid (Diesel)');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE IF NOT EXISTS `products` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `brand` varchar(20) COLLATE utf8_danish_ci NOT NULL,
  `model` int(11) DEFAULT NULL,
  `mileage` int(11) DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `description_text` text COLLATE utf8_danish_ci,
  `car_condition` varchar(50) COLLATE utf8_danish_ci DEFAULT NULL,
  `last_check` date DEFAULT NULL,
  `service_ok` tinyint(1) DEFAULT NULL,
  `color` varchar(50) COLLATE utf8_danish_ci DEFAULT NULL,
  `registration_date` date DEFAULT NULL,
  `seller` int(11) DEFAULT NULL,
  `image_path` varchar(100) COLLATE utf8_danish_ci NOT NULL,
  `creation_date` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  KEY `model` (`model`),
  KEY `condition` (`car_condition`),
  KEY `seller` (`seller`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_danish_ci;

--
-- Dumping data for table `products`
--

REPLACE INTO `products` (`id`, `brand`, `model`, `mileage`, `price`, `description_text`, `car_condition`, `last_check`, `service_ok`, `color`, `registration_date`, `seller`, `image_path`, `creation_date`) VALUES
(3, 'Audio', 20, 120000, 400000, 'God bil', 'Ny', '2017-12-06', 1, 'Sort', '2018-01-09', NULL, 'assets/images/products/5a587e2cb202e0.64388262.jpeg', '2018-01-12 09:21:48');

-- --------------------------------------------------------

--
-- Table structure for table `product_images`
--

CREATE TABLE IF NOT EXISTS `product_images` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `product_id` int(11) DEFAULT NULL,
  `image_path` varchar(150) COLLATE utf8_danish_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `product_id` (`product_id`),
  KEY `image_id` (`image_path`)
) ENGINE=InnoDB AUTO_INCREMENT=73 DEFAULT CHARSET=utf8 COLLATE=utf8_danish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `transmission_type`
--

CREATE TABLE IF NOT EXISTS `transmission_type` (
  `transmission_type` varchar(50) COLLATE utf8_danish_ci NOT NULL,
  PRIMARY KEY (`transmission_type`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_danish_ci;

--
-- Dumping data for table `transmission_type`
--

REPLACE INTO `transmission_type` (`transmission_type`) VALUES
('Automatisk'),
('Manuel');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(50) COLLATE utf8_danish_ci NOT NULL,
  `password` varchar(50) COLLATE utf8_danish_ci NOT NULL,
  `full_name` varchar(100) COLLATE utf8_danish_ci NOT NULL,
  `address` varchar(100) COLLATE utf8_danish_ci NOT NULL,
  `zipcode` smallint(6) NOT NULL,
  `city` varchar(50) COLLATE utf8_danish_ci NOT NULL,
  `phone` smallint(6) NOT NULL,
  `admin` tinyint(1) NOT NULL DEFAULT '0' COMMENT 'boolian for admin rights',
  `creation_date` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_danish_ci;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `car_model_info`
--
ALTER TABLE `car_model_info`
  ADD CONSTRAINT `body_type` FOREIGN KEY (`car_body_type`) REFERENCES `car_body_type` (`body_type`),
  ADD CONSTRAINT `brand` FOREIGN KEY (`brand`) REFERENCES `car_brands` (`id`),
  ADD CONSTRAINT `drivetrain` FOREIGN KEY (`drivetrain`) REFERENCES `drivetrain` (`drivetrain`),
  ADD CONSTRAINT `engine_type` FOREIGN KEY (`engine_type`) REFERENCES `engine_type` (`engine_type`),
  ADD CONSTRAINT `fuel_type` FOREIGN KEY (`fuel_type`) REFERENCES `fuel_type` (`type`),
  ADD CONSTRAINT `transmission_type` FOREIGN KEY (`transmission_type`) REFERENCES `transmission_type` (`transmission_type`);

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `condition` FOREIGN KEY (`car_condition`) REFERENCES `car_condition` (`car_condition`),
  ADD CONSTRAINT `model` FOREIGN KEY (`model`) REFERENCES `car_model_info` (`id`),
  ADD CONSTRAINT `product_model` FOREIGN KEY (`model`) REFERENCES `car_model_info` (`id`),
  ADD CONSTRAINT `seller` FOREIGN KEY (`seller`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
