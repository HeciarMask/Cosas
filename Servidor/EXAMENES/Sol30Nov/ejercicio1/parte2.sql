-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 26-11-2022 a las 11:23:55
-- Versión del servidor: 10.4.22-MariaDB
-- Versión de PHP: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `parte2`
--
DROP DATABASE IF EXISTS `parte2`;
create database parte2;
use parte2;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientes`
--

CREATE TABLE `clientes` (
  `nif` varchar(10) NOT NULL,
  `nombre` varchar(24) DEFAULT NULL,
  `localidad` decimal(2,0) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `clientes`
--

INSERT INTO `clientes` (`nif`, `nombre`, `localidad`) VALUES
('28282828T', 'Pedro Cortés', '1'),
('28987654R', 'Ana Sendra', '1'),
('31824198X', 'Luis Pérez', '3'),
('42200042V', 'Miguel Carlini', '2'),
('42300042U', 'José Collado', '2'),
('42411112T', 'Luisa Fernández', '2'),
('42424242Q', 'Paqui Martínez', '2');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `lineas`
--

CREATE TABLE `lineas` (
  `cod_linea` decimal(2,0) NOT NULL,
  `desc_linea` varchar(30) DEFAULT NULL,
  `ubicacion` varchar(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `lineas`
--

INSERT INTO `lineas` (`cod_linea`, `desc_linea`, `ubicacion`) VALUES
('1', 'IMAGEN', 'Almacen Central'),
('2', 'HOGAR', 'Almacen Central'),
('3', 'SONIDO', 'c/CORREDERA'),
('4', 'INFORMATICA', 'c/CORREDERA'),
('5', 'TELEFONIA', 'C/GRAVINA 2');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `localidad`
--

CREATE TABLE `localidad` (
  `xlocalidad` decimal(2,0) NOT NULL,
  `nombre` varchar(20) DEFAULT NULL,
  `observa` varchar(70) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `localidad`
--

INSERT INTO `localidad` (`xlocalidad`, `nombre`, `observa`) VALUES
('1', 'Dos Hermanas', 'Reparto Lunes y Viernes'),
('2', 'Los Palacios', 'Almacen provisional en Nave 7'),
('3', 'Ecija', 'Normal');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `cod_producto` decimal(4,0) NOT NULL,
  `descripcion` varchar(30) DEFAULT NULL,
  `linea_producto` decimal(2,0) DEFAULT NULL,
  `precio` decimal(8,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`cod_producto`, `descripcion`, `linea_producto`, `precio`) VALUES
('2222', 'EQUIPO SONY GHY-999', '3', '200.00'),
('2223', 'MINICADENA JVC GM-569', '3', '120.70'),
('3232', 'TV SAMSUNG AADD-X03', '1', '450.00'),
('3333', 'TV PHILLIPS ASD-01', '1', '400.00'),
('4232', 'DVD SAMSUNG AADD-X03', '1', '55.00'),
('7001', 'SMARTPHONE ALCATEL', '5', '95.00'),
('7004', 'SAMSUNG MINI J9', '5', '203.00'),
('8001', 'FREIDORA JATA B03', '2', '45.20'),
('8002', 'TOSTADOR TAURUS JB1', '2', '29.50'),
('9001', 'HD TOSHIBA 1TB', '4', '79.00'),
('9002', 'HD TOSHIBA 2TB', '4', '109.00'),
('9003', 'HD BESTBUY MULTIMEDIA 1TB', '4', '129.00'),
('9004', 'USB 8GB SANDISK', '4', '6.50'),
('9005', 'USB 16GB SANDISK', '4', '10.50');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `venta_prod`
--

CREATE TABLE `venta_prod` (
  `nif` varchar(10) NOT NULL DEFAULT '',
  `cod_producto` decimal(4,0) NOT NULL DEFAULT 0,
  `unidades` decimal(4,0) DEFAULT NULL,
  `fecha` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `venta_prod`
--

INSERT INTO `venta_prod` (`nif`, `cod_producto`, `unidades`, `fecha`) VALUES
('28282828T', '2222', '15', '2022-06-17'),
('28282828T', '3232', '40', '2022-06-01'),
('28282828T', '4232', '20', '2022-06-16'),
('28282828T', '8001', '10', '2022-06-18'),
('28282828T', '9001', '30', '2022-07-05'),
('28282828T', '9004', '2', '2021-09-28'),
('28282828T', '9005', '1', '2021-09-18'),
('28987654R', '2222', '50', '2022-06-16'),
('28987654R', '3333', '60', '2022-06-16'),
('28987654R', '8002', '10', '2022-06-17'),
('28987654R', '9001', '25', '2022-06-15'),
('28987654R', '9005', '1', '2021-09-18'),
('31824198X', '3232', '40', '2022-06-01'),
('31824198X', '3333', '30', '2022-06-15'),
('31824198X', '8001', '10', '2022-06-11'),
('31824198X', '8002', '15', '2022-06-12'),
('31824198X', '9001', '20', '2022-06-14'),
('31824198X', '9005', '1', '2021-09-18'),
('42200042V', '2223', '1', '2021-09-14'),
('42200042V', '9001', '2', '2022-07-11'),
('42200042V', '9003', '5', '2022-07-12'),
('42200042V', '9004', '2', '2021-09-28'),
('42200042V', '9005', '1', '2021-09-18'),
('42300042U', '2223', '1', '2021-09-14'),
('42300042U', '9004', '2', '2021-09-28'),
('42300042U', '9005', '1', '2021-09-18'),
('42411112T', '2223', '1', '2021-09-14'),
('42411112T', '3232', '3', '2022-06-12'),
('42411112T', '7001', '5', '2022-11-05'),
('42411112T', '9002', '1', '2021-10-20'),
('42411112T', '9003', '4', '2021-10-20'),
('42411112T', '9004', '2', '2021-09-28'),
('42411112T', '9005', '1', '2021-09-18'),
('42424242Q', '2222', '14', '2021-09-30'),
('42424242Q', '2223', '1', '2021-09-14'),
('42424242Q', '3232', '39', '2021-09-30'),
('42424242Q', '3333', '35', '2022-06-15'),
('42424242Q', '4232', '19', '2021-09-30'),
('42424242Q', '8001', '9', '2021-09-30'),
('42424242Q', '8002', '12', '2022-06-17'),
('42424242Q', '9001', '29', '2021-09-30'),
('42424242Q', '9004', '2', '2021-09-28'),
('42424242Q', '9005', '1', '2021-09-18');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`nif`),
  ADD KEY `localidad` (`localidad`);

--
-- Indices de la tabla `lineas`
--
ALTER TABLE `lineas`
  ADD PRIMARY KEY (`cod_linea`);

--
-- Indices de la tabla `localidad`
--
ALTER TABLE `localidad`
  ADD PRIMARY KEY (`xlocalidad`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`cod_producto`),
  ADD KEY `linea_producto` (`linea_producto`);

--
-- Indices de la tabla `venta_prod`
--
ALTER TABLE `venta_prod`
  ADD PRIMARY KEY (`nif`,`cod_producto`,`fecha`),
  ADD KEY `cod_producto` (`cod_producto`);

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `clientes`
--
ALTER TABLE `clientes`
  ADD CONSTRAINT `clientes_ibfk_1` FOREIGN KEY (`localidad`) REFERENCES `localidad` (`xlocalidad`);

--
-- Filtros para la tabla `productos`
--
ALTER TABLE `productos`
  ADD CONSTRAINT `productos_ibfk_1` FOREIGN KEY (`linea_producto`) REFERENCES `lineas` (`cod_linea`);

--
-- Filtros para la tabla `venta_prod`
--
ALTER TABLE `venta_prod`
  ADD CONSTRAINT `venta_prod_ibfk_1` FOREIGN KEY (`nif`) REFERENCES `clientes` (`nif`),
  ADD CONSTRAINT `venta_prod_ibfk_2` FOREIGN KEY (`cod_producto`) REFERENCES `productos` (`cod_producto`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
