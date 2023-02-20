-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 20-02-2023 a las 09:01:52
-- Versión del servidor: 10.4.25-MariaDB
-- Versión de PHP: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `cursolaravel`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alumnos`
--
DROP DATABASE IF exists cursolaravel;
CREATE DATABASE cursolaravel;
USE cursolaravel;
CREATE TABLE `alumnos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nombre` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL,
  `apellido` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL,
  `edad` int(11) NOT NULL,
  `telefono` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `direccion` varchar(60) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `alumnos`
--

INSERT INTO `alumnos` (`id`, `nombre`, `apellido`, `edad`, `telefono`, `direccion`, `created_at`, `updated_at`) VALUES
(1, 'Daniel', 'Miranda', 18, '+725357789', 'Los Lirios #5566', '2022-01-27 10:14:51', '2022-01-27 10:14:51'),
(2, 'Mary', 'Delgado', 21, '+5673424233', 'Cartegena #2343', '2022-01-27 10:14:51', '2022-01-27 10:14:51'),
(3, 'Brain', 'Cardozo', 23, '+591355433', 'Arenas #490', '2022-01-27 10:14:51', '2022-01-27 10:14:51'),
(4, 'Mavis', 'Grimes', 18, '+1.934.283.0390', '852 Dashawn Motorway\nPort Marianne, NY 44959-7827', '2022-01-28 09:06:42', '2022-01-28 09:06:42'),
(5, 'Mac', 'Morissette', 20, '+1.458.327.9412', '13444 Ondricka Inlet\nEast Connorburgh, CA 46873', '2022-01-28 09:06:42', '2022-01-28 09:06:42'),
(6, 'Barney', 'Emard', 18, '+1 (361) 381-1394', '455 Feeney Springs Suite 111\nGilbertomouth, SD 77852-4415', '2022-01-28 09:06:42', '2022-01-28 09:06:42'),
(7, 'Justice', 'Lueilwitz', 20, '480-950-4540', '8708 Khalil Lane Apt. 709\nDiamondland, KS 04006', '2022-01-28 09:06:42', '2022-01-28 09:06:42'),
(8, 'Angelo', 'Wintheiser', 18, '762-366-1752', '39600 Goodwin Roads Suite 084\nNorth Verlatown, TX 37935', '2022-01-28 09:06:42', '2022-01-28 09:06:42'),
(9, 'Keara', 'Reichert', 19, '+15347536863', '2233 Cummerata Tunnel Suite 822\nNorth Braulio, CO 60980-6124', '2022-01-28 09:06:42', '2022-01-28 09:06:42'),
(10, 'Amir', 'Cole', 21, '979-424-1093', '12870 Perry Grove Suite 939\nO\'Konfurt, GA 40955', '2022-01-28 09:06:42', '2022-01-28 09:06:42'),
(11, 'Dessie', 'Satterfield', 19, '+1 (463) 932-3688', '7221 Sterling Skyway\nLelaton, CO 95612-8340', '2022-01-28 09:06:42', '2022-01-28 09:06:42'),
(12, 'Rosario', 'Mertz', 20, '1-425-464-1814', '109 Kreiger Club Suite 637\nEast Jammie, IN 89675', '2022-01-28 09:06:42', '2022-01-28 09:06:42'),
(13, 'Benedict', 'Marvin', 20, '401.532.9019', '7760 Lupe Mill Suite 273\nWilliamsonmouth, WY 52527-4392', '2022-01-28 09:06:42', '2022-01-28 09:06:42'),
(14, 'Estelle', 'Schuppe', 21, '352-417-7358', '9883 Nader Union\nNew Susana, NE 09704', '2022-01-28 09:06:42', '2022-01-28 09:06:42'),
(15, 'Mable', 'Treutel', 20, '+1-256-245-5267', '770 Sawayn Circles Suite 609\nWest Jeanstad, NJ 30851', '2022-01-28 09:06:42', '2022-01-28 09:06:42'),
(16, 'Garth', 'Pagac', 18, '(850) 653-1884', '78349 Bryce Field Suite 636\nLourdesshire, SC 77167-1013', '2022-01-28 09:06:42', '2022-01-28 09:06:42'),
(17, 'Retta', 'Schulist', 21, '(520) 515-8309', '914 Petra Freeway Suite 656\nGreenholthaven, WI 33441-8133', '2022-01-28 09:06:42', '2022-01-28 09:06:42'),
(18, 'Stephan', 'Kemmer', 18, '1-509-622-8203', '6978 Jaida Garden\nWest Valerieberg, AL 31336', '2022-01-28 09:06:42', '2022-01-28 09:06:42'),
(19, 'Asia', 'Lockman', 19, '+1-980-258-2306', '19099 Burdette Loaf\nOmariville, DC 43777', '2022-01-28 09:06:42', '2022-01-28 09:06:42'),
(20, 'Harmon', 'Fahey', 18, '586.304.8744', '821 Marlee Islands Apt. 193\nTimmychester, AK 97365-8799', '2022-01-28 09:06:42', '2022-01-28 09:06:42'),
(21, 'Mathilde', 'Feest', 19, '351-346-9422', '698 Wiza Parkway\nWest Annalisebury, OH 25151', '2022-01-28 09:06:42', '2022-01-28 09:06:42'),
(22, 'Chris', 'Conn', 19, '+1.747.769.9299', '61694 Amara Pass Suite 649\nSouth Elfrieda, ID 28567-3166', '2022-01-28 09:06:42', '2022-01-28 09:06:42'),
(23, 'Dorothy', 'Wisozk', 21, '+1-608-806-8659', '46698 O\'Reilly Pines Apt. 625\nEast Sylvesterfort, MA 18877', '2022-01-28 09:06:42', '2022-01-28 09:06:42'),
(24, 'Misty', 'Schaden', 18, '+1-724-979-9895', '35033 Dickens Burg\nEast Gerdamouth, DC 58904', '2022-01-28 09:06:42', '2022-01-28 09:06:42'),
(25, 'Quentin', 'Dickens', 18, '626.680.3599', '385 Sporer Bypass Suite 458\nOberbrunnerberg, FL 16702-3730', '2022-01-28 09:06:42', '2022-01-28 09:06:42');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alumno_curso`
--

