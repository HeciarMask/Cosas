-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 13-12-2022 a las 12:10:22
-- Versión del servidor: 10.1.38-MariaDB
-- Versión de PHP: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";
drop database if exists moviesite;
create database moviesite;
use moviesite;

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `moviesite`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `images`
--

CREATE TABLE `images` (
  `image_id` int(11) NOT NULL,
  `image_caption` varchar(255) NOT NULL,
  `image_username` varchar(255) NOT NULL,
  `image_filename` varchar(255) NOT NULL DEFAULT '',
  `image_date` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `images`
--

INSERT INTO `images` (`image_id`, `image_caption`, `image_username`, `image_filename`, `image_date`) VALUES
(1, 'carrito', 'un carrito gif', '1.jpg', '2022-12-12'),
(2, 'segundo', 'continue', '2.gif', '2022-12-12'),
(3, 'tercera', 'cash', '3.png', '2022-12-12');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `movie`
--

CREATE TABLE `movie` (
  `movie_id` int(10) UNSIGNED NOT NULL,
  `movie_name` varchar(255) NOT NULL,
  `movie_type` tinyint(4) NOT NULL DEFAULT '0',
  `movie_year` smallint(5) UNSIGNED NOT NULL DEFAULT '0',
  `movie_leadactor` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `movie_director` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `movie_running_time` tinyint(3) UNSIGNED DEFAULT NULL,
  `movie_cost` decimal(4,1) DEFAULT NULL,
  `movie_takings` decimal(4,1) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `movie`
--

INSERT INTO `movie` (`movie_id`, `movie_name`, `movie_type`, `movie_year`, `movie_leadactor`, `movie_director`, `movie_running_time`, `movie_cost`, `movie_takings`) VALUES
(1, 'Bruce Almighty', 5, 2003, 1, 2, 101, '81.0', '242.6'),
(2, 'Office Space', 5, 1999, 5, 6, 89, '10.0', '10.8'),
(3, 'Grand Canyon', 2, 1991, 4, 3, 134, NULL, '33.2');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `movietype`
--

CREATE TABLE `movietype` (
  `movietype_id` tinyint(3) UNSIGNED NOT NULL,
  `movietype_label` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `movietype`
--

INSERT INTO `movietype` (`movietype_id`, `movietype_label`) VALUES
(1, 'Sci Fi'),
(2, 'Drama'),
(3, 'Adventure'),
(4, 'War'),
(5, 'Comedy'),
(6, 'Horror'),
(7, 'Action'),
(8, 'Kids');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `people`
--

CREATE TABLE `people` (
  `people_id` int(10) UNSIGNED NOT NULL,
  `people_fullname` varchar(255) NOT NULL,
  `people_isactor` tinyint(1) UNSIGNED NOT NULL DEFAULT '0',
  `people_isdirector` tinyint(1) UNSIGNED NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `people`
--

INSERT INTO `people` (`people_id`, `people_fullname`, `people_isactor`, `people_isdirector`) VALUES
(1, 'Jim Carrey', 1, 0),
(2, 'Tom Shadyac', 0, 1),
(3, 'Lawrence Kasdan', 0, 1),
(4, 'Kevin Kline', 1, 0),
(5, 'Ron Livingston', 1, 0),
(6, 'Mike Judge', 0, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reviews`
--

CREATE TABLE `reviews` (
  `review_movie_id` int(10) UNSIGNED NOT NULL,
  `review_date` date NOT NULL,
  `reviewer_name` varchar(255) NOT NULL,
  `review_comment` varchar(255) NOT NULL,
  `review_rating` tinyint(3) UNSIGNED NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `reviews`
--

INSERT INTO `reviews` (`review_movie_id`, `review_date`, `reviewer_name`, `review_comment`, `review_rating`) VALUES
(1, '2008-09-23', 'John Doe', 'I thought this was a great movie\n        Even though my girlfriend made me see it against my will.', 4),
(1, '2008-09-23', 'Billy Bob', 'I liked Eraserhead better.', 2),
(1, '2008-09-28', 'Peppermint Patty', 'I wish I\'d have seen it\n        sooner!', 5),
(2, '2008-09-23', 'Marvin Martian', 'This is my favorite movie. I\n        didn\'t wear my flair to the movie but I loved it anyway.', 5),
(3, '2008-09-23', 'George B.', 'I liked this movie, even though I\n        Thought it was an informational video from my travel agent.', 3);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`image_id`);

--
-- Indices de la tabla `movie`
--
ALTER TABLE `movie`
  ADD PRIMARY KEY (`movie_id`),
  ADD KEY `movie_type` (`movie_type`,`movie_year`);

--
-- Indices de la tabla `movietype`
--
ALTER TABLE `movietype`
  ADD PRIMARY KEY (`movietype_id`);

--
-- Indices de la tabla `people`
--
ALTER TABLE `people`
  ADD PRIMARY KEY (`people_id`);

--
-- Indices de la tabla `reviews`
--
ALTER TABLE `reviews`
  ADD KEY `review_movie_id` (`review_movie_id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `images`
--
ALTER TABLE `images`
  MODIFY `image_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `movie`
--
ALTER TABLE `movie`
  MODIFY `movie_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `movietype`
--
ALTER TABLE `movietype`
  MODIFY `movietype_id` tinyint(3) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `people`
--
ALTER TABLE `people`
  MODIFY `people_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
