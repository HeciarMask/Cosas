-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 22-02-2022 a las 14:28:21
-- Versión del servidor: 10.4.22-MariaDB
-- Versión de PHP: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `ejerciciomvc`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `departamentos`
--
DROP DATABASE IF EXISTS ejerciciomvc;
create database ejerciciomvc;
use ejerciciomvc;
CREATE TABLE `departamentos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nombre` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL,
  `localidad` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `departamentos`
--

INSERT INTO `departamentos` (`id`, `nombre`, `localidad`, `created_at`, `updated_at`) VALUES
(1, 'Hauck Ltd', 'North Coltborough', '2022-02-16 16:04:47', '2022-02-16 16:04:47'),
(2, 'Gottlieb-Glover', 'Schmidtside', '2022-02-16 16:04:47', '2022-02-16 16:04:47'),
(3, 'Durgan-Gorczany', 'Leannmouth', '2022-02-16 16:04:47', '2022-02-16 16:04:47'),
(4, 'Wolff-Abbott', 'New Ricochester', '2022-02-16 16:04:47', '2022-02-16 16:04:47'),
(5, 'Gutmann Ltd', 'Eulaliashire', '2022-02-16 16:04:47', '2022-02-16 16:04:47'),
(6, 'Sipes, Feest and Mayert', 'Lake Ardith', '2022-02-16 16:04:47', '2022-02-16 16:04:47'),
(7, 'Feeney, Rogahn and Rogahn', 'Mosechester', '2022-02-16 16:04:47', '2022-02-16 16:04:47'),
(8, 'Schroeder-Rice', 'Shanastad', '2022-02-16 16:04:47', '2022-02-16 16:04:47'),
(9, 'Mohr Group', 'Rippinville', '2022-02-16 16:04:47', '2022-02-16 16:04:47'),
(10, 'Berge Group', 'North Makayla', '2022-02-16 16:04:47', '2022-02-16 16:04:47');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empleados`
--

CREATE TABLE `empleados` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nombre` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL,
  `apellidos` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sueldo` double(8,2) NOT NULL,
  `departamento_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `empleados`
--

