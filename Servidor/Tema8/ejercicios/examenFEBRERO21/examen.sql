DROP DATABASE IF EXISTS examen;
CREATE DATABASE examen;
-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 07-03-2018 a las 09:06:47
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
-- Estructura de tabla para la tabla `candidatos`
--
use examen;
CREATE TABLE IF NOT EXISTS `candidatos` (
  `dni` varchar(9) NOT NULL,
  `nombre` varchar(20) DEFAULT NULL,
  `apellidos` varchar(35) DEFAULT NULL,
  `sexo` char(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `candidatos`
--

INSERT INTO `candidatos` (`dni`, `nombre`, `apellidos`, `sexo`) VALUES
('1234A', 'Miguel', 'López Ripalda', 'h'),
('4567B', 'Antonio', 'García Burgos', 'h'),
('6789G', 'Ana', 'Alba Castaño', 'm'),
('8901W', 'María Dolores', 'Vela Palacios', 'f');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `idiomas`
--

CREATE TABLE IF NOT EXISTS `idiomas` (
`id` int(3)  NOT NULL,
  `nombre` varchar(20) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Volcado de datos para la tabla `idiomas`
--

INSERT INTO `idiomas` (`id`, `nombre`) VALUES
(1, 'Inglés'),
(2, 'Francés'),
(3, 'Italiano'),
(4, 'Ruso'),
(5, 'Polaco'),
(6, 'Arabe'),
(7, 'Chino'),
(8, 'Español'),
(9, 'Hindi'),
(10, 'Portugés'),
(11, 'Japonés'),
(12, 'Bengalí'),
(13, 'Alemán'),
(14, 'Griego');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `idiomas_encuesta`
--

CREATE TABLE IF NOT EXISTS `idiomas_encuesta` (
  `dni_candidato` varchar(9) NOT NULL ,
  `id_idioma` int(3) NOT NULL 
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `idiomas_encuesta`
--

INSERT INTO `idiomas_encuesta` (`dni_candidato`, `id_idioma`) VALUES
('1234A', 2),
('1234A', 7),
('4567B', 6),
('4567B', 8),
('4567B', 9),
('6789G', 2),
('6789G', 8),
('8901W', 1),
('8901W', 3),
('8901W', 8),
('8901W', 13);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `candidatos`
--
ALTER TABLE `candidatos`
  ADD PRIMARY KEY (`dni`);

--
-- Indices de la tabla `idiomas`
--
ALTER TABLE `idiomas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `idiomas_encuesta`
--
ALTER TABLE `idiomas_encuesta`
  ADD PRIMARY KEY (`dni_candidato`,`id_idioma`),
  ADD KEY `id_idioma` (`id_idioma`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `idiomas`
--
ALTER TABLE `idiomas`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `idiomas_encuesta`
--
ALTER TABLE `idiomas_encuesta`
  ADD CONSTRAINT `idiomas_encuesta_ibfk_1` FOREIGN KEY (`dni_candidato`) REFERENCES `candidatos` (`dni`),
  ADD CONSTRAINT `idiomas_encuesta_ibfk_2` FOREIGN KEY (`id_idioma`) REFERENCES `idiomas` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
