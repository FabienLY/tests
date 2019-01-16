-- phpMyAdmin SQL Dump
-- version 4.4.15.7
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Lun 22 Octobre 2018 à 17:15
-- Version du serveur :  5.6.37
-- Version de PHP :  5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `open_classroom`
--

-- --------------------------------------------------------

--
-- Structure de la table `comments`
--

CREATE TABLE IF NOT EXISTS `comments` (
  `id` int(11) NOT NULL,
  `id_post` int(11) NOT NULL,
  `author` varchar(255) NOT NULL,
  `comment` text NOT NULL,
  `date_comment` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM AUTO_INCREMENT=46 DEFAULT CHARSET=utf8;

--
-- Contenu de la table `comments`
--

INSERT INTO `comments` (`id`, `id_post`, `author`, `comment`, `date_comment`) VALUES
(1, 1, 'M@teo21', 'Un peu court ce billet !', '2010-03-25 16:49:53'),
(2, 1, 'Maxime', 'Oui, ça commence pas très fort ce blog...', '2010-03-25 16:57:16'),
(3, 1, 'MultiKiller', '+1 !', '2010-03-25 17:12:52'),
(4, 2, 'John', 'Preum''s !', '2010-03-27 18:59:49'),
(5, 2, 'Maxime', 'Excellente analyse de la situation !\r\nIl y arrivera plus tôt qu''on ne le pense !', '2010-03-27 22:02:13'),
(6, 2, 'Yamina', 'Lolilol', '0000-00-00 00:00:00'),
(7, 1, 'Yamina', 'Ayyyéééé', '0000-00-00 00:00:00'),
(8, 2, 'Yamina', 'Youhouuuu', '0000-00-00 00:00:00'),
(9, 2, 'Yamina', 'On y arrive enfin !!!', '0000-00-00 00:00:00'),
(10, 2, 'Yamina', 'Il reste un souci de date', '0000-00-00 00:00:00'),
(11, 1, 'Laura', 'Et iici aussi', '0000-00-00 00:00:00'),
(12, 1, 'Laura', 'Last check', '0000-00-00 00:00:00'),
(13, 2, 'Laura', 'Et là ça va mieux ?', '2018-10-06 16:34:44'),
(14, 2, 'Alexia', 'Helllolllol', '2018-10-06 16:48:50'),
(15, 2, 'Alexia', 'Naaaan vraiment ?', '2018-10-06 16:50:07'),
(16, 1, 'Alexia', 'Et alors ?', '2018-10-06 16:50:19'),
(17, 17, 'Alexia', 'Ouai pas mal ce billet', '2018-10-06 20:03:11'),
(18, 20, 'Suzy', 'Test', '2018-10-09 18:32:26'),
(19, 20, 'Jeanett', 'youhou', '2018-10-09 18:40:19'),
(20, 1, 'Emilie', 'Connexion', '2018-10-18 19:12:41'),
(21, 1, 'Emilie', 'new test', '2018-10-18 19:20:01'),
(22, 1, 'Emilie', 'qrkjghreq', '2018-10-18 19:21:04'),
(23, 2, 'Emilie', 'qihbqmihbqemt', '2018-10-18 19:36:48'),
(24, 2, 'Emilie', 'tihgqemtq', '2018-10-18 19:37:31'),
(25, 2, 'Emilie', 'slkghqlertgh', '2018-10-18 19:37:59'),
(26, 2, 'Emilie', 'id post', '2018-10-18 19:41:59'),
(27, 2, 'Emilie', 'pseudo', '2018-10-18 19:43:19'),
(28, 2, 'Emilie', 'comment', '2018-10-18 19:46:40'),
(29, 1, 'Emilie', 'POOOOOST', '2018-10-21 15:09:46'),
(30, 1, 'Emilie', 'krjgkrqu', '2018-10-21 15:11:09'),
(31, 22, 'britney', 'Ooooops I did it again', '2018-10-21 23:12:23'),
(32, 22, 'britney', 'I played with your heart', '2018-10-22 11:15:31'),
(33, 22, 'britney', 'Et voilà on y arrive enfin', '2018-10-22 12:22:53'),
(34, 21, 'britney', 'Quelle citation magnifique !!!', '2018-10-22 15:06:02'),
(35, 22, 'britney', 'Lalalala', '2018-10-22 16:28:42'),
(36, 22, 'britney', 'hou hou hou', '2018-10-22 16:29:48'),
(37, 21, 'Janis', 'lkgezkuGzeghzKVHrzmgihze/KJBRZ/GIHZg:kjhrgzKRHGeihrgmeirhsmeirghqemihgbvd:kjvhtqe;kvb:<shrvqe:ighqbv:ehrvqe:ivhqe:khqe:riuhv', '2018-10-22 18:02:35'),
(38, 1, 'Janis', ' Et hop un de plus pour la route', '2018-10-22 18:13:04'),
(39, 22, 'Janis', 'Oh down on meeeeeee', '2018-10-22 18:25:20'),
(40, 22, 'Janis', 'Down on me heeeeeee', '2018-10-22 18:25:28'),
(41, 21, 'Joan', 'I love rock n'' roll', '2018-10-22 18:26:46'),
(42, 20, 'Lucy', 'in the sky with diamonds', '2018-10-22 18:53:13'),
(43, 20, 'Lucy', 'she had diamonds on the inside', '2018-10-22 18:53:28'),
(44, 22, 'Lucy', 'yeayh yeah yeah', '2018-10-22 19:03:45'),
(45, 22, 'Lucy', 'You know you make me wanna shout', '2018-10-22 19:12:12');

-- --------------------------------------------------------

--
-- Structure de la table `members`
--

CREATE TABLE IF NOT EXISTS `members` (
  `id` int(11) NOT NULL,
  `pseudo` varchar(255) NOT NULL,
  `pass` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `date_subscription` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=latin1;

--
-- Contenu de la table `members`
--

INSERT INTO `members` (`id`, `pseudo`, `pass`, `email`, `date_subscription`) VALUES
(1, 'Nico', '$2y$10$WsUUU.km1Eznjl9q/8DavOr5tFjVG3zcFnHFjCMsfCzOOd6jV5pSq', 'test@email.fr', '2018-10-09 17:16:41'),
(2, 'Sheena', '$2y$10$6Lbn8qjQpxwRntCJ2.YizetZB82RX2GxNy6EcfjoKS1WRwY6wNa7W', 'test@email.fr', '2018-10-09 17:20:36'),
(3, 'Suzy', '$2y$10$RpnjIDG/Xieqr2oSh0KtNupaQ2zNofY3ngWlkSMTupriHqdieVUg2', 'test@email.fr', '2018-10-09 17:55:54'),
(4, 'Camille', '$2y$10$FBNpIqkuPxi.pbtcnIZR9Ovhs8w7XK13UYk2AoTA2fQYRitUaJPSW', 'test@email.fr', '2018-10-09 18:37:38'),
(5, 'Jeanett', '$2y$10$NmVcklr24o9bWdo9ZagNQuRNmwTKrFryo4dNvEBEX9VFXI0yOJ.1m', 'test@qerh.fr', '2018-10-09 18:40:00'),
(6, 'toto', '$2y$10$HKJ2dld4L/C.xRl1TwNPW.J0lymNcL3hPXnneK0wNLk7DVSm6kuoy', 'toto@toto.toto', '2018-10-09 18:46:13'),
(7, 'tata', '$2y$10$tUbYDJ6R6DSgcU/Sa5sSDelXtuf642Ym.HZTPwIdO0IZYoGWezE36', 'tata@tata.fr', '2018-10-12 10:42:12'),
(8, 'titi', '$2y$10$ZEoZzA9WrALpikRni8hMnecjM4owcrhrksYLYRTZjFMQECFjKCzUa', 'titi@titi.fr', '2018-10-12 10:58:59'),
(9, 'Lolo', '$2y$10$l40C8zXM5fcaYg1CClmcFe3nuR3Tn7czgw3vMm.iniiUshaJG68qe', 'lolo@lolo.fr', '2018-10-12 11:10:06'),
(10, 'Lulu', '$2y$10$UhKT1aR5KuUl5xEDoGFu..Lx55Am9TwK4/sfqy5e/bj097t1/sJbG', 'lulu@lulu.fr', '2018-10-12 11:16:54'),
(11, 'tete', '$2y$10$bvON31MOheQcNucuNr6ZQOGf5Z9x0Go2icn13ok0rD1U0inVbqBOW', 'tete@tete.fr', '2018-10-12 11:54:20'),
(12, 'Magali', '$2y$10$6bRckqmi5DQM5hKUYgzX6eDhkShsjW5SaL6d9WCQhW1BwowykzilO', 'lala@lala.fr', '2018-10-12 12:28:07'),
(13, 'Emilie', '$2y$10$cP2zlhIC1TOJo4cevoWz0.btx985myFOCGitSoCAwnLuoqMgmavK6', 'lili@lili.fr', '2018-10-12 13:05:22'),
(17, 'Jeanine', '$2y$10$RnCs9JbDIqnMOVajfLuWoOh.2.cIs26YMkXR1vvipUTdk5T5rxGIu', 'tata@tata.fr', '2018-10-21 22:34:59'),
(18, 'Lila', '$2y$10$J8DxCJkEUQvjSuaiGNSmpezwL/njj01GyLW7baooXdKftNT/Rlb3G', 'hihi@hihi.fr', '2018-10-21 22:55:02'),
(19, 'Zaza', '$2y$10$TwhthqvMuWP9JbTbNlqd4eg0VHNKoDBTd69A9G55l0rfoFJxhYfDu', 'zaza@zaza.fr', '2018-10-21 22:57:19'),
(20, 'britney', '$2y$10$9GqkbQotKOWUQt1oa8E3D.59XrlMuMrR8P4ou4ifyzxUf81bppN7.', 'bibi@bibi.fr', '2018-10-21 23:11:20'),
(21, 'Brigitte', '$2y$10$lf//ntse7rdi2UJkkKjte.9MgYyhKhAgKBiEiL8.DCSR7UcyOOyLK', 'bibi@bibi.fr', '2018-10-22 17:54:28'),
(22, 'Janis', '$2y$10$TZAM4BRgXbNLNGC.Z5jYr.6djS8dWMJWVoiR9P.BbHUtMf.eeeLrO', 'jaja@jaja.fr', '2018-10-22 17:56:05'),
(23, 'Joan', '$2y$10$NnYsR//z4WHltbOZuJIdp.wbwFbzQpQbEfvS6YaamShn3Zcu3/VNa', 'jojo@jojo.fr', '2018-10-22 18:26:17'),
(24, 'Lucy', '$2y$10$y51At1/J6UcfmgspA3TnDuu.6SNPImuTf0ufqX2bySGSgskD3.T9K', 'lulu@lulu.fr', '2018-10-22 18:50:08'),
(25, 'Jane', '$2y$10$nxc2.NCqZjAQ3bdi6qAgrepHfN/PJCj5n5.6k5H2hSd9nlBpQeUl6', 'jaja@jaja.fr', '2018-10-22 19:13:25');

-- --------------------------------------------------------

--
-- Structure de la table `mini_chat`
--

CREATE TABLE IF NOT EXISTS `mini_chat` (
  `id` int(11) NOT NULL,
  `pseudo` varchar(255) NOT NULL,
  `message` varchar(255) NOT NULL,
  `date_message` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=36 DEFAULT CHARSET=latin1;

--
-- Contenu de la table `mini_chat`
--

INSERT INTO `mini_chat` (`id`, `pseudo`, `message`, `date_message`) VALUES
(1, 'Toto', 'Salut la compagnie !', '2018-10-06 12:23:35'),
(2, 'Dédé', 'Salut ça va et toi ?', '2018-10-06 12:23:35'),
(3, 'Julie', 'Nan mais vous dites vraiment n''importe quoi les bouseux il faut que vous appreniez à fermer votre grande gueule de péquenaux... &lt;strong&gt;LOL&lt;/strong&gt;', '2018-10-06 12:23:35'),
(4, 'johnny ', 'I am the king of the web', '2018-10-06 12:23:35'),
(5, 'Walter', 'Moi aussi je veux parler', '2018-10-06 12:23:35'),
(6, 'Julie', 'Bah je vous laisse parler entre gros débiles hein !', '2018-10-06 12:23:35'),
(7, 'Germaine', 'Hello boys and girls, are you bitching ?', '2018-10-06 12:23:35'),
(8, 'Germaine', 'Because I speak very well you know ?', '2018-10-06 12:23:35'),
(9, 'André', 'Bah moi pas tant ', '2018-10-06 12:23:35'),
(10, 'Audrey', 'Pfiou qu''est-ce qu''on s''emmerde sur ce chat !!!', '2018-10-06 12:23:35'),
(11, 'Annie', 'J''ai la dalleeeuuuuu !', '2018-10-06 12:23:35'),
(12, 'Annie', 'Heho ya quelqu''unE ?', '2018-10-06 12:23:35'),
(13, 'Annie', 'Mais alors c''est quoi ce délire ?', '2018-10-06 12:23:35'),
(14, 'Petula', 'Je n''y crois pas tro à vos salades', '2018-10-07 12:54:46'),
(15, 'Paulette', 'Salut la compagnie, ça boume ou bien ?', '2018-10-07 13:32:46'),
(16, 'Paulette', '<a></a> faille xss', '2018-10-07 13:45:10'),
(17, 'Paulette', 'lol <br /> lol XSS', '2018-10-07 13:45:37'),
(18, 'Paulette <a>', 'gjkhdrw', '2018-10-07 14:36:56'),
(19, 'Paulette ', 'rhjgwx', '2018-10-07 14:37:18'),
(20, 'Paulette <a>', 'rkjbqlkdrjbgq', '2018-10-07 14:37:27'),
(21, 'Paulette ', '', '2018-10-07 15:31:24'),
(22, ' faille', 'faille ', '2018-10-07 15:34:38'),
(23, 'toto', 'kjqdnbr', '2018-10-07 15:34:54'),
(24, 'toto', ' rkbhqemkghm', '2018-10-07 15:36:38'),
(25, 'dgbqdb', 'qdbqdbqd', '2018-10-07 15:36:54'),
(26, 'toto', 'qkvblqkjvbn', '2018-10-07 15:39:23'),
(27, 'toto ', 'tjkhnrtsmk', '2018-10-07 15:40:29'),
(28, 'toto ', 'qjkrhbglqergh', '2018-10-07 15:41:02'),
(29, 'toto ', 'q:ksjbgkqjbgkme\r\nd:fjbqkrbqe', '2018-10-07 15:56:34'),
(30, 'toto ', 'qksjbgq:krjbq<br />\r\nqjkrbq:bgq<br />\r\nq:jrsbkqj:rs', '2018-10-07 15:58:46'),
(31, 'toto ', '<br />\r\n<br />\r\nqfkjbnlm', '2018-10-07 15:58:58'),
(32, 'lolilol', 'qlkrgh<br />\r\n...', '2018-10-09 15:34:19'),
(33, 'lolilol', '...', '2018-10-09 15:42:23'),
(34, 'lolilol', 'bbl:jk<br />\r\n', '2018-10-09 15:42:55'),
(35, 'lolilol', 'qmlghmRG', '2018-10-09 15:48:26');

-- --------------------------------------------------------

--
-- Structure de la table `posts`
--

CREATE TABLE IF NOT EXISTS `posts` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `date_creation` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM AUTO_INCREMENT=24 DEFAULT CHARSET=utf8;

--
-- Contenu de la table `posts`
--

INSERT INTO `posts` (`id`, `title`, `content`, `date_creation`) VALUES
(1, 'Bienvenue sur mon blog !', 'Je vous souhaite à toutes et à tous la bienvenue sur mon blog qui parlera de... PHP bien sûr !', '2010-03-25 16:28:41'),
(2, 'Le PHP à la conquête du monde !', 'C''est officiel, l''éléPHPant a annoncé à la radio hier soir "J''ai l''intention de conquérir le monde !".\r\nIl a en outre précisé que le monde serait à sa botte en moins de temps qu''il n''en fallait pour dire "éléPHPant". Pas dur, ceci dit entre nous...', '2010-03-27 18:31:11'),
(7, 'Billet n°3', 'kghlKGHQLZKGHBzkljgb<zlkjgbz', '2011-10-06 17:20:32'),
(8, 'Billet n°4', 'ruhgkrhgm<sirhgs<=ihvmvns<bvz:krjvbzkrV', '2012-10-06 17:20:32'),
(9, 'Billet n°5', 'kjdrhg:qkjehrbwkjnb:qejkbnwdmbhmeh', '2012-12-06 17:20:32'),
(10, 'Billet n°6', 'qkleruhgqleuihqemgiheqmih', '2013-10-06 17:20:32'),
(11, 'Billet n°7', 'khbqmehbmekbnvqmejvbmwkr', '2013-12-06 17:20:32'),
(12, 'Billet n°8', 'kehtbqmekbnqmebnqemibthemùbùqi', '2014-10-06 17:20:32'),
(13, 'Billet n°9', ':kerthbqmejbneqmbjknqemjkrbqemr', '2014-12-01 01:01:01'),
(14, 'Billet n°10', 'eiohqmhbqemrkbvnmqeirbhvmqbeuqmr', '2015-10-06 17:20:32'),
(15, 'Billet n°11', 'lkshbmkhbmeqibthqeùibqhti', '2016-10-06 17:20:32'),
(16, 'Billet n°12', 'mdhbmqeihbqùeiohbqmeibhqemthbhqetm', '2018-10-06 17:20:32'),
(17, 'Billet n°13', 'qkhklrjghkq<rbhrk<mgvh', '2018-10-06 17:49:30'),
(18, 'Billet n°°°°°°°°14', 'mhfkbjhfdw=lk brilgj nrigjnig u ndigunqvmigu, qmir gunqmriug nmqrdign drilgndrmig nrighmqircunmirouctnlriuygcnlrqiygnqlrigycnqlrigyqcnrligyqcnlrigcynqrliugcynqlcigynqligycnqlgycnqlrcgnqlrgycnqlrigycnqlrgycnqliygcnlqcgnlqrygncqlrgycnqlriuygnclqrugnyclqycgnlqrycgnlqriuygcnlqucgnlquhrlnuigqher liurcgyqcnlgnqlirgnclqegnqcleirghlqghcnqrhgqnghqcgh,cqlhgcqlrhg,cqlrhgq\r\nqglhql\r\nq hsth sh iqnmmeriog', '2018-10-06 20:28:09'),
(19, 'Billet n°°°°°°°°14', 'mhfkbjhfdw=lk brilgj nrigjnig u ndigunqvmigu, qmir gunqmriug nmqrdign drilgndrmig nrighmqircunmirouctnlriuygcnlrqiygnqlrigycnqlrigyqcnrligyqcnlrigcynqrliugcynqlcigynqligycnqlgycnqlrcgnqlrgycnqlrigycnqlrgycnqliygcnlqcgnlqrygncqlrgycnqlriuygnclqrugnyclqycgnlqrycgnlqriuygcnlqucgnlquhrlnuigqher liurcgyqcnlgnqlirgnclqegnqcleirghlqghcnqrhgqnghqcgh,cqlhgcqlrhg,cqlrhgq\r\nqglhql\r\nq hsth sh iqnmmeriog', '2018-10-06 20:36:14'),
(20, 'Billet n°°°°°°°°14', 'mhfkbjhfdw=lk brilgj nrigjnig u ndigunqvmigu, qmir gunqmriug nmqrdign drilgndrmig nrighmqircunmirouctnlriuygcnlrqiygnqlrigycnqlrigyqcnrligyqcnlrigcynqrliugcynqlcigynqligycnqlgycnqlrcgnqlrgycnqlrigycnqlrgycnqliygcnlqcgnlqrygncqlrgycnqlriuygnclqrugnyclqycgnlqrycgnlqriuygcnlqucgnlquhrlnuigqher liurcgyqcnlgnqlirgnclqegnqcleirghlqghcnqrhgqnghqcgh,cqlhgcqlrhg,cqlrhgq\r\nqglhql\r\nq hsth sh iqnmmeriog', '2018-10-06 20:36:43'),
(21, 'Billet n°°°°°°°°14', 'mhfkbjhfdw=lk brilgj nrigjnig u ndigunqvmigu, qmir gunqmriug nmqrdign drilgndrmig nrighmqircunmirouctnlriuygcnlrqiygnqlrigycnqlrigyqcnrligyqcnlrigcynqrliugcynqlcigynqligycnqlgycnqlrcgnqlrgycnqlrigycnqlrgycnqliygcnlqcgnlqrygncqlrgycnqlriuygnclqrugnyclqycgnlqrycgnlqriuygcnlqucgnlquhrlnuigqher liurcgyqcnlgnqlirgnclqegnqcleirghlqghcnqrhgqnghqcgh,cqlhgcqlrhg,cqlrhgq\r\nqglhql\r\nq hsth sh iqnmmeriog', '2018-10-06 20:37:04'),
(22, 'à supprimer', 'GGGG', '2018-10-06 20:54:49');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `members`
--
ALTER TABLE `members`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `mini_chat`
--
ALTER TABLE `mini_chat`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=46;
--
-- AUTO_INCREMENT pour la table `members`
--
ALTER TABLE `members`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=26;
--
-- AUTO_INCREMENT pour la table `mini_chat`
--
ALTER TABLE `mini_chat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=36;
--
-- AUTO_INCREMENT pour la table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=24;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
