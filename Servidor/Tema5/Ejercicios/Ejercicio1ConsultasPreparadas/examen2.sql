-- phpMyAdmin SQL Dump
-- version 3.5.2
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 24-01-2014 a las 10:22:23
-- Versión del servidor: 5.5.25a
-- Versión de PHP: 5.4.4

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

drop database if exists examen2;
create database examen2;
use examen2;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alumnos`
--

CREATE TABLE `alumnos` (
  `CLAVE` int(3) NOT NULL,
  `NOMBRE` varchar(60) NOT NULL,
  `CURSO` varchar(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `alumnos`
--

INSERT INTO `alumnos` (`CLAVE`, `NOMBRE`, `CURSO`) VALUES
(1, 'Águila Higuero, José María', '2DAW'),
(2, 'Álvarez Moreno, Sergio', '2DAW'),
(3, 'Arce Domínguez, Vladimir', '2DAW'),
(4, 'Bernal De Matías, Carlos Miguel', '2DAW'),
(5, 'García Delgado, Iván', '2DAW'),
(6, 'Hamed Madroñal, Nabil', '2DAW'),
(7, 'Hidalgo Quintero, Antonio Gabriel', '2DAW'),
(8, 'Iglesias García, Pablo', '2DAW'),
(9, 'Jiménez Jaime, Miguel Ángel', '2DAW'),
(10, 'Joya Escobar, Adrián', '2DAW'),
(11, 'Matutano Toledano, Alejandro', '2DAW'),
(12, 'Mayoral Cabezas, Ernesto', '2DAW'),
(13, 'Morales Anula, Antonio José', '2DAW'),
(14, 'Piña García, Israel', '2DAW'),
(15, 'Quirós González, Isaac', '2DAW'),
(16, 'Ramos Trigo, Jorge', '2DAW'),
(17, 'Rebollo Navarro, Isidro', '2DAW'),
(18, 'Sánchez Navarro, Rafael', '2DAW'),
(19, 'Sánchez-Matamoros Carmona, Daniel', '2DAW'),
(20, 'Vallejo Gamboa, Rubén', '2DAW'),
(21, 'Aghazadeh Valderrama, Nargués', '1DAW'),
(22, 'Amador Villarrubia, Juan Antonio', '1DAW'),
(23, 'Beato Quiñones, Juan Antonio', '1DAW'),
(24, 'Cárdenas Jiménez, Alberto', '1DAW'),
(25, 'Castillo Rivas, Pablo', '1DAW'),
(26, 'Cerrato Ruiz, Ignacio', '1DAW'),
(27, 'De la Cueva De la Cueva, María Ángel', '1DAW'),
(28, 'Fernández Gómez, David', '1DAW'),
(29, 'Fernández Olvera, Álvaro', '1DAW'),
(30, 'Ferwell Cabello, Jaime', '1DAW'),
(31, 'Fieschi Ponce, Christian Xavier', '1DAW'),
(32, 'García Osto, Daniel', '1DAW'),
(33, 'Gutiérrez Maldonado, Aitor', '1DAW'),
(34, 'Gutiérrez Moreno, Adrián', '1DAW'),
(35, 'Herrera Tabaco, Antonio José', '1DAW'),
(36, 'Iglesias González, Juan Manuel', '1DAW'),
(37, 'Mayoral Cabezas, Ernesto', '1DAW'),
(38, 'Moreno Medina, Nuria', '1DAW'),
(39, 'Navarro Álvarez, Miguel', '1DAW'),
(40, 'Pereira Moguer, José Antonio', '1DAW'),
(41, 'Pérez Quijada, Irene', '1DAW'),
(42, 'Ramírez Cano, Eduardo', '1DAW'),
(43, 'Rodríguez Belizón, Alberto', '1DAW'),
(44, 'Rodríguez Chincoa, Carlos Jesús', '1DAW'),
(45, 'Rodríguez De la Peña, Francisco José', '1DAW'),
(46, 'Talamino Delgado, Francisco Manuel', '1DAW'),
(47, 'Zamora Pérez, Francisco', '1DAW');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `faltas`
--

CREATE TABLE `faltas` (
  `id_alum` int(3) NOT NULL,
  `fecha` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `alumnos`
--
ALTER TABLE `alumnos`
  ADD PRIMARY KEY (`CLAVE`),
  ADD KEY `NOMBRE` (`NOMBRE`);

--
-- Indices de la tabla `faltas`
--
ALTER TABLE `faltas`
  ADD PRIMARY KEY (`id_alum`,`fecha`);

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `faltas`
--
ALTER TABLE `faltas`
  ADD CONSTRAINT `faltas_ibfk_1` FOREIGN KEY (`id_alum`) REFERENCES `alumnos` (`CLAVE`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
