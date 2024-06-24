-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 24, 2024 at 12:38 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `estore`
--

-- --------------------------------------------------------

--
-- Table structure for table `access`
--

CREATE TABLE `access` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `menu_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `access`
--

INSERT INTO `access` (`id`, `role_id`, `menu_id`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, 1, NULL, '2024-03-08 23:56:49', '2024-03-08 23:56:49'),
(4, 1, 4, NULL, '2024-03-08 23:56:49', '2024-03-08 23:56:49'),
(5, 1, 5, NULL, '2024-03-08 23:56:49', '2024-03-08 23:56:49'),
(6, 2, 1, NULL, '2024-03-08 23:17:19', '2024-03-08 23:17:19'),
(7, 1, 6, NULL, '2024-03-08 23:56:49', '2024-03-08 23:56:49'),
(8, 1, 7, NULL, '2024-03-08 23:56:49', '2024-03-08 23:56:49'),
(9, 1, 8, NULL, '2024-03-08 23:56:49', '2024-03-08 23:56:49'),
(10, 1, 9, NULL, '2024-03-08 23:56:49', '2024-03-08 23:56:49'),
(11, 1, 11, NULL, '2024-03-08 23:56:49', '2024-03-08 23:56:49'),
(12, 1, 12, NULL, '2024-03-08 23:56:49', '2024-03-08 23:56:49'),
(13, 2, 5, NULL, '2024-03-08 23:17:19', '2024-03-08 23:17:19'),
(14, 2, 11, NULL, '2024-03-08 23:17:19', '2024-03-08 23:17:19'),
(15, 2, 12, NULL, '2024-03-08 23:17:19', '2024-03-08 23:17:19'),
(16, 1, 10, NULL, '2024-03-08 23:56:49', '2024-03-08 23:56:49'),
(17, 1, 13, NULL, '2024-03-08 23:56:49', '2024-03-08 23:56:49'),
(18, 1, 14, NULL, '2024-03-08 23:56:49', '2024-03-08 23:56:49'),
(19, 1, 15, NULL, '2024-03-08 23:56:49', '2024-03-08 23:56:49'),
(20, 1, 16, NULL, '2024-03-08 23:56:49', '2024-03-08 23:56:49'),
(21, 1, 17, NULL, '2024-03-08 23:56:49', '2024-03-08 23:56:49'),
(22, 2, 17, NULL, '2024-03-08 23:17:19', '2024-03-08 23:17:19'),
(23, 1, 18, NULL, '2024-03-08 23:56:49', '2024-03-08 23:56:49'),
(24, 2, 18, NULL, '2024-03-08 23:17:19', '2024-03-08 23:17:19'),
(27, 2, 22, NULL, '2024-03-08 23:17:19', '2024-03-08 23:17:19'),
(34, 1, 19, NULL, '2024-03-08 23:56:49', '2024-03-08 23:56:49'),
(35, 1, 20, NULL, '2024-03-08 23:56:49', '2024-03-08 23:56:49'),
(36, 1, 21, NULL, '2024-03-08 23:56:49', '2024-03-08 23:56:49'),
(37, 1, 22, NULL, '2024-03-08 23:56:49', '2024-03-08 23:56:49'),
(56, 4, 1, '2024-03-08 23:16:30', '2024-03-08 23:16:30', NULL),
(57, 4, 5, '2024-03-08 23:16:30', '2024-03-08 23:16:30', NULL),
(58, 4, 11, '2024-03-08 23:16:30', '2024-03-08 23:16:30', NULL),
(59, 4, 12, '2024-03-08 23:16:30', '2024-03-08 23:16:30', NULL),
(60, 4, 17, '2024-03-08 23:16:30', '2024-03-08 23:16:30', NULL),
(61, 4, 18, '2024-03-08 23:16:30', '2024-03-08 23:16:30', NULL),
(62, 4, 19, '2024-03-08 23:16:31', '2024-03-08 23:16:31', NULL),
(63, 4, 20, '2024-03-08 23:16:31', '2024-03-08 23:16:31', NULL),
(64, 4, 21, '2024-03-08 23:16:31', '2024-03-08 23:16:31', NULL),
(65, 4, 22, '2024-03-08 23:16:31', '2024-03-08 23:16:31', NULL),
(66, 2, 1, '2024-03-08 23:17:19', '2024-03-13 23:49:19', '2024-03-13 23:49:19'),
(67, 2, 5, '2024-03-08 23:17:19', '2024-03-13 23:49:19', '2024-03-13 23:49:19'),
(68, 2, 11, '2024-03-08 23:17:20', '2024-03-13 23:49:19', '2024-03-13 23:49:19'),
(69, 2, 12, '2024-03-08 23:17:20', '2024-03-13 23:49:19', '2024-03-13 23:49:19'),
(70, 2, 17, '2024-03-08 23:17:20', '2024-03-13 23:49:19', '2024-03-13 23:49:19'),
(71, 2, 18, '2024-03-08 23:17:20', '2024-03-13 23:49:19', '2024-03-13 23:49:19'),
(72, 2, 19, '2024-03-08 23:17:20', '2024-03-13 23:49:19', '2024-03-13 23:49:19'),
(73, 2, 20, '2024-03-08 23:17:20', '2024-03-13 23:49:19', '2024-03-13 23:49:19'),
(74, 2, 21, '2024-03-08 23:17:20', '2024-03-13 23:49:19', '2024-03-13 23:49:19'),
(75, 2, 22, '2024-03-08 23:17:20', '2024-03-13 23:49:19', '2024-03-13 23:49:19'),
(76, 5, 1, NULL, NULL, NULL),
(77, 5, 10, NULL, NULL, NULL),
(78, 5, 13, NULL, NULL, NULL),
(79, 5, 17, NULL, NULL, NULL),
(80, 5, 18, NULL, NULL, NULL),
(81, 5, 21, NULL, NULL, NULL),
(82, 5, 22, NULL, NULL, NULL),
(83, 5, 4, NULL, NULL, NULL),
(84, 5, 6, NULL, NULL, NULL),
(85, 1, 1, '2024-03-08 23:56:49', '2024-03-09 00:08:16', '2024-03-09 00:08:16'),
(86, 1, 4, '2024-03-08 23:56:49', '2024-03-09 00:08:16', '2024-03-09 00:08:16'),
(87, 1, 6, '2024-03-08 23:56:50', '2024-03-09 00:08:16', '2024-03-09 00:08:16'),
(88, 1, 7, '2024-03-08 23:56:50', '2024-03-09 00:08:16', '2024-03-09 00:08:16'),
(89, 1, 8, '2024-03-08 23:56:50', '2024-03-09 00:08:16', '2024-03-09 00:08:16'),
(90, 1, 9, '2024-03-08 23:56:50', '2024-03-09 00:08:16', '2024-03-09 00:08:16'),
(91, 1, 5, '2024-03-08 23:56:50', '2024-03-09 00:08:16', '2024-03-09 00:08:16'),
(92, 1, 11, '2024-03-08 23:56:50', '2024-03-09 00:08:16', '2024-03-09 00:08:16'),
(93, 1, 12, '2024-03-08 23:56:50', '2024-03-09 00:08:16', '2024-03-09 00:08:16'),
(94, 1, 10, '2024-03-08 23:56:50', '2024-03-09 00:08:16', '2024-03-09 00:08:16'),
(95, 1, 13, '2024-03-08 23:56:50', '2024-03-09 00:08:16', '2024-03-09 00:08:16'),
(96, 1, 14, '2024-03-08 23:56:50', '2024-03-09 00:08:16', '2024-03-09 00:08:16'),
(97, 1, 15, '2024-03-08 23:56:50', '2024-03-09 00:08:16', '2024-03-09 00:08:16'),
(98, 1, 16, '2024-03-08 23:56:50', '2024-03-09 00:08:16', '2024-03-09 00:08:16'),
(99, 1, 17, '2024-03-08 23:56:50', '2024-03-09 00:08:16', '2024-03-09 00:08:16'),
(100, 1, 18, '2024-03-08 23:56:50', '2024-03-09 00:08:16', '2024-03-09 00:08:16'),
(101, 1, 19, '2024-03-08 23:56:50', '2024-03-09 00:08:16', '2024-03-09 00:08:16'),
(102, 1, 20, '2024-03-08 23:56:51', '2024-03-09 00:08:16', '2024-03-09 00:08:16'),
(103, 1, 21, '2024-03-08 23:56:51', '2024-03-09 00:08:16', '2024-03-09 00:08:16'),
(104, 1, 22, '2024-03-08 23:56:51', '2024-03-09 00:08:16', '2024-03-09 00:08:16'),
(105, 1, 23, '2024-03-08 23:56:51', '2024-03-09 00:08:16', '2024-03-09 00:08:16'),
(106, 1, 24, '2024-03-08 23:56:51', '2024-03-09 00:08:16', '2024-03-09 00:08:16'),
(107, 1, 1, '2024-03-09 00:08:16', '2024-03-13 23:48:56', '2024-03-13 23:48:56'),
(108, 1, 4, '2024-03-09 00:08:16', '2024-03-13 23:48:56', '2024-03-13 23:48:56'),
(109, 1, 6, '2024-03-09 00:08:16', '2024-03-13 23:48:56', '2024-03-13 23:48:56'),
(110, 1, 7, '2024-03-09 00:08:16', '2024-03-13 23:48:56', '2024-03-13 23:48:56'),
(111, 1, 8, '2024-03-09 00:08:16', '2024-03-13 23:48:56', '2024-03-13 23:48:56'),
(112, 1, 9, '2024-03-09 00:08:17', '2024-03-13 23:48:56', '2024-03-13 23:48:56'),
(113, 1, 5, '2024-03-09 00:08:17', '2024-03-13 23:48:56', '2024-03-13 23:48:56'),
(114, 1, 11, '2024-03-09 00:08:17', '2024-03-13 23:48:56', '2024-03-13 23:48:56'),
(115, 1, 12, '2024-03-09 00:08:17', '2024-03-13 23:48:56', '2024-03-13 23:48:56'),
(116, 1, 10, '2024-03-09 00:08:17', '2024-03-13 23:48:56', '2024-03-13 23:48:56'),
(117, 1, 13, '2024-03-09 00:08:17', '2024-03-13 23:48:56', '2024-03-13 23:48:56'),
(118, 1, 14, '2024-03-09 00:08:17', '2024-03-13 23:48:56', '2024-03-13 23:48:56'),
(119, 1, 15, '2024-03-09 00:08:17', '2024-03-13 23:48:56', '2024-03-13 23:48:56'),
(120, 1, 16, '2024-03-09 00:08:17', '2024-03-13 23:48:56', '2024-03-13 23:48:56'),
(121, 1, 17, '2024-03-09 00:08:17', '2024-03-13 23:48:56', '2024-03-13 23:48:56'),
(122, 1, 18, '2024-03-09 00:08:17', '2024-03-13 23:48:56', '2024-03-13 23:48:56'),
(123, 1, 19, '2024-03-09 00:08:17', '2024-03-13 23:48:56', '2024-03-13 23:48:56'),
(124, 1, 20, '2024-03-09 00:08:17', '2024-03-13 23:48:56', '2024-03-13 23:48:56'),
(125, 1, 21, '2024-03-09 00:08:17', '2024-03-13 23:48:56', '2024-03-13 23:48:56'),
(126, 1, 22, '2024-03-09 00:08:17', '2024-03-13 23:48:56', '2024-03-13 23:48:56'),
(127, 1, 23, '2024-03-09 00:08:18', '2024-03-13 23:48:56', '2024-03-13 23:48:56'),
(128, 1, 24, '2024-03-09 00:08:18', '2024-03-13 23:48:56', '2024-03-13 23:48:56'),
(129, 1, 25, '2024-03-09 00:08:18', '2024-03-13 23:48:56', '2024-03-13 23:48:56'),
(130, 1, 26, '2024-03-09 00:08:18', '2024-03-13 23:48:56', '2024-03-13 23:48:56'),
(131, 1, 1, '2024-03-13 23:48:56', '2024-03-21 23:43:13', '2024-03-21 23:43:13'),
(132, 1, 4, '2024-03-13 23:48:57', '2024-03-21 23:43:13', '2024-03-21 23:43:13'),
(133, 1, 6, '2024-03-13 23:48:57', '2024-03-21 23:43:13', '2024-03-21 23:43:13'),
(134, 1, 7, '2024-03-13 23:48:57', '2024-03-21 23:43:13', '2024-03-21 23:43:13'),
(135, 1, 8, '2024-03-13 23:48:57', '2024-03-21 23:43:13', '2024-03-21 23:43:13'),
(136, 1, 9, '2024-03-13 23:48:57', '2024-03-21 23:43:13', '2024-03-21 23:43:13'),
(137, 1, 5, '2024-03-13 23:48:58', '2024-03-21 23:43:13', '2024-03-21 23:43:13'),
(138, 1, 11, '2024-03-13 23:48:58', '2024-03-21 23:43:13', '2024-03-21 23:43:13'),
(139, 1, 12, '2024-03-13 23:48:58', '2024-03-21 23:43:13', '2024-03-21 23:43:13'),
(140, 1, 10, '2024-03-13 23:48:58', '2024-03-21 23:43:13', '2024-03-21 23:43:13'),
(141, 1, 13, '2024-03-13 23:48:59', '2024-03-21 23:43:13', '2024-03-21 23:43:13'),
(142, 1, 14, '2024-03-13 23:48:59', '2024-03-21 23:43:13', '2024-03-21 23:43:13'),
(143, 1, 15, '2024-03-13 23:48:59', '2024-03-21 23:43:13', '2024-03-21 23:43:13'),
(144, 1, 16, '2024-03-13 23:48:59', '2024-03-21 23:43:13', '2024-03-21 23:43:13'),
(145, 1, 17, '2024-03-13 23:48:59', '2024-03-21 23:43:13', '2024-03-21 23:43:13'),
(146, 1, 18, '2024-03-13 23:48:59', '2024-03-21 23:43:13', '2024-03-21 23:43:13'),
(147, 1, 19, '2024-03-13 23:48:59', '2024-03-21 23:43:13', '2024-03-21 23:43:13'),
(148, 1, 20, '2024-03-13 23:48:59', '2024-03-21 23:43:13', '2024-03-21 23:43:13'),
(149, 1, 21, '2024-03-13 23:49:00', '2024-03-21 23:43:13', '2024-03-21 23:43:13'),
(150, 1, 22, '2024-03-13 23:49:00', '2024-03-21 23:43:13', '2024-03-21 23:43:13'),
(151, 1, 27, '2024-03-13 23:49:00', '2024-03-21 23:43:13', '2024-03-21 23:43:13'),
(152, 1, 28, '2024-03-13 23:49:00', '2024-03-21 23:43:13', '2024-03-21 23:43:13'),
(153, 1, 29, '2024-03-13 23:49:00', '2024-03-21 23:43:13', '2024-03-21 23:43:13'),
(154, 1, 23, '2024-03-13 23:49:01', '2024-03-21 23:43:13', '2024-03-21 23:43:13'),
(155, 1, 24, '2024-03-13 23:49:01', '2024-03-21 23:43:13', '2024-03-21 23:43:13'),
(156, 1, 25, '2024-03-13 23:49:01', '2024-03-21 23:43:13', '2024-03-21 23:43:13'),
(157, 1, 26, '2024-03-13 23:49:01', '2024-03-21 23:43:13', '2024-03-21 23:43:13'),
(158, 2, 1, '2024-03-13 23:49:19', '2024-03-13 23:49:19', NULL),
(159, 2, 5, '2024-03-13 23:49:19', '2024-03-13 23:49:19', NULL),
(160, 2, 11, '2024-03-13 23:49:19', '2024-03-13 23:49:19', NULL),
(161, 2, 12, '2024-03-13 23:49:19', '2024-03-13 23:49:19', NULL),
(162, 2, 17, '2024-03-13 23:49:19', '2024-03-13 23:49:19', NULL),
(163, 2, 18, '2024-03-13 23:49:19', '2024-03-13 23:49:19', NULL),
(164, 2, 19, '2024-03-13 23:49:20', '2024-03-13 23:49:20', NULL),
(165, 2, 20, '2024-03-13 23:49:20', '2024-03-13 23:49:20', NULL),
(166, 2, 21, '2024-03-13 23:49:20', '2024-03-13 23:49:20', NULL),
(167, 2, 22, '2024-03-13 23:49:20', '2024-03-13 23:49:20', NULL),
(168, 2, 27, '2024-03-13 23:49:20', '2024-03-13 23:49:20', NULL),
(169, 2, 28, '2024-03-13 23:49:20', '2024-03-13 23:49:20', NULL),
(170, 2, 29, '2024-03-13 23:49:20', '2024-03-13 23:49:20', NULL),
(171, 1, 1, '2024-03-21 23:43:14', '2024-03-31 12:01:06', '2024-03-31 12:01:06'),
(172, 1, 4, '2024-03-21 23:43:14', '2024-03-31 12:01:06', '2024-03-31 12:01:06'),
(173, 1, 6, '2024-03-21 23:43:14', '2024-03-31 12:01:06', '2024-03-31 12:01:06'),
(174, 1, 7, '2024-03-21 23:43:14', '2024-03-31 12:01:06', '2024-03-31 12:01:06'),
(175, 1, 8, '2024-03-21 23:43:14', '2024-03-31 12:01:06', '2024-03-31 12:01:06'),
(176, 1, 9, '2024-03-21 23:43:15', '2024-03-31 12:01:06', '2024-03-31 12:01:06'),
(177, 1, 5, '2024-03-21 23:43:15', '2024-03-31 12:01:06', '2024-03-31 12:01:06'),
(178, 1, 11, '2024-03-21 23:43:15', '2024-03-31 12:01:06', '2024-03-31 12:01:06'),
(179, 1, 12, '2024-03-21 23:43:15', '2024-03-31 12:01:06', '2024-03-31 12:01:06'),
(180, 1, 10, '2024-03-21 23:43:15', '2024-03-31 12:01:06', '2024-03-31 12:01:06'),
(181, 1, 13, '2024-03-21 23:43:15', '2024-03-31 12:01:06', '2024-03-31 12:01:06'),
(182, 1, 14, '2024-03-21 23:43:15', '2024-03-31 12:01:06', '2024-03-31 12:01:06'),
(183, 1, 15, '2024-03-21 23:43:15', '2024-03-31 12:01:06', '2024-03-31 12:01:06'),
(184, 1, 16, '2024-03-21 23:43:15', '2024-03-31 12:01:06', '2024-03-31 12:01:06'),
(185, 1, 17, '2024-03-21 23:43:16', '2024-03-31 12:01:06', '2024-03-31 12:01:06'),
(186, 1, 18, '2024-03-21 23:43:16', '2024-03-31 12:01:06', '2024-03-31 12:01:06'),
(187, 1, 19, '2024-03-21 23:43:16', '2024-03-31 12:01:06', '2024-03-31 12:01:06'),
(188, 1, 20, '2024-03-21 23:43:16', '2024-03-31 12:01:06', '2024-03-31 12:01:06'),
(189, 1, 21, '2024-03-21 23:43:16', '2024-03-31 12:01:06', '2024-03-31 12:01:06'),
(190, 1, 22, '2024-03-21 23:43:16', '2024-03-31 12:01:06', '2024-03-31 12:01:06'),
(191, 1, 27, '2024-03-21 23:43:16', '2024-03-31 12:01:06', '2024-03-31 12:01:06'),
(192, 1, 28, '2024-03-21 23:43:16', '2024-03-31 12:01:06', '2024-03-31 12:01:06'),
(193, 1, 29, '2024-03-21 23:43:16', '2024-03-31 12:01:06', '2024-03-31 12:01:06'),
(194, 1, 23, '2024-03-21 23:43:17', '2024-03-31 12:01:06', '2024-03-31 12:01:06'),
(195, 1, 24, '2024-03-21 23:43:17', '2024-03-31 12:01:06', '2024-03-31 12:01:06'),
(196, 1, 25, '2024-03-21 23:43:17', '2024-03-31 12:01:06', '2024-03-31 12:01:06'),
(197, 1, 26, '2024-03-21 23:43:17', '2024-03-31 12:01:06', '2024-03-31 12:01:06'),
(198, 1, 33, '2024-03-21 23:43:17', '2024-03-31 12:01:06', '2024-03-31 12:01:06'),
(199, 1, 34, '2024-03-21 23:43:17', '2024-03-31 12:01:06', '2024-03-31 12:01:06'),
(200, 1, 35, '2024-03-21 23:43:17', '2024-03-31 12:01:06', '2024-03-31 12:01:06'),
(201, 1, 36, '2024-03-21 23:43:17', '2024-03-31 12:01:06', '2024-03-31 12:01:06'),
(202, 1, 1, '2024-03-31 12:01:06', '2024-03-31 12:01:06', NULL),
(203, 1, 4, '2024-03-31 12:01:06', '2024-03-31 12:01:06', NULL),
(204, 1, 6, '2024-03-31 12:01:06', '2024-03-31 12:01:06', NULL),
(205, 1, 7, '2024-03-31 12:01:06', '2024-03-31 12:01:06', NULL),
(206, 1, 8, '2024-03-31 12:01:06', '2024-03-31 12:01:06', NULL),
(207, 1, 9, '2024-03-31 12:01:06', '2024-03-31 12:01:06', NULL),
(208, 1, 5, '2024-03-31 12:01:06', '2024-03-31 12:01:06', NULL),
(209, 1, 11, '2024-03-31 12:01:06', '2024-03-31 12:01:06', NULL),
(210, 1, 12, '2024-03-31 12:01:06', '2024-03-31 12:01:06', NULL),
(211, 1, 10, '2024-03-31 12:01:06', '2024-03-31 12:01:06', NULL),
(212, 1, 13, '2024-03-31 12:01:07', '2024-03-31 12:01:07', NULL),
(213, 1, 14, '2024-03-31 12:01:07', '2024-03-31 12:01:07', NULL),
(214, 1, 15, '2024-03-31 12:01:07', '2024-03-31 12:01:07', NULL),
(215, 1, 16, '2024-03-31 12:01:07', '2024-03-31 12:01:07', NULL),
(216, 1, 17, '2024-03-31 12:01:07', '2024-03-31 12:01:07', NULL),
(217, 1, 18, '2024-03-31 12:01:07', '2024-03-31 12:01:07', NULL),
(218, 1, 19, '2024-03-31 12:01:07', '2024-03-31 12:01:07', NULL),
(219, 1, 20, '2024-03-31 12:01:07', '2024-03-31 12:01:07', NULL),
(220, 1, 21, '2024-03-31 12:01:07', '2024-03-31 12:01:07', NULL),
(221, 1, 22, '2024-03-31 12:01:07', '2024-03-31 12:01:07', NULL),
(222, 1, 27, '2024-03-31 12:01:07', '2024-03-31 12:01:07', NULL),
(223, 1, 28, '2024-03-31 12:01:07', '2024-03-31 12:01:07', NULL),
(224, 1, 29, '2024-03-31 12:01:07', '2024-03-31 12:01:07', NULL),
(225, 1, 23, '2024-03-31 12:01:07', '2024-03-31 12:01:07', NULL),
(226, 1, 24, '2024-03-31 12:01:07', '2024-03-31 12:01:07', NULL),
(227, 1, 25, '2024-03-31 12:01:07', '2024-03-31 12:01:07', NULL),
(228, 1, 26, '2024-03-31 12:01:07', '2024-03-31 12:01:07', NULL),
(229, 1, 33, '2024-03-31 12:01:07', '2024-03-31 12:01:07', NULL),
(230, 1, 34, '2024-03-31 12:01:07', '2024-03-31 12:01:07', NULL),
(231, 1, 35, '2024-03-31 12:01:07', '2024-03-31 12:01:07', NULL),
(232, 1, 36, '2024-03-31 12:01:08', '2024-03-31 12:01:08', NULL),
(233, 1, 37, '2024-03-31 12:01:08', '2024-03-31 12:01:08', NULL),
(234, 1, 38, '2024-03-31 12:01:08', '2024-03-31 12:01:08', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `contactno` bigint(20) UNSIGNED NOT NULL,
  `password` varchar(255) NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `photo` varchar(255) NOT NULL DEFAULT 'admin.png',
  `role_id` bigint(20) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `email`, `contactno`, `password`, `deleted_at`, `created_at`, `updated_at`, `photo`, `role_id`) VALUES
(1, 'sujesh', 'sujesh@gmail.com', 9876543210, '$2y$12$whBA.oIaTO5RWAkapks5P.uZK6STllrZDRPTiRUtd3dSlCVKVZj7y', NULL, '2024-02-14 23:35:01', '2024-02-20 23:42:59', 'admin_1708492378.jpg', 2),
(3, 'Ram', 'ram@gmail.com', 9876543222, '$2y$12$tbd5Wor5Qe2rfLz7VMMIg.xrjd0iUWx94UmxiCWgAAUJZP5/HyX9C', NULL, '2024-02-16 00:53:40', '2024-02-20 23:26:11', 'admin_1708491370.jpg', 2),
(5, 'test123', 'test123@gmail.com', 9876543223, '$2y$12$IBxyA3DqYffeV21sNTGqLOJZSvHenrqaZOx/Hun473qYG4MCRmgze', '2024-02-22 00:44:00', '2024-02-16 00:55:58', '2024-02-22 00:44:00', 'admin.png', 2),
(6, 'test555', 'test555@gmail.com', 9876543255, '$2y$12$Asgak7I71VkB4/PGRpwUlu1RZ0lFVNATli/1hSHKywnR9x4966c8.', NULL, '2024-02-16 00:59:57', '2024-02-20 23:42:03', 'admin_1708492322.jpg', 2),
(7, 'meera', 'meeranair@gmail.com', 9586736475, '$2y$12$pBWIXlhbSn9o4naXBKXI7eZTWp1uB4vE42ou.NnmgihmkwDk7dBzu', '2024-02-22 00:47:10', '2024-02-20 00:45:53', '2024-02-22 00:47:10', 'admin_1708409752.jpg', 2),
(10, 'daya', 'daya@gmail.com', 9586736412, '$2y$12$JSiUkAYo/W8upuIoFUldEeSYc6UOa/sOY5GEvXn/5RMP7wWPekD..', NULL, '2024-02-20 00:47:52', '2024-02-20 23:27:53', 'admin_1708491472.jpg', 2),
(11, 'Test Admin', 'testadm@gmail.com', 9999999990, '$2y$12$19QIYUWSvUH6eEhOhC0lp.h4dfOitG73Yft9pxE5rnJ2MviyKhdWu', NULL, '2024-02-21 01:11:42', '2024-02-22 02:08:05', 'admin.png', 1),
(12, 'mytest', 'mytest@yahoo.com', 9856475821, '$2y$12$HGd0Mpnao8odfyfzun.UY.I1i4ZT5mhWYaCgO6LQGFJ9P33njvBay', NULL, '2024-02-22 00:43:44', '2024-02-22 00:43:44', 'admin.png', 2),
(13, 'jeeva', 'jeeva@gmail.com', 9874561231, '$2y$12$0KBbdoFLnk620KXrpisIA.zj8bnBUiPiNnXXdoElISWbqJlG0vhiK', NULL, '2024-02-22 00:46:44', '2024-02-22 00:46:44', 'admin.png', 2);

-- --------------------------------------------------------

--
-- Table structure for table `banners`
--

CREATE TABLE `banners` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category` varchar(255) NOT NULL,
  `heading` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `active` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `banner_image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `banners`
--

INSERT INTO `banners` (`id`, `category`, `heading`, `description`, `active`, `created_at`, `updated_at`, `banner_image`) VALUES
(6, 'Food & Beverages', '50% OFF  Limited Period Offer', 'Get flat 50% off on all types of food and bevarages. We have wide variety of food items and beverages item. Only limited period offer. Hurry up !!!!', 'No', '2024-03-22 01:07:34', '2024-03-26 00:52:40', 'banner_1711091698.jpg'),
(7, 'Mobiles', 'UP TO 50% OFF', 'Maboriosam in a nesciung eget magnae\r\ndapibus disting tloctio in the find it pereri\r\nodiy maboriosm.', 'Yes', '2024-03-26 00:52:39', '2024-03-26 00:52:39', 'banner_1711434157.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE `brands` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `brand_name` varchar(255) NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`id`, `brand_name`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'Adidas', NULL, '2024-03-09 00:04:12', '2024-03-09 00:20:47'),
(2, 'American Tourister', NULL, '2024-03-09 00:04:26', '2024-03-09 00:04:26'),
(3, 'Rebok', NULL, '2024-03-09 00:04:34', '2024-03-09 00:04:34'),
(4, 'Loreal', NULL, '2024-03-09 00:04:53', '2024-03-09 00:04:53'),
(5, 'Himalaya', NULL, '2024-03-09 00:05:02', '2024-03-09 00:05:02'),
(6, 'Johnsons', '2024-03-09 00:21:02', '2024-03-09 00:05:14', '2024-03-09 00:21:02'),
(7, 'Kitex', NULL, '2024-03-09 00:05:22', '2024-03-09 00:05:22'),
(8, 'Enchanteur', NULL, '2024-03-09 00:05:34', '2024-03-09 00:05:34'),
(9, 'Johnsons', '2024-03-09 00:22:06', '2024-03-09 00:21:55', '2024-03-09 00:22:06'),
(10, 'Samsung', NULL, '2024-03-12 01:58:00', '2024-03-12 01:58:00'),
(11, 'TanishQ', NULL, '2024-03-15 00:05:31', '2024-03-15 00:05:31'),
(12, 'Malabar gold', NULL, '2024-03-15 00:08:13', '2024-03-15 00:08:13'),
(13, 'Pringles', NULL, '2024-03-15 00:10:25', '2024-03-15 00:10:25'),
(14, 'Banarasi', NULL, '2024-03-26 00:00:49', '2024-03-26 00:00:49');

-- --------------------------------------------------------

--
-- Table structure for table `carts`
--

CREATE TABLE `carts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `customer_id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `quantity` bigint(20) UNSIGNED NOT NULL,
  `unit_price` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `total_price` bigint(20) UNSIGNED NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_name` varchar(255) NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `category_name`, `deleted_at`, `remember_token`, `created_at`, `updated_at`) VALUES
