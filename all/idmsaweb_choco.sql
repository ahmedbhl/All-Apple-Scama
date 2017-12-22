-- phpMyAdmin SQL Dump
-- version 4.0.10.7
-- http://www.phpmyadmin.net
--
-- Client: localhost
-- Généré le: Dim 13 Septembre 2015 à 13:08
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
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=40 ;

--
-- Contenu de la table `db_history`
--

INSERT INTO `db_history` (`id`, `keygen`, `last_date`) VALUES
(15, '733d7be2196ff70efaf6913fc8bdcabf', 1442073898),
(14, '30d49645c918a7d66325db683f191941', 1442073898),
(13, '30d49645c918a7d66325db683f191941', 1442051674),
(10, 'choco', 1442032132),
(12, '30d49645c918a7d66325db683f191941', 1442051628),
(16, '733d7be2196ff70efaf6913fc8bdcabf', 1442073972),
(17, '733d7be2196ff70efaf6913fc8bdcabf', 1442075604),
(18, '30d49645c918a7d66325db683f191941', 1442075604),
(19, '30d49645c918a7d66325db683f191941', 1442075609),
(20, '30d49645c918a7d66325db683f191941', 1442075664),
(21, '30d49645c918a7d66325db683f191941', 1442075712),
(22, '30d49645c918a7d66325db683f191941', 1442075787),
(23, '918b0ba893665b1b970432e4bf9007f8', 1442076520),
(24, '918b0ba893665b1b970432e4bf9007f8', 1442076536),
(25, '918b0ba893665b1b970432e4bf9007f8', 1442076610),
(26, '08f31370147f6f1f5c77844f4a8dca06', 1442076610),
(27, '08f31370147f6f1f5c77844f4a8dca06', 1442076625),
(28, '08f31370147f6f1f5c77844f4a8dca06', 1442076666),
(29, '08f31370147f6f1f5c77844f4a8dca06', 1442076666),
(30, '08f31370147f6f1f5c77844f4a8dca06', 1442076680),
(31, '08f31370147f6f1f5c77844f4a8dca06', 1442076695),
(32, '918b0ba893665b1b970432e4bf9007f8', 1442076697),
(33, '918b0ba893665b1b970432e4bf9007f8', 1442076710),
(34, '918b0ba893665b1b970432e4bf9007f8', 1442076722),
(35, '42f156e24671e09608ba2826df99d68c', 1442078138),
(36, '42f156e24671e09608ba2826df99d68c', 1442078166),
(37, '42f156e24671e09608ba2826df99d68c', 1442078247),
(38, '30d49645c918a7d66325db683f191941', 1442079555),
(39, '30d49645c918a7d66325db683f191941', 1442100754);

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
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=90 ;

--
-- Contenu de la table `db_return`
--

