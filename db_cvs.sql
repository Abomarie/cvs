-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  sam. 27 jan. 2018 à 22:40
-- Version du serveur :  10.1.28-MariaDB
-- Version de PHP :  5.6.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `db_cvs`
--

-- --------------------------------------------------------

--
-- Structure de la table `codeuses`
--

CREATE TABLE `codeuses` (
  `id` int(11) NOT NULL,
  `nom` varchar(200) NOT NULL,
  `prenoms` varchar(200) NOT NULL,
  `naissance` varchar(20) NOT NULL,
  `resume` text NOT NULL,
  `email` varchar(200) NOT NULL,
  `telephone` varchar(20) NOT NULL,
  `mdp` varchar(200) NOT NULL,
  `specialisation` varchar(200) NOT NULL,
  `photo` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `codeuses`
--

INSERT INTO `codeuses` (`id`, `nom`, `prenoms`, `naissance`, `resume`, `email`, `telephone`, `mdp`, `specialisation`, `photo`) VALUES
(1, 'ANOUAN', 'ABO MARIE CHRISTELLE', '08/08/1993', 'je suis une fille qui dÃ©sire agrandir ses compÃ©tences', 'mariechristelleanouan@gmail.com', '57-33-43-52', '', 'codeuse', 'mi.jpg'),
(2, 'ANOUAN', 'ABO MARIE CHRISTELLE', '08/08/1993', 'je suis une fille qui dÃ©sire agrandir ses compÃ©tences', 'mariechristelleanouan@gmail.com', '57-33-43-52', 'machris', 'codeuse', 'mi.jpg'),
(3, 'admin', '', '', '', 'admin@sheisthecode.org', '', 'e3afed0047b08059d0fada10f400c1e5', '', ''),
(4, 'salimata', 'maimouna', '', '', '', '', '', '', 'FB_IMG_1508192377874.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `cv`
--

CREATE TABLE `cv` (
  `id` int(11) NOT NULL,
  `facebook` varchar(200) NOT NULL,
  `twitter` varchar(200) NOT NULL,
  `github` varchar(200) NOT NULL,
  `id_codeuses` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `diplomes`
--

CREATE TABLE `diplomes` (
  `id` int(11) NOT NULL,
  `anne` varchar(20) NOT NULL,
  `libelle` varchar(200) NOT NULL,
  `ecole` varchar(200) NOT NULL,
  `id_codeuses` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `diplomes`
--

INSERT INTO `diplomes` (`id`, `anne`, `libelle`, `ecole`, `id_codeuses`) VALUES
(1, '2015', 'le bac', 'sheisthecode', 1);

-- --------------------------------------------------------

--
-- Structure de la table `experiences`
--

CREATE TABLE `experiences` (
  `id` int(11) NOT NULL,
  `titre` varchar(200) NOT NULL,
  `debut` varchar(20) NOT NULL,
  `fin` varchar(20) NOT NULL,
  `entreprise` varchar(200) NOT NULL,
  `id_codeuses` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `experiences`
--

INSERT INTO `experiences` (`id`, `titre`, `debut`, `fin`, `entreprise`, `id_codeuses`) VALUES
(1, 'stagiaire', '20/05/2017', '23/10/2017', 'akendewa', 2);

-- --------------------------------------------------------

--
-- Structure de la table `interets`
--

CREATE TABLE `interets` (
  `id` int(11) NOT NULL,
  `titre` varchar(200) NOT NULL,
  `description` text NOT NULL,
  `id_codeuses` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `interets`
--

INSERT INTO `interets` (`id`, `titre`, `description`, `id_codeuses`) VALUES
(1, 'la musique', '', 1),
(2, 'le sport', '', 2);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `codeuses`
--
ALTER TABLE `codeuses`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `cv`
--
ALTER TABLE `cv`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `diplomes`
--
ALTER TABLE `diplomes`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `experiences`
--
ALTER TABLE `experiences`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `interets`
--
ALTER TABLE `interets`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `codeuses`
--
ALTER TABLE `codeuses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `cv`
--
ALTER TABLE `cv`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `diplomes`
--
ALTER TABLE `diplomes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `experiences`
--
ALTER TABLE `experiences`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `interets`
--
ALTER TABLE `interets`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
