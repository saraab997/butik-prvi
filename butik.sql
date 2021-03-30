-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 21, 2021 at 07:03 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `butik`
--

-- --------------------------------------------------------

--
-- Table structure for table `dizajner`
--

CREATE TABLE `dizajner` (
  `dizajner_id` int(10) UNSIGNED NOT NULL,
  `ime_prezime` varchar(40) NOT NULL,
  `poznat_kao` varchar(20) NOT NULL,
  `o_dizajneru` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `dizajner`
--

INSERT INTO `dizajner` (`dizajner_id`, `ime_prezime`, `poznat_kao`, `o_dizajneru`) VALUES
(7, 'Gabrijela Bonur Sanel', 'Koko Sanel', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam ut lacus interdum, dictum ante quis, maximus enim. Fusce dignissim ante neque, non ornare purus laoreet sit amet. Phasellus dapibus nam.'),
(8, 'Lee Alexander McQueen', 'McQueen', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam ut lacus interdum, dictum ante quis, maximus enim. Fusce dignissim ante neque, non ornare purus laoreet sit amet. Phasellus dapibus nam.'),
(9, 'Donatella Versace', 'Versace', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam ut lacus interdum, dictum ante quis, maximus enim. Fusce dignissim ante neque, non ornare purus laoreet sit amet. Phasellus dapibus nam.'),
(10, 'Christian Dior', 'Dior', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam ut lacus interdum, dictum ante quis, maximus enim. Fusce dignissim ante neque, non ornare purus laoreet sit amet. Phasellus dapibus nam.'),
(13, 'Neki Sad Stari Dizajner', 'NND', 'Dizajner koji proizvodi svoju liniju odece od 1993. godine. I tako dalje i tako dalje...');

-- --------------------------------------------------------

--
-- Table structure for table `kategorija`
--

CREATE TABLE `kategorija` (
  `kategorija_id` int(11) UNSIGNED NOT NULL,
  `naziv` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kategorija`
--

INSERT INTO `kategorija` (`kategorija_id`, `naziv`) VALUES
(1, 'DUKSERICA'),
(2, 'JAKNA'),
(3, 'MAJICA'),
(4, 'SAL'),
(5, 'TRENERKA');

-- --------------------------------------------------------

--
-- Table structure for table `odeca`
--

CREATE TABLE `odeca` (
  `odeca_id` int(10) UNSIGNED NOT NULL,
  `dizajner_id` int(10) UNSIGNED NOT NULL,
  `kategorija_id` int(10) UNSIGNED NOT NULL,
  `velicina` enum('XXL','XL','L','M','S','XS') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `odeca`
--

INSERT INTO `odeca` (`odeca_id`, `dizajner_id`, `kategorija_id`, `velicina`) VALUES
(4, 7, 4, 'XS'),
(5, 7, 1, ''),
(6, 7, 1, ''),
(8, 7, 1, ''),
(9, 8, 3, ''),
(10, 9, 3, ''),
(11, 9, 2, 'XS'),
(12, 13, 5, 'XS');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dizajner`
--
ALTER TABLE `dizajner`
  ADD PRIMARY KEY (`dizajner_id`),
  ADD UNIQUE KEY `poznat_kao` (`poznat_kao`);

--
-- Indexes for table `kategorija`
--
ALTER TABLE `kategorija`
  ADD PRIMARY KEY (`kategorija_id`),
  ADD UNIQUE KEY `naziv` (`naziv`);

--
-- Indexes for table `odeca`
--
ALTER TABLE `odeca`
  ADD PRIMARY KEY (`odeca_id`),
  ADD KEY `kategorija_id` (`kategorija_id`),
  ADD KEY `dizajner_id` (`dizajner_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `dizajner`
--
ALTER TABLE `dizajner`
  MODIFY `dizajner_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `kategorija`
--
ALTER TABLE `kategorija`
  MODIFY `kategorija_id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `odeca`
--
ALTER TABLE `odeca`
  MODIFY `odeca_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `odeca`
--
ALTER TABLE `odeca`
  ADD CONSTRAINT `odeca_ibfk_1` FOREIGN KEY (`kategorija_id`) REFERENCES `kategorija` (`kategorija_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `odeca_ibfk_2` FOREIGN KEY (`dizajner_id`) REFERENCES `dizajner` (`dizajner_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
