-- MySQL dump 10.13  Distrib 5.7.17, for Win64 (x86_64)
--
-- Host: 127.0.0.1    Database: qqp
-- ------------------------------------------------------
-- Server version	5.5.5-10.4.10-MariaDB

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
-- Table structure for table `portfolio`
--

DROP TABLE IF EXISTS `portfolio`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `portfolio` (
  `id` int(11) NOT NULL,
  `title` varchar(45) DEFAULT NULL,
  `image` varchar(45) DEFAULT NULL,
  `type` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `portfolio`
--

LOCK TABLES `portfolio` WRITE;
/*!40000 ALTER TABLE `portfolio` DISABLE KEYS */;
INSERT INTO `portfolio` VALUES (1,'billboard1','qqp-billboard1.jpg','billboard'),(2,'billboard2','qqp-billboard2.jpg','billboard'),(3,'billboard3','qqp-billboard3.jpg','billboard'),(4,'billboard4','qqp-billboard4.jpg','billboard'),(5,'carbranding1','qqp-carbranding1.jpg','carbranding'),(6,'carbranding2','qqp-carbranding2.jpg','carbranding'),(7,'carbranding3','qqp-carbranding3.jpg','carbranding'),(8,'carbranding4','qqp-carbranding4.jpg','carbranding'),(9,'carbranding5','qqp-carbranding5.jpg','carbranding'),(10,'carbranding6','qqp-carbranding6.jpg','carbranding'),(11,'carbranding7','qqp-carbranding7.jpg','carbranding'),(12,'carbranding8','qqp-carbranding8.jpg','carbranding'),(13,'carbranding9','qqp-carbranding9.jpg','carbranding'),(14,'carbranding10','qqp-carbranding10.jpg','carbranding'),(15,'carbranding11','qqp-carbranding11.jpg','carbranding'),(16,'carbranding12','qqp-carbranding12.jpg','carbranding'),(17,'carbranding13','qqp-carbranding13.jpg','carbranding'),(18,'carbranding14','qqp-carbranding14.jpg','carbranding'),(19,'carbranding15','qqp-carbranding15.jpg','carbranding'),(20,'carbranding16','qqp-carbranding16.jpg','carbranding'),(21,'carbranding17','qqp-carbranding17.jpg','carbranding'),(22,'carbranding18','qqp-carbranding18.jpg','carbranding'),(23,'carbranding19','qqp-carbranding19.jpg','carbranding'),(24,'carbranding20','qqp-carbranding20.jpg','carbranding'),(25,'carbranding21','qqp-carbranding21.jpg','carbranding'),(26,'carbranding22','qqp-carbranding22.jpg','carbranding'),(27,'carbranding23','qqp-carbranding23.jpg','carbranding'),(28,'carbranding24','qqp-carbranding24.jpg','carbranding'),(29,'carbranding25','qqp-carbranding25.jpg','carbranding'),(30,'carbranding26','qqp-carbranding26.jpg','carbranding'),(31,'carbranding27','qqp-carbranding27.jpg','carbranding'),(32,'carbranding28','qqp-carbranding28.jpg','carbranding'),(33,'carbranding29','qqp-carbranding29.jpg','carbranding'),(34,'carbranding30','qqp-carbranding30.jpg','carbranding'),(35,'carbranding31','qqp-carbranding31.jpg','carbranding'),(36,'lightbox1','qqp-lightbox1.jpg','lightbox'),(37,'lightbox2','qqp-lightbox2.jpg','lightbox'),(38,'lightbox3','qqp-lightbox3.jpg','lightbox'),(39,'lightbox4','qqp-lightbox4.jpg','lightbox'),(40,'lightbox5','qqp-lightbox5.jpg','lightbox'),(41,'lightbox6','qqp-lightbox6.jpg','lightbox'),(42,'lightbox7','qqp-lightbox7.jpg','lightbox'),(43,'plexi1','qqp-plexi1.jpg','plexi'),(44,'plexi2','qqp-plexi2.jpg','plexi'),(45,'plexi3','qqp-plexi3.jpg','plexi'),(46,'plexi4','qqp-plexi4.jpg','plexi'),(47,'plexi5','qqp-plexi5.jpg','plexi'),(48,'plexi6','qqp-plexi6.jpg','plexi'),(49,'plexi7','qqp-plexi7.jpg','plexi'),(50,'plexi8','qqp-plexi8.jpg','plexi'),(51,'plexi9','qqp-plexi9.jpg','plexi'),(52,'plexi10','qqp-plexi10.jpg','plexi'),(53,'plexi11','qqp-plexi11.jpg','plexi'),(54,'plexi12','qqp-plexi12.jpg','plexi'),(55,'plexi13','qqp-plexi13.jpg','plexi'),(56,'plexi14','qqp-plexi14.jpg','plexi'),(57,'plexi15','qqp-plexi15.jpg','plexi'),(58,'plexi16','qqp-plexi16.jpg','plexi'),(59,'plexi17','qqp-plexi17.jpg','plexi'),(60,'plexi18','qqp-plexi18.jpg','plexi'),(61,'rollup1','qqp-rollup1.jpg','rollup'),(62,'rollup2','qqp-rollup2.jpg','rollup'),(63,'rollup3','qqp-rollup3.jpg','rollup'),(64,'seethrough1','qqp-seethrough1.jpg','seethrough'),(65,'seethrough2','qqp-seethrough2.jpg','seethrough'),(66,'seethrough3','qqp-seethrough3.jpg','seethrough'),(67,'seethrough4','qqp-seethrough4.jpg','seethrough'),(68,'seethrough5','qqp-seethrough5.jpg','seethrough'),(69,'seethrough6','qqp-seethrough6.jpg','seethrough'),(70,'seethrough7','qqp-seethrough7.jpg','seethrough'),(71,'seethrough8','qqp-seethrough8.jpg','seethrough'),(72,'seethrough9','qqp-seethrough9.jpg','seethrough'),(73,'signs1','qqp-signs1.jpg','signs'),(74,'signs2','qqp-signs2.jpg','signs'),(75,'signs3','qqp-signs3.jpg','signs'),(76,'signs4','qqp-signs4.jpg','signs'),(77,'signs5','qqp-signs5.jpg','signs'),(78,'signs6','qqp-signs6.jpg','signs'),(79,'signs7','qqp-signs7.jpg','signs'),(80,'signs8','qqp-signs8.jpg','signs'),(81,'signs9','qqp-signs9.jpg','signs'),(82,'signs10','qqp-signs10.jpg','signs'),(83,'signs11','qqp-signs11.jpg','signs'),(84,'signs12','qqp-signs12.jpg','signs'),(85,'signs13','qqp-signs13.jpg','signs'),(86,'signs14','qqp-signs14.jpg','signs'),(87,'signs15','qqp-signs15.jpg','signs'),(88,'signs16','qqp-signs16.jpg','signs'),(89,'signs17','qqp-signs17.jpg','signs'),(90,'signs18','qqp-signs18.jpg','signs'),(91,'signs19','qqp-signs19.jpg','signs'),(92,'signs20','qqp-signs20.jpg','signs'),(93,'signs21','qqp-signs21.jpg','signs'),(94,'signs22','qqp-signs22.jpg','signs'),(95,'signs23','qqp-signs23.jpg','signs'),(96,'signs24','qqp-signs24.jpg','signs'),(97,'signs25','qqp-signs25.jpg','signs'),(98,'signs26','qqp-signs26.jpg','signs'),(99,'signs27','qqp-signs27.jpg','signs'),(100,'signs28','qqp-signs28.jpg','signs'),(101,'vinylcut1','qqp-vinylcut1.jpg','vinylcut'),(102,'vinylcut2','qqp-vinylcut2.jpg','vinylcut'),(103,'vinylcut3','qqp-vinylcut3.jpg','vinylcut'),(104,'vinylcut4','qqp-vinylcut4.jpg','vinylcut'),(105,'vinylcut5','qqp-vinylcut5.jpg','vinylcut'),(106,'vinylcut6','qqp-vinylcut6.jpg','vinylcut');
/*!40000 ALTER TABLE `portfolio` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2023-12-13  9:50:13
