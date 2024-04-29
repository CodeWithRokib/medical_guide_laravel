-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jan 25, 2024 at 09:22 AM
-- Server version: 10.5.22-MariaDB-cll-lve
-- PHP Version: 8.1.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `webbysys23_cureways`
--

-- --------------------------------------------------------

--
-- Table structure for table `abouts`
--

CREATE TABLE `abouts` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(5000) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `ambulances`
--

CREATE TABLE `ambulances` (
  `id` int(10) UNSIGNED NOT NULL,
  `division_id` int(10) UNSIGNED NOT NULL,
  `police_station_id` int(10) UNSIGNED NOT NULL,
  `area_id` int(10) UNSIGNED NOT NULL,
  `phone` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 5,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `ambulances`
--

INSERT INTO `ambulances` (`id`, `division_id`, `police_station_id`, `area_id`, `phone`, `name`, `status`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 1, '01716160735', 'Tawhidul', 20, '2023-12-26 05:43:22', '2023-12-26 05:59:49'),
(2, 1, 2, 2, '12356890', 'Test2', 20, '2023-12-26 22:52:51', '2023-12-26 22:53:15'),
(3, 2, 3, 6, '058494984848', 'Kamal', 5, '2023-12-30 18:01:25', '2023-12-30 18:01:25'),
(4, 2, 4, 11, '08499494694949', 'Jamal', 5, '2023-12-30 18:01:53', '2023-12-30 18:01:53'),
(5, 2, 4, 5, '08484994969488', 'Rakib', 5, '2023-12-30 18:02:22', '2023-12-30 18:02:22'),
(6, 5, 4, 3, '+8801847239701', '', 5, '2023-12-30 18:16:37', '2023-12-30 18:16:37'),
(7, 2, 4, 11, '123456', 'Hossain', 20, '2024-01-04 17:44:59', '2024-01-04 17:45:18'),
(8, 5, 4, 8, '208', 'fg', 5, '2024-01-10 19:34:00', '2024-01-10 19:34:00'),
(9, 2, 4, 4, '01445566%%%88', 'Borhan', 5, '2024-01-15 00:39:38', '2024-01-15 00:39:38');

-- --------------------------------------------------------

--
-- Table structure for table `areas`
--

CREATE TABLE `areas` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `areas`
--

INSERT INTO `areas` (`id`, `name`, `created_at`, `updated_at`) VALUES
(3, 'Kajir Dewri', '2023-12-28 16:54:41', '2023-12-30 17:19:25'),
(4, 'Nasirbad', '2023-12-30 17:19:40', '2023-12-30 17:19:40'),
(5, 'Khulshi', '2023-12-30 17:19:47', '2023-12-30 17:19:47'),
(6, 'Bahddarhat', '2023-12-30 17:19:57', '2023-12-30 17:19:57'),
(7, 'Chawkbazar', '2023-12-30 17:20:04', '2023-12-30 17:20:04'),
(8, 'Panchlaish', '2023-12-30 17:20:17', '2023-12-30 17:20:17'),
(9, 'Oxyzen', '2023-12-30 17:20:24', '2023-12-30 17:20:24'),
(10, 'GEC More', '2023-12-30 17:20:35', '2023-12-30 17:20:35'),
(11, 'Lalkhan Bazar', '2023-12-30 17:20:49', '2023-12-30 17:20:49'),
(12, 'Dewanhat', '2023-12-30 17:21:00', '2023-12-30 17:21:00');

-- --------------------------------------------------------

--
-- Table structure for table `ask_doctors`
--

CREATE TABLE `ask_doctors` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `question_user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `question` longtext DEFAULT NULL,
  `ans` longtext DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `ask_doctors`
--

INSERT INTO `ask_doctors` (`id`, `user_id`, `question_user_id`, `question`, `ans`, `created_at`, `updated_at`) VALUES
(1, 10, 8, 'I have a question', 'This is answer', '2023-12-26 22:54:25', '2023-12-26 22:55:24'),
(2, NULL, 12, 'test34', NULL, '2023-12-27 15:15:52', '2023-12-27 15:15:52'),
(3, NULL, 37, 'hi', NULL, '2024-01-04 20:34:47', '2024-01-04 20:34:47');

-- --------------------------------------------------------

--
-- Table structure for table `banners`
--

CREATE TABLE `banners` (
  `id` int(10) UNSIGNED NOT NULL,
  `banner_img` varchar(255) NOT NULL,
  `banner_page_no` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `time` varchar(255) DEFAULT NULL,
  `venue` varchar(255) DEFAULT NULL,
  `subject` varchar(255) DEFAULT NULL,
  `image` text DEFAULT NULL,
  `description` longtext DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `bloodbanks`
--

CREATE TABLE `bloodbanks` (
  `id` int(10) UNSIGNED NOT NULL,
  `division_id` int(10) UNSIGNED NOT NULL,
  `police_station_id` int(10) UNSIGNED NOT NULL,
  `area_id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `blood_group` varchar(255) DEFAULT NULL,
  `rh_fector` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `bloodbanks`
--

INSERT INTO `bloodbanks` (`id`, `division_id`, `police_station_id`, `area_id`, `name`, `phone`, `blood_group`, `rh_fector`, `created_at`, `updated_at`) VALUES
(2, 2, 5, 3, 'Borhan', '0578954rrr8', 'o', '2', '2023-12-27 22:47:43', '2023-12-30 17:30:45'),
(3, 2, 3, 10, 'Jamal', '00008465868885', 'a', '1', '2023-12-30 17:29:35', '2023-12-30 17:29:35'),
(4, 2, 4, 6, 'Kamal', '0875846584984', 'b', '1', '2023-12-30 17:31:00', '2023-12-30 17:31:00'),
(5, 2, 4, 6, 'Faisal', '08849988498840', 'b', '1', '2023-12-30 17:31:21', '2023-12-30 17:31:21'),
(6, 7, 7, 4, 'Hasan', '+88023333367', 'a', '1', '2023-12-30 17:31:48', '2023-12-30 17:31:48'),
(7, 2, 4, 6, 'Rakib', '058488458188', 'o', '1', '2023-12-30 17:31:52', '2023-12-30 17:31:52'),
(8, 2, 5, 7, 'Saiful', '0848498488548', 'a', '1', '2023-12-30 17:32:36', '2023-12-30 17:32:36'),
(9, 2, 3, 4, '', '+8801847239701', NULL, NULL, '2023-12-30 18:16:52', '2023-12-30 18:16:52'),
(10, 2, 3, 4, 'Jabed', '123456689', 'a', '1', '2024-01-04 15:28:48', '2024-01-04 15:28:48'),
(11, 2, 3, 7, 'df', '287', 'a', '1', '2024-01-10 19:19:33', '2024-01-10 19:19:33'),
(12, 2, 3, 7, 'fsf', 'dfsaf', 'a', '1', '2024-01-10 19:21:53', '2024-01-10 19:21:53'),
(13, 2, 3, 7, 'fsf', 'dfsaf', 'a', '1', '2024-01-10 19:21:53', '2024-01-10 19:21:53'),
(14, 2, 3, 7, 'fdaa', 'sfdas', 'a', '1', '2024-01-10 19:24:02', '2024-01-10 19:24:02');

-- --------------------------------------------------------

--
-- Table structure for table `body_trackers`
--

CREATE TABLE `body_trackers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `date` date DEFAULT NULL,
  `body_temperature` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `body_trackers`
--

INSERT INTO `body_trackers` (`id`, `user_id`, `date`, `body_temperature`, `created_at`, `updated_at`) VALUES
(1, 6, '0000-00-00', '98', '2023-12-28 17:32:12', '2023-12-28 17:32:12'),
(2, 37, '0000-00-00', '23423', '2024-01-03 18:07:42', '2024-01-03 18:07:42'),
(3, 37, '0000-00-00', '232', '2024-01-03 18:16:48', '2024-01-03 18:16:48'),
(4, 38, '0000-00-00', '101', '2024-01-04 05:37:15', '2024-01-04 05:37:15'),
(5, 38, '0000-00-00', '22', '2024-01-04 15:55:55', '2024-01-04 15:55:55'),
(6, 37, '0000-00-00', '89F', '2024-01-10 17:09:57', '2024-01-10 17:09:57'),
(7, 37, '0000-00-00', '25.96', '2024-01-12 02:09:19', '2024-01-12 02:09:19'),
(8, 37, '0000-00-00', '25.9 F', '2024-01-12 02:27:14', '2024-01-12 02:27:14'),
(9, 37, '0000-00-00', '258 F', '2024-01-14 21:19:55', '2024-01-14 21:19:55'),
(10, 12, '0000-00-00', '100 F', '2024-01-14 23:40:23', '2024-01-14 23:40:23');

-- --------------------------------------------------------

--
-- Table structure for table `bp_trackers`
--

CREATE TABLE `bp_trackers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `date` date NOT NULL,
  `sysotolic` varchar(255) DEFAULT NULL,
  `diastolic` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `bp_trackers`
--

INSERT INTO `bp_trackers` (`id`, `user_id`, `date`, `sysotolic`, `diastolic`, `created_at`, `updated_at`) VALUES
(1, 3, '0000-00-00', 'test', 'test2', '2023-12-27 04:03:49', '2023-12-27 04:03:49'),
(2, 3, '0000-00-00', 'test', 'test2', '2023-12-27 04:04:05', '2023-12-27 04:04:05'),
(3, 6, '0000-00-00', '120', '80', '2023-12-28 17:30:06', '2023-12-28 17:30:06'),
(4, 6, '0000-00-00', '130', '80', '2023-12-28 17:30:20', '2023-12-28 17:30:20'),
(5, 3, '0000-00-00', 'test', 'test2', '2024-01-01 05:52:09', '2024-01-01 05:52:09'),
(6, 37, '0000-00-00', 'dfg', 'dfg', '2024-01-03 17:55:27', '2024-01-03 17:55:27'),
(7, 37, '0000-00-00', 'dfg', 'dfg', '2024-01-03 17:55:52', '2024-01-03 17:55:52'),
(8, 37, '0000-00-00', 'dfg', 'dfg', '2024-01-03 17:55:52', '2024-01-03 17:55:52'),
(9, 37, '0000-00-00', 'dfg', 'dg', '2024-01-03 17:56:43', '2024-01-03 17:56:43'),
(10, 38, '0000-00-00', '80', '100', '2024-01-04 03:34:36', '2024-01-04 03:34:36'),
(11, 37, '0000-00-00', '423', '4234', '2024-01-04 04:34:34', '2024-01-04 04:34:34'),
(12, 12, '0000-00-00', '149', '110', '2024-01-08 19:26:08', '2024-01-08 19:26:08'),
(13, 12, '0000-00-00', '149', '110', '2024-01-08 19:26:15', '2024-01-08 19:26:15'),
(14, 12, '0000-00-00', '130', '100', '2024-01-08 19:26:38', '2024-01-08 19:26:38'),
(15, 12, '0000-00-00', '130', '100', '2024-01-08 19:26:45', '2024-01-08 19:26:45'),
(16, 12, '0000-00-00', '125', '90', '2024-01-08 19:27:06', '2024-01-08 19:27:06'),
(17, 37, '0000-00-00', '12312', '3123', '2024-01-10 16:27:29', '2024-01-10 16:27:29'),
(18, 37, '0000-00-00', '12312', '3123', '2024-01-10 16:37:40', '2024-01-10 16:37:40'),
(19, 37, '0000-00-00', '12312', '3123', '2024-01-10 16:39:27', '2024-01-10 16:39:27'),
(20, 37, '0000-00-00', '123113', '2312', '2024-01-10 17:10:45', '2024-01-10 17:10:45'),
(21, 37, '0000-00-00', '1231', '231', '2024-01-10 17:12:15', '2024-01-10 17:12:15'),
(22, 37, '0000-00-00', '12', '12', '2024-01-11 05:00:45', '2024-01-11 05:00:45'),
(23, 37, '0000-00-00', '22-23', '25-25', '2024-01-12 04:02:29', '2024-01-12 04:02:29'),
(24, 37, '0000-00-00', '258', '258', '2024-01-14 21:18:22', '2024-01-14 21:18:22'),
(25, 12, '0000-00-00', '150', '100', '2024-01-14 23:37:19', '2024-01-14 23:37:19'),
(26, 12, '0000-00-00', '200', '288', '2024-01-14 23:37:57', '2024-01-14 23:37:57');

-- --------------------------------------------------------

--
-- Table structure for table `cashbooks`
--

CREATE TABLE `cashbooks` (
  `id` int(10) UNSIGNED NOT NULL,
  `invoice_id` int(10) UNSIGNED NOT NULL,
  `expense` int(11) DEFAULT NULL,
  `income` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `certifications`
--

CREATE TABLE `certifications` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `companies`
--

CREATE TABLE `companies` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `consults`
--

CREATE TABLE `consults` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `message` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` int(10) UNSIGNED NOT NULL,
  `phone1` varchar(255) DEFAULT NULL,
  `phone2` varchar(255) DEFAULT NULL,
  `helpline` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `address` varchar(500) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `daily_expenses`
--

CREATE TABLE `daily_expenses` (
  `id` int(10) UNSIGNED NOT NULL,
  `warehouse_id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `expenses_id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `details` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `dieseas`
--

CREATE TABLE `dieseas` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `dieseaspatients`
--

CREATE TABLE `dieseaspatients` (
  `id` int(10) UNSIGNED NOT NULL,
  `patient_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `diet_trackers`
--

CREATE TABLE `diet_trackers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `food_qty` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `diet_trackers`
--

INSERT INTO `diet_trackers` (`id`, `user_id`, `date`, `time`, `food_qty`, `created_at`, `updated_at`) VALUES
(1, 8, '0000-00-00', '00:00:00', '120', '2023-12-26 22:58:00', '2023-12-26 22:58:00'),
(2, 6, '2024-01-25', '02:48:00', '140', '2023-12-27 07:49:11', '2023-12-27 07:49:11'),
(3, 3, '0000-00-00', '12:20:00', '4', '2024-01-01 02:32:47', '2024-01-01 02:32:47'),
(4, 3, '0000-00-00', '12:20:00', '4', '2024-01-01 02:33:01', '2024-01-01 02:33:01'),
(5, 3, '0000-00-00', '12:20:00', '4', '2024-01-01 05:13:49', '2024-01-01 05:13:49'),
(6, 11, '0000-00-00', '12:20:00', '4', '2024-01-03 05:36:08', '2024-01-03 05:36:08'),
(7, 11, '0000-00-00', '12:20:00', '4', '2024-01-03 05:36:42', '2024-01-03 05:36:42'),
(8, 11, '0000-00-00', '12:20:00', '4', '2024-01-03 05:36:55', '2024-01-03 05:36:55'),
(9, 11, '0000-00-00', '12:20:00', '4', '2024-01-03 05:36:58', '2024-01-03 05:36:58'),
(10, 11, '0000-00-00', '12:20:00', '4', '2024-01-03 05:37:00', '2024-01-03 05:37:00'),
(11, 11, '0000-00-00', '12:20:00', '4', '2024-01-03 05:37:02', '2024-01-03 05:37:02'),
(12, 11, '0000-00-00', '12:20:00', '4', '2024-01-03 05:37:19', '2024-01-03 05:37:19'),
(13, 11, '0000-00-00', '12:20:00', '4', '2024-01-03 05:37:26', '2024-01-03 05:37:26'),
(14, 11, '0000-00-00', '12:20:00', '4', '2024-01-03 15:04:29', '2024-01-03 15:04:29'),
(15, 11, '0000-00-00', '12:20:00', '4', '2024-01-03 15:05:14', '2024-01-03 15:05:14'),
(16, 37, '0000-00-00', '01:23:12', '121', '2024-01-03 17:04:02', '2024-01-03 17:04:02'),
(17, 37, '0000-00-00', '01:23:12', '121', '2024-01-03 17:04:16', '2024-01-03 17:04:16'),
(18, 37, '0000-00-00', '01:23:12', '121', '2024-01-03 17:04:16', '2024-01-03 17:04:16'),
(19, 37, '0000-00-00', '00:00:00', 'dfg', '2024-01-03 17:20:15', '2024-01-03 17:20:15'),
(20, 37, '0000-00-00', '00:00:00', 'dfg', '2024-01-03 17:20:17', '2024-01-03 17:20:17'),
(21, 37, '0000-00-00', '00:00:00', 'dfg', '2024-01-03 17:20:24', '2024-01-03 17:20:24'),
(22, 37, '0000-00-00', '00:00:00', 'dfg', '2024-01-03 17:21:34', '2024-01-03 17:21:34'),
(23, 37, '0000-00-00', '00:00:00', 'dfg', '2024-01-03 17:21:34', '2024-01-03 17:21:34'),
(24, 37, '0000-00-00', '00:00:00', 'dfg', '2024-01-03 17:21:39', '2024-01-03 17:21:39'),
(25, 37, '0000-00-00', '00:00:00', 'fssdf', '2024-01-03 17:25:26', '2024-01-03 17:25:26'),
(26, 37, '0000-00-00', '00:00:00', 'fssdf', '2024-01-03 17:28:24', '2024-01-03 17:28:24'),
(27, 37, '0000-00-00', '00:00:00', 'fssdf', '2024-01-03 17:28:24', '2024-01-03 17:28:24'),
(28, 37, '0000-00-00', '00:00:00', 'ert', '2024-01-03 17:30:08', '2024-01-03 17:30:08'),
(29, 37, '0000-00-00', '00:02:31', '121', '2024-01-03 18:13:07', '2024-01-03 18:13:07'),
(30, 37, '0000-00-00', '00:02:31', '121', '2024-01-03 18:14:36', '2024-01-03 18:14:36'),
(31, 37, '0000-00-00', '00:02:31', '121', '2024-01-03 18:14:57', '2024-01-03 18:14:57'),
(32, 37, '0000-00-00', '00:02:31', '121', '2024-01-03 18:14:57', '2024-01-03 18:14:57'),
(33, 37, '0000-00-00', '00:02:31', '121', '2024-01-03 18:15:11', '2024-01-03 18:15:11'),
(34, 37, '0000-00-00', '00:02:31', '121', '2024-01-03 18:15:11', '2024-01-03 18:15:11'),
(35, 37, '0000-00-00', '00:00:12', '121', '2024-01-03 21:01:45', '2024-01-03 21:01:45'),
(36, 38, '0000-00-00', '00:00:12', '12', '2024-01-04 03:33:49', '2024-01-04 03:33:49'),
(37, 11, '0000-00-00', '12:20:00', '4', '2024-01-04 04:39:38', '2024-01-04 04:39:38'),
(38, 45, '0000-00-00', '00:00:00', '120calories', '2024-01-06 04:26:01', '2024-01-06 04:26:01'),
(39, 37, '0000-00-00', '00:00:12', '121', '2024-01-08 18:15:57', '2024-01-08 18:15:57'),
(40, 37, '0000-00-00', '08:23:00', 'dfgdfg', '2024-01-10 01:27:29', '2024-01-10 01:27:29'),
(41, 37, '0000-00-00', '08:23:00', 'This is demo', '2024-01-10 01:28:31', '2024-01-10 01:28:31'),
(42, 37, '0000-00-00', '08:23:00', 'This is demo', '2024-01-10 01:30:54', '2024-01-10 01:30:54'),
(43, 37, '0000-00-00', '23:33:00', 'This is demo', '2024-01-10 01:33:35', '2024-01-10 01:33:35'),
(44, 37, '0000-00-00', '23:45:00', 'Evening Snacks', '2024-01-10 01:46:27', '2024-01-10 01:46:27'),
(45, 37, '0000-00-00', '23:45:00', 'Evening Snacks', '2024-01-10 01:49:13', '2024-01-10 01:49:13'),
(46, 37, '0000-00-00', '23:49:00', 'Breakfast', '2024-01-10 01:50:01', '2024-01-10 01:50:01'),
(47, 37, '0000-00-00', '14:53:00', 'Breakfast', '2024-01-10 01:54:03', '2024-01-10 01:54:03'),
(48, 37, '0000-00-00', '12:56:00', 'Evening Snacks', '2024-01-10 01:56:45', '2024-01-10 01:56:45'),
(49, 37, '0000-00-00', '12:58:00', 'Lunch', '2024-01-10 01:58:19', '2024-01-10 01:58:19'),
(50, 37, '0000-00-00', '21:06:00', 'Lunch', '2024-01-10 02:13:43', '2024-01-10 02:13:43'),
(51, 37, '0000-00-00', '21:25:00', 'Evening Snacks', '2024-01-10 02:25:42', '2024-01-10 02:25:42'),
(52, 37, '0000-00-00', '13:26:00', 'Lunch', '2024-01-10 02:26:55', '2024-01-10 02:26:55'),
(53, 37, '0000-00-00', '13:07:00', '23', '2024-01-11 18:07:20', '2024-01-11 18:07:20'),
(54, 37, '0000-00-00', '16:14:00', '200', '2024-01-14 21:16:48', '2024-01-14 21:16:48'),
(55, 37, '0000-00-00', '16:17:00', '25', '2024-01-14 21:17:11', '2024-01-14 21:17:11'),
(56, 37, '0000-00-00', '16:37:00', '55', '2024-01-14 21:38:01', '2024-01-14 21:38:01'),
(57, 12, '0000-00-00', '15:00:00', '15000', '2024-01-14 23:29:52', '2024-01-14 23:29:52'),
(58, 12, '0000-00-00', '18:30:00', '15000', '2024-01-14 23:30:38', '2024-01-14 23:30:38'),
(59, 46, '0000-00-00', '18:42:00', '50', '2024-01-14 23:42:54', '2024-01-14 23:42:54'),
(60, 37, '0000-00-00', '10:09:00', '3423', '2024-01-23 15:11:50', '2024-01-23 15:11:50');

-- --------------------------------------------------------

--
-- Table structure for table `divisions`
--

CREATE TABLE `divisions` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `divisions`
--

INSERT INTO `divisions` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Dhaka', NULL, NULL),
(2, 'Chittagong', NULL, '2023-12-28 16:50:15'),
(3, 'Sylhet', '2023-12-28 16:50:23', '2023-12-28 16:50:23'),
(4, 'Rajshahi', '2023-12-28 16:50:38', '2023-12-28 16:50:38'),
(5, 'Kulna', '2023-12-28 16:50:47', '2023-12-28 16:50:47'),
(6, 'Rangpur', '2023-12-28 16:50:55', '2023-12-28 16:50:55'),
(7, 'Barishal', '2023-12-28 16:51:42', '2023-12-28 16:51:42'),
(8, 'Mymensingh', '2023-12-28 16:51:57', '2023-12-28 16:51:57');

-- --------------------------------------------------------

--
-- Table structure for table `doctors`
--

CREATE TABLE `doctors` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `hospital_id` int(10) UNSIGNED NOT NULL,
  `specialist_id` int(10) UNSIGNED NOT NULL,
  `description` varchar(255) DEFAULT NULL,
  `gender` tinyint(4) DEFAULT NULL,
  `type` tinyint(4) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `doctors`
--

INSERT INTO `doctors` (`id`, `user_id`, `hospital_id`, `specialist_id`, `description`, `gender`, `type`, `created_at`, `updated_at`) VALUES
(1, 2, 6, 2, 'Details', 1, 2, '2023-12-26 05:37:51', '2023-12-30 17:34:38'),
(2, 3, 6, 2, 'trest', 1, 2, '2023-12-26 05:38:13', '2023-12-30 17:35:47'),
(3, 14, 2, 2, 'Doctor Bangladesh is the largest doctor directory in Bangladesh. Find specialist doctors list in Bangladesh & book an appointment now.', 0, 1, '2023-12-28 16:58:35', '2023-12-28 16:58:35'),
(4, 15, 6, 3, 'Find the list of doctors in Apollo Hospitals Greams Road Chennai Chennai. Book an appointment with Apollo Hospitals and skip the queues.', 0, 2, '2023-12-28 17:01:48', '2023-12-28 17:01:48'),
(5, 36, 9, 3, 'This is details', 0, 1, '2023-12-30 17:33:42', '2023-12-30 17:33:42');

-- --------------------------------------------------------

--
-- Table structure for table `doctor_slots`
--

CREATE TABLE `doctor_slots` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `doctor_id` int(10) UNSIGNED NOT NULL,
  `date` date NOT NULL,
  `slot_from` time NOT NULL,
  `slot_to` time NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 10,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `doctor_slots`
--

INSERT INTO `doctor_slots` (`id`, `doctor_id`, `date`, `slot_from`, `slot_to`, `status`, `created_at`, `updated_at`) VALUES
(1, 1, '2024-01-01', '12:45:00', '12:45:00', 10, '2023-12-30 17:36:52', '2023-12-30 17:36:52'),
(2, 1, '2024-01-01', '12:45:00', '11:45:00', 10, '2023-12-30 17:37:06', '2023-12-30 17:37:06'),
(3, 4, '2024-01-01', '12:45:00', '12:45:00', 10, '2023-12-30 17:37:53', '2023-12-30 17:37:53'),
(4, 4, '2024-01-01', '01:45:00', '02:45:00', 10, '2023-12-30 17:38:14', '2023-12-30 17:38:14'),
(5, 5, '2024-01-01', '11:45:00', '10:45:00', 10, '2023-12-30 17:38:31', '2023-12-30 17:38:31'),
(6, 5, '2024-01-01', '12:45:00', '01:45:00', 10, '2023-12-30 17:38:58', '2023-12-30 17:38:58'),
(7, 4, '2024-01-01', '01:30:00', '01:30:00', 10, '2023-12-30 18:27:38', '2023-12-30 18:27:38'),
(8, 3, '2023-12-31', '01:30:00', '02:30:00', 5, '2023-12-30 18:28:43', '2024-01-15 00:19:56'),
(9, 1, '2023-12-31', '01:30:00', '02:30:00', 5, '2023-12-30 18:29:05', '2023-12-30 18:30:28');

-- --------------------------------------------------------

--
-- Table structure for table `durationvaccines`
--

CREATE TABLE `durationvaccines` (
  `id` int(10) UNSIGNED NOT NULL,
  `type` varchar(255) NOT NULL,
  `does_duration` int(11) NOT NULL,
  `does_number` int(11) NOT NULL,
  `product_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `expenses`
--

CREATE TABLE `expenses` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `glucose_trackers`
--

CREATE TABLE `glucose_trackers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `date` date DEFAULT NULL,
  `time_period` tinyint(4) DEFAULT NULL,
  `test_result` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `glucose_trackers`
--

INSERT INTO `glucose_trackers` (`id`, `user_id`, `date`, `time_period`, `test_result`, `created_at`, `updated_at`) VALUES
(1, 6, '0000-00-00', 1, '5.6', '2023-12-28 17:31:42', '2023-12-28 17:31:42'),
(2, 3, '0000-00-00', 3, 'test', '2024-01-01 05:52:35', '2024-01-01 05:52:35'),
(3, 37, '0000-00-00', 1, 'werew', '2024-01-03 18:07:21', '2024-01-03 18:07:21'),
(4, 37, '0000-00-00', 1, '2342', '2024-01-03 18:46:02', '2024-01-03 18:46:02'),
(5, 38, '0000-00-00', 1, '12', '2024-01-04 15:56:13', '2024-01-04 15:56:13'),
(6, 12, '0000-00-00', 1, '8', '2024-01-08 19:32:02', '2024-01-08 19:32:02'),
(7, 37, '0000-00-00', 1, '1212', '2024-01-10 16:40:26', '2024-01-10 16:40:26'),
(8, 37, '0000-00-00', 1, '1212', '2024-01-10 16:46:19', '2024-01-10 16:46:19'),
(9, 37, '0000-00-00', 2, '1323', '2024-01-10 16:47:02', '2024-01-10 16:47:02'),
(10, 37, '0000-00-00', 2, '12123', '2024-01-10 16:54:34', '2024-01-10 16:54:34'),
(11, 37, '0000-00-00', 2, '6.7', '2024-01-10 17:10:24', '2024-01-10 17:10:24'),
(12, 37, '0000-00-00', 2, '25.6', '2024-01-12 02:29:49', '2024-01-12 02:29:49'),
(13, 37, '0000-00-00', 0, '22.8', '2024-01-12 02:34:27', '2024-01-12 02:34:27'),
(14, 37, '0000-00-00', 0, '25.9', '2024-01-12 02:38:28', '2024-01-12 02:38:28'),
(15, 37, '0000-00-00', 0, '25.9', '2024-01-12 02:42:42', '2024-01-12 02:42:42'),
(16, 37, '0000-00-00', 0, '258', '2024-01-12 02:45:36', '2024-01-12 02:45:36'),
(17, 37, '0000-00-00', 2, '6', '2024-01-12 02:47:04', '2024-01-12 02:47:04'),
(18, 37, '0000-00-00', 22, '22.8 mmol/L', '2024-01-12 03:03:04', '2024-01-12 03:03:04'),
(19, 37, '0000-00-00', 13, '22 mmol/L', '2024-01-12 03:05:12', '2024-01-12 03:05:12'),
(20, 37, '0000-00-00', 4, '22 mmol/L', '2024-01-12 03:07:17', '2024-01-12 03:07:17'),
(21, 37, '0000-00-00', 2, '88 mmol/L', '2024-01-12 03:08:56', '2024-01-12 03:08:56'),
(22, 37, '0000-00-00', 2, '88 mmol/L', '2024-01-12 03:08:56', '2024-01-12 03:08:56'),
(23, 37, '0000-00-00', 2, '88 mmol/L', '2024-01-12 03:08:57', '2024-01-12 03:08:57'),
(24, 37, '0000-00-00', 2, '22 mmol/L', '2024-01-12 03:10:25', '2024-01-12 03:10:25'),
(25, 37, '0000-00-00', 2, '88 mmol/L', '2024-01-12 03:12:10', '2024-01-12 03:12:10'),
(26, 37, '0000-00-00', 16, '258 mmol/L', '2024-01-14 21:18:52', '2024-01-14 21:18:52'),
(27, 37, '0000-00-00', 16, '55 mmol/L', '2024-01-14 21:22:44', '2024-01-14 21:22:44'),
(28, 37, '0000-00-00', 16, '25 mmol/L', '2024-01-14 21:26:03', '2024-01-14 21:26:03'),
(29, 37, '0000-00-00', 2, '25 mmol/L', '2024-01-14 21:26:47', '2024-01-14 21:26:47'),
(30, 37, '0000-00-00', 16, '25 mmol/L', '2024-01-14 21:27:56', '2024-01-14 21:27:56'),
(31, 37, '0000-00-00', 16, '25 mmol/L', '2024-01-14 21:29:29', '2024-01-14 21:29:29'),
(32, 37, '0000-00-00', 16, '25 mmol/L', '2024-01-14 21:31:10', '2024-01-14 21:31:10'),
(33, 37, '0000-00-00', 16, '25 mmol/L', '2024-01-14 21:33:22', '2024-01-14 21:33:22'),
(34, 37, '0000-00-00', 16, '25 mmol/L', '2024-01-14 21:35:31', '2024-01-14 21:35:31'),
(35, 37, '0000-00-00', 16, '55 mmol/L', '2024-01-14 21:37:04', '2024-01-14 21:37:04'),
(36, 12, '0000-00-00', 16, '7.0 mmol/L', '2024-01-14 23:39:19', '2024-01-14 23:39:19'),
(37, 12, '0000-00-00', 15, '8 mmol/L', '2024-01-14 23:39:40', '2024-01-14 23:39:40');

-- --------------------------------------------------------

--
-- Table structure for table `health_profiles`
--

CREATE TABLE `health_profiles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `age` varchar(255) DEFAULT NULL,
  `gender` varchar(55) DEFAULT NULL,
  `height` varchar(255) DEFAULT NULL,
  `weight` varchar(255) DEFAULT NULL,
  `marital` varchar(255) DEFAULT NULL,
  `chief_complain` varchar(255) DEFAULT NULL,
  `prev_disease` varchar(255) DEFAULT NULL,
  `ot_history` varchar(255) DEFAULT NULL,
  `medication` varchar(255) DEFAULT NULL,
  `disabilities` varchar(255) DEFAULT NULL,
  `test_result` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `health_profiles`
--

INSERT INTO `health_profiles` (`id`, `user_id`, `age`, `gender`, `height`, `weight`, `marital`, `chief_complain`, `prev_disease`, `ot_history`, `medication`, `disabilities`, `test_result`, `created_at`, `updated_at`) VALUES
(1, 8, '23', '2', '7', '89', 'Single', 'NO', 'No', 'No', 'No', 'No', '12', '2023-12-26 22:56:19', '2023-12-26 22:56:19'),
(2, 37, '23', '2', '29', 'null', 'null', 'null', 'null', 'null', '534', 'null', 'null', '2024-01-03 19:00:23', '2024-01-04 04:32:34'),
(3, 37, NULL, '2', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-01-03 19:00:47', '2024-01-03 19:00:47'),
(4, 37, NULL, '2', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-01-03 19:02:22', '2024-01-03 19:02:22'),
(5, 38, '12', '1', '12', '23', 'Singel', 'jjkks', 'hjmkll', 'vn', 'bnmm', 'vhjjkkk', '12', '2024-01-04 03:35:38', '2024-01-04 03:35:38'),
(6, 38, '12', '1', '12', '23', 'Singel', 'jjkks', 'hjmkll', 'vn', 'bnmm', 'vhjjkkk', '12', '2024-01-04 03:35:48', '2024-01-04 03:35:48'),
(7, 37, '123', '2', '2312', '123', '123', '1231', '123', '123', '123', '123', '123', '2024-01-04 04:32:58', '2024-01-04 04:32:58'),
(8, 38, '22', '2', '123', '20', 'Single', 'hh', 'jjj', 'nnhh', 'nnnn', 'bbhhh', 'hhj', '2024-01-04 15:55:07', '2024-01-04 15:55:07'),
(9, 45, '12', '1', '12', '123', 'Single', 'ggjkk', 'vnmmm', 'bbmmm', 'bbnnm', 'bbnnn', 'nnnnm', '2024-01-06 04:27:04', '2024-01-06 04:27:22'),
(10, 12, '54', '1', '100', '70', 'maried', NULL, 'na', 'na', 'go', NULL, NULL, '2024-01-14 23:44:16', '2024-01-14 23:44:16'),
(11, 37, '12', '1', '121', '212', 'Unmarried', '121', '12', '12', '21', '12', '121', '2024-01-24 09:01:15', '2024-01-24 09:01:15'),
(12, 37, '232', '1', '2323', '232', 'Married', '23', '2323', '23', '232', '232', '232', '2024-01-24 09:12:16', '2024-01-24 09:12:16');

-- --------------------------------------------------------

--
-- Table structure for table `health_tips`
--

CREATE TABLE `health_tips` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` longtext DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `health_tips`
--

INSERT INTO `health_tips` (`id`, `title`, `description`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Millions of Americans Have Chronic Fatigue Syndrome, CDC Survey Says', 'Until recently, chronic fatigue syndrome (CFS) was considered a rare health condition.\r\n\r\nNow, a new reportTrusted Source from the Centers for Disease Control and Prevention (CDC) shows approximately 1.3% of adults in the United States have chronic fatigue syndrome.\r\n\r\nBased on the current U.S. population of 333 million, 1.3% of that figure equates to 4.3 million Americans.\r\n\r\nThe CDC survey included over 57,000 American adults in 2021 and 2022. They were asked if a healthcare professional diagnosed them with chronic fatigue syndrome and if they still have the illness. About 1.3% of participants answered “yes” to both.\r\n\r\nIn addition, the report shows that cases were more prevalent among women compared to men, and in people ages 50–69. White adults have a greater risk of developing chronic fatigue syndrome compared to Hispanic and Asian adults, according to the survey.\r\n\r\nCases of chronic fatigue syndrome were reduced when households had higher incomes and families lived in rural residences.', '2023_85d360.jpeg', '2023-12-28 15:20:57', '2023-12-28 15:20:57'),
(2, 'What’s the link between COVID and chronic fatigue?', '“It’s typical to see CFS 4–6 months after Covid,” Ostrosky-Zeichner said. “To find out if a patient has chronic fatigue syndrome, it’s a diagnosis of exclusion.”\r\n\r\nOstrosky-Zeichner said he would first rule out any acute complications and damage from COVID in his patients before making a long COVID diagnosis.\r\n\r\nHe explained that some people may experience heart or lung damage from COVID, while others may have underlying health conditions exacerbated by the virus.\r\n\r\n“When we can’t find anything, we conclude it’s long COVID,” Ostrosky-Zeichner said.\r\n\r\nBarshikar explained the cause of long COVID and chronic fatigue syndrome “involves a triggering challenge to the immune system from the viral infection.” He noted that both conditions are common in females.\r\n\r\n“All the symptoms that are seen in CFS are commonly seen in long COVID,” Barshikar said, adding that symptoms may include:\r\n\r\nfatigue\r\nbrain fog\r\nimpaired sleep\r\northostatic intolerance (inability to remain upright)\r\nTreating fatigue in long COVID requires ruling out other common causes of fatigue. According to Barshikar, these may include:\r\n\r\nhormonal imbalance\r\nelectrolyte imbalance\r\nanemia\r\npoor quality sleep\r\ncertain mental health issues\r\n“Detailed history and time sequence of events is important. We can assume that long COVID is causing the fatigue if other causes are ruled out and history clearly suggests that symptoms started post COVID, Barshikar said.”', '2023_879d68.jpeg', '2023-12-28 15:21:51', '2023-12-28 15:21:51'),
(3, 'Why Am I So Tired? 12 Reasons (Plus Solutions)', 'If you’re feeling overly tired or have little energy, you’re not alone.\r\n\r\nFatigue may be caused by simple factors like a lack of sleep or coming down with a cold or the flu. However, it can also be caused by underlying health conditions.\r\n\r\nIn most cases, fatigue can be remedied by lifestyle or dietary modifications, correcting a nutrient deficiency, or treating an underlying medical condition. Still, to improve fatigue, you need to get to the bottom of what’s causing it.\r\n\r\nHere are 12 potential reasons why you’re always tired.', '2023_785ef1.jpeg', '2023-12-28 15:22:43', '2023-12-28 15:22:43');

-- --------------------------------------------------------

--
-- Table structure for table `homepages`
--

CREATE TABLE `homepages` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `video` varchar(255) DEFAULT NULL,
  `description` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `hospitals`
--

CREATE TABLE `hospitals` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `about` varchar(255) NOT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `address` text DEFAULT NULL,
  `location` varchar(255) DEFAULT NULL,
  `division_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `hospitals`
--

INSERT INTO `hospitals` (`id`, `name`, `image`, `about`, `phone`, `address`, `location`, `division_id`, `created_at`, `updated_at`, `email`) VALUES
(2, 'CSCR', '2023_bb404d.jpeg', 'CSCR (Pvt) Ltd. The widely referred to clinical lab service center since 1999 has become the symbol of patient care in terms of precision and accuracy in diagnostic laboratory services round-the-clock. Equipped with most modern and state-of-art equipment ', '01887-656565', '1675/A, CSCR Bhaban, O.R. Nizam Rd, Chattogram 4000', 'Chitttagong', 2, '2023-12-28 15:24:51', '2023-12-28 15:27:34', NULL),
(4, 'Parkview Hospital Ltd.', '2023_a10423.jpeg', 'Parkview Hospital Chittagong is the best and largest private hospital in CTG with ICU, CCU, NICU, PCCU, PICU, HDU, SDU, Dialysis Unit facility. We have also Radiology & imaging service including Digital X-ray, CT Scan, MRI, USG, Endoscopy,...  More\r\nRevie', '01976-022111', '94/103 Katalgong, Chattogram 4000', 'Chitttagong', 2, '2023-12-28 15:29:19', '2023-12-28 15:29:19', NULL),
(5, 'Chittagong Belle Vue Hospital Limited', '2023_c4a275.jpeg', 'Chattogram is located in the southeastern part of Bangladesh and is the second-largest city having a population of 9.50 million. Chattogram has been the industrial hub of the country and deals with over 65% of the country’s total exports and imports. Chat', '+8802333336735', 'Bellevue Hospital, 12/12, Proboktok Hill, O.R. Nizam Road, Panchlaish, Chattogram.', 'Chitttagong', 2, '2023-12-28 15:32:05', '2023-12-28 15:32:05', NULL),
(6, 'Apollo Chennai', '2023_241abc.jpeg', 'Find the list of doctors in Apollo Hospitals Greams Road Chennai Chennai. Book an appointment with Apollo Hospitals and skip the queues.', '0123456789', 'Greams Lane, 21, Greams Rd, Thousand Lights, Chennai, Tamil Nadu 600006, India', 'India', 2, '2023-12-28 17:00:36', '2023-12-28 17:00:36', NULL),
(7, 'Evercare Hospital', '2023_8ac847.png', 'Evercare Hospital Chattogram is the first-ever 470-bed multi-disciplinary super-specialty, tertiary care hospital in Chattogram. It features 24/7 Emergency Department, state of the art ICUs and 27 specialties and subspecialties filling capacity gaps in th', '09612-310663', 'Ononna, Oxygen road, Chattogram', 'Ononna residential area', 2, '2023-12-29 20:27:12', '2023-12-29 20:27:12', NULL),
(8, 'Medical Centre Hospital', '2023_850ce8.jpg', 'The hospital has established in the year 1986, as a comprehensive healthcare system in Chittagong, Bangladesh with an idea to show our concern and commitment to our patients, corporates and referring specialists.', '02-41355611', '953 O.R. Nizam Rd, Chattogram', 'GEC residential area, Chattogram', 2, '2023-12-29 20:31:51', '2023-12-29 20:31:51', NULL),
(9, 'Chattogram Metropolitan Hospital Limited', '2023_437bd2.jpg', 'Chattogram Metropolitan Hospital Limited is a leading private hospital in the Chittagong division. Chattogram Metropolitan Hospital Limited.', '01814-651077', '698, 752 O.R. Nizam Rd, Chattogram 4001', NULL, 2, '2023-12-29 20:36:23', '2023-12-29 20:36:23', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `invoices`
--

CREATE TABLE `invoices` (
  `id` int(10) UNSIGNED NOT NULL,
  `invoice_no` varchar(255) NOT NULL,
  `payment_type` varchar(255) DEFAULT NULL,
  `trxId` varchar(255) DEFAULT NULL,
  `total` int(11) NOT NULL,
  `discount` int(11) DEFAULT NULL,
  `customer_type` int(11) NOT NULL DEFAULT 0,
  `product_type` varchar(255) DEFAULT NULL,
  `supplier_id` int(10) UNSIGNED DEFAULT NULL,
  `patient_id` int(10) UNSIGNED DEFAULT NULL,
  `warehouse_id` int(10) UNSIGNED DEFAULT NULL,
  `user_id` int(10) UNSIGNED DEFAULT NULL,
  `note` varchar(5000) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `custom_date` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `media`
--

CREATE TABLE `media` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL,
  `uuid` char(36) DEFAULT NULL,
  `collection_name` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `file_name` varchar(255) NOT NULL,
  `mime_type` varchar(255) DEFAULT NULL,
  `disk` varchar(255) NOT NULL,
  `conversions_disk` varchar(255) DEFAULT NULL,
  `size` bigint(20) UNSIGNED NOT NULL,
  `manipulations` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`manipulations`)),
  `custom_properties` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`custom_properties`)),
  `generated_conversions` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`generated_conversions`)),
  `responsive_images` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`responsive_images`)),
  `order_column` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `media`
