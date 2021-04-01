-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Apr 01, 2021 at 09:53 PM
-- Server version: 5.7.32
-- PHP Version: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `sdgs`
--

-- --------------------------------------------------------

--
-- Table structure for table `companies`
--

CREATE TABLE `companies` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contents` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `link` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `msg` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `history` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created` datetime NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `companies`
--

INSERT INTO `companies` (`id`, `name`, `contents`, `link`, `msg`, `history`, `created`, `created_at`, `updated_at`) VALUES
(74, 'earg', 'lf', 'https://qiita.com/fagai/items/9904409d3703ef6f79a2', 'gaohgia', 'おおともしょうです', '0000-00-00 00:00:00', '2021-03-31 15:19:42', '2021-03-31 15:19:42'),
(75, 'ga', 'gaga', 'https://qiita.com/fagai/items/9904409d3703ef6f79a2', 'gaa', 'gaga', '0000-00-00 00:00:00', '2021-03-31 15:54:23', '2021-03-31 15:54:23'),
(76, 'gaga', 'ga', 'https://qiita.com/fagai/items/9904409d3703ef6f79a2', 'tsgae', 'gaa', '0000-00-00 00:00:00', '2021-03-31 18:28:50', '2021-03-31 18:28:50'),
(77, 'gaga', 'gaga', 'https://qiita.com/fagai/items/9904409d3703ef6f79a2', 'gaga', 'gaga', '0000-00-00 00:00:00', '2021-03-31 20:12:07', '2021-03-31 20:12:07'),
(78, 'gaga', 'とぇrgg', 'https://qiita.com/fagai/items/9904409d3703ef6f79a2', 'gクァg', 'gクァg', '0000-00-00 00:00:00', '2021-03-31 21:23:27', '2021-03-31 21:23:27'),
(79, 'gaga', 'がが', 'https://qiita.com/fagai/items/9904409d3703ef6f79a2', 'がが', 'がが', '0000-00-00 00:00:00', '2021-03-31 22:43:33', '2021-03-31 22:43:33'),
(80, 'gaga', 'gagaga', 'https://qiita.com/fagai/items/9904409d3703ef6f79a2', 'gaga', 'gaga', '0000-00-00 00:00:00', '2021-04-01 00:01:44', '2021-04-01 00:01:44'),
(81, '最新のテストです', 'gagaga', 'https://qiita.com/fagai/items/9904409d3703ef6f79a2', 'gaga', 'gaga', '0000-00-00 00:00:00', '2021-04-01 00:02:06', '2021-04-01 00:02:06'),
(82, 'gaga', 'reaga', 'https://qiita.com/fagai/items/9904409d3703ef6f79a2', 'gaga', 'gaga', '0000-00-00 00:00:00', '2021-04-01 00:14:25', '2021-04-01 00:14:25');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `ideas`
--

CREATE TABLE `ideas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `idea_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `idea_theme` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `idea_detail` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `budget` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sales_tgt` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `people` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `people_qlt` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `marketing` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sdgs_no` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `ideas`
--

INSERT INTO `ideas` (`id`, `idea_name`, `idea_theme`, `idea_detail`, `budget`, `sales_tgt`, `people`, `people_qlt`, `marketing`, `sdgs_no`, `created_at`, `updated_at`) VALUES
(9, 'テストなのだ', '', 'テスト', '111111', 'いろんな人', '12にん', '動画編集', 'マーケティングは特になり', '全部の番号です', '2021-03-30 03:21:08', '2021-03-30 03:21:08');

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
(6, '2014_10_12_100000_create_password_resets_table', 1),
(7, '2019_08_19_000000_create_failed_jobs_table', 1);

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
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_mail` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_phone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_work` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `work_history` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_age` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `companies`
--
ALTER TABLE `companies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ideas`
--
ALTER TABLE `ideas`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `companies`
--
ALTER TABLE `companies`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=83;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ideas`
--
ALTER TABLE `ideas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
