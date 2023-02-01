-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 22-02-2021 a las 13:53:34
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
-- Base de datos: `ciclo`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alumnos`
--

CREATE TABLE `alumnos` (
  `ID` int(5) NOT NULL,
  `NOMBRE` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `alumnos`
--

INSERT INTO `alumnos` (`ID`, `NOMBRE`) VALUES
(1, 'PEPE'),
(2, 'ANA'),
(3, 'ANDRES'),
(4, 'MARIA'),
(5, 'JOSE LUIS'),
(6, 'SANDRA');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `calificacion`
--

CREATE TABLE `calificacion` (
  `ID_ALUMNO` int(5) NOT NULL,
  `ID_MODULO` int(3) NOT NULL,
  `NOTA` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cursa`
--

CREATE TABLE `cursa` (
  `ID_ALUMNO` int(5) NOT NULL,
  `ID_MODULO` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `cursa`
--

INSERT INTO `cursa` (`ID_ALUMNO`, `ID_MODULO`) VALUES
(1, 1),
(1, 2),
(1, 3),
(2, 4),
(2, 5),
(3, 1),
(3, 2),
(3, 3),
(3, 4),
(3, 6),
(4, 4),
(4, 5),
(4, 6),
(5, 2),
(5, 3),
(5, 4),
(6, 1),
(6, 2),
(6, 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `imparte`
--

CREATE TABLE `imparte` (
  `ID_PROFESOR` int(5) NOT NULL,
  `ID_MODULO` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `imparte`
--

INSERT INTO `imparte` (`ID_PROFESOR`, `ID_MODULO`) VALUES
(1, 1),
(1, 2),
(2, 3),
(2, 4),
(2, 5),
(3, 6);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `modulos`
--

CREATE TABLE `modulos` (
  `ID_MODULO` int(3) NOT NULL,
  `NOMBRE` varchar(30) NOT NULL,
  `DURACION` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `modulos`
--

INSERT INTO `modulos` (`ID_MODULO`, `NOMBRE`, `DURACION`) VALUES
(1, 'LENGUAJE DE MARCAS', 120),
(2, 'PROGRAMACION', 180),
(3, 'BASES DE DATOS', 150),
(4, 'ACCESO A DATOS', 180),
(5, 'PHP', 150),
(6, 'APLICACIONES OFIMÁTICAS', 200);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `profesores`
--

CREATE TABLE `profesores` (
  `ID` int(5) NOT NULL,
  `NOMBRE` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `profesores`
--

INSERT INTO `profesores` (`ID`, `NOMBRE`) VALUES
(1, 'MIGUEL LOPEZ'),
(2, 'ANTONIA DIAZ'),
(3, 'EUGENIO PEREZ');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `alumnos`
--
ALTER TABLE `alumnos`
  ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `calificacion`
--
ALTER TABLE `calificacion`
  ADD PRIMARY KEY (`ID_ALUMNO`,`ID_MODULO`),
  ADD KEY `ID_MODULO` (`ID_MODULO`);

--
-- Indices de la tabla `cursa`
--
ALTER TABLE `cursa`
  ADD PRIMARY KEY (`ID_ALUMNO`,`ID_MODULO`),
  ADD KEY `ID_MODULO` (`ID_MODULO`);

--
-- Indices de la tabla `imparte`
--
ALTER TABLE `imparte`
  ADD PRIMARY KEY (`ID_PROFESOR`,`ID_MODULO`),
  ADD KEY `ID_MODULO` (`ID_MODULO`);

--
-- Indices de la tabla `modulos`
--
ALTER TABLE `modulos`
  ADD PRIMARY KEY (`ID_MODULO`);

--
-- Indices de la tabla `profesores`
--
ALTER TABLE `profesores`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `alumnos`
--
ALTER TABLE `alumnos`
  MODIFY `ID` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `profesores`
--
ALTER TABLE `profesores`
  MODIFY `ID` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `calificacion`
--
ALTER TABLE `calificacion`
  ADD CONSTRAINT `calificacion_ibfk_1` FOREIGN KEY (`ID_ALUMNO`) REFERENCES `alumnos` (`ID`),
  ADD CONSTRAINT `calificacion_ibfk_2` FOREIGN KEY (`ID_MODULO`) REFERENCES `modulos` (`ID_MODULO`);

--
-- Filtros para la tabla `cursa`
--
ALTER TABLE `cursa`
  ADD CONSTRAINT `cursa_ibfk_1` FOREIGN KEY (`ID_MODULO`) REFERENCES `modulos` (`ID_MODULO`),
  ADD CONSTRAINT `cursa_ibfk_2` FOREIGN KEY (`ID_ALUMNO`) REFERENCES `alumnos` (`ID`);

--
-- Filtros para la tabla `imparte`
--
ALTER TABLE `imparte`
  ADD CONSTRAINT `imparte_ibfk_1` FOREIGN KEY (`ID_PROFESOR`) REFERENCES `profesores` (`ID`),
  ADD CONSTRAINT `imparte_ibfk_2` FOREIGN KEY (`ID_MODULO`) REFERENCES `modulos` (`ID_MODULO`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
