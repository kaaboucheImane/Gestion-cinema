-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  mar. 15 jan. 2019 à 00:28
-- Version du serveur :  5.7.21
-- Version de PHP :  5.6.35

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `ecine-1`
--

-- --------------------------------------------------------

--
-- Structure de la table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `admin`
--

INSERT INTO `admin` (`id`, `email`, `password`) VALUES
(1, 'admin', 'password');

-- --------------------------------------------------------

--
-- Structure de la table `comment`
--

DROP TABLE IF EXISTS `comment`;
CREATE TABLE IF NOT EXISTS `comment` (
  `id` int(11) NOT NULL,
  `name` varchar(500) NOT NULL,
  `title` varchar(500) NOT NULL,
  `message` varchar(800) NOT NULL,
  `hour` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `comment`
--

INSERT INTO `comment` (`id`, `name`, `title`, `message`, `hour`) VALUES
(1, 'ikrame oe', 'Bird Box', 'enjoy', '12:30'),
(2, 'imane', 'Bird Box', 'hi', '07:25'),
(3, 'hajar dl', 'Le Grinch', 'enjoy <3 i like it', '07:28'),
(4, 'ikram oe', 'Le Grinch', 'yeh me too', '08:07'),
(5, 'fati', 'Halloween', 'awesome!', '08:27'),
(6, 'sihame', 'Venom', 'hi', '11:17'),
(7, 'simo', 'Skyscraper', 'hola', '12:16');

-- --------------------------------------------------------

--
-- Structure de la table `contact`
--

DROP TABLE IF EXISTS `contact`;
CREATE TABLE IF NOT EXISTS `contact` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `full_name` varchar(300) NOT NULL,
  `email` varchar(300) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `message` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `contact`
--

INSERT INTO `contact` (`id`, `full_name`, `email`, `phone`, `message`) VALUES
(1, 'imane kaabouche', 'imanekaab@gmail.com', '0661514451', 'hola');

-- --------------------------------------------------------

--
-- Structure de la table `evenement`
--

DROP TABLE IF EXISTS `evenement`;
CREATE TABLE IF NOT EXISTS `evenement` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_type` int(11) NOT NULL,
  `date` date NOT NULL,
  `id_salle` int(11) NOT NULL,
  `poster` varchar(300) NOT NULL,
  `titre` varchar(200) NOT NULL,
  `description` text NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id_type` (`id_type`),
  KEY `id_salle` (`id_salle`)
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `evenement`
--

INSERT INTO `evenement` (`id`, `id_type`, `date`, `id_salle`, `poster`, `titre`, `description`) VALUES
(1, 1, '2019-01-01', 1, 'rock.png', 'We will rock it!', 'Alors qu\'une equipe de television anglaise realise un reportage aux etats-Unis sur le massacre perpetre par Michael Myers la nuit d\'Halloween 1978, celui-ci s\'echappe de l\'asile de fous ou il etait enferme. Il est obsede par l\'idee de se venger de la seule survivante du massacre, Laurie Strode. Celle-ci se prepare à affronter une derniere fois le psychopathe, au point de negliger sa fille et sa petite-fille.'),
(3, 1, '2019-01-01', 1, 'theatr1.jpg', 'Les inqualifiables', 'Alors qu\'une equipe de television anglaise realise un reportage aux etats-Unis sur le massacre perpetre par Michael Myers la nuit d\'Halloween 1978, celui-ci s\'echappe de l\'asile de fous ou il etait enferme. Il est obsede par l\'idee de se venger de la seule survivante du massacre, Laurie Strode. Celle-ci se prepare à affronter une derniere fois le psychopathe, au point de negliger sa fille et sa petite-fille.'),
(4, 1, '2019-01-27', 4, 'theatre2.jpg', 'Mornign show', 'Alors qu\'une equipe de television anglaise realise un reportage aux etats-Unis sur le massacre perpetre par Michael Myers la nuit d\'Halloween 1978, celui-ci s\'echappe de l\'asile de fous ou il etait enferme. Il est obsede par l\'idee de se venger de la seule survivante du massacre, Laurie Strode. Celle-ci se prepare à affronter une derniere fois le psychopathe, au point de negliger sa fille et sa petite-fille.'),
(7, 5, '2019-01-23', 4, 'rock3.jpg', 'Robin hood in da street', 'Alors qu\'une equipe de television anglaise realise un reportage aux etats-Unis sur le massacre perpetre par Michael Myers la nuit d\'Halloween 1978, celui-ci s\'echappe de l\'asile de fous ou il etait enferme. Il est obsede par l\'idee de se venger de la seule survivante du massacre, Laurie Strode. Celle-ci se prepare à affronter une derniere fois le psychopathe, au point de negliger sa fille et sa petite-fille.'),
(9, 7, '2019-01-09', 3, 'img6.jpg', 'The greatest show on earth', 'Alors qu\'une equipe de television anglaise realise un reportage aux etats-Unis sur le massacre perpetre par Michael Myers la nuit d\'Halloween 1978, celui-ci s\'echappe de l\'asile de fous ou il etait enferme. Il est obsede par l\'idee de se venger de la seule survivante du massacre, Laurie Strode. Celle-ci se prepare à affronter une derniere fois le psychopathe, au point de negliger sa fille et sa petite-fille.'),
(10, 7, '2019-05-04', 1, 'img7.jpg', 'So lounge', 'Alors qu\'une equipe de television anglaise realise un reportage aux etats-Unis sur le massacre perpetre par Michael Myers la nuit d\'Halloween 1978, celui-ci s\'echappe de l\'asile de fous ou il etait enferme. Il est obsede par l\'idee de se venger de la seule survivante du massacre, Laurie Strode. Celle-ci se prepare à affronter une derniere fois le psychopathe, au point de negliger sa fille et sa petite-fille.'),
(11, 1, '2019-01-18', 1, 'img5.jpg', 'Vice city', 'Alors qu\'une equipe de television anglaise realise un reportage aux etats-Unis sur le massacre perpetre par Michael Myers la nuit d\'Halloween 1978, celui-ci s\'echappe de l\'asile de fous ou il etait enferme. Il est obsede par l\'idee de se venger de la seule survivante du massacre, Laurie Strode. Celle-ci se prepare à affronter une derniere fois le psychopathe, au point de negliger sa fille et sa petite-fille.'),
(12, 7, '2019-01-18', 2, 'img8.jpg', 'Opera Evening', 'Alors qu\'une equipe de television anglaise realise un reportage aux etats-Unis sur le massacre perpetre par Michael Myers la nuit d\'Halloween 1978, celui-ci s\'echappe de l\'asile de fous ou il etait enferme. Il est obsede par l\'idee de se venger de la seule survivante du massacre, Laurie Strode. Celle-ci se prepare à affronter une derniere fois le psychopathe, au point de negliger sa fille et sa petite-fille.'),
(13, 3, '2019-01-02', 2, 'ob_e78560_alex-ramires-affiche.jpg', 'Alex Ramirès fait sa crise', 'Les spectacles d’humoristes foisonnent à Paris. En allant voir un one man show, on ne sait jamais si l’on va être séduit, si l’on va sourire, rire ou simplement être touché. Je suis du coup vraiment sélective dans mes choix. En lisant le pitch du spectacle d’Alex Ramirès, j’ai eu envie de le découvrir… et j’ai plus que bien fait ! À l’évidence, « Alex Ramirès fait sa crise » fait partie des très bonnes surprises et des sorties que l’on veut absolument conseiller. En sortant, on se dit qu’il est impossible d’imaginer laisser nos amis se priver d’un bon moment.'),
(23, 1, '2019-01-01', 1, 'rock.png', 'MainsonB', 'Alors qu\'une equipe de television anglaise realise un reportage aux etats-Unis sur le massacre perpetre par Michael Myers la nuit d\'Halloween 1978, celui-ci s\'echappe de l\'asile de fous ou il etait enferme. Il est obsede par l\'idee de se venger de la seule survivante du massacre, Laurie Strode. Celle-ci se prepare à affronter une derniere fois le psychopathe, au point de negliger sa fille et sa petite-fille.'),
(24, 7, '2019-01-02', 4, 'img4.jpg', '', '');

-- --------------------------------------------------------

--
-- Structure de la table `evenement_type`
--

DROP TABLE IF EXISTS `evenement_type`;
CREATE TABLE IF NOT EXISTS `evenement_type` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `libelle` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `evenement_type`
--

INSERT INTO `evenement_type` (`id`, `libelle`) VALUES
(1, 'theatre'),
(2, 'Concert musical'),
(3, 'One man show'),
(4, 'Spectacle'),
(5, 'rock'),
(7, 'Musique');

-- --------------------------------------------------------

--
-- Structure de la table `film_de_jour`
--

DROP TABLE IF EXISTS `film_de_jour`;
CREATE TABLE IF NOT EXISTS `film_de_jour` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(300) NOT NULL,
  `description` text NOT NULL,
  `poster` varchar(300) NOT NULL,
  `trailer` varchar(300) NOT NULL,
  `genre_id` int(100) NOT NULL,
  `realisateur_id` int(100) NOT NULL,
  `date_de_sortie` date NOT NULL,
  `duree` time(6) NOT NULL,
  `langue_id` int(100) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `genre_id` (`genre_id`),
  KEY `langue_id` (`langue_id`),
  KEY `realisateur_id` (`realisateur_id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `film_de_jour`
--

INSERT INTO `film_de_jour` (`id`, `title`, `description`, `poster`, `trailer`, `genre_id`, `realisateur_id`, `date_de_sortie`, `duree`, `langue_id`) VALUES
(1, 'NUN', 'Les membres de l\'Eglise catholique sont stupefaits a l\'annonce du suicide d\'une jeune nonne dans une abbaye roumaine. Aussitot, un pretre et un novice sont depeches sur place par le Vatican pour mener l\'enquete. Les deux ecclesiastiques vont devoir affronter une nonne demoniaque qui menace de detruire leur ame et l\'abbaye va devenir le theatre d\'une lutte acharnee entre les vivants et les damnes.', 'nun.jpg', 'pzD9zGcUNrw\r\n', 6, 3, '0000-00-00', '01:30:00.000000', 1),
(2, 'Le Grinch', 'Le Grinch ou Le Grincheux au Quebec est un film americain d\'animation realise par Yarrow Cheney et Scott Mosier, sorti en 2018. C\'est la troisieme adaptation de la nouvelle de Theodor Seuss Geisel Le Grincheux qui voulait gacher Noel apres le court-metrage anime Comment le Grinch a vole Noel! en 1966 et le film Le Grinch en 2000.', 'grinch.jpg', 'Bf6D-i8YpHg', 3, 5, '0000-00-00', '01:26:00.000000', 1),
(3, 'Venom', 'Alors qu\'il mene une enquete sur le dirigeant de la societe Life Foundation, qui conduit des experiences sur des humains à l\'aide de materiaux extraterrestres, le journaliste Eddie Brock est infecté par un symbiote. Celui-ci prend progressivement le controle de son esprit et de son corps jusqu\'a agir de facon totalement autonome. Le journaliste Eddie Brock laisse alors sa place au protecteur letal Venom.', 'venom.jpg', 'xLCn88bfW1o', 5, 5, '0000-00-00', '01:52:00.000000', 1),
(5, 'Bird Box', 'Bird Box, ou Froid aux yeux au Quebec, est un thriller post-apocalyptique ameicain realise par Susanne Bier, sorti en 2018. Il s’agit de l’adaptation du roman eponyme de Josh Malerman. ', 'bird_box.jpg', 'MPWMBITCudM', 6, 5, '0000-00-00', '02:04:00.000000', 1),
(6, 'Halloween', 'Alors qu\'une equipe de television anglaise realise un reportage aux etats-Unis sur le massacre perpetre par Michael Myers la nuit d\'Halloween 1978, celui-ci s\'echappe de l\'asile de fous ou il etait enferme. Il est obsede par l\'idee de se venger de la seule survivante du massacre, Laurie Strode. Celle-ci se prepare à affronter une derniere fois le psychopathe, au point de negliger sa fille et sa petite-fille.', 'halloweenn1.jpg', '2QG-55EKRcs', 6, 12, '0000-00-00', '01:46:00.000000', 1),
(7, 'Redcon-1', 'Une mission-suicide pour exfiltrer un scientifique, prisonnier d\'une ville peuplee de morts vivants.', 'red1.jpg', 'GW985z-yAH8', 6, 13, '0000-00-00', '01:55:00.000000', 1),
(8, 'Upgrade', 'Suite a une violente agression qui l\'a laisse veuf et paralyse, Grey Trace est contacte par un inventeur richissime qui lui offre un remede miracle experimental capable d\'upgrader son corps. Grey se fait greffer un implant pilote par l\'intelligence artificielle et voit ses facultes physiques decuplees. Il decide de mettre sa remission corporelle au service de sa soif de', 'up1.jpg', 'G9fXbkiKfmY', 5, 14, '0000-00-00', '01:40:00.000000', 1),
(9, 'Skyscraper', 'Veteran de guerre et ancien chef d\'equipe de liberation d\'otages du FBI, Will est aujourd\'hui responsable de la securite des gratte-ciels en Chine. Quand il decouvre le batiment le plus sur du monde en feu, il est accuse d\'avoir declenche l\'incendie. Alors qu\'il est desormais un fugitif, Will doit retrouver les coupables, s\'innocenter et porter secours a sa famille qui se trouve a l\'interieur du batiment.', 'sky1.jpg', 't9QePUT-Yt8', 1, 15, '0000-00-00', '01:42:00.000000', 1);

-- --------------------------------------------------------

--
-- Structure de la table `gallery`
--

DROP TABLE IF EXISTS `gallery`;
CREATE TABLE IF NOT EXISTS `gallery` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(300) NOT NULL,
  `picture` varchar(500) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=25 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `gallery`
--

INSERT INTO `gallery` (`id`, `title`, `picture`) VALUES
(3, 'Bird Box', 'birbox1.jpg'),
(2, 'Bird Box', 'birdbox2.jpg'),
(4, 'NUN', 'thenun1.jpg'),
(5, 'NUN', 'theun2.jpg'),
(6, 'Le Grinch', 'grinch1.jpg'),
(9, 'Le Grinch', 'grich2.jpg'),
(8, 'Le Grinch', 'grinch3.jpg'),
(10, 'Venom', 'ven1.jpg'),
(11, 'Venom', 'ven2.jpg'),
(12, 'Venom', 'ven3.jpg'),
(13, 'Halloween', 'halo1.jpg'),
(14, 'Halloween', 'halo2.jpg'),
(15, 'Halloween', 'halo3.jpg'),
(16, 'Redcon-1', 'red3.jpg'),
(17, 'Redcon-1', 'red4.jpg'),
(18, 'Redcon-1', 'red2.jpg'),
(19, 'Upgrade', 'up3.jpg'),
(23, 'Skyscraper', 'sky2.jpg'),
(24, 'Skyscraper', 'sky3.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `genre`
--

DROP TABLE IF EXISTS `genre`;
CREATE TABLE IF NOT EXISTS `genre` (
  `GenreID` int(10) NOT NULL AUTO_INCREMENT,
  `GenreType` varchar(30) NOT NULL,
  PRIMARY KEY (`GenreID`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `genre`
--

INSERT INTO `genre` (`GenreID`, `GenreType`) VALUES
(1, 'Action'),
(2, 'Comedy'),
(3, 'Thriller'),
(4, 'Drama'),
(5, 'Crime'),
(6, 'Animation'),
(7, 'Fantastique '),
(8, 'SI-FI'),
(9, 'horreur');

-- --------------------------------------------------------

--
-- Structure de la table `hero`
--

DROP TABLE IF EXISTS `hero`;
CREATE TABLE IF NOT EXISTS `hero` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `full_name` varchar(100) NOT NULL,
  `title` varchar(100) NOT NULL,
  `picture` varchar(300) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=27 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `hero`
--

INSERT INTO `hero` (`id`, `full_name`, `title`, `picture`) VALUES
(1, 'sandra bullock', 'Bird Box', 'bird1.jpg'),
(2, 'sarah paulson', 'Bird Box', 'bird2.jpg'),
(3, 'trevante rhodes', 'Bird Box', 'bird3.jpg'),
(5, 'taissa farmiga', 'NUN', 'nun1.jpg'),
(6, 'bichir demian', 'NUN', 'nun4.jpg'),
(7, 'charlotte hope', 'NUN', 'nun3.jpg'),
(8, 'jonny coyne', 'NUN', 'nun2.png'),
(9, 'rashida jones', 'Le Grinch', 'gri1.jpg'),
(10, 'cameron seely', 'Le Grinch', 'gri2.jpg'),
(11, 'tom hardy', 'Venom', 'ven4.jpg'),
(12, 'jenny slate', 'Venom', 'ven5.jpg'),
(13, 'riz ahmed', 'Venom', 'ven6.jpg'),
(14, 'michelle williams', 'Venom', 'ven7.png'),
(15, 'jamie lee curtis', 'Halloween', 'halo4.jpg'),
(16, 'judy greer', 'Halloween', 'halo5.jpg'),
(17, 'matichak andi', 'Halloween', 'halo6.jpg'),
(18, 'katarina leigh waters', 'Redcon-1', 'red5.jpg'),
(19, 'martyn ford', 'Redcon-1', 'red6.png'),
(20, 'logan marshall-green', 'Upgrade', 'up5.jpg'),
(21, 'betty gabriel', 'Upgrade', 'up6.jpg'),
(22, 'harrison Gilbertson ', 'Upgrade', 'up7.jpg'),
(23, 'johnson dwayne', 'Skyscraper', 'sky4.jpg'),
(24, 'pablo schreiber', 'Skyscraper', 'sky5.jpg'),
(25, 'neve campbell', 'Skyscraper', 'sky6.jpg'),
(26, 'roland moller', 'Skyscraper', 'sky7.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `langue`
--

DROP TABLE IF EXISTS `langue`;
CREATE TABLE IF NOT EXISTS `langue` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `libelle` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `langue`
--

INSERT INTO `langue` (`id`, `libelle`) VALUES
(1, 'anglais'),
(2, 'français'),
(3, 'espagnol'),
(4, 'arabe');

-- --------------------------------------------------------

--
-- Structure de la table `movie`
--

DROP TABLE IF EXISTS `movie`;
CREATE TABLE IF NOT EXISTS `movie` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `poster` varchar(300) NOT NULL,
  `trailer` varchar(300) NOT NULL,
  `genre_id` int(11) NOT NULL,
  `realisateur_id` int(11) NOT NULL,
  `date_de _sortie` date NOT NULL,
  `duree` int(6) NOT NULL,
  `langue_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `realisateur_id` (`realisateur_id`),
  KEY `genre_id` (`genre_id`),
  KEY `langue_id` (`langue_id`)
) ENGINE=InnoDB AUTO_INCREMENT=40 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `movie`
--

INSERT INTO `movie` (`id`, `title`, `description`, `poster`, `trailer`, `genre_id`, `realisateur_id`, `date_de _sortie`, `duree`, `langue_id`) VALUES
(1, 'NUN', 'Les membres de l\'Eglise catholique sont stupefaits a l\'annonce du suicide d\'une jeune nonne dans une abbaye roumaine. Aussitot, un pretre et un novice sont depeches sur place par le Vatican pour mener l\'enquete. Les deux ecclesiastiques vont devoir affronter une nonne demoniaque qui menace de detruire leur ame et l\'abbaye va devenir le theatre d\'une lutte acharnee entre les vivants et les damnes.', 'nun.jpg', 'pzD9zGcUNrw', 6, 3, '2019-01-01', 13000, 1),
(2, 'Le Grinch', 'Le Grinch ou Le Grincheux au Quebec est un film americain d\'animation realise par Yarrow Cheney et Scott Mosier, sorti en 2018. C\'est la troisieme adaptation de la nouvelle de Theodor Seuss Geisel Le Grincheux qui voulait gacher Noel apres le court-metrage anime Comment le Grinch a vole Noel! en 1966 et le film Le Grinch en 2000.', 'grinch.jpg', 'Bf6D-i8YpHg', 3, 5, '2019-01-01', 12600, 1),
(3, 'Venom', 'Alors qu\'il mene une enquete sur le dirigeant de la societe Life Foundation, qui conduit des experiences sur des humains a l\'aide de materiaux extraterrestres, le journaliste Eddie Brock est infecte par un symbiote. Celui-ci prend progressivement le controle de son esprit et de son corps jusqu\'a agir de facon totalement autonome. Le journaliste Eddie Brock laisse alors sa place au protecteur letal Venom.', 'venom.jpg', 'xLCn88bfW1o', 5, 5, '2019-01-01', 15200, 1),
(5, 'Superman vs Batman', 'Craignant que Superman n\'abuse de sa toute-puissance, le Chevalier noir décide de l\'affronter : le monde a-t-il davantage besoin d\'un super-héros aux pouvoirs sans limite ou d\'un justicier à la force redoutable mais d\'origine humaine ? Pendant ce temps-là, une terrible menace se profile à l\'horizon.', 'batman_v_superman_dawn_of_justice_ver12.jpg', 'NAk1BGZQnk0', 1, 1, '2019-01-30', 112, 1),
(6, 'the skin i live in', 'Hanté par les drames de son passé, le docteur Robert Ledgard mène d\'étranges expériences médicales. En effet, depuis que son épouse a été victime de brûlures lors d\'un accident, l\'éminent chirurgien esthétique tente de mettre au point un nouvel épiderme, une peau sensible mais très résistante, capable de protéger l\'être qui la revêt. Afin de tester ses recherches, Robert fait appel à un cobaye humain.', 'the_skin_i_live_in.jpg', 'EolQSTTTpI4', 1, 1, '2019-01-01', 133, 1),
(8, 'AQUAMAN', 'Les origines d’un héros malgré lui, dont le destin est d’unir deux mondes opposés, la terre et la mer. Cette histoire épique est celle d’un homme ordinaire destiné à devenir le roi des Sept Mers.', '2738771.jpg-c_215_290_x-f_jpg-q_x-xxyxx.jpg', 'WDkg3h8PCVU', 1, 6, '2018-12-19', 187, 1),
(12, 'BUMBLEBEE', '1987. Alors qu\'il est en fuite, l\'Autobot Bumblebee trouve refuge dans la décharge d\'une petite ville balnéaire de Californie. Il est découvert, brisé et couvert de blessures de guerre, par Charlie, une ado qui approche de ses 18 ans et cherche sa place dans le monde. Et quand elle le met en marche, elle se rend vite compte qu\'il ne s\'agit pas d\'une voiture jaune ordinaire.', '5168605.jpg-c_215_290_x-f_jpg-q_x-xxyxx.jpg', 'fAIX12F6958', 6, 6, '2019-01-15', 156, 2),
(35, 'Bird Box', 'Bird Box, ou Froid aux yeux au Quebec, est un thriller post-apocalyptique americain realise par Susanne Bier, sorti en 2018. Il s’agit de l’adaptation du roman eponyme de Josh Malerman. ', 'bird_box.jpg', 'MPWMBITCudM', 6, 5, '2019-01-01', 20400, 1),
(36, 'Halloween', 'Alors qu\'une equipe de television anglaise realise un reportage aux etats-Unis sur le massacre perpetre par Michael Myers la nuit d\'Halloween 1978, celui-ci s\'echappe de l\'asile de fous ou il etait enferme. Il est obsede par l\'idee de se venger de la seule survivante du massacre, Laurie Strode. Celle-ci se prepare à affronter une derniere fois le psychopathe, au point de negliger sa fille et sa petite-fille.', 'halloweenn1.jpg', '2QG-55EKRcs', 6, 12, '2019-01-01', 14600, 1),
(37, 'Redcon-1', 'Une mission-suicide pour exfiltrer un scientifique, prisonnier d\'une ville peuplee de morts vivants.', 'red1.jpg', 'GW985z-yAH8', 6, 13, '2019-01-01', 15500, 1),
(38, 'Upgrade', 'Suite a une violente agression qui l\'a laisse veuf et paralyse, Grey Trace est contacte par un inventeur richissime qui lui offre un remede miracle experimental capable d\'upgrader son corps. Grey se fait greffer un implant pilote par l\'intelligence artificielle et voit ses facultes physiques decuplees. Il decide de mettre sa remission corporelle au service de sa soif de', 'up1.jpg', 'G9fXbkiKfmY', 5, 14, '2019-01-01', 14000, 1),
(39, 'Skyscraper', 'Veteran de guerre et ancien chef d\'equipe de liberation d\'otages du FBI, Will est aujourd\'hui responsable de la securite des gratte-ciels en Chine. Quand il decouvre le batiment le plus sur du monde en feu, il est accuse d\'avoir declenche l\'incendie. Alors qu\'il est desormais un fugitif, Will doit retrouver les coupables, s\'innocenter et porter secours a sa famille qui se trouve a l\'interieur du batiment.', 'sky1.jpg', 't9QePUT-Yt8', 1, 15, '2019-01-01', 14200, 1);

-- --------------------------------------------------------

--
-- Structure de la table `newsletter`
--

DROP TABLE IF EXISTS `newsletter`;
CREATE TABLE IF NOT EXISTS `newsletter` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(300) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `newsletter`
--

INSERT INTO `newsletter` (`id`, `email`) VALUES
(1, 'imanekaab@gmail.com');

-- --------------------------------------------------------

--
-- Structure de la table `realisateur`
--

DROP TABLE IF EXISTS `realisateur`;
CREATE TABLE IF NOT EXISTS `realisateur` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `full_name` varchar(100) NOT NULL,
  `nationalite` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `realisateur`
--

INSERT INTO `realisateur` (`id`, `full_name`, `nationalite`) VALUES
(1, 'Ben Singer', 'Americain'),
(2, 'Tim Miller', 'Americain'),
(3, 'Rob Marshall', 'Amricain'),
(4, 'Gilles de Maistre', 'Français'),
(5, '', ''),
(6, 'James Wan', 'Americain'),
(7, 'Corin Hardy', 'American'),
(8, 'Travis Knight', 'Americain'),
(9, 'Scott Mosier', 'American'),
(10, 'Ruben Fleischer', 'Americain'),
(11, 'Susanne Bier', 'American'),
(12, 'David Gordon Green', 'Americain'),
(13, 'Chee Keong Cheung', 'Americain'),
(14, 'Leigh Whannell', 'Americain'),
(15, 'Rawson Marshall Thurber', 'Americain');

-- --------------------------------------------------------

--
-- Structure de la table `salle`
--

DROP TABLE IF EXISTS `salle`;
CREATE TABLE IF NOT EXISTS `salle` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `numero` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `salle`
--

INSERT INTO `salle` (`id`, `numero`) VALUES
(1, 1),
(2, 2),
(3, 12),
(4, 4);

-- --------------------------------------------------------

--
-- Structure de la table `session`
--

DROP TABLE IF EXISTS `session`;
CREATE TABLE IF NOT EXISTS `session` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `date` datetime NOT NULL,
  `id_film` int(11) NOT NULL,
  `id_salle` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id_film` (`id_film`),
  KEY `id_salle` (`id_salle`)
) ENGINE=InnoDB AUTO_INCREMENT=79 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `session`
--

INSERT INTO `session` (`id`, `date`, `id_film`, `id_salle`) VALUES
(66, '2018-12-04 12:00:00', 5, 3),
(68, '2019-01-05 08:27:00', 6, 1),
(69, '2019-01-11 02:19:00', 5, 1),
(70, '2019-01-12 02:19:00', 5, 3),
(71, '2019-01-11 02:19:00', 5, 1),
(73, '2019-01-12 02:20:07', 6, 1),
(75, '2019-01-16 00:00:00', 5, 2),
(76, '2019-01-17 00:00:00', 12, 2),
(77, '2019-01-18 00:00:00', 3, 2),
(78, '2019-01-19 00:00:00', 12, 1);

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `evenement`
--
ALTER TABLE `evenement`
  ADD CONSTRAINT `evenement_ibfk_1` FOREIGN KEY (`id_salle`) REFERENCES `salle` (`id`),
  ADD CONSTRAINT `evenement_ibfk_2` FOREIGN KEY (`id_type`) REFERENCES `evenement_type` (`id`);

--
-- Contraintes pour la table `film_de_jour`
--
ALTER TABLE `film_de_jour`
  ADD CONSTRAINT `film_de_jour_ibfk_2` FOREIGN KEY (`genre_id`) REFERENCES `genre` (`GenreID`),
  ADD CONSTRAINT `film_de_jour_ibfk_4` FOREIGN KEY (`langue_id`) REFERENCES `langue` (`id`),
  ADD CONSTRAINT `film_de_jour_ibfk_6` FOREIGN KEY (`realisateur_id`) REFERENCES `realisateur` (`id`);

--
-- Contraintes pour la table `movie`
--
ALTER TABLE `movie`
  ADD CONSTRAINT `movie_ibfk_2` FOREIGN KEY (`genre_id`) REFERENCES `genre` (`GenreID`),
  ADD CONSTRAINT `movie_ibfk_3` FOREIGN KEY (`langue_id`) REFERENCES `langue` (`id`),
  ADD CONSTRAINT `movie_ibfk_4` FOREIGN KEY (`realisateur_id`) REFERENCES `realisateur` (`id`);

--
-- Contraintes pour la table `session`
--
ALTER TABLE `session`
  ADD CONSTRAINT `session_ibfk_2` FOREIGN KEY (`id_salle`) REFERENCES `salle` (`id`),
  ADD CONSTRAINT `session_ibfk_3` FOREIGN KEY (`id_film`) REFERENCES `movie` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