(9, 'Kitchen Appliances', NULL, NULL, '2024-03-08 00:15:25', '2024-03-08 00:15:25'),
(10, 'Food & Beverages', NULL, NULL, '2024-03-08 00:15:41', '2024-03-08 00:15:41'),
(11, 'Ornaments', NULL, NULL, '2024-03-08 00:15:52', '2024-03-08 00:15:52'),
(12, 'Furnitures', NULL, NULL, '2024-03-08 00:16:01', '2024-03-08 00:16:01'),
(13, 'Kids Collections', NULL, NULL, '2024-03-08 00:17:03', '2024-03-08 00:17:03'),
(14, 'Clothings', NULL, NULL, '2024-03-08 00:22:46', '2024-03-08 00:22:46'),
(15, 'Mobiles', NULL, NULL, '2024-03-12 01:57:38', '2024-03-12 01:57:38'),
(16, 'Washing Items', NULL, NULL, '2024-03-15 00:01:25', '2024-03-15 00:01:25');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `district` varchar(255) NOT NULL,
  `state` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  `pincode` bigint(20) UNSIGNED NOT NULL,
  `mobile` bigint(20) UNSIGNED NOT NULL,
  `email` varchar(255) NOT NULL,
  `photo` varchar(255) NOT NULL DEFAULT 'no_image.png',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `first_name`, `last_name`, `address`, `district`, `state`, `country`, `pincode`, `mobile`, `email`, `photo`, `created_at`, `updated_at`, `username`, `password`, `deleted_at`) VALUES
