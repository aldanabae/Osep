/*
SQLyog Ultimate v9.63 
MySQL - 5.6.17 : Database - osep_db
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`osep_db` /*!40100 DEFAULT CHARACTER SET utf8 COLLATE utf8_spanish_ci */;

USE `osep_db`;

/*Table structure for table `bloque` */

DROP TABLE IF EXISTS `bloque`;

CREATE TABLE `bloque` (
  `idBloque` int(11) NOT NULL AUTO_INCREMENT,
  `nroBloque` int(11) NOT NULL,
  `nombreBloque` varchar(100) NOT NULL,
  `descripBloque` text,
  `idEncuesta` int(11) NOT NULL,
  `idTipoBloque` int(11) NOT NULL,
  PRIMARY KEY (`idBloque`),
  KEY `idEncuesta` (`idEncuesta`),
  KEY `idTipoBloque` (`idTipoBloque`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

/*Data for the table `bloque` */

insert  into `bloque`(`idBloque`,`nroBloque`,`nombreBloque`,`descripBloque`,`idEncuesta`,`idTipoBloque`) values (1,0,'De Identificación del Territorio/Facilitador/Familia Relevada y Encuesta','Bloque Inicial',1,1),(2,1,'Composición y Salud Familiar','Boque de Familiar',1,2),(3,2,'Utilizacion de Servicios de Salud','Bloque para Afiliados',1,1),(4,3,'Salud de los Niños','Bloque Niños Menores de 2 años(0 a 1 año 11 meses y 29 días)',1,2),(5,3,'Salud de los Niños','Bloque Niños Mayores de 2 años y Menores de 14(2 a 14 año 11 meses y 29 días)',1,2),(6,4,'Salud de las Mujeres','Bloque Mujeres Mayores de 16 años',1,2),(7,5,'Adultos Mayores','Bloque Mayores de 65 años',1,2),(8,6,'Familias que tienen miembros con discapacidad Afiliados a OSEP','Bloque para Discapacitados',1,2),(9,7,'Embarazadas','Bloque para integrantes de la familia embarazadas.\r\n',1,2),(10,8,'Vivienda y Habitat','Bloque características generales de la Vivienda.',1,1),(11,10,'Bloque para Todas las Familias','Bloque General datos Ocupacionales y de Vivienda',1,1);

/*Table structure for table `criticidad` */

DROP TABLE IF EXISTS `criticidad`;

CREATE TABLE `criticidad` (
  `idCriticidad` int(11) NOT NULL AUTO_INCREMENT,
  `nombreCriticidad` varchar(45) NOT NULL,
  `descCriticidad` varchar(45) NOT NULL,
  PRIMARY KEY (`idCriticidad`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `criticidad` */

/*Table structure for table `departamento` */

DROP TABLE IF EXISTS `departamento`;

CREATE TABLE `departamento` (
  `id_tdeparta` int(11) NOT NULL AUTO_INCREMENT,
  `descdep` varchar(45) NOT NULL,
  PRIMARY KEY (`id_tdeparta`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=latin1;

/*Data for the table `departamento` */

insert  into `departamento`(`id_tdeparta`,`descdep`) values (1,'Capital'),(2,'Las Heras'),(3,'Guaymallén'),(4,'Godoy Cruz'),(5,'Lujan de Cuyo'),(6,'Maipú'),(7,'San Martín'),(8,'Junín'),(9,'Rivadavia'),(10,'Santa Rosa'),(11,'La Paz'),(12,'Lavalle'),(13,'Tupungato'),(14,'Tunuyán'),(15,'San Carlos'),(16,'San Rafael'),(17,'General Alvear'),(18,'Malargüe');

/*Table structure for table `direccion` */

DROP TABLE IF EXISTS `direccion`;

CREATE TABLE `direccion` (
  `idDireccion` int(11) NOT NULL AUTO_INCREMENT,
  `calle` varchar(45) NOT NULL,
  `casa` int(11) DEFAULT NULL,
  `numero` int(11) DEFAULT NULL,
  `dptoNumero` int(11) DEFAULT NULL,
  `entreCalles1` varchar(45) NOT NULL,
  `entreCalles2` varchar(45) NOT NULL,
  `barrio` varchar(45) NOT NULL,
  `observaciones` text NOT NULL,
  `manzana` char(11) DEFAULT NULL,
  `id_tlocalidad` int(11) NOT NULL,
  PRIMARY KEY (`idDireccion`),
  KEY `id_tlocalidad` (`id_tlocalidad`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

/*Data for the table `direccion` */

insert  into `direccion`(`idDireccion`,`calle`,`casa`,`numero`,`dptoNumero`,`entreCalles1`,`entreCalles2`,`barrio`,`observaciones`,`manzana`,`id_tlocalidad`) values (1,'Libertad',0,231,0,'Cochabamba','Cerrito','','La casa es interna','',0),(2,'Libertad',0,231,0,'Cochabamba','Cerrito','','La casa es interna','',0),(3,'Los sauces',2,321,4,'Patricios','San Martin','','Casa Verde','E',0),(4,'Azcuenaga',3,231,4,'Bustamante','Entre Rios','','Timbre de arriba','F',2),(5,'Carolo',0,657,8,'Cerrito','Panama','Los Fresnos','Probandooo','',2);

/*Table structure for table `empleado` */

DROP TABLE IF EXISTS `empleado`;

CREATE TABLE `empleado` (
  `idEmpleado` int(11) NOT NULL AUTO_INCREMENT,
  `nombreE` varchar(100) NOT NULL,
  `apellidoE` varchar(100) NOT NULL,
  `nroLegajo` int(45) NOT NULL,
  `convenio` varchar(100) NOT NULL,
  `dni` int(11) NOT NULL,
  `telefono` int(11) DEFAULT NULL,
  `direccion` varchar(100) DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL,
  `tipoEmpleado` varchar(45) NOT NULL,
  PRIMARY KEY (`idEmpleado`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

/*Data for the table `empleado` */

insert  into `empleado`(`idEmpleado`,`nombreE`,`apellidoE`,`nroLegajo`,`convenio`,`dni`,`telefono`,`direccion`,`email`,`tipoEmpleado`) values (2,'Pepito','Hongo',23123,'Contratado',32121212,4897645,'Los Reyunos 444','pepehongo@hotmail.com','Facilitador'),(3,'Carla','Sosa',32131,'Planta Permanente',65743522,4782948,'Los Toldos 333','carlita@hotmail.com','Administrador Base de Datos'),(4,'Empleado','Probando',213123,'Planta Permanente',33421231,4231231,'La direccion 222','probandoempleado@hotmail.com','Directivo'),(6,'Carlos','Gonzalez',23142,'Planta Permanente',23879437,4964572,'San Martin 432','gonzalezcarlos@hotmail.com','Facilitador'),(7,'Sebastian','Santa Maria',21341,'Planta Permanente',32890673,4789032,'Los Alamos 432','sebas@hotmail.com','Facilitador'),(8,'Marcelo','Contreras',12894,'Contratado',29806389,4567823,'Anchorena 284','marceloc@hotmail.com','Administrador'),(9,'Matias','Morales',26783,'Planta Permanente',36902749,4237519,'Carrodilla 32','matiasm@hotmail.com','Auditor'),(10,'Alejandro','Vazquez ',19853,'Contratado',20784156,4378921,'Bustamente 907','alejandrov@gmail.com','Administrador Base de Datos'),(11,'Diego','Villa',14523,'Planta Permanente',28199530,4093782,'Cerrito 23','diegov@gmail.com','Directivo'),(12,'Pablo','Martinez',29902,'Contratado',31874240,4782510,'Tiburcio Benegas 12','pablom@hotmail.com','Auditor'),(13,'Aldana','Baeza',27902,'Contratado',32085237,4983256,'Azcuenaga 188','aldanatb@hotmail.com','Administrador');

/*Table structure for table `encuesta` */

DROP TABLE IF EXISTS `encuesta`;

CREATE TABLE `encuesta` (
  `idEncuesta` int(11) NOT NULL AUTO_INCREMENT,
  `nombreEncuesta` varchar(45) NOT NULL,
  `fechaEncuesta` date NOT NULL,
  `idEstadoEncuesta` int(11) NOT NULL,
  `idEmpleado` int(11) NOT NULL,
  PRIMARY KEY (`idEncuesta`),
  KEY `idEstadoE` (`idEstadoEncuesta`),
  KEY `idEmpleado` (`idEmpleado`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Data for the table `encuesta` */

insert  into `encuesta`(`idEncuesta`,`nombreEncuesta`,`fechaEncuesta`,`idEstadoEncuesta`,`idEmpleado`) values (1,'Abordaje Poblacional','2017-03-15',1,11);

/*Table structure for table `encuestado` */

DROP TABLE IF EXISTS `encuestado`;

CREATE TABLE `encuestado` (
  `idEncuestado` int(11) NOT NULL AUTO_INCREMENT,
  `nombreEncuestado` varchar(45) NOT NULL,
  `apellidoEncuestado` varchar(45) NOT NULL,
  `dniEncuestado` int(11) NOT NULL,
  `edad` int(11) NOT NULL,
  `sexo` varchar(10) NOT NULL,
  `idRelevamiento` int(11) NOT NULL,
  `idAfiliado` int(11) DEFAULT NULL,
  PRIMARY KEY (`idEncuestado`),
  KEY `idRelevamiento` (`idRelevamiento`),
  KEY `idAfiliado` (`idAfiliado`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

/*Data for the table `encuestado` */

insert  into `encuestado`(`idEncuestado`,`nombreEncuestado`,`apellidoEncuestado`,`dniEncuestado`,`edad`,`sexo`,`idRelevamiento`,`idAfiliado`) values (2,'Carlos','Menem',11111111,50,'M',48,NULL),(3,'Pepe','Robles',32085237,50,'M',48,NULL),(4,'Susi','Correa',22222222,34,'F',48,NULL),(5,'Cecilia','Paez',33333333,34,'F',48,NULL);

/*Table structure for table `estado_encuesta` */

DROP TABLE IF EXISTS `estado_encuesta`;

CREATE TABLE `estado_encuesta` (
  `idEstadoEncuesta` int(11) NOT NULL AUTO_INCREMENT,
  `nombreEstadoE` varchar(45) NOT NULL,
  `descripEstadoE` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`idEstadoEncuesta`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

/*Data for the table `estado_encuesta` */

insert  into `estado_encuesta`(`idEstadoEncuesta`,`nombreEstadoE`,`descripEstadoE`) values (1,'Iniciada','Se inicio pero no se termino de realizar.'),(2,'Terminada','La encuesta fue finalizada.');

/*Table structure for table `etiqueta` */

DROP TABLE IF EXISTS `etiqueta`;

CREATE TABLE `etiqueta` (
  `idEtiqueta` int(11) NOT NULL AUTO_INCREMENT,
  `nombreEtiqueta` varchar(45) NOT NULL,
  `descEtiqueta` varchar(45) NOT NULL,
  PRIMARY KEY (`idEtiqueta`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

/*Data for the table `etiqueta` */

insert  into `etiqueta`(`idEtiqueta`,`nombreEtiqueta`,`descEtiqueta`) values (1,'Relacion','Conj de datos sobre la relación de parentesco'),(2,'Nivel Educativo','Nivel educativo al que accedio hasta ahora'),(3,'Ocupacion','Tipos de ocupación del encuestado'),(4,'Cobertura de Salud','Cobertura de salud del encuestado'),(5,'Tipo de Embarazo',''),(6,'Nacimiento',''),(7,'Peso del Niño',''),(8,'Actividad Extraescolar',''),(9,'Lugar de la Actividad Extraescolar',''),(10,'Estado de Salud',''),(11,'Validez','Cuanto se vale la persona por si misma'),(12,'Accesibilidad a un Médico','Nivel de dificultad para acceder a un médico'),(13,'Tipo de Discapacidad',''),(14,'Nivel de Vivienda',''),(15,'','');

/*Table structure for table `localidad` */

DROP TABLE IF EXISTS `localidad`;

CREATE TABLE `localidad` (
  `id_tlocalidad` int(11) NOT NULL AUTO_INCREMENT,
  `id_tdeparta` int(11) NOT NULL,
  `cploc` int(11) NOT NULL,
  `descloc` varchar(45) NOT NULL,
  PRIMARY KEY (`id_tlocalidad`),
  KEY `id_tdeparta` (`id_tdeparta`)
) ENGINE=InnoDB AUTO_INCREMENT=345 DEFAULT CHARSET=latin1;

/*Data for the table `localidad` */

insert  into `localidad`(`id_tlocalidad`,`id_tdeparta`,`cploc`,`descloc`) values (0,0,0,'SIN DATOS'),(1,5,5509,'VISTALBA'),(2,6,5513,'LUZURIAGA'),(3,7,5584,'PALMIRA'),(4,9,5579,'SANTA MARIA DE ORO'),(5,12,5535,'LAGUNA DEL ROSARIO'),(6,13,5561,'ZAMPALITO'),(7,14,5563,'LOS SAUCES'),(8,16,5539,'PUNTA DE AGUA'),(9,17,5634,'KILOMETRO 884'),(10,18,5613,'EL CORTADERAL'),(11,2,5545,'USPALLATA'),(12,3,5527,'LOS CORRALITOS'),(13,5,0,'LOS BARRIALES'),(14,6,5569,'TRES ESQUINAS'),(15,7,5582,'RAMBLON'),(16,9,5582,'ING, GIAGNONI'),(17,12,5533,'TULUMAYA (CIUDAD)'),(18,13,5560,'ZAPATA'),(19,16,5603,'RAMA CAIDA'),(20,17,5621,'LA CALIFORNIA'),(21,18,5613,'AGUA BOTADA'),(22,3,5519,'PEDRO MOLINA'),(23,6,5517,'VILLA SECA'),(24,7,5570,'CIUDAD'),(25,12,5533,'LAS VIOLETAS'),(26,16,5624,'REAL DEL PADRE'),(27,17,5634,'LA ESCANDINAVA'),(28,18,5611,'EL MANZANO'),(29,3,5525,'RODEO DE LA CRUZ'),(30,7,5589,'TRES PORTEÑAS'),(31,12,5533,'SAN JOSE'),(32,16,5600,'CIUDAD'),(33,17,5632,'LA MARZOLINA'),(34,18,5613,'LAS JUNTAS'),(35,3,5503,'SAN FCO.DEL MONTE'),(36,12,5537,'SAN MIGUEL'),(37,16,5615,'25 DE MAYO'),(38,17,5632,'LA MORA'),(39,3,5519,'SAN JOSE'),(40,12,5533,'TRES DE MAYO'),(41,16,5622,'VILLA ATUEL'),(42,17,5634,'LOS CAMPAMENTOS'),(43,3,5521,'VILLA NUEVA'),(44,16,5611,'EL SOSNEADO'),(45,17,5621,'LOS COMPARTOS'),(46,3,5519,'NUEVA CIUDAD'),(47,16,5600,'TOLEDANO'),(48,17,5636,'LOS HUARPES'),(49,16,5603,'SALTO DE LAS ROSAS'),(50,17,6279,'MEDIA LUNA'),(51,16,5594,'EL MOLINO'),(52,17,5637,'OVEJERIA'),(53,16,5600,'ISLA DIAMANTE'),(54,17,5637,'PAMPA DEL TIGRE'),(55,16,5601,'CAPITAN MONTOYA'),(56,17,5621,'POSTE DE HIERRO'),(57,16,5603,'RINCON DEL ATUEL'),(58,17,5620,'POZO HONDO'),(59,16,5605,'ATUEL NORTE'),(60,17,5621,'SAN PEDRO DEL ATUEL'),(61,17,5621,'EL DESVIO'),(62,1,5500,'PRIMERA SECCION'),(63,2,5539,'CAPDEVILA'),(64,3,5533,'BERMEJO'),(65,4,5501,'GDOR.BENEGAS'),(66,5,5509,'AGRELO'),(67,6,5513,'COQUIMBITO'),(68,7,5571,'ALTO SALVADOR'),(69,8,5582,'ALGARROBO GRANDE'),(70,9,5575,'ANDRADES'),(71,10,5592,'LA DORMIDA'),(72,11,5598,'DESAGUADERO'),(73,12,5533,'COLONIA ESTRELLA'),(74,13,5509,'ANCHORIS'),(75,14,5565,'CAMPO DE LOS ANDES'),(76,15,5569,'EUGENIO BUSTOS'),(77,16,5603,'CAÑADA SECA'),(78,17,5634,'BOWEN'),(79,18,5613,'RIO BARRANCAS'),(80,1,5500,'SEGUNDA SECCION'),(81,2,5541,'EL ALGARROBAL'),(82,3,5523,'BUENA NUEVA'),(83,4,5501,'CIUDAD'),(84,5,5505,'CARRODILLA'),(85,6,5517,'CRUZ DE PIEDRA'),(86,7,5582,'ALTO VERDE'),(87,8,5582,'ALTO VERDE'),(88,9,5577,'CAMPAMENTOS'),(89,10,5594,'LAS CATITAS'),(90,11,5590,'CIUDAD'),(91,12,5535,'COSTA DE ARAUJO'),(92,13,5561,'CORDON DEL PLATA'),(93,14,5565,'COLONIA LAS ROSAS'),(94,15,5569,'CHILECITO'),(95,16,5603,'CUADRO BENEGAS'),(96,17,5636,'CANALEJAS'),(97,18,5621,'AGUA ESCONDIDA'),(98,1,5500,'TERCERA SECCION'),(99,2,5541,'EL BORBOLLON'),(100,3,5523,'CAPILLA DEL ROSARIO'),(101,4,5501,'LAS TORTUGAS'),(102,5,5505,'CHACRAS DE CORIA'),(103,6,5531,'FRAY LUIS BELTRAN'),(104,7,5570,'BUEN ORDEN'),(105,8,5573,'CIUDAD'),(106,9,5579,'EL MIRADOR'),(107,10,5596,'CIUDAD'),(108,11,5590,'LAS CHACRITAS'),(109,12,5535,'EL CARMEN'),(110,13,5561,'EL PERAL'),(111,14,5539,'EL TOTORAL'),(112,15,5567,'LA CONSULTA'),(113,16,5607,'CUADRO NACIONAL'),(114,17,5621,'CARMENSA'),(115,18,5613,'CIUDAD'),(116,1,5500,'CUARTA SECCION'),(117,2,5539,'EL CHALLAO'),(118,3,5525,'CNIA.SEGOVIA'),(119,4,5501,'PRESIDENTE SARMIENTO'),(120,5,5509,'EL CARRIZAL'),(121,6,5511,'GRAL.GUTIERREZ'),(122,7,5589,'CHAPANAY'),(123,8,5572,'LA COLONIA'),(124,9,5579,'LA CENTRAL'),(125,10,5596,'LA COSTA'),(126,11,5590,'VILLA ANTIGUA'),(127,12,5533,'EL CHILCAL'),(128,13,5561,'EL ZAMPAL'),(129,14,5565,'LA PRIMAVERA'),(130,15,5569,'PAREDITAS'),(131,16,5600,'EL CERRITO'),(132,17,5621,'COCHICO'),(133,18,5613,'RIO GRANDE'),(134,1,5500,'QUINTA SECCION'),(135,2,5541,'EL PASTAL'),(136,3,5519,'DORREGO'),(137,4,5501,'SAN FCO.DEL MONTE'),(138,5,5505,'LA PUNTILLA'),(139,6,5517,'GRAL.ORTEGA'),(140,7,5589,'LA CHIMBA'),(141,8,5585,'LOS BARRIALES'),(142,9,5579,'LA LIBERTAD'),(143,10,5596,'VILLA CABECERA'),(144,11,5590,'LA MENTA'),(145,12,5533,'EL PLUMERO'),(146,13,5561,'GUALTALLARY'),(147,14,5560,'LAS PINTADAS'),(148,15,5569,'CIUDAD'),(149,16,5605,'EL NIHUIL'),(150,17,5632,'CNIA.ALVEAR OESTE'),(151,18,5613,'LAS LOICAS'),(152,1,5500,'SEXTA SECCION'),(153,2,5541,'EL PLUMERILLO'),(154,3,5533,'EL SAUCE'),(155,4,5547,'VILLA HIPODROMO'),(156,5,5549,'LAS COMPUERTAS'),(157,6,5517,'LAS BARRANCAS'),(158,7,5571,'CHIVILCOY'),(159,8,5585,'MEDRANO'),(160,9,5575,'LOS ARBOLES'),(161,10,5596,'12 de Octubre'),(162,11,5590,'VILLA NUEVA'),(163,12,5533,'EL VERGEL'),(164,13,5561,'LA ARBOLEDA'),(165,14,5563,'LOS ARBOLES'),(166,15,5569,'TRES ESQUINAS'),(167,16,5603,'GOUDGE'),(168,17,5637,'CORRAL DE LORCA'),(169,18,5611,'RANQUIL'),(170,2,5543,'EL RESGUARDO'),(171,3,5519,'GRAL.BELGRANO'),(172,4,5501,'VILLA JOVITA'),(173,5,5507,'CIUDAD'),(174,6,5517,'LUNLUNTA'),(175,7,5589,'DIVISADERO'),(176,8,5579,'MUNDO NUEVO'),(177,9,5585,'MEDRANO'),(178,12,5535,'ING.GUSTAVO ANDRE'),(179,13,5561,'LA CARRERA'),(180,14,5560,'LOS CHACAYES'),(181,16,5623,'JAIME PRATS'),(182,17,5621,'EL CEIBO'),(183,18,5611,'BARDAS BLANCAS'),(184,2,5539,'EL ZAPALLAR'),(185,3,5523,'JESUS NAZARENO'),(186,4,5501,'VILLA MARINI'),(187,5,5507,'MAYOR DRUMMOND'),(188,6,5515,'CIUDAD'),(189,7,5589,'EL CENTRAL'),(190,8,5579,'PHILLIPS'),(191,9,5579,'MUNDO NUEVO'),(192,12,5533,'JOCOLI'),(193,13,5561,'SAN JOSE'),(194,14,5560,'CIUDAD'),(195,16,5603,'LA LLAVE'),(196,17,5620,'EL JUNCALITO'),(198,2,5539,'LA CIENEGUITA'),(199,3,5527,'KILOMETRO 8'),(200,4,5501,'VILLA DEL PARQUE'),(201,5,5507,'PERDRIEL'),(202,6,5529,'RODEO DEL MEDIO'),(203,7,5570,'EL ESPIÑO'),(204,8,5585,'RODRIGUEZ PEÑA'),(205,9,5579,'REDUCCION DE ABAJO'),(206,12,5535,'ASUNCION'),(207,13,5561,'SANTA CLARA'),(208,14,5563,'VILLA SECA'),(209,16,5605,'LAS MALVINAS'),(210,17,5609,'ESTACION GOICO'),(211,18,5611,'EL ALAMBRADO'),(212,2,5557,'LAS CUEVAS'),(213,3,5527,'KILOMETRO 11'),(214,4,5501,'TRAPICHE'),(215,5,5549,'POTRERILLOS'),(216,6,5517,'RUSSELL'),(217,7,5570,'MONTECASEROS'),(218,8,5582,'ING. GIAGNONI'),(219,9,5579,'REDUCCION DE ARRIBA'),(220,12,5533,'LA HOLANDA'),(221,13,5561,'CIUDAD'),(222,14,5565,'VISTA FLORES'),(223,16,5601,'LAS PAREDES'),(224,17,5609,'GASPAR CAMPOS'),(225,18,5611,'COIHUECO'),(226,2,5539,'CIUDAD'),(227,3,5527,'LA PRIMAVERA'),(228,5,5509,'UGARTECHE'),(229,6,5587,'SAN ROQUE'),(230,7,5535,'NUEVA CALIFORNIA'),(231,9,5577,'CIUDAD'),(232,12,5533,'LA PEGA'),(233,13,5561,'VILLA BASTIA'),(234,14,5560,'COSTA ANZORENA'),(235,16,5609,'MONTE COMAN'),(236,17,5620,'CIUDAD'),(237,18,5613,'PATA MORA'),(238,2,5539,'PANQUEHUA'),(239,3,5519,'LAS CAÑAS'),(240,1,0,'SIN DATOS'),(241,2,0,'SIN DATOS'),(242,3,0,'SIN DATOS'),(243,4,0,'SIN DATOS'),(244,5,0,'SIN DATOS'),(245,6,0,'SIN DATOS'),(246,7,0,'SIN DATOS'),(247,8,0,'SIN DATOS'),(248,9,0,'SIN DATOS'),(249,10,0,'SIN DATOS'),(250,11,0,'SIN DATOS'),(251,12,0,'SIN DATOS'),(252,13,0,'SIN DATOS'),(253,14,0,'SIN DATOS'),(254,15,0,'SIN DATOS'),(255,16,0,'SIN DATOS'),(256,17,0,'SIN DATOS'),(257,18,0,'SIN DATOS'),(306,2,5555,'PUENTE DEL INCA'),(307,2,5551,'POLVAREDA'),(308,2,5539,'VILLAVICENCIO'),(329,7,5582,'INGENIERO GIAGNONI'),(330,10,5582,'RAMBLON'),(331,12,5533,'SAN FRANCISCO'),(332,12,5533,'PARAMILLO'),(333,12,5533,'LA PALMERA'),(344,10,5594,'EL MARCADO');

/*Table structure for table `nivel` */

DROP TABLE IF EXISTS `nivel`;

CREATE TABLE `nivel` (
  `idNivel` int(11) NOT NULL AUTO_INCREMENT,
  `descripNivel` varchar(100) NOT NULL,
  PRIMARY KEY (`idNivel`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

/*Data for the table `nivel` */

insert  into `nivel`(`idNivel`,`descripNivel`) values (2,'Facilitador'),(3,'Auditor'),(4,'Directivo'),(5,'Administrador'),(6,'Administrador Base de Datos'),(7,'Creador Encuesta');

/*Table structure for table `parentesco` */

DROP TABLE IF EXISTS `parentesco`;

CREATE TABLE `parentesco` (
  `id_tparentesco` int(11) NOT NULL AUTO_INCREMENT,
  `descpare` varchar(45) NOT NULL,
  PRIMARY KEY (`id_tparentesco`)
) ENGINE=InnoDB AUTO_INCREMENT=31 DEFAULT CHARSET=latin1;

/*Data for the table `parentesco` */

insert  into `parentesco`(`id_tparentesco`,`descpare`) values (0,'Titular'),(1,'Conyugue'),(2,'Hijo/a'),(3,'Padre/Madre'),(4,'Suegro/a'),(5,'Concubino/a'),(6,'Nieto/a'),(7,'Tenencia Definitiva'),(8,'Yerno'),(9,'Nuera'),(10,'Tenencia Provisoria'),(11,'Hermano/a'),(19,'Sin Datos'),(20,'Ex Conyugue'),(23,'Guarda Preadoptiva'),(24,'Sobrino/a'),(27,'Bisnietos'),(28,'Cuñado/a'),(29,'Curatela'),(30,'Conviviente');

/*Table structure for table `pregunta` */

DROP TABLE IF EXISTS `pregunta`;

CREATE TABLE `pregunta` (
  `idPregunta` int(11) NOT NULL AUTO_INCREMENT,
  `pregunta` text NOT NULL,
  `descripPregunta` text,
  `idSubPregunta` int(11) DEFAULT NULL,
  `idBloque` int(11) NOT NULL,
  `idTipoPregunta` int(11) NOT NULL,
  `idEtiqueta` int(11) DEFAULT NULL,
  PRIMARY KEY (`idPregunta`),
  KEY `idSubPregunta` (`idSubPregunta`),
  KEY `idBloque` (`idBloque`),
  KEY `idTipoPregunta` (`idTipoPregunta`),
  KEY `idEtiqueta` (`idEtiqueta`),
  KEY `idSubPregunta_2` (`idSubPregunta`)
) ENGINE=InnoDB AUTO_INCREMENT=85 DEFAULT CHARSET=latin1;

/*Data for the table `pregunta` */

insert  into `pregunta`(`idPregunta`,`pregunta`,`descripPregunta`,`idSubPregunta`,`idBloque`,`idTipoPregunta`,`idEtiqueta`) values (1,'Nombre y apellido del facilitador',NULL,NULL,1,8,NULL),(2,'Fecha de realización de la entrevista',NULL,NULL,1,3,NULL),(3,'Departamento',NULL,NULL,1,8,NULL),(4,'Distrito',NULL,NULL,1,8,NULL),(5,'Barrio',NULL,NULL,1,6,NULL),(6,'¿Que relación de parentesco tiene con el titular?',NULL,NULL,2,2,1),(7,'Edad',NULL,NULL,2,6,NULL),(8,'Sexo',NULL,NULL,2,2,NULL),(9,'¿Esta estudiando en este momento?',NULL,NULL,2,2,NULL),(10,'¿A qué nivel educativo llegó hasta ahora?',NULL,NULL,2,2,2),(11,'¿Cual es su ocupación, a qué se dedica principalmente?\r\n',NULL,NULL,2,2,3),(12,'¿Qué cobertura de salud tiene, OSEP u otra cobertura?',NULL,NULL,2,2,4),(13,'En los últimos 6 meses, ¿utilizaron algún servicio de la obra social?',NULL,NULL,3,4,NULL),(14,'Si utilizo un servicio de OSEP',NULL,12,3,1,NULL),(15,'Si no utilizo un servicio de OSEP',NULL,12,3,1,NULL),(16,'¿El embarazo fue normal o el profesional lo considero de riesgo?',NULL,NULL,4,2,5),(17,'¿El niño/a nació en termino o fue prematuro?',NULL,NULL,4,2,6),(18,'¿Recuerda cuanto peso al nacer el niño/a? Anotar el peso al nacer en gramos',NULL,NULL,4,6,NULL),(19,'(Si es mayor de un año)¿Camino cerca (o al rededor de cumplir el 1er año de vida?',NULL,NULL,4,4,NULL),(20,'¿Lo llevaron al control auditivo que se realiza para detectar problemas de oído en los recién nacidos?',NULL,NULL,4,4,NULL),(21,'¿Realizo algún control de salud en los últimos 3 meses?',NULL,NULL,4,4,NULL),(22,'En el ultimo control de salud, ¿el profesional anotó que su peso es?',NULL,NULL,4,2,7),(23,'¿Tiene las vacunas al día?',NULL,NULL,4,4,NULL),(24,'¿Esta recibiendo la leche de OSEP?',NULL,NULL,4,4,NULL),(25,'¿Porque no la recibe?',NULL,24,4,6,NULL),(26,'En el ultimo año, ¿ha realizado algún control con un oculista?',NULL,NULL,5,4,NULL),(27,'En el ultimo año, ¿ha realizado algún control con un odontologo?',NULL,NULL,5,4,NULL),(28,'¿El niño/a esta escolarizado?',NULL,NULL,5,4,NULL),(29,'Si el niño esta escolarizado. Durante el año pasado/este año, ¿ha tenido algún tipo de dificultad en la escuela?',NULL,28,5,6,NULL),(30,'¿Realiza en forma regular alguna actividad(extraescolar) es decir, hace deportes, alguna actividad artística u otra actividad todas las semanas?',NULL,NULL,5,4,NULL),(31,'Si realiza, ¿qué actividad realiza?',NULL,30,5,2,8),(32,'Si realiza, ¿donde realiza la actividad?',NULL,30,5,2,9),(33,'Para empezar, ¿como diría qué es su estado general de salud en este momento?',NULL,NULL,6,2,10),(34,'¿En los últimos 2 años, concurrió a realizarse un Papanicolaou?',NULL,NULL,6,4,NULL),(35,'Si se realizó el Papanicolaou',NULL,34,6,1,NULL),(36,'Si NO se realizó el Papanicolaou',NULL,34,6,1,NULL),(37,'Solo si es Mayor de 40. En los últimos 2 años, ¿se ha realizado una mamografía?',NULL,NULL,6,4,NULL),(38,'Si se realizó mamografía',NULL,37,6,1,NULL),(39,'Si NO se realizo mamografía',NULL,37,6,1,NULL),(40,'¿Cual condición actual de validez?',NULL,NULL,7,2,11),(41,'¿Necesita usar en forma permanente silla de ruedas, bastón, andador o algún otro instrumento para caminar?',NULL,NULL,7,4,NULL),(42,'¿Usa audífono o tiene dificultad permanente para escuchar conversaciones o la televisión a un volumen normal?',NULL,NULL,7,4,NULL),(43,'¿Ha sufrido alguna caída en el ultimo mes?',NULL,NULL,7,4,NULL),(44,'¿Necesita o ha tenido que realizar modificaciones en su casa para no caerse o poder realizar sus tareas diarias?',NULL,NULL,7,4,NULL),(45,'¿Experimenta en forma permanente problemas de olvidos o confusiones?',NULL,NULL,7,4,NULL),(46,'Normalmente, ¿necesita ayuda para realizar trámites, como cobrar la jubilación, pedir turno para el médico, autorizar una orden o pagar servicios, por ejemplo?',NULL,NULL,7,4,NULL),(47,'Si tiene una dificultad de salud o cualquier urgencia, ¿cuenta seguro con alguien que lo/a pueda ayudar a resolverla?',NULL,NULL,7,4,NULL),(48,'¿Concurre habitualmente a algún centro de jubilados, iglesia, club u otro ámbito de tipo social?',NULL,NULL,7,4,NULL),(49,'Si realiza alguna actividad, ¿que actividad realiza?',NULL,48,7,6,NULL),(50,'¿Tiene algún hobbie o actividad que haga frecuentemente para ocupar el tiempo libre, por ejemplo leer, hacer cursos o una actividad física o manual?',NULL,NULL,7,4,NULL),(51,'Respecto de la atención médica, ¿tiene un médico de cabecera, es decir, un profesional que lo conozca como persona y lo atienda habitualmente?',NULL,NULL,7,4,NULL),(52,'Si tiene médico de cabecera, ¿ese médico es de OSEP o le recibe OSEP?',NULL,51,7,4,NULL),(53,'¿Que tan complicado le resulta ver a un profesional cuando tiene que atenderse por algún motivo?',NULL,NULL,7,2,12),(54,'¿Cuál es su discapacidad?(puede haber mas de una)',NULL,NULL,8,1,13),(55,'(Abierta, escuchar y codificar)¿Realizo el empadronamiento en OSEP, hizo el trámite de registro de su situación en la Obra Social?',NULL,NULL,8,4,NULL),(56,'(Abierta, escuchar y codificar)¿Quién o quienes lo orientan sobre los tratamientos que necesita?Es decir,¿quién o quienes que ustedes valoren le indican qué tratamientos sería bueno que realizara pos su discapacidad?(marcar todos los que corresponden)',NULL,NULL,8,1,NULL),(57,'(Si menciono a algún profesional de la salud)De los profesionales de la salud que mencionó, ¿alguno es el profesional \"de cabecera\", es decir, el profesional que mas lo conoce y que deriva a los distintos tratamientos?',NULL,56,8,1,NULL),(58,'(Abierta) ¿Que le gustaría que OSEP hiciera por ud?',NULL,NULL,8,6,NULL),(59,'¿De cuántos meses está embarazada?',NULL,NULL,9,6,NULL),(60,'¿Concurrió al control el mes pasado?',NULL,NULL,9,4,NULL),(61,'Si concurrio, ¿Que tal complicado le resultó en esa oportunidad todo el proceso que implicó hacerse el control teniendo en cuenta todos los pasos, es decir, conseguir turno, esperar hasta el día de la atencion, llegar al lugar y que la atiendan?',NULL,60,9,2,NULL),(62,'Si NO concurrió, ¿Porque no concurrió?',NULL,60,9,6,NULL),(63,'(Abierta, escuchar y codificar)¿El embarazo lo esta llevando un profesional en especial o se atiende con distintos profesionales?',NULL,NULL,9,2,NULL),(64,'El o los profesionales que la atiende/n ¿ha detectado algún problema en el embarazo?',NULL,NULL,9,4,NULL),(65,'Si han detectado algún problema, ¿cuál?',NULL,64,9,6,NULL),(66,'¿Cuenta con apoyo familiar, de su pareja o de alguna otra persona que la acompañe, la contenga y la ayuda mientras transcurre el embarazo? ',NULL,NULL,9,4,NULL),(67,'Respecto de los servicios básicos, ¿esta casa tiene conexión a...?',NULL,NULL,10,1,NULL),(68,'La vivienda que habitan, ¿es propia?',NULL,NULL,10,4,NULL),(69,'(Preguntar y Observar)Por último, en su barrio/zona donde vive ¿hay presencia de...?',NULL,NULL,10,1,NULL),(70,'¿Usted contribuye con la economía de la familia?',NULL,NULL,2,4,NULL),(71,'¿Cuántas horas por semana trabaja?',NULL,NULL,2,6,NULL),(72,'¿En qué lugar trabaja?',NULL,NULL,2,6,NULL),(73,'¿A qué se dedica concretamente?',NULL,NULL,2,6,NULL),(74,'Teléfono para supervisión (fijo o celular)',NULL,NULL,11,6,NULL),(75,'Horario para llamar',NULL,NULL,11,6,NULL),(76,'Celular con internet',NULL,NULL,11,4,NULL),(77,'(Completar por Observación) A-Nivel de Vivienda',NULL,NULL,11,1,14),(78,'B-Materiales predominantes de paredes',NULL,77,11,1,NULL),(79,'C-Materiales predominantes del techo',NULL,77,11,1,NULL),(80,'D-Ventilación',NULL,77,11,1,NULL),(81,'Observaciones Generales : Accesibilidad',NULL,NULL,11,2,NULL),(82,'Observaciones Generales',NULL,NULL,11,6,NULL),(83,'',NULL,NULL,0,0,NULL),(84,'',NULL,NULL,0,0,NULL);

/*Table structure for table `relevamiento` */

DROP TABLE IF EXISTS `relevamiento`;

CREATE TABLE `relevamiento` (
  `idRelevamiento` int(11) NOT NULL AUTO_INCREMENT,
  `nroRelevamiento` int(11) NOT NULL,
  `fechaRelevamiento` date NOT NULL,
  `observCriticidad` text NOT NULL,
  `idCriticidad` int(11) NOT NULL,
  `idEncuesta` int(11) NOT NULL,
  `idVisita` int(11) DEFAULT NULL,
  PRIMARY KEY (`idRelevamiento`),
  KEY `idCriticidad` (`idCriticidad`),
  KEY `idEncuesta` (`idEncuesta`),
  KEY `idVisita` (`idVisita`)
) ENGINE=InnoDB AUTO_INCREMENT=43 DEFAULT CHARSET=latin1;

/*Data for the table `relevamiento` */

insert  into `relevamiento`(`idRelevamiento`,`nroRelevamiento`,`fechaRelevamiento`,`observCriticidad`,`idCriticidad`,`idEncuesta`,`idVisita`) values (42,2324124,'0000-00-00','Alta',2,1,NULL);

/*Table structure for table `respuesta` */

DROP TABLE IF EXISTS `respuesta`;

CREATE TABLE `respuesta` (
  `idRespuesta` int(11) NOT NULL AUTO_INCREMENT,
  `respuesta` varchar(145) NOT NULL,
  `descripRespuesta` text,
  PRIMARY KEY (`idRespuesta`)
) ENGINE=InnoDB AUTO_INCREMENT=151 DEFAULT CHARSET=latin1;

/*Data for the table `respuesta` */

insert  into `respuesta`(`idRespuesta`,`respuesta`,`descripRespuesta`) values (1,'Si',''),(2,'No',''),(3,'Titular',''),(4,'Conyugue o pareja conviviente',''),(5,'Hijo/a',NULL),(6,'Padre/Madre',NULL),(7,'Suegro/a',NULL),(8,'Yerno/Nuera',NULL),(9,'Nieto/a',NULL),(10,'Otro Familiar',NULL),(11,'Otro No Familiar',NULL),(12,'Femenino',NULL),(13,'Masculino',NULL),(14,'Ninguno',NULL),(15,'Primario Incompleto',NULL),(16,'Primario Completo',NULL),(17,'Secundario Incompleto',NULL),(18,'Secundario Completo',NULL),(19,'Terciario Incompleto',NULL),(20,'Terciario Completo',NULL),(21,'Universitario Incompleto',NULL),(22,'Universitario Completo o más',NULL),(23,'Trabajador Remunerado',NULL),(24,'Jubilado o Pensionado',NULL),(25,'Buscando trabajo',NULL),(26,'Estudia exclusivamente',NULL),(27,'Ama de casa exclusivamente',NULL),(28,'Estudia y trabaja',NULL),(29,'No trabaja',NULL),(30,'Salud Pública',NULL),(31,'Sólo OSEP',NULL),(32,'Obra Social',NULL),(33,'Prepaga',NULL),(34,'OSEP y otra',NULL),(35,'Servicio de Emergencia',NULL),(36,'Mutual con Servicios Médicos',NULL),(37,'Otro/a',NULL),(38,'Autoválido',NULL),(39,'Semiválido',NULL),(40,'Inválido',NULL),(41,'Fue a un efector de OSEP',NULL),(42,'Fue a un prestador privado',NULL),(43,'Fue a un Hospital o Centro de Salud Público',NULL),(44,'Ningún miembro de la familia se enfermo o tuvo accidente',NULL),(45,'No lo consideró necesario y tomó remedios caseros',NULL),(46,'Decidió tomar sus medicamentos habituales',NULL),(47,'Prefirió consultar en la farmacia y comprar los medicamentos',NULL),(48,'Quiso consultar pero no tuvo tiempo',NULL),(49,'Quiso consultar pero no tuvo dinero',NULL),(50,'Quiso consultar pero le cuesta mucho llegar al lugar de atención',NULL),(51,'Quiso consultar pero el horario de atención no le coincidía',NULL),(52,'Pidió turno pero no lo obtuvo',NULL),(53,'Consiguió turno pero todavía no le toca',NULL),(54,'Embarazo Normal',NULL),(55,'Embarazo de Riesgo',NULL),(56,'A término',NULL),(57,'Prematuro',NULL),(58,'Peso Normal',NULL),(59,'Bajo Peso',NULL),(60,'Sobrepeso',NULL),(61,'No asiste todavía',NULL),(62,'Deportiva',NULL),(63,'Artística',NULL),(64,'Comunitaria',NULL),(65,'Religiosa',NULL),(66,'No realiza',NULL),(67,'Club',NULL),(68,'Instituto',NULL),(69,'Academia',NULL),(70,'CIC',NULL),(71,'Biblioteca',NULL),(72,'Unión Vecinal',NULL),(73,'Muy bueno',NULL),(74,'Bueno',NULL),(75,'Regular',NULL),(76,'Malo',NULL),(77,'En hospital o centro propio de OSEP',NULL),(78,'En consultorio, clínica o sanatorio privado donde le reciben OSEP',NULL),(79,'En hospital público, centro de salud, sala',NULL),(80,'En consultorio, clínica o sanatorio donde no le reciben OSEP y paga particular',NULL),(81,'No tuvo tiempo',NULL),(82,'No tuvo dinero',NULL),(83,'No consiguió turno o lugar donde la atendieran',NULL),(84,'No sabe dónde hacérselo',NULL),(85,'Le da miedo, disgusto o vergüenza',NULL),(86,'Se olvidó',NULL),(87,'Por \"dejadez\"',NULL),(88,'No lo necesita, esta sana (percepción personal)',NULL),(89,'No conoce ese examen o no sabía que tenía que hacerselo',NULL),(90,'El médico no se lo indicó',NULL),(91,'Por edad avanzada',NULL),(92,'No le corresponde (contraindicación médica)',NULL),(93,'Mamógrafo móvil de OSEP',NULL),(94,'Simple',NULL),(95,'Complicado',NULL),(96,'Muy Complicado',NULL),(97,'Viene a Domicilio',NULL),(98,'Motora',NULL),(99,'Sensorial Visual',NULL),(100,'Sensorial Auditiva',NULL),(101,'Visceral',NULL),(102,'Mental o Cognitiva',NULL),(103,'No sabia que debía hacerlo',NULL),(104,'Médico General o Pediatra',NULL),(105,'Médico Especialista',NULL),(106,'Psicólogo/Psiquiatra',NULL),(107,'Médico Fisiátrica',NULL),(108,'Otro profesional de la salud ',NULL),(109,'Docente',NULL),(110,'Integrante de la red de madres',NULL),(111,'Integrante de otra organización civil o de ayuda',NULL),(112,'Otra persona que tiene una discapacidad o un familiar con una discapacidad que no está en ninguna organización (no profesional)',NULL),(113,'Un profesional ',NULL),(114,'Distintos profesionales en un solo lugar de atención',NULL),(115,'Distintos lugares de atención',NULL),(116,'Red de energía eléctrica ',NULL),(117,'Red de gas natural',NULL),(118,'Red de agua potable',NULL),(119,'Cloacas',NULL),(120,'Teléfono fijo',NULL),(121,'Internet',NULL),(122,'Basurales a cielo abierto',NULL),(123,'Fábricas contaminantes',NULL),(124,'Animales abandonados',NULL),(125,'Lugares de cría de animales(gallineros, chiqueros)',NULL),(126,'Desagüe de cloacas, aguas servidas',NULL),(127,'Insectos y roedores',NULL),(128,'Agroquímicos',NULL),(129,'Canales de riego, piletas y otro lugar donde haya agua que traiga problemas',NULL),(130,'Calles muy transitadas o autopistas',NULL),(131,'Calles de tierra',NULL),(132,'AB',NULL),(133,'C1',NULL),(134,'C2',NULL),(135,'C3',NULL),(136,'D1',NULL),(137,'D2',NULL),(138,'E',NULL),(139,'Material de construcción',NULL),(140,'Madera',NULL),(141,'Adobe',NULL),(142,'Chapa de metal, cartón',NULL),(143,'Membrana, teja, losa, baldosa',NULL),(144,'Madera, caña, paja',NULL),(145,'Suficiente',NULL),(146,'Escasa',NULL),(147,'Sin ventilación',NULL),(148,'Compleja',NULL),(149,'',NULL),(150,'',NULL);

/*Table structure for table `respuesta_elegida` */

DROP TABLE IF EXISTS `respuesta_elegida`;

CREATE TABLE `respuesta_elegida` (
  `idRespuestaElegida` int(11) NOT NULL AUTO_INCREMENT,
  `respBreve` text,
  `idRelevamiento` int(11) NOT NULL,
  `idEncuestado` int(11) DEFAULT NULL,
  `idRespPreg` int(11) DEFAULT NULL,
  PRIMARY KEY (`idRespuestaElegida`),
  KEY `idRelevamiento` (`idRelevamiento`),
  KEY `idEncuestado` (`idEncuestado`),
  KEY `idRespPreg` (`idRespPreg`)
) ENGINE=InnoDB AUTO_INCREMENT=139 DEFAULT CHARSET=latin1;

/*Data for the table `respuesta_elegida` */

insert  into `respuesta_elegida`(`idRespuestaElegida`,`respBreve`,`idRelevamiento`,`idEncuestado`,`idRespPreg`) values (35,NULL,42,NULL,2),(36,'Claveles Mendocinos',42,NULL,NULL),(37,'24',42,NULL,NULL),(127,NULL,48,2,20),(128,NULL,48,3,6),(129,'Barrio Solares',48,4,NULL),(130,'45',48,5,NULL);

/*Table structure for table `respuesta_pregunta` */

DROP TABLE IF EXISTS `respuesta_pregunta`;

CREATE TABLE `respuesta_pregunta` (
  `idRespPreg` int(11) NOT NULL AUTO_INCREMENT,
  `idPregunta` int(11) NOT NULL,
  `idRespuesta` int(11) NOT NULL,
  PRIMARY KEY (`idRespPreg`),
  KEY `idPregunta` (`idPregunta`),
  KEY `idRespuesta` (`idRespuesta`)
) ENGINE=InnoDB AUTO_INCREMENT=232 DEFAULT CHARSET=latin1;

/*Data for the table `respuesta_pregunta` */

insert  into `respuesta_pregunta`(`idRespPreg`,`idPregunta`,`idRespuesta`) values (1,6,3),(2,6,4),(3,6,5),(4,6,6),(5,6,7),(6,6,8),(7,6,9),(8,6,10),(9,6,11),(10,10,15),(11,10,16),(12,10,17),(13,10,18),(14,10,19),(15,10,20),(16,10,21),(17,10,22),(18,11,23),(19,11,24),(20,11,25),(21,11,26),(22,11,27),(23,11,28),(24,11,29),(25,12,30),(26,12,31),(27,12,32),(28,12,33),(29,12,34),(30,12,35),(31,12,36),(32,12,37),(33,14,41),(34,14,42),(35,14,43),(36,15,44),(37,15,45),(38,15,46),(39,15,47),(40,15,48),(41,15,49),(42,15,50),(43,15,51),(44,15,52),(45,15,53),(47,16,54),(48,16,55),(49,17,56),(50,17,57),(51,22,58),(52,22,59),(53,22,60),(54,31,62),(55,31,63),(56,31,64),(57,31,65),(58,31,37),(59,31,66),(60,32,67),(61,32,68),(62,32,69),(63,32,70),(64,32,71),(65,32,72),(66,32,37),(67,35,77),(68,35,78),(69,35,79),(70,35,80),(71,35,37),(72,36,81),(73,36,82),(74,36,83),(75,36,84),(76,36,85),(77,36,86),(78,36,87),(79,36,88),(80,36,89),(81,36,90),(82,36,91),(83,36,92),(84,38,93),(85,38,78),(86,38,79),(87,38,80),(88,38,37),(89,39,81),(90,39,82),(91,39,83),(92,39,84),(93,39,85),(94,39,86),(95,39,87),(96,39,88),(97,39,89),(98,39,90),(99,39,91),(100,39,92),(101,40,38),(102,40,39),(103,40,40),(104,53,94),(105,53,95),(106,53,96),(107,53,97),(108,54,98),(109,54,99),(110,54,100),(111,54,101),(112,54,102),(113,55,1),(114,55,2),(115,55,103),(116,56,104),(117,56,105),(118,56,106),(119,56,107),(120,56,108),(121,56,109),(122,56,110),(123,56,111),(124,56,112),(125,56,37),(126,57,104),(127,57,105),(128,57,106),(129,57,108),(130,61,94),(131,61,95),(132,63,113),(133,63,114),(134,63,115),(135,67,116),(136,67,117),(137,67,118),(138,67,119),(139,67,120),(140,67,121),(141,69,122),(142,69,123),(143,69,124),(144,69,125),(145,69,126),(146,69,127),(147,69,128),(148,69,129),(149,69,130),(150,69,131),(151,77,132),(152,77,133),(153,77,134),(154,77,135),(155,77,136),(156,77,137),(157,77,138),(158,78,139),(159,78,140),(160,78,141),(161,78,142),(162,79,143),(163,79,144),(164,79,142),(165,80,145),(166,80,146),(167,80,147),(168,81,94),(169,81,148),(170,13,1),(171,13,2),(172,19,1),(173,19,2),(174,20,1),(175,20,2),(176,21,1),(177,21,2),(178,23,1),(179,23,2),(180,24,1),(181,24,2),(182,26,1),(183,26,2),(184,27,1),(185,27,2),(186,28,1),(187,28,2),(188,30,1),(189,30,2),(190,34,1),(191,34,2),(192,37,1),(193,37,2),(194,41,1),(195,41,2),(196,42,1),(197,42,2),(198,43,1),(199,43,2),(200,44,1),(201,44,2),(202,45,1),(203,45,2),(204,46,1),(205,46,2),(206,47,1),(207,47,2),(208,48,1),(209,48,2),(210,50,1),(211,50,2),(212,51,1),(213,51,2),(214,52,1),(215,52,2),(216,55,1),(217,55,2),(218,60,1),(219,60,2),(220,64,1),(221,64,2),(222,66,1),(223,66,2),(224,68,1),(225,68,2),(226,70,1),(227,70,2),(228,76,1),(229,76,2),(230,0,0),(231,0,0);

/*Table structure for table `tipo_bloque` */

DROP TABLE IF EXISTS `tipo_bloque`;

CREATE TABLE `tipo_bloque` (
  `idTipoBloque` int(11) NOT NULL AUTO_INCREMENT,
  `nombreTipoB` varchar(45) NOT NULL,
  `descripTipoB` varchar(45) NOT NULL,
  PRIMARY KEY (`idTipoBloque`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

/*Data for the table `tipo_bloque` */

insert  into `tipo_bloque`(`idTipoBloque`,`nombreTipoB`,`descripTipoB`) values (1,'General',''),(2,'Personal','');

/*Table structure for table `tipo_doc` */

DROP TABLE IF EXISTS `tipo_doc`;

CREATE TABLE `tipo_doc` (
  `id_ttipodoc` int(11) NOT NULL AUTO_INCREMENT,
  `desctdoc` varchar(45) NOT NULL,
  PRIMARY KEY (`id_ttipodoc`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

/*Data for the table `tipo_doc` */

insert  into `tipo_doc`(`id_ttipodoc`,`desctdoc`) values (1,'Libreta Enrolamiento'),(2,'Libreta Civica'),(3,'Documento Nacional de Identidad'),(4,'Cedula de Identidad'),(5,'Cedula de Extranjeria'),(6,'Otros'),(7,'Pasaporte'),(8,'Medalla RN');

/*Table structure for table `tipo_pregunta` */

DROP TABLE IF EXISTS `tipo_pregunta`;

CREATE TABLE `tipo_pregunta` (
  `idTipoPregunta` int(11) NOT NULL AUTO_INCREMENT,
  `nombreTipoP` varchar(45) NOT NULL,
  `descripcionTipoP` text,
  PRIMARY KEY (`idTipoPregunta`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

/*Data for the table `tipo_pregunta` */

insert  into `tipo_pregunta`(`idTipoPregunta`,`nombreTipoP`,`descripcionTipoP`) values (1,'Multiple Opción Cargable','Cargar posibles respuestas por el creador de la encuesta para mostrar con checkboxs.'),(2,'Opción Única Desplegable Cargable','Cargar las posibles respuestas por el creador de la encuesta para mostrar en un combo seleccionable donde solo una opción puede ser elegida.'),(3,'Fecha','Fecha de una accion a realizar'),(4,'Si/No','Respuesta por Si o No No sabe/No contesta.'),(5,'Escala Lineal','Marcador de rango de valores'),(6,'Respuesta Breve','Respuesta que se debe escribir en un campo determinado.'),(7,'Multiple Opción de BD','Asignar posibles respuestas en base a registros guardados en una tabla de la Base de Datos.'),(8,'Opción Única Desplegable de BD','Asignar las posibles respuestas en base a registros guardados en una tabla de la Base de Datos para mostrar en un combo seleccionable donde solo una opción puede ser elegida.'),(9,'Hora','Hora de una acción a realizar.');

/*Table structure for table `usuario` */

DROP TABLE IF EXISTS `usuario`;

CREATE TABLE `usuario` (
  `idUsuario` int(11) NOT NULL AUTO_INCREMENT,
  `contrasenia` varchar(100) NOT NULL,
  `usuario` varchar(45) NOT NULL,
  `idNivel` int(11) NOT NULL,
  `idEmpleado` int(11) NOT NULL,
  PRIMARY KEY (`idUsuario`),
  KEY `idNivel` (`idNivel`),
  KEY `idEmpleado` (`idEmpleado`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

/*Data for the table `usuario` */

insert  into `usuario`(`idUsuario`,`contrasenia`,`usuario`,`idNivel`,`idEmpleado`) values (2,'0548244da52721107c2759a1e251963d','prueba',6,2),(3,'81dc9bdb52d04dc20036dbd8313ed055','aldana',6,3),(4,'81dc9bdb52d04dc20036dbd8313ed055','creador',7,13),(5,'81dc9bdb52d04dc20036dbd8313ed055','prueba',6,4);

/*Table structure for table `visita` */

DROP TABLE IF EXISTS `visita`;

CREATE TABLE `visita` (
  `idVisita` int(11) NOT NULL AUTO_INCREMENT,
  `nroAfiliado` int(45) NOT NULL,
  `nombreAfiliado` varchar(45) NOT NULL,
  `apellidoAfiliado` varchar(45) NOT NULL,
  `telefono` int(11) NOT NULL,
  `fechaHoy` date NOT NULL,
  `fechaVisita` date NOT NULL,
  `horaVisita` time NOT NULL,
  `cantLlamadas` int(11) NOT NULL,
  `idDireccion` int(11) NOT NULL,
  PRIMARY KEY (`idVisita`),
  KEY `idDireccion` (`idDireccion`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

/*Data for the table `visita` */

insert  into `visita`(`idVisita`,`nroAfiliado`,`nombreAfiliado`,`apellidoAfiliado`,`telefono`,`fechaHoy`,`fechaVisita`,`horaVisita`,`cantLlamadas`,`idDireccion`) values (1,2147483647,'Carlos','Roberti',4231231,'0000-00-00','2017-03-20','10:00:00',2,0),(2,30,'Probando','Apellido',23432423,'2017-03-08','2017-03-29','23:00:00',2,0),(3,332085237,'Laura','Noesta',4782678,'2017-03-10','2017-03-24','15:30:00',2,2),(4,2147483647,'Jose probando','Robles Probando',34231234,'2017-03-13','2017-03-24','04:02:00',3,3),(5,2147483647,'Pepe','Pompin',23134563,'2017-03-13','2017-03-30','04:02:00',2,4),(6,2147483647,'Carlos','Bala',4782678,'2017-03-13','2017-03-18','02:58:00',2,5);

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
