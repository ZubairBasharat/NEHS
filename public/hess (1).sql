-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 02, 2021 at 07:51 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hess`
--

-- --------------------------------------------------------

--
-- Table structure for table `assignments`
--

CREATE TABLE `assignments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `course_id` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `file` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `assignments`
--

INSERT INTO `assignments` (`id`, `course_id`, `title`, `description`, `file`, `type`, `status`, `created_at`, `updated_at`) VALUES
(7, 6, 'abc', 'abc', '1619809019.gif', 'File', '1', '2021-04-30 13:56:59', '2021-04-30 13:56:59'),
(8, 4, 'test video assignment', 'abc', 'movie.mp4', 'video', '1', '2021-05-01 23:51:04', '2021-05-01 23:51:04'),
(9, 4, 'This is your assignment', 'ok', '1619932530.pdf', 'File', '1', '2021-05-02 00:15:30', '2021-05-02 00:16:26');

-- --------------------------------------------------------

--
-- Table structure for table `assignquestions`
--

CREATE TABLE `assignquestions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `course_id` int(11) NOT NULL,
  `question_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `assignquestions`
--

INSERT INTO `assignquestions` (`id`, `course_id`, `question_id`, `created_at`, `updated_at`) VALUES
(1, 4, 6, '2021-04-29 06:48:35', '2021-04-29 06:48:35'),
(2, 4, 6, '2021-04-29 06:49:44', '2021-04-29 06:49:45'),
(3, 4, 1, '2021-04-29 07:00:54', '2021-04-29 07:00:54'),
(4, 4, 7, '2021-04-29 07:00:54', '2021-04-29 07:00:54'),
(5, 4, 6, '2021-04-29 07:00:54', '2021-04-29 07:00:54'),
(6, 5, 5, '2021-04-30 01:21:51', '2021-04-30 01:21:51'),
(7, 4, 1, '2021-04-30 04:32:59', '2021-04-30 04:32:59'),
(8, 4, 1, '2021-04-30 11:02:52', '2021-04-30 11:02:52'),
(9, 4, 7, '2021-04-30 11:02:52', '2021-04-30 11:02:52'),
(10, 4, 6, '2021-04-30 11:02:52', '2021-04-30 11:02:52'),
(11, 4, 8, '2021-04-30 11:02:52', '2021-04-30 11:02:52');

-- --------------------------------------------------------

--
-- Table structure for table `assign_commons`
--

CREATE TABLE `assign_commons` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `course_id` int(11) NOT NULL,
  `department_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `assign_commons`
--

INSERT INTO `assign_commons` (`id`, `course_id`, `department_id`, `created_at`, `updated_at`) VALUES
(2, 5, 3, '2021-04-29 07:19:18', '2021-04-29 07:19:18'),
(3, 5, 3, '2021-04-30 01:23:52', '2021-04-30 01:23:52');

-- --------------------------------------------------------

--
-- Table structure for table `certificates`
--

CREATE TABLE `certificates` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `course_id` int(11) NOT NULL,
  `course_type` int(11) NOT NULL,
  `issuer` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ticket` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `expiray_date` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `accuqired` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `certificates`
--

INSERT INTO `certificates` (`id`, `course_id`, `course_type`, `issuer`, `ticket`, `expiray_date`, `accuqired`, `created_at`, `updated_at`) VALUES
(2, 0, 0, 'Admin', '500', '2021-04-30', '2021-04-23', '2021-04-23 07:02:00', '2021-04-23 07:02:00');

-- --------------------------------------------------------

--
-- Table structure for table `companies`
--

CREATE TABLE `companies` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `companies`
--

INSERT INTO `companies` (`id`, `name`, `description`, `status`, `created_at`, `updated_at`) VALUES
(3, 'abc', 'amazon', 1, '2021-04-18 07:01:28', '2021-04-18 07:01:28'),
(4, 'farhan bashir', 'fsdfs', 1, '2021-04-18 07:21:23', '2021-04-18 07:21:23'),
(5, 'waqar', 'fsfsgsg', 1, '2021-04-20 03:05:09', '2021-04-20 03:16:20');

-- --------------------------------------------------------

--
-- Table structure for table `coursecategory`
--