(1, 'vhg', 'cxvc', 'guy', 'gg', 'vgv', 'hbjh', 86, 898, 'meera@gmail.com', 'no_image.png', NULL, NULL, 'meera@gmail.com', '$2y$12$FYWCu43.FjEFsWOCD1YgZ.8HGH7DBPGO5MDOxX6Hw7iXVL23wNb8W', NULL),
(2, 'sneha', 'nair', 'sreenilayam,\r\nvadakara,\r\nKozhicode', 'kozhikode', 'kerala', 'india', 652413, 9568412563, 'snehanair@gmail.com', 'no_image.png', NULL, NULL, 'snehanair@gmail.com', '$2y$12$N1W024KlGqrf9PE3JAuCceRNC0O.TraH6fVQ7MmJK.mZ/ZDajAmJK', NULL),
(3, 'Devika', 'Nath', 'Devuss,\r\nbangalore,\r\nKarnataka', 'Bangalore', 'karnataka', 'india', 652365, 9584125478, 'devvss@gmail.com', 'no_image.png', NULL, NULL, 'devvss@gmail.com', '$2y$12$mNeZSOFpFjfj//YBM0yzNO13C1hevF0jO9GG5I01C.DFE9zpJmF3W', NULL),
(5, 'dhanya', 'Nath', 'dhanam,\r\ncalicut', 'kozhikode', 'kerala', 'india', 685698, 7854698574, 'dhanyaaaa@gmail.com', 'customer_1712676242.jpg', NULL, NULL, 'dhanyaaaa@gmail.com', '$2y$12$niefusZItETGGbVALtnn8OiLAjF2XqIPbHPf.PWaOz1t4sPTsYub2', NULL),
(6, 'angel', 'maria', 'Daffodils,\r\nmananthawady,\r\nwayanadu', 'wayanadu', 'kerala', 'india', 652365, 9999999990, 'angelmaria@gmail.com', 'customer_1712816787.jpg', NULL, NULL, 'angelmaria@gmail.com', '$2y$12$2/CVgWC7K/CDSFE7i486ieNAmi0eU2ssVwVjyKlKIROQd.ebgkpFq', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `deals`
--

CREATE TABLE `deals` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `sub_heading` varchar(255) NOT NULL,
  `heading` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `actual_price` bigint(20) UNSIGNED NOT NULL,
  `reduced_price` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) NOT NULL,
  `time_period` datetime NOT NULL,
  `active` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `deals`
