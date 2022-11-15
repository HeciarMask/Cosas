-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 27-04-2021 a las 09:48:04
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
-- Base de datos: `ejercicio1`
--
drop database if exists ejercicio1;
create database ejercicio1;
use ejercicio1;
-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `localidades`
--

CREATE TABLE `localidades` (
  `id` smallint(6) UNSIGNED NOT NULL DEFAULT 0,
  `nombre` varchar(100) CHARACTER SET utf8 NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `localidades`
--

INSERT INTO `localidades` (`id`, `nombre`) VALUES
(41, 'Aguadulce'),
(90, 'Alanís'),
(138, 'Albaida del Aljarafe'),
(186, 'Alcalá de Guadaíra'),
(233, 'Alcalá del Río'),
(281, 'Alcolea del Río'),
(329, 'Algaba, La'),
(376, 'Algámitas'),
(424, 'Almadén de la Plata'),
(473, 'Almensilla'),
(521, 'Arahal'),
(569, 'Aznalcázar'),
(616, 'Aznalcóllar'),
(664, 'Badolatosa'),
(712, 'Benacazón'),
(760, 'Bollullos de la Mitación'),
(809, 'Bormujos'),
(858, 'Brenes'),
(906, 'Burguillos'),
(955, 'Cabezas de San Juan, Las'),
(1003, 'Camas'),
(1052, 'Campana, La'),
(1099, 'Cantillana'),
(1148, 'Carmona'),
(1195, 'Carrión de los Céspedes'),
(1239, 'Casariche'),
(1288, 'Castilblanco de los Arroyos'),
(1333, 'Castilleja de Guzmán'),
(1381, 'Castilleja de la Cuesta'),
(1427, 'Castilleja del Campo'),
(1472, 'Castillo de las Guardas, El'),
(1521, 'Cazalla de la Sierra'),
(1570, 'Constantina'),
(1619, 'Coria del Río'),
(1664, 'Coripe'),
(1711, 'Coronil, El'),
(1759, 'Corrales, Los'),
(1805, 'Dos Hermanas'),
(1853, 'Écija'),
(1898, 'Espartinas'),
(1945, 'Estepa'),
(1991, 'Fuentes de Andalucía'),
(2037, 'Garrobo, El'),
(2083, 'Gelves'),
(2126, 'Gerena'),
(2172, 'Gilena'),
(2218, 'Gines'),
(2261, 'Guadalcanal'),
(2307, 'Guillena'),
(2349, 'Herrera'),
(2396, 'Huévar del Aljarafe'),
(2441, 'Lantejuela, La'),
(2485, 'Lebrija'),
(2527, 'Lora de Estepa'),
(2572, 'Lora del Río'),
(2616, 'Luisiana, La'),
(2662, 'Madroño, El'),
(2706, 'Mairena del Alcor'),
(2749, 'Mairena del Aljarafe'),
(2794, 'Marchena'),
(2839, 'Marinaleda'),
(2882, 'Martín de la Jara'),
(2926, 'Molares, Los'),
(2967, 'Montellano'),
(3007, 'Morón de la Frontera'),
(3046, 'Navas de la Concepción, Las'),
(3086, 'Olivares'),
(3124, 'Osuna'),
(3163, 'Palacios y Villafranca, Los'),
(3203, 'Palomares del Río'),
(3242, 'Paradas'),
(3281, 'Pedrera'),
(3317, 'Pedroso, El'),
(3356, 'Peñaflor'),
(3391, 'Pilas'),
(3430, 'Pruna'),
(3467, 'Puebla de Cazalla, La'),
(3504, 'Puebla de los Infantes, La'),
(3543, 'Puebla del Río, La'),
(3577, 'Real de la Jara, El'),
(3613, 'Rinconada, La'),
(3650, 'Roda de Andalucía, La'),
(3685, 'Ronquillo, El'),
(3719, 'Rubio, El'),
(3752, 'Salteras'),
(3789, 'San Juan de Aznalfarache'),
(3824, 'Sanlúcar la Mayor'),
(3860, 'San Nicolás del Puerto'),
(3895, 'Santiponce'),
(3925, 'Saucejo, El'),
(3958, 'Sevilla'),
(3990, 'Tocina'),
(4023, 'Tomares'),
(4056, 'Umbrete'),
(4088, 'Utrera'),
(4120, 'Valencina de la Concepción'),
(4151, 'Villamanrique de la Condesa'),
(4181, 'Villanueva del Ariscal'),
(4212, 'Villanueva del Río y Minas'),
(4241, 'Villanueva de San Juan'),
(4271, 'Villaverde del Río'),
(4300, 'Viso del Alcor, El'),
(7982, 'Cañada Rosal'),
(8014, 'Isla Mayor'),
(8037, 'Cuervo de Sevilla, El');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `propiedades`
--

CREATE TABLE `propiedades` (
  `numpropiedad` int(11) NOT NULL,
  `domicilio` char(50) DEFAULT NULL,
  `localidad` smallint(6) UNSIGNED NOT NULL,
  `tipo` int(2) UNSIGNED DEFAULT NULL,
  `m2` int(11) DEFAULT NULL,
  `precio` int(11) DEFAULT NULL,
  `vendida` enum('SI','NO') DEFAULT NULL,
  `dni_propietario` char(9) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `propiedades`
--

INSERT INTO `propiedades` (`numpropiedad`, `domicilio`, `localidad`, `tipo`, `m2`, `precio`, `vendida`, `dni_propietario`) VALUES
(1, 'Avenida Europa', 1805, 1, 90, 123000, 'SI', '55555555t'),
(2, 'Olivar de quintos', 1805, 4, 343, 354234, 'NO', '12121212g'),
(3, 'Torrequinto 3', 186, 8, 890, 743243, 'NO', '57575757e'),
(4, 'Campito 4', 3685, 7, 4345, 320000, 'NO', '59545954y'),
(5, 'Siena 4', 1805, 1, 85, 120000, 'NO', '33333333f'),
(6, 'La Oliva', 3958, 1, 56, 60000, 'NO', '49494949'),
(7, 'Bergamo 2', 1805, 5, 100, 185000, 'NO', '64646464'),
(8, 'Avenida de Europa 7', 1805, 4, 110, 190000, 'NO', '49494949'),
(9, 'Avenida de España 21', 1805, 1, 110, 125000, 'NO', '64646464'),
(10, 'Marques de Nervion 33', 3958, 1, 110, 295000, 'NO', '12121212g'),
(11, 'Prosperidad 22', 186, 8, 240, 275000, 'NO', '14414444');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `propietarios_clientes`
--

CREATE TABLE `propietarios_clientes` (
  `dni` char(9) NOT NULL,
  `tipo` enum('admin','cliente','propietario') DEFAULT NULL,
  `usuario` char(20) DEFAULT NULL,
  `clave` char(6) DEFAULT NULL,
  `telefono` char(9) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `propietarios_clientes`
--

INSERT INTO `propietarios_clientes` (`dni`, `tipo`, `usuario`, `clave`, `telefono`) VALUES
('11111111f', 'cliente', 'Rubio Ramos', 'rub111', '477789'),
('12121212g', 'propietario', 'antonio', 'ant121', '4584789'),
('14141414r', 'cliente', 'pepe', 'pep141', '4581789'),
('14414444', 'propietario', 'Fernandez Lopez', '33344', '655441122'),
('19090909', 'cliente', 'Ibrahim Mohamed', '333', '676554422'),
('33333333f', 'propietario', 'juan', 'jua333', '625487954'),
('49494949', 'propietario', 'Muñoz Perez', '4911', '605667766'),
('55555555t', 'propietario', 'Perez Marin', 'per555', '65485788'),
('57575757e', 'propietario', 'paco', 'pac575', '64838788'),
('59545954y', 'propietario', 'roberta', 'rob595', '65488770'),
('64646464', 'propietario', 'Miranda Aguado', '2221', '633111111'),
('81818181', 'cliente', 'Mateo Marin', '1212', '654332211');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipos_vivienda`
--

CREATE TABLE `tipos_vivienda` (
  `id` int(2) UNSIGNED NOT NULL,
  `nombre` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tipos_vivienda`
--

INSERT INTO `tipos_vivienda` (`id`, `nombre`) VALUES
(1, 'Piso'),
(2, 'Atico'),
(3, 'Duplex'),
(4, 'Casa pareada'),
(5, 'Casa adosada'),
(6, 'Estudio'),
(7, 'Parcela'),
(8, 'Chalet');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ventas`
--

CREATE TABLE `ventas` (
  `dni_cliente` char(9) NOT NULL DEFAULT '',
  `numpropiedad` int(11) NOT NULL DEFAULT 0,
  `precio_venta` int(11) DEFAULT NULL,
  `fecha` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `ventas`
--

INSERT INTO `ventas` (`dni_cliente`, `numpropiedad`, `precio_venta`, `fecha`) VALUES
('14141414r', 1, 120000, '2012-12-03');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `localidades`
--
ALTER TABLE `localidades`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `propiedades`
--
ALTER TABLE `propiedades`
  ADD PRIMARY KEY (`numpropiedad`),
  ADD KEY `propiedades_ibfk_1` (`dni_propietario`),
  ADD KEY `localidad` (`localidad`),
  ADD KEY `tipo` (`tipo`);

--
-- Indices de la tabla `propietarios_clientes`
--
ALTER TABLE `propietarios_clientes`
  ADD PRIMARY KEY (`dni`);

--
-- Indices de la tabla `tipos_vivienda`
--
ALTER TABLE `tipos_vivienda`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `ventas`
--
ALTER TABLE `ventas`
  ADD PRIMARY KEY (`dni_cliente`,`numpropiedad`),
  ADD KEY `numpropiedad` (`numpropiedad`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `propiedades`
--
ALTER TABLE `propiedades`
  MODIFY `numpropiedad` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de la tabla `tipos_vivienda`
--
ALTER TABLE `tipos_vivienda`
  MODIFY `id` int(2) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `propiedades`
--
ALTER TABLE `propiedades`
  ADD CONSTRAINT `propiedades_ibfk_1` FOREIGN KEY (`dni_propietario`) REFERENCES `propietarios_clientes` (`dni`),
  ADD CONSTRAINT `propiedades_ibfk_2` FOREIGN KEY (`localidad`) REFERENCES `localidades` (`id`),
  ADD CONSTRAINT `propiedades_ibfk_3` FOREIGN KEY (`tipo`) REFERENCES `tipos_vivienda` (`id`);

--
-- Filtros para la tabla `ventas`
--
ALTER TABLE `ventas`
  ADD CONSTRAINT `ventas_ibfk_1` FOREIGN KEY (`dni_cliente`) REFERENCES `propietarios_clientes` (`dni`),
  ADD CONSTRAINT `ventas_ibfk_2` FOREIGN KEY (`numpropiedad`) REFERENCES `propiedades` (`numpropiedad`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
