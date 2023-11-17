-- MySQL dump 10.13  Distrib 8.0.34, for macos13 (arm64)
--
-- Host: 127.0.0.1    Database: laravel
-- ------------------------------------------------------
-- Server version	8.2.0

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
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `users` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `image` text COLLATE utf8mb4_unicode_ci,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'milena','milearaqelyan03@gmail','+37497252054','milena','male','2023-11-11 16:12:48','2023-11-17 07:20:28',NULL,NULL),(2,'sdszxd','m@gmail','564321','cddssds','female','2023-11-11 16:17:26','2023-11-11 16:17:26',NULL,NULL),(3,'sdsddc','m@gmail','564321','sass','female','2023-11-11 16:19:25','2023-11-11 16:19:25',NULL,NULL),(4,'sfdeaw','asdf@gmail','45678','dfgty78','female','2023-11-12 00:16:28','2023-11-12 00:16:28',NULL,NULL),(5,'bhgvftrdtfvygbh','mil@gmail','34567887654376','HGVFRTyhuybGYT^','female','2023-11-13 08:11:07','2023-11-13 08:11:07',NULL,NULL),(6,'gvcfdxsdfgh','mil@gmail','45678909876543','gv3cexww3e4r5t','female','2023-11-13 08:13:28','2023-11-13 08:13:28',NULL,NULL),(7,'gvcfdxsdfghas','mil@gmail','45678909876543','vfrderyubh','female','2023-11-13 08:13:56','2023-11-13 08:13:56',NULL,NULL),(8,'gvcfdxsdfghasds','mil@gmail','45678909876543','brgefd23rfvgvcfedw','female','2023-11-13 08:18:23','2023-11-13 08:18:23',NULL,NULL),(9,'nhbgvashbj','milena@gmail','4345678987654','fdwsqdfghtgrfed','female','2023-11-13 08:23:06','2023-11-13 08:23:06',NULL,NULL),(10,'hcfundakmzlazkscdjnf','milena@gmail','234567898765','tfrguiyutfdrfc','female','2023-11-13 08:25:16','2023-11-13 08:25:16',NULL,NULL),(11,'kjnbhgvfcch','milenaaaa@gmail','4324567890876543','hbgvfrdtfyguhij','female','2023-11-13 09:21:08','2023-11-13 09:21:08',NULL,NULL),(12,'milenaas','miscszc@gmail','3456789087654','m njhbgvfcd','female','2023-11-13 14:40:55','2023-11-13 14:40:55',NULL,NULL),(13,'mcbahj','jhbscd@gmail','456765434567','xahbgsvfxga','female','2023-11-13 14:43:43','2023-11-13 14:43:43',NULL,NULL);
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

-- Dump completed on 2023-11-17 23:51:48