--

INSERT INTO `deals` (`id`, `product_id`, `sub_heading`, `heading`, `description`, `actual_price`, `reduced_price`, `image`, `time_period`, `active`, `created_at`, `updated_at`) VALUES
(1, 31, 'DEAL OF THE DAY', 'Gown for Women 70% OFF', 'Satin smooth dark red gown with modern design. Only limited period offer. Hurry up..', 4000, 1200, 'deal_1711908051.jpg', '2024-04-04 05:00:00', 'No', '2024-03-31 12:30:54', '2024-03-31 12:36:37'),
(2, 22, 'DEAL OF THE DAY', 'Trendy Womens Necklace 50% OFF', 'Beautiful Tanishque extra designer necklace with minute works on 50% off. Dont wait, Buy Now.', 2500, 1250, 'deal_1711908397.jpg', '2024-04-30 17:00:00', 'Yes', '2024-03-31 12:36:37', '2024-03-31 12:36:37');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `menus`
--

CREATE TABLE `menus` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `parent_id` bigint(20) UNSIGNED NOT NULL,
  `menu_icon` varchar(255) NOT NULL,
  `menu_route` varchar(255) DEFAULT NULL,
  `menu_type` varchar(255) NOT NULL,
  `menu_class` varchar(255) DEFAULT NULL,
  `menu_warning` varchar(10) NOT NULL DEFAULT 'N',
  `status` tinyint(1) NOT NULL DEFAULT 1 COMMENT '1:Active, 0:Inactive',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `menu_order` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `menus`
