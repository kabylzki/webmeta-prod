-- phpMyAdmin SQL Dump
-- version 4.0.6deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 22, 2014 at 08:09 PM
-- Server version: 5.5.35-0ubuntu0.13.10.2
-- PHP Version: 5.5.3-1ubuntu2.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `webmeta`
--

-- --------------------------------------------------------

--
-- Table structure for table `Categorie`
--

CREATE TABLE IF NOT EXISTS `Categorie` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=11 ;

--
-- Dumping data for table `Categorie`
--

INSERT INTO `Categorie` (`id`, `nom`) VALUES
(1, 'Commun'),
(2, 'Documentation'),
(3, 'Tutoriel'),
(4, 'Faq'),
(5, 'Warbot'),
(6, 'Metaciv'),
(7, 'Warbot - Documentation'),
(8, 'Metaciv - Documentation'),
(9, 'Warbot - Faq'),
(10, 'Metaciv Faq');

-- --------------------------------------------------------

--
-- Table structure for table `Compte`
--

CREATE TABLE IF NOT EXISTS `Compte` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `login` varchar(255) COLLATE utf8_bin NOT NULL,
  `password` varchar(255) COLLATE utf8_bin NOT NULL,
  `email` varchar(255) COLLATE utf8_bin NOT NULL,
  `nom` varchar(255) COLLATE utf8_bin NOT NULL,
  `prenom` varchar(255) COLLATE utf8_bin NOT NULL,
  `date_naissance` date NOT NULL,
  `avatar` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `date_inscription` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=6 ;

--
-- Dumping data for table `Compte`
--

INSERT INTO `Compte` (`id`, `login`, `password`, `email`, `nom`, `prenom`, `date_naissance`, `avatar`, `date_inscription`) VALUES
(1, 'admin', 'admin', '', 'Administrateur', '', '0000-00-00', '', '0000-00-00 00:00:00'),
(2, 'kabylzki', 'azerty', 'tas.mik@gogo.fr', 'Taskiran', 'Mikaël', '2009-05-07', '', '0000-00-00 00:00:00'),
(3, 'kabylzki2', 'bobo', 'eefef@ef.fr', 'zerrgg', 'ergererg', '2009-01-01', '', '0000-00-00 00:00:00'),
(4, 'kabylzki3', 'ghghgh', 'eefef@ef.frg', 'ghfherthe', 'zehtethetheth', '2009-01-01', '', '0000-00-00 00:00:00'),
(5, 'thth', 'thth', 'th@th.gt', 'thth', 'thth', '1932-08-16', NULL, '2014-03-22 20:58:09');

-- --------------------------------------------------------

--
-- Table structure for table `groupe`
--

CREATE TABLE IF NOT EXISTS `groupe` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` text COLLATE utf8_bin NOT NULL,
  `avatar_gr` text COLLATE utf8_bin NOT NULL,
  `id_chef` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `jar`
--

CREATE TABLE IF NOT EXISTS `jar` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_user` int(11) NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `Jeu`
--

CREATE TABLE IF NOT EXISTS `Jeu` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=3 ;

--
-- Dumping data for table `Jeu`
--

INSERT INTO `Jeu` (`id`, `nom`) VALUES
(1, 'Warbot'),
(2, 'Metaciv');

-- --------------------------------------------------------

--
-- Table structure for table `Page`
--

CREATE TABLE IF NOT EXISTS `Page` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titre` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `nom_lien` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `nom_categorie` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `url_alias` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `contenu` varchar(5000) COLLATE utf8_unicode_ci NOT NULL,
  `date_publication` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=16 ;

--
-- Dumping data for table `Page`
--

INSERT INTO `Page` (`id`, `titre`, `nom_lien`, `nom_categorie`, `url_alias`, `contenu`, `date_publication`) VALUES
(13, 'Le titre de ma page', 'Ma première page', 'Documentation', 'L''url what is happening', '<h1>Doc Page</h1>\r\n<p>This is a doc page</p>', '2014-03-22 20:13:50'),
(14, 'Ma première doc warbot', 'Documentation Warbot 1', 'Warbot - Documentation', 'doc-warbot-1.html', '<h1>Documentation de warbot 1</h1>\r\n<p>This is warbot doc 1</p>', '2014-03-22 20:30:31'),
(15, 'Ma première page FAQ', 'FAQ 1', 'Faq', 'FAQ - 1', '<h1>FAQ 1</h1>\r\n<p>zezefzef</p>\r\n<p>&nbsp;</p>', '2014-03-22 21:07:35');

-- --------------------------------------------------------

--
-- Table structure for table `tournoi`
--

CREATE TABLE IF NOT EXISTS `tournoi` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` text NOT NULL,
  `status` text NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
