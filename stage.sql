-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Mer 05 Août 2020 à 00:32
-- Version du serveur :  5.6.17
-- Version de PHP :  5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `stage`
--

-- --------------------------------------------------------

--
-- Structure de la table `centre`
--

CREATE TABLE IF NOT EXISTS `centre` (
  `id` int(10) NOT NULL,
  `station` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `centre`
--

INSERT INTO `centre` (`id`, `station`) VALUES
(1, 'CENTRE PRODUCTION De'),
(0, 'ensah');

-- --------------------------------------------------------

--
-- Structure de la table `chef`
--

CREATE TABLE IF NOT EXISTS `chef` (
  `role` varchar(40) NOT NULL,
  `id` int(10) NOT NULL,
  `nom` varchar(40) NOT NULL,
  `prenom` varchar(40) NOT NULL,
  `password` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `chef`
--

INSERT INTO `chef` (`role`, `id`, `nom`, `prenom`, `password`) VALUES
('chef', 1, 'Lagnaoui', 'manal', 123);

-- --------------------------------------------------------

--
-- Structure de la table `division`
--

CREATE TABLE IF NOT EXISTS `division` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `divisio` varchar(50) DEFAULT NULL,
  `nom_directeur` varchar(50) DEFAULT NULL,
  `rolee` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Contenu de la table `division`
--

INSERT INTO `division` (`id`, `divisio`, `nom_directeur`, `rolee`) VALUES
(1, 'SP3', 'mohamed', 'ibn hicham');

-- --------------------------------------------------------

--
-- Structure de la table `emlpoyee`
--

CREATE TABLE IF NOT EXISTS `emlpoyee` (
  `id` int(11) NOT NULL,
  `nom` varchar(80) NOT NULL,
  `date_naissance` varchar(60) NOT NULL,
  `situation_familiale` varchar(60) NOT NULL,
  `college` varchar(60) NOT NULL,
  `Emploi` varchar(60) NOT NULL,
  `Cin` int(11) NOT NULL,
  `filiere` varchar(100) NOT NULL,
  `date_debut` varchar(40) NOT NULL,
  `date_fin` varchar(40) NOT NULL,
  `address1` varchar(100) NOT NULL,
  `address2` varchar(100) NOT NULL,
  `tel` int(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `emlpoyee`
--

INSERT INTO `emlpoyee` (`id`, `nom`, `date_naissance`, `situation_familiale`, `college`, `Emploi`, `Cin`, `filiere`, `date_debut`, `date_fin`, `address1`, `address2`, `tel`) VALUES
(0, '<br /><font size=''1''><table class=''xdebug-error xe-notice'' dir=''ltr'' border=''1'' ', '<br /><font size=''1''><table class=''xdebug-error xe-notice'' d', '<br /><font size=''1''><table class=''xdebug-error xe-notice'' d', 'Cadre', '<br /><font size=''1''><table class=''xdebug-error xe-notice'' d', 0, '<br /><font size=''1''><table class=''xdebug-error xe-notice'' dir=''ltr'' border=''1'' cellspacing=''0'' cell', '', '', '<br /><font size=''1''><table class=''xdebug-error xe-notice'' dir=''ltr'' border=''1'' cellspacing=''0'' cell', '<br /><font size=''1''><table class=''xdebug-error xe-notice'' dir=''ltr'' border=''1'' cellspacing=''0'' cell', 0);

-- --------------------------------------------------------

--
-- Structure de la table `service`
--

CREATE TABLE IF NOT EXISTS `service` (
  `id` int(11) NOT NULL,
  `type` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `service`
--

INSERT INTO `service` (`id`, `type`) VALUES
(1, 'Exploitation'),
(2, 'Technique'),
(3, 'Commercial'),
(4, 'Support'),
(5, ''),
(0, 'SP5/3'),
(0, 'service2'),
(0, 'service2');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
