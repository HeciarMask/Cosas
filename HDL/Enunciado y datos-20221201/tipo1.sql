-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 25-02-2021 a las 14:01:39
-- Versión del servidor: 10.1.35-MariaDB
-- Versión de PHP: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";
DROP DATABASE IF EXISTS tipo1;
CREATE DATABASE tipo1;
USE tipo1;

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `tipo1`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `actividades`
--

CREATE TABLE `actividades` (
  `codigo` int(4) NOT NULL,
  `denominacion` varchar(50) NOT NULL,
  `profesor` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `actividades`
--

INSERT INTO `actividades` (`codigo`, `denominacion`, `profesor`) VALUES
(1, 'Administración de Apache', 1),
(2, 'Introducción a struts.', 2),
(3, 'Administración de Windows Server 2012', 1),
(4, 'Introducción a JSF.', 3),
(5, 'Linux avanzado', 4),
(6, 'Introducción a JQuery', 2),
(15, 'PHP', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alumnos`
--

CREATE TABLE `alumnos` (
  `clave` int(4) NOT NULL,
  `nombre` varchar(60) NOT NULL,
  `grupo` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `alumnos`
--

INSERT INTO `alumnos` (`clave`, `nombre`, `grupo`) VALUES
(1, 'Higuero, José Marí­a', 'Segundo D.A.M.'),
(2, 'Moreno, Sergio', 'Primero D.A.M.'),
(3, 'Domí­nguez, Victor', 'Segundo D.A.W.'),
(4, 'Bernal, Matí­as', 'Primero D.A.M.'),
(5, 'García, José', 'Primero D.A.M.'),
(6, 'Madroño, Dolores', 'Primero D.A.M.'),
(7, 'Hidalgo, Gabriel', 'Primero D.A.M.'),
(8, 'García, Pablo', 'Primero D.A.M.'),
(9, 'Jiménez, Ángel', 'Segundo D.A.W.'),
(10, 'Escobar, Manuel', 'Segundo D.A.W.'),
(11, 'Andrades, Alejandro', 'Segundo D.A.W.'),
(13, 'Morales, José', 'Segundo D.A.W.'),
(14, 'García, Israel', 'Segundo D.A.W.'),
(16, 'Ramos , Jorge', 'Segundo D.A.W.'),
(17, 'Navarro, Isidro', 'Primero D.A.W.'),
(18, 'Sánchez, Rafael', 'Primero D.A.W.'),
(19, 'Matamoros, Daniel', 'Primero D.A.W.'),
(23, 'Quiñones, Antonio', 'Primero D.A.W.'),
(24, 'Jiménez, Alberto', 'Primero D.A.W.'),
(28, 'Gómez, David', 'Primero D.A.W.'),
(37, 'Cabezas, Ernesto', 'Primero D.A.W.'),
(38, 'Medina, Nuria', 'Segundo D.A.M.'),
(41, 'Pérez , Irene', 'Segundo D.A.M.'),
(42, 'Cano, Eduardo', 'Segundo D.A.M.'),
(47, 'Pérez, Francisco', 'Segundo D.A.M.');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `inscritos`
--

CREATE TABLE `inscritos` (
  `cod_alum` int(4) NOT NULL,
  `cod_acti` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `inscritos`
--

INSERT INTO `inscritos` (`cod_alum`, `cod_acti`) VALUES
(1, 1),
(1, 15),
(2, 1),
(2, 2),
(2, 15),
(3, 1),
(3, 4),
(3, 15),
(4, 1),
(4, 2),
(4, 3),
(4, 4),
(13, 2),
(14, 2),
(14, 5),
(16, 5),
(16, 6),
(17, 1),
(17, 6),
(18, 1),
(18, 2),
(19, 1),
(19, 5),
(23, 1),
(23, 4),
(24, 1),
(24, 6),
(28, 1),
(28, 5),
(37, 1),
(37, 6),
(38, 1),
(38, 4),
(41, 1),
(41, 3),
(42, 1),
(42, 2),
(47, 1),
(47, 5);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `profesores`
--

CREATE TABLE `profesores` (
  `id` int(4) NOT NULL,
  `nombre` varchar(20) NOT NULL,
  `antiguedad` smallint(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `profesores`
--

INSERT INTO `profesores` (`id`, `nombre`, `antiguedad`) VALUES
(1, 'Miguel Mendez', 16),
(2, 'Luis Martín', 18),
(3, 'Javier Cruz', 6),
(4, 'Aurelio Perez', 17);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `actividades`
--
ALTER TABLE `actividades`
  ADD PRIMARY KEY (`codigo`),
  ADD KEY `profesor` (`profesor`);

--
-- Indices de la tabla `alumnos`
--
ALTER TABLE `alumnos`
  ADD PRIMARY KEY (`clave`);

--
-- Indices de la tabla `inscritos`
--
ALTER TABLE `inscritos`
  ADD PRIMARY KEY (`cod_alum`,`cod_acti`),
  ADD KEY `cod_acti` (`cod_acti`);

--
-- Indices de la tabla `profesores`
--
ALTER TABLE `profesores`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `actividades`
--
ALTER TABLE `actividades`
  MODIFY `codigo` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT de la tabla `alumnos`
--
ALTER TABLE `alumnos`
  MODIFY `clave` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT de la tabla `profesores`
--
ALTER TABLE `profesores`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `actividades`
--
ALTER TABLE `actividades`
  ADD CONSTRAINT `actividades_ibfk_1` FOREIGN KEY (`profesor`) REFERENCES `profesores` (`id`);

--
-- Filtros para la tabla `inscritos`
--
ALTER TABLE `inscritos`
  ADD CONSTRAINT `inscritos_ibfk_1` FOREIGN KEY (`cod_alum`) REFERENCES `alumnos` (`clave`),
  ADD CONSTRAINT `inscritos_ibfk_2` FOREIGN KEY (`cod_acti`) REFERENCES `actividades` (`codigo`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