INSERT INTO `empleados` (`id`, `nombre`, `apellidos`, `sueldo`, `departamento_id`, `created_at`, `updated_at`) VALUES
(1, 'Zackery', 'Friesen', 4012.02, 1, '2022-02-16 16:04:47', '2022-02-16 16:04:47'),
(3, 'Sincere', 'Gerlach', 5405.73, 9, '2022-02-16 16:04:47', '2022-02-16 16:04:47'),
(4, 'Adolfo', 'Wuckert', 4455.41, 8, '2022-02-16 16:04:47', '2022-02-16 16:04:47'),
(5, 'Marlin', 'Mayert', 4270.77, 10, '2022-02-16 16:04:47', '2022-02-16 16:04:47'),
(6, 'Frederique', 'Gleason', 3948.74, 3, '2022-02-16 16:04:47', '2022-02-16 16:04:47'),
(7, 'Jerod', 'West', 4281.61, 6, '2022-02-16 16:04:47', '2022-02-16 16:04:47'),
(8, 'Yvette', 'Rosenbaum', 5075.88, 8, '2022-02-16 16:04:47', '2022-02-16 16:04:47'),
(9, 'Laurine', 'Nicolas', 4156.20, 7, '2022-02-16 16:04:47', '2022-02-16 16:04:47'),
(10, 'Eliseo', 'Heathcote', 4951.44, 1, '2022-02-16 16:04:47', '2022-02-16 16:04:47'),
(11, 'Alvah', 'Rippin', 1053.86, 5, '2022-02-16 16:04:47', '2022-02-16 16:04:47'),
(12, 'Dejuan', 'Stanton', 3132.08, 9, '2022-02-16 16:04:47', '2022-02-16 16:04:47'),
(13, 'Sim', 'Denesik', 3832.51, 7, '2022-02-16 16:04:47', '2022-02-16 16:04:47'),
(14, 'Constance', 'Ondricka', 1389.52, 7, '2022-02-16 16:04:47', '2022-02-16 16:04:47'),
(15, 'Bill', 'Runolfsdottir', 5256.53, 3, '2022-02-16 16:04:47', '2022-02-16 16:04:47'),
(16, 'Connor', 'Will', 4418.21, 3, '2022-02-16 16:04:47', '2022-02-16 16:04:47'),
(17, 'Macy', 'Olson', 5560.22, 9, '2022-02-16 16:04:47', '2022-02-16 16:04:47'),
(18, 'Kane', 'Prohaska', 2688.34, 5, '2022-02-16 16:04:47', '2022-02-16 16:04:47'),
(19, 'Dante', 'Cartwright', 4858.93, 1, '2022-02-16 16:04:47', '2022-02-16 16:04:47'),
(20, 'Raphael', 'Hill', 4058.92, 5, '2022-02-16 16:04:47', '2022-02-16 16:04:47'),
(21, 'Arjun', 'Beatty', 3786.24, 6, '2022-02-16 16:04:47', '2022-02-16 16:04:47'),
(22, 'Raoul', 'Dicki', 3265.92, 5, '2022-02-16 16:04:47', '2022-02-16 16:04:47'),
(23, 'Savannah', 'Schultz', 1960.43, 7, '2022-02-16 16:04:47', '2022-02-16 16:04:47'),
(24, 'Otha', 'Jenkins', 4400.88, 3, '2022-02-16 16:04:47', '2022-02-16 16:04:47'),
(25, 'Rachelle', 'Lindgren', 1549.93, 6, '2022-02-16 16:04:47', '2022-02-16 16:04:47'),
(26, 'Cecilia', 'Lebsack', 1570.25, 9, '2022-02-16 16:04:47', '2022-02-16 16:04:47'),
(27, 'Brianne', 'Klein', 3857.41, 6, '2022-02-16 16:04:47', '2022-02-16 16:04:47'),
(28, 'Dameon', 'Kris', 5684.61, 9, '2022-02-16 16:04:47', '2022-02-16 16:04:47'),
(29, 'Bonita', 'Hilpert', 4764.65, 7, '2022-02-16 16:04:47', '2022-02-16 16:04:47'),
(30, 'Roger', 'Wisozk', 3122.42, 3, '2022-02-16 16:04:47', '2022-02-16 16:04:47'),
(31, 'Crawford', 'Hagenes', 4350.95, 8, '2022-02-16 16:04:47', '2022-02-16 16:04:47'),
(32, 'Oswald', 'Beer', 3835.23, 7, '2022-02-16 16:04:47', '2022-02-16 16:04:47'),
(33, 'Fatima', 'Ryan', 5976.59, 5, '2022-02-16 16:04:47', '2022-02-16 16:04:47'),
(34, 'Waldo', 'Murazik', 4702.90, 2, '2022-02-16 16:04:47', '2022-02-16 16:04:47'),
(35, 'Aiyana', 'Ziemann', 3511.39, 9, '2022-02-16 16:04:47', '2022-02-16 16:04:47'),
(36, 'Tatyana', 'Osinski', 3130.47, 4, '2022-02-16 16:04:47', '2022-02-16 16:04:47'),
(37, 'Brandi', 'Marquardt', 1555.46, 2, '2022-02-16 16:04:47', '2022-02-16 16:04:47'),
(38, 'Olen', 'Crist', 4997.02, 10, '2022-02-16 16:04:47', '2022-02-16 16:04:47'),
(39, 'Robyn', 'Kemmer', 3286.77, 3, '2022-02-16 16:04:47', '2022-02-16 16:04:47'),
(40, 'Berniece', 'Schulist', 1204.70, 6, '2022-02-16 16:04:47', '2022-02-16 16:04:47'),
(41, 'Ally', 'Rempel', 4076.05, 3, '2022-02-16 16:04:47', '2022-02-16 16:04:47'),
(42, 'Karianne', 'Marvin', 3078.59, 1, '2022-02-16 16:04:47', '2022-02-16 16:04:47'),
(43, 'Vivianne', 'Mayer', 2731.56, 9, '2022-02-16 16:04:47', '2022-02-16 16:04:47'),
(44, 'Kennedi', 'Okuneva', 1820.37, 6, '2022-02-16 16:04:47', '2022-02-16 16:04:47'),
(45, 'Madonna', 'Hammes', 4561.01, 4, '2022-02-16 16:04:47', '2022-02-16 16:04:47'),
(46, 'Tristian', 'Willms', 2472.07, 10, '2022-02-16 16:04:47', '2022-02-16 16:04:47'),
(47, 'Jo', 'Weimann', 2597.32, 5, '2022-02-16 16:04:47', '2022-02-16 16:04:47'),
(48, 'Alfredo', 'VonRueden', 3865.21, 7, '2022-02-16 16:04:47', '2022-02-16 16:04:47'),
(49, 'Barton', 'Lakin', 1015.95, 9, '2022-02-16 16:04:47', '2022-02-16 16:04:47'),
(50, 'Jennyfer', 'Fritsch', 1715.07, 9, '2022-02-16 16:04:47', '2022-02-16 16:04:47'),
(51, 'Hazle', 'Christiansen', 5753.40, 4, '2022-02-16 16:04:47', '2022-02-16 16:04:47'),
(52, 'Erna', 'Gleichner', 4504.71, 3, '2022-02-16 16:04:47', '2022-02-16 16:04:47'),
(53, 'Agustin', 'Torphy', 3714.93, 10, '2022-02-16 16:04:47', '2022-02-16 16:04:47'),
(54, 'Hardy', 'Dooley', 2095.48, 1, '2022-02-16 16:04:47', '2022-02-16 16:04:47'),
(55, 'Gabe', 'Williamson', 1411.33, 2, '2022-02-16 16:04:47', '2022-02-16 16:04:47'),
(56, 'Eryn', 'Powlowski', 2318.69, 4, '2022-02-16 16:04:47', '2022-02-16 16:04:47'),
(57, 'Kaden', 'DuBuque', 5958.27, 2, '2022-02-16 16:04:47', '2022-02-16 16:04:47'),
(58, 'Nadia', 'Powlowski', 1953.68, 9, '2022-02-16 16:04:47', '2022-02-16 16:04:47'),
(59, 'Eliseo', 'Watsica', 2566.02, 7, '2022-02-16 16:04:47', '2022-02-16 16:04:47'),
(60, 'Isabell', 'Kihn', 2945.72, 4, '2022-02-16 16:04:47', '2022-02-16 16:04:47'),
(61, 'Kyler', 'Streich', 5699.16, 2, '2022-02-16 16:04:47', '2022-02-16 16:04:47'),
(62, 'Laura', 'Champlin', 4924.52, 4, '2022-02-16 16:04:47', '2022-02-16 16:04:47'),
(63, 'Marguerite', 'Hickle', 5236.99, 7, '2022-02-16 16:04:47', '2022-02-16 16:04:47'),
(64, 'Lavonne', 'Erdman', 2440.78, 9, '2022-02-16 16:04:47', '2022-02-16 16:04:47'),
(65, 'Carolina', 'Barton', 1229.79, 4, '2022-02-16 16:04:47', '2022-02-16 16:04:47'),
(66, 'Theresa', 'Swift', 1553.00, 4, '2022-02-16 16:04:47', '2022-02-16 16:04:47'),
(67, 'Chad', 'Paucek', 4330.63, 7, '2022-02-16 16:04:47', '2022-02-16 16:04:47'),
(68, 'Anita', 'Halvorson', 4187.45, 6, '2022-02-16 16:04:47', '2022-02-16 16:04:47'),
(69, 'Amya', 'Eichmann', 5421.90, 3, '2022-02-16 16:04:47', '2022-02-16 16:04:47'),
(70, 'Danny', 'Kutch', 1348.02, 2, '2022-02-16 16:04:47', '2022-02-16 16:04:47'),
(71, 'Francisco', 'Crist', 3913.33, 6, '2022-02-16 16:04:47', '2022-02-16 16:04:47'),
(72, 'Augusta', 'Little', 2009.51, 2, '2022-02-16 16:04:47', '2022-02-16 16:04:47'),
(73, 'Isac', 'Stehr', 4801.01, 4, '2022-02-16 16:04:47', '2022-02-16 16:04:47'),
(74, 'Kody', 'Halvorson', 1287.00, 8, '2022-02-16 16:04:47', '2022-02-16 16:04:47'),
(75, 'Jules', 'Kuhlman', 3238.58, 2, '2022-02-16 16:04:47', '2022-02-16 16:04:47'),
(76, 'Wiley', 'Cartwright', 4769.59, 2, '2022-02-16 16:04:47', '2022-02-16 16:04:47'),
(77, 'Yasmine', 'Olson', 4382.24, 9, '2022-02-16 16:04:47', '2022-02-16 16:04:47'),
(78, 'Kali', 'Lemke', 5222.01, 2, '2022-02-16 16:04:47', '2022-02-16 16:04:47'),
(79, 'Federico', 'Nitzsche', 3057.61, 6, '2022-02-16 16:04:47', '2022-02-16 16:04:47'),
(80, 'Luigi', 'Graham', 4519.60, 5, '2022-02-16 16:04:47', '2022-02-16 16:04:47'),
(81, 'pepe', 'anuñéz', 1234.00, 2, '2022-02-17 11:53:34', '2022-02-17 11:53:34'),
(82, 'miguel', 'villalba', 2455.00, 5, '2022-02-17 12:24:25', '2022-02-17 12:24:25'),
(83, 'pepe', 'nuñéz', 1234.00, 6, '2022-02-17 12:29:41', '2022-02-17 12:29:41');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empleado_idioma`
--

CREATE TABLE `empleado_idioma` (
  `id` int(10) UNSIGNED NOT NULL,
  `empleado_id` bigint(20) UNSIGNED NOT NULL,
  `idioma_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `empleado_idioma`
