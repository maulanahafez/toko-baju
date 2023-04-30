-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 18, 2023 at 09:31 AM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `toko_baju_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `bajus`
--

CREATE TABLE `bajus` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `jenis_baju_id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `harga` bigint(20) UNSIGNED NOT NULL,
  `ukuran` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `bajus`
--

INSERT INTO `bajus` (`id`, `jenis_baju_id`, `nama`, `harga`, `ukuran`, `created_at`, `updated_at`) VALUES
(1, 1, 'Et est nihil et fugit.', 389724, 'n', '2023-04-17 23:24:46', '2023-04-17 23:24:46'),
(2, 1, 'Beatae dolores pariatur placeat fuga sint quo.', 59141, 'g', '2023-04-17 23:24:46', '2023-04-17 23:24:46'),
(3, 1, 'Aut quod aut blanditiis repudiandae quis aut mollitia amet.', 88821, 'f', '2023-04-17 23:24:46', '2023-04-17 23:24:46'),
(4, 1, 'Sequi quam hic itaque.', 53276, 'r', '2023-04-17 23:24:46', '2023-04-17 23:24:46'),
(5, 1, 'Occaecati et blanditiis ut qui.', 495954, 's', '2023-04-17 23:24:46', '2023-04-17 23:24:46'),
(6, 2, 'Quo inventore corrupti odit dolor architecto eligendi est molestias.', 227931, 'z', '2023-04-17 23:24:46', '2023-04-17 23:24:46'),
(7, 2, 'Aspernatur est eveniet et.', 54009, 'h', '2023-04-17 23:24:46', '2023-04-17 23:24:46'),
(8, 2, 'Itaque quo repudiandae et ut distinctio.', 367011, 'q', '2023-04-17 23:24:46', '2023-04-17 23:24:46'),
(9, 2, 'Perspiciatis dolor iste dolor exercitationem voluptatem velit cum officiis.', 251324, 'h', '2023-04-17 23:24:46', '2023-04-17 23:24:46'),
(10, 2, 'Animi fugit tenetur aliquid culpa voluptate est reiciendis.', 479016, 'x', '2023-04-17 23:24:46', '2023-04-17 23:24:46'),
(11, 3, 'Incidunt voluptas ut dolor deserunt nam qui doloremque.', 271760, 't', '2023-04-17 23:24:46', '2023-04-17 23:24:46'),
(12, 3, 'Dolor et ullam temporibus placeat.', 238583, 'y', '2023-04-17 23:24:46', '2023-04-17 23:24:46'),
(13, 3, 'Vel delectus est nisi praesentium incidunt accusamus.', 137602, 'q', '2023-04-17 23:24:46', '2023-04-17 23:24:46'),
(14, 3, 'Dolorem sit harum voluptatem dignissimos a excepturi asperiores.', 108117, 'l', '2023-04-17 23:24:46', '2023-04-17 23:24:46'),
(15, 3, 'Et amet et voluptas sit beatae voluptatem eveniet velit.', 478684, 'i', '2023-04-17 23:24:46', '2023-04-17 23:24:46'),
(18, 6, 'Baju Baru', 200000, 'L', '2023-04-18 00:18:44', '2023-04-18 00:18:44'),
(19, 7, 'Kemeja 2', 200000, 'XL', '2023-04-18 00:24:06', '2023-04-18 00:24:06');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
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
-- Table structure for table `jenis_bajus`
--

CREATE TABLE `jenis_bajus` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `jenis_baju` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `jenis_bajus`
--

INSERT INTO `jenis_bajus` (`id`, `jenis_baju`, `created_at`, `updated_at`) VALUES
(1, 'perspiciatis', '2023-04-17 23:24:46', '2023-04-17 23:24:46'),
(2, 'aut', '2023-04-17 23:24:46', '2023-04-17 23:24:46'),
(3, 'qui', '2023-04-17 23:24:46', '2023-04-17 23:24:46'),
(4, 'Baru', '2023-04-17 23:57:13', '2023-04-17 23:57:13'),
(5, 'Baru Lagi', '2023-04-17 23:57:33', '2023-04-17 23:57:33'),
(6, 'Baru Banget', '2023-04-18 00:06:02', '2023-04-18 00:06:02'),
(7, 'Kemeja', '2023-04-18 00:23:35', '2023-04-18 00:23:35');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
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
(5, '2023_04_18_060715_create_bajus_table', 1),
(6, '2023_04_18_060724_create_jenis_bajus_table', 1),
(7, '2023_04_18_060730_create_penjualans_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `penjualans`
--

CREATE TABLE `penjualans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `bajus_id` bigint(20) UNSIGNED NOT NULL,
  `tanggal` date NOT NULL,
  `jumlah_terjual` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `penjualans`
--

INSERT INTO `penjualans` (`id`, `bajus_id`, `tanggal`, `jumlah_terjual`, `created_at`, `updated_at`) VALUES
(1, 1, '2005-06-30', 1, '2023-04-18 00:11:13', '2023-04-18 00:11:13'),
(2, 2, '1978-04-09', 1, '2023-04-18 00:11:13', '2023-04-18 00:11:13'),
(3, 3, '1985-03-01', 1, '2023-04-18 00:11:13', '2023-04-18 00:11:13'),
(4, 4, '2004-04-14', 1, '2023-04-18 00:11:13', '2023-04-18 00:11:13'),
(5, 5, '1993-12-04', 1, '2023-04-18 00:11:13', '2023-04-18 00:11:13'),
(6, 6, '1988-04-15', 1, '2023-04-18 00:11:13', '2023-04-18 00:11:13'),
(7, 7, '2013-08-22', 1, '2023-04-18 00:11:13', '2023-04-18 00:11:13'),
(8, 8, '2020-01-08', 1, '2023-04-18 00:11:13', '2023-04-18 00:11:13'),
(9, 9, '1991-05-30', 3, '2023-04-18 00:11:13', '2023-04-18 00:11:13'),
(10, 10, '1990-03-19', 3, '2023-04-18 00:11:13', '2023-04-18 00:11:13'),
(11, 11, '1977-02-24', 5, '2023-04-18 00:11:13', '2023-04-18 00:11:13'),
(12, 12, '1991-09-16', 3, '2023-04-18 00:11:13', '2023-04-18 00:11:13'),
(13, 13, '2010-05-21', 1, '2023-04-18 00:11:13', '2023-04-18 00:11:13'),
(14, 14, '2018-07-27', 4, '2023-04-18 00:11:13', '2023-04-18 00:11:13'),
(15, 15, '1976-07-24', 2, '2023-04-18 00:11:13', '2023-04-18 00:11:13');

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
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
-- Indexes for dumped tables
--

--
-- Indexes for table `bajus`
--
ALTER TABLE `bajus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `jenis_bajus`
--
ALTER TABLE `jenis_bajus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `penjualans`
--
ALTER TABLE `penjualans`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bajus`
--
ALTER TABLE `bajus`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jenis_bajus`
--
ALTER TABLE `jenis_bajus`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `penjualans`
--
ALTER TABLE `penjualans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
