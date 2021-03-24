-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 24-03-2021 a las 23:45:12
-- Versión del servidor: 8.0.21
-- Versión de PHP: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `residencia`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alumnos`
--

DROP TABLE IF EXISTS `alumnos`;
CREATE TABLE IF NOT EXISTS `alumnos` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `NoCtrl` int NOT NULL,
  `Nombre` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Apaterno` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Amaterno` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Carrera` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `NoCtrl` (`NoCtrl`) USING BTREE
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `alumnos`
--

INSERT INTO `alumnos` (`id`, `NoCtrl`, `Nombre`, `Apaterno`, `Amaterno`, `Carrera`, `created_at`, `updated_at`) VALUES
(1, 16111992, 'VICTOR MANUEL', 'RODARTE', 'AMARO', 'SISTEMAS', NULL, '2021-02-23 06:58:03'),
(5, 16111902, 'DANIEL SALVADOR', 'SANCHEZ', 'MORENO', 'SISTEMAS', NULL, NULL),
(4, 17110974, 'DANIEL ALEJANDRO', 'RODARTE', 'AMARO', 'ELECTRONICA', NULL, NULL),
(6, 16111918, 'ERICK SALVADOR', 'LUNA', 'GUTIERREZ', 'SISTEMAS', NULL, NULL),
(8, 18112396, 'LETHSI DANIELA', 'DIAZ', 'VENCES', 'INDUSTRIAL', NULL, '2021-02-17 07:38:36'),
(9, 16111999, 'JOSE ROMULO', 'SOSA', 'ORTIZ', 'ELECTRICA', NULL, NULL),
(10, 16111994, 'VICTOR MANUEL', 'RODARTE', 'LUNA', 'MECANICA', NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `aspirantes`
--

DROP TABLE IF EXISTS `aspirantes`;
CREATE TABLE IF NOT EXISTS `aspirantes` (
  `ID` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `Nombre` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Apaterno` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Amaterno` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Correo` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Escuela` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Carrera` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `aspirantes`
--

INSERT INTO `aspirantes` (`ID`, `Nombre`, `Apaterno`, `Amaterno`, `Correo`, `Escuela`, `Carrera`, `created_at`, `updated_at`) VALUES
(1, 'DANIEL ALEJANDRO', 'RODARTE', 'AMARO', 'drodarte@gmail.com', 'COBACH 11', 'ELECTRICA', NULL, '2021-03-24 05:18:53');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
CREATE TABLE IF NOT EXISTS `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `uuid` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `migrations`
--

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2021_02_10_010935_create_alumnos_table', 2),
(5, '2014_10_12_200000_add_two_factor_columns_to_users_table', 3),
(6, '2019_12_14_000001_create_personal_access_tokens_table', 3),
(7, '2021_02_12_003815_create_sessions_table', 3),
(8, '2021_03_18_223920_create_padres_table', 4),
(9, '2021_03_22_221833_create_orientatecs_table', 5),
(10, '2021_03_23_223318_create_aspirantes_table', 6);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `orientatecs`
--

DROP TABLE IF EXISTS `orientatecs`;
CREATE TABLE IF NOT EXISTS `orientatecs` (
  `ID` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `Nombre` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Apaterno` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Amaterno` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Correo` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Escuela` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Carrera` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `orientatecs`
--

INSERT INTO `orientatecs` (`ID`, `Nombre`, `Apaterno`, `Amaterno`, `Correo`, `Escuela`, `Carrera`, `created_at`, `updated_at`) VALUES
(1, 'DANIEL ALEJANDRO', 'RODARTE', 'AMARO', 'drodarte@gmail.com', 'COBACH 7', 'MECANICA', NULL, NULL),
(2, 'VICTOR MANUEL', 'RODARTE', 'AMARO', 'FAKE@GMAIL.COM', 'COBACH 7', 'SISTEMAS', NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `padres`
--

DROP TABLE IF EXISTS `padres`;
CREATE TABLE IF NOT EXISTS `padres` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `NombrePadre` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `ApaternoPadre` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `AmaternoPadre` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `NoCtrl` int NOT NULL,
  `NombreAlumno` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `ApaternoAlumno` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `AmaternoAlumno` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `Carrera` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `NoCtrl` (`NoCtrl`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `padres`
--

INSERT INTO `padres` (`id`, `NombrePadre`, `ApaternoPadre`, `AmaternoPadre`, `NoCtrl`, `NombreAlumno`, `ApaternoAlumno`, `AmaternoAlumno`, `Carrera`, `created_at`, `updated_at`) VALUES
(2, 'SAMUEL', 'FERNANDEZ', 'AYALA', 14233651, 'SAMUEL', 'FERNANDEZ', 'GARCIA', 'ELECTROMECANICA', NULL, '2021-03-19 06:45:01');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('L16111992@cdjuarez.tecnm.mx', '$2y$10$AKni7a760NrgJxo4Yb.8zOF2qnG8tESgEZhpy0RaY.vDF3HflgWHK', '2021-02-16 07:07:48');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `personal_access_tokens`
--

DROP TABLE IF EXISTS `personal_access_tokens`;
CREATE TABLE IF NOT EXISTS `personal_access_tokens` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sessions`
--

DROP TABLE IF EXISTS `sessions`;
CREATE TABLE IF NOT EXISTS `sessions` (
  `id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci,
  `payload` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int NOT NULL,
  PRIMARY KEY (`id`),
  KEY `sessions_user_id_index` (`user_id`),
  KEY `sessions_last_activity_index` (`last_activity`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('JG5I9aSuNe09ZzFQapA9t0gLa1ugljw7a5UY27dM', NULL, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/89.0.4389.90 Safari/537.36 Edg/89.0.774.57', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiamVFdXllQWRRa3dBbmsxNXdDRkdzSUxGNnpKTER6Z1BlYlF4VEtQbyI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NDY6Imh0dHA6Ly9sb2NhbGhvc3QvcmVzaS9yZXNpZGVuY2lhcy9wdWJsaWMvbG9naW4iO31zOjM6InVybCI7YToxOntzOjg6ImludGVuZGVkIjtzOjUxOiJodHRwOi8vbG9jYWxob3N0L3Jlc2kvcmVzaWRlbmNpYXMvcHVibGljL2FzcGlyYW50ZXMiO319', 1616543137);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `two_factor_secret` text COLLATE utf8mb4_unicode_ci,
  `two_factor_recovery_codes` text COLLATE utf8mb4_unicode_ci,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `two_factor_secret`, `two_factor_recovery_codes`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'VICTOR RODARTE', 'L16111992@cdjuarez.tecnm.mx', NULL, '$2y$10$cq14vKngGoi/kZwUCSvcxu8T1QtXS38Dc4He2ljab5qtNQ6HQOSJO', NULL, NULL, NULL, '2021-02-16 06:40:23', '2021-02-16 06:40:23');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
