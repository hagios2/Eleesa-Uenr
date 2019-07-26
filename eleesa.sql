-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jul 26, 2019 at 09:45 AM
-- Server version: 5.7.27-0ubuntu0.18.04.1
-- PHP Version: 7.2.19-0ubuntu0.18.04.1

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
(1, 2, NULL, 'ELNG 114', 'Intro to Electrical Machines', '2019-07-26 17:09:24', '2019-07-26 17:09:24'),
(2, 5, 1, 'ELNG 303', 'Linear Electronic Circuits', '2019-07-26 17:12:03', '2019-07-26 17:12:03'),
(3, 13, 1, 'ELNG 305', 'Classical Control Systems', '2019-07-26 17:13:35', '2019-07-26 17:13:35'),
(4, 5, 1, 'ELNG 307', 'Analog and Digital Communication', '2019-07-26 17:16:12', '2019-07-26 17:16:12'),
(5, 3, 1, 'CENG 205', 'Computer Programming for Engineers', '2019-07-26 17:26:00', '2019-07-26 17:26:00'),
(6, 6, NULL, 'CENG 312', 'Database and Information Retrieval', '2019-07-26 17:27:21', '2019-07-26 17:27:21'),
(7, 11, 1, 'CENG 201', 'Electrical Circuit Design', '2019-07-26 17:34:05', '2019-07-26 17:34:05'),
(8, 5, 1, 'STAT 309', 'Probability and Statistics For Engineers', '2019-07-26 17:36:27', '2019-07-26 17:36:27');

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
(1, 'Level 100', '2019-07-26 16:57:28', '2019-07-26 16:57:28'),
(2, 'Level 200', '2019-07-26 16:57:28', '2019-07-26 16:57:28'),
(3, 'Level 300', '2019-07-26 16:57:28', '2019-07-26 16:57:28'),
(4, 'Level 400', '2019-07-26 16:57:28', '2019-07-26 16:57:28');

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
(1, 1, NULL, NULL, 'Machines.pdf', '2019-07-26 17:09:24', '2019-07-26 17:09:24'),
(2, 2, NULL, NULL, 'Linear Electronics.pdf', '2019-07-26 17:12:03', '2019-07-26 17:12:03'),
(3, 2, NULL, NULL, 'Linear Electronics mid sem.pdf', '2019-07-26 17:12:23', '2019-07-26 17:12:23'),
(4, 3, NULL, NULL, 'classical.pdf', '2019-07-26 17:13:36', '2019-07-26 17:13:36'),
(5, 3, NULL, NULL, 'classical mid sem.pdf', '2019-07-26 17:13:52', '2019-07-26 17:13:52'),
(6, 3, NULL, NULL, 'classical mid sem1.pdf', '2019-07-26 17:14:08', '2019-07-26 17:14:08'),
(7, 3, NULL, NULL, 'classical quiz.pdf', '2019-07-26 17:14:21', '2019-07-26 17:14:21'),
(8, 4, NULL, NULL, 'analog communication mid sem.pdf', '2019-07-26 17:16:12', '2019-07-26 17:16:12'),
(9, 4, NULL, NULL, 'analog communication mid sem1.pdf', '2019-07-26 17:16:35', '2019-07-26 17:16:35'),
(10, 4, NULL, NULL, 'analog communication quiz.pdf', '2019-07-26 17:16:49', '2019-07-26 17:16:49'),
(11, 4, NULL, NULL, 'analog communication-min.pdf', '2019-07-26 17:20:39', '2019-07-26 17:20:39'),
(12, 5, NULL, NULL, 'C prog.pdf', '2019-07-26 17:26:00', '2019-07-26 17:26:00'),
(13, 5, NULL, NULL, 'C prog mid sem.pdf', '2019-07-26 17:26:13', '2019-07-26 17:26:13'),
(15, 7, NULL, NULL, 'EE Design1.pdf', '2019-07-26 17:34:05', '2019-07-26 17:34:05'),
(16, 7, NULL, NULL, 'Electrical Circuit Design.pdf', '2019-07-26 17:34:20', '2019-07-26 17:34:20'),
(17, 8, NULL, NULL, 'prob.pdf', '2019-07-26 17:36:27', '2019-07-26 17:36:27'),
(18, 8, NULL, NULL, 'prob1.pdf', '2019-07-26 17:36:43', '2019-07-26 17:36:43');

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
(1, 'Computer Engineering', '2019-07-26 16:57:27', '2019-07-26 16:57:27'),
(2, 'Electrical Engineering', '2019-07-26 16:57:27', '2019-07-26 16:57:27');

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
(1, 1, 1, 'CE 100 First Semester', '2019-07-26 16:57:27', '2019-07-26 16:57:27'),
(2, 1, 1, 'CE 100 Second Semester', '2019-07-26 16:57:27', '2019-07-26 16:57:27'),
(3, 1, 2, 'CE 200 First Semester', '2019-07-26 16:57:27', '2019-07-26 16:57:27'),
(4, 1, 2, 'CE 200 Second Semester', '2019-07-26 16:57:27', '2019-07-26 16:57:27'),
(5, 1, 3, 'CE 300 First Semester', '2019-07-26 16:57:27', '2019-07-26 16:57:27'),
(6, 1, 3, 'CE 300 Second Semester', '2019-07-26 16:57:27', '2019-07-26 16:57:27'),
(7, 1, 4, 'CE 400 First Semester', '2019-07-26 16:57:27', '2019-07-26 16:57:27'),
(8, 1, 4, 'CE 400 Second Semester', '2019-07-26 16:57:27', '2019-07-26 16:57:27'),
(9, 2, 1, 'EEE 100 First Semester', '2019-07-26 16:57:27', '2019-07-26 16:57:27'),
(10, 2, 1, 'EEE 100 Second Semester', '2019-07-26 16:57:27', '2019-07-26 16:57:27'),
(11, 2, 2, 'EEE 200 First Semester', '2019-07-26 16:57:27', '2019-07-26 16:57:27'),
(12, 2, 2, 'EEE 200 Second Semester', '2019-07-26 16:57:28', '2019-07-26 16:57:28'),
(13, 2, 3, 'EEE 300 First Semester', '2019-07-26 16:57:28', '2019-07-26 16:57:28'),
(14, 2, 3, 'EEE 300 Second Semester', '2019-07-26 16:57:28', '2019-07-26 16:57:28'),
(15, 2, 4, 'EEE 400 First Semester', '2019-07-26 16:57:28', '2019-07-26 16:57:28'),
(16, 2, 4, 'EEE 400 Second Semester', '2019-07-26 16:57:28', '2019-07-26 16:57:28');

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
  `index_no` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
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
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD UNIQUE KEY `users_index_no_unique` (`index_no`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `levels`
--
ALTER TABLE `levels`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `materials`
--
ALTER TABLE `materials`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
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
