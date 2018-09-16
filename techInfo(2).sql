-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Client :  localhost
-- Généré le :  Mar 10 Mai 2016 à 21:36
-- Version du serveur :  10.1.10-MariaDB
-- Version de PHP :  7.0.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `techInfo`
--

-- --------------------------------------------------------

--
-- Structure de la table `article`
--

CREATE TABLE `article` (
  `id` int(10) UNSIGNED NOT NULL,
  `idAuteur` int(11) NOT NULL,
  `addTime` varchar(10) NOT NULL,
  `titre` varchar(128) NOT NULL,
  `contenu` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `article`
--

INSERT INTO `article` (`id`, `idAuteur`, `addTime`, `titre`, `contenu`) VALUES
(19, 68, '2016/04/25', '2222222222222', 'modifie'),
(20, 68, '2016/04/25', '333333333', 'modifie'),
(22, 68, '2016/04/25', 'kkkkk', 'modifie'),
(23, 68, '2016/04/25', 'aaaaaaaaaaaaaaa', 'modifie'),
(24, 68, '2016/04/25', 'ff', 'modifie'),
(25, 68, '2016/04/25', 'coucou', 'modifie'),
(27, 68, '2016/04/25', 'df', 'modifie'),
(29, 68, '2016/04/26', 'o', 'modifie'),
(30, 68, '2016/04/27', 'photo', 'photo'),
(31, 68, '2016/04/27', 'dd', 'sd'),
(34, 77, '2016/04/27', 'aa', 'dd'),
(35, 78, '2016/04/27', 'ee', 'je suis unique'),
(36, 78, '2016/04/27', 'd', 'ffffff'),
(38, 68, '2016/05/01', '00000', '562233kjk'),
(39, 79, '2016/05/01', 'aaaaa', 'aaaaa'),
(40, 68, '2016/05/10', 'ddd', 'ssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssc, cxc         wx            cvxc          xcx');

-- --------------------------------------------------------

--
-- Structure de la table `commentaire`
--

CREATE TABLE `commentaire` (
  `id` int(11) NOT NULL,
  `idAuteur` int(255) NOT NULL,
  `auteur` varchar(255) NOT NULL,
  `idArticle` int(255) NOT NULL,
  `contenu` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `commentaire`
--

INSERT INTO `commentaire` (`id`, `idAuteur`, `auteur`, `idArticle`, `contenu`) VALUES
(5, 68, '', 37, '00'),
(6, 68, '', 37, 'lool'),
(7, 68, '', 37, '123'),
(8, 0, 'jiajun', 38, '00'),
(9, 0, 'a', 38, '0066'),
(10, 0, 'a', 38, 'j'),
(11, 0, 'jiajun', 37, 'dsskkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkk'),
(12, 0, 'jiajun', 40, 'hh');

-- --------------------------------------------------------

--
-- Structure de la table `compte`
--

CREATE TABLE `compte` (
  `statut` varchar(16) NOT NULL,
  `id` int(32) NOT NULL,
  `nom` varchar(32) NOT NULL,
  `prenom` varchar(32) NOT NULL,
  `email` varchar(64) NOT NULL,
  `mdp` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `compte`
--

INSERT INTO `compte` (`statut`, `id`, `nom`, `prenom`, `email`, `mdp`) VALUES
('administrateur', 68, 'wu', 'jiajun', '935441060@qq.com', 'c3296a1c81868f40ec9f91ef99fd8450'),
('membre', 77, 'a1', 'a1', 'a1', '0cc175b9c0f1b6a831c399e269772661'),
('moderateur', 78, 'b', 'b', 'b', '92eb5ffee6ae2fec3ad71c777531578f'),
('membre', 79, 'a', 'a', 'a', '0cc175b9c0f1b6a831c399e269772661'),
('membre', 80, 'gg', 'dd', 'g', '202cb962ac59075b964b07152d234b70');

-- --------------------------------------------------------

--
-- Structure de la table `photo`
--

CREATE TABLE `photo` (
  `id` int(10) UNSIGNED NOT NULL,
  `idAuteur` int(200) NOT NULL,
  `name` varchar(200) NOT NULL,
  `addTime` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `photo`
--

INSERT INTO `photo` (`id`, `idAuteur`, `name`, `addTime`) VALUES
(1, 49, 'Capture du 2016-04-22 22:35:05.png', '2016/04/24'),
(22, 68, 'fond2.jpg', '2016/04/26'),
(23, 68, '', '2016/04/26'),
(24, 68, '', '2016/04/26'),
(25, 68, '', '2016/04/27'),
(26, 68, '', '2016/04/27'),
(27, 77, '', '2016/04/27'),
(28, 77, '', '2016/04/27'),
(29, 77, '', '2016/04/27'),
(30, 78, '', '2016/04/27');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `article`
--
ALTER TABLE `article`
  ADD UNIQUE KEY `id` (`id`);

--
-- Index pour la table `commentaire`
--
ALTER TABLE `commentaire`
  ADD UNIQUE KEY `id` (`id`);

--
-- Index pour la table `compte`
--
ALTER TABLE `compte`
  ADD UNIQUE KEY `id` (`id`);

--
-- Index pour la table `photo`
--
ALTER TABLE `photo`
  ADD UNIQUE KEY `id` (`id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `article`
--
ALTER TABLE `article`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;
--
-- AUTO_INCREMENT pour la table `commentaire`
--
ALTER TABLE `commentaire`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT pour la table `compte`
--
ALTER TABLE `compte`
  MODIFY `id` int(32) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=81;
--
-- AUTO_INCREMENT pour la table `photo`
--
ALTER TABLE `photo`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
