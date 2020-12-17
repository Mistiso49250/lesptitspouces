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

-- Listage de la structure de la table lesptitspouces. admin
CREATE TABLE IF NOT EXISTS `admin` (
  `id_admin` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `role` text,
  PRIMARY KEY (`id_admin`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- Listage des données de la table lesptitspouces.admin : ~1 rows (environ)
/*!40000 ALTER TABLE `admin` DISABLE KEYS */;
REPLACE INTO `admin` (`id_admin`, `name`, `password`, `role`) VALUES
	(1, 'Anne-Céline', '$2y$12$bwerKYDVFPyikJ1pcGsar.Ze7XnIBtM6SUh/A/2J.I3YbrGM1DNQW', 'admin');
/*!40000 ALTER TABLE `admin` ENABLE KEYS */;

-- Listage de la structure de la table lesptitspouces. articles
CREATE TABLE IF NOT EXISTS `articles` (
  `id_article` int(11) NOT NULL AUTO_INCREMENT,
  `id_tva` int(11) NOT NULL,
  `id_marque` int(11) NOT NULL,
  `id_categorie` int(11) NOT NULL,
  `titre` varchar(255) NOT NULL,
  `extrait` varchar(255) NOT NULL,
  `contenu_article` longtext NOT NULL,
  `image` varchar(50) NOT NULL,
  `prixTTC` decimal(10,0) NOT NULL,
  `prixHT` decimal(10,0) NOT NULL,
  `newarticle` tinyint(4) NOT NULL,
  PRIMARY KEY (`id_article`),
  KEY `prix` (`prixTTC`),
  KEY `FK_articles_categorie` (`id_categorie`),
  KEY `FK_articles_marques` (`id_marque`),
  KEY `FK_articles_tva` (`id_tva`),
  CONSTRAINT `FK_articles_categorie` FOREIGN KEY (`id_categorie`) REFERENCES `categorie` (`id_categorie`) ON UPDATE CASCADE,
  CONSTRAINT `FK_articles_marques` FOREIGN KEY (`id_marque`) REFERENCES `marques` (`id_marque`) ON UPDATE CASCADE,
  CONSTRAINT `FK_articles_tva` FOREIGN KEY (`id_tva`) REFERENCES `tva` (`id_tva`) ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- Listage des données de la table lesptitspouces.articles : ~1 rows (environ)
/*!40000 ALTER TABLE `articles` DISABLE KEYS */;
REPLACE INTO `articles` (`id_article`, `id_tva`, `id_marque`, `id_categorie`, `titre`, `extrait`, `contenu_article`, `image`, `prixTTC`, `prixHT`, `newarticle`) VALUES
	(1, 1, 1, 1, 'poule', 'poule', 'poule', 'pixie\\Poule-Poule.jpg', 15, 0, 1);
/*!40000 ALTER TABLE `articles` ENABLE KEYS */;

-- Listage de la structure de la table lesptitspouces. bannieres
CREATE TABLE IF NOT EXISTS `bannieres` (
  `id_banniere` int(11) NOT NULL AUTO_INCREMENT,
  `image` varchar(50) NOT NULL,
  PRIMARY KEY (`id_banniere`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Listage des données de la table lesptitspouces.bannieres : ~0 rows (environ)
/*!40000 ALTER TABLE `bannieres` DISABLE KEYS */;
/*!40000 ALTER TABLE `bannieres` ENABLE KEYS */;

-- Listage de la structure de la table lesptitspouces. categorie
CREATE TABLE IF NOT EXISTS `categorie` (
  `id_categorie` int(11) NOT NULL AUTO_INCREMENT,
  `code` varchar(50) DEFAULT NULL,
  `description` text NOT NULL,
  PRIMARY KEY (`id_categorie`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- Listage des données de la table lesptitspouces.categorie : ~2 rows (environ)
/*!40000 ALTER TABLE `categorie` DISABLE KEYS */;
REPLACE INTO `categorie` (`id_categorie`, `code`, `description`) VALUES
	(1, 'doudou', 'lapin'),
	(2, 'cartable', 'fresk');
/*!40000 ALTER TABLE `categorie` ENABLE KEYS */;

-- Listage de la structure de la table lesptitspouces. client
CREATE TABLE IF NOT EXISTS `client` (
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
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Listage des données de la table lesptitspouces.client : ~0 rows (environ)
/*!40000 ALTER TABLE `client` DISABLE KEYS */;
/*!40000 ALTER TABLE `client` ENABLE KEYS */;

-- Listage de la structure de la table lesptitspouces. marques
CREATE TABLE IF NOT EXISTS `marques` (
  `id_marque` int(11) NOT NULL AUTO_INCREMENT,
  `titre` varchar(255) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id_marque`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- Listage des données de la table lesptitspouces.marques : ~2 rows (environ)
/*!40000 ALTER TABLE `marques` DISABLE KEYS */;
REPLACE INTO `marques` (`id_marque`, `titre`) VALUES
	(1, 'Vil');
/*!40000 ALTER TABLE `marques` ENABLE KEYS */;

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

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
