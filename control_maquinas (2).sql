-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3309
-- Tiempo de generación: 03-03-2023 a las 19:10:18
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
(71, 56, 'sebastian', 'soltera', ''),
(74, 47, 'sebastian', 'fernando', '12mendo'),
(75, 47, 'sebastian', 'fernando', '12mendo');

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
  `lugar_origen` varchar(50) NOT NULL,
  `datos_proveedor` text NOT NULL,
  `uso_diario` varchar(30) NOT NULL,
  `temperatura` varchar(10) NOT NULL,
  `tiempo_carga` varchar(30) NOT NULL,
  `nivel_ruido` varchar(20) NOT NULL,
  `personal` varchar(12) NOT NULL,
  `tipo` varchar(20) NOT NULL,
  `periodicidad` varchar(15) NOT NULL,
  `descripcion` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `maquina`
--

INSERT INTO `maquina` (`id`, `codigo`, `nombre`, `marca`, `modelo`, `ubicacion`, `serial`, `voltaje`, `vigencia`, `lugar_origen`, `datos_proveedor`, `uso_diario`, `temperatura`, `tiempo_carga`, `nivel_ruido`, `personal`, `tipo`, `periodicidad`, `descripcion`) VALUES
(47, 'MwC Component', 'Dilan', 'Barcel', 'epitelios', '23', '4567', 'amperios', '2023-02-23', 'alemania', 'Es importante ', '43', '23', '25', '56', 'interno', 'preventivo', 'semestral', 'Por favor Arreglen'),
(55, '', 'dfdfdf', '', '', '', '', '', '2023-02-23', '', '', '', '', '', '', '', '', '', ''),
(56, '', 'dilanchito', '', '', '', '', '', '2023-02-23', '', '', '', '', '', '', '', '', '', ''),
(57, 'fjgfg', 'bmmmh', '', '', '', 'fggfg', '', '2023-02-24', '', '', '', '', '', '', 'interno', 'correctivo', 'trimestral', '');

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
  `tipo_mantenimiento` varchar(30) NOT NULL,
  `motivo` varchar(50) NOT NULL,
  `descripcion_tarea` text NOT NULL,
  `herramientas` varchar(200) NOT NULL,
  `reporte` text NOT NULL,
  `observaciones` text NOT NULL,
  `fecha_hora_inicio` datetime DEFAULT NULL,
  `fecha_hora_fin` datetime DEFAULT NULL,
  `mano_obra` int(50) DEFAULT NULL,
  `transportes` int(100) DEFAULT NULL,
  `consumibles` int(100) DEFAULT NULL,
  `otros` int(100) DEFAULT NULL,
  `valor_repuestos` int(100) DEFAULT NULL,
  `total` int(100) DEFAULT NULL,
  `estado` enum('abierto','cerrado') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `orden`
--

