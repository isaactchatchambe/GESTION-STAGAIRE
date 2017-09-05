-- phpMyAdmin SQL Dump
-- version 4.5.5.1
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Ven 22 Juillet 2016 à 11:57
-- Version du serveur :  5.7.11
-- Version de PHP :  5.6.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `dbstagiaires`
--

-- --------------------------------------------------------

--
-- Structure de la table `encadreurs`
--

CREATE TABLE `encadreurs` (
  `matricule` int(11) NOT NULL,
  `codeFonction` int(11) DEFAULT NULL,
  `nomenc` varchar(25) COLLATE utf8_bin DEFAULT NULL,
  `prenomenc` varchar(25) COLLATE utf8_bin DEFAULT NULL,
  `sexe` varchar(1) COLLATE utf8_bin DEFAULT NULL,
  `telephone` varchar(15) COLLATE utf8_bin DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Contenu de la table `encadreurs`
--

INSERT INTO `encadreurs` (`matricule`, `codeFonction`, `nomenc`, `prenomenc`, `sexe`, `telephone`) VALUES
(1, 1, 'tsimba', 'serge', 'm', '0895242861'),
(2, 2, 'nsiangani', 'rodrigue', 'm', '0895146418'),
(3, 2, 'kinkie', 'digital', 'm', '0897777705'),
(4, NULL, 'Patrick', 'Battlefield 1942', NULL, NULL),
(5, NULL, 'Patrick', 'Battlefield 1942', NULL, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `fonctions`
--

CREATE TABLE `fonctions` (
  `codeFonction` int(11) NOT NULL,
  `libelleFonction` varchar(20) COLLATE utf8_bin DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Contenu de la table `fonctions`
--

INSERT INTO `fonctions` (`codeFonction`, `libelleFonction`) VALUES
(1, 'directeur RH'),
(2, 'informaticien'),
(3, 'comptable'),
(4, 'marketer');

-- --------------------------------------------------------

--
-- Structure de la table `services`
--

CREATE TABLE `services` (
  `codeserv` int(11) NOT NULL,
  `libelleserv` varchar(20) COLLATE utf8_bin DEFAULT NULL,
  `chefserv` varchar(20) COLLATE utf8_bin DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Contenu de la table `services`
--

INSERT INTO `services` (`codeserv`, `libelleserv`, `chefserv`) VALUES
(1, 'ressources humaines', 'tsimba'),
(2, 'informatique', 'nsiangani');

-- --------------------------------------------------------

--
-- Structure de la table `stagiaires`
--

CREATE TABLE `stagiaires` (
  `numstagiaire` varchar(5) COLLATE utf8_bin NOT NULL,
  `matricule` int(11) DEFAULT NULL,
  `codeserv` int(11) DEFAULT NULL,
  `nom` varchar(15) COLLATE utf8_bin DEFAULT NULL,
  `prenom` varchar(15) COLLATE utf8_bin DEFAULT NULL,
  `sexe` varchar(1) COLLATE utf8_bin DEFAULT NULL,
  `datenais` varchar(80) COLLATE utf8_bin DEFAULT NULL,
  `debutstage` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  `finstage` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  `photo` varchar(254) COLLATE utf8_bin DEFAULT 'defaultpict.jpg'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Contenu de la table `stagiaires`
--

INSERT INTO `stagiaires` (`numstagiaire`, `matricule`, `codeserv`, `nom`, `prenom`, `sexe`, `datenais`, `debutstage`, `finstage`, `photo`) VALUES
('E338', 1, 2, 'AMURY', 'DIDI', 'm', '12/05/1995', '12/02/5885', '12/02/6544', 'img/SDC12686.JPG'),
('fgsfg', 2, 2, 'evavvh', 'kb;kb;k', 'm', '12/05/1995', '12/02/5885', '12/02/6544', 'img/body.png');

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

CREATE TABLE `utilisateur` (
  `iduser` int(11) NOT NULL,
  `nomuser` varchar(20) COLLATE utf8_bin DEFAULT NULL,
  `prenom` varchar(15) COLLATE utf8_bin DEFAULT NULL,
  `login` varchar(20) COLLATE utf8_bin DEFAULT NULL,
  `password` varchar(20) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Contenu de la table `utilisateur`
--

INSERT INTO `utilisateur` (`iduser`, `nomuser`, `prenom`, `login`, `password`) VALUES
(1, 'blandine', 'blandine', 'blandine', 'isp'),
(2, 'amuri', 'didierson', 'admin', 'admin');

-- --------------------------------------------------------

--
-- Structure de la table `visites`
--

CREATE TABLE `visites` (
  `matricule` int(11) DEFAULT NULL,
  `codeserv` int(11) DEFAULT NULL,
  `datevisite` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Index pour les tables exportées
--

--
-- Index pour la table `encadreurs`
--
ALTER TABLE `encadreurs`
  ADD PRIMARY KEY (`matricule`),
  ADD KEY `codeFonction` (`codeFonction`);

--
-- Index pour la table `fonctions`
--
ALTER TABLE `fonctions`
  ADD PRIMARY KEY (`codeFonction`),
  ADD KEY `codeFonction` (`codeFonction`);

--
-- Index pour la table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`codeserv`);

--
-- Index pour la table `stagiaires`
--
ALTER TABLE `stagiaires`
  ADD PRIMARY KEY (`numstagiaire`),
  ADD KEY `matricule` (`matricule`,`codeserv`),
  ADD KEY `codeserv` (`codeserv`);

--
-- Index pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  ADD PRIMARY KEY (`iduser`,`password`);

--
-- Index pour la table `visites`
--
ALTER TABLE `visites`
  ADD KEY `matricule` (`matricule`,`codeserv`),
  ADD KEY `codeserv` (`codeserv`),
  ADD KEY `codeserv_2` (`codeserv`),
  ADD KEY `codeserv_3` (`codeserv`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `encadreurs`
--
ALTER TABLE `encadreurs`
  MODIFY `matricule` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT pour la table `fonctions`
--
ALTER TABLE `fonctions`
  MODIFY `codeFonction` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT pour la table `services`
--
ALTER TABLE `services`
  MODIFY `codeserv` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  MODIFY `iduser` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `encadreurs`
--
ALTER TABLE `encadreurs`
  ADD CONSTRAINT `encadreurs_ibfk_1` FOREIGN KEY (`codeFonction`) REFERENCES `fonctions` (`codeFonction`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `stagiaires`
--
ALTER TABLE `stagiaires`
  ADD CONSTRAINT `stagiaires_ibfk_1` FOREIGN KEY (`matricule`) REFERENCES `encadreurs` (`matricule`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `stagiaires_ibfk_2` FOREIGN KEY (`codeserv`) REFERENCES `services` (`codeserv`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `visites`
--
ALTER TABLE `visites`
  ADD CONSTRAINT `visites_ibfk_1` FOREIGN KEY (`matricule`) REFERENCES `encadreurs` (`matricule`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `visites_ibfk_2` FOREIGN KEY (`codeserv`) REFERENCES `services` (`codeserv`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
