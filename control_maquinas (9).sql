-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3309
-- Tiempo de generación: 20-07-2023 a las 22:31:49
-- Versión del servidor: 10.4.24-MariaDB
-- Versión de PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `control_maquinas`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `componente`
--

CREATE TABLE `componente` (
  `id` int(11) NOT NULL,
  `id_maquina` int(11) NOT NULL,
  `nombre_componente` varchar(40) NOT NULL,
  `marca` varchar(20) NOT NULL,
  `referencia` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `componente`
--

INSERT INTO `componente` (`id`, `id_maquina`, `nombre_componente`, `marca`, `referencia`) VALUES
(77, 47, 'sebastiannnns', 'fernandooooos', '12menditoo'),
(80, 60, 'sebastiannnn', 'fernando', 'dkmdlfmdlf');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `maquina`
--

CREATE TABLE `maquina` (
  `id` int(11) NOT NULL,
  `codigo` varchar(30) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `marca` varchar(30) NOT NULL,
  `modelo` varchar(30) NOT NULL,
  `ubicacion` varchar(20) NOT NULL,
  `serial` text NOT NULL,
  `voltaje` varchar(10) NOT NULL,
  `vigencia` date DEFAULT NULL,
  `lugar_origen` date NOT NULL,
  `datos_proveedor` text NOT NULL,
  `uso_diario` varchar(30) NOT NULL,
  `temperatura` varchar(10) NOT NULL,
  `tiempo_carga` varchar(30) NOT NULL,
  `nivel_ruido` varchar(20) NOT NULL,
  `personal` varchar(12) NOT NULL,
  `tipo` varchar(20) NOT NULL,
  `periodicidad` varchar(15) NOT NULL,
  `descripcion` text NOT NULL,
  `img` text NOT NULL,
  `qr` text DEFAULT NULL,
  `manual` text DEFAULT NULL,
  `hoja` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `maquina`
--

INSERT INTO `maquina` (`id`, `codigo`, `nombre`, `marca`, `modelo`, `ubicacion`, `serial`, `voltaje`, `vigencia`, `lugar_origen`, `datos_proveedor`, `uso_diario`, `temperatura`, `tiempo_carga`, `nivel_ruido`, `personal`, `tipo`, `periodicidad`, `descripcion`, `img`, `qr`, `manual`, `hoja`) VALUES
(47, 'MwC Component', 'Dilan 2.0', 'Barcel', 'epitelios', '23', '4567', 'amperios', '2023-04-03', '2023-04-03', 'Es importante ', '43', '23', '25', '56', 'interno', 'correctivo', 'trimestral', 'Por favor Arreglen', '', NULL, NULL, NULL),
(56, '', 'dilanchito', '', '', '', '', '', '2023-04-03', '2023-04-03', '', 'j', 'n', 'j', '56', '', 'preventivo', '', '', '', '', '', ''),
(57, 'fjgfg', 'bmmmh', '', '', '', 'fggfg', '', '2023-02-24', '0000-00-00', '', '', '', '', '', 'interno', 'correctivo', 'trimestral', '', '', NULL, NULL, NULL),
(59, '', 'huevo', '', '', '', '', '', '2023-03-27', '2023-03-27', 'DIOSSSSSSSSss', '', '', '45', '', '', '', '', '', '../build/img/maquinas//', '../build/img/maquinas//', '../build/img/maquinas//', '../build/img/maquinas//'),
(60, '2191969', 'Martillo Volador', 'madrid ', 'epitelios', '23', '4949', '34', '2023-04-03', '2023-04-03', 'DIOSSSSSSSS', '43', '23', '25', '56', 'externo', 'correctivo', 'mensual', 'Por favor Arreglen esto de inmediato', '', NULL, NULL, NULL),
(61, 'a', 'a', 'a', 'a', 'a', 'a', 'a', '2023-04-13', '2023-04-13', 'a', 'a', 'a', 'a', 'a', 'externo', 'correctivo', 'trimestral', 'a', '../build/img/maquinas/AFD_2.png', NULL, NULL, NULL),
(62, '', '', '', '', '', '', '', '0000-00-00', '0000-00-00', '', '', '', '', '', '', '', '', '', '../build/img/maquinas/imagen_2023-02-07_204617566.png', NULL, NULL, NULL),
(63, '123456', '', '', '', '', '', '', '0000-00-00', '0000-00-00', '', '', '', '', '', '', '', '', '', '../build/img/maquinas/123456/imagen_2023-02-07_204617566.png', '../build/img/maquinas/123456/WhatsApp Image 2023-02-07 at 9.44.23 AM (1).jpeg', '../build/img/maquinas/123456/Mon Plaisir College HAVO - VWO Profiel 2023 - 2024 (1).docx', '../build/img/maquinas/123456/Migración de una página web de un servidor a otro.docx'),
(64, '123456789', '', '', '', '', '', '', '0000-00-00', '0000-00-00', '', '', '', '', '', '', '', '', '', '../build/img/maquinas/123456789/imagen_2023-02-07_204617566.png', '../build/img/maquinas/123456789/WhatsApp Image 2023-02-07 at 9.44.23 AM (1).jpeg', '../build/img/maquinas/123456789/Mon Plaisir College HAVO - VWO Profiel 2023 - 2024 (1).docx', '../build/img/maquinas/123456789/Migración de una página web de un servidor a otro.docx'),
(65, '27798', 'HOLA COMO ESTA', '', '', '', 'fggfg', '', '0000-00-00', '0000-00-00', '', '', '', '', '', '', '', '', '', '../build/img/maquinas/27798/maxresdefault.jpg', '../build/img/maquinas/27798/Evidencia Taller 1.jpeg', '../build/img/maquinas/27798/', '../build/img/maquinas/27798/'),
(66, '27798', 'truli', '', '', '', '', '', '0000-00-00', '0000-00-00', '', '', '', '', '', '', '', 'semestral', '', '../build/img/maquinas/27798/WhatsApp Image 2023-02-15 at 6.03.43 PM.jpeg', '../build/img/maquinas/27798/', '../build/img/maquinas/27798/', '../build/img/maquinas/27798/'),
(67, '27798', '', '', '', '', '', '', '0000-00-00', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `orden`
--

CREATE TABLE `orden` (
  `id` int(11) NOT NULL,
  `id_maquina` int(11) NOT NULL,
  `fecha_solicitud` date DEFAULT NULL,
  `descripcion` text NOT NULL,
  `solicitud_material` text NOT NULL,
  `solicitud` varchar(50) NOT NULL,
  `lugar_orden` varchar(50) NOT NULL,
  `asignacion` varchar(50) NOT NULL,
  `tipo_mantenimiento` varchar(30) DEFAULT NULL,
  `motivo` varchar(50) NOT NULL,
  `descripcion_trabajo` text NOT NULL,
  `herramientas` varchar(200) NOT NULL,
  `observaciones` text NOT NULL,
  `fecha_hora_inicio` datetime DEFAULT NULL,
  `fecha_hora_fin` datetime DEFAULT NULL,
  `estado` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `orden`
--

INSERT INTO `orden` (`id`, `id_maquina`, `fecha_solicitud`, `descripcion`, `solicitud_material`, `solicitud`, `lugar_orden`, `asignacion`, `tipo_mantenimiento`, `motivo`, `descripcion_trabajo`, `herramientas`, `observaciones`, `fecha_hora_inicio`, `fecha_hora_fin`, `estado`) VALUES
(5, 47, '2023-04-03', 'Por favor Arreglen ssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssss', 'ss', 'olis olis', '', 'NO SE ', 'electrico_preventivo', '', 'DESCRIBEME', 'SI O NOs', 'SIs', '2023-04-03 00:00:00', '0000-00-00 00:00:00', 'abierto'),
(8, 0, '2023-04-03', 'NECESITO ARREGLAR PRONTO ESTO YAYAYA', 'Necesito cobre, oro, y a dilan yaya', 'Sebastian Andres Messi', '', '', 'electrico_preventivo', '', '', '', '', NULL, NULL, 'abierto'),
(10, 47, '2023-02-25', '', '', '', '', '', 'electrico_preventivo', '', '', '', '', '2023-02-25 00:00:00', '2023-04-10 19:45:24', 'cerrado'),
(12, 0, '2023-04-03', 'Por favor Arreglen esto de inmediato', 'sapo ternero', 'sebastian Messi', '', '', 'electrico_conflictivo', '', '', '', '', NULL, NULL, 'abierto'),
(13, 57, '2023-03-03', 'scsscsc', 'ggn', 'gmg', '', '', 'electrico_preventivo', '', '', '', '', NULL, NULL, 'abierto'),
(14, 56, '2023-03-03', '', 'ss', 'ss', '', '', 'mecanico_preventivo', '', '', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'abierto'),
(15, 47, '2023-03-03', '', '', 'sc', '', '', 'electrico_preventivo', '', '', '', '', '2023-03-03 00:00:00', '0000-00-00 00:00:00', 'cerrado'),
(16, 56, '2023-03-03', 'no tienen nada que ver', 'por favor damelos', 'sebancho ', '', '', 'mecanico_conflictivo', '', '', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'abierto'),
(17, 57, '2023-03-03', 'hola que hace', 'donde estas', 'pedro', '', '', 'electrico_preventivo', '', '', '', '', NULL, NULL, 'abierto'),
(18, 47, '2023-03-03', 'scsscsc', 'd3d3d3d', '3d3d3d', '', '', 'electrico_preventivo', '', '', '', '', NULL, NULL, 'abierto'),
(19, 57, '2023-03-03', 'yo soy CRPINGA', 'venga deme', 'dilan corredor leonel andress vinicus', '', '', 'mecanico_conflictivo', '', '', '', '', NULL, NULL, 'abierto'),
(20, 47, '2023-03-03', 'NECESITO ARREGLAR PRONTO ESTO', 'Necesito cobre, oro, y a dilan', 'Sebastian Andres Messi', '', '', 'mecanico_preventivo', '', '', '', '', NULL, NULL, 'abierto'),
(21, 47, '2023-03-16', 'scsscsc', 'hbhbf', 'fg', '', '', '', '', '', '', '', NULL, NULL, 'abierto'),
(22, 47, '2023-04-07', 'prueba', 'si', 'dilan', '', '', 'mecanico_preventivo', '', '', '', '', NULL, NULL, 'abierto'),
(23, 59, '2023-04-07', 'prueba', 'prueba', 'prueba', '', '', 'mecanico_conflictivo', '', '', '', '', NULL, NULL, 'abierto'),
(24, 59, NULL, 'puede ser', '', '', '', '', '', '', '', '', '', '2023-04-29 00:00:00', NULL, 'abierto'),
(25, 56, '2023-04-13', '1231', '1231', '1231', '', '', 'mecanico_conflictivo', '', '', '', '', '2023-04-13 00:00:00', '0000-00-00 00:00:00', 'abierto'),
(26, 60, '2023-04-03', 'ssisisis', 'scsc', 'sebastian Messi', 'SI ESTAS', 'NO SE ', 'electrico_preventivo', 'hola que hace', 'DESCRIBEMEee', 'SI O NO', 'SI', '2023-04-13 00:00:00', '0000-00-00 00:00:00', 'cerrado'),
(27, 47, '2023-04-11', 'Por favor Arreglen', 'scsc', 'scscs', '', '', '', '', '', '', '', '2023-04-11 00:00:00', NULL, ''),
(28, 47, '2023-04-27', 'Por favor Arreglen', 'scsc', 'scscs', '', '', '', '', '', '', '', '2023-04-27 00:00:00', '0000-00-00 00:00:00', ''),
(29, 65, '0000-00-00', 'hola', 'hola', 'hola', '', '', 'mecanico_conflictivo', '', '', '', '', '2023-04-25 00:00:00', '2023-05-03 06:52:00', 'cerrado'),
(30, 47, NULL, '', '', '', '', '', NULL, '', '', '', '', '0000-00-00 00:00:00', NULL, ''),
(31, 60, NULL, '', '', '', '', '', NULL, '', '', '', '', '0000-00-00 00:00:00', NULL, ''),
(32, 65, NULL, '', '', '', '', '', NULL, '', '', '', '', '0000-00-00 00:00:00', NULL, ''),
(33, 61, NULL, '', '', '', '', '', NULL, '', '', '', '', '0000-00-00 00:00:00', NULL, ''),
(34, 47, NULL, '', '', '', '', '', NULL, '', '', '', '', '0000-00-00 00:00:00', NULL, ''),
(35, 47, NULL, 'pruebs', '', '', '', '', NULL, '', '', '', '', '2023-07-26 00:00:00', NULL, ''),
(36, 65, NULL, '', '', '', '', '', NULL, '', '', '', '', '0000-00-00 00:00:00', NULL, ''),
(37, 66, NULL, 'NECESITO ARREGLAR PRONTO ESTO YAYAYA', '', '', '', '', NULL, '', '', '', '', '0000-00-00 00:00:00', NULL, ''),
(38, 60, NULL, 'gmgm', '', '', '', '', NULL, '', '', '', '', '2023-07-28 00:00:00', NULL, ''),
(39, 61, NULL, 'Por favor Arreglen', '', '', '', '', NULL, '', '', '', '', '2023-07-29 00:00:00', NULL, ''),
(40, 47, NULL, '', '', '', '', '', NULL, '', '', '', '', '0000-00-00 00:00:00', NULL, '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `repuesto`
--

CREATE TABLE `repuesto` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `marca` varchar(20) NOT NULL,
  `referencia` varchar(30) NOT NULL,
  `cantidad` varchar(50) NOT NULL,
  `valor` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `repuesto`
--

INSERT INTO `repuesto` (`id`, `nombre`, `marca`, `referencia`, `cantidad`, `valor`) VALUES
(24, 'un repuesto', 'marcador', 'no sabria decirle', '5', '35353'),
(28, 'sebancho', 'madrid ', '12mendo', '33', '234');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tarea`
--

CREATE TABLE `tarea` (
  `id` int(11) NOT NULL,
  `id_maquina` int(11) NOT NULL,
  `activacion` date NOT NULL,
  `periodicidad` varchar(20) NOT NULL,
  `descripcion` text NOT NULL,
  `proxima_activacion` date DEFAULT NULL,
  `id_componente` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tarea`
--

INSERT INTO `tarea` (`id`, `id_maquina`, `activacion`, `periodicidad`, `descripcion`, `proxima_activacion`, `id_componente`) VALUES
(16, 57, '2023-04-07', '', '', '2023-04-03', NULL),
(20, 59, '2023-04-06', '', 'puede ser', '2023-04-29', NULL),
(21, 60, '2023-04-13', '', 'ssisisis', '2023-04-13', NULL),
(22, 47, '2023-07-05', '', '', '0000-00-00', NULL),
(23, 60, '2023-07-05', '', '', '0000-00-00', NULL),
(25, 61, '2023-06-28', '', '', '0000-00-00', NULL),
(26, 66, '0000-00-00', '', '2023-07-04', '0000-00-00', NULL),
(27, 47, '2023-06-29', '', '', '0000-00-00', NULL),
(28, 47, '2023-06-29', '', '', '0000-00-00', NULL),
(29, 65, '2023-07-03', '', '', '0000-00-00', NULL),
(30, 47, '2023-07-04', '', '', '0000-00-00', NULL),
(31, 57, '2023-07-04', '', '', '0000-00-00', 77),
(32, 60, '2023-07-21', '', '', '0000-00-00', 77),
(33, 47, '2023-07-19', '', 'prueba', '2023-07-27', 77),
(34, 47, '2023-07-19', '', 'prueba', '2023-07-26', 77),
(35, 47, '2023-07-19', '', 'pruebs', '2023-07-26', 77),
(36, 65, '2023-07-22', '', '', '0000-00-00', 77),
(37, 66, '2023-08-04', '', 'NECESITO ARREGLAR PRONTO ESTO YAYAYA', '0000-00-00', 80),
(38, 60, '2023-07-29', '', 'gmgm', '2023-07-28', 77),
(39, 61, '2023-07-28', '', 'Por favor Arreglen', '2023-07-29', 77),
(40, 47, '2023-08-01', '', '', '0000-00-00', 80);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `id` int(11) NOT NULL,
  `created` datetime NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `correo` varchar(50) NOT NULL,
  `clave` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id`, `created`, `nombre`, `correo`, `clave`) VALUES
(1, '2023-02-11 23:28:06', 'dilan', 'dilancorr@gmail.com', 'transformice13'),
(2, '2023-02-09 23:28:15', 'jusecasa', 'jusecasa1@hotmail.com', '12345'),
(3, '2023-02-12 18:03:59', 'sebastian', 'eeeee@gmail.com', 'penelope'),
(4, '2023-02-12 23:43:16', 'sebancho', 'epale@gmail.com', 'juan');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `componente`
--
ALTER TABLE `componente`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indices de la tabla `maquina`
--
ALTER TABLE `maquina`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `orden`
--
ALTER TABLE `orden`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `repuesto`
--
ALTER TABLE `repuesto`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tarea`
--
ALTER TABLE `tarea`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `componente`
--
ALTER TABLE `componente`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=81;

--
-- AUTO_INCREMENT de la tabla `maquina`
--
ALTER TABLE `maquina`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=68;

--
-- AUTO_INCREMENT de la tabla `orden`
--
ALTER TABLE `orden`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT de la tabla `repuesto`
--
ALTER TABLE `repuesto`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT de la tabla `tarea`
--
ALTER TABLE `tarea`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
