-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Oct 02, 2017 at 10:02 AM
-- Server version: 5.6.34-log
-- PHP Version: 7.1.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `demuro`
--

-- --------------------------------------------------------

--
-- Table structure for table `paslaugos`
--

CREATE TABLE `paslaugos` (
  `id` int(6) NOT NULL,
  `antraste` varchar(25) DEFAULT NULL,
  `straipsnis` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `paslaugos`
--

INSERT INTO `paslaugos` (`id`, `antraste`, `straipsnis`) VALUES
(1, 'dekoras', 'Paverskite savo namus išskirtiniais ir šiltais su Itališku rank? darbo sien? dekoru. Atsparumas trin?iai ir joki? piršt? antspaud?! Turime didžiul? rašt? ir spalv? pasirinkim?. Garantuojame, kad net išrankiausias klientas ras sau norim? variant?'),
(2, '3D-plokstes', 'Architekt?ros betono plokšt?s 3D - tai interjero dizaino naujov?. Plokšt?s skirtos ?vairaus stiliaus erdv?ms ir sukuria unikal? 3D efekt?. Modernu, šiolaikiška ir unikalu.'),
(3, 'Gipso_liejiniai', 'Gipso liejiniai ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.'),
(4, 'Epoksidiniai_stalai', 'Stalai ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.');

-- --------------------------------------------------------

--
-- Table structure for table `pictures`
--

CREATE TABLE `pictures` (
  `id` int(6) NOT NULL,
  `name` varchar(30) DEFAULT NULL,
  `image` blob
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pictures`
--

INSERT INTO `pictures` (`id`, `name`, `image`) VALUES
(1, 'dekoras', NULL),
(2, 'dekoras', NULL),
(3, 'dekoras', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `uzklausos`
--

CREATE TABLE `uzklausos` (
  `id` int(6) NOT NULL,
  `vardas` varchar(20) NOT NULL,
  `epastas` varchar(30) NOT NULL,
  `text` text NOT NULL,
  `data` datetime DEFAULT NULL,
  `ats` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `uzklausos`
--

INSERT INTO `uzklausos` (`id`, `vardas`, `epastas`, `text`, `data`, `ats`) VALUES
(4, 'Petras', 'pertras@a.lt', 'noriu dekoro', '2017-09-25 17:11:14', 'ats');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `paslaugos`
--
ALTER TABLE `paslaugos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pictures`
--
ALTER TABLE `pictures`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `uzklausos`
--
ALTER TABLE `uzklausos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `paslaugos`
--
ALTER TABLE `paslaugos`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `pictures`
--
ALTER TABLE `pictures`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `uzklausos`
--
ALTER TABLE `uzklausos`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
