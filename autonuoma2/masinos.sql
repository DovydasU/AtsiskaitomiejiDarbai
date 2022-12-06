-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 06, 2022 at 11:38 AM
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
-- Database: `autodb`
--

-- --------------------------------------------------------

--
-- Table structure for table `masinos`
--

CREATE TABLE `masinos` (
  `id` int(11) NOT NULL,
  `klase` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `marke` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `modelis` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `metai` date NOT NULL,
  `spalva` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kuras` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `transmisija` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `img` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kaina` int(11) NOT NULL,
  `keliamoji` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `vietu_sk` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `masinos`
--

INSERT INTO `masinos` (`id`, `klase`, `marke`, `modelis`, `metai`, `spalva`, `kuras`, `transmisija`, `img`, `kaina`, `keliamoji`, `vietu_sk`) VALUES
(1, 'automobilis', 'VW', 'Passat', '2015-12-03', 'mėlyna', 'benzinas', 'mechaninė', 'img/vw_passat.jpg', 7, '', 0),
(2, 'automobilis', 'Golf', 'VW', '0000-00-00', 'geltona', 'dyzelinas', 'mechaninė', 'img/vw_golf.jpg', 12, '', 0),
(3, 'automobilis', 'Mercedes', '550', '0000-00-00', 'balta', 'benzinas', 'automatinė', 'img/mercedes_s550.jpg', 50, '', 0),
(4, 'automobilis', 'Volvo', 'XC60', '0000-00-00', 'juoda', 'benzonas/elektra', 'automatinė', 'img/volvo_xc60.jpg', 20, '', 0),
(5, 'automobilis', 'Volvo', 'XC90', '0000-00-00', 'balta', 'dyzelinas', 'mechaninė', 'img/volvo_xc90.jpg', 30, '', 0),
(6, 'krovinis', 'Mercedes', 'Sprinter', '0000-00-00', 'balta', 'dyzelinas', 'mechaninė', 'img/mercedes_sprinter.jpg', 20, '2 tonos', 0),
(7, 'keleivinis', 'Ford', 'Transit', '0000-00-00', 'balta', 'dyzelinas', 'mechaninė', 'img/ford_transit.jpg', 30, '', 8);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `masinos`
--
ALTER TABLE `masinos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `masinos`
--
ALTER TABLE `masinos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