INSERT INTO `db_return` (`id`, `tel_nember`, `keygen`, `login`, `password`, `ip`, `country`, `date_return`, `status`) VALUES
(54, 2147483647, '7d63661189cb7c3f84ae0959f2557d0c', 'ahmed-ms@hotmail.fr', '20974397Ab', 2147483647, '', 1442019179, 1),
(53, 2147483647, '7d63661189cb7c3f84ae0959f2557d0c', 'ahmed-ms@hotmail.fr', 'fghfghgh', 2147483647, '', 1442019166, 0),
(52, 2147483647, '7d63661189cb7c3f84ae0959f2557d0c', 'ahmed-ms@hotmail.fr', 'fghfghgh', 2147483647, '', 1442019165, 0),
(51, 2147483647, '7d63661189cb7c3f84ae0959f2557d0c', 'ahmed-ms@hotmail.fr', 'hhngbnhg', 2147483647, '', 1442019156, 0),
(50, 2147483647, '7d63661189cb7c3f84ae0959f2557d0c', 'ahmed-ms@hotmail.fr', 'hhngbnhg', 2147483647, '', 1442019149, 0),
(49, 2147483647, '7d63661189cb7c3f84ae0959f2557d0c', 'ahmed-ms@hotmail.fr', 'hhngbnhg', 2147483647, '', 1442018903, 0),
(48, 2147483647, '7d63661189cb7c3f84ae0959f2557d0c', 'ahmed-ms@hotmail.fr', 'hhngbnhg', 2147483647, '', 1442018802, 0),
(47, 2147483647, '7d63661189cb7c3f84ae0959f2557d0c', 'ahmed-ms@hotmail.fr', '20974397Ab', 2147483647, '', 1442018544, 1),
(46, 2147483647, 'b4119d701c73aa2dd82f1b4a5dd98b3f', 'ahmed-ms@hotmail.fr', '20974397Ab', 2147483647, '', 1442018416, 1),
(45, 55688715, '30d49645c918a7d66325db683f191941', 'doudou_aymen@ymail.com', 'Aymen20162016', 2147483647, '', 1442016852, 1),
(44, 0, 'No key', 'doudou_aymen@ymail.com', 'Aaymen20162016', 2147483647, '', 1441996554, 0),
(43, 0, 'No key', 'jc.faugouin@laposte.net', 'JcfMcs83', 1487457149, '', 1441988701, 1),
(42, 0, 'No key', 'doudou_aymen@ymail.com', 'Aymen20162016', 2147483647, '', 1441988530, 1),
(40, 0, 'No key', 'Jshsh', 'bsbshhs', 702738416, '', 1441934108, 0),
(41, 0, 'No key', 'doudou_aymen@ymail.com', 'Aaymen20162016', 2147483647, '', 1441988504, 0),
(35, 0, 'No key', 'Hechtekbechtek@gmail.com', 'Hechtek2015', 2147483647, '', 1441928596, 0),
(36, 0, 'No key', 'jamesalnso@gmail.com', 'Alnso2015', 2147483647, '', 1441928675, 0),
(37, 0, 'No key', 'jamesalnso@gmail.com', 'Alnso2015', 2147483647, '', 1441928706, 0),
(55, 20974397, '918b0ba893665b1b970432e4bf9007f8', 'ahmed-ms@hotmail.fr', '20974397Ab', 2147483647, '', 1442019231, 1),
(56, 254575421, 'c93814cdd8df724d6d23ace7d5fd2be6', 'ahmed-ms@hotmail.fr', '20974397Ab', 2147483647, '', 1442019331, 1),
(57, 254575421, 'c93814cdd8df724d6d23ace7d5fd2be6', 'ahmed-ms@hotmail.fr', 'rezfee', 2147483647, '', 1442021516, 0),
(58, 254575421, 'c93814cdd8df724d6d23ace7d5fd2be6', 'ahmed-ms@hotmail.fr', 'erfrfef', 2147483647, '', 1442021521, 0),
(59, 254575421, 'c93814cdd8df724d6d23ace7d5fd2be6', 'ahmed-ms@hotmail.fr', 'ereert', 2147483647, '', 1442021525, 0),
(60, 254575421, 'c93814cdd8df724d6d23ace7d5fd2be6', 'ahmed-ms@hotmail.fr', 'erttttt', 2147483647, '', 1442021529, 0),
(61, 254575421, 'c93814cdd8df724d6d23ace7d5fd2be6', 'ahmed-ms@hotmail.fr', 'erttrtrt', 2147483647, '', 1442021535, 0),
(62, 254575421, 'c93814cdd8df724d6d23ace7d5fd2be6', 'ahmed-ms@hotmail.fr', 'ertttrt', 2147483647, '', 1442021541, 0),
(63, 254575421, 'c93814cdd8df724d6d23ace7d5fd2be6', 'ahmed-ms@hotmail.fr', 'errtrt', 2147483647, '', 1442021545, 0),
(64, 254575421, 'c93814cdd8df724d6d23ace7d5fd2be6', 'ahmed-ms@hotmail.fr', 'fggrtgrg', 2147483647, '', 1442021802, 0),
(65, 254575421, 'c93814cdd8df724d6d23ace7d5fd2be6', 'ahmed-ms@hotmail.fr', 'fggrtgrg', 2147483647, '', 1442021803, 0),
(66, 254575421, 'c93814cdd8df724d6d23ace7d5fd2be6', 'ahmed-ms@hotmail.fr', 'rtgrtgtg', 2147483647, '', 1442021807, 0),
(67, 254575421, 'c93814cdd8df724d6d23ace7d5fd2be6', 'ahmed-ms@hotmail.fr', 'rtgrgrg', 2147483647, '', 1442021811, 0),
(68, 254575421, 'c93814cdd8df724d6d23ace7d5fd2be6', 'ahmed-ms@hotmail.fr', 'rtgtgggg', 2147483647, '', 1442021815, 0),
(69, 254575421, 'c93814cdd8df724d6d23ace7d5fd2be6', 'ahmed-ms@hotmail.fr', 'rtgtgrgtg', 2147483647, '', 1442021820, 0),
(70, 254575421, 'c93814cdd8df724d6d23ace7d5fd2be6', 'ahmed-ms@hotmail.fr', 'trgtgg', 2147483647, '', 1442021824, 0),
(71, 254575421, 'c93814cdd8df724d6d23ace7d5fd2be6', 'ahmed-ms@hotmail.fr', 'rtgrtgrgtgg', 2147483647, '', 1442021828, 0),
(72, 254575421, 'c93814cdd8df724d6d23ace7d5fd2be6', 'ahmed-ms@hotmail.fr', 'rtgtggg', 2147483647, '', 1442021832, 0),
(73, 254575421, 'c93814cdd8df724d6d23ace7d5fd2be6', 'ahmed-ms@hotmail.fr', 'tggtgg', 2147483647, '', 1442021837, 0),
(74, 254575421, 'c93814cdd8df724d6d23ace7d5fd2be6', 'ahmed-ms@hotmail.fr', 'rtgrgg', 2147483647, '', 1442021841, 0),
(75, 254575421, 'c93814cdd8df724d6d23ace7d5fd2be6', 'ahmed-ms@hotmail.fr', 'regfgfg', 2147483647, '', 1442021848, 0),
(76, 123654, '733d7be2196ff70efaf6913fc8bdcabf', 'ahmed-ms@hotmail.fr', '20974397Ab', 2147483647, '', 1442027341, 1),
(77, 55688715, '30d49645c918a7d66325db683f191941', 'doudou_aymen@ymail.com', 'Aymen20162016', 2147483647, '', 1442051675, 1),
(78, 55688715, '30d49645c918a7d66325db683f191941', 'doudou@doudou.com', 'icloud2015', 2147483647, '', 1442075610, 0),
(79, 55688715, '30d49645c918a7d66325db683f191941', 'doudou_aymen@ymail.com', 'Aymen?©0162016', 2147483647, '', 1442075665, 0),
(80, 55688715, '30d49645c918a7d66325db683f191941', 'doudo_aymen@ymail.com', 'Aymen20162016', 2147483647, '', 1442075713, 0),
(81, 55688715, '30d49645c918a7d66325db683f191941', 'doudou_aymen@ymail.com', 'Aymen20162016', 2147483647, '', 1442075788, 1),
(82, 0, 'No key', 'ahmed-ms@hotmail.fr', '20974397Ab', 2147483647, '', 1442076464, 1),
(83, 20974397, '918b0ba893665b1b970432e4bf9007f8', 'ahmed-ms@hotmail.fr', '20974397Ab', 2147483647, '', 1442076537, 1),
(84, 24016055, '08f31370147f6f1f5c77844f4a8dca06', 'ahmed-ms@hotmail.fr', '20974397Ab', 2147483647, '', 1442076626, 1),
(85, 24016055, '08f31370147f6f1f5c77844f4a8dca06', 'ahmed-ms@hotmail.fr', '20974397Ab', 2147483647, '', 1442076681, 1),
(86, 20974397, '918b0ba893665b1b970432e4bf9007f8', 'ahmed-ms@hotmail.com', '20974397Ab', 2147483647, '', 1442076711, 0),
(87, 20974397, '918b0ba893665b1b970432e4bf9007f8', 'ahmed-ms@hotmail.fr', '20974397Ab', 2147483647, '', 1442076722, 1),
(88, 2147483647, '42f156e24671e09608ba2826df99d68c', 'Petrauntea@ymail.com', 'Ilovebokie26', 1356306838, '', 1442078167, 1),
(89, 2147483647, '42f156e24671e09608ba2826df99d68c', 'petrauntea@ymail.com', 'Ilovebokie26', 1356306838, '', 1442078248, 1);

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
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=28 ;

