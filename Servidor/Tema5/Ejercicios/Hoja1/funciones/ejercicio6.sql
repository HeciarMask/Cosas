-- phpMyAdmin SQL Dump
-- version 3.5.2
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 03-02-2013 a las 14:22:38
-- Versión del servidor: 5.5.25a
-- Versión de PHP: 5.4.4

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
drop database if exists ejercicio6;
CREATE DATABASE ejercicio6;
use ejercicio6;
--
-- Estructura de tabla para la tabla `articulos`
--

CREATE TABLE IF NOT EXISTS `articulos` (
  `CODART` varchar(5) NOT NULL,
  `DESCRIPCION` varchar(20) NOT NULL,
  `SECCION` varchar(20) NOT NULL,
  PRIMARY KEY (`CODART`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `articulos`
--

INSERT INTO `articulos` (`CODART`, `DESCRIPCION`, `SECCION`) VALUES
('Art1', 'Yogurt XXX', 'Lácteos'),
('Art2', 'Pañales YYY', 'Droguería'),
('Art3', 'Plátanos ZZZ', 'Frutería');
INSERT INTO `articulos` (`CODART`, `DESCRIPCION`, `SECCION`) VALUES
('Art4', 'Pak 3 Latas Atún DDD', 'Conservas'),
('Art5', 'Desodorante GGG', 'Droguería'),
('Art7', 'Tomates Rama', 'Frutería'),
('Art8', 'Lata Caballa  SDD', 'Conservas'),
('Art9', 'Gel de Baño NNN', 'Droguería'),
('Art10', 'Natillas DHH', 'Lácteos'),
('Art6', 'Aceite Oliva TTT ', 'Alimentación');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `precios`
--

CREATE TABLE IF NOT EXISTS `precios` (
  `super` varchar(4) NOT NULL,
  `cod_art` varchar(5) NOT NULL,
  `precio` float(7,2) NOT NULL,
  PRIMARY KEY (`super`,`cod_art`),
  KEY `cod_art` (`cod_art`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `precios`
--

INSERT INTO `precios` (`super`, `cod_art`, `precio`) VALUES
('AAAA', 'Art1', 1.62),
('AAAA', 'Art2', 15.95),
('AAAA', 'Art3', 1.62),
('AAAA', 'Art4', 1.80),
('AAAA', 'Art6', 17.05),
('BBBB', 'Art1', 1.65),
('BBBB', 'Art2', 15.95),
('BBBB', 'Art3', 1.31),
('BBBB', 'Art4', 1.90),
('CCCC', 'Art1', 1.98),
('CCCC', 'Art2', 16.25),
('CCCC', 'Art3', 1.29),
('CCCC', 'Art4', 1.85),
('SSSS', 'Art6', 15.95);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `super`
--

CREATE TABLE IF NOT EXISTS `super` (
  `COD_SUPER` varchar(4) NOT NULL,
  `DENOMINACION` varchar(30) NOT NULL,
  `DIRECCION` varchar(30) NOT NULL,
  `TIPO` varchar(20) NOT NULL,
  PRIMARY KEY (`COD_SUPER`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `super`
--

INSERT INTO `super` (`COD_SUPER`, `DIRECCION`,`DENOMINACION`, `TIPO`) VALUES
('AAAA', 'C/ Primera, 1','Super Mariño' ,'A'),
('BBBB', 'C/ Segunda, 2','PrixUnic' , 'B'),
('CCCC', 'C/ Tercera, 3', 'Tiendadona','B'),
('RRRR', 'C/Bérgamo 6','Pingo Doce' , 'A'),
('SSSS', 'C/Portimao 29', 'Supermercado Nazario' ,'B');

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `precios`
--
ALTER TABLE `precios`
  ADD CONSTRAINT `precios_ibfk_1` FOREIGN KEY (`super`) REFERENCES `super` (`COD_SUPER`),
  ADD CONSTRAINT `precios_ibfk_2` FOREIGN KEY (`cod_art`) REFERENCES `articulos` (`CODART`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