--

INSERT INTO `menus` (`id`, `title`, `parent_id`, `menu_icon`, `menu_route`, `menu_type`, `menu_class`, `menu_warning`, `status`, `created_at`, `updated_at`, `deleted_at`, `menu_order`) VALUES
(1, 'Dashboard', 0, 'fas fa-tachometer-alt', 'admin.home', 'navigation', '', 'N', 1, NULL, NULL, NULL, 1),
(4, 'Users', 0, 'fas fa-user', 'admins', 'navigation', NULL, 'N', 1, NULL, NULL, NULL, 10),
(5, 'Sellers', 0, 'fas fa-user', 'seller.report', 'navigation', NULL, 'N', 1, NULL, NULL, NULL, 20),
(6, 'View', 4, 'fas fa-search-plus', 'admin.view', 'actions', 'text-primary', 'N', 1, NULL, NULL, NULL, 2),
(7, 'Edit', 4, 'fas fa-pencil-alt', 'admin.edit', 'actions', 'text-success', 'N', 1, NULL, NULL, NULL, 3),
(8, 'Delete', 4, 'fas fa-trash', 'admin.delete', 'actions', 'text-danger', 'Y', 1, NULL, NULL, NULL, 4),
(9, 'Add', 4, '', 'admin.add', 'button', 'btn btn-primary', 'N', 1, NULL, NULL, NULL, 1),
(10, 'Roles', 0, 'fas fa-users-cog', 'roles', 'navigation', NULL, 'N', 1, NULL, NULL, NULL, 5),
(11, 'Approve', 5, 'fas fa-check-circle', 'seller.approve', 'actions', 'text-success', 'N', 1, NULL, NULL, NULL, 5),
(12, 'Reject', 5, 'fas fa-times-circle', 'seller.reject', 'actions', 'text-danger', 'N', 1, NULL, NULL, NULL, 6),
(13, 'View', 10, 'fas fa-search-plus', 'role.view', 'actions', 'text-primary', 'N', 1, NULL, NULL, NULL, 2),
(14, 'Edit', 10, 'fas fa-pencil-alt', 'role.edit', 'actions', 'text-success', 'N', 1, NULL, NULL, NULL, 3),
(15, 'Delete', 10, 'fas fa-trash', 'role.delete', 'actions', 'text-danger', 'Y', 1, NULL, NULL, NULL, 4),
(16, 'Add', 10, '', 'role.add', 'button', 'btn btn-primary', 'N', 1, NULL, NULL, NULL, 1),
(17, 'Category', 0, 'fas fa-th', 'category.report', 'navigation', NULL, 'N', 1, NULL, NULL, NULL, 5),
(18, 'Add', 17, '', 'category.add', 'button', 'btn btn-primary', 'N', 1, NULL, NULL, NULL, 1),
(19, 'Edit', 17, 'fas fa-pencil-alt', 'category.edit', 'actions', 'text-success', 'N', 1, NULL, NULL, NULL, 3),
(20, 'Delete', 17, 'fas fa-trash', 'category.delete', 'actions', 'text-danger', 'Y', 1, NULL, NULL, NULL, 4),
(21, 'Products', 0, 'fas fa-list', 'products', 'navigation', NULL, 'N', 1, NULL, NULL, NULL, 5),
(22, 'Add', 21, '', 'product.add', 'button', 'btn btn-primary', 'N', 1, NULL, NULL, NULL, 1),
(23, 'Brands', 0, 'fas fa-server', 'brands', 'navigation', NULL, 'N', 1, NULL, NULL, NULL, 5),
(24, 'Add', 23, '', 'brand.add', 'button', 'btn btn-primary', 'N', 1, NULL, NULL, NULL, 1),
(25, 'Edit', 23, 'fas fa-pencil-alt', 'brand.edit', 'actions', 'text-success', 'N', 1, NULL, NULL, NULL, 3),
(26, 'Delete', 23, 'fas fa-trash', 'brand.delete', 'actions', 'text-danger', 'Y', 1, NULL, NULL, NULL, 4),
(27, 'View', 21, 'fas fa-search-plus', 'product.view', 'actions', 'text-primary', 'N', 1, NULL, NULL, NULL, 2),
(28, 'Edit', 21, 'fas fa-pencil-alt', 'product.edit', 'actions', 'text-success', 'N', 1, NULL, NULL, NULL, 3),
(29, 'Delete', 21, 'fas fa-trash', 'product.delete', 'actions', 'text-danger', 'Y', 1, NULL, NULL, NULL, 4),
(33, 'Banners', 0, 'fas fa-list', 'banner.report', 'navigation', NULL, 'N', 1, NULL, NULL, NULL, 5),
(34, 'Add', 33, '', 'banner.add', 'button', 'btn btn-primary', 'N', 1, NULL, NULL, NULL, 1),
(35, 'Edit', 33, 'fas fa-pencil-alt', 'banner.edit', 'actions', 'text-success', 'N', 1, NULL, NULL, NULL, 3),
(36, 'Delete', 33, 'fas fa-trash', 'banner.delete', 'actions', 'text-danger', 'Y', 1, NULL, NULL, NULL, 4),
(37, 'Deals', 0, 'fas fa-list', 'deal.report', 'navigation', NULL, 'N', 1, NULL, NULL, NULL, 5),
(38, 'Add', 37, '', 'deal.add', 'button', 'btn btn-primary', 'N', 1, NULL, NULL, NULL, 1);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2024_02_12_162933_alter_users_table', 2),
(6, '2024_02_13_044636_alter_users_table', 3),
(7, '2024_02_14_053002_create_sellers_table', 4),
(8, '2024_02_14_053602_alter_sellers_table', 5),
(9, '2024_02_14_053741_alter_sellers_table', 6),
(10, '2024_02_14_065943_create_admins_table', 7),
(11, '2024_02_15_054817_alter_admins_table', 8),
(12, '2024_02_15_060341_create_roles_table', 9),
(13, '2024_02_15_060419_alter_admins_table', 10),
(14, '2024_02_15_061350_create_menus_table', 10),
(15, '2024_02_15_061401_create_access_table', 10),
(16, '2024_02_15_062808_alter_menus_table', 11),
(19, '2024_02_21_060629_create_products_table', 12),
(20, '2024_02_22_064508_create_categories_table', 12),
(21, '2024_03_09_052058_create_brands_table', 13),
(22, '2024_03_11_053533_alter_sellers_table', 14),
(23, '2024_03_11_061632_create_products_table', 15),
(24, '2024_03_16_045059_alter_products_table', 16),
(25, '2024_03_16_050248_alter_products_table', 17),
(26, '2024_03_16_054054_alter_products_table', 18),
(27, '2024_03_21_062730_create_banners_table', 19),
(28, '2024_03_22_055016_alter_banners_table', 20),
(29, '2024_03_22_064316_alter_banners_table', 21),
(30, '2024_03_29_051237_create_deals_table', 22),
(31, '2024_04_01_050058_create_carts_table', 23),
(32, '2024_04_01_050936_create_orders_table', 24),
(33, '2024_04_01_055713_create_customers_table', 25),
(34, '2024_04_01_063649_alter_customers_table', 26),
(35, '2024_04_16_052146_alter_orders_table', 27),
(36, '2024_04_16_052841_create_orderitems_table', 28),
(37, '2024_04_16_060227_alter_customers_table', 29);

