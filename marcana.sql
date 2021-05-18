-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : mar. 18 mai 2021 à 17:00
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
-- Base de données : `marcana`
--

-- --------------------------------------------------------

--
-- Structure de la table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `id_admin` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `password` text,
  PRIMARY KEY (`id_admin`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `admin`
--

INSERT INTO `admin` (`id_admin`, `nom`, `email`, `password`) VALUES
(1, 'ayadi', 'ayadi@ayadi.com', 'ayadi'),
(2, 'admin', 'admin@admin.com', '$2y$10$Z4Av4A8y0CfVgkRPAqcRzuiQnfDDQTjDxtlILdbb37Xxt7ZCTSYeq');

-- --------------------------------------------------------

--
-- Structure de la table `categories`
--

DROP TABLE IF EXISTS `categories`;
CREATE TABLE IF NOT EXISTS `categories` (
  `id_categorie` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(50) DEFAULT NULL,
  `id_admin` int(11) NOT NULL,
  PRIMARY KEY (`id_categorie`),
  KEY `id_admin` (`id_admin`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `categories`
--

INSERT INTO `categories` (`id_categorie`, `nom`, `id_admin`) VALUES
(1, 'car', 1),
(2, 'car', 1),
(3, 'car', 1);

-- --------------------------------------------------------

--
-- Structure de la table `client`
--

DROP TABLE IF EXISTS `client`;
CREATE TABLE IF NOT EXISTS `client` (
  `id_client` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `password` text,
  `adress` varchar(50) DEFAULT NULL,
  `ville` varchar(50) DEFAULT NULL,
  `tele` int(11) DEFAULT NULL,
  `id_admin` int(11) NOT NULL,
  PRIMARY KEY (`id_client`),
  KEY `id_admin` (`id_admin`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `client`
--

INSERT INTO `client` (`id_client`, `nom`, `email`, `password`, `adress`, `ville`, `tele`, `id_admin`) VALUES
(1, 'oussama', 'o@o.com', '$2y$10$ajhLIPQzbDraXGscMm/6h.xe3S1g1ullaRuODYmwnL/gCy7a8tqzS', 'darna', 'berkane', 106433483, 1),
(2, 'oussama', 'o@o.com', '$2y$10$C/z1OiK0Ysznj5/jYBJj7OFg2a08lKH4gOQYQeQ5CX69MQnGHIHpy', 'darna', 'berkane', 106433483, 1),
(3, 'oussama', 'o@o1.com', '$2y$10$uf9yDNVrudvbbcBecIWNdOB3ffW5/dHQhhcyXSHxT8cydis70A16C', 'darna', 'berkane', 106433483, 1),
(4, 'test', 'test@test.com', '$2y$10$M0KtQcwy5tKx/nE8ybQipu/ECAamOH28WMAJXaMY5EOsYXQ2gYSE6', 'tesqt', 'tesdt', 1, 1),
(5, 'oussama', 'a@a.com', '$2y$10$v9nD7dnVfrM3eMiC/5SVCeHKdK90KkOOSIqqedhGT0W/oSsfEGkUW', 'darna', 'berkane', 626005713, 1);

-- --------------------------------------------------------

--
-- Structure de la table `commandes`
--

DROP TABLE IF EXISTS `commandes`;
CREATE TABLE IF NOT EXISTS `commandes` (
  `id_commandes` int(11) NOT NULL AUTO_INCREMENT,
  `id_client` int(11) DEFAULT NULL,
  `id_produit` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_commandes`),
  KEY `id_client` (`id_client`,`id_produit`),
  KEY `id_produit` (`id_produit`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `message_box`
--

DROP TABLE IF EXISTS `message_box`;
CREATE TABLE IF NOT EXISTS `message_box` (
  `id_message` int(11) NOT NULL AUTO_INCREMENT,
  `mesage` text,
  `email` varchar(50) DEFAULT NULL,
  `nom` varchar(50) DEFAULT NULL,
  `date_send` datetime NOT NULL,
  PRIMARY KEY (`id_message`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `message_box`
--

INSERT INTO `message_box` (`id_message`, `mesage`, `email`, `nom`, `date_send`) VALUES
(1, 'ayadi', 'ayadi', 'ayadi', '2021-05-08 00:00:00'),
(2, 'ayadi', 'ayadi', 'ayadi', '2021-05-08 00:00:00'),
(3, 'ayadi', 'ayadi', 'ayadi', '2021-05-08 00:00:00'),
(4, 'ayadi', 'ayadi', 'ayadi', '2021-05-08 21:50:22');

-- --------------------------------------------------------

--
-- Structure de la table `produit`
--

DROP TABLE IF EXISTS `produit`;
CREATE TABLE IF NOT EXISTS `produit` (
  `id_produit` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(50) DEFAULT NULL,
  `prix` decimal(15,2) DEFAULT NULL,
  `discription` varchar(50) DEFAULT NULL,
  `id_admin` int(11) NOT NULL,
  `id_categorie` int(11) NOT NULL,
  PRIMARY KEY (`id_produit`),
  KEY `id_admin` (`id_admin`),
  KEY `id_categorie` (`id_categorie`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `produit`
--

INSERT INTO `produit` (`id_produit`, `nom`, `prix`, `discription`, `id_admin`, `id_categorie`) VALUES
(1, 'car1', '111.00', 'discription', 1, 1),
(2, 'car1', '111.00', 'discription', 1, 1),
(3, 'car1', '111.00', 'discription', 1, 1);

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `categories`
--
ALTER TABLE `categories`
  ADD CONSTRAINT `categories_ibfk_1` FOREIGN KEY (`id_admin`) REFERENCES `admin` (`id_admin`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `client`
--
ALTER TABLE `client`
  ADD CONSTRAINT `client_ibfk_1` FOREIGN KEY (`id_admin`) REFERENCES `admin` (`id_admin`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `commandes`
--
ALTER TABLE `commandes`
  ADD CONSTRAINT `commandes_ibfk_1` FOREIGN KEY (`id_client`) REFERENCES `client` (`id_client`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `commandes_ibfk_2` FOREIGN KEY (`id_produit`) REFERENCES `produit` (`id_produit`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `produit`
--
ALTER TABLE `produit`
  ADD CONSTRAINT `produit_ibfk_1` FOREIGN KEY (`id_admin`) REFERENCES `admin` (`id_admin`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `produit_ibfk_2` FOREIGN KEY (`id_categorie`) REFERENCES `categories` (`id_categorie`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
