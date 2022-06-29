-- MySQL dump 10.13  Distrib 8.0.29, for Win64 (x86_64)
--
-- Host: 127.0.0.1    Database: carros
-- ------------------------------------------------------
-- Server version	5.7.36

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
-- Table structure for table `usuario`
--

DROP TABLE IF EXISTS `usuario`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `usuario` (
  `numusu` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(100) COLLATE utf8_bin NOT NULL,
  `sobrenome` varchar(100) COLLATE utf8_bin NOT NULL,
  `loginusuario` varchar(100) COLLATE utf8_bin NOT NULL,
  `senha` varchar(100) COLLATE utf8_bin NOT NULL,
  `perfil` int(11) DEFAULT NULL,
  PRIMARY KEY (`numusu`)
) ENGINE=MyISAM AUTO_INCREMENT=30 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `usuario`
--

LOCK TABLES `usuario` WRITE;
/*!40000 ALTER TABLE `usuario` DISABLE KEYS */;
INSERT INTO `usuario` VALUES (1,'João','Silva','Joao25','1234',2),(2,'Paulo','Nogueira','Paulo88','12345',3),(3,'Roberto','Souza','RobSou','1234',1),(4,'Carlos','Albuquerque','calbq','abcd',1),(5,'Cezar','Marques','cezinha','1234',1),(6,'Augusto','Silva','assu','1234',1),(7,'Augusto','Silva','assi','1234',1),(8,'Augusto','Silva','assa','1234',1),(9,'Augusto','Silva','usuario13','1234',1),(10,'Augusto','Silva','usuario14','1234',1),(11,'Augusto','Silva','usuario15','1234',1),(12,'Augusto','Silva','usuario16','1234',1),(13,'Augusto','Silva','usuario17','1234',1),(14,'Rodrigo','Souza','acara','2',1),(15,'Rodrigo','Souza','ocara','2',1),(16,'Rodrigo','Souza','ecara','1234',1),(17,'Teste','Steste','ocara2','1234',1),(18,'RÃºbens','Ag','assi2','1234',1),(29,'i','q','q','1234Abcd.',1),(20,'ruef','aefaf','assi','1234',1),(21,'ruef','aefaf','assi','1234',1),(22,'ruef','aefaf','assi','123',1),(23,'ruef','aefaf','assi','123',1),(24,'jgy','sdvad','cezinha','123',1),(25,'sfaefaf','asfa','assi','123',1),(26,'sfaefaf','asfa','assi','123',1),(27,'sfaefaf','asfa','assi','123',1),(28,'sfaefaf','asfa','assi','123',1);
/*!40000 ALTER TABLE `usuario` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2022-06-20 20:54:31
