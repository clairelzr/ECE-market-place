-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : Dim 30 mai 2021 à 19:25
-- Version du serveur :  5.7.31
-- Version de PHP : 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `projet1`
--

-- --------------------------------------------------------

--
-- Structure de la table `achat immediat`
--

DROP TABLE IF EXISTS `achat immediat`;
CREATE TABLE IF NOT EXISTS `achat immediat` (
  `ID_transaction` int(11) NOT NULL AUTO_INCREMENT,
  `Prix` int(11) NOT NULL,
  `ID_item` int(11) NOT NULL,
  `ID_acheteur` int(11) NOT NULL,
  `ID_vendeur` int(11) NOT NULL,
  PRIMARY KEY (`ID_transaction`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `acheteur`
--

DROP TABLE IF EXISTS `acheteur`;
CREATE TABLE IF NOT EXISTS `acheteur` (
  `ID_acheteur` int(11) NOT NULL AUTO_INCREMENT,
  `CoordBancaire` varchar(255) NOT NULL,
  `Nom` varchar(255) NOT NULL,
  `Prenom` varchar(255) NOT NULL,
  `Mail` varchar(255) NOT NULL,
  `Mdp` varchar(255) NOT NULL,
  `Preference` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`ID_acheteur`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `acheteur`
--

INSERT INTO `acheteur` (`ID_acheteur`, `CoordBancaire`, `Nom`, `Prenom`, `Mail`, `Mdp`, `Preference`) VALUES
(1, '45545AZ54548A', 'idary', 'redouane', 'redouane@gmail.com', 'azer', NULL),
(2, '548556AZ 87445U', 'idary', 'wassim', 'wassim@gmail.com', 'azer', NULL),
(3, 'A8788 SSD77', 'idary', 'ayoub', 'ayoub@gmail.com', 'azer', NULL),
(4, 'AHGSU 87 SJHDDJK', 'haddad', 'kassim', 'kassim@gmail.com', 'azer', NULL),
(5, 'ZZZZZZZZZ 0000000', 'razak', 'sofyan', 'sofyan@gmail.com', 'azer', NULL);

-- --------------------------------------------------------

--
-- Structure de la table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Nom` varchar(255) NOT NULL,
  `Prenom` varchar(255) NOT NULL,
  `Mdp` varchar(255) NOT NULL,
  `Mail` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `admin`
--

INSERT INTO `admin` (`ID`, `Nom`, `Prenom`, `Mdp`, `Mail`) VALUES
(1, 'idary', 'admin', 'azer', NULL),
(2, 'idary', 'wassim', 'azer', 'wassim@gmail.com'),
(3, 'idary', 'redouane', 'azer', 'redouane@gmail.com');

-- --------------------------------------------------------

--
-- Structure de la table `item`
--

DROP TABLE IF EXISTS `item`;
CREATE TABLE IF NOT EXISTS `item` (
  `ID_item` int(11) NOT NULL AUTO_INCREMENT,
  `Nom` varchar(255) NOT NULL,
  `Description` varchar(255) NOT NULL,
  `Prix` int(11) NOT NULL,
  `ID_vendeur` int(11) DEFAULT NULL,
  `Categorie` varchar(255) NOT NULL,
  `Mode_Achat` varchar(255) DEFAULT NULL,
  `Image` varchar(255) NOT NULL,
  PRIMARY KEY (`ID_item`)
) ENGINE=MyISAM AUTO_INCREMENT=33 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `item`
--

INSERT INTO `item` (`ID_item`, `Nom`, `Description`, `Prix`, `ID_vendeur`, `Categorie`, `Mode_Achat`, `Image`) VALUES
(27, 'ps5', 'console neuve (600â‚¬)', 600, NULL, 'Achat immediat', NULL, 'ps5.jpg'),
(26, 'ordinateur', 'MacBook Air (1000â‚¬)', 1000, NULL, 'Achat immediat', NULL, 'ordinateur.jpg'),
(24, 'Iphone', 'Iphone XR (1100â‚¬)', 1100, NULL, 'Achat immediat', NULL, 'lotIphone.jpg'),
(25, 'Piano', 'Piano neuf (4300â‚¬)', 4300, NULL, 'Achat immediat', NULL, 'piano.jpg'),
(23, 'Chapeau', 'Chapeau de paille (20â‚¬)', 20, NULL, 'Achat immediat', NULL, 'chapeau.jpg'),
(22, 'Chemise', 'Jamais utilisÃ©e (15â‚¬)', 15, NULL, 'Achat immediat', NULL, 'chemise.jpg'),
(21, 'Lot de stylos', 'Je vend ces stylos utiles pour Ã©viter les rattrapages (10â‚¬)', 10, NULL, 'Achat immediat', NULL, 'stylos.jpg'),
(30, 'Meuble', 'Meuble de collection (2000â‚¬)', 2000, NULL, 'Transaction vendeur-client', NULL, 'meuble.jpg'),
(31, 'bague', 'bague (9999â‚¬)', 9999, NULL, 'Meilleure offre', NULL, 'bague.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `meilleure offre`
--

DROP TABLE IF EXISTS `meilleure offre`;
CREATE TABLE IF NOT EXISTS `meilleure offre` (
  `ID_offre` int(11) NOT NULL AUTO_INCREMENT,
  `OffreMontant` int(11) NOT NULL,
  `Date_de_fin` datetime(6) NOT NULL,
  `ID_acheteur` int(11) NOT NULL,
  `ID_item` int(11) NOT NULL,
  `ID_vendeur` int(11) NOT NULL,
  PRIMARY KEY (`ID_offre`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `notification`
--

DROP TABLE IF EXISTS `notification`;
CREATE TABLE IF NOT EXISTS `notification` (
  `ID_notif` int(11) NOT NULL AUTO_INCREMENT,
  `Categorie` varchar(255) NOT NULL,
  `Type de vente` varchar(255) NOT NULL,
  `ID_acheteur` int(11) NOT NULL,
  `ID_item` int(11) NOT NULL,
  PRIMARY KEY (`ID_notif`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `panier`
--

DROP TABLE IF EXISTS `panier`;
CREATE TABLE IF NOT EXISTS `panier` (
  `ID_panier` int(11) NOT NULL AUTO_INCREMENT,
  `ID_acheteur` int(11) NOT NULL,
  `ID_item` int(11) NOT NULL,
  PRIMARY KEY (`ID_panier`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `panier`
--

INSERT INTO `panier` (`ID_panier`, `ID_acheteur`, `ID_item`) VALUES
(3, 1, 21);

-- --------------------------------------------------------

--
-- Structure de la table `transaction`
--

DROP TABLE IF EXISTS `transaction`;
CREATE TABLE IF NOT EXISTS `transaction` (
  `ID_conversation` int(11) NOT NULL AUTO_INCREMENT,
  `Prix_propose` int(11) NOT NULL,
  `Avis_proprio` varchar(255) NOT NULL,
  `ID_item_transaction` int(11) NOT NULL,
  `Prix_proprio` int(11) NOT NULL,
  `ID_acheteur` int(11) NOT NULL,
  `ID_vendeur` int(11) NOT NULL,
  `ID_item` int(11) NOT NULL,
  PRIMARY KEY (`ID_conversation`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `vendeur`
--

DROP TABLE IF EXISTS `vendeur`;
CREATE TABLE IF NOT EXISTS `vendeur` (
  `ID_vendeur` int(11) NOT NULL AUTO_INCREMENT,
  `Nom` varchar(255) NOT NULL,
  `Prenom` varchar(255) NOT NULL,
  `Mdp` varchar(255) NOT NULL,
  `Mail` varchar(255) NOT NULL,
  `Article` varchar(255) DEFAULT NULL,
  `Photo` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`ID_vendeur`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `vendeur`
--

INSERT INTO `vendeur` (`ID_vendeur`, `Nom`, `Prenom`, `Mdp`, `Mail`, `Article`, `Photo`) VALUES
(3, 'idary', 'redouane', 'azer', 'redouane@gmail.com', NULL, NULL);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