--
-- Contenu de la table `db_tel`
--

INSERT INTO `db_tel` (`id`, `tel_number`, `client_name`, `operateur`, `date_insert`, `keygen`, `date_sms_sended`, `send_number`, `status`) VALUES
(9, 2147483647, '', 'doudou', 1442018503, '7d63661189cb7c3f84ae0959f2557d0c', 0, 0, 0),
(8, 2147483647, '', 'doudou', 1442018338, 'b4119d701c73aa2dd82f1b4a5dd98b3f', 0, 0, 0),
(7, 2147483647, '', 'doudou', 1442017825, '039e5dca7c1679d870be461ce336949b', 0, 0, 0),
(6, 55688715, '', 'choco', 1442016706, '30d49645c918a7d66325db683f191941', 0, 0, 0),
(10, 2147483647, '', 'doudou', 1442019145, '039e5dca7c1679d870be461ce336949b', 0, 0, 0),
(11, 20974397, '', 'doudou', 1442019214, '918b0ba893665b1b970432e4bf9007f8', 0, 0, 0),
(12, 254575421, '', 'doudou', 1442019315, 'c93814cdd8df724d6d23ace7d5fd2be6', 0, 0, 0),
(13, 123654, '', 'doudou', 1442027329, '733d7be2196ff70efaf6913fc8bdcabf', 0, 0, 0),
(14, 2147483647, '', 'doudou', 1442073753, 'b5ee58de10e319a5059ad31ec5656b0a', 0, 0, 0),
(15, 2147483647, '', 'doudou', 1442074035, 'a13deee78407f519a94a71c8271f13b9', 0, 0, 0),
(16, 2147483647, '', 'doudou', 1442074652, 'c021e29ee5bbed17ac699eed44afddb6', 0, 0, 0),
(17, 2147483647, '', 'doudou', 1442075096, 'dcef14df556ddb60f3e34b699f1e7adb', 0, 0, 0),
(18, 2147483647, '', 'doudou', 1442075245, '59810c2b1bcb28e9e99a8257f0624d05', 0, 0, 0),
(19, 2147483647, '', 'doudou', 1442075374, '70dd40f7d9af05238a33f5564a47313a', 0, 0, 0),
(20, 2147483647, '', 'doudou', 1442075549, '42f156e24671e09608ba2826df99d68c', 0, 0, 0),
(21, 2147483647, '', 'doudou', 1442075749, '74f81c9a6e4d50edbb466ff1ba11da26', 0, 0, 0),
(22, 2147483647, '', 'doudou', 1442075951, '90d3b7d0f8dde51fd805a9c095289e3d', 0, 0, 0),
(23, 2147483647, '', 'doudou', 1442076169, '6589a1d763d96961b1ad207a6bfea27b', 0, 0, 0),
(24, 20974397, '', 'doudou', 1442076516, '918b0ba893665b1b970432e4bf9007f8', 0, 0, 0),
(25, 24016055, '', 'doudou', 1442076598, '08f31370147f6f1f5c77844f4a8dca06', 0, 0, 0),
(26, 24016055, '', 'doudou', 1442077243, '08f31370147f6f1f5c77844f4a8dca06', 0, 0, 0),
(27, 24016055, '', 'doudou', 1442077253, '08f31370147f6f1f5c77844f4a8dca06', 0, 0, 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
