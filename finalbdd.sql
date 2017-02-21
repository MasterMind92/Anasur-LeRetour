-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Client: localhost
-- Généré le: Ven 03 Février 2017 à 17:21
-- Version du serveur: 5.6.12-log
-- Version de PHP: 5.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données: `finalbdd`
--
CREATE DATABASE IF NOT EXISTS `finalbdd` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `finalbdd`;

-- --------------------------------------------------------

--
-- Structure de la table `agent`
--

CREATE TABLE IF NOT EXISTS `agent` (
  `id_ag` int(5) NOT NULL AUTO_INCREMENT,
  `nom_ag` varchar(255) DEFAULT NULL,
  `prm_ag` varchar(255) DEFAULT NULL,
  `cont_ag` varchar(255) DEFAULT NULL,
  `login_ag` varchar(255) DEFAULT NULL,
  `mdp_ag` varchar(255) DEFAULT NULL,
  `sup_ag` int(5) DEFAULT NULL,
  `id_tagent` int(5) DEFAULT NULL,
  PRIMARY KEY (`id_ag`),
  KEY `fk_type` (`id_tagent`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Contenu de la table `agent`
--

INSERT INTO `agent` (`id_ag`, `nom_ag`, `prm_ag`, `cont_ag`, `login_ag`, `mdp_ag`, `sup_ag`, `id_tagent`) VALUES
(1, 'Madi', 'Christian', '64423170', 'Madi70', 'MadiChristian23170', 4, 4),
(2, 'Dalo', 'Richmond', '14089282', 'Dalo82', 'DaloRichmond89282', 1, 5),
(3, 'Beugre', 'Maxwell', '65924374', 'Beugre74', 'BeugreMaxwell24374', 1, 5),
(4, 'Boko', 'Laura', '39348676', 'Boko76', 'BokoLaura48676', 5, 3),
(5, 'Hodonou', 'Scyntyche', '35033211', 'Hodonou11', 'HodonouScyntyche33211', 6, 2),
(6, 'Coulibaly', 'Marc-Andre', '25790838', 'Coulibaly38', 'CoulibalyMarc-Andre90838', NULL, 1),
(7, 'Danton', 'Herve', '56298623', 'Danton23', 'DantonHerve98623', NULL, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `catspot`
--

CREATE TABLE IF NOT EXISTS `catspot` (
  `id_csp` int(5) NOT NULL AUTO_INCREMENT,
  `lib_csp` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id_csp`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Contenu de la table `catspot`
--

INSERT INTO `catspot` (`id_csp`, `lib_csp`) VALUES
(1, 'connu'),
(2, 'non connu');

-- --------------------------------------------------------

--
-- Structure de la table `commune`
--

CREATE TABLE IF NOT EXISTS `commune` (
  `id_com` int(5) NOT NULL AUTO_INCREMENT,
  `lib_com` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id_com`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Contenu de la table `commune`
--

INSERT INTO `commune` (`id_com`, `lib_com`) VALUES
(1, 'Abobo'),
(2, 'Adjame'),
(3, 'Anyama'),
(4, 'Attecoube'),
(5, 'Cocody'),
(6, 'Koumassi'),
(7, 'Marcory'),
(8, 'Plateau'),
(9, 'Treichville'),
(10, 'Port-Bouet'),
(11, 'Yopougon');

-- --------------------------------------------------------

--
-- Structure de la table `district`
--

CREATE TABLE IF NOT EXISTS `district` (
  `id_dist` int(5) NOT NULL AUTO_INCREMENT,
  `lib_dist` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id_dist`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Contenu de la table `district`
--

INSERT INTO `district` (`id_dist`, `lib_dist`) VALUES
(1, 'Lacs'),
(2, 'Comoe'),
(3, 'Denguele'),
(4, 'Goh-Djiboua'),
(5, 'Lagunes'),
(6, 'Montagnes'),
(7, 'Sassandra-Marahoue'),
(8, 'Savanes'),
(9, 'Bas-Sassandra'),
(10, 'Vallee du Bandama'),
(11, 'Woroba'),
(12, 'Zanzan');

-- --------------------------------------------------------

--
-- Structure de la table `ecocitoyen`
--

CREATE TABLE IF NOT EXISTS `ecocitoyen` (
  `id_eco` int(5) NOT NULL AUTO_INCREMENT,
  `nom_eco` varchar(255) DEFAULT NULL,
  `prm_eco` varchar(255) DEFAULT NULL,
  `cont_eco` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id_eco`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Contenu de la table `ecocitoyen`
--

INSERT INTO `ecocitoyen` (`id_eco`, `nom_eco`, `prm_eco`, `cont_eco`, `email`) VALUES
(1, 'Del Rey', 'Lala', '09060205', 'lolo@jkj.com'),
(2, 'Delo', 'boris', '08050104', 'db@jkj.com'),
(3, 'Zikei', 'Daniel', '01010505', 'zikan@jkj.com');

-- --------------------------------------------------------

--
-- Structure de la table `feuille_r`
--

CREATE TABLE IF NOT EXISTS `feuille_r` (
  `id_fr` int(5) NOT NULL AUTO_INCREMENT,
  `date_fr` datetime DEFAULT NULL,
  `val_fr` int(1) DEFAULT NULL,
  `id_agent` int(5) DEFAULT NULL,
  `id_cont` int(5) DEFAULT NULL,
  `id_sup` int(5) DEFAULT NULL,
  `id_prest` int(5) DEFAULT NULL,
  PRIMARY KEY (`id_fr`),
  KEY `fk_ag` (`id_agent`),
  KEY `fk_prestfr` (`id_prest`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Contenu de la table `feuille_r`
--

INSERT INTO `feuille_r` (`id_fr`, `date_fr`, `val_fr`, `id_agent`, `id_cont`, `id_sup`, `id_prest`) VALUES
(1, '2017-01-25 07:53:57', 1, 2, 1, NULL, NULL),
(2, '2017-01-25 07:53:57', NULL, 3, NULL, NULL, NULL),
(6, '2017-02-01 18:10:43', NULL, 6, NULL, NULL, NULL),
(8, '2017-02-01 18:12:24', NULL, 6, NULL, NULL, NULL),
(9, '2017-02-01 18:18:47', NULL, 2, NULL, NULL, NULL),
(10, '2017-02-01 18:19:02', NULL, 6, NULL, NULL, NULL),
(11, '2017-02-01 18:20:25', NULL, 2, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `plainte`
--

CREATE TABLE IF NOT EXISTS `plainte` (
  `id_pl` int(5) NOT NULL AUTO_INCREMENT,
  `lib_pl` varchar(255) DEFAULT NULL,
  `date_pl` datetime DEFAULT NULL,
  `id_tpl` int(5) DEFAULT NULL,
  `id_zone` int(5) DEFAULT NULL,
  `id_vil` int(5) DEFAULT NULL,
  `id_prest` int(5) DEFAULT NULL,
  `etat_pl` tinyint(1) DEFAULT NULL,
  `descr_pl` text,
  PRIMARY KEY (`id_pl`),
  KEY `fk_zone` (`id_zone`),
  KEY `fk_vil` (`id_vil`),
  KEY `fk_prest` (`id_prest`),
  KEY `fk_tpl` (`id_tpl`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `prestataire`
--

CREATE TABLE IF NOT EXISTS `prestataire` (
  `id_prest` int(5) NOT NULL AUTO_INCREMENT,
  `rs_prest` varchar(255) DEFAULT NULL,
  `del_prest` varchar(255) DEFAULT NULL,
  `qlt_prest` varchar(255) DEFAULT NULL,
  `ev_prest` varchar(255) DEFAULT NULL,
  `login_prest` varchar(255) DEFAULT NULL,
  `mdp_prest` varchar(255) DEFAULT NULL,
  `id_ag` int(5) DEFAULT NULL,
  `id_com` int(5) DEFAULT NULL,
  PRIMARY KEY (`id_prest`),
  KEY `fk_agent` (`id_ag`),
  KEY `fk_comp` (`id_com`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Contenu de la table `prestataire`
--

INSERT INTO `prestataire` (`id_prest`, `rs_prest`, `del_prest`, `qlt_prest`, `ev_prest`, `login_prest`, `mdp_prest`, `id_ag`, `id_com`) VALUES
(1, 'prestataire1', NULL, NULL, NULL, 'santeplus', 'prestpremier', 2, 2),
(2, 'prestataire2', NULL, NULL, NULL, 'santefois', 'prestsecond', 2, 2),
(3, 'prestataire3', NULL, NULL, NULL, 'santemoins', 'presttroisiem', 2, 2);

-- --------------------------------------------------------

--
-- Structure de la table `spot`
--

CREATE TABLE IF NOT EXISTS `spot` (
  `id_sp` int(5) NOT NULL AUTO_INCREMENT,
  `lib_sp` varchar(255) DEFAULT NULL,
  `etat` tinyint(1) DEFAULT NULL,
  `visit` tinyint(1) DEFAULT NULL,
  `val_sp` int(1) DEFAULT NULL,
  `date_sp` datetime DEFAULT NULL,
  `id_zone` int(5) DEFAULT NULL,
  `id_vil` int(5) DEFAULT NULL,
  `id_fr` int(5) DEFAULT NULL,
  `id_agent` int(5) DEFAULT NULL,
  `id_csp` int(5) DEFAULT NULL,
  PRIMARY KEY (`id_sp`),
  KEY `fk_zo` (`id_zone`),
  KEY `fk_ville` (`id_vil`),
  KEY `fk_fr` (`id_fr`),
  KEY `fk_age` (`id_agent`),
  KEY `fk_csp` (`id_csp`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=19 ;

--
-- Contenu de la table `spot`
--

INSERT INTO `spot` (`id_sp`, `lib_sp`, `etat`, `visit`, `val_sp`, `date_sp`, `id_zone`, `id_vil`, `id_fr`, `id_agent`, `id_csp`) VALUES
(4, NULL, 1, NULL, NULL, '2017-01-25 08:21:00', 75, NULL, NULL, 2, 2),
(5, NULL, 1, NULL, NULL, '2017-01-25 08:21:00', 25, NULL, 1, 2, 1),
(6, NULL, 1, NULL, NULL, '2017-01-25 08:21:00', 30, NULL, 1, 2, 1),
(7, NULL, 1, NULL, NULL, '2017-01-25 08:23:13', NULL, 10, NULL, 2, 2),
(8, NULL, 1, NULL, NULL, '2017-01-25 08:23:13', NULL, 25, 2, 2, 1),
(9, NULL, 1, NULL, NULL, '2017-01-25 08:23:13', NULL, 30, 2, 2, 1),
(10, 'Depot Bizarre', NULL, NULL, NULL, '2017-02-01 18:10:18', 62, NULL, 2, NULL, NULL),
(13, 'Depot Bizarre', 1, NULL, NULL, '2017-02-01 18:12:24', 90, NULL, 6, NULL, NULL),
(14, 'Depot Bizarre', 1, NULL, NULL, '2017-02-01 18:20:26', 24, NULL, 6, 2, NULL),
(15, 'Depot Bizarre', 1, NULL, NULL, '2017-02-01 18:22:22', 77, NULL, 11, 2, 1),
(16, '', 1, NULL, NULL, '2017-02-01 19:18:56', 24, NULL, 11, 2, 1),
(17, '', 1, NULL, NULL, '2017-02-01 19:19:32', 24, NULL, 11, 2, 1),
(18, '', 1, NULL, NULL, '2017-02-01 19:27:27', 24, NULL, 11, 2, 1);

-- --------------------------------------------------------

--
-- Structure de la table `type_agent`
--

CREATE TABLE IF NOT EXISTS `type_agent` (
  `id_tagent` int(5) NOT NULL AUTO_INCREMENT,
  `lib_tagent` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id_tagent`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Contenu de la table `type_agent`
--

INSERT INTO `type_agent` (`id_tagent`, `lib_tagent`) VALUES
(1, 'DG'),
(2, 'DT'),
(3, 'Superviseur'),
(4, 'Controleur'),
(5, 'Assistant controleur');

-- --------------------------------------------------------

--
-- Structure de la table `type_pl`
--

CREATE TABLE IF NOT EXISTS `type_pl` (
  `id_tpl` int(5) NOT NULL AUTO_INCREMENT,
  `lib_tpl` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id_tpl`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `ville`
--

CREATE TABLE IF NOT EXISTS `ville` (
  `id_vil` int(5) NOT NULL AUTO_INCREMENT,
  `lib_vil` varchar(255) DEFAULT NULL,
  `id_dist` int(5) DEFAULT NULL,
  PRIMARY KEY (`id_vil`),
  KEY `fk_dist` (`id_dist`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=90 ;

--
-- Contenu de la table `ville`
--

INSERT INTO `ville` (`id_vil`, `lib_vil`, `id_dist`) VALUES
(1, 'Dimbokro', 1),
(2, 'Toumodi', 1),
(3, 'M''Batto', 1),
(4, 'Bocanda', 1),
(5, 'Bongouanou', 1),
(6, 'Arrah', 1),
(7, 'Daoukro', 1),
(8, 'M''Bahiakro', 1),
(9, 'Prikro', 1),
(10, 'Didievi', 1),
(11, 'Tiebissou', 1),
(12, 'Abengourou', 2),
(13, 'Agnibilekrou', 2),
(14, 'Bettie', 2),
(15, 'Aboisso', 2),
(16, 'Adiake', 2),
(17, 'Tiapoum', 2),
(18, 'Grand-Bassam', 2),
(19, 'Odienne', 2),
(20, 'Madinani', 3),
(21, 'Samatiguila', 3),
(22, 'Kaniasso', 3),
(23, 'Minignan', 3),
(24, 'Gagnoa', 3),
(25, 'Lakota', 4),
(26, 'Oume', 4),
(27, 'Guitry', 4),
(28, 'Divo', 4),
(29, 'Dabou', 4),
(30, 'Agboville', 5),
(31, 'Jacqueville', 5),
(32, 'Tiassale', 5),
(33, 'Sikensi', 5),
(34, 'Akoupe', 5),
(35, 'Alepe', 5),
(36, 'Adzope', 5),
(37, 'Yakasse-Attobrou', 5),
(38, 'Grand-Lahou', 5),
(39, 'Man', 5),
(40, 'Biankouman', 6),
(41, 'Duekoue', 6),
(42, 'Kouibli', 6),
(43, 'Danane', 6),
(44, 'Bangolo', 6),
(45, 'Toulepleu', 6),
(46, 'Zouan-Hounien', 6),
(47, 'Blolequin', 6),
(48, 'Guiglo', 6),
(49, 'Daloa', 6),
(50, 'Issia', 7),
(51, 'Sinfra', 7),
(52, 'Vavoua', 7),
(53, 'Zuenoula', 7),
(54, 'Zoukougbeu', 7),
(55, 'Bouaffle', 7),
(56, 'Korhogo', 7),
(57, 'Tengrela', 8),
(58, 'Kouto', 8),
(59, 'Boundiali', 8),
(60, 'Sinematiali', 8),
(61, 'Dikodougou', 8),
(62, 'Ouangolodougou', 8),
(63, 'Ferkessedougou', 8),
(64, 'San-Pedro', 8),
(65, 'Tabou', 9),
(66, 'Fresco', 9),
(67, 'Sassandra', 9),
(68, 'Gueyo', 9),
(69, 'Soubre', 9),
(70, 'Bouake', 9),
(71, 'Beoumi', 10),
(72, 'Sakassou', 10),
(73, 'Botro', 10),
(74, 'Dabakala', 10),
(75, 'Niakaramandougou', 10),
(76, 'Katiola', 10),
(77, 'Seguela', 10),
(78, 'Mankono', 11),
(79, 'Kounahiri', 11),
(80, 'Kani', 11),
(81, 'Bondoukou', 11),
(82, 'Tanda', 12),
(83, 'Sandegue', 12),
(84, 'Koun-fao', 12),
(85, 'Transua', 12),
(86, 'Nassian', 12),
(87, 'Bouna', 12),
(88, 'Doropo', 12),
(89, 'Tehini', 12);

-- --------------------------------------------------------

--
-- Structure de la table `zone`
--

CREATE TABLE IF NOT EXISTS `zone` (
  `id_zone` int(5) NOT NULL AUTO_INCREMENT,
  `lib_zone` varchar(255) DEFAULT NULL,
  `id_com` int(5) DEFAULT NULL,
  PRIMARY KEY (`id_zone`),
  KEY `fk_com` (`id_com`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=145 ;

--
-- Contenu de la table `zone`
--

INSERT INTO `zone` (`id_zone`, `lib_zone`, `id_com`) VALUES
(1, 'Plaque', 1),
(2, 'Anador', 1),
(3, 'Agbekoi', 1),
(4, 'Akeikoi', 1),
(5, 'Derriere rail', 1),
(6, 'samake', 1),
(7, 'Les 4 etages', 1),
(8, 'PK18', 1),
(9, 'Avocatier', 1),
(10, 'N''Dotre', 1),
(11, 'Belleville', 1),
(12, 'Dokui', 1),
(13, 'Sogefia', 1),
(14, 'Abobo Baoule', 1),
(15, 'Abobo Clotcha', 1),
(16, 'Williamsville', 2),
(17, 'Mosquee', 2),
(18, 'Bracodi', 2),
(19, 'Liberte', 2),
(20, '220 Logements', 2),
(21, 'Adjame marche', 2),
(22, 'Anyama residentiel', 3),
(23, 'Anyama Berthe', 3),
(24, 'Anyama Cisse', 3),
(25, 'Ancienne Gendarmerie', 3),
(26, 'A la morgue', 3),
(27, 'Angre', 5),
(28, 'Riviera palmerais', 5),
(29, 'Riviera 2', 5),
(30, 'Riviera 3', 5),
(31, 'Riviera 4', 5),
(32, 'Riviera Golf', 5),
(33, 'Bonoumin', 5),
(34, '2 Plateau', 5),
(35, 'Attogban', 5),
(36, 'Gobelet', 5),
(37, '147 Logements', 6),
(38, 'Campement', 6),
(39, 'Prodomo', 6),
(40, 'Agouti', 6),
(41, 'Sopim', 6),
(42, 'Inchallah', 6),
(43, '32', 6),
(44, '05', 6),
(45, 'Divo', 6),
(46, 'Sicogi', 6),
(47, 'Soweto', 6),
(48, 'Boston', 6),
(49, 'Baudelaire', 6),
(50, 'Quartier du maire (Canetons)', 6),
(51, '3 Ampoules', 6),
(52, 'Remblais (Colombe)', 6),
(53, 'Sans fils', 6),
(54, 'Akwaba', 6),
(55, 'Sogefia', 6),
(56, 'St Etienne', 6),
(57, 'Anoumambo', 7),
(58, 'Remblais', 7),
(59, 'Residentiel', 7),
(60, 'Centre Commercial', 7),
(61, 'Sicogi', 7),
(62, 'Massarana', 7),
(63, 'Konankro', 7),
(64, 'Cite Administrative', 8),
(65, 'Sorbonne', 8),
(66, 'Quartier chien mechant', 8),
(67, 'Carena', 8),
(68, 'Cite Esculable', 8),
(69, 'Avenue 14', 9),
(70, 'Rue 12', 9),
(71, 'Rue des Brasseries', 9),
(72, 'Biafra', 9),
(73, 'A la rass', 9),
(74, 'Gare de Bassam', 9),
(75, 'Nanan Yamousso', 9),
(76, 'Mobibois', 10),
(77, 'Jean Folly', 10),
(78, 'Rue 12', 10),
(79, 'Adjoufou', 10),
(80, 'Casier', 10),
(81, 'Phare', 10),
(82, 'Gonzagueville', 10),
(83, 'Anani', 10),
(84, 'Derriere Warf', 10),
(85, 'Abattoir', 10),
(86, 'Siporex', 11),
(87, 'Sideci', 11),
(88, 'Gesco', 11),
(89, 'Maroc', 11),
(90, 'Ananerais', 11),
(91, 'Niangon', 11),
(92, 'Selmer', 11),
(93, 'Andokoi', 11),
(94, 'Koweit', 11),
(95, 'Sicogi', 11),
(96, 'Songon', 11),
(97, 'Toit rouge', 11),
(98, 'Kilometre 17', 11),
(99, 'Rue Princesse', 11),
(100, 'Port-Bouet 2', 11),
(101, 'Wassakara', 11),
(102, 'Sable', 11),
(103, 'Banco', 11),
(104, 'Abobodoume', 11),
(105, 'Quartier Millionnaire', 11),
(106, 'Cite verte', 11),
(107, 'Sogefia', 11),
(108, 'Cite CIE (Niangon)', 11),
(109, 'Academie (Niangon)', 11),
(110, 'Agban Attie', 4),
(111, 'Attecoube 3', 4),
(112, 'Djene Ecare', 4),
(113, 'Sante Ecole', 4),
(114, 'Sante 3 Residentiel 1', 4),
(115, 'Sante 3 Residentiel 2', 4),
(116, 'Sante 3 Extension', 4),
(117, 'Fromager', 4),
(118, 'Deinde', 4),
(119, 'Asapsu', 4),
(120, 'Awa', 4),
(121, 'Jean-Paul 2', 4),
(122, 'Sante Carrefour', 4),
(123, 'Akelie', 4),
(124, 'Lackman', 4),
(125, 'Douagoville', 4),
(126, 'Camp Douane', 4),
(127, 'Jerusalem Residentiel', 4),
(128, 'Jerusalem 1', 4),
(129, 'Jerusalem 2', 4),
(130, 'Jerusalem 3', 4),
(131, 'Sebroko', 4),
(132, 'La Paix', 4),
(133, 'Lagune', 4),
(134, 'Espoir', 4),
(135, 'Mosquee', 4),
(136, 'Saint-Joseph', 4),
(137, 'Ecole', 4),
(138, 'Gbebouto', 4),
(139, 'Cantonnement Forestier', 4),
(140, 'Cite Fairmont 1', 4),
(141, 'Cite Fairmont 2', 4),
(142, 'Ecole Forestiere', 4),
(143, 'Bidjante', 4),
(144, 'Dokui', 5);

--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `agent`
--
ALTER TABLE `agent`
  ADD CONSTRAINT `fk_type` FOREIGN KEY (`id_tagent`) REFERENCES `type_agent` (`id_tagent`);

--
-- Contraintes pour la table `feuille_r`
--
ALTER TABLE `feuille_r`
  ADD CONSTRAINT `fk_ag` FOREIGN KEY (`id_agent`) REFERENCES `agent` (`id_ag`),
  ADD CONSTRAINT `fk_prestfr` FOREIGN KEY (`id_prest`) REFERENCES `prestataire` (`id_prest`);

--
-- Contraintes pour la table `plainte`
--
ALTER TABLE `plainte`
  ADD CONSTRAINT `fk_prest` FOREIGN KEY (`id_prest`) REFERENCES `prestataire` (`id_prest`),
  ADD CONSTRAINT `fk_tpl` FOREIGN KEY (`id_tpl`) REFERENCES `type_pl` (`id_tpl`),
  ADD CONSTRAINT `fk_vil` FOREIGN KEY (`id_vil`) REFERENCES `ville` (`id_vil`),
  ADD CONSTRAINT `fk_zone` FOREIGN KEY (`id_zone`) REFERENCES `zone` (`id_zone`);

--
-- Contraintes pour la table `prestataire`
--
ALTER TABLE `prestataire`
  ADD CONSTRAINT `fk_agent` FOREIGN KEY (`id_ag`) REFERENCES `agent` (`id_ag`),
  ADD CONSTRAINT `fk_comp` FOREIGN KEY (`id_com`) REFERENCES `commune` (`id_com`);

--
-- Contraintes pour la table `spot`
--
ALTER TABLE `spot`
  ADD CONSTRAINT `fk_age` FOREIGN KEY (`id_agent`) REFERENCES `agent` (`id_ag`),
  ADD CONSTRAINT `fk_csp` FOREIGN KEY (`id_csp`) REFERENCES `catspot` (`id_csp`),
  ADD CONSTRAINT `fk_fr` FOREIGN KEY (`id_fr`) REFERENCES `feuille_r` (`id_fr`),
  ADD CONSTRAINT `fk_ville` FOREIGN KEY (`id_vil`) REFERENCES `ville` (`id_vil`),
  ADD CONSTRAINT `fk_zo` FOREIGN KEY (`id_zone`) REFERENCES `zone` (`id_zone`);

--
-- Contraintes pour la table `ville`
--
ALTER TABLE `ville`
  ADD CONSTRAINT `fk_dist` FOREIGN KEY (`id_dist`) REFERENCES `district` (`id_dist`);

--
-- Contraintes pour la table `zone`
--
ALTER TABLE `zone`
  ADD CONSTRAINT `fk_com` FOREIGN KEY (`id_com`) REFERENCES `commune` (`id_com`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
