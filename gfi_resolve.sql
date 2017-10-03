-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  mar. 03 oct. 2017 à 16:03
-- Version du serveur :  5.7.17
-- Version de PHP :  5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `gfi_resolve`
--

-- --------------------------------------------------------

--
-- Structure de la table `client`
--

CREATE TABLE `client` (
  `Cl_Id` int(5) NOT NULL,
  `Cl_Nom` varchar(20) NOT NULL,
  `Cl_Desc` varchar(255) NOT NULL,
  `Prest_Cl_Id` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `client`
--

INSERT INTO `client` (`Cl_Id`, `Cl_Nom`, `Cl_Desc`, `Prest_Cl_Id`) VALUES
(1, 'GFI', 'Un groupe solide et pérenne', 1);

-- --------------------------------------------------------

--
-- Structure de la table `commerciaux`
--

CREATE TABLE `commerciaux` (
  `Com_Id` int(5) NOT NULL,
  `Com_Nom` varchar(20) NOT NULL,
  `Com_Prenom` varchar(20) NOT NULL,
  `Com_Login` varchar(15) NOT NULL,
  `Com_Password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `commerciaux`
--

INSERT INTO `commerciaux` (`Com_Id`, `Com_Nom`, `Com_Prenom`, `Com_Login`, `Com_Password`) VALUES
(1, 'BOUSSAID', 'Imad', 'IBoussaid', '1234');

-- --------------------------------------------------------

--
-- Structure de la table `contact`
--

CREATE TABLE `contact` (
  `Ctc_Id` int(5) NOT NULL,
  `Ctc_Nom` varchar(20) NOT NULL,
  `Ctc_Prenom` varchar(20) NOT NULL,
  `Ctc_Phone` int(10) NOT NULL,
  `Ctc_Mail` varchar(40) NOT NULL,
  `Ctc_Cl_Id` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `contact`
--

INSERT INTO `contact` (`Ctc_Id`, `Ctc_Nom`, `Ctc_Prenom`, `Ctc_Phone`, `Ctc_Mail`, `Ctc_Cl_Id`) VALUES
(1, 'CHAMBOURNIER ', 'Jacques ', 603040506, 'JCHAMBOURNIER@gmail.com', 1);

-- --------------------------------------------------------

--
-- Structure de la table `prestation`
--

CREATE TABLE `prestation` (
  `Prest_Id` int(4) NOT NULL,
  `Prest_Titre` varchar(50) NOT NULL,
  `Prest_Date` date NOT NULL,
  `Prest_FullDesc` varchar(255) DEFAULT NULL,
  `Prest_Prix` int(10) NOT NULL,
  `Prest_ClefSuccess` varchar(255) NOT NULL,
  `Prest_Statut` varchar(50) NOT NULL,
  `Prest_Dep_Late` date NOT NULL,
  `Prest_Com_Id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `prestation`
--

INSERT INTO `prestation` (`Prest_Id`, `Prest_Titre`, `Prest_Date`, `Prest_FullDesc`, `Prest_Prix`, `Prest_ClefSuccess`, `Prest_Statut`, `Prest_Dep_Late`, `Prest_Com_Id`) VALUES
(1, 'Site GFI', '2017-10-03', NULL, 0, 'Efficacité , Passion', 'Open', '2017-10-06', 1);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`Cl_Id`),
  ADD KEY `Prest_Cl_Id` (`Prest_Cl_Id`);

--
-- Index pour la table `commerciaux`
--
ALTER TABLE `commerciaux`
  ADD PRIMARY KEY (`Com_Id`);

--
-- Index pour la table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`Ctc_Id`),
  ADD KEY `Ctc_Cl_Id` (`Ctc_Cl_Id`);

--
-- Index pour la table `prestation`
--
ALTER TABLE `prestation`
  ADD PRIMARY KEY (`Prest_Id`),
  ADD KEY `Prest_Com_Id` (`Prest_Com_Id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `client`
--
ALTER TABLE `client`
  MODIFY `Cl_Id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT pour la table `commerciaux`
--
ALTER TABLE `commerciaux`
  MODIFY `Com_Id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT pour la table `contact`
--
ALTER TABLE `contact`
  MODIFY `Ctc_Id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT pour la table `prestation`
--
ALTER TABLE `prestation`
  MODIFY `Prest_Id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `client`
--
ALTER TABLE `client`
  ADD CONSTRAINT `client_ibfk_1` FOREIGN KEY (`Prest_Cl_Id`) REFERENCES `prestation` (`Prest_Id`);

--
-- Contraintes pour la table `contact`
--
ALTER TABLE `contact`
  ADD CONSTRAINT `contact_ibfk_1` FOREIGN KEY (`Ctc_Cl_Id`) REFERENCES `client` (`Cl_Id`);

--
-- Contraintes pour la table `prestation`
--
ALTER TABLE `prestation`
  ADD CONSTRAINT `prestation_ibfk_1` FOREIGN KEY (`Prest_Com_Id`) REFERENCES `commerciaux` (`Com_Id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
