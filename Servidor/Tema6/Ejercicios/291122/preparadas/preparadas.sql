-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 17-11-2017 a las 11:15:31
-- Versión del servidor: 5.5.39
-- Versión de PHP: 5.4.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `preparadas`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `horas_extra`
--
drop database if exists preparadas;
create database preparadas;
use preparadas;

--
-- Estructura de tabla para la tabla `horas_extra`
--

CREATE TABLE `horas_extra` (
  `id_trabajador` int(3) NOT NULL DEFAULT 0,
  `fecha` date NOT NULL,
  `num_horas` int(6) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `horas_extra`
--

INSERT INTO `horas_extra` (`id_trabajador`, `fecha`, `num_horas`) VALUES
(1, '2020-10-24', 1),
(2, '2020-10-11', 2),
(2, '2020-10-24', 1),
(3, '2020-10-27', 1),
(3, '2020-11-08', 1),
(4, '2020-09-21', 1),
(4, '2020-10-19', 1),
(4, '2020-10-28', 3),
(5, '2020-09-22', 1),
(5, '2020-10-29', 1),
(5, '2020-11-10', 1),
(5, '2021-01-26', 3),
(5, '2021-01-28', 3),
(6, '2020-09-20', 1),
(6, '2020-10-23', 1),
(6, '2020-10-24', 1),
(7, '2020-09-21', 1),
(7, '2020-10-14', 1),
(7, '2020-11-11', 1),
(8, '2020-10-15', 1),
(9, '2020-11-04', 1),
(10, '2020-10-14', 1),
(11, '2020-09-22', 1),
(11, '2020-10-10', 1),
(11, '2020-11-09', 3),
(12, '2020-09-22', 2),
(12, '2020-10-04', 2),
(12, '2020-10-10', 2),
(12, '2020-10-11', 2),
(12, '2020-10-20', 1),
(13, '2020-09-22', 2),
(13, '2020-10-04', 2),
(13, '2020-10-10', 2),
(13, '2020-10-11', 2),
(13, '2020-10-21', 1),
(13, '2021-01-26', 2),
(13, '2021-01-28', 4),
(14, '2020-08-22', 2),
(14, '2020-10-04', 2),
(14, '2020-10-08', 2),
(14, '2020-10-10', 2),
(14, '2020-10-11', 2),
(14, '2021-01-28', 4),
(15, '2020-09-22', 2),
(15, '2020-10-01', 2),
(15, '2020-10-04', 2),
(15, '2020-10-10', 2),
(15, '2020-11-11', 2),
(15, '2020-11-16', 2),
(16, '2020-08-22', 2),
(16, '2020-10-04', 2),
(16, '2020-10-10', 2),
(16, '2020-10-21', 2),
(16, '2021-01-28', 4),
(17, '2020-08-22', 2),
(17, '2020-10-03', 2),
(17, '2020-10-04', 2),
(17, '2020-10-10', 2),
(18, '2020-08-22', 3),
(18, '2020-10-05', 2),
(19, '2020-10-04', 2),
(20, '2020-10-04', 3),
(21, '2020-10-03', 3),
(23, '2020-08-12', 3),
(23, '2020-11-02', 3),
(23, '2021-01-27', 1),
(23, '2021-01-28', 3),
(24, '2002-11-30', 10),
(24, '2020-08-12', 3),
(24, '2020-10-13', 1),
(24, '2020-10-21', 3),
(25, '2020-08-12', 1),
(25, '2020-10-21', 3),
(26, '2020-10-04', 3),
(27, '2020-10-05', 3),
(28, '2020-10-06', 3),
(29, '2020-10-20', 3),
(29, '2020-11-02', 3),
(31, '2020-10-15', 4),
(31, '2020-11-21', 4),
(32, '2020-08-13', 5),
(32, '2020-11-20', 5),
(32, '2021-01-27', 3),
(33, '2020-08-13', 5),
(33, '2020-10-21', 5),
(34, '2020-08-13', 5),
(34, '2020-10-21', 5),
(35, '2020-08-13', 5),
(35, '2020-10-21', 5),
(36, '2020-08-13', 5),
(36, '2020-10-21', 5),
(37, '2020-10-13', 3),
(37, '2020-10-20', 3),
(37, '2020-10-21', 3),
(38, '2020-10-21', 3),
(39, '2020-10-21', 3),
(40, '2020-10-21', 3),
(41, '2020-10-21', 3),
(41, '2020-10-29', 3),
(42, '2020-08-11', 3),
(42, '2020-10-21', 3),
(43, '2020-08-11', 3),
(43, '2020-10-21', 3),
(43, '2021-01-28', 5),
(44, '2020-10-11', 3),
(44, '2020-10-21', 3),
(45, '2002-11-30', 20),
(45, '2020-10-11', 3),
(45, '2020-10-21', 3),
(46, '2020-10-11', 3),
(46, '2020-10-19', 3),
(47, '2020-10-11', 3),
(47, '2020-11-21', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `trabajadores`
--

CREATE TABLE `trabajadores` (
  `CLAVE` int(3) NOT NULL,
  `NOMBRE` varchar(60) NOT NULL,
  `departamento` varchar(14) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `trabajadores`
--

INSERT INTO `trabajadores` (`CLAVE`, `NOMBRE`, `departamento`) VALUES
(1, 'Águila Higuero, José María', 'VENTAS'),
(2, 'Álvarez Moreno, Sergio', 'VENTAS'),
(3, 'Arce Domínguez, Vladimir', 'VENTAS'),
(4, 'Bernal De Matías, Carlos Miguel', 'COMPRAS'),
(5, 'García Delgado, Iván', 'INFORMÁTICA'),
(6, 'Hamed Madroñal, Nabil', 'COMPRAS'),
(7, 'Hidalgo Quintero, Antonio Gabriel', 'VENTAS'),
(8, 'Iglesias García, Pablo', 'MARKETING'),
(9, 'Jiménez Jaime, Miguel Ángel', 'PRODUCCIÓN'),
(10, 'Joya Escobar, Adrián', 'VENTAS'),
(11, 'Matutano Toledano, Alejandro', 'VENTAS'),
(12, 'Mayoral Cabezas, Ernesto', 'MARKETING'),
(13, 'Morales Anula, Antonio José', 'INFORMÁTICA'),
(14, 'Piña García, Israel', 'INFORMÁTICA'),
(15, 'Quirós González, Isaac', 'COMPRAS'),
(16, 'Ramos Trigo, Jorge', 'INFORMÁTICA'),
(17, 'Rebollo Navarro, Isidro', 'INFORMÁTICA'),
(18, 'Sánchez Navarro, Rafael', 'COMPRAS'),
(19, 'Sánchez-Matamoros Carmona, Daniel', 'VENTAS'),
(20, 'Vallejo Gamboa, Rubén', 'INFORMÁTICA'),
(21, 'Aghazadeh Valderrama, Nargués', 'PRODUCCIÓN'),
(23, 'Beato Quiñones, Juan Antonio', 'MARKETING'),
(24, 'Cárdenas Jiménez, Alberto', 'ADMINISTRACIÓN'),
(25, 'Castillo Rivas, Pablo', 'VENTAS'),
(26, 'Cerrato Ruiz, Ignacio', 'ADMINISTRACIÓN'),
(27, 'De la Cueva De la Cueva, María Ángel', 'PRODUCCIÓN'),
(28, 'Fernández Gómez, David', 'ADMINISTRACIÓN'),
(29, 'Fernández Olvera, Álvaro', 'PRODUCCIÓN'),
(31, 'Fieschi Ponce, Christian Xavier', 'VENTAS'),
(32, 'García Osto, Daniel', 'MARKETING'),
(33, 'Gutiérrez Maldonado, Aitor', 'VENTAS'),
(34, 'Gutiérrez Moreno, Adrián', 'PRODUCCIÓN'),
(35, 'Herrera Tabaco, Antonio José', 'ADMINISTRACIÓN'),
(36, 'Iglesias González, Juan Manuel', 'VENTAS'),
(37, 'Míguez Márquez, Ernesto', 'MARKETING'),
(38, 'Moreno Medina, Nuria', 'ADMINISTRACIÓN'),
(39, 'Navarro Álvarez, Miguel', 'PRODUCCIÓN'),
(40, 'Pereira Moguer, José Antonio', 'PRODUCCIÓN'),
(41, 'Pérez Quijada, Irene', 'ADMINISTRACIÓN'),
(42, 'Ramírez Cano, Eduardo', 'ADMINISTRACIÓN'),
(43, 'Rodríguez Belizón, Alberto', 'MARKETING'),
(44, 'Rodríguez Chincoa, Carlos Jesús', 'VENTAS'),
(45, 'Rodríguez De la Peña, Francisco José', 'ADMINISTRACIÓN'),
(46, 'Talamino Delgado, Francisco Manuel', 'PRODUCCIÓN'),
(47, 'Zamora Pérez, Francisco', 'PRODUCCIÓN');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `horas_extra`
--
ALTER TABLE `horas_extra`
  ADD PRIMARY KEY (`id_trabajador`,`fecha`);

--
-- Indices de la tabla `trabajadores`
--
ALTER TABLE `trabajadores`
  ADD PRIMARY KEY (`CLAVE`);

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `horas_extra`
--
ALTER TABLE `horas_extra`
  ADD CONSTRAINT `horas_extra_ibfk_1` FOREIGN KEY (`id_trabajador`) REFERENCES `trabajadores` (`CLAVE`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