CREATE TABLE `coursecategory` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `esp_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `coursecategory`
--

INSERT INTO `coursecategory` (`id`, `name`, `esp_name`, `status`, `created_at`, `updated_at`) VALUES
(1, 'hsdfkj', 'kjslj', 0, '2021-04-19 01:50:17', '2021-04-19 05:47:31'),
(2, 'abc', 'jkjkj', 1, '2021-04-19 01:53:11', '2021-04-19 01:53:11'),
(4, 'test123', 'test123', 1, '2021-04-20 08:24:42', '2021-04-20 08:24:42'),
(5, 'PMart', 'test123', 1, '2021-04-28 15:35:57', '2021-04-28 15:35:57');

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL,
  `cat_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `department_id` int(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`id`, `name`, `description`, `status`, `cat_id`, `created_at`, `updated_at`, `department_id`) VALUES
(4, 'abc', 'Question', 0, 2, '2021-04-19 05:34:58', '2021-04-19 05:46:45', 2),
(5, 'amazon', 'Question', 1, 1, '2021-04-20 07:08:30', '2021-04-20 07:08:30', 3),
(6, 'New Corse', 'Video', 1, 2, '2021-04-20 07:45:20', '2021-04-20 07:45:20', 2),
(7, 'System check', 'Video', 1, 2, '2021-04-20 08:11:40', '2021-04-20 08:11:40', 3),
(8, 'test123', 'Question', 0, 4, '2021-04-20 08:25:05', '2021-04-25 04:16:17', 2);

-- --------------------------------------------------------

--
-- Table structure for table `course_results`
--

CREATE TABLE `course_results` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `worker_id` int(11) NOT NULL,
  `course_id` int(11) NOT NULL,
  `correct` int(11) NOT NULL,
  `wrong` int(11) NOT NULL,
  `attempt` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `grade` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `course_results`
--

INSERT INTO `course_results` (`id`, `worker_id`, `course_id`, `correct`, `wrong`, `attempt`, `total`, `grade`, `created_at`, `updated_at`) VALUES
(1, 8, 4, 4, 1, 5, 5, 'pass', '2021-04-23 07:39:44', '2021-04-23 07:39:44'),
(4, 8, 5, 0, 0, 0, 1, 'fail', '2021-04-25 02:15:13', '2021-04-25 02:15:13'),
(5, 7, 4, 4, 1, 5, 5, 'pass', '2021-04-27 02:10:37', '2021-04-27 02:10:37'),
(6, 8, 4, 2, 0, 2, 5, 'fail', '2021-04-30 11:39:56', '2021-04-30 11:39:56');

-- --------------------------------------------------------

--
-- Table structure for table `departments`
--

CREATE TABLE `departments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `departments`
--

INSERT INTO `departments` (`id`, `name`, `description`, `status`, `created_at`, `updated_at`) VALUES
(2, 'Engineering', 'Engineering Description', 1, '2021-04-18 07:44:57', '2021-04-22 07:08:28'),
(3, 'Mechanics', 'Mechanics Description', 1, '2021-04-22 07:08:02', '2021-04-22 07:08:02');

-- --------------------------------------------------------

--
-- Table structure for table `department_has_courses`
--

CREATE TABLE `department_has_courses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `department_id` bigint(20) NOT NULL,
  `course_id` bigint(20) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
-- Table structure for table `fields`
--

CREATE TABLE `fields` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `field_type` enum('input','textarea','select','radio','checkbox') COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `folders`
--

CREATE TABLE `folders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `add_by` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `folders`
--

INSERT INTO `folders` (`id`, `name`, `add_by`, `created_at`, `updated_at`) VALUES
(2, 'abc', 8, '2021-04-30 11:29:12', '2021-04-30 11:29:12');

-- --------------------------------------------------------

--
-- Table structure for table `forms`
--

CREATE TABLE `forms` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `form_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `forms`
--

