-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Client: localhost
-- Généré le: Mar 02 Avril 2013 à 14:25
-- Version du serveur: 5.5.24-log
-- Version de PHP: 5.4.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données: `tp_intervention`
--

-- --------------------------------------------------------

--
-- Structure de la table `intervention`
--

DROP TABLE IF EXISTS `intervention`;
CREATE TABLE IF NOT EXISTS `intervention` (
  `idIntervention` int(11) NOT NULL AUTO_INCREMENT,
  `Materiel_idMateriel` int(11) NOT NULL,
  `Technicien_idTechnicien` int(11) NOT NULL,
  `Ticket_idTicket` int(11) NOT NULL,
  `date` datetime NOT NULL,
  `diagnostic` varchar(200) NOT NULL,
  `action` varchar(200) NOT NULL,
  PRIMARY KEY (`idIntervention`),
  UNIQUE KEY `idIntervention` (`idIntervention`),
  KEY `Materiel_has_Technicien_FKIndex1` (`Materiel_idMateriel`),
  KEY `Materiel_has_Technicien_FKIndex2` (`Technicien_idTechnicien`),
  KEY `Intervention_FKIndex3` (`Ticket_idTicket`),
  KEY `IFK_Rel_01` (`Materiel_idMateriel`),
  KEY `IFK_Rel_02` (`Technicien_idTechnicien`),
  KEY `IFK_Rel_03` (`Ticket_idTicket`),
  KEY `diagnostic` (`diagnostic`,`action`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Contenu de la table `intervention`
--

INSERT INTO `intervention` (`idIntervention`, `Materiel_idMateriel`, `Technicien_idTechnicien`, `Ticket_idTicket`, `date`, `diagnostic`, `action`) VALUES
(1, 4, 2, 1, '2012-11-06 10:08:39', 'pas d''allumage', 'carte mère'),
(2, 2, 4, 2, '2012-12-07 13:52:06', 'extinction après 10 min', 'changement alim'),
(3, 6, 4, 3, '0000-00-00 00:00:00', '', ''),
(4, 1, 1, 4, '0000-00-00 00:00:00', '', ''),
(5, 3, 4, 5, '0000-00-00 00:00:00', '', ''),
(6, 1, 2, 6, '0000-00-00 00:00:00', '', ''),
(7, 2, 4, 2, '0000-00-00 00:00:00', '', ''),
(8, 1, 2, 9, '2013-02-08 14:33:05', 'Ecran noir', 'Changement dalle');

-- --------------------------------------------------------

--
-- Structure de la table `materiel`
--

DROP TABLE IF EXISTS `materiel`;
CREATE TABLE IF NOT EXISTS `materiel` (
  `idMateriel` int(11) NOT NULL AUTO_INCREMENT,
  `reference` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`idMateriel`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Contenu de la table `materiel`
--

INSERT INTO `materiel` (`idMateriel`, `reference`) VALUES
(1, 'AS53SN-7SVN'),
(2, 'BBox-BF44EE9'),
(3, '8639103966539'),
(4, 'AS53V-1704'),
(5, 'GT550M-2'),
(6, 'AS37V-7SVN');

-- --------------------------------------------------------

--
-- Structure de la table `technicien`
--

DROP TABLE IF EXISTS `technicien`;
CREATE TABLE IF NOT EXISTS `technicien` (
  `idTechnicien` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`idTechnicien`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=28 ;

--
-- Contenu de la table `technicien`
--

INSERT INTO `technicien` (`idTechnicien`, `nom`) VALUES
(1, 'Martin'),
(2, 'Louise'),
(3, 'Franck'),
(4, 'Mickaël'),
(5, 'Jules'),
(6, 'Franck'),
(7, 'Marie');

-- --------------------------------------------------------

--
-- Structure de la table `ticket`
--

DROP TABLE IF EXISTS `ticket`;
CREATE TABLE IF NOT EXISTS `ticket` (
  `idTicket` int(11) NOT NULL AUTO_INCREMENT,
  `Technicien_idTechnicien` int(11) DEFAULT NULL,
  `date` datetime DEFAULT NULL,
  PRIMARY KEY (`idTicket`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Contenu de la table `ticket`
--

INSERT INTO `ticket` (`idTicket`, `Technicien_idTechnicien`, `date`) VALUES
(1, 3, '2012-11-05 09:32:50'),
(2, 7, '2012-12-05 12:36:11'),
(3, 7, '2012-12-19 18:35:30'),
(4, 2, '2013-01-16 07:52:07'),
(5, 7, '2013-01-17 09:31:47'),
(6, 7, '2013-01-17 15:39:40'),
(7, 2, '2013-01-18 05:23:47'),
(8, 3, '2013-02-18 08:08:08'),
(9, 5, '2013-02-07 13:00:00');

--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `intervention`
--
ALTER TABLE `intervention`
  ADD CONSTRAINT `intervention_ibfk_1` FOREIGN KEY (`Materiel_idMateriel`) REFERENCES `materiel` (`idMateriel`),
  ADD CONSTRAINT `intervention_ibfk_2` FOREIGN KEY (`Technicien_idTechnicien`) REFERENCES `technicien` (`idTechnicien`),
  ADD CONSTRAINT `intervention_ibfk_3` FOREIGN KEY (`Ticket_idTicket`) REFERENCES `ticket` (`idTicket`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
