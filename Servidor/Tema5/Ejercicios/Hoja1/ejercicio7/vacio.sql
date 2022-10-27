-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 23-11-2014 a las 19:15:32
-- Versión del servidor: 5.5.39
-- Versión de PHP: 5.4.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `ejercicio7`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `aficiones`
--
drop database if exists ejercicio7;
create database ejercicio7;
use ejercicio7;
CREATE TABLE IF NOT EXISTS `aficiones` (
`codigo` int(3) unsigned NOT NULL,
  `descripcion` varchar(20) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Volcado de datos para la tabla `aficiones`
--

INSERT INTO `aficiones` (`codigo`, `descripcion`) VALUES
(1, 'Caza'),
(2, 'Pesca'),
(3, 'Música'),
(4, 'Cine'),
(5, 'Teatro'),
(6, 'Practicar deporte'),
(7, 'Ir al fútbol'),
(8, 'Videojuegos'),
(9, 'Redes sociales'),
(10, 'Bricolaje'),
(11, 'Senderismo');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `encuesta`
--

CREATE TABLE IF NOT EXISTS `encuesta` (
`num_orden` int(3) unsigned NOT NULL,
  `nombre` varchar(20) NOT NULL,
  `cod_aficion` int(3) unsigned NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `idiomasencuesta`
--

CREATE TABLE IF NOT EXISTS `idiomasencuesta` (
  `num_orden` int(3) NOT NULL,
  `idioma` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `lenguajesencuesta`
--

CREATE TABLE IF NOT EXISTS `lenguajesencuesta` (
  `num_orden` int(3) NOT NULL,
  `lenguaje` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `aficiones`
--
ALTER TABLE `aficiones`
 ADD PRIMARY KEY (`codigo`);

--
-- Indices de la tabla `encuesta`
--
ALTER TABLE `encuesta`
 ADD PRIMARY KEY (`num_orden`);

--
-- Indices de la tabla `idiomasencuesta`
--
ALTER TABLE `idiomasencuesta`
 ADD PRIMARY KEY (`num_orden`,`idioma`);

--
-- Indices de la tabla `lenguajesencuesta`
--
ALTER TABLE `lenguajesencuesta`
 ADD PRIMARY KEY (`num_orden`,`lenguaje`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `aficiones`
--
ALTER TABLE `aficiones`
MODIFY `codigo` int(3) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT de la tabla `encuesta`
--
ALTER TABLE `encuesta`
MODIFY `num_orden` int(3) unsigned NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
