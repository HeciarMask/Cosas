-- phpMyAdmin SQL Dump
-- version 3.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 01, 2014 at 06:53 PM
-- Server version: 5.5.25a
-- PHP Version: 5.4.4
DROP DATABASE IF EXISTS candidatos;
CREATE DATABASE candidatos;
USE candidatos;
SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;


CREATE TABLE `candidatos` (
  `DNI` char(9) NOT NULL,
  `Nombre` varchar(20) DEFAULT NULL,
  `Apellido1` varchar(15) DEFAULT NULL,
  `Sexo` char(1) DEFAULT NULL,
  `Fumador` char(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `candidatos`
--

INSERT INTO `candidatos` (`DNI`, `Nombre`, `Apellido1`, `Sexo`, `Fumador`) VALUES
('1111A', 'Andrés', 'López', 'M', '1'),
('2221A', 'Luis', 'Sánchez', 'M', '0');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `programa`
--

CREATE TABLE `programa` (
  `DNI` varchar(9) NOT NULL,
  `idTecno` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `programa`
--

INSERT INTO `programa` (`DNI`, `idTecno`) VALUES
('1111A', 1),
('1111A', 2),
('1111A', 4),
('2221A', 8),
('2221A', 5);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tecnos`
--

CREATE TABLE `tecnos` (
  `id` int(4) NOT NULL,
  `nombre` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tecnos`
--

INSERT INTO `tecnos` (`id`, `nombre`) VALUES
(1, 'Java'),
(2, '.Net'),
(3, 'Pyton'),
(4, 'Visual C#'),
(5, 'Ruby'),
(6, 'HTML5 CSS'),
(7, 'JavaScript'),
(8, 'Angular JS'),
(9, 'Java EE'),
(10, 'MySQL'),
(11, 'mongoDB'),
(12, 'Oracle'),
(13, 'Microsoft SQL Server'),
(14, 'Spark');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `candidatos`
--
ALTER TABLE `candidatos`
  ADD PRIMARY KEY (`DNI`);

--
-- Indices de la tabla `programa`
--
ALTER TABLE `programa`
  ADD PRIMARY KEY (`DNI`,`idTecno`);

--
-- Indices de la tabla `tecnos`
--
ALTER TABLE `tecnos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `tecnos`
--
ALTER TABLE `tecnos`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

