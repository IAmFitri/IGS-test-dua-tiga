-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 02, 2021 at 01:00 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.3.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_soal_dua_tiga`
--

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
-- Table structure for table `jenis_kendaraan`
--

CREATE TABLE `jenis_kendaraan` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `jenis_kendaraan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `jenis_kendaraan`
--

INSERT INTO `jenis_kendaraan` (`id`, `jenis_kendaraan`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Operasional', '2021-12-02 10:26:54', '2021-12-02 10:26:54', NULL),
(2, 'Non Operasional', '2021-12-02 10:26:54', '2021-12-02 10:26:54', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `master_stnk`
--

CREATE TABLE `master_stnk` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `no_stnk` int(11) NOT NULL,
  `no_polisi` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `merk` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jenis_kendaraan_id` bigint(20) UNSIGNED NOT NULL,
  `model` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_rangka` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `silinder` int(11) NOT NULL,
  `no_mesin` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `masa_berlaku` date NOT NULL,
  `tnkb` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `swdkllj` int(11) NOT NULL,
  `jasa_perpanjangan` int(11) DEFAULT NULL,
  `pkb` int(11) NOT NULL,
  `bahan_bakar` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tahun_kendaraan` int(11) NOT NULL,
  `nama_stnk` varchar(35) COLLATE utf8mb4_unicode_ci NOT NULL,
  `warna` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_bpkb` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nilai_pajak_stnk` int(11) DEFAULT NULL,
  `pajak_jasa` int(11) DEFAULT NULL,
  `pajak_stnk` date NOT NULL,
  `status_id` bigint(20) UNSIGNED NOT NULL DEFAULT 1,
  `created_by` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Admin Asman',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `master_stnk`
--

INSERT INTO `master_stnk` (`id`, `no_stnk`, `no_polisi`, `merk`, `jenis_kendaraan_id`, `model`, `no_rangka`, `silinder`, `no_mesin`, `masa_berlaku`, `tnkb`, `swdkllj`, `jasa_perpanjangan`, `pkb`, `bahan_bakar`, `tahun_kendaraan`, `nama_stnk`, `warna`, `no_bpkb`, `nilai_pajak_stnk`, `pajak_jasa`, `pajak_stnk`, `status_id`, `created_by`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 50238798, 'B1234BV', 'Toyota', 1, 'Truk', 'MHFMH1235680799', 1234, 'DC 817911', '2021-01-15', 'ABCDEF 123', 75000, 70000, 155000, 'Solar', 2010, 'Andin', 'Putih', 'NO12345655', 100000, 700000, '2023-10-10', 1, 'Admin Asman', '2021-12-02 03:27:33', '2021-12-02 03:30:23', NULL);

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
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2021_12_01_194537_create_master_stnk_table', 1),
(6, '2021_12_01_194629_create_jenis_kendaraan_table', 1),
(7, '2021_12_02_025114_create_status_table', 1),
(8, '2021_12_02_025226_add_relationships_to_master_stnk_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `personal_access_tokens`
--

INSERT INTO `personal_access_tokens` (`id`, `tokenable_type`, `tokenable_id`, `name`, `token`, `abilities`, `last_used_at`, `created_at`, `updated_at`) VALUES
(1, 'App\\Models\\User', 4, 'myapptoken', 'd98ad4cbf13058d0c3d05f781bc191d7fbd852bb959684c33f179c15c416d21a', '[\"*\"]', NULL, '2021-12-02 04:41:45', '2021-12-02 04:41:45'),
(2, 'App\\Models\\User', 5, 'myapptoken', '987719a2d41d38c33ffad147d9ffa88129a6d61983c6ff788e8eba8dab10fb90', '[\"*\"]', NULL, '2021-12-02 04:49:59', '2021-12-02 04:49:59');

-- --------------------------------------------------------

--
-- Table structure for table `status`
--

CREATE TABLE `status` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `status`
--

INSERT INTO `status` (`id`, `status`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Aktif', '2021-12-02 10:26:12', '2021-12-02 10:26:12', NULL),
(2, 'Tidak Aktif', '2021-12-02 10:26:12', '2021-12-02 10:26:12', NULL);

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
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Jo In Sung', 'joinsung@gmal.com', NULL, '12345', 'NrIxJnWHNpWGaPzOPd24xSzN7OUhNvEgwFmMlP2CA4RAyZqEJh', '2021-12-02 04:17:44', '2021-12-02 04:47:23', NULL),
(2, 'So Ji Sub', 'sojisub@mail.com', NULL, '$2y$10$sjVB2oziyMDFVGWOX3So3O0q8zkGsqqTzjMxtRvdO/n0VxjTdPWdy', 'T61CdibmwBUiThPrjWM0WCvURQlE5PPTVJnpCgPhB5xXCA1mWz', '2021-12-02 04:18:22', '2021-12-02 04:18:22', NULL),
(3, 'Kim So Hyun', 'kimsohyun@mail.com', NULL, '$2y$10$Vsrfxfv.rus39MgkKJbZluIEYW3lTUAqf00Upnan7IzDh6Pg0PbDy', '8Iyl6BCHy0MD6vbVo5jvQy8jxBdr6fBLNnii3wPY3kl6UB0yRA', '2021-12-02 04:19:10', '2021-12-02 04:48:57', '2021-12-02 04:48:57'),
(4, 'Lee Hyuk Jae', 'leehyukjae@mail.com', NULL, '$2y$10$nnnNO0jtvCmjXK6XRwEV5OmnNuuxGMme0flu1ERaac2j3m3ooW22C', NULL, '2021-12-02 04:41:45', '2021-12-02 04:41:45', NULL),
(5, 'Won Bin', 'wonbin@mail.com', NULL, '$2y$10$r9nG8VX591SRI9NPxKqOZO9bt9dbw4ZOdfrrGKABLt9SgaRM6noCa', NULL, '2021-12-02 04:49:59', '2021-12-02 04:49:59', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `jenis_kendaraan`
--
ALTER TABLE `jenis_kendaraan`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `jenis_kendaraan_jenis_kendaraan_unique` (`jenis_kendaraan`);

--
-- Indexes for table `master_stnk`
--
ALTER TABLE `master_stnk`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `master_stnk_no_stnk_unique` (`no_stnk`),
  ADD UNIQUE KEY `master_stnk_no_polisi_unique` (`no_polisi`),
  ADD UNIQUE KEY `master_stnk_no_rangka_unique` (`no_rangka`),
  ADD UNIQUE KEY `master_stnk_no_mesin_unique` (`no_mesin`),
  ADD KEY `master_stnk_jenis_kendaraan_id_foreign` (`jenis_kendaraan_id`),
  ADD KEY `master_stnk_status_id_foreign` (`status_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `status`
--
ALTER TABLE `status`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `status_status_unique` (`status`);

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
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jenis_kendaraan`
--
ALTER TABLE `jenis_kendaraan`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `master_stnk`
--
ALTER TABLE `master_stnk`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `status`
--
ALTER TABLE `status`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `master_stnk`
--
ALTER TABLE `master_stnk`
  ADD CONSTRAINT `master_stnk_jenis_kendaraan_id_foreign` FOREIGN KEY (`jenis_kendaraan_id`) REFERENCES `jenis_kendaraan` (`id`),
  ADD CONSTRAINT `master_stnk_status_id_foreign` FOREIGN KEY (`status_id`) REFERENCES `status` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
