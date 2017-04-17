-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 11-04-2017 a las 16:20:58
-- Versión del servidor: 10.1.13-MariaDB
-- Versión de PHP: 5.6.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `osep_db`
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
(2, 1, 'Composición y Salud Familiar', 'Boque de Familiar', 1, 2),
(3, 2, 'Utilizacion de Servicios de Salud', 'Bloque para Afiliados', 1, 1),
(4, 3, 'Salud de los Niños', 'Bloque Niños Menores de 2 años(0 a 1 año 11 meses y 29 días)', 1, 2),
(5, 3, 'Salud de los Niños', 'Bloque Niños Mayores de 2 años y Menores de 14(2 a 14 año 11 meses y 29 días)', 1, 2),
(6, 4, 'Salud de las Mujeres', 'Bloque Mujeres Mayores de 16 años', 1, 2),
(7, 5, 'Adultos Mayores', 'Bloque Mayores de 65 años', 1, 2),
(8, 6, 'Familias que tienen miembros con discapacidad Afiliados a OSEP', 'Bloque para Discapacitados', 1, 2),
(9, 7, 'Embarazadas', 'Bloque para integrantes de la familia embarazadas.\r\n', 1, 2),
(10, 8, 'Vivienda y Habitat', 'Bloque características generales de la Vivienda.', 1, 1),
(11, 10, 'Bloque para Todas las Familias', 'Bloque General datos Ocupacionales y de Vivienda', 1, 1);

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
(1, 'Normal', ''),
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
(5, 'Lujan de Cuyo'),
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
(1, 'Libertad', 0, 231, 0, 'Cochabamba', 'Cerrito', '', 'La casa es interna', '', 0),
(2, 'Libertad', 0, 231, 0, 'Cochabamba', 'Cerrito', '', 'La casa es interna', '', 0),
(3, 'Los sauces', 2, 321, 4, 'Patricios', 'San Martin', '', 'Casa Verde', 'E', 0),
(4, 'Azcuenaga', 34, 231, 4, 'Bustamante', 'Entre Rios', '2do 13 de Diciembre', 'Timbre de arriba', 'E', 2),
(5, 'Carolo', 0, 657, 8, 'Cerrito', 'Panama', 'Los Fresnos', 'Probandooo', '', 2);

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
  `tipoEmpleado` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `empleado`
--

INSERT INTO `empleado` (`idEmpleado`, `nombreE`, `apellidoE`, `nroLegajo`, `convenio`, `dni`, `telefono`, `direccion`, `email`, `tipoEmpleado`) VALUES
(2, 'Pepito', 'Hongo', 23123, 'Contratado', 32121212, 4897645, 'Los Reyunos 444', 'pepehongo@hotmail.com', 'Facilitador'),
(3, 'Carla', 'Sosa', 32131, 'Planta Permanente', 65743522, 4782948, 'Los Toldos 333', 'carlita@hotmail.com', 'Administrador Base de Datos'),
(4, 'Empleado', 'Probando', 213123, 'Planta Permanente', 33421231, 4231231, 'La direccion 222', 'probandoempleado@hotmail.com', 'Directivo'),
(6, 'Carlos', 'Gonzalez', 23142, 'Planta Permanente', 23879437, 4964572, 'San Martin 432', 'gonzalezcarlos@hotmail.com', 'Facilitador'),
(7, 'Sebastian', 'Santa Maria', 21341, 'Planta Permanente', 32890673, 4789032, 'Los Alamos 432', 'sebas@hotmail.com', 'Facilitador'),
(8, 'Marcelo', 'Contreras', 12894, 'Contratado', 29806389, 4567823, 'Anchorena 284', 'marceloc@hotmail.com', 'Administrador'),
(9, 'Matias', 'Morales', 26783, 'Planta Permanente', 36902749, 4237519, 'Carrodilla 32', 'matiasm@hotmail.com', 'Auditor'),
(10, 'Alejandro', 'Vazquez ', 19853, 'Contratado', 20784156, 4378921, 'Bustamente 907', 'alejandrov@gmail.com', 'Administrador Base de Datos'),
(11, 'Diego', 'Villa', 14523, 'Planta Permanente', 28199530, 4093782, 'Cerrito 23', 'diegov@gmail.com', 'Directivo'),
(12, 'Pablo', 'Martinez', 29902, 'Contratado', 31874240, 4782510, 'Tiburcio Benegas 12', 'pablom@hotmail.com', 'Auditor'),
(13, 'Aldana', 'Baeza', 27902, 'Contratado', 32085237, 4983256, 'Azcuenaga 188', 'aldanatb@hotmail.com', 'Administrador');

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

--
-- Volcado de datos para la tabla `encuesta`
--

INSERT INTO `encuesta` (`idEncuesta`, `nombreEncuesta`, `fechaEncuesta`, `idEstadoEncuesta`, `idEmpleado`) VALUES
(1, 'Abordaje Poblacional', '2017-03-15', 1, 11);

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
  `idAfiliado` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
