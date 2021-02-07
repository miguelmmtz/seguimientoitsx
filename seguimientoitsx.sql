-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 05-02-2021 a las 07:52:31
-- Versión del servidor: 10.3.25-MariaDB-0ubuntu0.20.04.1
-- Versión de PHP: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `seguimientoitsx`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `dir_egresados`
--

CREATE TABLE `dir_egresados` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `matricula` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `carrera` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `dir_egresados`
--

INSERT INTO `dir_egresados` (`id`, `matricula`, `email`, `carrera`, `created_at`, `updated_at`) VALUES
(1, '177o01180', 'correo 1', 'ING. SISTEMAS COMPUTACIONALES', '2021-02-04 12:44:48', '2021-02-04 12:44:48'),
(2, '177o00671', 'correo 2', 'ING. SISTEMAS COMPUTACIONALES', '2021-02-04 12:45:03', '2021-02-04 12:45:03'),
(3, '177o00123', 'correo 3', 'ING. INDUSTRIAL', '2021-02-04 12:47:18', '2021-02-04 12:47:18'),
(4, '177o01234', 'correo 4', 'ING. INDUSTRIAL', '2021-02-04 12:47:51', '2021-02-04 12:47:51'),
(5, '187o01180', 'correo 5', 'ING. SISTEMAS COMPUTACIONALES', '2021-02-04 16:05:03', '2021-02-04 16:05:03'),
(6, '197o01180', 'correo 6', 'ING. BIOQUIMICA', '2021-02-04 16:49:39', '2021-02-04 16:49:39'),
(7, '197o00671', 'correo 7', 'ING. BIOQUIMICA', '2021-02-04 16:50:40', '2021-02-04 16:50:50'),
(8, '167o00671', 'correo 8', 'ING. ELECTROMECANICA', '2021-02-05 05:50:51', '2021-02-05 05:50:51');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `dir_empresas`
--

