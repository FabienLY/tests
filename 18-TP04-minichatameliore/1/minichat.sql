-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Oct 19, 2018 at 10:40 AM
-- Server version: 5.7.23
-- PHP Version: 7.2.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `test`
--

-- --------------------------------------------------------

--
-- Table structure for table `minichat`
--

CREATE TABLE `minichat` (
  `id` int(11) NOT NULL,
  `pseudo` varchar(255) NOT NULL,
  `message` varchar(255) NOT NULL,
  `date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `minichat`
--

INSERT INTO `minichat` (`id`, `pseudo`, `message`, `date`) VALUES
(82, 'Julien', 'Salut !', '2018-10-19 12:11:13'),
(83, 'Thomas', 'Salut ça va ?', '2018-10-19 12:11:33'),
(84, 'Julien', 'Oui regarde j\'ai fait un mini chat', '2018-10-19 12:12:06'),
(85, 'Thomas', 'Cool tu l\'as fait en php ?', '2018-10-19 12:12:32'),
(86, 'Julien', 'Oui grâce aux cours d\'openclassrooms :)', '2018-10-19 12:12:51'),
(87, 'Thomas', 'Félicitations !', '2018-10-19 12:15:35');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `minichat`
--
ALTER TABLE `minichat`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `minichat`
--
ALTER TABLE `minichat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=88;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
