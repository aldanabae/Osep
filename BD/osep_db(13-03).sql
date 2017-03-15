-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 13-03-2017 a las 21:48:58
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
  `nombreBloque` varchar(45) NOT NULL,
  `descripBloque` text,
  `idEncuesta` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `bloque`
--

INSERT INTO `bloque` (`idBloque`, `nroBloque`, `nombreBloque`, `descripBloque`, `idEncuesta`) VALUES
(1, 8, 'Vivienda y Habitat', 'para los mayores de 62 años', 1),
(2, 3, 'Salud de Niños', 'de 11 a 17 años inclusive', 1),
(3, 2, 'Utilizacion de servicios de Salud', 'Preguntas para el beneficiario', 1),
(4, 7, 'Embarazo', '....', 1),
(5, 9, 'Final para todas las familias', NULL, 1),
(6, 4, 'Salud de las mijeres', NULL, 1),
(7, 5, 'Adultos mayores', NULL, 1),
(8, 1, 'Composicion y salud Familiar', NULL, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `country`
--

CREATE TABLE `country` (
  `Name` varchar(32) COLLATE latin1_general_ci NOT NULL,
  `Code` varchar(4) COLLATE latin1_general_ci NOT NULL DEFAULT '',
  `Capital` varchar(35) COLLATE latin1_general_ci DEFAULT NULL,
  `Province` varchar(32) COLLATE latin1_general_ci DEFAULT NULL,
  `Area` int(11) DEFAULT NULL,
  `Population` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Volcado de datos para la tabla `country`
--

INSERT INTO `country` (`Name`, `Code`, `Capital`, `Province`, `Area`, `Population`) VALUES
('Albania', 'AL', 'Tirane', 'Albania', 28750, 3249136),
('Greece', 'GR', 'Athens', 'Greece', 131940, 10538594),
('Macedonia', 'MK', 'Skopje', 'Macedonia', 25333, 2104035),
('Serbia and Montenegro', 'YU', 'Belgrade', 'Serbia and Montenegro', 102350, 10614558),
('Andorra', 'AND', 'Andorra la Vella', 'Andorra', 450, 72766),
('France', 'F', 'Paris', 'Ile de France', 547030, 58317450),
('Spain', 'E', 'Madrid', 'Madrid', 504750, 39181114),
('Austria', 'A', 'Vienna', 'Vienna', 83850, 8023244),
('Czech Republic', 'CZ', 'Prague', 'Praha', 78703, 10321120),
('Germany', 'D', 'Berlin', 'Berlin', 356910, 83536115),
('Hungary', 'H', 'Budapest', 'Budapest (munic.)', 93030, 10002541),
('Italy', 'I', 'Rome', 'Lazio', 301230, 57460274),
('Liechtenstein', 'FL', 'Vaduz', 'Liechtenstein', 160, 31122),
('Slovakia', 'SK', 'Bratislava', 'Slovakia', 48845, 5374362),
('Slovenia', 'SLO', 'Ljubljana', 'Slovenia', 20256, 1951443),
('Switzerland', 'CH', 'Bern', 'BE', 41290, 7207060),
('Belarus', 'BY', 'Minsk', 'Belarus', 207600, 10415973),
('Latvia', 'LV', 'Riga', 'Latvia', 64100, 2468982),
('Lithuania', 'LT', 'Vilnius', 'Lithuania', 65200, 3646041),
('Poland', 'PL', 'Warsaw', 'Warszwaskie', 312683, 38642565),
('Ukraine', 'UA', 'Kiev', 'Kyyivska', 603700, 50864009),
('Russia', 'R', 'Moscow', 'Moskva', 17075200, 148178487),
('Belgium', 'B', 'Brussels', 'Brabant', 30510, 10170241),
('Luxembourg', 'L', 'Luxembourg', 'Luxembourg', 2586, 415870),
('Netherlands', 'NL', 'Amsterdam', 'Noord Holland', 37330, 15568034),
('Bosnia and Herzegovina', 'BIH', 'Sarajevo', 'Bosnia and Herzegovina', 51233, 2656240),
('Croatia', 'HR', 'Zagreb', 'Croatia', 56538, 5004112),
('Bulgaria', 'BG', 'Sofia', 'Bulgaria', 110910, 8612757),
('Romania', 'RO', 'Bucharest', 'Bucuresti', 237500, 21657162),
('Turkey', 'TR', 'Ankara', 'Ankara', 780580, 62484478),
('Denmark', 'DK', 'Copenhagen', 'Denmark', 43070, 5249632),
('Estonia', 'EW', 'Tallinn', 'Estonia', 45100, 1459428),
('Finland', 'SF', 'Helsinki', 'Uusimaa', 337030, 5105230),
('Norway', 'N', 'Oslo', 'Oslo', 324220, 4383807),
('Sweden', 'S', 'Stockholm', 'Stockholm', 449964, 8900954),
('Monaco', 'MC', 'Monaco', 'Monaco', 2, 31719),
('Holy See', 'V', 'Vatican City', 'Holy See', 0, 840),
('Iceland', 'IS', 'Reykjavik', 'Iceland', 103000, 270292),
('Ireland', 'IRL', 'Dublin', 'Ireland', 70280, 3566833),
('San Marino', 'RSM', 'San Marino', 'San Marino', 60, 24521),
('Malta', 'M', 'Valletta', 'Malta', 320, 375576),
('Moldova', 'MD', 'Chisinau', 'Moldova', 33700, 4463847),
('Portugal', 'P', 'Lisbon', 'Lisbon', 92080, 9865114),
('United Kingdom', 'GB', 'London', 'Greater London', 244820, 58489975),
('Afghanistan', 'AFG', 'Kabul', 'Afghanistan', 647500, 22664136),
('China', 'TJ', 'Beijing', 'Beijing (munic.)', 9596960, 1210004956),
('Iran', 'IR', 'Tehran', 'Tehran', 1648000, 66094264),
('Pakistan', 'PK', 'Islamabad', 'Pakistan', 803940, 129275660),
('Tajikistan', 'TAD', 'Dushanbe', 'Dushanbe (munic.)', 143100, 5916373),
('Turkmenistan', 'TM', 'Ashgabat', 'Ahal', 488100, 4149283),
('Uzbekistan', 'UZB', 'Tashkent', 'Toshkent', 447400, 23418381),
('Armenia', 'ARM', 'Yerevan', 'Armenia', 29800, 3463574),
('Georgia', 'GE', 'Tbilisi', 'Georgia', 69700, 5219810),
('Azerbaijan', 'AZ', 'Baku', 'Azerbaijan', 86600, 7676953),
('Bahrain', 'BRN', 'Manama', 'Bahrain', 620, 590042),
('Bangladesh', 'BD', 'Dhaka', 'Bangladesh', 144000, 123062800),
('Burma', 'MYA', 'Rangoon', 'Yangon', 678500, 45975625),
('India', 'IND', 'New Delhi', 'Delhi', 3287590, 952107694),
('Bhutan', 'BHT', 'Thimphu', 'Bhutan', 47000, 1822625),
('Brunei', 'BRU', 'Bandar Seri Begawan', 'Brunei', 5770, 299939),
('Malaysia', 'MAL', 'Kuala Lumpur', 'Fed. Terr. of Kuala Lumpur', 329750, 19962893),
('Laos', 'LAO', 'Vientiane', 'Laos', 236800, 4975772),
('Thailand', 'THA', 'Bangkok', 'Thailand', 514000, 58851357),
('Cambodia', 'K', 'Phnom Penh', 'Cambodia', 181040, 10861218),
('Vietnam', 'VN', 'Hanoi', 'Vietnam', 329560, 73976973),
('Kazakstan', 'KAZ', 'Almaty', 'Almaty (munic.)', 2717300, 16916463),
('North Korea', 'NOK', 'Pyongyang', 'North Korea', 120540, 23904124),
('Kyrgyzstan', 'KGZ', 'Bishkek', 'Kyrgyzstan', 198500, 4529648),
('Mongolia', 'MNG', 'Ulaanbaatar', 'Mongolia', 1565000, 2496617),
('Nepal', 'NEP', 'Kathmandu', 'Nepal', 140800, 22094033),
('Cyprus', 'CY', 'Nicosia', 'Cyprus', 9250, 744609),
('Israel', 'IL', 'Jerusalem', 'Central', 20770, 5421995),
('Egypt', 'ET', 'Cairo', 'El Qahira (munic.)', 1001450, 63575107),
('Indonesia', 'RI', 'Jakarta', 'Indonesia', 1919440, 206611600),
('Papua New Guinea', 'PNG', 'Port Moresby', 'Papua New Guinea', 461690, 4394537),
('Iraq', 'IRQ', 'Baghdad', 'Baghdad', 437072, 21422292),
('Jordan', 'JOR', 'Amman', 'Jordan', 89213, 4212152),
('Kuwait', 'KWT', 'Kuwait', 'Kuwait', 17820, 1950047),
('Saudi Arabia', 'SA', 'Riyadh', 'Saudi Arabia', 1960582, 19409058),
('Syria', 'SYR', 'Damascus', 'Syria', 185180, 15608648),
('Lebanon', 'RL', 'Beirut', 'Lebanon', 10400, 3776317),
('Japan', 'J', 'Tokyo', 'Tokyo', 377835, 125449703),
('South Korea', 'ROK', 'Seoul', 'South Korea', 98480, 45482291),
('Maldives', 'MV', 'Male', 'Maldives', 300, 270758),
('Oman', 'OM', 'Muscat', 'Oman', 212460, 2186548),
('United Arab Emirates', 'UAE', 'Abu Dhabi', 'United Arab Emirates', 75581, 3057337),
('Yemen', 'YE', 'Sanaa', 'Yemen', 527970, 13483178),
('Philippines', 'RP', 'Manila', 'Philippines', 300000, 74480848),
('Qatar', 'Q', 'Doha', 'Qatar', 11000, 547761),
('Singapore', 'SGP', 'Singapore', 'Singapore', 633, 3396924),
('Sri Lanka', 'CL', 'Colombo', 'Sri Lanka', 65610, 18553074),
('Taiwan', 'RC', 'Taipei', 'Taiwan', 35980, 21465881),
('Antigua and Barbuda', 'AG', 'Saint Johns', 'Antigua and Barbuda', 440, 65647),
('Bahamas', 'BS', 'Nassau', 'Bahamas', 13940, 259367),
('Barbados', 'BDS', 'Bridgetown', 'Barbados', 430, 257030),
('Belize', 'BZ', 'Belmopan', 'Belize', 22960, 219296),
('Guatemala', 'GCA', 'Guatemala City', 'Guatemala', 108890, 11277614),
('Mexico', 'MEX', 'Mexico City', 'Distrito Federal', 1972550, 95772462),
('Canada', 'CDN', 'Ottawa', 'Ontario', 9976140, 28820671),
('United States', 'USA', 'Washington', 'Distr. Columbia', 9372610, 266476278),
('Costa Rica', 'CR', 'San Jose', 'San Jose', 51100, 3463083),
('Nicaragua', 'NIC', 'Managua', 'Nicaragua', 129494, 4272352),
('Panama', 'PA', 'Panama City', 'Panama', 78200, 2655094),
('Cuba', 'C', 'Havana', 'Ciudad de la Habana', 110860, 10951334),
('Dominica', 'WD', 'Roseau', 'Dominica', 750, 82926),
('Dominican Republic', 'DOM', 'Santo Domingo', 'Dominican Republic', 48730, 8088881),
('Haiti', 'RH', 'Port-au-Prince', 'Haiti', 27750, 6731539),
('El Salvador', 'ES', 'San Salvador', 'El Salvador', 21040, 5828987),
('Honduras', 'HCA', 'Tegucigalpa', 'Francisco Morazan', 112090, 5605193),
('Grenada', 'WG', 'Saint Georges', 'Grenada', 340, 94961),
('Jamaica', 'JA', 'Kingston', 'Jamaica', 10990, 2595275),
('Colombia', 'CO', 'Bogota', 'Santa Fe de Bogota, DC', 1138910, 36813161),
('Saint Kitts and Nevis', 'KN', 'Basseterre', 'Saint Kitts and Nevis', 269, 41369),
('Saint Lucia', 'WL', 'Castries', 'Saint Lucia', 620, 157862),
('Saint Vincent and the Grenadines', 'WV', 'Kingstown', 'Saint Vincent and the Grenadines', 340, 118344),
('Trinidad and Tobago', 'TT', 'Port-of-Spain', 'Trinidad and Tobago', 5130, 1272385),
('Australia', 'AUS', 'Canberra', 'Australia Capital Territory', 7686850, 18260863),
('Fiji', 'FJI', 'Suva', 'Fiji', 18270, 782381),
('Kiribati', 'KIR', 'Tarawa', 'Kiribati', 717, 80919),
('Marshall Islands', 'MH', 'Majuro', 'Marshall Islands', 181, 58363),
('Micronesia', 'FSM', 'Kolonia', 'Micronesia', 702, 125377),
('Nauru', 'NAU', 'Yaren', 'Nauru', 21, 10273),
('New Caledonia', 'NCA', 'Noumea', 'New Caledonia', 19060, 187784),
('New Zealand', 'NZ', 'Wellington', 'New Zealand', 268680, 3547983),
('Palau', 'PAL', 'Koror', 'Palau', 458, 16952),
('Solomon Islands', 'SLB', 'Honiara', 'Solomon Islands', 28450, 412902),
('Tonga', 'TO', 'Nukualofa', 'Tonga', 748, 106466),
('Tuvalu', 'TUV', 'Funafuti', 'Tuvalu', 26, 10146),
('Vanuatu', 'VU', 'Port-Vila', 'Vanuatu', 14760, 177504),
('Western Samoa', 'WS', 'Apia', 'Western Samoa', 2860, 214384),
('Argentina', 'RA', 'Buenos Aires', 'Distrito Federal', 2766890, 34672997),
('Bolivia', 'BOL', 'La Paz', 'Bolivia', 1098580, 7165257),
('Brazil', 'BR', 'Brasilia', 'Distrito Federal', 8511965, 162661214),
('Chile', 'RCH', 'Santiago', 'Chile', 756950, 14333258),
('Paraguay', 'PY', 'Asuncion', 'Paraguay', 406750, 5504146),
('Uruguay', 'ROU', 'Montevideo', 'Uruguay', 176220, 3238952),
('Peru', 'PE', 'Lima', 'Lima', 1285220, 24523408),
('French Guiana', 'FGU', 'Cayenne', 'French Guiana', 91000, 151187),
('Guyana', 'GUY', 'Georgetown', 'Guyana', 214970, 712091),
('Suriname', 'SME', 'Paramaribo', 'Suriname', 163270, 436418),
('Venezuela', 'YV', 'Caracas', 'Distrito Federal', 912050, 21983188),
('Ecuador', 'EC', 'Quito', 'Ecuador', 283560, 11466291),
('Algeria', 'DZ', 'Algiers', 'Algeria', 2381740, 29183032),
('Libya', 'LAR', 'Tripoli', 'Libya', 1759540, 5445436),
('Mali', 'RMM', 'Bamako', 'Mali', 1240000, 9653261),
('Mauritania', 'RIM', 'Nouakchott', 'Mauritania', 1030700, 2336048),
('Morocco', 'MA', 'Rabat', 'Morocco', 446550, 29779156),
('Niger', 'RN', 'Niamey', 'Niger', 1267000, 9113001),
('Tunisia', 'TN', 'Tunis', 'Tunisia', 163610, 9019687),
('Western Sahara', 'WSA', 'El Alaiun', 'Western Sahara', 266000, 222631),
('Angola', 'ANG', 'Luanda', 'Luanda', 1246700, 10342899),
('Congo', 'RCB', 'Brazzaville', 'Congo', 342000, 2527841),
('Namibia', 'NAM', 'Windhoek', 'Namibia', 825418, 1677243),
('Zaire', 'ZRE', 'Kinshasa', 'Kinshasa', 2345410, 46498539),
('Zambia', 'Z', 'Lusaka', 'Lusaka', 752610, 9159072),
('Benin', 'BEN', 'Porto-Novo', 'Benin', 112620, 5709529),
('Burkina Faso', 'BF', 'Ouagadougou', 'Burkina Faso', 274200, 10623323),
('Nigeria', 'WAN', 'Abuja', 'Nigeria', 923770, 103912489),
('Togo', 'RT', 'Lome', 'Togo', 56790, 4570530),
('Botswana', 'RB', 'Gaborone', 'Botswana', 600370, 1477630),
('South Africa', 'RSA', 'Pretoria', 'South Africa', 1219912, 41743459),
('Zimbabwe', 'ZW', 'Harare', 'Zimbabwe', 390580, 11271314),
('Cote dIvoire', 'CI', 'Yamoussoukro', 'Cote dIvoire', 322460, 14762445),
('Ghana', 'GH', 'Accra', 'Ghana', 238540, 17698271),
('Burundi', 'BI', 'Bujumbura', 'Burundi', 27830, 5943057),
('Rwanda', 'RWA', 'Kigali', 'Rwanda', 26340, 6853359),
('Tanzania', 'EAT', 'Dar es Salaam', 'Daressalam', 945090, 29058470),
('Cameroon', 'CAM', 'Yaounde', 'Centre', 475440, 14261557),
('Central African Republic', 'RCA', 'Bangui', 'Central African Republic', 622980, 3274426),
('Chad', 'TCH', 'NDjamena', 'Chad', 1284000, 6976845),
('Equatorial Guinea', 'GQ', 'Malabo', 'Equatorial Guinea', 28050, 431282),
('Gabon', 'G', 'Libreville', 'Gabon', 267670, 1172798),
('Cape Verde', 'CV', 'Praia', 'Cape Verde', 4030, 449066),
('Sudan', 'SUD', 'Khartoum', 'al Khartum', 2505810, 31547543),
('Comoros', 'COM', 'Moroni', 'Comoros', 2170, 569237),
('Guinea', 'RG', 'Conakry', 'Guinea', 245860, 7411981),
('Liberia', 'LB', 'Monrovia', 'Liberia', 111370, 2109789),
('Djibouti', 'DJI', 'Djibouti', 'Djibouti', 22000, 427642),
('Eritrea', 'ER', 'Asmara', 'Eritrea', 121320, 3427883),
('Ethiopia', 'ETH', 'Addis Ababa', 'Ethiopia', 1127127, 57171662),
('Somalia', 'SP', 'Mogadishu', 'Somalia', 637660, 9639151),
('Kenya', 'EAK', 'Nairobi', 'Nairobi', 582650, 28176686),
('Gambia', 'WAG', 'Banjul', 'Gambia', 11300, 1204984),
('Senegal', 'SN', 'Dakar', 'Dakar', 196190, 9092749),
('Guinea-Bissau', 'GNB', 'Bissau', 'Guinea-Bissau', 36120, 1151330),
('Sierra Leone', 'WAL', 'Freetown', 'Sierra Leone', 71740, 4793121),
('Uganda', 'EAU', 'Kampala', 'Uganda', 236040, 20158176),
('Lesotho', 'LS', 'Maseru', 'Lesotho', 30350, 1970781),
('Madagascar', 'RM', 'Antananarivo', 'Antananarivo', 587040, 13670507),
('Malawi', 'MW', 'Lilongwe', 'Malawi', 118480, 9452844),
('Mozambique', 'MOC', 'Maputo', 'Maputo (munic.)', 801590, 17877927),
('Mauritius', 'MS', 'Port Louis', 'Mauritius', 1860, 1140256),
('Swaziland', 'SD', 'Mbabane', 'Swaziland', 17360, 998730),
('Sao Tome and Principe', 'STP', 'Sao Tome', 'Sao Tome and Principe', 960, 144128),
('Seychelles', 'SY', 'Victoria', 'Seychelles', 455, 77575);

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
(1, 'Abordaje Poblacional', '2017-02-02', 1, 0);

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

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `etiqueta`
--

CREATE TABLE `etiqueta` (
  `idEtiqueta` int(11) NOT NULL,
  `nombreEtiqueta` varchar(45) NOT NULL,
  `descEtiqueta` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
(1, 'Cuantos meses de embarazo?', 'jfdejjfj', 0, 8, 2, NULL),
(2, 'Pregunta', 'Descrip', 0, 8, 1, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `province`
--

CREATE TABLE `province` (
  `Name` varchar(32) COLLATE latin1_general_ci NOT NULL,
  `Country` varchar(4) COLLATE latin1_general_ci NOT NULL,
  `Population` int(11) DEFAULT NULL,
  `Area` int(11) DEFAULT NULL,
  `Capital` varchar(35) COLLATE latin1_general_ci DEFAULT NULL,
  `CapProv` varchar(32) COLLATE latin1_general_ci DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Volcado de datos para la tabla `province`
--

INSERT INTO `province` (`Name`, `Country`, `Population`, `Area`, `Capital`, `CapProv`) VALUES
('Albania', 'AL', 3249136, 28750, 'Tirane', 'Albania'),
('Greece', 'GR', 10538594, 131940, 'Athens', 'Greece'),
('Macedonia', 'MK', 2104035, 25333, 'Skopje', 'Macedonia'),
('Serbia and Montenegro', 'YU', 10614558, 102350, 'Belgrade', 'Serbia and Montenegro'),
('Andorra', 'AND', 72766, 450, 'Andorra la Vella', 'Andorra'),
('Liechtenstein', 'FL', 31122, 160, 'Vaduz', 'Liechtenstein'),
('Slovakia', 'SK', 5374362, 48845, 'Bratislava', 'Slovakia'),
('Slovenia', 'SLO', 1951443, 20256, 'Ljubljana', 'Slovenia'),
('Belarus', 'BY', 10415973, 207600, 'Minsk', 'Belarus'),
('Latvia', 'LV', 2468982, 64100, 'Riga', 'Latvia'),
('Lithuania', 'LT', 3646041, 65200, 'Vilnius', 'Lithuania'),
('Luxembourg', 'B', 234664, 4441, 'Arlon', 'Luxembourg'),
('Luxembourg', 'L', 415870, 2586, 'Luxembourg', 'Luxembourg'),
('Bosnia and Herzegovina', 'BIH', 2656240, 51233, 'Sarajevo', 'Bosnia and Herzegovina'),
('Croatia', 'HR', 5004112, 56538, 'Zagreb', 'Croatia'),
('Bulgaria', 'BG', 8612757, 110910, 'Sofia', 'Bulgaria'),
('Denmark', 'DK', 5249632, 43070, 'Copenhagen', 'Denmark'),
('Estonia', 'EW', 1459428, 45100, 'Tallinn', 'Estonia'),
('Monaco', 'MC', 31719, 2, 'Monaco', 'Monaco'),
('Holy See', 'V', 840, 0, 'Vatican City', 'Holy See'),
('Iceland', 'IS', 270292, 103000, 'Reykjavik', 'Iceland'),
('Ireland', 'IRL', 3566833, 70280, 'Dublin', 'Ireland'),
('San Marino', 'RSM', 24521, 60, 'San Marino', 'San Marino'),
('Malta', 'M', 375576, 320, 'Valletta', 'Malta'),
('Moldova', 'MD', 4463847, 33700, 'Chisinau', 'Moldova'),
('Afghanistan', 'AFG', 22664136, 647500, 'Kabul', 'Afghanistan'),
('Pakistan', 'PK', 129275660, 803940, 'Islamabad', 'Pakistan'),
('Armenia', 'ARM', 3463574, 29800, 'Yerevan', 'Armenia'),
('Georgia', 'GE', 5219810, 69700, 'Tbilisi', 'Georgia'),
('Georgia', 'USA', 7486242, 152576, 'Atlanta', 'Georgia'),
('Azerbaijan', 'AZ', 7676953, 86600, 'Baku', 'Azerbaijan'),
('Bahrain', 'BRN', 590042, 620, 'Manama', 'Bahrain'),
('Bangladesh', 'BD', 123062800, 144000, 'Dhaka', 'Bangladesh'),
('Bhutan', 'BHT', 1822625, 47000, 'Thimphu', 'Bhutan'),
('Brunei', 'BRU', 299939, 5770, 'Bandar Seri Begawan', 'Brunei'),
('Laos', 'LAO', 4975772, 236800, 'Vientiane', 'Laos'),
('Thailand', 'THA', 58851357, 514000, 'Bangkok', 'Thailand'),
('Cambodia', 'K', 10861218, 181040, 'Phnom Penh', 'Cambodia'),
('Vietnam', 'VN', 73976973, 329560, 'Hanoi', 'Vietnam'),
('North Korea', 'NOK', 23904124, 120540, 'Pyongyang', 'North Korea'),
('Kyrgyzstan', 'KGZ', 4529648, 198500, 'Bishkek', 'Kyrgyzstan'),
('Mongolia', 'MNG', 2496617, 1565000, 'Ulaanbaatar', 'Mongolia'),
('Nepal', 'NEP', 22094033, 140800, 'Kathmandu', 'Nepal'),
('Cocos Islands', 'AUS', 600, 14, 'Bantam Village', 'Cocos Islands'),
('Cyprus', 'CY', 744609, 9250, 'Nicosia', 'Cyprus'),
('Indonesia', 'RI', 206611600, 1919440, 'Jakarta', 'Indonesia'),
('Papua New Guinea', 'PNG', 4394537, 461690, 'Port Moresby', 'Papua New Guinea'),
('Jordan', 'JOR', 4212152, 89213, 'Amman', 'Jordan'),
('Kuwait', 'KWT', 1950047, 17820, 'Kuwait', 'Kuwait'),
('Saudi Arabia', 'SA', 19409058, 1960582, 'Riyadh', 'Saudi Arabia'),
('Syria', 'SYR', 15608648, 185180, 'Damascus', 'Syria'),
('Lebanon', 'RL', 3776317, 10400, 'Beirut', 'Lebanon'),
('South Korea', 'ROK', 45482291, 98480, 'Seoul', 'South Korea'),
('Maldives', 'MV', 270758, 300, 'Male', 'Maldives'),
('Oman', 'OM', 2186548, 212460, 'Muscat', 'Oman'),
('United Arab Emirates', 'UAE', 3057337, 75581, 'Abu Dhabi', 'United Arab Emirates'),
('Yemen', 'YE', 13483178, 527970, 'Sanaa', 'Yemen'),
('Philippines', 'RP', 74480848, 300000, 'Manila', 'Philippines'),
('Qatar', 'Q', 547761, 11000, 'Doha', 'Qatar'),
('Singapore', 'SGP', 3396924, 633, 'Singapore', 'Singapore'),
('Sri Lanka', 'CL', 18553074, 65610, 'Colombo', 'Sri Lanka'),
('Taiwan', 'RC', 21465881, 35980, 'Taipei', 'Taiwan'),
('Antigua and Barbuda', 'AG', 65647, 440, 'Saint Johns', 'Antigua and Barbuda'),
('Bahamas', 'BS', 259367, 13940, 'Nassau', 'Bahamas'),
('Barbados', 'BDS', 257030, 430, 'Bridgetown', 'Barbados'),
('Belize', 'BZ', 219296, 22960, 'Belmopan', 'Belize'),
('Guatemala', 'GCA', 11277614, 108890, 'Guatemala City', 'Guatemala'),
('Nicaragua', 'NIC', 4272352, 129494, 'Managua', 'Nicaragua'),
('Panama', 'PA', 1168500, 11887, 'Panama City', 'Panama'),
('Dominica', 'WD', 82926, 750, 'Roseau', 'Dominica'),
('Dominican Republic', 'DOM', 8088881, 48730, 'Santo Domingo', 'Dominican Republic'),
('Haiti', 'RH', 6731539, 27750, 'Port-au-Prince', 'Haiti'),
('El Salvador', 'ES', 5828987, 21040, 'San Salvador', 'El Salvador'),
('Grenada', 'WG', 94961, 340, 'Saint Georges', 'Grenada'),
('Jamaica', 'JA', 2595275, 10990, 'Kingston', 'Jamaica'),
('Saint Kitts and Nevis', 'KN', 41369, 269, 'Basseterre', 'Saint Kitts and Nevis'),
('Saint Lucia', 'WL', 157862, 620, 'Castries', 'Saint Lucia'),
('Saint Vincent and the Grenadines', 'WV', 118344, 340, 'Kingstown', 'Saint Vincent and the Grenadines'),
('Trinidad and Tobago', 'TT', 1272385, 5130, 'Port-of-Spain', 'Trinidad and Tobago'),
('Fiji', 'FJI', 782381, 18270, 'Suva', 'Fiji'),
('Kiribati', 'KIR', 80919, 717, 'Tarawa', 'Kiribati'),
('Marshall Islands', 'MH', 58363, 181, 'Majuro', 'Marshall Islands'),
('Micronesia', 'FSM', 125377, 702, 'Kolonia', 'Micronesia'),
('Nauru', 'NAU', 10273, 21, 'Yaren', 'Nauru'),
('New Caledonia', 'NCA', 187784, 19060, 'Noumea', 'New Caledonia'),
('New Zealand', 'NZ', 3547983, 268680, 'Wellington', 'New Zealand'),
('Norfolk Island', 'AUS', 1980, 35, 'Kingston', 'Norfolk Island'),
('Palau', 'PAL', 16952, 458, 'Koror', 'Palau'),
('Solomon Islands', 'SLB', 412902, 28450, 'Honiara', 'Solomon Islands'),
('Tonga', 'TO', 106466, 748, 'Nukualofa', 'Tonga'),
('Tuvalu', 'TUV', 10146, 26, 'Funafuti', 'Tuvalu'),
('Vanuatu', 'VU', 177504, 14760, 'Port-Vila', 'Vanuatu'),
('Western Samoa', 'WS', 214384, 2860, 'Apia', 'Western Samoa'),
('Bolivia', 'BOL', 7165257, 1098580, 'La Paz', 'Bolivia'),
('Chile', 'RCH', 14333258, 756950, 'Santiago', 'Chile'),
('Paraguay', 'PY', 5504146, 406750, 'Asuncion', 'Paraguay'),
('Uruguay', 'ROU', 3238952, 176220, 'Montevideo', 'Uruguay'),
('French Guiana', 'FGU', 151187, 91000, 'Cayenne', 'French Guiana'),
('Guyana', 'GUY', 712091, 214970, 'Georgetown', 'Guyana'),
('Suriname', 'SME', 436418, 163270, 'Paramaribo', 'Suriname'),
('Ecuador', 'EC', 11466291, 283560, 'Quito', 'Ecuador'),
('Algeria', 'DZ', 29183032, 2381740, 'Algiers', 'Algeria'),
('Libya', 'LAR', 5445436, 1759540, 'Tripoli', 'Libya'),
('Mali', 'RMM', 9653261, 1240000, 'Bamako', 'Mali'),
('Mauritania', 'RIM', 2336048, 1030700, 'Nouakchott', 'Mauritania'),
('Morocco', 'MA', 29779156, 446550, 'Rabat', 'Morocco'),
('Niger', 'RN', 9113001, 1267000, 'Niamey', 'Niger'),
('Tunisia', 'TN', 9019687, 163610, 'Tunis', 'Tunisia'),
('Western Sahara', 'WSA', 222631, 266000, 'El Alaiun', 'Western Sahara'),
('Congo', 'RCB', 2527841, 342000, 'Brazzaville', 'Congo'),
('Namibia', 'NAM', 1677243, 825418, 'Windhoek', 'Namibia'),
('Zaire', 'ANG', 192000, 40130, 'Mbanza Congo', 'Zaire'),
('Benin', 'BEN', 5709529, 112620, 'Porto-Novo', 'Benin'),
('Burkina Faso', 'BF', 10623323, 274200, 'Ouagadougou', 'Burkina Faso'),
('Nigeria', 'WAN', 103912489, 923770, 'Abuja', 'Nigeria'),
('Togo', 'RT', 4570530, 56790, 'Lome', 'Togo'),
('Botswana', 'RB', 1477630, 600370, 'Gaborone', 'Botswana'),
('South Africa', 'RSA', 41743459, 1219912, 'Pretoria', 'South Africa'),
('Zimbabwe', 'ZW', 11271314, 390580, 'Harare', 'Zimbabwe'),
('Cote dIvoire', 'CI', 14762445, 322460, 'Yamoussoukro', 'Cote dIvoire'),
('Ghana', 'GH', 17698271, 238540, 'Accra', 'Ghana'),
('Burundi', 'BI', 5943057, 27830, 'Bujumbura', 'Burundi'),
('Rwanda', 'RWA', 6853359, 26340, 'Kigali', 'Rwanda'),
('Central African Republic', 'RCA', 3274426, 622980, 'Bangui', 'Central African Republic'),
('Chad', 'TCH', 6976845, 1284000, 'NDjamena', 'Chad'),
('Equatorial Guinea', 'GQ', 431282, 28050, 'Malabo', 'Equatorial Guinea'),
('Gabon', 'G', 1172798, 267670, 'Libreville', 'Gabon'),
('Cape Verde', 'CV', 449066, 4030, 'Praia', 'Cape Verde'),
('Comoros', 'COM', 569237, 2170, 'Moroni', 'Comoros'),
('Guinea', 'RG', 7411981, 245860, 'Conakry', 'Guinea'),
('Liberia', 'LB', 2109789, 111370, 'Monrovia', 'Liberia'),
('Djibouti', 'DJI', 427642, 22000, 'Djibouti', 'Djibouti'),
('Eritrea', 'ER', 3427883, 121320, 'Asmara', 'Eritrea'),
('Ethiopia', 'ETH', 57171662, 1127127, 'Addis Ababa', 'Ethiopia'),
('Somalia', 'SP', 9639151, 637660, 'Mogadishu', 'Somalia'),
('Gambia', 'WAG', 1204984, 11300, 'Banjul', 'Gambia'),
('Guinea-Bissau', 'GNB', 1151330, 36120, 'Bissau', 'Guinea-Bissau'),
('Sierra Leone', 'WAL', 4793121, 71740, 'Freetown', 'Sierra Leone'),
('Uganda', 'EAU', 20158176, 236040, 'Kampala', 'Uganda'),
('Lesotho', 'LS', 1970781, 30350, 'Maseru', 'Lesotho'),
('Malawi', 'MW', 9452844, 118480, 'Lilongwe', 'Malawi'),
('Mauritius', 'MS', 1140256, 1860, 'Port Louis', 'Mauritius'),
('Swaziland', 'SD', 998730, 17360, 'Mbabane', 'Swaziland'),
('Sao Tome and Principe', 'STP', 144128, 960, 'Sao Tome', 'Sao Tome and Principe'),
('Seychelles', 'SY', 77575, 455, 'Victoria', 'Seychelles'),
('Madrid', 'E', 5034548, 8028, 'Madrid', 'Madrid'),
('Vienna', 'A', 1583000, 415, 'Vienna', 'Vienna'),
('Berlin', 'D', 3472009, 889, 'Berlin', 'Berlin'),
('Ankara', 'TR', 3236626, 25706, 'Ankara', 'Ankara'),
('Oslo', 'N', 449337, NULL, 'Oslo', 'Oslo'),
('Stockholm', 'S', 1654511, 6488, 'Stockholm', 'Stockholm'),
('Lisbon', 'P', 2063800, 2761, NULL, NULL),
('Tehran', 'IR', 9982309, 29993, 'Tehran', 'Tehran'),
('Baghdad', 'IRQ', 4648609, 734, 'Baghdad', 'Baghdad'),
('Tokyo', 'J', 11773605, 2164, 'Tokyo', 'Tokyo'),
('Buenos Aires', 'RA', 12594974, 307571, 'La Plata', 'Buenos Aires'),
('La Paz', 'HCA', 117400, 2331, 'La Paz', 'La Paz'),
('Lima', 'PE', 6941672, 34801, 'Lima', 'Lima'),
('Luanda', 'ANG', 1629000, 2418, 'Luanda', 'Luanda'),
('Nairobi', 'EAK', 1346000, 684, 'Nairobi', 'Nairobi'),
('Dakar', 'SN', 1490500, 550, 'Dakar', 'Dakar'),
('Victoria', 'AUS', 4502200, 227600, 'Melbourne', 'Victoria'),
('GR', 'CH', 185063, 7105, 'Chur', 'GR'),
('GE', 'CH', 395466, 282, 'Geneva', 'GE'),
('AG', 'CH', 528887, 1403, 'Aarau', 'AG'),
('BS', 'CH', 195759, 37, 'Basel', 'BS'),
('Valencia', 'E', 3909047, 23255, 'Valencia', 'Valencia'),
('Merida', 'YV', 680503, 11300, 'Merida', 'Merida'),
('Hamburg', 'D', 1705872, 755, 'Hamburg', 'Hamburg'),
('Szolnok', 'H', 420900, 5608, 'Szolnok', 'Szolnok'),
('Veszprem', 'H', 378300, 4689, 'Veszprem', 'Veszprem'),
('Botosani', 'RO', 468000, 4965, 'Botosani', 'Botosani'),
('Calarasi', 'RO', 351000, 5075, 'Calarasi', 'Calarasi'),
('Giurgiu', 'RO', 325000, 3810, 'Giurgiu', 'Giurgiu'),
('Suceava', 'RO', 699000, 8555, 'Suceava', 'Suceava'),
('Tulcea', 'RO', 275000, 8430, 'Tulcea', 'Tulcea'),
('Vaslui', 'RO', 468000, 5297, 'Vaslui', 'Vaslui'),
('Adana', 'TR', 1934907, 17253, 'Adana', 'Adana'),
('Istanbul', 'TR', 7309190, 5712, 'Istanbul', 'Istanbul'),
('Izmir', 'TR', 2694770, 11973, 'Izmir', 'Izmir'),
('Afyon', 'TR', 739223, 14230, 'Afyon', 'Afyon'),
('Agri', 'TR', 437093, 11376, 'Agri', 'Agri'),
('Aksaray', 'TR', 326399, 7626, 'Aksaray', 'Aksaray'),
('Amasya', 'TR', 357191, 5520, 'Amasya', 'Amasya'),
('Artvin', 'TR', 212833, 7436, 'Artvin', 'Artvin'),
('Bayburt', 'TR', 107330, 3652, 'Bayburt', 'Bayburt'),
('Bilecik', 'TR', 175526, 4307, 'Bilecik', 'Bilecik'),
('Bingol', 'TR', 250966, 8125, 'Bingol', 'Bingol'),
('Bitlis', 'TR', 330115, 6707, 'Bitlis', 'Bitlis'),
('Bolu', 'TR', 536869, 11051, 'Bolu', 'Bolu'),
('Burdur', 'TR', 254899, 6887, 'Burdur', 'Burdur'),
('Canakkale', 'TR', 432263, 9737, 'Canakkale', 'Canakkale'),
('Cankiri', 'TR', 279129, 8454, 'Cankiri', 'Cankiri'),
('Corum', 'TR', 609863, 12820, 'Corum', 'Corum'),
('Erzincan', 'TR', 299251, 11903, 'Erzincan', 'Erzincan'),
('Giresun', 'TR', 499087, 6934, 'Giresun', 'Giresun'),
('Gumushane', 'TR', 169375, 6575, 'Gumushane', 'Gumushane'),
('Hakkari', 'TR', 172479, 7121, 'Hakkari', 'Hakkari'),
('Karaman', 'TR', 217536, 9163, 'Karaman', 'Karaman'),
('Kars', 'TR', 662155, 18557, 'Kars', 'Kars'),
('Kastamonu', 'TR', 423611, 13108, 'Kastamonu', 'Kastamonu'),
('Kirklareli', 'TR', 309512, 6550, 'Kirklareli', 'Kirklareli'),
('Kirsehir', 'TR', 256862, 6570, 'Kirsehir', 'Kirsehir'),
('Mardin', 'TR', 557727, 8891, 'Mardin', 'Mardin'),
('Mugla', 'TR', 562809, 13338, 'Mugla', 'Mugla'),
('Mus', 'TR', 376543, 8196, 'Mus', 'Mus'),
('Nevsehir', 'TR', 289509, 5467, 'Nevsehir', 'Nevsehir'),
('Nigde', 'TR', 305861, 7312, 'Nigde', 'Nigde'),
('Rize', 'TR', 348776, 3920, 'Rize', 'Rize'),
('Sakarya', 'TR', 683061, 4817, 'Sakarya', 'Sakarya'),
('Siirt', 'TR', 243435, 5406, 'Siirt', 'Siirt'),
('Sinop', 'TR', 265153, 5862, 'Sinop', 'Sinop'),
('Sirnak', 'TR', 262006, 7172, 'Sirnak', 'Sirnak'),
('Tekirdag', 'TR', 468842, 6218, 'Tekirdag', 'Tekirdag'),
('Tokat', 'TR', 719251, 9958, 'Tokat', 'Tokat'),
('Tunceli', 'TR', 133143, 7774, 'Tunceli', 'Tunceli'),
('Yozgat', 'TR', 579150, 14123, 'Yozgat', 'Yozgat'),
('Kalmar', 'S', 241883, 11170, 'Kalmar', 'Kalmar'),
('Kristianstad', 'S', 291468, 6087, 'Kristianstad', 'Kristianstad'),
('Durham', 'GB', 604300, 2436, 'Durham', 'Durham'),
('Bridgend', 'GB', 130900, 246, 'Bridgend', 'Bridgend'),
('Wrexham', 'GB', 123500, 499, 'Wrexham', 'Wrexham'),
('Bushehr', 'IR', 694252, 27653, 'Bushehr', 'Bushehr'),
('Semnan', 'IR', 458125, 90905, 'Semnan', 'Semnan'),
('Mandalay', 'MYA', 4577800, 37024, 'Mandalay', 'Mandalay'),
('Magway', 'MYA', 3243200, 44820, 'Magway', 'Magway'),
('Sagaing', 'MYA', 3862200, 94625, 'Sagaing', 'Sagaing'),
('Pondicherry', 'IND', 807785, 492, 'Pondicherry', 'Pondicherry'),
('Zhambyl', 'KAZ', 1039600, 144300, 'Zhambyl', 'Zhambyl'),
('Zhezkazghan', 'KAZ', 484400, 312600, 'Zhezkazghan', 'Zhezkazghan'),
('Haifa', 'IL', 602800, 854, 'Haifa', 'Haifa'),
('Tel Aviv', 'IL', 1029700, 170, 'Tel Aviv', 'Tel Aviv'),
('Dahuk', 'IRQ', 292931, 6553, 'Dahuk', 'Dahuk'),
('Fukuoka', 'J', 4933393, 4961, 'Fukuoka', 'Fukuoka'),
('Aomori', 'J', 1481663, 9619, 'Aomori', 'Aomori'),
('Akita', 'J', 1213667, 11612, 'Akita', 'Akita'),
('Yamagata', 'J', 1256958, 9327, 'Yamagata', 'Yamagata'),
('Fukushima', 'J', 2133592, 13784, 'Fukushima', 'Fukushima'),
('Niigata', 'J', 2488364, 12579, 'Niigata', 'Niigata'),
('Toyama', 'J', 1123125, 4252, 'Toyama', 'Toyama'),
('Fukui', 'J', 826996, 4192, 'Fukui', 'Fukui'),
('Nagano', 'J', 2193984, 13585, 'Nagano', 'Nagano'),
('Gifu', 'J', 2100315, 10596, 'Gifu', 'Gifu'),
('Shizuoka', 'J', 3737689, 7773, 'Shizuoka', 'Shizuoka'),
('Nara', 'J', 1430862, 3692, 'Nara', 'Nara'),
('Wakayama', 'J', 1080435, 4725, 'Wakayama', 'Wakayama'),
('Tottori', 'J', 614929, 3494, 'Tottori', 'Tottori'),
('Okayama', 'J', 1950750, 7090, 'Okayama', 'Okayama'),
('Yamaguchi', 'J', 1555543, 6106, 'Yamaguchi', 'Yamaguchi'),
('Tokushima', 'J', 832427, 4145, 'Tokushima', 'Tokushima'),
('Kochi', 'J', 816704, 7107, 'Kochi', 'Kochi'),
('Saga', 'J', 884316, 2433, 'Saga', 'Saga'),
('Nagasaki', 'J', 1544934, 4112, 'Nagasaki', 'Nagasaki'),
('Kumamoto', 'J', 1859793, 7408, 'Kumamoto', 'Kumamoto'),
('Oita', 'J', 1231306, 6338, 'Oita', 'Oita'),
('Miyazaki', 'J', 1175819, 7735, 'Miyazaki', 'Miyazaki'),
('Kagoshima', 'J', 1794224, 9166, 'Kagoshima', 'Kagoshima'),
('Durango', 'MEX', 1431748, 119648, 'Durango', 'Durango'),
('Guanajuato', 'MEX', 4406568, 30589, 'Guanajuato', 'Guanajuato'),
('Tlaxcala', 'MEX', 883924, 3914, 'Tlaxcala', 'Tlaxcala'),
('Trujillo', 'YV', 562752, 7400, 'Trujillo', 'Trujillo'),
('Ocotepeque', 'HCA', 81800, 1680, 'Ocotepeque', 'Ocotepeque'),
('Yoro', 'HCA', 370700, 7939, 'Yoro', 'Yoro'),
('Arauca', 'CO', 89972, 23818, 'Arauca', 'Arauca'),
('Cordoba', 'CO', 1013247, 25020, 'Monteria', 'Cordoba'),
('Cordoba', 'RA', 2766683, 165321, 'Cordoba', 'Cordoba'),
('Sucre', 'CO', 561649, 10917, 'Sincelejo', 'Sucre'),
('Sucre', 'YV', 781756, 11800, 'Cumana', 'Sucre'),
('Sao Paulo', 'BR', 34055715, 248808, 'Sao Paulo', 'Sao Paulo'),
('Callao', 'PE', 701022, 146, 'Callao', 'Callao'),
('Huancavelica', 'PE', 413136, 22131, 'Huancavelica', 'Huancavelica'),
('Moquegua', 'PE', 137747, 15733, 'Moquegua', 'Moquegua'),
('Tumbes', 'PE', 173616, 4669, 'Tumbes', 'Tumbes'),
('Cabinda', 'ANG', 163000, 7270, 'Cabinda', 'Cabinda'),
('Uige', 'ANG', 837000, 58698, 'Uige', 'Uige'),
('Malanje', 'ANG', 892000, 87246, 'Malanje', 'Malanje'),
('Benguela', 'ANG', 644000, 31788, 'Benguela', 'Benguela'),
('Huambo', 'ANG', 1524000, 34274, 'Huambo', 'Huambo'),
('Bie', 'ANG', 1125000, 70314, 'Bie', 'Bie'),
('Namibe', 'ANG', 115000, 58137, 'Namibe', 'Namibe'),
('Bandundu', 'ZRE', 4644758, 295658, 'Bandundu', 'Bandundu'),
('Lindi', 'EAT', 646600, 66046, 'Lindi', 'Lindi'),
('Iringa', 'EAT', 1208900, 58864, 'Iringa', 'Iringa'),
('Singida', 'EAT', 791800, 49341, 'Singida', 'Singida'),
('Tabora', 'EAT', 1036300, 76151, 'Tabora', 'Tabora'),
('Diourbel', 'SN', 619700, 4359, 'Diourbel', 'Diourbel'),
('Fatick', 'SN', 476000, 7935, 'Fatick', 'Fatick'),
('Kolda', 'SN', 606800, 21011, 'Kolda', 'Kolda'),
('Louga', 'SN', 490400, 29188, 'Louga', 'Louga'),
('Tambacounda', 'SN', 370000, 59602, 'Tambacounda', 'Tambacounda'),
('Inhambane', 'MOC', 1157000, 68615, 'Inhambane', 'Inhambane'),
('Shan', 'MYA', 3716800, 155801, 'Taunggyi', 'Shan'),
('Rakhine', 'MYA', 2045600, 36778, 'Akyab', 'Rakhine'),
('Mon', 'MYA', 1680200, 12297, 'Moulmein', 'Mon'),
('Beja', 'P', 167900, 10225, NULL, NULL),
('Burgenland', 'A', 273000, 3965, 'Eisenstadt', 'Burgenland'),
('Carinthia', 'A', 559000, 9533, 'Klagenfurt', 'Carinthia'),
('Vorarlberg', 'A', 341000, 2601, 'Bregenz', 'Vorarlberg'),
('Upper Austria', 'A', 1373000, 11979, 'Linz', 'Upper Austria'),
('Tyrol', 'A', 649000, 12647, 'Innsbruck', 'Tyrol'),
('Styria', 'A', 1203000, 16386, 'Graz', 'Styria'),
('Salzburg', 'A', 501000, 7154, 'Salzburg', 'Salzburg'),
('Lower Austria', 'A', 1507000, 19170, 'St. Polten', 'Lower Austria'),
('Antwerp', 'B', 1610695, 2867, 'Antwerp', 'Antwerp'),
('Brabant', 'B', 2253794, 3358, 'Brussels', 'Brabant'),
('East Flanders', 'B', 1340056, 2982, 'Ghent', 'East Flanders'),
('Hainaut', 'B', 1283252, 3787, 'Mons', 'Hainaut'),
('Liege', 'B', 1006081, 3862, 'Liege', 'Liege'),
('Limburg', 'B', 755593, 2422, 'Hasselt', 'Limburg'),
('Limburg', 'NL', 1130050, 2167, 'Maastricht', 'Limburg'),
('Namur', 'B', 426305, 3665, 'Namur', 'Namur'),
('West Flanders', 'B', 1111557, 3134, 'Brugge', 'West Flanders'),
('Jihocesky', 'CZ', 702000, 11345, 'Ceske Budejovice', 'Jihocesky'),
('Jihomoravsky', 'CZ', 2059000, 15028, 'Brno', 'Jihomoravsky'),
('Severocesky', 'CZ', 1190000, 7819, 'Usti nad Labem', 'Severocesky'),
('Severomoravsky', 'CZ', 1976000, 11067, 'Ostrava', 'Severomoravsky'),
('Praha', 'CZ', 2329000, 11490, 'Prague', 'Praha'),
('Vychodocesky', 'CZ', 1240000, 11240, 'Hradec Kralove', 'Vychodocesky'),
('Zapadocesky', 'CZ', 869000, 10875, 'Plzen', 'Zapadocesky'),
('Aland', 'SF', 23000, NULL, 'Mariehamn', 'Aland'),
('Haeme', 'SF', 662000, NULL, 'Haemeenlinna', 'Haeme'),
('Kuopio', 'SF', 252000, NULL, 'Kuopio', 'Kuopio'),
('Kymi', 'SF', 345000, NULL, 'Kotka', 'Kymi'),
('Lappia', 'SF', 195000, NULL, 'Rovaniemi', 'Lappia'),
('Mikkeli', 'SF', 209000, NULL, 'Mikkeli', 'Mikkeli'),
('Suomi', 'SF', 242000, NULL, 'Jyvaeskylae', 'Suomi'),
('Pohjols-Karjala', 'SF', 177000, NULL, 'Joensuu', 'Pohjols-Karjala'),
('Oulu', 'SF', 415000, NULL, 'Oulu', 'Oulu'),
('Turku-Pori', 'SF', 702000, NULL, 'Turku', 'Turku-Pori'),
('Uusimaa', 'SF', 1119000, NULL, 'Helsinki', 'Uusimaa'),
('Vaasa', 'SF', 430000, NULL, 'Vaasa', 'Vaasa'),
('Alsace', 'F', 1624000, 8280, 'Strasbourg', 'Alsace'),
('Aquitaine', 'F', 2796000, 41309, 'Bordeaux', 'Aquitaine'),
('Auvergne', 'F', 1321000, 26013, 'Clermont Ferrand', 'Auvergne'),
('Basse Normandie', 'F', 1391000, 17589, 'Caen', 'Basse Normandie'),
('Bretagne', 'F', 2796000, 27209, 'Rennes', 'Bretagne'),
('Bourgogne', 'F', 1609000, 31582, 'Dijon', 'Bourgogne'),
('Centre', 'F', 2371000, 39151, 'Orleans', 'Centre'),
('Centre', 'CAM', 1651600, 68926, 'Yaounde', 'Centre'),
('Champagne Ardenne', 'F', 1348000, 25606, 'Chalons sur Marne', 'Champagne Ardenne'),
('Corse', 'F', 250000, 8680, 'Ajaccio', 'Corse'),
('Franche Comte', 'F', 1097000, 16202, 'Besancon', 'Franche Comte'),
('Haute Normandie', 'F', 1737000, 12318, 'Rouen', 'Haute Normandie'),
('Ile de France', 'F', 10660000, 12011, 'Paris', 'Ile de France'),
('Languedoc Rousillon', 'F', 2115000, 27376, 'Montpellier', 'Languedoc Rousillon'),
('Limousin', 'F', 723000, 16942, 'Limoges', 'Limousin'),
('Lorraine', 'F', 2306000, 23547, 'Metz', 'Lorraine'),
('Midi Pyrenees', 'F', 2431000, 45349, 'Toulouse', 'Midi Pyrenees'),
('Nord Pas de Calais', 'F', 3965000, 12413, 'Lille', 'Nord Pas de Calais'),
('Pays de la Loire', 'F', 3059000, 32082, 'Nantes', 'Pays de la Loire'),
('Picardie', 'F', 1811000, 19399, 'Amiens', 'Picardie'),
('Poitou Charentes', 'F', 1595000, 25809, 'Poitiers', 'Poitou Charentes'),
('Provence Cote dAzur', 'F', 4258000, 31400, 'Marseille', 'Provence Cote dAzur'),
('Rhone Alpes', 'F', 5351000, 43698, 'Lyon', 'Rhone Alpes'),
('Baden Wurttemberg', 'D', 10272069, 35742, 'Stuttgart', 'Baden Wurttemberg'),
('Bayern', 'D', 11921944, 70546, 'Munich', 'Bayern'),
('Brandenburg', 'D', 2536747, 29480, 'Potsdam', 'Brandenburg'),
('Bremen', 'D', 680000, 404, 'Bremen', 'Bremen'),
('Hessen', 'D', 5980693, 21115, 'Wiesbaden', 'Hessen'),
('Mecklenburg Vorpommern', 'D', 1832298, 23170, 'Schwerin', 'Mecklenburg Vorpommern'),
('Niedersachsen', 'D', 7715363, 47609, 'Hannover', 'Niedersachsen'),
('Nordrhein Westfalen', 'D', 17816079, 34077, 'Dusseldorf', 'Nordrhein Westfalen'),
('Rheinland Pfalz', 'D', 3951573, 19851, 'Mainz', 'Rheinland Pfalz'),
('Saarland', 'D', 1084201, 2570, 'Saarbrucken', 'Saarland'),
('Sachsen', 'D', 4584345, 18412, 'Dresden', 'Sachsen'),
('Sachsen Anhalt', 'D', 2759213, 20446, 'Magdeburg', 'Sachsen Anhalt'),
('Schleswig Holstein', 'D', 2708392, 15738, 'Kiel', 'Schleswig Holstein'),
('Thuringen', 'D', 2517776, 16171, 'Erfurt', 'Thuringen'),
('Baranya', 'H', 417100, 4487, 'Pecs', 'Pecs (munic.)'),
('Bacs Kiskun', 'H', 540800, 8363, 'Kecskemet', 'Bacs Kiskun'),
('Bekes', 'H', 404000, 5632, 'Bekescaba', 'Bekes'),
('Borsod Abauj Zemplen', 'H', 749100, 7248, 'Miskolc', 'Miskolc (munic.)'),
('Csongrad', 'H', 437600, 4263, 'Hodmezovasarhely', 'Csongrad'),
('Fejer', 'H', 422500, 4374, 'Szekesfehervar', 'Fejer'),
('Gyor Sopron', 'H', 426800, 4012, 'Gyor', 'Gyor (munic.)'),
('Hajdu Bihar', 'H', 549700, 6212, 'Debrecen', 'Debrecen (munic.)'),
('Heves', 'H', 330200, 3637, 'Eger', 'Heves'),
('Komarom Esztergom', 'H', 312900, 2250, 'Tatabanya', 'Komarom Esztergom'),
('Nograd', 'H', 222700, 2544, 'Salgotarjan', 'Nograd'),
('Pest', 'H', 957900, 6394, 'Budapest', 'Budapest (munic.)'),
('Somogy', 'H', 340000, 6035, 'Kaposvar', 'Somogy'),
('Szabolcs Szatmar', 'H', 563500, 5938, 'Nyiregyhaza', 'Szabolcs Szatmar'),
('Tolna', 'H', 251000, 3702, 'Szekszard', 'Tolna'),
('Vas', 'H', 273900, 3337, 'Szombathely', 'Vas'),
('Zala', 'H', 302600, 3786, 'Zalaegerszeg', 'Zala'),
('Budapest (munic.)', 'H', 2008500, 525, 'Budapest', 'Budapest (munic.)'),
('Debrecen (munic.)', 'H', 217300, 446, 'Debrecen', 'Debrecen (munic.)'),
('Gyor (munic.)', 'H', 130600, 175, 'Gyor', 'Gyor (munic.)'),
('Miskolc (munic.)', 'H', 191000, 224, 'Miskolc', 'Miskolc (munic.)'),
('Pecs (munic.)', 'H', 171600, 113, 'Pecs', 'Pecs (munic.)'),
('Szeged (munic.)', 'H', 178500, 145, 'Szeged', 'Szeged (munic.)'),
('Piemonte', 'I', 4307000, 25399, 'Turin', 'Piemonte'),
('Valle dAosta', 'I', 118000, 3262, 'Aosta', 'Valle dAosta'),
('Lombardia', 'I', 8901000, 23857, 'Milan', 'Lombardia'),
('Trentino Alto Adige', 'I', 904000, 13618, 'Bolzano', 'Trentino Alto Adige'),
('Veneto', 'I', 4415000, 18364, 'Venice', 'Veneto'),
('Friuli Venezia Giulia', 'I', 1193000, 7845, 'Trieste', 'Friuli Venezia Giulia'),
('Liguria', 'I', 1663000, 5418, 'Genua', 'Liguria'),
('Emilia Romagna', 'I', 3924000, 22123, 'Bologna', 'Emilia Romagna'),
('Toscana', 'I', 3528000, 22992, 'Firenze', 'Toscana'),
('Umbria', 'I', 819000, 8456, 'Perugia', 'Umbria'),
('Marche', 'I', 1438000, 9693, 'Ancona', 'Marche'),
('Lazio', 'I', 5185000, 17203, 'Rome', 'Lazio'),
('Abruzzo', 'I', 1263000, 10794, 'LAquila', 'Abruzzo'),
('Molise', 'I', 332000, 4438, 'Campobasso', 'Molise'),
('Campania', 'I', 5709000, 13595, 'Napoli', 'Campania'),
('Puglia', 'I', 4066000, 19348, 'Bari', 'Puglia'),
('Basilicata', 'I', 611000, 9992, 'Potenza', 'Basilicata'),
('Calabria', 'I', 2080000, 15080, 'Catanzaro', 'Calabria'),
('Sicilia', 'I', 5025000, 25709, 'Palermo', 'Sicilia'),
('Sardegna', 'I', 1657000, 24090, 'Cagliari', 'Sardegna'),
('Groningen', 'NL', 557995, 2344, 'Groningen', 'Groningen'),
('Friesland', 'NL', 609579, 3361, 'Leeuwarden', 'Friesland'),
('Drenthe', 'NL', 454864, 2652, 'Assen', 'Drenthe'),
('Overijssel', 'NL', 1050389, 3337, 'Zwolle', 'Overijssel'),
('Flevoland', 'NL', 262325, 1425, 'Lelystad', 'Flevoland'),
('Gelderland', 'NL', 1864732, 4995, 'Arnhem', 'Gelderland'),
('Utrecht', 'NL', 1063460, 1356, 'Utrecht', 'Utrecht'),
('Noord Holland', 'NL', 2463611, 265978, 'Haarlem', 'Noord Holland'),
('Zuid Holland', 'NL', 3325064, 2859, 's Gravenhage', 'Zuid Holland'),
('Zeeland', 'NL', 365846, 1791, 'Middelburg', 'Zeeland'),
('Noord Brabant', 'NL', 2276207, 4938, 's Hertogenbosch', 'Noord Brabant'),
('Akershus', 'N', 393217, NULL, 'Oslo', 'Oslo'),
('Oestfold', 'N', 234941, NULL, 'Moss', 'Oestfold'),
('Hedmark', 'N', 186355, NULL, 'Hamar', 'Hedmark'),
('Oppland', 'N', 181791, NULL, 'Lillehammer', 'Oppland'),
('Buskerud', 'N', 219967, NULL, 'Drammen', 'Buskerud'),
('Vestfold', 'N', 191600, NULL, 'Toensberg', 'Vestfold'),
('Telemark', 'N', 162547, NULL, 'Skien', 'Telemark'),
('Aust Agder', 'N', 94688, NULL, 'Arendal', 'Aust Agder'),
('Vest Agder', 'N', 140232, NULL, 'Kristiansand', 'Vest Agder'),
('Rogaland', 'N', 323365, NULL, 'Stavanger', 'Rogaland'),
('Hordaland', 'N', 399702, NULL, 'Bergen', 'Hordaland'),
('Sogn og Fjordane', 'N', 106116, NULL, 'Hermannsverk', 'Sogn og Fjordane'),
('Moere og Romsdal', 'N', 237290, NULL, 'Molde', 'Moere og Romsdal'),
('Soer Trondelag', 'N', 246824, NULL, 'Trondheim', 'Soer Trondelag'),
('Nord Trondelag', 'N', 126692, NULL, 'Steinkjer', 'Nord Trondelag'),
('Nordland', 'N', 242268, NULL, 'Bodoe', 'Nordland'),
('Troms', 'N', 146736, NULL, 'Tromsoe', 'Troms'),
('Finnmark', 'N', 75667, NULL, 'Vadsoe', 'Finnmark'),
('Warszwaskie', 'PL', 2421000, 3788, 'Warsaw', 'Warszwaskie'),
('Bialskopodlaskie', 'PL', 306700, 5348, 'Biala Podlaska', 'Bialskopodlaskie'),
('Bialostockie', 'PL', 697000, 10055, 'Bialystok', 'Bialostockie'),
('Bielskie', 'PL', 911500, 3704, 'Bielsko Biala', 'Bielskie'),
('Bydgoskie', 'PL', 1120300, 10349, 'Bydgoszcz', 'Bydgoskie'),
('Chelmskie', 'PL', 248500, 3866, 'Chelm', 'Chelmskie'),
('Ciechanowskie', 'PL', 431400, 6362, 'Ciechanow', 'Ciechanowskie'),
('Czestochowskie', 'PL', 748000, 6182, 'Czestochowa', 'Czestochowskie'),
('Elblaskie', 'PL', 483200, 6103, 'Elblag', 'Elblaskie'),
('Gdanskie', 'PL', 1445000, 7394, 'Gdansk', 'Gdanskie'),
('Gorzowskie', 'PL', 505600, 8484, 'Gorzow Wielkopolskie', 'Gorzowskie'),
('Jeleniogorskie', 'PL', 519200, 4379, 'Jelenia Gora', 'Jeleniogorskie'),
('Kaliskie', 'PL', 715600, 6512, 'Kalisz', 'Kaliskie'),
('Katowickie', 'PL', 4013200, 6650, 'Katowice', 'Katowickie'),
('Kieleckie', 'PL', 1127700, 9211, 'Kielce', 'Kieleckie'),
('Koninskie', 'PL', 472400, 5139, 'Konin', 'Koninskie'),
('Koszalinskie', 'PL', 513700, 8470, 'Koszalin', 'Koszalinskie'),
('Krakowskie', 'PL', 1238100, 3254, 'Krakow', 'Krakowskie'),
('Krosnienskie', 'PL', 500700, 5702, 'Krosno', 'Krosnienskie'),
('Legnickie', 'PL', 521500, 4037, 'Legnica', 'Legnickie'),
('Leszczynskie', 'PL', 391500, 4154, 'Leszno', 'Leszczynskie'),
('Lubelskie', 'PL', 1022600, 6792, 'Lublin', 'Lubelskie'),
('Lomzynskie', 'PL', 349000, 6684, 'Lomza', 'Lomzynskie'),
('Lodzkie', 'PL', 1132400, 1523, 'Lodz', 'Lodzkie'),
('Nowosadeckie', 'PL', 709500, 5576, 'Nowy Sacz', 'Nowosadeckie'),
('Olsztynskie', 'PL', 761300, 12327, 'Olsztyn', 'Olsztynskie'),
('Opolskie', 'PL', 1023800, 8535, 'Opole', 'Opolskie'),
('Ostroleckie', 'PL', 400500, 6498, 'Ostroleka', 'Ostroleckie'),
('Pilskie', 'PL', 485700, 8205, 'Pila', 'Pilskie'),
('Piotrkowskie', 'PL', 644200, 6266, 'Piottrkow Trybunalski', 'Piotrkowskie'),
('Plockie', 'PL', 518600, 5117, 'Plock', 'Plockie'),
('Poznanskie', 'PL', 1344200, 8151, 'Poznan', 'Poznanskie'),
('Przemyskie', 'PL', 409600, 4437, 'Przemysl', 'Przemyskie'),
('Radomskie', 'PL', 755500, 7294, 'Radom', 'Radomskie'),
('Rzeszowskie', 'PL', 734100, 4397, 'Rzeszow', 'Rzeszowskie'),
('Siedleckie', 'PL', 655300, 8499, 'Siedlce', 'Siedleckie'),
('Sieradzkie', 'PL', 408700, 4869, 'Sieradz', 'Sieradzkie'),
('Skierniewickie', 'PL', 421700, 3960, 'Skierniewice', 'Skierniewickie'),
('Slupskie', 'PL', 419300, 7453, 'Slupsk', 'Slupskie'),
('Suwalskie', 'PL', 477100, 10490, 'Suwalki', 'Suwalskie'),
('Szczecinskie', 'PL', 979500, 9982, 'Szczecin', 'Szczecinskie'),
('Tarnobrzeskie', 'PL', 604300, 6283, 'Tarnobrzeg', 'Tarnobrzeskie'),
('Tarnowskie', 'PL', 678400, 4151, 'Tarnow', 'Tarnowskie'),
('Torunskie', 'PL', 662600, 5348, 'Torun', 'Torunskie'),
('Walbrzyskie', 'PL', 740000, 4168, 'Walbrzych', 'Walbrzyskie'),
('Wloclawskie', 'PL', 430800, 4402, 'Wloclawek', 'Wloclawskie'),
('Wroclawskie', 'PL', 1132800, 6287, 'Wroclaw', 'Wroclawskie'),
('Zamojskie', 'PL', 490800, 6980, 'Zamosc', 'Zamojskie'),
('Zielonogorskie', 'PL', 664700, 8868, 'Zielona Gora', 'Zielonogorskie'),
('Aveiro', 'P', 656000, 2808, NULL, NULL),
('Braga', 'P', 746100, 2673, NULL, NULL),
('Braganca', 'P', 158300, 6608, NULL, NULL),
('Castelo Branco', 'P', 214700, 6675, NULL, NULL),
('Coimbra', 'P', 427600, 3947, NULL, NULL),
('Evora', 'P', 173500, 7393, NULL, NULL),
('Faro', 'P', 340100, 4960, NULL, NULL),
('Guarda', 'P', 187800, 5518, NULL, NULL),
('Leiria', 'P', 427800, 3515, NULL, NULL),
('Portalegre', 'P', 134300, 6065, NULL, NULL),
('Porto', 'P', 1622300, 2395, NULL, NULL),
('Santarem', 'P', 442700, 6747, NULL, NULL),
('Setubal', 'P', 713700, 5064, NULL, NULL),
('Viana do Castelo', 'P', 248700, 2255, NULL, NULL),
('Vila Real', 'P', 237100, 4328, NULL, NULL),
('Viseu', 'P', 401000, 5007, NULL, NULL),
('Azores, The', 'P', 236700, 2247, NULL, NULL),
('Madeira', 'P', 253000, 794, NULL, NULL),
('Alba', 'RO', 428000, 6231, 'Alba Iulia', 'Alba'),
('Arad', 'RO', 507000, 7652, 'Arad', 'Arad'),
('Arges', 'RO', 678000, 6801, 'Pitesti', 'Arges'),
('Bacau', 'RO', 731000, 6606, 'Bacau', 'Bacau'),
('Bihor', 'RO', 660000, 7535, 'Oradea', 'Bihor'),
('Bistrita Nasaud', 'RO', 328000, 5305, 'Bistrita', 'Bistrita Nasaud'),
('Braila', 'RO', 404000, 4724, 'Braila', 'Braila'),
('Brasov', 'RO', 695000, 5351, 'Brasov', 'Brasov'),
('Bucuresti', 'RO', 2319000, 1521, 'Bucharest', 'Bucuresti'),
('Buzau', 'RO', 524000, 6072, 'Buzau', 'Buzau'),
('Caras Severin', 'RO', 408000, 8503, 'Resita', 'Caras Severin'),
('Cluj', 'RO', 743000, 6650, 'Cluj Napoca', 'Cluj'),
('Constanta', 'RO', 737000, 7055, 'Constanta', 'Constanta'),
('Covasha', 'RO', 238000, 3705, 'Sfintu Gheorghe', 'Covasha'),
('Dimbovita', 'RO', 570000, 4035, 'Tirgoviste', 'Dimbovita'),
('Dolj', 'RO', 772000, 7413, 'Craiova', 'Dolj'),
('Galati', 'RO', 642000, 4425, 'Galati', 'Galati'),
('Gorj', 'RO', 388000, 5641, 'Tirgu Jiu', 'Gorj'),
('Harghita', 'RO', 363000, 6610, 'Miercurea Ciuc', 'Harghita'),
('Hunedoara', 'RO', 567000, 7016, 'Deva', 'Hunedoara'),
('Ialomita', 'RO', 309000, 4449, 'Slobozia', 'Ialomita'),
('Iasi', 'RO', 810000, 5469, 'Iasi', 'Iasi'),
('Maramures', 'RO', 556000, 6215, 'Baia Mare', 'Maramures'),
('Mehedinti', 'RO', 329000, 4900, 'Drobeta Turnu Severin', 'Mehedinti'),
('Mures', 'RO', 621000, 6696, 'Tirgu Mures', 'Mures'),
('Neamt', 'RO', 580000, 5890, 'Piatra Neamt', 'Neamt'),
('Olt', 'RO', 535000, 5507, 'Slatina', 'Olt'),
('Prahova', 'RO', 877000, 4694, 'Ploiesti', 'Prahova'),
('Salaj', 'RO', 269000, 3850, 'Zalau', 'Salaj'),
('Satu Mare', 'RO', 417000, 4405, 'Satu Mare', 'Satu Mare'),
('Sibiu', 'RO', 509000, 5422, 'Sibiu', 'Sibiu'),
('Teleorman', 'RO', 504000, 5760, 'Alexandria', 'Teleorman'),
('Timis', 'RO', 726000, 8692, 'Timisoara', 'Timis'),
('Vilcea', 'RO', 430000, 5705, 'Rimnicu Vilcea', 'Vilcea'),
('Vrancea', 'RO', 394000, 4863, 'Focsani', 'Vrancea'),
('Andalusia', 'E', 7053043, 87600, 'Sevilla', 'Andalusia'),
('Aragon', 'E', 1183576, 47720, 'Zaragoza', 'Aragon'),
('Asturias', 'E', 1083388, 10604, 'Oviedo', 'Asturias'),
('Balearic Islands', 'E', 736865, 4992, 'Palma de Mallorca', 'Balearic Islands'),
('Basque Country', 'E', 2075561, 7235, 'Vitoria Gasteiz', 'Basque Country'),
('Canary Islands', 'E', 1534897, 7447, 'Santa Cruz de Tenerife', 'Canary Islands'),
('Cantabria', 'E', 526090, 5321, 'Santander', 'Cantabria'),
('Castile and Leon', 'E', 2504371, 94224, 'Valladolid', 'Castile and Leon'),
('Castile La Mancha', 'E', 1656179, 79462, 'Toledo', 'Castile La Mancha'),
('Catalonia', 'E', 6090107, 32113, 'Barcelona', 'Catalonia'),
('Estremadura', 'E', 1050590, 41635, 'Merida', 'Estremadura'),
('Galicia', 'E', 2720761, 29574, 'Santiago de Compostella', 'Galicia'),
('Murcia', 'E', 1070401, 11314, 'Murcia', 'Murcia'),
('Navarre', 'E', 523614, 10391, 'Pamplona', 'Navarre'),
('Rioja', 'E', 263437, 5045, 'Logrono', 'Rioja'),
('Alvsborg', 'S', 444259, 11395, 'Vanersborg', 'Alvsborg'),
('Blekinge', 'S', 151168, 2941, 'Karlskrona', 'Blekinge'),
('Gavleborg', 'S', 289339, 18191, 'Gavle', 'Gavleborg'),
('Goteborg och Bohus', 'S', 742550, 5141, 'Goteborg', 'Goteborg och Bohus'),
('Gotland', 'S', 57383, 3140, 'Visby', 'Gotland'),
('Halland', 'S', 257874, 5454, 'Halmstad', 'Halland'),
('Jamtland', 'S', 136009, 49443, 'Ostersund', 'Jamtland'),
('Jonkoping', 'S', 309738, 9944, 'Jonkoping', 'Jonkoping'),
('Kopparberg', 'S', 290388, 28194, 'Falun', 'Kopparberg'),
('Kronoberg', 'S', 178612, 8458, 'Vaxjo', 'Kronoberg'),
('Malmohus', 'S', 786757, 4938, 'Malmo', 'Malmohus'),
('Norrbotten', 'S', 264834, 98913, 'Lulea', 'Norrbotten'),
('Orebro', 'S', 273608, 8519, 'Orebro', 'Orebro'),
('Ostergotland', 'S', 406100, 10562, 'Linkoping', 'Ostergotland'),
('Skaraborg', 'S', 278162, 7937, 'Mariestad', 'Skaraborg'),
('Sodermanland', 'S', 256818, 6060, 'Nykoping', 'Sodermanland'),
('Uppsala', 'S', 273918, 6989, 'Uppsala', 'Uppsala'),
('Varmland', 'S', 284187, 17584, 'Karlstad', 'Varmland'),
('Vasterbotten', 'S', 253835, 55401, 'Umea', 'Vasterbotten'),
('Vasternorrland', 'S', 261280, 21678, 'Harnosand', 'Vasternorrland'),
('Vastmanland', 'S', 259438, 6302, 'Vasteras', 'Vastmanland'),
('AR', 'CH', 54104, 242, 'Herisau', 'AR'),
('AI', 'CH', 14750, 172, 'Appenzell', 'AI'),
('BL', 'CH', 252331, 517, 'Liestal', 'BL'),
('BE', 'CH', 941952, 5960, 'Bern', 'BE'),
('FR', 'CH', 224552, 1670, 'Fribourg', 'FR'),
('GL', 'CH', 39410, 685, 'Glarus', 'GL'),
('JU', 'CH', 69188, 836, 'Delemont', 'JU'),
('LU', 'CH', 340536, 1493, 'Luzern', 'LU'),
('NE', 'CH', 165258, 803, 'Neuchatel', 'NE'),
('NW', 'CH', 36466, 276, 'Stans', 'NW'),
('OW', 'CH', 31310, 490, 'Sarnen', 'OW'),
('SG', 'CH', 442350, 2025, 'Sankt Gallen', 'SG'),
('SH', 'CH', 74035, 298, 'Schaffhausen', 'SH'),
('SZ', 'CH', 122409, 908, 'Schwyz', 'SZ'),
('SO', 'CH', 239264, 790, 'Solothurn', 'SO'),
('TG', 'CH', 223372, 990, 'Frauenfeld', 'TG'),
('TI', 'CH', 305199, 2812, 'Bellinzona', 'TI'),
('UR', 'CH', 35876, 1076, 'Altdorf', 'UR'),
('VS', 'CH', 271291, 5224, 'Sion', 'VS'),
('VD', 'CH', 605677, 3211, 'Lausanne', 'VD'),
('ZG', 'CH', 92392, 238, 'Zug', 'ZG'),
('ZH', 'CH', 1175457, 1728, 'Zurich', 'ZH'),
('Cherkaska', 'UA', 1530900, 20900, 'Cherkasy', 'Cherkaska'),
('Chernihivska', 'UA', 938600, 31900, 'Chernihiv', 'Chernihivska'),
('Chernivetska', 'UA', 1405800, 8100, 'Chernivtsi', 'Chernivetska'),
('Dnipropetrovska', 'UA', 3908700, 31900, 'Dnipropetrovsk', 'Dnipropetrovska'),
('Donetska', 'UA', 5346700, 26500, 'Donetsk', 'Donetska'),
('Ivano Frankivska', 'UA', 1442900, 13900, 'Ivano Frankivsk', 'Ivano Frankivska'),
('Kharkivska', 'UA', 3194800, 31400, 'Kharkiv', 'Kharkivska'),
('Khersonska', 'UA', 1258700, 28500, 'Kherson', 'Khersonska'),
('Khmelnytska', 'UA', 1520600, 20600, 'Khmelnytskyy', 'Khmelnytska'),
('Kyyivska', 'UA', 4589800, 28900, 'Kiev', 'Kyyivska'),
('Kirovohradska', 'UA', 1245300, 24600, 'Kirovohrad', 'Kirovohradska'),
('Luhanska', 'UA', 2871100, 26700, 'Luhansk', 'Luhanska'),
('Lvivska', 'UA', 2764400, 21800, 'Lviv', 'Lvivska'),
('Mykolayivska', 'UA', 1342400, 24600, 'Mykolayiv', 'Mykolayivska'),
('Odeska', 'UA', 2635300, 33300, 'Odesa', 'Odeska'),
('Poltavska', 'UA', 1756900, 28800, 'Poltava', 'Poltavska'),
('Rivnenska', 'UA', 1176800, 20100, 'Rivne', 'Rivnenska'),
('Sumska', 'UA', 1430200, 23800, 'Sumy', 'Sumska'),
('Ternopilska', 'UA', 1175100, 13800, 'Ternopil', 'Ternopilska'),
('Vinnytska', 'UA', 1914400, 26500, 'Vinnytsya', 'Vinnytska'),
('Volynska', 'UA', 1069000, 20200, 'Lutsk', 'Volynska'),
('Zakarpatska', 'UA', 1265900, 12800, 'Uzhhorod', 'Zakarpatska'),
('Zaporizka', 'UA', 2099600, 27200, 'Zaporizhzhya', 'Zaporizka'),
('Zhytomyrska', 'UA', 1510700, 29900, 'Zhytomyr', 'Zhytomyrska'),
('Krym', 'UA', 2549800, 27000, 'Simferopol', 'Krym'),
('Avon', 'GB', 962000, 1346, 'Bristol', 'Avon'),
('Bedfordshire', 'GB', 534300, 1235, 'Bedford', 'Bedfordshire'),
('Berkshire', 'GB', 752500, 1259, 'Reading', 'Berkshire'),
('Buckinghamshire', 'GB', 640200, 1883, 'Aylesbury', 'Buckinghamshire'),
('Cambridgeshire', 'GB', 669900, 3409, 'Cambridge', 'Cambridgeshire'),
('Cheshire', 'GB', 966500, 2329, 'Chester', 'Cheshire'),
('Cleveland', 'GB', 557500, 583, 'Middlesbrough', 'Cleveland'),
('Cornwall / Isles of Scilly', 'GB', 475200, 3564, 'Truro', 'Cornwall / Isles of Scilly'),
('Cumbria', 'GB', 489700, 6810, 'Carlisle', 'Cumbria'),
('Derbyshire', 'GB', 938800, 2631, 'Matlock', 'Derbyshire'),
('Devon', 'GB', 1040000, 6711, 'Exeter', 'Devon'),
('Dorset', 'GB', 662900, 2654, 'Dorchester', 'Dorset'),
('East Sussex', 'GB', 716500, 1795, 'Lewes', 'East Sussex'),
('Essex', 'GB', 1548800, 3672, 'Chelmsford', 'Essex'),
('Gloucestershire', 'GB', 538800, 2643, 'Glouchester', 'Gloucestershire'),
('Greater London', 'GB', 6803100, 1579, 'London', 'Greater London'),
('Greater Manchester', 'GB', 2561600, 1287, 'Manchester', 'Greater Manchester'),
('Hampshire', 'GB', 1578700, 3777, 'Winchester', 'Hampshire'),
('Hereford and Worcester', 'GB', 696000, 3927, 'Worcester', 'Hereford and Worcester'),
('Hertfordshire', 'GB', 989500, 1634, 'Hertford', 'Hertfordshire'),
('Humberside', 'GB', 874400, 3512, 'Hull', 'Humberside'),
('Isle of Wight', 'GB', 126600, 381, 'Newport', 'Newport'),
('Kent', 'GB', 1538800, 3731, 'Maidstone', 'Kent'),
('Lancashire', 'GB', 1408300, 3064, 'Preston', 'Lancashire'),
('Leicestershire', 'GB', 890800, 2553, 'Leichester', 'Leicestershire'),
('Lincolnshire', 'GB', 592600, 5915, 'Lincoln', 'Lincolnshire'),
('Merseyside', 'GB', 1441100, 652, 'Liverpool', 'Merseyside'),
('Norfolk', 'GB', 759400, 5368, 'Norwich', 'Norfolk'),
('Northamptonshire', 'GB', 587100, 2367, 'Northampton', 'Northamptonshire'),
('Northumberland', 'GB', 307100, 5032, 'Newcastle', 'Tyne and Wear'),
('North Yorkshire', 'GB', 720900, 8309, 'Northallerton', 'North Yorkshire'),
('Nottinghamshire', 'GB', 1015500, 2164, 'Nottingham', 'Nottinghamshire'),
('Oxfordshire', 'GB', 597700, 2608, 'Oxford', 'Oxfordshire'),
('Shropshire', 'GB', 412500, 3490, 'Shrewsbury', 'Shropshire'),
('Somerset', 'GB', 469400, 3451, 'Taunton', 'Somerset'),
('South Yorkshire', 'GB', 1292700, 1560, 'Barnsley', 'South Yorkshire'),
('Staffordshire', 'GB', 1047400, 2716, 'Stafford', 'Staffordshire'),
('Suffolk', 'GB', 661900, 3797, 'Ipswich', 'Suffolk'),
('Surrey', 'GB', 1035500, 1679, 'Kingston', 'Surrey'),
('Tyne and Wear', 'GB', 1125600, 540, 'Newcastle', 'Tyne and Wear'),
('Warwickshire', 'GB', 489900, 1981, 'Warwick', 'Warwickshire'),
('West Midlands', 'GB', 2619000, 899, 'Birmingham', 'West Midlands'),
('West Sussex', 'GB', 713600, 1989, 'Chichester', 'West Sussex'),
('West Yorkshire', 'GB', 2066200, 2039, 'Wakefield', 'West Yorkshire'),
('Wiltshire', 'GB', 575100, 3480, 'Trowbridge', 'Wiltshire'),
('Borders', 'GB', 105700, 4698, 'Newtown St. Boswells', 'Borders'),
('Central', 'GB', 273400, 2700, 'Stirling', 'Central'),
('Central', 'IL', 938000, 1242, 'Ramla', 'Central'),
('Central', 'Z', 722400, 94395, 'Kabwe', 'Central'),
('Central', 'EAK', 3110000, 13176, 'Nyeri', 'Central'),
('Dumfries and Galloway', 'GB', 147800, 6425, 'Dumfries', 'Dumfries and Galloway'),
('Fife', 'GB', 352100, 1319, 'Glenrothes', 'Fife'),
('Grampian', 'GB', 532500, 8752, 'Aberdeen', 'Grampian'),
('Highland', 'GB', 207500, 26137, 'Inverness', 'Highland'),
('Lothian', 'GB', 758600, 1770, 'Edinburgh', 'Lothian'),
('Strathclyde', 'GB', 2287800, 13773, 'Glasgow', 'Strathclyde'),
('Tayside', 'GB', 395000, 7643, 'Dundee', 'Tayside'),
('Island Areas (munic.)', 'GB', 72000, 5566, 'Island Areas', 'Island Areas (munic.)'),
('Aberconwy and Colwyn', 'GB', 110700, 1130, 'Colwyn Bay', 'Aberconwy and Colwyn'),
('Anglesey', 'GB', 68500, 719, 'Llangefni', 'Anglesey'),
('Blaenau Gwent', 'GB', 73300, 109, 'Ebbw Vale', 'Blaenau Gwent'),
('Caerphilly', 'GB', 171000, 279, 'Ystrad Fawr', 'Caerphilly'),
('Cardiff', 'GB', 306600, 139, 'Cardiff', 'Cardiff'),
('Carmarthenshire', 'GB', 169000, 2398, 'Carmarthen', 'Carmarthenshire'),
('Ceredigion', 'GB', 69700, 1797, 'Aberystwyth', 'Ceredigion'),
('Denbighshire', 'GB', 91300, 844, 'Ruthin', 'Denbighshire'),
('Flintshire', 'GB', 145300, 437, 'Mold', 'Flintshire'),
('Gwynedd', 'GB', 117000, 2548, 'Caernarfon', 'Gwynedd'),
('Merthyr Tydfil', 'GB', 59500, 111, 'Merthyr Tydfil', 'Merthyr Tydfil'),
('Monmouthshire', 'GB', 84200, 851, 'Cwmbran', 'Monmouthshire'),
('Neath and Port Talbot', 'GB', 140100, 441, 'Port Talbot', 'Neath and Port Talbot'),
('Newport', 'GB', 137400, 191, 'Newport', 'Newport'),
('Pembrokeshire', 'GB', 113600, 1590, 'Haverfordwest', 'Pembrokeshire'),
('Powys', 'GB', 121800, 5204, 'Llandrindod Wells', 'Powys'),
('Rhondda Cynon Taff', 'GB', 239000, 424, 'Rhondda', 'Rhondda Cynon Taff'),
('Swansea', 'GB', 230900, 378, 'Swansea', 'Swansea'),
('Torfaen', 'GB', 90600, 126, 'Pontypool', 'Torfaen'),
('Vale of Glamorgan', 'GB', 119200, 337, 'Barry', 'Vale of Glamorgan'),
('Northern Ireland', 'GB', 1594400, 14120, 'Belfast', 'Northern Ireland'),
('Ayeyarwady', 'MYA', 4994100, 35138, 'Pathein', 'Ayeyarwady'),
('Bago', 'MYA', 3799800, 39404, 'Bago', 'Bago'),
('Yangon', 'MYA', 3965900, 10171, 'Rangoon', 'Yangon'),
('Tanintharyi', 'MYA', 917200, 43343, 'Tavoy', 'Tanintharyi'),
('Chin', 'MYA', 368900, 36019, 'Hakha', 'Chin'),
('Kachin', 'MYA', 904800, 89041, 'Myitkyina', 'Kachin'),
('Kayin', 'MYA', 1055400, 30383, 'Hpa an', 'Kayin'),
('Kayah', 'MYA', 168400, 11733, 'Loikaw', 'Kayah'),
('Anhui', 'TJ', 59550000, 139000, 'Hefei', 'Anhui'),
('Fujian', 'TJ', 31830000, 120000, 'Fuzhou', 'Fujian'),
('Gansu', 'TJ', 23780000, 450000, 'Lanzhou', 'Gansu'),
('Guangdong', 'TJ', 66890000, 186000, 'Guangzhou', 'Guangdong'),
('Guizhou', 'TJ', 34580000, 170000, 'Guiyang', 'Guizhou'),
('Hainan', 'TJ', 7110000, 34000, 'Haikou', 'Hainan'),
('Hebei', 'TJ', 63880000, 190000, 'Shijiazhuang', 'Hebei'),
('Heilongjiang', 'TJ', 36720000, 469000, 'Harbin', 'Heilongjiang'),
('Henan', 'TJ', 90270000, 167000, 'Zhengzhou', 'Henan'),
('Hubei', 'TJ', 57190000, 187400, 'Wuhan', 'Hubei'),
('Hunan', 'TJ', 63550000, 210000, 'Changsha', 'Hunan'),
('Jiangsu', 'TJ', 70210000, 102600, 'Nanjing', 'Jiangsu'),
('Jiangxi', 'TJ', 40150000, 166600, 'Nanchang', 'Jiangxi'),
('Jilin', 'TJ', 25740000, 187000, 'Changchun', 'Jilin'),
('Liaoning', 'TJ', 40670000, 145700, 'Shenyang', 'Liaoning'),
('Qinghai', 'TJ', 4740000, 720000, 'Xining', 'Qinghai'),
('Shaanxi', 'TJ', 34810000, 205000, 'Xi', 'Shaanxi'),
('Shandong', 'TJ', 86710000, 153000, 'Jinan', 'Shandong'),
('Shanxi', 'TJ', 30450000, 156000, 'Taiyuan', 'Shanxi'),
('Sichuan', 'TJ', 112140000, 570000, 'Chengdu', 'Sichuan'),
('Yunnan', 'TJ', 39390000, 394000, 'Kunming', 'Yunnan'),
('Zhejiang', 'TJ', 42940000, 101800, 'Hangzhou', 'Zhejiang'),
('Guangxi Zhuangzu', 'TJ', 44930000, 236300, 'Nanning', 'Guangxi Zhuangzu'),
('Nei Monggol', 'TJ', 22600000, 1183000, 'Hohhot', 'Nei Monggol'),
('Ningxia Huizu', 'TJ', 5040000, 66400, 'Yinchuan', 'Ningxia Huizu'),
('Xinjiang Uygur', 'TJ', 16320000, 1600000, 'Urumqi', 'Xinjiang Uygur'),
('Tibet', 'TJ', 2360000, 1220000, 'Lhasa', 'Tibet'),
('Beijing (munic.)', 'TJ', 11250000, 16800, 'Beijing', 'Beijing (munic.)'),
('Shanghai (munic.)', 'TJ', 13560000, 6200, 'Shanghai', 'Shanghai (munic.)'),
('Tianjin (munic.)', 'TJ', 9350000, 11300, 'Tianjin', 'Tianjin (munic.)'),
('Andhra Pradesh', 'IND', 66508008, 275045, 'Hyderabad', 'Andhra Pradesh'),
('Arunachal Pradesh', 'IND', 864558, 83743, 'Itanagar', 'Arunachal Pradesh'),
('Assam', 'IND', 22414322, 78438, 'Dispur', 'Assam'),
('Bihar', 'IND', 86374465, 173877, 'Patna', 'Bihar'),
('Goa', 'IND', 1169793, 3702, 'Panaji', 'Goa'),
('Gujarat', 'IND', 41309582, 196024, 'Gandhinagar', 'Gujarat'),
('Haryana', 'IND', 16463648, 44212, 'Chandigarh', 'Chandigarh'),
('Himachal Pradesh', 'IND', 5170877, 55673, 'Simla', 'Himachal Pradesh'),
('Jammu and Kashmir', 'IND', 7718700, 101387, 'Srinagar', 'Jammu and Kashmir'),
('Karnataka', 'IND', 44977201, 191791, 'Bangalore', 'Karnataka'),
('Kerala', 'IND', 29098518, 38863, 'Trivandrum', 'Kerala'),
('Madhya Pradesh', 'IND', 66181170, 443446, 'Bhopal', 'Madhya Pradesh'),
('Maharashtra', 'IND', 78937187, 307713, 'Bombay', 'Maharashtra'),
('Manipur', 'IND', 1837149, 22327, 'Imphal', 'Manipur'),
('Meghalaya', 'IND', 1774778, 22429, 'Shillong', 'Meghalaya'),
('Mizoram', 'IND', 689756, 21081, 'Aijal', 'Mizoram'),
('Nagaland', 'IND', 1209546, 16579, 'Kohima', 'Nagaland'),
('Orissa', 'IND', 31659736, 155707, 'Bhubaneswar', 'Orissa'),
('Punjab', 'IND', 20281969, 50362, 'Chandigarh', 'Chandigarh'),
('Rajasthan', 'IND', 44005990, 342239, 'Jaipur', 'Rajasthan'),
('Sikkim', 'IND', 406457, 7096, 'Gangtok', 'Sikkim'),
('Tamil Nadu', 'IND', 55858946, 130058, 'Madras', 'Tamil Nadu'),
('Tripura', 'IND', 2757205, 10486, 'Agartala', 'Tripura'),
('Uttar Pradesh', 'IND', 139112287, 294411, 'Lucknow', 'Uttar Pradesh'),
('West Bengal', 'IND', 68077965, 88752, 'Calcutta', 'West Bengal'),
('Andaman and Nicobar Is.', 'IND', 280661, 8249, 'Port Blair', 'Andaman and Nicobar Is.'),
('Chandigarh', 'IND', 642015, 114, 'Chandigarh', 'Chandigarh'),
('Dadra and Nagar Haveli', 'IND', 138477, 491, 'Silvassa', 'Dadra and Nagar Haveli'),
('Daman and Diu', 'IND', 101586, 112, 'Daman', 'Daman and Diu'),
('Delhi', 'IND', 9420644, 1483, 'New Delhi', 'Delhi'),
('Lakshadweep Is.', 'IND', 51707, 32, 'Kavaratti', 'Lakshadweep Is.'),
('Azarbayian e Gharbt', 'IR', 2284208, 38850, 'Orumiyeh', 'Azarbayian e Gharbt'),
('Azarbayian e Sharqi', 'IR', 4420343, 67102, 'Tabriz', 'Azarbayian e Sharqi'),
('Bakhtaran', 'IR', 1622159, 23667, 'Bakhtaran', 'Bakhtaran'),
('Boyer Ahmad e Kohkiluyeh', 'IR', 496739, 14261, 'Yasuj', 'Boyer Ahmad e Kohkiluyeh'),
('Chahar Mahal e Bakhtiari', 'IR', 747297, 14870, 'Shahr e Kord', 'Chahar Mahal e Bakhtiari'),
('Esfahan', 'IR', 3682444, 104650, 'Esfahan', 'Esfahan'),
('Fars', 'IR', 3543828, 133298, 'Shiraz', 'Fars'),
('Gilan', 'IR', 2204047, 14709, 'Rasht', 'Gilan'),
('Hamadan', 'IR', 1651320, 19784, 'Hamadan', 'Hamadan'),
('Hormozgan', 'IR', 924433, 66780, 'Bandar Abbas', 'Hormozgan'),
('Ilam', 'IR', 440693, 19044, 'Ilam', 'Ilam'),
('Kerman', 'IR', 1862542, 179916, 'Kerman', 'Kerman'),
('Khorasan', 'IR', 6013200, 313337, 'Mashhad', 'Khorasan'),
('Khuzestan', 'IR', 3175852, 67282, 'Ahvaz', 'Khuzestan'),
('Kordestan', 'IR', 1233480, 24998, 'Sanandaj', 'Kordestan'),
('Lorestan', 'IR', 1501778, 28803, 'Khorramabad', 'Lorestan'),
('Markazi', 'IR', 1182611, 29080, 'Arak', 'Markazi'),
('Mazandaran', 'IR', 3793149, 46456, 'Sari', 'Mazandaran'),
('Sistan e Baluchestan', 'IR', 1455102, 181578, 'Zahedan', 'Sistan e Baluchestan'),
('Yazd', 'IR', 691119, 70011, 'Yazd', 'Yazd'),
('Zanjan', 'IR', 1776133, 36398, 'Zanjan', 'Zanjan'),
('Al Anbar', 'IRQ', 817868, 138501, 'Ar Ramadi', 'Al Anbar'),
('Babil', 'IRQ', 1108773, 6468, 'Al Hillah', 'Babil'),
('Al Basrah', 'IRQ', 872211, 19070, 'Al Basrah', 'Al Basrah'),
('Dhi Qar', 'IRQ', 917880, 12900, 'An Nasiriyah', 'Dhi Qar'),
('Diyala', 'IRQ', 955112, 19076, 'Baqubah', 'Diyala'),
('Karbala', 'IRQ', 455868, 5034, 'Karbala', 'Karbala'),
('Maysan', 'IRQ', 499842, 16072, 'Al Amarah', 'Maysan'),
('Al Muthanna', 'IRQ', 312911, 51740, 'As Samawah', 'Al Muthanna'),
('An Najaf', 'IRQ', 583493, 28824, 'An Najaf', 'An Najaf'),
('Ninawa', 'IRQ', 1507926, 35899, 'Al Mawsil', 'Ninawa'),
('Al Qadisiyah', 'IRQ', 560797, 8153, 'Ad Diwaniyah', 'Al Qadisiyah'),
('Salah ad Din', 'IRQ', 723500, 26175, 'Samarra', 'Salah ad Din'),
('Ad Tamim', 'IRQ', 592869, 10282, 'Kirkuk', 'Ad Tamim'),
('Wasit', 'IRQ', 546676, 17153, 'Al Kut', 'Wasit'),
('Irbil', 'IRQ', 742538, 14471, 'Irbil', 'Irbil'),
('As Sulaymaniyah', 'IRQ', 942513, 17023, 'As Sulaymaniyah', 'As Sulaymaniyah'),
('North', 'IL', 739500, 4501, 'Nazareth', 'North'),
('South', 'IL', 529300, 14107, 'Beer Sheva', 'South'),
('Hokkaido', 'J', 5692321, 83519, 'Sapporo', 'Hokkaido'),
('Iwate', 'J', 1419505, 15277, 'Morioka', 'Iwate'),
('Miyagi', 'J', 2328739, 7292, 'Sendai', 'Miyagi'),
('Ibaraki', 'J', 2955530, 6094, 'Mito', 'Ibaraki'),
('Tochigi', 'J', 1984390, 6414, 'Utsonomiya', 'Tochigi'),
('Gumma', 'J', 2003540, 6356, 'Maebashi', 'Gumma'),
('Saitama', 'J', 6759311, 3799, 'Urawa', 'Saitama'),
('Chiba', 'J', 5797782, 5150, 'Chiba', 'Chiba'),
('Kanagawa', 'J', 8245900, 2402, 'Yokohama', 'Kanagawa'),
('Ishikawa', 'J', 1180068, 4197, 'Kanazawa', 'Ishikawa'),
('Yamanashi', 'J', 881996, 4463, 'Kofu', 'Yamanashi'),
('Aichi', 'J', 6868336, 5138, 'Nagoya', 'Aichi'),
('Mie', 'J', 1841358, 5778, 'Tsu', 'Mie'),
('Shiga', 'J', 1287005, 4016, 'Otsu', 'Shiga'),
('Kyoto', 'J', 2629592, 4613, 'Kyoto', 'Kyoto'),
('Osaka', 'J', 8797268, 1868, 'Osaka', 'Osaka'),
('Hyogo', 'J', 5401877, 8381, 'Kobe', 'Hyogo'),
('Shimane', 'J', 771441, 6628, 'Matsue', 'Shimane'),
('Hiroshima', 'J', 2881748, 8467, 'Hiroshima', 'Hiroshima'),
('Kagawa', 'J', 1027006, 1882, 'Takamatsu', 'Kagawa'),
('Ehime', 'J', 1506700, 5672, 'Matsuyama', 'Ehime'),
('Okinawa', 'J', 1273440, 2255, 'Naha', 'Okinawa'),
('Almaty', 'KAZ', 963100, 105700, 'Almaty', 'Almaty (munic.)'),
('Aqmola', 'KAZ', 845700, 92000, 'Aqmola', 'Aqmola'),
('Aqtobe', 'KAZ', 752800, 300600, 'Aqtobe', 'Aqtobe'),
('Atyrau', 'KAZ', 459600, 118600, 'Atyrau', 'Atyrau'),
('Batys Qazaqstan', 'KAZ', 669800, 151300, 'Oral', 'Batys Qazaqstan'),
('Kokchetau', 'KAZ', 657000, 78200, 'Kokchetau', 'Kokchetau'),
('Mangghystau', 'KAZ', 324400, 165600, 'Aqtau', 'Mangghystau'),
('Ongtustik Qazaqstan', 'KAZ', 1987800, 117300, 'Shymkent', 'Ongtustik Qazaqstan'),
('Pavlodar', 'KAZ', 943600, 124800, 'Pavlodar', 'Pavlodar'),
('Qaraghandy', 'KAZ', 1270100, 115400, 'Karaganda', 'Qaraghandy'),
('Qostanay', 'KAZ', 1055300, 113900, 'Qostanay', 'Qostanay'),
('Qyzylorda', 'KAZ', 606100, 226000, 'Qyzylorda', 'Qyzylorda'),
('Semey', 'KAZ', 811000, 185800, 'Semey', 'Semey'),
('Shyghys Qazaqstan', 'KAZ', 939500, 97500, 'Oskemen', 'Shyghys Qazaqstan'),
('Soltustik Qazaqstan', 'KAZ', 600900, 45000, 'Petropavl', 'Soltustik Qazaqstan'),
('Taldyqorghan', 'KAZ', 721500, 118500, 'Taldyqorghan', 'Taldyqorghan'),
('Torghay', 'KAZ', 305900, 111800, 'Arqalyq', 'Torghay'),
('Almaty (munic.)', 'KAZ', 1172400, 0, 'Almaty', 'Almaty (munic.)'),
('Leninsk (munic.)', 'KAZ', 68600, 0, 'Leninsk', 'Leninsk (munic.)'),
('Johor', 'MAL', 2074297, 18986, 'Johor Baharu', 'Johor'),
('Kedah', 'MAL', 1304800, 9426, 'Alor Setar', 'Kedah'),
('Kelantan', 'MAL', 1181680, 14943, 'Kota Baharu', 'Kelantan'),
('Melaka', 'MAL', 504502, 1650, 'Melaka', 'Melaka'),
('Negeri Sembilan', 'MAL', 691150, 6643, 'Seremban', 'Negeri Sembilan'),
('Pahang', 'MAL', 1036724, 35965, 'Kuantan', 'Pahang'),
('Perak', 'MAL', 1880016, 21005, 'Ipoh', 'Perak'),
('Perlis', 'MAL', 184070, 795, 'Kangar', 'Perlis'),
('Pulau Pinang', 'MAL', 1065075, 1031, 'George Town', 'Pulau Pinang'),
('Sabah', 'MAL', 1736902, 73620, 'Kota Kinabalu', 'Sabah'),
('Sarawak', 'MAL', 1648217, 124449, 'Kuching', 'Sarawak');
INSERT INTO `province` (`Name`, `Country`, `Population`, `Area`, `Capital`, `CapProv`) VALUES
('Selangor', 'MAL', 2289236, 7956, 'Shah Alam', 'Selangor'),
('Terengganu', 'MAL', 770931, 12955, 'Kuala Terengganu', 'Terengganu'),
('Fed. Terr. of Kuala Lumpur', 'MAL', 1145075, 243, 'Kuala Lumpur', 'Fed. Terr. of Kuala Lumpur'),
('Fed. Terr. of Labuan', 'MAL', 54307, 91, 'Labuan', 'Fed. Terr. of Labuan'),
('Rep. of Karelia', 'R', 785000, 172400, 'Petrozavodsk', 'Rep. of Karelia'),
('Rep. of Komi', 'R', 1185500, 415900, 'Syktyvkar', 'Rep. of Komi'),
('Arkhangelskaya oblast', 'R', 1520800, 587400, 'Arkhangelsk', 'Arkhangelskaya oblast'),
('Vologodskaya oblast', 'R', 1349800, 145700, 'Vologda', 'Vologodskaya oblast'),
('Murmanskaya oblast', 'R', 1048000, 144900, 'Murmansk', 'Murmanskaya oblast'),
('Kaliningradskaya oblast', 'R', 932200, 15100, 'Kaliningrad', 'Kaliningradskaya oblast'),
('Sankt Peterburg', 'R', 4801500, 0, 'Sankt Peterburg', 'Sankt Peterburg'),
('Leningradskaya oblast', 'R', 1675900, 85900, 'Sankt Peterburg', 'Sankt Peterburg'),
('Novgorodskaya oblast', 'R', 742600, 55300, 'Novgorod', 'Novgorodskaya oblast'),
('Pskovskaya oblast', 'R', 832300, 55300, 'Pskov', 'Pskovskaya oblast'),
('Bryanskaya oblast', 'R', 1479700, 34900, 'Bryansk', 'Bryanskaya oblast'),
('Vladimirskaya oblast', 'R', 1644700, 29000, 'Vladimir', 'Vladimirskaya oblast'),
('Ivanovskaya oblast', 'R', 1266400, 23900, 'Ivanovo', 'Ivanovskaya oblast'),
('Kaluzhskaya oblast', 'R', 1097300, 29900, 'Kaluga', 'Kaluzhskaya oblast'),
('Kostromskaya oblast', 'R', 805700, 60100, 'Kostroma', 'Kostromskaya oblast'),
('Moskva', 'R', 8664400, 0, 'Moscow', 'Moskva'),
('Moskovskaya oblast', 'R', 6596600, 47000, 'Moscow', 'Moskva'),
('Orlovskaya oblast', 'R', 914000, 24700, 'Orel', 'Orlovskaya oblast'),
('Ryazanskaya oblast', 'R', 1325300, 39600, 'Ryazan', 'Ryazanskaya oblast'),
('Smolenskaya oblast', 'R', 1172400, 49800, 'Smolensk', 'Smolenskaya oblast'),
('Tverskaya oblast', 'R', 1650600, 84100, 'Tver', 'Tverskaya oblast'),
('Tulskaya oblast', 'R', 1814500, 25700, 'Tula', 'Tulskaya oblast'),
('Yaroslavskaya oblast', 'R', 1451400, 36400, 'Yaroslavl', 'Yaroslavskaya oblast'),
('Rep. of Mariy El', 'R', 766300, 23200, 'Yoshkar Ola', 'Rep. of Mariy El'),
('Rep. of Mordovia', 'R', 955800, 26200, 'Saransk', 'Rep. of Mordovia'),
('Chuvash Republic', 'R', 1360800, 18300, 'Cheboksary', 'Chuvash Republic'),
('Kirovskaya oblast', 'R', 1634500, 120800, 'Kirov', 'Kirovskaya oblast'),
('Nizhegorodskaya oblast', 'R', 3726400, 74800, 'Nizhniy Novgorod', 'Nizhegorodskaya oblast'),
('Belgorodskaya oblast', 'R', 1469100, 27100, 'Belgorod', 'Belgorodskaya oblast'),
('Voronezhskaya oblast', 'R', 2503800, 52400, 'Voronezh', 'Voronezhskaya oblast'),
('Kurskaya oblast', 'R', 1346900, 29800, 'Kursk', 'Kurskaya oblast'),
('Lipetskaya oblast', 'R', 1250200, 24100, 'Lipetsk', 'Lipetskaya oblast'),
('Tambovskaya oblast', 'R', 1310600, 34300, 'Tambov', 'Tambovskaya oblast'),
('Rep. of Kalmykiya', 'R', 318500, 76100, 'Elista', 'Rep. of Kalmykiya'),
('Rep. of Tatarstan', 'R', 3760500, 68000, 'Kazan', 'Rep. of Tatarstan'),
('Astrakhanskaya oblast', 'R', 1028900, 44100, 'Astrakhan', 'Astrakhanskaya oblast'),
('Volgogradskaya oblast', 'R', 2703700, 113900, 'Volgograd', 'Volgogradskaya oblast'),
('Penzenskaya oblast', 'R', 1562300, 43200, 'Penza', 'Penzenskaya oblast'),
('Samarskaya oblast', 'R', 3311500, 53600, 'Samara', 'Samarskaya oblast'),
('Saratovskaya oblast', 'R', 2739500, 100200, 'Saratov', 'Saratovskaya oblast'),
('Ulyanovskaya oblast', 'R', 1495200, 37300, 'Simbirsk', 'Ulyanovskaya oblast'),
('Rostovskaya oblast', 'R', 4426400, 100800, 'Rostov no Donu', 'Rostovskaya oblast'),
('Rep. of Bashkortostan', 'R', 4096600, 143600, 'Ufa', 'Rep. of Bashkortostan'),
('Udmurt Republic', 'R', 1639100, 42100, 'Izhevsk', 'Udmurt Republic'),
('Orenburgskaya oblast', 'R', 2228600, 124000, 'Orenburg', 'Orenburgskaya oblast'),
('Permskaya oblast', 'R', 3009400, 160600, 'Perm', 'Permskaya oblast'),
('Rep. of Adygeya', 'R', 450500, 7600, 'Maykop', 'Rep. of Adygeya'),
('Rep. of Dagestan', 'R', 2097500, 50300, 'Makhachkala', 'Rep. of Dagestan'),
('Rep. of Ingushetiya', 'R', 299700, 3750, 'Nazran', 'Rep. of Ingushetiya'),
('Kabardino Balkar Rep.', 'R', 789900, 12500, 'Nalchik', 'Kabardino Balkar Rep.'),
('Karachayevo Cherkessk Rep.', 'R', 436300, 14100, 'Cherkessk', 'Karachayevo Cherkessk Rep.'),
('Rep. of North Ossetiya', 'R', 662600, 8000, 'Vladikavkaz', 'Rep. of North Ossetiya'),
('Chechen Rep.', 'R', 865100, 12300, 'Grozny', 'Chechen Rep.'),
('Krasnodarsky kray', 'R', 5043900, 76000, 'Krasnodar', 'Krasnodarsky kray'),
('Stavropolsky kray', 'R', 2667000, 66500, 'Stavropol', 'Stavropolsky kray'),
('Kurganskaya oblast', 'R', 1112200, 71000, 'Kurgan', 'Kurganskaya oblast'),
('Sverdlovskaya oblast', 'R', 4686300, 194300, 'Yekaterinburg', 'Sverdlovskaya oblast'),
('Chelyabinskaya oblast', 'R', 3688700, 87900, 'Chelyabinsk', 'Chelyabinskaya oblast'),
('Rep. of Altay', 'R', 201600, 92600, 'Gorno Altaysk', 'Rep. of Altay'),
('Altayskiy kray', 'R', 2690100, 169100, 'Barnaul', 'Altayskiy kray'),
('Kemerovskaya oblast', 'R', 3063500, 95500, 'Kemerovo', 'Kemerovskaya oblast'),
('Novosibirskaya oblast', 'R', 2748600, 178200, 'Novosibirsk', 'Novosibirskaya oblast'),
('Omskaya oblast', 'R', 2176400, 139700, 'Omsk', 'Omskaya oblast'),
('Tomskaya oblast', 'R', 1077600, 316900, 'Tomsk', 'Tomskaya oblast'),
('Tyumenskaya oblast', 'R', 3169900, 1435200, 'Tyumen', 'Tyumenskaya oblast'),
('Rep. of Buryatiya', 'R', 1052500, 351300, 'Ulan Ude', 'Rep. of Buryatiya'),
('Rep. of Tyva', 'R', 309700, 170500, 'Kyzyl', 'Rep. of Tyva'),
('Rep. of Khakassiya', 'R', 585800, 61900, 'Abakan', 'Rep. of Khakassiya'),
('Krasnoyarskiy kray', 'R', 3105900, 2339700, 'Krasnoyarsk', 'Krasnoyarskiy kray'),
('Irkutskaya oblast', 'R', 2795200, 767900, 'Irkutsk', 'Irkutskaya oblast'),
('Chitinskaya oblast', 'R', 1295000, 431500, 'Chita', 'Chitinskaya oblast'),
('Rep. of Sakha', 'R', 1022800, 3103200, 'Yakutsk', 'Rep. of Sakha'),
('Yevreyskaya avt. oblast', 'R', 209900, 36000, 'Birobidzhan', 'Yevreyskaya avt. oblast'),
('Chukotsky ao', 'R', 90500, 737700, 'Anadyr', 'Chukotsky ao'),
('Primorsky kray', 'R', 2255400, 165900, 'Vladivostok', 'Primorsky kray'),
('Khabarovskiy kray', 'R', 1571200, 752600, 'Khabarovsk', 'Khabarovskiy kray'),
('Amurskaya oblast', 'R', 1037800, 363700, 'Blagoveshchensk', 'Amurskaya oblast'),
('Kamchatskaya oblast', 'R', 411100, 472300, 'Petropavlovsk Kamchatsky', 'Kamchatskaya oblast'),
('Magadanskaya oblast', 'R', 258200, 461400, 'Magadan', 'Magadanskaya oblast'),
('Sakhalinskaya oblast', 'R', 647800, 87100, 'Yuzhno Sakhalinsk', 'Sakhalinskaya oblast'),
('Leninobod', 'TAD', 1635900, 26100, 'Khujand', 'Leninobod'),
('Kulob', 'TAD', 668100, 12000, 'Kulob', 'Kulob'),
('Khatlon', 'TAD', 1113500, 12600, 'Qurghonteppa', 'Khatlon'),
('Badakhshoni Kuni', 'TAD', 167100, 63700, 'Khorugh', 'Badakhshoni Kuni'),
('Dushanbe (munic.)', 'TAD', 591900, 300, 'Dushanbe', 'Dushanbe (munic.)'),
('Adiyaman', 'TR', 513131, 7614, 'Adiyaman', 'Adiyaman'),
('Antalya', 'TR', 1132211, 20591, 'Antalya', 'Antalya'),
('Aydin', 'TR', 824816, 8007, 'Aydin', 'Aydin'),
('Balikesir', 'TR', 973314, 14292, 'Balikesir', 'Balikesir'),
('Batman', 'TR', 344669, 4694, 'Batman', 'Batman'),
('Bursa', 'TR', 1603137, 11043, 'Bursa', 'Bursa'),
('Denizli', 'TR', 750882, 11868, 'Denizli', 'Denizli'),
('Diyarbakir', 'TR', 1094996, 15355, 'Diyarbakir', 'Diyarbakir'),
('Edirne', 'TR', 404599, 6276, 'Edirne', 'Edirne'),
('Elazig', 'TR', 498225, 9153, 'Elazig', 'Elazig'),
('Erzurum', 'TR', 848201, 25066, 'Erzurum', 'Erzurum'),
('Eskisehir', 'TR', 641057, 13652, 'Eskisehir', 'Eskisehir'),
('Gaziantep', 'TR', 1140594, 7642, 'Gaziantep', 'Gaziantep'),
('Hatay', 'TR', 1109754, 5403, 'Antakya', 'Hatay'),
('Icel', 'TR', 1266995, 15853, 'Mersin', 'Icel'),
('Isparta', 'TR', 434771, 8933, 'Isparta', 'Isparta'),
('Karamanmaras', 'TR', 892952, 14327, 'Karaman Maras', 'Karamanmaras'),
('Kayseri', 'TR', 943484, 16917, 'Kayseri', 'Kayseri'),
('Kirikkale', 'TR', 349396, 4365, 'Kirikkale', 'Kirikkale'),
('Kocaeli', 'TR', 936163, 3626, 'Izmit', 'Kocaeli'),
('Konya', 'TR', 1750303, 38257, 'Konya', 'Konya'),
('Kutahya', 'TR', 578020, 11875, 'Kutahya', 'Kutahya'),
('Malatya', 'TR', 702055, 12313, 'Malatya', 'Malatya'),
('Manisa', 'TR', 1154418, 13810, 'Manisa', 'Manisa'),
('Ordu', 'TR', 830105, 6001, 'Ordu', 'Ordu'),
('Samsun', 'TR', 1158400, 9579, 'Samsun', 'Samsun'),
('Sanliurfa', 'TR', 1001455, 18584, 'Urfa', 'Sanliurfa'),
('Sivas', 'TR', 767481, 28488, 'Sivas', 'Sivas'),
('Trabzon', 'TR', 795849, 4685, 'Trabzon', 'Trabzon'),
('Usak', 'TR', 290283, 5341, 'Usak', 'Usak'),
('Van', 'TR', 637433, 19069, 'Van', 'Van'),
('Zonguldak', 'TR', 1073560, 8629, 'Zonguldak', 'Zonguldak'),
('Ahal', 'TM', 416400, 0, 'Ashgabat', 'Ahal'),
('Balkan', 'TM', 925500, 233900, 'Nebitdag', 'Balkan'),
('Dashhowuz', 'TM', 738000, 73600, 'Tashauz', 'Dashhowuz'),
('Leban', 'TM', 774700, 93800, 'Charjew', 'Leban'),
('Mary', 'TM', 859500, 86800, 'Mary', 'Mary'),
('Andijon', 'UZB', 1899000, 4200, 'Andijon', 'Andijon'),
('Bukhoro', 'UZB', 1262000, 39400, 'Bukhoro', 'Bukhoro'),
('Farghona', 'UZB', 2338000, 7100, 'Farghona', 'Farghona'),
('Jizzakh', 'UZB', 831000, 20500, 'Jizzakh', 'Jizzakh'),
('Khorazm', 'UZB', 1135000, 6300, 'Urganch', 'Khorazm'),
('Namangan', 'UZB', 1652000, 7900, 'Namangan', 'Namangan'),
('Nawoiy', 'UZB', 715000, 110800, 'Nawoiy', 'Nawoiy'),
('Qasqadare', 'UZB', 1812000, 28400, 'Qarshi', 'Qasqadare'),
('Samarqand', 'UZB', 2322000, 16400, 'Samarqand', 'Samarqand'),
('Sirdare', 'UZB', 600000, 5100, 'Guliston', 'Sirdare'),
('Surkhondare', 'UZB', 1437000, 20800, 'Termiz', 'Surkhondare'),
('Toshkent', 'UZB', 4450000, 15600, 'Tashkent', 'Toshkent'),
('Qoraqalpoghiston', 'UZB', 1343000, 164900, 'Nukus', 'Qoraqalpoghiston'),
('Alberta', 'CDN', 2696826, 661185, 'Edmonton', 'Alberta'),
('British Columbia', 'CDN', 3724500, 948596, 'Victoria', 'British Columbia'),
('Manitoba', 'CDN', 1113898, 650086, 'Winnipeg', 'Manitoba'),
('New Brunswick', 'CDN', 738133, 73437, 'Fredericton', 'New Brunswick'),
('Newfoundland', 'CDN', 551792, 404517, 'Saint Johns', 'Newfoundland'),
('Northwest Territories', 'CDN', 64402, 3379683, 'Yellowknife', 'Northwest Territories'),
('Nova Scotia', 'CDN', 909282, 55490, 'Halifax', 'Nova Scotia'),
('Ontario', 'CDN', 10753573, 1068582, 'Toronto', 'Ontario'),
('Prince Edward Island', 'CDN', 134557, 5657, 'Charlottetown', 'Prince Edward Island'),
('Quebec', 'CDN', 7138795, 1540680, 'Quebec', 'Quebec'),
('Saskatchewan', 'CDN', 990237, 651900, 'Regina', 'Saskatchewan'),
('Yukon Territory', 'CDN', 30766, 536324, 'Whitehorse', 'Yukon Territory'),
('San Jose', 'CR', 1163943, 4960, 'San Jose', 'San Jose'),
('Alajuela', 'CR', 569984, 9753, 'Alajuela', 'Alajuela'),
('Cartago', 'CR', 359765, 3125, 'Cartago', 'Cartago'),
('Heredia', 'CR', 256726, 2656, 'Heredia', 'Heredia'),
('Guanacaste', 'CR', 254530, 10141, 'Liberia', 'Guanacaste'),
('Punarenas', 'CR', 357103, 11277, 'Puntarenas', 'Punarenas'),
('Limon', 'CR', 237183, 9189, 'Limon', 'Limon'),
('Camaguey', 'C', 723000, 15990, 'Camaguey', 'Camaguey'),
('Ciego de Avila', 'C', 353000, 6910, 'Ciego de Avila', 'Ciego de Avila'),
('Cienfuegos', 'C', 354000, 4178, 'Cienfuegos', 'Cienfuegos'),
('Ciudad de la Habana', 'C', 2059000, 727, 'Havana', 'Ciudad de la Habana'),
('Granma', 'C', 773000, 8372, 'Bayamo', 'Granma'),
('Guantanamo', 'C', 484000, 6186, 'Guantanamo', 'Guantanamo'),
('Holguin', 'C', 972000, 9301, 'Holguin', 'Holguin'),
('La Habana', 'C', 630000, 5731, 'Havana', 'Ciudad de la Habana'),
('Las Tunas', 'C', 478000, 6589, 'Victoria de las Tunas', 'Las Tunas'),
('Matanzas', 'C', 596000, 11978, 'Matanzas', 'Matanzas'),
('Pinar del Rio', 'C', 678000, 10925, 'Pinar del Rio', 'Pinar del Rio'),
('Sancti Spiritus', 'C', 420000, 6744, 'Sancti Spiritus', 'Sancti Spiritus'),
('Santiago de Cuba', 'C', 968000, 6170, 'Santiago de Cuba', 'Santiago de Cuba'),
('Villa Clara', 'C', 796000, 8662, 'Santa Clara', 'Villa Clara'),
('Isla de la Juventud', 'C', 71000, 2396, 'Nueva Gerona', 'Isla de la Juventud'),
('La Libertad', 'PE', 1366125, 25569, 'Trujillo', 'La Libertad'),
('Atlantida', 'HCA', 263700, 4251, 'La Ceiba', 'Atlantida'),
('Colon', 'PA', 222600, 7247, 'Colon', 'Colon'),
('Colon', 'HCA', 167900, 8875, 'Trujillo', 'Colon'),
('Comayagua', 'HCA', 267000, 5196, 'Comayagua', 'Comayagua'),
('Copan', 'HCA', 241400, 3203, 'Santa Rosa de Copan', 'Copan'),
('Cortes', 'HCA', 732600, 3954, 'San Pedro Sula', 'Cortes'),
('Choluteca', 'HCA', 326100, 4211, 'Choluteca', 'Choluteca'),
('El Paraiso', 'HCA', 284100, 7218, 'Yuscaran', 'El Paraiso'),
('Francisco Morazan', 'HCA', 908300, 7946, 'Tegucigalpa', 'Francisco Morazan'),
('Gracias a Dios', 'HCA', 39000, 16630, 'Puerto Lempira', 'Gracias a Dios'),
('Intibuca', 'HCA', 137800, 3072, 'La Esperanza', 'Intibuca'),
('Islas de la Bahia', 'HCA', 24500, 261, 'Roatan', 'Islas de la Bahia'),
('Lempira', 'HCA', 194600, 4290, 'Gracias', 'Lempira'),
('Olancho', 'HCA', 318000, 24351, 'Jutigalpa', 'Olancho'),
('Santa Barbara', 'HCA', 307500, 5113, 'Santa Barbara', 'Santa Barbara'),
('Valle', 'HCA', 130900, 1565, 'Nacaome', 'Valle'),
('Aguascalientes', 'MEX', 862720, 5589, 'Aguascalientes', 'Aguascalientes'),
('Baja California', 'MEX', 2112140, 70113, 'Mexicali', 'Baja California'),
('Baja California Sur', 'MEX', 375494, 73677, 'La Paz', 'Baja California Sur'),
('Campeche', 'MEX', 642516, 51833, 'Campeche', 'Campeche'),
('Chiapas', 'MEX', 3584786, 73887, 'Tuxtla Gutierrez', 'Chiapas'),
('Chihuahua', 'MEX', 2793537, 247087, 'Chihuahua', 'Chihuahua'),
('Coahuila', 'MEX', 2173775, 151571, 'Saltillo', 'Coahuila'),
('Colima', 'MEX', 488028, 5455, 'Colima', 'Colima'),
('Guerrero', 'MEX', 2916567, 63749, 'Chilpancingo', 'Guerrero'),
('Hidalgo', 'MEX', 2112473, 20987, 'Pachuca de Soto', 'Hidalgo'),
('Jalisco', 'MEX', 5991176, 80137, 'Guadalajara', 'Jalisco'),
('Mexico, Estado de', 'MEX', 11707964, 21461, 'Toluca de Lerdo', 'Mexico, Estado de'),
('Michoacan', 'MEX', 3870604, 59864, 'Morelia', 'Michoacan'),
('Morelos', 'MEX', 1442662, 4941, 'Cuernavaca', 'Morelos'),
('Nayarit', 'MEX', 896702, 27621, 'Tepic', 'Nayarit'),
('Nuevo Leon', 'MEX', 3550114, 64555, 'Monterrey', 'Nuevo Leon'),
('Oaxaca', 'MEX', 3228895, 95364, 'Oaxaca', 'Oaxaca'),
('Puebla', 'MEX', 4624365, 33919, 'Puebla', 'Puebla'),
('Queretaro', 'MEX', 1250476, 11769, 'Queretaro', 'Queretaro'),
('Quintana Roo', 'MEX', 703536, 50350, 'Chetumal', 'Quintana Roo'),
('San Luis Potosi', 'MEX', 2200763, 62848, 'San Luis Potosi', 'San Luis Potosi'),
('Sinaloa', 'MEX', 2425675, 58092, 'Culiacan', 'Sinaloa'),
('Sonora', 'MEX', 2085536, 184934, 'Hermosillo', 'Sonora'),
('Tabasco', 'MEX', 1748769, 24661, 'Villahermosa', 'Tabasco'),
('Tamaulipas', 'MEX', 2527328, 79829, 'Ciudad Victoria', 'Tamaulipas'),
('Veracruz', 'MEX', 6737324, 72815, 'Jalapa', 'Veracruz'),
('Yucatan', 'MEX', 1556622, 39340, 'Merida', 'Yucatan'),
('Zacatecas', 'MEX', 1336496, 75040, 'Zacatecas', 'Zacatecas'),
('Distrito Federal', 'MEX', 8489007, 1499, 'Mexico City', 'Distrito Federal'),
('Distrito Federal', 'RA', 2965403, 200, 'Buenos Aires', 'Distrito Federal'),
('Distrito Federal', 'BR', 1817001, 5822, 'Brasilia', 'Distrito Federal'),
('Distrito Federal', 'YV', 2279677, 1930, 'Caracas', 'Distrito Federal'),
('Bocas del Toro', 'PA', 88400, 8745, 'Bocas del Toro', 'Bocas del Toro'),
('Cocle', 'PA', 177100, 4927, 'Penonome', 'Cocle'),
('Comarca de San Blas', 'PA', 0, 2357, 'El Porvenir', 'Comarca de San Blas'),
('Chiriqui', 'PA', 396800, 8653, 'David', 'Chiriqui'),
('Darien', 'PA', 45000, 16671, 'La Palma', 'Darien'),
('Herrera', 'PA', 108700, 2341, 'Chitre', 'Herrera'),
('Los Santos', 'PA', 82800, 3806, 'Las Tablas', 'Los Santos'),
('Veraguas', 'PA', 224700, 11239, 'Santiago', 'Veraguas'),
('Alabama', 'USA', 4319154, 133915, 'Montgomery', 'Alabama'),
('Alaska', 'USA', 609311, 1530694, 'Juneau', 'Alaska'),
('Arizona', 'USA', 4554966, 295259, 'Phoenix', 'Arizona'),
('Arkansas', 'USA', 2522819, 137754, 'Little Rock', 'Arkansas'),
('California', 'USA', 32268301, 411047, 'Sacramento', 'California'),
('Colorado', 'USA', 3892644, 269595, 'Denver', 'Colorado'),
('Connecticut', 'USA', 3269858, 12997, 'Hartford', 'Connecticut'),
('Delaware', 'USA', 731581, 5297, 'Dover', 'Delaware'),
('Florida', 'USA', 14653945, 151939, 'Tallahassee', 'Florida'),
('Hawaii', 'USA', 1183723, 16760, 'Honolulu', 'Hawaii'),
('Idaho', 'USA', 1186602, 216430, 'Boise', 'Idaho'),
('Illinois', 'USA', 11895849, 145933, 'Springfield', 'Illinois'),
('Indiana', 'USA', 5864108, 93719, 'Indianapolis', 'Indiana'),
('Iowa', 'USA', 2852423, 145752, 'Des Moines', 'Iowa'),
('Kansas', 'USA', 2594840, 213097, 'Topeka', 'Kansas'),
('Kentucky', 'USA', 3908124, 104661, 'Frankfort', 'Kentucky'),
('Louisiana', 'USA', 4351769, 123677, 'Baton Rouge', 'Louisiana'),
('Maine', 'USA', 1242051, 86156, 'Augusta', 'Maine'),
('Maryland', 'USA', 5094289, 27091, 'Annapolis', 'Maryland'),
('Massachusetts', 'USA', 6117520, 21455, 'Boston', 'Massachusetts'),
('Michigan', 'USA', 9773892, 151584, 'Lansing', 'Michigan'),
('Minnesota', 'USA', 4685549, 218600, 'St. Paul', 'Minnesota'),
('Mississippi', 'USA', 2730501, 123514, 'Jackson', 'Mississippi'),
('Missouri', 'USA', 5402058, 180514, 'Jefferson City', 'Missouri'),
('Montana', 'USA', 878810, 380848, 'Helena', 'Montana'),
('Nebraska', 'USA', 1656870, 200349, 'Lincoln', 'Nebraska'),
('Nevada', 'USA', 1676809, 286352, 'Carson City', 'Nevada'),
('New Hampshire', 'USA', 1172709, 24033, 'Concord', 'New Hampshire'),
('New Jersey', 'USA', 8052849, 20168, 'Trenton', 'New Jersey'),
('New Mexico', 'USA', 1729751, 314925, 'Santa Fe', 'New Mexico'),
('New York', 'USA', 18137226, 127189, 'Albany', 'New York'),
('North Carolina', 'USA', 7425183, 136412, 'Raleigh', 'North Carolina'),
('North Dakota', 'USA', 640883, 183117, 'Bismarck', 'North Dakota'),
('Ohio', 'USA', 11186331, 107044, 'Columbus', 'Ohio'),
('Oklahoma', 'USA', 3317091, 181185, 'Oklahoma City', 'Oklahoma'),
('Oregon', 'USA', 3243487, 251418, 'Salem', 'Oregon'),
('Pennsylvania', 'USA', 12019661, 117347, 'Harrisburg', 'Pennsylvania'),
('Rhode Island', 'USA', 987429, 3139, 'Providence', 'Rhode Island'),
('South Carolina', 'USA', 3760181, 80582, 'Columbia', 'South Carolina'),
('South Dakota', 'USA', 737973, 199730, 'Pierre', 'South Dakota'),
('Tennessee', 'USA', 5368198, 109153, 'Nashville', 'Tennessee'),
('Texas', 'USA', 19439337, 691027, 'Austin', 'Texas'),
('Utah', 'USA', 2059148, 219888, 'Salt Lake City', 'Utah'),
('Vermont', 'USA', 588978, 24900, 'Montpelier', 'Vermont'),
('Virginia', 'USA', 6733996, 105586, 'Richmond', 'Virginia'),
('Washington', 'USA', 5610362, 176479, 'Olympia', 'Washington'),
('West Virginia', 'USA', 1815787, 62761, 'Charleston', 'West Virginia'),
('Wisconsin', 'USA', 5169677, 145436, 'Madison', 'Wisconsin'),
('Wyoming', 'USA', 479743, 253324, 'Cheyenne', 'Wyoming'),
('Distr. Columbia', 'USA', 528964, 179, 'Washington', 'Distr. Columbia'),
('New South Wales', 'AUS', 6115100, 801428, 'Sydney', 'New South Wales'),
('Northern Territory', 'AUS', 173878, 1346200, 'Darwin', 'Northern Territory'),
('Queensland', 'AUS', 3277000, 1727000, 'Brisbane', 'Queensland'),
('South Australia', 'AUS', 1474000, 984377, 'Adelaide', 'South Australia'),
('Tasmania', 'AUS', 473022, 67800, 'Hobart', 'Tasmania'),
('Western Australia', 'AUS', 1731700, 2525500, 'Perth', 'Western Australia'),
('Australia Capital Territory', 'AUS', 304100, 2452, 'Canberra', 'Australia Capital Territory'),
('Kirimati', 'AUS', 1770, 135, 'Flying Fish Cove', 'Kirimati'),
('Catamarca', 'RA', 264324, 102602, 'San Fernando del Valle de Catamarca', 'Catamarca'),
('Chaco', 'RA', 839677, 99633, 'Resistencia', 'Chaco'),
('Chubut', 'RA', 357189, 224686, 'Rawson', 'Chubut'),
('Corrientes', 'RA', 795594, 88199, 'Corrientes', 'Corrientes'),
('Entre Rios', 'RA', 1020257, 78781, 'Parana', 'Entre Rios'),
('Formosa', 'RA', 398413, 72066, 'Formosa', 'Formosa'),
('Jujuy', 'RA', 512329, 53219, 'San Salvador de Jujuy', 'Jujuy'),
('La Pampa', 'RA', 259996, 143440, 'Santa Rosa', 'La Pampa'),
('La Rioja', 'RA', 220729, 89680, 'La Rioja', 'La Rioja'),
('Mendoza', 'RA', 1412481, 148827, 'Mendoza', 'Mendoza'),
('Misiones', 'RA', 788915, 29801, 'Posadas', 'Misiones'),
('Neuquen', 'RA', 388833, 94078, 'Neuquen', 'Neuquen'),
('Rio Negro', 'RA', 506772, 203013, 'Viedma', 'Rio Negro'),
('Salta', 'RA', 866153, 155488, 'Salta', 'Salta'),
('San Juan', 'RA', 528715, 89651, 'San Juan', 'San Juan'),
('San Luis', 'RA', 286458, 76748, 'San Luis', 'San Luis'),
('Santa Cruz', 'RA', 159839, 243943, 'Rio Gallegos', 'Santa Cruz'),
('Santa Fe', 'RA', 2798422, 133007, 'Santa Fe', 'Santa Fe'),
('Santiago de Estero', 'RA', 671988, 136351, 'Santiago del Estero', 'Santiago de Estero'),
('Tierra del Fuego', 'RA', 69369, 21571, 'Ushuaia', 'Tierra del Fuego'),
('Tucuman', 'RA', 1142105, 22524, 'San Miguel de Tucuman', 'Tucuman'),
('Acre', 'BR', 483483, 153149, 'Rio Branco', 'Acre'),
('Alagoas', 'BR', 2637843, 27933, 'Maceio', 'Alagoas'),
('Amapa', 'BR', 373994, 143453, 'Macapa', 'Amapa'),
('Amazonas', 'CO', 39937, 109665, 'Leticia', 'Amazonas'),
('Amazonas', 'BR', 2390102, 1577820, 'Manaus', 'Amazonas'),
('Amazonas', 'PE', 374587, 39249, 'Chachapoyas', 'Amazonas'),
('Amazonas', 'YV', 94590, 175750, 'Puerto Ayacucho', 'Amazonas'),
('Bahia', 'BR', 12531895, 567295, 'Salvador', 'Bahia'),
('Ceara', 'BR', 6803567, 146348, 'Fortaleza', 'Ceara'),
('Espirito Santo', 'BR', 2786126, 46184, 'Vitoria', 'Espirito Santo'),
('Goias', 'BR', 4501538, 341289, 'Goiania', 'Goias'),
('Maranhao', 'BR', 5218442, 333365, 'Sao Luis', 'Maranhao'),
('Mato Grosso', 'BR', 2227983, 906806, 'Cuiaba', 'Mato Grosso'),
('Mato Grosso do Sul', 'BR', 1922258, 358158, 'Campo Grande', 'Mato Grosso do Sul'),
('Minas Gerais', 'BR', 16660691, 588383, 'Belo Horizonte', 'Minas Gerais'),
('Para', 'BR', 5522783, 1253164, 'Belem', 'Para'),
('Paraiba', 'BR', 3305562, 56584, 'Joao Pessoa', 'Paraiba'),
('Parana', 'BR', 8985981, 199709, 'Curitiba', 'Parana'),
('Pernambuco', 'BR', 7404559, 98937, 'Recife', 'Pernambuco'),
('Piaui', 'BR', 2676098, 252378, 'Teresina', 'Piaui'),
('Rio de Janeiro', 'BR', 13316455, 43909, 'Rio de Janeiro', 'Rio de Janeiro'),
('Rio Grande do Norte', 'BR', 2556939, 53306, 'Natal', 'Rio Grande do Norte'),
('Rio Grande do Sul', 'BR', 9623003, 282062, 'Porto Alegre', 'Rio Grande do Sul'),
('Rondonia', 'BR', 1221290, 238512, 'Porto Velho', 'Rondonia'),
('Roraima', 'BR', 247724, 225116, 'Boa Vista', 'Roraima'),
('Santa Catarina', 'BR', 4865090, 95442, 'Florianopolis', 'Santa Catarina'),
('Sergipe', 'BR', 1617368, 22050, 'Aracaju', 'Sergipe'),
('Tocantins', 'BR', 1049742, 278420, 'Palmas', 'Tocantins'),
('Antioquia', 'CO', 4067207, 63612, 'Medellin', 'Antioquia'),
('Atlantico', 'CO', 1478213, 3388, 'Barranquilla', 'Atlantico'),
('Bolivar', 'CO', 1288985, 25978, 'Cartagena', 'Bolivar'),
('Bolivar', 'YV', 1142210, 238000, 'Ciudad Bolivar', 'Bolivar'),
('Boyaca', 'CO', 1209739, 23189, 'Tunja', 'Boyaca'),
('Caldas', 'CO', 883024, 7888, 'Manizales', 'Caldas'),
('Caqueta', 'CO', 264507, 88965, 'Florencia', 'Caqueta'),
('Casanare', 'CO', 147472, 44640, 'Yopal', 'Casanare'),
('Cauca', 'CO', 857751, 29308, 'Popayan', 'Cauca'),
('Cesar', 'CO', 699428, 22905, 'Valledupar', 'Cesar'),
('Choco', 'CO', 313567, 46530, 'Quibdo', 'Choco'),
('Cundinamarca', 'CO', 1512928, 22623, 'Bogota', 'Santa Fe de Bogota, DC'),
('Guainia', 'CO', 12345, 72238, 'Puerto Inirida', 'Guainia'),
('Guajira, La', 'CO', 299995, 20848, 'Riohacha', 'Guajira, La'),
('Guaviare', 'CO', 47073, 42327, 'San Jose del Guaviare', 'Guaviare'),
('Huila', 'CO', 693712, 19890, 'Neiva', 'Huila'),
('Huila', 'ANG', 869000, 75002, 'Lubango', 'Huila'),
('Magdalena', 'CO', 890934, 23188, 'Santa Marta', 'Magdalena'),
('Meta', 'CO', 474046, 85635, 'Villavicencio', 'Meta'),
('Narino', 'CO', 1085173, 33268, 'Pasto', 'Narino'),
('Norte de Santander', 'CO', 913491, 21658, 'Cucuta', 'Norte de Santander'),
('Putumayo', 'CO', 174219, 24885, 'Mocoa', 'Putumayo'),
('Quindio', 'CO', 392208, 1845, 'Armenia', 'Quindio'),
('Risaralda', 'CO', 652872, 4140, 'Pereira', 'Risaralda'),
('San Andres y Providencia', 'CO', 35818, 44, 'San Andres', 'San Andres y Providencia'),
('Santa Fe de Bogota, DC', 'CO', 4236490, 1587, 'Bogota', 'Santa Fe de Bogota, DC'),
('Santander del Sur', 'CO', 1511392, 30537, 'Bucaramanga', 'Santander del Sur'),
('Tolima', 'CO', 1142220, 23562, 'Ibague', 'Tolima'),
('Valle de Cauca', 'CO', 3027247, 22140, 'Cali', 'Valle de Cauca'),
('Vaupes', 'CO', 26178, 65268, 'Mitu', 'Vaupes'),
('Vichada', 'CO', 18702, 100242, 'Puerto Carreno', 'Vichada'),
('Ancash', 'PE', 1024398, 35825, 'Huaraz', 'Ancash'),
('Apurimac', 'PE', 409630, 20895, 'Abancay', 'Apurimac'),
('Arequipa', 'PE', 999851, 63345, 'Arequipa', 'Arequipa'),
('Ayacucho', 'PE', 517397, 43814, 'Ayacucho', 'Ayacucho'),
('Cajamarca', 'PE', 1349129, 33247, 'Cajamarca', 'Cajamarca'),
('Cuzco', 'PE', 1107473, 71891, 'Cuzco', 'Cuzco'),
('Huanuco', 'PE', 722669, 36938, 'Huanuco', 'Huanuco'),
('Ica', 'PE', 608609, 21327, 'Ica', 'Ica'),
('Junin', 'PE', 1132448, 44409, 'Huancayo', 'Junin'),
('Lambayeque', 'PE', 1009655, 14231, 'Chiclayo', 'Lambayeque'),
('Loreto', 'PE', 789235, 368851, 'Iquitos', 'Loreto'),
('Madre de Dios', 'PE', 74306, 85182, 'Puerto Maldonado', 'Madre de Dios'),
('Pasco', 'PE', 243366, 25319, 'Cerro de Pasco', 'Pasco'),
('Piura', 'PE', 1468337, 35892, 'Piura', 'Piura'),
('Puno', 'PE', 1144151, 71999, 'Puno', 'Puno'),
('San Martin', 'PE', 627781, 51253, 'Moyobamba', 'San Martin'),
('Tacna', 'PE', 245843, 16075, 'Tacna', 'Tacna'),
('Ucayali', 'PE', 364596, 102410, 'Pucallpa', 'Ucayali'),
('Anzoategui', 'YV', 1034311, 43300, 'Barcelona', 'Anzoategui'),
('Apure', 'YV', 382572, 76500, 'San Fernando', 'Apure'),
('Aragua', 'YV', 1344099, 7014, 'Maracay', 'Aragua'),
('Barinas', 'YV', 519197, 35200, 'Barinas', 'Barinas'),
('Carabobo', 'YV', 1823767, 4650, 'Valencia', 'Carabobo'),
('Cojedes', 'YV', 227741, 14800, 'San Carlos', 'Cojedes'),
('Delta Amacuro', 'YV', 114390, 40200, 'Tucupita', 'Delta Amacuro'),
('Falcon', 'YV', 699232, 24800, 'Coro', 'Falcon'),
('Guarico', 'YV', 583221, 64986, 'San Juan', 'Guarico'),
('Lara', 'YV', 1430968, 19800, 'Barquisimeto', 'Lara'),
('Miranda', 'YV', 2303302, 7950, 'Los Teques', 'Miranda'),
('Monagas', 'YV', 555705, 28900, 'Maturin', 'Monagas'),
('Nueva Esparta', 'YV', 330307, 1150, 'La Ascuncion', 'Nueva Esparta'),
('Portuguesa', 'YV', 720865, 15200, 'Guanare', 'Portuguesa'),
('Tachira', 'YV', 946949, 11100, 'San Cristobal', 'Tachira'),
('Yaracuy', 'YV', 466152, 7100, 'San Felipe', 'Yaracuy'),
('Zulia', 'YV', 2820250, 63100, 'Maracaibo', 'Zulia'),
('Cuanza Norte', 'ANG', 378000, 24110, 'Ndalatando', 'Cuanza Norte'),
('Cuanza Sul', 'ANG', 651000, 55660, 'Sumbe', 'Cuanza Sul'),
('Lunda Norte', 'ANG', 292000, 102783, 'Lucapa', 'Lunda Norte'),
('Lunda Sul', 'ANG', 155000, 56985, 'Saurimo', 'Lunda Sul'),
('Moxico', 'ANG', 316000, 223023, 'Luena', 'Moxico'),
('Cuando Cubango', 'ANG', 130000, 199049, 'Menongue', 'Cuando Cubango'),
('Bengo', 'ANG', 166000, 31371, 'Caxito', 'Bengo'),
('Cunene', 'ANG', 232000, 88342, 'Ngiva', 'Cunene'),
('Adamaoua', 'CAM', 495200, 63691, 'Ngaoundere', 'Adamaoua'),
('Est', 'CAM', 517200, 109011, 'Bertoua', 'Est'),
('Nord extreme', 'CAM', 1855700, 34246, 'Maroua', 'Nord extreme'),
('Cote', 'CAM', 1354800, 20239, 'Douala', 'Cote'),
('Nord', 'CAM', 832200, 65576, 'Garoua', 'Nord'),
('Nordoueste', 'CAM', 1237300, 17810, 'Bamenda', 'Nordoueste'),
('Ouest', 'CAM', 1339800, 13872, 'Bafoussam', 'Ouest'),
('Sud', 'CAM', 373800, 47110, 'Ebolowa', 'Sud'),
('Sudoueste', 'CAM', 838000, 24471, 'Buea', 'Sudoueste'),
('El Bahr el Ahmar', 'ET', 108000, 203685, 'Hurghada', 'El Bahr el Ahmar'),
('Matruh', 'ET', 182000, 212112, 'Marsa Matruh', 'Matruh'),
('Sina al Janubiyah', 'ET', 33000, 33140, 'El Tur', 'Sina al Janubiyah'),
('Sina ash Shamaliyah', 'ET', 196000, 27574, 'El Arish', 'Sina ash Shamaliyah'),
('El Wadi el Jadid', 'ET', 126000, 376505, 'El Kharga', 'El Wadi el Jadid'),
('El Buhayra', 'ET', 3602000, 10130, 'Damanhur', 'El Buhayra'),
('El Daqahliya', 'ET', 3828000, 3471, 'El Mansura', 'El Daqahliya'),
('Dumyat', 'ET', 808000, 589, 'Dumyat', 'Dumyat'),
('El Gharbiya', 'ET', 3113000, 1942, 'Tanta', 'El Gharbiya'),
('Ismailiya', 'ET', 623000, 1442, 'Ismailiya', 'Ismailiya'),
('Kafr el Sheikh', 'ET', 1968000, 3437, 'Kafr el Sheikh', 'Kafr el Sheikh'),
('El Minufiya', 'ET', 2449000, 1532, 'Shibin el Kom', 'El Minufiya'),
('El Qalubiya', 'ET', 2868000, 1001, 'Benha', 'El Qalubiya'),
('Sharqiya', 'ET', 3766000, 4180, 'Zagazig', 'Sharqiya'),
('Aswan', 'ET', 883000, 679, 'Aswan', 'Aswan'),
('Asyut', 'ET', 2456000, 1553, 'Asyut', 'Asyut'),
('Beni Suef', 'ET', 1586000, 1322, 'Beni Suef', 'Beni Suef'),
('El Faiyum', 'ET', 1720000, 1827, 'El Faiyum', 'El Faiyum'),
('El Giza', 'ET', 4265000, 85153, 'El Giza', 'El Giza'),
('El Minya', 'ET', 2916000, 2262, 'El Minya', 'El Minya'),
('Qena', 'ET', 2493000, 1851, 'Qena', 'Qena'),
('Sohag', 'ET', 2689000, 1547, 'Sohag', 'Sohag'),
('Bur Said (munic.)', 'ET', 461000, 72, 'Bur Said', 'Bur Said (munic.)'),
('El Iskandariya (munic.)', 'ET', 3170000, 2679, 'El Iskandariya', 'El Iskandariya (munic.)'),
('El Qahira (munic.)', 'ET', 6452000, 214, 'El Qahira', 'El Qahira (munic.)'),
('El Suweiz (munic.)', 'ET', 392000, 17840, 'El Suweiz', 'El Suweiz (munic.)'),
('Coast', 'EAK', 1880000, 83603, 'Mombasa', 'Coast'),
('Eastern', 'Z', 826100, 69106, 'Chipata', 'Eastern'),
('Eastern', 'EAK', 3724000, 159891, 'Embu', 'Eastern'),
('North Eastern', 'EAK', 372000, 126090, 'Garissa', 'North Eastern'),
('Nyanza', 'EAK', 3558000, 16162, 'Kisumu', 'Nyanza'),
('Rift Valley', 'EAK', 4894000, 173868, 'Nakuru', 'Rift Valley'),
('Western', 'Z', 575500, 126386, 'Mongu', 'Western'),
('Western', 'EAK', 2543000, 8360, 'Kakamega', 'Western'),
('Antsiranana', 'RM', 689800, 43046, 'Antsiranana', 'Antsiranana'),
('Antananarivo', 'RM', 3195800, 58283, 'Antananarivo', 'Antananarivo'),
('Fianarantsoa', 'RM', 2209700, 102373, 'Fianarantsoa', 'Fianarantsoa'),
('Mahajanga', 'RM', 1075300, 150023, 'Majunga', 'Mahajanga'),
('Toamasina', 'RM', 1444700, 71911, 'Tamatave', 'Toamasina'),
('Toliary', 'RM', 1396700, 161405, 'Toliary', 'Toliary'),
('Cabo Delgado', 'MOC', 1202200, 82625, 'Pemba', 'Cabo Delgado'),
('Gaza', 'MOC', 1401500, 75709, 'Xai Xai', 'Gaza'),
('Manica', 'MOC', 609500, 61661, 'Chimoio', 'Manica'),
('Maputo', 'MOC', 840800, 25756, 'Maputo', 'Maputo (munic.)'),
('Nampula', 'MOC', 2841400, 81606, 'Nampula', 'Nampula'),
('Niassa', 'MOC', 686700, 129055, 'Lichinga', 'Niassa'),
('Sofala', 'MOC', 1427500, 68018, 'Beira', 'Sofala'),
('Tete', 'MOC', 734600, 100724, 'Tete', 'Tete'),
('Zambezia', 'MOC', 2619300, 105008, 'Quelimane', 'Zambezia'),
('Maputo (munic.)', 'MOC', 931600, 602, 'Maputo', 'Maputo (munic.)'),
('Kaolack', 'SN', 816400, 16010, 'Kaolack', 'Kaolack'),
('Saint Louis', 'SN', 680200, 44127, 'Saint Louis', 'Saint Louis'),
('Thies', 'SN', 948100, 6601, 'Thies', 'Thies'),
('Ziguinchor', 'SN', 394700, 7339, 'Ziguinchor', 'Ziguinchor'),
('Aali an Nil', 'SUD', 1599605, 238792, 'Malakal', 'Aali an Nil'),
('Bahr al Ghazal', 'SUD', 2265510, 200894, 'Waw', 'Bahr al Ghazal'),
('Darfur', 'SUD', 3093699, 508684, 'al Fasher', 'Darfur'),
('al Istiwaiyah', 'SUD', 1406181, 197969, 'Juba', 'al Istiwaiyah'),
('al Khartum', 'SUD', 1802299, 28165, 'Khartoum', 'al Khartum'),
('Kurdufan', 'SUD', 3093294, 380255, 'al Ubayyid', 'Kurdufan'),
('ash Shamaliyah', 'SUD', 1083024, 476040, 'ad Damir', 'ash Shamaliyah'),
('ash Sharqiyah', 'SUD', 2208209, 334074, 'Kassala', 'ash Sharqiyah'),
('al Wusta', 'SUD', 4012543, 139017, 'Wad Madani', 'al Wusta'),
('Dodoma', 'EAT', 1237800, 41311, 'Dodoma', 'Dodoma'),
('Arusha', 'EAT', 1351700, 82306, 'Arusha', 'Arusha'),
('Kilimanjaro', 'EAT', 1108700, 13309, 'Moshi', 'Kilimanjaro'),
('Tanga', 'EAT', 1283600, 26808, 'Tanga', 'Tanga'),
('Morogoro', 'EAT', 1222700, 70799, 'Morogoro', 'Morogoro'),
('Pwani', 'EAT', 638000, 32407, 'Dar es Salaam', 'Daressalam'),
('Daressalam', 'EAT', 1360900, 1393, 'Dar es Salaam', 'Daressalam'),
('Mtwara', 'EAT', 889500, 16707, 'Mtwara Mikandani', 'Mtwara'),
('Ruvuma', 'EAT', 783300, 63498, 'Songea', 'Ruvuma'),
('Mbeya', 'EAT', 1476200, 60350, 'Mbeya', 'Mbeya'),
('Rukwa', 'EAT', 684000, 68635, 'Sumbawanga', 'Rukwa'),
('Kigoma', 'EAT', 854800, 37037, 'Kigoma Ujiji', 'Kigoma'),
('Shinyanga', 'EAT', 1772500, 50781, 'Shinyanga', 'Shinyanga'),
('Kagera', 'EAT', 1326200, 28388, 'Bukoba', 'Kagera'),
('Mwanza', 'EAT', 1878300, 19592, 'Mwanza', 'Mwanza'),
('Mara', 'EAT', 970900, 19566, 'Musoma', 'Mara'),
('Kaskazini Ujunga', 'EAT', 97000, 470, 'Mkokotoni', 'Kaskazini Ujunga'),
('Kusini Ujunga', 'EAT', 70200, 854, 'Koani', 'Kusini Ujunga'),
('Mjini Magharibi', 'EAT', 208300, 230, 'Zanzibar', 'Mjini Magharibi'),
('Kaskazini Pemba', 'EAT', 137400, 574, 'Wete', 'Kaskazini Pemba'),
('Kusini Pemba', 'EAT', 127600, 332, 'Chake Cahke', 'Kusini Pemba'),
('Bas Zaire', 'ZRE', 2158595, 53920, 'Matadi', 'Bas Zaire'),
('Equateur', 'ZRE', 3960187, 403293, 'Mbandaka', 'Equateur'),
('Haut Zaire', 'ZRE', 5119750, 503239, 'Kisangani', 'Haut Zaire'),
('Kasai Occidental', 'ZRE', 3465756, 156967, 'Kananga', 'Kasai Occidental'),
('Kasai Oriental', 'ZRE', 2859220, 168216, 'Mbuji Mayi', 'Kasai Oriental'),
('Kivu', 'ZRE', 5232442, 256662, 'Bukavu', 'Kivu'),
('Shaba', 'ZRE', 4452618, 496965, 'Lubumbashi', 'Shaba'),
('Kinshasa', 'ZRE', 2778281, 9965, 'Kinshasa', 'Kinshasa'),
('Copperbelt', 'Z', 1866400, 31328, 'Ndola', 'Copperbelt'),
('Luapula', 'Z', 526300, 50567, 'Mansa', 'Luapula'),
('Lusaka', 'Z', 1151300, 21896, 'Lusaka', 'Lusaka'),
('Northern', 'Z', 832700, 147826, 'Kasama', 'Northern'),
('Northwestern', 'Z', 396100, 125827, 'Solwezi', 'Northwestern'),
('Southern', 'Z', 906900, 85283, 'Livingstone', 'Southern');

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
  `respuesta` varchar(100) NOT NULL,
  `descripRespuesta` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `respuesta`
--

INSERT INTO `respuesta` (`idRespuesta`, `respuesta`, `descripRespuesta`) VALUES
(1, '1 mes ', ''),
(2, '1', ''),
(3, '2', ''),
(4, '3', '');

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
  `idEncuestado` int(11) DEFAULT NULL
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
-- Indices de la tabla `country`
--
ALTER TABLE `country`
  ADD PRIMARY KEY (`Code`),
  ADD UNIQUE KEY `Name` (`Name`);

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
-- Indices de la tabla `province`
--
ALTER TABLE `province`
  ADD PRIMARY KEY (`Name`,`Country`);

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
  ADD KEY `idEncuestado` (`idEncuestado`);

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
  MODIFY `idBloque` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
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
  MODIFY `idEstadoEncuesta` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `etiqueta`
--
ALTER TABLE `etiqueta`
  MODIFY `idEtiqueta` int(11) NOT NULL AUTO_INCREMENT;
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
  MODIFY `idPregunta` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `relevamiento`
--
ALTER TABLE `relevamiento`
  MODIFY `idRelevamiento` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `respuesta`
--
ALTER TABLE `respuesta`
  MODIFY `idRespuesta` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de la tabla `respuesta_elegida`
--
ALTER TABLE `respuesta_elegida`
  MODIFY `idRespuestaElegida` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `respuesta_pregunta`
--
ALTER TABLE `respuesta_pregunta`
  MODIFY `idRespPreg` int(11) NOT NULL AUTO_INCREMENT;
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
