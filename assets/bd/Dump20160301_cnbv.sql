-- MySQL dump 10.13  Distrib 5.6.19, for osx10.7 (i386)
--
-- Host: localhost    Database: cnbv
-- ------------------------------------------------------
-- Server version	5.5.42

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
-- Table structure for table `pat`
--

DROP TABLE IF EXISTS `pat`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pat` (
  `idPat` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(40) COLLATE utf8_spanish_ci NOT NULL,
  `anio` int(11) NOT NULL,
  `auditorias` int(11) NOT NULL,
  `seguimientos` int(11) NOT NULL,
  `observaciones` int(11) NOT NULL,
  `pras` int(11) NOT NULL,
  `validar` int(11) NOT NULL,
  `estatus` int(1) NOT NULL COMMENT '1-Programado,2-En proceso,3-Completado',
  `activo` int(1) NOT NULL,
  `fcrea` datetime NOT NULL,
  `ucrea` int(11) NOT NULL,
  `fmod` datetime NOT NULL,
  `umod` int(11) NOT NULL,
  PRIMARY KEY (`idPat`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pat`
--

LOCK TABLES `pat` WRITE;
/*!40000 ALTER TABLE `pat` DISABLE KEYS */;
INSERT INTO `pat` VALUES (1,'Plan Anual de Trabajo',2016,0,0,0,0,0,1,1,'2016-01-01 00:00:00',1,'2016-01-02 00:00:00',1),(2,'Plan Anual de Trabajo',2017,0,0,0,0,0,0,0,'2016-01-01 00:00:00',1,'2016-01-02 00:00:00',1);
/*!40000 ALTER TABLE `pat` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pat_detalle`
--

DROP TABLE IF EXISTS `pat_detalle`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pat_detalle` (
  `idPatDetalle` int(11) NOT NULL AUTO_INCREMENT,
  `consecutivo` int(11) NOT NULL,
  `tipo` int(1) NOT NULL COMMENT '1-Auditoria,2-Seguimiento',
  `pa` int(1) NOT NULL COMMENT '1-Programada,2-Adicional',
  `clave` int(11) NOT NULL,
  `instancia` int(11) NOT NULL,
  `justificacion` int(11) NOT NULL,
  `area` int(11) NOT NULL,
  `descripcion` text COLLATE utf8_spanish_ci NOT NULL,
  `objetivo` text COLLATE utf8_spanish_ci NOT NULL,
  `spi` int(11) NOT NULL COMMENT 'Semana programada de inicio',
  `spt` int(11) NOT NULL COMMENT 'Semana programada de termino',
  `tsr` int(11) NOT NULL COMMENT 'Total de semanas revision',
  `tsh` int(11) NOT NULL COMMENT 'Total de semanas hombre',
  `pri` datetime NOT NULL COMMENT 'Inicio periodo de revision',
  `prf` datetime NOT NULL COMMENT 'Fin periodo de revision',
  `ap` int(11) NOT NULL COMMENT 'Auditoria procedente',
  `muestra` int(11) NOT NULL,
  `universo` int(11) NOT NULL,
  `pendiente` int(11) NOT NULL,
  `riegos` int(11) NOT NULL,
  `cuadrante` int(11) NOT NULL,
  `revisado` int(11) NOT NULL,
  `verificado` int(11) NOT NULL,
  `comentarios` int(11) NOT NULL,
  `estatus` int(11) NOT NULL,
  `fcrea` datetime NOT NULL,
  `ucrea` int(11) NOT NULL,
  `fmod` datetime NOT NULL,
  `umod` int(11) NOT NULL,
  PRIMARY KEY (`idPatDetalle`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pat_detalle`
--

LOCK TABLES `pat_detalle` WRITE;
/*!40000 ALTER TABLE `pat_detalle` DISABLE KEYS */;
/*!40000 ALTER TABLE `pat_detalle` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping routines for database 'cnbv'
--
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2016-03-01 15:29:13
