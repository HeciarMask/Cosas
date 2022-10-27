-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 23-11-2014 a las 19:05:38
-- Versión del servidor: 5.5.39
-- Versión de PHP: 5.4.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `examen`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `aficiones`
--
drop database if exists ejercicio7;
create database ejercicio7;
use  ejercicio7;
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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Volcado de datos para la tabla `encuesta`
--

INSERT INTO `encuesta` (`num_orden`, `nombre`, `cod_aficion`) VALUES
(1, 'Luis', 1),
(2, 'Marta', 11),
(3, 'Andres', 3),
(4, 'Miguel', 9),
(5, 'Juanma', 2),
(6, 'Lola', 6),
(7, 'Inma', 8),
(8, 'Tomás', 1),
(9, 'José Miguel', 1),
(10, 'José Angel', 10);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `idiomasencuesta`
--

CREATE TABLE IF NOT EXISTS `idiomasencuesta` (
  `num_orden` int(3) NOT NULL,
  `idioma` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `idiomasencuesta`
--

INSERT INTO `idiomasencuesta` (`num_orden`, `idioma`) VALUES
(1, 'Castellano'),
(1, 'Francés'),
(2, 'Castellano'),
(2, 'Francés'),
(2, 'Inglés'),
(3, 'Castellano'),
(3, 'Inglés'),
(4, 'Alemán'),
(4, 'Castellano'),
(4, 'Inglés'),
(5, 'Alemán'),
(5, 'Castellano'),
(6, 'Castellano'),
(6, 'Chino'),
(6, 'Inglés'),
(7, 'Castellano'),
(7, 'Inglés'),
(7, 'Ruso'),
(8, 'Inglés'),
(9, 'Alemán'),
(9, 'Chino'),
(10, 'Ruso');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `lenguajesencuesta`
--

CREATE TABLE IF NOT EXISTS `lenguajesencuesta` (
  `num_orden` int(3) NOT NULL,
  `lenguaje` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `lenguajesencuesta`
--

INSERT INTO `lenguajesencuesta` (`num_orden`, `lenguaje`) VALUES
(1, 'Java'),
(1, 'PHP'),
(2, 'Otro(s)'),
(2, 'Python'),
(3, 'Java'),
(3, 'PHP'),
(4, 'Java'),
(4, 'PHP'),
(5, 'Otro(s)'),
(5, 'PHP'),
(5, 'Python'),
(6, 'Java'),
(6, 'Python'),
(7, 'Java'),
(7, 'Python'),
(8, 'Java'),
(9, 'PHP'),
(10, 'Otro(s)'),
(10, 'PHP');

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
MODIFY `num_orden` int(3) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
