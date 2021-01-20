-- --------------------------------------------------------
-- Hôte :                        localhost
-- Version du serveur:           5.7.24 - MySQL Community Server (GPL)
-- SE du serveur:                Win64
-- HeidiSQL Version:             9.5.0.5332
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Listage de la structure de la base pour lesptitspouces
CREATE DATABASE IF NOT EXISTS `lesptitspouces` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `lesptitspouces`;

-- Listage de la structure de la table lesptitspouces. article
CREATE TABLE IF NOT EXISTS `article` (
  `id_article` int(11) NOT NULL AUTO_INCREMENT,
  `id_tva` int(11) NOT NULL,
  `id_marque` int(11) NOT NULL,
  `id_categorie` int(11) NOT NULL,
  `titre` varchar(255) NOT NULL,
  `extrait` varchar(255) NOT NULL,
  `detail` varchar(255) DEFAULT NULL,
  `contenu_article` longtext NOT NULL,
  `image` varchar(50) NOT NULL,
  `prixTTC` decimal(10,2) NOT NULL,
  `prixHT` decimal(10,0) NOT NULL,
  `newarticle` tinyint(4) NOT NULL,
  `slug` varchar(255) NOT NULL,
  PRIMARY KEY (`id_article`),
  KEY `prix` (`prixTTC`),
  KEY `FK_articles_categorie` (`id_categorie`),
  KEY `FK_articles_marques` (`id_marque`),
  KEY `FK_articles_tva` (`id_tva`),
  CONSTRAINT `FK_articles_categorie` FOREIGN KEY (`id_categorie`) REFERENCES `categorie` (`id_categorie`) ON UPDATE CASCADE,
  CONSTRAINT `FK_articles_marques` FOREIGN KEY (`id_marque`) REFERENCES `marque` (`id_marque`) ON UPDATE CASCADE,
  CONSTRAINT `FK_articles_tva` FOREIGN KEY (`id_tva`) REFERENCES `tva` (`id_tva`) ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- Listage des données de la table lesptitspouces.article : ~2 rows (environ)
/*!40000 ALTER TABLE `article` DISABLE KEYS */;
REPLACE INTO `article` (`id_article`, `id_tva`, `id_marque`, `id_categorie`, `titre`, `extrait`, `detail`, `contenu_article`, `image`, `prixTTC`, `prixHT`, `newarticle`, `slug`) VALUES
	(1, 1, 1, 1, 'Poule Poule', 'Jeu d\'observation et de rapidité à partir de 8 ans', 'À partir de 8 ans\r\nDe 2 à 8 joueurs\r\nEnviron 20 min\r\nRègles rapides ~ Fun dès les premières  manches ~ Évolutif et addictif', 'Poule poule de Oka Luda, un jeu de cartes à partir de 8 ans où vous devrez faire preuve d\'observation et de rapidité pour compter les oeufs.\r\n\r\nLe réalisateur, appelé le "Maître Poule Poule", va empiler les cartes, une par une, les unes sur les autres au centre de la table. Pendant ce temps, les autres joueurs devront "juste" compter les oeufs "disponibles" et être le premier à taper sur le tas dès qu’il y en a 5… facile non? \r\nAttendez-vous à quelques perturbations tout de même… car : Lorsqu\'une poule vient couver un oeuf, il disparait! Lorsqu\'un renard chasse une poule, elle s\'enfuit... et l\'oeuf réapparait!\r\n\r\nEt c\'est sans compter sur le reste du casting... comprenant : Rico Coco (le coq au passé tumultueux), Waf (le cousin de Paf), Tiger Worm (le ver qui fera son trou), Crack et Double (qui ont bien l\'intention de percer... leur coquille), Coin (l’ambitieux canard bruyant), \r\nGrrr (qui essaye de se faire passer pour une poule), et le Fermier...', 'pixie\\Poule-Poule.jpg', 15.00, 0, 1, 'poule'),
	(2, 1, 2, 1, 'chat moutarde Lulu ', 'Doudou chat moutarde Lulu Les Moustaches Moulin Roty', 'Dimension du produit	22 cm\r\nDétails des matières	coton, polyester, élasthanne\r\nConseils d\'entretien	lavage en machine à 30 degrés (en cycle laine)\r\nCouleur	Jaune\r\nAge	Dès la naissance', 'Ce beau doudou tout doux Lulu de la collection Les Moustaches fera le bonheur de votre petit. Ce compagnon de forme carrée est en velours couleur moutarde d\'un côté et en tissu rayé de l\'autre. Ce matou possède une attache-tétine afin de pas égarer la sucette de bébé. Avec ce doudou chat facile à tenir par les petites mains, bébé fera le plein de douceur et de câlins . Ce matou peut être peut être personnalisé au prénom de votre enfant grâce à une broderie réalisée par nos services. Il y a un choix de 3 polices d\'écritures et de 3 couleurs de fil pour un cadeau de naissance unique et original. Ne pas mettre au sèche-linge. Dès la naissance.', 'moulin\\chat_moutarde_Lulu_Les_Moustaches.jpg', 9.99, 0, 1, 'lulu');
/*!40000 ALTER TABLE `article` ENABLE KEYS */;

-- Listage de la structure de la table lesptitspouces. banniere
CREATE TABLE IF NOT EXISTS `banniere` (
  `id_banniere` int(11) NOT NULL AUTO_INCREMENT,
  `image` varchar(50) NOT NULL,
  PRIMARY KEY (`id_banniere`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Listage des données de la table lesptitspouces.banniere : ~0 rows (environ)
/*!40000 ALTER TABLE `banniere` DISABLE KEYS */;
/*!40000 ALTER TABLE `banniere` ENABLE KEYS */;

-- Listage de la structure de la table lesptitspouces. categorie
CREATE TABLE IF NOT EXISTS `categorie` (
  `id_categorie` int(11) NOT NULL AUTO_INCREMENT,
  `code` varchar(50) DEFAULT NULL,
  `description` text NOT NULL,
  PRIMARY KEY (`id_categorie`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

-- Listage des données de la table lesptitspouces.categorie : ~3 rows (environ)
/*!40000 ALTER TABLE `categorie` DISABLE KEYS */;
REPLACE INTO `categorie` (`id_categorie`, `code`, `description`) VALUES
	(1, 'doudou', 'lapin'),
	(2, 'cartable', 'fresk'),
	(3, 'jeux de socitete', 'jeux');
/*!40000 ALTER TABLE `categorie` ENABLE KEYS */;

-- Listage de la structure de la table lesptitspouces. marque
CREATE TABLE IF NOT EXISTS `marque` (
  `id_marque` int(11) NOT NULL AUTO_INCREMENT,
  `titre` varchar(255) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id_marque`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- Listage des données de la table lesptitspouces.marque : ~3 rows (environ)
/*!40000 ALTER TABLE `marque` DISABLE KEYS */;
REPLACE INTO `marque` (`id_marque`, `titre`) VALUES
	(1, 'Pixie'),
	(2, 'Moulin Roty');
/*!40000 ALTER TABLE `marque` ENABLE KEYS */;

-- Listage de la structure de la table lesptitspouces. slider
CREATE TABLE IF NOT EXISTS `slider` (
  `id_slider` int(11) NOT NULL AUTO_INCREMENT,
  `image` varchar(50) NOT NULL,
  PRIMARY KEY (`id_slider`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Listage des données de la table lesptitspouces.slider : ~0 rows (environ)
/*!40000 ALTER TABLE `slider` DISABLE KEYS */;
/*!40000 ALTER TABLE `slider` ENABLE KEYS */;

-- Listage de la structure de la table lesptitspouces. tva
CREATE TABLE IF NOT EXISTS `tva` (
  `id_tva` int(11) NOT NULL AUTO_INCREMENT,
  `valeur_tva` decimal(10,0) NOT NULL,
  PRIMARY KEY (`id_tva`),
  KEY `FK_tva_articles` (`valeur_tva`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- Listage des données de la table lesptitspouces.tva : ~2 rows (environ)
/*!40000 ALTER TABLE `tva` DISABLE KEYS */;
REPLACE INTO `tva` (`id_tva`, `valeur_tva`) VALUES
	(1, 20);
/*!40000 ALTER TABLE `tva` ENABLE KEYS */;

-- Listage de la structure de la table lesptitspouces. user
CREATE TABLE IF NOT EXISTS `user` (
  `id_client` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL DEFAULT '0',
  `name` varchar(255) NOT NULL,
  `adresse` varchar(255) NOT NULL,
  `adress_sup` varchar(255) DEFAULT NULL,
  `postal` int(11) NOT NULL,
  `ville` varchar(255) NOT NULL,
  `pays` varchar(255) DEFAULT NULL,
  `phone` int(11) NOT NULL,
  `societe` varchar(255) DEFAULT NULL,
  `email` varchar(255) NOT NULL DEFAULT '0',
  `password` varchar(255) NOT NULL DEFAULT '0',
  `date_inscription` datetime NOT NULL,
  `role` text,
  `confirmation_token` varchar(60) DEFAULT NULL,
  `confirmed_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id_client`),
  UNIQUE KEY `email` (`email`),
  UNIQUE KEY `username` (`username`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- Listage des données de la table lesptitspouces.user : ~0 rows (environ)
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
REPLACE INTO `user` (`id_client`, `username`, `name`, `adresse`, `adress_sup`, `postal`, `ville`, `pays`, `phone`, `societe`, `email`, `password`, `date_inscription`, `role`, `confirmation_token`, `confirmed_at`) VALUES
	(1, 'moi', 'moi', 'moi', NULL, 49, 'ici', NULL, 7, NULL, 'moi', 'moi', '2020-12-21 16:56:37', NULL, NULL, NULL);
/*!40000 ALTER TABLE `user` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
