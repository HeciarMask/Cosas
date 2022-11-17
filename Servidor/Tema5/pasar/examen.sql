-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 16-02-2017 a las 09:05:56
-- Versión del servidor: 5.5.39
-- Versión de PHP: 5.4.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `examen`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `familia`
--
DROP DATABASE IF EXISTS examen;
CREATE DATABASE examen;
USE examen;
CREATE TABLE IF NOT EXISTS `familia` (
  `cod` varchar(6) NOT NULL,
  `nombre` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `familia`
--

INSERT INTO `familia` (`cod`, `nombre`) VALUES
('CAMARA', 'Cámaras digitales'),
('CONSOL', 'Consolas'),
('EBOOK', 'Libros electrónicos'),
('IMPRES', 'Impresoras'),
('ALTAVZ', 'Altavoces'),
('MP3', 'Reproductores MP3'),
('MULTIF', 'Equipos multifunción'),
('ORDENA', 'Ordenadores de Sobremesa'),
('PORTAT', 'Ordenadores portátiles'),
('ROUTER', 'Routers'),
('SAI', 'Sistemas de alimentación ininterrumpida'),
('SOFTWA', 'Software'),
('TV', 'Televisores'),
('VIDEOC', 'Videocámaras');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producto`
--

CREATE TABLE IF NOT EXISTS `producto` (
  `cod` varchar(12) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `precio` decimal(10,2) NOT NULL,
  `familia` varchar(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `producto`
--

INSERT INTO `producto` (`cod`, `nombre`, `precio`, `familia`) VALUES
('3DSNG', 'Nintendo Switch', '310.00', 'CONSOL'),
('VIBPCX1528', 'Vibox VBX-PC-1528', '453.44', 'ORDENA'),
('ARCLPMP32GBN', 'AGPTEK MP3 8GB negro', '30.99', 'MP3'),
('BRAVIA2BX400', 'Sony Bravia 32IN FULLHD KDL-32BX400', '356.90', 'TV'),
('EEEPC1005PXD', 'Medion MD 60686 ', '199.00', 'PORTAT'),
('HPMIN1103120', 'HP 11-y000ns Stream', '223.37', 'PORTAT'),
('COOL115HSAZ', 'Nikon COOLPIX B500', '240.81', 'CAMARA'),
('SAMTD910NG', 'Samsung 55NU7405', '599.00', 'TV'),
('KSTDTG332GBR', 'ELEGIANT Altavoz PC Mini Barra de Sonido', '28.99', 'ALTAVZ'),
('KSTMSDHC8GB', 'Logitech LGT-S120', '20.20', 'ALTAVZ'),
('LEGRIAFS306', 'Canon  Legria  FS306  plata', '175.00', 'VIDEOC'),
('LGM237WDP', 'LG 55UH615V', '755.00', 'TV'),
('LJPROP1102W', 'HP Laserjet Pro Wifi P1102W', '99.90', 'IMPRES'),
('OPTIOLS1100', 'Pentax Optio LS1100', '104.80', 'CAMARA'),
('PAPYRE62GB', 'Lector ebooks Papyre6 con SD2GB + 500 ebooks', '205.50', 'EBOOK'),
('PBELLI810323', 'NITRO PC-PC Gamer Nitro X ', '561.80', 'ORDENA'),
('PIXMAIP4850', 'Canon Pixma IP4850', '97.30', 'IMPRES'),
('PIXMAMP252', 'Canon  Pixma  MP252', '41.60', 'MULTIF'),
('PS3320GB', 'PS3  con  disco  duro  de  320GB', '380.00', 'CONSOL'),
('DSCHTA3100PT', 'Sony DSC-H300', '159.40', 'CAMARA'),
('SMSGCLX3175', 'Samsung CLX3175', '190.00', 'MULTIF'),
('SMSN150101LD', 'DELL Latitude E7450 ', '1443.81', 'PORTAT'),
('SMSSMXC200PB', 'Samsung SMX-C200PB EDC ZOOM 10X', '127.20', 'VIDEOC'),
('STYLUSSX515W', 'Epson Stylus SX515W', '77.50', 'MULTIF'),
('TSSD16GBC10J', 'Conceptronic CSPKBTBASSDISCOB', '62.60', 'ALTAVZ'),
('ZENMP48GB300', 'Creative Zen MP4 8GB Style 300', '58.90', 'MP3');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `familia`
--
ALTER TABLE `familia`
 ADD PRIMARY KEY (`cod`);

--
-- Indices de la tabla `producto`
--
ALTER TABLE `producto`
 ADD PRIMARY KEY (`cod`), ADD UNIQUE KEY `nombre_corto` (`nombre`), ADD KEY `familia` (`familia`);

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `producto`
--
ALTER TABLE `producto`
ADD CONSTRAINT `producto_ibfk_1` FOREIGN KEY (`familia`) REFERENCES `familia` (`cod`) ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
