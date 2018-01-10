-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 10, 2018 at 12:36 PM
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

CREATE TABLE `car_body_type` (
  `body_type` varchar(50) COLLATE utf8_danish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_danish_ci;

--
-- Dumping data for table `car_body_type`
--

UPDATE `car_body_type` SET `body_type` = '4x4' WHERE `car_body_type`.`body_type` = '4x4';
UPDATE `car_body_type` SET `body_type` = 'Cabriolet' WHERE `car_body_type`.`body_type` = 'Cabriolet';
UPDATE `car_body_type` SET `body_type` = 'Coupe' WHERE `car_body_type`.`body_type` = 'Coupe';
UPDATE `car_body_type` SET `body_type` = 'Hatchback' WHERE `car_body_type`.`body_type` = 'Hatchback';
UPDATE `car_body_type` SET `body_type` = 'Sedan' WHERE `car_body_type`.`body_type` = 'Sedan';
UPDATE `car_body_type` SET `body_type` = 'Stationcar' WHERE `car_body_type`.`body_type` = 'Stationcar';
UPDATE `car_body_type` SET `body_type` = 'SUV' WHERE `car_body_type`.`body_type` = 'SUV';
UPDATE `car_body_type` SET `body_type` = 'Targa' WHERE `car_body_type`.`body_type` = 'Targa';

-- --------------------------------------------------------

--
-- Table structure for table `car_brands`
--

CREATE TABLE `car_brands` (
  `brand` varchar(50) COLLATE utf8_danish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_danish_ci;

--
-- Dumping data for table `car_brands`
--

UPDATE `car_brands` SET `brand` = 'Audi' WHERE `car_brands`.`brand` = 'Audi';
UPDATE `car_brands` SET `brand` = 'BMW' WHERE `car_brands`.`brand` = 'BMW';

-- --------------------------------------------------------

--
-- Table structure for table `car_model_info`
--

CREATE TABLE `car_model_info` (
  `id` int(11) NOT NULL,
  `brand` varchar(50) COLLATE utf8_danish_ci DEFAULT NULL,
  `model` varchar(50) COLLATE utf8_danish_ci DEFAULT NULL,
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
  `year_end` year(4) DEFAULT NULL COMMENT 'year the model ended'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_danish_ci;

--
-- Dumping data for table `car_model_info`
--

UPDATE `car_model_info` SET `id` = 16,`brand` = 'Audi',`model` = 'Lort',`car_body_type` = '4x4',`equipment_model` = 'Noget',`engine_size` = 13,`engine_type` = 'Række 3',`horsepower` = 127,`torque` = 127,`consumption` = 1,`top_speed` = 127,`acceleration` = 1,`transmission_type` = 'Automatisk',`gears` = 22,`new_price` = 2147483647,`car_weight` = 127,`doors` = 1,`airbags` = 1,`cylinders` = 1,`drivetrain` = 'Baghjulstræk',`load_capacity` = '400',`seats` = 1,`fuel_type` = 'Benzin',`tank_capacity` = 100,`year_start` = 1999,`year_end` = 2000 WHERE `car_model_info`.`id` = 16;
UPDATE `car_model_info` SET `id` = 19,`brand` = 'BMW',`model` = 'hej',`car_body_type` = '4x4',`equipment_model` = 'hej',`engine_size` = 1,`engine_type` = 'Række 3',`horsepower` = 1,`torque` = 1,`consumption` = 1,`top_speed` = 1,`acceleration` = 1,`transmission_type` = 'Automatisk',`gears` = 3,`new_price` = 111,`car_weight` = 1,`doors` = 1,`airbags` = 1,`cylinders` = 1,`drivetrain` = 'Baghjulstræk',`load_capacity` = '4',`seats` = 1,`fuel_type` = 'Benzin',`tank_capacity` = 6,`year_start` = 1999,`year_end` = 2000 WHERE `car_model_info`.`id` = 19;

-- --------------------------------------------------------

--
-- Table structure for table `condition`
--

CREATE TABLE `condition` (
  `condition` varchar(50) COLLATE utf8_danish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_danish_ci;

--
-- Dumping data for table `condition`
--

UPDATE `condition` SET `condition` = 'Brugt' WHERE `condition`.`condition` = 'Brugt';
UPDATE `condition` SET `condition` = 'Ny' WHERE `condition`.`condition` = 'Ny';

-- --------------------------------------------------------

--
-- Table structure for table `drivetrain`
--

CREATE TABLE `drivetrain` (
  `drivetrain` varchar(50) COLLATE utf8_danish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_danish_ci;

--
-- Dumping data for table `drivetrain`
--

UPDATE `drivetrain` SET `drivetrain` = 'Baghjulstræk' WHERE `drivetrain`.`drivetrain` = 'Baghjulstræk';
UPDATE `drivetrain` SET `drivetrain` = 'Firehjulstræk' WHERE `drivetrain`.`drivetrain` = 'Firehjulstræk';
UPDATE `drivetrain` SET `drivetrain` = 'Forhjulstræk' WHERE `drivetrain`.`drivetrain` = 'Forhjulstræk';

-- --------------------------------------------------------

--
-- Table structure for table `engine_type`
--

CREATE TABLE `engine_type` (
  `engine_type` varchar(50) COLLATE utf8_danish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_danish_ci;

--
-- Dumping data for table `engine_type`
--

UPDATE `engine_type` SET `engine_type` = 'Række 3' WHERE `engine_type`.`engine_type` = 'Række 3';
UPDATE `engine_type` SET `engine_type` = 'Række 4' WHERE `engine_type`.`engine_type` = 'Række 4';
UPDATE `engine_type` SET `engine_type` = 'Række 5' WHERE `engine_type`.`engine_type` = 'Række 5';
UPDATE `engine_type` SET `engine_type` = 'Række 6' WHERE `engine_type`.`engine_type` = 'Række 6';
UPDATE `engine_type` SET `engine_type` = 'V10' WHERE `engine_type`.`engine_type` = 'V10';
UPDATE `engine_type` SET `engine_type` = 'V12' WHERE `engine_type`.`engine_type` = 'V12';
UPDATE `engine_type` SET `engine_type` = 'V6' WHERE `engine_type`.`engine_type` = 'V6';
UPDATE `engine_type` SET `engine_type` = 'V8' WHERE `engine_type`.`engine_type` = 'V8';
UPDATE `engine_type` SET `engine_type` = 'W12' WHERE `engine_type`.`engine_type` = 'W12';
UPDATE `engine_type` SET `engine_type` = 'W16' WHERE `engine_type`.`engine_type` = 'W16';

-- --------------------------------------------------------

--
-- Table structure for table `fuel_type`
--

CREATE TABLE `fuel_type` (
  `type` varchar(50) COLLATE utf8_danish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_danish_ci;

--
-- Dumping data for table `fuel_type`
--

UPDATE `fuel_type` SET `type` = 'Benzin' WHERE `fuel_type`.`type` = 'Benzin';
UPDATE `fuel_type` SET `type` = 'Brint' WHERE `fuel_type`.`type` = 'Brint';
UPDATE `fuel_type` SET `type` = 'Diesel' WHERE `fuel_type`.`type` = 'Diesel';
UPDATE `fuel_type` SET `type` = 'El' WHERE `fuel_type`.`type` = 'El';
UPDATE `fuel_type` SET `type` = 'Hybrid (Benzin)' WHERE `fuel_type`.`type` = 'Hybrid (Benzin)';
UPDATE `fuel_type` SET `type` = 'Hybrid (Diesel)' WHERE `fuel_type`.`type` = 'Hybrid (Diesel)';

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `model` int(11) DEFAULT NULL,
  `mileage` int(11) DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `description` text COLLATE utf8_danish_ci,
  `condition` varchar(50) COLLATE utf8_danish_ci DEFAULT NULL,
  `last_check` date DEFAULT NULL,
  `service_ok` tinyint(1) DEFAULT NULL,
  `color` varchar(50) COLLATE utf8_danish_ci DEFAULT NULL,
  `registration_date` date DEFAULT NULL,
  `year` year(4) DEFAULT NULL,
  `seller` int(11) DEFAULT NULL,
  `creation_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_danish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `product_images`
--

CREATE TABLE `product_images` (
  `id` int(11) NOT NULL,
  `product_id` int(11) DEFAULT NULL,
  `image_path` varchar(150) COLLATE utf8_danish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_danish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `transmission_type`
--

CREATE TABLE `transmission_type` (
  `transmission_type` varchar(50) COLLATE utf8_danish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_danish_ci;

--
-- Dumping data for table `transmission_type`
--

UPDATE `transmission_type` SET `transmission_type` = 'Automatisk' WHERE `transmission_type`.`transmission_type` = 'Automatisk';
UPDATE `transmission_type` SET `transmission_type` = 'Manuel' WHERE `transmission_type`.`transmission_type` = 'Manuel';

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `email` varchar(50) COLLATE utf8_danish_ci NOT NULL,
  `password` varchar(50) COLLATE utf8_danish_ci NOT NULL,
  `full_name` varchar(100) COLLATE utf8_danish_ci NOT NULL,
  `address` varchar(100) COLLATE utf8_danish_ci NOT NULL,
  `zipcode` smallint(6) NOT NULL,
  `city` varchar(50) COLLATE utf8_danish_ci NOT NULL,
  `phone` smallint(6) NOT NULL,
  `admin` tinyint(1) NOT NULL DEFAULT '0' COMMENT 'boolian for admin rights',
  `creation_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_danish_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `car_body_type`
--
ALTER TABLE `car_body_type`
  ADD PRIMARY KEY (`body_type`);

--
-- Indexes for table `car_brands`
--
ALTER TABLE `car_brands`
  ADD PRIMARY KEY (`brand`);

--
-- Indexes for table `car_model_info`
--
ALTER TABLE `car_model_info`
  ADD PRIMARY KEY (`id`),
  ADD KEY `brand` (`brand`),
  ADD KEY `model` (`model`),
  ADD KEY `car_body_type` (`car_body_type`),
  ADD KEY `fuel_type` (`fuel_type`),
  ADD KEY `drivetrain` (`drivetrain`),
  ADD KEY `transmission_type` (`transmission_type`),
  ADD KEY `engine_type` (`engine_type`);

--
-- Indexes for table `condition`
--
ALTER TABLE `condition`
  ADD PRIMARY KEY (`condition`);

--
-- Indexes for table `drivetrain`
--
ALTER TABLE `drivetrain`
  ADD PRIMARY KEY (`drivetrain`);

--
-- Indexes for table `engine_type`
--
ALTER TABLE `engine_type`
  ADD PRIMARY KEY (`engine_type`);

--
-- Indexes for table `fuel_type`
--
ALTER TABLE `fuel_type`
  ADD PRIMARY KEY (`type`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `model` (`model`),
  ADD KEY `condition` (`condition`),
  ADD KEY `seller` (`seller`);

--
-- Indexes for table `product_images`
--
ALTER TABLE `product_images`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_id` (`product_id`),
  ADD KEY `image_id` (`image_path`);

--
-- Indexes for table `transmission_type`
--
ALTER TABLE `transmission_type`
  ADD PRIMARY KEY (`transmission_type`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `car_model_info`
--
ALTER TABLE `car_model_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `product_images`
--
ALTER TABLE `product_images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `car_model_info`
--
ALTER TABLE `car_model_info`
  ADD CONSTRAINT `body_type` FOREIGN KEY (`car_body_type`) REFERENCES `car_body_type` (`body_type`),
  ADD CONSTRAINT `brand` FOREIGN KEY (`brand`) REFERENCES `car_brands` (`brand`),
  ADD CONSTRAINT `drivetrain` FOREIGN KEY (`drivetrain`) REFERENCES `drivetrain` (`drivetrain`),
  ADD CONSTRAINT `engine_type` FOREIGN KEY (`engine_type`) REFERENCES `engine_type` (`engine_type`),
  ADD CONSTRAINT `fuel_type` FOREIGN KEY (`fuel_type`) REFERENCES `fuel_type` (`type`),
  ADD CONSTRAINT `transmission_type` FOREIGN KEY (`transmission_type`) REFERENCES `transmission_type` (`transmission_type`);

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `condition` FOREIGN KEY (`condition`) REFERENCES `condition` (`condition`),
  ADD CONSTRAINT `product_model` FOREIGN KEY (`model`) REFERENCES `car_model_info` (`id`),
  ADD CONSTRAINT `seller` FOREIGN KEY (`seller`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
