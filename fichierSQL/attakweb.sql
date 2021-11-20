-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : sam. 20 nov. 2021 à 10:21
-- Version du serveur :  8.0.21
-- Version de PHP : 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `attakweb`
--

-- --------------------------------------------------------

--
-- Structure de la table `attak`
--

DROP TABLE IF EXISTS `attak`;
CREATE TABLE IF NOT EXISTS `attak` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nom` varchar(222) NOT NULL,
  `cible` varchar(222) NOT NULL,
  `date` varchar(255) NOT NULL,
  `statut` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `idU` int NOT NULL AUTO_INCREMENT,
  `noms` varchar(222) NOT NULL,
  `adresseEmail` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `statut` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL,
  `profile` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  PRIMARY KEY (`idU`)
) ENGINE=MyISAM AUTO_INCREMENT=20 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`idU`, `noms`, `adresseEmail`, `username`, `password`, `statut`, `role`, `profile`) VALUES
(18, 'KIKONI Stéphane ', 'kikonistephane@gmail.com', 'Bula-Bula', 'ss', 'ACTIVE', 'ADMIN', 'img2.jpg'),
(19, 'KIKONI Stéphane ZEUS', 'kikonistephane@gmail.com', 'Bula-Bula', 'zzz', 'ACTIVE', 'ADMIN', 'IMG-20210927-WA0062~2.jpg'),
(16, 'Stéphane ZEUS', 'kikonistephane@gmail.com', 'admin', 's', 'ACTIVE', 'ADMIN', 'wallpaperbetter.com_1600x900 (1).jpg');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
