-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 26-02-2021 a las 12:57:41
-- Versión del servidor: 10.4.8-MariaDB
-- Versión de PHP: 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";
DROP DATABASE IF EXISTS tipo4;
CREATE DATABASE tipo4;
USE tipo4;

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `tipo6`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `encuesta`
--
DROP DATABASE IF EXISTS tipo4;
CREATE DATABASE tipo4;
USE tipo4;
CREATE TABLE `encuesta` (
  `id_encuesta` int(3) NOT NULL,
  `nombre` varchar(15) DEFAULT NULL,
  `edad` int(3) DEFAULT NULL,
  `id_preferido` int(3) DEFAULT NULL,
  `consumeMas` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `encuesta`
--

INSERT INTO `encuesta` (`id_encuesta`, `nombre`, `edad`, `id_preferido`, `consumeMas`) VALUES
(2, 'Francisco', 33, 3, 'Rápida'),
(3, 'Pepe', 35, 7, 'Rápida'),
(5, 'María', 43, 4, 'Rápida'),
(6, 'Sara', 30, 7, 'Otros'),
(8, 'Jaime', 53, 3, 'Tradicional'),
(9, 'Fernando', 45, 6, 'Rápida'),
(10, 'Mónica', 47, 7, 'Otros'),
(15, 'Domingo', 23, 6, NULL),
(24, 'Santiago', 23, 7, NULL),
(25, 'Alberto', 18, 4, NULL);

-- --------------------------------------------------------

--
-- Estructura Stand-in para la vista `encuesta_preferido`
-- (Véase abajo para la vista actual)
--
CREATE TABLE `encuesta_preferido` (
`id_encuesta` int(3)
,`nombre` varchar(15)
,`edad` int(3)
,`id_preferido` int(3)
,`nombre_pref` varchar(15)
);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `postres_base`
--

CREATE TABLE `postres_base` (
  `id_postre` int(3) NOT NULL,
  `nombre` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `postres_base`
--

INSERT INTO `postres_base` (`id_postre`, `nombre`) VALUES
(1, 'Arroz con leche'),
(2, 'Molotov'),
(4, 'Tarta 3 chocolates'),
(5, 'Dulces de Belén'),
(6, 'Crépes'),
(7, 'Tiramisú'),
(8, 'Piononos'),
(9, 'Natillas con galleta'),
(10, 'Ninguno');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `postres_persona`
--

CREATE TABLE `postres_persona` (
  `id_encuesta` int(3) NOT NULL,
  `id_postre` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `postres_persona`
--

INSERT INTO `postres_persona` (`id_encuesta`, `id_postre`) VALUES
(2, 6),
(2, 8),
(3, 6),
(5, 2),
(5, 9),
(6, 1),
(6, 5),
(6, 8),
(8, 10),
(9, 10),
(10, 8),
(15, 1),
(15, 5),
(15, 7),
(15, 8),
(24, 8),
(25, 1),
(25, 5);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `preferido`
--

CREATE TABLE `preferido` (
  `id_preferido` int(3) NOT NULL,
  `nombre_pref` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `preferido`
--

INSERT INTO `preferido` (`id_preferido`, `nombre_pref`) VALUES
(1, 'Estofado'),
(2, 'Albóndigas'),
(3, 'Paella'),
(4, 'Puchero'),
(5, 'Croquetas'),
(6, 'Pizza'),
(7, 'Hamburguesas');

-- --------------------------------------------------------

--
-- Estructura para la vista `encuesta_preferido`
--
DROP TABLE IF EXISTS `encuesta_preferido`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `encuesta_preferido`  AS  select `encuesta`.`id_encuesta` AS `id_encuesta`,`encuesta`.`nombre` AS `nombre`,`encuesta`.`edad` AS `edad`,`preferido`.`id_preferido` AS `id_preferido`,`preferido`.`nombre_pref` AS `nombre_pref` from (`encuesta` join `preferido` on(`encuesta`.`id_preferido` = `preferido`.`id_preferido`)) ;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `encuesta`
--
ALTER TABLE `encuesta`
  ADD PRIMARY KEY (`id_encuesta`),
  ADD KEY `prefe` (`id_preferido`);

--
-- Indices de la tabla `postres_base`
--
ALTER TABLE `postres_base`
  ADD PRIMARY KEY (`id_postre`);

--
-- Indices de la tabla `postres_persona`
--
ALTER TABLE `postres_persona`
  ADD PRIMARY KEY (`id_encuesta`,`id_postre`),
  ADD KEY `fk_postre` (`id_postre`);

--
-- Indices de la tabla `preferido`
--
ALTER TABLE `preferido`
  ADD PRIMARY KEY (`id_preferido`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `encuesta`
--
ALTER TABLE `encuesta`
  MODIFY `id_encuesta` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT de la tabla `postres_base`
--
ALTER TABLE `postres_base`
  MODIFY `id_postre` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `preferido`
--
ALTER TABLE `preferido`
  MODIFY `id_preferido` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `encuesta`
--
ALTER TABLE `encuesta`
  ADD CONSTRAINT `prefe` FOREIGN KEY (`id_preferido`) REFERENCES `preferido` (`id_preferido`) ON DELETE CASCADE;

--
-- Filtros para la tabla `postres_persona`
--
ALTER TABLE `postres_persona`
  ADD CONSTRAINT `fk_encuesta` FOREIGN KEY (`id_encuesta`) REFERENCES `encuesta` (`id_encuesta`) ON DELETE CASCADE,
  ADD CONSTRAINT `fk_postre` FOREIGN KEY (`id_postre`) REFERENCES `postres_base` (`id_postre`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
