-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 02-03-2022 a las 19:19:32
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
-- Base de datos: `agenda`
--
drop database if  exists agenda;
create database agenda;
use agenda;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `contactos`
--

CREATE TABLE `contactos` (
  `dni` char(10) NOT NULL,
  `nombre` char(20) DEFAULT NULL,
  `apellido1` char(20) DEFAULT NULL,
  `apellido2` char(20) DEFAULT NULL,
  `domicilio` char(25) DEFAULT NULL,
  `tfno` varchar(9) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `contactos`
--

INSERT INTO `contactos` (`dni`, `nombre`, `apellido1`, `apellido2`, `domicilio`, `tfno`) VALUES
('1111A', 'Luis', 'Lopez', 'Perez', 'Segovia 23', '654233221'),
('1212Q', 'Hilario', 'Camacho', 'Jimenez', 'Lora 2', '655443322'),
('3181Y', 'Maria', 'Jurado', 'Navarro', 'Plaza 4', '677554498'),
('44444X', 'Josefa', 'Bueno', 'Mediano', 'Cordialidad 66', '954221122'),
('7898G', 'Miguel', 'Conejo', 'Huertas', 'Bergamo 33', '651767543');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `contactos`
--
ALTER TABLE `contactos`
  ADD PRIMARY KEY (`dni`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