--

INSERT INTO `empleado_idioma` (`id`, `empleado_id`, `idioma_id`) VALUES
(1, 1, 1),
(3, 3, 1),
(4, 4, 1),
(5, 5, 1),
(6, 6, 1),
(7, 7, 1),
(8, 8, 1),
(9, 9, 1),
(10, 10, 1),
(11, 11, 2),
(12, 12, 2),
(13, 13, 2),
(14, 14, 2),
(15, 15, 2),
(16, 16, 2),
(17, 17, 2),
(18, 18, 2),
(19, 19, 2),
(20, 20, 2),
(21, 21, 3),
(22, 22, 3),
(23, 23, 3),
(24, 24, 3),
(25, 25, 3),
(26, 26, 3),
(27, 27, 3),
(28, 28, 3),
(29, 29, 3),
(30, 30, 3),
(31, 31, 4),
(32, 32, 4),
(33, 33, 4),
(34, 34, 4),
(35, 35, 4),
(36, 36, 4),
(37, 37, 4),
(38, 38, 4),
(39, 39, 4),
(40, 40, 4),
(41, 41, 5),
(42, 42, 5),
(43, 43, 5),
(44, 44, 5),
(45, 45, 5),
(46, 46, 5),
(47, 47, 5),
(48, 48, 5),
(49, 49, 5),
(50, 50, 5),
(51, 51, 6),
(52, 52, 6),
(53, 53, 6),
(54, 54, 6),
(55, 55, 6),
(56, 56, 6),
(57, 57, 6),
(58, 58, 6),
(59, 59, 6),
(60, 60, 6),
(61, 61, 7),
(62, 62, 7),
(63, 63, 7),
(64, 64, 7),
(65, 65, 7),
(66, 66, 7),
(67, 67, 7),
(68, 68, 7),
(69, 69, 7),
(70, 70, 7),
(71, 71, 8),
(72, 72, 8),
(73, 73, 8),
(74, 74, 8),
(75, 75, 8),
(76, 76, 8),
(77, 77, 8),
(78, 78, 8),
(79, 79, 8),
(80, 80, 8),
(81, 4, 7),
(82, 1, 2),
(83, 3, 5),
(84, 5, 3),
(85, 6, 2),
(86, 13, 1),
(87, 16, 1),
(88, 20, 1),
(89, 21, 1),
(92, 22, 1),
(93, 23, 1),
(94, 24, 1),
(95, 25, 1),
(96, 26, 1),
(97, 27, 1),
(98, 28, 1),
(99, 29, 1),
(100, 30, 1),
(101, 31, 1),
(102, 32, 1),
(103, 33, 1),
(104, 34, 1),
(105, 35, 1),
(106, 36, 1),
(107, 37, 1),
(108, 38, 1),
(109, 39, 1),
(110, 40, 1),
(111, 41, 1),
(112, 42, 1),
(113, 43, 1),
(114, 44, 1),
(115, 45, 1),
(116, 46, 1),
(117, 47, 1),
(118, 48, 1),
(119, 49, 1),
(120, 50, 1),
(121, 51, 1),
(122, 52, 1),
(123, 53, 1),
(124, 54, 1),
(125, 55, 1),
(126, 56, 1),
(127, 57, 1),
(128, 58, 1),
(129, 59, 1),
(130, 60, 1),
(131, 61, 1),
(132, 62, 1),
(133, 63, 1),
(134, 64, 1),
(135, 65, 1),
(136, 66, 1),
(137, 67, 1),
(138, 68, 1),
(139, 69, 1),
(140, 70, 1),
(141, 71, 1),
(142, 72, 1),
(143, 73, 1),
(144, 74, 1),
(145, 75, 1),
(146, 76, 1),
(147, 77, 1),
(148, 78, 1),
(149, 79, 1),
(150, 80, 1),
(153, 41, 2),
(155, 42, 2),
(158, 43, 2),
(160, 44, 2),
(162, 45, 2),
(164, 46, 2),
(166, 47, 2),
(168, 48, 2),
(170, 49, 2),
(171, 50, 2),
(174, 51, 2),
(175, 52, 2),
(178, 53, 2),
(180, 54, 2),
(182, 55, 2),
(184, 56, 2),
(186, 57, 2),
(187, 58, 2),
(189, 59, 2),
(216, 36, 3),
(219, 37, 3),
(220, 38, 3),
(223, 39, 3),
(225, 40, 3),
(227, 41, 3),
(233, 42, 3),
(237, 43, 3),
(240, 44, 3),
(242, 45, 3),
(248, 46, 3),
(250, 47, 3),
(261, 49, 3),
(279, 81, 4),
(280, 81, 1),
(281, 82, 1),
(282, 82, 2),
(283, 83, 4),
(284, 83, 1),
(285, 83, 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `idiomas`
--

CREATE TABLE `idiomas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nombre` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `idiomas`
--

INSERT INTO `idiomas` (`id`, `nombre`, `created_at`, `updated_at`) VALUES
(1, 'Castellano', '2022-02-16 16:04:47', '2022-02-16 16:04:47'),
(2, 'Inglés', '2022-02-16 16:04:47', '2022-02-16 16:04:47'),
(3, 'Francés', '2022-02-16 16:04:47', '2022-02-16 16:04:47'),
(4, 'Aleman', '2022-02-16 16:04:47', '2022-02-16 16:04:47'),
(5, 'Italiano', '2022-02-16 16:04:47', '2022-02-16 16:04:47'),
(6, 'Ruso', '2022-02-16 16:04:47', '2022-02-16 16:04:47'),
(7, 'Japonés', '2022-02-16 16:04:47', '2022-02-16 16:04:47'),
(8, 'Portugués', '2022-02-16 16:04:47', '2022-02-16 16:04:47');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(2, '2022_02_10_112437_create_departamentos_table', 1),
(3, '2022_02_10_112819_create_empleados_table', 1),
(4, '2022_02_10_992100_create_idiomas_table', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `departamentos`
--
ALTER TABLE `departamentos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `empleados`
--
ALTER TABLE `empleados`
  ADD PRIMARY KEY (`id`),
  ADD KEY `empleados_departamento_id_foreign` (`departamento_id`);

--
-- Indices de la tabla `empleado_idioma`
--
ALTER TABLE `empleado_idioma`
  ADD PRIMARY KEY (`id`),
  ADD KEY `empleado_idioma_empleado_id_foreign` (`empleado_id`),
  ADD KEY `empleado_idioma_idioma_id_foreign` (`idioma_id`);

--
-- Indices de la tabla `idiomas`
--
ALTER TABLE `idiomas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `departamentos`
--
ALTER TABLE `departamentos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `empleados`
--
ALTER TABLE `empleados`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=84;

--
-- AUTO_INCREMENT de la tabla `empleado_idioma`
--
ALTER TABLE `empleado_idioma`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=286;

--
-- AUTO_INCREMENT de la tabla `idiomas`
--
ALTER TABLE `idiomas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `empleados`
--
ALTER TABLE `empleados`
  ADD CONSTRAINT `empleados_departamento_id_foreign` FOREIGN KEY (`departamento_id`) REFERENCES `departamentos` (`id`);

--
-- Filtros para la tabla `empleado_idioma`
--
ALTER TABLE `empleado_idioma`
  ADD CONSTRAINT `empleado_idioma_empleado_id_foreign` FOREIGN KEY (`empleado_id`) REFERENCES `empleados` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `empleado_idioma_idioma_id_foreign` FOREIGN KEY (`idioma_id`) REFERENCES `idiomas` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