--

INSERT INTO `media` (`id`, `model_type`, `model_id`, `uuid`, `collection_name`, `name`, `file_name`, `mime_type`, `disk`, `conversions_disk`, `size`, `manipulations`, `custom_properties`, `generated_conversions`, `responsive_images`, `order_column`, `created_at`, `updated_at`) VALUES
(2, 'App\\Models\\User', 7, 'f66342ad-142c-464a-bb53-90ee58d26c4f', 'nid_back', 'nid_back', 'nid_back.jpg', 'image/png', 'public', 'public', 1379271, '[]', '[]', '[]', '[]', 1, '2023-12-26 22:50:10', '2023-12-26 22:50:10'),
(4, 'App\\Models\\User', 9, '48d75902-4d7e-49ef-b44e-570b7edef8b2', 'nid_back', 'nid_back', 'nid_back.jpg', 'image/png', 'public', 'public', 1379271, '[]', '[]', '[]', '[]', 2, '2023-12-26 22:52:28', '2023-12-26 22:52:28'),
(6, 'App\\Models\\User', 10, 'ae157a2a-6c71-4a11-a5b5-69f727b8a9e2', 'nid_back', 'nid_back', 'nid_back.jpg', 'image/png', 'public', 'public', 1379271, '[]', '[]', '[]', '[]', 3, '2023-12-26 22:55:10', '2023-12-26 22:55:10'),
(7, 'App\\Models\\User', 2, '6eeee4fc-0c86-401d-8826-af720c5f99b1', 'user', 'download (6)', 'download-(6).jpeg', 'image/jpeg', 'public', 'public', 3767, '[]', '[]', '[]', '[]', 4, '2023-12-30 17:34:38', '2023-12-30 17:34:38'),
(8, 'App\\Models\\User', 3, 'ba414d26-560f-42f3-bd45-a78105f3c12d', 'user', 'download (6)', 'download-(6).jpeg', 'image/jpeg', 'public', 'public', 3767, '[]', '[]', '[]', '[]', 5, '2023-12-30 17:35:47', '2023-12-30 17:35:47'),
(10, 'App\\Models\\User', 37, 'c593a226-dadd-4ae5-8526-f15a101df640', 'nid_back', 'nid_back', 'nid_back.jpg', 'image/jpeg', 'public', 'public', 45219, '[]', '[]', '[]', '[]', 6, '2024-01-01 14:55:07', '2024-01-01 14:55:07'),
(12, 'App\\Models\\User', 39, '75380515-9587-48cc-be4d-460b4d9ab296', 'nid_back', 'nid_back', 'nid_back.jpg', 'image/jpeg', 'public', 'public', 45185, '[]', '[]', '[]', '[]', 7, '2024-01-04 05:20:53', '2024-01-04 05:20:53'),
(14, 'App\\Models\\User', 40, '2b42074b-0ac5-45eb-b106-7cf26c1ff1ff', 'nid_back', 'nid_back', 'nid_back.jpg', 'image/jpeg', 'public', 'public', 249264, '[]', '[]', '[]', '[]', 8, '2024-01-04 17:34:58', '2024-01-04 17:34:58'),
(16, 'App\\Models\\User', 41, 'f6c91946-e2cd-4504-9188-300f47e6e47e', 'nid_back', 'nid_back', 'nid_back.jpg', 'image/jpeg', 'public', 'public', 249264, '[]', '[]', '[]', '[]', 9, '2024-01-04 17:42:16', '2024-01-04 17:42:16'),
(18, 'App\\Models\\User', 42, '46b2bdf8-7b55-401b-8d42-30576e4c3948', 'nid_back', 'nid_back', 'nid_back.jpg', 'image/jpeg', 'public', 'public', 249264, '[]', '[]', '[]', '[]', 10, '2024-01-04 17:44:01', '2024-01-04 17:44:01'),
(20, 'App\\Models\\User', 43, '5a438a54-d06a-4147-a195-0df636df31d7', 'nid_back', 'nid_back', 'nid_back.jpg', 'image/jpeg', 'public', 'public', 249264, '[]', '[]', '[]', '[]', 11, '2024-01-04 17:46:30', '2024-01-04 17:46:30');

