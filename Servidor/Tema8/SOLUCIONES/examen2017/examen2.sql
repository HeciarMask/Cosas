-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 12-03-2015 a las 17:33:32
-- Versión del servidor: 5.5.39
-- Versión de PHP: 5.4.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `examen2`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `actividades`
--
DROP DATABASE IF EXISTS examen2;
CREATE DATABASE examen2;
USE examen2;
CREATE TABLE IF NOT EXISTS `actividades` (
`codigo` smallint(3) NOT NULL,
  `descripcion` varchar(50) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Volcado de datos para la tabla `actividades`
--

INSERT INTO `actividades` (`codigo`, `descripcion`) VALUES
(1, 'Administración de Apache'),
(2, 'Introducción a struts.'),
(3, 'Administración de Windows Server 2012'),
(4, 'Introducción a JSF.'),
(5, 'Linux avanzado'),
(6, 'Introducción a JQuery');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alumnos`
--

CREATE TABLE IF NOT EXISTS `alumnos` (
  `CLAVE` int(3) NOT NULL,
  `NOMBRE` varchar(60) NOT NULL,
  `CURSO` varchar(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `alumnos`
--

INSERT INTO `alumnos` (`CLAVE`, `NOMBRE`, `CURSO`) VALUES
(11, 'Andrades, Alejandro', '2DAW'),
(1, 'Higuero, José María', '1DAW'),
(2, 'Moreno, Sergio', '1DAW'),
(3, 'Domínguez, Victor', '1DAW'),
(4, 'Bernal, Matías', '1DAW'),
(5, 'García, José', '2DAW'),
(6, 'Madroño, Dolores', '2DAW'),
(7, 'Hidalgo, Gabriel', '2DAW'),
(8, 'García, Pablo', '2DAW'),
(9, 'Jiménez, Ángel', '2DAW'),
(10, 'Escobar, Manuel', '2DAW');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `inscritos`
--

CREATE TABLE IF NOT EXISTS `inscritos` (
  `cod_alum` int(11) NOT NULL,
  `cod_acti` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `inscritos`
--

INSERT INTO `inscritos` (`cod_alum`, `cod_acti`) VALUES
(7, 1),
(4, 4),
(5, 2),
(6, 2),
(1, 1),
(2, 2),
(3, 1),
(4, 1),
(5, 1),
(6, 1),
(7, 2),
(8, 3),
(9, 3),
(10, 3),
(11, 1),
(2, 1),
(3, 3),
(4, 2),
(5, 3),
(6, 5),
(7, 3),
(4, 3),
(6, 3);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `actividades`
--
ALTER TABLE `actividades`
 ADD PRIMARY KEY (`codigo`);

--
-- Indices de la tabla `alumnos`
--
ALTER TABLE `alumnos`
 ADD KEY `NOMBRE` (`NOMBRE`);

--
-- AUTO_INCREMENT de las tablas volcadas
--


/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