CREATE TABLE `alumno_curso` (
  `alumno_id` bigint(20) UNSIGNED NOT NULL,
  `curso_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `alumno_curso`
--

INSERT INTO `alumno_curso` (`alumno_id`, `curso_id`) VALUES
(1, 1),
(1, 2),
(1, 3),
(2, 1),
(2, 3),
(3, 2),
(4, 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cursos`
--

CREATE TABLE `cursos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nombre` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nivel` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `horas_academicas` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `profesor_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `cursos`
--

INSERT INTO `cursos` (`id`, `nombre`, `nivel`, `horas_academicas`, `profesor_id`, `created_at`, `updated_at`) VALUES
(1, 'Laravel 8', 'Basico', '60 Horas', 1, '2022-01-27 10:14:51', '2022-01-27 10:14:51'),
(2, 'Contabilidad Basica', 'Basico', '40 Horas', 2, '2022-01-27 10:14:51', '2022-01-27 10:14:51'),
(3, 'Desarrollo de PHP', 'Intermedio', '80 Horas', 3, '2022-01-27 10:14:51', '2022-01-27 10:14:51'),
(4, 'cum', 'Avanzado', '80 Horas', NULL, '2022-01-28 09:06:42', '2022-01-28 09:06:42'),
(5, 'et', 'Avanzado', '80 Horas', 5, '2022-01-28 09:06:42', '2022-01-28 09:06:42'),
(6, 'aperiam', 'Basico', '80 Horas', 5, '2022-01-28 09:06:42', '2022-01-28 09:06:42'),
(7, 'laboriosam', 'Intermedio', '40 Horas', 2, '2022-01-28 09:06:42', '2022-01-28 09:06:42');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2022_01_27_094427_create_alumnos_table', 1),
(6, '2022_01_27_095426_create_profesores_table', 1),
(7, '2022_01_27_095619_create_cursos_table', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `profesores`
--

CREATE TABLE `profesores` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nombre_apellido` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `profesion` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `grado_academico` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telefono` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `profesores`
--

INSERT INTO `profesores` (`id`, `nombre_apellido`, `profesion`, `grado_academico`, `telefono`, `created_at`, `updated_at`) VALUES
(1, 'Jaime Peredo', 'Ingeniero de Sistemas', 'Licenciatura', '1234321', '2022-01-27 10:14:51', '2022-01-27 10:14:51'),
(2, 'Daniel Coria', 'Administracion Empresas', 'Licenciatura', '6234321', '2022-01-27 10:14:51', '2022-01-27 10:14:51'),
(3, 'Pedro Poveda', 'Ingeniero de Electronico', 'Masterado', '6234321', '2022-01-27 10:14:51', '2022-01-27 10:14:51'),
(4, 'Hans Lueilwitz', 'Ing Comercial', 'qui', '+1-669-525-3566', '2022-01-28 09:06:42', '2022-01-28 09:06:42'),
(5, 'Rocky Gottlieb', 'Ing Electronico', 'labore', '1-530-479-7561', '2022-01-28 09:06:42', '2022-01-28 09:06:42');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `alumnos`
--
ALTER TABLE `alumnos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `alumno_curso`
--
ALTER TABLE `alumno_curso`
  ADD PRIMARY KEY (`alumno_id`,`curso_id`),
  ADD KEY `curso_id` (`curso_id`);

--
-- Indices de la tabla `cursos`
--
ALTER TABLE `cursos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `profesor_id` (`profesor_id`),
  ADD KEY `profesor_id_2` (`profesor_id`);

--
-- Indices de la tabla `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indices de la tabla `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indices de la tabla `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indices de la tabla `profesores`
--
ALTER TABLE `profesores`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `alumnos`
--
ALTER TABLE `alumnos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT de la tabla `cursos`
--
ALTER TABLE `cursos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de la tabla `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `profesores`
--
ALTER TABLE `profesores`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `alumno_curso`
--
ALTER TABLE `alumno_curso`
  ADD CONSTRAINT `alumno_curso_ibfk_1` FOREIGN KEY (`alumno_id`) REFERENCES `alumnos` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `alumno_curso_ibfk_2` FOREIGN KEY (`curso_id`) REFERENCES `cursos` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `cursos`
--
ALTER TABLE `cursos`
  ADD CONSTRAINT `cursos_ibfk_1` FOREIGN KEY (`profesor_id`) REFERENCES `profesores` (`id`) ON DELETE SET NULL;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
