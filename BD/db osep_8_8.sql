/*
SQLyog Ultimate v9.63 
MySQL - 5.6.17 : Database - osep_db2
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`osep_db2` /*!40100 DEFAULT CHARACTER SET utf8 COLLATE utf8_spanish_ci */;

USE `osep_db2`;

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
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

/*Data for the table `bloque` */

insert  into `bloque`(`idBloque`,`nroBloque`,`nombreBloque`,`descripBloque`,`idEncuesta`,`idTipoBloque`) values (1,0,'De Identificación del Territorio/Facilitador/Familia Relevada y Encuesta','Bloque Inicial',1,1),(2,1,'Familia Conviviente','Bloque de Familia',1,2),(3,2,'Utilizacion de Servicios de Salud','Bloque para Afiliados',1,1),(4,3,'Salud de los Niños','Bloque Niños Menores de 2 años(0 a 1 año 11 meses y 29 días)',1,2),(5,3,'Salud de los Niños','Bloque Niños Mayores de 2 años y Menores de 14(2 a 14 año 11 meses y 29 días)',1,2),(6,4,'Salud de las Mujeres','Bloque Mujeres Mayores de 16 años',1,2),(7,5,'Salud de los Adultos Mayores','Bloque Mayores de 65 años',1,2),(8,6,'Afiliados con Discapacidad','Bloque para Discapacitados',1,2),(9,7,'Embarazadas','Bloque para integrantes de la familia embarazadas.\r\n',1,2),(10,8,'Vivienda y Entorno','Bloque características generales de la Vivienda.',1,1);

/*Table structure for table `criticidad` */

DROP TABLE IF EXISTS `criticidad`;

