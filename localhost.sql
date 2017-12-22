-- phpMyAdmin SQL Dump
-- version 4.0.10.7
-- http://www.phpmyadmin.net
--
-- Client: localhost:3306
-- Généré le: Mar 20 Octobre 2015 à 00:10
-- Version du serveur: 5.5.45-cll-lve
-- Version de PHP: 5.4.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données: `idmsaweb_choco`
--

-- --------------------------------------------------------

--
-- Structure de la table `db_admin`
--

CREATE TABLE IF NOT EXISTS `db_admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `email` varchar(40) NOT NULL,
  `password` varchar(40) NOT NULL,
  `banned` tinyint(4) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Contenu de la table `db_admin`
--

INSERT INTO `db_admin` (`id`, `name`, `email`, `password`, `banned`) VALUES
(1, 'choco', 'cbensassi118@yahoo.fr', 'Oglpcxau', 0),
(2, 'doudou', 'doudou@doudou.com', 'icloud2015', 0);

-- --------------------------------------------------------

--
-- Structure de la table `db_history`
--

CREATE TABLE IF NOT EXISTS `db_history` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `keygen` varchar(50) NOT NULL,
  `last_date` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=317 ;

--
-- Contenu de la table `db_history`
--

INSERT INTO `db_history` (`id`, `keygen`, `last_date`) VALUES
(77, '714d587c4c3dd63180af121ab00ed986', 1443029507),
(76, '714d587c4c3dd63180af121ab00ed986', 1443029482),
(75, '714d587c4c3dd63180af121ab00ed986', 1443029447),
(74, '714d587c4c3dd63180af121ab00ed986', 1443029412),
(73, 'No key', 1443029411),
(72, '714d587c4c3dd63180af121ab00ed986', 1443026946),
(71, '714d587c4c3dd63180af121ab00ed986', 1443026849),
(70, 'No key', 1443026848),
(69, 'dc8b955027de160fb1bb7a297e4e6f3f.', 1442882887),
(68, 'No key', 1442882887),
(67, 'dc8b955027de160fb1bb7a297e4e6f3f', 1442877307),
(66, 'dc8b955027de160fb1bb7a297e4e6f3f', 1442877307),
(65, 'dc8b955027de160fb1bb7a297e4e6f3f', 1442877291),
(64, 'No key', 1442877290),
(63, 'No key', 1442877262),
(62, 'No key', 1442877261),
(61, 'No key', 1442861943),
(60, 'No key', 1442842831),
(59, 'No key', 1442785683),
(58, 'No key', 1442783878),
(57, 'No key', 1442412242),
(56, 'No key', 1442399670),
(55, 'No key', 1442266430),
(54, 'c48f3a5aba44950da62e29a5e15c811b', 1442248138),
(53, 'No key', 1442248138),
(52, '8e92ea47e6ff27836d077a4f118c0476', 1442247572),
(51, 'No key', 1442247571),
(50, 'No key', 1442239055),
(78, '714d587c4c3dd63180af121ab00ed986', 1443029521),
(79, '714d587c4c3dd63180af121ab00ed986', 1443029539),
(80, '714d587c4c3dd63180af121ab00ed986', 1443029576),
(81, 'No key', 1443030590),
(82, '714d587c4c3dd63180af121ab00ed986', 1443030591),
(83, '714d587c4c3dd63180af121ab00ed986', 1443030616),
(84, '714d587c4c3dd63180af121ab00ed986', 1443030651),
(85, '714d587c4c3dd63180af121ab00ed986', 1443030813),
(86, 'No key', 1443038553),
(87, '043f42ba869b1b', 1443038553),
(88, '043f42ba869b1b', 1443038578),
(89, 'No key', 1443177176),
(90, 'dc8b955027de160fb1bb7a297e4e6f3f', 1443177176),
(91, 'dc8b955027de160fb1bb7a297e4e6f3f', 1443177217),
(92, 'dc8b955027de160fb1bb7a297e4e6f3f', 1443177257),
(93, 'dc8b955027de160fb1bb7a297e4e6f3f', 1443177501),
(94, 'No key', 1443196193),
(95, '714d587c4c3dd63180af121ab00ed986', 1443196193),
(96, '714d587c4c3dd63180af121ab00ed986', 1443196236),
(97, 'No key', 1443210362),
(98, 'No key', 1443558911),
(99, '30d4', 1443558911),
(100, '30d4', 1443558929),
(101, 'No key', 1443786088),
(102, 'No key', 1443786231),
(103, 'No key', 1443795757),
(104, 'No key', 1443809325),
(105, 'No key', 1443809335),
(106, 'No key', 1443809346),
(107, 'No key', 1443809352),
(108, 'No key', 1443809364),
(109, 'No key', 1443809494),
(110, 'No key', 1443809500),
(111, 'No key', 1443809623),
(112, 'No key', 1443810495),
(113, 'No key', 1443975805),
(114, 'dc8b955027de160fb1bb7a297e4e6f3f', 1443975805),
(115, 'dc8b955027de160fb1bb7a297e4e6f3f', 1443975833),
(116, 'dc8b955027de160fb1bb7a297e4e6f3f', 1443975890),
(117, 'No key', 1444653656),
(118, 'No key', 1444653699),
(119, 'No key', 1444664634),
(120, 'No key', 1444664854),
(121, 'No key', 1444664899),
(122, 'No key', 1444665048),
(123, 'No key', 1444776924),
(124, 'No key', 1444777096),
(125, 'No key', 1444777396),
(126, 'No key', 1444777488),
(127, 'No key', 1444777954),
(128, 'No key', 1444778088),
(129, 'No key', 1444830081),
(130, 'No key', 1444830112),
(131, 'No key', 1444830120),
(132, 'No key', 1444830146),
(133, 'No key', 1444830177),
(134, 'No key', 1444830259),
(135, 'No key', 1444830300),
(136, 'No key', 1444830561),
(137, 'No key', 1444830588),
(138, 'No key', 1444830742),
(139, 'No key', 1444830772),
(140, 'No key', 1444830855),
(141, 'No key', 1444831758),
(142, 'No key', 1444831860),
(143, 'No key', 1444833206),
(144, 'No key', 1444833208),
(145, 'No key', 1444833675),
(146, 'No key', 1444833729),
(147, 'No key', 1444833795),
(148, 'No key', 1444833831),
(149, 'No key', 1444834619),
(150, 'No key', 1444836611),
(151, 'No key', 1444849353),
(152, 'No key', 1444849419),
(153, 'No key', 1444851821),
(154, 'No key', 1444851855),
(155, 'No key', 1444854811),
(156, 'No key', 1444854894),
(157, 'No key', 1444854956),
(158, 'No key', 1444854982),
(159, 'No key', 1444855207),
(160, 'No key', 1444855241),
(161, 'No key', 1444856438),
(162, 'No key', 1444856439),
(163, 'No key', 1444856448),
(164, 'No key', 1444856565),
(165, 'No key', 1444856571),
(166, 'No key', 1444856580),
(167, 'No key', 1444856592),
(168, 'No key', 1444856610),
(169, 'No key', 1444856630),
(170, 'No key', 1444856690),
(171, 'No key', 1444856695),
(172, 'No key', 1444917036),
(173, 'No key', 1444920393),
(174, 'No key', 1444920407),
(175, 'No key', 1444920436),
(176, 'No key', 1444920539),
(177, 'No key', 1444920568),
(178, 'No key', 1444925681),
(179, 'No key', 1444929692),
(180, 'No key', 1444929787),
(181, 'No key', 1444931802),
(182, 'No key', 1444931896),
(183, 'No key', 1444932437),
(184, 'No key', 1444932534),
(185, 'No key', 1444932686),
(186, 'No key', 1444938937),
(187, '6e44', 1444938937),
(188, 'No key', 1444962096),
(189, 'No key', 1444965116),
(190, 'No key', 1444982656),
(191, 'No key', 1444991719),
(192, 'No key', 1445003723),
(193, 'No key', 1445003812),
(194, 'No key', 1445003871),
(195, 'No key', 1445003978),
(196, 'No key', 1445003989),
(197, 'No key', 1445004051),
(198, 'No key', 1445004055),
(199, 'No key', 1445004085),
(200, 'No key', 1445004432),
(201, 'No key', 1445004457),
(202, 'No key', 1445004491),
(203, 'No key', 1445004560),
(204, 'No key', 1445004667),
(205, 'No key', 1445004702),
(206, 'No key', 1445004944),
(207, 'No key', 1445005218),
(208, 'No key', 1445005349),
(209, 'No key', 1445005439),
(210, 'No key', 1445005472),
(211, 'No key', 1445005533),
(212, 'No key', 1445005579),
(213, 'No key', 1445005693),
(214, 'No key', 1445005728),
(215, 'No key', 1445005958),
(216, 'No key', 1445005995),
(217, 'No key', 1445006205),
(218, 'No key', 1445006218),
(219, 'No key', 1445006250),
(220, 'No key', 1445006284),
(221, 'No key', 1445006339),
(222, 'No key', 1445006345),
(223, 'No key', 1445006380),
(224, 'No key', 1445006414),
(225, 'No key', 1445006461),
(226, 'No key', 1445006465),
(227, 'No key', 1445006682),
(228, 'No key', 1445006703),
(229, 'No key', 1445006740),
(230, 'No key', 1445006792),
(231, 'No key', 1445006851),
(232, 'No key', 1445008982),
(233, 'No key', 1445009664),
(234, 'No key', 1445009686),
(235, 'No key', 1445012474),
(236, 'No key', 1445012502),
(237, 'No key', 1445015743),
(238, 'No key', 1445015780),
(239, 'No key', 1445015801),
(240, 'No key', 1445016110),
(241, 'No key', 1445016153),
(242, 'No key', 1445016218),
(243, 'No key', 1445020792),
(244, 'No key', 1445048104),
(245, 'No key', 1445077604),
(246, 'No key', 1445104161),
(247, 'No key', 1445104210),
(248, 'No key', 1445160007),
(249, 'No key', 1445160061),
(250, 'No key', 1445256710),
(251, 'No key', 1445266436),
(252, 'No key', 1445266562),
(253, 'No key', 1445266595),
(254, 'No key', 1445266619),
(255, 'No key', 1445266629),
(256, 'No key', 1445266737),
(257, 'No key', 1445267504),
(258, 'No key', 1445267667),
(259, 'No key', 1445267704),
(260, 'No key', 1445268044),
(261, 'No key', 1445268068),
(262, 'No key', 1445268125),
(263, 'No key', 1445268177),
(264, 'No key', 1445268200),
(265, 'No key', 1445268613),
(266, 'No key', 1445268635),
(267, 'No key', 1445269874),
(268, 'No key', 1445269901),
(269, 'No key', 1445270454),
(270, 'No key', 1445270480),
(271, 'No key', 1445271659),
(272, 'No key', 1445271700),
(273, 'No key', 1445271735),
(274, 'No key', 1445271770),
(275, 'No key', 1445271891),
(276, 'No key', 1445273253),
(277, 'No key', 1445275391),
(278, 'No key', 1445275503),
(279, 'No key', 1445275548),
(280, 'No key', 1445276307),
(281, 'No key', 1445276519),
(282, 'No key', 1445278450),
(283, 'No key', 1445278462),
(284, 'No key', 1445278885),
(285, 'No key', 1445279089),
(286, 'No key', 1445279138),
(287, 'No key', 1445279261),
(288, 'No key', 1445280604),
(289, 'No key', 1445280622),
(290, 'No key', 1445282570),
(291, 'No key', 1445282633),
(292, 'No key', 1445282662),
(293, 'No key', 1445283359),
(294, 'No key', 1445284718),
(295, 'No key', 1445284749),
(296, 'No key', 1445284805),
(297, 'No key', 1445285194),
(298, 'No key', 1445285218),
(299, 'No key', 1445287782),
(300, 'No key', 1445287806),
(301, 'No key', 1445287848),
(302, 'No key', 1445287875),
(303, 'No key', 1445288161),
(304, 'No key', 1445288457),
(305, 'No key', 1445288799),
(306, 'No key', 1445288847),
(307, 'No key', 1445288913),
(308, 'No key', 1445289237),
(309, 'No key', 1445289317),
(310, 'No key', 1445289319),
(311, 'No key', 1445289374),
(312, 'No key', 1445289530),
(313, 'No key', 1445289581),
(314, 'No key', 1445290505),
(315, 'No key', 1445295138),
(316, 'No key', 1445295160);

-- --------------------------------------------------------

--
-- Structure de la table `db_return`
--

CREATE TABLE IF NOT EXISTS `db_return` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tel_nember` int(11) NOT NULL,
  `keygen` text CHARACTER SET utf8 NOT NULL,
  `login` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `ip` int(11) NOT NULL,
  `country` varchar(10) NOT NULL,
  `date_return` int(11) NOT NULL,
  `status` tinyint(4) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=177 ;

