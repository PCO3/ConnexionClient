-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Ven 01 Décembre 2017 à 10:11
-- Version du serveur :  5.6.17
-- Version de PHP :  5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `testcode`
--

-- --------------------------------------------------------

--
-- Structure de la table `clientzodiac`
--

CREATE TABLE IF NOT EXISTS `clientzodiac` (
  `identifiant` int(11) NOT NULL AUTO_INCREMENT,
  `NomClient` text NOT NULL,
  `Password` text NOT NULL,
  PRIMARY KEY (`identifiant`),
  UNIQUE KEY `identifiant` (`identifiant`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Contenu de la table `clientzodiac`
--

INSERT INTO `clientzodiac` (`identifiant`, `NomClient`, `Password`) VALUES
(1, 'Boeing', 'coola'),
(3, 'Airbus', 'loulou'),
(4, 'Bobo', 'gru');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