CREATE TABLE `dir_empresas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nombreEmpresa` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nombreJefe` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `egresado_carrera` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `dir_empresas`
--

INSERT INTO `dir_empresas` (`id`, `nombreEmpresa`, `nombreJefe`, `email`, `egresado_carrera`, `created_at`, `updated_at`) VALUES
(1, 'GOOGLE', 'JONH WALL', 'johnwall@gmail', 'ING. SISTEMAS COMPUTACIONALES', NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
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
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(13, '2014_10_12_000000_create_users_table', 1),
(14, '2014_10_12_100000_create_password_resets_table', 1),
(15, '2019_08_19_000000_create_failed_jobs_table', 1),
(16, '2021_02_04_014642_create_dir_egresados_table', 1),
(18, '2021_02_04_071941_create_roles_tables', 2),
(27, '2021_02_05_041330_create_encuestas_tables', 3),
(28, '2021_02_05_061704_create_dir_empresas_table', 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `label` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `roles`
--

INSERT INTO `roles` (`id`, `name`, `label`, `created_at`, `updated_at`) VALUES
(1, 'administrador', NULL, '2021-02-04 13:57:24', '2021-02-04 13:57:24'),
(2, 'jefe-sistemas', 'ING. SISTEMAS COMPUTACIONALES', '2021-02-04 14:21:24', '2021-02-04 14:21:24'),
(3, 'jefe-industrial', 'ING. INDUSTRIAL', '2021-02-04 16:33:20', '2021-02-04 16:33:20'),
(4, 'jefe-bioquimica', 'ING. BIOQUIMICA', '2021-02-04 16:34:41', '2021-02-04 16:34:41'),
(5, 'jefe-electromecanica', 'ING. ELECTROMECANICA', '2021-02-04 16:36:01', '2021-02-04 16:36:01'),
(6, 'jefe-electronica', 'ING. ELECTRONICA', '2021-02-04 16:36:27', '2021-02-04 16:36:27'),
(7, 'jefe-alimentarias', 'ING. INDUSTRIAS ALIMENTARIAS', '2021-02-04 16:37:28', '2021-02-04 16:37:28'),
(8, 'jefe-gastronomia', 'LIC. GASTRONOMIA', '2021-02-04 16:38:23', '2021-02-04 16:38:23'),
(9, 'jefe-civil', 'ING. CIVIL', '2021-02-04 16:39:01', '2021-02-04 16:39:01'),
(10, 'jefe-mecatronica', 'ING. MECATRONICA', '2021-02-04 16:39:45', '2021-02-04 16:39:45'),
(11, 'jefe-gestion', 'ING. GESTION EMPRESARIAL', '2021-02-04 16:40:25', '2021-02-04 16:40:25');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `role_user`
--

CREATE TABLE `role_user` (
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `role_user`
--

INSERT INTO `role_user` (`user_id`, `role_id`, `created_at`, `updated_at`) VALUES
(1, 1, '2021-02-04 14:02:23', '2021-02-04 14:02:23'),
(2, 2, '2021-02-04 14:21:55', '2021-02-04 14:21:55'),
(3, 3, '2021-02-04 16:33:32', '2021-02-04 16:33:32'),
(4, 4, '2021-02-04 16:34:47', '2021-02-04 16:34:47'),
(5, 5, '2021-02-04 16:36:05', '2021-02-04 16:36:05'),
(6, 6, '2021-02-04 16:36:30', '2021-02-04 16:36:30'),
(7, 7, '2021-02-04 16:37:34', '2021-02-04 16:37:34'),
(8, 8, '2021-02-04 16:38:26', '2021-02-04 16:38:26'),
(9, 9, '2021-02-04 16:39:04', '2021-02-04 16:39:04'),
(10, 10, '2021-02-04 16:39:48', '2021-02-04 16:39:48'),
(11, 11, '2021-02-04 16:40:28', '2021-02-04 16:40:28');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `seccion1_egresado`
--

CREATE TABLE `seccion1_egresado` (
  `matricula` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nombre` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fechaNac` date NOT NULL,
  `curp` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sexo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `edoCivil` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `domicilio` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ciudad` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `municipio` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `estado` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telefono` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telPaterno` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `carrera` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `especialidad` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mesEgreso` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `anioEgreso` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `titulado` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `idiomaIngles` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `idiomaOtro` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `paquetesComp` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `seccion1_egresado`
--

INSERT INTO `seccion1_egresado` (`matricula`, `nombre`, `fechaNac`, `curp`, `sexo`, `edoCivil`, `domicilio`, `ciudad`, `municipio`, `estado`, `telefono`, `email`, `telPaterno`, `carrera`, `especialidad`, `mesEgreso`, `anioEgreso`, `titulado`, `idiomaIngles`, `idiomaOtro`, `paquetesComp`, `created_at`, `updated_at`) VALUES
('177o01180', 'nombre1', '1999-12-01', 'curp', 'M', 'CASADO(A)', 'RETORNO MIGUEL ALEMAN SN', 'ciudad', 'municipio', 'ver', '2283001122', '177o01180@itsx.edu.mx', '2288112233', 'ING. SISTEMAS COMPUTACIONALES', 'REDES Y SISTEMAS DISTRIBUIDOS', 'JULIO', '2020', 'SI', '65%', NULL, 'MUCHOS', NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `seccion2`
--

CREATE TABLE `seccion2` (
  `id_egresado` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `II-1` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `II-2` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `II-3` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `II-4` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `II-5` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `II-6` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `II-7` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `seccion2`
--

INSERT INTO `seccion2` (`id_egresado`, `II-1`, `II-2`, `II-3`, `II-4`, `II-5`, `II-6`, `II-7`, `created_at`, `updated_at`) VALUES
('177o01180', 'BUENA', 'REGULAR', 'BUENA', 'REGULAR', 'BUENA', 'REGULAR', 'BUENA', NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `seccion3`
--

CREATE TABLE `seccion3` (
  `id_egresado` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `III-1-1` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `III-1-2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `III-1-3` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `III-2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `III-3` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `III-4` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `III-5` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `III-6-1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `III-6-2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `III-6-3` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `III-6-4` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `III-7-1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `III-7-2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `III-8` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `III-9` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `III-10` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `III-11` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `III-12-1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `III-12-2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `III-12-3` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `III-12-4` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `III-12-5` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `III-12-6` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `III-12-7` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `III-12-8` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `III-12-9` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `III-12-10` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `III-12-11` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `III-13` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `III-14` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `seccion3`
--

INSERT INTO `seccion3` (`id_egresado`, `III-1-1`, `III-1-2`, `III-1-3`, `III-2`, `III-3`, `III-4`, `III-5`, `III-6-1`, `III-6-2`, `III-6-3`, `III-6-4`, `III-7-1`, `III-7-2`, `III-8`, `III-9`, `III-10`, `III-11`, `III-12-1`, `III-12-2`, `III-12-3`, `III-12-4`, `III-12-5`, `III-12-6`, `III-12-7`, `III-12-8`, `III-12-9`, `III-12-10`, `III-12-11`, `III-13`, `III-14`, `created_at`, `updated_at`) VALUES
('177o01180', 'ESTUDIA Y TRABAJA', 'IDIOMAS', 'ALEMAN', 'MENOS DE 6 MESES', 'OTRO(S)', 'COMPETENCIAS LABORALES', NULL, '50%', '100%', '100%', '50%', 'Un año', '2020', 'Más de 10', 'Técnico', 'Contrato', '100%', 'PRIVADO', 'Otra', 'GOOGLE', 'AV. INDEPENDENCIA SN', 'CDMX', 'CDMX', 'CDMX', '5500112233', 'google.com', 'JONH WALL', 'johnwall@gmail', 'Otros', 'Grande (más de 500)', NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `seccion4`
--

CREATE TABLE `seccion4` (
  `id_egresado` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `IV-1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `IV-2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `IV-3` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `IV-4-1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `IV-4-2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `IV-4-3` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `IV-4-4` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `IV-4-5` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `IV-4-6` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `IV-4-7` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `IV-4-8` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `IV-4-9` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `IV-4-10` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `seccion4`
--

INSERT INTO `seccion4` (`id_egresado`, `IV-1`, `IV-2`, `IV-3`, `IV-4-1`, `IV-4-2`, `IV-4-3`, `IV-4-4`, `IV-4-5`, `IV-4-6`, `IV-4-7`, `IV-4-8`, `IV-4-9`, `IV-4-10`, `created_at`, `updated_at`) VALUES
('177o01180', 'Eficiente', 'Bueno', 'Bueno2', '5 Mucho', '4', '5 Mucho', '5 Mucho', 'Poco 1', '5 Mucho', 'Poco 1', '5 Mucho', '5 Mucho', '3', NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `seccion5`
--

CREATE TABLE `seccion5` (
  `id_egresado` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `V-1-1` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `V-1-2` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `seccion5`
--

INSERT INTO `seccion5` (`id_egresado`, `V-1-1`, `V-1-2`, `created_at`, `updated_at`) VALUES
('177o01180', 'Si', 'Si', NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `seccion6`
--

CREATE TABLE `seccion6` (
  `id_egresado` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `VI-1` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `VI-2` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `VI-3` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `seccion6`
--

INSERT INTO `seccion6` (`id_egresado`, `VI-1`, `VI-2`, `VI-3`, `created_at`, `updated_at`) VALUES
('177o01180', 'No', 'No', 'No', NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `seccion7`
--

CREATE TABLE `seccion7` (
  `id_egresado` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `VII-1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `seccion7`
