-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Vært: 127.0.0.1
-- Genereringstid: 05. 01 2018 kl. 13:52:12
-- Serverversion: 10.1.26-MariaDB
-- PHP-version: 7.1.9

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
CREATE DATABASE IF NOT EXISTS `bileezy` DEFAULT CHARACTER SET utf8 COLLATE utf8_danish_ci;
USE `bileezy`;

-- --------------------------------------------------------

--
-- Struktur-dump for tabellen `car_body_type`
--

CREATE TABLE `car_body_type` (
  `body_type` varchar(50) COLLATE utf8_danish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_danish_ci;

--
-- Data dump for tabellen `car_body_type`
--

INSERT INTO `car_body_type` (`body_type`) VALUES
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
-- Struktur-dump for tabellen `car_brands`
--

CREATE TABLE `car_brands` (
  `brand` varchar(50) COLLATE utf8_danish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_danish_ci;

-- --------------------------------------------------------

--
-- Struktur-dump for tabellen `car_models`
--

CREATE TABLE `car_models` (
  `model` varchar(50) COLLATE utf8_danish_ci NOT NULL,
  `tank_capacity` int(11) DEFAULT NULL COMMENT 'liter'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_danish_ci;

-- --------------------------------------------------------

--
-- Struktur-dump for tabellen `car_model_info`
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
  `weight` tinyint(4) DEFAULT NULL COMMENT 'kg',
  `doors` tinyint(4) DEFAULT NULL,
  `airbags` tinyint(4) DEFAULT NULL,
  `cylinders` tinyint(4) DEFAULT NULL,
  `drivetrain` varchar(50) COLLATE utf8_danish_ci DEFAULT NULL,
  `load_capacity` varchar(50) COLLATE utf8_danish_ci DEFAULT NULL,
  `seats` tinyint(4) DEFAULT NULL,
  `fuel_type` varchar(50) COLLATE utf8_danish_ci DEFAULT NULL,
  `year_start` date DEFAULT NULL COMMENT 'year the model started',
  `year_end` date DEFAULT NULL COMMENT 'year the model ended'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_danish_ci;

-- --------------------------------------------------------

--
-- Struktur-dump for tabellen `condition`
--

CREATE TABLE `condition` (
  `condition` varchar(50) COLLATE utf8_danish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_danish_ci;

--
-- Data dump for tabellen `condition`
--

INSERT INTO `condition` (`condition`) VALUES
('Brugt'),
('Ny');

-- --------------------------------------------------------

--
-- Struktur-dump for tabellen `drivetrain`
--

CREATE TABLE `drivetrain` (
  `drivetrain` varchar(50) COLLATE utf8_danish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_danish_ci;

--
-- Data dump for tabellen `drivetrain`
--

INSERT INTO `drivetrain` (`drivetrain`) VALUES
('Baghjulstræk'),
('Firehjulstræk'),
('Forhjulstræk');

-- --------------------------------------------------------

--
-- Struktur-dump for tabellen `engine_type`
--

CREATE TABLE `engine_type` (
  `engine_type` varchar(50) COLLATE utf8_danish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_danish_ci;

--
-- Data dump for tabellen `engine_type`
--

INSERT INTO `engine_type` (`engine_type`) VALUES
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
-- Struktur-dump for tabellen `fuel_type`
--

CREATE TABLE `fuel_type` (
  `type` varchar(50) COLLATE utf8_danish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_danish_ci;

--
-- Data dump for tabellen `fuel_type`
--

INSERT INTO `fuel_type` (`type`) VALUES
('Benzin'),
('Brint'),
('Diesel'),
('El'),
('Hybrid (Benzin)'),
('Hybrid (Diesel)');

-- --------------------------------------------------------

--
-- Struktur-dump for tabellen `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `model` int(11),
  `mileage` int(11) DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `description` varchar(300) COLLATE utf8_danish_ci DEFAULT NULL,
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
-- Struktur-dump for tabellen `product_images`
--

CREATE TABLE `product_images` (
  `product_id` int(11) DEFAULT NULL,
  `image_path` varchar(150) COLLATE utf8_danish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_danish_ci;

-- --------------------------------------------------------

--
-- Struktur-dump for tabellen `transmission_type`
--

CREATE TABLE `transmission_type` (
  `transmission_type` varchar(50) COLLATE utf8_danish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_danish_ci;

--
-- Data dump for tabellen `transmission_type`
--

INSERT INTO `transmission_type` (`transmission_type`) VALUES
('Automatisk'),
('Manuel');

-- --------------------------------------------------------

--
-- Struktur-dump for tabellen `users`
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
-- Begrænsninger for dumpede tabeller
--

--
-- Indeks for tabel `car_body_type`
--
ALTER TABLE `car_body_type`
  ADD PRIMARY KEY (`body_type`);

--
-- Indeks for tabel `car_brands`
--
ALTER TABLE `car_brands`
  ADD PRIMARY KEY (`brand`);

--
-- Indeks for tabel `car_models`
--
ALTER TABLE `car_models`
  ADD PRIMARY KEY (`model`);

--
-- Indeks for tabel `car_model_info`
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
-- Indeks for tabel `condition`
--
ALTER TABLE `condition`
  ADD PRIMARY KEY (`condition`);

--
-- Indeks for tabel `drivetrain`
--
ALTER TABLE `drivetrain`
  ADD PRIMARY KEY (`drivetrain`);

--
-- Indeks for tabel `engine_type`
--
ALTER TABLE `engine_type`
  ADD PRIMARY KEY (`engine_type`);

--
-- Indeks for tabel `fuel_type`
--
ALTER TABLE `fuel_type`
  ADD PRIMARY KEY (`type`);

--
-- Indeks for tabel `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `model` (`model`),
  ADD KEY `condition` (`condition`),
  ADD KEY `seller` (`seller`);

--
-- Indeks for tabel `product_images`
--
ALTER TABLE `product_images`
  ADD KEY `product_id` (`product_id`),
  ADD KEY `image_id` (`image_path`);

--
-- Indeks for tabel `transmission_type`
--
ALTER TABLE `transmission_type`
  ADD PRIMARY KEY (`transmission_type`);

--
-- Indeks for tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Brug ikke AUTO_INCREMENT for slettede tabeller
--

--
-- Tilføj AUTO_INCREMENT i tabel `car_model_info`
--
ALTER TABLE `car_model_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Tilføj AUTO_INCREMENT i tabel `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Tilføj AUTO_INCREMENT i tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Begrænsninger for dumpede tabeller
--

--
-- Begrænsninger for tabel `car_model_info`
--
ALTER TABLE `car_model_info`
  ADD CONSTRAINT `body_type` FOREIGN KEY (`car_body_type`) REFERENCES `car_body_type` (`body_type`),
  ADD CONSTRAINT `brand` FOREIGN KEY (`brand`) REFERENCES `car_brands` (`brand`),
  ADD CONSTRAINT `drivetrain` FOREIGN KEY (`drivetrain`) REFERENCES `drivetrain` (`drivetrain`),
  ADD CONSTRAINT `engine_type` FOREIGN KEY (`engine_type`) REFERENCES `engine_type` (`engine_type`),
  ADD CONSTRAINT `fuel_type` FOREIGN KEY (`fuel_type`) REFERENCES `fuel_type` (`type`),
  ADD CONSTRAINT `model` FOREIGN KEY (`model`) REFERENCES `car_models` (`model`),
  ADD CONSTRAINT `transmission_type` FOREIGN KEY (`transmission_type`) REFERENCES `transmission_type` (`transmission_type`);

--
-- Begrænsninger for tabel `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `condition` FOREIGN KEY (`condition`) REFERENCES `condition` (`condition`),
  ADD CONSTRAINT `product_model` FOREIGN KEY (`model`) REFERENCES `car_model_info` (`id`),
  ADD CONSTRAINT `seller` FOREIGN KEY (`seller`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
