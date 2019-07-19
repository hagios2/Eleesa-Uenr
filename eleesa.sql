-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jul 19, 2019 at 02:43 PM
-- Server version: 5.7.26-0ubuntu0.19.04.1
-- PHP Version: 7.2.19-0ubuntu0.19.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `eleesa`
--

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `id` int(10) UNSIGNED NOT NULL,
  `sem_id` bigint(20) UNSIGNED NOT NULL,
  `combined` tinyint(1) DEFAULT NULL,
  `course_code` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `course` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`id`, `sem_id`, `combined`, `course_code`, `course`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 'ELNG 104', 'Applied Electricity', '2019-07-19 18:52:31', '2019-07-19 18:52:31'),
(2, 1, NULL, 'UENR205', 'AGRIC ENGINEERING', '2019-07-19 18:53:29', '2019-07-19 18:53:29'),
(3, 1, NULL, 'CSC 302', 'CIRCUIT DESIGN', '2019-07-19 18:54:14', '2019-07-19 18:54:14'),
(6, 1, NULL, 'UENR2051', 'French', '2019-07-19 18:58:40', '2019-07-19 18:58:40');

-- --------------------------------------------------------

--
-- Table structure for table `levels`
--

CREATE TABLE `levels` (
  `id` int(10) UNSIGNED NOT NULL,
  `level` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `levels`
--

INSERT INTO `levels` (`id`, `level`, `created_at`, `updated_at`) VALUES
(1, 'Level 100', '2019-07-19 18:48:43', '2019-07-19 18:48:43'),
(2, 'Level 200', '2019-07-19 18:48:43', '2019-07-19 18:48:43'),
(3, 'Level 300', '2019-07-19 18:48:44', '2019-07-19 18:48:44'),
(4, 'Level 400', '2019-07-19 18:48:44', '2019-07-19 18:48:44');

-- --------------------------------------------------------

--
-- Table structure for table `materials`
--

CREATE TABLE `materials` (
  `id` int(10) UNSIGNED NOT NULL,
  `course_id` bigint(20) UNSIGNED NOT NULL,
  `book` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `slide` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `pasco` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `materials`
--

INSERT INTO `materials` (`id`, `course_id`, `book`, `slide`, `pasco`, `created_at`, `updated_at`) VALUES
(1, 1, 'AttachmentOteng.pdf', 'AttachmentOteng.pdf', 'constitution src.pdf', '2019-07-19 18:52:31', '2019-07-19 18:52:31'),
(2, 2, 'constitution src.pdf', 'constitution src.pdf', 'constitution src.pdf', '2019-07-19 18:53:29', '2019-07-19 18:53:29'),
(3, 3, 'constitution src.pdf', 'AttachmentOteng.pdf', 'constitution src.pdf', '2019-07-19 18:54:14', '2019-07-19 18:54:14'),
(4, 6, 'constitution src.pdf', 'AttachmentOteng.pdf', 'AttachmentOteng.pdf', '2019-07-19 18:58:40', '2019-07-19 18:58:40');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`migration`, `batch`) VALUES
('2014_10_12_000000_create_users_table', 1),
('2014_10_12_100000_create_password_resets_table', 1),
('2019_07_17_124452_create_materials_table', 1),
('2019_07_17_124746_create_programs_table', 1),
('2019_07_17_125027_create_semesters_table', 1),
('2019_07_17_125257_create_levels_table', 1),
('2019_07_17_125329_create_courses_table', 1),
('2019_07_17_163738_create_sessions_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `programs`
--

CREATE TABLE `programs` (
  `id` int(10) UNSIGNED NOT NULL,
  `program` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `programs`
--

INSERT INTO `programs` (`id`, `program`, `created_at`, `updated_at`) VALUES
(1, 'Computer Engineering', '2019-07-19 18:48:42', '2019-07-19 18:48:42'),
(2, 'Electrical Engineering', '2019-07-19 18:48:42', '2019-07-19 18:48:42');

-- --------------------------------------------------------

--
-- Table structure for table `semesters`
--

CREATE TABLE `semesters` (
  `id` int(10) UNSIGNED NOT NULL,
  `prog_id` bigint(20) UNSIGNED NOT NULL,
  `level_id` bigint(20) UNSIGNED NOT NULL,
  `sem` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `semesters`
--

INSERT INTO `semesters` (`id`, `prog_id`, `level_id`, `sem`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 'CE 100 First Semester', '2019-07-19 18:48:42', '2019-07-19 18:48:42'),
(2, 1, 1, 'CE 100 Second Semester', '2019-07-19 18:48:42', '2019-07-19 18:48:42'),
(3, 1, 2, 'CE 200 First Semester', '2019-07-19 18:48:43', '2019-07-19 18:48:43'),
(4, 1, 2, 'CE 200 Second Semester', '2019-07-19 18:48:43', '2019-07-19 18:48:43'),
(5, 1, 3, 'CE 300 First Semester', '2019-07-19 18:48:43', '2019-07-19 18:48:43'),
(6, 1, 3, 'CE 300 Second Semester', '2019-07-19 18:48:43', '2019-07-19 18:48:43'),
(7, 1, 4, 'CE 400 First Semester', '2019-07-19 18:48:43', '2019-07-19 18:48:43'),
(8, 1, 4, 'CE 400 Second Semester', '2019-07-19 18:48:43', '2019-07-19 18:48:43'),
(9, 2, 1, 'EEE 100 First Semester', '2019-07-19 18:48:43', '2019-07-19 18:48:43'),
(10, 2, 1, 'EEE 100 Second Semester', '2019-07-19 18:48:43', '2019-07-19 18:48:43'),
(11, 2, 2, 'EEE 200 First Semester', '2019-07-19 18:48:43', '2019-07-19 18:48:43'),
(12, 2, 2, 'EEE 200 Second Semester', '2019-07-19 18:48:43', '2019-07-19 18:48:43'),
(13, 2, 3, 'EEE 300 First Semester', '2019-07-19 18:48:43', '2019-07-19 18:48:43'),
(14, 2, 3, 'EEE 300 Second Semester', '2019-07-19 18:48:43', '2019-07-19 18:48:43'),
(15, 2, 4, 'EEE 400 First Semester', '2019-07-19 18:48:43', '2019-07-19 18:48:43'),
(16, 2, 4, 'EEE 400 Second Semester', '2019-07-19 18:48:43', '2019-07-19 18:48:43');

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8_unicode_ci,
  `payload` text COLLATE utf8_unicode_ci NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `courses_course_code_unique` (`course_code`),
  ADD UNIQUE KEY `courses_course_unique` (`course`),
  ADD KEY `courses_sem_id_index` (`sem_id`);

--
-- Indexes for table `levels`
--
ALTER TABLE `levels`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `levels_level_unique` (`level`);

--
-- Indexes for table `materials`
--
ALTER TABLE `materials`
  ADD PRIMARY KEY (`id`),
  ADD KEY `materials_course_id_index` (`course_id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`),
  ADD KEY `password_resets_token_index` (`token`);

--
-- Indexes for table `programs`
--
ALTER TABLE `programs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `programs_program_unique` (`program`);

--
-- Indexes for table `semesters`
--
ALTER TABLE `semesters`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD UNIQUE KEY `sessions_id_unique` (`id`);

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
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `levels`
--
ALTER TABLE `levels`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `materials`
--
ALTER TABLE `materials`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `programs`
--
ALTER TABLE `programs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `semesters`
--
ALTER TABLE `semesters`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
