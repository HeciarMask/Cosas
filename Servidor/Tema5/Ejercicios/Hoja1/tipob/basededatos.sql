-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 10-01-2014 a las 13:19:04
-- Versión del servidor: 5.5.32
-- Versión de PHP: 5.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `filmoteca`
--
drop DATABASE IF EXISTS  `filmoteca`;
create database  `filmoteca` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `filmoteca`;
 

--
-- Base de datos: `filmoteca`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `company`
--

CREATE TABLE `company` (
  `ID` int(11) NOT NULL,
  `NOMBRE` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `company`
--

INSERT INTO `company` (`ID`, `NOMBRE`) VALUES
(1, 'Paramount'),
(2, 'Metro Goldwin Mayer'),
(3, 'Malpaso'),
(4, 'Serie de animación'),
(5, 'Serie de televisión'),
(11, 'Millenium Fils'),
(12, 'Columbia');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `idiomas`
--

CREATE TABLE `idiomas` (
  `ID` int(11) NOT NULL,
  `NOMBRE` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `idiomas`
--

INSERT INTO `idiomas` (`ID`, `NOMBRE`) VALUES
(1, 'Español'),
(2, 'Inglés'),
(3, 'Francés'),
(4, 'Italiano'),
(5, 'Alemán'),
(6, 'Ruso'),
(7, 'Polaco');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `peliculas`
--

CREATE TABLE `peliculas` (
  `ID` int(11) NOT NULL,
  `ID_AUTOR` int(11) NOT NULL,
  `ID_IDIOMA` int(11) NOT NULL,
  `ID_COMPANY` int(11) NOT NULL,
  `TITULO` text,
  `FECHA` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `peliculas`
--

INSERT INTO `peliculas` (`ID`, `ID_AUTOR`, `ID_IDIOMA`, `ID_COMPANY`, `TITULO`, `FECHA`) VALUES
(1, 2, 1, 3, 'Harry el Sucio', 1975),
(2, 5, 1, 1, 'Cocodrilo Dundee', 1986),
(3, 6, 1, 1, 'El Dorado', 1966),
(4, 2, 1, 3, 'Million Dolar Baby', 2004),
(5, 2, 1, 3, 'La fuga de Alcatraz', 1979),
(6, 2, 1, 3, 'Cartas desde Iwo Jima', 2006),
(7, 8, 2, 3, 'Space Cowboys', 2000),
(8, 3, 1, 11, 'Rambo', 1982),
(9, 3, 1, 4, 'Rambo', 1991),
(10, 4, 2, 2, 'The Amazing Spider-Man', 2005),
(11, 4, 2, 5, 'The Amazing Spider-Man', 2009),
(12, 16, 1, 4, 'Superman', 1961),
(13, 16, 1, 5, 'Superman', 1997),
(14, 16, 1, 1, 'Superman', 1988),
(15, 6, 2, 2, 'Centauros del Desierto', 1961),
(16, 2, 4, 12, 'Il buono, il brutto, il cattivo', 1975),
(17, 17, 1, 11, 'Ocho y Medio', 1963),
(18, 17, 4, 1, 'La Strada', 1954),
(19, 18, 1, 1, 'Star Treck', 1979),
(20, 18, 1, 5, 'Star Treck', 1966),
(21, 19, 1, 2, 'Fargo', 1996),
(22, 19, 1, 5, 'Fargo', 2014),
(23, 20, 2, 2, 'The Net', 1995),
(24, 20, 2, 5, 'The Net', 1997),
(25, 20, 1, 12, 'Miss Agente Especial', 2000),
(26, 20, 1, 1, 'Gravity', 2013);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `personas`
--

CREATE TABLE `personas` (
  `ID` int(11) NOT NULL,
  `NOMBRE` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `personas`
--

INSERT INTO `personas` (`ID`, `NOMBRE`) VALUES
(2, 'Clint Eastwood'),
(3, 'Sylvester Stallone'),
(4, 'Tobey McGuire'),
(5, 'Paul Hogan'),
(6, 'John Wayne'),
(8, 'Tommy Lee Jones'),
(10, 'Robert de Niro'),
(16, 'Jerry Siegel'),
(17, 'Fedrico Fellini'),
(18, 'Leonard Nimoy'),
(19, 'Hermanos Cohen'),
(20, 'Sandra Bullock');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `company`
--
ALTER TABLE `company`
  ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `idiomas`
--
ALTER TABLE `idiomas`
  ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `peliculas`
--
ALTER TABLE `peliculas`
  ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `personas`
--
ALTER TABLE `personas`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `company`
--
ALTER TABLE `company`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de la tabla `idiomas`
--
ALTER TABLE `idiomas`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `peliculas`
--
ALTER TABLE `peliculas`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT de la tabla `personas`
--
ALTER TABLE `personas`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
