-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 06-01-2021 a las 15:01:07
-- Versión del servidor: 10.4.14-MariaDB
-- Versión de PHP: 7.2.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `wok_system`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `logs`
--

CREATE TABLE `logs` (
  `id` int(10) UNSIGNED NOT NULL,
  `desc` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `logs`
--

INSERT INTO `logs` (`id`, `desc`, `email`, `created_at`, `updated_at`) VALUES
(1, 'Ingreso al sistema', 'propietario@wokeate.com', '2020-11-02 02:26:52', '2020-11-02 02:26:52'),
(2, 'Edito un usuario Empleado Cajero', 'propietario@wokeate.com', '2020-11-02 02:31:12', '2020-11-02 02:31:12'),
(3, 'Edito un usuario Empleado Cocinero', 'propietario@wokeate.com', '2020-11-02 02:31:44', '2020-11-02 02:31:44'),
(4, 'Se cambio el estado del usario uoz13634@bcaoo.com', 'propietario@wokeate.com', '2020-11-02 02:32:00', '2020-11-02 02:32:00'),
(5, 'Se cambio el estado del usario uoz13634@bcaoo.com', 'propietario@wokeate.com', '2020-11-02 02:32:02', '2020-11-02 02:32:02'),
(6, 'Ingreso un nuevo proveedor', 'propietario@wokeate.com', '2020-11-02 03:42:54', '2020-11-02 03:42:54'),
(7, 'Ingreso un nuevo proveedor', 'propietario@wokeate.com', '2020-11-02 03:43:45', '2020-11-02 03:43:45'),
(8, 'Edito el proveedor Polleria Mari', 'propietario@wokeate.com', '2020-11-02 04:05:10', '2020-11-02 04:05:10'),
(9, 'Ingreso al sistema', 'propietario@wokeate.com', '2020-11-02 04:37:51', '2020-11-02 04:37:51'),
(10, 'Ingreso al sistema', 'propietario@wokeate.com', '2020-11-02 04:38:06', '2020-11-02 04:38:06'),
(11, 'Ingreso al sistema', 'propietario@wokeate.com', '2020-11-02 08:01:36', '2020-11-02 08:01:36'),
(12, 'Edito información de franquicia', 'propietario@wokeate.com', '2020-11-02 08:45:43', '2020-11-02 08:45:43'),
(13, 'Edito información de franquicia', 'propietario@wokeate.com', '2020-11-02 09:35:17', '2020-11-02 09:35:17'),
(14, 'Ingreso un nuevo usuario Contador ', 'propietario@wokeate.com', '2020-11-02 10:48:14', '2020-11-02 10:48:14'),
(15, 'Ingreso un nuevo usuario Contador ', 'propietario@wokeate.com', '2020-11-02 10:49:32', '2020-11-02 10:49:32'),
(16, 'Se cambio el estado del usario cpd37121@cuoly.com', 'propietario@wokeate.com', '2020-11-02 10:52:26', '2020-11-02 10:52:26'),
(17, 'Se cambio el estado del usario cpd37121@cuoly.com', 'propietario@wokeate.com', '2020-11-02 10:52:28', '2020-11-02 10:52:28'),
(18, 'Edito usuario Contador ', 'propietario@wokeate.com', '2020-11-02 11:11:31', '2020-11-02 11:11:31'),
(19, 'Edito usuario Contador ', 'propietario@wokeate.com', '2020-11-02 11:11:56', '2020-11-02 11:11:56'),
(20, 'Se reasigno contador', 'propietario@wokeate.com', '2020-11-02 11:54:47', '2020-11-02 11:54:47'),
(21, 'Ingreso al sistema', 'propietario@wokeate.com', '2020-11-02 12:16:42', '2020-11-02 12:16:42'),
(22, 'Ingreso al sistema', 'propietario@wokeate.com', '2020-11-02 12:17:54', '2020-11-02 12:17:54'),
(23, 'Ingreso al sistema', 'propietario@wokeate.com', '2020-11-02 12:25:20', '2020-11-02 12:25:20'),
(24, 'Edito Contraseña de usuario', 'propietario@wokeate.com', '2020-11-02 12:29:42', '2020-11-02 12:29:42'),
(25, 'Ingreso al sistema', 'propietario@wokeate.com', '2020-11-02 12:30:08', '2020-11-02 12:30:08'),
(26, 'Ingreso al sistema', 'propietario@wokeate.com', '2020-11-02 13:06:19', '2020-11-02 13:06:19'),
(27, 'Se cambio el estado del usario uoz13634@bcaoo.com', 'propietario@wokeate.com', '2020-11-02 13:07:05', '2020-11-02 13:07:05'),
(28, 'Se cambio el estado del usario uoz13634@bcaoo.com', 'propietario@wokeate.com', '2020-11-02 13:07:16', '2020-11-02 13:07:16'),
(29, 'Ingreso al sistema', 'propietario@wokeate.com', '2020-11-05 10:05:01', '2020-11-05 10:05:01'),
(30, 'Ingreso al sistema', 'weh45606@bcaoo.com', '2020-11-05 10:18:56', '2020-11-05 10:18:56'),
(31, 'Ingreso al sistema', 'dpk65206@cuoly.com', '2020-11-05 10:26:44', '2020-11-05 10:26:44'),
(32, 'Ingreso al sistema', 'propietario@wokeate.com', '2020-11-05 10:40:00', '2020-11-05 10:40:00'),
(33, 'Se cambio el estado del usario uoz13634@bcaoo.com', 'propietario@wokeate.com', '2020-11-05 10:41:13', '2020-11-05 10:41:13'),
(34, 'Se cambio el estado del usario uoz13634@bcaoo.com', 'propietario@wokeate.com', '2020-11-05 10:41:15', '2020-11-05 10:41:15'),
(35, 'Ingreso al sistema', 'erh59639@eoopy.com', '2020-11-05 10:44:31', '2020-11-05 10:44:31'),
(36, 'Ingreso al sistema', 'erh59639@eoopy.com', '2020-11-05 10:45:50', '2020-11-05 10:45:50'),
(37, 'Ingreso al sistema', 'propietario@wokeate.com', '2020-11-06 03:30:53', '2020-11-06 03:30:53'),
(38, 'Ingreso un nueva mesa', 'propietario@wokeate.com', '2020-11-06 04:13:42', '2020-11-06 04:13:42'),
(39, 'Ingreso un nueva mesa', 'propietario@wokeate.com', '2020-11-06 04:13:51', '2020-11-06 04:13:51'),
(40, 'Ingreso un nueva mesa', 'propietario@wokeate.com', '2020-11-06 04:14:01', '2020-11-06 04:14:01'),
(41, 'Ingreso un nueva mesa', 'propietario@wokeate.com', '2020-11-06 04:14:20', '2020-11-06 04:14:20'),
(42, 'Ingreso un nueva mesa', 'propietario@wokeate.com', '2020-11-06 04:14:33', '2020-11-06 04:14:33'),
(43, 'Ingreso un nueva mesa', 'propietario@wokeate.com', '2020-11-06 04:14:43', '2020-11-06 04:14:43'),
(44, 'Ingreso al sistema', 'dpk65206@cuoly.com', '2020-11-06 04:16:51', '2020-11-06 04:16:51'),
(45, 'Ingreso al sistema', 'weh45606@bcaoo.com', '2020-11-06 04:20:30', '2020-11-06 04:20:30'),
(46, 'Ingreso al sistema', 'weh45606@bcaoo.com', '2020-11-06 04:33:49', '2020-11-06 04:33:49'),
(47, 'Ingreso al sistema', 'dosofware@gmail.com', '2020-11-06 04:34:02', '2020-11-06 04:34:02'),
(48, 'Ingreso al sistema', 'dpk65206@cuoly.com', '2020-11-06 04:34:56', '2020-11-06 04:34:56'),
(49, 'Ingreso al sistema', 'erh59639@eoopy.com', '2020-11-06 04:41:45', '2020-11-06 04:41:45'),
(50, 'Ingreso al sistema', 'weh45606@bcaoo.com', '2020-11-06 05:39:51', '2020-11-06 05:39:51'),
(51, 'Ingreso al sistema', 'dpk65206@cuoly.com', '2020-11-06 05:41:19', '2020-11-06 05:41:19'),
(52, 'Ingreso al sistema', 'erh59639@eoopy.com', '2020-11-08 02:13:54', '2020-11-08 02:13:54'),
(53, 'Ingreso al sistema', 'dpk65206@cuoly.com', '2020-11-08 03:04:37', '2020-11-08 03:04:37'),
(54, 'Ingreso al sistema', 'erh59639@eoopy.com', '2020-11-08 03:42:22', '2020-11-08 03:42:22'),
(55, 'Ingreso al sistema', 'erh59639@eoopy.com', '2020-11-08 04:24:58', '2020-11-08 04:24:58'),
(56, 'Ingreso al sistema', 'erh59639@eoopy.com', '2020-11-08 10:10:46', '2020-11-08 10:10:46'),
(57, 'Ingreso al sistema', 'erh59639@eoopy.com', '2020-11-08 10:24:01', '2020-11-08 10:24:01'),
(58, 'Ingreso al sistema', 'erh59639@eoopy.com', '2020-11-08 10:24:56', '2020-11-08 10:24:56'),
(59, 'Ingreso al sistema', 'dpk65206@cuoly.com', '2020-11-08 10:28:29', '2020-11-08 10:28:29'),
(60, 'Ingreso al sistema', 'dpk65206@cuoly.com', '2020-11-08 11:59:43', '2020-11-08 11:59:43'),
(61, 'Ingreso al sistema', 'dpk65206@cuoly.com', '2020-11-08 22:09:40', '2020-11-08 22:09:40'),
(62, 'Ingreso al sistema', 'erh59639@eoopy.com', '2020-11-08 23:39:15', '2020-11-08 23:39:15'),
(63, 'Ingreso al sistema', 'propietario@wokeate.com', '2020-11-09 02:22:53', '2020-11-09 02:22:53'),
(64, 'Se cambio el estado del usario cpd37121@cuoly.com', 'propietario@wokeate.com', '2020-11-09 02:26:34', '2020-11-09 02:26:34'),
(65, 'Se cambio el estado del usario cpd37121@cuoly.com', 'propietario@wokeate.com', '2020-11-09 02:26:38', '2020-11-09 02:26:38'),
(66, 'Edito usuario Contador ', 'propietario@wokeate.com', '2020-11-09 02:26:51', '2020-11-09 02:26:51'),
(67, 'Edito usuario Contador ', 'propietario@wokeate.com', '2020-11-09 02:27:42', '2020-11-09 02:27:42'),
(68, 'Se cambio el estado del usario cpd37121@cuoly.com', 'propietario@wokeate.com', '2020-11-09 02:29:58', '2020-11-09 02:29:58'),
(69, 'Se cambio el estado del usario cpd37121@cuoly.com', 'propietario@wokeate.com', '2020-11-09 02:30:00', '2020-11-09 02:30:00'),
(70, 'Edito usuario Contador ', 'propietario@wokeate.com', '2020-11-09 02:30:12', '2020-11-09 02:30:12'),
(71, 'Ingreso un nuevo usuario Contador ', 'propietario@wokeate.com', '2020-11-09 02:31:27', '2020-11-09 02:31:27'),
(72, 'Se cambio el estado del usario uoz13634@bcaoo.com', 'propietario@wokeate.com', '2020-11-09 02:39:39', '2020-11-09 02:39:39'),
(73, 'Se cambio el estado del usario uoz13634@bcaoo.com', 'propietario@wokeate.com', '2020-11-09 02:39:40', '2020-11-09 02:39:40'),
(74, 'Ingreso un nuevo proveedor', 'propietario@wokeate.com', '2020-11-09 04:28:53', '2020-11-09 04:28:53'),
(75, 'Ingreso al sistema', 'propietario@wokeate.com', '2020-11-09 09:52:53', '2020-11-09 09:52:53'),
(76, 'Ingreso al sistema', 'propietario@wokeate.com', '2020-11-12 10:22:35', '2020-11-12 10:22:35'),
(77, 'Elimino el pago 4', 'propietario@wokeate.com', '2020-11-12 10:37:15', '2020-11-12 10:37:15'),
(78, 'Agrego el pago 5', 'propietario@wokeate.com', '2020-11-12 10:49:00', '2020-11-12 10:49:00'),
(79, 'Edito el pago 5', 'propietario@wokeate.com', '2020-11-12 10:50:43', '2020-11-12 10:50:43'),
(80, 'Agrego el pago 6', 'propietario@wokeate.com', '2020-11-12 10:57:29', '2020-11-12 10:57:29'),
(81, 'Agrego el pago 7', 'propietario@wokeate.com', '2020-11-12 11:02:31', '2020-11-12 11:02:31'),
(82, 'Agrego el pago 8', 'propietario@wokeate.com', '2020-11-12 11:02:44', '2020-11-12 11:02:44'),
(83, 'Agrego el pago 9', 'propietario@wokeate.com', '2020-11-12 11:03:00', '2020-11-12 11:03:00'),
(84, 'Agrego el pago 10', 'propietario@wokeate.com', '2020-11-12 11:03:11', '2020-11-12 11:03:11'),
(85, 'Ingreso un nueva mesa', 'propietario@wokeate.com', '2020-11-12 13:35:43', '2020-11-12 13:35:43'),
(86, 'Ingreso un nuevo proveedor', 'propietario@wokeate.com', '2020-11-12 13:36:08', '2020-11-12 13:36:08'),
(87, 'Agrego el pago 16', 'propietario@wokeate.com', '2020-11-12 13:45:18', '2020-11-12 13:45:18'),
(88, 'Ingreso al sistema', 'propietario@wokeate.com', '2020-11-13 10:57:01', '2020-11-13 10:57:01'),
(89, 'Agrego los pagos constantes fecha 11/2020', 'propietario@wokeate.com', '2020-11-13 11:29:42', '2020-11-13 11:29:42'),
(90, 'Agrego el pago 19', 'propietario@wokeate.com', '2020-11-13 11:29:43', '2020-11-13 11:29:43'),
(91, 'Ingreso al sistema', 'weh45606@bcaoo.com', '2020-11-13 11:37:22', '2020-11-13 11:37:22'),
(92, 'Ingreso al sistema', 'propietario@wokeate.com', '2020-11-14 22:51:54', '2020-11-14 22:51:54'),
(93, 'Agrego los pagos constantes fecha 11/2020', 'propietario@wokeate.com', '2020-11-15 00:32:12', '2020-11-15 00:32:12'),
(94, 'Agrego el pago 21', 'propietario@wokeate.com', '2020-11-15 00:32:32', '2020-11-15 00:32:32'),
(95, 'Agrego el pago 22', 'propietario@wokeate.com', '2020-11-15 00:32:33', '2020-11-15 00:32:33'),
(96, 'Agrego el pago 23', 'propietario@wokeate.com', '2020-11-15 00:33:07', '2020-11-15 00:33:07'),
(97, 'Elimino el pago 21', 'propietario@wokeate.com', '2020-11-15 00:33:16', '2020-11-15 00:33:16'),
(98, 'Elimino el pago 22', 'propietario@wokeate.com', '2020-11-15 00:33:20', '2020-11-15 00:33:20'),
(99, 'Elimino el pago 23', 'propietario@wokeate.com', '2020-11-15 00:33:22', '2020-11-15 00:33:22'),
(100, 'Elimino el pago 20', 'propietario@wokeate.com', '2020-11-15 00:33:28', '2020-11-15 00:33:28'),
(101, 'Agrego los pagos constantes fecha 11/2020', 'propietario@wokeate.com', '2020-11-15 00:33:43', '2020-11-15 00:33:43'),
(102, 'Agrego el pago 25', 'propietario@wokeate.com', '2020-11-15 00:33:43', '2020-11-15 00:33:43'),
(103, 'Elimino el pago 25', 'propietario@wokeate.com', '2020-11-15 00:34:01', '2020-11-15 00:34:01'),
(104, 'Elimino el pago 24', 'propietario@wokeate.com', '2020-11-15 00:34:05', '2020-11-15 00:34:05'),
(105, 'Agrego los pagos constantes fecha 11/2020', 'propietario@wokeate.com', '2020-11-15 00:34:10', '2020-11-15 00:34:10'),
(106, 'Agrego el pago 27', 'propietario@wokeate.com', '2020-11-15 00:34:23', '2020-11-15 00:34:23'),
(107, 'Agrego el pago 28', 'propietario@wokeate.com', '2020-11-15 00:34:42', '2020-11-15 00:34:42'),
(108, 'Agrego el pago 29', 'propietario@wokeate.com', '2020-11-15 00:35:44', '2020-11-15 00:35:44'),
(109, 'Agrego los pagos constantes fecha 11/2020', 'propietario@wokeate.com', '2020-11-15 01:14:05', '2020-11-15 01:14:05'),
(110, 'Agrego el pago 31', 'propietario@wokeate.com', '2020-11-15 01:14:21', '2020-11-15 01:14:21'),
(111, 'Ingreso al sistema', 'weh45606@bcaoo.com', '2020-11-15 01:21:49', '2020-11-15 01:21:49'),
(112, 'Edito un usuario Empleado Gerente', 'propietario@wokeate.com', '2020-11-15 01:47:47', '2020-11-15 01:47:47'),
(113, 'Edito un usuario Empleado Gerente', 'propietario@wokeate.com', '2020-11-15 01:48:10', '2020-11-15 01:48:10'),
(114, 'Edito información de franquicia', 'weh45606@bcaoo.com', '2020-11-15 01:49:22', '2020-11-15 01:49:22'),
(115, 'Edito información de franquicia', 'weh45606@bcaoo.com', '2020-11-15 01:49:30', '2020-11-15 01:49:30'),
(116, 'Edito información de franquicia', 'weh45606@bcaoo.com', '2020-11-15 01:57:09', '2020-11-15 01:57:09'),
(117, 'Edito información de franquicia', 'weh45606@bcaoo.com', '2020-11-15 01:57:13', '2020-11-15 01:57:13'),
(118, 'Ingreso un nuevo proveedor', 'weh45606@bcaoo.com', '2020-11-15 02:05:47', '2020-11-15 02:05:47'),
(119, 'Edito el proveedor Polleria Maria', 'weh45606@bcaoo.com', '2020-11-15 02:15:48', '2020-11-15 02:15:48'),
(120, 'Edito el proveedor Julío García Douglas', 'weh45606@bcaoo.com', '2020-11-15 02:16:12', '2020-11-15 02:16:12'),
(121, 'Edito el proveedor INGRID RAMOS', 'propietario@wokeate.com', '2020-11-15 02:16:54', '2020-11-15 02:16:54'),
(122, 'Edito el proveedor INGRID RAMOS', 'weh45606@bcaoo.com', '2020-11-15 02:17:05', '2020-11-15 02:17:05'),
(123, 'Edito el proveedor INGRID RAMOS', 'propietario@wokeate.com', '2020-11-15 02:17:15', '2020-11-15 02:17:15'),
(124, 'Ingreso un nuevo proveedor', 'weh45606@bcaoo.com', '2020-11-15 02:18:04', '2020-11-15 02:18:04'),
(125, 'Se cambio el estado del usario uoz13634@bcaoo.com', 'propietario@wokeate.com', '2020-11-15 03:08:42', '2020-11-15 03:08:42'),
(126, 'Se cambio el estado del usario uoz13634@bcaoo.com', 'propietario@wokeate.com', '2020-11-15 03:08:43', '2020-11-15 03:08:43'),
(127, 'Se cambio el estado del usario uoz13634@bcaoo.com', 'propietario@wokeate.com', '2020-11-15 03:08:48', '2020-11-15 03:08:48'),
(128, 'Se cambio el estado del usario uoz13634@bcaoo.com', 'propietario@wokeate.com', '2020-11-15 03:08:50', '2020-11-15 03:08:50'),
(129, 'Se cambio el estado del usario uoz13634@bcaoo.com', 'propietario@wokeate.com', '2020-11-15 03:08:51', '2020-11-15 03:08:51'),
(130, 'Se cambio el estado del usario uoz13634@bcaoo.com', 'propietario@wokeate.com', '2020-11-15 03:08:52', '2020-11-15 03:08:52'),
(131, 'Edito un usuario Empleado Delivery', 'propietario@wokeate.com', '2020-11-15 03:09:05', '2020-11-15 03:09:05'),
(132, 'Ingreso un nuevo usuario Empleado Delivery', 'weh45606@bcaoo.com', '2020-11-15 03:14:39', '2020-11-15 03:14:39'),
(133, 'Se cambio el estado del usario mauricio@wokeate.com', 'weh45606@bcaoo.com', '2020-11-15 03:20:44', '2020-11-15 03:20:44'),
(134, 'Se cambio el estado del usario mauricio@wokeate.com', 'weh45606@bcaoo.com', '2020-11-15 03:20:46', '2020-11-15 03:20:46'),
(135, 'Edito un usuario Empleado Delivery', 'weh45606@bcaoo.com', '2020-11-15 03:21:35', '2020-11-15 03:21:35'),
(136, 'Se cambio el estado del usario mauricio@wokeate.com', 'weh45606@bcaoo.com', '2020-11-15 03:22:07', '2020-11-15 03:22:07'),
(137, 'Agrego los pagos constantes fecha 11/2020', 'weh45606@bcaoo.com', '2020-11-15 03:34:28', '2020-11-15 03:34:28'),
(138, 'Agrego el pago 32', 'propietario@wokeate.com', '2020-11-15 03:48:04', '2020-11-15 03:48:04'),
(139, 'Edito un usuario Empleado Gerente', 'propietario@wokeate.com', '2020-11-15 03:49:01', '2020-11-15 03:49:01'),
(140, 'Edito un usuario Empleado Gerente', 'propietario@wokeate.com', '2020-11-15 03:49:31', '2020-11-15 03:49:31'),
(141, 'Se cambio el estado del usario weh45606@bcaoo.com', 'propietario@wokeate.com', '2020-11-15 03:50:30', '2020-11-15 03:50:30'),
(142, 'Se cambio el estado del usario weh45606@bcaoo.com', 'propietario@wokeate.com', '2020-11-15 03:50:32', '2020-11-15 03:50:32'),
(143, 'Edito un usuario Empleado Gerente', 'propietario@wokeate.com', '2020-11-15 03:50:45', '2020-11-15 03:50:45'),
(144, 'Edito un usuario Empleado Gerente', 'propietario@wokeate.com', '2020-11-15 03:51:07', '2020-11-15 03:51:07'),
(145, 'Elimino el pago 31', 'weh45606@bcaoo.com', '2020-11-15 03:52:38', '2020-11-15 03:52:38'),
(146, 'Agrego los pagos constantes fecha 11/2020', 'weh45606@bcaoo.com', '2020-11-15 04:02:38', '2020-11-15 04:02:38'),
(147, 'Agrego el pago 33', 'weh45606@bcaoo.com', '2020-11-15 04:02:38', '2020-11-15 04:02:38'),
(148, 'Elimino el pago 30', 'weh45606@bcaoo.com', '2020-11-15 04:09:32', '2020-11-15 04:09:32'),
(149, 'Elimino el pago 33', 'weh45606@bcaoo.com', '2020-11-15 04:09:35', '2020-11-15 04:09:35'),
(150, 'Agrego los pagos constantes fecha 11/2020', 'weh45606@bcaoo.com', '2020-11-15 04:09:37', '2020-11-15 04:09:37'),
(151, 'Elimino el pago 34', 'weh45606@bcaoo.com', '2020-11-15 04:09:42', '2020-11-15 04:09:42'),
(152, 'Agrego los pagos constantes fecha 11/2020', 'weh45606@bcaoo.com', '2020-11-15 04:09:58', '2020-11-15 04:09:58'),
(153, 'Agrego el pago 36', 'weh45606@bcaoo.com', '2020-11-15 04:09:58', '2020-11-15 04:09:58'),
(154, 'Elimino el pago 36', 'propietario@wokeate.com', '2020-11-15 04:10:16', '2020-11-15 04:10:16'),
(155, 'Elimino el pago 32', 'propietario@wokeate.com', '2020-11-15 04:10:19', '2020-11-15 04:10:19'),
(156, 'Elimino el pago 35', 'propietario@wokeate.com', '2020-11-15 04:10:24', '2020-11-15 04:10:24'),
(157, 'Agrego los pagos constantes fecha 11/2020', 'propietario@wokeate.com', '2020-11-15 04:10:30', '2020-11-15 04:10:30'),
(158, 'Elimino el pago 37', 'propietario@wokeate.com', '2020-11-15 04:10:34', '2020-11-15 04:10:34'),
(159, 'Agrego los pagos constantes fecha 11/2020', 'propietario@wokeate.com', '2020-11-15 04:10:49', '2020-11-15 04:10:49'),
(160, 'Agrego el pago 39', 'propietario@wokeate.com', '2020-11-15 04:10:50', '2020-11-15 04:10:50'),
(161, 'Edito el pago 38', 'propietario@wokeate.com', '2020-11-15 04:24:10', '2020-11-15 04:24:10'),
(162, 'Edito el pago 39', 'weh45606@bcaoo.com', '2020-11-15 04:25:18', '2020-11-15 04:25:18'),
(163, 'Elimino la mesa con id: 2', 'weh45606@bcaoo.com', '2020-11-15 05:49:14', '2020-11-15 05:49:14'),
(164, 'Elimino la mesa con id: 4', 'weh45606@bcaoo.com', '2020-11-15 05:51:18', '2020-11-15 05:51:18'),
(165, 'Elimino la mesa con id: 6', 'weh45606@bcaoo.com', '2020-11-15 05:51:20', '2020-11-15 05:51:20'),
(166, 'Elimino la mesa con id: 7', 'weh45606@bcaoo.com', '2020-11-15 05:51:23', '2020-11-15 05:51:23'),
(167, 'Elimino la mesa con id: 8', 'weh45606@bcaoo.com', '2020-11-15 05:51:25', '2020-11-15 05:51:25'),
(168, 'Ingreso un nueva mesa', 'weh45606@bcaoo.com', '2020-11-15 06:16:04', '2020-11-15 06:16:04'),
(169, 'Ingreso un nueva mesa', 'weh45606@bcaoo.com', '2020-11-15 06:16:14', '2020-11-15 06:16:14'),
(170, 'Ingreso un nueva mesa', 'propietario@wokeate.com', '2020-11-15 06:18:28', '2020-11-15 06:18:28'),
(171, 'Ingreso un nueva mesa', 'propietario@wokeate.com', '2020-11-15 06:18:45', '2020-11-15 06:18:45'),
(172, 'Ingreso al sistema', 'dpk65206@cuoly.com', '2020-11-15 06:21:54', '2020-11-15 06:21:54'),
(173, 'Ingreso al sistema', 'weh45606@bcaoo.com', '2020-11-16 02:26:13', '2020-11-16 02:26:13'),
(174, 'Ingreso un nuevo cliente 2', 'weh45606@bcaoo.com', '2020-11-16 03:28:40', '2020-11-16 03:28:40'),
(175, 'Ingreso un nuevo cliente 3', 'weh45606@bcaoo.com', '2020-11-16 03:29:13', '2020-11-16 03:29:13'),
(176, 'Ingreso un nuevo cliente 4', 'weh45606@bcaoo.com', '2020-11-16 03:30:55', '2020-11-16 03:30:55'),
(177, 'Ingreso un nuevo cliente 5', 'weh45606@bcaoo.com', '2020-11-16 04:06:37', '2020-11-16 04:06:37'),
(178, 'Edito al cliente 4', 'weh45606@bcaoo.com', '2020-11-16 04:07:40', '2020-11-16 04:07:40'),
(179, 'Edito al cliente 4', 'weh45606@bcaoo.com', '2020-11-16 04:08:05', '2020-11-16 04:08:05'),
(180, 'Edito al cliente 3', 'weh45606@bcaoo.com', '2020-11-16 04:08:49', '2020-11-16 04:08:49'),
(181, 'Ingreso una nueva direccion 3 para el cliente 4', 'weh45606@bcaoo.com', '2020-11-16 05:20:42', '2020-11-16 05:20:42'),
(182, 'Ingreso una nueva direccion 4 para el cliente 2', 'weh45606@bcaoo.com', '2020-11-16 05:25:05', '2020-11-16 05:25:05'),
(183, 'Ingreso una nueva direccion 4 para el cliente 3', 'weh45606@bcaoo.com', '2020-11-16 05:38:39', '2020-11-16 05:38:39'),
(184, 'Ingreso un nuevo contacto 4 para el cliente ', 'weh45606@bcaoo.com', '2020-11-16 05:56:47', '2020-11-16 05:56:47'),
(185, 'Ingreso un nuevo contacto 4 para el cliente ', 'weh45606@bcaoo.com', '2020-11-16 05:56:56', '2020-11-16 05:56:56'),
(186, 'Ingreso un nuevo contacto 3 para el cliente ', 'weh45606@bcaoo.com', '2020-11-16 05:57:06', '2020-11-16 05:57:06'),
(187, 'Ingreso al sistema', 'dpk65206@cuoly.com', '2020-11-16 06:33:07', '2020-11-16 06:33:07'),
(188, 'Ingreso al sistema', 'propietario@wokeate.com', '2020-11-16 06:48:18', '2020-11-16 06:48:18'),
(189, 'Se cambio el estado del usario vsp79608@cuoly.com', 'propietario@wokeate.com', '2020-11-16 06:52:48', '2020-11-16 06:52:48'),
(190, 'Ingreso un nuevo usuario Empleado Cajero', 'propietario@wokeate.com', '2020-11-16 06:53:32', '2020-11-16 06:53:32'),
(191, 'Ingreso al sistema', 'cajero@wokeate.com', '2020-11-16 06:54:02', '2020-11-16 06:54:02'),
(192, 'Ingreso al sistema', 'dpk65206@cuoly.com', '2020-11-16 07:20:22', '2020-11-16 07:20:22'),
(193, 'Ingreso al sistema', 'weh45606@bcaoo.com', '2020-11-16 09:42:02', '2020-11-16 09:42:02'),
(194, 'Ingreso un nuevo cliente 6', 'cajero@wokeate.com', '2020-11-16 10:41:06', '2020-11-16 10:41:06'),
(195, 'Ingreso al sistema', 'dpk65206@cuoly.com', '2020-11-16 10:55:49', '2020-11-16 10:55:49'),
(196, 'Ingreso un nuevo cliente 7', 'cajero@wokeate.com', '2020-11-16 11:58:36', '2020-11-16 11:58:36'),
(197, 'Ingreso un nuevo cliente 8', 'cajero@wokeate.com', '2020-11-16 11:58:57', '2020-11-16 11:58:57'),
(198, 'Ingreso un nuevo cliente 9', 'cajero@wokeate.com', '2020-11-16 11:59:56', '2020-11-16 11:59:56'),
(199, 'Ingreso al sistema', 'weh45606@bcaoo.com', '2020-11-17 07:54:19', '2020-11-17 07:54:19'),
(200, 'Ingreso al sistema', 'weh45606@bcaoo.com', '2020-11-17 09:17:52', '2020-11-17 09:17:52'),
(201, 'Agrego los pagos constantes fecha 11/2020', 'weh45606@bcaoo.com', '2020-11-17 09:32:38', '2020-11-17 09:32:38'),
(202, 'Ingreso al sistema', 'propietario@wokeate.com', '2020-11-17 11:29:03', '2020-11-17 11:29:03'),
(203, 'Ingreso al sistema', 'dosofware@gmail.com', '2020-11-17 12:04:21', '2020-11-17 12:04:21'),
(204, 'Ingreso al sistema', 'propietario@wokeate.com', '2020-11-17 12:30:21', '2020-11-17 12:30:21'),
(205, 'Ingreso al sistema', 'weh45606@bcaoo.com', '2020-11-17 12:30:37', '2020-11-17 12:30:37'),
(206, 'Ingreso al sistema', 'dosofware@gmail.com', '2020-11-18 00:03:26', '2020-11-18 00:03:26'),
(207, 'Ingreso un nuevo certificador', 'dosofware@gmail.com', '2020-11-18 00:04:48', '2020-11-18 00:04:48'),
(208, 'Ingreso al sistema', 'erh59639@eoopy.com', '2020-11-19 04:16:55', '2020-11-19 04:16:55'),
(209, 'Ingreso al sistema', 'propietario@wokeate.com', '2020-11-19 04:33:14', '2020-11-19 04:33:14'),
(210, 'Se cambio el estado del usario cajero@wokeate.com', 'propietario@wokeate.com', '2020-11-19 04:35:22', '2020-11-19 04:35:22'),
(211, 'Se cambio el estado del usario cajero@wokeate.com', 'propietario@wokeate.com', '2020-11-19 04:35:34', '2020-11-19 04:35:34'),
(212, 'Agrego los pagos constantes fecha 11/2020', 'propietario@wokeate.com', '2020-11-19 04:38:29', '2020-11-19 04:38:29'),
(213, 'Agrego el pago 40', 'propietario@wokeate.com', '2020-11-19 04:38:29', '2020-11-19 04:38:29'),
(214, 'Elimino el pago 40', 'propietario@wokeate.com', '2020-11-19 04:38:51', '2020-11-19 04:38:51'),
(215, 'Ingreso un nueva mesa', 'propietario@wokeate.com', '2020-11-19 04:41:12', '2020-11-19 04:41:12'),
(216, 'Ingreso al sistema', 'weh45606@bcaoo.com', '2020-11-19 04:41:58', '2020-11-19 04:41:58'),
(217, 'Ingreso al sistema', 'dpk65206@cuoly.com', '2020-11-19 04:46:28', '2020-11-19 04:46:28'),
(218, 'Ingreso al sistema', 'propietario@wokeate.com', '2020-11-21 03:42:39', '2020-11-21 03:42:39'),
(219, 'Ingreso un nuevo usuario Empleado Gerente', 'propietario@wokeate.com', '2020-11-21 03:43:54', '2020-11-21 03:43:54'),
(220, 'Ingreso al sistema', 'dosofware@gmail.com', '2020-11-21 03:46:36', '2020-11-21 03:46:36'),
(221, 'Ingreso un nuevo tipo de franquicia', 'dosofware@gmail.com', '2020-11-21 03:46:57', '2020-11-21 03:46:57'),
(222, 'Ingreso un nuevo usuario Administrador', 'dosofware@gmail.com', '2020-11-21 03:51:06', '2020-11-21 03:51:06'),
(223, 'Ingreso un nuevo usuario Propietario', 'dosofware@gmail.com', '2020-11-21 03:59:30', '2020-11-21 03:59:30'),
(224, 'Ingreso al sistema', 'brasa_lenias@propietario.com', '2020-11-21 04:04:04', '2020-11-21 04:04:04'),
(225, 'Realizo actualizacion de información de administrador', 'brasa_lenias@propietario.com', '2020-11-21 04:04:36', '2020-11-21 04:04:36'),
(226, 'Ingreso al sistema', 'propietario@wokeate.com', '2020-11-21 05:11:04', '2020-11-21 05:11:04'),
(227, 'Ingreso al sistema', 'weh45606@bcaoo.com', '2020-11-21 05:20:50', '2020-11-21 05:20:50'),
(228, 'Ingreso un nuevo cliente 11', 'weh45606@bcaoo.com', '2020-11-21 05:21:42', '2020-11-21 05:21:42'),
(229, 'Ingreso un nuevo cliente 12', 'weh45606@bcaoo.com', '2020-11-21 05:23:40', '2020-11-21 05:23:40'),
(230, 'Ingreso al sistema', 'dpk65206@cuoly.com', '2020-11-21 05:49:12', '2020-11-21 05:49:12'),
(231, 'Elimino la mesa con id: 9', 'weh45606@bcaoo.com', '2020-11-21 05:56:11', '2020-11-21 05:56:11'),
(232, 'Elimino la mesa con id: 11', 'weh45606@bcaoo.com', '2020-11-21 05:56:52', '2020-11-21 05:56:52'),
(233, 'Ingreso un nueva mesa', 'weh45606@bcaoo.com', '2020-11-21 06:01:52', '2020-11-21 06:01:52'),
(234, 'Elimino la mesa con id: 13', 'weh45606@bcaoo.com', '2020-11-21 06:01:56', '2020-11-21 06:01:56'),
(235, 'Ingreso al sistema', 'brasa_lenias@propietario.com', '2020-11-21 06:30:11', '2020-11-21 06:30:11'),
(236, 'Ingreso al sistema', 'propietarios@brasasleni.com', '2020-11-21 06:35:15', '2020-11-21 06:35:15'),
(237, 'Realizo actualizacion de información de propietario', 'propietarios@brasasleni.com', '2020-11-21 06:35:41', '2020-11-21 06:35:41'),
(238, 'Ingreso un nuevo usuario Empleado Gerente', 'propietarios@brasasleni.com', '2020-11-21 06:36:39', '2020-11-21 06:36:39'),
(239, 'Ingreso un nuevo usuario Empleado Mesero', 'propietarios@brasasleni.com', '2020-11-21 06:37:32', '2020-11-21 06:37:32'),
(240, 'Ingreso un nueva mesa', 'propietarios@brasasleni.com', '2020-11-21 06:37:50', '2020-11-21 06:37:50'),
(241, 'Ingreso un nueva mesa', 'propietarios@brasasleni.com', '2020-11-21 06:37:55', '2020-11-21 06:37:55'),
(242, 'Ingreso un nueva mesa', 'propietarios@brasasleni.com', '2020-11-21 06:38:02', '2020-11-21 06:38:02'),
(243, 'Ingreso un nueva mesa', 'propietarios@brasasleni.com', '2020-11-21 06:38:09', '2020-11-21 06:38:09'),
(244, 'Ingreso un nueva mesa', 'propietarios@brasasleni.com', '2020-11-21 06:38:46', '2020-11-21 06:38:46'),
(245, 'Ingreso al sistema', 'gerente@brasas.com', '2020-11-21 06:39:17', '2020-11-21 06:39:17'),
(246, 'Ingreso al sistema', 'mesero@brasas.com', '2020-11-21 06:40:14', '2020-11-21 06:40:14'),
(247, 'Ingreso un nuevo cliente 14', 'mesero@brasas.com', '2020-11-21 06:51:11', '2020-11-21 06:51:11'),
(248, 'Ingreso un nuevo cliente 15', 'mesero@brasas.com', '2020-11-21 06:55:14', '2020-11-21 06:55:14'),
(249, 'Ingreso un nuevo cliente 16', 'mesero@brasas.com', '2020-11-21 07:20:25', '2020-11-21 07:20:25'),
(250, 'Ingreso al sistema', 'weh45606@bcaoo.com', '2020-11-21 07:22:15', '2020-11-21 07:22:15'),
(251, 'Ingreso al sistema', 'dpk65206@cuoly.com', '2020-12-01 03:14:07', '2020-12-01 03:14:07'),
(252, 'Ingreso al sistema', 'erh59639@eoopy.com', '2020-12-01 04:40:52', '2020-12-01 04:40:52'),
(253, 'Ingreso al sistema', 'propietario@wokeate.com', '2020-12-01 05:38:41', '2020-12-01 05:38:41'),
(254, 'Ingreso un nuevo usuario Empleado Cocinero', 'propietario@wokeate.com', '2020-12-01 05:40:03', '2020-12-01 05:40:03'),
(255, 'Ingreso al sistema', 'cocinero@wokeate.com', '2020-12-01 05:41:04', '2020-12-01 05:41:04'),
(256, 'Ingreso al sistema', 'weh45606@bcaoo.com', '2020-12-03 04:06:37', '2020-12-03 04:06:37'),
(257, 'Ingreso al sistema', 'erh59639@eoopy.com', '2020-12-03 04:25:50', '2020-12-03 04:25:50'),
(258, 'Ingreso al sistema', 'weh45606@bcaoo.com', '2020-12-03 04:26:10', '2020-12-03 04:26:10'),
(259, 'Ingreso al sistema', 'dpk65206@cuoly.com', '2020-12-03 04:26:49', '2020-12-03 04:26:49'),
(260, 'Ingreso al sistema', 'cocinero@wokeate.com', '2020-12-03 06:20:44', '2020-12-03 06:20:44'),
(261, 'Se cambio el estado del usario mauricio@wokeate.com', 'weh45606@bcaoo.com', '2020-12-03 06:52:57', '2020-12-03 06:52:57'),
(262, 'Ingreso al sistema', 'weh45606@bcaoo.com', '2020-12-05 04:55:14', '2020-12-05 04:55:14'),
(263, 'Ingreso al sistema', 'mauricio@wokeate.com', '2020-12-05 05:21:37', '2020-12-05 05:21:37'),
(264, 'Ingreso al sistema', 'propietario@wokeate.com', '2020-12-06 21:12:08', '2020-12-06 21:12:08'),
(265, 'Ingreso un nuevo usuario Empleado Cajero', 'propietario@wokeate.com', '2020-12-06 21:15:37', '2020-12-06 21:15:37'),
(266, 'Ingreso un nuevo usuario Empleado Gerente', 'propietario@wokeate.com', '2020-12-06 21:25:47', '2020-12-06 21:25:47'),
(267, 'Ingreso al sistema', 'weh45606@bcaoo.com', '2020-12-06 22:00:22', '2020-12-06 22:00:22'),
(268, 'Ingreso al sistema', 'erh59639@eoopy.com', '2020-12-06 22:17:37', '2020-12-06 22:17:37'),
(269, 'Ingreso al sistema', 'dpk65206@cuoly.com', '2020-12-06 22:17:50', '2020-12-06 22:17:50'),
(270, 'Ingreso al sistema', 'dpk65206@cuoly.com', '2020-12-06 22:21:26', '2020-12-06 22:21:26'),
(271, 'Ingreso al sistema', 'weh45606@bcaoo.com', '2020-12-06 23:41:26', '2020-12-06 23:41:26'),
(272, 'Ingreso al sistema', 'weh45606@bcaoo.com', '2020-12-07 02:48:33', '2020-12-07 02:48:33'),
(273, 'Ingreso al sistema', 'dosofware@gmail.com', '2020-12-07 03:10:22', '2020-12-07 03:10:22'),
(274, 'Ingreso monto de caja 2020-12-06 21:28:10:000000', 'weh45606@bcaoo.com', '2020-12-07 03:28:10', '2020-12-07 03:28:10'),
(275, 'Ingreso monto de caja 2020-12-06 23:04:32:000000', 'weh45606@bcaoo.com', '2020-12-07 05:04:32', '2020-12-07 05:04:32'),
(276, 'Ingreso monto de caja 2020-12-06 23:30:05:000000', 'weh45606@bcaoo.com', '2020-12-07 05:30:05', '2020-12-07 05:30:05'),
(277, 'Ingreso monto de caja 2020-12-06 23:40:14:000000', 'weh45606@bcaoo.com', '2020-12-07 05:40:14', '2020-12-07 05:40:14'),
(278, 'Ingreso al sistema', 'weh45606@bcaoo.com', '2020-12-08 02:43:03', '2020-12-08 02:43:03'),
(279, 'Ingreso monto de caja 2020-12-07 20:43:14:000000', 'weh45606@bcaoo.com', '2020-12-08 02:43:14', '2020-12-08 02:43:14'),
(280, 'Agrego los pagos constantes fecha 12/2020', 'weh45606@bcaoo.com', '2020-12-08 02:44:55', '2020-12-08 02:44:55'),
(281, 'Agrego los pagos constantes fecha 12/2020', 'weh45606@bcaoo.com', '2020-12-08 02:45:31', '2020-12-08 02:45:31'),
(282, 'Agrego el pago 41', 'weh45606@bcaoo.com', '2020-12-08 02:45:32', '2020-12-08 02:45:32'),
(283, 'Agrego el pago 42', 'weh45606@bcaoo.com', '2020-12-08 02:46:19', '2020-12-08 02:46:19'),
(284, 'Agrego el pago 43', 'weh45606@bcaoo.com', '2020-12-08 02:46:45', '2020-12-08 02:46:45'),
(285, 'Agrego el pago 44', 'weh45606@bcaoo.com', '2020-12-08 02:47:07', '2020-12-08 02:47:07'),
(286, 'Ingreso al sistema', 'dpk65206@cuoly.com', '2020-12-08 02:47:50', '2020-12-08 02:47:50'),
(287, 'Ingreso al sistema', 'weh45606@bcaoo.com', '2020-12-08 04:39:02', '2020-12-08 04:39:02'),
(288, 'Ingreso al sistema', 'weh45606@bcaoo.com', '2020-12-09 02:35:55', '2020-12-09 02:35:55'),
(289, 'Ingreso monto de caja 2020-12-08 20:36:35:000000', 'weh45606@bcaoo.com', '2020-12-09 02:36:35', '2020-12-09 02:36:35'),
(290, 'Ingreso al sistema', 'dpk65206@cuoly.com', '2020-12-09 02:53:34', '2020-12-09 02:53:34'),
(291, 'Ingreso al sistema', 'mauricio@wokeate.com', '2020-12-09 03:28:59', '2020-12-09 03:28:59'),
(292, 'Ingreso al sistema', 'propietario@wokeate.com', '2020-12-10 03:33:36', '2020-12-10 03:33:36'),
(293, 'Ingreso al sistema', 'erh59639@eoopy.com', '2020-12-10 03:35:51', '2020-12-10 03:35:51'),
(294, 'Ingreso al sistema', 'weh45606@bcaoo.com', '2020-12-10 03:59:20', '2020-12-10 03:59:20'),
(295, 'Ingreso al sistema', 'weh45606@bcaoo.com', '2020-12-10 04:06:51', '2020-12-10 04:06:51'),
(296, 'Ingreso al sistema', 'cocinero@wokeate.com', '2020-12-10 04:07:57', '2020-12-10 04:07:57'),
(297, 'Ingreso al sistema', 'dpk65206@cuoly.com', '2020-12-10 04:57:06', '2020-12-10 04:57:06'),
(298, 'Ingreso al sistema', 'weh45606@bcaoo.com', '2020-12-10 05:04:38', '2020-12-10 05:04:38'),
(299, 'Ingreso monto de caja 2020-12-09 23:04:43:000000', 'weh45606@bcaoo.com', '2020-12-10 05:04:43', '2020-12-10 05:04:43'),
(300, 'Ingreso al sistema', 'weh45606@bcaoo.com', '2020-12-12 17:08:56', '2020-12-12 17:08:56'),
(301, 'Ingreso monto de caja 2020-12-12 11:09:10:000000', 'weh45606@bcaoo.com', '2020-12-12 17:09:10', '2020-12-12 17:09:10'),
(302, 'Error en frases, No pudo cargarse la plantilla de la firma, en la ruta: http://localhost/wok/public/xml/frase.xml', 'weh45606@bcaoo.com', '2020-12-12 17:55:24', '2020-12-12 17:55:24'),
(303, 'Error en frases, No pudo cargarse la plantilla de la firma, en la ruta: http://localhost/wok/public/xml/frase.xml', 'weh45606@bcaoo.com', '2020-12-12 17:55:53', '2020-12-12 17:55:53'),
(304, 'Error en frases, No pudo cargarse la plantilla de la firma, en la ruta: http://localhost/wok/public/xml/frase.xml', 'weh45606@bcaoo.com', '2020-12-12 17:56:24', '2020-12-12 17:56:24'),
(305, 'Error en frases, No pudo cargarse la plantilla de la firma, en la ruta: http://localhost/wok/public/xml/frase.xml', 'weh45606@bcaoo.com', '2020-12-12 17:57:22', '2020-12-12 17:57:22'),
(306, 'Ingreso al sistema', 'weh45606@bcaoo.com', '2020-12-12 22:46:17', '2020-12-12 22:46:17'),
(307, 'Ingreso al sistema', 'weh45606@bcaoo.com', '2020-12-13 01:12:19', '2020-12-13 01:12:19'),
(308, 'Ingreso al sistema', 'weh45606@bcaoo.com', '2020-12-13 04:28:47', '2020-12-13 04:28:47'),
(309, 'Ingreso monto de caja 2020-12-13 00:08:17:000000', 'weh45606@bcaoo.com', '2020-12-13 06:08:17', '2020-12-13 06:08:17'),
(310, 'Ingreso al sistema', 'weh45606@bcaoo.com', '2021-01-02 21:36:54', '2021-01-02 21:36:54'),
(311, 'Ingreso monto de caja 2021-01-02 15:37:11:000000', 'weh45606@bcaoo.com', '2021-01-02 21:37:11', '2021-01-02 21:37:11'),
(312, 'Ingreso al sistema', 'propietario@wokeate.com', '2021-01-02 21:48:21', '2021-01-02 21:48:21'),
(313, 'Ingreso al sistema', 'dosofware@gmail.com', '2021-01-02 21:52:55', '2021-01-02 21:52:55'),
(314, 'Ingreso un nueva frase', 'dosofware@gmail.com', '2021-01-02 22:04:33', '2021-01-02 22:04:33'),
(315, 'Actualizo la frase Frases de agente de retención del IVA', 'dosofware@gmail.com', '2021-01-02 22:05:01', '2021-01-02 22:05:01'),
(316, 'Ingreso un nueva frase', 'dosofware@gmail.com', '2021-01-02 22:05:37', '2021-01-02 22:05:37'),
(317, 'Ingreso un nueva frase', 'dosofware@gmail.com', '2021-01-02 22:05:52', '2021-01-02 22:05:52'),
(318, 'Ingreso al sistema', 'dosofware@gmail.com', '2021-01-06 13:57:09', '2021-01-06 13:57:09'),
(319, 'Ingreso al sistema', 'erh59639@eoopy.com', '2021-01-06 13:57:40', '2021-01-06 13:57:40'),
(320, 'Ingreso al sistema', 'weh45606@bcaoo.com', '2021-01-06 13:58:13', '2021-01-06 13:58:13'),
(321, 'Ingreso monto de caja 2021-01-06 07:58:21:000000', 'weh45606@bcaoo.com', '2021-01-06 13:58:21', '2021-01-06 13:58:21');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `migrations`
--

CREATE TABLE `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `migrations`
--

INSERT INTO `migrations` (`migration`, `batch`) VALUES
('2014_10_12_000000_create_users_table', 1),
('2014_10_12_100000_create_password_resets_table', 1),
('2020_09_19_205149_create_wok_certificador_table', 1),
('2020_09_19_215057_create_wok_owner_table', 1),
('2020_09_19_215103_create_wok_conf_fel_table', 1),
('2020_09_19_221530_create_wok_person_contable_table', 1),
('2020_09_19_223901_create_wok_type_foods_table', 1),
('2020_09_19_224702_create_wok_menu_table', 1),
('2020_09_19_224952_create_wok_receta_table', 1),
('2020_09_19_225320_create_wok_ingrediente_table', 1),
('2020_09_19_230056_create_wok_type_price_table', 1),
('2020_09_19_233127_create_wok_price_table', 1),
('2020_09_19_233707_create_wok_administrador_table', 1),
('2020_09_19_234001_create_wok_type_franchise_table', 1),
('2020_09_19_234245_create_wok_menu_has_type_franchise_table', 1),
('2020_09_19_235031_create_wok_administrador_has_type_franchise_table', 1),
('2020_09_20_000711_create_wok_franchise_table', 1),
('2020_09_20_001907_create_wok_restaurant_table', 1),
('2020_09_20_002406_create_wok_proveedores_table', 1),
('2020_09_20_002702_create_wok_payments_table', 1),
('2020_09_20_003400_create_wok_producto_table', 1),
('2020_09_20_003826_create_wok_stock_table', 1),
('2020_09_20_004558_create_wok_banco_table', 1),
('2020_09_20_005401_create_wok_type_employee_table', 1),
('2020_09_20_005544_create_wok_employee_table', 1),
('2020_09_20_010045_create_wok_admin_employee_table', 1),
('2020_09_20_010738_create_wok_table_table', 1),
('2020_09_20_010913_create_wok_cliente_table', 1),
('2020_09_20_011439_create_wok_locations_table', 1),
('2020_09_20_011641_create_wok_contacto_cliente_table', 1),
('2020_09_20_011816_create_wok_pedido_table', 1),
('2020_09_20_012517_create_wok_fel_type_table', 1),
('2020_09_20_012701_create_wok_frases_table', 1),
('2020_09_20_012848_create_wok_sat_posible_table', 1),
('2020_09_20_012935_create_wok_bill_table', 1),
('2020_09_20_014014_create_wok_complementos_table', 1),
('2020_09_20_015030_create_wok_details_bill_table', 1),
('2020_09_28_035043_create_logs_table', 1),
('2020_11_20_222811_alter_wok_table_table', 2),
('2020_11_20_221432_alter_wok_cliente_table', 3),
('2020_12_06_202447_create_wok_corte_caja', 4);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `lname` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `fname` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `rol` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `estado` varchar(2) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `lname`, `fname`, `rol`, `estado`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Software', 'DO', 'Admin', '1', 'dosofware@gmail.com', '$2y$10$MBo7SpVqDuDI12kCnCBjNuOMwFlT3phsQN0Xy5I2PF3RNt.bcG8MG', 'uodtoJvhlv4PYuzxUBP5jTLa5VhorXdQMGHpVMO0uYzgq0hMvaygoNWgLCzf', '0000-00-00 00:00:00', '2021-01-06 13:57:35'),
(4, 'Dubon', 'Felipe', 'Administrador', '0', 'dubonfelipe95@gmail.com', '$2y$10$MBo7SpVqDuDI12kCnCBjNuOMwFlT3phsQN0Xy5I2PF3RNt.bcG8MG', NULL, '2020-10-05 08:18:47', '2020-10-05 12:58:41'),
(7, 'GARCIA', 'carlosq', 'Administrador', '0', 'carlos@gmail.net', '$2y$10$MBo7SpVqDuDI12kCnCBjNuOMwFlT3phsQN0Xy5I2PF3RNt.bcG8MG', NULL, '2020-10-05 08:27:14', '2020-10-05 12:58:42'),
(17, 'de Supervisor', 'Prueba', 'Administrador', '1', 'erh59639@eoopy.com', '$2y$10$MBo7SpVqDuDI12kCnCBjNuOMwFlT3phsQN0Xy5I2PF3RNt.bcG8MG', 'FwvljWTBDtWPO58RDGeJOPaE9f1GWYHQki2YCm9JDbqyp8sQIfShHVy5ajDL', '2020-10-19 11:18:39', '2021-01-06 13:58:02'),
(19, 'Prueba', 'Propietario', 'Propietario', '1', 'propietario@wokeate.com', '$2y$10$MBo7SpVqDuDI12kCnCBjNuOMwFlT3phsQN0Xy5I2PF3RNt.bcG8MG', 'jNUA2Exbkc0e39sHTbe7WAGmeLzBIPkR0dFP4kAjHrC3fCbQwPS9k8KzXZgQ', '2020-10-25 10:18:12', '2020-12-10 03:33:50'),
(24, 'Mesero', 'Prueba', 'Mesero', '1', 'dpk65206@cuoly.com', '$2y$10$MBo7SpVqDuDI12kCnCBjNuOMwFlT3phsQN0Xy5I2PF3RNt.bcG8MG', '3pM0DLYFcV7zcJmGvLI5bEe8oB6fRI5H6ElWkAibGFcSgAiMKUEpJvzGEozu', '2020-07-10 14:00:04', '2020-12-09 03:19:55'),
(25, 'Gerente', 'Prueba', 'Gerente', '1', 'weh45606@bcaoo.com', '$2y$10$MBo7SpVqDuDI12kCnCBjNuOMwFlT3phsQN0Xy5I2PF3RNt.bcG8MG', '7YvzC7QhyIiBiOkCyN4UCTOVVtuKF9Cpmn1MIbsR4o7winl9ZfrXI6WbwSFD', '2020-11-01 17:46:01', '2021-01-02 21:52:50'),
(26, 'Prueba', 'Cajero', 'Cajero', '0', 'vsp79608@cuoly.com', '$2y$10$MBo7SpVqDuDI12kCnCBjNuOMwFlT3phsQN0Xy5I2PF3RNt.bcG8MG', NULL, '2020-11-01 17:49:35', '2020-11-16 06:52:47'),
(27, 'Prueba', 'Delivery', 'Delivery', '1', 'uoz13634@bcaoo.com', '$2y$10$MBo7SpVqDuDI12kCnCBjNuOMwFlT3phsQN0Xy5I2PF3RNt.bcG8MG', NULL, '2020-11-01 17:52:07', '2020-11-15 03:09:05'),
(28, 'Prueba', 'Cocinero', 'Cocinero', '1', 'noa33924@bcaoo.com', '$2y$10$MBo7SpVqDuDI12kCnCBjNuOMwFlT3phsQN0Xy5I2PF3RNt.bcG8MG', NULL, '2020-11-01 17:56:51', '2020-11-02 02:31:44'),
(32, 'Real', 'Prueba', 'Contador', '1', 'cpd37121@cuoly.com', '$2y$10$MBo7SpVqDuDI12kCnCBjNuOMwFlT3phsQN0Xy5I2PF3RNt.bcG8MG', NULL, '2020-11-02 10:49:31', '2020-11-09 02:30:00'),
(33, 'Dubon', 'Lucas', 'Contador', '1', 'aq@mgl.com', '$2y$10$MBo7SpVqDuDI12kCnCBjNuOMwFlT3phsQN0Xy5I2PF3RNt.bcG8MG', NULL, '2020-11-09 02:31:26', '2020-11-09 02:31:26'),
(34, 'Mauricio', 'Rodriguez', 'Delivery', '1', 'mauricio@wokeate.com', '$2y$10$MBo7SpVqDuDI12kCnCBjNuOMwFlT3phsQN0Xy5I2PF3RNt.bcG8MG', NULL, '2020-11-15 03:14:38', '2020-12-03 06:52:57'),
(35, 'Dubon', 'Prueba', 'Cajero', '1', 'cajero@wokeate.com', '$2y$10$MBo7SpVqDuDI12kCnCBjNuOMwFlT3phsQN0Xy5I2PF3RNt.bcG8MG', NULL, '2020-11-16 06:53:32', '2020-11-19 04:35:33'),
(37, 'Dubon', 'Julio Cesar', 'Gerente', '1', 'fel@gmais.com', '$2y$10$MBo7SpVqDuDI12kCnCBjNuOMwFlT3phsQN0Xy5I2PF3RNt.bcG8MG', NULL, '2020-11-21 03:43:53', '2020-11-21 03:43:53'),
(38, 'Lenias', 'Brasas', 'Administrador', '1', 'brasa_lenias@propietario.com', '$2y$10$MBo7SpVqDuDI12kCnCBjNuOMwFlT3phsQN0Xy5I2PF3RNt.bcG8MG', 'pjHEjTJDd5dZhRk3QLP9TWQuYGVU2jN05wUnahQTMishqhpkeCqTrGgOH8NI', '2020-11-21 03:51:05', '2020-11-21 06:34:34'),
(39, 'Brasas Lenia', 'Propietario', 'Propietario', '1', 'propietarios@brasasleni.com', '$2y$10$MBo7SpVqDuDI12kCnCBjNuOMwFlT3phsQN0Xy5I2PF3RNt.bcG8MG', 'UhzN5g73KtJpdc8utLWAZcijK1AFm8KlvnS9II47dhFKAomnaJQkSrmeOgrf', '2020-11-21 03:59:29', '2020-11-21 06:38:49'),
(40, 'Dubon', 'Julio Cesar', 'Gerente', '1', 'gerente@brasas.com', '$2y$10$MBo7SpVqDuDI12kCnCBjNuOMwFlT3phsQN0Xy5I2PF3RNt.bcG8MG', '4DMMkUtClwprz1DIjsN02kf322nEoPNQLy9hpHNlAbkDSqm5ij6yEk53HQRO', '2020-11-21 06:36:38', '2020-11-21 06:39:36'),
(41, 'Dubon', 'Lucas', 'Mesero', '1', 'mesero@brasas.com', '$2y$10$MBo7SpVqDuDI12kCnCBjNuOMwFlT3phsQN0Xy5I2PF3RNt.bcG8MG', 'tCRv36tK51zhEZCnX15h8v4aVjiNoNzRTLfMyRy0SWKkAlE5QbyeRj7NOuwT', '2020-11-21 06:37:32', '2020-11-21 07:22:07'),
(42, 'qesse', 'Julio Cesar', 'Cocinero', '1', 'cocinero@wokeate.com', '$2y$10$MBo7SpVqDuDI12kCnCBjNuOMwFlT3phsQN0Xy5I2PF3RNt.bcG8MG', 'Tzp4sSkCgczbQDmteo7nf3q7vXzN87fY9MEg7BSASdncQEs4EF5v3GW7lIJ0', '2020-12-01 05:40:03', '2020-12-10 05:04:34'),
(43, 'Dubon', 'Prueba', 'Cajero', '1', 'prueba@wokeate.com', '$2y$10$MBo7SpVqDuDI12kCnCBjNuOMwFlT3phsQN0Xy5I2PF3RNt.bcG8MG', NULL, '2020-12-06 21:15:36', '2020-12-06 21:15:36'),
(44, 'Dubon', 'Prueba', 'Gerente', '1', 'sdasd@wokeate.com', '$2y$10$MBo7SpVqDuDI12kCnCBjNuOMwFlT3phsQN0Xy5I2PF3RNt.bcG8MG', NULL, '2020-12-06 21:25:47', '2020-12-06 21:25:47');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `wok_administrador`
--

CREATE TABLE `wok_administrador` (
  `id_administrador` int(10) UNSIGNED NOT NULL,
  `primer_nombre` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `segundo_nombre` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `otros_nombres` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `primer_apellido` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `segundo_apellido` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `apallido_casada` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `documento_identificacion` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `telefono` int(11) NOT NULL,
  `telefono2` int(11) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `wok_administrador`
--

INSERT INTO `wok_administrador` (`id_administrador`, `primer_nombre`, `segundo_nombre`, `otros_nombres`, `primer_apellido`, `segundo_apellido`, `apallido_casada`, `documento_identificacion`, `email`, `telefono`, `telefono2`, `created_at`, `updated_at`) VALUES
(1, 'Felipe', NULL, NULL, 'Dubon', NULL, NULL, '000', 'dubonfelipe95@gmail.com', 0, NULL, '2020-10-05 08:16:07', '2020-10-05 08:16:07'),
(3, 'carlosq', NULL, NULL, 'GARCIA', NULL, NULL, '000', 'carlos@gmail.net', 0, NULL, '2020-10-05 08:27:15', '2020-10-05 08:27:15'),
(4, 'Juanito', NULL, NULL, 'Garcia', NULL, NULL, '000', 'uyi43020@cuoly.com', 0, NULL, '2020-10-05 12:02:04', '2020-10-05 12:02:04'),
(5, 'Prueba', 'Segundo', '', 'de Supervisor', 'Segundo', '', '1451ert2345324e', 'erh59639@eoopy.com', 41182090, 72447889, '2020-10-19 11:18:39', '2020-10-19 16:32:32'),
(6, 'Brasas', 'Eugín', '', 'Lenias', 'SA', '', '12345678', 'brasa_lenias@propietario.com', 52478960, 0, '2020-11-21 03:51:06', '2020-11-21 04:04:36');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `wok_administrador_has_type_franchise`
--

CREATE TABLE `wok_administrador_has_type_franchise` (
  `type_franquicia` int(10) UNSIGNED NOT NULL,
  `administrador` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `wok_administrador_has_type_franchise`
--

INSERT INTO `wok_administrador_has_type_franchise` (`type_franquicia`, `administrador`, `created_at`, `updated_at`) VALUES
(2, 1, '2020-10-05 08:16:08', '2020-10-05 08:16:08'),
(3, 3, '2020-10-05 08:27:15', '2020-10-05 08:27:15'),
(1, 4, '2020-10-05 12:02:04', '2020-10-05 12:02:04'),
(1, 5, '2020-10-19 11:18:40', '2020-10-19 11:18:40'),
(2, 5, '2020-10-19 12:57:06', '2020-10-19 12:57:06'),
(5, 6, '2020-11-21 03:51:06', '2020-11-21 03:51:06');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `wok_admin_employee`
--

CREATE TABLE `wok_admin_employee` (
  `id_employee` int(10) UNSIGNED NOT NULL,
  `numero_cuenta` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `monetaria_ahorro` varchar(2) COLLATE utf8_unicode_ci DEFAULT NULL,
  `monto` double(8,2) NOT NULL,
  `banco` int(10) UNSIGNED NOT NULL,
  `empleado` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `wok_admin_employee`
--

INSERT INTO `wok_admin_employee` (`id_employee`, `numero_cuenta`, `monetaria_ahorro`, `monto`, `banco`, `empleado`, `created_at`, `updated_at`) VALUES
(1, '4457599-887', 'AH', 2500.00, 2, 1, '2020-10-25 14:00:05', '2020-11-01 17:10:43'),
(2, '4457599-889', 'AH', 3000.00, 1, 2, '2020-11-01 17:46:02', '2020-11-01 17:46:02'),
(3, '4457599-890', 'MO', 2500.00, 2, 3, '2020-11-01 17:49:37', '2020-11-02 02:31:12'),
(4, '4457599-891', 'AH', 2500.25, 2, 4, '2020-11-01 17:52:07', '2020-11-01 17:52:07'),
(5, '4457599-892', 'MO', 2450.00, 2, 5, '2020-11-01 17:56:52', '2020-11-02 02:31:44'),
(6, '78524455', 'MO', 2500.00, 1, 6, '2020-11-15 03:14:39', '2020-11-15 03:21:35'),
(7, '4457599-887', 'AH', 25000.00, 1, 7, '2020-11-16 06:53:32', '2020-11-16 06:53:32'),
(8, '4457599-887', 'AH', 2500.00, 1, 8, '2020-11-21 03:43:54', '2020-11-21 03:43:54'),
(9, '4457599-889', 'AH', 2500.00, 1, 9, '2020-11-21 06:36:38', '2020-11-21 06:36:38'),
(10, '4457599-891', 'MO', 2500.00, 1, 10, '2020-11-21 06:37:32', '2020-11-21 06:37:32'),
(11, '4457599-887', 'AH', 2500.00, 1, 11, '2020-12-01 05:40:03', '2020-12-01 05:40:03'),
(12, '4457599-887', 'MO', 2500.00, 1, 12, '2020-12-06 21:15:37', '2020-12-06 21:15:37'),
(13, '4457599-891', 'AH', 2500.00, 2, 13, '2020-12-06 21:25:47', '2020-12-06 21:25:47');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `wok_banco`
--

CREATE TABLE `wok_banco` (
  `id_banco` int(10) UNSIGNED NOT NULL,
  `nombre` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `wok_banco`
--

INSERT INTO `wok_banco` (`id_banco`, `nombre`, `created_at`, `updated_at`) VALUES
(1, 'Banco de Desarrollo Rural, S.A. (BANRURAL)', '2020-10-19 14:16:42', '2020-10-19 14:23:30'),
(2, 'Banco GYT Continental, S.A.', '2020-10-19 14:21:57', '2020-10-19 14:21:57');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `wok_bill`
--

CREATE TABLE `wok_bill` (
  `id_bill` int(10) UNSIGNED NOT NULL,
  `estado_impreso` varchar(2) COLLATE utf8_unicode_ci NOT NULL,
  `numero_autorizacion` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `serie_documento` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `numero_documento` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `numero_acceso` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `fecha_hora_facturacion` datetime NOT NULL,
  `fecha_hora_certificacion` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `tipo_moneda` varchar(4) COLLATE utf8_unicode_ci NOT NULL,
  `tipo_pago` varchar(4) COLLATE utf8_unicode_ci NOT NULL,
  `fel` int(10) UNSIGNED NOT NULL,
  `pedido` int(10) UNSIGNED NOT NULL,
  `empleado` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `wok_bill`
--

INSERT INTO `wok_bill` (`id_bill`, `estado_impreso`, `numero_autorizacion`, `serie_documento`, `numero_documento`, `numero_acceso`, `fecha_hora_facturacion`, `fecha_hora_certificacion`, `tipo_moneda`, `tipo_pago`, `fel`, `pedido`, `empleado`, `created_at`, `updated_at`) VALUES
(29, 'No', '1000000000001', 'xxx', '12222', '23321321', '2020-10-28 20:00:00', '2020-10-28', 'Q', 'EF', 2, 45, 6, '2020-11-21 05:42:55', '2020-12-03 06:53:46'),
(30, 'No', '1000000000001', 'xxx', '12222', '23321321', '2020-10-28 20:00:00', '2020-10-28', 'Q', 'EF', 2, 46, 2, '2020-11-21 05:43:32', '2020-11-21 05:43:32'),
(31, 'No', '1000000000001', 'xxx', '12222', '23321321', '2020-10-28 20:00:00', '2020-10-28', 'Q', 'EF', 2, 47, 2, '2020-11-21 05:44:41', '2020-11-21 05:44:41'),
(32, 'No', '1000000000001', 'xxx', '12222', '23321321', '2020-10-28 20:00:00', '2020-10-28', 'Q', 'EF', 2, 48, 1, '2020-11-21 06:29:03', '2020-11-21 06:29:03'),
(33, 'No', '1000000000001', 'xxx', '12222', '23321321', '2020-10-28 20:00:00', '2020-10-28', 'Q', 'EF', 2, 49, 10, '2020-11-21 06:40:32', '2020-11-21 06:40:32'),
(34, 'No', '1000000000001', 'xxx', '12222', '23321321', '2020-10-28 20:00:00', '2020-10-28', 'Q', 'EF', 2, 50, 10, '2020-11-21 06:47:19', '2020-11-21 06:47:19'),
(35, 'No', '1000000000001', 'xxx', '12222', '23321321', '2020-10-28 20:00:00', '2020-10-28', 'Q', 'EF', 2, 51, 10, '2020-11-21 06:48:25', '2020-11-21 06:48:25'),
(36, 'No', '1000000000001', 'xxx', '12222', '23321321', '2020-10-28 20:00:00', '2020-10-28', 'Q', 'EF', 2, 52, 10, '2020-11-21 06:49:03', '2020-11-21 06:49:03'),
(37, 'No', '1000000000001', 'xxx', '12222', '23321321', '2020-10-28 20:00:00', '2020-10-28', 'Q', 'EF', 2, 53, 10, '2020-11-21 06:52:59', '2020-11-21 06:52:59'),
(38, 'No', '1000000000001', 'xxx', '12222', '23321321', '2020-10-28 20:00:00', '2020-10-28', 'Q', 'EF', 2, 54, 10, '2020-11-21 07:20:08', '2020-11-21 07:20:08'),
(39, 'No', '1000000000001', 'xxx', '12222', '23321321', '2020-10-28 20:00:00', '2020-10-28', 'Q', 'EF', 2, 55, 6, '2020-11-21 07:22:26', '2020-12-03 06:55:15'),
(40, 'No', '1000000000001', 'xxx', '12222', '23321321', '2020-10-28 20:00:00', '2020-10-28', 'Q', 'EF', 2, 56, 2, '2020-11-21 07:27:50', '2020-11-21 07:27:50'),
(41, 'No', '1000000000001', 'xxx', '12222', '23321321', '2020-10-28 20:00:00', '2020-10-28', 'Q', 'EF', 2, 57, 1, '2020-12-01 03:17:48', '2020-12-01 03:17:48'),
(42, 'No', '1000000000001', 'xxx', '12222', '23321321', '2020-10-28 20:00:00', '2020-10-28', 'Q', 'EF', 2, 58, 1, '2020-12-01 03:27:51', '2020-12-01 03:27:51'),
(43, 'No', '1000000000001', 'xxx', '12222', '23321321', '2020-10-28 20:00:00', '2020-10-28', 'Q', 'EF', 2, 59, 1, '2020-12-01 04:22:45', '2020-12-01 04:22:45'),
(44, 'No', '1000000000001', 'xxx', '12222', '23321321', '2020-10-28 20:00:00', '2020-10-28', 'Q', 'EF', 2, 60, 1, '2020-12-01 06:01:14', '2020-12-01 06:01:14'),
(45, 'No', '1000000000001', 'xxx', '12222', '23321321', '2020-10-28 20:00:00', '2020-10-28', 'Q', 'EF', 2, 61, 1, '2020-12-01 06:03:53', '2020-12-01 06:03:53'),
(46, 'No', '1000000000001', 'xxx', '12222', '23321321', '2020-10-28 20:00:00', '2020-10-28', 'Q', 'EF', 2, 62, 1, '2020-12-03 04:27:08', '2020-12-03 04:27:08'),
(47, 'No', '1000000000001', 'xxx', '12222', '23321321', '2020-10-28 20:00:00', '2020-10-28', 'Q', 'EF', 2, 63, 6, '2020-12-03 04:32:07', '2020-12-10 03:59:51'),
(48, 'No', '1000000000001', 'xxx', '12222', '23321321', '2020-10-28 20:00:00', '2020-10-28', 'Q', 'EF', 2, 64, 1, '2020-12-03 04:33:07', '2020-12-03 04:33:07'),
(49, 'No', '1000000000001', 'xxx', '12222', '23321321', '2020-10-28 20:00:00', '2020-10-28', 'Q', 'EF', 2, 65, 1, '2020-12-03 05:01:25', '2020-12-03 05:01:25'),
(50, 'No', '1000000000001', 'xxx', '12222', '23321321', '2020-10-28 20:00:00', '2020-10-28', 'Q', 'EF', 2, 66, 1, '2020-12-03 06:13:44', '2020-12-03 06:13:44'),
(51, 'No', '1000000000001', 'xxx', '12222', '23321321', '2020-10-28 20:00:00', '2020-10-28', 'Q', 'EF', 2, 67, 2, '2020-12-03 06:32:14', '2020-12-03 06:32:14'),
(52, 'No', '1000000000001', 'xxx', '12222', '23321321', '2020-10-28 20:00:00', '2020-10-28', 'Q', 'EF', 2, 68, 2, '2020-12-03 06:32:33', '2020-12-03 06:32:33'),
(53, 'No', '1000000000001', 'xxx', '12222', '23321321', '2020-12-06 16:00:50', '2020-10-28', 'Q', 'EF', 2, 69, 2, '2020-12-06 22:00:50', '2020-12-06 22:00:50'),
(54, 'No', '1000000000001', 'xxx', '12222', '23321321', '2020-12-06 16:04:00', '2020-10-28', 'Q', 'EF', 2, 70, 2, '2020-12-06 22:04:00', '2020-12-06 22:04:00'),
(55, 'No', '1000000000001', 'xxx', '12222', '23321321', '2020-12-06 16:07:35', '2020-10-28', 'Q', 'TJ', 2, 71, 2, '2020-12-06 22:07:35', '2020-12-06 22:08:05'),
(56, 'No', '1000000000001', 'xxx', '12222', '23321321', '2020-12-06 16:16:07', '2020-10-28', 'Q', 'EF', 2, 72, 2, '2020-12-06 22:16:07', '2020-12-06 22:16:07'),
(57, 'No', '1000000000001', 'xxx', '12222', '23321321', '2020-12-06 17:27:53', '2020-10-28', 'Q', 'EF', 2, 73, 1, '2020-12-06 23:27:53', '2020-12-06 23:27:53'),
(58, 'No', '1000000000001', 'xxx', '12222', '23321321', '2020-12-06 17:41:35', '2020-10-28', 'Q', 'EF', 2, 74, 6, '2020-12-06 23:41:35', '2020-12-10 03:59:58'),
(59, 'No', '1000000000001', 'xxx', '12222', '23321321', '2020-12-06 17:42:05', '2020-10-28', 'Q', 'EF', 2, 75, 2, '2020-12-06 23:42:05', '2020-12-06 23:42:05'),
(60, 'No', '1000000000001', 'xxx', '12222', '23321321', '2020-12-07 20:48:11', '2020-10-28', 'Q', 'EF', 2, 76, 1, '2020-12-08 02:48:11', '2020-12-08 02:48:11'),
(61, 'No', '1000000000001', 'xxx', '12222', '23321321', '2020-12-07 20:48:29', '2020-10-28', 'Q', 'EF', 2, 77, 1, '2020-12-08 02:48:29', '2020-12-08 02:48:29'),
(62, 'No', '1000000000001', 'xxx', '12222', '23321321', '2020-12-07 20:48:47', '2020-10-28', 'Q', 'EF', 2, 78, 1, '2020-12-08 02:48:47', '2020-12-08 02:48:47'),
(63, 'No', '1000000000001', 'xxx', '12222', '23321321', '2020-12-07 20:49:04', '2020-10-28', 'Q', 'EF', 2, 79, 1, '2020-12-08 02:49:04', '2020-12-08 02:49:04'),
(64, 'No', '1000000000001', 'xxx', '12222', '23321321', '2020-12-07 20:49:20', '2020-10-28', 'Q', 'EF', 2, 80, 1, '2020-12-08 02:49:20', '2020-12-08 02:49:20'),
(65, 'No', '1000000000001', 'xxx', '12222', '23321321', '2020-12-07 20:49:20', '2020-10-28', 'Q', 'EF', 2, 81, 1, '2020-12-08 02:49:20', '2020-12-08 02:49:20'),
(66, 'No', '1000000000001', 'xxx', '12222', '23321321', '2020-12-07 20:49:40', '2020-10-28', 'Q', 'EF', 2, 82, 1, '2020-12-08 02:49:40', '2020-12-08 02:49:40'),
(67, 'No', '1000000000001', 'xxx', '12222', '23321321', '2020-12-07 20:50:03', '2020-10-28', 'Q', 'EF', 2, 83, 1, '2020-12-08 02:50:03', '2020-12-08 02:50:03'),
(68, 'No', '1000000000001', 'xxx', '12222', '23321321', '2020-12-07 20:50:14', '2020-10-28', 'Q', 'TJ', 2, 84, 1, '2020-12-08 02:50:14', '2020-12-08 02:50:19'),
(69, 'No', '1000000000001', 'xxx', '12222', '23321321', '2020-12-07 20:50:27', '2020-10-28', 'Q', 'TJ', 2, 85, 1, '2020-12-08 02:50:27', '2020-12-08 02:50:33'),
(70, 'No', '1000000000001', 'xxx', '12222', '23321321', '2020-12-08 20:37:47', '2020-10-28', 'Q', 'EF', 2, 86, 2, '2020-12-09 02:37:47', '2020-12-09 02:37:47'),
(71, 'No', '1000000000001', 'xxx', '12222', '23321321', '2020-12-08 20:38:13', '2020-10-28', 'Q', 'EF', 2, 87, 2, '2020-12-09 02:38:13', '2020-12-09 02:38:13'),
(72, 'No', '1000000000001', 'xxx', '12222', '23321321', '2020-12-08 20:38:41', '2020-10-28', 'Q', 'EF', 2, 88, 2, '2020-12-09 02:38:41', '2020-12-09 02:38:41'),
(73, 'No', '1000000000001', 'xxx', '12222', '23321321', '2020-12-08 20:47:22', '2020-10-28', 'Q', 'EF', 2, 89, 2, '2020-12-09 02:47:22', '2020-12-09 02:47:22'),
(74, 'No', '1000000000001', 'xxx', '12222', '23321321', '2020-12-08 20:48:32', '2020-10-28', 'Q', 'EF', 2, 90, 2, '2020-12-09 02:48:32', '2020-12-09 02:48:32'),
(75, 'No', '1000000000001', 'xxx', '12222', '23321321', '2020-12-08 20:49:56', '2020-10-28', 'Q', 'EF', 2, 91, 2, '2020-12-09 02:49:56', '2020-12-09 02:49:56'),
(76, 'No', '1000000000001', 'xxx', '12222', '23321321', '2020-12-08 20:51:45', '2020-10-28', 'Q', 'EF', 2, 92, 2, '2020-12-09 02:51:45', '2020-12-09 02:51:45'),
(77, 'No', '1000000000001', 'xxx', '12222', '23321321', '2020-12-08 20:52:23', '2020-10-28', 'Q', 'EF', 2, 93, 2, '2020-12-09 02:52:23', '2020-12-09 02:52:23'),
(78, 'No', '1000000000001', 'xxx', '12222', '23321321', '2020-12-08 20:53:43', '2020-10-28', 'Q', 'EF', 2, 94, 1, '2020-12-09 02:53:43', '2020-12-09 02:53:43'),
(79, 'No', '1000000000001', 'xxx', '12222', '23321321', '2020-12-08 20:54:05', '2020-10-28', 'Q', 'EF', 2, 95, 1, '2020-12-09 02:54:05', '2020-12-09 02:54:05'),
(80, 'No', '1000000000001', 'xxx', '12222', '23321321', '2020-12-08 20:54:28', '2020-10-28', 'Q', 'EF', 2, 96, 2, '2020-12-09 02:54:28', '2020-12-09 02:54:28'),
(81, 'No', '1000000000001', 'xxx', '12222', '23321321', '2020-12-08 21:00:25', '2020-10-28', 'Q', 'EF', 2, 97, 2, '2020-12-09 03:00:25', '2020-12-09 03:00:25'),
(82, 'No', '1000000000001', 'xxx', '12222', '23321321', '2020-12-08 21:00:35', '2020-10-28', 'Q', 'EF', 2, 98, 2, '2020-12-09 03:00:35', '2020-12-09 03:00:35'),
(83, 'No', '1000000000001', 'xxx', '12222', '23321321', '2020-12-09 22:57:15', '2020-10-28', 'Q', 'EF', 2, 99, 1, '2020-12-10 04:57:15', '2020-12-10 04:57:15'),
(84, 'No', '1000000000001', 'xxx', '12222', '23321321', '2020-12-12 11:10:47', '2020-10-28', 'Q', 'EF', 2, 100, 2, '2020-12-12 17:10:47', '2020-12-12 17:10:47'),
(85, 'No', '1000000000001', 'xxx', '12222', '23321321', '2020-12-12 11:14:46', '2020-10-28', 'Q', 'EF', 2, 101, 2, '2020-12-12 17:14:46', '2020-12-12 17:14:46'),
(86, 'No', '1000000000001', 'xxx', '12222', '23321321', '2020-12-12 11:36:16', '2020-10-28', 'Q', 'EF', 2, 102, 2, '2020-12-12 17:36:16', '2020-12-12 17:36:16'),
(87, 'No', '1000000000001', 'xxx', '12222', '23321321', '2020-12-12 12:43:19', '2020-10-28', 'Q', 'EF', 2, 103, 2, '2020-12-12 18:43:19', '2020-12-12 18:43:19'),
(88, 'No', '1000000000001', 'xxx', '12222', '23321321', '2020-12-12 13:55:34', '2020-10-28', 'Q', 'EF', 2, 104, 2, '2020-12-12 19:55:34', '2020-12-12 19:55:34'),
(89, 'No', '1000000000001', 'xxx', '12222', '23321321', '2020-12-12 13:59:57', '2020-10-28', 'Q', 'EF', 2, 105, 2, '2020-12-12 19:59:57', '2020-12-12 19:59:57'),
(90, 'No', '1000000000001', 'xxx', '12222', '23321321', '2020-12-12 14:12:17', '2020-10-28', 'Q', 'EF', 2, 106, 2, '2020-12-12 20:12:17', '2020-12-12 20:12:17'),
(91, 'No', '1000000000001', 'xxx', '12222', '23321321', '2020-12-12 14:30:49', '2020-10-28', 'Q', 'EF', 2, 107, 2, '2020-12-12 20:30:49', '2020-12-12 20:30:49'),
(92, 'No', '1000000000001', 'xxx', '12222', '23321321', '2020-12-12 16:46:42', '2020-10-28', 'Q', 'EF', 2, 108, 2, '2020-12-12 22:46:42', '2020-12-12 22:46:42'),
(93, 'No', '1000000000001', 'xxx', '12222', '23321321', '2020-12-12 19:12:34', '2020-10-28', 'Q', 'EF', 2, 109, 2, '2020-12-13 01:12:34', '2020-12-13 01:12:34'),
(94, 'No', '1000000000001', 'xxx', '12222', '23321321', '2020-12-12 19:15:07', '2020-10-28', 'Q', 'EF', 2, 110, 2, '2020-12-13 01:15:07', '2020-12-13 01:15:07'),
(95, 'No', '1000000000001', 'xxx', '12222', '23321321', '2020-12-12 19:31:30', '2020-10-28', 'Q', 'EF', 2, 111, 2, '2020-12-13 01:31:30', '2020-12-13 01:31:30'),
(96, 'No', '1000000000001', 'xxx', '12222', '23321321', '2020-12-12 19:58:13', '2020-10-28', 'Q', 'EF', 2, 112, 2, '2020-12-13 01:58:13', '2020-12-13 01:58:13'),
(97, 'No', '1000000000001', 'xxx', '12222', '23321321', '2020-12-12 22:29:15', '2020-10-28', 'Q', 'EF', 2, 113, 2, '2020-12-13 04:29:15', '2020-12-13 04:29:15'),
(98, 'No', '1000000000001', 'xxx', '12222', '23321321', '2020-12-12 22:30:11', '2020-10-28', 'Q', 'EF', 2, 114, 2, '2020-12-13 04:30:11', '2020-12-13 04:30:11'),
(99, 'No', '1000000000001', 'xxx', '12222', '23321321', '2020-12-12 22:31:18', '2020-10-28', 'Q', 'EF', 2, 115, 2, '2020-12-13 04:31:18', '2020-12-13 04:31:18'),
(100, 'No', '1000000000001', 'xxx', '12222', '23321321', '2020-12-12 22:33:06', '2020-10-28', 'Q', 'EF', 2, 116, 2, '2020-12-13 04:33:06', '2020-12-13 04:33:06'),
(101, 'No', '1000000000001', 'xxx', '12222', '23321321', '2020-12-12 22:36:06', '2020-10-28', 'Q', 'EF', 2, 117, 2, '2020-12-13 04:36:06', '2020-12-13 04:36:06'),
(102, 'No', '1000000000001', 'xxx', '12222', '23321321', '2020-12-12 22:37:22', '2020-10-28', 'Q', 'EF', 2, 118, 2, '2020-12-13 04:37:22', '2020-12-13 04:37:22'),
(103, 'No', '1000000000001', 'xxx', '12222', '23321321', '2020-12-13 00:11:40', '2020-10-28', 'Q', 'EF', 2, 119, 2, '2020-12-13 06:11:40', '2020-12-13 06:11:40'),
(104, 'No', '1000000000001', 'xxx', '12222', '23321321', '2020-12-13 00:13:56', '2020-10-28', 'Q', 'EF', 2, 120, 2, '2020-12-13 06:13:56', '2020-12-13 06:13:56'),
(105, 'No', '1000000000001', 'xxx', '12222', '23321321', '2020-12-13 00:18:36', '2020-10-28', 'Q', 'EF', 2, 121, 2, '2020-12-13 06:18:36', '2020-12-13 06:18:36'),
(106, 'No', '1000000000001', 'xxx', '12222', '23321321', '2020-12-13 00:19:15', '2020-10-28', 'Q', 'EF', 2, 122, 2, '2020-12-13 06:19:15', '2020-12-13 06:19:15'),
(107, 'No', '1000000000001', 'xxx', '12222', '23321321', '2020-12-13 00:21:02', '2020-10-28', 'Q', 'EF', 2, 123, 2, '2020-12-13 06:21:02', '2020-12-13 06:21:02'),
(108, 'No', '1000000000001', 'xxx', '12222', '23321321', '2020-12-13 00:22:30', '2020-10-28', 'Q', 'EF', 2, 124, 2, '2020-12-13 06:22:30', '2020-12-13 06:22:30'),
(109, 'No', '1000000000001', 'xxx', '12222', '23321321', '2020-12-13 00:24:34', '2020-10-28', 'Q', 'EF', 2, 125, 2, '2020-12-13 06:24:34', '2020-12-13 06:24:34'),
(110, 'No', '1000000000001', 'xxx', '12222', '23321321', '2020-12-13 00:25:26', '2020-10-28', 'Q', 'EF', 2, 126, 2, '2020-12-13 06:25:26', '2020-12-13 06:25:26'),
(111, 'No', '1000000000001', 'xxx', '12222', '23321321', '2020-12-13 00:26:23', '2020-10-28', 'Q', 'EF', 2, 127, 2, '2020-12-13 06:26:23', '2020-12-13 06:26:23'),
(112, 'No', '1000000000001', 'xxx', '12222', '23321321', '2020-12-13 00:49:50', '2020-10-28', 'Q', 'EF', 2, 128, 2, '2020-12-13 06:49:50', '2020-12-13 06:49:50'),
(113, 'No', '1000000000001', 'xxx', '12222', '23321321', '2020-12-13 00:51:42', '2020-10-28', 'Q', 'EF', 2, 129, 2, '2020-12-13 06:51:42', '2020-12-13 06:51:42'),
(114, 'No', '1000000000001', 'xxx', '12222', '23321321', '2020-12-13 01:00:32', '2020-10-28', 'Q', 'EF', 2, 130, 2, '2020-12-13 07:00:32', '2020-12-13 07:00:32'),
(115, 'No', '1000000000001', 'xxx', '12222', '23321321', '2020-12-13 01:03:15', '2020-10-28', 'Q', 'EF', 2, 131, 2, '2020-12-13 07:03:15', '2020-12-13 07:03:15'),
(116, 'No', '1000000000001', 'xxx', '12222', '23321321', '2020-12-13 01:31:46', '2020-10-28', 'Q', 'EF', 2, 132, 2, '2020-12-13 07:31:46', '2020-12-13 07:31:46'),
(117, 'No', '1000000000001', 'xxx', '12222', '23321321', '2021-01-02 15:37:39', '2020-10-28', 'Q', 'EF', 2, 133, 2, '2021-01-02 21:37:39', '2021-01-02 21:37:39'),
(118, 'No', '1000000000001', 'xxx', '12222', '23321321', '2021-01-06 07:58:38', '2020-10-28', 'Q', 'EF', 2, 134, 2, '2021-01-06 13:58:38', '2021-01-06 13:58:38');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `wok_certificador`
--

CREATE TABLE `wok_certificador` (
  `id_certificador` int(10) UNSIGNED NOT NULL,
  `descripcion` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `nombre` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `nit` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `wok_certificador`
--

INSERT INTO `wok_certificador` (`id_certificador`, `descripcion`, `nombre`, `nit`, `created_at`, `updated_at`) VALUES
(3, 'Certificador de Documentos Tributarios Electrónicos (DTE)', 'Infile', '123456-8', '2020-10-03 15:15:37', '2020-10-04 16:57:34'),
(4, 'Certificador ', 'GuateFacturas', '123456-7', '2020-10-03 15:16:14', '2020-10-03 16:30:55'),
(5, 'ee', 'INFILE GUATEMALA', '874557', '2020-11-18 00:04:48', '2020-11-18 00:04:48');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `wok_cliente`
--

CREATE TABLE `wok_cliente` (
  `id_cliente` int(10) UNSIGNED NOT NULL,
  `nombre` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `nit_cliente` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `correo` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `dpi` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `restaurante` int(10) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `wok_cliente`
--

INSERT INTO `wok_cliente` (`id_cliente`, `nombre`, `nit_cliente`, `correo`, `dpi`, `created_at`, `updated_at`, `restaurante`) VALUES
(1, 'C/F', 'C/F', NULL, NULL, '2020-11-21 05:22:40', '2020-11-21 05:22:40', NULL),
(11, 'Mauricio Guitierrez', '788999-5', '', '', '2020-11-21 05:21:41', '2020-11-21 05:21:41', 1),
(12, 'David Duconit', '458856-4', '', '', '2020-11-21 05:23:39', '2020-11-21 05:23:39', 1),
(13, 'Desde pago', 'C.F', 'N/A', 'N/A', '2020-11-21 05:45:41', '2020-11-21 05:45:41', 1),
(14, 'Mauricio Guitierrez', '458856-4', 'dubonfelipe95@gmail.com', '', '2020-11-21 06:51:11', '2020-11-21 06:51:11', 9),
(15, 'Mauricio Guitierrez', '788999-5', 'dubonfelipe95@gmail.com', '', '2020-11-21 06:55:13', '2020-11-21 06:55:13', 9),
(16, 'Enrich', '458856-4', '', '', '2020-11-21 07:20:25', '2020-11-21 07:20:25', 9),
(17, 'Pagado Campo', '78542266', 'DD', 'N/A', '2020-12-03 04:44:17', '2020-12-03 04:44:17', 1),
(18, 'nombre', '785211', '', NULL, '2020-12-03 05:05:08', '2020-12-03 05:05:08', 1),
(19, 'Mauricio Guitierrez', '788999-5', '', NULL, '2020-12-06 23:24:36', '2020-12-06 23:24:36', 1),
(20, '', '', '', NULL, '2020-12-09 03:00:04', '2020-12-09 03:00:04', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `wok_complemento`
--

CREATE TABLE `wok_complemento` (
  `id_complemento` int(10) UNSIGNED NOT NULL,
  `descripcion` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `bill` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `wok_conf_fel`
--

CREATE TABLE `wok_conf_fel` (
  `id_conf_fel` int(10) UNSIGNED NOT NULL,
  `llave_electronica` blob NOT NULL,
  `usuario_cert` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `token_autorizacion` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `nombre_contribuyente` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `nit` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `owner` int(10) UNSIGNED NOT NULL,
  `certificador` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `wok_contacto`
--

CREATE TABLE `wok_contacto` (
  `id_contacto` int(10) UNSIGNED NOT NULL,
  `telefono` int(11) NOT NULL,
  `cliente` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `wok_contacto`
--

INSERT INTO `wok_contacto` (`id_contacto`, `telefono`, `cliente`, `created_at`, `updated_at`) VALUES
(9, 74602541, 11, '2020-11-21 05:21:41', '2020-11-21 05:21:41'),
(10, 50024796, 12, '2020-11-21 05:23:39', '2020-11-21 05:23:39'),
(11, 74602541, 14, '2020-11-21 06:51:11', '2020-11-21 06:51:11'),
(12, 74602541, 16, '2020-11-21 07:20:25', '2020-11-21 07:20:25');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `wok_corte_caja`
--

CREATE TABLE `wok_corte_caja` (
  `id_corte` int(10) UNSIGNED NOT NULL,
  `ef_caja` double(12,2) NOT NULL,
  `cierre_ef` double(12,2) UNSIGNED DEFAULT NULL,
  `cierre_tj` double(12,2) UNSIGNED DEFAULT NULL,
  `fecha_cierre` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `usr` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `restaurante` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `wok_corte_caja`
--

INSERT INTO `wok_corte_caja` (`id_corte`, `ef_caja`, `cierre_ef`, `cierre_tj`, `fecha_cierre`, `usr`, `restaurante`, `created_at`, `updated_at`) VALUES
(5, 4500.00, 5000.00, 208.00, '2020-12-06 23:40:19:000000', 'Gerente Prueba', 1, '2020-12-07 05:40:14', '2020-12-07 05:40:19'),
(6, 4500.00, 2753.00, 135.00, '2020-12-07 20:50:44:000000', 'Gerente Prueba', 1, '2020-12-08 02:43:13', '2020-12-08 02:50:44'),
(7, 2450.00, NULL, NULL, NULL, NULL, 1, '2020-12-09 02:36:34', '2020-12-09 02:36:34'),
(8, 2500.00, 2550.00, 0.00, NULL, 'Gerente Prueba', 1, '2020-12-10 05:04:43', '2020-12-10 05:10:40'),
(9, 5000.00, NULL, NULL, NULL, NULL, 1, '2020-12-12 17:09:10', '2020-12-12 17:09:10'),
(10, 2520.00, NULL, NULL, NULL, NULL, 1, '2020-12-13 06:08:17', '2020-12-13 06:08:17'),
(11, 5000.00, NULL, NULL, NULL, NULL, 1, '2021-01-02 21:37:11', '2021-01-02 21:37:11'),
(12, 5000.00, NULL, NULL, NULL, NULL, 1, '2021-01-06 13:58:20', '2021-01-06 13:58:20');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `wok_details_bill`
--

CREATE TABLE `wok_details_bill` (
  `id_details_bill` int(10) UNSIGNED NOT NULL,
  `descripcion` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `cantidad` int(11) NOT NULL,
  `precio_unitario` double(8,2) NOT NULL,
  `estado` varchar(2) COLLATE utf8_unicode_ci NOT NULL,
  `idmenu` int(10) UNSIGNED NOT NULL,
  `descuento` double(8,2) NOT NULL,
  `impuesto_valor_agregado` double(8,2) NOT NULL,
  `bill` int(10) UNSIGNED NOT NULL,
  `empleado` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `wok_details_bill`
--

INSERT INTO `wok_details_bill` (`id_details_bill`, `descripcion`, `cantidad`, `precio_unitario`, `estado`, `idmenu`, `descuento`, `impuesto_valor_agregado`, `bill`, `empleado`, `created_at`, `updated_at`) VALUES
(58, 'Sandwich de Lomo salteado', 4, 25.00, '3', 17, 0.00, 0.00, 29, 11, '2020-11-21 05:42:55', '2020-12-01 06:02:47'),
(59, 'Lomo salteado', 2, 52.00, '3', 5, 0.00, 0.00, 30, 11, '2020-11-21 05:43:32', '2020-12-01 06:02:21'),
(60, 'Arroz Chaufa Pollo', 2, 45.00, '3', 6, 0.00, 0.00, 30, 11, '2020-11-21 05:43:33', '2020-12-01 06:02:23'),
(61, 'Coca-cola', 2, 10.00, '3', 20, 0.00, 0.00, 31, 11, '2020-11-21 05:44:41', '2020-12-01 06:02:25'),
(62, 'Sandwich de Lomo salteado', 2, 25.00, '3', 17, 0.00, 0.00, 32, 11, '2020-11-21 06:29:03', '2020-12-01 06:02:32'),
(63, 'Lomo salteado', 2, 52.00, '3', 5, 0.00, 0.00, 32, 11, '2020-11-21 06:29:03', '2020-12-01 06:02:28'),
(64, 'Pastel', 1, 15.00, '3', 19, 0.00, 0.00, 32, 11, '2020-11-21 06:29:03', '2020-12-01 05:59:50'),
(65, 'Limonada con hierba buena', 2, 25.00, '3', 18, 0.00, 0.00, 32, 11, '2020-11-21 06:29:04', '2020-12-01 06:02:35'),
(66, 'Pollo Azado entero', 2, 80.00, '0', 22, 0.00, 0.00, 33, 10, '2020-11-21 06:40:32', '2020-11-21 06:40:32'),
(67, 'Pollo Azado entero', 3, 80.00, '1', 22, 0.00, 0.00, 34, 10, '2020-11-21 06:47:19', '2020-11-21 06:47:33'),
(68, 'Costillas en barcaoa', 3, 70.00, '1', 23, 0.00, 0.00, 35, 10, '2020-11-21 06:48:26', '2020-11-21 06:48:37'),
(69, 'Pollo Azado entero', 3, 80.00, '0', 22, 0.00, 0.00, 35, 10, '2020-11-21 06:48:26', '2020-11-21 06:48:26'),
(70, 'Pollo Azado entero', 2, 80.00, '0', 22, 0.00, 0.00, 36, 10, '2020-11-21 06:49:03', '2020-11-21 06:49:03'),
(71, 'Costillas en barcaoa', 2, 70.00, '0', 23, 0.00, 0.00, 36, 10, '2020-11-21 06:49:03', '2020-11-21 06:49:03'),
(72, 'Costillas en barcaoa', 1, 70.00, '0', 23, 0.00, 0.00, 37, 10, '2020-11-21 06:52:59', '2020-11-21 06:52:59'),
(73, 'Pollo Azado entero', 1, 80.00, '1', 22, 0.00, 0.00, 38, 10, '2020-11-21 07:20:08', '2020-11-21 07:20:30'),
(74, 'Sandwich de Lomo salteado', 4, 25.00, '3', 17, 0.00, 0.00, 39, 11, '2020-11-21 07:22:27', '2020-12-01 06:02:53'),
(75, 'Pastel', 2, 15.00, '3', 19, 0.00, 0.00, 39, 11, '2020-11-21 07:22:27', '2020-12-01 06:02:37'),
(76, 'Sandwich de Lomo salteado', 2, 25.00, '3', 17, 0.00, 0.00, 40, 11, '2020-11-21 07:27:51', '2020-12-01 06:02:39'),
(77, 'Sandwich de Lomo salteado', 2, 25.00, '3', 17, 0.00, 0.00, 41, 11, '2020-12-01 03:17:49', '2020-12-01 06:02:41'),
(78, 'Coca-cola', 2, 10.00, '3', 20, 0.00, 0.00, 41, 11, '2020-12-01 03:17:50', '2020-12-01 06:02:43'),
(79, 'Pastel', 5, 15.00, '3', 19, 0.00, 0.00, 42, 11, '2020-12-01 03:27:51', '2020-12-01 06:01:02'),
(80, 'Sandwich de Lomo salteado', 2, 25.00, '3', 17, 0.00, 0.00, 43, 11, '2020-12-01 04:22:45', '2020-12-01 06:02:44'),
(81, 'Sandwich de Lomo salteado', 2, 25.00, '1', 17, 0.00, 0.00, 44, 11, '2020-12-01 06:01:14', '2020-12-01 06:22:06'),
(82, 'Lomo salteado', 4, 52.00, '1', 5, 0.00, 0.00, 44, 11, '2020-12-01 06:01:41', '2020-12-01 06:23:19'),
(83, 'Arroz Chaufa Pollo', 4, 45.00, '1', 6, 0.00, 0.00, 44, 11, '2020-12-01 06:01:42', '2020-12-01 06:23:12'),
(84, 'Limonada con hierba buena', 2, 25.00, '1', 18, 0.00, 0.00, 44, 11, '2020-12-01 06:03:45', '2020-12-01 06:23:11'),
(85, 'Coca-cola', 3, 10.00, '1', 20, 0.00, 0.00, 44, 11, '2020-12-01 06:03:45', '2020-12-01 06:23:09'),
(86, 'Sandwich de Lomo salteado', 2, 25.00, '1', 17, 0.00, 0.00, 45, 11, '2020-12-01 06:03:53', '2020-12-03 04:33:19'),
(87, 'Pastel', 2, 15.00, '3', 19, 0.00, 0.00, 32, 11, '2020-12-01 06:07:44', '2020-12-01 06:09:58'),
(88, 'Sandwich de Lomo salteado', 2, 25.00, '3', 17, 0.00, 0.00, 46, 11, '2020-12-03 04:27:08', '2020-12-10 04:08:26'),
(89, 'Coca-cola', 2, 10.00, '3', 20, 0.00, 0.00, 46, 11, '2020-12-03 04:27:08', '2020-12-03 06:22:08'),
(90, 'Sandwich de Lomo salteado', 4, 25.00, '0', 17, 0.00, 0.00, 47, 2, '2020-12-03 04:32:07', '2020-12-03 04:32:07'),
(91, 'Coca-cola', 3, 10.00, '3', 20, 0.00, 0.00, 47, 11, '2020-12-03 04:32:07', '2020-12-03 06:22:14'),
(92, 'Limonada con hierba buena', 1, 25.00, '0', 18, 0.00, 0.00, 48, 1, '2020-12-03 04:33:07', '2020-12-03 04:33:07'),
(93, 'Coca-cola', 1, 10.00, '3', 20, 0.00, 0.00, 48, 11, '2020-12-03 04:33:07', '2020-12-03 06:22:12'),
(94, 'Sandwich de Lomo salteado', 3, 25.00, '0', 17, 0.00, 0.00, 49, 1, '2020-12-03 05:01:25', '2020-12-03 05:01:25'),
(95, 'Lomo salteado', 3, 52.00, '0', 5, 0.00, 0.00, 49, 1, '2020-12-03 05:01:25', '2020-12-03 05:01:25'),
(96, 'Arroz Chaufa Pollo', 2, 45.00, '0', 6, 0.00, 0.00, 49, 1, '2020-12-03 05:01:25', '2020-12-03 05:01:25'),
(97, 'Coca-cola', 2, 10.00, '3', 20, 0.00, 0.00, 49, 11, '2020-12-03 05:01:25', '2020-12-03 06:21:52'),
(98, 'Sandwich de Lomo salteado', 1, 25.00, '0', 17, 0.00, 0.00, 50, 1, '2020-12-03 06:13:44', '2020-12-03 06:13:44'),
(99, 'Sandwich de Lomo salteado', 1, 25.00, '0', 17, 0.00, 0.00, 51, 2, '2020-12-03 06:32:15', '2020-12-03 06:32:15'),
(100, 'Sandwich de Lomo salteado', 3, 25.00, '0', 17, 0.00, 0.00, 52, 2, '2020-12-03 06:32:33', '2020-12-03 06:32:33'),
(101, 'Sandwich de Lomo salteado', 3, 25.00, '0', 17, 0.00, 0.00, 53, 2, '2020-12-06 22:00:50', '2020-12-06 22:00:50'),
(102, 'Sandwich de Lomo salteado', 3, 25.00, '0', 17, 0.00, 0.00, 54, 2, '2020-12-06 22:04:00', '2020-12-06 22:04:00'),
(103, 'Lomo salteado', 4, 52.00, '0', 5, 0.00, 0.00, 55, 2, '2020-12-06 22:07:35', '2020-12-06 22:07:35'),
(104, 'Sandwich de Lomo salteado', 4, 25.00, '0', 17, 0.00, 0.00, 56, 2, '2020-12-06 22:16:07', '2020-12-06 22:16:07'),
(105, 'Sandwich de Lomo salteado', 4, 25.00, '0', 17, 0.00, 0.00, 57, 1, '2020-12-06 23:27:53', '2020-12-06 23:27:53'),
(106, 'Sandwich de Lomo salteado', 3, 25.00, '0', 17, 0.00, 0.00, 58, 2, '2020-12-06 23:41:36', '2020-12-06 23:41:36'),
(107, 'Sandwich de Lomo salteado', 3, 25.00, '0', 17, 0.00, 0.00, 59, 2, '2020-12-06 23:42:05', '2020-12-06 23:42:05'),
(108, 'Sandwich de Lomo salteado', 3, 25.00, '0', 17, 0.00, 0.00, 60, 1, '2020-12-08 02:48:12', '2020-12-08 02:48:12'),
(109, 'Pastel', 3, 15.00, '0', 19, 0.00, 0.00, 60, 1, '2020-12-08 02:48:12', '2020-12-08 02:48:12'),
(110, 'Coca-cola', 3, 10.00, '0', 20, 0.00, 0.00, 60, 1, '2020-12-08 02:48:12', '2020-12-08 02:48:12'),
(111, 'Limonada con hierba buena', 2, 25.00, '0', 18, 0.00, 0.00, 60, 1, '2020-12-08 02:48:12', '2020-12-08 02:48:12'),
(112, 'Sandwich de Lomo salteado', 2, 25.00, '0', 17, 0.00, 0.00, 61, 1, '2020-12-08 02:48:29', '2020-12-08 02:48:29'),
(113, 'Arroz Chaufa Pollo', 2, 45.00, '0', 6, 0.00, 0.00, 61, 1, '2020-12-08 02:48:29', '2020-12-08 02:48:29'),
(114, 'Pastel', 2, 15.00, '0', 19, 0.00, 0.00, 62, 1, '2020-12-08 02:48:47', '2020-12-08 02:48:47'),
(115, 'Arroz Chaufa Pollo', 3, 45.00, '0', 6, 0.00, 0.00, 62, 1, '2020-12-08 02:48:47', '2020-12-08 02:48:47'),
(116, 'Sandwich de Lomo salteado', 3, 25.00, '0', 17, 0.00, 0.00, 63, 1, '2020-12-08 02:49:04', '2020-12-08 02:49:04'),
(117, 'Lomo salteado', 3, 52.00, '0', 5, 0.00, 0.00, 63, 1, '2020-12-08 02:49:04', '2020-12-08 02:49:04'),
(118, 'Limonada con hierba buena', 3, 25.00, '0', 18, 0.00, 0.00, 63, 1, '2020-12-08 02:49:04', '2020-12-08 02:49:04'),
(119, 'Sandwich de Lomo salteado', 1, 25.00, '0', 17, 0.00, 0.00, 64, 1, '2020-12-08 02:49:20', '2020-12-08 02:49:20'),
(120, 'Sandwich de Lomo salteado', 1, 25.00, '0', 17, 0.00, 0.00, 65, 1, '2020-12-08 02:49:20', '2020-12-08 02:49:20'),
(121, 'Sandwich de Lomo salteado', 1, 25.00, '0', 17, 0.00, 0.00, 66, 1, '2020-12-08 02:49:40', '2020-12-08 02:49:40'),
(122, 'Lomo salteado', 4, 52.00, '0', 5, 0.00, 0.00, 67, 1, '2020-12-08 02:50:03', '2020-12-08 02:50:03'),
(123, 'Arroz Chaufa Pollo', 4, 45.00, '0', 6, 0.00, 0.00, 67, 1, '2020-12-08 02:50:03', '2020-12-08 02:50:03'),
(124, 'Coca-cola', 8, 10.00, '0', 20, 0.00, 0.00, 67, 1, '2020-12-08 02:50:03', '2020-12-08 02:50:03'),
(125, 'Limonada con hierba buena', 3, 25.00, '0', 18, 0.00, 0.00, 68, 1, '2020-12-08 02:50:15', '2020-12-08 02:50:15'),
(126, 'Pastel', 4, 15.00, '0', 19, 0.00, 0.00, 69, 1, '2020-12-08 02:50:27', '2020-12-08 02:50:27'),
(127, 'Sandwich de Lomo salteado', 2, 25.00, '0', 17, 0.00, 0.00, 70, 2, '2020-12-09 02:37:47', '2020-12-09 02:37:47'),
(128, 'Sandwich de Lomo salteado', 3, 25.00, '0', 17, 0.00, 0.00, 71, 2, '2020-12-09 02:38:13', '2020-12-09 02:38:13'),
(129, 'Sandwich de Lomo salteado', 3, 25.00, '0', 17, 0.00, 0.00, 72, 2, '2020-12-09 02:38:42', '2020-12-09 02:38:42'),
(130, 'Lomo salteado', 2, 52.00, '0', 5, 0.00, 0.00, 72, 2, '2020-12-09 02:38:42', '2020-12-09 02:38:42'),
(131, 'Sandwich de Lomo salteado', 3, 25.00, '0', 17, 0.00, 0.00, 73, 2, '2020-12-09 02:47:22', '2020-12-09 02:47:22'),
(132, 'Sandwich de Lomo salteado', 2, 25.00, '0', 17, 0.00, 0.00, 74, 2, '2020-12-09 02:48:33', '2020-12-09 02:48:33'),
(133, 'Sandwich de Lomo salteado', 3, 25.00, '0', 17, 0.00, 0.00, 75, 2, '2020-12-09 02:49:57', '2020-12-09 02:49:57'),
(134, 'Sandwich de Lomo salteado', 2, 25.00, '0', 17, 0.00, 0.00, 76, 2, '2020-12-09 02:51:45', '2020-12-09 02:51:45'),
(135, 'Sandwich de Lomo salteado', 2, 25.00, '0', 17, 0.00, 0.00, 77, 2, '2020-12-09 02:52:23', '2020-12-09 02:52:23'),
(136, 'Sandwich de Lomo salteado', 2, 25.00, '0', 17, 0.00, 0.00, 78, 1, '2020-12-09 02:53:43', '2020-12-09 02:53:43'),
(137, 'Sandwich de Lomo salteado', 2, 25.00, '0', 17, 0.00, 0.00, 79, 1, '2020-12-09 02:54:05', '2020-12-09 02:54:05'),
(138, 'Sandwich de Lomo salteado', 3, 25.00, '0', 17, 0.00, 0.00, 80, 2, '2020-12-09 02:54:29', '2020-12-09 02:54:29'),
(139, 'Sandwich de Lomo salteado', 2, 25.00, '0', 17, 0.00, 0.00, 81, 2, '2020-12-09 03:00:25', '2020-12-09 03:00:25'),
(140, 'Arroz Chaufa Pollo', 4, 45.00, '0', 6, 0.00, 0.00, 82, 2, '2020-12-09 03:00:36', '2020-12-09 03:00:36'),
(141, 'Sandwich de Lomo salteado', 2, 25.00, '0', 17, 0.00, 0.00, 83, 1, '2020-12-10 04:57:15', '2020-12-10 04:57:15'),
(142, 'Sandwich de Lomo salteado', 2, 25.00, '0', 17, 0.00, 0.00, 84, 2, '2020-12-12 17:10:47', '2020-12-12 17:10:47'),
(143, 'Sandwich de Lomo salteado', 3, 25.00, '0', 17, 0.00, 0.00, 85, 2, '2020-12-12 17:14:46', '2020-12-12 17:14:46'),
(144, 'Sandwich de Lomo salteado', 2, 25.00, '0', 17, 0.00, 0.00, 86, 2, '2020-12-12 17:36:16', '2020-12-12 17:36:16'),
(145, 'Sandwich de Lomo salteado', 3, 25.00, '0', 17, 0.00, 0.00, 87, 2, '2020-12-12 18:43:19', '2020-12-12 18:43:19'),
(146, 'Lomo salteado', 3, 52.00, '0', 5, 0.00, 0.00, 87, 2, '2020-12-12 18:43:19', '2020-12-12 18:43:19'),
(147, 'Arroz Chaufa Pollo', 1, 45.00, '0', 6, 0.00, 0.00, 87, 2, '2020-12-12 18:43:19', '2020-12-12 18:43:19'),
(148, 'Pastel', 2, 15.00, '0', 19, 0.00, 0.00, 87, 2, '2020-12-12 18:43:19', '2020-12-12 18:43:19'),
(149, 'Limonada con hierba buena', 1, 25.00, '0', 18, 0.00, 0.00, 87, 2, '2020-12-12 18:43:19', '2020-12-12 18:43:19'),
(150, 'Coca-cola', 2, 10.00, '0', 20, 0.00, 0.00, 87, 2, '2020-12-12 18:43:19', '2020-12-12 18:43:19'),
(151, 'Sandwich de Lomo salteado', 3, 25.00, '0', 17, 0.00, 0.00, 88, 2, '2020-12-12 19:55:34', '2020-12-12 19:55:34'),
(152, 'Lomo salteado', 1, 52.00, '0', 5, 0.00, 0.00, 88, 2, '2020-12-12 19:55:34', '2020-12-12 19:55:34'),
(153, 'Arroz Chaufa Pollo', 4, 45.00, '0', 6, 0.00, 0.00, 88, 2, '2020-12-12 19:55:35', '2020-12-12 19:55:35'),
(154, 'Pastel', 2, 15.00, '0', 19, 0.00, 0.00, 88, 2, '2020-12-12 19:55:35', '2020-12-12 19:55:35'),
(155, 'Limonada con hierba buena', 3, 25.00, '0', 18, 0.00, 0.00, 88, 2, '2020-12-12 19:55:35', '2020-12-12 19:55:35'),
(156, 'Coca-cola', 1, 10.00, '0', 20, 0.00, 0.00, 88, 2, '2020-12-12 19:55:35', '2020-12-12 19:55:35'),
(157, 'Sandwich de Lomo salteado', 3, 25.00, '0', 17, 0.00, 0.00, 89, 2, '2020-12-12 19:59:57', '2020-12-12 19:59:57'),
(158, 'Lomo salteado', 1, 52.00, '0', 5, 0.00, 0.00, 89, 2, '2020-12-12 19:59:57', '2020-12-12 19:59:57'),
(159, 'Arroz Chaufa Pollo', 3, 45.00, '0', 6, 0.00, 0.00, 89, 2, '2020-12-12 19:59:57', '2020-12-12 19:59:57'),
(160, 'Pastel', 2, 15.00, '0', 19, 0.00, 0.00, 89, 2, '2020-12-12 19:59:57', '2020-12-12 19:59:57'),
(161, 'Limonada con hierba buena', 1, 25.00, '0', 18, 0.00, 0.00, 89, 2, '2020-12-12 19:59:57', '2020-12-12 19:59:57'),
(162, 'Coca-cola', 2, 10.00, '0', 20, 0.00, 0.00, 89, 2, '2020-12-12 19:59:57', '2020-12-12 19:59:57'),
(163, 'Sandwich de Lomo salteado', 4, 25.00, '0', 17, 0.00, 0.00, 90, 2, '2020-12-12 20:12:17', '2020-12-12 20:12:17'),
(164, 'Lomo salteado', 17, 52.00, '0', 5, 0.00, 0.00, 90, 2, '2020-12-12 20:12:17', '2020-12-12 20:12:17'),
(165, 'Arroz Chaufa Pollo', 13, 45.00, '0', 6, 0.00, 0.00, 90, 2, '2020-12-12 20:12:17', '2020-12-12 20:12:17'),
(166, 'Pastel', 10, 15.00, '0', 19, 0.00, 0.00, 90, 2, '2020-12-12 20:12:18', '2020-12-12 20:12:18'),
(167, 'Limonada con hierba buena', 4, 25.00, '0', 18, 0.00, 0.00, 90, 2, '2020-12-12 20:12:18', '2020-12-12 20:12:18'),
(168, 'Coca-cola', 5, 10.00, '0', 20, 0.00, 0.00, 90, 2, '2020-12-12 20:12:18', '2020-12-12 20:12:18'),
(169, 'Sandwich de Lomo salteado', 2, 25.00, '0', 17, 0.00, 6.00, 91, 2, '2020-12-12 20:30:49', '2020-12-12 20:43:45'),
(170, 'Lomo salteado', 4, 52.00, '0', 5, 0.00, 24.96, 91, 2, '2020-12-12 20:30:49', '2020-12-12 20:43:46'),
(171, 'Arroz Chaufa Pollo', 4, 45.00, '0', 6, 0.00, 21.60, 91, 2, '2020-12-12 20:30:49', '2020-12-12 20:43:47'),
(172, 'Coca-cola', 4, 10.00, '0', 20, 0.00, 4.80, 91, 2, '2020-12-12 20:30:49', '2020-12-12 20:43:48'),
(173, 'Sandwich de Lomo salteado', 3, 25.00, '0', 17, 0.00, 0.00, 92, 2, '2020-12-12 22:46:43', '2020-12-12 22:46:43'),
(174, 'Pastel', 3, 15.00, '0', 19, 0.00, 0.00, 92, 2, '2020-12-12 22:46:43', '2020-12-12 22:46:43'),
(175, 'Lomo salteado', 3, 52.00, '0', 5, 0.00, 0.00, 92, 2, '2020-12-12 22:46:43', '2020-12-12 22:46:43'),
(176, 'Sandwich de Lomo salteado', 3, 25.00, '0', 17, 0.00, 0.00, 93, 2, '2020-12-13 01:12:34', '2020-12-13 01:12:34'),
(177, 'Pastel', 3, 15.00, '0', 19, 0.00, 0.00, 93, 2, '2020-12-13 01:12:35', '2020-12-13 01:12:35'),
(178, 'Limonada con hierba buena', 3, 25.00, '0', 18, 0.00, 0.00, 93, 2, '2020-12-13 01:12:35', '2020-12-13 01:12:35'),
(179, 'Sandwich de Lomo salteado', 4, 25.00, '0', 17, 0.00, 12.00, 94, 2, '2020-12-13 01:15:07', '2020-12-13 01:15:15'),
(180, 'Coca-cola', 2, 10.00, '0', 20, 0.00, 2.40, 94, 2, '2020-12-13 01:15:07', '2020-12-13 01:15:16'),
(181, 'Limonada con hierba buena', 2, 25.00, '0', 18, 0.00, 6.00, 94, 2, '2020-12-13 01:15:08', '2020-12-13 01:15:16'),
(182, 'Sandwich de Lomo salteado', 3, 25.00, '0', 17, 0.00, 9.00, 95, 2, '2020-12-13 01:31:30', '2020-12-13 01:31:38'),
(183, 'Pastel', 2, 15.00, '0', 19, 0.00, 3.60, 95, 2, '2020-12-13 01:31:30', '2020-12-13 01:31:38'),
(184, 'Limonada con hierba buena', 3, 25.00, '0', 18, 0.00, 9.00, 95, 2, '2020-12-13 01:31:30', '2020-12-13 01:31:38'),
(185, 'Sandwich de Lomo salteado', 3, 25.00, '0', 17, 0.00, 9.00, 96, 2, '2020-12-13 01:58:14', '2020-12-13 01:58:31'),
(186, 'Pastel', 1, 15.00, '0', 19, 0.00, 1.80, 96, 2, '2020-12-13 01:58:14', '2020-12-13 01:58:31'),
(187, 'Sandwich de Lomo salteado', 3, 25.00, '0', 17, 0.00, 9.00, 97, 2, '2020-12-13 04:29:15', '2020-12-13 04:29:25'),
(188, 'Sandwich de Lomo salteado', 2, 25.00, '0', 17, 0.00, 6.00, 98, 2, '2020-12-13 04:30:12', '2020-12-13 04:30:18'),
(189, 'Sandwich de Lomo salteado', 2, 25.00, '0', 17, 0.00, 6.00, 99, 2, '2020-12-13 04:31:18', '2020-12-13 04:31:25'),
(190, 'Sandwich de Lomo salteado', 2, 25.00, '0', 17, 0.00, 6.00, 100, 2, '2020-12-13 04:33:06', '2020-12-13 04:33:19'),
(191, 'Sandwich de Lomo salteado', 2, 25.00, '0', 17, 0.00, 6.00, 101, 2, '2020-12-13 04:36:07', '2020-12-13 04:36:20'),
(192, 'Sandwich de Lomo salteado', 2, 25.00, '0', 17, 0.00, 6.00, 102, 2, '2020-12-13 04:37:22', '2020-12-13 04:37:30'),
(193, 'Pastel', 1, 15.00, '0', 19, 0.00, 1.80, 102, 2, '2020-12-13 04:37:22', '2020-12-13 04:37:30'),
(194, 'Sandwich de Lomo salteado', 2, 25.00, '0', 17, 0.00, 6.00, 103, 2, '2020-12-13 06:11:40', '2020-12-13 06:11:53'),
(195, 'Coca-cola', 3, 10.00, '0', 20, 0.00, 3.60, 103, 2, '2020-12-13 06:11:40', '2020-12-13 06:11:54'),
(196, 'Limonada con hierba buena', 2, 25.00, '0', 18, 0.00, 6.00, 103, 2, '2020-12-13 06:11:40', '2020-12-13 06:11:54'),
(197, 'Sandwich de Lomo salteado', 3, 25.00, '0', 17, 0.00, 9.00, 104, 2, '2020-12-13 06:13:56', '2020-12-13 06:14:05'),
(198, 'Arroz Chaufa Pollo', 2, 45.00, '0', 6, 0.00, 10.80, 104, 2, '2020-12-13 06:13:56', '2020-12-13 06:14:05'),
(199, 'Coca-cola', 2, 10.00, '0', 20, 0.00, 2.40, 104, 2, '2020-12-13 06:13:56', '2020-12-13 06:14:05'),
(200, 'Sandwich de Lomo salteado', 2, 25.00, '0', 17, 0.00, 6.00, 105, 2, '2020-12-13 06:18:36', '2020-12-13 06:18:44'),
(201, 'Coca-cola', 2, 10.00, '0', 20, 0.00, 2.40, 105, 2, '2020-12-13 06:18:36', '2020-12-13 06:18:45'),
(202, 'Sandwich de Lomo salteado', 2, 25.00, '0', 17, 0.00, 6.00, 106, 2, '2020-12-13 06:19:15', '2020-12-13 06:19:22'),
(203, 'Sandwich de Lomo salteado', 2, 25.00, '0', 17, 0.00, 6.00, 107, 2, '2020-12-13 06:21:02', '2020-12-13 06:21:12'),
(204, 'Lomo salteado', 2, 52.00, '0', 5, 0.00, 12.48, 107, 2, '2020-12-13 06:21:02', '2020-12-13 06:21:12'),
(205, 'Sandwich de Lomo salteado', 2, 25.00, '0', 17, 0.00, 6.00, 108, 2, '2020-12-13 06:22:30', '2020-12-13 06:22:39'),
(206, 'Limonada con hierba buena', 2, 25.00, '0', 18, 0.00, 6.00, 108, 2, '2020-12-13 06:22:30', '2020-12-13 06:22:40'),
(207, 'Lomo salteado', 2, 52.00, '0', 5, 0.00, 12.48, 108, 2, '2020-12-13 06:22:30', '2020-12-13 06:22:40'),
(208, 'Sandwich de Lomo salteado', 2, 25.00, '0', 17, 0.00, 6.00, 109, 2, '2020-12-13 06:24:34', '2020-12-13 06:24:42'),
(209, 'Sandwich de Lomo salteado', 2, 25.00, '0', 17, 0.00, 6.00, 109, 2, '2020-12-13 06:24:34', '2020-12-13 06:24:42'),
(210, 'Limonada con hierba buena', 2, 25.00, '0', 18, 0.00, 6.00, 109, 2, '2020-12-13 06:24:34', '2020-12-13 06:24:42'),
(211, 'Lomo salteado', 2, 52.00, '0', 5, 0.00, 12.48, 109, 2, '2020-12-13 06:24:34', '2020-12-13 06:24:42'),
(212, 'Sandwich de Lomo salteado', 2, 25.00, '0', 17, 0.00, 6.00, 110, 2, '2020-12-13 06:25:26', '2020-12-13 06:25:32'),
(213, 'Coca-cola', 2, 10.00, '0', 20, 0.00, 2.40, 110, 2, '2020-12-13 06:25:26', '2020-12-13 06:25:32'),
(214, 'Limonada con hierba buena', 2, 25.00, '0', 18, 0.00, 6.00, 110, 2, '2020-12-13 06:25:26', '2020-12-13 06:25:32'),
(215, 'Sandwich de Lomo salteado', 3, 25.00, '0', 17, 0.00, 9.00, 111, 2, '2020-12-13 06:26:23', '2020-12-13 06:26:31'),
(216, 'Sandwich de Lomo salteado', 2, 25.00, '0', 17, 0.00, 6.00, 112, 2, '2020-12-13 06:49:50', '2020-12-13 06:49:56'),
(217, 'Limonada con hierba buena', 2, 25.00, '0', 18, 0.00, 6.00, 112, 2, '2020-12-13 06:49:50', '2020-12-13 06:49:56'),
(218, 'Sandwich de Lomo salteado', 2, 25.00, '0', 17, 0.00, 6.00, 113, 2, '2020-12-13 06:51:42', '2020-12-13 06:51:49'),
(219, 'Arroz Chaufa Pollo', 1, 45.00, '0', 6, 0.00, 5.40, 113, 2, '2020-12-13 06:51:42', '2020-12-13 06:51:49'),
(220, 'Sandwich de Lomo salteado', 2, 25.00, '0', 17, 0.00, 6.00, 114, 2, '2020-12-13 07:00:32', '2020-12-13 07:00:39'),
(221, 'Sandwich de Lomo salteado', 3, 25.00, '0', 17, 0.00, 9.00, 115, 2, '2020-12-13 07:03:15', '2020-12-13 07:03:23'),
(222, 'Pastel', 1, 15.00, '0', 19, 0.00, 1.80, 115, 2, '2020-12-13 07:03:15', '2020-12-13 07:03:25'),
(223, 'Sandwich de Lomo salteado', 3, 25.00, '0', 17, 0.00, 9.00, 116, 2, '2020-12-13 07:31:46', '2020-12-13 07:31:55'),
(224, 'Sandwich de Lomo salteado', 4, 25.00, '0', 17, 0.00, 12.00, 117, 2, '2021-01-02 21:37:39', '2021-01-02 21:37:59'),
(225, 'Pastel', 3, 15.00, '0', 19, 0.00, 5.40, 117, 2, '2021-01-02 21:37:39', '2021-01-02 21:37:59'),
(226, 'Coca-cola', 3, 10.00, '0', 20, 0.00, 3.60, 117, 2, '2021-01-02 21:37:39', '2021-01-02 21:37:59'),
(227, 'Sandwich de Lomo salteado', 3, 25.00, '0', 17, 0.00, 9.00, 118, 2, '2021-01-06 13:58:38', '2021-01-06 13:58:48');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `wok_employee`
--

CREATE TABLE `wok_employee` (
  `id_employee` int(10) UNSIGNED NOT NULL,
  `primer_nombre` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `segundo_nombre` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `otros_nombres` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `primer_apellido` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `segundo_apellido` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `apallido_casada` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `documento_identificacion` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `nit` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `telefono` int(11) NOT NULL,
  `telefono2` int(11) DEFAULT NULL,
  `restaurante` int(10) UNSIGNED NOT NULL,
  `tipo_empleado` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `wok_employee`
--

INSERT INTO `wok_employee` (`id_employee`, `primer_nombre`, `segundo_nombre`, `otros_nombres`, `primer_apellido`, `segundo_apellido`, `apallido_casada`, `documento_identificacion`, `email`, `nit`, `telefono`, `telefono2`, `restaurante`, `tipo_empleado`, `created_at`, `updated_at`) VALUES
(1, 'Mesero', '', '', 'Prueba', '', '', '12345678', 'dpk65206@cuoly.com', '55888555', 55750309, 0, 1, 3, '2020-10-25 14:00:04', '2020-11-01 17:46:54'),
(2, 'Gerente', '', '', 'Prueba', '', '', '788855475', 'weh45606@bcaoo.com', '8778555', 7455228, 0, 1, 1, '2020-11-01 17:46:01', '2020-11-15 03:51:06'),
(3, 'Prueba', '', '', 'Cajero', '', '', '12345678', 'vsp79608@cuoly.com', '123456', 41487520, 0, 1, 2, '2020-11-01 17:49:36', '2020-11-02 02:31:12'),
(4, 'Prueba', '', '', 'Delivery', '', '', '12345678', 'uoz13634@bcaoo.com', '123456', 48759620, 0, 8, 4, '2020-11-01 17:52:07', '2020-11-15 03:09:04'),
(5, 'Prueba', '', '', 'Cocinero', '', '', '12345678', 'noa33924@bcaoo.com', '123456', 41579632, 0, 1, 5, '2020-11-01 17:56:51', '2020-11-02 02:31:44'),
(6, 'Mauricio', '', '', 'Rodriguez', 'Latasa', '', '782478988', 'mauricio@wokeate.com', '455558', 78541263, 0, 1, 4, '2020-11-15 03:14:38', '2020-11-15 03:21:35'),
(7, 'Dubon', '', 'Felipe', 'Prueba', '', '', '12345678', 'cajero@wokeate.com', '788999-5', 55750309, 0, 1, 2, '2020-11-16 06:53:32', '2020-11-16 06:53:32'),
(8, 'Dubon', 'Eugín', 'Felipe', 'Julio Cesar', 'SA', '', '12345678', 'fel@gmais.com', '788999-5', 55750309, 0, 1, 1, '2020-11-21 03:43:54', '2020-11-21 03:43:54'),
(9, 'Dubon', 'Eugín', 'Felipe', 'Julio Cesar', '', '', '12345678', 'gerente@brasas.com', '788999-5', 55750309, 0, 9, 1, '2020-11-21 06:36:38', '2020-11-21 06:36:38'),
(10, 'Dubon', 'Eugín', 'Felipe', 'Lucas', 'SA', '', '12345678', 'mesero@brasas.com', '788999-5', 55750309, 0, 9, 3, '2020-11-21 06:37:32', '2020-11-21 06:37:32'),
(11, 'qesse', '', '', 'Julio Cesar', '', '', '12345678', 'cocinero@wokeate.com', '788999-5', 55750309, 0, 1, 5, '2020-12-01 05:40:03', '2020-12-01 05:40:03'),
(12, 'Dubon', '', 'Felipe', 'Prueba', 'SA', '', '12345678', 'prueba@wokeate.com', '788999-5', 55750309, 0, 8, 2, '2020-12-06 21:15:37', '2020-12-06 21:15:37'),
(13, 'Dubon', '', 'Felipe', 'Prueba', '', '', '12345678', 'sdasd@wokeate.com', '788999-5', 55750309, 0, 8, 1, '2020-12-06 21:25:47', '2020-12-06 21:25:47');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `wok_fel_type`
--

CREATE TABLE `wok_fel_type` (
  `id_fel` int(10) UNSIGNED NOT NULL,
  `descripcion` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `wok_fel_type`
--

INSERT INTO `wok_fel_type` (`id_fel`, `descripcion`, `created_at`, `updated_at`) VALUES
(2, 'Factura ', '2020-10-03 12:58:28', '2020-10-03 12:58:28');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `wok_franchise`
--

CREATE TABLE `wok_franchise` (
  `id_franchise` int(10) UNSIGNED NOT NULL,
  `direccion_franquicia` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `telefono` int(11) DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `type_franquicia` int(10) UNSIGNED NOT NULL,
  `owner` int(10) UNSIGNED NOT NULL,
  `persona_contable` int(10) UNSIGNED NOT NULL,
  `type_price` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `wok_franchise`
--

INSERT INTO `wok_franchise` (`id_franchise`, `direccion_franquicia`, `telefono`, `email`, `type_franquicia`, `owner`, `persona_contable`, `type_price`, `created_at`, `updated_at`) VALUES
(10, '7A Calle, Cdad. de Guatemala 01001 Palacio Nacional de la Cultura y Deporte', 78452011, 'zona6_calle@wokeate.com', 2, 6, 4, 1, '2020-10-25 10:18:12', '2020-11-15 01:57:08'),
(18, 'Zona 14 Guatemala Ciudad de Guatemala', 5575, '', 2, 6, 1, 1, '2020-10-25 15:56:53', '2020-11-02 08:45:43'),
(20, 'null', NULL, NULL, 1, 6, 1, 1, '2020-11-17 13:08:30', '2020-11-17 13:08:30'),
(21, '17012', 55750309, '', 5, 7, 1, 1, '2020-11-21 03:59:29', '2020-11-21 06:35:41');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `wok_frases`
--

CREATE TABLE `wok_frases` (
  `id_frases` int(10) UNSIGNED NOT NULL,
  `descripcion` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `fel` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `wok_frases`
--

INSERT INTO `wok_frases` (`id_frases`, `descripcion`, `fel`, `created_at`, `updated_at`) VALUES
(3, 'Frases de agente de retención del IVA', 2, '2020-10-04 16:18:19', '2021-01-02 22:05:00'),
(4, 'Frases de retención del ISR ', 2, '2021-01-02 22:04:31', '2021-01-02 22:04:31'),
(5, 'Frases de exento o no afecto al IVA', 2, '2021-01-02 22:05:37', '2021-01-02 22:05:37'),
(6, 'Frases de exento de ISR', 2, '2021-01-02 22:05:52', '2021-01-02 22:05:52');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `wok_ingrediente`
--

CREATE TABLE `wok_ingrediente` (
  `id_ingrediente` int(10) UNSIGNED NOT NULL,
  `nombre_ingrediente` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `cantidad` double(6,2) NOT NULL,
  `medida` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `receta` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `wok_ingrediente`
--

INSERT INTO `wok_ingrediente` (`id_ingrediente`, `nombre_ingrediente`, `cantidad`, `medida`, `receta`, `created_at`, `updated_at`) VALUES
(125, '12', 0.00, 'null', 17, '2020-11-08 03:43:13', '2020-11-08 03:43:13'),
(173, '1 libra de arroz', 0.00, 'null', 4, '2020-11-08 23:41:33', '2020-11-08 23:41:33'),
(174, '1/4 libra de pollo', 0.00, 'null', 4, '2020-11-08 23:41:33', '2020-11-08 23:41:33'),
(175, '3 unidades de tomate', 0.00, 'null', 4, '2020-11-08 23:41:34', '2020-11-08 23:41:34'),
(176, '4 cebollines', 0.00, 'null', 4, '2020-11-08 23:41:34', '2020-11-08 23:41:34'),
(177, 'Coca-cola', 0.00, 'null', 18, '2020-11-08 23:42:18', '2020-11-08 23:42:18'),
(178, 'pan', 0.00, 'null', 16, '2020-11-08 23:45:05', '2020-11-08 23:45:05'),
(179, 'oan', 0.00, 'null', 16, '2020-11-08 23:45:05', '2020-11-08 23:45:05'),
(180, 'TOMATE', 0.00, 'null', 3, '2020-11-08 23:51:44', '2020-11-08 23:51:44'),
(181, 'CEBOLLA', 0.00, 'null', 3, '2020-11-08 23:51:45', '2020-11-08 23:51:45'),
(182, 'SOYA', 0.00, 'null', 3, '2020-11-08 23:51:45', '2020-11-08 23:51:45'),
(183, 'PAPAS', 0.00, 'null', 3, '2020-11-08 23:51:45', '2020-11-08 23:51:45'),
(184, '1/3 de libra de lomo', 0.00, 'null', 3, '2020-11-08 23:51:45', '2020-11-08 23:51:45'),
(185, '1 Tira de pan', 0.00, 'null', 15, '2020-11-08 23:53:53', '2020-11-08 23:53:53'),
(186, '1/4 lomo salteado', 0.00, 'null', 15, '2020-11-08 23:53:54', '2020-11-08 23:53:54'),
(187, 'Cebolla morada', 0.00, 'null', 15, '2020-11-08 23:53:54', '2020-11-08 23:53:54'),
(188, 'Aderezos', 0.00, 'null', 15, '2020-11-08 23:53:54', '2020-11-08 23:53:54'),
(189, 'Camotes', 0.00, 'null', 15, '2020-11-08 23:53:54', '2020-11-08 23:53:54'),
(190, 'Pollo', 0.00, 'null', 19, '2020-11-19 04:32:47', '2020-11-19 04:32:47'),
(191, 'cebolla', 0.00, 'null', 19, '2020-11-19 04:32:47', '2020-11-19 04:32:47'),
(192, 'Pollo', 0.00, 'null', 20, '2020-11-21 06:33:09', '2020-11-21 06:33:09'),
(193, 'Cebolla', 0.00, 'null', 20, '2020-11-21 06:33:09', '2020-11-21 06:33:09'),
(194, 'Papas', 0.00, 'null', 20, '2020-11-21 06:33:10', '2020-11-21 06:33:10'),
(195, 'Costillas de cerdo', 0.00, 'null', 21, '2020-11-21 06:34:25', '2020-11-21 06:34:25'),
(196, 'salsa barcaoa', 0.00, 'null', 21, '2020-11-21 06:34:25', '2020-11-21 06:34:25');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `wok_locations`
--

CREATE TABLE `wok_locations` (
  `id_locations` int(10) UNSIGNED NOT NULL,
  `direccion` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `cliente` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `wok_locations`
--

INSERT INTO `wok_locations` (`id_locations`, `direccion`, `cliente`, `created_at`, `updated_at`) VALUES
(11, 'Poptun Peten', 11, '2020-11-21 05:21:42', '2020-11-21 05:21:42'),
(12, 'real', 12, '2020-11-21 05:43:06', '2020-11-21 05:43:06'),
(13, '17012', 14, '2020-11-21 06:51:11', '2020-11-21 06:51:11'),
(14, '17012', 15, '2020-11-21 06:55:13', '2020-11-21 06:55:13'),
(15, 'peroe', 16, '2020-11-21 07:20:25', '2020-11-21 07:20:25'),
(16, 'real', 13, '2020-11-21 07:22:34', '2020-11-21 07:22:34'),
(17, '223 ra calle y doce ', 18, '2020-12-06 22:04:16', '2020-12-06 22:04:16');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `wok_menu`
--

CREATE TABLE `wok_menu` (
  `id_menu` int(10) UNSIGNED NOT NULL,
  `descripcion` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `resumen` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `img` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `type_foods` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `wok_menu`
--

INSERT INTO `wok_menu` (`id_menu`, `descripcion`, `resumen`, `img`, `type_foods`, `created_at`, `updated_at`) VALUES
(5, 'Lomo salteado', 'Cortes finos de lomo, salteados al wok, con papas fritas acompañados de arroz', 'IMG-20200608-WA0022.jpg', 2, '2020-10-21 09:48:19', '2020-11-08 23:51:43'),
(6, 'Arroz Chaufa Pollo', 'Arroz al estilo peruano acompañado de pollo, tiene un toque de jegibre y otras especies', 'IMG-20200608-WA0021.jpg', 2, '2020-10-21 14:17:55', '2020-11-08 23:41:33'),
(17, 'Sandwich de Lomo salteado', 'Sandwich con lomo salteado, con un rico aderezo de cebolla y camote', 'IMG-20200608-WA0020.jpg', 1, '2020-10-21 15:38:27', '2020-11-08 23:53:53'),
(18, 'Limonada con hierba buena', 'Bebida natural de limonada acompañado de hojas de hierba buena', 'bebida.jpg', 4, '2020-11-08 02:45:58', '2020-11-08 23:45:04'),
(19, 'Pastel', '', 'IMG-20200608-WA0019.jpg', 3, '2020-11-08 03:43:13', '2020-11-08 03:43:13'),
(20, 'Coca-cola', 'Bebida fría', 'descarga.png', 4, '2020-11-08 04:40:34', '2020-11-08 23:42:18'),
(21, 'Arroz Chaufa Pollo', 'dasdfa', 'html2image-0.9.jar', 1, '2020-11-19 04:32:46', '2020-11-19 04:32:46'),
(22, 'Pollo Azado entero', 'Pollo a las brasas entero', '336-3367893_technology-automotive-partner-tier-mapbox-logo-png-clipart.png.jpg', 2, '2020-11-21 06:33:08', '2020-11-21 06:33:08'),
(23, 'Costillas en barcaoa', '1 lb', '194_Laravel-512.png', 2, '2020-11-21 06:34:25', '2020-11-21 06:34:25');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `wok_menu_has_type_franchise`
--

CREATE TABLE `wok_menu_has_type_franchise` (
  `type_franquicia` int(10) UNSIGNED NOT NULL,
  `menu` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `wok_menu_has_type_franchise`
--

INSERT INTO `wok_menu_has_type_franchise` (`type_franquicia`, `menu`, `created_at`, `updated_at`) VALUES
(2, 19, '2020-11-08 03:43:13', '2020-11-08 03:43:13'),
(2, 6, '2020-11-08 23:41:34', '2020-11-08 23:41:34'),
(2, 20, '2020-11-08 23:42:18', '2020-11-08 23:42:18'),
(2, 18, '2020-11-08 23:45:05', '2020-11-08 23:45:05'),
(2, 5, '2020-11-08 23:51:45', '2020-11-08 23:51:45'),
(2, 17, '2020-11-08 23:53:55', '2020-11-08 23:53:55'),
(1, 21, '2020-11-19 04:32:46', '2020-11-19 04:32:46'),
(5, 22, '2020-11-21 06:33:08', '2020-11-21 06:33:08'),
(5, 23, '2020-11-21 06:34:25', '2020-11-21 06:34:25');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `wok_owner`
--

CREATE TABLE `wok_owner` (
  `id_owner` int(10) UNSIGNED NOT NULL,
  `primer_nombre` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `segundo_nombre` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `otros_nombres` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `primer_apellido` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `segundo_apellido` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `apallido_casada` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `documento_identificacion` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `telefono` int(11) NOT NULL,
  `telefono2` int(11) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `wok_owner`
--

INSERT INTO `wok_owner` (`id_owner`, `primer_nombre`, `segundo_nombre`, `otros_nombres`, `primer_apellido`, `segundo_apellido`, `apallido_casada`, `documento_identificacion`, `email`, `telefono`, `telefono2`, `created_at`, `updated_at`) VALUES
(6, 'Propietario', '', '', 'Prueba', '', '', '12345678', 'propietario@wokeate.com', 57896345, 0, '2020-10-25 10:18:12', '2020-10-25 11:31:29'),
(7, 'Propietario', 'Eugín', 'Felipe', 'Brasas Lenia', 'SA', '', '12345678', 'propietarios@brasasleni.com', 55750309, 0, '2020-11-21 03:59:29', '2020-11-21 06:35:41');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `wok_payments`
--

CREATE TABLE `wok_payments` (
  `id_payments` int(10) UNSIGNED NOT NULL,
  `descripcion` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `monto` double(10,2) NOT NULL,
  `constante` varchar(2) COLLATE utf8_unicode_ci NOT NULL,
  `restaurante` int(10) UNSIGNED NOT NULL,
  `proveedores` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `wok_payments`
--

INSERT INTO `wok_payments` (`id_payments`, `descripcion`, `monto`, `constante`, `restaurante`, `proveedores`, `created_at`, `updated_at`) VALUES
(1, 'Distribuidor de Luz', 450.20, 'NO', 1, 1, '2020-10-09 05:14:42', '2020-11-09 10:35:58'),
(5, 'Renta de local', 2800.50, 'SI', 1, 3, '2020-10-14 10:49:00', '2020-11-12 10:50:43'),
(6, 'Compra de 25 lbras de pollo amarillo', 200.00, 'NO', 1, 2, '2020-10-06 10:57:29', '2020-11-12 10:57:29'),
(7, 'Compra de 25 lbras de pollo amarillo', 245.20, 'NO', 1, 2, '2020-08-03 11:02:31', '2020-11-12 11:02:31'),
(8, 'Distribuidor de Luz EXTRA', 420.00, 'SI', 1, 1, '2020-10-06 11:02:44', '2020-11-12 11:02:44'),
(9, 'Compra de 25 lbras de pollo amarillo', 85.25, 'NO', 1, 2, '2020-09-08 11:03:00', '2020-11-12 11:03:00'),
(10, 'Compra de 25 lbras de pollo amarillo', 850.00, 'NO', 1, 2, '2020-10-15 11:03:11', '2020-11-12 11:03:11'),
(16, 'Renta de local', 455.00, 'NO', 1, 4, '2020-10-12 13:45:17', '2020-11-12 13:45:17'),
(17, 'Renta de local', 2800.50, 'SI', 1, 3, '2020-11-13 11:29:42', '2020-11-13 11:29:42'),
(18, 'Distribuidor de Luz EXTRA', 420.00, 'SI', 1, 1, '2020-11-13 11:29:42', '2020-11-13 11:29:42'),
(19, 'Compra de 25 lbras de pollo amarillo', 400.00, 'NO', 1, 2, '2020-11-13 11:29:43', '2020-11-13 11:29:43'),
(26, 'Renta de local', 2800.50, 'SI', 1, 3, '2020-11-13 00:34:09', '2020-11-15 00:34:09'),
(27, 'Compra de 25 lbras de pollo amarillo', 1.00, 'NO', 1, 2, '2020-11-13 00:34:23', '2020-11-15 00:34:23'),
(28, 'Distribuidor de Luz', 1.00, 'NO', 1, 1, '2020-11-13 00:34:41', '2020-11-15 00:34:41'),
(29, 'Ventas de pollo por mayor', 2.00, 'NO', 1, 2, '2020-11-14 00:35:43', '2020-11-15 00:35:43'),
(38, 'Renta de local', 2800.50, 'SI', 8, 3, '2020-11-15 04:10:49', '2020-11-15 04:24:10'),
(39, 'Renta de local', 2000.00, 'NO', 1, 3, '2020-11-15 04:10:50', '2020-11-15 04:25:17'),
(41, 'Pago de energia electrica', 850.00, 'NO', 1, 1, '2020-12-08 02:45:32', '2020-12-08 02:45:32'),
(42, 'Compra de 25 libras de lomo', 260.00, 'NO', 1, 2, '2020-12-08 02:46:18', '2020-12-08 02:46:18'),
(43, 'Compra de verduras por mayor', 489.00, 'NO', 1, 5, '2020-12-08 02:46:45', '2020-12-08 02:46:45'),
(44, 'Cinco cajas de gaseosas', 1502.00, 'NO', 1, 6, '2020-12-08 02:47:07', '2020-12-08 02:47:07');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `wok_pedido`
--

CREATE TABLE `wok_pedido` (
  `id_pedido` int(10) UNSIGNED NOT NULL,
  `estado` varchar(2) COLLATE utf8_unicode_ci NOT NULL,
  `cliente` int(10) UNSIGNED NOT NULL,
  `table` int(10) UNSIGNED NOT NULL,
  `restaurante` int(10) UNSIGNED NOT NULL,
  `dirrecion_pedido` varchar(250) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `wok_pedido`
--

INSERT INTO `wok_pedido` (`id_pedido`, `estado`, `cliente`, `table`, `restaurante`, `dirrecion_pedido`, `created_at`, `updated_at`) VALUES
(45, '3', 12, 12, 1, 'real', '2020-11-21 05:42:55', '2020-11-21 05:43:12'),
(46, '1', 1, 11, 1, NULL, '2020-11-21 05:43:31', '2020-12-09 03:27:36'),
(47, '3', 13, 11, 1, NULL, '2020-11-21 05:44:40', '2020-11-21 05:45:41'),
(48, '1', 1, 14, 1, NULL, '2020-11-21 06:29:03', '2020-12-01 06:24:06'),
(49, '3', 12, 15, 9, 'real', '2020-11-21 06:40:30', '2020-11-21 06:40:58'),
(50, '1', 11, 16, 9, 'Poptun Peten', '2020-11-21 06:47:18', '2020-11-21 06:47:53'),
(51, '3', 11, 17, 9, 'Poptun Peten', '2020-11-21 06:48:25', '2020-11-21 07:18:05'),
(52, '3', 14, 16, 9, '17012', '2020-11-21 06:49:03', '2020-11-21 07:12:55'),
(53, '0', 15, 18, 9, '17012', '2020-11-21 06:52:59', '2020-11-21 06:55:14'),
(54, '3', 16, 15, 9, 'peroe', '2020-11-21 07:20:08', '2020-11-21 07:20:56'),
(55, '1', 13, 12, 1, 'real', '2020-11-21 07:22:26', '2020-12-05 05:40:11'),
(56, '1', 1, 11, 1, NULL, '2020-11-21 07:27:50', '2020-12-09 03:27:33'),
(57, '1', 1, 10, 1, NULL, '2020-12-01 03:17:48', '2020-12-01 03:18:12'),
(58, '1', 1, 10, 1, NULL, '2020-12-01 03:27:50', '2020-12-01 03:33:47'),
(59, '1', 1, 10, 1, NULL, '2020-12-01 04:22:44', '2020-12-01 04:25:16'),
(60, '1', 1, 10, 1, NULL, '2020-12-01 06:01:14', '2020-12-01 06:24:02'),
(61, '1', 1, 14, 1, NULL, '2020-12-01 06:03:52', '2020-12-03 04:33:34'),
(62, '1', 17, 10, 1, NULL, '2020-12-03 04:27:07', '2020-12-03 04:44:18'),
(63, '3', 11, 12, 1, 'Poptun Peten', '2020-12-03 04:32:06', '2020-12-03 04:32:23'),
(64, '1', 1, 14, 1, NULL, '2020-12-03 04:33:06', '2020-12-08 02:49:13'),
(65, '1', 18, 10, 1, NULL, '2020-12-03 05:01:24', '2020-12-03 05:05:08'),
(66, '1', 19, 10, 1, NULL, '2020-12-03 06:13:44', '2020-12-06 23:24:37'),
(67, '0', 1, 11, 1, NULL, '2020-12-03 06:32:14', '2020-12-03 06:32:14'),
(68, '0', 1, 12, 1, NULL, '2020-12-03 06:32:33', '2020-12-03 06:32:33'),
(69, '3', 16, 12, 1, 'peroe', '2020-12-06 22:00:50', '2020-12-06 22:03:05'),
(70, '3', 18, 12, 1, '223 ra calle y doce ', '2020-12-06 22:03:59', '2020-12-06 22:04:23'),
(71, '1', 18, 12, 1, '223 ra calle y doce ', '2020-12-06 22:07:33', '2020-12-09 03:26:28'),
(72, '0', 1, 11, 1, NULL, '2020-12-06 22:16:06', '2020-12-06 22:16:06'),
(73, '1', 12, 10, 1, NULL, '2020-12-06 23:27:52', '2020-12-06 23:35:32'),
(74, '3', 11, 12, 1, 'Poptun Peten', '2020-12-06 23:41:34', '2020-12-06 23:41:56'),
(75, '1', 11, 11, 1, NULL, '2020-12-06 23:42:05', '2020-12-09 03:43:45'),
(76, '1', 1, 10, 1, NULL, '2020-12-08 02:48:10', '2020-12-08 02:48:20'),
(77, '1', 1, 10, 1, NULL, '2020-12-08 02:48:28', '2020-12-08 02:48:34'),
(78, '1', 1, 10, 1, NULL, '2020-12-08 02:48:47', '2020-12-08 02:48:52'),
(79, '1', 1, 14, 1, NULL, '2020-12-08 02:49:04', '2020-12-08 02:49:33'),
(80, '1', 1, 14, 1, NULL, '2020-12-08 02:49:18', '2020-12-08 02:49:46'),
(81, '0', 1, 14, 1, NULL, '2020-12-08 02:49:20', '2020-12-08 02:49:20'),
(82, '0', 1, 14, 1, NULL, '2020-12-08 02:49:39', '2020-12-08 02:49:39'),
(83, '1', 1, 10, 1, NULL, '2020-12-08 02:50:03', '2020-12-08 02:50:08'),
(84, '1', 1, 10, 1, NULL, '2020-12-08 02:50:14', '2020-12-08 02:50:20'),
(85, '1', 1, 10, 1, NULL, '2020-12-08 02:50:27', '2020-12-08 02:50:34'),
(86, '0', 1, 11, 1, NULL, '2020-12-09 02:37:47', '2020-12-09 02:37:47'),
(87, '3', 12, 12, 1, 'real', '2020-12-09 02:38:13', '2020-12-09 02:38:25'),
(88, '0', 1, 11, 1, NULL, '2020-12-09 02:38:41', '2020-12-09 02:38:41'),
(89, '1', 12, 12, 1, 'real', '2020-12-09 02:47:22', '2020-12-09 03:26:35'),
(90, '0', 1, 11, 1, NULL, '2020-12-09 02:48:32', '2020-12-09 02:48:32'),
(91, '0', 1, 11, 1, NULL, '2020-12-09 02:49:56', '2020-12-09 02:49:56'),
(92, '0', 1, 11, 1, NULL, '2020-12-09 02:51:45', '2020-12-09 02:51:45'),
(93, '1', 13, 12, 1, 'real', '2020-12-09 02:52:23', '2020-12-09 03:26:33'),
(94, '1', 1, 10, 1, NULL, '2020-12-09 02:53:43', '2020-12-09 02:53:53'),
(95, '1', 1, 10, 1, NULL, '2020-12-09 02:54:05', '2020-12-09 02:54:18'),
(96, '1', 20, 11, 1, NULL, '2020-12-09 02:54:28', '2020-12-09 03:27:34'),
(97, '1', 1, 11, 1, NULL, '2020-12-09 03:00:25', '2020-12-09 03:27:15'),
(98, '0', 1, 11, 1, NULL, '2020-12-09 03:00:35', '2020-12-09 03:00:35'),
(99, '1', 11, 10, 1, NULL, '2020-12-10 04:57:15', '2020-12-10 05:02:13'),
(100, '3', 12, 12, 1, 'real', '2020-12-12 17:10:47', '2020-12-12 17:32:22'),
(101, '0', 12, 12, 1, 'real', '2020-12-12 17:14:46', '2020-12-12 17:14:52'),
(102, '0', 12, 12, 1, 'real', '2020-12-12 17:36:16', '2020-12-12 17:36:23'),
(103, '0', 12, 12, 1, 'real', '2020-12-12 18:43:18', '2020-12-12 18:43:26'),
(104, '0', 11, 12, 1, 'Poptun Peten', '2020-12-12 19:55:33', '2020-12-12 19:55:47'),
(105, '0', 12, 12, 1, 'real', '2020-12-12 19:59:57', '2020-12-12 20:00:09'),
(106, '0', 12, 12, 1, 'real', '2020-12-12 20:12:17', '2020-12-12 20:12:24'),
(107, '0', 12, 12, 1, 'real', '2020-12-12 20:30:49', '2020-12-12 20:30:55'),
(108, '0', 12, 12, 1, 'real', '2020-12-12 22:46:42', '2020-12-12 22:46:55'),
(109, '0', 12, 12, 1, 'real', '2020-12-13 01:12:34', '2020-12-13 01:12:39'),
(110, '0', 12, 12, 1, 'real', '2020-12-13 01:15:07', '2020-12-13 01:15:13'),
(111, '0', 12, 12, 1, 'real', '2020-12-13 01:31:30', '2020-12-13 01:31:35'),
(112, '0', 12, 12, 1, 'real', '2020-12-13 01:58:13', '2020-12-13 01:58:28'),
(113, '0', 12, 12, 1, 'real', '2020-12-13 04:29:14', '2020-12-13 04:29:21'),
(114, '0', 12, 12, 1, 'real', '2020-12-13 04:30:11', '2020-12-13 04:30:16'),
(115, '0', 12, 12, 1, 'real', '2020-12-13 04:31:18', '2020-12-13 04:31:22'),
(116, '0', 12, 12, 1, 'real', '2020-12-13 04:33:05', '2020-12-13 04:33:16'),
(117, '0', 16, 12, 1, 'peroe', '2020-12-13 04:36:06', '2020-12-13 04:36:15'),
(118, '0', 12, 12, 1, 'real', '2020-12-13 04:37:22', '2020-12-13 04:37:28'),
(119, '0', 12, 12, 1, 'real', '2020-12-13 06:11:40', '2020-12-13 06:11:49'),
(120, '0', 12, 12, 1, 'real', '2020-12-13 06:13:56', '2020-12-13 06:14:02'),
(121, '0', 12, 12, 1, 'real', '2020-12-13 06:18:35', '2020-12-13 06:18:41'),
(122, '0', 12, 12, 1, 'real', '2020-12-13 06:19:14', '2020-12-13 06:19:20'),
(123, '0', 12, 12, 1, 'real', '2020-12-13 06:21:01', '2020-12-13 06:21:09'),
(124, '0', 12, 12, 1, 'real', '2020-12-13 06:22:29', '2020-12-13 06:22:35'),
(125, '0', 16, 12, 1, 'peroe', '2020-12-13 06:24:34', '2020-12-13 06:24:40'),
(126, '0', 12, 12, 1, 'real', '2020-12-13 06:25:25', '2020-12-13 06:25:30'),
(127, '0', 12, 12, 1, 'real', '2020-12-13 06:26:23', '2020-12-13 06:26:28'),
(128, '0', 12, 12, 1, 'real', '2020-12-13 06:49:50', '2020-12-13 06:49:54'),
(129, '0', 12, 12, 1, 'real', '2020-12-13 06:51:42', '2020-12-13 06:51:47'),
(130, '0', 12, 12, 1, 'real', '2020-12-13 07:00:32', '2020-12-13 07:00:37'),
(131, '0', 12, 12, 1, 'real', '2020-12-13 07:03:14', '2020-12-13 07:03:20'),
(132, '0', 12, 12, 1, 'real', '2020-12-13 07:31:46', '2020-12-13 07:31:52'),
(133, '0', 12, 12, 1, 'real', '2021-01-02 21:37:38', '2021-01-02 21:37:50'),
(134, '3', 12, 12, 1, 'real', '2021-01-06 13:58:38', '2021-01-06 13:58:50');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `wok_person_contable`
--

CREATE TABLE `wok_person_contable` (
  `id_per_con` int(10) UNSIGNED NOT NULL,
  `primer_nombre` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `segundo_nombre` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `otros_nombres` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `primer_apellido` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `segundo_apellido` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `apallido_casada` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `documento_identificacion` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `telefono` int(11) NOT NULL,
  `telefono2` int(11) DEFAULT NULL,
  `owner` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `wok_person_contable`
--

INSERT INTO `wok_person_contable` (`id_per_con`, `primer_nombre`, `segundo_nombre`, `otros_nombres`, `primer_apellido`, `segundo_apellido`, `apallido_casada`, `documento_identificacion`, `email`, `telefono`, `telefono2`, `owner`, `created_at`, `updated_at`) VALUES
(1, 'Contable', NULL, NULL, 'Propio', NULL, NULL, 'null', 'email@email.com', 0, NULL, NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(4, 'Luis', 'Carlos', '', 'Real', '', '', '12345678', 'cpd37121@cuoly.com', 55750309, 0, 6, '2020-11-02 10:49:32', '2020-11-09 02:30:12'),
(5, 'Dubon', '', 'Felipe', 'Lucas', '', '', '12345678', 'aq@mgl.com', 55750309, 0, 6, '2020-11-09 02:31:27', '2020-11-09 02:31:27');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `wok_price`
--

CREATE TABLE `wok_price` (
  `id_price` int(10) UNSIGNED NOT NULL,
  `monto` double(6,2) NOT NULL,
  `type_price` int(10) UNSIGNED NOT NULL,
  `menu` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `wok_price`
--

INSERT INTO `wok_price` (`id_price`, `monto`, `type_price`, `menu`, `created_at`, `updated_at`) VALUES
(5, 52.00, 1, 5, '2020-10-21 09:48:20', '2020-10-25 16:57:32'),
(6, 45.00, 1, 6, '2020-10-21 14:17:57', '2020-10-21 14:17:57'),
(17, 25.00, 1, 17, '2020-10-21 15:38:28', '2020-10-21 15:38:28'),
(18, 85.00, 2, 6, '2020-10-25 17:33:31', '2020-10-25 17:33:54'),
(19, 40.00, 2, 17, '2020-10-25 17:34:08', '2020-10-25 17:34:08'),
(20, 25.00, 1, 18, '2020-11-08 02:45:58', '2020-11-08 02:45:58'),
(21, 15.00, 1, 19, '2020-11-08 03:43:13', '2020-11-08 03:43:13'),
(22, 10.00, 1, 20, '2020-11-08 04:40:36', '2020-11-08 04:40:36'),
(23, 23.00, 1, 21, '2020-11-19 04:32:47', '2020-11-19 04:32:47'),
(24, 80.00, 1, 22, '2020-11-21 06:33:08', '2020-11-21 06:33:08'),
(25, 70.00, 1, 23, '2020-11-21 06:34:25', '2020-11-21 06:34:25');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `wok_producto`
--

CREATE TABLE `wok_producto` (
  `id_producto` int(10) UNSIGNED NOT NULL,
  `nombre_producto` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `descripcion` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `stock_minimo` double(10,2) DEFAULT NULL,
  `medidas` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `estado` tinyint(1) DEFAULT NULL,
  `restaurante` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `wok_proveedores`
--

CREATE TABLE `wok_proveedores` (
  `id_proveedores` int(10) UNSIGNED NOT NULL,
  `nombre` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `nit_proveedor` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `descripcion` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `restaurante` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `wok_proveedores`
--

INSERT INTO `wok_proveedores` (`id_proveedores`, `nombre`, `nit_proveedor`, `descripcion`, `restaurante`, `created_at`, `updated_at`) VALUES
(1, 'EGGSA', '788999-5', 'Distribuidor de Luz', 1, '2020-11-02 03:42:54', '2020-11-02 03:42:54'),
(2, 'Polleria Maria', '458856-4', 'Ventas de pechuga de pollo por mayor', 1, '2020-11-02 03:43:45', '2020-11-15 02:15:48'),
(3, 'Julío García Douglas', '458856-4', 'Alquiler de Local', 1, '2020-11-09 04:28:53', '2020-11-15 02:16:12'),
(4, 'INGRID RAMOS', '788999-51', 'Renta de local', 8, '2020-11-12 13:36:07', '2020-11-15 02:17:15'),
(5, 'Venta de vegetales santa maria', '13233', 'vende vegetales', 1, '2020-11-15 02:05:46', '2020-11-15 02:05:46'),
(6, 'Coca-cola', '785477-8', 'Distribuidor de gaseosas', 1, '2020-11-15 02:18:04', '2020-11-15 02:18:04');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `wok_receta`
--

CREATE TABLE `wok_receta` (
  `id_receta` int(10) UNSIGNED NOT NULL,
  `descripcion_proceso` longtext COLLATE utf8_unicode_ci NOT NULL,
  `tiempo_preparacion` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `menu` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `wok_receta`
--

INSERT INTO `wok_receta` (`id_receta`, `descripcion_proceso`, `tiempo_preparacion`, `menu`, `created_at`, `updated_at`) VALUES
(3, 'Wokear un lomo de res, acompañado de papas fritas, realizado con fuego lento durante 45 minutos', '30 min', 5, '2020-10-21 09:48:20', '2020-10-25 08:43:06'),
(4, 'Cortar pechuga de pollo,\r\nWokear con salsa de soya y vinagre, realizar el arroz un día antes.', '45 minutos', 6, '2020-10-21 14:17:57', '2020-11-08 05:11:51'),
(15, 'Pan cortado partido a la mitad, colocar trozos de lomo salteado con cortes de camotes', '10 minutos', 17, '2020-10-21 15:38:28', '2020-10-25 08:54:50'),
(16, 'a', '21', 18, '2020-11-08 02:45:59', '2020-11-08 02:45:59'),
(17, 'q', '1', 19, '2020-11-08 03:43:13', '2020-11-08 03:43:13'),
(18, 'Servir en un base. Entregar 5 min antes de la entrega del plato principal', '1 min.', 20, '2020-11-08 04:40:36', '2020-11-08 05:05:55'),
(19, 'El pollo frio 67 grados \r\n', '25 minutoz', 21, '2020-11-19 04:32:47', '2020-11-19 04:32:47'),
(20, 'Marinar pollo ', '25 minutos', 22, '2020-11-21 06:33:08', '2020-11-21 06:33:08'),
(21, 'Costillas en barbacoa', '25 minutos', 23, '2020-11-21 06:34:25', '2020-11-21 06:34:25');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `wok_restaurant`
--

CREATE TABLE `wok_restaurant` (
  `id_restaurant` int(10) UNSIGNED NOT NULL,
  `franquicia` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `wok_restaurant`
--

INSERT INTO `wok_restaurant` (`id_restaurant`, `franquicia`, `created_at`, `updated_at`) VALUES
(1, 10, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(8, 18, '2020-10-25 15:56:53', '2020-10-25 15:56:53'),
(9, 21, '2020-11-21 03:59:30', '2020-11-21 03:59:30');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `wok_stock`
--

CREATE TABLE `wok_stock` (
  `id_stock` int(10) UNSIGNED NOT NULL,
  `cantidad` double(10,2) NOT NULL,
  `in_out_stocks` varchar(2) COLLATE utf8_unicode_ci NOT NULL,
  `caducidad_dias` int(11) DEFAULT NULL,
  `estado` tinyint(1) DEFAULT NULL,
  `producto` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `wok_table`
--

CREATE TABLE `wok_table` (
  `id_table` int(10) UNSIGNED NOT NULL,
  `nombre` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `estado` varchar(2) COLLATE utf8_unicode_ci NOT NULL,
  `servicio` varchar(2) COLLATE utf8_unicode_ci NOT NULL,
  `restaurante` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `estado_eliminado` varchar(2) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `wok_table`
--

INSERT INTO `wok_table` (`id_table`, `nombre`, `estado`, `servicio`, `restaurante`, `created_at`, `updated_at`, `estado_eliminado`) VALUES
(10, 'Interior uno', '0', 'MS', 1, '2020-11-15 06:16:14', '2020-12-10 05:02:13', '1'),
(11, 'Caja', '0', 'LV', 1, '2020-11-15 06:18:28', '2020-11-21 05:56:52', '1'),
(12, 'Moto Zusuki', '0', 'DC', 1, '2020-11-15 06:18:45', '2020-11-21 07:22:45', '1'),
(13, 'Ocho', '0', 'MS', 1, '2020-11-19 04:41:12', '2020-11-21 06:01:55', '0'),
(14, 'Prueba ', '0', 'MS', 1, '2020-11-21 06:01:52', '2020-12-08 02:49:45', '1'),
(15, 'uno', '0', 'MS', 9, '2020-11-21 06:37:49', '2020-11-21 07:21:54', '1'),
(16, 'dos', '0', 'MS', 9, '2020-11-21 06:37:55', '2020-11-21 06:49:03', '1'),
(17, 'tres', '0', 'MS', 9, '2020-11-21 06:38:01', '2020-11-21 06:48:26', '1'),
(18, 'cuatro', '0', 'MS', 9, '2020-11-21 06:38:08', '2020-11-21 06:52:59', '1'),
(19, 'cinco', '0', 'MS', 9, '2020-11-21 06:38:45', '2020-11-21 06:38:45', '1');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `wok_type_employee`
--

CREATE TABLE `wok_type_employee` (
  `id_type_employee` int(10) UNSIGNED NOT NULL,
  `descripcion` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `wok_type_employee`
--

INSERT INTO `wok_type_employee` (`id_type_employee`, `descripcion`, `created_at`, `updated_at`) VALUES
(1, 'Gerente', '2020-10-19 13:37:38', '2020-10-19 13:37:38'),
(2, 'Cajero', '2020-10-19 13:37:53', '2020-10-19 13:53:55'),
(3, 'Mesero', '2020-10-19 13:39:42', '2020-10-19 13:39:42'),
(4, 'Delivery', '2020-10-19 13:40:20', '2020-10-19 13:40:20'),
(5, 'Cocinero', '2020-10-19 13:41:30', '2020-10-19 13:41:30');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `wok_type_foods`
--

CREATE TABLE `wok_type_foods` (
  `id_type_foods` int(10) UNSIGNED NOT NULL,
  `descripcion` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `wok_type_foods`
--

INSERT INTO `wok_type_foods` (`id_type_foods`, `descripcion`, `created_at`, `updated_at`) VALUES
(1, 'Entrada', '2020-10-19 16:56:47', '2020-10-19 16:56:47'),
(2, 'Plato fuerte', '2020-10-19 16:57:32', '2020-10-19 17:04:53'),
(3, 'Postre', '2020-10-19 16:57:55', '2020-10-19 16:57:55'),
(4, 'Bebida', '2020-10-19 16:58:15', '2020-10-19 16:58:15');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `wok_type_franchise`
--

CREATE TABLE `wok_type_franchise` (
  `id_type_franchise` int(10) UNSIGNED NOT NULL,
  `descripcion_franquicia` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `wok_type_franchise`
--

INSERT INTO `wok_type_franchise` (`id_type_franchise`, `descripcion_franquicia`, `created_at`, `updated_at`) VALUES
(1, 'Wokeate Fish, comida peruana orientada en el arte del marisco', '0000-00-00 00:00:00', '2020-10-04 17:25:16'),
(2, 'Wokeate China, comida chaufa fusión peruana-China', '2020-10-04 17:17:30', '2020-10-04 17:29:28'),
(3, 'Wokeate Sandwich, comida peruana orientada en el desarrollo de panes con saber muy distintivos del Perú', '2020-10-04 17:27:03', '2020-10-04 17:27:03'),
(4, 'Wokeate Perú, comida con sabores exóticos en todas sus vertientes', '2020-10-04 17:28:55', '2020-10-04 17:29:37'),
(5, 'Brasas y leñas', '2020-11-21 03:46:57', '2020-11-21 03:46:57');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `wok_type_price`
--

CREATE TABLE `wok_type_price` (
  `id_type_price` int(10) UNSIGNED NOT NULL,
  `descripcion` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `wok_type_price`
--

INSERT INTO `wok_type_price` (`id_type_price`, `descripcion`, `created_at`, `updated_at`) VALUES
(1, 'Normalizado', '0000-00-00 00:00:00', '2020-10-20 12:10:04'),
(2, 'Privilegiada', '2020-10-20 12:06:48', '2020-10-20 12:06:48');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `logs`
--
ALTER TABLE `logs`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`),
  ADD KEY `password_resets_token_index` (`token`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indices de la tabla `wok_administrador`
--
ALTER TABLE `wok_administrador`
  ADD PRIMARY KEY (`id_administrador`),
  ADD UNIQUE KEY `wok_administrador_email_unique` (`email`);

--
-- Indices de la tabla `wok_administrador_has_type_franchise`
--
ALTER TABLE `wok_administrador_has_type_franchise`
  ADD KEY `wok_administrador_has_type_franchise_type_franquicia_foreign` (`type_franquicia`),
  ADD KEY `wok_administrador_has_type_franchise_administrador_foreign` (`administrador`);

--
-- Indices de la tabla `wok_admin_employee`
--
ALTER TABLE `wok_admin_employee`
  ADD PRIMARY KEY (`id_employee`),
  ADD KEY `wok_admin_employee_banco_foreign` (`banco`),
  ADD KEY `wok_admin_employee_empleado_foreign` (`empleado`);

--
-- Indices de la tabla `wok_banco`
--
ALTER TABLE `wok_banco`
  ADD PRIMARY KEY (`id_banco`);

--
-- Indices de la tabla `wok_bill`
--
ALTER TABLE `wok_bill`
  ADD PRIMARY KEY (`id_bill`),
  ADD KEY `wok_bill_fel_foreign` (`fel`),
  ADD KEY `wok_bill_pedido_foreign` (`pedido`),
  ADD KEY `wok_bill_empleado_foreign` (`empleado`);

--
-- Indices de la tabla `wok_certificador`
--
ALTER TABLE `wok_certificador`
  ADD PRIMARY KEY (`id_certificador`);

--
-- Indices de la tabla `wok_cliente`
--
ALTER TABLE `wok_cliente`
  ADD PRIMARY KEY (`id_cliente`),
  ADD KEY `wok_cliente_restaurante_foreign` (`restaurante`);

--
-- Indices de la tabla `wok_complemento`
--
ALTER TABLE `wok_complemento`
  ADD PRIMARY KEY (`id_complemento`),
  ADD KEY `wok_complemento_bill_foreign` (`bill`);

--
-- Indices de la tabla `wok_conf_fel`
--
ALTER TABLE `wok_conf_fel`
  ADD PRIMARY KEY (`id_conf_fel`),
  ADD KEY `wok_conf_fel_owner_foreign` (`owner`),
  ADD KEY `wok_conf_fel_certificador_foreign` (`certificador`);

--
-- Indices de la tabla `wok_contacto`
--
ALTER TABLE `wok_contacto`
  ADD PRIMARY KEY (`id_contacto`),
  ADD KEY `wok_contacto_cliente_foreign` (`cliente`);

--
-- Indices de la tabla `wok_corte_caja`
--
ALTER TABLE `wok_corte_caja`
  ADD PRIMARY KEY (`id_corte`),
  ADD KEY `wok_corte_caja_restaurante_foreign` (`restaurante`);

--
-- Indices de la tabla `wok_details_bill`
--
ALTER TABLE `wok_details_bill`
  ADD PRIMARY KEY (`id_details_bill`),
  ADD KEY `wok_details_bill_bill_foreign` (`bill`),
  ADD KEY `wok_details_bill_empleado_foreign` (`empleado`);

--
-- Indices de la tabla `wok_employee`
--
ALTER TABLE `wok_employee`
  ADD PRIMARY KEY (`id_employee`),
  ADD UNIQUE KEY `wok_employee_email_unique` (`email`),
  ADD KEY `wok_employee_restaurante_foreign` (`restaurante`),
  ADD KEY `wok_employee_tipo_empleado_foreign` (`tipo_empleado`);

--
-- Indices de la tabla `wok_fel_type`
--
ALTER TABLE `wok_fel_type`
  ADD PRIMARY KEY (`id_fel`);

--
-- Indices de la tabla `wok_franchise`
--
ALTER TABLE `wok_franchise`
  ADD PRIMARY KEY (`id_franchise`),
  ADD KEY `wok_franchise_type_franquicia_foreign` (`type_franquicia`),
  ADD KEY `wok_franchise_owner_foreign` (`owner`),
  ADD KEY `wok_franchise_persona_contable_foreign` (`persona_contable`),
  ADD KEY `wok_franchise_type_price_foreign` (`type_price`);

--
-- Indices de la tabla `wok_frases`
--
ALTER TABLE `wok_frases`
  ADD PRIMARY KEY (`id_frases`),
  ADD KEY `wok_frases_fel_foreign` (`fel`);

--
-- Indices de la tabla `wok_ingrediente`
--
ALTER TABLE `wok_ingrediente`
  ADD PRIMARY KEY (`id_ingrediente`),
  ADD KEY `wok_ingrediente_receta_foreign` (`receta`);

--
-- Indices de la tabla `wok_locations`
--
ALTER TABLE `wok_locations`
  ADD PRIMARY KEY (`id_locations`),
  ADD KEY `wok_locations_cliente_foreign` (`cliente`);

--
-- Indices de la tabla `wok_menu`
--
ALTER TABLE `wok_menu`
  ADD PRIMARY KEY (`id_menu`),
  ADD KEY `wok_menu_type_foods_foreign` (`type_foods`);

--
-- Indices de la tabla `wok_menu_has_type_franchise`
--
ALTER TABLE `wok_menu_has_type_franchise`
  ADD KEY `wok_menu_has_type_franchise_type_franquicia_foreign` (`type_franquicia`),
  ADD KEY `wok_menu_has_type_franchise_menu_foreign` (`menu`);

--
-- Indices de la tabla `wok_owner`
--
ALTER TABLE `wok_owner`
  ADD PRIMARY KEY (`id_owner`),
  ADD UNIQUE KEY `wok_owner_email_unique` (`email`);

--
-- Indices de la tabla `wok_payments`
--
ALTER TABLE `wok_payments`
  ADD PRIMARY KEY (`id_payments`),
  ADD KEY `wok_payments_restaurante_foreign` (`restaurante`),
  ADD KEY `wok_payments_proveedores_foreign` (`proveedores`);

--
-- Indices de la tabla `wok_pedido`
--
ALTER TABLE `wok_pedido`
  ADD PRIMARY KEY (`id_pedido`),
  ADD KEY `wok_pedido_cliente_foreign` (`cliente`),
  ADD KEY `wok_pedido_table_foreign` (`table`),
  ADD KEY `wok_pedido_restaurante_foreign` (`restaurante`);

--
-- Indices de la tabla `wok_person_contable`
--
ALTER TABLE `wok_person_contable`
  ADD PRIMARY KEY (`id_per_con`),
  ADD UNIQUE KEY `wok_person_contable_email_unique` (`email`);

--
-- Indices de la tabla `wok_price`
--
ALTER TABLE `wok_price`
  ADD PRIMARY KEY (`id_price`),
  ADD KEY `wok_price_type_price_foreign` (`type_price`),
  ADD KEY `wok_price_menu_foreign` (`menu`);

--
-- Indices de la tabla `wok_producto`
--
ALTER TABLE `wok_producto`
  ADD PRIMARY KEY (`id_producto`),
  ADD KEY `wok_producto_restaurante_foreign` (`restaurante`);

--
-- Indices de la tabla `wok_proveedores`
--
ALTER TABLE `wok_proveedores`
  ADD PRIMARY KEY (`id_proveedores`),
  ADD KEY `wok_proveedores_restaurante_foreign` (`restaurante`);

--
-- Indices de la tabla `wok_receta`
--
ALTER TABLE `wok_receta`
  ADD PRIMARY KEY (`id_receta`),
  ADD KEY `wok_receta_menu_foreign` (`menu`);

--
-- Indices de la tabla `wok_restaurant`
--
ALTER TABLE `wok_restaurant`
  ADD PRIMARY KEY (`id_restaurant`),
  ADD KEY `wok_restaurant_franquicia_foreign` (`franquicia`);

--
-- Indices de la tabla `wok_stock`
--
ALTER TABLE `wok_stock`
  ADD PRIMARY KEY (`id_stock`),
  ADD KEY `wok_stock_producto_foreign` (`producto`);

--
-- Indices de la tabla `wok_table`
--
ALTER TABLE `wok_table`
  ADD PRIMARY KEY (`id_table`),
  ADD KEY `wok_table_restaurante_foreign` (`restaurante`);

--
-- Indices de la tabla `wok_type_employee`
--
ALTER TABLE `wok_type_employee`
  ADD PRIMARY KEY (`id_type_employee`);

--
-- Indices de la tabla `wok_type_foods`
--
ALTER TABLE `wok_type_foods`
  ADD PRIMARY KEY (`id_type_foods`);

--
-- Indices de la tabla `wok_type_franchise`
--
ALTER TABLE `wok_type_franchise`
  ADD PRIMARY KEY (`id_type_franchise`);

--
-- Indices de la tabla `wok_type_price`
--
ALTER TABLE `wok_type_price`
  ADD PRIMARY KEY (`id_type_price`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `logs`
--
ALTER TABLE `logs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=322;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT de la tabla `wok_administrador`
--
ALTER TABLE `wok_administrador`
  MODIFY `id_administrador` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `wok_admin_employee`
--
ALTER TABLE `wok_admin_employee`
  MODIFY `id_employee` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT de la tabla `wok_banco`
--
ALTER TABLE `wok_banco`
  MODIFY `id_banco` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `wok_bill`
--
ALTER TABLE `wok_bill`
  MODIFY `id_bill` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=119;

--
-- AUTO_INCREMENT de la tabla `wok_certificador`
--
ALTER TABLE `wok_certificador`
  MODIFY `id_certificador` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `wok_cliente`
--
ALTER TABLE `wok_cliente`
  MODIFY `id_cliente` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT de la tabla `wok_complemento`
--
ALTER TABLE `wok_complemento`
  MODIFY `id_complemento` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `wok_conf_fel`
--
ALTER TABLE `wok_conf_fel`
  MODIFY `id_conf_fel` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `wok_contacto`
--
ALTER TABLE `wok_contacto`
  MODIFY `id_contacto` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de la tabla `wok_corte_caja`
--
ALTER TABLE `wok_corte_caja`
  MODIFY `id_corte` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de la tabla `wok_details_bill`
--
ALTER TABLE `wok_details_bill`
  MODIFY `id_details_bill` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=228;

--
-- AUTO_INCREMENT de la tabla `wok_employee`
--
ALTER TABLE `wok_employee`
  MODIFY `id_employee` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT de la tabla `wok_fel_type`
--
ALTER TABLE `wok_fel_type`
  MODIFY `id_fel` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `wok_franchise`
--
ALTER TABLE `wok_franchise`
  MODIFY `id_franchise` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT de la tabla `wok_frases`
--
ALTER TABLE `wok_frases`
  MODIFY `id_frases` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `wok_ingrediente`
--
ALTER TABLE `wok_ingrediente`
  MODIFY `id_ingrediente` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=197;

--
-- AUTO_INCREMENT de la tabla `wok_locations`
--
ALTER TABLE `wok_locations`
  MODIFY `id_locations` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT de la tabla `wok_menu`
--
ALTER TABLE `wok_menu`
  MODIFY `id_menu` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT de la tabla `wok_owner`
--
ALTER TABLE `wok_owner`
  MODIFY `id_owner` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `wok_payments`
--
ALTER TABLE `wok_payments`
  MODIFY `id_payments` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT de la tabla `wok_pedido`
--
ALTER TABLE `wok_pedido`
  MODIFY `id_pedido` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=135;

--
-- AUTO_INCREMENT de la tabla `wok_person_contable`
--
ALTER TABLE `wok_person_contable`
  MODIFY `id_per_con` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `wok_price`
--
ALTER TABLE `wok_price`
  MODIFY `id_price` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT de la tabla `wok_producto`
--
ALTER TABLE `wok_producto`
  MODIFY `id_producto` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `wok_proveedores`
--
ALTER TABLE `wok_proveedores`
  MODIFY `id_proveedores` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `wok_receta`
--
ALTER TABLE `wok_receta`
  MODIFY `id_receta` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT de la tabla `wok_restaurant`
--
ALTER TABLE `wok_restaurant`
  MODIFY `id_restaurant` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `wok_stock`
--
ALTER TABLE `wok_stock`
  MODIFY `id_stock` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `wok_table`
--
ALTER TABLE `wok_table`
  MODIFY `id_table` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT de la tabla `wok_type_employee`
--
ALTER TABLE `wok_type_employee`
  MODIFY `id_type_employee` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `wok_type_foods`
--
ALTER TABLE `wok_type_foods`
  MODIFY `id_type_foods` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `wok_type_franchise`
--
ALTER TABLE `wok_type_franchise`
  MODIFY `id_type_franchise` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `wok_type_price`
--
ALTER TABLE `wok_type_price`
  MODIFY `id_type_price` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `wok_administrador_has_type_franchise`
--
ALTER TABLE `wok_administrador_has_type_franchise`
  ADD CONSTRAINT `wok_administrador_has_type_franchise_administrador_foreign` FOREIGN KEY (`administrador`) REFERENCES `wok_administrador` (`id_administrador`) ON DELETE CASCADE,
  ADD CONSTRAINT `wok_administrador_has_type_franchise_type_franquicia_foreign` FOREIGN KEY (`type_franquicia`) REFERENCES `wok_type_franchise` (`id_type_franchise`) ON DELETE CASCADE;

--
-- Filtros para la tabla `wok_admin_employee`
--
ALTER TABLE `wok_admin_employee`
  ADD CONSTRAINT `wok_admin_employee_banco_foreign` FOREIGN KEY (`banco`) REFERENCES `wok_banco` (`id_banco`) ON DELETE CASCADE,
  ADD CONSTRAINT `wok_admin_employee_empleado_foreign` FOREIGN KEY (`empleado`) REFERENCES `wok_employee` (`id_employee`) ON DELETE CASCADE;

--
-- Filtros para la tabla `wok_bill`
--
ALTER TABLE `wok_bill`
  ADD CONSTRAINT `wok_bill_empleado_foreign` FOREIGN KEY (`empleado`) REFERENCES `wok_employee` (`id_employee`) ON DELETE CASCADE,
  ADD CONSTRAINT `wok_bill_fel_foreign` FOREIGN KEY (`fel`) REFERENCES `wok_fel_type` (`id_fel`) ON DELETE CASCADE,
  ADD CONSTRAINT `wok_bill_pedido_foreign` FOREIGN KEY (`pedido`) REFERENCES `wok_pedido` (`id_pedido`) ON DELETE CASCADE;

--
-- Filtros para la tabla `wok_cliente`
--
ALTER TABLE `wok_cliente`
  ADD CONSTRAINT `wok_cliente_restaurante_foreign` FOREIGN KEY (`restaurante`) REFERENCES `wok_restaurant` (`id_restaurant`) ON DELETE CASCADE;

--
-- Filtros para la tabla `wok_complemento`
--
ALTER TABLE `wok_complemento`
  ADD CONSTRAINT `wok_complemento_bill_foreign` FOREIGN KEY (`bill`) REFERENCES `wok_bill` (`id_bill`) ON DELETE CASCADE;

--
-- Filtros para la tabla `wok_conf_fel`
--
ALTER TABLE `wok_conf_fel`
  ADD CONSTRAINT `wok_conf_fel_certificador_foreign` FOREIGN KEY (`certificador`) REFERENCES `wok_certificador` (`id_certificador`) ON DELETE CASCADE,
  ADD CONSTRAINT `wok_conf_fel_owner_foreign` FOREIGN KEY (`owner`) REFERENCES `wok_owner` (`id_owner`) ON DELETE CASCADE;

--
-- Filtros para la tabla `wok_contacto`
--
ALTER TABLE `wok_contacto`
  ADD CONSTRAINT `wok_contacto_cliente_foreign` FOREIGN KEY (`cliente`) REFERENCES `wok_cliente` (`id_cliente`) ON DELETE CASCADE;

--
-- Filtros para la tabla `wok_corte_caja`
--
ALTER TABLE `wok_corte_caja`
  ADD CONSTRAINT `wok_corte_caja_restaurante_foreign` FOREIGN KEY (`restaurante`) REFERENCES `wok_restaurant` (`id_restaurant`) ON DELETE CASCADE;

--
-- Filtros para la tabla `wok_details_bill`
--
ALTER TABLE `wok_details_bill`
  ADD CONSTRAINT `wok_details_bill_bill_foreign` FOREIGN KEY (`bill`) REFERENCES `wok_bill` (`id_bill`) ON DELETE CASCADE,
  ADD CONSTRAINT `wok_details_bill_empleado_foreign` FOREIGN KEY (`empleado`) REFERENCES `wok_employee` (`id_employee`) ON DELETE CASCADE;

--
-- Filtros para la tabla `wok_employee`
--
ALTER TABLE `wok_employee`
  ADD CONSTRAINT `wok_employee_restaurante_foreign` FOREIGN KEY (`restaurante`) REFERENCES `wok_restaurant` (`id_restaurant`) ON DELETE CASCADE,
  ADD CONSTRAINT `wok_employee_tipo_empleado_foreign` FOREIGN KEY (`tipo_empleado`) REFERENCES `wok_type_employee` (`id_type_employee`) ON DELETE CASCADE;

--
-- Filtros para la tabla `wok_franchise`
--
ALTER TABLE `wok_franchise`
  ADD CONSTRAINT `wok_franchise_owner_foreign` FOREIGN KEY (`owner`) REFERENCES `wok_owner` (`id_owner`) ON DELETE CASCADE,
  ADD CONSTRAINT `wok_franchise_persona_contable_foreign` FOREIGN KEY (`persona_contable`) REFERENCES `wok_person_contable` (`id_per_con`) ON DELETE CASCADE,
  ADD CONSTRAINT `wok_franchise_type_franquicia_foreign` FOREIGN KEY (`type_franquicia`) REFERENCES `wok_type_franchise` (`id_type_franchise`) ON DELETE CASCADE,
  ADD CONSTRAINT `wok_franchise_type_price_foreign` FOREIGN KEY (`type_price`) REFERENCES `wok_type_price` (`id_type_price`) ON DELETE CASCADE;

--
-- Filtros para la tabla `wok_frases`
--
ALTER TABLE `wok_frases`
  ADD CONSTRAINT `wok_frases_fel_foreign` FOREIGN KEY (`fel`) REFERENCES `wok_fel_type` (`id_fel`) ON DELETE CASCADE;

--
-- Filtros para la tabla `wok_ingrediente`
--
ALTER TABLE `wok_ingrediente`
  ADD CONSTRAINT `wok_ingrediente_receta_foreign` FOREIGN KEY (`receta`) REFERENCES `wok_receta` (`id_receta`) ON DELETE CASCADE;

--
-- Filtros para la tabla `wok_locations`
--
ALTER TABLE `wok_locations`
  ADD CONSTRAINT `wok_locations_cliente_foreign` FOREIGN KEY (`cliente`) REFERENCES `wok_cliente` (`id_cliente`) ON DELETE CASCADE;

--
-- Filtros para la tabla `wok_menu`
--
ALTER TABLE `wok_menu`
  ADD CONSTRAINT `wok_menu_type_foods_foreign` FOREIGN KEY (`type_foods`) REFERENCES `wok_type_foods` (`id_type_foods`) ON DELETE CASCADE;

--
-- Filtros para la tabla `wok_menu_has_type_franchise`
--
ALTER TABLE `wok_menu_has_type_franchise`
  ADD CONSTRAINT `wok_menu_has_type_franchise_menu_foreign` FOREIGN KEY (`menu`) REFERENCES `wok_menu` (`id_menu`) ON DELETE CASCADE,
  ADD CONSTRAINT `wok_menu_has_type_franchise_type_franquicia_foreign` FOREIGN KEY (`type_franquicia`) REFERENCES `wok_type_franchise` (`id_type_franchise`) ON DELETE CASCADE;

--
-- Filtros para la tabla `wok_payments`
--
ALTER TABLE `wok_payments`
  ADD CONSTRAINT `wok_payments_proveedores_foreign` FOREIGN KEY (`proveedores`) REFERENCES `wok_proveedores` (`id_proveedores`) ON DELETE CASCADE,
  ADD CONSTRAINT `wok_payments_restaurante_foreign` FOREIGN KEY (`restaurante`) REFERENCES `wok_restaurant` (`id_restaurant`) ON DELETE CASCADE;

--
-- Filtros para la tabla `wok_pedido`
--
ALTER TABLE `wok_pedido`
  ADD CONSTRAINT `wok_pedido_cliente_foreign` FOREIGN KEY (`cliente`) REFERENCES `wok_cliente` (`id_cliente`) ON DELETE CASCADE,
  ADD CONSTRAINT `wok_pedido_restaurante_foreign` FOREIGN KEY (`restaurante`) REFERENCES `wok_restaurant` (`id_restaurant`) ON DELETE CASCADE,
  ADD CONSTRAINT `wok_pedido_table_foreign` FOREIGN KEY (`table`) REFERENCES `wok_table` (`id_table`) ON DELETE CASCADE;

--
-- Filtros para la tabla `wok_price`
--
ALTER TABLE `wok_price`
  ADD CONSTRAINT `wok_price_menu_foreign` FOREIGN KEY (`menu`) REFERENCES `wok_menu` (`id_menu`) ON DELETE CASCADE,
  ADD CONSTRAINT `wok_price_type_price_foreign` FOREIGN KEY (`type_price`) REFERENCES `wok_type_price` (`id_type_price`) ON DELETE CASCADE;

--
-- Filtros para la tabla `wok_producto`
--
ALTER TABLE `wok_producto`
  ADD CONSTRAINT `wok_producto_restaurante_foreign` FOREIGN KEY (`restaurante`) REFERENCES `wok_restaurant` (`id_restaurant`) ON DELETE CASCADE;

--
-- Filtros para la tabla `wok_proveedores`
--
ALTER TABLE `wok_proveedores`
  ADD CONSTRAINT `wok_proveedores_restaurante_foreign` FOREIGN KEY (`restaurante`) REFERENCES `wok_restaurant` (`id_restaurant`) ON DELETE CASCADE;

--
-- Filtros para la tabla `wok_receta`
--
ALTER TABLE `wok_receta`
  ADD CONSTRAINT `wok_receta_menu_foreign` FOREIGN KEY (`menu`) REFERENCES `wok_menu` (`id_menu`) ON DELETE CASCADE;

--
-- Filtros para la tabla `wok_restaurant`
--
ALTER TABLE `wok_restaurant`
  ADD CONSTRAINT `wok_restaurant_franquicia_foreign` FOREIGN KEY (`franquicia`) REFERENCES `wok_franchise` (`id_franchise`) ON DELETE CASCADE;

--
-- Filtros para la tabla `wok_stock`
--
ALTER TABLE `wok_stock`
  ADD CONSTRAINT `wok_stock_producto_foreign` FOREIGN KEY (`producto`) REFERENCES `wok_producto` (`id_producto`) ON DELETE CASCADE;

--
-- Filtros para la tabla `wok_table`
--
ALTER TABLE `wok_table`
  ADD CONSTRAINT `wok_table_restaurante_foreign` FOREIGN KEY (`restaurante`) REFERENCES `wok_restaurant` (`id_restaurant`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