INSERT INTO `orden` (`id`, `id_maquina`, `fecha_solicitud`, `descripcion`, `solicitud_material`, `solicitud`, `lugar_orden`, `asignacion`, `tipo_mantenimiento`, `motivo`, `descripcion_tarea`, `herramientas`, `reporte`, `observaciones`, `fecha_hora_inicio`, `fecha_hora_fin`, `mano_obra`, `transportes`, `consumibles`, `otros`, `valor_repuestos`, `total`, `estado`) VALUES
(3, 47, '2023-02-08', '', '', '', '', '', 'afk', '', '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'abierto'),
(4, 47, '0000-00-00', 'gmgm', 'ggn', 'gmg', '', '', 'gng', '', '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'abierto'),
(5, 47, '2023-02-24', '', '', '', '', '', '', '', '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'abierto'),
(6, 56, '2023-02-24', 'scsscsc', 'ggn', 'olis olis', '', '', 'mecanico_conflictivo', '', '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'abierto'),
(7, 56, '2023-02-24', 'fsfsf', 'scsc', 'scscs', '', '', 'mecanico_conflictivo', '', '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'abierto'),
(8, 56, '2023-02-25', 'NECESITO ARREGLAR PRONTO ESTO', 'Necesito cobre, oro, y a dilan', 'Sebastian Andres Messi', '', '', 'mecanico_preventivo', '', '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'abierto'),
(9, 47, '2023-02-25', '', '', '', '', '', '', '', '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'abierto'),
(10, 47, '2023-02-25', '', '', '', '', '', '', '', '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'abierto'),
(11, 47, '2023-02-25', '', '', '', '', '', '', '', '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'abierto'),
(12, 47, '2023-03-03', 'Por favor Arreglen', 'sapo ternero', 'sebastian Messi', '', '', 'mecanico_preventivo', '', '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'abierto'),
(13, 57, '2023-03-03', 'scsscsc', 'ggn', 'gmg', '', '', 'electrico_preventivo', '', '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'abierto'),
(14, 56, '2023-03-03', '', 'ss', 'ss', '', '', '', '', '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'abierto'),
(15, 47, '2023-03-03', '', '', 'sc', '', '', '', '', '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'abierto');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `orden_repuestos`
--

CREATE TABLE `orden_repuestos` (
  `id` int(11) NOT NULL,
  `id_orden` int(11) NOT NULL,
  `id_repuesto` int(11) NOT NULL,
  `cantidad` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `repuesto`
--

CREATE TABLE `repuesto` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `valor` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `repuesto`
--

INSERT INTO `repuesto` (`id`, `nombre`, `valor`) VALUES
(14, 'sebastian', '4567'),
(21, 'sebancho', '4567'),
(22, 'sebancho', '234');

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
  `proxima_activacion` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tarea`
--

INSERT INTO `tarea` (`id`, `id_maquina`, `activacion`, `periodicidad`, `descripcion`, `proxima_activacion`) VALUES
(3, 57, '2023-03-08', 'Mensual', '', NULL);

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
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_id_maquina` (`id_maquina`) USING BTREE;

--
-- Indices de la tabla `maquina`
--
ALTER TABLE `maquina`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `orden`
--
ALTER TABLE `orden`
  ADD PRIMARY KEY (`id`),
  ADD KEY `maquina-orden` (`id_maquina`);

--
-- Indices de la tabla `orden_repuestos`
--
ALTER TABLE `orden_repuestos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `repuesto-orden` (`id_repuesto`),
  ADD KEY `orden-repuestos` (`id_orden`);

--
-- Indices de la tabla `repuesto`
--
ALTER TABLE `repuesto`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tarea`
--
ALTER TABLE `tarea`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `fk_id_maquina` (`id_maquina`);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=76;

--
-- AUTO_INCREMENT de la tabla `maquina`
--
ALTER TABLE `maquina`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;

--
-- AUTO_INCREMENT de la tabla `orden`
--
ALTER TABLE `orden`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT de la tabla `orden_repuestos`
--
ALTER TABLE `orden_repuestos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `repuesto`
--
ALTER TABLE `repuesto`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT de la tabla `tarea`
--
ALTER TABLE `tarea`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `componente`
--
ALTER TABLE `componente`
  ADD CONSTRAINT `componente_ibfk_1` FOREIGN KEY (`id_maquina`) REFERENCES `maquina` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `orden`
--
ALTER TABLE `orden`
  ADD CONSTRAINT `maquina-orden` FOREIGN KEY (`id_maquina`) REFERENCES `maquina` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `orden_repuestos`
--
ALTER TABLE `orden_repuestos`
  ADD CONSTRAINT `orden-repuestos` FOREIGN KEY (`id_orden`) REFERENCES `orden` (`id`),
  ADD CONSTRAINT `repuesto-orden` FOREIGN KEY (`id_repuesto`) REFERENCES `repuesto` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `tarea`
--
ALTER TABLE `tarea`
  ADD CONSTRAINT `tarea_ibfk_1` FOREIGN KEY (`id_maquina`) REFERENCES `maquina` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
