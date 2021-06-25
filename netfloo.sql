-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : ven. 25 juin 2021 à 14:45
-- Version du serveur :  5.7.31
-- Version de PHP : 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `netfloo`
--

-- --------------------------------------------------------

--
-- Structure de la table `films`
--

DROP TABLE IF EXISTS `films`;
CREATE TABLE IF NOT EXISTS `films` (
  `Id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `Categorie` varchar(30) NOT NULL,
  `Titre` varchar(30) NOT NULL,
  `resumefilm` varchar(250) NOT NULL,
  `AnneeSortie` date NOT NULL,
  `Images` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `films`
--

INSERT INTO `films` (`Id`, `Categorie`, `Titre`, `resumefilm`, `AnneeSortie`, `Images`) VALUES
(2, 'Science-Fiction', 'Cloud Atlas', 'Plusieurs histoires croisées.', '2013-03-16', '//'),
(4, 'Dessin Animé', 'Le Roi Lion', 'L\'histoire de Simba qui veut venger son papa.', '1994-08-12', '//'),
(6, 'Vaudou', 'C\'est un miracle', 'J\'ai réussi !', '2021-06-25', 'Bon j\'ai pas réussi à intégrer l\'image.');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
