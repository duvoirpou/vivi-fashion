-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  lun. 27 avr. 2020 à 13:04
-- Version du serveur :  10.1.31-MariaDB
-- Version de PHP :  7.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `vivi_fashion`
--

-- --------------------------------------------------------

--
-- Structure de la table `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `nom_admin` varchar(250) NOT NULL,
  `mp_admin` varchar(250) CHARACTER SET utf16 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `admin`
--

INSERT INTO `admin` (`id_admin`, `nom_admin`, `mp_admin`) VALUES
(1, 'apc', 'dupouvoir');

-- --------------------------------------------------------

--
-- Structure de la table `categories`
--

CREATE TABLE `categories` (
  `id_cat` int(11) NOT NULL,
  `nom_cat` varchar(25) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `categories`
--

INSERT INTO `categories` (`id_cat`, `nom_cat`) VALUES
(1, 'Hommes'),
(2, 'Femmes'),
(3, 'Enfants'),
(4, 'Mixtes');

-- --------------------------------------------------------

--
-- Structure de la table `client`
--

CREATE TABLE `client` (
  `id_client` int(11) NOT NULL,
  `nom_client` varchar(255) CHARACTER SET utf8 NOT NULL,
  `prenom_client` varchar(255) CHARACTER SET utf8 NOT NULL,
  `sexe_client` varchar(10) CHARACTER SET utf8 NOT NULL,
  `email_client` varchar(255) CHARACTER SET utf8 NOT NULL,
  `login` varchar(250) CHARACTER SET utf8 NOT NULL,
  `mp_client` text CHARACTER SET utf8 NOT NULL,
  `adresse_client` varchar(255) CHARACTER SET utf8 NOT NULL,
  `ville_client` varchar(255) CHARACTER SET utf8 NOT NULL,
  `tel_client` varchar(255) CHARACTER SET utf8 NOT NULL,
  `date_insc` varchar(100) CHARACTER SET utf8 DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `client`
--

INSERT INTO `client` (`id_client`, `nom_client`, `prenom_client`, `sexe_client`, `email_client`, `login`, `mp_client`, `adresse_client`, `ville_client`, `tel_client`, `date_insc`) VALUES
(1, 'ASSAKO', 'Precieux', '', 'apc@gmail.com', 'apc', 'apc', 'brazzaville', 'brazzaville', '06000000', '0000-00-00'),
(2, 'ZARA', 'vivi', '', 'vivi@gmail.com', '', '0000', 'pointe-noire', 'pointe-noire', '06000055', '0000-00-00'),
(3, 'JC', 'carl', '', 'jc@gmail.com', '', '0000', 'dolisie', 'dolisie', '06000065', '0000-00-00'),
(4, 'www', 'mart', '', 'www@gmail.com', '', 'www', 'moungali', 'bz', '066000023', '0000-00-00'),
(5, 'azerty', 'qwerty', '', 'azerty@gmail.com', '', 'azerty', 'SSS', 'pn', '066000323', '0000-00-00'),
(7, 'bc', 'cx', 'masculin', 'bc@gmail.com', '', 'bc', 'moungali', 'brazza', '066000000', '0000-00-00'),
(8, 'MAKIMOUNA', 'Jean', 'M', 'jean@gmail.com', 'jean', 'jean', '...', '...', '...', '2020-04-17'),
(9, 'Nard', 'Paul', 'M', 'paul@gmail.com', 'paul', 'paul', '...', '...', '...', '2020-04-17'),
(10, 'Precieux', 'Christ', 'M', 'precieux@gmail.com', 'precieux', 'precieux', '...', '...', '...', '2020-04-17'),
(11, 'Nard', '', '', '', '', '', '', '', '', '2020-04-17'),
(12, '', '', '', '', '', '', '', '', '', '2020-04-17');

-- --------------------------------------------------------

--
-- Structure de la table `commande`
--

CREATE TABLE `commande` (
  `id_commande` int(11) NOT NULL,
  `nom_commande` varchar(200) NOT NULL,
  `prix` float NOT NULL,
  `mois_commande` varchar(10) CHARACTER SET utf8 COLLATE utf8_estonian_ci NOT NULL,
  `annee_commande` varchar(10) CHARACTER SET utf8 NOT NULL,
  `date_commande` varchar(50) CHARACTER SET utf8 NOT NULL,
  `date_livraison` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  `photo` varchar(255) CHARACTER SET utf8 NOT NULL,
  `paye` varchar(11) CHARACTER SET utf8 NOT NULL,
  `id_client` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `commande`
--

INSERT INTO `commande` (`id_commande`, `nom_commande`, `prix`, `mois_commande`, `annee_commande`, `date_commande`, `date_livraison`, `photo`, `paye`, `id_client`) VALUES
(1, 't-shirt gucci', 0, 'janvier', '2019', '2019-01-06', '2020-04-24', 'gucci-hommes-t-shirt.jpg', 'Oui', 1),
(2, 't-shirt gucci', 0, 'janvier', '2019', '2019-01-06', '2020-04-23', 'gucci-hommes-t-shirt.jpg', 'Non', 1),
(3, 't-shirt gucci', 0, 'Jan', '2019', '2019-01-06', '', 'gucci-hommes-t-shirt.jpg', 'Oui', 1),
(4, 'pantalon rouge', 0, 'Jan', '2019', '2019-01-06', '', '6165502-4497003-1.jpg', 'Non', 1),
(5, 'basquet', 0, 'avril', '2020', '2020-04-16', '', 'IMG-20180720-WA0046.jpg', 'Non', 1),
(6, 'basquet', 0, 'avril', '2020', '2020-04-16', '', 'IMG-20180720-WA0046.jpg', 'Non', 1),
(7, 'wx', 0, 'avril', '2020', '2020-04-16', '', 'IMG-20190108-WA0026.jpg', 'Non', 1),
(8, 'wx', 0, 'avril', '2020', '2020-04-16', '', 'IMG-20190108-WA0026.jpg', 'Non', 1),
(9, 'sandale', 0, 'avril', '2020', '2020-04-17', '', 'IMG-20180720-WA0015.jpg', 'Non', 1),
(10, 'sandales', 0, 'avril', '2020', '2020-04-17', '', 'IMG-20180720-WA0034.jpg', 'Non', 1),
(11, 'mizes', 0, 'avril', '2020', '2020-04-17', '', '1.jpg', 'Non', 1),
(12, 'wx', 0, 'avril', '2020', '2020-04-17', '', 'IMG-20190108-WA0026.jpg', 'Non', 1),
(13, 'mizes', 0, 'avril', '2020', '2020-04-17', '', '1.jpg', 'Non', 1),
(14, 'basquet', 0, 'avril', '2020', '2020-04-18', '', 'IMG-20180720-WA0046.jpg', 'Non', 1),
(15, 'wx', 0, 'avril', '2020', '2020-04-18', '', 'IMG-20190108-WA0026.jpg', 'Non', 1),
(16, 'wx', 0, 'avril', '2020', '2020-04-18', '', 'IMG-20190108-WA0026.jpg', 'Non', 1),
(17, 'mizes', 0, 'avril', '2020', '2020-04-18', '', '1.jpg', 'Non', 1),
(18, 'sandale', 0, 'avril', '2020', '2020-04-18', '', 'IMG-20180720-WA0015.jpg', 'Non', 1),
(19, 'mizes', 0, 'avril', '2020', '2020-04-18', '', '1.jpg', 'Non', 1),
(20, 'mizes', 0, 'avril', '2020', '2020-04-18', '2020-04-24', '1.jpg', 'Oui', 1),
(21, 'mizes', 0, 'avril', '2020', '2020-04-18', '', '1.jpg', 'Non', 1),
(22, 'mizes', 0, 'avril', '2020', '2020-04-18', '', '1.jpg', 'Non', 1),
(23, 'guccis', 0, 'avril', '2020', '2020-04-20', '', 'IMG-20190108-WA0008.jpg', 'Non', 9),
(24, 'guccis', 0, 'avril', '2020', '2020-04-20', '', 'IMG-20190108-WA0008.jpg', 'Non', 9),
(25, 'guccis', 0, 'avril', '2020', '2020-04-20', '', 'IMG-20190108-WA0008.jpg', 'Oui', 9),
(26, 'sandale', 0, 'avril', '2020', '2020-04-21', '', 'IMG-20180720-WA0015.jpg', 'Non', 9),
(27, 'sandale', 0, 'avril', '2020', '2020-04-21', '', 'IMG-20180720-WA0015.jpg', 'Non', 9),
(28, 'sandales', 0, 'avril', '2020', '2020-04-22', '', 'IMG-20180720-WA0034.jpg', 'Non', 9),
(29, 'sandales', 0, 'avril', '2020', '2020-04-22', '', 'IMG-20180720-WA0034.jpg', 'Non', 9),
(30, 'mizes', 4000, 'avril', '2020', '2020-04-22', '', '1.jpg', 'Non', 9),
(31, 'mizes', 4000, 'avril', '2020', '2020-04-22', '2020-04-24', '1.jpg', 'Oui', 9),
(32, 'sandales', 3000, 'avril', '2020', '2020-04-25', '', 'IMG-20180720-WA0034.jpg', 'Non', 9),
(33, 'sandales', 3000, 'avril', '2020', '2020-04-25', '', 'IMG-20180720-WA0034.jpg', 'Non', 9),
(34, 'sandales', 3000, 'avril', '2020', '2020-04-25', '', 'IMG-20180720-WA0034.jpg', 'Non', 9),
(35, 'sandales', 3000, 'avril', '2020', '2020-04-25', '', 'IMG-20180720-WA0034.jpg', 'Non', 9),
(36, 'wx', 3500, 'avril', '2020', '2020-04-26', '', 'IMG-20190108-WA0026.jpg', 'Non', 10),
(37, 'wx', 3500, 'avril', '2020', '2020-04-26', '', 'IMG-20190108-WA0026.jpg', 'Non', 10);

-- --------------------------------------------------------

--
-- Structure de la table `produits`
--

CREATE TABLE `produits` (
  `id_produits` int(11) NOT NULL,
  `id_cat` int(11) NOT NULL,
  `nom_produits` varchar(255) NOT NULL,
  `type_produits` int(11) NOT NULL,
  `prix` float NOT NULL,
  `photo` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `produits`
--

INSERT INTO `produits` (`id_produits`, `id_cat`, `nom_produits`, `type_produits`, `prix`, `photo`) VALUES
(1, 2, 'gucci', 0, 50000, 'IMG-20190108-WA0008.jpg'),
(2, 2, 'sac', 1, 11000, 'IMG-20190108-WA0011.jpg'),
(3, 2, 't-shirt gucci', 4, 4900, 'gucci-hommes-t-shirt.jpg'),
(4, 2, 'chemise', 2, 6000, '52HM-R999 Blouses Chemises comma 01B1 01B1 Femmes Chemise-Blouses Chemises 2018.jpg'),
(5, 2, 'pantalon', 3, 10000, 'Arcteryx Spadina Pantalon Femmes Tika fWrjwKG_LRG.jpg'),
(6, 2, 't-shirt love', 4, 3500, 'IMG-20180720-WA0027.jpg'),
(7, 1, 'sandale', 5, 3000, 'IMG-20180720-WA0015.jpg'),
(8, 2, 'sandales', 5, 3000, 'IMG-20180720-WA0034.jpg'),
(9, 4, 'basquet', 6, 5000, 'IMG-20180720-WA0046.jpg'),
(10, 1, 'mizes', 2, 4000, '1.jpg'),
(11, 2, 'wx', 1, 3500, 'IMG-20190108-WA0026.jpg'),
(12, 2, 'eees', 2, 15000, '41b467g0aNL._AC_UL260_SR200,260_.jpg'),
(13, 4, 'Nike', 6, 15000, 'IMG-basquetNike-WA0021.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `type_produit`
--

CREATE TABLE `type_produit` (
  `id_type` int(11) NOT NULL,
  `libelle` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `type_produit`
--

INSERT INTO `type_produit` (`id_type`, `libelle`) VALUES
(1, 'Sac'),
(2, 'Chemise'),
(3, 'Pantalon'),
(4, 'T-shirt'),
(5, 'Sandale'),
(6, 'Baskets');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Index pour la table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id_cat`);

--
-- Index pour la table `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`id_client`);

--
-- Index pour la table `commande`
--
ALTER TABLE `commande`
  ADD PRIMARY KEY (`id_commande`);

--
-- Index pour la table `produits`
--
ALTER TABLE `produits`
  ADD PRIMARY KEY (`id_produits`);

--
-- Index pour la table `type_produit`
--
ALTER TABLE `type_produit`
  ADD PRIMARY KEY (`id_type`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `categories`
--
ALTER TABLE `categories`
  MODIFY `id_cat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `client`
--
ALTER TABLE `client`
  MODIFY `id_client` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT pour la table `commande`
--
ALTER TABLE `commande`
  MODIFY `id_commande` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT pour la table `produits`
--
ALTER TABLE `produits`
  MODIFY `id_produits` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT pour la table `type_produit`
--
ALTER TABLE `type_produit`
  MODIFY `id_type` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
