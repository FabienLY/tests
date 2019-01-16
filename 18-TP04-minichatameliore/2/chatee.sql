-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  ven. 19 oct. 2018 à 14:15
-- Version du serveur :  5.7.19
-- Version de PHP :  7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `chatee`
--

-- --------------------------------------------------------

--
-- Structure de la table `chate`
--

DROP TABLE IF EXISTS `chate`;
CREATE TABLE IF NOT EXISTS `chate` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `datemsg` varchar(100) DEFAULT NULL,
  `pseudo` varchar(100) DEFAULT NULL,
  `message` varchar(250) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `chate`
--

INSERT INTO `chate` (`id`, `datemsg`, `pseudo`, `message`) VALUES
(9, '2018-10-18 16:54:31', 'Mohamed', 'Hello'),
(10, '2018-10-18 16:57:49', 'amin', 'Hello');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
