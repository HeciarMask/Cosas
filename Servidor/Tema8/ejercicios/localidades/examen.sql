-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 04-06-2018 a las 13:00:43
-- Versión del servidor: 10.1.31-MariaDB
-- Versión de PHP: 7.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `examen`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `departamentos`
--
drop database if exists examen;
create database examen;
use examen;
CREATE TABLE `departamentos` (
  `coddep` int(4) NOT NULL,
  `nombre` varchar(25) DEFAULT NULL,
  `clase` enum('A','B','C') DEFAULT NULL,
  `presupuesto` decimal(6,0) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `departamentos`
--

INSERT INTO `departamentos` (`coddep`, `nombre`, `clase`, `presupuesto`) VALUES
(1, 'Dirección General', 'C', '120000'),
(2, 'Talleres', 'A', '200000'),
(3, 'Dirección comercial', 'B', '130000'),
(4, 'Sede Central', 'C', '300000');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empleados`
--

CREATE TABLE `empleados` (
  `numemple` int(11) NOT NULL,
  `nombre` varchar(20) DEFAULT NULL,
  `tipo` enum('Técnico','Oficina','Mantenimiento') DEFAULT NULL,
  `coddepart` varchar(4) DEFAULT NULL,
  `localidad` varchar(20) DEFAULT NULL,
  `horario` enum('Mañana','Tarde') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `empleados`
--

INSERT INTO `empleados` (`numemple`, `nombre`, `tipo`, `coddepart`, `localidad`, `horario`) VALUES
(1, 'Narváez', 'Oficina', '1', 'Utrera', 'Tarde'),
(2, 'González', 'Técnico', '3', 'Morón', 'Tarde'),
(3, 'Suárez', 'Mantenimiento', '2', 'Utrera', 'Mañana'),
(4, 'Benítez', 'Técnico', '3', 'Morón', 'Mañana'),
(5, 'Rodríguez', 'Técnico', '4', 'Sevilla', 'Tarde'),
(6, 'Lozano', 'Mantenimiento', '2', 'Morón', 'Tarde'),
(7, 'Fajardo', 'Oficina', '1', 'Utrera', 'Tarde'),
(8, 'Fradejas', 'Oficina', '3', 'Paradas', 'Mañana'),
(9, 'Gómez', 'Oficina', '3', 'Morón', 'Tarde');
-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `visitas`
--
CREATE TABLE IF NOT EXISTS `visitas` (
`numorden` smallint(10) unsigned NOT NULL,
  `fecha` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `visitas`
--
ALTER TABLE `visitas`
 ADD PRIMARY KEY (`numorden`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `visitas`
--
ALTER TABLE `visitas`
MODIFY `numorden` smallint(10) unsigned NOT NULL AUTO_INCREMENT;

--
-- Indices de la tabla `departamentos`
--
ALTER TABLE `departamentos`
  ADD PRIMARY KEY (`coddep`);

--
-- Indices de la tabla `empleados`
--
ALTER TABLE `empleados`
  ADD PRIMARY KEY (`numemple`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