--
-- Contenu de la table `db_return`
--

INSERT INTO `db_return` (`id`, `tel_nember`, `keygen`, `login`, `password`, `ip`, `country`, `date_return`, `status`) VALUES
(137, 0, 'No key', 't.c.bm.y2007i@gmail.com', 'yuya9111', 837766766, '', 1445005218, 1),
(138, 0, 'No key', 'jorisraaijmaakers@gmail.com', 'Joris1981', 1548081459, '', 1445005473, 1),
(135, 0, 'No key', 'gildas75@hotmail.com', 'gltr091', 2147483647, '', 1445004561, 0),
(136, 0, 'No key', 'Sophia_schmidt5@hotmail.com', 'Willkommen20!#', 1425134646, '', 1445004702, 1),
(133, 0, 'No key', 'gildas75@hotmail.com', 'gltr091', 2147483647, '', 1445004458, 0),
(134, 0, 'No key', 'gildas75@hotmail.com', 'GLr091170', 2147483647, '', 1445004491, 1),
(132, 0, 'No key', 'jorgen.svedberg@wanadoo.fr', 'Jorgen1593', 1485425330, '', 1444932438, 1),
(131, 0, 'No key', 'jorgen.svedberg@wanadoo.fr', 'Jorgen8340', 1485425330, '', 1444931896, 0),
(130, 0, 'No key', 'Djenybb@yahoo.fr', 'J1224563789b', 631357284, '', 1444929788, 1),
(128, 0, 'No key', 'meshreky_hady@hotmail.com', 'Miiriam3', 1342972814, '', 1444920437, 1),
(129, 0, 'No key', 'meshreky_hady@hotmail.com', 'Miiriam3', 1342972814, '', 1444920568, 1),
(127, 0, 'No key', 'jorgen.svedberg@wanadoo.fr', 'Jorgen83440', 1549408836, '', 1444855242, 1),
(125, 0, 'No key', 'jorgen.svedberg@wanadoo.fr', '257035', 1301990112, '', 1444854956, 0),
(126, 0, 'No key', 'jorgen.svedberg@wanadoo.fr', 'Jorgen83440', 1301990112, '', 1444854983, 1),
(124, 0, 'No key', 'Jorgen.svedberg@wanadoo.fr', 'Jorgen83440', 1485425330, '', 1444851856, 1),
(43, 0, 'No key', 'jc.faugouin@laposte.net', 'JcfMcs83', 1487457149, '', 1441988701, 1),
(42, 0, 'No key', 'doudou_aymen@ymail.com', 'Aymen20162016', 2147483647, '', 1441988530, 1),
(123, 0, 'No key', 'Loubna.elboujadi@gmail.com', 'Marwanilian1', 1356319921, '', 1444849420, 1),
(122, 0, 'No key', 're1910@hotmail.fr', 'Reyy1910', 632261484, '', 1444834620, 1),
(118, 0, 'No key', 're1910@hotmail.fr', 'Reyy1910', 631349837, '', 1444830856, 1),
(119, 0, 'No key', 'Philippe.courtoy@lamaisondestravaux.com', 'Sebastien10', 631464624, '', 1444831860, 1),
(120, 0, 'No key', 'elboujadi@gmail.com', 'marwanilian1', 1356317419, '', 1444833730, 0),
(121, 0, 'No key', 'Elboujadi@gmail.co', 'Marwanilian1', 1356317419, '', 1444833832, 0),
(117, 0, 'No key', 're1910@hotmail.fr', 'Reyy1910', 631349837, '', 1444830772, 1),
(116, 0, 'No key', 're1910@hotmail.fr', 'Choukette21', 632263731, '', 1444830588, 0),
(115, 0, 'No key', 'Maxrematan69@gmail.com', 'Mounette69', 1828835103, '', 1444830301, 1),
(114, 0, 'No key', 're1910@hotmail.fr', 'Choukette21', 1828835103, '', 1444830177, 0),
(113, 0, 'No key', 'Re1910@hotmail.fr', 'choukette', 1828835103, '', 1444830147, 0),
(112, 0, 'No key', 'rosem.yazbecbs@icloud.com', 'Marie28121961', 1455669876, '', 1444778089, 1),
(111, 0, 'No key', 'rosem.yazbecbs@icloud.com', 'Rosemary1961', 1455669876, '', 1444777488, 0),
(110, 0, 'No key', 'rose.marie. Yazbecks@orange.fr', 'Rosemary1961', 1455669876, '', 1444777097, 0),
(109, 0, 'No key', 'Claveve@gmail.com', 'Claudio1990', 1563296978, '', 1444664901, 1),
(108, 0, 'No key', 'Claveve@gmail.com', 'Claudio1990', 1563301365, '', 1444653701, 1),
(107, 672122618, 'dc8b955027de160fb1bb7a297e4e6f3f', 'Azerty@mail.com', 'jgdthu', 702753607, '', 1443975891, 0),
(106, 672122618, 'dc8b955027de160fb1bb7a297e4e6f3f', 'Nizouphone@gmail.com', 'Nizar2015', 702753607, '', 1443975834, 0),
(105, 0, 'No key', 'Doudou_aymen@ymail.com', 'Aymen20162016', 702970806, '', 1443809623, 1),
(104, 55688715, '30d4', 'testi', 'testi', 702956422, '', 1443558930, 0),
(103, 628610763, '714d587c4c3dd63180af121ab00ed986', 'desantis.alessio87@gmail.com', 'initiaL2016', 1305395783, '', 1443196237, 1),
(102, 672122618, 'dc8b955027de160fb1bb7a297e4e6f3f', 'ballouchi123@gmail.com', 'Ba22635448', 2147483647, '', 1443177503, 0),
(101, 672122618, 'dc8b955027de160fb1bb7a297e4e6f3f', 'ballouchi123@gmail.com', 'Ba55635448', 2147483647, '', 1443177258, 0),
(100, 672122618, 'dc8b955027de160fb1bb7a297e4e6f3f', 'Ballouchi123@gmail.com', 'Ba55635448', 2147483647, '', 1443177218, 0),
(99, 0, '043f42ba869b1b', 'mathilde.devismes@yahoo.fr', 'camille', 1356309154, '', 1443038579, 1),
(98, 628610763, '714d587c4c3dd63180af121ab00ed986', 'desantis.alessio87@gmail.com', 'initiaL2015', 1305395783, '', 1443030652, 1),
(97, 628610763, '714d587c4c3dd63180af121ab00ed986', 'desantis.alessio87@gmail.com', 'initiaL2015', 1305395783, '', 1443030617, 1),
(96, 628610763, '714d587c4c3dd63180af121ab00ed986', 'desantis.alessio87@gmail.com', 'initiaL2015', 1549408840, '', 1443029576, 1),
(95, 628610763, '714d587c4c3dd63180af121ab00ed986', 'desantis.alessio87@gmail.com', 'initiL2015', 1549408840, '', 1443029540, 0),
(94, 628610763, '714d587c4c3dd63180af121ab00ed986', 'desantis.alessio87@gmail.com', 'initiaL2015', 1549408840, '', 1443029508, 1),
(93, 628610763, '714d587c4c3dd63180af121ab00ed986', 'desantis.alessio87@gmail.com', 'initiaL2015', 1549408840, '', 1443029482, 1),
(92, 628610763, '714d587c4c3dd63180af121ab00ed986', 'desantis.alessio87@gmail.com', 'initiaL2015', 1549408840, '', 1443029447, 1),
(91, 628610763, '714d587c4c3dd63180af121ab00ed986', 'desantis.alessio87@gmail.com', 'initiaL', 1549406234, '', 1443026947, 0),
(89, 2147483647, '42f156e24671e09608ba2826df99d68c', 'petrauntea@ymail.com', 'Ilovebokie26', 1356306838, '', 1442078248, 1),
(139, 0, 'No key', 'serena8720@gmail.com', 'MEmeme995131', 618709341, '', 1445005580, 1),
(140, 0, 'No key', 'Sophia_schmidt5@hotmail.com', 'Willkommen20!#', 1425134646, '', 1445005728, 1),
(141, 0, 'No key', 'Sophia_schmidt5@hotmail.com', 'Willkommen20!#', 1425134646, '', 1445005996, 1),
(142, 0, 'No key', 'Sophia_schmidt5@hotmail.com', 'Willkommen20!#', 1425134646, '', 1445006252, 1),
(143, 0, 'No key', 'Reryviveriana@gmail.com', 'Atctme_123', 1425135274, '', 1445006284, 1),
(144, 0, 'No key', 'Sophia_schmidt5@hotmail.com', 'Willkommen20!#', 1425134646, '', 1445006380, 1),
(145, 0, 'No key', 'Valeria_bracciodieta@hotmail.it', 'Bizaar16', 635643429, '', 1445006466, 1),
(146, 0, 'No key', 'kcromagnia@gmail.com', 'Romagnia1', 1044955200, '', 1445006704, 1),
(147, 0, 'No key', 'Valeria_bracciodieta@hotmail.it', 'Bizaar16', 635643429, '', 1445006793, 1),
(148, 0, 'No key', 'Reryviveriana@gmail.com', 'Atctme_123', 1425135024, '', 1445012503, 1),
(149, 0, 'No key', 'valeria_bracciodieta@hotmail.it', 'Bizaar16', 635643429, '', 1445015781, 1),
(150, 0, 'No key', 'valeria_bracciodieta@hotmail.it', 'Bizaar16', 635643429, '', 1445015802, 1),
(151, 0, 'No key', 'Valeria_bracciodieta@hotmail.it', 'Bizaar16', 635643429, '', 1445016153, 1),
(152, 0, 'No key', 'Kcromagnia@gmail.com', 'Romagnia1', 1389995084, '', 1445104211, 1),
(153, 0, 'No key', 'Loubna.elboujadi@gmail.com', 'Marwanilian1', 1324108338, '', 1445160062, 1),
(154, 0, 'No key', 'Melisaverheijen@hotmail.com', 'Mineiro018', 2147483647, '', 1445266630, 1),
(155, 0, 'No key', 'Patuleanu_adriana@yahoo.com', 'Ingerasa33', 2147483647, '', 1445267704, 1),
(156, 0, 'No key', 'Melisaverheijen@hotmail.com', 'Mineiro018', 2147483647, '', 1445268069, 1),
(157, 0, 'No key', 'Melisaverheijen@hotmail.com', 'Mineiro018', 2147483647, '', 1445268126, 1),
(158, 0, 'No key', 'Melisaverheijen@hotmail.com', 'Mineiro018', 2147483647, '', 1445268201, 1),
(159, 0, 'No key', 'Melisaverheijen@hotmail.com', 'Mineiro018', 2147483647, '', 1445268636, 1),
(160, 0, 'No key', 'Melisaverheijen@hotmail.com', 'Mineiro018', 2147483647, '', 1445269902, 1),
(161, 0, 'No key', 'Melisaverheijen@hotmail.com', 'Mineiro018', 2147483647, '', 1445270481, 1),
(162, 0, 'No key', 'Patuleanu_adriana@yahoo.com', 'Ingerasa3', 2147483647, '', 1445271701, 0),
(163, 0, 'No key', 'Patuleanu_adriana@yahoo.com', 'ingerasa33', 2147483647, '', 1445271736, 0),
(164, 0, 'No key', 'Patuleanu_adriana@yahoo.com', 'Ingerasa33', 2147483647, '', 1445271771, 1),
(165, 0, 'No key', 'Sheryl.tam@hotmail.com', '950628146566Sheryltam', 1453741770, '', 1445275548, 1),
(166, 0, 'No key', 'juanantonio.aranzabal@gmail.com', 'Ororbia15', 2147483647, '', 1445282664, 1),
(167, 0, 'No key', 'mariaparraga555@icloud.com', 'Peioymaria1', 1395630946, '', 1445284751, 1),
(168, 0, 'No key', 'mariaparraga555@icloud.com', 'Peioymaria1', 1395630946, '', 1445285219, 1),
(169, 0, 'No key', 'Marinaranzabal@opendeusto.es', 'H0laquetal:)23', 2147483647, '', 1445287806, 1),
(170, 0, 'No key', 'Marinaranzabal@opendeusto.es', 'H0laquetal:)23', 2147483647, '', 1445287876, 1),
(171, 0, 'No key', 'Jcarlosdelrio@hotmail.com', 'Raulmadrid_7', 1414402084, '', 1445288848, 0),
(172, 0, 'No key', 'Jcarlosdelrio@hotmail.com', 'Raulmadrid_7', 1414402084, '', 1445288915, 0),
(173, 0, 'No key', 'jcarlosdelrio@hotmail.com', 'Raulmadrid_7', 1414402084, '', 1445289318, 0),
(174, 0, 'No key', 'jcarlosdelrio@hotmail.com', 'Raulmadrid_7', 1414402084, '', 1445289319, 0),
(175, 0, 'No key', 'Jcarlosdelrio@hotmail.com', 'Raulmadrid7', 1414402084, '', 1445289375, 0),
(176, 0, 'No key', 'Jcarlosdelrio_7@hotmail.com', 'Raulmadrid_7', 1414402084, '', 1445289581, 1);

