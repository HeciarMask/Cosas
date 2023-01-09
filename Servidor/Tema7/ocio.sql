-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 26-02-2018 a las 09:21:01
-- Versión del servidor: 5.5.39
-- Versión de PHP: 5.4.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `ocio`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `formas_pago`
--
drop database if  exists ocio;
create database ocio;
use ocio;

--
-- Base de datos: `ocio`
--


CREATE TABLE `formas_pago` (
  `ID` int(10) UNSIGNED NOT NULL,
  `NOMBRE` varchar(200) CHARACTER SET latin1 NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

--
-- Volcado de datos para la tabla `formas_pago`
--

INSERT INTO `formas_pago` (`ID`, `NOMBRE`) VALUES
(1, 'Efectivo'),
(2, 'Tarjeta'),
(3, 'Bono de empresa'),
(4, 'Fregando platos'),
(6, 'movil');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `locales`
--

CREATE TABLE `locales` (
  `ID` int(10) UNSIGNED NOT NULL,
  `NOMBRE` varchar(100) CHARACTER SET latin1 NOT NULL,
  `ZONA` int(10) UNSIGNED NOT NULL,
  `DIRECCION` varchar(255) CHARACTER SET latin1 DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

--
-- Volcado de datos para la tabla `locales`
--

INSERT INTO `locales` (`ID`, `NOMBRE`, `ZONA`, `DIRECCION`) VALUES
(1, 'Entre Barriles', 1, 'Calle Juan de Mata Carriazo, 4'),
(2, ' Amarillo albero', 1, 'Plaza de la gavidia'),
(3, ' Los cuartos', 1, 'Plaza de los terceros'),
(4, ' La Tata', 2, 'Avenida de la Buhaira'),
(6, 'las palmeras', 3, 'Monte Carmelo'),
(7, 'Bar Pepe', 3, 'virgen de la estrella 9'),
(5, 'el lucas', 3, 'elcano');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `locales_formas_pago`
--

CREATE TABLE `locales_formas_pago` (
  `ID_LOCAL` int(10) UNSIGNED NOT NULL,
  `ID_FORMA_PAGO` int(10) UNSIGNED NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

--
-- Volcado de datos para la tabla `locales_formas_pago`
--

INSERT INTO `locales_formas_pago` (`ID_LOCAL`, `ID_FORMA_PAGO`) VALUES
(1, 1),
(1, 2),
(2, 1),
(2, 2),
(2, 3),
(3, 1),
(3, 2),
(4, 1),
(4, 2),
(4, 3),
(4, 4),
(5, 2),
(5, 3),
(6, 1),
(6, 2),
(7, 1),
(7, 3),
(7, 4);

-- --------------------------------------------------------

--
-- Estructura Stand-in para la vista `locales_zonas`
-- (Véase abajo para la vista actual)
--
CREATE TABLE `locales_zonas` (
`ID` int(10) unsigned
,`NOMBRE` varchar(100)
,`DIRECCION` varchar(255)
,`ZONA` varchar(200)
,`IDZONA` int(10) unsigned
);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `zonas`
--

CREATE TABLE `zonas` (
  `ID` int(10) UNSIGNED NOT NULL,
  `NOMBRE` varchar(200) CHARACTER SET latin1 NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

--
-- Volcado de datos para la tabla `zonas`
--

INSERT INTO `zonas` (`ID`, `NOMBRE`) VALUES
(1, 'Centro'),
(2, 'Nervion'),
(3, 'Los Remedios'),
(4, 'San Bernardo'),
(5, 'Alameda');

-- --------------------------------------------------------

--
-- Estructura para la vista `locales_zonas`
--
DROP TABLE IF EXISTS `locales_zonas`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `locales_zonas`  AS  select `l`.`ID` AS `ID`,`l`.`NOMBRE` AS `NOMBRE`,`l`.`DIRECCION` AS `DIRECCION`,`z`.`NOMBRE` AS `ZONA`,`z`.`ID` AS `IDZONA` from (`locales` `l` join `zonas` `z` on(`l`.`ZONA` = `z`.`ID`)) ;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `formas_pago`
--
ALTER TABLE `formas_pago`
  ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `locales`
--
ALTER TABLE `locales`
  ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `locales_formas_pago`
--
ALTER TABLE `locales_formas_pago`
  ADD PRIMARY KEY (`ID_LOCAL`,`ID_FORMA_PAGO`);

--
-- Indices de la tabla `zonas`
--
ALTER TABLE `zonas`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `formas_pago`
--
ALTER TABLE `formas_pago`
  MODIFY `ID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `locales`
--
ALTER TABLE `locales`
  MODIFY `ID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT de la tabla `zonas`
--
ALTER TABLE `zonas`
  MODIFY `ID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
