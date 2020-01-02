-- MySQL dump 10.13  Distrib 8.0.17, for Linux (x86_64)
--
-- Host: 192.168.100.3    Database: retort
-- ------------------------------------------------------
-- Server version	5.5.5-10.3.11-MariaDB

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `beer_list`
--

DROP TABLE IF EXISTS `beer_list`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `beer_list` (
  `id` int(2) NOT NULL AUTO_INCREMENT,
  `member_id` int(2) NOT NULL,
  `brewery1` varchar(50) DEFAULT NULL,
  `brewery2` varchar(50) DEFAULT NULL,
  `beername1` varchar(50) NOT NULL,
  `beername2` varchar(50) DEFAULT NULL,
  `locality` varchar(50) DEFAULT NULL,
  `style1` varchar(50) DEFAULT NULL,
  `style2` varchar(50) DEFAULT NULL,
  `abv` float DEFAULT NULL,
  `value` int(4) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fkblmimi` (`member_id`),
  CONSTRAINT `fkblmimi` FOREIGN KEY (`member_id`) REFERENCES `members` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `beer_list`
--

LOCK TABLES `beer_list` WRITE;
/*!40000 ALTER TABLE `beer_list` DISABLE KEYS */;
/*!40000 ALTER TABLE `beer_list` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `beer_menu`
--

DROP TABLE IF EXISTS `beer_menu`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `beer_menu` (
  `id` int(2) NOT NULL AUTO_INCREMENT,
  `member_id` int(2) NOT NULL,
  `beer_list_id` int(2) NOT NULL,
  `updated_at` date NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fkbmmimi` (`member_id`),
  KEY `fkbmblibli` (`beer_list_id`),
  CONSTRAINT `fkbmblibli` FOREIGN KEY (`beer_list_id`) REFERENCES `beer_list` (`id`),
  CONSTRAINT `fkbmmimi` FOREIGN KEY (`member_id`) REFERENCES `members` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `beer_menu`
--

LOCK TABLES `beer_menu` WRITE;
/*!40000 ALTER TABLE `beer_menu` DISABLE KEYS */;
/*!40000 ALTER TABLE `beer_menu` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `beer_menu_tran`
--

DROP TABLE IF EXISTS `beer_menu_tran`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `beer_menu_tran` (
  `id` int(2) NOT NULL AUTO_INCREMENT,
  `member_id` int(2) NOT NULL,
  `beer_list_id` int(2) NOT NULL,
  `updated_at` date NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fkbmtmimi` (`member_id`),
  KEY `fkbmtblibli` (`beer_list_id`),
  CONSTRAINT `fkbmtblibli` FOREIGN KEY (`beer_list_id`) REFERENCES `beer_list` (`id`),
  CONSTRAINT `fkbmtmimi` FOREIGN KEY (`member_id`) REFERENCES `members` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `beer_menu_tran`
--

LOCK TABLES `beer_menu_tran` WRITE;
/*!40000 ALTER TABLE `beer_menu_tran` DISABLE KEYS */;
/*!40000 ALTER TABLE `beer_menu_tran` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `event`
--

DROP TABLE IF EXISTS `event`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `event` (
  `id` int(2) NOT NULL AUTO_INCREMENT,
  `member_id` int(2) NOT NULL,
  `menu` text NOT NULL,
  `sammury` text NOT NULL,
  `value` int(4) NOT NULL,
  `created_at` date DEFAULT NULL,
  `deleted_at` date DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fkemimi` (`member_id`),
  CONSTRAINT `fkemimi` FOREIGN KEY (`member_id`) REFERENCES `members` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `event`
--

LOCK TABLES `event` WRITE;
/*!40000 ALTER TABLE `event` DISABLE KEYS */;
/*!40000 ALTER TABLE `event` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `members`
--

DROP TABLE IF EXISTS `members`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `members` (
  `id` int(2) NOT NULL AUTO_INCREMENT,
  `member_name` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `members`
--

LOCK TABLES `members` WRITE;
/*!40000 ALTER TABLE `members` DISABLE KEYS */;
/*!40000 ALTER TABLE `members` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `settings`
--

DROP TABLE IF EXISTS `settings`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `settings` (
  `id` int(2) NOT NULL AUTO_INCREMENT,
  `member_id` int(2) NOT NULL,
  `enable_display_brewery` tinyint(1) NOT NULL DEFAULT 0,
  `enable_display_locality` tinyint(1) NOT NULL DEFAULT 0,
  `enable_display_style` tinyint(1) NOT NULL DEFAULT 0,
  `enable_display_abv` tinyint(1) NOT NULL DEFAULT 0,
  `enable_display_value` tinyint(1) NOT NULL DEFAULT 0,
  `enable_display_multiple_brewery` tinyint(1) NOT NULL DEFAULT 0,
  `enable_display_multiple_beername` tinyint(1) NOT NULL DEFAULT 0,
  `enable_display_multiple_style` tinyint(1) NOT NULL DEFAULT 0,
  `enable_display_telop` tinyint(1) NOT NULL DEFAULT 0,
  `enable_display_event` tinyint(1) NOT NULL DEFAULT 0,
  PRIMARY KEY (`id`),
  KEY `fksmimi` (`member_id`),
  CONSTRAINT `fksmimi` FOREIGN KEY (`member_id`) REFERENCES `members` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `settings`
--

LOCK TABLES `settings` WRITE;
/*!40000 ALTER TABLE `settings` DISABLE KEYS */;
/*!40000 ALTER TABLE `settings` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `telop`
--

DROP TABLE IF EXISTS `telop`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `telop` (
  `id` int(2) NOT NULL AUTO_INCREMENT,
  `member_id` int(2) NOT NULL,
  `message` text DEFAULT NULL,
  `created_at` date DEFAULT NULL,
  `deleted_at` date DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fktmimi` (`member_id`),
  CONSTRAINT `fktmimi` FOREIGN KEY (`member_id`) REFERENCES `members` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `telop`
--

LOCK TABLES `telop` WRITE;
/*!40000 ALTER TABLE `telop` DISABLE KEYS */;
/*!40000 ALTER TABLE `telop` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2019-12-22 23:50:07
