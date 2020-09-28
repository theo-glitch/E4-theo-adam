-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  lun. 28 sep. 2020 à 14:02
-- Version du serveur :  5.7.26
-- Version de PHP :  7.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `ecole`
--

-- --------------------------------------------------------

--
-- Structure de la table `compte`
--

DROP TABLE IF EXISTS `compte`;
CREATE TABLE IF NOT EXISTS `compte` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(40) COLLATE utf8_bin NOT NULL,
  `prenom` varchar(40) COLLATE utf8_bin NOT NULL,
  `email` varchar(40) COLLATE utf8_bin NOT NULL,
  `mdp` varchar(60) COLLATE utf8_bin NOT NULL,
  `role` varchar(40) COLLATE utf8_bin NOT NULL DEFAULT 'user',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Déchargement des données de la table `compte`
--

INSERT INTO `compte` (`id`, `nom`, `prenom`, `email`, `mdp`, `role`) VALUES
(1, 'a', 'a', 'a@a', '86f7e437faa5a7fce15d1ddcb9eaeaea377667b8', 'user'),
(2, 'i', 'i', 'i@i', '042dc4512fa3d391c5170cf3aa61e6a638f84342', 'user');

-- --------------------------------------------------------

--
-- Structure de la table `prof`
--

DROP TABLE IF EXISTS `prof`;
CREATE TABLE IF NOT EXISTS `prof` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `nom` varchar(30) NOT NULL,
  `mdp` varchar(30) NOT NULL,
  `prenom` varchar(30) NOT NULL,
  `classe p` varchar(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