--

INSERT INTO `seccion7` (`id_egresado`, `VII-1`, `created_at`, `updated_at`) VALUES
('177o01180', 'FUNCIONA LA ENCUESTA', NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Director', 'director@itsx', NULL, '$2y$10$wg28fs3.2diDQzncxPx1KOwf/iXTIWykVxCM8OZpVUmQdhG3JkdAa', NULL, '2021-02-04 12:37:27', '2021-02-04 12:37:27'),
(2, 'JEFE SISTEMAS', 'jefe-sistemas@itsx', NULL, '$2y$10$8KhenBv.ZzipmPMqEZW6i.5NU2S8zLdvaIoQuqt0sAac35DDXqvjq', NULL, '2021-02-04 12:37:59', '2021-02-04 12:37:59'),
(3, 'JEFE INDUSTRIAL', 'jefe-industrial@itsx', NULL, '$2y$10$rfbLRydSlgIsG6zcfYHy7.fexLXk0JoJYQcV0q8MJeGHPSSFia.ti', NULL, '2021-02-04 12:49:25', '2021-02-04 12:49:25'),
(4, 'JEFE BIOQUIMICA', 'jefe-bioquimica@itsx', NULL, '$2y$10$PVM4wACbaU.OUHjjZVfDzu7QX52AAjNPJ0jPQzR2rAF4O7OsIj2A2', NULL, '2021-02-04 13:14:07', '2021-02-04 13:14:07'),
(5, 'JEFE ELECTROMECANICA', 'jefe-electromecanica@itsx', NULL, '$2y$10$can5nVi9mJevhrt7Mt2FjuMt8wrXcQbkoW/uy8vMD22V7nEMFpxc6', NULL, '2021-02-04 16:16:35', '2021-02-04 16:16:35'),
(6, 'JEFE ELECTRONICA', 'jefe-electronica@itsx', NULL, '$2y$10$wbhwaPmK8fvxAFIz3h/gneHGS6EggIADBrTshPcAiiIl6Rv8oDf8G', NULL, '2021-02-04 16:17:22', '2021-02-04 16:20:04'),
(7, 'JEFE ALIMENTARIAS', 'jefe-alimentarias@itsx', NULL, '$2y$10$EL0KWMJ8lwunQ.Gca7PCy.pwgJORF6CP7PuCaJ5XUfgRhbpTiy8d.', NULL, '2021-02-04 16:18:16', '2021-02-04 16:18:16'),
(8, 'JEFE GASTRONOMIA', 'jefe-gastronomia@itsx', NULL, '$2y$10$NiWOM622CtPoQiX3SANUZOC4DNhKsYfEksSmhgBPCP5kSNYFb8p7.', NULL, '2021-02-04 16:19:04', '2021-02-04 16:19:04'),
(9, 'JEFE CIVIL', 'jefe-civil@itsx', NULL, '$2y$10$9BqXmsp8Rn1WDuzgkikih.R730HEQ09HuBM1O9xzwiv/pduXzL.Xu', NULL, '2021-02-04 16:19:44', '2021-02-04 16:19:44'),
(10, 'JEFE MECATRONICA', 'jefe-mecatronica@itsx', NULL, '$2y$10$dz.feuwmn49eOtJwYzqaX.M4HdL3bIEsVQwUL1OTxxl/U96I0oh2G', NULL, '2021-02-04 16:20:52', '2021-02-04 16:20:52'),
(11, 'JEFE GESTION', 'jefe-gestion@itsx', NULL, '$2y$10$l.O2.Au2kcz89WVN28Gw1.oaHyIIDz1x717i.3BiGxjyfygnN253K', NULL, '2021-02-04 16:21:29', '2021-02-04 16:21:29');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `dir_egresados`
--
ALTER TABLE `dir_egresados`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `dir_empresas`
--
ALTER TABLE `dir_empresas`
  ADD PRIMARY KEY (`id`);

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
-- Indices de la tabla `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `role_user`
--
ALTER TABLE `role_user`
  ADD PRIMARY KEY (`user_id`),
  ADD KEY `role_user_role_id_foreign` (`role_id`);

--
-- Indices de la tabla `seccion1_egresado`
--
ALTER TABLE `seccion1_egresado`
  ADD PRIMARY KEY (`matricula`);

--
-- Indices de la tabla `seccion2`
--
ALTER TABLE `seccion2`
  ADD PRIMARY KEY (`id_egresado`);

--
-- Indices de la tabla `seccion3`
--
ALTER TABLE `seccion3`
  ADD PRIMARY KEY (`id_egresado`);

--
-- Indices de la tabla `seccion4`
--
ALTER TABLE `seccion4`
  ADD PRIMARY KEY (`id_egresado`);

--
-- Indices de la tabla `seccion5`
--
ALTER TABLE `seccion5`
  ADD PRIMARY KEY (`id_egresado`);

--
-- Indices de la tabla `seccion6`
--
ALTER TABLE `seccion6`
  ADD PRIMARY KEY (`id_egresado`);

--
-- Indices de la tabla `seccion7`
--
ALTER TABLE `seccion7`
  ADD PRIMARY KEY (`id_egresado`);

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
-- AUTO_INCREMENT de la tabla `dir_egresados`
--
ALTER TABLE `dir_egresados`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `dir_empresas`
--
ALTER TABLE `dir_empresas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT de la tabla `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `role_user`
--
ALTER TABLE `role_user`
  ADD CONSTRAINT `role_user_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `role_user_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `seccion2`
--
ALTER TABLE `seccion2`
  ADD CONSTRAINT `seccion2_id_egresado_foreign` FOREIGN KEY (`id_egresado`) REFERENCES `seccion1_egresado` (`matricula`) ON DELETE CASCADE;

--
-- Filtros para la tabla `seccion3`
--
ALTER TABLE `seccion3`
  ADD CONSTRAINT `seccion3_id_egresado_foreign` FOREIGN KEY (`id_egresado`) REFERENCES `seccion1_egresado` (`matricula`) ON DELETE CASCADE;

--
-- Filtros para la tabla `seccion4`
--
ALTER TABLE `seccion4`
  ADD CONSTRAINT `seccion4_id_egresado_foreign` FOREIGN KEY (`id_egresado`) REFERENCES `seccion1_egresado` (`matricula`) ON DELETE CASCADE;

--
-- Filtros para la tabla `seccion5`
--
ALTER TABLE `seccion5`
  ADD CONSTRAINT `seccion5_id_egresado_foreign` FOREIGN KEY (`id_egresado`) REFERENCES `seccion1_egresado` (`matricula`) ON DELETE CASCADE;

--
-- Filtros para la tabla `seccion6`
--
ALTER TABLE `seccion6`
  ADD CONSTRAINT `seccion6_id_egresado_foreign` FOREIGN KEY (`id_egresado`) REFERENCES `seccion1_egresado` (`matricula`) ON DELETE CASCADE;

--
-- Filtros para la tabla `seccion7`
--
ALTER TABLE `seccion7`
  ADD CONSTRAINT `seccion7_id_egresado_foreign` FOREIGN KEY (`id_egresado`) REFERENCES `seccion1_egresado` (`matricula`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
