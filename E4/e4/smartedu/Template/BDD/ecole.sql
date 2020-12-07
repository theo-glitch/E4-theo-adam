-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  lun. 07 déc. 2020 à 19:24
-- Version du serveur :  10.4.10-MariaDB
-- Version de PHP :  7.3.12

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
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Déchargement des données de la table `compte`
--

INSERT INTO `compte` (`id`, `nom`, `prenom`, `email`, `mdp`, `role`) VALUES
(1, 'a', 'a', 'a@a', '86f7e437faa5a7fce15d1ddcb9eaeaea377667b8', 'user'),
(2, 'i', 'i', 'i@i', '042dc4512fa3d391c5170cf3aa61e6a638f84342', 'user'),
(4, 'admin', 'admin', 'admin@admin', 'd033e22ae348aeb5660fc2140aec35850c4da997', 'admin'),
(8, 'o', 'o', 'o@o', '7a81af3e591ac713f81ea1efe93dcf36157d8376', 'user'),
(10, 'x', 'x', 'x@x', '11f6ad8ec52a2984abaafd7c3b516503785c2072', 'user'),
(11, 'r', 'r', 'r@r', '4dc7c9ec434ed06502767136789763ec11d2c4b7', 'user');

-- --------------------------------------------------------

--
-- Structure de la table `minichat`
--

DROP TABLE IF EXISTS `minichat`;
CREATE TABLE IF NOT EXISTS `minichat` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(50) NOT NULL,
  `message` text NOT NULL,
  `date_message` datetime NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `minichat`
--

INSERT INTO `minichat` (`id`, `nom`, `message`, `date_message`) VALUES
(7, 'eez', 'A', '2020-10-27 16:41:46'),
(8, 'MR Mattei', 'SORTEZ UNE FEUILLE !', '2020-10-27 16:43:36'),
(11, 'a', '', '2020-12-07 19:38:55');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