CREATE TABLE `criticidad` (
  `idCriticidad` int(11) NOT NULL AUTO_INCREMENT,
  `nombreCriticidad` varchar(45) NOT NULL,
  `descCriticidad` varchar(45) NOT NULL,
  PRIMARY KEY (`idCriticidad`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

/*Data for the table `criticidad` */

insert  into `criticidad`(`idCriticidad`,`nombreCriticidad`,`descCriticidad`) values (1,'Normal',''),(2,'Media',''),(3,'Alta','');

/*Table structure for table `departamento` */

DROP TABLE IF EXISTS `departamento`;

CREATE TABLE `departamento` (
  `id_tdeparta` int(11) NOT NULL AUTO_INCREMENT,
  `descdep` varchar(45) NOT NULL,
  PRIMARY KEY (`id_tdeparta`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=latin1;

/*Data for the table `departamento` */

insert  into `departamento`(`id_tdeparta`,`descdep`) values (1,'Capital'),(2,'Las Heras'),(3,'Guaymallén'),(4,'Godoy Cruz'),(5,'Luján de Cuyo'),(6,'Maipú'),(7,'San Martín'),(8,'Junín'),(9,'Rivadavia'),(10,'Santa Rosa'),(11,'La Paz'),(12,'Lavalle'),(13,'Tupungato'),(14,'Tunuyán'),(15,'San Carlos'),(16,'San Rafael'),(17,'General Alvear'),(18,'Malargüe');

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
) ENGINE=InnoDB AUTO_INCREMENT=48 DEFAULT CHARSET=latin1;

/*Data for the table `direccion` */

insert  into `direccion`(`idDireccion`,`calle`,`casa`,`numero`,`dptoNumero`,`entreCalles1`,`entreCalles2`,`barrio`,`observaciones`,`manzana`,`id_tlocalidad`) values (1,'Libertad',0,231,0,'Cochabamba','Cerrito','','La casa es interna','',0),(2,'Libertad',0,231,0,'Cochabamba','Cerrito','','La casa es interna','',0),(3,'Los sauces',2,321,4,'Patricios','San Martin','','Casa Verde','E',0),(4,'Azcuenaga',3,231,4,'Bustamante','Entre Rios','','Timbre de arriba','F',2),(5,'Carolo',3,657,8,'Cerrito','Panama','Los Fresnos','Probandooo','H',2),(26,'revolucion de mayo',0,1639,4,'ssss','','vila del parque','','',200),(27,'revolucion de mayo',0,1639,4,'ssss','','vila del parque','','',200),(28,'almafuerte',6,15481,2,'','','primero de septiembre','','k',226),(29,'almafuerte',6,15481,2,'','','primero de septiembre','','k',226),(30,'almafuerte',6,15481,2,'','','primero de septiembre','','k',226),(31,'almafuerte',6,1548,2,'','','primero de septiembre','','k',226),(32,'Carolo',3,657,8,'Cerrito','','Los Fresnos','','H',69),(37,'luis maria drago',28,3334,4,'las cañas y Francia media cuadra','','ciudad','','25',101),(38,'la calle 13',6,123331,12,'francia y talcahuano','','viejo','','k',192),(39,'luis maría drago',0,1223,4,'calle 11  y calle 12','','godoy cruz','','',101),(40,'tirasso',3,1234,3,'qqqqqqqqq','','santa ana','','13',100),(41,'santa teresita',0,1234,5,'don bosco y huarpes','','las camelias','','',66),(42,'valle fertil',3,222,8,'sssssssss y ggggggggg','','las cañas','','22',218),(43,'valle fertil',3,222,8,'sssssssss y ggggggggg','','las cañas','','22',218),(44,'valle fertil',3,222,8,'sssssssss y ggggggggg','','las cañas','','22',218),(45,'valle fertil',3,222,8,'sssssssss y ggggggggg','','las cañas','','22',218),(46,'valle fertil',3,222,8,'sssssssss y ggggggggg','','las cañas','','22',218),(47,'valle fertil',3,222,8,'sssssssss y ggggggggg','','las cañas','','22',218);

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
) ENGINE=InnoDB AUTO_INCREMENT=79 DEFAULT CHARSET=latin1;

/*Data for the table `empleado` */

insert  into `empleado`(`idEmpleado`,`nombreE`,`apellidoE`,`nroLegajo`,`convenio`,`dni`,`telefono`,`direccion`,`email`,`tipoEmpleado`) values (8,'Marcelo','Contreras',12894,'Contratado',29806389,4567823,'Anchorena 284','marceloc@hotmail.com','Administrador'),(9,'Matias','Morales',26783,'Planta Permanente',36902749,4237519,'Carrodilla 32','matiasm@hotmail.com','Auditor'),(11,'Diego','Villa',14523,'Planta Permanente',28199530,4093782,'Cerrito 23','diegov@gmail.com','Directivo'),(12,'Pablo','Martinez',29902,'Contratado',31874240,4782510,'Tiburcio Benegas 12','pablom@hotmail.com','Auditor'),(13,'Aldana','Baeza',27902,'Contratado',32085237,4983256,'Azcuenaga 188','aldanatb@hotmail.com','Administrador'),(15,'Usuario','OSEP',11111,'Planta Permanente',22222222,3333333,'Direccion','usuario@email.com','Directivo'),(16,'Adriana ','Sosa',1944,'Planta Permanente',20304586,0,'','','Facilitador'),(17,'Alex','Leyton',8358,'Planta Permanente',18857073,0,'','','Facilitador'),(18,'Ana Clara','García',4200,'Planta Permanente',27790845,NULL,NULL,NULL,'Facilitador'),(19,'Ana Fernanda','Montes',6642,'Planta Permanente',23949274,NULL,NULL,NULL,'Facilitador'),(20,'Arturo','Corso',4341,'Planta Permanente',29614681,NULL,NULL,NULL,'Facilitador'),(21,'Belen','Saavedra ',5629,'Planta Permanente',24705155,NULL,NULL,NULL,'Facilitador'),(22,'Carina','Lucero',4027,'Planta Permanente',22170496,NULL,NULL,NULL,'Facilitador'),(23,'Carla','Grinberg',3800,'Planta Permanente',29224605,NULL,NULL,NULL,'Facilitador'),(24,'Carlos Marcelo','Llampa',6526,'Planta Permanente',22186040,NULL,NULL,NULL,'Facilitador'),(25,'Carolina','Alvarado',7975,'Planta Permanente',25309024,NULL,NULL,NULL,'Facilitador'),(26,'Cecilia','Gaset ',6188,'Planta Permanente',28668878,NULL,NULL,NULL,'Facilitador'),(27,'Daniel','Pizarro',8265,'Planta Permanente',16020354,NULL,NULL,NULL,'Facilitador'),(28,'Darío','Saromé',4229,'Planta Permanente',21377566,NULL,NULL,NULL,'Facilitador'),(29,'Diana','Cisella',913,'Planta Permanente',17513893,NULL,NULL,NULL,'Facilitador'),(30,'Diana','López',4778,'Planta Permanente',25259878,NULL,NULL,NULL,'Facilitador'),(31,'Elisa','Concina ',4575,'Planta Permanente',27612322,NULL,NULL,NULL,'Facilitador'),(32,'Fernanda','Britos ',6643,'Planta Permanente',34763471,NULL,NULL,NULL,'Facilitador'),(33,'Gustavo','Galetto ',7424,'Planta Permanente',24006953,NULL,NULL,NULL,'Facilitador'),(34,'Jessica','Espalla',7118,'Planta Permanente',31214144,NULL,NULL,NULL,'Facilitador'),(35,'Jimena','Del Barrio',7830,'Planta Permanente',32192583,NULL,NULL,NULL,'Facilitador'),(36,'Jonathan','Sixto',7194,'Planta Permanente',31517456,NULL,NULL,NULL,'Facilitador'),(37,'Jorge','Baroni',5651,'Planta Permanente',25090908,NULL,NULL,NULL,'Facilitador'),(38,'Leticia','Araya ',1855,'Planta Permanente',20181466,NULL,NULL,NULL,'Facilitador'),(39,'Jorge','Guajardo',1957,'Planta Permanente',14696947,NULL,NULL,NULL,'Facilitador'),(40,'Jorge','Ramos',3486,'Planta Permanente',29067224,NULL,NULL,NULL,'Facilitador'),(41,'Laura','Carmona',3233,'Planta Permanente',14736621,NULL,NULL,NULL,'Facilitador'),(42,'Laura','Laguna',4304,'Planta Permanente',23955982,NULL,NULL,NULL,'Facilitador'),(43,'Leticia','Llul',5187,'Planta Permanente',29563342,NULL,NULL,NULL,'Facilitador'),(44,'Lorena','Giménez',4101,'Planta Permanente',29226074,NULL,NULL,NULL,'Facilitador'),(45,'Luis','Riolobos',3177,'Planta Permanente',11177191,NULL,NULL,NULL,'Facilitador'),(46,'Marcela','Illesca',4590,'Planta Permanente',26935470,NULL,NULL,NULL,'Facilitador'),(47,'Marcela','Méndez',5774,'Planta Permanente',20525232,NULL,NULL,NULL,'Facilitador'),(48,'Marcos','Ortega ',8223,'Planta Permanente',26677902,1,NULL,NULL,'Facilitador'),(49,'Margarita','Perez ',3682,'Planta Permanente',23966211,1,NULL,NULL,'Facilitador'),(50,'María Antonia','Cirrincione',4393,'Planta Permanente',29821425,1,NULL,NULL,'Facilitador'),(51,'Maricel','Gomez',951,'Planta Permanente',17021816,1,NULL,NULL,'Facilitador'),(52,'Mariela','Araguna',4495,'Planta Permanente',25415644,1,NULL,NULL,'Facilitador'),(53,'Mario','Cabezas',1911,'Planta Permanente',20753475,NULL,NULL,NULL,'Facilitador'),(54,'Martín','Fernández',779,'Planta Permanente',21947725,NULL,NULL,NULL,'Facilitador'),(55,'Matías','Marchiori',5051,'Planta Permanente',27739362,NULL,NULL,NULL,'Facilitador'),(56,'Mauricio','Farías',3643,'Planta Permanente',25585014,NULL,NULL,NULL,'Facilitador'),(57,'Mauro','Morosini',6329,'Planta Permanente',29935053,NULL,NULL,NULL,'Facilitador'),(58,'Nancy','Maldonado',637,'Planta Permanente',16241186,NULL,NULL,NULL,'Facilitador'),(59,'Nancy','Manucha',980,'Planta Permanente',20390729,NULL,NULL,NULL,'Facilitador'),(60,'Noemí','Alonso',5753,'Planta Permanente',17987425,NULL,NULL,NULL,'Facilitador'),(61,'Liliana','Palumbo',4023,'Planta Permanente',13144626,NULL,NULL,NULL,'Facilitador'),(62,'Paola','Falcón',7554,'Planta Permanente',32116870,NULL,NULL,NULL,'Facilitador'),(63,'Rodrigo','López',4350,'Planta Permanente',26557756,NULL,NULL,NULL,'Facilitador'),(64,'Rodrigo','Romero',3266,'Planta Permanente',25508382,NULL,NULL,NULL,'Facilitador'),(65,'Rosana','Gimenez  ',5901,'Planta Permanente',29105437,NULL,NULL,NULL,'Facilitador'),(66,'Roxana Fabiana','Palma',6517,'Planta Permanente',22120073,NULL,NULL,NULL,'Facilitador'),(67,'Silvana','Ponce',3714,'Planta Permanente',25194725,NULL,NULL,NULL,'Facilitador'),(73,'Teodora','Taca',1875,'Planta Permanente',18808738,NULL,NULL,NULL,'Facilitador'),(74,'Victor','Araujo',8079,'Planta Permanente',28819421,NULL,NULL,NULL,'Facilitador'),(75,'Violeta','Mayorga',6968,'Planta Permanente',24634331,NULL,NULL,NULL,'Facilitador'),(76,'Virginia','Cecchini',3415,'Planta Permanente',28401142,NULL,NULL,NULL,'Directivo'),(77,'Cecilia','Silva',3305,'Planta Permanente',25034746,NULL,NULL,NULL,'Directivo'),(78,'Federico','Llosa',3461,'Planta Permanente',22140612,NULL,NULL,NULL,'Directivo');

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
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

/*Data for the table `encuesta` */

insert  into `encuesta`(`idEncuesta`,`nombreEncuesta`,`fechaEncuesta`,`idEstadoEncuesta`,`idEmpleado`) values (1,'Abordaje Poblacional','2017-03-15',1,11),(2,'ddd','0000-00-00',0,0);

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
  `nroAfiliado` int(11) DEFAULT NULL,
  `respondeR` tinyint(1) NOT NULL,
  PRIMARY KEY (`idEncuestado`),
  KEY `idRelevamiento` (`idRelevamiento`),
  KEY `idAfiliado` (`nroAfiliado`)
) ENGINE=InnoDB AUTO_INCREMENT=82 DEFAULT CHARSET=latin1;

/*Data for the table `encuestado` */

insert  into `encuestado`(`idEncuestado`,`nombreEncuestado`,`apellidoEncuestado`,`dniEncuestado`,`edad`,`sexo`,`idRelevamiento`,`nroAfiliado`,`respondeR`) values (2,'Carlos','Perez',11111111,50,'M',2,12345600,1),(3,'Carmen','Robles',32085237,40,'F',2,12345602,0),(4,'Luz','Perez',22222222,3,'F',9,12345603,0),(69,'','asasas',2147483647,44,'M',11,2147483647,1),(70,'pijama banana ','en',2147483647,33,'M',11,2147483647,1),(71,'de ultimo encusstado ','prueba',29658544,33,'M',11,29658544,1),(72,'prueba ','carrillo',333333,23,'M',12,333333,1),(73,'persona ','la otra',2147483647,33,'M',12,333333,0),(74,'','wwwwwwww',443434,33,'M',12,443434,1),(75,'wwwwewew ','prueba',2147483647,44,'M',12,443434,0),(76,'aaasasa ','aaaaassss',44444444,33,'M',12,44444444,0),(77,'','prueba',44343434,33,'F',12,44444444,1),(78,'carlos ','del carmen',2147483647,39,'M',13,2147483647,1),(79,'laura ','zcurra',2147483647,33,'F',13,2147483647,0),(80,'santos ','diCepollo',3223323,88,'F',17,3223323,1),(81,'eeeeeeeee ','df',2147483647,44,'M',19,2147483647,1);

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

insert  into `etiqueta`(`idEtiqueta`,`nombreEtiqueta`,`descEtiqueta`) values (1,'Relacion','Conj de datos sobre la relación de parentesco'),(2,'Nivel Educativo','Nivel educativo al que accedio hasta ahora'),(3,'Ocupacion','Tipos de ocupación del encuestado'),(4,'Cobertura de Salud','Cobertura de salud del encuestado'),(5,'Tipo de Embarazo',''),(6,'Nacimiento',''),(7,'Peso del Niño',''),(8,'Actividad Extraescolar',''),(9,'Meses de Embarazo',''),(10,'Estado de Salud',''),(11,'Tipo de Discapacidad',''),(12,'Accesibilidad a un Médico','Nivel de dificultad para acceder a un médico'),(13,'Nivel de Vivienda',''),(14,'',''),(15,'','');

/*Table structure for table `localidad` */

DROP TABLE IF EXISTS `localidad`;

CREATE TABLE `localidad` (
  `id_tlocalidad` int(11) NOT NULL AUTO_INCREMENT,
  `id_tdeparta` int(11) NOT NULL,
  `cploc` int(11) NOT NULL,
  `descloc` varchar(45) NOT NULL,
  PRIMARY KEY (`id_tlocalidad`),
  KEY `id_tdeparta` (`id_tdeparta`)
) ENGINE=InnoDB AUTO_INCREMENT=346 DEFAULT CHARSET=latin1;

/*Data for the table `localidad` */

insert  into `localidad`(`id_tlocalidad`,`id_tdeparta`,`cploc`,`descloc`) values (1,5,5509,'VISTALBA'),(2,6,5513,'LUZURIAGA'),(3,7,5584,'PALMIRA'),(4,9,5579,'SANTA MARIA DE ORO'),(5,12,5535,'LAGUNA DEL ROSARIO'),(6,13,5561,'ZAMPALITO'),(7,14,5563,'LOS SAUCES'),(8,16,5539,'PUNTA DE AGUA'),(9,17,5634,'KILOMETRO 884'),(10,18,5613,'EL CORTADERAL'),(11,2,5545,'USPALLATA'),(12,3,5527,'LOS CORRALITOS'),(13,5,0,'LOS BARRIALES'),(14,6,5569,'TRES ESQUINAS'),(15,7,5582,'RAMBLON'),(16,9,5582,'ING, GIAGNONI'),(17,12,5533,'TULUMAYA (CIUDAD)'),(18,13,5560,'ZAPATA'),(19,16,5603,'RAMA CAIDA'),(20,17,5621,'LA CALIFORNIA'),(21,18,5613,'AGUA BOTADA'),(22,3,5519,'PEDRO MOLINA'),(23,6,5517,'VILLA SECA'),(24,7,5570,'CIUDAD'),(25,12,5533,'LAS VIOLETAS'),(26,16,5624,'REAL DEL PADRE'),(27,17,5634,'LA ESCANDINAVA'),(28,18,5611,'EL MANZANO'),(29,3,5525,'RODEO DE LA CRUZ'),(30,7,5589,'TRES PORTEÑAS'),(31,12,5533,'SAN JOSE'),(32,16,5600,'CIUDAD'),(33,17,5632,'LA MARZOLINA'),(34,18,5613,'LAS JUNTAS'),(35,3,5503,'SAN FCO.DEL MONTE'),(36,12,5537,'SAN MIGUEL'),(37,16,5615,'25 DE MAYO'),(38,17,5632,'LA MORA'),(39,3,5519,'SAN JOSE'),(40,12,5533,'TRES DE MAYO'),(41,16,5622,'VILLA ATUEL'),(42,17,5634,'LOS CAMPAMENTOS'),(43,3,5521,'VILLA NUEVA'),(44,16,5611,'EL SOSNEADO'),(45,17,5621,'LOS COMPARTOS'),(46,3,5519,'NUEVA CIUDAD'),(47,16,5600,'TOLEDANO'),(48,17,5636,'LOS HUARPES'),(49,16,5603,'SALTO DE LAS ROSAS'),(50,17,6279,'MEDIA LUNA'),(51,16,5594,'EL MOLINO'),(52,17,5637,'OVEJERIA'),(53,16,5600,'ISLA DIAMANTE'),(54,17,5637,'PAMPA DEL TIGRE'),(55,16,5601,'CAPITAN MONTOYA'),(56,17,5621,'POSTE DE HIERRO'),(57,16,5603,'RINCON DEL ATUEL'),(58,17,5620,'POZO HONDO'),(59,16,5605,'ATUEL NORTE'),(60,17,5621,'SAN PEDRO DEL ATUEL'),(61,17,5621,'EL DESVIO'),(62,1,5500,'PRIMERA SECCION'),(63,2,5539,'CAPDEVILA'),(64,3,5533,'BERMEJO'),(65,4,5501,'GDOR.BENEGAS'),(66,5,5509,'AGRELO'),(67,6,5513,'COQUIMBITO'),(68,7,5571,'ALTO SALVADOR'),(69,8,5582,'ALGARROBO GRANDE'),(70,9,5575,'ANDRADES'),(71,10,5592,'LA DORMIDA'),(72,11,5598,'DESAGUADERO'),(73,12,5533,'COLONIA ESTRELLA'),(74,13,5509,'ANCHORIS'),(75,14,5565,'CAMPO DE LOS ANDES'),(76,15,5569,'EUGENIO BUSTOS'),(77,16,5603,'CAÑADA SECA'),(78,17,5634,'BOWEN'),(79,18,5613,'RIO BARRANCAS'),(80,1,5500,'SEGUNDA SECCION'),(81,2,5541,'EL ALGARROBAL'),(82,3,5523,'BUENA NUEVA'),(83,4,5501,'CIUDAD'),(84,5,5505,'CARRODILLA'),(85,6,5517,'CRUZ DE PIEDRA'),(86,7,5582,'ALTO VERDE'),(87,8,5582,'ALTO VERDE'),(88,9,5577,'CAMPAMENTOS'),(89,10,5594,'LAS CATITAS'),(90,11,5590,'CIUDAD'),(91,12,5535,'COSTA DE ARAUJO'),(92,13,5561,'CORDON DEL PLATA'),(93,14,5565,'COLONIA LAS ROSAS'),(94,15,5569,'CHILECITO'),(95,16,5603,'CUADRO BENEGAS'),(96,17,5636,'CANALEJAS'),(97,18,5621,'AGUA ESCONDIDA'),(98,1,5500,'TERCERA SECCION'),(99,2,5541,'EL BORBOLLON'),(100,3,5523,'CAPILLA DEL ROSARIO'),(101,4,5501,'LAS TORTUGAS'),(102,5,5505,'CHACRAS DE CORIA'),(103,6,5531,'FRAY LUIS BELTRAN'),(104,7,5570,'BUEN ORDEN'),(105,8,5573,'CIUDAD'),(106,9,5579,'EL MIRADOR'),(107,10,5596,'CIUDAD'),(108,11,5590,'LAS CHACRITAS'),(109,12,5535,'EL CARMEN'),(110,13,5561,'EL PERAL'),(111,14,5539,'EL TOTORAL'),(112,15,5567,'LA CONSULTA'),(113,16,5607,'CUADRO NACIONAL'),(114,17,5621,'CARMENSA'),(115,18,5613,'CIUDAD'),(116,1,5500,'CUARTA SECCION'),(117,2,5539,'EL CHALLAO'),(118,3,5525,'CNIA.SEGOVIA'),(119,4,5501,'PRESIDENTE SARMIENTO'),(120,5,5509,'EL CARRIZAL'),(121,6,5511,'GRAL.GUTIERREZ'),(122,7,5589,'CHAPANAY'),(123,8,5572,'LA COLONIA'),(124,9,5579,'LA CENTRAL'),(125,10,5596,'LA COSTA'),(126,11,5590,'VILLA ANTIGUA'),(127,12,5533,'EL CHILCAL'),(128,13,5561,'EL ZAMPAL'),(129,14,5565,'LA PRIMAVERA'),(130,15,5569,'PAREDITAS'),(131,16,5600,'EL CERRITO'),(132,17,5621,'COCHICO'),(133,18,5613,'RIO GRANDE'),(134,1,5500,'QUINTA SECCION'),(135,2,5541,'EL PASTAL'),(136,3,5519,'DORREGO'),(137,4,5501,'SAN FCO.DEL MONTE'),(138,5,5505,'LA PUNTILLA'),(139,6,5517,'GRAL.ORTEGA'),(140,7,5589,'LA CHIMBA'),(141,8,5585,'LOS BARRIALES'),(142,9,5579,'LA LIBERTAD'),(143,10,5596,'VILLA CABECERA'),(144,11,5590,'LA MENTA'),(145,12,5533,'EL PLUMERO'),(146,13,5561,'GUALTALLARY'),(147,14,5560,'LAS PINTADAS'),(148,15,5569,'CIUDAD'),(149,16,5605,'EL NIHUIL'),(150,17,5632,'CNIA.ALVEAR OESTE'),(151,18,5613,'LAS LOICAS'),(152,1,5500,'SEXTA SECCION'),(153,2,5541,'EL PLUMERILLO'),(154,3,5533,'EL SAUCE'),(155,4,5547,'VILLA HIPODROMO'),(156,5,5549,'LAS COMPUERTAS'),(157,6,5517,'LAS BARRANCAS'),(158,7,5571,'CHIVILCOY'),(159,8,5585,'MEDRANO'),(160,9,5575,'LOS ARBOLES'),(161,10,5596,'12 de Octubre'),(162,11,5590,'VILLA NUEVA'),(163,12,5533,'EL VERGEL'),(164,13,5561,'LA ARBOLEDA'),(165,14,5563,'LOS ARBOLES'),(166,15,5569,'TRES ESQUINAS'),(167,16,5603,'GOUDGE'),(168,17,5637,'CORRAL DE LORCA'),(169,18,5611,'RANQUIL'),(170,2,5543,'EL RESGUARDO'),(171,3,5519,'GRAL.BELGRANO'),(172,4,5501,'VILLA JOVITA'),(173,5,5507,'CIUDAD'),(174,6,5517,'LUNLUNTA'),(175,7,5589,'DIVISADERO'),(176,8,5579,'MUNDO NUEVO'),(177,9,5585,'MEDRANO'),(178,12,5535,'ING.GUSTAVO ANDRE'),(179,13,5561,'LA CARRERA'),(180,14,5560,'LOS CHACAYES'),(181,16,5623,'JAIME PRATS'),(182,17,5621,'EL CEIBO'),(183,18,5611,'BARDAS BLANCAS'),(184,2,5539,'EL ZAPALLAR'),(185,3,5523,'JESUS NAZARENO'),(186,4,5501,'VILLA MARINI'),(187,5,5507,'MAYOR DRUMMOND'),(188,6,5515,'CIUDAD'),(189,7,5589,'EL CENTRAL'),(190,8,5579,'PHILLIPS'),(191,9,5579,'MUNDO NUEVO'),(192,12,5533,'JOCOLI'),(193,13,5561,'SAN JOSE'),(194,14,5560,'CIUDAD'),(195,16,5603,'LA LLAVE'),(196,17,5620,'EL JUNCALITO'),(198,2,5539,'LA CIENEGUITA'),(199,3,5527,'KILOMETRO 8'),(200,4,5501,'VILLA DEL PARQUE'),(201,5,5507,'PERDRIEL'),(202,6,5529,'RODEO DEL MEDIO'),(203,7,5570,'EL ESPIÑO'),(204,8,5585,'RODRIGUEZ PEÑA'),(205,9,5579,'REDUCCION DE ABAJO'),(206,12,5535,'ASUNCION'),(207,13,5561,'SANTA CLARA'),(208,14,5563,'VILLA SECA'),(209,16,5605,'LAS MALVINAS'),(210,17,5609,'ESTACION GOICO'),(211,18,5611,'EL ALAMBRADO'),(212,2,5557,'LAS CUEVAS'),(213,3,5527,'KILOMETRO 11'),(214,4,5501,'TRAPICHE'),(215,5,5549,'POTRERILLOS'),(216,6,5517,'RUSSELL'),(217,7,5570,'MONTECASEROS'),(218,8,5582,'ING. GIAGNONI'),(219,9,5579,'REDUCCION DE ARRIBA'),(220,12,5533,'LA HOLANDA'),(221,13,5561,'CIUDAD'),(222,14,5565,'VISTA FLORES'),(223,16,5601,'LAS PAREDES'),(224,17,5609,'GASPAR CAMPOS'),(225,18,5611,'COIHUECO'),(226,2,5539,'CIUDAD'),(227,3,5527,'LA PRIMAVERA'),(228,5,5509,'UGARTECHE'),(229,6,5587,'SAN ROQUE'),(230,7,5535,'NUEVA CALIFORNIA'),(231,9,5577,'CIUDAD'),(232,12,5533,'LA PEGA'),(233,13,5561,'VILLA BASTIA'),(234,14,5560,'COSTA ANZORENA'),(235,16,5609,'MONTE COMAN'),(236,17,5620,'CIUDAD'),(237,18,5613,'PATA MORA'),(238,2,5539,'PANQUEHUA'),(239,3,5519,'LAS CAÑAS'),(240,1,0,'SIN DATOS'),(241,2,0,'SIN DATOS'),(242,3,0,'SIN DATOS'),(243,4,0,'SIN DATOS'),(244,5,0,'SIN DATOS'),(245,6,0,'SIN DATOS'),(246,7,0,'SIN DATOS'),(247,8,0,'SIN DATOS'),(248,9,0,'SIN DATOS'),(249,10,0,'SIN DATOS'),(250,11,0,'SIN DATOS'),(251,12,0,'SIN DATOS'),(252,13,0,'SIN DATOS'),(253,14,0,'SIN DATOS'),(254,15,0,'SIN DATOS'),(255,16,0,'SIN DATOS'),(256,17,0,'SIN DATOS'),(257,18,0,'SIN DATOS'),(306,2,5555,'PUENTE DEL INCA'),(307,2,5551,'POLVAREDA'),(308,2,5539,'VILLAVICENCIO'),(329,7,5582,'INGENIERO GIAGNONI'),(330,10,5582,'RAMBLON'),(331,12,5533,'SAN FRANCISCO'),(332,12,5533,'PARAMILLO'),(333,12,5533,'LA PALMERA'),(344,10,5594,'EL MARCADO'),(345,0,0,'SIN DATOS');

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
) ENGINE=InnoDB AUTO_INCREMENT=32 DEFAULT CHARSET=latin1;