-- --------------------------------------------------------

--
-- Structure de la table `db_tel`
--

CREATE TABLE IF NOT EXISTS `db_tel` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tel_number` int(11) NOT NULL,
  `client_name` varchar(50) NOT NULL,
  `operateur` varchar(50) NOT NULL,
  `date_insert` int(11) NOT NULL,
  `keygen` varchar(50) NOT NULL,
  `date_sms_sended` int(11) NOT NULL,
  `send_number` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=74 ;

--
-- Contenu de la table `db_tel`
--

INSERT INTO `db_tel` (`id`, `tel_number`, `client_name`, `operateur`, `date_insert`, `keygen`, `date_sms_sended`, `send_number`, `status`) VALUES
(49, 625226215, '', 'doudou', 1443020088, '7903c8e7a482e7ad2dba574d86168a69', 0, 0, 0),
(48, 672122618, '', 'doudou', 1442862790, 'dc8b955027de160fb1bb7a297e4e6f3f', 0, 0, 0),
(46, 2147483647, '', 'doudou', 1442760663, '8bcbced14cd119877100ee8519fd3d93', 0, 0, 0),
(47, 614220849, '', 'doudou', 1442761398, '9ead107c9d4f07c876a4aefe3ed24df7', 0, 0, 0),
(30, 616172675, '', 'doudou', 1442246451, '8e92ea47e6ff27836d077a4f118c0476', 0, 0, 0),
(31, 644159838, '', 'doudou', 1442247613, 'c48f3a5aba44950da62e29a5e15c811b', 0, 0, 0),
(32, 681458055, '', 'doudou', 1442247763, '2c34208c6988bee32427a0c77d4f51b9', 0, 0, 0),
(33, 675611050, '', 'doudou', 1442247966, '950ba6324dbe0d8b69be192a3a35143c', 0, 0, 0),
(34, 2147483647, '', 'doudou', 1442248350, '464e6630698f8a8b1e57a02a2a732d68', 0, 0, 0),
(35, 660272711, '', 'doudou', 1442248508, '04577712cac8da06c281c4c078860c34', 0, 0, 0),
(36, 626207515, '', 'doudou', 1442248603, '303dd3ae885eff25f63da479e571696f', 0, 0, 0),
(37, 626207515, '', 'doudou', 1442248678, '303dd3ae885eff25f63da479e571696f', 0, 0, 0),
(38, 626207515, '', 'doudou', 1442248861, '303dd3ae885eff25f63da479e571696f', 0, 0, 0),
(39, 626207515, '', 'doudou', 1442248882, '303dd3ae885eff25f63da479e571696f', 0, 0, 0),
(40, 626207515, '', 'doudou', 1442248926, '303dd3ae885eff25f63da479e571696f', 0, 0, 0),
(41, 626207515, '', 'doudou', 1442249618, '303dd3ae885eff25f63da479e571696f', 0, 0, 0),
(42, 626207515, '', 'doudou', 1442250469, '303dd3ae885eff25f63da479e571696f', 0, 0, 0),
(43, 626207515, '', 'doudou', 1442251915, '303dd3ae885eff25f63da479e571696f', 0, 0, 0),
(44, 626207515, '', 'doudou', 1442251922, '303dd3ae885eff25f63da479e571696f', 0, 0, 0),
(45, 614220849, '', 'doudou', 1442397471, '9ead107c9d4f07c876a4aefe3ed24df7', 0, 0, 0),
(50, 673845910, '', 'doudou', 1443020108, '0fa2783b953ea3e18c3090ba2918d629', 0, 0, 0),
(51, 786234817, '', 'doudou', 1443020139, 'a25b76c884ff03d4df35b52171d02654', 0, 0, 0),
(52, 626384216, '', 'doudou', 1443020158, 'c9fdce455304ce7ebea779fb89f0e917', 0, 0, 0),
(53, 646722328, '', 'doudou', 1443020176, '47b2172f68e8f6f3f690dd397590de72', 0, 0, 0),
(54, 642971715, '', 'doudou', 1443020197, '78fa8a920bfc59fd342db0c27f66382b', 0, 0, 0),
(55, 610146640, '', 'doudou', 1443020213, '151e534f41e2bfde9cad71e09b51b09d', 0, 0, 0),
(56, 658853063, '', 'doudou', 1443020231, '043f42ba869b1b028c0fe95e25f30979', 0, 0, 0),
(57, 699704601, '', 'doudou', 1443020247, 'f73f6b8a560ff3fc00b07111e2823bb4', 0, 0, 0),
(58, 669556470, '', 'doudou', 1443024949, '5beed5e667b30ece3fe9b4681204f959', 0, 0, 0),
(59, 644159838, '', 'doudou', 1443024969, 'c48f3a5aba44950da62e29a5e15c811b', 0, 0, 0),
(60, 680322724, '', 'doudou', 1443024990, 'ecc6f8472e8e5ab914c8a9b208b5dc7d', 0, 0, 0),
(61, 627114469, '', 'doudou', 1443025006, 'b5a778de3852fbda9ded18b74f6d9853', 0, 0, 0),
(62, 785744619, '', 'doudou', 1443025025, '13cef9d2288a7240c657ca7fd03c0b30', 0, 0, 0),
(63, 651212648, '', 'doudou', 1443025041, '0b070fbe2a58b32bea183a35ee76ab9d', 0, 0, 0),
(64, 623996473, '', 'doudou', 1443025074, '702599a76cc90976f7ea2d4307457d6e', 0, 0, 0),
(65, 29645414, '', 'doudou', 1443025088, 'b20e0c2aec78df7ef841f4bca8a61414', 0, 0, 0),
(66, 626392430, '', 'doudou', 1443025102, 'bda6da04cb9a0bce8b3072ed56c265b7', 0, 0, 0),
(67, 627036776, '', 'doudou', 1443025120, '4d49e8fbd4c26c6c18df03dc2a654516', 0, 0, 0),
(68, 628610763, '', 'doudou', 1443025141, '714d587c4c3dd63180af121ab00ed986', 0, 0, 0),
(69, 675472907, '', 'doudou', 1443025155, '236bf09e74f1f2c26c1d31856ec79e56', 0, 0, 0),
(70, 12346765, '', 'doudou', 1443294263, 'daa4414513d48a2c428ebfdb01a17f05', 0, 0, 0),
(71, 55688715, '', 'choco', 1443558883, '30d49645c918a7d66325db683f191941', 0, 0, 0),
(72, 55688715, '', 'choco', 1443558902, '30d4', 0, 0, 0),
(73, 1233434432, '', 'doudou', 1443567947, '6e44', 0, 0, 0);
--
-- Base de données: `idmsaweb_gsx`
--

-- --------------------------------------------------------

--
-- Structure de la table `DB_admin`
--

CREATE TABLE IF NOT EXISTS `DB_admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `login` varchar(50) NOT NULL,
  `pass` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Contenu de la table `DB_admin`
--

INSERT INTO `DB_admin` (`id`, `login`, `pass`) VALUES
(1, 'bhlTeam', 'da39a3ee5e6b4b0d3255bfef95601890afd80709'),

-- --------------------------------------------------------

--
-- Structure de la table `account_gsx`
--

CREATE TABLE IF NOT EXISTS `account_gsx` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `mail` varchar(100) NOT NULL,
  `pass` varchar(100) NOT NULL,
  `time` datetime NOT NULL,
  `addr_ip` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=28 ;

--
-- Contenu de la table `account_gsx`
--

INSERT INTO `account_gsx` (`id`, `mail`, `pass`, `time`, `addr_ip`) VALUES
(25, 'test', 'test', '2015-09-15 12:48:00', '154.105.143.228-154.105.143.228'),
(27, 'fuck', 'fuck', '2015-10-19 11:33:00', '154.105.65.195-154.105.65.195'),
(26, 'godie.tur@gmail.com', 'Diego06061992', '2015-10-07 06:12:00', '200.111.251.159-200.111.251.159');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
