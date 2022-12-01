-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 12-03-2017 a las 15:29:55
-- Versión del servidor: 5.5.39
-- Versión de PHP: 5.4.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
drop database if exists tipo2;
--
-- Base de datos: `tipo2`
--
CREATE DATABASE IF NOT EXISTS `tipo2` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `tipo2`;


CREATE TABLE `participantes` (
  `id_pelicula` int(4) NOT NULL,
  `id_persona` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `participantes`
--

INSERT INTO `participantes` (`id_pelicula`, `id_persona`) VALUES
(1, 1),
(1, 2),
(1, 12),
(2, 5),
(2, 6),
(3, 3),
(3, 4),
(4, 7),
(4, 8),
(6, 9),
(6, 10),
(7, 11),
(7, 12);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `peliculas`
--

CREATE TABLE `peliculas` (
  `id` int(4) UNSIGNED NOT NULL,
  `peli_nombre` varchar(45) NOT NULL,
  `peli_tipo` tinyint(3) NOT NULL DEFAULT 0,
  `peli_anno` smallint(5) UNSIGNED NOT NULL DEFAULT 0
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `peliculas`
--

INSERT INTO `peliculas` (`id`, `peli_nombre`, `peli_tipo`, `peli_anno`) VALUES
(1, 'Bruce Almighty', 5, 2010),
(2, 'Office Space', 4, 2000),
(3, 'Grand Canyon', 2, 1991),
(6, 'Liberad a Willy', 8, 1993),
(4, 'Solo en casa', 8, 1990),
(7, 'Planeta Rojo', 1, 2000);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `personas`
--

CREATE TABLE `personas` (
  `id` int(4) NOT NULL,
  `nombre` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `personas`
--

INSERT INTO `personas` (`id`, `nombre`) VALUES
(1, 'Jim Carrey'),
(2, 'Tom Shadyac'),
(3, 'Lawrence Kasdan'),
(4, 'Kevin Kline'),
(5, 'Ron Livingston'),
(6, 'Mike Judge'),
(7, 'Macaulay Culkin'),
(8, 'Chris Columbus'),
(9, 'Jason James Richter'),
(10, 'Simon Wincer'),
(11, 'Val Kilmer'),
(12, 'Antony Hoffman');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipos`
--

CREATE TABLE `tipos` (
  `id` tinyint(3) UNSIGNED NOT NULL,
  `label` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tipos`
--

INSERT INTO `tipos` (`id`, `label`) VALUES
(1, 'Sci Fi'),
(2, 'Drama'),
(3, 'Adventure'),
(4, 'War'),
(5, 'Comedy'),
(6, 'Horror'),
(7, 'Action'),
(8, 'Kids');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `participantes`
--
ALTER TABLE `participantes`
  ADD PRIMARY KEY (`id_pelicula`,`id_persona`),
  ADD KEY `id_persona` (`id_persona`);

--
-- Indices de la tabla `peliculas`
--
ALTER TABLE `peliculas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `peli_type` (`peli_tipo`,`peli_anno`);

--
-- Indices de la tabla `personas`
--
ALTER TABLE `personas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tipos`
--
ALTER TABLE `tipos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `peliculas`
--
ALTER TABLE `peliculas`
  MODIFY `id` int(4) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `personas`
--
ALTER TABLE `personas`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT de la tabla `tipos`
--
ALTER TABLE `tipos`
  MODIFY `id` tinyint(3) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `participantes`
--
ALTER TABLE `participantes`
  ADD CONSTRAINT `participantes_ibfk_1` FOREIGN KEY (`id_persona`) REFERENCES `personas` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
