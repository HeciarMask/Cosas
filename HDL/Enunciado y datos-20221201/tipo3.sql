

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;
--
--
-- Base de datos: `tipo3`
--

-- --------------------------------------------------------
DROP DATABASE IF EXISTS tipo3;
CREATE DATABASE tipo3;
use tipo3;
--
-- Estructura de tabla para la tabla `aficiones`
--
CREATE TABLE `aficiones` (
  `id` int(3) UNSIGNED NOT NULL,
  `descripcion` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `aficiones`
--

INSERT INTO `aficiones` (`id`, `descripcion`) VALUES
(1, 'Caza'),
(2, 'Pesca'),
(3, 'Música'),
(4, 'Cine'),
(5, 'Teatro'),
(6, 'Practicar deporte'),
(7, 'Ir al fútbol'),
(8, 'Videojuegos'),
(9, 'Redes sociales'),
(10, 'Bricolaje'),
(11, 'Senderismo');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `encuestas`
--

CREATE TABLE `encuestas` (
  `id` int(3) UNSIGNED NOT NULL,
  `nombre` varchar(20) NOT NULL,
  `cod_aficion` int(3) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `encuestas`
--
INSERT INTO `encuestas` (`id`, `nombre`, `cod_aficion`) VALUES
(1, 'Luis', 1),
(2, 'Marta', 11),
(3, 'Andres', 3),
(4, 'Miguel', 9),
(5, 'Juanma', 2),
(6, 'Lola', 6),
(7, 'Inma', 8),
(8, 'Tomás', 1),
(9, 'José Miguel', 1),
(10, 'Jose Angel', 10);
-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `lenguajes`
--

CREATE TABLE `lenguajes` (
  `id` int(3) NOT NULL,
  `nombre` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `lenguajes`
--

INSERT INTO `lenguajes` (`id`, `nombre`) VALUES
(1, 'Java'),
(2, 'C++'),
(3, 'PHP'),
(4, 'Python');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `lenguajesencuestas`
--

CREATE TABLE `lenguajesencuestas` (
  `id_encuesta` int(3) UNSIGNED NOT NULL,
  `id_lenguaje` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `lenguajesencuestas`
--

INSERT INTO `lenguajesencuestas` (`id_encuesta`, `id_lenguaje`) VALUES
(1, 1),
(1, 2),
(2, 3),
(2, 4),
(3, 1),
(3, 2),
(4, 1),
(4, 2),
(5, 2),
(5, 3),
(5, 4),
(6, 1),
(6, 4),
(7, 1),
(7, 4),
(8, 1),
(9, 2),
(10, 2),
(10, 3);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `aficiones`
--
ALTER TABLE `aficiones`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `encuestas`
--
ALTER TABLE `encuestas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cod_aficion` (`cod_aficion`);

--
-- Indices de la tabla `lenguajes`
--
ALTER TABLE `lenguajes`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `lenguajesencuestas`
--
ALTER TABLE `lenguajesencuestas`
  ADD PRIMARY KEY (`id_encuesta`,`id_lenguaje`),
  ADD KEY `id_lenguaje` (`id_lenguaje`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `aficiones`
--
ALTER TABLE `aficiones`
  MODIFY `id` int(3) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de la tabla `encuestas`
--
ALTER TABLE `encuestas`
  MODIFY `id` int(3) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `lenguajes`
--
ALTER TABLE `lenguajes`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `encuestas`
--
ALTER TABLE `encuestas`
  ADD CONSTRAINT `encuestas_ibfk_1` FOREIGN KEY (`cod_aficion`) REFERENCES `aficiones` (`id`);

--
-- Filtros para la tabla `lenguajesencuestas`
--
ALTER TABLE `lenguajesencuestas`
  ADD CONSTRAINT `lenguajesencuestas_ibfk_1` FOREIGN KEY (`id_lenguaje`) REFERENCES `lenguajes` (`id`),
  ADD CONSTRAINT `lenguajesencuestas_ibfk_2` FOREIGN KEY (`id_encuesta`) REFERENCES `encuestas` (`id`);
COMMIT;


/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

