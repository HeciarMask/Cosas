-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 31-01-2017 a las 10:10:04
-- Versión del servidor: 5.5.39
-- Versión de PHP: 5.4.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
drop database if exists moviesite;
create database moviesite;
use moviesite;
-- Estructura de tabla para la tabla `personas`
--

CREATE TABLE IF NOT EXISTS `personas` (
  `gente_id` int(10) unsigned NOT NULL DEFAULT '0',
  `nombre` varchar(255) NOT NULL,
  `esactor` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `esdirector` tinyint(1) unsigned NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `personas`
--

INSERT INTO `personas` (`gente_id`, `nombre`, `esactor`, `esdirector`) VALUES
(1, 'Jim Carrey', 1, 0),
(2, 'Tom Shadyac', 0, 1),
(3, 'Lawrence Kasdan', 0, 1),
(4, 'Kevin Kline', 1, 0),
(5, 'Ron Livingston', 1, 0),
(6, 'Mike Judge', 0, 1),
(7, 'Macaulay Culkin', 1, 0),
(8, 'Chris Columbus', 0, 1),
(9, 'Jason James Richter', 1, 0),
(10, 'Simon Wincer', 0, 1),
(11, 'Val Kilmer', 1, 0),
(12, 'Antony Hoffman', 0, 1);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
