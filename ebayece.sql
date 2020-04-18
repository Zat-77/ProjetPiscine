-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  sam. 18 avr. 2020 à 14:38
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
-- Structure de la table `achat`
--

DROP TABLE IF EXISTS `achat`;
CREATE TABLE IF NOT EXISTS `achat` (
  `achat_ID` int(11) NOT NULL AUTO_INCREMENT,
  `achat_IDItem` int(11) NOT NULL,
  `achat_IDAcheteur` int(11) NOT NULL,
  `achat_Prix` int(11) NOT NULL,
  PRIMARY KEY (`achat_ID`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Structure de la table `acheteur`
--

DROP TABLE IF EXISTS `acheteur`;
CREATE TABLE IF NOT EXISTS `acheteur` (
  `acheteur_ID` int(200) NOT NULL AUTO_INCREMENT,
  `acheteur_Nom` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `acheteur_Prenom` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `acheteur_Adresse1` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `acheteur_CodePost` int(11) NOT NULL,
  `acheteur_Pays` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `acheteur_Tel` varchar(11) NOT NULL,
  `acheteur_Adresse2` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `acheteur_Ville` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `acheteur_mdp` varchar(255) NOT NULL,
  `acheteur_Mail` varchar(255) NOT NULL,
  PRIMARY KEY (`acheteur_ID`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `acheteur`
--

INSERT INTO `acheteur` (`acheteur_ID`, `acheteur_Nom`, `acheteur_Prenom`, `acheteur_Adresse1`, `acheteur_CodePost`, `acheteur_Pays`, `acheteur_Tel`, `acheteur_Adresse2`, `acheteur_Ville`, `acheteur_mdp`, `acheteur_Mail`) VALUES
(6, 'Tes', 'Te', '41 Rue L\"é', 69420, 'Poitou', '0178451232', '5e Arr\"é&', 'Paname', 'aeazeaz', 'foudu3@fromage.com'),
(5, 'Vic', 'Tor', 'eza', 69420, 'Panama', '0145263312', 'eza', 'Paname', 'fromage', 'foudu3@fromage.com');

-- --------------------------------------------------------

--
-- Structure de la table `enchere`
--

DROP TABLE IF EXISTS `enchere`;
CREATE TABLE IF NOT EXISTS `enchere` (
  `enchere_ID` int(11) NOT NULL AUTO_INCREMENT,
  `enchere_IDVendeur` int(11) NOT NULL,
  `enchere_IDAcheteur` int(11) NOT NULL,
  `enchere_PrixMax` int(11) NOT NULL,
  PRIMARY KEY (`enchere_ID`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

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

-- --------------------------------------------------------

--
-- Structure de la table `negociation`
--

DROP TABLE IF EXISTS `negociation`;
CREATE TABLE IF NOT EXISTS `negociation` (
  `nego_ID` int(11) NOT NULL AUTO_INCREMENT,
  `nego_IDItem` int(11) NOT NULL,
  `nego_IDAcheteur` int(11) NOT NULL,
  `nego_Tentative` int(11) NOT NULL,
  `nego_Offre` int(11) NOT NULL,
  `nego_ContreOffre` int(11) NOT NULL,
  PRIMARY KEY (`nego_ID`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Structure de la table `payement`
--

DROP TABLE IF EXISTS `payement`;
CREATE TABLE IF NOT EXISTS `payement` (
  `payement_ID` int(200) NOT NULL AUTO_INCREMENT,
  `payement_Type` int(4) NOT NULL,
  `payement_Date` date NOT NULL,
  `payement_Code` int(3) NOT NULL,
  `payement_Numero` int(12) NOT NULL,
  `payement_NomTitulaire` int(11) NOT NULL,
  `payement_Provision` int(11) NOT NULL,
  PRIMARY KEY (`payement_ID`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Structure de la table `vendeur`
--

DROP TABLE IF EXISTS `vendeur`;
CREATE TABLE IF NOT EXISTS `vendeur` (
  `vendeur_ID` int(200) NOT NULL AUTO_INCREMENT,
  `vendeur_Nom` varchar(255) NOT NULL,
  `vendeur_Pseudo` varchar(255) NOT NULL,
  `vendeur_Mail` varchar(255) NOT NULL,
  `vendeur_Mdp` varchar(255) NOT NULL,
  `vendeur_Photo` varchar(255) NOT NULL,
  `vendeur_Fond` varchar(255) NOT NULL,
  `vendeur_Admin` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`vendeur_ID`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `vendeur`
--

INSERT INTO `vendeur` (`vendeur_ID`, `vendeur_Nom`, `vendeur_Pseudo`, `vendeur_Mail`, `vendeur_Mdp`, `vendeur_Photo`, `vendeur_Fond`, `vendeur_Admin`) VALUES
(1, 'rez', 're', 'rez', 'ezaa', 'test.jpg', 'bleu', NULL);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
