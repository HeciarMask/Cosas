-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 13-12-2014 a las 20:41:41
-- Versión del servidor: 5.5.39
-- Versión de PHP: 5.4.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

drop database if exists emails;
create database emails;
use emails;
CREATE TABLE IF NOT EXISTS `alumnos` (
`clave` int(3) NOT NULL,
  `nombre` varchar(20) NOT NULL,
  `email` varchar(40) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- Volcado de datos para la tabla `alumnos`
--

INSERT INTO `alumnos` (`clave`, `nombre`, `email`) VALUES
(1, 'Ambrosio', 'Ambrosio1@mixmail.com'),
(2, 'Dorotea', 'Dorotea2@gmaill.com'),
(3, 'Ernesto', 'Ernesto3@mixmail.com'),
(4, 'Fernando', 'Fernando4@mixmail.com'),
(5, 'Filiberto', 'Filiberto5@mixmail.com'),
(6, 'Generosa', 'Generosa6@mixmail.com'),
(7, 'Gonzalo', 'Gonzalo7@gmail.com'),
(8, 'Lupicinia', 'Lupicinia8@hotmail.com'),
(9, 'Lupicinio', 'Lupicinio9@gmail.com'),
(10, 'Servanda', 'Servanda10@gmail.com'),
(11, 'Francisco', 'Francisco11@gmail.com'),
(12, 'Telesfora', 'Telesfora12@gmail.com'),
(13, 'Tiburcio', 'Tiburcio13@hotmail.com');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `alumnos`
--
ALTER TABLE `alumnos`
 ADD PRIMARY KEY (`clave`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `alumnos`
--
ALTER TABLE `alumnos`
MODIFY `clave` int(3) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=16;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