INSERT INTO `forms` (`id`, `form_name`, `created_at`, `updated_at`) VALUES
(1, 'abc', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `form_fields`
--

CREATE TABLE `form_fields` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `form_id` int(11) NOT NULL,
  `field_id` int(11) NOT NULL,
  `options` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL CHECK (json_valid(`options`))
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(4, '2021_04_16_105421_create_permission_tables', 1),
(6, '2021_04_18_084204_create_companies_table', 2),
(7, '2021_04_18_120728_create_departments_table', 3),
(10, '2021_04_18_123846_create_courses_table', 4),
(11, '2021_04_18_123537_create_coursecategory_table', 5),
(13, '2021_04_18_180029_create_certificates_table', 5),
(15, '2021_04_18_144631_create_videos_table', 6),
(16, '2021_04_19_062532_create_video_categories_table', 7),
(17, '2021_04_19_124750_create_workers_table', 8),
(19, '2021_04_20_052107_create_questions_table', 9),
(21, '2021_04_20_113144_create_table_worker_courses_table', 10),
(22, '2021_04_22_111932_create_department_has_courses_table', 11),
(24, '2021_04_23_114243_create_course_results_table', 12),
(25, '2019_11_05_094345_create_forms_table', 13),
(26, '2019_11_05_094809_create_fields_table', 13),
(27, '2019_11_05_094833_create_form_fields_table', 13),
(28, '2021_04_28_185555_create_assignments_table', 14),
(29, '2021_04_28_231319_assignquestions', 15),
(30, '2021_04_29_001312_create_assign_commons_table', 16),
(31, '2021_04_29_080241_create_folders_table', 17);

-- --------------------------------------------------------

--
-- Table structure for table `model_has_permissions`
--

CREATE TABLE `model_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `model_has_roles`
--

CREATE TABLE `model_has_roles` (
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `model_has_roles`
--

INSERT INTO `model_has_roles` (`role_id`, `model_type`, `model_id`) VALUES
(1, 'App\\Models\\User', 2),
(2, 'App\\Models\\User', 1),
(2, 'App\\Models\\User', 6),
(2, 'App\\Models\\User', 8),
(2, 'App\\Models\\User', 9);

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
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'add manager', 'web', '2021-04-19 07:01:50', '2021-04-19 07:01:50'),
(2, 'view manager', 'web', '2021-04-19 07:01:50', '2021-04-19 07:01:50'),
(3, 'edit manager', 'web', '2021-04-19 07:01:50', '2021-04-19 07:01:50'),
(4, 'delete manager', 'web', '2021-04-19 07:01:50', '2021-04-19 07:01:50'),
(5, 'add course', 'web', '2021-04-19 07:01:50', '2021-04-19 07:01:50'),
(6, 'view course', 'web', '2021-04-19 07:01:50', '2021-04-19 07:01:50'),
(7, 'edit course', 'web', '2021-04-19 07:01:50', '2021-04-19 07:01:50'),
(8, 'delete course', 'web', '2021-04-19 07:01:50', '2021-04-19 07:01:50'),
(9, 'add course_cat', 'web', '2021-04-19 07:01:50', '2021-04-19 07:01:50'),
(10, 'view course_cat', 'web', '2021-04-19 07:01:51', '2021-04-19 07:01:51'),
(11, 'edit course_cat', 'web', '2021-04-19 07:01:51', '2021-04-19 07:01:51'),
(12, 'delete course_cat', 'web', '2021-04-19 07:01:51', '2021-04-19 07:01:51'),
(13, 'add department', 'web', '2021-04-19 07:01:51', '2021-04-19 07:01:51'),
(14, 'view department', 'web', '2021-04-19 07:01:51', '2021-04-19 07:01:51'),
(15, 'edit department', 'web', '2021-04-19 07:01:51', '2021-04-19 07:01:51'),
(16, 'delete department', 'web', '2021-04-19 07:01:51', '2021-04-19 07:01:51');

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE `questions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `course_id` int(11) NOT NULL,
  `question` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `answer` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `option1` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `option2` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `option3` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `option4` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`id`, `course_id`, `question`, `answer`, `option1`, `option2`, `option3`, `option4`, `status`, `created_at`, `updated_at`) VALUES
(1, 4, 'What is your Name ???', 'Aslam', 'Aslam', 'Fawad', 'Khubaib', 'Hamza', 1, '2021-04-20 01:24:45', '2021-04-23 03:52:25'),
(7, 4, 'he has been playing cricket___2005.', 'since', 'for', 'since', 'from', 'None of these', 1, '2021-04-23 06:29:12', '2021-04-23 06:29:12'),
(5, 5, 'he has been playing cricket___2005.', 'since', 'for', 'since', 'from', 'fruit', 1, '2021-04-23 04:20:45', '2021-04-23 04:20:45'),
(6, 4, 'Orange is a__.', 'fruit', 'vegitable', 'Apple', 'dry fruit', 'fruit', 1, '2021-04-23 04:21:21', '2021-04-23 04:21:21'),
(8, 4, 'What does PHP stand for?', 'Pretext Hypertext Processor', 'Preprocessor Home Page', 'Pretext Hypertext Processor', 'Hypertext Preprocessor', 'Personal Home Page', 1, '2021-04-23 06:33:32', '2021-04-23 06:33:32'),
(9, 4, 'Which of the following must be installed on your computer so as to run PHP script?', 'Apache and PHP', 'XAMPP', 'Apache and PHP', 'IIS', 'Adobe Dreamweaver', 1, '2021-04-23 06:35:31', '2021-04-23 06:35:31');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'web', '2021-04-19 02:23:38', '2021-04-19 02:23:38'),
(2, 'User', 'web', '2021-04-19 02:25:23', '2021-04-19 02:25:23'),
(3, 'Manager', 'web', '2021-04-19 06:39:09', '2021-04-19 06:39:09');

