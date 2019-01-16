-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost
-- Généré le :  mar. 23 oct. 2018 à 15:47
-- Version du serveur :  10.1.35-MariaDB
-- Version de PHP :  7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `test_php`
--

-- --------------------------------------------------------

--
-- Structure de la table `billets`
--

CREATE TABLE `billets` (
  `id` int(11) NOT NULL,
  `titre` varchar(255) NOT NULL,
  `contenu` text NOT NULL,
  `date_creation` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `billets`
--

INSERT INTO `billets` (`id`, `titre`, `contenu`, `date_creation`) VALUES
(1, 'Bienvenue sur mon blog !', 'Je vous souhaite à toutes et à tous la bienvenue sur mon blog qui parlera de... PHP bien sûr !', '2010-03-25 16:28:41'),
(2, 'Le PHP à la conquête du monde !', 'C\'est officiel, l\'éléPHPant a annoncé à la radio hier soir \"J\'ai l\'intention de conquérir le monde !\".\r\nIl a en outre précisé que le monde serait à sa botte en moins de temps qu\'il n\'en fallait pour dire \"éléPHPant\". Pas dur, ceci dit entre nous...', '2010-03-27 18:31:11');

-- --------------------------------------------------------

--
-- Structure de la table `comments`
--

CREATE TABLE `comments` (
  `id` int(11) NOT NULL,
  `id_billet` int(11) NOT NULL,
  `auteur` varchar(255) NOT NULL,
  `commentaire` text NOT NULL,
  `date_commentaire` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `comments`
--

INSERT INTO `comments` (`id`, `id_billet`, `auteur`, `commentaire`, `date_commentaire`) VALUES
(1, 1, 'M@teo21', 'Un peu court ce billet !', '2010-03-25 16:49:53'),
(2, 1, 'Maxime', 'sa va', '2010-03-25 16:57:16'),
(3, 1, 'MultiKiller', '+1 !', '2010-03-25 17:12:52'),
(4, 2, 'John', 'Preum\'s !', '2010-03-27 18:59:49'),
(8, 2, 'jh', 'salut', '2018-10-23 10:08:33');

-- --------------------------------------------------------

--
-- Structure de la table `jeux_video`
--

CREATE TABLE `jeux_video` (
  `ID` int(10) UNSIGNED NOT NULL,
  `nom` varchar(255) NOT NULL,
  `possesseur` varchar(255) NOT NULL,
  `console` varchar(255) NOT NULL,
  `prix` double NOT NULL DEFAULT '0',
  `nbre_joueurs_max` int(11) NOT NULL DEFAULT '0',
  `commentaires` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `jeux_video`
--

INSERT INTO `jeux_video` (`ID`, `nom`, `possesseur`, `console`, `prix`, `nbre_joueurs_max`, `commentaires`) VALUES
(1, 'Super Mario Bros', 'Florent', 'NES', 4, 1, 'Un jeu d\'anthologie !'),
(2, 'Sonic', 'Patrick', 'Megadrive', 2, 1, 'Pour moi, le meilleur jeu du monde !'),
(3, 'Zelda : ocarina of time', 'Florent', 'Nintendo 64', 15, 1, 'Un jeu grand, beau et complet comme on en voit rarement de nos jours'),
(4, 'Mario Kart 64', 'Florent', 'Nintendo 64', 25, 4, 'Un excellent jeu de kart !'),
(5, 'Super Smash Bros Melee', 'Michel', 'GameCube', 55, 4, 'Un jeu de baston délirant !'),
(6, 'Dead or Alive', 'Patrick', 'Xbox', 60, 4, 'Le plus beau jeu de baston jamais créé'),
(7, 'Dead or Alive Xtreme Beach Volley Ball', 'Patrick', 'Xbox', 60, 4, 'Un jeu de beach volley de toute beauté o_O'),
(8, 'Enter the Matrix', 'Michel', 'PC', 45, 1, 'Plutôt bof comme jeu, mais ça complète bien le film'),
(9, 'Max Payne 2', 'Michel', 'PC', 50, 1, 'Très réaliste, une sorte de film noir sur fond d\'histoire d\'amour. A essayer !'),
(10, 'Yoshi\'s Island', 'Florent', 'SuperNES', 6, 1, 'Le paradis des Yoshis :o)'),
(11, 'Commandos 3', 'Florent', 'PC', 44, 12, 'Un bon jeu d\'action où on dirige un commando pendant la 2ème guerre mondiale !'),
(12, 'Final Fantasy X', 'Patrick', 'PS2', 40, 1, 'Encore un Final Fantasy mais celui la est encore plus beau !'),
(13, 'Pokemon Rubis', 'Florent', 'GBA', 44, 4, 'Pika-Pika-chu !!!'),
(14, 'Starcraft', 'Michel', 'PC', 19, 8, 'Le meilleur jeux pc de tout les temps !'),
(15, 'Grand Theft Auto 3', 'Michel', 'PS2', 30, 1, 'Comme dans les autres Gta on ecrase tout le monde :) .'),
(16, 'Homeworld 2', 'Michel', 'PC', 45, 6, 'Superbe ! o_O'),
(17, 'Aladin', 'Patrick', 'SuperNES', 10, 1, 'Comme le dessin Animé !'),
(18, 'Super Mario Bros 3', 'Michel', 'SuperNES', 10, 2, 'Le meilleur Mario selon moi.'),
(19, 'SSX 3', 'Florent', 'Xbox', 56, 2, 'Un très bon jeu de snow !'),
(20, 'Star Wars : Jedi outcast', 'Patrick', 'Xbox', 33, 1, 'Encore un jeu sur star-wars où on se prend pour Luke Skywalker !'),
(21, 'Actua Soccer 3', 'Patrick', 'PS', 30, 2, 'Un jeu de foot assez bof ...'),
(22, 'Time Crisis 3', 'Florent', 'PS2', 40, 1, 'Un troisième volet efficace mais pas vraiment surprenant'),
(23, 'X-FILES', 'Patrick', 'PS', 25, 1, 'Un jeu censé ressembler a la série mais assez raté ...'),
(24, 'Soul Calibur 2', 'Patrick', 'Xbox', 54, 1, 'Un jeu bien axé sur le combat'),
(25, 'Diablo', 'Florent', 'PS', 20, 1, 'Comme sur PC mais la c\'est sur un ecran de télé :) !'),
(26, 'Street Fighter 2', 'Patrick', 'Megadrive', 10, 2, 'Le célèbre jeu de combat !'),
(27, 'Gundam Battle Assault 2', 'Florent', 'PS', 29, 1, 'Jeu japonais dont le gameplay est un peu limité. Peu de robots malheureusement'),
(28, 'Spider-Man', 'Florent', 'Megadrive', 15, 1, 'Vivez l\'aventure de l\'homme araignée'),
(29, 'Midtown Madness 3', 'Michel', 'Xbox', 59, 6, 'Dans la suite des autres versions de Midtown Madness'),
(30, 'Tetris', 'Florent', 'Gameboy', 5, 1, 'Qui ne connait pas ? '),
(31, 'The Rocketeer', 'Michel', 'NES', 2, 1, 'Un super un film et un jeu de m*rde ...'),
(32, 'Pro Evolution Soccer 3', 'Patrick', 'PS2', 59, 2, 'Un petit jeu de foot sur PS2'),
(33, 'Ice Hockey', 'Michel', 'NES', 7, 2, 'Jamais joué mais a mon avis ca parle de hockey sur glace ... =)'),
(34, 'Sydney 2000', 'Florent', 'Dreamcast', 15, 2, 'Les JO de Sydney dans votre salon !'),
(35, 'NBA 2k', 'Patrick', 'Dreamcast', 12, 2, 'A votre avis :p ?'),
(36, 'Aliens Versus Predator : Extinction', 'Michel', 'PS2', 20, 2, 'Un shoot\'em up pour pc'),
(37, 'Crazy Taxi', 'Florent', 'Dreamcast', 11, 1, 'Conduite de taxi en folie !'),
(38, 'Le Maillon Faible', 'Mathieu', 'PS2', 10, 1, 'Le jeu de l\'émission'),
(39, 'FIFA 64', 'Michel', 'Nintendo 64', 25, 2, 'Le premier jeu de foot sur la N64 =) !'),
(40, 'Qui Veut Gagner Des Millions', 'Florent', 'PS2', 10, 1, 'Le jeu de l\'émission'),
(41, 'Monopoly', 'Sebastien', 'Nintendo 64', 21, 4, 'Bheuuu le monopoly sur N64 !'),
(42, 'Taxi 3', 'Corentin', 'PS2', 19, 4, 'Un jeu de voiture sur le film'),
(43, 'Indiana Jones Et Le Tombeau De L\'Empereur', 'Florent', 'PS2', 25, 1, 'Notre aventurier préféré est de retour !!!'),
(44, 'F-ZERO', 'Mathieu', 'GBA', 25, 4, 'Un super jeu de course futuriste !'),
(45, 'Harry Potter Et La Chambre Des Secrets', 'Mathieu', 'Xbox', 30, 1, 'Abracadabra !! Le célebre magicien est de retour !'),
(46, 'Half-Life', 'Corentin', 'PC', 15, 32, 'L\'autre meilleur jeu de tout les temps (surtout ses mods).'),
(47, 'Myst III Exile', 'Sébastien', 'Xbox', 49, 1, 'Un jeu de réflexion'),
(48, 'Wario World', 'Sebastien', 'Gamecube', 40, 4, 'Wario vs Mario ! Qui gagnera ! ?'),
(49, 'Rollercoaster Tycoon', 'Florent', 'Xbox', 29, 1, 'Jeu de gestion d\'un parc d\'attraction'),
(50, 'Splinter Cell', 'Patrick', 'Xbox', 53, 1, 'Jeu magnifique !'),
(51, 'Battlefield 1942', 'Patrick', 'PC', 45, 50, '2nde guerre mondiale'),
(52, 'Battlefield 1942', 'Patrick', 'PC', 45, 50, '2nde guerre mondiale'),
(53, 'Battlefield 1942', 'Patrick', 'PC', 45, 50, '2nde guerre mondiale'),
(54, 'Battlefield 1942', 'Patrick', 'PC', 45, 50, '2nde guerre mondiale'),
(55, 'Battlefield 1942', 'Patrick', 'PC', 45, 50, '2nde guerre mondiale'),
(56, 'Battlefield 1942', 'Patrick', 'PC', 45, 50, '2nde guerre mondiale'),
(57, 'Battlefield 1942', 'Patrick', 'PC', 45, 50, '2nde guerre mondiale'),
(58, 'Battlefield 1942', 'Patrick', 'PC', 45, 50, '2nde guerre mondiale'),
(59, 'Battlefield 1942', 'Patrick', 'PC', 45, 50, '2nde guerre mondiale'),
(60, 'Battlefield 1942', 'Patrick', 'PC', 45, 50, '2nde guerre mondiale'),
(61, 'Battlefield 1942', 'Patrick', 'PC', 45, 50, '2nde guerre mondiale'),
(62, 'Battlefield 1942', 'Patrick', 'PC', 45, 50, '2nde guerre mondiale'),
(63, 'Battlefield 1942', 'Patrick', 'PC', 45, 50, '2nde guerre mondiale'),
(64, 'Battlefield 1942', 'Patrick', 'PC', 45, 50, '2nde guerre mondiale'),
(65, 'Battlefield 1942', 'Patrick', 'PC', 45, 50, '2nde guerre mondiale'),
(66, 'Battlefield 1942', 'Patrick', 'PC', 45, 50, '2nde guerre mondiale'),
(67, 'Battlefield 1942', 'Patrick', 'PC', 45, 50, '2nde guerre mondiale'),
(68, 'Battlefield 1942', 'Patrick', 'PC', 45, 50, '2nde guerre mondiale'),
(69, 'Battlefield 1942', 'Patrick', 'PC', 45, 50, '2nde guerre mondiale'),
(70, 'Battlefield 1942', 'Patrick', 'PC', 45, 50, '2nde guerre mondiale'),
(71, 'Battlefield 1942', 'Patrick', 'PC', 45, 50, '2nde guerre mondiale');

-- --------------------------------------------------------

--
-- Structure de la table `messageschat`
--

CREATE TABLE `messageschat` (
  `id` int(11) NOT NULL,
  `pseudo` text NOT NULL,
  `message` text NOT NULL,
  `dateMessage` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `messageschat`
--

INSERT INTO `messageschat` (`id`, `pseudo`, `message`, `dateMessage`) VALUES
(1, 'ALIKRA', 'Salut tout le monde !', '2018-09-10 00:00:00'),
(2, 'Monde', 'Salut toi !', '2018-09-19 00:00:00'),
(4, 'ALIKRA', 'Waouh! c\'est trop bien ce chat!!', '2018-09-19 16:57:42'),
(5, 'Monde', 'Eh ouai c\'est moi qui l\'ai fait !!', '2018-09-20 08:57:17');

-- --------------------------------------------------------

--
-- Structure de la table `minichat`
--

CREATE TABLE `minichat` (
  `id` int(11) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `message` text NOT NULL,
  `date` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `minichat`
--

INSERT INTO `minichat` (`id`, `nom`, `message`, `date`) VALUES
(43, 'sa va', 'salut', '2018-09-20 12:00:18');

-- --------------------------------------------------------

--
-- Structure de la table `mini_chat`
--

CREATE TABLE `mini_chat` (
  `id` int(11) NOT NULL,
  `pseudo` varchar(255) NOT NULL,
  `message` text NOT NULL,
  `date_chat` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `mini_chat`
--

INSERT INTO `mini_chat` (`id`, `pseudo`, `message`, `date_chat`) VALUES
(4, 'daouda', 'your company is very nice !\r\ncontinue like this', '2018-09-20 09:09:33'),
(5, 'moi', 'thank you ', '2018-09-20 09:09:33'),
(6, 'yoann', 'it s verry amazing your web site', '2018-09-20 09:55:44'),
(7, 'mohammed', 'Il faut suivre le cours!!!!', '2018-09-20 09:56:55'),
(8, 'sa va', 'uieziuez', '2018-09-20 10:50:54'),
(9, 'daouda', 'hi guy', '2018-09-20 11:11:11'),
(10, 'daouda', 'how are you', '2018-09-20 11:11:24'),
(11, 'daouda', 'ki', '2018-09-20 11:16:15');

-- --------------------------------------------------------

--
-- Structure de la table `news`
--

CREATE TABLE `news` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `contenu` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `news`
--

INSERT INTO `news` (`id`, `name`, `contenu`) VALUES
(1, 'Ma première news', 'Voila c\'est ma première news'),
(2, 'une autre (2) news', 'voila voila'),
(3, 'une autre(3) news', 'Voila une autre');

-- --------------------------------------------------------

--
-- Structure de la table `visiteurs`
--

CREATE TABLE `visiteurs` (
  `id` int(11) NOT NULL,
  `pseudo` varchar(50) NOT NULL,
  `message` text NOT NULL,
  `date_message` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `visiteurs`
--

INSERT INTO `visiteurs` (`id`, `pseudo`, `message`, `date_message`) VALUES
(6, 'Nadir', 'ffd', '2018-09-19 03:53:21'),
(7, 'Nadir', 'fff', '2019-09-18 04:01:40'),
(8, 'dd', 'dddd', '2018-09-19 04:10:09'),
(9, 'dddd', 'sss', '2018-09-19 04:10:17'),
(10, 'dd', '', '2018-09-19 04:44:21'),
(11, 'kker', 'sks', '2018-09-19 04:51:54'),
(12, 'dd', 'sk', '2018-09-19 04:52:39'),
(13, 'ddds', '', '2018-09-19 05:24:22'),
(14, 'ddd', '', '2018-09-19 05:24:25'),
(15, 'dd', '', '2018-09-19 05:24:29'),
(16, 'jj', '', '2018-09-19 05:24:32'),
(17, 'daouda', 'sa va', '2018-09-20 11:46:57');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `billets`
--
ALTER TABLE `billets`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `jeux_video`
--
ALTER TABLE `jeux_video`
  ADD KEY `ID` (`ID`);

--
-- Index pour la table `messageschat`
--
ALTER TABLE `messageschat`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `minichat`
--
ALTER TABLE `minichat`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `mini_chat`
--
ALTER TABLE `mini_chat`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `visiteurs`
--
ALTER TABLE `visiteurs`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `billets`
--
ALTER TABLE `billets`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT pour la table `jeux_video`
--
ALTER TABLE `jeux_video`
  MODIFY `ID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=72;

--
-- AUTO_INCREMENT pour la table `messageschat`
--
ALTER TABLE `messageschat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `minichat`
--
ALTER TABLE `minichat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT pour la table `mini_chat`
--
ALTER TABLE `mini_chat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT pour la table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `visiteurs`
--
ALTER TABLE `visiteurs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
