-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 20-02-2018 a las 10:56:50
-- Versión del servidor: 5.5.39
-- Versión de PHP: 5.4.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `videoclub`
--
DROP DATABASE IF EXISTS videoclub;
CREATE DATABASE videoclub;
USE videoclub;
-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alquileres`
--

CREATE TABLE IF NOT EXISTS `alquileres` (
  `USUARIO` varchar(10) NOT NULL,
  `PELICULA` int(5) NOT NULL,
  `FECHA_SALIDA` date NOT NULL,
  `FECHA_DEVOLUCION` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `alquileres`
--

INSERT INTO `alquileres` (`USUARIO`, `PELICULA`, `FECHA_SALIDA`, `FECHA_DEVOLUCION`) VALUES
('LUIS', 2, '2018-02-19', '0000-00-00'),
('MARTA', 12, '2018-02-20', '0000-00-00'),
('PEPE', 17, '2018-02-18', '0000-00-00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `peliculas`
--

CREATE TABLE IF NOT EXISTS `peliculas` (
`numpelicula` tinyint(2) NOT NULL,
  `titulo` char(50) DEFAULT NULL,
  `disponible` enum('SI','NO') DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=18 ;

--
-- Volcado de datos para la tabla `peliculas`
--

INSERT INTO `peliculas` (`numpelicula`, `titulo`, `disponible`) VALUES
(1, 'Bruce Almighty', 'SI'),
(2, 'Office Space', 'NO'),
(3, 'Grand Canyon', 'SI'),
(4, 'Solo en casa', 'SI'),
(6, 'Liberad a Willy', 'SI'),
(7, 'Planeta Rojo', 'SI'),
(8, 'El proyecto de la Bruja de Blair', 'SI'),
(9, 'El fin de los días', 'SI'),
(10, 'Viaje al centro de la tierra', 'SI'),
(11, 'Un marido ideal', 'SI'),
(12, 'La cara del terror', 'NO'),
(13, 'Jugando con el corazón', 'SI'),
(14, 'Accidente 703', 'SI'),
(15, 'Bowfinger, El pícaro', 'SI'),
(16, '24 horas para la medianoche', 'SI'),
(17, 'Paseando entre los olmos', 'NO');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `personaje`
--

CREATE TABLE IF NOT EXISTS `personaje` (
`numero` int(5) NOT NULL,
  `nombre_persona` varchar(25) DEFAULT NULL,
  `nacionalidad_persona` varchar(15) DEFAULT NULL,
  `sexo_persona` varchar(1) DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=52 ;

--
-- Volcado de datos para la tabla `personaje`
--

INSERT INTO `personaje` (`numero`, `nombre_persona`, `nacionalidad_persona`, `sexo_persona`) VALUES
(1, 'Heather Donahue', 'EE.UU', 'M'),
(2, 'Michael C. Williams', 'EE.UU', 'H'),
(3, 'Joely Richardson', 'EE.UU', 'H'),
(4, 'Gary Oldman', 'EE.UU', 'H'),
(5, 'Daniel Myrick', 'EE.UU', 'H'),
(6, 'Euduardo Sánchez', 'EE.UU', 'H'),
(7, 'Arnold Schwarzenegger', 'EE.UU', 'H'),
(8, 'Peter Hyams', 'EE.UU', 'H'),
(9, 'Steve Martin', 'EE.UU', 'H'),
(10, 'Eddie Murphy', 'EE.UU', 'H'),
(11, 'Cate Blanchet', 'G.B', 'M'),
(12, 'Julianne Moore', 'G.B', 'M'),
(13, 'Johnny Depp', 'EE.UU', 'H'),
(14, 'Charlize Theron', 'Francia', 'M'),
(15, 'Sean Connery', 'Scotland', 'H'),
(16, 'Gilian Anderson', 'EE.UU', 'M'),
(17, 'Bruce Willis', 'EE.UU', 'H'),
(18, 'S. Bonnaire', 'EE.UU', 'M'),
(19, 'Catherine Deneuve', 'Francia', 'M'),
(20, 'Pierce Brosnan', 'EE.UU', 'H'),
(21, 'Sophie Marceau', 'Belgica', 'M'),
(22, 'Kevin Kline', 'EE.UU', 'H'),
(23, 'Michael Pheipher', 'EE.UU', 'H'),
(24, 'Jonh Cusack', 'EE.UU', 'H'),
(25, 'Jay Acovone', 'EE.UU', 'H'),
(26, 'Matt Leblanc', 'EE.UU', 'H'),
(27, 'Zach Galligan', 'UK', 'H'),
(28, 'Michele Laroque', 'Francia', 'M'),
(29, 'Barbara Klopple', 'EE.UU', 'M'),
(30, 'Isaac Hayes', 'EE.UU', 'H'),
(31, 'Richard Lynch', 'EE.UU', 'H'),
(32, 'Barbara Streisand', 'EE.UU', 'M'),
(33, 'Tommy Davidson', 'EE.UU', 'H'),
(34, 'Norman Kaye', 'EE.UU', 'H'),
(35, 'Sandy Core', 'EE.UU', 'M'),
(36, 'Sally Kellerman', 'EE.UU', 'M'),
(37, 'Jodie Foster', 'EE.UU', 'M'),
(38, 'Buba Bayouri', 'India', 'H'),
(39, 'Myra, S. Pierce', 'EE.UU', 'M'),
(40, 'Bernie Pock', 'EE.UU', 'H'),
(41, 'Leo T. Fong', 'EE.UU', 'H'),
(42, 'Martxelo Rubio', 'Española', 'H'),
(43, 'Maribel Verdú', 'Española', 'M'),
(44, 'Jon Donosti', 'Española', 'H'),
(45, 'Montxo Armendáriz', 'Española', 'H'),
(46, 'Charlie Sheen', 'EE.UU', 'H'),
(47, 'Natassja Kinski', 'Rusa', 'M'),
(48, 'Christopher Mcdonald', 'EE.UU', 'H'),
(49, 'Luis G. Berlanga', 'EE.UU', 'H'),
(50, 'Sam Waterston', 'EE.UU', 'H'),
(51, 'Tess Harper', 'EE.UU', 'M');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `trabajo`
--

CREATE TABLE IF NOT EXISTS `trabajo` (
  `cip` int(5) NOT NULL,
  `persona` int(5) NOT NULL,
  `tarea` varchar(35) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `trabajo`
--

INSERT INTO `trabajo` (`cip`, `persona`, `tarea`) VALUES
(1, 9, 'Actor Secundario'),
(1, 10, 'Actor Principal'),
(1, 32, 'Actriz Principal'),
(2, 2, 'Actor Principal'),
(2, 2, 'Director'),
(2, 4, 'Productor'),
(2, 37, 'Actriz Principal'),
(3, 5, 'Director'),
(3, 6, 'Productor'),
(3, 8, 'Actor Secundario'),
(3, 9, 'Actor Principal'),
(3, 21, 'Actriz Principal'),
(4, 7, 'Actor Principal'),
(4, 18, 'Actriz Principal'),
(4, 19, 'Actriz Secundaria'),
(4, 27, 'Director'),
(4, 30, 'Productor'),
(5, 1, 'Productor'),
(5, 10, 'Actor Principal'),
(5, 15, 'Actor Secundario'),
(6, 16, 'Actor Secundario'),
(6, 17, 'Actor Principal'),
(6, 28, 'Actriz Principal'),
(6, 30, 'Productor'),
(6, 41, 'Director'),
(7, 17, 'Productor'),
(7, 22, 'Actor Principal'),
(7, 22, 'Director'),
(7, 23, 'Actor Secundario'),
(8, 17, 'Productor'),
(9, 3, 'Actor Principal'),
(9, 4, 'Actor Secundario'),
(9, 7, 'Productor'),
(9, 9, 'Productor'),
(9, 14, 'Actriz Principal'),
(9, 18, 'Director'),
(9, 29, 'Actriz Secundaria'),
(10, 2, 'Productor'),
(10, 9, 'Director'),
(11, 7, 'Actor Principal'),
(11, 13, 'Actor Secundario'),
(11, 19, 'Actriz Secundaria'),
(11, 21, 'Actriz Principal'),
(11, 22, 'Director'),
(11, 31, 'Productor'),
(11, 40, 'Director'),
(13, 6, 'Actor Secundario'),
(13, 10, 'Director'),
(14, 4, 'Actor Secundario'),
(14, 7, 'Actor Principal'),
(14, 24, 'Productor'),
(14, 32, 'Actriz Principal'),
(14, 51, 'Director'),
(15, 6, 'Actor Secundario'),
(15, 18, 'Actriz Secundaria'),
(15, 23, 'Director'),
(15, 24, 'Productor'),
(16, 25, 'Director'),
(17, 4, 'Productor'),
(17, 12, 'Actriz Principal'),
(17, 16, 'Actriz Secundaria'),
(17, 33, 'Actor Principal'),
(17, 46, 'Actor Secundario'),
(17, 48, 'Director');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE IF NOT EXISTS `usuarios` (
  `usuario` char(20) NOT NULL DEFAULT '',
  `CLAVE` varchar(8) NOT NULL,
  `password` char(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`usuario`, `CLAVE`, `password`) VALUES
('LUIS', '', 'LUIS'),
('MARTA', '', 'MARTA'),
('PEPE', '', 'PEPE');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `peliculas`
--
ALTER TABLE `peliculas`
 ADD PRIMARY KEY (`numpelicula`);

--
-- Indices de la tabla `personaje`
--
ALTER TABLE `personaje`
 ADD PRIMARY KEY (`numero`);

--
-- Indices de la tabla `trabajo`
--
ALTER TABLE `trabajo`
 ADD PRIMARY KEY (`cip`,`persona`,`tarea`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
 ADD PRIMARY KEY (`usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `peliculas`
--
ALTER TABLE `peliculas`
MODIFY `numpelicula` tinyint(2) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT de la tabla `personaje`
--
ALTER TABLE `personaje`
MODIFY `numero` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=52;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
