-- MySQL dump 10.13  Distrib 5.5.46, for debian-linux-gnu (x86_64)
--
-- Host: localhost    Database: test_app
-- ------------------------------------------------------
-- Server version	5.5.46-0ubuntu0.14.04.2

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL,
  `user_name` varchar(60) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `unique_email` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=37 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (33,'$6$rounds=1000$TestCryptSalt$Sz/Vllrl6RY/9nB/ejzbI.lAXL.z5yaQQgFqvGeKB8q.ML7V.jBC1vTXLfaC1DgkF0Y7S3H7oHmvpEJHvkJhY0','$6$rounds=1000$6$E3OrdkAHu1kAzdHWcZrsR2Tam5aHRKpRUChtXIlno2aVw9C.w0YQGbA9e3Q2dRKKPP4WK7S9IzjOps.zFvgva.','2015-11-09 01:07:25','Leo'),(34,'$6$rounds=1000$TestCryptSalt$WrJEK49PTv7/sADPfujSu5OpZU2Y7n6w2cltfCefo3sEJ6NE9GAwBkVPVZTsyczfRBomlvHJ2nLwkHDXhPDO01','$6$rounds=1000$6$j60DAfQLCpkbWyHyLvstnns1MpoJ2h5HwvN.dZOAgr2Kew1eNJuWxx3CzjN9296XCoUh6sf4pfSfmUQptdViV1','2015-11-09 23:46:41','Gogo'),(36,'$6$rounds=1000$TestCryptSalt$LR9/l1oZQh0oPqaQfMFjVrTIP95Db9q5oppHhZeqQbHsi5zV3d6185hKhY7uLM5z7ZtAdpYSaXomZ2Rr4TixF0','$6$rounds=1000$6$E3OrdkAHu1kAzdHWcZrsR2Tam5aHRKpRUChtXIlno2aVw9C.w0YQGbA9e3Q2dRKKPP4WK7S9IzjOps.zFvgva.','2015-11-11 01:25:18','Leonid');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2015-11-11  2:25:31
