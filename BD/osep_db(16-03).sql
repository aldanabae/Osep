-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 16-03-2017 a las 22:59:03
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
  `idEncuesta` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `bloque`
--

INSERT INTO `bloque` (`idBloque`, `nroBloque`, `nombreBloque`, `descripBloque`, `idEncuesta`) VALUES
(1, 0, 'De Identificación del Territorio/Facilitador/Familia Relevada y Encuesta', 'Bloque Inicial', 1),
(2, 1, 'Composición y Salud Familiar', 'Boque de Familiar', 1),
(3, 2, 'Utilizacion de Servicios de Salud', 'Bloque para Afiliados', 1),
(4, 3, 'Salud de los Niños', 'Bloque Niños Menores de 2 años(0 a 1 año 11 meses y 29 días)', 1),
(5, 3, 'Salud de los Niños', 'Bloque Niños Mayores de 2 años y Menores de 14(2 a 14 año 11 meses y 29 días)', 1),
(6, 4, 'Salud de las Mujeres', 'Bloque Mujeres Mayores de 16 años', 1),
(7, 5, 'Adultos Mayores', 'Bloque Mayores de 65 años', 1),
(8, 6, 'Familias que tienen miembros con discapacidad Afiliados a OSEP', 'Bloque para Discapacitados', 1),
(9, 7, 'Embarazadas', 'Bloque para integrantes de la familia embarazadas.\r\n', 0),
(10, 8, 'Vivienda y Habitat', 'Bloque características generales de la Vivienda.', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `criticidad`
--

CREATE TABLE `criticidad` (
  `idCriticidad` int(11) NOT NULL,
  `nombreCriticidad` varchar(45) NOT NULL,
  `descCriticidad` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
(4, 'Azcuenaga', 3, 231, 4, 'Bustamante', 'Entre Rios', '', 'Timbre de arriba', 'F', 2),
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
  `IdEncuestado` int(11) NOT NULL,
  `idRelevamiento` int(11) NOT NULL,
  `idAfiliado` int(11) NOT NULL
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
(1, 'Relacion', 'Conj de datos sobre la relación de parentesco');

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
(1, 'Vistalba', 5509, 5),
(2, 'Drummond', 5508, 5);

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
(0, 'Titular'),
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
(30, 'Conviviente');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pregunta`
--

CREATE TABLE `pregunta` (
  `idPregunta` int(11) NOT NULL,
  `pregunta` varchar(100) NOT NULL,
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
(1, 'Nombre y apellido del facilitador', '', 0, 1, 8, NULL),
(2, 'Fecha de realización de la entrevista', '', 0, 1, 3, NULL),
(3, 'Departamento', '', 0, 1, 8, NULL),
(4, 'Distrito', NULL, NULL, 1, 8, NULL),
(5, 'Barrio', NULL, NULL, 1, 6, NULL),
(6, '¿Que relación de parentesco tiene con el titular?', NULL, NULL, 2, 2, 1),
(7, 'Edad', NULL, NULL, 2, 6, NULL),
(8, 'Sexo', NULL, NULL, 2, 2, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `relevamiento`
--

CREATE TABLE `relevamiento` (
  `idRelevamiento` int(11) NOT NULL,
  `fechaRelevamiento` date NOT NULL,
  `observacionCriticidad` text NOT NULL,
  `idCriticidad` int(11) NOT NULL,
  `idEncuesta` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
(111, 'Integrante de otra organización  civil o de ayuda', NULL),
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
(132, '', NULL),
(133, '', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `respuesta_elegida`
--

CREATE TABLE `respuesta_elegida` (
  `idRespuestaElegida` int(11) NOT NULL,
  `respuestaBreve` text,
  `respuestaParrafo` text,
  `idPregunta` int(11) NOT NULL,
  `idRespuesta` int(11) NOT NULL,
  `idRelevamiento` int(11) NOT NULL,
  `idEncuestado` int(11) DEFAULT NULL,
  `idRespPreg` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
(4, 6, 6);

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
(2, 'f8bcd24f1ccd726b8cb2d59ae874eda4', 'pepito', 1, 2),
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
  ADD KEY `idEncuesta` (`idEncuesta`);

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
  ADD PRIMARY KEY (`IdEncuestado`),
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
-- Indices de la tabla `parentesco`
--
ALTER TABLE `parentesco`
  ADD PRIMARY KEY (`id_tparentesco`);

--
-- Indices de la tabla `pregunta`
--
ALTER TABLE `pregunta`
  ADD PRIMARY KEY (`idPregunta`),
  ADD KEY `idSubPregunta` (`idSubPregunta`),
  ADD KEY `idBloque` (`idBloque`),
  ADD KEY `idTipoPregunta` (`idTipoPregunta`),
  ADD KEY `idEtiqueta` (`idEtiqueta`);

--
-- Indices de la tabla `relevamiento`
--
ALTER TABLE `relevamiento`
  ADD PRIMARY KEY (`idRelevamiento`),
  ADD KEY `idCriticidad` (`idCriticidad`),
  ADD KEY `idEncuesta` (`idEncuesta`);

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
  ADD KEY `idPregunta` (`idPregunta`),
  ADD KEY `idRespuesta` (`idRespuesta`),
  ADD KEY `idRelevamiento` (`idRelevamiento`),
  ADD KEY `idEncuestado` (`idEncuestado`),
  ADD KEY `idRespPreg` (`idRespPreg`);

--
-- Indices de la tabla `respuesta_pregunta`
--
ALTER TABLE `respuesta_pregunta`
  ADD PRIMARY KEY (`idRespPreg`),
  ADD KEY `idPregunta` (`idPregunta`),
  ADD KEY `idRespuesta` (`idRespuesta`);

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
  MODIFY `idBloque` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT de la tabla `criticidad`
--
ALTER TABLE `criticidad`
  MODIFY `idCriticidad` int(11) NOT NULL AUTO_INCREMENT;
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
  MODIFY `IdEncuestado` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `estado_encuesta`
--
ALTER TABLE `estado_encuesta`
  MODIFY `idEstadoEncuesta` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `etiqueta`
--
ALTER TABLE `etiqueta`
  MODIFY `idEtiqueta` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `localidad`
--
ALTER TABLE `localidad`
  MODIFY `id_tlocalidad` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `nivel`
--
ALTER TABLE `nivel`
  MODIFY `idNivel` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT de la tabla `parentesco`
--
ALTER TABLE `parentesco`
  MODIFY `id_tparentesco` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
--
-- AUTO_INCREMENT de la tabla `pregunta`
--
ALTER TABLE `pregunta`
  MODIFY `idPregunta` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT de la tabla `relevamiento`
--
ALTER TABLE `relevamiento`
  MODIFY `idRelevamiento` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `respuesta`
--
ALTER TABLE `respuesta`
  MODIFY `idRespuesta` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=150;
--
-- AUTO_INCREMENT de la tabla `respuesta_elegida`
--
ALTER TABLE `respuesta_elegida`
  MODIFY `idRespuestaElegida` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `respuesta_pregunta`
--
ALTER TABLE `respuesta_pregunta`
  MODIFY `idRespPreg` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
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
