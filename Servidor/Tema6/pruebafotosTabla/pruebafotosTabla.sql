-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 12-12-2022 a las 14:52:42
-- Versión del servidor: 10.1.38-MariaDB
-- Versión de PHP: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";
drop database if exists fotosEnTabla;
create database fotosEnTabla;
use fotosEnTabla;

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `ejemplos`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `personas`
--

CREATE TABLE `personas` (
  `dni` varchar(10) NOT NULL,
  `nombre` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `personas`
--


INSERT INTO `personas` (`dni`, `nombre`) VALUES
('1234', 'Lupicinio'),
('37719872', 'Generosa'),
('4545', 'Elena'),
('52290397', 'Fernando'),
('54572599', 'Filiberto'),
('64536949', 'Telesfora'),
('71100184', 'Gonzalo'),
('73903774', 'Lupicinia'),
('75731307', 'Dorotea'),
('82726993', 'Telesfora'),
('87688946', 'Ambrosio'),
('89250187', 'Tiburcio'),
('95537617', 'Servanda');


--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `personas`
--
ALTER TABLE `personas`
  ADD PRIMARY KEY (`dni`);
 



--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `images`
--
CREATE TABLE `fotos` (
  `num_ident` varchar(10)  NOT NULL,
  `imagen` blob NOT NULL,
  `image_caption` varchar(255) NOT NULL DEFAULT '',
  `image_username` varchar(255) NOT NULL DEFAULT '',
  `formato` varchar(10) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
ALTER TABLE `fotos`
  ADD PRIMARY KEY (`num_ident`);
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