/*Data for the table `parentesco` */

insert  into `parentesco`(`id_tparentesco`,`descpare`) values (1,'Conyugue'),(2,'Hijo/a'),(3,'Padre/Madre'),(4,'Suegro/a'),(5,'Concubino/a'),(6,'Nieto/a'),(7,'Tenencia Definitiva'),(8,'Yerno'),(9,'Nuera'),(10,'Tenencia Provisoria'),(11,'Hermano/a'),(19,'Sin Datos'),(20,'Ex Conyugue'),(23,'Guarda Preadoptiva'),(24,'Sobrino/a'),(27,'Bisnietos'),(28,'Cuñado/a'),(29,'Curatela'),(30,'Conviviente'),(31,'Titular');

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
) ENGINE=InnoDB AUTO_INCREMENT=114 DEFAULT CHARSET=latin1;

/*Data for the table `pregunta` */

insert  into `pregunta`(`idPregunta`,`pregunta`,`descripPregunta`,`idSubPregunta`,`idBloque`,`idTipoPregunta`,`idEtiqueta`) values (1,'Facilitador (*)',NULL,NULL,1,8,NULL),(2,'Número Relevamiento (*)',NULL,NULL,1,10,NULL),(3,'Fecha Relevamiento (*)',NULL,NULL,1,3,NULL),(4,'Departamento (*)',NULL,NULL,1,8,NULL),(5,'Distrito (*)',NULL,NULL,1,8,NULL),(6,'Calle (*)',NULL,NULL,1,6,NULL),(7,'Número',NULL,NULL,1,11,NULL),(8,'Barrio',NULL,NULL,1,6,NULL),(9,'Manzana (*)',NULL,NULL,1,6,NULL),(10,'Casa (*)',NULL,NULL,1,11,NULL),(11,'Entre calles',NULL,NULL,1,6,NULL),(12,'Teléfono del titular (*)',NULL,NULL,1,11,NULL),(13,'Teléfono para supervisión(encuestado)',NULL,NULL,1,11,NULL),(14,'¿Cuántas personas viven habitualmente en este domicilio?(*)',NULL,NULL,1,11,NULL),(15,'¿Hay alguna mujer embarazada? (*)',NULL,NULL,1,4,NULL),(16,'¿Que edad tiene/n?',NULL,NULL,1,11,NULL),(17,'Observaciones ',NULL,16,1,6,NULL),(18,'Apellido y nombre del titular (*)',NULL,NULL,2,6,NULL),(19,'Edad (*)',NULL,NULL,2,11,NULL),(20,'DNI (*)',NULL,NULL,2,11,NULL),(21,'Sexo (*)',NULL,NULL,2,1,NULL),(22,'Vínculo con el titular (*)',NULL,NULL,2,2,1),(23,'Número de Afiliado',NULL,NULL,2,11,NULL),(24,'¿Tiene otra cobertura de salud?',NULL,NULL,2,2,NULL),(25,'¿Estudia? (*)',NULL,NULL,2,4,NULL),(26,'¿Cuál es su nivel educativo? (*)',NULL,NULL,2,2,2),(27,'¿A qué se dedica actualmente? (*)',NULL,NULL,2,2,3),(28,'¿Contribuye con la economía familiar? (*)',NULL,NULL,2,2,15),(29,'¿Cuántas horas trabajó la semana pasada? (*)',NULL,NULL,2,11,NULL),(30,'¿En qué lugar trabaja?',NULL,NULL,2,6,NULL),(31,'Detalle de la tarea realizada',NULL,NULL,2,6,NULL),(32,'Observaciones',NULL,NULL,2,6,NULL),(33,'¿Padece alguna enfermedad crónica?',NULL,NULL,2,4,NULL),(34,'¿Tiene alguna discapacidad? (*)',NULL,NULL,2,4,NULL),(35,'¿Tiene algún afiliado a cargo que no viva en este domicilio?',NULL,NULL,2,4,NULL),(36,'Nombre afiliado',NULL,35,2,6,NULL),(37,'Teléfono',NULL,35,2,11,NULL),(38,'¿Recuerda si realizó al menos una consulta médica por OSEP en el último año?',NULL,NULL,3,4,NULL),(39,'¿Dónde concurrió a atenderse la última vez?',NULL,38,3,2,NULL),(40,'¿Porqué?',NULL,38,3,2,NULL),(41,'¿El embarazo fue normal o el profesional lo consideró de riesgo?',NULL,NULL,4,2,5),(42,'¿Nació a término o fue prematuro?',NULL,NULL,4,2,6),(43,'¿Recuerda cuanto peso al nacer?',NULL,NULL,4,11,NULL),(44,'¿Caminó cerca o alrededor de cumplir el año?',NULL,NULL,4,4,NULL),(45,'¿Lo llevaron al control auditivo que se realiza para detectar problemas de oído en los recién nacidos?',NULL,NULL,4,4,NULL),(46,'En el último control de salud, ¿el profesional anotó que su pero es normal?',NULL,NULL,4,2,7),(47,'¿Tiene las vacunas al día?',NULL,NULL,4,4,NULL),(48,'¿Esta recibiendo la leche de OSEP?',NULL,NULL,4,4,NULL),(49,'En el último año, ¿realizó algún control odontológico?',NULL,NULL,5,4,NULL),(50,'¿Realizó algún control con un oculista para verificar su salud visual?',NULL,NULL,5,4,NULL),(51,'Durante el año pasado/este año, ¿ha tenido algún tipo de dificultad en la escuela?',NULL,NULL,5,4,NULL),(52,'¿Realiza en forma regular alguna actividad extraescolar, es decir, hace deportes, alguna actividad artística u otra actividad todas las semanas?',NULL,NULL,5,2,8),(54,'¿Como diría que es su estado general de salud en este momento?',NULL,NULL,6,2,10),(55,'¿En los últimos 2 años concurrió a realizarse el papanicolau?',NULL,NULL,6,4,NULL),(56,'¿Dónde concurrió?',NULL,55,6,2,NULL),(57,'¿Por qué?',NULL,55,6,2,NULL),(58,'¿En los últimos 2 años se ha realizado una mamografía?',NULL,NULL,6,4,NULL),(59,'¿Dónde concurrió?',NULL,58,6,2,NULL),(60,'¿Por qué?',NULL,58,6,2,NULL),(61,'¿Necesita usar en forma permanente uno o más de estos elementos ?',NULL,NULL,7,1,NULL),(62,'¿Ha experimentado en el último mes...?',NULL,NULL,7,1,NULL),(63,'¿Necesita o ha tenido que realizar modificaciones e su casa para no caerse o realizar sus tareas cotidianas ?',NULL,NULL,7,4,NULL),(64,'Normalmente, ¿Necesita ayuda para realizar trámites, como cobrar la jubilación, pedir turno al médico por ejemplo ?',NULL,NULL,7,4,NULL),(65,'Si tiene una dificultad de salud o una urgencia, ¿cuenta con alguien que lo pueda ayudar a resolverla ?',NULL,NULL,7,4,NULL),(66,'¿Realiza habitualmente algún hobbie o actividad social, por ejemplo leer, hacer cursos o gimnasia, ir a un centro de jubilados o a la iglesia?',NULL,NULL,7,4,NULL),(67,'¿Tiene alguna actividad o hobbie que haga frecuentemente para ocupar el tiempo libre?',NULL,NULL,7,4,NULL),(68,'Respecto a la atención médica, ¿tiene un médico de cabecera, es decir un profesional que lo conozca y que lo atienda habitualmente?',NULL,NULL,7,4,NULL),(69,'¿Ese médico es de OSEP o recibe OSEP?',NULL,68,7,4,NULL),(70,'¿Cuál es su Discapacidad?',NULL,NULL,8,1,11),(71,'¿Realizó el empadronamiento en OSEP, es decir hizo el tramite de registro de su situación en la Obra Social?',NULL,NULL,8,4,NULL),(72,'¿Quien o quienes lo orientan sobre los tratamientos que necesita? Es decir, ¿Qué persona que ud. valore le indica que tratamientos sería bueno realizar por su discapacidad?',NULL,NULL,8,1,NULL),(73,'De los profesionales de la salud que mencionó, ¿alguno es profesional de cabecera?',NULL,72,8,1,NULL),(74,'¿Qué le gustaría que OSEP hiciera en el ámbito de la discapacidad que no esté haciendo o esté haciendo mal?',NULL,NULL,8,6,NULL),(75,'¿De cuántos meses esta embarazada?',NULL,NULL,9,2,9),(76,'¿Concurrió al control el mes pasado?',NULL,NULL,9,4,NULL),(77,'¿Por que no concurrió?',NULL,76,9,6,NULL),(78,'¿Qué tan complicado le resultó en esa oportunidad todo el proceso que implicó hacerse el control, desde que consiguió el turno hasta que la atendieron?',NULL,76,9,2,12),(79,'¿El embarazo lo esta llevando un profesional en especial o se atiende con distintos profesionales ?',NULL,NULL,9,2,NULL),(80,'¿El o los profesionales que la atienden, han detectado algún problema en el embarazo?',NULL,NULL,9,4,NULL),(81,'¿Cuál?',NULL,80,9,6,NULL),(82,'¿Cuenta con apoyo familiar, de su pareja o de alguna otra persona que la acompañe y la ayude mientras transcurre el embarazo?',NULL,NULL,9,4,NULL),(83,'¿En los últimos dos años, concurrió a realizarse un papanicolau?',NULL,NULL,9,4,NULL),(84,'Respecto de los servicios básicos, ¿ésta casa tiene conexión a? Red de energía eléctrica ',NULL,NULL,10,4,NULL),(85,'Red de gas natural',NULL,NULL,10,4,NULL),(86,'Red de agua potable',NULL,NULL,10,4,NULL),(87,'Cloacas',NULL,NULL,10,4,NULL),(88,'Teléfono fijo',NULL,NULL,10,4,NULL),(89,'Internet',NULL,NULL,10,4,NULL),(90,'¿La vivienda es propia?',NULL,NULL,10,4,NULL),(91,'¿En el barrio/zona donde vive, hay presencia de?Basurales a cielo abierto',NULL,NULL,10,4,NULL),(92,'Fábricas contaminantes',NULL,NULL,10,4,NULL),(93,'Animales abandonados',NULL,NULL,10,4,NULL),(94,'Lugares de cría de animales',NULL,NULL,10,4,NULL),(95,'Desagüe de cloacas, aguas servidas',NULL,NULL,10,4,NULL),(96,'Insectos y roedores',NULL,NULL,10,4,NULL),(97,'Agroquímicos',NULL,NULL,10,4,NULL),(98,'Canales de riego, piletas u otro lugar donde haya agua que traiga problemas',NULL,NULL,10,4,NULL),(99,'Calles muy transitadas u autopistas',NULL,NULL,10,4,NULL),(100,'Calles de tierra',NULL,NULL,10,4,NULL),(101,'Nivel de vivienda',NULL,NULL,10,2,13),(102,'Materiales predominantes de paredes',NULL,NULL,10,2,NULL),(103,'Materiales predominantes de techos',NULL,NULL,10,2,NULL),(104,'Ventilación',NULL,NULL,10,2,NULL),(105,'Accesibilidad',NULL,NULL,10,2,NULL),(106,'Observaciones generales',NULL,NULL,10,6,NULL),(107,'¿Está embarazada?(*)',NULL,NULL,2,4,NULL),(108,'¿Tiene OSEP?(*)',NULL,NULL,2,4,NULL),(109,'Número de Afiliado',NULL,108,2,11,NULL),(110,'Concretamente, ¿cuál es la actividad que realizaba usted antes de jubilarse o la persona que originó la pensión?',NULL,NULL,2,6,NULL),(111,'¿Por que no la recibe?',NULL,NULL,3,6,NULL),(112,'¿Cuál fue el problema?',NULL,NULL,3,6,NULL),(113,'¿Dónde?',NULL,NULL,3,2,NULL);

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
  `idDireccion` int(11) NOT NULL,
  `idEmpleado` int(11) NOT NULL,
  `cantEncuestados` varchar(250) NOT NULL,
  `observacion` varchar(250) DEFAULT NULL,
  `telTitular` varchar(100) DEFAULT NULL,
  `telSup` varchar(100) DEFAULT NULL,
  `estado` int(4) DEFAULT NULL,
  PRIMARY KEY (`idRelevamiento`),
  KEY `idRelevamiento` (`idRelevamiento`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=latin1;

/*Data for the table `relevamiento` */

insert  into `relevamiento`(`idRelevamiento`,`nroRelevamiento`,`fechaRelevamiento`,`observCriticidad`,`idCriticidad`,`idEncuesta`,`idVisita`,`idDireccion`,`idEmpleado`,`cantEncuestados`,`observacion`,`telTitular`,`telSup`,`estado`) values (1,232411,'2017-04-06','Alta',2,1,5,0,20,'a:3:{s:8:\"cantidad\";s:1:\"2\";s:8:\"embarazo\";s:1:\"0\";s:6:\"edades\";a:1:{i:0;s:2:\"33\";}}',NULL,NULL,NULL,1),(2,123456,'2017-07-09','Complicada Familia',3,1,6,5,18,'a:3:{s:8:\"cantidad\";s:1:\"2\";s:8:\"embarazo\";s:1:\"0\";s:6:\"edades\";a:1:{i:0;s:2:\"33\";}}',NULL,'4983256','498325689',1),(11,1,'2017-08-24','',0,1,0,39,16,'a:3:{s:8:\"cantidad\";s:1:\"1\";s:8:\"embarazo\";s:1:\"1\";s:6:\"edades\";i:0;}','observaciones','155515253','155515253',0),(12,2,'2017-08-24','',0,1,0,40,16,'a:3:{s:8:\"cantidad\";s:1:\"2\";s:8:\"embarazo\";s:1:\"1\";s:6:\"edades\";i:0;}','2222222344444444444','333333333333','333333333333',0),(13,3,'2017-08-30','',0,1,0,41,16,'a:3:{s:8:\"cantidad\";s:1:\"2\";s:8:\"embarazo\";s:1:\"0\";s:6:\"edades\";a:1:{i:0;s:2:\"33\";}}','ninguna','1233322334','1233322334',0),(19,4,'2017-08-30','',0,1,0,47,16,'a:3:{s:8:\"cantidad\";s:1:\"2\";s:8:\"embarazo\";s:1:\"1\";s:6:\"edades\";i:0;}','2ccccccccccccccc','1233344556','1233344556',1);

/*Table structure for table `respuesta` */

DROP TABLE IF EXISTS `respuesta`;

CREATE TABLE `respuesta` (
  `idRespuesta` int(11) NOT NULL AUTO_INCREMENT,
  `respuesta` varchar(145) NOT NULL,
  `descripRespuesta` text,
  PRIMARY KEY (`idRespuesta`)
) ENGINE=InnoDB AUTO_INCREMENT=146 DEFAULT CHARSET=latin1;

/*Data for the table `respuesta` */

insert  into `respuesta`(`idRespuesta`,`respuesta`,`descripRespuesta`) values (1,'Si',NULL),(2,'No',NULL),(3,'Masculino',NULL),(4,'Femenino',NULL),(5,'Titular',NULL),(6,'Cónyuge o Pareja Conviviente',NULL),(7,'Hijo/a',NULL),(8,'Padre o Madre',NULL),(9,'Suegro/a',NULL),(10,'Yerno o Nuera',NULL),(11,'Nieto/a',NULL),(12,'Otro Familiar',NULL),(13,'Otro No Familiar',NULL),(14,'No, sólo OSEP',NULL),(15,'Otra Obra Social',NULL),(16,'Prepaga',NULL),(17,'Otra Cobertura',NULL),(18,'Inicial',NULL),(19,'Primario Incompleto',NULL),(20,'Primario Completo',NULL),(21,'Secundario Incompleto',NULL),(22,'Secundario Completo',NULL),(23,'Terciario Incompleto',NULL),(24,'Terciario Completo',NULL),(25,'Universitario Incompleto',NULL),(26,'Universitario Completo',NULL),(27,'Trabajador Remunerado',NULL),(28,'Jubilado o Pensionado',NULL),(29,'Trabajador Remunerado y Estudiante',NULL),(30,'Principal Sostén',NULL),(31,'Aportante',NULL),(32,'No Contribuye',NULL),(33,'Sin Datos',NULL),(34,'Fue a un efector de OSEP',NULL),(35,'Fue a un prestador privado',NULL),(36,'Fue a un hospital o centro de salud público',NULL),(37,'No se enfermó ni tuvo un accidente',NULL),(38,'Quiso consultar pero no tuvo dinero',NULL),(39,'Quiso consultar pero le cuesta llegar al lugar de atención',NULL),(40,'Pidió turno pero no lo obtuvo',NULL),(41,'Consultó pero NO por OSEP',NULL),(42,'Otro motivo',NULL),(43,'Normal',NULL),(44,'De Riesgo',NULL),(45,'A Término',NULL),(46,'Prematuro',NULL),(47,'Bajo Peso',NULL),(48,'Normal',NULL),(49,'Sobrepeso',NULL),(50,'No asiste todavía',NULL),(51,'Deportiva',NULL),(52,'Artística',NULL),(53,'Educativa',NULL),(54,'Comunitaria',NULL),(55,'Religiosa',NULL),(56,'Otra',NULL),(57,'No realiza',NULL),(58,'Muy Bueno',NULL),(59,'Bueno',NULL),(60,'Regular',NULL),(61,'Malo',NULL),(62,'No sabe/No contesta',NULL),(63,'En hospital o centro propio de OSEP',NULL),(64,'En consultorio, clínica o sanatorio donde reciben OSEP',NULL),(65,'En hospital público, centro de salud o sala',NULL),(66,'En consultorio, clínica o sanatorio donde NO reciben OSEP',NULL),(67,'Otro',NULL),(68,'No tuvo tiempo',NULL),(69,'No tuvo dinero',NULL),(70,'No consiguió turno o lugar donde lo atiendan',NULL),(71,'No sabe donde hacérselo',NULL),(72,'Le da miedo, disgusto o vergüenza',NULL),(73,'Se olvidó',NULL),(74,'Por dejadez',NULL),(75,'No lo necesita, está sana(percepción personal)',NULL),(76,'No conoce el examen o no sabia que tenía que hacérselo',NULL),(77,'El médico no se lo indicó',NULL),(78,'Por edad avanzada',NULL),(79,'No le corresponde(histerectomía o alguna otra contraindicación médica)',NULL),(80,'En el mamógrafo de OSEP',NULL),(81,'Silla de ruedas',NULL),(82,'Bastón',NULL),(83,'Andador',NULL),(84,'Audífono',NULL),(85,'Caídas',NULL),(86,'Olvídos o confusiones recurrentes',NULL),(87,'Motora',NULL),(88,'Visual',NULL),(89,'Auditiva',NULL),(90,'Mental o Cognitiva',NULL),(91,'Visceral',NULL),(92,'No sabía que había que hacerlo',NULL),(93,'Médico General o Pediatra',NULL),(94,'Médico Especialista',NULL),(95,'Psicólogo - Psiquiatra',NULL),(96,'Médico Fisiátra',NULL),(97,'Otro Profesional de la Salud',NULL),(98,'Docente',NULL),(99,'Integrante de la Red de Madres',NULL),(100,'Integrante de otra Organización Civil o de Ayuda',NULL),(101,'Otra persona que tiene una discapacidad, o un familiar con una discapacidad que no está en ninguna organización',NULL),(102,'1 Mes',NULL),(103,'2 Meses',NULL),(104,'3 Meses',NULL),(105,'4 Meses',NULL),(106,'5 Meses',NULL),(107,'6 Meses',NULL),(108,'7 Meses',NULL),(109,'8 Meses',NULL),(110,'9 Meses',NULL),(111,'Simple ',NULL),(112,'Complejo ',NULL),(113,'Un profesional',NULL),(114,'Distintos profesionales en un mismo lugar de atención ',NULL),(115,'Distintos lugares de atención',NULL),(116,'AB',NULL),(117,'C1',NULL),(118,'C2',NULL),(119,'C3',NULL),(120,'D1',NULL),(121,'D2',NULL),(122,'E',NULL),(123,'Material de Construcción',NULL),(124,'Madera',NULL),(125,'Adobe',NULL),(126,'Chapa de metal, Cartón',NULL),(127,'Membrana, Teja, Losa, Baldosa',NULL),(128,'Madera, Caña, Paja',NULL),(129,'Suficiente',NULL),(130,'Escasa',NULL),(131,'Sin ventilación',NULL),(132,'Compleja',NULL),(133,'Estudia exclusivamente',NULL),(134,'Trabajo doméstico no remunerado exclusivamente',NULL),(135,'Busca trabajo',NULL),(136,'No trabaja',NULL),(137,'Otra',NULL),(138,'No (Salud Pública)',NULL),(139,'Obra social',NULL),(140,'Club',NULL),(141,'Instituto',NULL),(142,'CIC',NULL),(143,'Biblioteca',NULL),(144,'Unión Vecinal',NULL);

/*Table structure for table `respuesta_elegida` */

DROP TABLE IF EXISTS `respuesta_elegida`;

CREATE TABLE `respuesta_elegida` (
  `idRespuestaElegida` int(11) NOT NULL AUTO_INCREMENT,
  `respBreve` text,
  `idRelevamiento` int(11) NOT NULL,
  `idEncuestado` int(11) DEFAULT NULL,
  `idPregunta` int(11) NOT NULL,
  `idRespuesta` int(11) NOT NULL,
  PRIMARY KEY (`idRespuestaElegida`),
  KEY `idRelevamiento` (`idRelevamiento`),
  KEY `idEncuestado` (`idEncuestado`),
  KEY `idPregunta` (`idPregunta`),
  KEY `idRespuesta` (`idRespuesta`)
) ENGINE=InnoDB AUTO_INCREMENT=705 DEFAULT CHARSET=latin1;

/*Data for the table `respuesta_elegida` */

insert  into `respuesta_elegida`(`idRespuestaElegida`,`respBreve`,`idRelevamiento`,`idEncuestado`,`idPregunta`,`idRespuesta`) values (1,NULL,2,NULL,15,1),(2,'38',2,NULL,16,0),(3,NULL,2,NULL,84,1),(4,NULL,2,NULL,85,1),(5,NULL,2,NULL,86,1),(6,NULL,2,NULL,87,1),(7,NULL,2,NULL,88,1),(8,NULL,2,NULL,89,1),(9,NULL,2,NULL,91,2),(10,NULL,2,NULL,92,2),(11,NULL,2,NULL,93,2),(12,NULL,2,NULL,94,2),(13,NULL,2,NULL,95,2),(14,NULL,2,2,33,2),(15,'',2,2,34,2),(16,NULL,2,2,22,5),(17,'',2,2,24,14),(18,'40',2,2,29,0),(20,'3500 Gramos',2,2,35,2),(21,NULL,2,2,25,1),(22,NULL,2,NULL,40,38),(23,'Irrigación',2,2,30,0),(24,'Tesoreria',2,2,31,0),(25,NULL,2,NULL,99,2),(26,NULL,2,NULL,100,2),(27,NULL,2,NULL,17,57),(28,NULL,2,NULL,96,2),(29,NULL,2,NULL,97,2),(30,NULL,2,NULL,98,2),(31,NULL,2,NULL,90,1),(32,NULL,2,NULL,101,118),(33,NULL,2,NULL,102,123),(34,NULL,2,NULL,103,127),(35,NULL,2,NULL,104,129),(36,NULL,2,NULL,105,111),(37,'Familia muy sencilla y educada',2,NULL,106,0),(38,NULL,2,2,28,30),(39,NULL,2,2,27,27),(40,NULL,2,2,26,26),(41,NULL,0,2,38,1),(42,NULL,0,2,39,34),(43,NULL,0,4,41,43),(44,NULL,0,4,42,45),(45,'3500 gramos',0,4,43,0),(46,NULL,0,4,44,1),(47,NULL,0,4,45,1),(48,NULL,0,4,46,48),(49,NULL,0,4,47,1),(50,NULL,0,4,48,2),(51,NULL,0,5,49,1),(52,NULL,0,5,50,1),(53,NULL,0,5,51,2),(54,NULL,0,5,52,51),(55,NULL,0,5,38,1),(56,NULL,0,5,39,34),(57,NULL,0,3,75,106),(58,NULL,0,3,76,1),(59,NULL,0,3,78,111),(60,NULL,0,3,79,113),(61,NULL,0,NULL,80,2),(62,NULL,0,NULL,82,1),(63,NULL,0,NULL,83,1),(64,NULL,0,NULL,0,0),(65,NULL,0,NULL,0,0),(66,NULL,0,NULL,0,0),(67,NULL,0,NULL,0,0),(68,NULL,0,NULL,0,0),(69,NULL,0,NULL,0,0),(70,NULL,0,NULL,0,0),(71,NULL,9,50,0,1),(72,NULL,9,50,0,0),(73,NULL,9,50,0,0),(74,NULL,9,50,0,3),(75,NULL,9,50,0,1),(76,NULL,9,50,0,1),(77,NULL,9,50,0,1),(78,NULL,9,50,0,1),(79,NULL,9,50,0,6),(80,NULL,9,50,0,0),(81,NULL,9,51,0,1),(82,NULL,9,51,0,0),(83,NULL,9,51,0,0),(84,NULL,9,51,0,3),(85,NULL,9,51,0,1),(86,NULL,9,51,0,1),(87,NULL,9,51,0,1),(88,NULL,9,51,0,1),(89,NULL,9,51,0,6),(90,NULL,9,51,0,0),(91,NULL,9,52,0,22222222),(92,NULL,9,52,24,0),(93,NULL,9,52,25,0),(94,NULL,9,52,26,7),(95,NULL,9,52,28,2),(96,NULL,9,52,29,44),(97,'55555555555555',9,52,30,0),(98,'6666666',9,52,31,0),(99,'777777777777',9,52,32,0),(100,NULL,9,52,33,1),(101,NULL,9,52,34,1),(102,NULL,9,52,38,2),(103,NULL,9,52,57,3),(104,NULL,10,53,22,1),(105,NULL,10,53,24,0),(106,NULL,10,53,25,0),(107,NULL,10,53,26,1),(108,NULL,10,53,28,2),(109,NULL,10,53,29,66),(110,'55565',10,53,30,0),(111,'tareas de otra cosa',10,53,31,0),(112,'observ',10,53,32,0),(113,NULL,10,53,33,1),(114,NULL,10,53,34,1),(115,NULL,10,53,35,1),(116,NULL,10,53,0,0),(117,NULL,10,53,0,2),(118,NULL,10,53,0,1),(119,NULL,10,53,0,0),(120,NULL,10,53,0,2),(121,NULL,10,53,0,2),(122,NULL,10,NULL,84,1),(123,NULL,10,NULL,85,1),(124,NULL,10,NULL,86,1),(125,NULL,10,NULL,87,1),(126,NULL,10,NULL,88,1),(127,NULL,10,NULL,89,1),(128,NULL,10,NULL,90,1),(129,NULL,10,NULL,91,2),(130,NULL,10,NULL,92,2),(131,NULL,10,NULL,93,2),(132,NULL,10,NULL,94,2),(133,NULL,10,NULL,95,2),(134,NULL,10,NULL,96,2),(135,NULL,10,NULL,97,2),(136,NULL,10,NULL,98,2),(137,NULL,10,NULL,99,1),(138,NULL,10,NULL,100,1),(139,NULL,10,NULL,106,0),(140,NULL,10,NULL,84,1),(141,NULL,10,NULL,85,1),(142,NULL,10,NULL,86,1),(143,NULL,10,NULL,87,1),(144,NULL,10,NULL,88,1),(145,NULL,10,NULL,89,1),(146,NULL,10,NULL,90,1),(147,NULL,10,NULL,91,2),(148,NULL,10,NULL,92,2),(149,NULL,10,NULL,93,2),(150,NULL,10,NULL,94,2),(151,NULL,10,NULL,95,2),(152,NULL,10,NULL,96,2),(153,NULL,10,NULL,97,2),(154,NULL,10,NULL,98,2),(155,NULL,10,NULL,99,1),(156,NULL,10,NULL,100,1),(157,NULL,10,NULL,106,0),(158,NULL,10,NULL,84,1),(159,NULL,10,NULL,85,1),(160,NULL,10,NULL,86,1),(161,NULL,10,NULL,87,1),(162,NULL,10,NULL,88,1),(163,NULL,10,NULL,89,1),(164,NULL,10,NULL,90,1),(165,NULL,10,NULL,91,2),(166,NULL,10,NULL,92,2),(167,NULL,10,NULL,93,2),(168,NULL,10,NULL,94,2),(169,NULL,10,NULL,95,2),(170,NULL,10,NULL,96,2),(171,NULL,10,NULL,97,2),(172,NULL,10,NULL,98,2),(173,NULL,10,NULL,99,1),(174,NULL,10,NULL,100,1),(175,'',10,NULL,106,0),(176,NULL,10,NULL,84,1),(177,NULL,10,NULL,85,1),(178,NULL,10,NULL,86,1),(179,NULL,10,NULL,87,1),(180,NULL,10,NULL,88,1),(181,NULL,10,NULL,89,1),(182,NULL,10,NULL,90,1),(183,NULL,10,NULL,91,2),(184,NULL,10,NULL,92,2),(185,NULL,10,NULL,93,2),(186,NULL,10,NULL,94,2),(187,NULL,10,NULL,95,2),(188,NULL,10,NULL,96,2),(189,NULL,10,NULL,97,2),(190,NULL,10,NULL,98,2),(191,NULL,10,NULL,99,1),(192,NULL,10,NULL,100,1),(193,'',10,NULL,106,0),(194,NULL,10,NULL,84,1),(195,NULL,10,NULL,85,1),(196,NULL,10,NULL,86,1),(197,NULL,10,NULL,87,1),(198,NULL,10,NULL,88,1),(199,NULL,10,NULL,89,1),(200,NULL,10,NULL,90,1),(201,NULL,10,NULL,91,2),(202,NULL,10,NULL,92,2),(203,NULL,10,NULL,93,2),(204,NULL,10,NULL,94,2),(205,NULL,10,NULL,95,2),(206,NULL,10,NULL,96,2),(207,NULL,10,NULL,97,2),(208,NULL,10,NULL,98,2),(209,NULL,10,NULL,99,1),(210,NULL,10,NULL,100,1),(211,'',10,NULL,106,0),(212,NULL,10,NULL,84,1),(213,NULL,10,NULL,85,1),(214,NULL,10,NULL,86,1),(215,NULL,10,NULL,87,1),(216,NULL,10,NULL,88,1),(217,NULL,10,NULL,89,1),(218,NULL,10,NULL,90,1),(219,NULL,10,NULL,91,2),(220,NULL,10,NULL,92,2),(221,NULL,10,NULL,93,2),(222,NULL,10,NULL,94,2),(223,NULL,10,NULL,95,2),(224,NULL,10,NULL,96,2),(225,NULL,10,NULL,97,2),(226,NULL,10,NULL,98,2),(227,NULL,10,NULL,99,1),(228,NULL,10,NULL,100,1),(229,NULL,10,NULL,101,116),(230,NULL,10,NULL,102,123),(231,NULL,10,NULL,103,127),(232,NULL,10,NULL,105,129),(233,NULL,10,NULL,105,111),(234,'cfcccccccccccccccccccccc',10,NULL,106,0),(235,NULL,10,NULL,84,1),(236,NULL,10,NULL,85,1),(237,NULL,10,NULL,86,1),(238,NULL,10,NULL,87,1),(239,NULL,10,NULL,88,1),(240,NULL,10,NULL,89,1),(241,NULL,10,NULL,90,1),(242,NULL,10,NULL,91,2),(243,NULL,10,NULL,92,2),(244,NULL,10,NULL,93,2),(245,NULL,10,NULL,94,2),(246,NULL,10,NULL,95,2),(247,NULL,10,NULL,96,2),(248,NULL,10,NULL,97,2),(249,NULL,10,NULL,98,2),(250,NULL,10,NULL,99,1),(251,NULL,10,NULL,100,1),(252,NULL,10,NULL,101,116),(253,NULL,10,NULL,102,123),(254,NULL,10,NULL,103,127),(255,NULL,10,NULL,105,129),(256,NULL,10,NULL,105,111),(257,'cfcccccccccccccccccccccc',10,NULL,106,0),(258,NULL,10,NULL,84,1),(259,NULL,10,NULL,85,1),(260,NULL,10,NULL,86,1),(261,NULL,10,NULL,87,1),(262,NULL,10,NULL,88,1),(263,NULL,10,NULL,89,1),(264,NULL,10,NULL,90,1),(265,NULL,10,NULL,91,2),(266,NULL,10,NULL,92,2),(267,NULL,10,NULL,93,2),(268,NULL,10,NULL,94,2),(269,NULL,10,NULL,95,2),(270,NULL,10,NULL,96,2),(271,NULL,10,NULL,97,2),(272,NULL,10,NULL,98,2),(273,NULL,10,NULL,99,1),(274,NULL,10,NULL,100,1),(275,NULL,10,NULL,101,116),(276,NULL,10,NULL,102,123),(277,NULL,10,NULL,103,127),(278,NULL,10,NULL,105,129),(279,NULL,10,NULL,105,111),(280,'cfcccccccccccccccccccccc',10,NULL,106,0),(281,NULL,10,NULL,84,1),(282,NULL,10,NULL,85,1),(283,NULL,10,NULL,86,1),(284,NULL,10,NULL,87,1),(285,NULL,10,NULL,88,1),(286,NULL,10,NULL,89,1),(287,NULL,10,NULL,90,1),(288,NULL,10,NULL,91,2),(289,NULL,10,NULL,92,2),(290,NULL,10,NULL,93,2),(291,NULL,10,NULL,94,2),(292,NULL,10,NULL,95,2),(293,NULL,10,NULL,96,2),(294,NULL,10,NULL,97,2),(295,NULL,10,NULL,98,2),(296,NULL,10,NULL,99,1),(297,NULL,10,NULL,100,1),(298,NULL,10,NULL,101,116),(299,NULL,10,NULL,102,123),(300,NULL,10,NULL,103,127),(301,NULL,10,NULL,105,129),(302,NULL,10,NULL,105,111),(303,'cfcccccccccccccccccccccc',10,NULL,106,0),(304,NULL,10,NULL,84,1),(305,NULL,10,NULL,85,1),(306,NULL,10,NULL,86,1),(307,NULL,10,NULL,87,1),(308,NULL,10,NULL,88,1),(309,NULL,10,NULL,89,1),(310,NULL,10,NULL,90,1),(311,NULL,10,NULL,91,2),(312,NULL,10,NULL,92,2),(313,NULL,10,NULL,93,2),(314,NULL,10,NULL,94,2),(315,NULL,10,NULL,95,2),(316,NULL,10,NULL,96,2),(317,NULL,10,NULL,97,2),(318,NULL,10,NULL,98,2),(319,NULL,10,NULL,99,1),(320,NULL,10,NULL,100,1),(321,NULL,10,NULL,101,116),(322,NULL,10,NULL,102,123),(323,NULL,10,NULL,103,127),(324,NULL,10,NULL,105,129),(325,NULL,10,NULL,105,111),(326,'cfcccccccccccccccccccccc',10,NULL,106,0),(327,NULL,10,NULL,84,1),(328,NULL,10,NULL,85,1),(329,NULL,10,NULL,86,1),(330,NULL,10,NULL,87,1),(331,NULL,10,NULL,88,1),(332,NULL,10,NULL,89,1),(333,NULL,10,NULL,90,1),(334,NULL,10,NULL,91,2),(335,NULL,10,NULL,92,2),(336,NULL,10,NULL,93,2),(337,NULL,10,NULL,94,2),(338,NULL,10,NULL,95,2),(339,NULL,10,NULL,96,2),(340,NULL,10,NULL,97,2),(341,NULL,10,NULL,98,2),(342,NULL,10,NULL,99,1),(343,NULL,10,NULL,100,1),(344,NULL,10,NULL,101,116),(345,NULL,10,NULL,102,123),(346,NULL,10,NULL,103,127),(347,NULL,10,NULL,105,129),(348,NULL,10,NULL,105,111),(349,'cfcccccccccccccccccccccc',10,NULL,106,0),(350,NULL,10,NULL,84,1),(351,NULL,10,NULL,85,1),(352,NULL,10,NULL,86,1),(353,NULL,10,NULL,87,1),(354,NULL,10,NULL,88,1),(355,NULL,10,NULL,89,1),(356,NULL,10,NULL,90,1),(357,NULL,10,NULL,91,2),(358,NULL,10,NULL,92,2),(359,NULL,10,NULL,93,2),(360,NULL,10,NULL,94,2),(361,NULL,10,NULL,95,2),(362,NULL,10,NULL,96,2),(363,NULL,10,NULL,97,2),(364,NULL,10,NULL,98,2),(365,NULL,10,NULL,99,1),(366,NULL,10,NULL,100,1),(367,NULL,10,NULL,101,116),(368,NULL,10,NULL,102,123),(369,NULL,10,NULL,103,127),(370,NULL,10,NULL,105,129),(371,NULL,10,NULL,105,111),(372,'cfcccccccccccccccccccccc',10,NULL,106,0),(373,NULL,10,54,22,1),(374,NULL,10,54,24,0),(375,NULL,10,54,33,1),(376,NULL,10,54,34,1),(377,NULL,10,54,35,1),(378,NULL,10,55,22,1),(379,NULL,10,55,24,0),(380,NULL,10,55,33,1),(381,NULL,10,55,34,1),(382,NULL,10,55,35,1),(383,NULL,10,56,22,1),(384,NULL,10,56,24,0),(385,NULL,10,56,33,1),(386,NULL,10,56,34,1),(387,NULL,10,56,35,1),(388,NULL,10,57,22,1),(389,NULL,10,57,24,0),(390,NULL,10,57,33,1),(391,NULL,10,57,34,1),(392,NULL,10,57,35,1),(393,NULL,10,58,22,1),(394,NULL,10,58,24,0),(395,NULL,10,58,33,1),(396,NULL,10,58,34,1),(397,NULL,10,58,35,1),(398,NULL,10,59,22,1),(399,NULL,10,59,24,0),(400,NULL,10,59,33,1),(401,NULL,10,59,34,1),(402,NULL,10,59,35,1),(403,NULL,10,60,22,1),(404,NULL,10,60,24,0),(405,NULL,10,60,25,0),(406,NULL,10,60,26,2),(407,NULL,10,60,27,1),(408,NULL,10,60,28,1),(409,NULL,10,60,29,44),(410,'4',10,60,30,0),(411,'5',10,60,31,0),(412,'6',10,60,32,0),(413,NULL,10,60,33,1),(414,NULL,10,60,34,1),(415,NULL,10,60,35,1),(416,NULL,10,60,0,0),(417,NULL,10,60,0,1),(418,NULL,10,60,0,0),(419,NULL,10,60,0,0),(420,NULL,10,60,0,2),(421,NULL,10,60,0,0),(422,NULL,10,60,0,1),(423,NULL,10,61,0,0),(424,NULL,10,61,0,0),(425,NULL,10,61,24,0),(426,NULL,10,61,33,1),(427,NULL,10,61,34,1),(428,NULL,10,62,22,1),(429,NULL,10,62,24,0),(430,NULL,10,62,33,1),(431,NULL,10,62,34,1),(432,NULL,10,62,35,1),(433,NULL,10,63,22,1),(434,NULL,10,63,24,0),(435,NULL,10,63,33,1),(436,NULL,10,63,34,1),(437,NULL,10,63,35,1),(438,NULL,10,64,22,1),(439,NULL,10,64,24,0),(440,NULL,10,64,33,1),(441,NULL,10,64,34,1),(442,NULL,10,64,35,1),(443,NULL,10,65,22,1),(444,NULL,10,65,24,0),(445,NULL,10,65,33,1),(446,NULL,10,65,34,1),(447,NULL,10,65,35,1),(448,NULL,10,66,22,1),(449,NULL,10,66,24,0),(450,NULL,10,66,33,1),(451,NULL,10,66,34,1),(452,NULL,10,66,35,1),(453,NULL,10,67,22,1),(454,NULL,10,67,24,0),(455,NULL,10,67,33,1),(456,NULL,10,67,34,1),(457,NULL,10,67,35,1),(458,NULL,10,68,0,0),(459,NULL,10,68,24,0),(460,NULL,10,68,33,1),(461,NULL,10,68,34,1),(462,NULL,10,68,0,1),(463,NULL,10,68,0,2),(464,NULL,10,68,0,3),(465,NULL,10,68,0,4),(466,NULL,11,69,22,1),(467,NULL,11,69,24,0),(468,NULL,11,69,33,0),(469,NULL,11,69,34,1),(470,NULL,11,69,35,1),(471,NULL,11,69,38,1),(472,NULL,11,69,39,0),(473,NULL,11,70,22,1),(474,NULL,11,70,24,0),(475,NULL,11,70,33,1),(476,NULL,11,70,34,1),(477,NULL,11,70,35,1),(478,NULL,11,71,22,1),(479,NULL,11,71,24,0),(480,NULL,11,71,25,0),(481,NULL,11,71,26,1),(482,NULL,11,71,28,2),(483,NULL,11,71,29,44),(484,'545',11,71,30,0),(485,'66778',11,71,31,0),(486,'888999',11,71,32,0),(487,NULL,11,71,33,1),(488,NULL,11,71,34,1),(489,NULL,11,71,35,1),(490,NULL,11,NULL,84,1),(491,NULL,11,NULL,85,1),(492,NULL,11,NULL,86,1),(493,NULL,11,NULL,87,1),(494,NULL,11,NULL,88,1),(495,NULL,11,NULL,89,1),(496,NULL,11,NULL,90,1),(497,NULL,11,NULL,91,2),(498,NULL,11,NULL,92,2),(499,NULL,11,NULL,93,2),(500,NULL,11,NULL,94,2),(501,NULL,11,NULL,95,2),(502,NULL,11,NULL,96,2),(503,NULL,11,NULL,97,2),(504,NULL,11,NULL,98,2),(505,NULL,11,NULL,99,1),(506,NULL,11,NULL,100,1),(507,NULL,11,NULL,105,129),(508,NULL,11,NULL,105,111),(509,'',11,NULL,106,0),(510,NULL,11,NULL,84,1),(511,NULL,11,NULL,85,1),(512,NULL,11,NULL,86,1),(513,NULL,11,NULL,87,1),(514,NULL,11,NULL,88,1),(515,NULL,11,NULL,89,1),(516,NULL,11,NULL,90,1),(517,NULL,11,NULL,91,2),(518,NULL,11,NULL,92,2),(519,NULL,11,NULL,93,2),(520,NULL,11,NULL,94,2),(521,NULL,11,NULL,95,2),(522,NULL,11,NULL,96,2),(523,NULL,11,NULL,97,2),(524,NULL,11,NULL,98,2),(525,NULL,11,NULL,99,1),(526,NULL,11,NULL,100,1),(527,'',11,NULL,106,0),(528,NULL,10,NULL,84,1),(529,NULL,10,NULL,85,1),(530,NULL,10,NULL,86,1),(531,NULL,10,NULL,87,1),(532,NULL,10,NULL,88,1),(533,NULL,10,NULL,89,1),(534,NULL,10,NULL,90,1),(535,NULL,10,NULL,91,2),(536,NULL,10,NULL,92,2),(537,NULL,10,NULL,93,2),(538,NULL,10,NULL,94,2),(539,NULL,10,NULL,95,2),(540,NULL,10,NULL,96,2),(541,NULL,10,NULL,97,2),(542,NULL,10,NULL,98,2),(543,NULL,10,NULL,99,1),(544,NULL,10,NULL,100,1),(545,NULL,10,NULL,101,116),(546,NULL,10,NULL,102,123),(547,NULL,10,NULL,103,127),(548,NULL,10,NULL,105,129),(549,NULL,10,NULL,105,111),(550,'cfcccccccccccccccccccccc',10,NULL,106,0),(551,NULL,10,NULL,84,1),(552,NULL,10,NULL,85,1),(553,NULL,10,NULL,86,1),(554,NULL,10,NULL,87,1),(555,NULL,10,NULL,88,1),(556,NULL,10,NULL,89,1),(557,NULL,10,NULL,90,1),(558,NULL,10,NULL,91,2),(559,NULL,10,NULL,92,2),(560,NULL,10,NULL,93,2),(561,NULL,10,NULL,94,2),(562,NULL,10,NULL,95,2),(563,NULL,10,NULL,96,2),(564,NULL,10,NULL,97,2),(565,NULL,10,NULL,98,2),(566,NULL,10,NULL,99,1),(567,NULL,10,NULL,100,1),(568,NULL,10,NULL,101,116),(569,NULL,10,NULL,102,123),(570,NULL,10,NULL,103,127),(571,NULL,10,NULL,105,129),(572,NULL,10,NULL,105,111),(573,'cfcccccccccccccccccccccc',10,NULL,106,0),(574,NULL,11,NULL,84,1),(575,NULL,11,NULL,85,1),(576,NULL,11,NULL,86,1),(577,NULL,11,NULL,87,1),(578,NULL,11,NULL,88,1),(579,NULL,11,NULL,89,1),(580,NULL,11,NULL,90,1),(581,NULL,11,NULL,91,2),(582,NULL,11,NULL,92,2),(583,NULL,11,NULL,93,2),(584,NULL,11,NULL,94,2),(585,NULL,11,NULL,95,2),(586,NULL,11,NULL,96,2),(587,NULL,11,NULL,97,2),(588,NULL,11,NULL,98,2),(589,NULL,11,NULL,99,1),(590,NULL,11,NULL,100,1),(591,'',11,NULL,106,0),(592,NULL,12,72,22,1),(593,NULL,12,72,24,0),(594,NULL,12,72,33,1),(595,NULL,12,72,34,1),(596,NULL,12,72,35,1),(597,NULL,12,72,38,1),(598,NULL,12,72,39,0),(599,NULL,12,73,0,0),(600,NULL,12,73,24,0),(601,NULL,12,73,33,1),(602,NULL,12,73,34,1),(603,NULL,12,73,38,3),(604,NULL,12,74,22,1),(605,NULL,12,74,24,0),(606,NULL,12,74,33,1),(607,NULL,12,74,34,1),(608,NULL,12,74,35,1),(609,NULL,12,75,0,1),(610,NULL,12,75,34,1),(611,NULL,12,76,0,44444444),(612,NULL,12,76,33,1),(613,NULL,12,76,34,1),(614,NULL,12,76,35,1),(615,NULL,12,77,22,3),(616,NULL,12,77,0,3),(617,NULL,12,77,24,0),(618,NULL,12,77,25,1),(619,NULL,12,77,26,1),(620,NULL,12,77,33,1),(621,NULL,12,77,34,0),(622,NULL,12,77,0,3),(623,NULL,12,77,0,4),(624,NULL,12,77,105,2),(625,'3',12,77,106,0),(626,NULL,12,77,107,4),(627,NULL,12,77,108,5),(628,NULL,12,NULL,84,1),(629,NULL,12,NULL,85,1),(630,NULL,12,NULL,86,1),(631,NULL,12,NULL,87,1),(632,NULL,12,NULL,88,1),(633,NULL,12,NULL,89,1),(634,NULL,12,NULL,90,1),(635,NULL,12,NULL,91,2),(636,NULL,12,NULL,92,2),(637,NULL,12,NULL,93,2),(638,NULL,12,NULL,94,2),(639,NULL,12,NULL,95,2),(640,NULL,12,NULL,96,2),(641,NULL,12,NULL,97,2),(642,NULL,12,NULL,98,2),(643,NULL,12,NULL,99,1),(644,NULL,12,NULL,100,1),(645,'',12,NULL,106,0),(646,NULL,13,78,22,1),(647,NULL,13,78,24,0),(648,NULL,13,78,25,1),(649,NULL,13,78,26,6),(650,NULL,13,78,28,1),(651,NULL,13,78,29,22),(652,'33',13,78,30,0),(653,'444',13,78,31,0),(654,'rrrrrrrrrrrrrrrrrrrrrrr',13,78,32,0),(655,NULL,13,78,33,1),(656,NULL,13,78,34,1),(657,NULL,13,78,35,1),(658,NULL,13,78,38,1),(659,NULL,13,78,39,1),(660,NULL,13,79,0,0),(661,NULL,13,79,24,0),(662,NULL,13,79,25,1),(663,NULL,13,79,26,7),(664,NULL,13,79,107,0),(665,NULL,13,79,33,1),(666,NULL,13,79,34,1),(667,NULL,13,79,0,1),(668,NULL,13,79,0,1),(669,NULL,13,79,0,0),(670,NULL,13,79,0,1),(671,NULL,13,79,0,1),(672,NULL,13,NULL,84,1),(673,NULL,13,NULL,85,1),(674,NULL,13,NULL,86,1),(675,NULL,13,NULL,87,1),(676,NULL,13,NULL,88,1),(677,NULL,13,NULL,89,1),(678,NULL,13,NULL,90,1),(679,NULL,13,NULL,91,2),(680,NULL,13,NULL,92,2),(681,NULL,13,NULL,93,2),(682,NULL,13,NULL,94,2),(683,NULL,13,NULL,95,2),(684,NULL,13,NULL,96,2),(685,NULL,13,NULL,97,2),(686,NULL,13,NULL,98,2),(687,NULL,13,NULL,99,1),(688,NULL,13,NULL,100,1),(689,NULL,13,NULL,101,118),(690,NULL,13,NULL,102,124),(691,NULL,13,NULL,103,127),(692,NULL,13,NULL,105,130),(693,NULL,13,NULL,105,111),(694,'buena vista desde la ventana',13,NULL,106,0),(695,NULL,17,80,22,5),(696,NULL,17,80,24,0),(697,NULL,17,80,33,1),(698,NULL,17,80,34,1),(699,NULL,17,80,35,1),(700,NULL,19,81,22,5),(701,NULL,19,81,24,14),(702,NULL,19,81,33,1),(703,NULL,19,81,34,1),(704,NULL,19,81,35,1);

/*Table structure for table `respuesta_pregunta` */

DROP TABLE IF EXISTS `respuesta_pregunta`;

CREATE TABLE `respuesta_pregunta` (
  `idRespPreg` int(11) NOT NULL AUTO_INCREMENT,
  `idPregunta` int(11) NOT NULL,
  `idRespuesta` int(11) NOT NULL,
  PRIMARY KEY (`idRespPreg`),
  KEY `idPregunta` (`idPregunta`),
  KEY `idRespuesta` (`idRespuesta`)
) ENGINE=InnoDB AUTO_INCREMENT=256 DEFAULT CHARSET=latin1;

/*Data for the table `respuesta_pregunta` */

insert  into `respuesta_pregunta`(`idRespPreg`,`idPregunta`,`idRespuesta`) values (1,15,1),(2,15,2),(3,21,3),(4,21,4),(5,22,5),(6,22,6),(7,22,7),(8,22,8),(9,22,9),(10,22,10),(11,22,11),(12,22,12),(13,22,13),(14,24,14),(15,24,15),(16,24,16),(17,24,17),(18,25,1),(19,25,2),(20,26,18),(21,26,19),(22,26,20),(23,26,21),(24,26,22),(25,26,23),(26,26,24),(27,26,25),(28,26,26),(29,27,27),(30,27,28),(31,27,29),(32,28,30),(33,28,31),(34,28,32),(35,33,1),(36,33,2),(37,34,1),(38,34,2),(39,35,1),(40,35,2),(41,38,1),(42,38,2),(43,38,33),(44,39,34),(45,39,35),(46,39,36),(47,40,37),(48,40,38),(49,40,39),(50,40,40),(51,40,41),(52,40,42),(53,41,43),(54,41,44),(55,42,45),(56,42,46),(57,44,1),(58,44,2),(59,45,1),(60,45,2),(61,46,47),(62,46,48),(63,46,49),(64,47,1),(65,47,2),(66,48,1),(67,48,2),(68,49,1),(69,49,2),(70,50,1),(71,50,2),(72,51,1),(73,51,2),(74,51,50),(75,52,51),(76,52,52),(77,52,53),(78,52,54),(79,52,55),(80,52,56),(81,52,57),(85,54,58),(86,54,59),(87,54,60),(88,54,61),(89,54,33),(90,55,1),(91,55,2),(92,55,62),(93,56,63),(94,56,64),(95,56,65),(96,56,66),(97,56,67),(98,57,68),(99,57,69),(100,57,70),(101,57,71),(102,57,72),(103,57,73),(104,57,74),(105,57,75),(106,57,76),(107,57,77),(108,57,78),(109,57,79),(110,57,62),(111,58,1),(112,58,2),(113,58,62),(114,59,80),(115,59,64),(116,59,65),(117,59,66),(118,59,67),(119,60,68),(120,60,69),(121,60,70),(122,60,71),(123,60,72),(124,60,73),(125,60,74),(126,60,75),(127,60,76),(128,60,77),(129,60,78),(130,60,79),(131,60,62),(132,61,81),(133,61,82),(134,61,83),(135,61,84),(136,62,85),(137,62,86),(138,63,1),(139,63,2),(140,64,1),(141,64,2),(142,65,1),(143,65,2),(144,66,1),(145,66,2),(146,67,1),(147,67,2),(148,68,1),(149,68,2),(150,69,1),(151,69,2),(152,70,87),(153,70,88),(154,70,89),(155,70,90),(156,70,91),(157,71,1),(158,71,2),(159,71,92),(160,72,93),(161,72,94),(162,72,95),(163,72,96),(164,72,97),(165,72,98),(166,72,99),(167,72,100),(168,72,101),(169,72,67),(170,73,93),(171,73,94),(172,73,95),(173,73,96),(174,73,97),(175,75,102),(176,75,103),(177,75,104),(178,75,105),(179,75,106),(180,75,107),(181,75,108),(182,75,109),(183,76,1),(184,76,2),(185,78,111),(186,78,112),(187,79,113),(188,79,114),(189,79,115),(190,80,1),(191,80,2),(192,82,1),(193,82,2),(194,83,1),(195,83,2),(196,83,62),(197,84,1),(198,84,2),(199,85,1),(200,85,2),(201,86,1),(202,86,2),(203,87,1),(204,87,2),(205,88,1),(206,88,2),(207,89,1),(208,89,2),(209,90,1),(210,90,2),(211,91,1),(212,91,2),(213,92,1),(214,92,2),(215,93,1),(216,93,2),(217,94,1),(218,94,2),(219,95,1),(220,95,2),(221,96,1),(222,96,2),(223,97,1),(224,97,2),(225,98,1),(226,98,2),(227,99,1),(228,99,2),(229,100,1),(230,100,2),(231,101,116),(232,101,117),(233,101,118),(234,101,119),(235,101,120),(236,101,121),(237,101,122),(238,102,123),(239,102,124),(240,102,125),(241,102,126),(242,103,127),(243,103,128),(244,103,126),(245,104,129),(246,104,130),(247,104,131),(248,105,111),(249,105,132),(250,107,1),(251,107,2),(252,108,1),(253,108,2),(254,0,0),(255,0,0);

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
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

/*Data for the table `tipo_pregunta` */

insert  into `tipo_pregunta`(`idTipoPregunta`,`nombreTipoP`,`descripcionTipoP`) values (1,'Multiple Opción Cargable','Cargar posibles respuestas por el creador de la encuesta para mostrar con checkboxs.'),(2,'Opción Única Desplegable Cargable','Cargar las posibles respuestas por el creador de la encuesta para mostrar en un combo seleccionable donde solo una opción puede ser elegida.'),(3,'Fecha','Fecha de una accion a realizar'),(4,'Si/No','Respuesta por Si o No No sabe/No contesta.'),(5,'Escala Lineal','Marcador de rango de valores'),(6,'Respuesta Breve','Respuesta que se debe escribir en un campo determinado.'),(7,'Multiple Opción de BD','Asignar posibles respuestas en base a registros guardados en una tabla de la Base de Datos.'),(8,'Opción Única Desplegable de BD','Asignar las posibles respuestas en base a registros guardados en una tabla de la Base de Datos para mostrar en un combo seleccionable donde solo una opción puede ser elegida.'),(9,'Hora','Hora de una acción a realizar.'),(10,'AutoIncremental','Campo traido desde la Base de Datos generado en base al ultimo registro cargado +1.'),(11,'Numérico','Respuesta de valor tipo numerico.');

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
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

/*Data for the table `usuario` */

insert  into `usuario`(`idUsuario`,`contrasenia`,`usuario`,`idNivel`,`idEmpleado`) values (3,'81dc9bdb52d04dc20036dbd8313ed055','aldana',6,3),(4,'81dc9bdb52d04dc20036dbd8313ed055','aldana',7,13),(5,'81dc9bdb52d04dc20036dbd8313ed055','prueba',6,4),(6,'c893bad68927b457dbed39460e6afd62','osep',7,15),(7,'c893bad68927b457dbed39460e6afd62','jimena',2,35),(8,'c893bad68927b457dbed39460e6afd62','adriana',2,16);

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
