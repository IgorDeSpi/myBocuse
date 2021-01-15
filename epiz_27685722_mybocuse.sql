-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Hôte : sql303.epizy.com
-- Généré le :  ven. 15 jan. 2021 à 07:56
-- Version du serveur :  5.6.48-88.0
-- Version de PHP :  7.2.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `epiz_27685722_mybocuse`
--

-- --------------------------------------------------------

--
-- Structure de la table `mybocuse`
--

CREATE TABLE `mybocuse` (
  `id` int(11) NOT NULL,
  `statut` varchar(255) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `pass` text NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `mybocuse`
--

INSERT INTO `mybocuse` (`id`, `statut`, `first_name`, `last_name`, `pass`, `email`) VALUES
(1, 'Chef', 'Jean-Pierre', 'Coffe', '9a2946998b1d90dbb8b7880edf5b963951cf53dc', 'jean-pierrecoffe@gmail.com'),
(2, 'Learner', 'Jimmy', 'Cliff', '9a2946998b1d90dbb8b7880edf5b963951cf53dc', 'jimmycliff@gmail.com'),
(3, 'Learner', 'Killian', 'Mbappe', '9a2946998b1d90dbb8b7880edf5b963951cf53dc', 'killian@gmail.com'),
(4, 'Learner', 'Henry', 'Quatre', '9a2946998b1d90dbb8b7880edf5b963951cf53dc', 'henry@gmail.com'),
(5, 'Chef', 'Emily', 'Marghella', '9ab1c60e6692826ab55d2871885b06415601bc47', 'emily@becode.org'),
(6, 'Chef', 'Kelian', 'Christophe', '125dd4515ff054641466ebf5db0645ac55c423f6', 'kill@becode.org');

-- --------------------------------------------------------

--
-- Structure de la table `pointage`
--

CREATE TABLE `pointage` (
  `id` int(11) NOT NULL,
  `user` varchar(255) NOT NULL,
  `jour` date NOT NULL,
  `startTime` time NOT NULL,
  `finish` time NOT NULL,
  `nomP` varchar(255) NOT NULL,
  `prenomP` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `pointage`
--

INSERT INTO `pointage` (`id`, `user`, `jour`, `startTime`, `finish`, `nomP`, `prenomP`) VALUES
(326, '4', '2021-01-14', '07:15:53', '06:26:45', 'Quatre', 'Henry'),
(328, '2', '2021-01-15', '03:36:47', '06:26:45', 'Cliff', 'Jimmy');

-- --------------------------------------------------------

--
-- Structure de la table `recette`
--

CREATE TABLE `recette` (
  `id` int(11) NOT NULL,
  `userID` varchar(255) NOT NULL,
  `dateR` date NOT NULL,
  `titre` varchar(255) NOT NULL,
  `contenu` text NOT NULL,
  `prenom` varchar(255) NOT NULL,
  `nom` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `recette`
--

INSERT INTO `recette` (`id`, `userID`, `dateR`, `titre`, `contenu`, `prenom`, `nom`) VALUES
(99, '1', '2021-01-01', 'Tacos mexicains', 'A la poêle, faire dorer l\'oignon émincé dans un peu d\'huile d\'olive.\r\nRajouter la viande, assaisonner et laisser cuire 5 min.\r\nLaver les feuilles de laitue.\r\nCouper les tomates et le poivron en petits dés.\r\nIncorporer le tout à la poêlée avec le coulis de tomate, et poursuivre la cuisson pendant 5 min.\r\nEgoutter les haricots rouges et les ajouter 2 min avant la fin de cuisson.\r\nHors du feu, ajuster l\'assaisonnement et saupoudrer généreusement de cumin; on peut aussi rajouter quelques gouttes de Tabasco.\r\nGarnir les tortillas de préparation et les refermer en les roulant comme des crêpes. Disposer 1 feuille de laitue sur chaque tacos avant de servir.', 'Jean-Pierre', 'Coffe'),
(100, '1', '2021-01-02', 'Velouté de Potiron et Carottes', 'Éplucher et couper en dés le potiron, les pommes de terre, les carottes en rondelles.\r\nEmincer l\'ail et l\'oignon.\r\nFaire suer l\'oignon dans l\'huile d\'olive.\r\nAjouter tous les légumes et l\'ail puis verser le bouillon et le lait.\r\nSaler, poivrer, \"muscader\" et laisser cuire environ une trentaine de minutes.\r\nMixer le tout (ajouter éventuellement la crème) et rectifier l\'assaisonnement si nécessaire.\r\nBon appétit !', 'Jean-Pierre', 'Coffe'),
(101, '2', '2021-01-03', 'Flan de courgettes', 'Couper les courgettes en très fines rondelles. Les faire revenir dans de l\'huile d\'olive. Saler, poivrer, cuire environ 10 mm à petit feu.\r\nBattre les oeufs et ajouter le fromage + sel + poivre + basilic + lait.\r\nJeter la préparation sur les courgettes. Remuer. NE PAS FAIRE PRENDRE \"L\'OMELETTE\".\r\nMettre au four 180°C pendant 35 mn.\r\nSERVIR FROID OU CHAUD avec une sauce mayonnaise + ketchup hot.', 'Jimmy', 'Cliff'),
(102, '2', '2021-01-04', 'Gaspacho au Thermomix', 'Éplucher les tomates (facultatif), un demi-concombre, un oignon, une gousse d’ail, ainsi que le poivron, puis les placer dans le bol du Thermomix.\r\nMixer 1 minute à vitesse 8 (bien tenir le Thermomix car avec tout ça, il risque de bouger un peu), puis 1 minute à vitesse 5.\r\nRajouter le pain, l’huile, le vinaigre, le piment et le sel. Mixer 30 secondes à vitesse 8.\r\nRajouter de l’eau jusqu’à obtenir la consistance qui vous plaît.\r\nGoûter, puis rectifier l’assaisonnement (plus de sel, ou un peu de sucre si les tomates ne sont pas assez sucrées). Mixer à 20 secondes à vitesse 8 et goûter à nouveau.\r\nRecommencer jusqu’à obtenir le goût et la consistance souhaités.', 'Jimmy', 'Cliff'),
(103, '2', '2021-01-05', 'Salade César', 'Faites dorer le pain, coupé en cubes, 3 min dans un peu d\'huile.\r\nDéchirez les feuilles de romaine dans un saladier, et ajoutez les croûtons préalablement épongés dans du papier absorbant.\r\nPréparez la sauce :\r\nFaites cuire l\'oeuf 1 min 30 dans l\'eau bouillante, et rafraîchissez-le.\r\nCassez-le dans le bol d\'un mixeur et mixez, avec tous les autres ingrédients; rectifiez l\'assaissonnement et incorporez à la salade.\r\nDécorez de copeaux de parmesan, et servez.', 'Jimmy', 'Cliff'),
(105, '2', '2021-01-06', 'Caviar d\'aubergines', 'Cuire les aubergines à l\'eau bouillante, avec 3 petites cuillères de sel, pendant 10-15 mn jusqu\'à ce qu\'elles soient tendres.\r\nLes retirer, et les laisser égoutter et refroidir dans une passoire. Les hacher très finement jusqu\'à ce qu\'elles prennent une consistance crémeuse.\r\nChauffer l\'huile dans une poêle et y faire revenir l\'aubergine avec l\'ail. Saler et poivrer, ajouter le paprika et la marjolaine.\r\nMélanger et faire réduire à feu doux, en remuant fréquemment avec une spatule de bois jusqu\'à obtention d\'une purée.\r\nVerser dans un plat, arroser d\'un peu d\'huile d\'olive, saupoudrez de cumin, garnir d\'olives et servir.', 'Jimmy', 'Cliff'),
(106, '4', '2021-01-07', 'Velouté de butternut à la cannelle', 'Couper le butternut en gros cubes.\r\nCouper grossièrement l\'oignon.\r\nFaire revenir l\'oignon et le butternut dans un fond de beurre. Remuer régulièrement (il ne faut pas que l\'oignon roussisse). Une fois que les légumes sont bien revenus, émietter un cube de bouillon au-dessus.\r\nBien remuer pour laisser les légumes s\'imprégner du bouillon.\r\nRecouvrir d\'eau bouillante, juste au-dessus des légumes.\r\nLaisser cuire jusque que le butternut soit cuit (planter un couteau pour vérifier la cuisson).\r\nMixer. Ajouter une ou deux cuillères de crème fraiche. Saler et poivrer.\r\nAjouter un soupçon de cannelle.\r\nC\'est prêt et c\'est délicieux !', 'Henry', 'Quatre'),
(107, '4', '2021-01-08', 'Oeufs mimosa', 'Faire cuire les oeufs 10 mn dans l\'eau bouillante, puis les mettre dans l\'eau froide pour arrêter la cuisson.\r\nMonter une mayonnaise avec 1 jaune d\'oeuf, 1 cuillère à café de moutarde, 1/4 l d\'huile et du jus de citron (facultatif), ou utiliser une mayonnaise prête vendue dans le commerce. Le jus de citron s\'ajoute au dernier moment.\r\nEcaler les oeufs, les couper dans le sens de la longueur, puis Séparer les blancs des jaunes.\r\nDans une assiette creuse, émietter les jaunes à la fourchette, mélanger la moitié de ces jaunes émiettés avec la mayonnaise et réserver le reste.\r\nRemplir les demi-blancs de cette préparation, puis saupoudrer chaque demi-oeuf du reste de jaunes émiettés (ce qui fait le mimosa !!).\r\nDisposer les oeufs sur des feuilles de laitue, mettre sur chaque oeuf un peu de persil et une olive noire.\r\nServir frais.', 'Henry', 'Quatre'),
(108, '4', '2021-01-09', 'Rouleaux de printemps', 'Plongez les galettes de riz dans de l\' eau chaude pendant quelques secondes pour qu\'elles deviennent molles puis laissez légèrement égoutter.\r\nCuire le porc et les crevettes dans de l\'eau chaude.\r\nEtalez la galette de riz sur une table de travail.\r\nCommencez par mettre une feuille de salade et quelques feuilles de menthe.\r\nMettez ensuite les vermicelles de riz.\r\nPuis le porc.\r\nEnroulez le rouleau et au dernier tour mettez 3 crevettes préalablement coupées en 2 .', 'Henry', 'Quatre'),
(109, '4', '2021-01-10', 'Pissaladière', 'Dans une grande poêle profonde faire chauffer 5 cuillères à soupe d\'huile d\'olive.\r\nCouper les oignons en rondelles.\r\nUne fois que l\'huile est chaude vous pouvez mettre les oignons dans la poêle, ajoutez du poivre, les herbes de Provence et le sucre en poudre. Il ne faut surtout pas mettre de sel car il y aura les anchois. Le sucre est indispensable pour enlever l\'acidité de l\'oignon.\r\nFaites revenir les oignons jusqu\'à que leur couleur soit légèrement jaune. Il ne faut pas qu\'ils reviennent de trop car ils vont encore cuire dans le four.\r\nLe secret de la Pissaladière est là. Il faut garder quelques filets d\'anchois et mettre le reste dans la poêle avec les oignons. Les anchois vont fondre à la chaleur et se mélanger aux oignons. Si vous pouvez ajouter une cuillère à soupe de l\'huile des anchois dans la préparation ce sera meilleur.\r\nVous pouvez étaler la pâte à pain sur une plaque de four huilée à l\'huile d\'olive.\r\nVersez votre préparation sur la pâte et mettez des anchois et des olives pour la décoration.\r\nPréchauffez votre four à 220°C et mettre ensuite la pissaladière.\r\nPour le temps de cuisson dès que la pâte à pain est cuite (voir aux bords de la pâte) vous pouvez sortir votre pissaladière.\r\nIl faut laisser la pissaladière refroidir car elle se déguste froide.\r\nVous pouvez l\'accompagner d\'une salade frisée et d\'un Bandol rosé c\'est excellent.', 'Henry', 'Quatre'),
(110, '4', '2021-01-11', 'Quiche à l\'oignon et aux lardons fumés', 'Eplucher les oignons et les couper en rondelles.\r\nLes mettre dans le beurre chaud, et faire cuire sans prendre de couleur (pour ce faire, les mettre à froid dans le beurre qui n\'est pas encore fondu); ajouter les lardons, saler et poivrer.\r\nFoncer un plat à tarte avec la pâte.\r\nBattre la crème fraîche avec les oeufs dans un saladier, saler et poivrer, puis ajouter les oignons cuits.\r\nVerser la préparation dans le moule à tarte, mettre au four (thermostat 7/210°C), et faire cuire 30 min.\r\nServir chaud.', 'Henry', 'Quatre'),
(115, '1', '2021-01-15', 'Bruschetta', '1. Découper les tomates en petits dés après avoir retiré la partie verte en haut, les mettre dans un petit saladier avec une bonne huile d\'olive et du sel. \r\n\r\n2.Faire griller les tranches de pain de campagne, puis les frotter d\'ail. \r\n\r\n3.Disposer le mélange tomate/huile d\'olive généreusement sur la tartine, à déguster aussitôt (tiède).', 'Jean-Pierre', 'Coffe'),
(116, '6', '2021-01-14', 'La vraie tartiflette', 'Eplucher les pommes de terre, les couper en dés, bien les rincer et les essuyer dans un torchon propre.\r\nFaire chauffer l\'huile dans une poêle, y faire fondre les oignons.\r\nLorsque les oignons sont fondus, ajouter les pommes de terre et les faire dorer de tous les côtés.\r\nLorsqu\'elles sont dorées, ajouter les lardons et finir de cuire.\r\nD\'autre part, gratter la croûte du reblochon et le couper en deux (ou en quatre).\r\nPréchauffer le four à 200°C (thermostat 6-7) et préparer un plat à gratin en frottant le fond et les bords avec la gousse d\'ail épluchée.\r\nDans le plat à gratin, étaler une couche de pommes de terre aux lardons, disposer dessus la moitié du reblochon, puis de nouveau des pommes de terre. Terminer avec le reste du reblochon (croûte vers les pommes de terre).\r\nEnfourner pour environ 20 minutes de cuisson', 'Kelian', 'Christophe'),
(117, '5', '2021-01-13', 'Fondue Savoyarde', 'Coupez les 3 fromages en petits dés.\r\nFrottez le caquelon avec la gousse d\'ail et laissez-la dedans.\r\nVersez 25 cl de vin blanc et faites chauffer.\r\nDans un petit récipient, versez le vin blanc restant (5 cl), la Maïzena et la noix de muscade. Remuez et réservez.\r\nLorsque le vin \'frétille\', versez le fromage (en plusieurs fois) sans cesser de remuer (avec une spatule en bois) sur feu doux/moyen.\r\nLorsque le fromage est bien fondu, versez le verre vin/Maïzena/muscade et continuez de remuer doucement.\r\nLa préparation commence à être onctueuse et mousseuse, toujours un peu liquide. Poivrez et versez le kirsch. C\'est prêt à servir!\r\nLe jaune d\'oeuf est à mettre dans le caquelon lorsqu\'il ne reste plus de liquide, afin d erécupérer le reste du fromage au fond.', 'Emily', 'Marghella');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `mybocuse`
--
ALTER TABLE `mybocuse`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `pointage`
--
ALTER TABLE `pointage`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `recette`
--
ALTER TABLE `recette`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `mybocuse`
--
ALTER TABLE `mybocuse`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT pour la table `pointage`
--
ALTER TABLE `pointage`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=329;

--
-- AUTO_INCREMENT pour la table `recette`
--
ALTER TABLE `recette`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=118;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