-- --------------------------------------------------------

--
-- Table structure for table `role_has_permissions`
--

CREATE TABLE `role_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `table_worker_courses`
--

CREATE TABLE `table_worker_courses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `w_id` int(11) NOT NULL,
  `course_id` int(11) NOT NULL,
  `language` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `table_worker_courses`
--

INSERT INTO `table_worker_courses` (`id`, `w_id`, `course_id`, `language`, `created_at`, `updated_at`) VALUES
(1, 6, 4, 'English', '2021-04-30 04:06:44', '2021-04-30 04:06:44'),
(2, 8, 4, 'English', '2021-04-30 04:06:44', '2021-04-30 04:06:44');

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
  `photo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `photo`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'USER', 'test@example.com', '2021-04-16 06:03:46', '$2y$10$87GCrsvlECJrjV6dBl/jw.Bg6BxH1NdFrWuMZICTezaKLnwt5VyBC', 'storage/img/logo/HuNNAAVngtEozLlGqDsaqMJL1Puq9zHurWZeUEqO.jpg', 'rQvSHlWIX6DhOheNDOqDjSeRp7ZLQXiyUwv8h6ayJ4zOP801oOcSAzOZTokB', '2021-04-16 06:03:46', '2021-04-16 06:03:46'),
(2, 'farhan bashirr', 'farhanbashir06@gmail.com', NULL, '$2y$10$87GCrsvlECJrjV6dBl/jw.Bg6BxH1NdFrWuMZICTezaKLnwt5VyBC', 'storage/img/logo/HuNNAAVngtEozLlGqDsaqMJL1Puq9zHurWZeUEqO.jpg', NULL, '2021-04-16 06:10:30', '2021-04-19 04:43:15'),
(3, 'farhan hamza', 'hamza@gmail.com', NULL, '$2y$10$87GCrsvlECJrjV6dBl/jw.Bg6BxH1NdFrWuMZICTezaKLnwt5VyBC', NULL, NULL, '2021-04-21 06:00:53', '2021-04-21 06:00:53'),
(8, 'Waqar', 'x@gmail.com', NULL, '$2y$10$SnVnsXloXTjUHGzTGfmo9O/EHZhKHPUyWHiRUiuEUsCfR9euQ5Aei', NULL, NULL, '2021-04-21 06:37:56', '2021-04-21 06:37:56'),
(9, 'mota', 'mota@gmail.com', NULL, '$2y$10$k5rSjU/3cY/mjSuzhdIa1.Ycy7GN.xee1hr4K.6JkjOOKfEIYxR3.', NULL, NULL, '2021-04-22 00:40:09', '2021-04-22 00:40:09');

-- --------------------------------------------------------

--
-- Table structure for table `videos`
--

CREATE TABLE `videos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `course_id` int(11) NOT NULL,
  `department_id` int(11) NOT NULL,
  `video_cat_it` int(11) DEFAULT NULL,
  `video_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `video_desc` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `video_file` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `video_thumbnail` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `language` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `videos`
--

INSERT INTO `videos` (`id`, `course_id`, `department_id`, `video_cat_it`, `video_title`, `video_desc`, `video_file`, `video_thumbnail`, `language`, `created_at`, `updated_at`) VALUES
(1, 4353, 2, 2, 'aii', 'fjsdfjkl', '1618816248.mp4', '1618816248.jpg', 'ENG', '2021-04-19 02:10:48', '2021-04-19 02:10:48'),
(2, 7, 2, 2, 'web development', 'gfhghj', '1618925411.mp4', '1618925414.jpg', 'ENG', '2021-04-20 08:30:14', '2021-04-20 08:30:14');

-- --------------------------------------------------------

--
-- Table structure for table `video_categories`
--

CREATE TABLE `video_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `esp_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `video_categories`
--

INSERT INTO `video_categories` (`id`, `name`, `esp_name`, `status`, `created_at`, `updated_at`) VALUES
(2, 'seo', 'abc', 1, '2021-04-19 02:08:34', '2021-04-19 02:08:34'),
(3, 'abcd', 'hii', 1, '2021-04-20 08:25:35', '2021-04-20 08:25:35'),
(4, 'PMart', 'Psms', 1, '2021-04-28 15:23:00', '2021-04-28 15:24:39');

-- --------------------------------------------------------

--
-- Table structure for table `workers`
--

CREATE TABLE `workers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `first_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gender` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date_of_birth` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hire_date` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `native_language` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dep_id` int(11) DEFAULT NULL,
  `job_no` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `em_no` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `user_id` bigint(20) NOT NULL,
  `photo` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `workers`
--

INSERT INTO `workers` (`id`, `first_name`, `last_name`, `gender`, `email`, `date_of_birth`, `hire_date`, `native_language`, `phone`, `title`, `dep_id`, `job_no`, `type`, `em_no`, `status`, `created_at`, `updated_at`, `user_id`, `photo`) VALUES
(6, 'hamzaaa', 'hussainn', '2', 'hamzahussain911@yahoo.com', '2021-04-04', '2021-04-21', 'Spanish', '03216029947', 'Canva Solutions', 3, 'hkjhkjhgjhghjgjh', 'emporary Labor', '03216029947', 1, '2021-04-20 04:33:41', '2021-04-30 04:05:56', 3, 'storage/images/users/khQsqpnOE3PVoOokUZbDlgwVvztlteAUgcehCxGT.png'),
(8, 'farhan', 'bashir', '1', 'farhanbashir06@gmail.com', '2021-04-30', '2021-04-21', 'Spanish', '03048518244', 'dd', NULL, '24234234234', 'Employee', '03048518244', 0, '2021-04-21 06:37:56', '2021-04-30 10:40:41', 8, 'storage/images/users/HT78FZ2dyLmjltq4BfDGPyMO6pvDldNVoS66rzuK.gif'),
(9, 'umair', 'bashir', '2', 'umair@gmail.com', '2021-04-22', '2021-04-23', 'Spanish', '03048518244', 'ggjkdflg', 2, 'ifjsfis', 'Subcontractor', '03048518244', 0, '2021-04-22 00:40:09', '2021-04-30 12:03:10', 9, 'storage/images/users/riZ11KhygwG96DyKbFmEecx497TXmilWu5C07ody.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `assignments`
--
ALTER TABLE `assignments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `assignquestions`
--
ALTER TABLE `assignquestions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `assign_commons`
--
ALTER TABLE `assign_commons`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `certificates`
--
ALTER TABLE `certificates`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `companies`
--
ALTER TABLE `companies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `coursecategory`
--
ALTER TABLE `coursecategory`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `course_results`
--
ALTER TABLE `course_results`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `departments`
--
ALTER TABLE `departments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `department_has_courses`
--
ALTER TABLE `department_has_courses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `fields`
--
ALTER TABLE `fields`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `folders`
--
ALTER TABLE `folders`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `folders_name_unique` (`name`);

