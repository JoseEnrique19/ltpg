-- MySQL dump 10.13  Distrib 5.7.10, for Win64 (x86_64)
--
-- Host: localhost    Database: ltpg
-- ------------------------------------------------------
-- Server version	5.7.10-log

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
-- Table structure for table `estado_venta`
--

DROP TABLE IF EXISTS `estado_venta`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `estado_venta` (
  `id_estado` int(4) NOT NULL AUTO_INCREMENT,
  `estado` varchar(10) NOT NULL,
  `venta` int(4) NOT NULL,
  PRIMARY KEY (`id_estado`),
  KEY `venta` (`venta`),
  CONSTRAINT `estado_venta_ibfk_1` FOREIGN KEY (`venta`) REFERENCES `ventas` (`id_venta`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `estado_venta`
--

LOCK TABLES `estado_venta` WRITE;
/*!40000 ALTER TABLE `estado_venta` DISABLE KEYS */;
/*!40000 ALTER TABLE `estado_venta` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `noticias`
--

DROP TABLE IF EXISTS `noticias`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `noticias` (
  `id_noticia` int(4) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(40) NOT NULL,
  `contenido` varchar(1000) NOT NULL,
  `fecha` date NOT NULL,
  PRIMARY KEY (`id_noticia`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `noticias`
--

LOCK TABLES `noticias` WRITE;
/*!40000 ALTER TABLE `noticias` DISABLE KEYS */;
INSERT INTO `noticias` VALUES (4,'Descripcion del proyecto','El proyecto ï¿½Learn To Play Guitarï¿½ es realizado con el fin de enseï¿½ar a una persona con discapacidades visuales como usar una guitarra y notas del instrumento. De esta forma se demostrarï¿½ al usuario con discapacidades visuales que no estï¿½ totalmente limitado a pesar de tales limitaciones. Algunas personas con este tipo de discapacidad se limitan y se cierran a la sociedad, esta manera seria una agradable forma para volver a integrarlo a la sociedad. Las personas que tienen daï¿½ado el sentido visual, desarrollan acciones de forma notable con sus sentidos restantes, y la mï¿½sica resulta a veces hasta un tipo de terapia o forma para que estas personas demuestren que aï¿½n pueden hacer cosas de personas normales.','2017-04-07'),(5,'Mision','Hacer que el producto llegue inicialmente a los usuarios que tienen una discapacidad visual, o no, con sistema operativo Android ya que este es y seguirá siendo por mucho tiempo el sistema móvil más utilizado. Si se desea el producto no solo podrá ser utilizado por las personas invidentes, sino también por todas aquellas personas que tengan intenciones de aprender a tocar este instrumento, ya que las instrucciones son tan claras como para cualquier persona que tenga posibilidades e intenciones de aprender.','2017-04-07'),(6,'Vision','Evolucionar para que la aplicación tenga un alcance mayor incluyendo una lista de instrumentos más amplia y no contar solo con la guitarra, el equipo de desarrollo trabajaría para desarrollar los módulos de aprendizaje, incluyendo instrumentos como el violín, piano por mencionar algunos que comparten características que se pueden identificar con el sentido del tacto.','2017-04-07');
/*!40000 ALTER TABLE `noticias` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `usuarios` (
  `id_user` int(10) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(45) NOT NULL,
  `user` varchar(45) NOT NULL,
  `password` varchar(15) NOT NULL,
  PRIMARY KEY (`id_user`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `usuarios`
--

LOCK TABLES `usuarios` WRITE;
/*!40000 ALTER TABLE `usuarios` DISABLE KEYS */;
INSERT INTO `usuarios` VALUES (1,'Azael','aza','leandro'),(2,'Enrique','kike','kikardo');
/*!40000 ALTER TABLE `usuarios` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ventas`
--

DROP TABLE IF EXISTS `ventas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ventas` (
  `id_venta` int(4) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(40) NOT NULL,
  `apellido` varchar(50) NOT NULL,
  `direccion` varchar(60) NOT NULL,
  `municipio` varchar(25) NOT NULL,
  `estado` varchar(20) NOT NULL,
  `correo` varchar(45) NOT NULL,
  `fecha` datetime NOT NULL,
  PRIMARY KEY (`id_venta`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ventas`
--

LOCK TABLES `ventas` WRITE;
/*!40000 ALTER TABLE `ventas` DISABLE KEYS */;
INSERT INTO `ventas` VALUES (1,'kike','garrido','xicotencatl','tulancingo','hidalgo','kike@mail.com','2017-04-06 03:28:38'),(2,'Kikardo','Garrido','Xicotencatl','Tulanyork','Hidalgo','kike@gmai.com','2017-04-06 03:30:41'),(3,'Kikardo','Garrido','Xicotencatl','Tulanyork','Hidalgo','kike@gmai.com','2017-04-06 03:33:00'),(4,'gyug','yuy','guyg','yug','yugyu','gy','2017-04-06 03:34:24'),(5,'gyug','yuy','guyg','yug','yugyu','gy','2017-04-06 03:35:03'),(6,'Gabo','Barbonsito','Calle Del Beso','Final del Arcoiris','Irlanda','barbonsito69@xvideos.com','2017-04-06 12:22:34');
/*!40000 ALTER TABLE `ventas` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2017-04-07  9:32:12
