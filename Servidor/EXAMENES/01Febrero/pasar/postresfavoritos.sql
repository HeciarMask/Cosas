-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 25-05-2020 a las 09:55:28
-- Versión del servidor: 10.4.11-MariaDB
-- Versión de PHP: 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `postresfavoritos`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `encuesta`
--
DROP DATABASE IF EXISTS postresfavoritos;
CREATE DATABASE postresfavoritos;
USE postresfavoritos;
CREATE TABLE `encuesta` (
  `id` int(4) NOT NULL,
  `nombre` varchar(20) NOT NULL,
  `estudia` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `encuesta`
--

INSERT INTO `encuesta` (`id`, `nombre`, `estudia`) VALUES
(1, 'Juan José', 6),
(2, 'Alberto', 7),
(3, 'Angel', 2),
(4, 'Jesús', 4),
(5, 'Pedro', 7),
(6, 'Sebastián', 8);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estudios`
--

CREATE TABLE `estudios` (
  `id` int(4) NOT NULL,
  `denominacion` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `estudios`
--

INSERT INTO `estudios` (`id`, `denominacion`) VALUES
(1, '1ºS.M.R.'),
(2, '2ºS.M.R.'),
(3, '1ºD.A.W.'),
(4, '2ºD.A.W.'),
(5, '1ºC.A.F.'),
(6, '2ºC.A.F.'),
(7, '1ºD.A.M.'),
(8, '2ºD.A.M.');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `postres`
--

CREATE TABLE `postres` (
  `id` int(4) NOT NULL,
  `nombre` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `postres`
--

INSERT INTO `postres` (`id`, `nombre`) VALUES
(1, 'Flan'),
(2, 'Helado'),
(3, 'Natillas'),
(4, 'Cuajada'),
(5, 'Pera'),
(6, 'Fresas con Nata'),
(7, 'Mandarina'),
(8, 'Manzana'),
(9, 'Yogurt'),
(10, 'Naranja'),
(11, 'Pasteles'),
(12, 'Kiwi');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `relacion`
--

CREATE TABLE `relacion` (
  `id_usuario` int(4) NOT NULL,
  `id_caracteristica` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `relacion`
--

INSERT INTO `relacion` (`id_usuario`, `id_caracteristica`) VALUES
(1, 1),
(1, 4),
(2, 1),
(2, 6),
(2, 10),
(3, 2),
(3, 8),
(3, 12),
(4, 2),
(4, 3),
(4, 6),
(5, 1),
(5, 4),
(5, 9),
(6, 8),
(6, 10),
(6, 11);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `encuesta`
--
ALTER TABLE `encuesta`
  ADD PRIMARY KEY (`id`),
  ADD KEY `estudia` (`estudia`);

--
-- Indices de la tabla `estudios`
--
ALTER TABLE `estudios`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `postres`
--
ALTER TABLE `postres`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `relacion`
--
ALTER TABLE `relacion`
  ADD PRIMARY KEY (`id_usuario`,`id_caracteristica`),
  ADD KEY `id_usuario` (`id_usuario`),
  ADD KEY `id_caracteristica` (`id_caracteristica`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `encuesta`
--
ALTER TABLE `encuesta`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `estudios`
--
ALTER TABLE `estudios`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `postres`
--
ALTER TABLE `postres`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `encuesta`
--
ALTER TABLE `encuesta`
  ADD CONSTRAINT `encuesta_ibfk_1` FOREIGN KEY (`estudia`) REFERENCES `estudios` (`id`);

--
-- Filtros para la tabla `relacion`
--
ALTER TABLE `relacion`
  ADD CONSTRAINT `relacion_ibfk_1` FOREIGN KEY (`id_caracteristica`) REFERENCES `postres` (`id`),
  ADD CONSTRAINT `relacion_ibfk_2` FOREIGN KEY (`id_usuario`) REFERENCES `encuesta` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