-- --------------------------------------------------------

--
-- Table structure for table `orderitems`
--

CREATE TABLE `orderitems` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `customer_id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `quantity` varchar(255) NOT NULL,
  `unit_price` bigint(20) UNSIGNED NOT NULL,
  `total_price` bigint(20) UNSIGNED NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `customer_id` bigint(20) UNSIGNED NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `company` bigint(20) NOT NULL,
  `category` bigint(20) NOT NULL,
  `brand` bigint(20) NOT NULL,
  `color_name` varchar(30) DEFAULT NULL,
  `color` varchar(10) DEFAULT NULL,
  `quantity` bigint(20) UNSIGNED NOT NULL,
  `actual_price` bigint(20) UNSIGNED NOT NULL,
  `reduced_price` bigint(20) UNSIGNED NOT NULL,
  `description` text NOT NULL DEFAULT '...',
  `main_image` varchar(255) NOT NULL DEFAULT 'no_image.png',
  `images` varchar(255) NOT NULL DEFAULT 'no_image.png',
  `deleted_at` timestamp NULL DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `Code` bigint(20) UNSIGNED NOT NULL,
  `trending_item` varchar(255) NOT NULL DEFAULT 'No',
  `hot_item` varchar(255) NOT NULL DEFAULT 'No',
  `best_seller` varchar(255) NOT NULL DEFAULT 'No',
  `deal_of_the_day` varchar(255) NOT NULL DEFAULT 'No'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `company`, `category`, `brand`, `color_name`, `color`, `quantity`, `actual_price`, `reduced_price`, `description`, `main_image`, `images`, `deleted_at`, `email_verified_at`, `remember_token`, `created_at`, `updated_at`, `Code`, `trending_item`, `hot_item`, `best_seller`, `deal_of_the_day`) VALUES
(22, 'Necklace', 2, 11, 11, 'Silver', '#898080', 10, 2500, 2300, 'Latest designer Necklace', 'product_1711475220.jpg', 'no_image.png', NULL, NULL, NULL, '2024-03-26 12:17:00', '2024-03-26 12:17:00', 1000, 'Yes', 'Yes', 'No', 'No'),
(23, 'Pattu Saree', 1, 14, 14, 'Red', '#b00303', 25, 5000, 3999, 'Red kanchivaram pure pattu saree', 'product_1711475353.jpg', 'no_image.png', NULL, NULL, NULL, '2024-03-26 12:19:13', '2024-03-26 12:19:13', 1001, 'Yes', 'No', 'Yes', 'No'),
(24, 'Soap', 3, 16, 5, 'Green', '#129801', 50, 75, 60, 'Natural Soap', 'product_1711475437.jpg', 'no_image.png', NULL, NULL, NULL, '2024-03-26 12:20:37', '2024-03-26 12:20:37', 1002, 'No', 'Yes', 'Yes', 'No'),
(25, 'Chain', 2, 11, 12, 'Golden', '#e7b223', 40, 1500, 1400, 'Gold plated designer chain', 'product_1711475537.jpg', 'no_image.png', NULL, NULL, NULL, '2024-03-26 12:22:17', '2024-03-26 12:22:17', 1003, 'Yes', 'No', 'No', 'Yes'),
(26, 'Frock', 3, 13, 14, 'Pink', '#f3bbf7', 15, 700, 650, 'Good material with trendy style', 'product_1711475649.webp', 'no_image.png', NULL, NULL, NULL, '2024-03-26 12:24:09', '2024-03-26 12:24:09', 1005, 'Yes', 'No', 'Yes', 'No'),
(27, 'Mobile Phone', 4, 15, 10, 'yellow', '#fbf665', 10, 30000, 25999, 'Latest Samsung mobile phone', 'product_1711477070.webp', '@@product_1711477070_1.webp@@product_1711477070_2.webp@@', NULL, NULL, NULL, '2024-03-26 12:47:50', '2024-03-26 12:47:50', 1006, 'Yes', 'Yes', 'No', 'Yes'),
(28, 'Georget Saree', 3, 14, 14, 'Black', '#000000', 25, 1200, 999, 'Black saree with red border', 'product_1711477178.jpg', 'no_image.png', NULL, NULL, NULL, '2024-03-26 12:49:38', '2024-03-26 12:49:38', 1007, 'Yes', 'No', 'Yes', 'No'),
(29, 'Necklace', 3, 11, 11, 'Silver', '#e0dcdc', 14, 1800, 1630, 'designer necklace', 'product_1711477358.jpg', 'no_image.png', NULL, NULL, NULL, '2024-03-26 12:52:38', '2024-03-26 12:52:38', 1008, 'Yes', 'No', 'No', 'Yes'),
(30, 'Kurta Set', 1, 13, 14, 'blue', '#230476', 20, 500, 450, 'kurta with pant', 'product_1711477472.jpg', 'no_image.png', NULL, NULL, NULL, '2024-03-26 12:54:32', '2024-03-26 12:54:32', 1009, 'No', 'Yes', 'Yes', 'No'),
(31, 'gown', 2, 14, 14, 'red', '#6e0202', 25, 2000, 1800, 'Dark red designer frock', 'product_1711477586.jpg', 'no_image.png', NULL, NULL, NULL, '2024-03-26 12:56:26', '2024-03-26 12:56:26', 1010, 'Yes', 'Yes', 'No', 'No'),
(32, 'Kids frock', 2, 13, 14, 'Blue', '#bac1f7', 10, 800, 750, 'Light blue frock', 'product_1711477703.jpg', 'no_image.png', NULL, NULL, NULL, '2024-03-26 12:58:23', '2024-03-26 12:58:23', 1011, 'No', 'No', 'Yes', 'Yes');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `role_name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `role_name`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Super Admin', NULL, NULL, NULL),
(2, 'Admin', NULL, NULL, NULL),
(4, 'Accountant', '2024-02-22 02:07:16', '2024-03-08 02:19:47', NULL),
(5, 'Admin Assistant', '2024-03-08 23:19:17', '2024-03-08 23:19:17', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `sellers`
--

CREATE TABLE `sellers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `company` varchar(255) NOT NULL,
  `place` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `pin` bigint(20) UNSIGNED NOT NULL,
  `email` varchar(255) NOT NULL,
  `contactno` bigint(20) UNSIGNED NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL DEFAULT 'Pending',
  `deleted_at` timestamp NULL DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sellers`
--

INSERT INTO `sellers` (`id`, `name`, `company`, `place`, `address`, `pin`, `email`, `contactno`, `username`, `password`, `status`, `deleted_at`, `email_verified_at`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'raju', 'smsss', 'vadakara', 'near petrol pump,\r\nkozhicode', 685214, 'raju@gmail.com', 9526111111, 'raju@gmail.com', '$2y$12$oaFR1Zt1MCemYnz2Bp2kO.u/1dIH/b/rk9fv.qxdlQlNRiXdz/yg.', 'Approved', NULL, NULL, NULL, '2024-03-11 00:22:55', '2024-03-11 00:34:30'),
(2, 'Dany', 'dalesss', 'kattakkada', 'near secretariate,\r\ntrivandrum', 526985, 'dany@gmail.com', 3586123654, 'dany@gmail.com', '$2y$12$Kk5U8stzzd0N1.0F9gSGheL8yJkB7am81mll/POhTxrry5yLnOysW', 'Approved', NULL, NULL, NULL, '2024-03-11 00:25:49', '2024-03-11 00:34:36'),
(3, 'angel', 'ad and company', 'kochi', 'Vyttila,\r\nErnakulam', 652356, 'angelmaria@gmail.com', 9852364125, 'angelmaria@gmail.com', '$2y$12$Kh9DeqffM3MpI7symWtv1uMMRuxh1iYzJQw7Yg9RbSD4KzhOf27IO', 'Approved', NULL, NULL, NULL, '2024-03-11 00:30:01', '2024-03-11 00:34:43'),
(4, 'Flashstar Commerce', 'Flashstar Commerce', 'Banglore', 'Bno-234, Banglore', 650001, 'flashstar@gmail.com', 9898989898, 'flashstar@gmail.com', '9898989898', 'Approved', NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `contactno` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL DEFAULT 'Pending',
  `deleted_at` timestamp NULL DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `fname`, `lname`, `gender`, `email`, `contactno`, `username`, `password`, `status`, `deleted_at`, `email_verified_at`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'meera', 'jasmine', 'female', 'meera@gmail.com', '9876543210', 'meera', '$2y$12$ufKSGK3YT8CTpCwM/duQreOC60m0IqtcwuprHXXXnrh1P7AwWx8n6', 'Pending', NULL, NULL, NULL, '2024-02-12 23:21:55', '2024-02-12 23:21:55'),
(2, 'ganga', 's', 'female', 'ganga@yahoo.com', '9879879879', 'ganga', '$2y$12$0P7NO3Uk0vFYFxaATQp92eegvDB/EqPxBgVCKA4E29Y6JCqVtXFze', 'Pending', NULL, NULL, NULL, '2024-02-12 23:32:34', '2024-02-12 23:32:34'),
(3, 'admin', '123', 'female', 'admin@gmail.com', '9578019283', 'admin', '$2y$12$TjR53ASdXTnDIJenep4WHO9.WAMDQD23AK4s7TFtO2PH/jgdfVnke', 'Pending', NULL, NULL, NULL, '2024-02-12 23:51:45', '2024-02-12 23:51:45'),
(4, 'sourav', 'sharma', 'male', 'sourav@gmail.com', '9578570990', 'sourav', '$2y$12$qBPa6EajRGzADjIgHKJ11epO2lTos8mvpHHkPN69apMExFaVoPNY.', 'Pending', NULL, NULL, NULL, '2024-02-14 01:06:07', '2024-02-14 01:06:07');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `access`
--
ALTER TABLE `access`
  ADD PRIMARY KEY (`id`),
  ADD KEY `access_role_id_foreign` (`role_id`),
  ADD KEY `access_menu_id_foreign` (`menu_id`);

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admins_email_unique` (`email`),
  ADD UNIQUE KEY `admins_contactno_unique` (`contactno`),
  ADD KEY `admins_role_id_foreign` (`role_id`);

--
-- Indexes for table `banners`
--
ALTER TABLE `banners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `carts`
--
ALTER TABLE `carts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `deals`
--
ALTER TABLE `deals`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `menus`
--
ALTER TABLE `menus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orderitems`
--
ALTER TABLE `orderitems`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sellers`
--
ALTER TABLE `sellers`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `sellers_email_unique` (`email`),
  ADD UNIQUE KEY `sellers_contactno_unique` (`contactno`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD UNIQUE KEY `users_contactno_unique` (`contactno`),
  ADD UNIQUE KEY `users_username_unique` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `access`
--
ALTER TABLE `access`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=235;

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `banners`
--
ALTER TABLE `banners`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `carts`
--
ALTER TABLE `carts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `deals`
--
ALTER TABLE `deals`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `menus`
--
ALTER TABLE `menus`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `orderitems`
--
ALTER TABLE `orderitems`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `sellers`
--
ALTER TABLE `sellers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `access`
--
ALTER TABLE `access`
  ADD CONSTRAINT `access_menu_id_foreign` FOREIGN KEY (`menu_id`) REFERENCES `menus` (`id`),
  ADD CONSTRAINT `access_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`);

--
-- Constraints for table `admins`
--
ALTER TABLE `admins`
  ADD CONSTRAINT `admins_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
