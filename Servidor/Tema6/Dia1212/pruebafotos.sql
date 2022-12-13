-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 12-12-2022 a las 14:52:42
-- Versión del servidor: 10.1.38-MariaDB
-- Versión de PHP: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";
drop database if exists pruebafotos;
create database pruebafotos;
use pruebafotos;

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `ejemplos`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `personas`
--

CREATE TABLE `personas` (
  `dni` varchar(10) NOT NULL,
  `nombre` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `personas`
--

INSERT INTO `personas` (`dni`, `nombre`) VALUES
('11888458', 'Generosa'),
('1234', 'Lupicinio'),
('12340', 'Lupicinio'),
('13472139', 'Ambrosio'),
('13864457', 'Tiburcio'),
('15733136', 'Gonzalo'),
('17073518', 'Lupicinia'),
('23204554', 'Lupicinia'),
('25166742', 'Generosa'),
('28505520', 'Gonzalo'),
('30011692', 'Fernando'),
('31470615', 'Gonzalo'),
('31838811', 'Filiberto'),
('3199561', 'Filiberto'),
('35682897', 'Gonzalo'),
('37123306', 'Tiburcio'),
('37525565', 'Tiburcio'),
('37719872', 'Generosa'),
('38026510', 'Filiberto'),
('38155202', 'Generosa'),
('39544896', 'Telesfora'),
('4101510', 'Servanda'),
('4124345', 'Dorotea'),
('42912044', 'Fernando'),
('42955909', 'Generosa'),
('44024369', 'Fernando'),
('45225782', 'Generosa'),
('4545', 'ewheh'),
('46356823', 'Gonzalo'),
('46745161', 'Ambrosio'),
('47775065', 'Telesfora'),
('48534032', 'Ambrosio'),
('49123254', 'Ambrosio'),
('50357170', 'Dorotea'),
('50681864', 'Dorotea'),
('52290397', 'Fernando'),
('52480816', 'Generosa'),
('5309946', 'Telesfora'),
('533576', 'Telesfora'),
('54303189', 'Fernando'),
('54572599', 'Filiberto'),
('54948456', 'Generosa'),
('54989630', 'Tiburcio'),
('56684347', 'Servanda'),
('57836952', 'Servanda'),
('5842927', 'Generosa'),
('61614213', 'Gonzalo'),
('62386515', 'Fernando'),
('64536949', 'Telesfora'),
('65874029', 'Telesfora'),
('66781845', 'Filiberto'),
('67403001', 'Gonzalo'),
('67574850', 'Servanda'),
('68069224', 'Servanda'),
('68647006', 'Ambrosio'),
('70374042', 'Dorotea'),
('71100184', 'Gonzalo'),
('72137123', 'Fernando'),
('72745375', 'Filiberto'),
('73903774', 'Lupicinia'),
('74916481', 'Dorotea'),
('75462777', 'Fernando'),
('7548421', 'Dorotea'),
('75701689', 'Tiburcio'),
('75731307', 'Dorotea'),
('75872967', 'Filiberto'),
('76450134', 'Dorotea'),
('776', 't35t3'),
('78237774', 'Lupicinia'),
('78461029', 'Servanda'),
('79357740', 'Filiberto'),
('80167443', 'Filiberto'),
('81868543', 'Dorotea'),
('82726993', 'Telesfora'),
('83158686', 'Lupicinia'),
('84049876', 'Generosa'),
('86477604', 'Servanda'),
('86949773', 'Telesfora'),
('87204930', 'Telesfora'),
('87672943', 'Tiburcio'),
('87688946', 'Ambrosio'),
('88', 'Dorotea'),
('89250187', 'Tiburcio'),
('9006793', 'Dorotea'),
('90831224', 'Generosa'),
('91986098', 'Fernando'),
('92232122', 'Lupicinia'),
('93371787', 'Telesfora'),
('93740134', 'Dorotea'),
('93927135', 'Filiberto'),
('94839640', 'Gonzalo'),
('95537617', 'Servanda'),
('97013631', 'Filiberto'),
('97401441', 'Ambrosio'),
('9876545', 'Gonzalo'),
('98884849', 'Tiburcio'),
('99075036', 'Dorotea'),
('99398152', 'Gonzalo');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `personas`
--
ALTER TABLE `personas`
  ADD PRIMARY KEY (`dni`);
  CREATE TABLE `images` (
  `image_id` varchar(10) NOT NULL,
  `image_caption` varchar(255) NOT NULL,
  `image_username` varchar(255) NOT NULL,
  `image_filename` varchar(255) NOT NULL DEFAULT '',
  `image_date` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;



--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`image_id`);

COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
