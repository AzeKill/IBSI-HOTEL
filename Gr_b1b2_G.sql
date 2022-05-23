CREATE TABLE IF NOT EXISTS ibsi;
use ibsi;

-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost
-- Généré le : lun. 09 mai 2022 à 16:00
-- Version du serveur : 8.0.28
-- Version de PHP : 7.4.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `ibsi2`
--

-- --------------------------------------------------------

--
-- Structure de la table `abonnes`
--

CREATE TABLE `abonnes` (
  `idAbonnes` int NOT NULL,
  `email` text NOT NULL,
  `dateDebut` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Déchargement des données de la table `abonnes`
--

INSERT INTO `abonnes` (`idAbonnes`, `email`, `dateDebut`) VALUES
(1, 'mathiasmanzano37@gmail.com', '2022-05-02'),
(2, 'flaviangodemont@hotmail.com', '2022-05-08'),
(3, 'mathiasmanzano21@gmail.com', '2022-05-09');

-- --------------------------------------------------------

--
-- Structure de la table `admin`
--

CREATE TABLE `admin` (
  `idAdmin` int NOT NULL,
  `adminName` varchar(30) NOT NULL,
  `passwordAdmin` text NOT NULL,
  `token` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Déchargement des données de la table `admin`
--

INSERT INTO `admin` (`idAdmin`, `adminName`, `passwordAdmin`, `token`) VALUES
(1, 'admin', '$2y$12$2KQJ1vh/uk6Fm1JyJjr16e6c0OPOTsYGCWCeyJPouGWMSqywaye8G', 'd0aed80fadf3428efd15220acdb1a6960fea8efc69f70140cd72b0ae8937042ecceb21f50d948677c4c0c4c2b89808775fd11d085558d36043f102c50c482f27'),
(2, 'Mathias', '$2y$12$dzCuv7WX1zJS5VgXD7JC0Om3CNfVmFd98NSkDstS87NfWW86xFxGS', 'c545b4d98359deb70e436c49c97635de21f9d65dbab6e66d39e4a910429e318b8dbec160b60cb1c575bedc2cdd5d1d150628c530b19ce53d87fa0d6fd4746535'),
(3, 'Flavian', '$2y$12$mXtauVHalbKly6OAA2KylONgeKV/ZFygXx.vM0hEsCU3r1B26KxWa', 'de4099d80ff184d2a549df368cfe15e38b12bf111e0ad025cf42f9f6000247ca20f50024d067b24839711386473780ce7e4e06c9752f94c53ff1693946d3776e');

-- --------------------------------------------------------

--
-- Structure de la table `chambre`
--

CREATE TABLE `chambre` (
  `idChambre` int NOT NULL,
  `type` varchar(15) NOT NULL,
  `lit` varchar(10) NOT NULL,
  `place` varchar(10) NOT NULL,
  `idRéservation` int DEFAULT NULL,
  `dateFinReservation` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Déchargement des données de la table `chambre`
--

INSERT INTO `chambre` (`idChambre`, `type`, `lit`, `place`, `idRéservation`, `dateFinReservation`) VALUES
(1, 'Single Room', 'Simple', 'Free', NULL, NULL),
(2, 'Single Room', 'Double', 'Free', NULL, NULL),
(3, 'Single Room', 'Triple', 'Free', NULL, NULL),
(4, 'Single Room', 'Quadruple', 'Free', NULL, NULL),
(5, 'Superior Room', 'Simple', 'Free', NULL, NULL),
(6, 'Superior Room', 'Double', 'Free', NULL, NULL),
(7, 'Superior Room', 'Triple', 'Free', NULL, NULL),
(8, 'Superior Room', 'Quadruple', 'Free', NULL, NULL),
(9, 'Deluxe Room', 'Simple', 'Free', NULL, NULL),
(10, 'Deluxe Room', 'Double', 'Free', NULL, NULL),
(11, 'Deluxe Room', 'Triple', 'Free', NULL, NULL),
(12, 'Deluxe Room', 'Quadruple', 'Free', NULL, NULL),
(13, 'Guest Room', 'Simple', 'Free', NULL, NULL),
(14, 'Guest Room', 'Double', 'Free', NULL, NULL),
(15, 'Guest Room', 'Triple', 'Free', NULL, NULL),
(16, 'Guest Room', 'Quadruple', 'Free', NULL, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `contact`
--

CREATE TABLE `contact` (
  `idContact` int NOT NULL,
  `nomPrenom` varchar(100) NOT NULL,
  `objet` text NOT NULL,
  `email` text NOT NULL,
  `contactDate` date NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

-- --------------------------------------------------------

--
-- Structure de la table `newsletter`
--

CREATE TABLE `newsletter` (
  `idNews` int NOT NULL,
  `titre` varchar(52) NOT NULL,
  `sujet` varchar(100) NOT NULL,
  `nouvelle` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

-- --------------------------------------------------------

--
-- Structure de la table `paiement`
--

CREATE TABLE `paiement` (
  `idPaie` int NOT NULL,
  `titre` varchar(5) NOT NULL,
  `prenom` varchar(30) NOT NULL,
  `nom` varchar(30) NOT NULL,
  `typeChambre` varchar(30) NOT NULL,
  `typeLit` varchar(30) NOT NULL,
  `nombreChambre` int NOT NULL,
  `dateEntree` date NOT NULL,
  `dateSortie` date NOT NULL,
  `restauration` varchar(30) NOT NULL,
  `nombreJour` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Déchargement des données de la table `paiement`
--

INSERT INTO `paiement` (`idPaie`, `titre`, `prenom`, `nom`, `typeChambre`, `typeLit`, `nombreChambre`, `dateEntree`, `dateSortie`, `restauration`, `nombreJour`) VALUES
(1, 'Mr.', 'Mathias', 'Manzano', 'Guest House', 'Simple', 1, '2022-05-01', '2022-05-05', 'Déjeuner', 4);

-- --------------------------------------------------------

--
-- Structure de la table `reservationChambre`
--

CREATE TABLE `reservationChambre` (
  `idReservation` int NOT NULL,
  `titre` varchar(5) NOT NULL,
  `prenom` varchar(30) NOT NULL,
  `nom` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `nationalite` varchar(30) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `pays` varchar(30) NOT NULL,
  `telephone` text NOT NULL,
  `typeChambre` varchar(25) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `lit` varchar(10) NOT NULL,
  `nombreChambre` varchar(2) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `restauration` varchar(20) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `dateEntree` date NOT NULL,
  `dateSortie` date NOT NULL,
  `statut` varchar(15) NOT NULL,
  `nombreJour` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Déchargement des données de la table `reservationChambre`
--

INSERT INTO `reservationChambre` (`idReservation`, `titre`, `prenom`, `nom`, `email`, `nationalite`, `pays`, `telephone`, `typeChambre`, `lit`, `nombreChambre`, `restauration`, `dateEntree`, `dateSortie`, `statut`, `nombreJour`) VALUES
(1, 'Mr.', 'jacques', 'dupont', 'mathiasmanzano45@gmail.com', 'Belge', 'Albania', '0', 'Guest House', 'Triple', '1', 'Semi-Pension', '2022-05-10', '2022-05-24', 'Conform', 14),
(2, 'Mr.', 'a', 'a', 'mathiasmanzano37@gmail.com', 'Belge', 'Afghanistan', '0', 'Superior Room', 'Simple', '1', 'Pension-complète', '2022-05-10', '2022-05-24', 'Non Conform', 14);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `abonnes`
--
ALTER TABLE `abonnes`
  ADD PRIMARY KEY (`idAbonnes`);

--
-- Index pour la table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`idAdmin`);

--
-- Index pour la table `chambre`
--
ALTER TABLE `chambre`
  ADD PRIMARY KEY (`idChambre`);

--
-- Index pour la table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`idContact`);

--
-- Index pour la table `newsletter`
--
ALTER TABLE `newsletter`
  ADD PRIMARY KEY (`idNews`);

--
-- Index pour la table `paiement`
--
ALTER TABLE `paiement`
  ADD PRIMARY KEY (`idPaie`);

--
-- Index pour la table `reservationChambre`
--
ALTER TABLE `reservationChambre`
  ADD PRIMARY KEY (`idReservation`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `abonnes`
--
ALTER TABLE `abonnes`
  MODIFY `idAbonnes` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT pour la table `admin`
--
ALTER TABLE `admin`
  MODIFY `idAdmin` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT pour la table `chambre`
--
ALTER TABLE `chambre`
  MODIFY `idChambre` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT pour la table `contact`
--
ALTER TABLE `contact`
  MODIFY `idContact` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT pour la table `newsletter`
--
ALTER TABLE `newsletter`
  MODIFY `idNews` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT pour la table `paiement`
--
ALTER TABLE `paiement`
  MODIFY `idPaie` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=118;

--
-- AUTO_INCREMENT pour la table `reservationChambre`
--
ALTER TABLE `reservationChambre`
  MODIFY `idReservation` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