(9, 'Lugar de la Actividad Extraescolar', ''),
(10, 'Estado de Salud', ''),
(11, 'Validez', 'Cuanto se vale la persona por si misma'),
(12, 'Accesibilidad a un Médico', 'Nivel de dificultad para acceder a un médico'),
(13, 'Tipo de Discapacidad', ''),
(14, 'Nivel de Vivienda', ''),
(15, 'Movilidad', ''),
(16, 'Enfermedad Crónica', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `localidad`
--

CREATE TABLE `localidad` (
  `id_tlocalidad` int(11) NOT NULL,
  `descloc` varchar(45) NOT NULL,
  `cploc` int(11) NOT NULL,
  `id_tdeparta` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `localidad`
--

INSERT INTO `localidad` (`id_tlocalidad`, `descloc`, `cploc`, `id_tdeparta`) VALUES
(1, 'VISTALBA', 5509, 5),
(2, 'LUZURIAGA', 5513, 6),
(3, 'PALMIRA', 5584, 7),
(4, 'SANTA MARIA DE ORO', 5579, 9),
(5, 'LAGUNA DEL ROSARIO', 5535, 12),
(6, 'ZAMPALITO', 5561, 13),
(7, 'LOS SAUCES', 5563, 14),
(8, 'PUNTA DE AGUA', 5539, 16),
(9, 'KILOMETRO 884', 5634, 17),
(10, 'EL CORTADERAL', 5613, 18),
(11, 'USPALLATA', 5545, 2),
(12, 'LOS CORRALITOS', 5527, 3),
(13, 'LOS BARRIALES', 0, 5),
(14, 'TRES ESQUINAS', 5569, 6),
(15, 'RAMBLON', 5582, 7),
(16, 'ING, GIAGNONI', 5582, 9),
(17, 'TULUMAYA (CIUDAD)', 5533, 12),
(18, 'ZAPATA', 5560, 13),
(19, 'RAMA CAIDA', 5603, 16),
(20, 'LA CALIFORNIA', 5621, 17),
(21, 'AGUA BOTADA', 5613, 18),
(22, 'PEDRO MOLINA', 5519, 3),
(23, 'VILLA SECA', 5517, 6),
(24, 'CIUDAD', 5570, 7),
(25, 'LAS VIOLETAS', 5533, 12),
(26, 'REAL DEL PADRE', 5624, 16),
(27, 'LA ESCANDINAVA', 5634, 17),
(28, 'EL MANZANO', 5611, 18),
(29, 'RODEO DE LA CRUZ', 5525, 3),
(30, 'TRES PORTEÑAS', 5589, 7),
(31, 'SAN JOSE', 5533, 12),
(32, 'CIUDAD', 5600, 16),
(33, 'LA MARZOLINA', 5632, 17),
(34, 'LAS JUNTAS', 5613, 18),
(35, 'SAN FCO.DEL MONTE', 5503, 3),
(36, 'SAN MIGUEL', 5537, 12),
(37, '25 DE MAYO', 5615, 16),
(38, 'LA MORA', 5632, 17),
(39, 'SAN JOSE', 5519, 3),
(40, 'TRES DE MAYO', 5533, 12),
(41, 'VILLA ATUEL', 5622, 16),
(42, 'LOS CAMPAMENTOS', 5634, 17),
(43, 'VILLA NUEVA', 5521, 3),
(44, 'EL SOSNEADO', 5611, 16),
(45, 'LOS COMPARTOS', 5621, 17),
(46, 'NUEVA CIUDAD', 5519, 3),
(47, 'TOLEDANO', 5600, 16),
(48, 'LOS HUARPES', 5636, 17),
(49, 'SALTO DE LAS ROSAS', 5603, 16),
(50, 'MEDIA LUNA', 6279, 17),
(51, 'EL MOLINO', 5594, 16),
(52, 'OVEJERIA', 5637, 17),
(53, 'ISLA DIAMANTE', 5600, 16),
(54, 'PAMPA DEL TIGRE', 5637, 17),
(55, 'CAPITAN MONTOYA', 5601, 16),
(56, 'POSTE DE HIERRO', 5621, 17),
(57, 'RINCON DEL ATUEL', 5603, 16),
(58, 'POZO HONDO', 5620, 17),
(59, 'ATUEL NORTE', 5605, 16),
(60, 'SAN PEDRO DEL ATUEL', 5621, 17),
(61, 'EL DESVIO', 5621, 17),
(62, 'PRIMERA SECCION', 5500, 1),
(63, 'CAPDEVILA', 5539, 2),
(64, 'BERMEJO', 5533, 3),
(65, 'GDOR.BENEGAS', 5501, 4),
(66, 'AGRELO', 5509, 5),
(67, 'COQUIMBITO', 5513, 6),
(68, 'ALTO SALVADOR', 5571, 7),
(69, 'ALGARROBO GRANDE', 5582, 8),
(70, 'ANDRADES', 5575, 9),
(71, 'LA DORMIDA', 5592, 10),
(72, 'DESAGUADERO', 5598, 11),
(73, 'COLONIA ESTRELLA', 5533, 12),
(74, 'ANCHORIS', 5509, 13),
(75, 'CAMPO DE LOS ANDES', 5565, 14),
(76, 'EUGENIO BUSTOS', 5569, 15),
(77, 'CAÑADA SECA', 5603, 16),
(78, 'BOWEN', 5634, 17),
(79, 'RIO BARRANCAS', 5613, 18),
(80, 'SEGUNDA SECCION', 5500, 1),
(81, 'EL ALGARROBAL', 5541, 2),
(82, 'BUENA NUEVA', 5523, 3),
(83, 'CIUDAD', 5501, 4),
(84, 'CARRODILLA', 5505, 5),
(85, 'CRUZ DE PIEDRA', 5517, 6),
(86, 'ALTO VERDE', 5582, 7),
(87, 'ALTO VERDE', 5582, 8),
(88, 'CAMPAMENTOS', 5577, 9),
(89, 'LAS CATITAS', 5594, 10),
(90, 'CIUDAD', 5590, 11),
(91, 'COSTA DE ARAUJO', 5535, 12),
(92, 'CORDON DEL PLATA', 5561, 13),
(93, 'COLONIA LAS ROSAS', 5565, 14),
(94, 'CHILECITO', 5569, 15),
(95, 'CUADRO BENEGAS', 5603, 16),
(96, 'CANALEJAS', 5636, 17),
(97, 'AGUA ESCONDIDA', 5621, 18),
(98, 'TERCERA SECCION', 5500, 1),
(99, 'EL BORBOLLON', 5541, 2),
(100, 'CAPILLA DEL ROSARIO', 5523, 3),
(101, 'LAS TORTUGAS', 5501, 4),
(102, 'CHACRAS DE CORIA', 5505, 5),
(103, 'FRAY LUIS BELTRAN', 5531, 6),
(104, 'BUEN ORDEN', 5570, 7),
(105, 'CIUDAD', 5573, 8),
(106, 'EL MIRADOR', 5579, 9),
(107, 'CIUDAD', 5596, 10),
(108, 'LAS CHACRITAS', 5590, 11),
(109, 'EL CARMEN', 5535, 12),
(110, 'EL PERAL', 5561, 13),
(111, 'EL TOTORAL', 5539, 14),
(112, 'LA CONSULTA', 5567, 15),
(113, 'CUADRO NACIONAL', 5607, 16),
(114, 'CARMENSA', 5621, 17),
(115, 'CIUDAD', 5613, 18),
(116, 'CUARTA SECCION', 5500, 1),
(117, 'EL CHALLAO', 5539, 2),
(118, 'CNIA.SEGOVIA', 5525, 3),
(119, 'PRESIDENTE SARMIENTO', 5501, 4),
(120, 'EL CARRIZAL', 5509, 5),
(121, 'GRAL.GUTIERREZ', 5511, 6),
(122, 'CHAPANAY', 5589, 7),
(123, 'LA COLONIA', 5572, 8),
(124, 'LA CENTRAL', 5579, 9),
(125, 'LA COSTA', 5596, 10),
(126, 'VILLA ANTIGUA', 5590, 11),
(127, 'EL CHILCAL', 5533, 12),
(128, 'EL ZAMPAL', 5561, 13),
(129, 'LA PRIMAVERA', 5565, 14),
(130, 'PAREDITAS', 5569, 15),
(131, 'EL CERRITO', 5600, 16),
(132, 'COCHICO', 5621, 17),
(133, 'RIO GRANDE', 5613, 18),
(134, 'QUINTA SECCION', 5500, 1),
(135, 'EL PASTAL', 5541, 2),
(136, 'DORREGO', 5519, 3),
(137, 'SAN FCO.DEL MONTE', 5501, 4),
(138, 'LA PUNTILLA', 5505, 5),
(139, 'GRAL.ORTEGA', 5517, 6),
(140, 'LA CHIMBA', 5589, 7),
(141, 'LOS BARRIALES', 5585, 8),
(142, 'LA LIBERTAD', 5579, 9),
(143, 'VILLA CABECERA', 5596, 10),
(144, 'LA MENTA', 5590, 11),
(145, 'EL PLUMERO', 5533, 12),
(146, 'GUALTALLARY', 5561, 13),
(147, 'LAS PINTADAS', 5560, 14),
(148, 'CIUDAD', 5569, 15),
(149, 'EL NIHUIL', 5605, 16),
(150, 'CNIA.ALVEAR OESTE', 5632, 17),
(151, 'LAS LOICAS', 5613, 18),
(152, 'SEXTA SECCION', 5500, 1),
(153, 'EL PLUMERILLO', 5541, 2),
(154, 'EL SAUCE', 5533, 3),
(155, 'VILLA HIPODROMO', 5547, 4),
(156, 'LAS COMPUERTAS', 5549, 5),
(157, 'LAS BARRANCAS', 5517, 6),
(158, 'CHIVILCOY', 5571, 7),
(159, 'MEDRANO', 5585, 8),
(160, 'LOS ARBOLES', 5575, 9),
(161, '12 de Octubre', 5596, 10),
(162, 'VILLA NUEVA', 5590, 11),
(163, 'EL VERGEL', 5533, 12),
(164, 'LA ARBOLEDA', 5561, 13),
(165, 'LOS ARBOLES', 5563, 14),
(166, 'TRES ESQUINAS', 5569, 15),
(167, 'GOUDGE', 5603, 16),
(168, 'CORRAL DE LORCA', 5637, 17),
(169, 'RANQUIL', 5611, 18),
(170, 'EL RESGUARDO', 5543, 2),
(171, 'GRAL.BELGRANO', 5519, 3),
(172, 'VILLA JOVITA', 5501, 4),
(173, 'CIUDAD', 5507, 5),
(174, 'LUNLUNTA', 5517, 6),
(175, 'DIVISADERO', 5589, 7),
(176, 'MUNDO NUEVO', 5579, 8),
(177, 'MEDRANO', 5585, 9),
(178, 'ING.GUSTAVO ANDRE', 5535, 12),
(179, 'LA CARRERA', 5561, 13),
(180, 'LOS CHACAYES', 5560, 14),
(181, 'JAIME PRATS', 5623, 16),
(182, 'EL CEIBO', 5621, 17),
(183, 'BARDAS BLANCAS', 5611, 18),
(184, 'EL ZAPALLAR', 5539, 2),
(185, 'JESUS NAZARENO', 5523, 3),
(186, 'VILLA MARINI', 5501, 4),
(187, 'MAYOR DRUMMOND', 5507, 5),
(188, 'CIUDAD', 5515, 6),
(189, 'EL CENTRAL', 5589, 7),
(190, 'PHILLIPS', 5579, 8),
(191, 'MUNDO NUEVO', 5579, 9),
(192, 'JOCOLI', 5533, 12),
(193, 'SAN JOSE', 5561, 13),
(194, 'CIUDAD', 5560, 14),
(195, 'LA LLAVE', 5603, 16),
(196, 'EL JUNCALITO', 5620, 17),
(198, 'LA CIENEGUITA', 5539, 2),
(199, 'KILOMETRO 8', 5527, 3),
(200, 'VILLA DEL PARQUE', 5501, 4),
(201, 'PERDRIEL', 5507, 5),
(202, 'RODEO DEL MEDIO', 5529, 6),
(203, 'EL ESPIÑO', 5570, 7),
(204, 'RODRIGUEZ PEÑA', 5585, 8),
(205, 'REDUCCION DE ABAJO', 5579, 9),
(206, 'ASUNCION', 5535, 12),
(207, 'SANTA CLARA', 5561, 13),
(208, 'VILLA SECA', 5563, 14),
(209, 'LAS MALVINAS', 5605, 16),
(210, 'ESTACION GOICO', 5609, 17),
(211, 'EL ALAMBRADO', 5611, 18),
(212, 'LAS CUEVAS', 5557, 2),
(213, 'KILOMETRO 11', 5527, 3),
(214, 'TRAPICHE', 5501, 4),
(215, 'POTRERILLOS', 5549, 5),
(216, 'RUSSELL', 5517, 6),
(217, 'MONTECASEROS', 5570, 7),
(218, 'ING. GIAGNONI', 5582, 8),
(219, 'REDUCCION DE ARRIBA', 5579, 9),
(220, 'LA HOLANDA', 5533, 12),
(221, 'CIUDAD', 5561, 13),
(222, 'VISTA FLORES', 5565, 14),
(223, 'LAS PAREDES', 5601, 16),
(224, 'GASPAR CAMPOS', 5609, 17),
(225, 'COIHUECO', 5611, 18),
(226, 'CIUDAD', 5539, 2),
(227, 'LA PRIMAVERA', 5527, 3),
(228, 'UGARTECHE', 5509, 5),
(229, 'SAN ROQUE', 5587, 6),
(230, 'NUEVA CALIFORNIA', 5535, 7),
(231, 'CIUDAD', 5577, 9),
(232, 'LA PEGA', 5533, 12),
(233, 'VILLA BASTIA', 5561, 13),
(234, 'COSTA ANZORENA', 5560, 14),
(235, 'MONTE COMAN', 5609, 16),
(236, 'CIUDAD', 5620, 17),
(237, 'PATA MORA', 5613, 18),
(238, 'PANQUEHUA', 5539, 2),
(239, 'LAS CAÑAS', 5519, 3),
(240, 'SIN DATOS', 0, 1),
(241, 'SIN DATOS', 0, 2),
(242, 'SIN DATOS', 0, 3),
(243, 'SIN DATOS', 0, 4),
(244, 'SIN DATOS', 0, 5),
(245, 'SIN DATOS', 0, 6),
(246, 'SIN DATOS', 0, 7),
(247, 'SIN DATOS', 0, 8),
(248, 'SIN DATOS', 0, 9),
(249, 'SIN DATOS', 0, 10),
(250, 'SIN DATOS', 0, 11),
(251, 'SIN DATOS', 0, 12),
(252, 'SIN DATOS', 0, 13),
(253, 'SIN DATOS', 0, 14),
(254, 'SIN DATOS', 0, 15),
(255, 'SIN DATOS', 0, 16),
(256, 'SIN DATOS', 0, 17),
(257, 'SIN DATOS', 0, 18),
(267, 'SIN DATOS', 0, 0),
(306, 'PUENTE DEL INCA', 5555, 2),
(307, 'POLVAREDA', 5551, 2),
(308, 'VILLAVICENCIO', 5539, 2),
(329, 'INGENIERO GIAGNONI', 5582, 7),
(330, 'RAMBLON', 5582, 10),
(331, 'SAN FRANCISCO', 5533, 12),
(332, 'PARAMILLO', 5533, 12),
(333, 'LA PALMERA', 5533, 12),
(344, 'EL MARCADO', 5594, 10);

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
(2, 'Facilitador'),
(3, 'Auditor'),
(4, 'Directivo'),
(5, 'Administrador'),
(6, 'Administrador Base de Datos'),
(7, 'Creador Encuesta');

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
(1, 'Nombre y apellido del facilitador', NULL, NULL, 1, 8, NULL),
(2, 'Fecha de realización de la entrevista', NULL, NULL, 1, 3, NULL),
(3, 'Departamento', NULL, NULL, 1, 8, NULL),
(4, 'Distrito', NULL, NULL, 1, 8, NULL),
(5, 'Barrio', NULL, NULL, 1, 6, NULL),
(6, '¿Que relación de parentesco tiene con el titular?', NULL, NULL, 2, 2, 1),
(7, 'Edad', NULL, NULL, 2, 6, NULL),
(8, 'Sexo', NULL, NULL, 2, 2, NULL),
(9, '¿Esta estudiando en este momento?', NULL, NULL, 2, 2, NULL),
(10, '¿A qué nivel educativo llegó hasta ahora?', NULL, NULL, 2, 2, 2),
(11, '¿Cual es su ocupación, a qué se dedica principalmente?\r\n', NULL, NULL, 2, 2, 3),
(12, '¿Tiene otra cobertura?', NULL, 94, 2, 2, 4),
(13, 'En los últimos 6 meses, ¿utilizaron algún servicio de la obra social?', NULL, NULL, 3, 4, NULL),
(14, 'Si utilizo un servicio de OSEP', NULL, 12, 3, 1, NULL),
(15, 'Si no utilizo un servicio de OSEP', NULL, 12, 3, 1, NULL),
(16, '¿El embarazo fue normal o el profesional lo considero de riesgo?', NULL, NULL, 4, 2, 5),
(17, '¿El niño/a nació en termino o fue prematuro?', NULL, NULL, 4, 2, 6),
(18, '¿Recuerda cuanto peso al nacer el niño/a? Anotar el peso al nacer en gramos', NULL, NULL, 4, 6, NULL),
(19, '(Si es mayor de un año)¿Camino cerca (o al rededor de cumplir el 1er año de vida?', NULL, NULL, 4, 4, NULL),
(20, '¿Lo llevaron al control auditivo que se realiza para detectar problemas de oído en los recién nacidos?', NULL, NULL, 4, 4, NULL),
(21, '¿Realizo algún control de salud en los últimos 3 meses?', NULL, NULL, 4, 4, NULL),
(22, 'En el ultimo control de salud, ¿el profesional anotó que su peso es?', NULL, NULL, 4, 2, 7),
(23, '¿Tiene las vacunas al día?', NULL, NULL, 4, 4, NULL),
(24, '¿Esta recibiendo la leche de OSEP?', NULL, NULL, 4, 4, NULL),
(25, '¿Porque no la recibe?', NULL, 24, 4, 6, NULL),
(26, 'En el ultimo año, ¿ha realizado algún control con un oculista?', NULL, NULL, 5, 4, NULL),
(27, 'En el ultimo año, ¿ha realizado algún control con un odontologo?', NULL, NULL, 5, 4, NULL),
(28, '¿El niño/a esta escolarizado?', NULL, NULL, 5, 4, NULL),
(29, 'Si el niño esta escolarizado. Durante el año pasado/este año, ¿ha tenido algún tipo de dificultad en la escuela?', NULL, 28, 5, 6, NULL),
(30, '¿Realiza en forma regular alguna actividad(extraescolar) es decir, hace deportes, alguna actividad artística u otra actividad todas las semanas?', NULL, NULL, 5, 4, NULL),
(31, 'Si realiza, ¿qué actividad realiza?', NULL, 30, 5, 2, 8),
(32, 'Si realiza, ¿donde realiza la actividad?', NULL, 30, 5, 2, 9),
(33, 'Para empezar, ¿como diría qué es su estado general de salud en este momento?', NULL, NULL, 6, 2, 10),
(34, '¿En los últimos 2 años, concurrió a realizarse un Papanicolaou?', NULL, NULL, 6, 4, NULL),
(35, 'Si se realizó el Papanicolaou', NULL, 34, 6, 1, NULL),
(36, 'Si NO se realizó el Papanicolaou', NULL, 34, 6, 1, NULL),
(37, 'Solo si es Mayor de 40. En los últimos 2 años, ¿se ha realizado una mamografía?', NULL, NULL, 6, 4, NULL),
(38, 'Si se realizó mamografía', NULL, 37, 6, 1, NULL),
(39, 'Si NO se realizo mamografía', NULL, 37, 6, 1, NULL),
(40, '¿Cual condición actual de validez?', NULL, NULL, 7, 2, 11),
(41, '¿Necesita usar en forma permanente silla de ruedas, bastón, andador o algún otro instrumento para caminar?', NULL, NULL, 7, 4, NULL),
(42, '¿Usa audífono o tiene dificultad permanente para escuchar conversaciones o la televisión a un volumen normal?', NULL, NULL, 7, 4, NULL),
(43, '¿Ha sufrido alguna caída en el ultimo mes?', NULL, NULL, 7, 4, NULL),
(44, '¿Necesita o ha tenido que realizar modificaciones en su casa para no caerse o poder realizar sus tareas diarias?', NULL, NULL, 7, 4, NULL),
(45, '¿Experimenta en forma permanente problemas de olvidos o confusiones?', NULL, NULL, 7, 4, NULL),
(46, 'Normalmente, ¿necesita ayuda para realizar trámites, como cobrar la jubilación, pedir turno para el médico, autorizar una orden o pagar servicios, por ejemplo?', NULL, NULL, 7, 4, NULL),
(47, 'Si tiene una dificultad de salud o cualquier urgencia, ¿cuenta seguro con alguien que lo/a pueda ayudar a resolverla?', NULL, NULL, 7, 4, NULL),
(48, '¿Concurre habitualmente a algún centro de jubilados, iglesia, club u otro ámbito de tipo social?', NULL, NULL, 7, 4, NULL),
(49, 'Si realiza alguna actividad, ¿que actividad realiza?', NULL, 48, 7, 6, NULL),
(50, '¿Tiene algún hobbie o actividad que haga frecuentemente para ocupar el tiempo libre, por ejemplo leer, hacer cursos o una actividad física o manual?', NULL, NULL, 7, 4, NULL),
(51, 'Respecto de la atención médica, ¿tiene un médico de cabecera, es decir, un profesional que lo conozca como persona y lo atienda habitualmente?', NULL, NULL, 7, 4, NULL),
(52, 'Si tiene médico de cabecera, ¿ese médico es de OSEP o le recibe OSEP?', NULL, 51, 7, 4, NULL),
(53, '¿Que tan complicado le resulta ver a un profesional cuando tiene que atenderse por algún motivo?', NULL, NULL, 7, 2, 12),
(54, '¿Cuál es su discapacidad?(puede haber mas de una)', NULL, NULL, 8, 1, 13),
(55, '(Abierta, escuchar y codificar)¿Realizo el empadronamiento en OSEP, hizo el trámite de registro de su situación en la Obra Social?', NULL, NULL, 8, 4, NULL),
(56, '(Abierta, escuchar y codificar)¿Quién o quienes lo orientan sobre los tratamientos que necesita?Es decir,¿quién o quienes que ustedes valoren le indican qué tratamientos sería bueno que realizara pos su discapacidad?(marcar todos los que corresponden)', NULL, NULL, 8, 1, NULL),
(57, '(Si menciono a algún profesional de la salud)De los profesionales de la salud que mencionó, ¿alguno es el profesional "de cabecera", es decir, el profesional que mas lo conoce y que deriva a los distintos tratamientos?', NULL, 56, 8, 1, NULL),
(58, '(Abierta) ¿Que le gustaría que OSEP hiciera por ud?', NULL, NULL, 8, 6, NULL),
(59, '¿De cuántos meses está embarazada?', NULL, NULL, 9, 6, NULL),
(60, '¿Concurrió al control el mes pasado?', NULL, NULL, 9, 4, NULL),
(61, 'Si concurrio, ¿Que tal complicado le resultó en esa oportunidad todo el proceso que implicó hacerse el control teniendo en cuenta todos los pasos, es decir, conseguir turno, esperar hasta el día de la atencion, llegar al lugar y que la atiendan?', NULL, 60, 9, 2, NULL),
(62, 'Si NO concurrió, ¿Porque no concurrió?', NULL, 60, 9, 6, NULL),
(63, '(Abierta, escuchar y codificar)¿El embarazo lo esta llevando un profesional en especial o se atiende con distintos profesionales?', NULL, NULL, 9, 2, NULL),
(64, 'El o los profesionales que la atiende/n ¿ha detectado algún problema en el embarazo?', NULL, NULL, 9, 4, NULL),
(65, 'Si han detectado algún problema, ¿cuál?', NULL, 64, 9, 6, NULL),
(66, '¿Cuenta con apoyo familiar, de su pareja o de alguna otra persona que la acompañe, la contenga y la ayuda mientras transcurre el embarazo? ', NULL, NULL, 9, 4, NULL),
(67, 'Respecto de los servicios básicos, ¿esta casa tiene conexión a...?', NULL, NULL, 10, 1, NULL),
(68, 'La vivienda que habitan, ¿es propia?', NULL, NULL, 10, 4, NULL),
(69, '(Preguntar y Observar)Por último, en su barrio/zona donde vive ¿hay presencia de...?', NULL, NULL, 10, 1, NULL),
(70, '¿Usted contribuye con la economía de la familia?', NULL, NULL, 2, 4, NULL),
(71, '¿Cuántas horas por semana trabaja?', NULL, NULL, 2, 6, NULL),
(72, '¿En qué lugar trabaja?', NULL, NULL, 2, 6, NULL),
(73, '¿A qué se dedica concretamente?', NULL, NULL, 2, 6, NULL),
(74, 'Teléfono para supervisión (fijo o celular)', NULL, NULL, 11, 6, NULL),
(75, 'Horario para llamar', NULL, NULL, 11, 6, NULL),
(76, 'Celular con internet', NULL, NULL, 11, 4, NULL),
(77, '(Completar por Observación) A-Nivel de Vivienda', NULL, NULL, 11, 1, 14),
(78, 'B-Materiales predominantes de paredes', NULL, 77, 11, 1, NULL),
(79, 'C-Materiales predominantes del techo', NULL, 77, 11, 1, NULL),
(80, 'D-Ventilación', NULL, 77, 11, 1, NULL),
(81, 'Observaciones Generales : Accesibilidad', NULL, NULL, 11, 2, NULL),
(82, 'Observaciones Generales', NULL, NULL, 11, 6, NULL),
(83, 'Calle', NULL, NULL, 1, 6, NULL),
(84, '¿Entre que calles?', NULL, NULL, 1, 6, NULL),
(85, 'Manzana y Casa si se trata de un barrio', NULL, NULL, 1, 6, NULL),
(86, 'Teléfono de contacto para próximos encuentros', NULL, NULL, 1, 6, NULL),
(87, '¿Hubo contacto telefónico previo con el entrevistado?', NULL, NULL, 1, 4, NULL),
(88, 'Movilidad utilizada', NULL, NULL, 1, 2, 15),
(89, 'Tiempo de duración total de la entrevista(en minutos)', NULL, NULL, 1, 6, NULL),
(90, 'Tiempo de diferencia entre el contacto telefónico previo y la efectiva visita(en días)', NULL, NULL, 1, 6, NULL),
(91, 'Teléfono para supervisión (fijo y celular)', NULL, NULL, 1, 6, NULL),
(92, 'Horario para llamar', NULL, NULL, 1, 6, NULL),
(93, 'Celular con internet', NULL, NULL, 1, 4, NULL),
(94, 'Qué cobertura de salud tiene: ¿Tiene OSEP?', NULL, NULL, 2, 4, NULL),
(95, '¿Usted esta embarazada?', NULL, NULL, 2, 4, NULL),
(96, '¿Tiene alguna enfermedad crónica?', NULL, NULL, 2, 4, NULL),
(97, '¿Que enfermedad crónica padece?', NULL, 96, 2, 2, 16),
(98, '¿Usted tiene alguna discapacidad?', NULL, NULL, 2, 4, NULL),
(99, '¿Usted tiene necesidad de cuidados especiales o ayuda para realizar actividades comunes de la vida diaria?', NULL, NULL, 2, 4, NULL),
(100, '¿Alguno de los integrantes de la familia tiene parientes con cobertura de OSEP a su cargo que no vivan en la casa?', NULL, NULL, 2, 4, NULL);

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
  `idEmpleado` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `relevamiento`
--

INSERT INTO `relevamiento` (`idRelevamiento`, `nroRelevamiento`, `fechaRelevamiento`, `observCriticidad`, `idCriticidad`, `idEncuesta`, `idVisita`, `idEmpleado`) VALUES
(1, 2324124, '2017-04-06', 'Alta', 2, 1, 5, 6),
(2, 333333, '2017-03-21', 'Alta', 3, 1, NULL, 7);

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
(1, 'Si', ''),
(2, 'No', ''),
(3, 'Titular', ''),
(4, 'Conyugue o pareja conviviente', ''),
(5, 'Hijo/a', NULL),
(6, 'Padre/Madre', NULL),
(7, 'Suegro/a', NULL),
(8, 'Yerno/Nuera', NULL),
(9, 'Nieto/a', NULL),
(10, 'Otro Familiar', NULL),
(11, 'Otro No Familiar', NULL),
(12, 'Femenino', NULL),
(13, 'Masculino', NULL),
(14, 'Ninguno', NULL),
(15, 'Primario Incompleto', NULL),
(16, 'Primario Completo', NULL),
(17, 'Secundario Incompleto', NULL),
(18, 'Secundario Completo', NULL),
(19, 'Terciario Incompleto', NULL),
(20, 'Terciario Completo', NULL),
(21, 'Universitario Incompleto', NULL),
(22, 'Universitario Completo o más', NULL),
(23, 'Trabajador Remunerado', NULL),
(24, 'Jubilado o Pensionado', NULL),
(25, 'Buscando trabajo', NULL),
(26, 'Estudia exclusivamente', NULL),
(27, 'Ama de casa exclusivamente', NULL),
(28, 'Estudia y trabaja', NULL),
(29, 'No trabaja', NULL),
(30, 'Salud Pública', NULL),
(31, 'Sólo OSEP', NULL),
(32, 'Obra Social', NULL),
(33, 'Prepaga', NULL),
(34, 'OSEP y otra', NULL),
(35, 'Servicio de Emergencia', NULL),
(36, 'Mutual con Servicios Médicos', NULL),
(37, 'Otro/a', NULL),
(38, 'Autoválido', NULL),
(39, 'Semiválido', NULL),
(40, 'Inválido', NULL),
(41, 'Fue a un efector de OSEP', NULL),
(42, 'Fue a un prestador privado', NULL),
(43, 'Fue a un Hospital o Centro de Salud Público', NULL),
(44, 'Ningún miembro de la familia se enfermo o tuvo accidente', NULL),
(45, 'No lo consideró necesario y tomó remedios caseros', NULL),
(46, 'Decidió tomar sus medicamentos habituales', NULL),
(47, 'Prefirió consultar en la farmacia y comprar los medicamentos', NULL),
(48, 'Quiso consultar pero no tuvo tiempo', NULL),
(49, 'Quiso consultar pero no tuvo dinero', NULL),
(50, 'Quiso consultar pero le cuesta mucho llegar al lugar de atención', NULL),
(51, 'Quiso consultar pero el horario de atención no le coincidía', NULL),
(52, 'Pidió turno pero no lo obtuvo', NULL),
(53, 'Consiguió turno pero todavía no le toca', NULL),
(54, 'Embarazo Normal', NULL),
(55, 'Embarazo de Riesgo', NULL),
(56, 'A término', NULL),
(57, 'Prematuro', NULL),
(58, 'Peso Normal', NULL),
(59, 'Bajo Peso', NULL),
(60, 'Sobrepeso', NULL),
(61, 'No asiste todavía', NULL),
(62, 'Deportiva', NULL),
(63, 'Artística', NULL),
(64, 'Comunitaria', NULL),
(65, 'Religiosa', NULL),
(66, 'No realiza', NULL),
(67, 'Club', NULL),
(68, 'Instituto', NULL),
(69, 'Academia', NULL),
(70, 'CIC', NULL),
(71, 'Biblioteca', NULL),
(72, 'Unión Vecinal', NULL),
(73, 'Muy bueno', NULL),
(74, 'Bueno', NULL),
(75, 'Regular', NULL),
(76, 'Malo', NULL),
(77, 'En hospital o centro propio de OSEP', NULL),
(78, 'En consultorio, clínica o sanatorio privado donde le reciben OSEP', NULL),
(79, 'En hospital público, centro de salud, sala', NULL),
(80, 'En consultorio, clínica o sanatorio donde no le reciben OSEP y paga particular', NULL),
(81, 'No tuvo tiempo', NULL),
(82, 'No tuvo dinero', NULL),
(83, 'No consiguió turno o lugar donde la atendieran', NULL),
(84, 'No sabe dónde hacérselo', NULL),
(85, 'Le da miedo, disgusto o vergüenza', NULL),
(86, 'Se olvidó', NULL),
(87, 'Por "dejadez"', NULL),
(88, 'No lo necesita, esta sana (percepción personal)', NULL),
(89, 'No conoce ese examen o no sabía que tenía que hacerselo', NULL),
(90, 'El médico no se lo indicó', NULL),
(91, 'Por edad avanzada', NULL),
(92, 'No le corresponde (contraindicación médica)', NULL),
(93, 'Mamógrafo móvil de OSEP', NULL),
(94, 'Simple', NULL),
(95, 'Complicado', NULL),
(96, 'Muy Complicado', NULL),
(97, 'Viene a Domicilio', NULL),
(98, 'Motora', NULL),
(99, 'Sensorial Visual', NULL),
(100, 'Sensorial Auditiva', NULL),
(101, 'Visceral', NULL),
(102, 'Mental o Cognitiva', NULL),
(103, 'No sabia que debía hacerlo', NULL),
(104, 'Médico General o Pediatra', NULL),
(105, 'Médico Especialista', NULL),
(106, 'Psicólogo/Psiquiatra', NULL),
(107, 'Médico Fisiátrica', NULL),
(108, 'Otro profesional de la salud ', NULL),
(109, 'Docente', NULL),
(110, 'Integrante de la red de madres', NULL),
(111, 'Integrante de otra organización civil o de ayuda', NULL),
(112, 'Otra persona que tiene una discapacidad o un familiar con una discapacidad que no está en ninguna organización (no profesional)', NULL),
(113, 'Un profesional ', NULL),
(114, 'Distintos profesionales en un solo lugar de atención', NULL),
(115, 'Distintos lugares de atención', NULL),
(116, 'Red de energía eléctrica ', NULL),
(117, 'Red de gas natural', NULL),
(118, 'Red de agua potable', NULL),
(119, 'Cloacas', NULL),
(120, 'Teléfono fijo', NULL),
(121, 'Internet', NULL),
(122, 'Basurales a cielo abierto', NULL),
(123, 'Fábricas contaminantes', NULL),
(124, 'Animales abandonados', NULL),
(125, 'Lugares de cría de animales(gallineros, chiqueros)', NULL),
(126, 'Desagüe de cloacas, aguas servidas', NULL),
(127, 'Insectos y roedores', NULL),
(128, 'Agroquímicos', NULL),
(129, 'Canales de riego, piletas y otro lugar donde haya agua que traiga problemas', NULL),
(130, 'Calles muy transitadas o autopistas', NULL),
(131, 'Calles de tierra', NULL),
(132, 'AB', NULL),
(133, 'C1', NULL),
(134, 'C2', NULL),
(135, 'C3', NULL),
(136, 'D1', NULL),
(137, 'D2', NULL),
(138, 'E', NULL),
(139, 'Material de construcción', NULL),
(140, 'Madera', NULL),
(141, 'Adobe', NULL),
(142, 'Chapa de metal, cartón', NULL),
(143, 'Membrana, teja, losa, baldosa', NULL),
(144, 'Madera, caña, paja', NULL),
(145, 'Suficiente', NULL),
(146, 'Escasa', NULL),
(147, 'Sin ventilación', NULL),
(148, 'Compleja', NULL),
(149, 'Transporte Público', NULL),
(150, 'Transporte Privado', NULL),
(151, 'A pie', NULL),
(152, 'Diabetes', NULL),
(153, 'Hipertensión Arterial', NULL),
(154, 'Colesterol Alto', NULL),
(155, 'Epilepsia', NULL),
(156, 'EPOC (Enfermedad Pulmonar Obstructiva Crónica)', NULL),
(157, 'Insuficiencia Cardíaca', NULL),
(158, 'Glaucoma', NULL),
(159, 'Parkinson', NULL),
(160, 'Insuficuencia Renal Crónica', NULL);

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
  `idRespPreg` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `respuesta_elegida`
--

INSERT INTO `respuesta_elegida` (`idRespuestaElegida`, `respBreve`, `idRelevamiento`, `idEncuestado`, `idPregunta`, `idRespPreg`) VALUES
(1, NULL, 1, NULL, 0, 231),
(2, NULL, 1, NULL, 0, 233),
(3, '30 minutos', 1, NULL, 89, NULL),
(4, '5 días', 1, NULL, 90, NULL),
(5, '4985678', 1, NULL, 91, NULL),
(6, '18 horas', 1, NULL, 92, NULL),
(7, NULL, 1, NULL, 0, 235),
(8, NULL, 0, NULL, 0, NULL),
(9, NULL, 0, NULL, 0, NULL),
(10, NULL, 0, NULL, 0, NULL);

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
(1, 6, 3),
(2, 6, 4),
(3, 6, 5),
(4, 6, 6),
(5, 6, 7),
(6, 6, 8),
(7, 6, 9),
(8, 6, 10),
(9, 6, 11),
(10, 10, 15),
(11, 10, 16),
(12, 10, 17),
(13, 10, 18),
(14, 10, 19),
(15, 10, 20),
(16, 10, 21),
(17, 10, 22),
(18, 11, 23),
(19, 11, 24),
(20, 11, 25),
(21, 11, 26),
(22, 11, 27),
(23, 11, 28),
(24, 11, 29),
(25, 12, 30),
(26, 12, 31),
(27, 12, 32),
(28, 12, 33),
(29, 12, 34),
(30, 12, 35),
(31, 12, 36),
(32, 12, 37),
(33, 14, 41),
(34, 14, 42),
(35, 14, 43),
(36, 15, 44),
(37, 15, 45),
(38, 15, 46),
(39, 15, 47),
(40, 15, 48),
(41, 15, 49),
(42, 15, 50),
(43, 15, 51),
(44, 15, 52),
(45, 15, 53),
(47, 16, 54),
(48, 16, 55),
(49, 17, 56),
(50, 17, 57),
(51, 22, 58),
(52, 22, 59),
(53, 22, 60),
(54, 31, 62),
(55, 31, 63),
(56, 31, 64),
(57, 31, 65),
(58, 31, 37),
(59, 31, 66),
(60, 32, 67),
(61, 32, 68),
(62, 32, 69),
(63, 32, 70),
(64, 32, 71),
(65, 32, 72),
(66, 32, 37),
(67, 35, 77),
(68, 35, 78),
(69, 35, 79),
(70, 35, 80),
(71, 35, 37),
(72, 36, 81),
(73, 36, 82),
(74, 36, 83),
(75, 36, 84),
(76, 36, 85),
(77, 36, 86),
(78, 36, 87),
(79, 36, 88),
(80, 36, 89),
(81, 36, 90),
(82, 36, 91),
(83, 36, 92),
(84, 38, 93),
(85, 38, 78),
(86, 38, 79),
(87, 38, 80),
(88, 38, 37),
(89, 39, 81),
(90, 39, 82),
(91, 39, 83),
(92, 39, 84),
(93, 39, 85),
(94, 39, 86),
(95, 39, 87),
(96, 39, 88),
(97, 39, 89),
(98, 39, 90),
(99, 39, 91),
(100, 39, 92),
(101, 40, 38),
(102, 40, 39),
(103, 40, 40),
(104, 53, 94),
(105, 53, 95),
(106, 53, 96),
(107, 53, 97),
(108, 54, 98),
(109, 54, 99),
(110, 54, 100),
(111, 54, 101),
(112, 54, 102),
(113, 55, 1),
(114, 55, 2),
(115, 55, 103),
(116, 56, 104),
(117, 56, 105),
(118, 56, 106),
(119, 56, 107),
(120, 56, 108),
(121, 56, 109),
(122, 56, 110),
(123, 56, 111),
(124, 56, 112),
(125, 56, 37),
(126, 57, 104),
(127, 57, 105),
(128, 57, 106),
(129, 57, 108),
(130, 61, 94),
(131, 61, 95),
(132, 63, 113),
(133, 63, 114),
(134, 63, 115),
(135, 67, 116),
(136, 67, 117),
(137, 67, 118),
(138, 67, 119),
(139, 67, 120),
(140, 67, 121),
(141, 69, 122),
(142, 69, 123),
(143, 69, 124),
(144, 69, 125),
(145, 69, 126),
(146, 69, 127),
(147, 69, 128),
(148, 69, 129),
(149, 69, 130),
(150, 69, 131),
(151, 77, 132),
(152, 77, 133),
(153, 77, 134),
(154, 77, 135),
(155, 77, 136),
(156, 77, 137),
(157, 77, 138),
(158, 78, 139),
(159, 78, 140),
(160, 78, 141),
(161, 78, 142),
(162, 79, 143),
(163, 79, 144),
(164, 79, 142),
(165, 80, 145),
(166, 80, 146),
(167, 80, 147),
(168, 81, 94),
(169, 81, 148),
(170, 13, 1),
(171, 13, 2),
(172, 19, 1),
(173, 19, 2),
(174, 20, 1),
(175, 20, 2),
(176, 21, 1),
(177, 21, 2),
(178, 23, 1),
(179, 23, 2),
(180, 24, 1),
(181, 24, 2),
(182, 26, 1),
(183, 26, 2),
(184, 27, 1),
(185, 27, 2),
(186, 28, 1),
(187, 28, 2),
(188, 30, 1),
(189, 30, 2),
(190, 34, 1),
(191, 34, 2),
(192, 37, 1),
(193, 37, 2),
(194, 41, 1),
(195, 41, 2),
(196, 42, 1),
(197, 42, 2),
(198, 43, 1),
(199, 43, 2),
(200, 44, 1),
(201, 44, 2),
(202, 45, 1),
(203, 45, 2),
(204, 46, 1),
(205, 46, 2),
(206, 47, 1),
(207, 47, 2),
(208, 48, 1),
(209, 48, 2),
(210, 50, 1),
(211, 50, 2),
(212, 51, 1),
(213, 51, 2),
(214, 52, 1),
(215, 52, 2),
(216, 55, 1),
(217, 55, 2),
(218, 60, 1),
(219, 60, 2),
(220, 64, 1),
(221, 64, 2),
(222, 66, 1),
(223, 66, 2),
(224, 68, 1),
(225, 68, 2),
(226, 70, 1),
(227, 70, 2),
(228, 76, 1),
(229, 76, 2),
(230, 87, 1),
(231, 87, 2),
(232, 88, 149),
(233, 88, 150),
(234, 88, 151),
(235, 93, 1),
(236, 93, 2),
(237, 94, 1),
(238, 94, 2),
(239, 95, 1),
(240, 95, 2),
(241, 97, 152),
(242, 97, 153),
(243, 97, 154),
(244, 97, 155),
(245, 97, 156),
(246, 97, 157),
(247, 97, 158),
(248, 97, 159),
(249, 97, 160),
(250, 98, 1),
(251, 98, 2),
(252, 99, 1),
(253, 99, 2),
(254, 100, 1),
(255, 100, 2);

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
(9, 'Hora', 'Hora de una acción a realizar.');

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
(2, 'f8bcd24f1ccd726b8cb2d59ae874eda4', 'pepito', 6, 2),
(3, '81dc9bdb52d04dc20036dbd8313ed055', 'aldana', 6, 3),
(4, '81dc9bdb52d04dc20036dbd8313ed055', 'creador', 7, 13);

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

--
-- Volcado de datos para la tabla `visita`
--

INSERT INTO `visita` (`idVisita`, `nroAfiliado`, `nombreAfiliado`, `apellidoAfiliado`, `telefono`, `fechaHoy`, `fechaVisita`, `horaVisita`, `cantLlamadas`, `idDireccion`) VALUES
(1, 2147483647, 'Carlos', 'Roberti', 4231231, '0000-00-00', '2017-03-20', '10:00:00', 2, 0),
(2, 30, 'Probando', 'Apellido', 23432423, '2017-03-08', '2017-03-29', '23:00:00', 2, 0),
(3, 332085237, 'Laura', 'Noesta', 4782678, '2017-03-10', '2017-03-24', '15:30:00', 2, 2),
(4, 2147483647, 'Jose probando', 'Robles Probando', 34231234, '2017-03-13', '2017-03-24', '04:02:00', 3, 3),
(5, 2147483647, 'Pepe', 'Pompin', 23134563, '2017-03-13', '2017-03-30', '04:02:00', 2, 4),
(6, 2147483647, 'Carlos', 'Bala', 4782678, '2017-03-13', '2017-03-18', '02:58:00', 2, 5);

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
  ADD PRIMARY KEY (`idEmpleado`);

--
-- Indices de la tabla `encuesta`
--
ALTER TABLE `encuesta`
  ADD PRIMARY KEY (`idEncuesta`),
  ADD KEY `idEstadoE` (`idEstadoEncuesta`),
  ADD KEY `idEmpleado` (`idEmpleado`);

--
-- Indices de la tabla `encuestado`
--
ALTER TABLE `encuestado`
  ADD PRIMARY KEY (`idEncuestado`),
  ADD KEY `idRelevamiento` (`idRelevamiento`),
  ADD KEY `idAfiliado` (`idAfiliado`);

--
-- Indices de la tabla `estado_encuesta`
--
ALTER TABLE `estado_encuesta`
  ADD PRIMARY KEY (`idEstadoEncuesta`);

--
-- Indices de la tabla `etiqueta`
--
ALTER TABLE `etiqueta`
  ADD PRIMARY KEY (`idEtiqueta`);

--
-- Indices de la tabla `localidad`
--
ALTER TABLE `localidad`
  ADD PRIMARY KEY (`id_tlocalidad`),
  ADD KEY `id_tdeparta` (`id_tdeparta`);

--
-- Indices de la tabla `nivel`
--
ALTER TABLE `nivel`
  ADD PRIMARY KEY (`idNivel`);

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
  ADD PRIMARY KEY (`idRelevamiento`),
  ADD KEY `idCriticidad` (`idCriticidad`),
  ADD KEY `idEncuesta` (`idEncuesta`),
  ADD KEY `idVisita` (`idVisita`),
  ADD KEY `idEmpleado` (`idEmpleado`);

--
-- Indices de la tabla `respuesta`
--
ALTER TABLE `respuesta`
  ADD PRIMARY KEY (`idRespuesta`);

--
-- Indices de la tabla `respuesta_elegida`
--
ALTER TABLE `respuesta_elegida`
  ADD PRIMARY KEY (`idRespuestaElegida`),
  ADD KEY `idRelevamiento` (`idRelevamiento`),
  ADD KEY `idEncuestado` (`idEncuestado`),
  ADD KEY `idRespPreg` (`idRespPreg`),
  ADD KEY `idPregunta` (`idPregunta`);

--
-- Indices de la tabla `respuesta_pregunta`
--
ALTER TABLE `respuesta_pregunta`
  ADD PRIMARY KEY (`idRespPreg`),
  ADD KEY `idPregunta` (`idPregunta`),
  ADD KEY `idRespuesta` (`idRespuesta`);

--
-- Indices de la tabla `tipo_bloque`
--
ALTER TABLE `tipo_bloque`
  ADD PRIMARY KEY (`idTipoBloque`);

--
-- Indices de la tabla `tipo_doc`
--
ALTER TABLE `tipo_doc`
  ADD PRIMARY KEY (`id_ttipodoc`);

--
-- Indices de la tabla `tipo_pregunta`
--
ALTER TABLE `tipo_pregunta`
  ADD PRIMARY KEY (`idTipoPregunta`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`idUsuario`),
  ADD KEY `idNivel` (`idNivel`),
  ADD KEY `idEmpleado` (`idEmpleado`);

--
-- Indices de la tabla `visita`
--
ALTER TABLE `visita`
  ADD PRIMARY KEY (`idVisita`),
  ADD KEY `idDireccion` (`idDireccion`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `bloque`
--
ALTER TABLE `bloque`
  MODIFY `idBloque` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT de la tabla `criticidad`
--
ALTER TABLE `criticidad`
  MODIFY `idCriticidad` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `departamento`
--
ALTER TABLE `departamento`
  MODIFY `id_tdeparta` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT de la tabla `direccion`
--
ALTER TABLE `direccion`
  MODIFY `idDireccion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT de la tabla `empleado`
--
ALTER TABLE `empleado`
  MODIFY `idEmpleado` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT de la tabla `encuesta`
--
ALTER TABLE `encuesta`
  MODIFY `idEncuesta` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `encuestado`
--
ALTER TABLE `encuestado`
  MODIFY `idEncuestado` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `estado_encuesta`
--
ALTER TABLE `estado_encuesta`
  MODIFY `idEstadoEncuesta` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `etiqueta`
--
ALTER TABLE `etiqueta`
  MODIFY `idEtiqueta` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT de la tabla `localidad`
--
ALTER TABLE `localidad`
  MODIFY `id_tlocalidad` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=345;
--
-- AUTO_INCREMENT de la tabla `nivel`
--
ALTER TABLE `nivel`
  MODIFY `idNivel` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT de la tabla `pregunta`
--
ALTER TABLE `pregunta`
  MODIFY `idPregunta` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=101;
--
-- AUTO_INCREMENT de la tabla `relevamiento`
--
ALTER TABLE `relevamiento`
  MODIFY `idRelevamiento` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `respuesta`
--
ALTER TABLE `respuesta`
  MODIFY `idRespuesta` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=161;
--
-- AUTO_INCREMENT de la tabla `respuesta_elegida`
--
ALTER TABLE `respuesta_elegida`
  MODIFY `idRespuestaElegida` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
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
-- AUTO_INCREMENT de la tabla `tipo_pregunta`
--
ALTER TABLE `tipo_pregunta`
  MODIFY `idTipoPregunta` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `idUsuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de la tabla `visita`
--
ALTER TABLE `visita`
  MODIFY `idVisita` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