-- --------------------------------------------------------

--
-- Table structure for table `medicine_trackers`
--

CREATE TABLE `medicine_trackers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(1, '2018_11_14_063828_create_warehouses_table', 1),
(2, '2018_11_14_064412_create_roles_table', 1),
(3, '2018_11_14_064415_create_permissions_table', 1),
(4, '2018_11_14_064425_create_users_table', 1),
(5, '2018_11_14_064426_create_password_resets_table', 1),
(6, '2018_11_14_064466_create_permission_role_table', 1),
(7, '2018_11_14_064477_pivot_permission_role_table', 1),
(8, '2018_11_14_064478_create_role_user_table', 1),
(9, '2018_11_14_064481_pivot_role_user_table', 1),
(10, '2018_11_17_090940_create_dieseas_table', 1),
(11, '2018_11_18_085952_create_products_table', 1),
(12, '2018_11_19_060721_create_divisions_table', 1),
(13, '2018_11_19_060751_create_hospitals_table', 1),
(14, '2018_11_19_111804_create_certifications_table', 1),
(15, '2018_11_19_114508_create_sub_certifications_table', 1),
(16, '2018_11_19_115626_foreign_subcertification_certification', 1),
(17, '2018_11_20_053456_create_specialists_table', 1),
(18, '2018_11_20_053544_create_doctors_table', 1),
(19, '2018_11_24_045934_create_duration_vaccines_table', 1),
(20, '2018_11_24_050420_foreign_durationvaccine_vaccine', 1),
(21, '2018_11_24_065745_create_patients_table', 1),
(22, '2018_11_24_070059_create_dieseas_patients_table', 1),
(23, '2018_11_24_070229_foreign_dieseaspatient', 1),
(24, '2018_11_25_111396_create_companies_table', 1),
(25, '2018_11_25_111397_create_suppliers_table', 1),
(26, '2018_11_25_111540_create_invoices_table', 1),
(27, '2018_11_25_111541_foreign_invoice_supplier_patient', 1),
(28, '2018_11_25_111542_create_purchases_table', 1),
(29, '2018_11_25_111543_foreign_purchase_invoice_product_company', 1),
(30, '2018_11_27_104202_create_cash_books_table', 1),
(31, '2018_12_03_041207_create_blood_banks_table', 1),
(32, '2018_12_03_041645_foreign_blood_division', 1),
(33, '2018_12_10_083735_create_ambulances_table', 1),
(34, '2018_12_11_040408_create_pharmacies_table', 1),
(35, '2018_12_18_034223_create_sales_table', 1),
(36, '2018_12_18_035206_foreign_sales_corporate_invoice', 1),
(37, '2018_12_20_033602_create_services_table', 1),
(38, '2018_12_20_041932_create_abouts_table', 1),
(39, '2018_12_20_054228_create_contacts_table', 1),
(40, '2018_12_20_062829_create_consults_table', 1),
(41, '2019_01_27_074029_seed_permissions_table', 1),
(42, '2019_01_27_114258_seed_roles_table', 1),
(43, '2019_01_27_114259_seed_user_table', 1),
(44, '2019_01_27_114353_seed_role_user_table', 1),
(45, '2019_01_27_114443_seed_permission_role_table', 1),
(46, '2019_02_06_053122_foreign_users_patients', 1),
(47, '2019_02_13_122509_create_expenses_table', 1),
(48, '2019_02_14_051213_create_daily_expenses_table', 1),
(49, '2019_02_14_052804_foreign_daily_expenses_users_warehouses_expenses', 1),
(50, '2019_02_24_110501_create_product_transfers_table', 1),
(51, '2019_02_26_121133_foriegn_divisions_hospitals', 1),
(52, '2019_02_27_091316_foreign_product_transfers_products_table', 1),
(53, '2019_03_13_070734_create_homepages_table', 1),
(54, '2019_03_13_105445_create_wishlists_table', 1),
(55, '2019_05_14_080942_add__custom_date_column_at_invoices', 1),
(56, '2019_05_19_090255_add_column_custom_date_at_sales', 1),
(57, '2019_05_22_053846_create_banners_table', 1),
(58, '2019_06_01_084255_add_custom_date_in_purchases', 1),
(59, '2019_08_07_174731_create_sections_table', 1),
(60, '2019_08_08_152736_add_hospital_id_at_specialists', 1),
(61, '2019_08_08_152847_foreign_hospital_id_at_specialists', 1),
(62, '2019_09_19_100250_create_blogs_table', 1),
(63, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(64, '2023_05_18_004347_create_police_stations_table', 1),
(65, '2023_05_20_141327_create_areas_table', 1),
(66, '2023_05_20_155234_alter_police_station_id_blood_banks', 1),
(67, '2023_05_28_205505_create_virtuallabs_table', 1),
(68, '2023_05_29_211343_create_overseas_treatments_table', 1),
(69, '2023_05_31_233414_add_hospital_coloumn_to__hospitals_table', 1),
(70, '2023_06_24_233330_create_health_tips_table', 1),
(71, '2023_06_26_003009_create_vaccine_orders_table', 1),
(72, '2023_09_24_172402_create_media_table', 1),
(73, '2023_11_11_064113_create_doctor_slots_table', 1),
(74, '2023_11_14_132225_create_slot_bookings_table', 1),
(75, '2023_12_05_023453_create_health_profiles_table', 1),
(76, '2023_12_05_214740_create_ask_doctors_table', 1),
(77, '2023_12_06_025933_create_diet_trackers_table', 1),
(78, '2023_12_06_025956_create_medicine_trackers_table', 1),
(79, '2023_12_06_030024_create_bp_trackers_table', 1),
(80, '2023_12_06_030047_create_glucose_trackers_table', 1),
(81, '2023_12_06_030120_create_body_trackers_table', 1),
(82, '2023_12_06_030152_create_weight_trackers_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `overseas_treatments`
--

CREATE TABLE `overseas_treatments` (
  `id` int(10) UNSIGNED NOT NULL,
  `division_id` int(10) UNSIGNED NOT NULL,
  `police_station_id` int(10) UNSIGNED NOT NULL,
  `area_id` int(10) UNSIGNED NOT NULL,
  `type` tinyint(4) NOT NULL,
  `name` varchar(255) NOT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 5,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `overseas_treatments`
--

INSERT INTO `overseas_treatments` (`id`, `division_id`, `police_station_id`, `area_id`, `type`, `name`, `phone`, `status`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 1, 3, 'Tawhidul', '01716160735', 20, '2023-12-26 05:43:15', '2023-12-26 22:50:44'),
(2, 1, 1, 1, 1, 'Test1', '123455789', 5, '2023-12-26 22:51:19', '2023-12-26 22:51:19'),
(3, 2, 3, 6, 3, 'Jamal', '084964949949', 5, '2023-12-30 18:03:33', '2023-12-30 18:03:33'),
(4, 2, 5, 7, 2, 'Kamal', '840649949018456', 5, '2023-12-30 18:03:59', '2023-12-30 18:03:59'),
(5, 1, 3, 4, 2, 'New Test', '123456789', 5, '2023-12-30 18:14:31', '2023-12-30 18:14:31'),
(6, 2, 5, 9, 1, 'chy', '123456', 5, '2024-01-04 17:42:47', '2024-01-04 17:42:47'),
(7, 2, 5, 9, 1, 'chy', '123456', 5, '2024-01-04 17:42:48', '2024-01-04 17:42:48'),
(8, 1, 3, 7, 1, 'Zubair', '01732', 5, '2024-01-10 19:03:44', '2024-01-10 19:03:44'),
(9, 2, 3, 6, 2, 'rasr', '254', 5, '2024-01-10 19:34:24', '2024-01-10 19:34:24'),
(10, 2, 3, 4, 1, 'borhan', '0177777866', 5, '2024-01-14 23:58:15', '2024-01-14 23:58:15'),
(11, 2, 3, 4, 1, 'borhan', '0177777866', 5, '2024-01-14 23:58:15', '2024-01-14 23:58:15'),
(12, 2, 3, 4, 1, 'borhan', '0177777866', 5, '2024-01-14 23:58:16', '2024-01-14 23:58:16');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `patients`
--

CREATE TABLE `patients` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED DEFAULT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `father` varchar(255) DEFAULT NULL,
  `mother` varchar(255) DEFAULT NULL,
  `gender` varchar(255) DEFAULT NULL,
  `dob` varchar(255) DEFAULT NULL,
  `age` int(11) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `telephone` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `permission_key` text DEFAULT NULL,
  `label_id` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`id`, `name`, `permission_key`, `label_id`, `created_at`, `updated_at`) VALUES
(1, 'View User', 'UserManagement/user-create', 1, '2023-12-26 05:30:23', '2023-12-26 05:30:23'),
(2, 'Add User', 'UserManagement/user-store', 1, '2023-12-26 05:30:23', '2023-12-26 05:30:23'),
(3, 'Update User', 'UserManagement/update-user', 1, '2023-12-26 05:30:23', '2023-12-26 05:30:23'),
(4, 'Delete User', 'UserManagement/erase', 1, '2023-12-26 05:30:23', '2023-12-26 05:30:23'),
(5, 'View Role', 'UserManagement/role-view', 2, '2023-12-26 05:30:23', '2023-12-26 05:30:23'),
(6, 'Add Role', 'UserManagement/role-create', 2, '2023-12-26 05:30:23', '2023-12-26 05:30:23'),
(7, 'Update Role', 'UserManagement/update-role', 2, '2023-12-26 05:30:23', '2023-12-26 05:30:23'),
(8, 'Delete Role', 'UserManagement/role/erase', 2, '2023-12-26 05:30:23', '2023-12-26 05:30:23'),
(9, 'View Company', 'CompanyManagement/company', 3, '2023-12-26 05:30:23', '2023-12-26 05:30:23'),
(10, 'Add Company', 'CompanyManagement/company', 3, '2023-12-26 05:30:23', '2023-12-26 05:30:23'),
(11, 'Update Company', 'CompanyManagement/update', 3, '2023-12-26 05:30:23', '2023-12-26 05:30:23'),
(12, 'Delete Company', 'CompanyManagement/erase', 3, '2023-12-26 05:30:23', '2023-12-26 05:30:23'),
(13, 'View Supplier', 'SupplierManagement/supplier', 4, '2023-12-26 05:30:23', '2023-12-26 05:30:23'),
(14, 'Add Supplier', 'SupplierManagement/supplier', 4, '2023-12-26 05:30:23', '2023-12-26 05:30:23'),
(15, 'Update Supplier', 'SupplierManagement/update', 4, '2023-12-26 05:30:23', '2023-12-26 05:30:23'),
(16, 'Delete Supplier', 'SupplierManagement/supplier/erase', 4, '2023-12-26 05:30:23', '2023-12-26 05:30:23'),
(17, 'View Vaccine', 'ProductManagement/vaccine', 5, '2023-12-26 05:30:23', '2023-12-26 05:30:23'),
(18, 'Add Vaccine', 'ProductManagement/save-vaccine', 5, '2023-12-26 05:30:23', '2023-12-26 05:30:23'),
(19, 'Update Vaccine', 'ProductManagement/update', 5, '2023-12-26 05:30:23', '2023-12-26 05:30:23'),
(20, 'Delete Vaccine', 'ProductManagement/erase', 5, '2023-12-26 05:30:23', '2023-12-26 05:30:23'),
(21, 'View Health Product', 'ProductManagement/view-other-product', 6, '2023-12-26 05:30:23', '2023-12-26 05:30:23'),
(22, 'Add Health Product', 'ProductManagement/save-other-product', 6, '2023-12-26 05:30:23', '2023-12-26 05:30:23'),
(23, 'Update Health Product', 'ProductManagement/update-otherproduct', 6, '2023-12-26 05:30:23', '2023-12-26 05:30:23'),
(24, 'Delete Health Product', 'ProductManagement/erase-otherproduct', 6, '2023-12-26 05:30:23', '2023-12-26 05:30:23'),
(25, 'View Vaccine Purchase', 'PurchaseManagement/view-purchase', 7, '2023-12-26 05:30:23', '2023-12-26 05:30:23'),
(26, 'Add Vaccine Purchase', 'PurchaseManagement/purchase', 7, '2023-12-26 05:30:23', '2023-12-26 05:30:23'),
(27, 'View Health Product Purchase', 'PurchaseManagement/view-other-product-purchase', 8, '2023-12-26 05:30:23', '2023-12-26 05:30:23'),
(28, 'Add Health Product Purchase', 'PurchaseManagement/add-other-pro-purchase', 8, '2023-12-26 05:30:23', '2023-12-26 05:30:23'),
(29, 'Stock', 'StockManagement/vaccine-stock', 9, '2023-12-26 05:30:23', '2023-12-26 05:30:23'),
(30, 'Sale Vaccine', 'PatientManagement/vaccie-apply', 10, '2023-12-26 05:30:23', '2023-12-26 05:30:23'),
(31, 'Sale Health Product', 'PatientManagement/sell-other-product', 10, '2023-12-26 05:30:23', '2023-12-26 05:30:23'),
(32, 'Product Transfer', 'TransferManagement/vaccine-transfer', 11, '2023-12-26 05:30:23', '2023-12-26 05:30:23'),
(33, 'Product Transfer History', 'TransferManagement/vaccine-transfer-history', 11, '2023-12-26 05:30:23', '2023-12-26 05:30:23'),
(34, 'Sale/Purchase Invoice', 'InvoiceManagement/all-purchase-report', 12, '2023-12-26 05:30:23', '2023-12-26 05:30:23'),
(35, 'All Dues', 'InvoiceManagement/dueinvoice', 12, '2023-12-26 05:30:23', '2023-12-26 05:30:23'),
(36, 'All Money Reciepts', 'InvoiceManagement/money-receipt', 12, '2023-12-26 05:30:23', '2023-12-26 05:30:23'),
(37, 'View Expense Category', 'ExpenseManagement/expense-management', 13, '2023-12-26 05:30:23', '2023-12-26 05:30:23'),
(38, 'Add Expense Category', 'ExpenseManagement/expense-management', 13, '2023-12-26 05:30:23', '2023-12-26 05:30:23'),
(39, 'View Expense', 'ExpenseManagement/daily-expenses', 13, '2023-12-26 05:30:23', '2023-12-26 05:30:23'),
(40, 'Add Expense', 'ExpenseManagement/daily-expenses', 13, '2023-12-26 05:30:23', '2023-12-26 05:30:23'),
(41, 'Sale / Purchase Report', 'ReportManagement/purchase-report', 14, '2023-12-26 05:30:23', '2023-12-26 05:30:23'),
(42, 'Customer / Supplier Report', 'ReportManagement/customer-supplier-report', 14, '2023-12-26 05:30:23', '2023-12-26 05:30:23'),
(43, 'Profit Report', 'ReportManagement/profit-report', 14, '2023-12-26 05:30:23', '2023-12-26 05:30:23'),
(44, 'Daily Profit / Loss Report', 'ReportManagement/daily-profit-report', 14, '2023-12-26 05:30:23', '2023-12-26 05:30:23'),
(45, 'Expense Report', 'ReportManagement/office-expanses-report', 14, '2023-12-26 05:30:23', '2023-12-26 05:30:23'),
(46, 'View Hospital', 'HospitalManagement/hospital', 15, '2023-12-26 05:30:23', '2023-12-26 05:30:23'),
(47, 'Add Hospital', 'HospitalManagement/hospital', 15, '2023-12-26 05:30:23', '2023-12-26 05:30:23'),
(48, 'Update Hospital', 'HospitalManagement/update', 15, '2023-12-26 05:30:23', '2023-12-26 05:30:23'),
(49, 'Delete Hospital', 'HospitalManagement/erase', 15, '2023-12-26 05:30:23', '2023-12-26 05:30:23'),
(50, 'View Doctor', 'DoctorManagement/all-doctor', 16, '2023-12-26 05:30:23', '2023-12-26 05:30:23'),
(51, 'Add Doctor', 'DoctorManagement/doctor', 16, '2023-12-26 05:30:23', '2023-12-26 05:30:23'),
(52, 'Update Doctor', 'DoctorManagement/update', 16, '2023-12-26 05:30:23', '2023-12-26 05:30:23'),
(53, 'Delete Doctor', 'DoctorManagement/erase', 16, '2023-12-26 05:30:23', '2023-12-26 05:30:23'),
(54, 'View Specialist', 'DoctorManagement/specialist', 17, '2023-12-26 05:30:23', '2023-12-26 05:30:23'),
(55, 'Add  Specialist', 'DoctorManagement/store-specialist', 17, '2023-12-26 05:30:23', '2023-12-26 05:30:23'),
(56, 'Update Specialist', 'DoctorManagement/update-specialist', 17, '2023-12-26 05:30:23', '2023-12-26 05:30:23'),
(57, 'Delete Specialist', 'DoctorManagement/erase-specialist', 17, '2023-12-26 05:30:23', '2023-12-26 05:30:23'),
(58, 'View Division', 'DivisionManagement/division', 18, '2023-12-26 05:30:23', '2023-12-26 05:30:23'),
(59, 'Add Division', 'DivisionManagement/division', 18, '2023-12-26 05:30:23', '2023-12-26 05:30:23'),
(60, 'Update Division', 'DivisionManagement/update', 18, '2023-12-26 05:30:23', '2023-12-26 05:30:23'),
(61, 'Delete Division', 'DivisionManagement/erase', 18, '2023-12-26 05:30:23', '2023-12-26 05:30:23'),
(62, 'View Blood Bank', 'BloodBankManagement/view', 19, '2023-12-26 05:30:23', '2023-12-26 05:30:23'),
(63, 'Add  Blood Bank', 'BloodBankManagement/bloodbank', 19, '2023-12-26 05:30:23', '2023-12-26 05:30:23'),
(64, 'Update Blood Bank', 'BloodBankManagement/update-bloodbank', 19, '2023-12-26 05:30:23', '2023-12-26 05:30:23'),
(65, 'Delete Blood Bank', 'BloodBankManagement/erase', 19, '2023-12-26 05:30:23', '2023-12-26 05:30:23'),
(66, 'View Ambulance', 'AmbulanceManagement/ambulance', 20, '2023-12-26 05:30:23', '2023-12-26 05:30:23'),
(67, 'Add Ambulance', 'AmbulanceManagement/save', 20, '2023-12-26 05:30:23', '2023-12-26 05:30:23'),
(68, 'Update Ambulance', 'AmbulanceManagement/update/', 20, '2023-12-26 05:30:23', '2023-12-26 05:30:23'),
(69, 'Delete Ambulance', 'AmbulanceManagement/erase', 20, '2023-12-26 05:30:23', '2023-12-26 05:30:23'),
(70, 'View Patient', 'PatientManagement/add-vaccine-applier', 21, '2023-12-26 05:30:23', '2023-12-26 05:30:23'),
(71, 'Add Patient', 'PatientManagement/store-vaccine-applier', 21, '2023-12-26 05:30:23', '2023-12-26 05:30:23'),
(72, 'Update Patient', 'PatientManagement/update-applier', 21, '2023-12-26 05:30:23', '2023-12-26 05:30:23'),
(73, 'Delete Patient', 'PatientManagement/erase', 21, '2023-12-26 05:30:23', '2023-12-26 05:30:23'),
(74, 'Cart Item View', 'wishlist-view', 22, '2023-12-26 05:30:23', '2023-12-26 05:30:23'),
(75, 'Cart Item Delete', 'wishlist/erase', 22, '2023-12-26 05:30:23', '2023-12-26 05:30:23');

-- --------------------------------------------------------

--
-- Table structure for table `permission_role`
--

CREATE TABLE `permission_role` (
  `id` int(10) UNSIGNED NOT NULL,
  `permission_id` int(10) UNSIGNED NOT NULL,
  `role_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permission_role`
--

INSERT INTO `permission_role` (`id`, `permission_id`, `role_id`, `created_at`, `updated_at`) VALUES
(1, 1, 1, '2023-12-26 05:30:23', '2023-12-26 05:30:23'),
(2, 2, 1, '2023-12-26 05:30:23', '2023-12-26 05:30:23'),
(3, 3, 1, '2023-12-26 05:30:23', '2023-12-26 05:30:23'),
(4, 4, 1, '2023-12-26 05:30:23', '2023-12-26 05:30:23'),
(5, 5, 1, '2023-12-26 05:30:23', '2023-12-26 05:30:23'),
(6, 6, 1, '2023-12-26 05:30:23', '2023-12-26 05:30:23'),
(7, 7, 1, '2023-12-26 05:30:23', '2023-12-26 05:30:23'),
(8, 8, 1, '2023-12-26 05:30:23', '2023-12-26 05:30:23'),
(9, 9, 1, '2023-12-26 05:30:23', '2023-12-26 05:30:23'),
(10, 10, 1, '2023-12-26 05:30:23', '2023-12-26 05:30:23'),
(11, 11, 1, '2023-12-26 05:30:23', '2023-12-26 05:30:23'),
(12, 12, 1, '2023-12-26 05:30:23', '2023-12-26 05:30:23'),
(13, 13, 1, '2023-12-26 05:30:23', '2023-12-26 05:30:23'),
(14, 14, 1, '2023-12-26 05:30:23', '2023-12-26 05:30:23'),
(15, 15, 1, '2023-12-26 05:30:23', '2023-12-26 05:30:23'),
(16, 16, 1, '2023-12-26 05:30:23', '2023-12-26 05:30:23'),
(17, 17, 1, '2023-12-26 05:30:23', '2023-12-26 05:30:23'),
(18, 18, 1, '2023-12-26 05:30:23', '2023-12-26 05:30:23'),
(19, 19, 1, '2023-12-26 05:30:23', '2023-12-26 05:30:23'),
(20, 20, 1, '2023-12-26 05:30:23', '2023-12-26 05:30:23'),
(21, 21, 1, '2023-12-26 05:30:23', '2023-12-26 05:30:23'),
(22, 22, 1, '2023-12-26 05:30:23', '2023-12-26 05:30:23'),
(23, 23, 1, '2023-12-26 05:30:23', '2023-12-26 05:30:23'),
(24, 24, 1, '2023-12-26 05:30:23', '2023-12-26 05:30:23'),
(25, 25, 1, '2023-12-26 05:30:23', '2023-12-26 05:30:23'),
(26, 26, 1, '2023-12-26 05:30:23', '2023-12-26 05:30:23'),
(27, 27, 1, '2023-12-26 05:30:23', '2023-12-26 05:30:23'),
(28, 28, 1, '2023-12-26 05:30:23', '2023-12-26 05:30:23'),
(29, 29, 1, '2023-12-26 05:30:23', '2023-12-26 05:30:23'),
(30, 30, 1, '2023-12-26 05:30:23', '2023-12-26 05:30:23'),
(31, 31, 1, '2023-12-26 05:30:23', '2023-12-26 05:30:23'),
(32, 32, 1, '2023-12-26 05:30:23', '2023-12-26 05:30:23'),
(33, 33, 1, '2023-12-26 05:30:23', '2023-12-26 05:30:23'),
(34, 34, 1, '2023-12-26 05:30:23', '2023-12-26 05:30:23'),
(35, 35, 1, '2023-12-26 05:30:23', '2023-12-26 05:30:23'),
(36, 36, 1, '2023-12-26 05:30:23', '2023-12-26 05:30:23'),
(37, 37, 1, '2023-12-26 05:30:23', '2023-12-26 05:30:23'),
(38, 38, 1, '2023-12-26 05:30:23', '2023-12-26 05:30:23'),
(39, 39, 1, '2023-12-26 05:30:23', '2023-12-26 05:30:23'),
(40, 40, 1, '2023-12-26 05:30:23', '2023-12-26 05:30:23'),
(41, 41, 1, '2023-12-26 05:30:23', '2023-12-26 05:30:23'),
(42, 42, 1, '2023-12-26 05:30:23', '2023-12-26 05:30:23'),
(43, 43, 1, '2023-12-26 05:30:23', '2023-12-26 05:30:23'),
(44, 44, 1, '2023-12-26 05:30:23', '2023-12-26 05:30:23'),
(45, 45, 1, '2023-12-26 05:30:23', '2023-12-26 05:30:23'),
(46, 46, 1, '2023-12-26 05:30:23', '2023-12-26 05:30:23'),
(47, 47, 1, '2023-12-26 05:30:23', '2023-12-26 05:30:23'),
(48, 48, 1, '2023-12-26 05:30:23', '2023-12-26 05:30:23'),
(49, 49, 1, '2023-12-26 05:30:23', '2023-12-26 05:30:23'),
(50, 50, 1, '2023-12-26 05:30:23', '2023-12-26 05:30:23'),
(51, 51, 1, '2023-12-26 05:30:23', '2023-12-26 05:30:23'),
(52, 52, 1, '2023-12-26 05:30:23', '2023-12-26 05:30:23'),
(53, 53, 1, '2023-12-26 05:30:23', '2023-12-26 05:30:23'),
(54, 54, 1, '2023-12-26 05:30:23', '2023-12-26 05:30:23'),
(55, 55, 1, '2023-12-26 05:30:23', '2023-12-26 05:30:23'),
(56, 56, 1, '2023-12-26 05:30:23', '2023-12-26 05:30:23'),
(57, 57, 1, '2023-12-26 05:30:23', '2023-12-26 05:30:23'),
(58, 58, 1, '2023-12-26 05:30:23', '2023-12-26 05:30:23'),
(59, 59, 1, '2023-12-26 05:30:23', '2023-12-26 05:30:23'),
(60, 60, 1, '2023-12-26 05:30:23', '2023-12-26 05:30:23'),
(61, 61, 1, '2023-12-26 05:30:23', '2023-12-26 05:30:23'),
(62, 62, 1, '2023-12-26 05:30:23', '2023-12-26 05:30:23'),
(63, 63, 1, '2023-12-26 05:30:23', '2023-12-26 05:30:23'),
(64, 64, 1, '2023-12-26 05:30:23', '2023-12-26 05:30:23'),
(65, 65, 1, '2023-12-26 05:30:23', '2023-12-26 05:30:23'),
(66, 66, 1, '2023-12-26 05:30:23', '2023-12-26 05:30:23'),
(67, 67, 1, '2023-12-26 05:30:23', '2023-12-26 05:30:23'),
(68, 68, 1, '2023-12-26 05:30:23', '2023-12-26 05:30:23'),
(69, 69, 1, '2023-12-26 05:30:23', '2023-12-26 05:30:23'),
(70, 70, 1, '2023-12-26 05:30:23', '2023-12-26 05:30:23'),
(71, 71, 1, '2023-12-26 05:30:23', '2023-12-26 05:30:23'),
(72, 72, 1, '2023-12-26 05:30:23', '2023-12-26 05:30:23'),
(73, 73, 1, '2023-12-26 05:30:23', '2023-12-26 05:30:23'),
(74, 74, 1, '2023-12-26 05:30:23', '2023-12-26 05:30:23'),
(75, 75, 1, '2023-12-26 05:30:23', '2023-12-26 05:30:23');

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
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pharmacies`
--

