-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 11-12-2014 a las 14:42:11
-- Versión del servidor: 5.5.39
-- Versión de PHP: 5.4.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `filmes`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `gente`
--
drop database if exists filmes;
create database  filmes;
use filmes;
CREATE TABLE IF NOT EXISTS `gente` (
`gente_id` int(10) unsigned NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `esactor` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `esdirector` tinyint(1) unsigned NOT NULL DEFAULT '0'
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Volcado de datos para la tabla `gente`
--

INSERT INTO `gente` (`gente_id`, `nombre`, `esactor`, `esdirector`) VALUES
(1, 'Jim Carrey', 1, 0),
(2, 'Tom Shadyac', 0, 1),
(3, 'Lawrence Kasdan', 0, 1),
(4, 'Kevin Kline', 1, 0),
(5, 'Ron Livingston', 1, 0),
(6, 'Mike Judge', 0, 1),
(7, 'Macaulay Culkin', 1, 0),
(8, 'Chris Columbus', 0, 1),
(9, 'Jason James Richter', 1, 0),
(10, 'Simon Wincer', 0, 1),
(11, 'Val Kilmer', 1, 0),
(12, 'Antony Hoffman', 0, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `peliculas`
--

CREATE TABLE IF NOT EXISTS `peliculas` (
`peli_id` int(10) unsigned NOT NULL,
  `peli_nombre` varchar(45) NOT NULL,
  `peli_tipo` tinyint(4) NOT NULL DEFAULT '0',
  `peli_anno` smallint(5) unsigned NOT NULL DEFAULT '0',
  `peli_actor_principal` int(10) unsigned NOT NULL DEFAULT '0',
  `peli_director` int(10) unsigned NOT NULL DEFAULT '0'
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Volcado de datos para la tabla `peliculas`
--

INSERT INTO `peliculas` (`peli_id`, `peli_nombre`, `peli_tipo`, `peli_anno`, `peli_actor_principal`, `peli_director`) VALUES
(1, 'Bruce Almighty', 5, 2014, 1, 2),
(2, 'Office Space', 5, 1999, 5, 6),
(3, 'Grand Canyon', 2, 1991, 4, 3),
(6, 'Liberad a Willy', 8, 1993, 9, 10),
(4, 'Solo en casa', 8, 1990, 7, 8),
(7, 'Planeta Rojo', 1, 2000, 11, 12);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipos_peli`
--

CREATE TABLE IF NOT EXISTS `tipos_peli` (
`tipo_id` tinyint(3) unsigned NOT NULL,
  `label` varchar(100) NOT NULL
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Volcado de datos para la tabla `tipos_peli`
--

INSERT INTO `tipos_peli` (`tipo_id`, `label`) VALUES
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
-- Indices de la tabla `gente`
--
ALTER TABLE `gente`
 ADD PRIMARY KEY (`gente_id`);

--
-- Indices de la tabla `peliculas`
--
ALTER TABLE `peliculas`
 ADD PRIMARY KEY (`peli_id`), ADD KEY `peli_type` (`peli_tipo`,`peli_anno`);

--
-- Indices de la tabla `tipos_peli`
--
ALTER TABLE `tipos_peli`
 ADD PRIMARY KEY (`tipo_id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `gente`
--
ALTER TABLE `gente`
MODIFY `gente_id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT de la tabla `peliculas`
--
ALTER TABLE `peliculas`
MODIFY `peli_id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT de la tabla `tipos_peli`
--
ALTER TABLE `tipos_peli`
MODIFY `tipo_id` tinyint(3) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
