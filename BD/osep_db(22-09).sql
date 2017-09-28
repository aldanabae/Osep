-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 22-09-2017 a las 22:45:18
-- Versión del servidor: 10.1.13-MariaDB
-- Versión de PHP: 5.6.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `osep_db2`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `bloque`
--

CREATE TABLE `bloque` (
  `idBloque` int(11) NOT NULL,
  `nroBloque` int(11) NOT NULL,
  `nombreBloque` varchar(100) NOT NULL,
  `descripBloque` text,
  `idEncuesta` int(11) NOT NULL,
  `idTipoBloque` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `bloque`
--

INSERT INTO `bloque` (`idBloque`, `nroBloque`, `nombreBloque`, `descripBloque`, `idEncuesta`, `idTipoBloque`) VALUES
(1, 0, 'De Identificación del Territorio/Facilitador/Familia Relevada y Encuesta', 'Bloque Inicial', 1, 1),
(2, 1, 'Familia Conviviente', 'Bloque de Familia', 1, 2),
(3, 2, 'Utilizacion de Servicios de Salud', 'Bloque para Afiliados', 1, 1),
(4, 3, 'Salud de los Niños', 'Bloque Niños Menores de 2 años(0 a 1 año 11 meses y 29 días)', 1, 2),
(5, 3, 'Salud de los Niños', 'Bloque Niños Mayores de 2 años y Menores de 14(2 a 14 año 11 meses y 29 días)', 1, 2),
(6, 4, 'Salud de las Mujeres', 'Bloque Mujeres Mayores de 16 años', 1, 2),
(7, 5, 'Salud de los Adultos Mayores', 'Bloque Mayores de 65 años', 1, 2),
(8, 6, 'Afiliados con Discapacidad', 'Bloque para Discapacitados', 1, 2),
(9, 7, 'Embarazadas', 'Bloque para integrantes de la familia embarazadas.\r\n', 1, 2),
(10, 8, 'Vivienda y Entorno', 'Bloque características generales de la Vivienda.', 1, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `criticidad`
--

CREATE TABLE `criticidad` (
  `idCriticidad` int(11) NOT NULL,
  `nombreCriticidad` varchar(45) NOT NULL,
  `descCriticidad` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `criticidad`
--

INSERT INTO `criticidad` (`idCriticidad`, `nombreCriticidad`, `descCriticidad`) VALUES
(1, 'Nula', ''),
(2, 'Media', ''),
(3, 'Alta', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `departamento`
--

CREATE TABLE `departamento` (
  `id_tdeparta` int(11) NOT NULL,
  `descdep` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `departamento`
--

INSERT INTO `departamento` (`id_tdeparta`, `descdep`) VALUES
(1, 'Capital'),
(2, 'Las Heras'),
(3, 'Guaymallén'),
(4, 'Godoy Cruz'),
(5, 'Luján de Cuyo'),
(6, 'Maipú'),
(7, 'San Martín'),
(8, 'Junín'),
(9, 'Rivadavia'),
(10, 'Santa Rosa'),
(11, 'La Paz'),
(12, 'Lavalle'),
(13, 'Tupungato'),
(14, 'Tunuyán'),
(15, 'San Carlos'),
(16, 'San Rafael'),
(17, 'General Alvear'),
(18, 'Malargüe');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `direccion`
--

CREATE TABLE `direccion` (
  `idDireccion` int(11) NOT NULL,
  `calle` varchar(45) NOT NULL,
  `casa` int(11) DEFAULT NULL,
  `numero` int(11) DEFAULT NULL,
  `dptoNumero` int(11) DEFAULT NULL,
  `entreCalles1` varchar(45) NOT NULL,
  `entreCalles2` varchar(45) NOT NULL,
  `barrio` varchar(45) NOT NULL,
  `observaciones` text NOT NULL,
  `manzana` char(11) DEFAULT NULL,
  `id_tlocalidad` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `direccion`
--

INSERT INTO `direccion` (`idDireccion`, `calle`, `casa`, `numero`, `dptoNumero`, `entreCalles1`, `entreCalles2`, `barrio`, `observaciones`, `manzana`, `id_tlocalidad`) VALUES
(1, 'gomensoro', 0, 1234, 17, 'pirovano y felix suarez', '', 'los condes', '', '', 182),
(2, '', 19, 0, 1, '', '', 'barrio uno', '', 'c', 116),
(3, 'ituzaingo', 0, 32, 1, '', '', '', '', '', 80),
(4, 'ituzaingo', 0, 32, 1, '', '', '', '', '', 80),
(5, 'calle 11', 0, 1234, 3, '', '', '', '', '', 199),
(6, '2323', 0, 3333, 8, '', '', '', '', '', 218),
(7, 'santa teresita', 0, 342, 5, 'tos  y sabedra', '', 'los violines', '', '', 13);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empleado`
--

CREATE TABLE `empleado` (
  `idEmpleado` int(11) NOT NULL,
  `nombreE` varchar(100) NOT NULL,
  `apellidoE` varchar(100) NOT NULL,
  `nroLegajo` int(45) NOT NULL,
  `convenio` varchar(100) NOT NULL,
  `dni` int(11) NOT NULL,
  `telefono` int(11) DEFAULT NULL,
  `direccion` varchar(100) DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL,
  `activo` tinyint(1) NOT NULL,
  `idTipoEmpleado` int(11) NOT NULL,
  `idReferente` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `empleado`
--

INSERT INTO `empleado` (`idEmpleado`, `nombreE`, `apellidoE`, `nroLegajo`, `convenio`, `dni`, `telefono`, `direccion`, `email`, `activo`, `idTipoEmpleado`, `idReferente`) VALUES
(1, 'Marcelo', 'Contreras', 12894, 'Contratado', 29806389, 4567823, 'Anchorena 284', 'marceloc@hotmail.com', 1, 1, 0),
(2, 'Aldana', 'Baeza', 27902, 'Contratado', 32085237, 4983256, 'Azcuenaga 188', 'aldanatb@hotmail.com', 1, 1, 0),
(3, 'Usuario', 'OSEP', 11111, 'Planta Permanente', 22222222, 3333333, 'Direccion', 'usuario@email.com', 1, 1, 0),
(4, 'Adriana ', 'Sosa', 1944, 'Planta Permanente', 20304586, NULL, NULL, NULL, 1, 5, 43),
(5, 'Alex', 'Leyton', 8358, 'Planta Permanente', 18857073, NULL, NULL, NULL, 1, 4, 5),
(6, 'Ana Clara', 'García', 4200, 'Planta Permanente', 27790845, NULL, NULL, NULL, 1, 5, 54),
(7, 'Ana Fernanda', 'Montes', 6642, 'Planta Permanente', 23949274, NULL, NULL, NULL, 1, 5, 65),
(8, 'Belen', 'Saavedra ', 5629, 'Planta Permanente', 24705155, NULL, NULL, NULL, 1, 5, 65),
(9, 'Carina', 'Lucero', 4027, 'Planta Permanente', 22170496, NULL, NULL, NULL, 1, 5, 28),
(10, 'Carla', 'Grinberg', 3800, 'Planta Permanente', 29224605, NULL, NULL, NULL, 0, 5, 0),
(11, 'Carlos Marcelo', 'Llampa', 6526, 'Planta Permanente', 22186040, NULL, NULL, NULL, 0, 5, 0),
(12, 'Carolina', 'Alvarado', 7975, 'Planta Permanente', 25309024, NULL, NULL, NULL, 1, 5, 56),
(13, 'Cecilia', 'Gaset ', 6188, 'Planta Permanente', 28668878, NULL, NULL, NULL, 1, 5, 0),
(14, 'Daniel', 'Pizarro', 8265, 'Planta Permanente', 16020354, NULL, NULL, NULL, 1, 5, 65),
(15, 'Darío', 'Saromé', 4229, 'Planta Permanente', 21377566, NULL, NULL, NULL, 1, 5, 17),
(16, 'Diana', 'Cisella', 913, 'Planta Permanente', 17513893, NULL, NULL, NULL, 0, 5, 0),
(17, 'Diana', 'López', 4778, 'Planta Permanente', 25259878, NULL, NULL, NULL, 1, 4, 17),
(18, 'Elisa', 'Concina ', 4575, 'Planta Permanente', 27612322, NULL, NULL, NULL, 1, 5, 28),
(19, 'Fernanda', 'Britos ', 6643, 'Planta Permanente', 34763471, NULL, NULL, NULL, 0, 5, 0),
(20, 'Gustavo', 'Galetto ', 7424, 'Planta Permanente', 24006953, NULL, NULL, NULL, 1, 5, 65),
(21, 'Jessica', 'Espalla', 7118, 'Planta Permanente', 31214144, NULL, NULL, NULL, 1, 5, 54),
(22, 'Jimena', 'Del Barrio', 7830, 'Planta Permanente', 32192583, NULL, NULL, NULL, 1, 2, 0),
(23, 'Jonathan', 'Sixto', 7194, 'Planta Permanente', 31517456, NULL, NULL, NULL, 0, 5, 0),
(24, 'Jorge', 'Baroni', 5651, 'Planta Permanente', 25090908, NULL, NULL, NULL, 1, 5, 56),
(25, 'Leticia', 'Araya ', 1855, 'Planta Permanente', 20181466, NULL, NULL, NULL, 1, 2, 0),
(26, 'Jorge', 'Guajardo', 1957, 'Planta Permanente', 14696947, NULL, NULL, NULL, 0, 5, 0),
(28, 'Laura', 'Carmona', 3233, 'Planta Permanente', 14736621, NULL, NULL, NULL, 1, 4, 28),
(30, 'Leticia', 'Llul', 5187, 'Planta Permanente', 29563342, NULL, NULL, NULL, 1, 5, 43),
(31, 'Lorena', 'Giménez', 4101, 'Planta Permanente', 29226074, NULL, NULL, NULL, 0, 5, 0),
(32, 'Luis', 'Riolobos', 3177, 'Planta Permanente', 11177191, NULL, NULL, NULL, 1, 5, 34),
(33, 'Marcela', 'Illesca', 4590, 'Planta Permanente', 26935470, NULL, NULL, NULL, 1, 5, 28),
(34, 'Marcela', 'Méndez', 5774, 'Planta Permanente', 20525232, NULL, NULL, NULL, 1, 2, 0),
(35, 'Marcos', 'Ortega ', 8223, 'Planta Permanente', 26677902, NULL, NULL, NULL, 0, 5, 0),
(36, 'Margarita', 'Perez ', 3682, 'Planta Permanente', 23966211, NULL, NULL, NULL, 1, 5, 65),
(37, 'María Antonia', 'Cirrincione', 4393, 'Planta Permanente', 29821425, NULL, NULL, NULL, 1, 5, 43),
(38, 'Maricel', 'Gomez', 951, 'Planta Permanente', 17021816, NULL, NULL, NULL, 0, 5, 0),
(39, 'Mariela', 'Araguna', 4495, 'Planta Permanente', 25415644, NULL, NULL, NULL, 1, 5, 43),
(40, 'Mario', 'Cabezas', 1911, 'Planta Permanente', 20753475, NULL, NULL, NULL, 1, 5, 56),
(42, 'Matías', 'Marchiori', 5051, 'Planta Permanente', 27739362, NULL, NULL, NULL, 1, 5, 17),
(43, 'Mauricio', 'Farías', 3643, 'Planta Permanente', 25585014, NULL, NULL, NULL, 1, 4, 0),
(44, 'Mauro', 'Morosini', 6329, 'Planta Permanente', 29935053, NULL, NULL, NULL, 1, 5, 5),
(45, 'Nancy', 'Maldonado', 637, 'Planta Permanente', 16241186, NULL, NULL, NULL, 1, 5, 34),
(47, 'Noemí', 'Alonso', 5753, 'Planta Permanente', 17987425, NULL, NULL, NULL, 1, 5, 28),
(50, 'Rodrigo', 'López', 4350, 'Planta Permanente', 26557756, NULL, NULL, NULL, 1, 5, 43),
(52, 'Rosana', 'Gimenez', 5901, 'Planta Permanente', 29105437, NULL, NULL, NULL, 1, 5, 65),
(53, 'Roxana Fabiana', 'Palma', 6517, 'Planta Permanente', 22120073, NULL, NULL, NULL, 0, 5, 0),
(54, 'Silvana', 'Ponce', 3714, 'Planta Permanente', 25194725, NULL, NULL, NULL, 1, 4, 54),
(55, 'Teodora', 'Taca', 1875, 'Planta Permanente', 18808738, NULL, NULL, NULL, 1, 5, 34),
(56, 'Victor', 'Araujo', 8079, 'Planta Permanente', 28819421, NULL, NULL, NULL, 1, 4, 56),
(57, 'Violeta', 'Mayorga', 6968, 'Planta Permanente', 24634331, NULL, NULL, NULL, 1, 5, 56),
(58, 'Virginia', 'Cecchini', 3415, 'Planta Permanente', 28401142, NULL, NULL, NULL, 1, 2, 0),
(59, 'Cecilia', 'Silva', 3305, 'Planta Permanente', 25034746, NULL, NULL, NULL, 1, 2, 0),
(60, 'Federico', 'Llosa', 3461, 'Planta Permanente', 22140612, NULL, NULL, NULL, 1, 2, 0),
(61, 'Magdalena', 'Moscardo', 4960, 'Planta Permanente', 30051636, NULL, NULL, NULL, 1, 5, 17),
(62, 'Fernanda', 'Suarez', 0, 'Planta Permanente', 31949821, NULL, NULL, NULL, 0, 5, 34),
(63, 'Raquel', 'Barroso', 0, 'Planta Permanente', 26296533, NULL, NULL, NULL, 0, 5, 34),
(64, 'Marisa', 'Canillas', 0, 'Planta Permanente', 24279076, NULL, NULL, NULL, 0, 5, 34),
(65, 'Susana', 'Luna', 6277, 'Planta Permanente', 17641838, NULL, NULL, NULL, 1, 4, 65),
(66, 'Cecilia', 'Molina', 3078, 'Planta Permanente', 17390353, NULL, NULL, NULL, 1, 2, 0),
(67, 'Claudia', 'Gonzalez Mendoza', 953, 'Planta Permanente', 20896530, NULL, NULL, NULL, 1, 2, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `encuesta`
--

CREATE TABLE `encuesta` (
  `idEncuesta` int(11) NOT NULL,
  `nombreEncuesta` varchar(45) NOT NULL,
  `fechaEncuesta` date NOT NULL,
  `idEstadoEncuesta` int(11) NOT NULL,
  `idEmpleado` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `encuestado`
--

CREATE TABLE `encuestado` (
  `idEncuestado` int(11) NOT NULL,
  `nombreEncuestado` varchar(45) NOT NULL,
  `apellidoEncuestado` varchar(45) NOT NULL,
  `dniEncuestado` int(11) NOT NULL,
  `edad` int(11) NOT NULL,
  `sexo` varchar(10) NOT NULL,
  `idRelevamiento` int(11) NOT NULL,
  `nroAfiliado` int(11) DEFAULT NULL,
  `respondeR` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `encuestado`
--

INSERT INTO `encuestado` (`idEncuestado`, `nombreEncuestado`, `apellidoEncuestado`, `dniEncuestado`, `edad`, `sexo`, `idRelevamiento`, `nroAfiliado`, `respondeR`) VALUES
(1, 'sandra ', 'guzman', 2232323, 23, 'F', 1, 2232323, 1),
(2, 'sergio ', 'anselmi', 33232332, 38, 'M', 1, 2232323, 0),
(3, 'claudia andrea ', 'Lopez', 24176689, 50, 'F', 2, 24176689, 1),
(4, 'guadalupe ', 'lopez', 49184351, 8, 'M', 2, 24176689, 0),
(5, 'gregorio ', 'lopez', 23232323, 67, 'M', 2, 24176689, 0),
(6, 'ines ', 'gallardo', 232323, 64, 'F', 2, 24176689, 0),
(7, 'de prueba ', 'apellido', 22332323, 32, 'F', 3, 22332323, 1),
(8, 'sebastian ', 'santa maria', 3333334, 15, 'M', 3, 3333334, 0),
(9, '', 'sasasassa', 4554545, 74, 'M', 3, 4554545, 1),
(10, 'laura ', 'salinas', 4545444, 70, 'F', 6, 4545444, 1),
(11, 'cesar ', 'salinas', 343434, 59, 'M', 6, NULL, 1),
(12, '', 'marcelo', 5554345, 34, 'M', 7, 5554345, 0),
(13, '', 'sasasas', 343434, 69, 'F', 7, 343434, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estado_encuesta`
--

CREATE TABLE `estado_encuesta` (
  `idEstadoEncuesta` int(11) NOT NULL,
  `nombreEstadoE` varchar(45) NOT NULL,
  `descripEstadoE` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `estado_encuesta`
--

INSERT INTO `estado_encuesta` (`idEstadoEncuesta`, `nombreEstadoE`, `descripEstadoE`) VALUES
(1, 'Iniciada', 'Se inicio pero no se termino de realizar.'),
(2, 'Terminada', 'La encuesta fue finalizada.');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `etiqueta`
--

CREATE TABLE `etiqueta` (
  `idEtiqueta` int(11) NOT NULL,
  `nombreEtiqueta` varchar(45) NOT NULL,
  `descEtiqueta` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `etiqueta`
--

INSERT INTO `etiqueta` (`idEtiqueta`, `nombreEtiqueta`, `descEtiqueta`) VALUES
(1, 'Relacion', 'Conj de datos sobre la relación de parentesco'),
(2, 'Nivel Educativo', 'Nivel educativo al que accedio hasta ahora'),
(3, 'Ocupacion', 'Tipos de ocupación del encuestado'),
(4, 'Cobertura de Salud', 'Cobertura de salud del encuestado'),
(5, 'Tipo de Embarazo', ''),
(6, 'Nacimiento', ''),
(7, 'Peso del Niño', ''),
(8, 'Actividad Extraescolar', ''),
(9, 'Meses de Embarazo', ''),
(10, 'Estado de Salud', ''),
(11, 'Tipo de Discapacidad', ''),
(12, 'Accesibilidad a un Médico', 'Nivel de dificultad para acceder a un médico'),
(13, 'Nivel de Vivienda', ''),
(14, '', ''),
(15, '', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `localidad`
--

CREATE TABLE `localidad` (
  `id_tlocalidad` int(11) NOT NULL,
  `id_tdeparta` int(11) NOT NULL,
  `cploc` int(11) NOT NULL,
  `descloc` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `localidad`
--

INSERT INTO `localidad` (`id_tlocalidad`, `id_tdeparta`, `cploc`, `descloc`) VALUES
(1, 5, 5509, 'VISTALBA'),
(2, 6, 5513, 'LUZURIAGA'),
(3, 7, 5584, 'PALMIRA'),
(4, 9, 5579, 'SANTA MARIA DE ORO'),
(5, 12, 5535, 'LAGUNA DEL ROSARIO'),
(6, 13, 5561, 'ZAMPALITO'),
(7, 14, 5563, 'LOS SAUCES'),
(8, 16, 5539, 'PUNTA DE AGUA'),
(9, 17, 5634, 'KILOMETRO 884'),
(10, 18, 5613, 'EL CORTADERAL'),
(11, 2, 5545, 'USPALLATA'),
(12, 3, 5527, 'LOS CORRALITOS'),
(13, 5, 0, 'LOS BARRIALES'),
(14, 6, 5569, 'TRES ESQUINAS'),
(15, 7, 5582, 'RAMBLON'),
(16, 9, 5582, 'ING, GIAGNONI'),
(17, 12, 5533, 'TULUMAYA (CIUDAD)'),
(18, 13, 5560, 'ZAPATA'),
(19, 16, 5603, 'RAMA CAIDA'),
(20, 17, 5621, 'LA CALIFORNIA'),
(21, 18, 5613, 'AGUA BOTADA'),
(22, 3, 5519, 'PEDRO MOLINA'),
(23, 6, 5517, 'VILLA SECA'),
(24, 7, 5570, 'CIUDAD'),
(25, 12, 5533, 'LAS VIOLETAS'),
(26, 16, 5624, 'REAL DEL PADRE'),
(27, 17, 5634, 'LA ESCANDINAVA'),
(28, 18, 5611, 'EL MANZANO'),
(29, 3, 5525, 'RODEO DE LA CRUZ'),
(30, 7, 5589, 'TRES PORTEÑAS'),
(31, 12, 5533, 'SAN JOSE'),
(32, 16, 5600, 'CIUDAD'),
(33, 17, 5632, 'LA MARZOLINA'),
(34, 18, 5613, 'LAS JUNTAS'),
(35, 3, 5503, 'SAN FCO.DEL MONTE'),
(36, 12, 5537, 'SAN MIGUEL'),
(37, 16, 5615, '25 DE MAYO'),
(38, 17, 5632, 'LA MORA'),
(39, 3, 5519, 'SAN JOSE'),
(40, 12, 5533, 'TRES DE MAYO'),
(41, 16, 5622, 'VILLA ATUEL'),
(42, 17, 5634, 'LOS CAMPAMENTOS'),
(43, 3, 5521, 'VILLA NUEVA'),
(44, 16, 5611, 'EL SOSNEADO'),
(45, 17, 5621, 'LOS COMPARTOS'),
(46, 3, 5519, 'NUEVA CIUDAD'),
(47, 16, 5600, 'TOLEDANO'),
(48, 17, 5636, 'LOS HUARPES'),
(49, 16, 5603, 'SALTO DE LAS ROSAS'),
(50, 17, 6279, 'MEDIA LUNA'),
(51, 16, 5594, 'EL MOLINO'),
(52, 17, 5637, 'OVEJERIA'),
(53, 16, 5600, 'ISLA DIAMANTE'),
(54, 17, 5637, 'PAMPA DEL TIGRE'),
(55, 16, 5601, 'CAPITAN MONTOYA'),
(56, 17, 5621, 'POSTE DE HIERRO'),
(57, 16, 5603, 'RINCON DEL ATUEL'),
(58, 17, 5620, 'POZO HONDO'),
(59, 16, 5605, 'ATUEL NORTE'),
(60, 17, 5621, 'SAN PEDRO DEL ATUEL'),
(61, 17, 5621, 'EL DESVIO'),
(62, 1, 5500, 'PRIMERA SECCION'),
(63, 2, 5539, 'CAPDEVILA'),
(64, 3, 5533, 'BERMEJO'),
(65, 4, 5501, 'GDOR.BENEGAS'),
(66, 5, 5509, 'AGRELO'),
(67, 6, 5513, 'COQUIMBITO'),
(68, 7, 5571, 'ALTO SALVADOR'),
(69, 8, 5582, 'ALGARROBO GRANDE'),
(70, 9, 5575, 'ANDRADES'),
(71, 10, 5592, 'LA DORMIDA'),
(72, 11, 5598, 'DESAGUADERO'),
(73, 12, 5533, 'COLONIA ESTRELLA'),
(74, 13, 5509, 'ANCHORIS'),
(75, 14, 5565, 'CAMPO DE LOS ANDES'),
(76, 15, 5569, 'EUGENIO BUSTOS'),
(77, 16, 5603, 'CAÑADA SECA'),
(78, 17, 5634, 'BOWEN'),
(79, 18, 5613, 'RIO BARRANCAS'),
(80, 1, 5500, 'SEGUNDA SECCION'),
(81, 2, 5541, 'EL ALGARROBAL'),
(82, 3, 5523, 'BUENA NUEVA'),
(83, 4, 5501, 'CIUDAD'),
(84, 5, 5505, 'CARRODILLA'),
(85, 6, 5517, 'CRUZ DE PIEDRA'),
(86, 7, 5582, 'ALTO VERDE'),
(87, 8, 5582, 'ALTO VERDE'),
(88, 9, 5577, 'CAMPAMENTOS'),
(89, 10, 5594, 'LAS CATITAS'),
(90, 11, 5590, 'CIUDAD'),
(91, 12, 5535, 'COSTA DE ARAUJO'),
(92, 13, 5561, 'CORDON DEL PLATA'),
(93, 14, 5565, 'COLONIA LAS ROSAS'),
(94, 15, 5569, 'CHILECITO'),
(95, 16, 5603, 'CUADRO BENEGAS'),
(96, 17, 5636, 'CANALEJAS'),
(97, 18, 5621, 'AGUA ESCONDIDA'),
(98, 1, 5500, 'TERCERA SECCION'),
(99, 2, 5541, 'EL BORBOLLON'),
(100, 3, 5523, 'CAPILLA DEL ROSARIO'),
(101, 4, 5501, 'LAS TORTUGAS'),
(102, 5, 5505, 'CHACRAS DE CORIA'),
(103, 6, 5531, 'FRAY LUIS BELTRAN'),
(104, 7, 5570, 'BUEN ORDEN'),
(105, 8, 5573, 'CIUDAD'),
(106, 9, 5579, 'EL MIRADOR'),
(107, 10, 5596, 'CIUDAD'),
(108, 11, 5590, 'LAS CHACRITAS'),
(109, 12, 5535, 'EL CARMEN'),
(110, 13, 5561, 'EL PERAL'),
(111, 14, 5539, 'EL TOTORAL'),
(112, 15, 5567, 'LA CONSULTA'),
(113, 16, 5607, 'CUADRO NACIONAL'),
(114, 17, 5621, 'CARMENSA'),
(115, 18, 5613, 'CIUDAD'),
(116, 1, 5500, 'CUARTA SECCION'),
(117, 2, 5539, 'EL CHALLAO'),
(118, 3, 5525, 'CNIA.SEGOVIA'),
(119, 4, 5501, 'PRESIDENTE SARMIENTO'),
(120, 5, 5509, 'EL CARRIZAL'),
(121, 6, 5511, 'GRAL.GUTIERREZ'),
(122, 7, 5589, 'CHAPANAY'),
(123, 8, 5572, 'LA COLONIA'),
(124, 9, 5579, 'LA CENTRAL'),
(125, 10, 5596, 'LA COSTA'),
(126, 11, 5590, 'VILLA ANTIGUA'),
(127, 12, 5533, 'EL CHILCAL'),
(128, 13, 5561, 'EL ZAMPAL'),
(129, 14, 5565, 'LA PRIMAVERA'),
(130, 15, 5569, 'PAREDITAS'),
(131, 16, 5600, 'EL CERRITO'),
(132, 17, 5621, 'COCHICO'),
(133, 18, 5613, 'RIO GRANDE'),
(134, 1, 5500, 'QUINTA SECCION'),
(135, 2, 5541, 'EL PASTAL'),
(136, 3, 5519, 'DORREGO'),
(137, 4, 5501, 'SAN FCO.DEL MONTE'),
(138, 5, 5505, 'LA PUNTILLA'),
(139, 6, 5517, 'GRAL.ORTEGA'),
(140, 7, 5589, 'LA CHIMBA'),
(141, 8, 5585, 'LOS BARRIALES'),
(142, 9, 5579, 'LA LIBERTAD'),
(143, 10, 5596, 'VILLA CABECERA'),
(144, 11, 5590, 'LA MENTA'),
(145, 12, 5533, 'EL PLUMERO'),
(146, 13, 5561, 'GUALTALLARY'),
(147, 14, 5560, 'LAS PINTADAS'),
(148, 15, 5569, 'CIUDAD'),
(149, 16, 5605, 'EL NIHUIL'),
(150, 17, 5632, 'CNIA.ALVEAR OESTE'),
(151, 18, 5613, 'LAS LOICAS'),
(152, 1, 5500, 'SEXTA SECCION'),
(153, 2, 5541, 'EL PLUMERILLO'),
(154, 3, 5533, 'EL SAUCE'),
(155, 4, 5547, 'VILLA HIPODROMO'),
(156, 5, 5549, 'LAS COMPUERTAS'),
(157, 6, 5517, 'LAS BARRANCAS'),
(158, 7, 5571, 'CHIVILCOY'),
(159, 8, 5585, 'MEDRANO'),
(160, 9, 5575, 'LOS ARBOLES'),
(161, 10, 5596, '12 de Octubre'),
(162, 11, 5590, 'VILLA NUEVA'),
(163, 12, 5533, 'EL VERGEL'),
(164, 13, 5561, 'LA ARBOLEDA'),
(165, 14, 5563, 'LOS ARBOLES'),
(166, 15, 5569, 'TRES ESQUINAS'),
(167, 16, 5603, 'GOUDGE'),
(168, 17, 5637, 'CORRAL DE LORCA'),
(169, 18, 5611, 'RANQUIL'),
(170, 2, 5543, 'EL RESGUARDO'),
(171, 3, 5519, 'GRAL.BELGRANO'),
(172, 4, 5501, 'VILLA JOVITA'),
(173, 5, 5507, 'CIUDAD'),
(174, 6, 5517, 'LUNLUNTA'),
(175, 7, 5589, 'DIVISADERO'),
(176, 8, 5579, 'MUNDO NUEVO'),
(177, 9, 5585, 'MEDRANO'),
(178, 12, 5535, 'ING.GUSTAVO ANDRE'),
(179, 13, 5561, 'LA CARRERA'),
(180, 14, 5560, 'LOS CHACAYES'),
(181, 16, 5623, 'JAIME PRATS'),
(182, 17, 5621, 'EL CEIBO'),
(183, 18, 5611, 'BARDAS BLANCAS'),
(184, 2, 5539, 'EL ZAPALLAR'),
(185, 3, 5523, 'JESUS NAZARENO'),
(186, 4, 5501, 'VILLA MARINI'),
(187, 5, 5507, 'MAYOR DRUMMOND'),
(188, 6, 5515, 'CIUDAD'),
(189, 7, 5589, 'EL CENTRAL'),
(190, 8, 5579, 'PHILLIPS'),
(191, 9, 5579, 'MUNDO NUEVO'),
(192, 12, 5533, 'JOCOLI'),
(193, 13, 5561, 'SAN JOSE'),
(194, 14, 5560, 'CIUDAD'),
(195, 16, 5603, 'LA LLAVE'),
(196, 17, 5620, 'EL JUNCALITO'),
(198, 2, 5539, 'LA CIENEGUITA'),
(199, 3, 5527, 'KILOMETRO 8'),
(200, 4, 5501, 'VILLA DEL PARQUE'),
(201, 5, 5507, 'PERDRIEL'),
(202, 6, 5529, 'RODEO DEL MEDIO'),
(203, 7, 5570, 'EL ESPIÑO'),
(204, 8, 5585, 'RODRIGUEZ PEÑA'),
(205, 9, 5579, 'REDUCCION DE ABAJO'),
(206, 12, 5535, 'ASUNCION'),
(207, 13, 5561, 'SANTA CLARA'),
(208, 14, 5563, 'VILLA SECA'),
(209, 16, 5605, 'LAS MALVINAS'),
(210, 17, 5609, 'ESTACION GOICO'),
(211, 18, 5611, 'EL ALAMBRADO'),
(212, 2, 5557, 'LAS CUEVAS'),
(213, 3, 5527, 'KILOMETRO 11'),
(214, 4, 5501, 'TRAPICHE'),
(215, 5, 5549, 'POTRERILLOS'),
(216, 6, 5517, 'RUSSELL'),
(217, 7, 5570, 'MONTECASEROS'),
(218, 8, 5582, 'ING. GIAGNONI'),
(219, 9, 5579, 'REDUCCION DE ARRIBA'),
(220, 12, 5533, 'LA HOLANDA'),
(221, 13, 5561, 'CIUDAD'),
(222, 14, 5565, 'VISTA FLORES'),
(223, 16, 5601, 'LAS PAREDES'),
(224, 17, 5609, 'GASPAR CAMPOS'),
(225, 18, 5611, 'COIHUECO'),
(226, 2, 5539, 'CIUDAD'),
(227, 3, 5527, 'LA PRIMAVERA'),
(228, 5, 5509, 'UGARTECHE'),
(229, 6, 5587, 'SAN ROQUE'),
(230, 7, 5535, 'NUEVA CALIFORNIA'),
(231, 9, 5577, 'CIUDAD'),
(232, 12, 5533, 'LA PEGA'),
(233, 13, 5561, 'VILLA BASTIA'),
(234, 14, 5560, 'COSTA ANZORENA'),
(235, 16, 5609, 'MONTE COMAN'),
(236, 17, 5620, 'CIUDAD'),
(237, 18, 5613, 'PATA MORA'),
(238, 2, 5539, 'PANQUEHUA'),
(239, 3, 5519, 'LAS CAÑAS'),
(240, 1, 0, 'SIN DATOS'),
(241, 2, 0, 'SIN DATOS'),
(242, 3, 0, 'SIN DATOS'),
(243, 4, 0, 'SIN DATOS'),
(244, 5, 0, 'SIN DATOS'),
(245, 6, 0, 'SIN DATOS'),
(246, 7, 0, 'SIN DATOS'),
(247, 8, 0, 'SIN DATOS'),
(248, 9, 0, 'SIN DATOS'),
(249, 10, 0, 'SIN DATOS'),
(250, 11, 0, 'SIN DATOS'),
(251, 12, 0, 'SIN DATOS'),
(252, 13, 0, 'SIN DATOS'),
(253, 14, 0, 'SIN DATOS'),
(254, 15, 0, 'SIN DATOS'),
(255, 16, 0, 'SIN DATOS'),
(256, 17, 0, 'SIN DATOS'),
(257, 18, 0, 'SIN DATOS'),
(306, 2, 5555, 'PUENTE DEL INCA'),
(307, 2, 5551, 'POLVAREDA'),
(308, 2, 5539, 'VILLAVICENCIO'),
(329, 7, 5582, 'INGENIERO GIAGNONI'),
(330, 10, 5582, 'RAMBLON'),
(331, 12, 5533, 'SAN FRANCISCO'),
(332, 12, 5533, 'PARAMILLO'),
(333, 12, 5533, 'LA PALMERA'),
(344, 10, 5594, 'EL MARCADO'),
(345, 0, 0, 'SIN DATOS');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `nivel`
--

CREATE TABLE `nivel` (
  `idNivel` int(11) NOT NULL,
  `descripNivel` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `nivel`
--

INSERT INTO `nivel` (`idNivel`, `descripNivel`) VALUES
(1, 'Facilitador'),
(2, 'Coordinador'),
(5, 'Administrador'),
(6, 'Administrador de Usuarios'),
(7, 'Referente');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `parentesco`
--

CREATE TABLE `parentesco` (
  `id_tparentesco` int(11) NOT NULL,
  `descpare` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `parentesco`
--

INSERT INTO `parentesco` (`id_tparentesco`, `descpare`) VALUES
(1, 'Conyugue'),
(2, 'Hijo/a'),
(3, 'Padre/Madre'),
(4, 'Suegro/a'),
(5, 'Concubino/a'),
(6, 'Nieto/a'),
(7, 'Tenencia Definitiva'),
(8, 'Yerno'),
(9, 'Nuera'),
(10, 'Tenencia Provisoria'),
(11, 'Hermano/a'),
(19, 'Sin Datos'),
(20, 'Ex Conyugue'),
(23, 'Guarda Preadoptiva'),
(24, 'Sobrino/a'),
(27, 'Bisnietos'),
(28, 'Cuñado/a'),
(29, 'Curatela'),
(30, 'Conviviente'),
(31, 'Titular');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pregunta`
--

CREATE TABLE `pregunta` (
  `idPregunta` int(11) NOT NULL,
  `pregunta` text NOT NULL,
  `descripPregunta` text,
  `idSubPregunta` int(11) DEFAULT NULL,
  `idBloque` int(11) NOT NULL,
  `idTipoPregunta` int(11) NOT NULL,
  `idEtiqueta` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `pregunta`
--

INSERT INTO `pregunta` (`idPregunta`, `pregunta`, `descripPregunta`, `idSubPregunta`, `idBloque`, `idTipoPregunta`, `idEtiqueta`) VALUES
(1, 'Facilitador (*)', NULL, NULL, 1, 8, NULL),
(2, 'Número Relevamiento (*)', NULL, NULL, 1, 10, NULL),
(3, 'Fecha Relevamiento (*)', NULL, NULL, 1, 3, NULL),
(4, 'Departamento (*)', NULL, NULL, 1, 8, NULL),
(5, 'Distrito (*)', NULL, NULL, 1, 8, NULL),
(6, 'Calle (*)', NULL, NULL, 1, 6, NULL),
(7, 'Número', NULL, NULL, 1, 11, NULL),
(8, 'Barrio', NULL, NULL, 1, 6, NULL),
(9, 'Manzana (*)', NULL, NULL, 1, 6, NULL),
(10, 'Casa (*)', NULL, NULL, 1, 11, NULL),
(11, 'Entre calles', NULL, NULL, 1, 6, NULL),
(12, 'Teléfono del titular (*)', NULL, NULL, 1, 11, NULL),
(13, 'Teléfono para supervisión(encuestado)', NULL, NULL, 1, 11, NULL),
(14, '¿Cuántas personas viven habitualmente en este domicilio?(*)', NULL, NULL, 1, 11, NULL),
(15, '¿Hay alguna mujer embarazada? (*)', NULL, NULL, 1, 4, NULL),
(16, '¿Que edad tiene/n?', NULL, NULL, 1, 11, NULL),
(17, 'Observaciones ', NULL, 16, 1, 6, NULL),
(18, 'Apellido y nombre del titular (*)', NULL, NULL, 2, 6, NULL),
(19, 'Edad (*)', NULL, NULL, 2, 11, NULL),
(20, 'DNI (*)', NULL, NULL, 2, 11, NULL),
(21, 'Sexo (*)', NULL, NULL, 2, 1, NULL),
(22, 'Vínculo con el titular (*)', NULL, NULL, 2, 2, 1),
(23, 'Número de Afiliado', NULL, NULL, 2, 11, NULL),
(24, '¿Tiene otra cobertura de salud?', NULL, NULL, 2, 2, NULL),
(25, '¿Estudia? (*)', NULL, NULL, 2, 4, NULL),
(26, '¿Cuál es su nivel educativo? (*)', NULL, NULL, 2, 2, 2),
(27, '¿A qué se dedica actualmente? (*)', NULL, NULL, 2, 2, 3),
(28, '¿Contribuye con la economía familiar? (*)', NULL, NULL, 2, 2, 15),
(29, '¿Cuántas horas trabajó la semana pasada? (*)', NULL, NULL, 2, 11, NULL),
(30, '¿En qué lugar trabaja?', NULL, NULL, 2, 6, NULL),
(31, 'Detalle de la tarea realizada', NULL, NULL, 2, 6, NULL),
(32, 'Observaciones', NULL, NULL, 2, 6, NULL),
(33, '¿Padece alguna enfermedad crónica?', NULL, NULL, 2, 4, NULL),
(34, '¿Tiene alguna discapacidad? (*)', NULL, NULL, 2, 4, NULL),
(35, '¿Tiene algún afiliado a cargo que no viva en este domicilio?', NULL, NULL, 2, 4, NULL),
(36, 'Nombre afiliado', NULL, 35, 2, 6, NULL),
(37, 'Teléfono', NULL, 35, 2, 11, NULL),
(38, '¿Recuerda si realizó al menos una consulta médica por OSEP en el último año?', NULL, NULL, 3, 4, NULL),
(39, '¿Dónde concurrió a atenderse la última vez?', NULL, 38, 3, 2, NULL),
(40, '¿Porqué?', NULL, 38, 3, 2, NULL),
(41, '¿El embarazo fue normal o el profesional lo consideró de riesgo?', NULL, NULL, 4, 2, 5),
(42, '¿Nació a término o fue prematuro?', NULL, NULL, 4, 2, 6),
(43, '¿Recuerda cuanto peso al nacer?', NULL, NULL, 4, 11, NULL),
(44, '¿Caminó cerca o alrededor de cumplir el año?', NULL, NULL, 4, 4, NULL),
(45, '¿Lo llevaron al control auditivo que se realiza para detectar problemas de oído en los recién nacidos?', NULL, NULL, 4, 4, NULL),
(46, 'En el último control de salud, ¿el profesional anotó que su pero es normal?', NULL, NULL, 4, 2, 7),
(47, '¿Tiene las vacunas al día?', NULL, NULL, 4, 4, NULL),
(48, '¿Esta recibiendo la leche de OSEP?', NULL, NULL, 4, 4, NULL),
(49, 'En el último año, ¿realizó algún control odontológico?', NULL, NULL, 5, 4, NULL),
(50, '¿Realizó algún control con un oculista para verificar su salud visual?', NULL, NULL, 5, 4, NULL),
(51, 'Durante el año pasado/este año, ¿ha tenido algún tipo de dificultad en la escuela?', NULL, NULL, 5, 4, NULL),
(52, '¿Realiza en forma regular alguna actividad extraescolar, es decir, hace deportes, alguna actividad artística u otra actividad todas las semanas?', NULL, NULL, 5, 2, 8),
(54, '¿Como diría que es su estado general de salud en este momento?', NULL, NULL, 6, 2, 10),
(55, '¿En los últimos 2 años concurrió a realizarse el papanicolau?', NULL, NULL, 6, 4, NULL),
(56, '¿Dónde concurrió?', NULL, 55, 6, 2, NULL),
(57, '¿Por qué?', NULL, 55, 6, 2, NULL),
(58, '¿En los últimos 2 años se ha realizado una mamografía?', NULL, NULL, 6, 4, NULL),
(59, '¿Dónde concurrió?', NULL, 58, 6, 2, NULL),
(60, '¿Por qué?', NULL, 58, 6, 2, NULL),
(61, '¿Necesita usar en forma permanente uno o más de estos elementos ?', NULL, NULL, 7, 1, NULL),
(62, '¿Ha experimentado en el último mes...?', NULL, NULL, 7, 1, NULL),
(63, '¿Necesita o ha tenido que realizar modificaciones e su casa para no caerse o realizar sus tareas cotidianas ?', NULL, NULL, 7, 4, NULL),
(64, 'Normalmente, ¿Necesita ayuda para realizar trámites, como cobrar la jubilación, pedir turno al médico por ejemplo ?', NULL, NULL, 7, 4, NULL),
(65, 'Si tiene una dificultad de salud o una urgencia, ¿cuenta con alguien que lo pueda ayudar a resolverla ?', NULL, NULL, 7, 4, NULL),
(66, '¿Realiza habitualmente algún hobbie o actividad social, por ejemplo leer, hacer cursos o gimnasia, ir a un centro de jubilados o a la iglesia?', NULL, NULL, 7, 4, NULL),
(67, '¿Tiene alguna actividad o hobbie que haga frecuentemente para ocupar el tiempo libre?', NULL, NULL, 7, 4, NULL),
(68, 'Respecto a la atención médica, ¿tiene un médico de cabecera, es decir un profesional que lo conozca y que lo atienda habitualmente?', NULL, NULL, 7, 4, NULL),
(69, '¿Ese médico es de OSEP o recibe OSEP?', NULL, 68, 7, 4, NULL),
(70, '¿Cuál es su Discapacidad?', NULL, NULL, 8, 1, 11),
(71, '¿Realizó el empadronamiento en OSEP, es decir hizo el tramite de registro de su situación en la Obra Social?', NULL, NULL, 8, 4, NULL),
(72, '¿Quién o quienes lo orientan sobre los tratamientos que necesita? Es decir, ¿Qué persona que ud. valore le indica que tratamientos sería bueno realizar por su discapacidad?', NULL, NULL, 8, 1, NULL),
(73, 'De los profesionales de la salud que mencionó, ¿alguno es profesional de cabecera?', NULL, 72, 8, 1, NULL),
(74, '¿Qué le gustaría que OSEP hiciera en el ámbito de la discapacidad que no esté haciendo o esté haciendo mal?', NULL, NULL, 8, 6, NULL),
(75, '¿De cuántos meses esta embarazada?', NULL, NULL, 9, 2, 9),
(76, '¿Concurrió al control el mes pasado?', NULL, NULL, 9, 4, NULL),
(77, '¿Por qué no concurrió?', NULL, 76, 9, 6, NULL),
(78, '¿Qué tan complicado le resultó en esa oportunidad todo el proceso que implicó hacerse el control, desde que consiguió el turno hasta que la atendieron?', NULL, 76, 9, 2, 12),
(79, '¿El embarazo lo esta llevando un profesional en especial o se atiende con distintos profesionales ?', NULL, NULL, 9, 2, NULL),
(80, '¿El o los profesionales que la atienden, han detectado algún problema en el embarazo?', NULL, NULL, 9, 4, NULL),
(81, '¿Cuál?', NULL, 80, 9, 6, NULL),
(82, '¿Cuenta con apoyo familiar, de su pareja o de alguna otra persona que la acompañe y la ayude mientras transcurre el embarazo?', NULL, NULL, 9, 4, NULL),
(83, '¿En los últimos dos años, concurrió a realizarse un papanicolau?', NULL, NULL, 9, 4, NULL),
(84, 'Respecto de los servicios básicos, ¿ésta casa tiene conexión a? Red de energía eléctrica ', NULL, NULL, 10, 4, NULL),
(85, 'Red de gas natural', NULL, NULL, 10, 4, NULL),
(86, 'Red de agua potable', NULL, NULL, 10, 4, NULL),
(87, 'Cloacas', NULL, NULL, 10, 4, NULL),
(88, 'Teléfono fijo', NULL, NULL, 10, 4, NULL),
(89, 'Internet', NULL, NULL, 10, 4, NULL),
(90, '¿La vivienda es propia?', NULL, NULL, 10, 4, NULL),
(91, '¿En el barrio/zona donde vive, hay presencia de?Basurales a cielo abierto', NULL, NULL, 10, 4, NULL),
(92, 'Fábricas contaminantes', NULL, NULL, 10, 4, NULL),
(93, 'Animales abandonados', NULL, NULL, 10, 4, NULL),
(94, 'Lugares de cría de animales', NULL, NULL, 10, 4, NULL),
(95, 'Desagüe de cloacas, aguas servidas', NULL, NULL, 10, 4, NULL),
(96, 'Insectos y roedores', NULL, NULL, 10, 4, NULL),
(97, 'Agroquímicos', NULL, NULL, 10, 4, NULL),
(98, 'Canales de riego, piletas u otro lugar donde haya agua que traiga problemas', NULL, NULL, 10, 4, NULL),
(99, 'Calles muy transitadas u autopistas', NULL, NULL, 10, 4, NULL),
(100, 'Calles de tierra', NULL, NULL, 10, 4, NULL),
(101, 'Nivel de vivienda', NULL, NULL, 10, 2, 13),
(102, 'Materiales predominantes de paredes', NULL, NULL, 10, 2, NULL),
(103, 'Materiales predominantes de techos', NULL, NULL, 10, 2, NULL),
(104, 'Ventilación', NULL, NULL, 10, 2, NULL),
(105, 'Accesibilidad', NULL, NULL, 10, 2, NULL),
(106, 'Observaciones generales', NULL, NULL, 10, 6, NULL),
(107, '¿Está embarazada?(*)', NULL, NULL, 2, 4, NULL),
(108, '¿Tiene OSEP?(*)', NULL, NULL, 2, 4, NULL),
(109, 'Número de Afiliado', NULL, 108, 2, 11, NULL),
(110, 'Concretamente, ¿cuál es la actividad que realizaba usted antes de jubilarse o la persona que originó la pensión?', NULL, NULL, 2, 6, NULL),
(111, '¿Por qué no la recibe?', NULL, 48, 4, 6, NULL),
(112, '¿Cuál fue el problema?', NULL, 51, 5, 6, NULL),
(113, '¿Dónde?', NULL, 52, 5, 2, NULL),
(114, '¿Cuál?', NULL, 40, 3, 6, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `relevamiento`
--

CREATE TABLE `relevamiento` (
  `idRelevamiento` int(11) NOT NULL,
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
  `adherentes` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `relevamiento`
--

INSERT INTO `relevamiento` (`idRelevamiento`, `nroRelevamiento`, `fechaRelevamiento`, `observCriticidad`, `idCriticidad`, `idEncuesta`, `idVisita`, `idDireccion`, `idEmpleado`, `cantEncuestados`, `observacion`, `telTitular`, `telSup`, `estado`, `adherentes`) VALUES
(1, 1, '2017-08-03', '', 1, 1, NULL, 1, 16, 'a:3:{s:8:"cantidad";s:1:"2";s:8:"embarazo";s:1:"0";s:6:"edades";a:1:{i:0;s:2:"23";}}', 'obs de la primera instancia', '4321403', '4321403', 0, ''),
(2, 2, '2017-09-20', '', 1, 1, 0, 2, 16, 'a:3:{s:8:"cantidad";s:1:"4";s:8:"embarazo";s:1:"1";s:6:"edades";i:0;}', '444444444', '34233243', '34233243', 0, ''),
(3, 3, '2017-08-30', '', 2, 1, 0, 3, 16, 'a:3:{s:8:"cantidad";s:1:"3";s:8:"embarazo";s:1:"1";s:6:"edades";i:0;}', '222222222222222222222222222222', '33232323', '33232323', 0, ''),
(4, 1, '2017-08-30', '', 0, 1, 0, 4, 17, 'a:3:{s:8:"cantidad";s:1:"3";s:8:"embarazo";s:1:"1";s:6:"edades";i:0;}', '222222222222222222222222222222', '33232323', '33232323', 1, ''),
(5, 1, '2017-08-30', '', 1, 1, NULL, 5, 62, 'a:3:{s:8:"cantidad";s:1:"2";s:8:"embarazo";s:1:"1";s:6:"edades";i:0;}', '33333', '4434343', '4434343', 1, ''),
(6, 4, '2017-08-30', '', 3, 1, 0, 6, 16, 'a:3:{s:8:"cantidad";s:1:"2";s:8:"embarazo";s:1:"1";s:6:"edades";i:0;}', '33333333333333333333333333 obs', '244343434', '244343434', 0, ''),
(7, 5, '2017-09-18', '', 0, 1, 0, 7, 16, 'a:3:{s:8:"cantidad";s:1:"3";s:8:"embarazo";s:1:"1";s:6:"edades";i:0;}', 'aaaaaaaaaaaaaaaaaaa', '432403', '432403', 1, '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `respuesta`
--

CREATE TABLE `respuesta` (
  `idRespuesta` int(11) NOT NULL,
  `respuesta` varchar(145) NOT NULL,
  `descripRespuesta` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `respuesta`
--

INSERT INTO `respuesta` (`idRespuesta`, `respuesta`, `descripRespuesta`) VALUES
(1, 'Si', NULL),
(2, 'No', NULL),
(3, 'Masculino', NULL),
(4, 'Femenino', NULL),
(5, 'Titular', NULL),
(6, 'Cónyuge o Pareja Conviviente', NULL),
(7, 'Hijo/a', NULL),
(8, 'Padre o Madre', NULL),
(9, 'Suegro/a', NULL),
(10, 'Yerno o Nuera', NULL),
(11, 'Nieto/a', NULL),
(12, 'Otro Familiar', NULL),
(13, 'Otro No Familiar', NULL),
(14, 'No, sólo OSEP', NULL),
(15, 'Otra Obra Social', NULL),
(16, 'Prepaga', NULL),
(17, 'Otra Cobertura', NULL),
(18, 'Inicial', NULL),
(19, 'Primario Incompleto', NULL),
(20, 'Primario Completo', NULL),
(21, 'Secundario Incompleto', NULL),
(22, 'Secundario Completo', NULL),
(23, 'Terciario Incompleto', NULL),
(24, 'Terciario Completo', NULL),
(25, 'Universitario Incompleto', NULL),
(26, 'Universitario Completo', NULL),
(27, 'Trabajador Remunerado', NULL),
(28, 'Jubilado o Pensionado', NULL),
(29, 'Trabajador Remunerado y Estudiante', NULL),
(30, 'Principal Sostén', NULL),
(31, 'Aportante', NULL),
(32, 'No Contribuye', NULL),
(33, 'Sin Datos', NULL),
(34, 'Fue a un efector de OSEP', NULL),
(35, 'Fue a un prestador privado', NULL),
(36, 'Fue a un hospital o centro de salud público', NULL),
(37, 'No se enfermó ni tuvo un accidente', NULL),
(38, 'Quiso consultar pero no tuvo dinero', NULL),
(39, 'Quiso consultar pero le cuesta llegar al lugar de atención', NULL),
(40, 'Pidió turno pero no lo obtuvo', NULL),
(41, 'Consultó pero NO por OSEP', NULL),
(42, 'Otro motivo', NULL),
(43, 'Normal', NULL),
(44, 'De Riesgo', NULL),
(45, 'A Término', NULL),
(46, 'Prematuro', NULL),
(47, 'Bajo Peso', NULL),
(48, 'Normal', NULL),
(49, 'Sobrepeso', NULL),
(50, 'No asiste todavía', NULL),
(51, 'Deportiva', NULL),
(52, 'Artística', NULL),
(53, 'Educativa', NULL),
(54, 'Comunitaria', NULL),
(55, 'Religiosa', NULL),
(56, 'Otra', NULL),
(57, 'No realiza', NULL),
(58, 'Muy Bueno', NULL),
(59, 'Bueno', NULL),
(60, 'Regular', NULL),
(61, 'Malo', NULL),
(62, 'No sabe/No contesta', NULL),
(63, 'En hospital o centro propio de OSEP', NULL),
(64, 'En consultorio, clínica o sanatorio donde reciben OSEP', NULL),
(65, 'En hospital público, centro de salud o sala', NULL),
(66, 'En consultorio, clínica o sanatorio donde NO reciben OSEP', NULL),
(67, 'Otro', NULL),
(68, 'No tuvo tiempo', NULL),
(69, 'No tuvo dinero', NULL),
(70, 'No consiguió turno o lugar donde lo atiendan', NULL),
(71, 'No sabe donde hacérselo', NULL),
(72, 'Le da miedo, disgusto o vergüenza', NULL),
(73, 'Se olvidó', NULL),
(74, 'Por dejadez', NULL),
(75, 'No lo necesita, está sana(percepción personal)', NULL),
(76, 'No conoce el examen o no sabia que tenía que hacérselo', NULL),
(77, 'El médico no se lo indicó', NULL),
(78, 'Por edad avanzada', NULL),
(79, 'No le corresponde(histerectomía o alguna otra contraindicación médica)', NULL),
(80, 'En el mamógrafo de OSEP', NULL),
(81, 'Silla de ruedas', NULL),
(82, 'Bastón', NULL),
(83, 'Andador', NULL),
(84, 'Audífono', NULL),
(85, 'Caídas', NULL),
(86, 'Olvídos o confusiones recurrentes', NULL),
(87, 'Motora', NULL),
(88, 'Visual', NULL),
(89, 'Auditiva', NULL),
(90, 'Mental o Cognitiva', NULL),
(91, 'Visceral', NULL),
(92, 'No sabía que había que hacerlo', NULL),
(93, 'Médico General o Pediatra', NULL),
(94, 'Médico Especialista', NULL),
(95, 'Psicólogo - Psiquiatra', NULL),
(96, 'Médico Fisiátra', NULL),
(97, 'Otro Profesional de la Salud', NULL),
(98, 'Docente', NULL),
(99, 'Integrante de la Red de Madres', NULL),
(100, 'Integrante de otra Organización Civil o de Ayuda', NULL),
(101, 'Otra persona que tiene una discapacidad, o un familiar con una discapacidad que no está en ninguna organización', NULL),
(102, '1 Mes', NULL),
(103, '2 Meses', NULL),
(104, '3 Meses', NULL),
(105, '4 Meses', NULL),
(106, '5 Meses', NULL),
(107, '6 Meses', NULL),
(108, '7 Meses', NULL),
(109, '8 Meses', NULL),
(110, '9 Meses', NULL),
(111, 'Simple ', NULL),
(112, 'Complejo ', NULL),
(113, 'Un profesional', NULL),
(114, 'Distintos profesionales en un mismo lugar de atención ', NULL),
(115, 'Distintos lugares de atención', NULL),
(116, 'AB', NULL),
(117, 'C1', NULL),
(118, 'C2', NULL),
(119, 'C3', NULL),
(120, 'D1', NULL),
(121, 'D2', NULL),
(122, 'E', NULL),
(123, 'Material de Construcción', NULL),
(124, 'Madera', NULL),
(125, 'Adobe', NULL),
(126, 'Chapa de metal, Cartón', NULL),
(127, 'Membrana, Teja, Losa, Baldosa', NULL),
(128, 'Madera, Caña, Paja', NULL),
(129, 'Suficiente', NULL),
(130, 'Escasa', NULL),
(131, 'Sin ventilación', NULL),
(132, 'Compleja', NULL),
(133, 'Estudia exclusivamente', NULL),
(134, 'Trabajo doméstico no remunerado exclusivamente', NULL),
(135, 'Busca trabajo', NULL),
(136, 'No trabaja', NULL),
(137, 'Otra', NULL),
(138, 'No (Salud Pública)', NULL),
(139, 'Obra social', NULL),
(140, 'Club', NULL),
(141, 'Instituto', NULL),
(142, 'CIC', NULL),
(143, 'Biblioteca', NULL),
(144, 'Unión Vecinal', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `respuesta_elegida`
--

CREATE TABLE `respuesta_elegida` (
  `idRespuestaElegida` int(11) NOT NULL,
  `respBreve` text,
  `idRelevamiento` int(11) NOT NULL,
  `idEncuestado` int(11) DEFAULT NULL,
  `idPregunta` int(11) NOT NULL,
  `idRespuesta` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `respuesta_elegida`
--

INSERT INTO `respuesta_elegida` (`idRespuestaElegida`, `respBreve`, `idRelevamiento`, `idEncuestado`, `idPregunta`, `idRespuesta`) VALUES
(1, NULL, 1, 1, 22, 5),
(2, NULL, 1, 1, 24, 14),
(3, NULL, 1, 1, 25, 2),
(4, NULL, 1, 1, 26, 21),
(5, NULL, 1, 1, 27, 27),
(6, NULL, 1, 1, 28, 31),
(7, NULL, 1, 1, 29, 22),
(8, '33', 1, 1, 30, 0),
(9, 'Observaciones de tarea realizada', 1, 1, 31, 0),
(10, 'Observaciones', 1, 1, 32, 0),
(11, NULL, 1, 1, 107, 1),
(12, NULL, 1, 1, 33, 2),
(13, NULL, 1, 1, 34, 2),
(14, NULL, 1, 1, 35, 2),
(15, NULL, 1, 1, 75, 107),
(16, NULL, 1, 1, 76, 1),
(17, NULL, 1, 1, 78, 111),
(18, NULL, 1, 1, 79, 113),
(19, NULL, 1, 1, 80, 2),
(20, NULL, 1, 1, 82, 1),
(21, NULL, 1, 1, 83, 1),
(22, NULL, 1, 2, 108, 1),
(23, NULL, 1, 2, 24, 14),
(24, NULL, 1, 2, 25, 2),
(25, NULL, 1, 2, 26, 24),
(26, NULL, 1, 2, 27, 137),
(27, NULL, 1, 2, 33, 1),
(28, NULL, 1, 2, 34, 2),
(29, NULL, 1, 2, 38, 33),
(30, NULL, 1, NULL, 84, 1),
(31, NULL, 1, NULL, 85, 1),
(32, NULL, 1, NULL, 86, 1),
(33, NULL, 1, NULL, 87, 1),
(34, NULL, 1, NULL, 88, 1),
(35, NULL, 1, NULL, 89, 1),
(36, NULL, 1, NULL, 90, 1),
(37, NULL, 1, NULL, 91, 2),
(38, NULL, 1, NULL, 92, 2),
(39, NULL, 1, NULL, 93, 2),
(40, NULL, 1, NULL, 94, 2),
(41, NULL, 1, NULL, 95, 2),
(42, NULL, 1, NULL, 96, 2),
(43, NULL, 1, NULL, 97, 2),
(44, NULL, 1, NULL, 98, 2),
(45, NULL, 1, NULL, 99, 1),
(46, NULL, 1, NULL, 100, 1),
(47, NULL, 1, NULL, 101, 118),
(48, NULL, 1, NULL, 102, 123),
(49, NULL, 1, NULL, 103, 127),
(50, NULL, 1, NULL, 105, 130),
(51, NULL, 1, NULL, 105, 111),
(52, 'generalesgeneralesgeneralesgeneralesgeneralesgeneralesgeneralesgeneralesgeneralesgeneralesgeneralesgenerales', 1, NULL, 106, 0),
(53, NULL, 2, 3, 22, 5),
(54, NULL, 2, 3, 24, 14),
(55, NULL, 2, 3, 25, 2),
(56, NULL, 2, 3, 26, 22),
(57, NULL, 2, 3, 27, 27),
(58, NULL, 2, 3, 28, 30),
(59, NULL, 2, 3, 29, 44),
(60, '555', 2, 3, 30, 0),
(61, '666', 2, 3, 31, 0),
(62, '77777', 2, 3, 32, 0),
(63, NULL, 2, 3, 33, 2),
(64, NULL, 2, 3, 34, 2),
(65, NULL, 2, 3, 35, 2),
(66, NULL, 2, 3, 38, 2),
(67, NULL, 2, 3, 40, 38),
(68, NULL, 2, 3, 54, 58),
(69, NULL, 2, 3, 55, 62),
(70, NULL, 2, 3, 58, 62),
(71, NULL, 2, 4, 108, 1),
(72, NULL, 2, 4, 24, 14),
(73, NULL, 2, 4, 25, 1),
(74, NULL, 2, 4, 26, 18),
(75, NULL, 2, 4, 33, 2),
(76, NULL, 2, 4, 34, 2),
(77, NULL, 2, 4, 49, 1),
(78, NULL, 2, 4, 50, 1),
(79, NULL, 2, 4, 51, 2),
(80, NULL, 2, 4, 52, 57),
(81, NULL, 2, 4, 38, 1),
(82, NULL, 2, 4, 39, 34),
(83, NULL, 2, 5, 108, 2),
(84, NULL, 2, 5, 26, 24),
(85, NULL, 2, 5, 27, 28),
(86, NULL, 2, 5, 28, 31),
(87, 'empleado de agua y energia', 2, 5, 110, 0),
(88, 'ninguna observacion', 2, 5, 32, 0),
(89, NULL, 2, 5, 33, 2),
(90, NULL, 2, 5, 34, 2),
(91, NULL, 2, 6, 108, 2),
(92, NULL, 2, 6, 26, 19),
(93, NULL, 2, 6, 27, 134),
(94, NULL, 2, 6, 33, 1),
(95, NULL, 2, 6, 34, 2),
(96, NULL, 2, NULL, 84, 1),
(97, NULL, 2, NULL, 85, 1),
(98, NULL, 2, NULL, 86, 1),
(99, NULL, 2, NULL, 87, 1),
(100, NULL, 2, NULL, 88, 1),
(101, NULL, 2, NULL, 89, 1),
(102, NULL, 2, NULL, 90, 1),
(103, NULL, 2, NULL, 91, 2),
(104, NULL, 2, NULL, 92, 2),
(105, NULL, 2, NULL, 93, 2),
(106, NULL, 2, NULL, 94, 2),
(107, NULL, 2, NULL, 95, 2),
(108, NULL, 2, NULL, 96, 2),
(109, NULL, 2, NULL, 97, 2),
(110, NULL, 2, NULL, 98, 2),
(111, NULL, 2, NULL, 99, 1),
(112, NULL, 2, NULL, 100, 1),
(113, NULL, 2, NULL, 101, 116),
(114, NULL, 2, NULL, 102, 123),
(115, NULL, 2, NULL, 103, 127),
(116, NULL, 2, NULL, 105, 129),
(117, NULL, 2, NULL, 105, 111),
(118, 'observaciones generales', 2, NULL, 106, 0),
(119, NULL, 3, 7, 22, 5),
(120, NULL, 3, 7, 24, 14),
(121, NULL, 3, 7, 25, 2),
(122, NULL, 3, 7, 26, 22),
(123, NULL, 3, 7, 27, 27),
(124, NULL, 3, 7, 28, 30),
(125, NULL, 3, 7, 29, 33),
(126, '44', 3, 7, 30, 0),
(127, '55', 3, 7, 31, 0),
(128, '66', 3, 7, 32, 0),
(129, NULL, 3, 7, 33, 2),
(130, NULL, 3, 7, 34, 2),
(131, NULL, 3, 7, 35, 2),
(132, NULL, 3, 7, 38, 1),
(133, NULL, 3, 7, 39, 34),
(134, NULL, 3, 7, 54, 58),
(135, NULL, 3, 7, 55, 2),
(136, NULL, 3, 7, 57, 74),
(137, NULL, 3, 8, 108, 1),
(138, NULL, 3, 8, 0, 0),
(139, NULL, 3, 8, 24, 14),
(140, NULL, 3, 8, 25, 2),
(141, NULL, 3, 8, 26, 21),
(142, NULL, 3, 8, 27, 29),
(143, NULL, 3, 8, 28, 30),
(144, NULL, 3, 8, 29, 33),
(145, '33', 3, 8, 30, 0),
(146, '3', 3, 8, 31, 0),
(147, '33', 3, 8, 32, 0),
(148, NULL, 3, 8, 33, 2),
(149, NULL, 3, 8, 34, 2),
(150, NULL, 3, 8, 38, 33),
(151, NULL, 3, 9, 108, 1),
(152, NULL, 3, 9, 0, 0),
(153, NULL, 3, 9, 24, 14),
(154, NULL, 3, 9, 25, 1),
(155, NULL, 3, 9, 26, 20),
(156, NULL, 3, 9, 27, 28),
(157, NULL, 3, 9, 28, 30),
(158, 'r', 3, 9, 110, 0),
(159, 'rr', 3, 9, 32, 0),
(160, NULL, 3, 9, 33, 2),
(161, NULL, 3, 9, 34, 2),
(162, NULL, 3, 9, 63, 2),
(163, NULL, 3, 9, 64, 2),
(164, NULL, 3, 9, 65, 2),
(165, NULL, 3, 9, 66, 2),
(166, NULL, 3, 9, 67, 2),
(167, NULL, 3, 9, 68, 1),
(168, NULL, 3, 9, 69, 2),
(169, NULL, 3, 9, 38, 33),
(170, NULL, 3, NULL, 84, 1),
(171, NULL, 3, NULL, 85, 1),
(172, NULL, 3, NULL, 86, 1),
(173, NULL, 3, NULL, 87, 1),
(174, NULL, 3, NULL, 88, 1),
(175, NULL, 3, NULL, 89, 1),
(176, NULL, 3, NULL, 90, 1),
(177, NULL, 3, NULL, 91, 2),
(178, NULL, 3, NULL, 92, 2),
(179, NULL, 3, NULL, 93, 2),
(180, NULL, 3, NULL, 94, 2),
(181, NULL, 3, NULL, 95, 2),
(182, NULL, 3, NULL, 96, 2),
(183, NULL, 3, NULL, 97, 2),
(184, NULL, 3, NULL, 98, 2),
(185, NULL, 3, NULL, 99, 1),
(186, NULL, 3, NULL, 100, 1),
(187, NULL, 3, NULL, 101, 116),
(188, NULL, 3, NULL, 102, 124),
(189, NULL, 3, NULL, 103, 127),
(190, NULL, 3, NULL, 105, 129),
(191, NULL, 3, NULL, 105, 132),
(192, '', 3, NULL, 106, 0),
(193, NULL, 6, 10, 22, 5),
(194, NULL, 6, 10, 24, 14),
(195, NULL, 6, 10, 25, 2),
(196, NULL, 6, 10, 26, 22),
(197, NULL, 6, 10, 27, 28),
(198, NULL, 6, 10, 28, 31),
(199, 'enfermera', 6, 10, 110, 0),
(200, 'assssssssssss', 6, 10, 32, 0),
(201, NULL, 6, 10, 33, 2),
(202, NULL, 6, 10, 34, 1),
(203, NULL, 6, 10, 35, 2),
(204, NULL, 6, 10, 54, 59),
(205, NULL, 6, 10, 58, 1),
(206, NULL, 6, 10, 59, 64),
(207, NULL, 6, 10, 70, 88),
(208, NULL, 6, 10, 71, 2),
(209, NULL, 6, 10, 72, 97),
(210, NULL, 6, 10, 73, 95),
(211, '', 6, 10, 74, 0),
(212, NULL, 6, 10, 38, 33),
(213, NULL, 6, 11, 108, 2),
(214, NULL, 6, 11, 26, 24),
(215, NULL, 6, 11, 27, 27),
(216, NULL, 6, 11, 28, 32),
(217, NULL, 6, 11, 29, 3),
(218, '44', 6, 11, 30, 0),
(219, '4', 6, 11, 31, 0),
(220, '', 6, 11, 32, 0),
(221, NULL, 6, 11, 33, 2),
(222, NULL, 6, 11, 34, 2),
(223, NULL, 6, NULL, 84, 1),
(224, NULL, 6, NULL, 85, 1),
(225, NULL, 6, NULL, 86, 1),
(226, NULL, 6, NULL, 87, 1),
(227, NULL, 6, NULL, 88, 1),
(228, NULL, 6, NULL, 89, 1),
(229, NULL, 6, NULL, 90, 1),
(230, NULL, 6, NULL, 91, 2),
(231, NULL, 6, NULL, 92, 2),
(232, NULL, 6, NULL, 93, 2),
(233, NULL, 6, NULL, 94, 2),
(234, NULL, 6, NULL, 95, 2),
(235, NULL, 6, NULL, 96, 2),
(236, NULL, 6, NULL, 97, 2),
(237, NULL, 6, NULL, 98, 2),
(238, NULL, 6, NULL, 99, 1),
(239, NULL, 6, NULL, 100, 1),
(240, NULL, 6, NULL, 101, 121),
(241, NULL, 6, NULL, 102, 125),
(242, NULL, 6, NULL, 103, 128),
(243, NULL, 6, NULL, 105, 130),
(244, NULL, 6, NULL, 105, 132),
(245, '33333333wwwwwwwwwwwweddddddddddd3333333333333', 6, NULL, 106, 0),
(246, NULL, 7, 12, 22, 5),
(247, NULL, 7, 12, 24, 14),
(248, NULL, 7, 12, 25, 2),
(249, NULL, 7, 12, 26, 21),
(250, NULL, 7, 12, 27, 27),
(251, NULL, 7, 12, 28, 30),
(252, NULL, 7, 12, 29, 55),
(253, '5', 7, 12, 30, 0),
(254, '45', 7, 12, 31, 0),
(255, '543', 7, 12, 32, 0),
(256, NULL, 7, 12, 33, 2),
(257, NULL, 7, 12, 34, 2),
(258, NULL, 7, 12, 35, 2),
(259, NULL, 7, 12, 38, 33),
(260, NULL, 7, 13, 22, 8),
(261, NULL, 7, 13, 0, 0),
(262, NULL, 7, 13, 0, 0),
(263, NULL, 7, 13, 24, 14),
(264, NULL, 7, 13, 25, 2),
(265, NULL, 7, 13, 26, 21),
(266, NULL, 7, 13, 27, 28),
(267, NULL, 7, 13, 28, 31),
(268, '343', 7, 13, 110, 0),
(269, '434', 7, 13, 32, 0),
(270, NULL, 7, 13, 33, 2),
(271, NULL, 7, 13, 34, 1),
(272, NULL, 7, 13, 54, 61),
(273, NULL, 7, 13, 58, 2),
(274, NULL, 7, 13, 57, 72),
(275, NULL, 7, 13, 63, 2),
(276, NULL, 7, 13, 64, 1),
(277, NULL, 7, 13, 65, 1),
(278, NULL, 7, 13, 66, 2),
(279, NULL, 7, 13, 67, 1),
(280, NULL, 7, 13, 68, 1),
(281, NULL, 7, 13, 69, 2),
(282, NULL, 7, 13, 38, 33),
(283, NULL, 7, 13, 70, 87),
(284, NULL, 7, 13, 71, 2),
(285, NULL, 7, 13, 72, 98),
(286, '', 7, 13, 74, 0),
(287, NULL, 7, 13, 38, 33);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `respuesta_pregunta`
--

CREATE TABLE `respuesta_pregunta` (
  `idRespPreg` int(11) NOT NULL,
  `idPregunta` int(11) NOT NULL,
  `idRespuesta` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `respuesta_pregunta`
--

INSERT INTO `respuesta_pregunta` (`idRespPreg`, `idPregunta`, `idRespuesta`) VALUES
(1, 15, 1),
(2, 15, 2),
(3, 21, 3),
(4, 21, 4),
(5, 22, 5),
(6, 22, 6),
(7, 22, 7),
(8, 22, 8),
(9, 22, 9),
(10, 22, 10),
(11, 22, 11),
(12, 22, 12),
(13, 22, 13),
(14, 24, 14),
(15, 24, 15),
(16, 24, 16),
(17, 24, 17),
(18, 25, 1),
(19, 25, 2),
(20, 26, 18),
(21, 26, 19),
(22, 26, 20),
(23, 26, 21),
(24, 26, 22),
(25, 26, 23),
(26, 26, 24),
(27, 26, 25),
(28, 26, 26),
(29, 27, 27),
(30, 27, 28),
(31, 27, 29),
(32, 28, 30),
(33, 28, 31),
(34, 28, 32),
(35, 33, 1),
(36, 33, 2),
(37, 34, 1),
(38, 34, 2),
(39, 35, 1),
(40, 35, 2),
(41, 38, 1),
(42, 38, 2),
(43, 38, 33),
(44, 39, 34),
(45, 39, 35),
(46, 39, 36),
(47, 40, 37),
(48, 40, 38),
(49, 40, 39),
(50, 40, 40),
(51, 40, 41),
(52, 40, 42),
(53, 41, 43),
(54, 41, 44),
(55, 42, 45),
(56, 42, 46),
(57, 44, 1),
(58, 44, 2),
(59, 45, 1),
(60, 45, 2),
(61, 46, 47),
(62, 46, 48),
(63, 46, 49),
(64, 47, 1),
(65, 47, 2),
(66, 48, 1),
(67, 48, 2),
(68, 49, 1),
(69, 49, 2),
(70, 50, 1),
(71, 50, 2),
(72, 51, 1),
(73, 51, 2),
(74, 51, 50),
(75, 52, 51),
(76, 52, 52),
(77, 52, 53),
(78, 52, 54),
(79, 52, 55),
(80, 52, 56),
(81, 52, 57),
(85, 54, 58),
(86, 54, 59),
(87, 54, 60),
(88, 54, 61),
(89, 54, 33),
(90, 55, 1),
(91, 55, 2),
(92, 55, 62),
(93, 56, 63),
(94, 56, 64),
(95, 56, 65),
(96, 56, 66),
(97, 56, 67),
(98, 57, 68),
(99, 57, 69),
(100, 57, 70),
(101, 57, 71),
(102, 57, 72),
(103, 57, 73),
(104, 57, 74),
(105, 57, 75),
(106, 57, 76),
(107, 57, 77),
(108, 57, 78),
(109, 57, 79),
(110, 57, 62),
(111, 58, 1),
(112, 58, 2),
(113, 58, 62),
(114, 59, 80),
(115, 59, 64),
(116, 59, 65),
(117, 59, 66),
(118, 59, 67),
(119, 60, 68),
(120, 60, 69),
(121, 60, 70),
(122, 60, 71),
(123, 60, 72),
(124, 60, 73),
(125, 60, 74),
(126, 60, 75),
(127, 60, 76),
(128, 60, 77),
(129, 60, 78),
(130, 60, 79),
(131, 60, 62),
(132, 61, 81),
(133, 61, 82),
(134, 61, 83),
(135, 61, 84),
(136, 62, 85),
(137, 62, 86),
(138, 63, 1),
(139, 63, 2),
(140, 64, 1),
(141, 64, 2),
(142, 65, 1),
(143, 65, 2),
(144, 66, 1),
(145, 66, 2),
(146, 67, 1),
(147, 67, 2),
(148, 68, 1),
(149, 68, 2),
(150, 69, 1),
(151, 69, 2),
(152, 70, 87),
(153, 70, 88),
(154, 70, 89),
(155, 70, 90),
(156, 70, 91),
(157, 71, 1),
(158, 71, 2),
(159, 71, 92),
(160, 72, 93),
(161, 72, 94),
(162, 72, 95),
(163, 72, 96),
(164, 72, 97),
(165, 72, 98),
(166, 72, 99),
(167, 72, 100),
(168, 72, 101),
(169, 72, 67),
(170, 73, 93),
(171, 73, 94),
(172, 73, 95),
(173, 73, 96),
(174, 73, 97),
(175, 75, 102),
(176, 75, 103),
(177, 75, 104),
(178, 75, 105),
(179, 75, 106),
(180, 75, 107),
(181, 75, 108),
(182, 75, 109),
(183, 76, 1),
(184, 76, 2),
(185, 78, 111),
(186, 78, 112),
(187, 79, 113),
(188, 79, 114),
(189, 79, 115),
(190, 80, 1),
(191, 80, 2),
(192, 82, 1),
(193, 82, 2),
(194, 83, 1),
(195, 83, 2),
(196, 83, 62),
(197, 84, 1),
(198, 84, 2),
(199, 85, 1),
(200, 85, 2),
(201, 86, 1),
(202, 86, 2),
(203, 87, 1),
(204, 87, 2),
(205, 88, 1),
(206, 88, 2),
(207, 89, 1),
(208, 89, 2),
(209, 90, 1),
(210, 90, 2),
(211, 91, 1),
(212, 91, 2),
(213, 92, 1),
(214, 92, 2),
(215, 93, 1),
(216, 93, 2),
(217, 94, 1),
(218, 94, 2),
(219, 95, 1),
(220, 95, 2),
(221, 96, 1),
(222, 96, 2),
(223, 97, 1),
(224, 97, 2),
(225, 98, 1),
(226, 98, 2),
(227, 99, 1),
(228, 99, 2),
(229, 100, 1),
(230, 100, 2),
(231, 101, 116),
(232, 101, 117),
(233, 101, 118),
(234, 101, 119),
(235, 101, 120),
(236, 101, 121),
(237, 101, 122),
(238, 102, 123),
(239, 102, 124),
(240, 102, 125),
(241, 102, 126),
(242, 103, 127),
(243, 103, 128),
(244, 103, 126),
(245, 104, 129),
(246, 104, 130),
(247, 104, 131),
(248, 105, 111),
(249, 105, 132),
(250, 107, 1),
(251, 107, 2),
(252, 108, 1),
(253, 108, 2),
(254, 0, 0),
(255, 0, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_bloque`
--

CREATE TABLE `tipo_bloque` (
  `idTipoBloque` int(11) NOT NULL,
  `nombreTipoB` varchar(45) NOT NULL,
  `descripTipoB` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tipo_bloque`
--

INSERT INTO `tipo_bloque` (`idTipoBloque`, `nombreTipoB`, `descripTipoB`) VALUES
(1, 'General', ''),
(2, 'Personal', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_doc`
--

CREATE TABLE `tipo_doc` (
  `id_ttipodoc` int(11) NOT NULL,
  `desctdoc` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tipo_doc`
--

INSERT INTO `tipo_doc` (`id_ttipodoc`, `desctdoc`) VALUES
(1, 'Libreta Enrolamiento'),
(2, 'Libreta Civica'),
(3, 'Documento Nacional de Identidad'),
(4, 'Cedula de Identidad'),
(5, 'Cedula de Extranjeria'),
(6, 'Otros'),
(7, 'Pasaporte'),
(8, 'Medalla RN');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_empleado`
--

CREATE TABLE `tipo_empleado` (
  `idTipoEmpleado` int(11) NOT NULL,
  `nombreTipoE` varchar(45) NOT NULL,
  `descripTipoE` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tipo_empleado`
--

INSERT INTO `tipo_empleado` (`idTipoEmpleado`, `nombreTipoE`, `descripTipoE`) VALUES
(1, 'Administrador de Usuarios', ''),
(2, 'Coordinador', ''),
(4, 'Referente', ''),
(5, 'Facilitador', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_pregunta`
--

CREATE TABLE `tipo_pregunta` (
  `idTipoPregunta` int(11) NOT NULL,
  `nombreTipoP` varchar(45) NOT NULL,
  `descripcionTipoP` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tipo_pregunta`
--

INSERT INTO `tipo_pregunta` (`idTipoPregunta`, `nombreTipoP`, `descripcionTipoP`) VALUES
(1, 'Multiple Opción Cargable', 'Cargar posibles respuestas por el creador de la encuesta para mostrar con checkboxs.'),
(2, 'Opción Única Desplegable Cargable', 'Cargar las posibles respuestas por el creador de la encuesta para mostrar en un combo seleccionable donde solo una opción puede ser elegida.'),
(3, 'Fecha', 'Fecha de una accion a realizar'),
(4, 'Si/No', 'Respuesta por Si o No No sabe/No contesta.'),
(5, 'Escala Lineal', 'Marcador de rango de valores'),
(6, 'Respuesta Breve', 'Respuesta que se debe escribir en un campo determinado.'),
(7, 'Multiple Opción de BD', 'Asignar posibles respuestas en base a registros guardados en una tabla de la Base de Datos.'),
(8, 'Opción Única Desplegable de BD', 'Asignar las posibles respuestas en base a registros guardados en una tabla de la Base de Datos para mostrar en un combo seleccionable donde solo una opción puede ser elegida.'),
(9, 'Hora', 'Hora de una acción a realizar.'),
(10, 'AutoIncremental', 'Campo traido desde la Base de Datos generado en base al ultimo registro cargado +1.'),
(11, 'Numérico', 'Respuesta de valor tipo numerico.');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `idUsuario` int(11) NOT NULL,
  `contrasenia` varchar(100) NOT NULL,
  `usuario` varchar(45) NOT NULL,
  `idNivel` int(11) NOT NULL,
  `idEmpleado` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`idUsuario`, `contrasenia`, `usuario`, `idNivel`, `idEmpleado`) VALUES
(3, '81dc9bdb52d04dc20036dbd8313ed055', 'aldana', 6, 2),
(4, '81dc9bdb52d04dc20036dbd8313ed055', 'aldana', 6, 2),
(5, '81dc9bdb52d04dc20036dbd8313ed055', 'prueba', 6, 4),
(6, 'c893bad68927b457dbed39460e6afd62', 'osep', 6, 3),
(7, 'c893bad68927b457dbed39460e6afd62', 'jimena', 1, 22),
(8, 'c893bad68927b457dbed39460e6afd62', 'adriana', 1, 4);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `visita`
--

CREATE TABLE `visita` (
  `idVisita` int(11) NOT NULL,
  `nroAfiliado` int(45) NOT NULL,
  `nombreAfiliado` varchar(45) NOT NULL,
  `apellidoAfiliado` varchar(45) NOT NULL,
  `telefono` int(11) NOT NULL,
  `fechaHoy` date NOT NULL,
  `fechaVisita` date NOT NULL,
  `horaVisita` time NOT NULL,
  `cantLlamadas` int(11) NOT NULL,
  `idDireccion` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `zona_referente`
--

CREATE TABLE `zona_referente` (
  `idZonaReferente` int(11) NOT NULL,
  `idEmpleado` int(11) NOT NULL,
  `id_tdeparta` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `zona_referente`
--

INSERT INTO `zona_referente` (`idZonaReferente`, `idEmpleado`, `id_tdeparta`) VALUES
(1, 56, 12),
(2, 17, 16),
(3, 54, 11),
(4, 28, 17),
(5, 65, 7),
(6, 65, 8),
(7, 65, 9),
(8, 5, 13),
(9, 43, 14),
(10, 43, 15),
(11, 34, 2),
(12, 34, 3),
(13, 34, 4),
(14, 34, 5);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `bloque`
--
ALTER TABLE `bloque`
  ADD PRIMARY KEY (`idBloque`),
  ADD KEY `idEncuesta` (`idEncuesta`),
  ADD KEY `idTipoBloque` (`idTipoBloque`);

--
-- Indices de la tabla `criticidad`
--
ALTER TABLE `criticidad`
  ADD PRIMARY KEY (`idCriticidad`);

--
-- Indices de la tabla `departamento`
--
ALTER TABLE `departamento`
  ADD PRIMARY KEY (`id_tdeparta`);

--
-- Indices de la tabla `direccion`
--
ALTER TABLE `direccion`
  ADD PRIMARY KEY (`idDireccion`),
  ADD KEY `id_tlocalidad` (`id_tlocalidad`);

--
-- Indices de la tabla `empleado`
--
ALTER TABLE `empleado`
  ADD PRIMARY KEY (`idEmpleado`),
  ADD KEY `idTipoEmpleado` (`idTipoEmpleado`),
  ADD KEY `idTipoEmpleado_2` (`idTipoEmpleado`),
  ADD KEY `idReferente` (`idReferente`);

--
-- Indices de la tabla `encuesta`
--
ALTER TABLE `encuesta`
  ADD KEY `idEncuesta` (`idEncuesta`);

--
-- Indices de la tabla `encuestado`
--
ALTER TABLE `encuestado`
  ADD UNIQUE KEY `idEncuestado_2` (`idEncuestado`),
  ADD KEY `idEncuestado` (`idEncuestado`);

--
-- Indices de la tabla `estado_encuesta`
--
ALTER TABLE `estado_encuesta`
  ADD UNIQUE KEY `idEstadoEncuesta_2` (`idEstadoEncuesta`),
  ADD KEY `idEstadoEncuesta` (`idEstadoEncuesta`);

--
-- Indices de la tabla `etiqueta`
--
ALTER TABLE `etiqueta`
  ADD UNIQUE KEY `idEtiqueta_2` (`idEtiqueta`),
  ADD KEY `idEtiqueta` (`idEtiqueta`);

--
-- Indices de la tabla `localidad`
--
ALTER TABLE `localidad`
  ADD UNIQUE KEY `id_tlocalidad_2` (`id_tlocalidad`),
  ADD KEY `id_tlocalidad` (`id_tlocalidad`);

--
-- Indices de la tabla `nivel`
--
ALTER TABLE `nivel`
  ADD PRIMARY KEY (`idNivel`);

--
-- Indices de la tabla `parentesco`
--
ALTER TABLE `parentesco`
  ADD UNIQUE KEY `id_tparentesco_2` (`id_tparentesco`),
  ADD KEY `id_tparentesco` (`id_tparentesco`);

--
-- Indices de la tabla `pregunta`
--
ALTER TABLE `pregunta`
  ADD PRIMARY KEY (`idPregunta`),
  ADD KEY `idSubPregunta` (`idSubPregunta`),
  ADD KEY `idBloque` (`idBloque`),
  ADD KEY `idTipoPregunta` (`idTipoPregunta`),
  ADD KEY `idEtiqueta` (`idEtiqueta`),
  ADD KEY `idSubPregunta_2` (`idSubPregunta`);

--
-- Indices de la tabla `relevamiento`
--
ALTER TABLE `relevamiento`
  ADD UNIQUE KEY `idRelevamiento_2` (`idRelevamiento`),
  ADD KEY `idRelevamiento` (`idRelevamiento`);

--
-- Indices de la tabla `respuesta`
--
ALTER TABLE `respuesta`
  ADD UNIQUE KEY `idRespuesta_2` (`idRespuesta`),
  ADD KEY `idRespuesta` (`idRespuesta`);

--
-- Indices de la tabla `respuesta_elegida`
--
ALTER TABLE `respuesta_elegida`
  ADD UNIQUE KEY `idRespuestaElegida_2` (`idRespuestaElegida`),
  ADD KEY `idRespuestaElegida` (`idRespuestaElegida`);

--
-- Indices de la tabla `respuesta_pregunta`
--
ALTER TABLE `respuesta_pregunta`
  ADD UNIQUE KEY `idRespPreg_2` (`idRespPreg`),
  ADD KEY `idRespPreg` (`idRespPreg`);

--
-- Indices de la tabla `tipo_bloque`
--
ALTER TABLE `tipo_bloque`
  ADD UNIQUE KEY `idTipoBloque_2` (`idTipoBloque`),
  ADD KEY `idTipoBloque` (`idTipoBloque`);

--
-- Indices de la tabla `tipo_doc`
--
ALTER TABLE `tipo_doc`
  ADD UNIQUE KEY `id_ttipodoc_2` (`id_ttipodoc`),
  ADD KEY `id_ttipodoc` (`id_ttipodoc`);

--
-- Indices de la tabla `tipo_empleado`
--
ALTER TABLE `tipo_empleado`
  ADD PRIMARY KEY (`idTipoEmpleado`);

--
-- Indices de la tabla `tipo_pregunta`
--
ALTER TABLE `tipo_pregunta`
  ADD UNIQUE KEY `idTipoPregunta_2` (`idTipoPregunta`),
  ADD KEY `idTipoPregunta` (`idTipoPregunta`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD UNIQUE KEY `idUsuario_2` (`idUsuario`),
  ADD KEY `idUsuario` (`idUsuario`);

--
-- Indices de la tabla `visita`
--
ALTER TABLE `visita`
  ADD KEY `idVisita` (`idVisita`);

--
-- Indices de la tabla `zona_referente`
--
ALTER TABLE `zona_referente`
  ADD PRIMARY KEY (`idZonaReferente`),
  ADD KEY `id_tdeparta` (`id_tdeparta`),
  ADD KEY `idEmpleado` (`idEmpleado`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `bloque`
--
ALTER TABLE `bloque`
  MODIFY `idBloque` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT de la tabla `departamento`
--
ALTER TABLE `departamento`
  MODIFY `id_tdeparta` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT de la tabla `direccion`
--
ALTER TABLE `direccion`
  MODIFY `idDireccion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT de la tabla `empleado`
--
ALTER TABLE `empleado`
  MODIFY `idEmpleado` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=68;
--
-- AUTO_INCREMENT de la tabla `encuesta`
--
ALTER TABLE `encuesta`
  MODIFY `idEncuesta` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `encuestado`
--
ALTER TABLE `encuestado`
  MODIFY `idEncuestado` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT de la tabla `estado_encuesta`
--
ALTER TABLE `estado_encuesta`
  MODIFY `idEstadoEncuesta` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `etiqueta`
--
ALTER TABLE `etiqueta`
  MODIFY `idEtiqueta` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT de la tabla `localidad`
--
ALTER TABLE `localidad`
  MODIFY `id_tlocalidad` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=346;
--
-- AUTO_INCREMENT de la tabla `nivel`
--
ALTER TABLE `nivel`
  MODIFY `idNivel` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT de la tabla `parentesco`
--
ALTER TABLE `parentesco`
  MODIFY `id_tparentesco` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
--
-- AUTO_INCREMENT de la tabla `pregunta`
--
ALTER TABLE `pregunta`
  MODIFY `idPregunta` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=115;
--
-- AUTO_INCREMENT de la tabla `relevamiento`
--
ALTER TABLE `relevamiento`
  MODIFY `idRelevamiento` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT de la tabla `respuesta`
--
ALTER TABLE `respuesta`
  MODIFY `idRespuesta` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=145;
--
-- AUTO_INCREMENT de la tabla `respuesta_elegida`
--
ALTER TABLE `respuesta_elegida`
  MODIFY `idRespuestaElegida` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=288;
--
-- AUTO_INCREMENT de la tabla `respuesta_pregunta`
--
ALTER TABLE `respuesta_pregunta`
  MODIFY `idRespPreg` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=256;
--
-- AUTO_INCREMENT de la tabla `tipo_bloque`
--
ALTER TABLE `tipo_bloque`
  MODIFY `idTipoBloque` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `tipo_doc`
--
ALTER TABLE `tipo_doc`
  MODIFY `id_ttipodoc` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT de la tabla `tipo_empleado`
--
ALTER TABLE `tipo_empleado`
  MODIFY `idTipoEmpleado` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT de la tabla `tipo_pregunta`
--
ALTER TABLE `tipo_pregunta`
  MODIFY `idTipoPregunta` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `idUsuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT de la tabla `visita`
--
ALTER TABLE `visita`
  MODIFY `idVisita` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `zona_referente`
--
ALTER TABLE `zona_referente`
  MODIFY `idZonaReferente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
