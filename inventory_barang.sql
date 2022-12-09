-- MySQL dump 10.13  Distrib 8.0.29, for Linux (x86_64)
--
-- Host: localhost    Database: inventory_barang
-- ------------------------------------------------------
-- Server version	8.0.31-0ubuntu0.22.04.1

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `barang`
--

DROP TABLE IF EXISTS `barang`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `barang` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nama` varchar(50) NOT NULL,
  `merk` varchar(50) NOT NULL,
  `jumlah` mediumint NOT NULL,
  `harga` decimal(10,2) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=103 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `barang`
--

LOCK TABLES `barang` WRITE;
/*!40000 ALTER TABLE `barang` DISABLE KEYS */;
INSERT INTO `barang` VALUES (10,'Grand Marquis','Mercury',77,100500.00),(13,'GTI','Volkswagen',78,381200.00),(14,'Sunfire','Pontiac',22,915600.00),(15,'Skyhawk','Buick',27,44500.00),(16,'Trooper','Isuzu',94,800500.00),(17,'Neon','Plymouth',35,542500.00),(18,'RX Hybrid','Lexus',50,350100.00),(19,'Aspire','Ford',45,51000.00),(21,'NX','Nissan',13,364700.00),(22,'Elise','Lotus',33,948700.00),(23,'Acadia','GMC',86,376900.00),(24,'Mark VIII','Lincoln',72,72200.00),(25,'IS-F','Lexus',39,862100.00),(26,'Mirage','Mitsubishi',6,650500.00),(27,'MX-5','Mazda',47,700300.00),(28,'Explorer Sport','Ford',87,830600.00),(29,'929','Mazda',39,144400.00),(30,'Shadow','Dodge',45,366000.00),(31,'Comanche','Jeep',10,322800.00),(32,'4Runner','Toyota',46,357600.00),(33,'S40','Volvo',85,88700.00),(34,'XT','Subaru',54,457800.00),(35,'Eclipse','Mitsubishi',32,84800.00),(36,'Trans Sport','Pontiac',80,159600.00),(37,'Diamante','Mitsubishi',33,94600.00),(38,'Sierra 2500','GMC',54,648500.00),(39,'Biturbo','Maserati',90,343800.00),(40,'XG350','Hyundai',75,307500.00),(41,'C70','Volvo',53,421600.00),(42,'Safari','GMC',66,349100.00),(43,'Q','Infiniti',73,792000.00),(44,'E250','Ford',98,539000.00),(45,'F350','Ford',87,521800.00),(46,'545','BMW',22,251100.00),(47,'S4','Audi',68,662900.00),(48,'Z3','BMW',39,501300.00),(49,'XLR','Cadillac',60,662600.00),(50,'Jetta','Volkswagen',98,277800.00),(51,'Escape','Ford',90,150300.00),(52,'88','Oldsmobile',85,753900.00),(53,'Coupe Quattro','Audi',84,745700.00),(54,'Freelander','Land Rover',52,684900.00),(55,'Ranger','Ford',33,607500.00),(56,'A6','Audi',16,285300.00),(57,'Z8','BMW',51,611300.00),(58,'Volt','Chevrolet',45,241700.00),(59,'Outlook','Saturn',54,503600.00),(60,'Verona','Suzuki',33,91500.00),(61,'Astro','Chevrolet',46,83700.00),(62,'F350','Ford',47,920700.00),(63,'Trans Sport','Pontiac',88,898600.00),(64,'xD','Scion',85,104100.00),(65,'V8 Vantage','Aston Martin',42,35500.00),(66,'164','Alfa Romeo',83,87200.00),(67,'Rockette','Fairthorpe',7,601600.00),(68,'Bel Air','Chevrolet',17,13700.00),(69,'M3','BMW',63,130000.00),(70,'Grand Marquis','Mercury',20,27200.00),(71,'Caravan','Dodge',52,161100.00),(72,'Pathfinder','Nissan',53,327500.00),(73,'LR2','Land Rover',90,154800.00),(74,'Dakota','Dodge',42,347500.00),(75,'Crossfire Roadster','Chrysler',79,457100.00),(76,'TSX','Acura',68,239000.00),(77,'Yaris','Toyota',14,84600.00),(78,'S10 Blazer','Chevrolet',77,946500.00),(80,'Grand Marquis','Mercury',19,981600.00),(81,'Mighty Max Macro','Mitsubishi',66,613800.00),(82,'Hombre','Isuzu',5,384900.00),(83,'RL','Acura',79,325700.00),(85,'CR-V','Honda',90,93300.00),(86,'62','Maybach',69,423000.00),(87,'Navigator','Lincoln',43,119700.00),(88,'9000','Saab',25,10200.00),(89,'Swift','Suzuki',38,603800.00),(90,'Express 1500','Chevrolet',100,797700.00),(91,'Town Car','Lincoln',43,34200.00),(92,'Navigator','Lincoln',9,100000.00),(93,'Golf','Volkswagen',42,899900.00),(94,'Diamante','Mitsubishi',68,999800.00),(95,'Grand Vitara','Suzuki',42,59300.00),(97,'Accord','Honda',99,777500.00),(98,'Bronco','Ford',82,802300.00),(99,'Pathfinder','Nissan',27,411900.00),(100,'Mighty Max','Mitsubishi',86,226000.00),(101,'Pasta Gigi','Pepsodent',100,5000.00);
/*!40000 ALTER TABLE `barang` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2022-12-10  7:51:42