CREATE TABLE `pharmacies` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `telephone` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `helpline` varchar(255) DEFAULT NULL,
  `website` varchar(255) DEFAULT NULL,
  `facebook` varchar(255) DEFAULT NULL,
  `ext3` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `police_stations`
--

CREATE TABLE `police_stations` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `police_stations`
--

INSERT INTO `police_stations` (`id`, `name`, `created_at`, `updated_at`) VALUES
(3, 'Panchlaish', '2023-12-28 16:53:17', '2023-12-28 16:53:17'),
(4, 'Kotwali', '2023-12-28 16:53:35', '2023-12-28 16:53:35'),
(5, 'Bayezid', '2023-12-28 16:53:47', '2023-12-28 16:53:47'),
(6, 'Double Mooring', '2023-12-28 16:53:56', '2023-12-28 16:53:56'),
(7, 'Pahartali', '2023-12-28 16:54:02', '2023-12-28 16:54:02');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `price` varchar(255) NOT NULL,
  `product_type` varchar(255) NOT NULL,
  `description` varchar(255) DEFAULT NULL,
  `gender` varchar(255) DEFAULT NULL,
  `from` varchar(255) DEFAULT NULL,
  `to` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `image`, `price`, `product_type`, `description`, `gender`, `from`, `to`, `created_at`, `updated_at`) VALUES
