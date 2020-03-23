# ************************************************************
# Sequel Pro SQL dump
# Version 4541
#
# http://www.sequelpro.com/
# https://github.com/sequelpro/sequelpro
#
# Host: 127.0.0.1 (MySQL 5.7.29)
# Database: collectiondb
# Generation Time: 2020-03-23 13:59:12 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Dump of table guitars
# ------------------------------------------------------------

DROP TABLE IF EXISTS `guitars`;

CREATE TABLE `guitars` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `brand` varchar(100) DEFAULT NULL,
  `style` varchar(100) DEFAULT NULL,
  `neckwood` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `guitars` WRITE;
/*!40000 ALTER TABLE `guitars` DISABLE KEYS */;

INSERT INTO `guitars` (`id`, `brand`, `style`, `neckwood`)
VALUES
	(1,'Fender','Stratocaster','Rosewood'),
	(2,'Fender','Stratocaster','Maple'),
	(3,'Fender','Telecaster','Rosewood'),
	(4,'Fender','Telecaster','Maple'),
	(5,'Gibson','Les Paul','Rosewood'),
	(6,'Gibson','Les Paul','Maple'),
	(7,'Gibson','SG','Rosewood'),
	(8,'Gibson','SG','Maple');

/*!40000 ALTER TABLE `guitars` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
