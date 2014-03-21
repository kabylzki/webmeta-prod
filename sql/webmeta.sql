-- phpMyAdmin SQL Dump
-- version 4.0.6deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 21, 2014 at 09:10 PM
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
  `avatar` varchar(255) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=5 ;

--
-- Dumping data for table `Compte`
--

INSERT INTO `Compte` (`id`, `login`, `password`, `email`, `nom`, `prenom`, `date_naissance`, `avatar`) VALUES
(1, 'admin', 'admin', '', 'Administrateur', '', '0000-00-00', ''),
(2, 'kabylzki', 'azerty', 'tas.mik@gogo.fr', 'Taskiran', 'Mikaël', '2009-05-07', ''),
(3, 'kabylzki2', 'bobo', 'eefef@ef.fr', 'zerrgg', 'ergererg', '2009-01-01', ''),
(4, 'kabylzki3', 'ghghgh', 'eefef@ef.frg', 'ghfherthe', 'zehtethetheth', '2009-01-01', '');

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `Page`
--

CREATE TABLE IF NOT EXISTS `Page` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titre` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `nom_lien` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `url_alias` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `id_categorie` int(11) NOT NULL,
  `contenu` varchar(5000) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=8 ;

--
-- Dumping data for table `Page`
--

INSERT INTO `Page` (`id`, `titre`, `nom_lien`, `url_alias`, `id_categorie`, `contenu`) VALUES
(1, 'Un exemple de page commune', 'link name 1', 'page-commune', 1, 'This is le contenu de pas mage commune'),
(6, 'Ma première page', 'Link name 2 H', 'url-page-1', 1, '<h1>zefzefzef zf zf</h1>\r\n<p>&nbsp;</p>\r\n<p>zefzefzef<strong>zezezef</strong></p>\r\n<p>&nbsp;</p>\r\n<p>ezf zef ze<strong>f zef</strong></p>'),
(7, 'Ma Méga page', 'Nom du lien de la mega page', 'mega-page.html', 2, '<h1>This is header H1</h1>\r\n<h2>Header H2</h2>\r\n<p>The little text and a link <a href="http://www.google.fr" target="_blank">lien vers google</a></p>\r\n<h2>Other H2</h2>\r\n<p><img src="http://images2.layoutsparks.com/1/102669/biker-cartoon-cute-wink.gif" alt="bettyboopwink" width="312" height="372" /></p>\r\n<p>&nbsp;</p>\r\n<p><iframe src="http://www.youtube.com/embed/PHU-AJTn0I8" width="425" height="350"></iframe></p>\r\n<p>&nbsp;</p>');

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
