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
  `id&dmin` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `role` text,
  PRIMARY KEY (`id&dmin`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- Listage des données de la table lesptitspouces.admin : ~1 rows (environ)
/*!40000 ALTER TABLE `admin` DISABLE KEYS */;
REPLACE INTO `admin` (`id&dmin`, `name`, `password`, `role`) VALUES
	(1, 'Anne-Céline', '$2y$12$bwerKYDVFPyikJ1pcGsar.Ze7XnIBtM6SUh/A/2J.I3YbrGM1DNQW', 'admin');
/*!40000 ALTER TABLE `admin` ENABLE KEYS */;

-- Listage de la structure de la table lesptitspouces. articles
CREATE TABLE IF NOT EXISTS `articles` (
  `id_articles` int(11) NOT NULL AUTO_INCREMENT,
  `titre` varchar(255) NOT NULL,
  `extrait` varchar(255) NOT NULL,
  `contenu_article` text NOT NULL,
  `image` varchar(50) NOT NULL,
  `prix_UHT` varchar(255) NOT NULL,
  PRIMARY KEY (`id_articles`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Listage des données de la table lesptitspouces.articles : ~0 rows (environ)
/*!40000 ALTER TABLE `articles` DISABLE KEYS */;
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

-- Listage de la structure de la table lesptitspouces. client
CREATE TABLE IF NOT EXISTS `client` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL DEFAULT '0',
  `name` varchar(255) DEFAULT NULL,
  `adresse` varchar(255) DEFAULT NULL,
  `postal` int(11) DEFAULT NULL,
  `ville` varchar(255) DEFAULT NULL,
  `pays` varchar(255) DEFAULT NULL,
  `phone` int(11) DEFAULT NULL,
  `société` varchar(255) DEFAULT NULL,
  `email` varchar(255) NOT NULL DEFAULT '0',
  `password` varchar(255) NOT NULL DEFAULT '0',
  `date_inscription` date NOT NULL,
  `confirmation_token` varchar(60) DEFAULT NULL,
  `confirmed_at` datetime DEFAULT NULL,
  `reset_token` varchar(60) DEFAULT NULL,
  `reset_at` datetime DEFAULT NULL,
  `role` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Listage des données de la table lesptitspouces.client : ~0 rows (environ)
/*!40000 ALTER TABLE `client` DISABLE KEYS */;
/*!40000 ALTER TABLE `client` ENABLE KEYS */;

-- Listage de la structure de la table lesptitspouces. newarticles
CREATE TABLE IF NOT EXISTS `newarticles` (
  `id_article` int(11) NOT NULL AUTO_INCREMENT,
  `titre` varchar(255) NOT NULL DEFAULT '0',
  `extrait` varchar(255) NOT NULL DEFAULT '0',
  `contenu` varchar(255) NOT NULL DEFAULT '0',
  `image` varchar(50) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id_article`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Listage des données de la table lesptitspouces.newarticles : ~0 rows (environ)
/*!40000 ALTER TABLE `newarticles` DISABLE KEYS */;
/*!40000 ALTER TABLE `newarticles` ENABLE KEYS */;

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
  `valeur_tva` int(11) NOT NULL,
  PRIMARY KEY (`id_tva`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Listage des données de la table lesptitspouces.tva : ~0 rows (environ)
/*!40000 ALTER TABLE `tva` DISABLE KEYS */;
/*!40000 ALTER TABLE `tva` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
