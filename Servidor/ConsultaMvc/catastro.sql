-- phpMyAdmin SQL Dump
-- version 3.5.2
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 03-04-2013 a las 11:29:59
-- Versión del servidor: 5.5.25a
-- Versión de PHP: 5.4.4

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `examenes`
--
drop database if exists catastro;
create database catastro;
use catastro;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `bloquecasas`
--

--
-- Estructura de tabla para la tabla `vivienda`
--

CREATE TABLE IF NOT EXISTS `vivienda` (
  `calle` varchar(40) NOT NULL,
  `numero` int(3) NOT NULL,
  `tipo_vivienda` varchar(1) DEFAULT NULL,
  `codigo_postal` int(5) DEFAULT NULL,
  `metros` int(5) DEFAULT NULL,
  `nombre_zona` varchar(20) NOT NULL,
  PRIMARY KEY (`calle`,`numero`),
  KEY `fk_viv_zon` (`nombre_zona`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `vivienda`
--

INSERT INTO `vivienda` (`calle`, `numero`, `tipo_vivienda`, `codigo_postal`, `metros`,  `nombre_zona`) VALUES
('Avenida América', 20, 'B', 14026, 100,  'CENTRO'),
('Avenida el Brillante', 15, 'C', 14027, 160,  'BRILLANTE'),
('Avenida el Brillante', 20, 'B', 14028, 80,  'BRILLANTE'),
('Cruz Conde', 20, 'B', 14003, 60,  'CENTRO'),
('Damasco', 20, 'B', 14500, 120,  'SECTOR SUR'),
('Damasco', 23, 'C', 14500, 120,  'SECTOR SUR'),
('Damasco', 24, 'C', 14500, 90,  'SECTOR SUR'),
('El Palo', 15, 'C', 15025, 50,  'SUBURBIO TERMINAL'),
('Felipe II', 14, 'B', 12005, 70,  'CENTRO'),
('Guerra', 2, 'C', 14500, 150,  'SUBURBIO TERMINAL'),
('La Paz', 5, 'B', 14000, 60,  'SECTOR SUR'),
('Los Pinos', 5, 'C', 13050, 250, 'TRASIERRA'),
('Ronda de los Tejares', 15, 'B', 14007, 70,  'CENTRO'),
('Saravia', 3, 'C', 14003, 100,  'CENTRO'),
('Urbanización las Lomas', 53,  'C',14009, 250, 'TRASIERRA');

