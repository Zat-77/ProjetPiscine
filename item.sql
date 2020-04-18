-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  sam. 18 avr. 2020 à 14:22
-- Version du serveur :  8.0.18
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
-- Base de données :  `ebayece`
--

-- --------------------------------------------------------

--
-- Structure de la table `item`
--

DROP TABLE IF EXISTS `item`;
CREATE TABLE IF NOT EXISTS `item` (
  `item_ID` int(11) NOT NULL AUTO_INCREMENT,
  `item_Nom` varchar(255) NOT NULL,
  `item_Description` varchar(2000) NOT NULL,
  `item_Photo` varchar(255) NOT NULL,
  `item_Categorie` varchar(255) NOT NULL,
  `item_IDVendeur` int(200) NOT NULL,
  `item_TypeVente` int(3) NOT NULL,
  `item_Statut` tinyint(1) DEFAULT NULL,
  `item_IDAcheteur` int(200) NOT NULL,
  `item_Prix` double NOT NULL,
  `item_Tentative` int(6) NOT NULL,
  `item_Offre` double NOT NULL,
  `item_Temps` time NOT NULL,
  PRIMARY KEY (`item_ID`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `item`
--

INSERT INTO `item` (`item_ID`, `item_Nom`, `item_Description`, `item_Photo`, `item_Categorie`, `item_IDVendeur`, `item_TypeVente`, `item_Statut`, `item_IDAcheteur`, `item_Prix`, `item_Tentative`, `item_Offre`, `item_Temps`) VALUES
(1, 'Piece', 'UN vieille piece fonctionnelle', 'piece.jpg', '1', 1, 4, NULL, 0, 1000, 0, 0, '00:00:00'),
(3, 'BestWaifu', 'Une relique baignée de lumiere', 'BestWaifu.jpg', '1', 0, 1, NULL, 0, 100000, 0, 0, '00:00:00');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