--
-- Indexes for table `forms`
--
ALTER TABLE `forms`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `form_fields`
--
ALTER TABLE `form_fields`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`model_id`,`model_type`),
  ADD KEY `model_has_permissions_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD PRIMARY KEY (`role_id`,`model_id`,`model_type`),
  ADD KEY `model_has_roles_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `permissions_name_guard_name_unique` (`name`,`guard_name`);

--
-- Indexes for table `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_name_guard_name_unique` (`name`,`guard_name`);

--
-- Indexes for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `role_has_permissions_role_id_foreign` (`role_id`);

--
-- Indexes for table `table_worker_courses`
--
ALTER TABLE `table_worker_courses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `videos`
--
ALTER TABLE `videos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `video_categories`
--
ALTER TABLE `video_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `workers`
--
ALTER TABLE `workers`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `user_id` (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `assignments`
--
ALTER TABLE `assignments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `assignquestions`
--
ALTER TABLE `assignquestions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `assign_commons`
--
ALTER TABLE `assign_commons`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `certificates`
--
ALTER TABLE `certificates`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `companies`
--
ALTER TABLE `companies`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `coursecategory`
--
ALTER TABLE `coursecategory`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `course_results`
--
ALTER TABLE `course_results`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `departments`
--
ALTER TABLE `departments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `department_has_courses`
--
ALTER TABLE `department_has_courses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `fields`
--
ALTER TABLE `fields`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `folders`
--
ALTER TABLE `folders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `forms`
--
ALTER TABLE `forms`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `form_fields`
--
ALTER TABLE `form_fields`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `questions`
--
ALTER TABLE `questions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `table_worker_courses`
--
ALTER TABLE `table_worker_courses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `videos`
--
ALTER TABLE `videos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `video_categories`
--
ALTER TABLE `video_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `workers`
--
ALTER TABLE `workers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD CONSTRAINT `model_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD CONSTRAINT `model_has_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD CONSTRAINT `role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
