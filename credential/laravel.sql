-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 27, 2019 at 04:33 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laravel`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_models`
--

CREATE TABLE `admin_models` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admin_models`
--

INSERT INTO `admin_models` (`id`, `name`, `password`, `created_at`, `updated_at`) VALUES
(1, 'admin', '$2y$10$xALHZsPWJ/oxnNrvuzoeJeziJCyaOFURqryKS0hVMA8EehPJ2xqtq', '2019-05-31 05:58:12', '2019-06-14 04:49:21'),
(2, 'admin', '$2y$10$ZVJG8UA4J2jlmhj.NIXl2uAYrdyRWE2GjIkfLpUdJix6a/P9niRDO', '2019-06-14 07:26:05', '2019-06-14 07:26:05'),
(3, 'monu', '$2y$10$amV0G8WZCLmvSQM3UrAHW.qHkphRpkT6AiWLojF7IO8Ft3JkwS3vK', '2019-06-14 07:30:06', '2019-06-14 07:30:06');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_05_31_120911_create_sassy_models_table', 2),
(4, '2019_05_31_134611_create_sassy_models_table', 3),
(5, '2019_05_31_140305_create_sizzler_models_table', 4),
(6, '2019_06_03_103429_create_mis_models_table', 5),
(7, '2019_06_14_103119_create_admin_models_table', 6);

-- --------------------------------------------------------

--
-- Table structure for table `mis_models`
--

CREATE TABLE `mis_models` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `venue` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `mis_models`
--

INSERT INTO `mis_models` (`id`, `name`, `venue`, `description`, `date`, `created_at`, `updated_at`) VALUES
(1, 'monu', 'saket', 'hey today event is so good. i hope all you good ', '2019-06-21', '2019-06-03 05:26:29', '2019-06-03 05:26:29'),
(2, 'atul new student', 'office', 'new students pls coaperate with him', '2019-05-31', '2019-06-27 06:54:31', '2019-06-27 06:54:31'),
(3, 'atul new student', 'office', 'new students pls coaperate with him', '2019-05-31', '2019-06-27 06:54:31', '2019-06-27 06:54:31');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sassy_models`
--

CREATE TABLE `sassy_models` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `decision` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sassy_models`
--

INSERT INTO `sassy_models` (`id`, `decision`, `description`, `created_at`, `updated_at`) VALUES
(1, 'Today Meeting', 'hello everyone, I was busy in some work.\r\nso meeting reschedules on next Saturday.', '2019-05-31 08:22:11', '2019-05-31 08:22:11'),
(2, 'Reschedule', 'hello everyone how are your hope all you are good', '2019-06-04 10:22:53', '2019-06-04 10:22:53'),
(3, 'Today Meeting', 'metting is on 4 pm be ready', '2019-06-04 11:37:13', '2019-06-04 11:37:13'),
(4, 'Today Meeting', 'hello everyone', '2019-06-13 06:05:32', '2019-06-13 06:05:32');

-- --------------------------------------------------------

--
-- Table structure for table `sizzler_models`
--

CREATE TABLE `sizzler_models` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `decision` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sizzler_models`
--

INSERT INTO `sizzler_models` (`id`, `decision`, `description`, `created_at`, `updated_at`) VALUES
(1, 'Reschedule', 'hello everyone. hope all good unfortunately the meeting was not held today.', '2019-05-31 08:37:51', '2019-05-31 08:37:51');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `profession` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phonenumber` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `images` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `profession`, `phonenumber`, `images`, `remember_token`, `created_at`, `updated_at`) VALUES
(11, 'monu shah', 'm@gmail.com', '$2y$10$qxtb2qa9e3lC7QXkh6kcG.wzFktrFibKZDBzPvC8VD3MmfLka0mE6', 'full stack developer', '7845123652', '1561024424.jpg', NULL, '2019-06-20 04:23:44', '2019-06-27 06:55:26'),
(12, 'xyz', 'x@gmail.com', '$2y$10$BsFN/btJ3Hdr7Qb/6JaUiOdd8U.Bj3OXxDDJd8CX8ajIUUmzgrgRW', 'test', '8521479634', '1561024786.jpg', NULL, '2019-06-20 04:29:46', '2019-06-20 04:29:46');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_models`
--
ALTER TABLE `admin_models`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mis_models`
--
ALTER TABLE `mis_models`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `sassy_models`
--
ALTER TABLE `sassy_models`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sizzler_models`
--
ALTER TABLE `sizzler_models`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_models`
--
ALTER TABLE `admin_models`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `mis_models`
--
ALTER TABLE `mis_models`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `sassy_models`
--
ALTER TABLE `sassy_models`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `sizzler_models`
--
ALTER TABLE `sizzler_models`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
