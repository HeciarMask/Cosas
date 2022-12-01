-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 24-02-2021 a las 12:59:01
-- Versión del servidor: 10.1.35-MariaDB
-- Versión de PHP: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `tipo8`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `caracteristicas`
--
DROP DATABASE IF EXISTS tipo5;
CREATE DATABASE tipo5;
USE tipo5;
CREATE TABLE `caracteristicas` (
  `id` int(3) NOT NULL,
  `nombre` varchar(120) COLLATE utf8mb4_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Volcado de datos para la tabla `caracteristicas`
--

INSERT INTO `caracteristicas` (`id`, `nombre`) VALUES
(1, 'Precio'),
(2, 'Servicios'),
(3, 'Atencion al Cliente'),
(4, 'Musica'),
(5, 'Higiene'),
(6, 'Pedidos a domicilio'),
(7, 'Profesionalidad del personal');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comidas`
--

CREATE TABLE `comidas` (
  `id` int(3) NOT NULL,
  `nombre` varchar(120) COLLATE utf8mb4_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Volcado de datos para la tabla `comidas`
--

INSERT INTO `comidas` (`id`, `nombre`) VALUES
(1, 'Hamburguesa'),
(2, 'Pizza'),
(3, 'Ensalada'),
(4, 'Chuleta'),
(5, 'Paella'),
(6, 'Ensaladilla'),
(7, 'Gambas'),
(8, 'Chacinas'),
(9, 'Aliños'),
(10, 'Montaditos');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `locales`
--

CREATE TABLE `locales` (
  `id` int(3) NOT NULL,
  `nombre` varchar(40) COLLATE utf8mb4_bin NOT NULL,
  `direccion` varchar(20) COLLATE utf8mb4_bin NOT NULL,
  `Carac_ppal` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Volcado de datos para la tabla `locales`
--

INSERT INTO `locales` (`id`, `nombre`, `direccion`, `Carac_ppal`) VALUES
(1, 'Casa Antonio', 'Valme 4', 1),
(2, 'Bar Fernando', 'Pantoja 5', 2),
(3, 'Bar Rincón', 'Cramona 7', 4),
(4, 'Otro más', 'Berenguer 11', 3),
(5, 'El Pin', 'Buraco 9', 4),
(6, 'Casa Osuna', 'Pasaje Viñas', 5);

-- --------------------------------------------------------

--
-- Estructura Stand-in para la vista `locales_caracteristicas`
-- (Véase abajo para la vista actual)
--
CREATE TABLE `locales_caracteristicas` (
`ID` int(3)
,`nombre` varchar(40)
,`direccion` varchar(20)
,`id_carac` int(3)
,`nombre_carac` varchar(120)
);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rel-comidas`
--

CREATE TABLE `rel-comidas` (
  `id_comida` int(3) NOT NULL,
  `id_local` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Volcado de datos para la tabla `rel-comidas`
--

INSERT INTO `rel-comidas` (`id_comida`, `id_local`) VALUES
(1, 1),
(1, 2),
(1, 4),
(1, 5),
(2, 3),
(2, 4),
(2, 5),
(2, 6),
(3, 1),
(3, 2),
(4, 1),
(4, 3),
(5, 2),
(5, 3),
(5, 4),
(6, 1),
(6, 2),
(6, 6),
(7, 2),
(8, 1),
(8, 5),
(9, 3),
(9, 6),
(10, 4),
(10, 5);

-- --------------------------------------------------------

--
-- Estructura para la vista `locales_caracteristicas`
--
DROP TABLE IF EXISTS `locales_caracteristicas`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `locales_caracteristicas`  AS  select `locales`.`id` AS `ID`,`locales`.`nombre` AS `nombre`,`locales`.`direccion` AS `direccion`,`caracteristicas`.`id` AS `id_carac`,`caracteristicas`.`nombre` AS `nombre_carac` from (`locales` join `caracteristicas` on((`locales`.`Carac_ppal` = `caracteristicas`.`id`))) ;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `caracteristicas`
--
ALTER TABLE `caracteristicas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `comidas`
--
ALTER TABLE `comidas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `locales`
--
ALTER TABLE `locales`
  ADD PRIMARY KEY (`id`),
  ADD KEY `Carac_ppal` (`Carac_ppal`);

--
-- Indices de la tabla `rel-comidas`
--
ALTER TABLE `rel-comidas`
  ADD PRIMARY KEY (`id_comida`,`id_local`),
  ADD KEY `id_local` (`id_local`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `caracteristicas`
--
ALTER TABLE `caracteristicas`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `comidas`
--
ALTER TABLE `comidas`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `locales`
--
ALTER TABLE `locales`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `locales`
--
ALTER TABLE `locales`
  ADD CONSTRAINT `locales_ibfk_1` FOREIGN KEY (`Carac_ppal`) REFERENCES `caracteristicas` (`id`);

--
-- Filtros para la tabla `rel-comidas`
--
ALTER TABLE `rel-comidas`
  ADD CONSTRAINT `rel-comidas_ibfk_1` FOREIGN KEY (`id_comida`) REFERENCES `comidas` (`id`),
  ADD CONSTRAINT `rel-comidas_ibfk_2` FOREIGN KEY (`id_local`) REFERENCES `locales` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
