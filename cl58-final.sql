-- phpMyAdmin SQL Dump
-- version 4.0.7
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 17, 2016 at 01:19 AM
-- Server version: 5.5.47
-- PHP Version: 5.3.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `cl58-final`
--

-- --------------------------------------------------------

--
-- Table structure for table `articles`
--

CREATE TABLE IF NOT EXISTS `articles` (
  `ID` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `idauteur` int(10) unsigned NOT NULL,
  `titre` varchar(50) NOT NULL,
  `contenu` longtext NOT NULL,
  `idmodificateur` int(11) DEFAULT NULL,
  `dateheure` datetime NOT NULL,
  UNIQUE KEY `ID` (`ID`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `articles`
--

INSERT INTO `articles` (`ID`, `idauteur`, `titre`, `contenu`, `idmodificateur`, `dateheure`) VALUES
(3, 1, 'OuLiPo', '# PrÃ©sentation de l''Oulipo\r\n\r\nCe groupe comprend des Ã©crivains, dont les plus cÃ©lÃ¨bres sont RaymondQueneau, Italo Calvino ou GeorgesPerec, mais aussi des personnalitÃ©s ayant une double compÃ©tence comme le compositeur de mathÃ©matique et de poÃ©sie Jacques Roubaud ou de (presque) purs mathÃ©maticiens comme ClaudeBerge (dÃ©veloppeur de la ThÃ©orie des graphes). \r\n\r\nConsidÃ©rant que les contraintes formelles sont un puissant stimulant pour l''imagination, l''Oulipo s''est fixÃ© plusieurs directions de travail :\r\n-un travail synthÃ©tique (synthoulipisme), qui consiste en l''invention et l''expÃ©rimentation de contraintes littÃ©raires nouvelles, avec Ã©ventuellement un exemple de texte pour chaque proposition.\r\n-un travail analytique (anoulipisme), qui consiste en la recherche de ceux qui sont appelÃ©s, avec humour, les Â« plagiaires par anticipation Â», soit un recensement de tous les Ã©crivains qui ont travaillÃ© avec des contraintes, de faÃ§on plus ou moins consciente, avant la crÃ©ation de l''Oulipo.\r\n\r\nLes recherches en synthoulipisme constituent la face la plus connue du grand public et surtout la plus spectaculaire. Sont cÃ©lÃ¨bres aujourd''hui par exemple la mÃ©thode S plus n (Ã  partir de la Â« mÃ©thode S + 7 Â» mise au point par Jean Lescure dÃ¨s 1961), la littÃ©rature combinatoire, qui permit Ã  Raymond Queneau d''Ã©crire Cent Mille Milliards de PoÃ¨mes mais aussi des poÃ¨mes boolÃ©ens basÃ©s sur l'' algÃ¨bre de Boole ou des Â« poÃ¨mes Ã  mÃ©tamorphoses pour rubans de MÃ¶bius Â».', 1, '2016-04-17 00:32:11'),
(4, 1, 'ClaudeBerge', '# Claude Berge\r\n\r\nClaude Berge, nÃ© le 5 juin 1926 et mort le 30 juin 2002, Ã©tait un mathÃ©maticien et artiste franÃ§ais. \r\n\r\nSur le plan mathÃ©matique, il a Ã©tÃ© un des crÃ©ateurs de la thÃ©orie des graphes telle que nous la connaissons actuellement, notamment grÃ¢ce Ã  son livre **ThÃ©orie des Graphes et ses Applications** publiÃ© en 1958. Il est Ã©galement l''auteur d''ouvrages majeurs en topologie et en analyse combinatoire, qui seront plus tard traduits en anglais et restent actuellement des rÃ©fÃ©rences incontournables en ces matiÃ¨res. \r\n\r\nEn 1995 le prix Euler lui est dÃ©cernÃ© â€” conjointement avec le Professeur R.L. Graham â€” par l''Institute for Combinatorics.\r\n\r\nSur le plan artistique, il a Ã©tÃ© l''un des fondateurs de l''OuLiPo en 1960 et est l''auteur d''ouvrages littÃ©raires. Mais il Ã©tait aussi sculpteur et collectionneur d''arts, notamment d''art asmat de Nouvelle-GuinÃ©e.', 1, '2016-04-17 00:33:17'),
(5, 1, 'RaymondQueneaus', '# Raymond Queneau\r\n\r\nRaymond Queneau, nÃ© au Havre (Seine-InfÃ©rieure, aujourdâ€™hui Seine-Maritime) le 21 fÃ©vrier 1903 et mort Ã  Paris le 25 octobre 1976, est un romancier, poÃ¨te, dramaturge franÃ§ais, cofondateur du groupe littÃ©raire OuLiPo.\r\n\r\nCâ€™est en 1933 quâ€™il publie son premier roman, Le Chiendent, quâ€™il construisit selon ses dires comme une illustration littÃ©raire du Discours de la mÃ©thode de RenÃ© Descartes. Ce roman lui vaudra la reconnaissance de quelques amateurs qui lui dÃ©cernent le premier prix des Deux-Magots de l''histoire. Suivront quatre romans dâ€™inspiration autobiographique : Les Derniers Jours, Odile, Les Enfants du limon et ChÃªne et Chien, ce dernier entiÃ¨rement Ã©crit en vers.\r\n\r\nCâ€™est avec *Pierrot mon ami*, paru en 1942, quâ€™il connaÃ®t son premier succÃ¨s. En 1947 paraÃ®t **Exercices de style**, un court rÃ©cit dÃ©clinÃ© en une centaine de styles. Ces *Exercices de style* lui furent inspirÃ©s par *Lâ€™Art de la fugue* de Johann Sebastian Bach, lors dâ€™un concert auquel il avait assistÃ©, en compagnie de son ami Michel Leiris, et qui avait fait naÃ®tre en lui lâ€™envie de dÃ©velopper diffÃ©rents styles dâ€™Ã©criture. ', 1, '2016-04-17 00:33:44'),
(6, 1, 'Le tigre', 'Originellement, Le Tigre Ã©tait un projet secondaire de Hanna qui s''investissait alors dans son projet solo Julie Ruin. Le Tigre mÃ©lange un fort message politique revendicatif fÃ©ministe, lesbien et d''extrÃªme-gauche avec de la musique Ã©lectronique et des rythmes punk. Hanna a Ã©tÃ© membre du mouvement riot grrrl, on associe donc Le Tigre avec ce mouvement mÃªme si le riot grrrl a probablement disparu en tant que tel pour des formes plus complexes..\r\n\r\nSamson remplace Sadie Benning, partie continuer sa carriÃ¨re de rÃ©alisatrice, avant l''enregistrement de l''album Feminist Sweepstakes. Elle travaillait dÃ©jÃ  avec Le Tigre en tant que programmatrice vidÃ©o lors des concerts. Cela a encore augmentÃ© le caractÃ¨re spÃ©cifique des concerts de Le Tigre qui tient du concert rock, de la projection vidÃ©o, de la rÃ©union politique, du spectacle multimÃ©dia et des moments de chorÃ©graphie. Edited', 2, '2016-04-17 00:36:39');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nom` varchar(25) NOT NULL,
  `password` text NOT NULL,
  `rang` tinyint(1) NOT NULL,
  KEY `id` (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `nom`, `password`, `rang`) VALUES
(1, 'Admin', '17b2e8002a0041e640e84ed8c4dff3aa', 1),
(2, 'Youssef Zaky', '67eba966e850ca3b96a578494b0d28ed', 0),
(3, 'Test', '997c727ff7c158c4d5a3eb834d039576', 0),
(4, 'Adrien F', '9c59326dee7de517d1f046e5e20b7955', 0),
(5, 'Member', '24314e78cbf31344c01893f1607454ad', 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
