# ************************************************************
# Sequel Pro SQL dump
# Version 4541
#
# http://www.sequelpro.com/
# https://github.com/sequelpro/sequelpro
#
# Host: 127.0.0.1 (MySQL 5.7.29)
# Database: collectiondb
# Generation Time: 2020-03-25 16:13:09 +0000
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
  `year` varchar(100) DEFAULT NULL,
  `instrument_url` varchar(255) DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `guitars` WRITE;
/*!40000 ALTER TABLE `guitars` DISABLE KEYS */;

INSERT INTO `guitars` (`id`, `brand`, `style`, `year`, `instrument_url`)
VALUES
	(1,'Fender','Stratocaster','2020','https://andertons-productimages.imgix.net/351619-0113010700%20%281%29.jpg?w=768&h=768&fit=fill&bg=FFFFFF&auto=format&ixlib=imgixjs-3.3.2'),
	(2,'Fender','Stratocaster','2020','https://andertons-productimages.imgix.net/351635-0113012700%20%281%29.jpg?w=768&h=768&fit=fill&bg=FFFFFF&auto=format&ixlib=imgixjs-3.3.2'),
	(3,'Fender','Telecaster','2020','https://andertons-productimages.imgix.net/347985-0113060700%20%281%29.jpg?w=768&h=768&fit=fill&bg=FFFFFF&auto=format&ixlib=imgixjs-3.3.2'),
	(4,'Fender','Telecaster','2020','https://andertons-productimages.imgix.net/348009-0113062700%20%281%29.jpg?w=768&h=768&fit=fill&bg=FFFFFF&auto=format&ixlib=imgixjs-3.3.2'),
	(5,'Fender','P Bass','2020','https://andertons-productimages.imgix.net/344839-0193610776_gtr_frt_001_rr.png?w=768&h=768&fit=fill&bg=FFFFFF&auto=format&ixlib=imgixjs-3.3.2'),
	(6,'Fender','P Bass','2020','https://andertons-productimages.imgix.net/339685-0193612776%20%281%29.jpg?w=768&h=768&fit=fill&bg=FFFFFF&auto=format&ixlib=imgixjs-3.3.2'),
	(7,'Fender','Jazz Base','2020','https://andertons-productimages.imgix.net/350640-0193900748%20%281%29.jpg?w=768&h=768&fit=fill&bg=FFFFFF&auto=format&ixlib=imgixjs-3.3.2'),
	(8,'Fender','Jazz Base','2020','https://andertons-productimages.imgix.net/350605-0193902748%20%281%29.jpg?w=768&h=768&fit=fill&bg=FFFFFF&auto=format&ixlib=imgixjs-3.3.2'),
	(10,'Gibson ','Les Paul 1959 Custom Shop','2016','https://andertons-productimages.imgix.net/379857-Gibson%20Custom%20Shop%2060th%20Anniversary%201960%20Les%20Paul%20Standard%20V1%20VOS%20Antiquity%20Burst%202.jpg?w=768&h=768&fit=fill&bg=FFFFFF&auto=format&ixlib=imgixjs-3.3.2'),
	(13,'gfdhgs','fdsgsag','2019','https://andertons-productimages.imgix.net/360429-Fender-American-Ultra-Jazzmaster-Ultraburst-Full.jpg?w=768&h=768&fit=fill&bg=FFFFFF&auto=format&ixlib=imgixjs-3.3.2'),
	(14,'gfsg','gfdgd','2345','https://andertons-productimages.imgix.net/360429-Fender-American-Ultra-Jazzmaster-Ultraburst-Full.jpg?w=768&h=768&fit=fill&bg=FFFFFF&auto=format&ixlib=imgixjs-3.3.2'),
	(15,'rewrwr','rewrew','2012','https://andertons-productimages.imgix.net/360429-Fender-American-Ultra-Jazzmaster-Ultraburst-Full.jpg?w=768&h=768&fit=fill&bg=FFFFFF&auto=format&ixlib=imgixjs-3.3.2');

/*!40000 ALTER TABLE `guitars` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
