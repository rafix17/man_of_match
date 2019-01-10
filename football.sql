-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Client :  localhost
-- Généré le :  Jeu 18 Janvier 2018 à 17:08
-- Version du serveur :  5.7.20-0ubuntu0.16.04.1
-- Version de PHP :  7.0.22-0ubuntu0.16.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `football`
--

-- --------------------------------------------------------

--
-- Structure de la table `historique`
--

CREATE TABLE `historique` (
  `id` int(11) NOT NULL,
  `notationId` int(11) NOT NULL,
  `joueurId` int(11) NOT NULL,
  `dateMatch` date NOT NULL,
  `moyenne` decimal(10,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `historique`
--

INSERT INTO `historique` (`id`, `notationId`, `joueurId`, `dateMatch`, `moyenne`) VALUES
(20, 41, 1, '2018-01-18', '5');

-- --------------------------------------------------------

--
-- Structure de la table `joueur`
--

CREATE TABLE `joueur` (
  `id` int(11) NOT NULL,
  `playerNom` varchar(50) NOT NULL,
  `playerPrenom` varchar(50) NOT NULL,
  `mail` varchar(50) NOT NULL,
  `mdp` text NOT NULL,
  `photo` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `joueur`
--

INSERT INTO `joueur` (`id`, `playerNom`, `playerPrenom`, `mail`, `mdp`, `photo`) VALUES
(1, 'R', 'Yohan', 'r@r.com', '1234', 'images/foot/mandanda.png'),
(2, 'D', 'Yossi', 'y@y.com', '1234', 'images/foot/rami.png'),
(3, 'M', 'Raphael', 'm@m.com', '1234', 'images/foot/sakai.png'),
(4, 'S', 'Raphael', 's@s.com', '1234', 'images/foot/thauvin.png'),
(5, 'A', 'Raphael', 'a@a.com', '1234', 'images/foot/sarr.png'),
(6, 'C', 'Eytan', 'c@c.com', '1234', 'images/foot/amavi.jpg'),
(7, 'A', 'Alexandre', '', '', 'images/foot/gustavo.png'),
(8, 'J', 'Boccara', '', '', 'images/foot/sanson.png'),
(9, 'B', 'Yonathan', '', '', 'images/foot/anguissa.png'),
(10, 'M', 'Jonathan', '', '', 'images/foot/payet.png'),
(11, 'R', 'Manu', '', '', 'images/foot/germain.png'),
(14, 'S', 'Sebastien', '', '', 'images/foot/njie.png'),
(16, 'L', 'Alexandre', '', '', 'images/foot/ocampos.png');

-- --------------------------------------------------------

--
-- Structure de la table `notation`
--

CREATE TABLE `notation` (
  `id` int(11) NOT NULL,
  `offensif` decimal(10,0) NOT NULL,
  `defensif` decimal(10,0) NOT NULL,
  `pressing` decimal(10,0) NOT NULL,
  `tactique` decimal(10,0) NOT NULL,
  `endurance` decimal(10,0) NOT NULL,
  `agressivité` decimal(10,0) NOT NULL,
  `joueurId` int(11) NOT NULL,
  `votant` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `notation`
--

INSERT INTO `notation` (`id`, `offensif`, `defensif`, `pressing`, `tactique`, `endurance`, `agressivité`, `joueurId`, `votant`) VALUES
(35, '5', '5', '5', '5', '5', '5', 1, 6),
(36, '1', '1', '1', '1', '1', '1', 1, 6),
(37, '1', '1', '1', '1', '1', '1', 1, 6),
(38, '2', '2', '2', '2', '2', '2', 1, 5),
(39, '5', '5', '5', '5', '5', '5', 8, 5),
(40, '5', '5', '5', '5', '5', '5', 7, 5),
(41, '5', '5', '5', '5', '5', '5', 1, 5);

--
-- Index pour les tables exportées
--

--
-- Index pour la table `historique`
--
ALTER TABLE `historique`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `joueur`
--
ALTER TABLE `joueur`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `notation`
--
ALTER TABLE `notation`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `historique`
--
ALTER TABLE `historique`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT pour la table `joueur`
--
ALTER TABLE `joueur`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT pour la table `notation`
--
ALTER TABLE `notation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
