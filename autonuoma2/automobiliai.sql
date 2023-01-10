-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 06, 2022 at 11:35 AM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db-autonuoma`
--

-- --------------------------------------------------------

--
-- Table structure for table `automobilis`
--

CREATE TABLE `automobilis` (
  `id` int(11) NOT NULL,
  `klase` varchar(255) NOT NULL,
  `marke` varchar(255) NOT NULL,
  `modelis` varchar(255) NOT NULL,
  `metai` year(4) NOT NULL,
  `spalva` varchar(255) NOT NULL,
  `kuras` varchar(255) NOT NULL,
  `transmisija` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `kaina` int(11) NOT NULL,
  `keliamoji` varchar(255) DEFAULT NULL,
  `vietu_sk` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `automobilis`
--

INSERT INTO `automobilis` (`id`, `klase`, `marke`, `modelis`, `metai`, `spalva`, `kuras`, `transmisija`, `image`, `kaina`, `keliamoji`, `vietu_sk`) VALUES
(1, 'automobilis', 'VW', 'Passat', 2015, 'melyna', 'benzinas', 'mechanine', 'img/vw_passat.jpg', 7, NULL, NULL),
(2, 'automobilis', 'Golf', 'VW', 2020, 'geltona', 'dyzelinas', 'mechaninė', 'img/vw_golf.jpg', 12, NULL, NULL),
(3, 'automobilis', 'Mercedes', 'S550', 2018, 'balta', 'benzinas', 'automatinė', 'img/mercedes_s550.jpg', 50, NULL, NULL),
(4, 'automobilis', 'Volvo', 'XC60', 2021, 'juoda', 'benzinas/elektra', 'automatinė', 'img/volvo_xc60.jpg', 20, NULL, NULL),
(5, 'automobilis', 'Volvo', 'XC90', 2021, 'balta', 'dyzelinas', 'mechaninė', 'img/volvo_xc90.jpg', 30, NULL, NULL),
(6, 'krovininis', 'Mercedes', 'Sprinter', 2018, 'balta', 'dyzelinas', 'mechaninė', 'img/mercedes_sprinter.jpg', 20, '2 tonos', NULL),
(7, 'keleivinis', 'Ford', 'Transit', 2020, 'balta', 'dyzelinas', 'mechaninė', 'img/ford_transit.jpg', 30, NULL, 8);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `automobilis`
--
ALTER TABLE `automobilis`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `automobilis`
--
ALTER TABLE `automobilis`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