(1, 'Vaccine 1', '2023_78754b.jpeg', '500', 'vaccine', 'A vaccine is a biological preparation that provides active acquired immunity to a particular infectious or malignant disease', 'male', '20', '22', '2023-12-28 15:17:04', '2023-12-28 15:17:04'),
(2, 'Vaccine 2', '2023_be6207.jpeg', '600', 'vaccine', 'A vaccine is a biological preparation that provides active acquired immunity to a particular infectious or malignant disease', 'male', '24', '26', '2023-12-28 15:17:54', '2023-12-28 15:17:54'),
(3, 'Vaccine 3', NULL, '750', 'vaccine', 'A vaccine is a biological preparation that provides active acquired immunity to a particular infectious or malignant disease', 'male', '28', '30', '2023-12-28 15:18:27', '2023-12-28 15:18:49');

-- --------------------------------------------------------

--
-- Table structure for table `product_transfers`
--

CREATE TABLE `product_transfers` (
  `id` int(10) UNSIGNED NOT NULL,
  `from_warehouse_id` int(10) UNSIGNED DEFAULT NULL,
  `to_warehouse_id` int(10) UNSIGNED DEFAULT NULL,
  `product_id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `qty` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `purchases`
--

CREATE TABLE `purchases` (
  `id` int(10) UNSIGNED NOT NULL,
  `warehouse_id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `invoice_id` int(10) UNSIGNED NOT NULL,
  `product_id` int(10) UNSIGNED NOT NULL,
  `company_id` int(10) UNSIGNED DEFAULT NULL,
  `type` int(11) NOT NULL DEFAULT 1,
  `qty` int(11) NOT NULL,
  `product_type` varchar(255) NOT NULL,
  `bonus` int(11) DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `mrp` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `custom_date` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Admin', '2023-12-26 05:30:22', '2023-12-26 05:30:22'),
(2, 'User', '2023-12-26 05:30:22', '2023-12-26 05:30:22'),
(3, 'Super Administrator', '2023-12-26 05:30:23', '2023-12-26 05:30:23'),
(4, 'Service Provider', '2023-12-26 05:30:23', '2023-12-26 05:30:23'),
(5, 'Customer', '2023-12-26 05:30:23', '2023-12-26 05:30:23');

-- --------------------------------------------------------

--
-- Table structure for table `role_user`
--

CREATE TABLE `role_user` (
  `id` int(10) UNSIGNED NOT NULL,
  `role_id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `role_user`
--

INSERT INTO `role_user` (`id`, `role_id`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 1, 1, NULL, NULL),
(2, 2, 4, NULL, NULL),
(3, 2, 5, NULL, NULL),
(4, 3, 6, NULL, NULL),
(5, 2, 7, NULL, NULL),
(6, 3, 8, NULL, NULL),
(7, 2, 9, NULL, NULL),
(8, 2, 10, NULL, NULL),
(9, 3, 11, NULL, NULL),
(10, 2, 12, NULL, NULL),
(11, 3, 13, NULL, NULL),
(12, 3, 16, NULL, NULL),
(13, 3, 17, NULL, NULL),
(14, 3, 18, NULL, NULL),
(15, 3, 19, NULL, NULL),
(16, 3, 20, NULL, NULL),
(17, 3, 21, NULL, NULL),
(18, 3, 22, NULL, NULL),
(19, 3, 23, NULL, NULL),
(20, 3, 24, NULL, NULL),
(21, 2, 25, NULL, NULL),
(22, 2, 26, NULL, NULL),
(23, 2, 27, NULL, NULL),
(24, 2, 28, NULL, NULL),
(25, 2, 29, NULL, NULL),
(26, 2, 30, NULL, NULL),
(27, 2, 31, NULL, NULL),
(28, 2, 32, NULL, NULL),
(29, 2, 33, NULL, NULL),
(30, 2, 34, NULL, NULL),
(31, 3, 35, NULL, NULL),
(32, 2, 37, NULL, NULL),
(33, 3, 38, NULL, NULL),
(34, 2, 39, NULL, NULL),
(35, 2, 40, NULL, NULL),
(36, 2, 41, NULL, NULL),
(37, 2, 42, NULL, NULL),
(38, 2, 43, NULL, NULL),
(39, 3, 44, NULL, NULL),
(40, 3, 45, NULL, NULL),
(41, 3, 46, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `sales`
--

CREATE TABLE `sales` (
  `id` int(10) UNSIGNED NOT NULL,
  `invoice_id` int(10) UNSIGNED DEFAULT NULL,
  `from_warehouse_id` int(10) UNSIGNED DEFAULT NULL,
  `to_warehouse_id` int(10) UNSIGNED DEFAULT NULL,
  `product_id` int(10) UNSIGNED DEFAULT NULL,
  `patient_id` int(10) UNSIGNED DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `does_no` int(11) DEFAULT NULL,
  `product_type` varchar(255) NOT NULL,
  `price` int(11) DEFAULT NULL,
  `qty` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `custom_date` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sections`
--

CREATE TABLE `sections` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `hospital_id` int(10) UNSIGNED DEFAULT NULL,
  `description` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `slot_bookings`
--

CREATE TABLE `slot_bookings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `doctor_id` int(10) UNSIGNED NOT NULL,
  `doctor_slot_id` int(10) UNSIGNED NOT NULL,
  `type` tinyint(4) NOT NULL,
  `gender` tinyint(4) NOT NULL,
  `name` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `age` varchar(255) NOT NULL,
  `weight` varchar(255) DEFAULT NULL,
  `location` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `slot_bookings`
--

INSERT INTO `slot_bookings` (`id`, `doctor_id`, `doctor_slot_id`, `type`, `gender`, `name`, `phone`, `age`, `weight`, `location`, `created_at`, `updated_at`) VALUES
(1, 1, 9, 1, 1, 'Kamal', '0948494946649', '50', '80', 'Chattogram', '2023-12-30 18:30:28', '2023-12-30 18:30:28'),
(2, 3, 8, 1, 2, 'borhan', '8888888888', '54', '70', 'CGP', '2024-01-15 00:19:56', '2024-01-15 00:19:56');

-- --------------------------------------------------------

--
-- Table structure for table `specialists`
--

CREATE TABLE `specialists` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `hospital_id` int(10) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `specialists`
--

INSERT INTO `specialists` (`id`, `name`, `created_at`, `updated_at`, `hospital_id`) VALUES
(2, 'Medicine', '2023-12-28 16:56:45', '2023-12-28 16:57:18', 2),
(3, 'Cardiology', '2023-12-28 17:00:53', '2023-12-28 17:01:18', 6),
(4, 'Medicine', '2024-01-23 13:58:44', '2024-01-23 13:58:44', 6);

-- --------------------------------------------------------

--
-- Table structure for table `subcertifications`
--

CREATE TABLE `subcertifications` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `certification_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `suppliers`
--

CREATE TABLE `suppliers` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `address` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `role_id` int(10) UNSIGNED NOT NULL,
  `service_type` int(10) UNSIGNED DEFAULT NULL,
  `division_id` int(10) UNSIGNED DEFAULT NULL,
  `police_station_id` int(10) UNSIGNED DEFAULT NULL,
  `area_id` int(10) UNSIGNED DEFAULT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `provider` varchar(255) DEFAULT NULL,
  `provider_id` varchar(255) DEFAULT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `role_id`, `service_type`, `division_id`, `police_station_id`, `area_id`, `name`, `email`, `password`, `provider`, `provider_id`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 1, NULL, NULL, NULL, NULL, 'Admin', 'admin@example.com', '$2y$10$16KmfqfWA.WKfh5/6itFQeYl6/s7n/veoiYmoaxoZHZolAz9UB/m2', NULL, NULL, 'd9qW2MG6iNhQPPlhBq3BFHN4EwjiWK0vRwgM9993GaMAVhowZsmXxgxMgk5v', '2023-12-26 05:30:22', '2023-12-26 05:30:22'),
(2, 4, NULL, NULL, NULL, NULL, 'dr.rasheda', 'kawsar@gmail.com', '$2y$10$eUNusR6U4zNkRWUahwnOv.MlOmBwj8gXWmZ9d6g1h2icAvyCQ8242', NULL, NULL, NULL, '2023-12-26 05:37:51', '2023-12-30 17:34:38'),
(3, 4, NULL, NULL, NULL, NULL, 'test 2', 'testing@example.com', '$2y$10$GKLX.tUBxbVsys.AiLe6C.K7e61p7kvS7pDg1DRZaB46cS5ovXBcq', NULL, NULL, NULL, '2023-12-26 05:38:13', '2023-12-30 17:35:47'),
(4, 2, 3, 1, 1, 1, 'shammo', 'shammo50@gmail.com', '$2y$10$fhCtYPYzdX5NjO/Teo8FoeTEJ8EBQ8u81URyMLFEWGN9lj3K8xvRO', NULL, NULL, NULL, '2023-12-26 05:43:12', '2023-12-26 05:43:12'),
(5, 2, 3, 1, 1, 1, 'Tawhidul', 'tawhidularefin50@gmail.com', '$2y$10$81xg9H7Hi.G5t4IptWv9kOVgaC254KFgQWPPcZkWIIlLIO1dWLbwG', NULL, NULL, NULL, '2023-12-26 05:59:13', '2023-12-26 05:59:13'),
(6, 3, NULL, NULL, NULL, NULL, 'Tawhidul Arefin', 'tawhidularefin530@gmail.com', '$2y$10$nyOlNoElj7zU1ST1PtzX3.6inZ0DojnzRH.oNlgAR19nS1LDm9MFK', NULL, NULL, NULL, '2023-12-26 06:32:36', '2023-12-26 06:32:36'),
(7, 2, 2, 1, 1, 1, 'test1', 'test1@gmail.com', '$2y$10$vKq4XiD/8PCPF579zkYaSO41pze.F/ngHpTLIWmy4hZnZfoEUaB42', NULL, NULL, NULL, '2023-12-26 22:50:10', '2023-12-26 22:50:10'),
(8, 3, NULL, NULL, NULL, NULL, 'Afran Siam', 'afransiam1994@gmail.com', '$2y$10$/SPS4QfICCuKYoVfCPXgLOSAbS4/FNDNOyoEKeEDAXcEqGTaEi70e', NULL, NULL, NULL, '2023-12-26 22:50:51', '2023-12-26 22:50:51'),
(9, 2, 3, 1, 2, 2, 'Test2', 'test2@gmail.com', '$2y$10$oM51W9ajoc/JsceHmNhWb.5YbDh4XtzYW3TJ27E7E/dbgjYnV57cm', NULL, NULL, NULL, '2023-12-26 22:52:27', '2023-12-26 22:52:27'),
(10, 2, 4, 1, 1, 1, 'Test3', 'test3@gmail.com', '$2y$10$4OFTvS0Anupi6C3UCeWYkOUGV9p1NkcoIb2vD9dSxn2epyYkU.SUO', NULL, NULL, NULL, '2023-12-26 22:55:10', '2023-12-26 22:55:10'),
(11, 3, NULL, NULL, NULL, NULL, 'kawsar', 'tani@gmail.com', '$2y$10$zPgwgJcThWucyTeEb96MDecKgM0nr2ZgbgUnr3BcZi5k0ipp1gU/a', NULL, NULL, NULL, '2023-12-27 04:03:03', '2023-12-27 04:03:03'),
(12, 2, 1, 2, 1, 1, 'Borhan', 'sangutours.bd@gmail.com', '$2y$10$PBsyMy9jO/5LW.dfRcIUKevjgRhofU521ZwuQ42yRzxlKMj7ydgz.', NULL, NULL, NULL, '2023-12-27 15:13:57', '2023-12-27 15:13:57'),
(13, 3, NULL, NULL, NULL, NULL, 'Tawhidul Arefin', 'shammo103@gmail.com', '$2y$10$rZxBBZ3nBAQzT76OfO/lzOPaFmkqn3FZHVhnCFb2hWeygZRV.QPqy', NULL, NULL, NULL, '2023-12-28 16:26:32', '2023-12-28 16:26:32'),
(14, 4, NULL, NULL, NULL, NULL, 'Dr.Mosharraf Hossain', 'admin@gmail.com', '$2y$10$9ARRfw.ndcSmzHdr0Uybw.3P/L0Bc3RqX9xSEewXfURnRe/sR/8Pe', NULL, NULL, NULL, '2023-12-28 16:58:35', '2023-12-28 16:58:35'),
(15, 4, NULL, NULL, NULL, NULL, 'Dr.P.C. Das', 'administrator@app.com', '$2y$10$ppU1siwZLVbFcG9uKB4faugc9imdtrxhCu2QNv1cACDScmO6v1c3u', NULL, NULL, NULL, '2023-12-28 17:01:48', '2023-12-28 17:01:48'),
(16, 3, NULL, NULL, NULL, NULL, 'kawsar', 'tani2@gmail.com', '$2y$10$uGAFJnB5lSmm2yifrsoP2O.GZ1DLeWiiVgpx/P7pkh9Pv.aiPGpPG', NULL, NULL, NULL, '2023-12-28 17:07:53', '2023-12-28 17:07:53'),
(17, 3, NULL, NULL, NULL, NULL, 'kawsar', 'tani3@gmail.com', '$2y$10$EgYGizcXPoav/omIFBMyhOqgCWID3B4cWffjqxJZi0RuKYHEnaNwW', NULL, NULL, NULL, '2023-12-28 17:08:05', '2023-12-28 17:08:05'),
(18, 3, NULL, NULL, NULL, NULL, 'kawsar', 'tani4@gmail.com', '$2y$10$nI8duY9AK136CKSDYf2iUeXlk1ud9R7NiDAOV/EfjiTGe2uCJNVpO', NULL, NULL, NULL, '2023-12-28 17:08:12', '2023-12-28 17:08:12'),
(19, 3, NULL, NULL, NULL, NULL, 'kawsar', 'tani5@gmail.com', '$2y$10$2dZfWFwyCkChxVaDqTnTnuWq6FwXlZPMX1sYZd7l4FSwQCKiO9mHm', NULL, NULL, NULL, '2023-12-28 17:08:23', '2023-12-28 17:08:23'),
(20, 3, NULL, NULL, NULL, NULL, 'kawsar', 'tani6@gmail.com', '$2y$10$.jih5yUFSQbddb9K46Nid./6L27QqlRgY2/usds2en9fVQaMf82XK', NULL, NULL, NULL, '2023-12-28 17:08:31', '2023-12-28 17:08:31'),
(21, 3, NULL, NULL, NULL, NULL, 'kawsar', 'tani7@gmail.com', '$2y$10$mIKUSm.wxxKG1D7nWSQY4.C9rZqBgaDdsDobbGlpmHN4qMMV4fBs.', NULL, NULL, NULL, '2023-12-28 17:08:40', '2023-12-28 17:08:40'),
(22, 3, NULL, NULL, NULL, NULL, 'kawsar', 'tani8@gmail.com', '$2y$10$nbo404XaIDtyBTd6SGdn0.8KfM6jnhQkvZoPSScjJKWssfJbb95/a', NULL, NULL, NULL, '2023-12-28 17:08:49', '2023-12-28 17:08:49'),
(23, 3, NULL, NULL, NULL, NULL, 'kawsar', 'tani9@gmail.com', '$2y$10$rGOmJaTb7ntdybMpP8XShuTbXsEcag0/wBbymRWLthta23zSTB.ta', NULL, NULL, NULL, '2023-12-28 17:08:59', '2023-12-28 17:08:59'),
(24, 3, NULL, NULL, NULL, NULL, 'kawsar', 'tani10@gmail.com', '$2y$10$PpxTa5JhpfHRj0Pyn.Kip.tU4Uc4btq9bMuJdLlnTCH9oOqVZlt46', NULL, NULL, NULL, '2023-12-28 17:09:09', '2023-12-28 17:09:09'),
(25, 2, 3, 1, 1, 1, 'shammo', 'shammo51@gmail.com', '$2y$10$hi.IlXFAP/KSgS8pMlP5uOnqu83.XGYQFtvAjudvVyG9fuJxuOowy', NULL, NULL, NULL, '2023-12-28 17:14:40', '2023-12-28 17:14:40'),
(26, 2, 3, 1, 1, 1, 'shammo', 'shammo52@gmail.com', '$2y$10$vhGL.aAAznRBjc./kLIIOuxwMsBBhg6oj59i6aY6ENUpUrmt61lYe', NULL, NULL, NULL, '2023-12-28 17:14:48', '2023-12-28 17:14:48'),
(27, 2, 3, 1, 1, 1, 'shammo', 'shammo53@gmail.com', '$2y$10$3RwdGgXkMVxgsaKabQWO3uN6ZjYHsXNJjVJyiCtqiZgXcFjJcnyeK', NULL, NULL, NULL, '2023-12-28 17:14:54', '2023-12-28 17:14:54'),
(28, 2, 3, 1, 1, 1, 'shammo', 'shammo54@gmail.com', '$2y$10$SoDxaScQyRNOL5.EaC0DL.itjaYN9nOFS8Jx/cZh3yyzynDqob./O', NULL, NULL, NULL, '2023-12-28 17:15:02', '2023-12-28 17:15:02'),
(29, 2, 3, 1, 1, 1, 'shammo', 'shammo55@gmail.com', '$2y$10$Gn1PxaPVbX/Z8p/uzX8FUOWXJ5T1w3fIEWPGOqW3g1ITuN/fobvzW', NULL, NULL, NULL, '2023-12-28 17:15:10', '2023-12-28 17:15:10'),
(30, 2, 3, 1, 1, 1, 'shammo', 'shammo56@gmail.com', '$2y$10$jcQe2PMWYxNPv29Zlgqswu47AXM0zmwY96uqTsU3Got.EivMEtfBe', NULL, NULL, NULL, '2023-12-28 17:15:16', '2023-12-28 17:15:16'),
(31, 2, 3, 1, 1, 1, 'shammo', 'shammo57@gmail.com', '$2y$10$YOmGJoU4dTQEAzVA/xZkSeK3V4V7LYgoLWVdv4rXF5Ab.QcxpaN3i', NULL, NULL, NULL, '2023-12-28 17:15:23', '2023-12-28 17:15:23'),
(32, 2, 3, 1, 1, 1, 'shammo', 'shammo58@gmail.com', '$2y$10$mcPzaYXOcZRSo0LNHafmL.yt/3atUxWf2Uwrk1THREniMBXJlu1TK', NULL, NULL, NULL, '2023-12-28 17:15:30', '2023-12-28 17:15:30'),
(33, 2, 3, 1, 1, 1, 'shammo', 'shammo59@gmail.com', '$2y$10$dpodGRUXCGWVp9NXp/VGOupWLrkxQd/abRWocuS1TWjXjKvMiIuP2', NULL, NULL, NULL, '2023-12-28 17:15:38', '2023-12-28 17:15:38'),
(34, 2, 3, 1, 1, 1, 'shammo', 'shammo60@gmail.com', '$2y$10$9kFpPx27VjF36PkSjxgxs.cV9Z6l7AlZsXhWRS5KOVNYMl/kg1Wou', NULL, NULL, NULL, '2023-12-28 17:15:45', '2023-12-28 17:15:45'),
(35, 3, NULL, NULL, NULL, NULL, 'Md. Monir Hossain Chowdhury', 'miraj9chy@gmail.com', '$2y$10$aQodvQgV0y1jOK2PDk8xaOPGy8B/NOClumn9zv6bfusHVNLtgwDyW', NULL, NULL, NULL, '2023-12-30 17:28:48', '2023-12-30 17:28:48'),
(36, 4, NULL, NULL, NULL, NULL, 'Dr.Emarn', 'emran@gmail.com', '$2y$10$iIIEaPwWp2mZt3Zi3eZBZ.xvURj18cxEtj9kqrWnPIFeHmMNOb4I2', NULL, NULL, NULL, '2023-12-30 17:33:42', '2023-12-30 17:33:42'),
(37, 2, 1, 1, 4, 5, 'zubair', 'zubairbhuian@gmail.com', '$2y$10$kzakpZ6ebTIll4GLZsYsq.0LmVxv/nuch7qM.NzP3mzBZUNtaDaI.', NULL, NULL, NULL, '2024-01-01 14:55:07', '2024-01-01 14:55:07'),
(38, 3, NULL, NULL, NULL, NULL, 'Winner Hype', 'mywinnerhype@gmail.com', '$2y$10$kRN.EZXw1J9/IXvhNbynO.1UpWIKrXY5.100PPMDIwc2VHz4l.zQy', NULL, NULL, NULL, '2024-01-04 03:33:23', '2024-01-04 03:33:23'),
(39, 2, 5, 2, 3, 3, 'demo', 'demo@gmail.com', '$2y$10$ZOsz94Rh02NcT4.nT4mQceifeOFhCbE7mlKBXKG3MuCY1AASH4LN2', NULL, NULL, NULL, '2024-01-04 05:20:53', '2024-01-04 05:20:53'),
(40, 2, 1, 2, 4, 11, 'jabedchy', 'jabedchy@gmail.com', '$2y$10$VY4iKhg50q.u.jRhcLU/.uQPYDAX9q6iOLLDndg8V9x8jrf./cc.e', NULL, NULL, NULL, '2024-01-04 17:34:58', '2024-01-04 17:34:58'),
(41, 2, 2, 2, 5, 9, 'jabedchy23', 'jabedchy23@gmail.com', '$2y$10$RtP090NnZyGxivk4zIk0beGI6./pGGyoG15xEZjoK16gZ5y3Fsct2', NULL, NULL, NULL, '2024-01-04 17:42:16', '2024-01-04 17:42:16'),
(42, 2, 3, 2, 4, 11, 'jabedchy24', 'jabedchy24@gmail.com', '$2y$10$V5eOJ.OaHQXCU6LC9OaWBOkWPxKw0h8mHgM79T2dBgpHZdxH59V7W', NULL, NULL, NULL, '2024-01-04 17:44:01', '2024-01-04 17:44:01'),
(43, 2, 4, 2, 3, 3, 'jabedchy25', 'jabedchy25@gmail.com', '$2y$10$o0sMnvUaziaoRKy8v4fcjOgOQ4dy1yrsPoIhRJ9oP5/52tscgza3q', NULL, NULL, NULL, '2024-01-04 17:46:30', '2024-01-04 17:46:30'),
(44, 3, NULL, NULL, NULL, NULL, 'Modin Bhuian', 'modinbhuian@gmail.com', '$2y$10$P.pqFH0fAojm8as1Gn4reuoNZgJN4zmkYBR5WQ5Bkp0Lvt0ZYGDcq', NULL, NULL, NULL, '2024-01-05 02:13:41', '2024-01-05 02:13:41'),
(45, 3, NULL, NULL, NULL, NULL, 'Jabed Chy', 'baitulhikmah2021@gmail.com', '$2y$10$sfAqGz6ZMgEnr67BYR2C4.lLR0j99hkLmi1wNLhkez.QXJXTeF5q6', NULL, NULL, NULL, '2024-01-06 04:25:24', '2024-01-06 04:25:24'),
(46, 3, NULL, NULL, NULL, NULL, 'Subrata Das', 'subratafrobel.das@gmail.com', '$2y$10$9/G2qCeMqoG5.CCRHFD.w.rDXgoTl1tjnZ69bJQ9hccE41IcZDgzK', NULL, NULL, NULL, '2024-01-08 20:32:14', '2024-01-08 20:32:14');

-- --------------------------------------------------------

--
-- Table structure for table `vaccine_orders`
--

CREATE TABLE `vaccine_orders` (
  `id` int(10) UNSIGNED NOT NULL,
  `division_id` bigint(20) UNSIGNED NOT NULL,
  `police_station_id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `virtuallabs`
--

CREATE TABLE `virtuallabs` (
  `id` int(10) UNSIGNED NOT NULL,
  `division_id` int(10) UNSIGNED NOT NULL,
  `police_station_id` int(10) UNSIGNED NOT NULL,
  `area_id` int(10) UNSIGNED NOT NULL,
  `type` tinyint(4) NOT NULL,
  `status` tinyint(4) DEFAULT 5,
  `name` varchar(255) NOT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `virtuallabs`
--

INSERT INTO `virtuallabs` (`id`, `division_id`, `police_station_id`, `area_id`, `type`, `status`, `name`, `phone`, `created_at`, `updated_at`) VALUES
(1, 2, 2, 2, 3, 5, 'Borhan', '009998', '2023-12-27 15:31:38', '2023-12-27 15:31:38'),
(2, 2, 2, 2, 3, 5, 'Borhan', '009998', '2023-12-27 15:31:39', '2023-12-27 15:31:39'),
(3, 2, 5, 9, 2, 5, 'Kamal', '0499499949496', '2023-12-30 18:04:35', '2023-12-30 18:04:35'),
(4, 2, 5, 9, 2, 5, 'Kamal', '0499499949496', '2023-12-30 18:04:36', '2023-12-30 18:04:36'),
(5, 2, 6, 5, 3, 5, 'Test5', '12345678910', '2023-12-30 18:15:20', '2023-12-30 18:15:20'),
(6, 2, 4, 11, 1, 20, 'Jabed', '1234567890', '2024-01-04 17:35:48', '2024-01-04 17:36:47');

-- --------------------------------------------------------

--
-- Table structure for table `warehouses`
--

CREATE TABLE `warehouses` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `address` varchar(255) DEFAULT NULL,
  `contact_person` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `warehouses`
--

INSERT INTO `warehouses` (`id`, `name`, `phone`, `address`, `contact_person`, `created_at`, `updated_at`) VALUES
(1, 'warehouse1', '01727764161', 'warehouse address', NULL, '2023-12-26 05:30:22', '2023-12-26 05:30:22');

-- --------------------------------------------------------

--
-- Table structure for table `weight_trackers`
--

CREATE TABLE `weight_trackers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `date` date DEFAULT NULL,
  `weight` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `weight_trackers`
--

INSERT INTO `weight_trackers` (`id`, `user_id`, `date`, `weight`, `created_at`, `updated_at`) VALUES
(1, 8, '0000-00-00', '120', '2023-12-26 22:58:49', '2023-12-26 22:58:49'),
(2, 6, '0000-00-00', '52', '2023-12-28 17:32:41', '2023-12-28 17:32:41'),
(3, 37, '0000-00-00', '342', '2024-01-03 18:08:01', '2024-01-03 18:08:01'),
(4, 37, '0000-00-00', '234', '2024-01-03 18:13:32', '2024-01-03 18:13:32'),
(5, 37, '0000-00-00', 'werw', '2024-01-03 18:15:36', '2024-01-03 18:15:36'),
(6, 38, '0000-00-00', '120', '2024-01-04 03:55:19', '2024-01-04 03:55:19'),
(7, 38, '0000-00-00', '12', '2024-01-04 05:37:01', '2024-01-04 05:37:01'),
(8, 38, '0000-00-00', '12', '2024-01-04 15:55:37', '2024-01-04 15:55:37'),
(9, 45, '0000-00-00', '12', '2024-01-06 04:26:19', '2024-01-06 04:26:19'),
(10, 37, '0000-00-00', '60KG', '2024-01-10 17:09:26', '2024-01-10 17:09:26'),
(11, 37, '0000-00-00', '254.98', '2024-01-12 02:15:00', '2024-01-12 02:15:00'),
(12, 37, '0000-00-00', '22.9 KG', '2024-01-12 02:24:43', '2024-01-12 02:24:43'),
(13, 12, '0000-00-00', '100 KG', '2024-01-14 23:40:52', '2024-01-14 23:40:52');

-- --------------------------------------------------------

--
-- Table structure for table `wishlists`
--

CREATE TABLE `wishlists` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `product_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `abouts`
--
ALTER TABLE `abouts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ambulances`
--
ALTER TABLE `ambulances`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `areas`
--
ALTER TABLE `areas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ask_doctors`
--
ALTER TABLE `ask_doctors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `banners`
--
ALTER TABLE `banners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bloodbanks`
--
ALTER TABLE `bloodbanks`
  ADD PRIMARY KEY (`id`),
  ADD KEY `bloodbanks_division_id_foreign` (`division_id`);

--
-- Indexes for table `body_trackers`
--
ALTER TABLE `body_trackers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bp_trackers`
--
ALTER TABLE `bp_trackers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cashbooks`
--
ALTER TABLE `cashbooks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `certifications`
--
ALTER TABLE `certifications`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `companies`
--
ALTER TABLE `companies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `consults`
--
ALTER TABLE `consults`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `daily_expenses`
--
ALTER TABLE `daily_expenses`
  ADD PRIMARY KEY (`id`),
  ADD KEY `daily_expenses_warehouse_id_foreign` (`warehouse_id`),
  ADD KEY `daily_expenses_user_id_foreign` (`user_id`),
  ADD KEY `daily_expenses_expenses_id_foreign` (`expenses_id`);

--
-- Indexes for table `dieseas`
--
ALTER TABLE `dieseas`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `dieseas_name_unique` (`name`);

--
-- Indexes for table `dieseaspatients`
--
ALTER TABLE `dieseaspatients`
  ADD PRIMARY KEY (`id`),
  ADD KEY `dieseaspatients_patient_id_foreign` (`patient_id`);

--
-- Indexes for table `diet_trackers`
--
ALTER TABLE `diet_trackers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `divisions`
--
ALTER TABLE `divisions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `doctors`
--
ALTER TABLE `doctors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `doctor_slots`
--
ALTER TABLE `doctor_slots`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `durationvaccines`
--
ALTER TABLE `durationvaccines`
  ADD PRIMARY KEY (`id`),
  ADD KEY `durationvaccines_product_id_foreign` (`product_id`);

--
-- Indexes for table `expenses`
--
ALTER TABLE `expenses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `glucose_trackers`
--
ALTER TABLE `glucose_trackers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `health_profiles`
--
ALTER TABLE `health_profiles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `health_tips`
--
ALTER TABLE `health_tips`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `homepages`
--
ALTER TABLE `homepages`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `homepages_title_unique` (`title`);

--
-- Indexes for table `hospitals`
--
ALTER TABLE `hospitals`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `hospitals_name_unique` (`name`),
  ADD KEY `hospitals_division_id_foreign` (`division_id`);

--
-- Indexes for table `invoices`
--
ALTER TABLE `invoices`
  ADD PRIMARY KEY (`id`),
  ADD KEY `invoices_supplier_id_foreign` (`supplier_id`),
  ADD KEY `invoices_patient_id_foreign` (`patient_id`),
  ADD KEY `invoices_user_id_foreign` (`user_id`),
  ADD KEY `invoices_warehouse_id_foreign` (`warehouse_id`);

--
-- Indexes for table `media`
--
ALTER TABLE `media`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `media_uuid_unique` (`uuid`),
  ADD KEY `media_model_type_model_id_index` (`model_type`,`model_id`),
  ADD KEY `media_order_column_index` (`order_column`);

--
-- Indexes for table `medicine_trackers`
--
ALTER TABLE `medicine_trackers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `overseas_treatments`
--
ALTER TABLE `overseas_treatments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `patients`
--
ALTER TABLE `patients`
  ADD PRIMARY KEY (`id`),
  ADD KEY `patients_user_id_foreign` (`user_id`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `permissions_name_unique` (`name`);

--
-- Indexes for table `permission_role`
--
ALTER TABLE `permission_role`
  ADD PRIMARY KEY (`id`),
  ADD KEY `permission_role_permission_id_foreign` (`permission_id`),
  ADD KEY `permission_role_role_id_foreign` (`role_id`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `pharmacies`
--
ALTER TABLE `pharmacies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `police_stations`
--
ALTER TABLE `police_stations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_transfers`
--
ALTER TABLE `product_transfers`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_transfers_product_id_foreign` (`product_id`),
  ADD KEY `product_transfers_from_warehouse_id_foreign` (`from_warehouse_id`),
  ADD KEY `product_transfers_to_warehouse_id_foreign` (`to_warehouse_id`),
  ADD KEY `product_transfers_user_id_foreign` (`user_id`);

--
-- Indexes for table `purchases`
--
ALTER TABLE `purchases`
  ADD PRIMARY KEY (`id`),
  ADD KEY `purchases_warehouse_id_foreign` (`warehouse_id`),
  ADD KEY `purchases_user_id_foreign` (`user_id`),
  ADD KEY `purchases_invoice_id_foreign` (`invoice_id`),
  ADD KEY `purchases_product_id_foreign` (`product_id`),
  ADD KEY `purchases_company_id_foreign` (`company_id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_name_unique` (`name`);

--
-- Indexes for table `role_user`
--
ALTER TABLE `role_user`
  ADD PRIMARY KEY (`id`),
  ADD KEY `role_user_role_id_foreign` (`role_id`),
  ADD KEY `role_user_user_id_foreign` (`user_id`);

--
-- Indexes for table `sales`
--
ALTER TABLE `sales`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sales_invoice_id_foreign` (`invoice_id`),
  ADD KEY `sales_product_id_foreign` (`product_id`),
  ADD KEY `sales_patient_id_foreign` (`patient_id`),
  ADD KEY `sales_from_warehouse_id_foreign` (`from_warehouse_id`),
  ADD KEY `sales_to_warehouse_id_foreign` (`to_warehouse_id`);

--
-- Indexes for table `sections`
--
ALTER TABLE `sections`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slot_bookings`
--
ALTER TABLE `slot_bookings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `specialists`
--
ALTER TABLE `specialists`
  ADD PRIMARY KEY (`id`),
  ADD KEY `specialists_hospital_id_foreign` (`hospital_id`);

--
-- Indexes for table `subcertifications`
--
ALTER TABLE `subcertifications`
  ADD PRIMARY KEY (`id`),
  ADD KEY `subcertifications_certification_id_foreign` (`certification_id`);

--
-- Indexes for table `suppliers`
--
ALTER TABLE `suppliers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `vaccine_orders`
--
ALTER TABLE `vaccine_orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `virtuallabs`
--
ALTER TABLE `virtuallabs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `warehouses`
--
ALTER TABLE `warehouses`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `warehouses_name_unique` (`name`),
  ADD UNIQUE KEY `warehouses_phone_unique` (`phone`);

--
-- Indexes for table `weight_trackers`
--
ALTER TABLE `weight_trackers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `wishlists`
--
ALTER TABLE `wishlists`
  ADD PRIMARY KEY (`id`),
  ADD KEY `wishlists_user_id_foreign` (`user_id`),
  ADD KEY `wishlists_product_id_foreign` (`product_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `abouts`
--
ALTER TABLE `abouts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ambulances`
--
ALTER TABLE `ambulances`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `areas`
--
ALTER TABLE `areas`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `ask_doctors`
--
ALTER TABLE `ask_doctors`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `banners`
--
ALTER TABLE `banners`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `bloodbanks`
--
ALTER TABLE `bloodbanks`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `body_trackers`
--
ALTER TABLE `body_trackers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `bp_trackers`
--
ALTER TABLE `bp_trackers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `cashbooks`
--
ALTER TABLE `cashbooks`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `certifications`
--
ALTER TABLE `certifications`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `companies`
--
ALTER TABLE `companies`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `consults`
--
ALTER TABLE `consults`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `daily_expenses`
--
ALTER TABLE `daily_expenses`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `dieseas`
--
ALTER TABLE `dieseas`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `dieseaspatients`
--
ALTER TABLE `dieseaspatients`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `diet_trackers`
--
ALTER TABLE `diet_trackers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- AUTO_INCREMENT for table `divisions`
--
ALTER TABLE `divisions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `doctors`
--
ALTER TABLE `doctors`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `doctor_slots`
--
ALTER TABLE `doctor_slots`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `durationvaccines`
--
ALTER TABLE `durationvaccines`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `expenses`
--
ALTER TABLE `expenses`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `glucose_trackers`
--
ALTER TABLE `glucose_trackers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `health_profiles`
--
ALTER TABLE `health_profiles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `health_tips`
--
ALTER TABLE `health_tips`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `homepages`
--
ALTER TABLE `homepages`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `hospitals`
--
ALTER TABLE `hospitals`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `invoices`
--
ALTER TABLE `invoices`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `media`
--
ALTER TABLE `media`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `medicine_trackers`
--
ALTER TABLE `medicine_trackers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=83;

--
-- AUTO_INCREMENT for table `overseas_treatments`
--
ALTER TABLE `overseas_treatments`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `patients`
--
ALTER TABLE `patients`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=76;

--
-- AUTO_INCREMENT for table `permission_role`
--
ALTER TABLE `permission_role`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=76;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pharmacies`
--
ALTER TABLE `pharmacies`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `police_stations`
--
ALTER TABLE `police_stations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `product_transfers`
--
ALTER TABLE `product_transfers`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `purchases`
--
ALTER TABLE `purchases`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `role_user`
--
ALTER TABLE `role_user`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `sales`
--
ALTER TABLE `sales`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sections`
--
ALTER TABLE `sections`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `slot_bookings`
--
ALTER TABLE `slot_bookings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `specialists`
--
ALTER TABLE `specialists`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `subcertifications`
--
ALTER TABLE `subcertifications`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `suppliers`
--
ALTER TABLE `suppliers`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT for table `vaccine_orders`
--
ALTER TABLE `vaccine_orders`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `virtuallabs`
--
ALTER TABLE `virtuallabs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `warehouses`
--
ALTER TABLE `warehouses`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `weight_trackers`
--
ALTER TABLE `weight_trackers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `wishlists`
--
ALTER TABLE `wishlists`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `bloodbanks`
--
ALTER TABLE `bloodbanks`
  ADD CONSTRAINT `bloodbanks_division_id_foreign` FOREIGN KEY (`division_id`) REFERENCES `divisions` (`id`);

--
-- Constraints for table `daily_expenses`
--
ALTER TABLE `daily_expenses`
  ADD CONSTRAINT `daily_expenses_expenses_id_foreign` FOREIGN KEY (`expenses_id`) REFERENCES `expenses` (`id`),
  ADD CONSTRAINT `daily_expenses_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `daily_expenses_warehouse_id_foreign` FOREIGN KEY (`warehouse_id`) REFERENCES `warehouses` (`id`);

--
-- Constraints for table `dieseaspatients`
--
ALTER TABLE `dieseaspatients`
  ADD CONSTRAINT `dieseaspatients_patient_id_foreign` FOREIGN KEY (`patient_id`) REFERENCES `patients` (`id`);

--
-- Constraints for table `durationvaccines`
--
ALTER TABLE `durationvaccines`
  ADD CONSTRAINT `durationvaccines_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`);

--
-- Constraints for table `hospitals`
--
ALTER TABLE `hospitals`
  ADD CONSTRAINT `hospitals_division_id_foreign` FOREIGN KEY (`division_id`) REFERENCES `divisions` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `invoices`
--
ALTER TABLE `invoices`
  ADD CONSTRAINT `invoices_patient_id_foreign` FOREIGN KEY (`patient_id`) REFERENCES `patients` (`id`),
  ADD CONSTRAINT `invoices_supplier_id_foreign` FOREIGN KEY (`supplier_id`) REFERENCES `suppliers` (`id`),
  ADD CONSTRAINT `invoices_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `invoices_warehouse_id_foreign` FOREIGN KEY (`warehouse_id`) REFERENCES `warehouses` (`id`);

--
-- Constraints for table `patients`
--
ALTER TABLE `patients`
  ADD CONSTRAINT `patients_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `permission_role`
--
ALTER TABLE `permission_role`
  ADD CONSTRAINT `permission_role_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`),
  ADD CONSTRAINT `permission_role_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`);

--
-- Constraints for table `product_transfers`
--
ALTER TABLE `product_transfers`
  ADD CONSTRAINT `product_transfers_from_warehouse_id_foreign` FOREIGN KEY (`from_warehouse_id`) REFERENCES `warehouses` (`id`),
  ADD CONSTRAINT `product_transfers_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`),
  ADD CONSTRAINT `product_transfers_to_warehouse_id_foreign` FOREIGN KEY (`to_warehouse_id`) REFERENCES `warehouses` (`id`),
  ADD CONSTRAINT `product_transfers_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `purchases`
--
ALTER TABLE `purchases`
  ADD CONSTRAINT `purchases_company_id_foreign` FOREIGN KEY (`company_id`) REFERENCES `companies` (`id`),
  ADD CONSTRAINT `purchases_invoice_id_foreign` FOREIGN KEY (`invoice_id`) REFERENCES `invoices` (`id`),
  ADD CONSTRAINT `purchases_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`),
  ADD CONSTRAINT `purchases_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `purchases_warehouse_id_foreign` FOREIGN KEY (`warehouse_id`) REFERENCES `warehouses` (`id`);

--
-- Constraints for table `role_user`
--
ALTER TABLE `role_user`
  ADD CONSTRAINT `role_user_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`),
  ADD CONSTRAINT `role_user_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `sales`
--
ALTER TABLE `sales`
  ADD CONSTRAINT `sales_from_warehouse_id_foreign` FOREIGN KEY (`from_warehouse_id`) REFERENCES `warehouses` (`id`),
  ADD CONSTRAINT `sales_invoice_id_foreign` FOREIGN KEY (`invoice_id`) REFERENCES `invoices` (`id`),
  ADD CONSTRAINT `sales_patient_id_foreign` FOREIGN KEY (`patient_id`) REFERENCES `patients` (`id`),
  ADD CONSTRAINT `sales_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`),
  ADD CONSTRAINT `sales_to_warehouse_id_foreign` FOREIGN KEY (`to_warehouse_id`) REFERENCES `warehouses` (`id`);

--
-- Constraints for table `specialists`
--
ALTER TABLE `specialists`
  ADD CONSTRAINT `specialists_hospital_id_foreign` FOREIGN KEY (`hospital_id`) REFERENCES `hospitals` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `subcertifications`
--
ALTER TABLE `subcertifications`
  ADD CONSTRAINT `subcertifications_certification_id_foreign` FOREIGN KEY (`certification_id`) REFERENCES `certifications` (`id`);

--
-- Constraints for table `wishlists`
--
ALTER TABLE `wishlists`
  ADD CONSTRAINT `wishlists_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`),
  ADD CONSTRAINT `wishlists_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
