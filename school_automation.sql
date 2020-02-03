-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 29, 2020 at 02:53 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `school_automation`
--

-- --------------------------------------------------------

--
-- Table structure for table `academics`
--

CREATE TABLE `academics` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `phone` varchar(11) COLLATE utf8mb4_unicode_ci NOT NULL,
  `employee_designation_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `academics`
--

INSERT INTO `academics` (`id`, `name`, `last_name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `phone`, `employee_designation_id`) VALUES
(1, 'piyash', 'khan', 'academic@gmail.com', NULL, '$2y$10$ptUOAuFav7VBPYpEwhe5OuUCHGkmi62/rplnsfdGIKn3uuG1WOi0m', 'kQlbaRRY675XGCNTlcFtDy0nGjtAkjN8Z94WeR1RoVZYBKfaNKvkO0sBxGQS', '2018-09-29 23:18:47', '2018-09-30 05:21:19', '0', 1),
(2, 'Shohag', 'shohag', 'shohag@gmail.com', NULL, '$2y$10$9tDPPoNPH2OAxUFhcfnwjevxNRcd2l4qpgXPtMTgdbvm7uJYjcVHu', NULL, '2018-11-14 21:09:45', '2018-11-14 21:09:45', '0', 2),
(3, 'galib', 'khan', 'galib@gmail.com', NULL, '$2y$10$7wCOWpjPJjrbhT9M1Em5BunPDMziO7rUuZ48Er2PsIpQhW3uNkmHi', NULL, '2018-11-17 06:50:49', '2018-11-17 06:50:49', '01744829193', 2);

-- --------------------------------------------------------

--
-- Table structure for table `administrations`
--

CREATE TABLE `administrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `administrations`
--

INSERT INTO `administrations` (`id`, `name`, `last_name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Kazy', 'Noushin', 'administration@gmail.com', NULL, '$2y$10$ptUOAuFav7VBPYpEwhe5OuUCHGkmi62/rplnsfdGIKn3uuG1WOi0m', '5gA7GVrZRnyIf8OVcx5v6GGf3vmlquxRTcJnG0FAybNJyGBSpxIMRGJB53S0', '2018-09-29 23:26:45', '2018-11-08 05:22:02');

-- --------------------------------------------------------

--
-- Table structure for table `admissions`
--

CREATE TABLE `admissions` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `birthday` datetime NOT NULL,
  `student_type_id` int(11) NOT NULL,
  `my_class_id` int(11) NOT NULL,
  `nationality` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bloodgroup` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `previous_institute` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `residence_phone_number` varchar(11) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `father_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `father_phonenumber` varchar(11) COLLATE utf8mb4_unicode_ci NOT NULL,
  `transport` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `admission_date` datetime NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `section_id` int(191) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admissions`
--

INSERT INTO `admissions` (`id`, `name`, `birthday`, `student_type_id`, `my_class_id`, `nationality`, `bloodgroup`, `address`, `previous_institute`, `residence_phone_number`, `Email`, `father_name`, `father_phonenumber`, `transport`, `admission_date`, `created_at`, `updated_at`, `section_id`) VALUES
(1, 'Monisha', '2018-10-05 01:00:00', 1, 1, 'Bangladeshi', 'A+', 'Bogra', 'IUBAT', '4245', 'Zihad@gmail.com', 'MD.Zillur Rahman', '01521405691', 'No', '2018-10-05 01:00:00', '2018-10-04 21:48:45', '2018-12-03 00:13:09', 1),
(2, 'Zihad', '2018-10-05 00:00:00', 1, 1, 'hgfh', 'hgfh', 'ghfg', 'ghfgh', '01744829193', 'islamhafizul158@gmailo.com', 'jkkj', '01744829193', 'yes', '2018-10-06 00:00:00', NULL, '2018-10-05 07:10:06', 1),
(3, 'piyash', '2018-10-05 01:00:00', 1, 2, 'Bangladeshi', 'A+', 'Dhaka', 'IUBAT', '01744829193', 'Zihad@gmail.com', 'MD.Raich Uddin', '01744829193', 'No', '2018-10-05 01:00:00', '2018-10-05 04:49:56', '2018-12-03 00:13:26', 1),
(4, 'Tansi', '2018-10-05 01:00:00', 2, 2, 'Bangladeshi', 'A+', 'Bogra', 'IUBAT', '12153', 'Zihad@gmail.com', 'Anisur', '01744829193', 'no', '2018-10-05 01:00:00', '2018-10-05 04:52:01', '2018-12-03 00:13:51', 1);

-- --------------------------------------------------------

--
-- Table structure for table `admission_fees`
--

CREATE TABLE `admission_fees` (
  `id` int(10) UNSIGNED NOT NULL,
  `my_class_id` int(11) NOT NULL,
  `fee` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admission_fees`
--

INSERT INTO `admission_fees` (`id`, `my_class_id`, `fee`, `created_at`, `updated_at`) VALUES
(1, 1, 100, '2018-11-16 02:57:45', '2018-11-16 02:57:45'),
(2, 2, 200, '2018-11-16 02:57:53', '2018-11-16 02:57:53'),
(3, 3, 300, '2018-11-16 02:58:00', '2018-11-16 02:58:00'),
(4, 4, 400, '2018-11-24 02:20:33', '2018-11-24 02:20:33'),
(5, 5, 500, '2018-11-24 03:03:12', '2018-11-24 03:03:12');

-- --------------------------------------------------------

--
-- Table structure for table `admission_fee_pays`
--

CREATE TABLE `admission_fee_pays` (
  `id` int(10) UNSIGNED NOT NULL,
  `admission_id` int(11) NOT NULL,
  `fee_paid` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admission_fee_pays`
--

INSERT INTO `admission_fee_pays` (`id`, `admission_id`, `fee_paid`, `created_at`, `updated_at`) VALUES
(1, 1, 150, '2018-11-16 03:12:23', '2018-11-24 03:06:52'),
(2, 2, 100, '2018-11-16 05:46:26', '2018-11-16 05:46:26'),
(3, 3, 100, '2018-11-24 02:24:20', '2018-11-24 02:29:00'),
(4, 4, 100, '2018-11-24 02:26:17', '2018-11-24 02:26:17');

-- --------------------------------------------------------

--
-- Table structure for table `attendances`
--

CREATE TABLE `attendances` (
  `id` int(10) UNSIGNED NOT NULL,
  `admission_id` int(11) NOT NULL,
  `attend` varchar(11) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `my_class_id` int(11) NOT NULL,
  `section_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `attendances`
--

INSERT INTO `attendances` (`id`, `admission_id`, `attend`, `created_at`, `updated_at`, `my_class_id`, `section_id`) VALUES
(79, 1, 'present', '2018-12-03 18:00:00', '2018-12-04 23:51:08', 1, 1),
(80, 2, 'absent', '2018-12-03 18:00:00', '2018-12-04 23:51:08', 1, 1),
(85, 1, 'present', '2018-12-04 18:00:00', '2018-12-04 18:00:00', 1, 1),
(86, 2, 'present', '2018-12-04 18:00:00', '2018-12-04 18:00:00', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `class_fees`
--

CREATE TABLE `class_fees` (
  `id` int(10) UNSIGNED NOT NULL,
  `my_class_id` int(11) NOT NULL,
  `fee` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `class_fees`
--

INSERT INTO `class_fees` (`id`, `my_class_id`, `fee`, `created_at`, `updated_at`) VALUES
(1, 1, 1000, '2018-11-12 06:55:38', '2018-11-12 06:55:38'),
(2, 2, 2000, '2018-11-12 06:55:51', '2018-11-12 06:55:51'),
(3, 3, 3000, '2018-11-12 06:56:02', '2018-11-12 06:56:02');

-- --------------------------------------------------------

--
-- Table structure for table `employee_attendances`
--

CREATE TABLE `employee_attendances` (
  `id` int(10) UNSIGNED NOT NULL,
  `academic_id` int(11) NOT NULL,
  `attend` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `employee_attendances`
--

INSERT INTO `employee_attendances` (`id`, `academic_id`, `attend`, `created_at`, `updated_at`) VALUES
(29, 1, 'present', '2018-12-01 18:00:00', '2018-12-02 12:33:48'),
(30, 2, 'present', '2018-12-01 18:00:00', '2018-12-02 12:33:52'),
(35, 3, 'present', '2018-12-01 18:00:00', '2018-12-02 12:53:18'),
(36, 1, 'present', '2018-12-02 18:00:00', '2018-12-03 00:19:20'),
(37, 1, 'absent', '2018-12-03 18:00:00', '2018-12-05 20:50:03');

-- --------------------------------------------------------

--
-- Table structure for table `employee_designations`
--

CREATE TABLE `employee_designations` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `employee_designations`
--

INSERT INTO `employee_designations` (`id`, `created_at`, `updated_at`, `name`) VALUES
(1, '2018-11-17 06:33:59', '2018-11-17 06:33:59', 'Head-master'),
(2, '2018-11-17 06:34:21', '2018-11-17 06:34:21', 'Assestant Head Master');

-- --------------------------------------------------------

--
-- Table structure for table `employee_designation_fees`
--

CREATE TABLE `employee_designation_fees` (
  `id` int(10) UNSIGNED NOT NULL,
  `employee_designation_id` int(11) NOT NULL,
  `salary` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `employee_designation_fees`
--

INSERT INTO `employee_designation_fees` (`id`, `employee_designation_id`, `salary`, `created_at`, `updated_at`) VALUES
(1, 1, '10000', '2018-11-17 06:34:42', '2018-11-17 06:34:42'),
(2, 2, '8000', '2018-11-17 06:34:51', '2018-11-17 06:34:51');

-- --------------------------------------------------------

--
-- Table structure for table `employee_fee_manages`
--

CREATE TABLE `employee_fee_manages` (
  `id` int(10) UNSIGNED NOT NULL,
  `academic_id` int(11) NOT NULL,
  `fee_paid` int(11) NOT NULL,
  `month` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `year` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `employee_fee_manages`
--

INSERT INTO `employee_fee_manages` (`id`, `academic_id`, `fee_paid`, `month`, `year`, `created_at`, `updated_at`) VALUES
(2, 2, 5000, '1', 2018, '2018-11-17 07:09:49', '2018-11-17 07:09:49'),
(3, 3, 8000, '1', 2018, '2018-11-24 03:11:36', '2018-11-24 03:11:36'),
(4, 1, 5000, '1', 2018, '2018-12-02 10:54:45', '2018-12-02 10:54:45'),
(5, 1, 5000, '2', 2018, '2018-12-02 10:56:24', '2018-12-02 10:56:24');

-- --------------------------------------------------------

--
-- Table structure for table `exams`
--

CREATE TABLE `exams` (
  `id` int(10) UNSIGNED NOT NULL,
  `exam_type_id` int(11) NOT NULL,
  `my_class_id` int(11) NOT NULL,
  `section_id` int(11) NOT NULL,
  `subject_id` int(11) NOT NULL,
  `academic_id` int(11) NOT NULL,
  `room_id` int(11) NOT NULL,
  `date_time` datetime NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `exams`
--

INSERT INTO `exams` (`id`, `exam_type_id`, `my_class_id`, `section_id`, `subject_id`, `academic_id`, `room_id`, `date_time`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 1, 1, 1, 1, '2018-10-29 00:00:00', '2018-10-28 23:05:33', '2018-10-28 23:05:33'),
(2, 2, 2, 2, 2, 1, 2, '2018-10-29 15:00:00', '2018-10-28 23:18:01', '2018-10-28 23:18:01');

-- --------------------------------------------------------

--
-- Table structure for table `exam_types`
--

CREATE TABLE `exam_types` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `exam_types`
--

INSERT INTO `exam_types` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'First Term', '2018-10-28 22:24:24', '2018-10-28 22:24:24'),
(2, 'Mid Term', '2018-10-28 22:27:44', '2018-10-28 22:27:44'),
(3, 'Final', '2018-10-28 22:27:52', '2018-10-28 22:27:52');

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
(3, '2018_09_30_030624_create_administrations_table', 1),
(4, '2018_09_30_030901_create_academics_table', 1),
(6, '2018_10_02_020332_create_my_classes_table', 3),
(9, '2018_10_02_024803_create_sections_table', 4),
(10, '2018_10_02_054244_create_my_classes_table', 5),
(11, '2018_10_04_153830_create_admissions_table', 6),
(12, '2018_10_04_155456_create_admissions_table', 7),
(13, '2018_10_04_161312_create_admissions_table', 8),
(14, '2018_10_04_161727_create_student_types_table', 9),
(15, '2018_10_05_120347_create_attendances_table', 10),
(16, '2018_10_06_114530_create_class_sections_table', 11),
(17, '2018_10_06_115651_create_my_class_sections_table', 12),
(18, '2018_10_06_120528_create_my_class_sections_table', 13),
(19, '2018_10_08_111836_create_subjects_table', 14),
(20, '2018_10_08_112152_create_my_class_subjects_table', 14),
(21, '2018_10_08_135818_create_attendances_table', 15),
(22, '2018_10_10_160918_create_attends_table', 16),
(23, '2018_10_12_165354_create_profiles_table', 17),
(24, '2018_10_29_040239_create_rooms_table', 18),
(25, '2018_10_29_041338_create_exam_types_table', 19),
(26, '2018_10_29_044102_create_exams_table', 20),
(27, '2018_10_29_115358_create_results_table', 21),
(28, '2018_11_12_124737_create_class_fees_table', 22),
(29, '2018_11_12_131434_create_student_fees_table', 23),
(30, '2018_11_14_183831_create_notices_table', 24),
(31, '2018_11_16_085127_create_admission_fees_table', 25),
(32, '2018_11_16_090650_create_admission_fee_pays_table', 26),
(33, '2018_11_17_043301_create_employee_designations_table', 27),
(34, '2018_11_17_045259_create_employee_designation_fees_table', 27),
(35, '2018_11_17_130159_create_employee_fee_manages_table', 28),
(36, '2018_12_02_125306_create_employee_attendances_table', 29);

-- --------------------------------------------------------

--
-- Table structure for table `my_classes`
--

CREATE TABLE `my_classes` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `my_classes`
--

INSERT INTO `my_classes` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'One', '2018-10-01 23:46:41', '2018-10-01 23:46:41'),
(2, 'Two', '2018-10-01 23:46:52', '2018-10-01 23:46:52'),
(3, 'Three', '2018-10-01 23:47:03', '2018-10-01 23:47:03'),
(4, 'Four', '2018-10-01 23:53:36', '2018-10-01 23:53:36'),
(5, 'Five', '2018-10-01 23:53:48', '2018-10-01 23:53:48'),
(6, 'Six', '2018-10-01 23:53:57', '2018-10-01 23:53:57'),
(7, 'Seven', '2018-10-01 23:54:24', '2018-10-01 23:54:24'),
(8, 'Eight', '2018-10-01 23:54:39', '2018-10-01 23:54:39'),
(9, 'Nine', '2018-10-01 23:54:49', '2018-10-01 23:54:49'),
(10, 'Ten', '2018-10-01 23:54:58', '2018-10-01 23:54:58');

-- --------------------------------------------------------

--
-- Table structure for table `my_class_sections`
--

CREATE TABLE `my_class_sections` (
  `id` int(10) UNSIGNED NOT NULL,
  `my_class_id` int(11) NOT NULL,
  `section_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `my_class_sections`
--

INSERT INTO `my_class_sections` (`id`, `my_class_id`, `section_id`, `created_at`, `updated_at`) VALUES
(1, 1, 1, '2018-10-06 06:14:13', '2018-10-06 06:14:13'),
(2, 1, 2, '2018-10-06 06:14:25', '2018-10-06 06:14:25'),
(3, 2, 1, '2018-10-06 06:14:37', '2018-10-06 06:14:37'),
(4, 2, 2, '2018-10-06 06:14:49', '2018-10-06 06:14:49'),
(5, 2, 3, '2018-10-06 06:15:03', '2018-10-06 06:15:03');

-- --------------------------------------------------------

--
-- Table structure for table `my_class_subjects`
--

CREATE TABLE `my_class_subjects` (
  `id` int(10) UNSIGNED NOT NULL,
  `my_class_id` int(11) NOT NULL,
  `subject_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `my_class_subjects`
--

INSERT INTO `my_class_subjects` (`id`, `my_class_id`, `subject_id`, `created_at`, `updated_at`) VALUES
(1, 1, 1, NULL, NULL),
(2, 1, 2, NULL, NULL),
(3, 2, 1, '2018-10-29 06:47:23', '2018-12-04 23:40:08'),
(4, 2, 3, '2018-10-29 06:47:35', '2018-12-04 23:40:39'),
(5, 2, 2, '2018-10-29 06:47:50', '2018-10-29 06:47:50');

-- --------------------------------------------------------

--
-- Table structure for table `notices`
--

CREATE TABLE `notices` (
  `id` int(10) UNSIGNED NOT NULL,
  `notice` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `notices`
--

INSERT INTO `notices` (`id`, `notice`, `created_at`, `updated_at`) VALUES
(1, 'Exam', '2018-11-14 12:42:59', '2018-11-24 22:23:54');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('piyashkhanbd@gmail.com', '$2y$10$4.id2Xh0Sl5Z/JKUAZo3nugbGnwi6EJEsZNu/68ocxn0XeKAVllwi', '2018-11-08 05:22:24');

-- --------------------------------------------------------

--
-- Table structure for table `profiles`
--

CREATE TABLE `profiles` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `profiles`
--

INSERT INTO `profiles` (`id`, `name`, `address`, `created_at`, `updated_at`) VALUES
(1, 'piyash', 'Dhaka', NULL, NULL),
(2, 'Tansi', 'Bogra', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `results`
--

CREATE TABLE `results` (
  `id` int(10) UNSIGNED NOT NULL,
  `exam_type_id` varchar(11) COLLATE utf8mb4_unicode_ci NOT NULL,
  `admission_id` varchar(11) COLLATE utf8mb4_unicode_ci NOT NULL,
  `my_class_id` varchar(11) COLLATE utf8mb4_unicode_ci NOT NULL,
  `section_id` varchar(11) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subject_id` int(11) NOT NULL,
  `mark` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `results`
--

INSERT INTO `results` (`id`, `exam_type_id`, `admission_id`, `my_class_id`, `section_id`, `subject_id`, `mark`, `created_at`, `updated_at`) VALUES
(131, '1', '1', 'One', 'A', 1, '88', '2018-12-04 18:00:00', '2018-12-04 18:00:00'),
(132, '1', '1', 'One', 'A', 2, '80', '2018-12-04 18:00:00', '2018-12-04 18:00:00'),
(133, '1', '2', 'One', 'A', 1, '20', '2018-12-04 18:00:00', '2018-12-04 18:00:00'),
(134, '1', '2', 'One', 'A', 2, '51', '2018-12-04 18:00:00', '2018-12-04 18:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `rooms`
--

CREATE TABLE `rooms` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `rooms`
--

INSERT INTO `rooms` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'R-1', '2018-10-28 22:09:33', '2018-10-28 22:09:33'),
(2, 'R-2', '2018-10-28 22:09:44', '2018-10-28 22:09:44'),
(3, 'R-3', '2018-10-28 22:09:54', '2018-10-28 22:12:19');

-- --------------------------------------------------------

--
-- Table structure for table `sections`
--

CREATE TABLE `sections` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sections`
--

INSERT INTO `sections` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'A', '2018-10-01 23:58:05', '2018-10-01 23:58:05'),
(2, 'B', '2018-10-01 23:58:17', '2018-10-01 23:58:17'),
(3, 'C', '2018-10-01 23:58:34', '2018-10-01 23:58:34');

-- --------------------------------------------------------

--
-- Table structure for table `student_fees`
--

CREATE TABLE `student_fees` (
  `id` int(10) UNSIGNED NOT NULL,
  `admission_id` int(11) NOT NULL,
  `fee_paid` int(11) NOT NULL,
  `month` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `year` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `student_fees`
--

INSERT INTO `student_fees` (`id`, `admission_id`, `fee_paid`, `month`, `year`, `created_at`, `updated_at`) VALUES
(1, 1, 1500, '1', 2018, '2018-11-12 07:38:25', '2018-11-16 06:18:03'),
(2, 2, 500, '2', 2018, '2018-11-13 10:53:49', '2018-11-16 06:21:24'),
(3, 1, 1000, '2', 2018, '2018-11-15 11:53:12', '2018-11-16 06:17:42'),
(4, 2, 1000, '1', 2018, '2018-11-16 06:19:22', '2018-11-16 06:23:46'),
(5, 1, 2000, '3', 2018, '2018-11-24 02:59:32', '2018-11-24 02:59:32'),
(6, 1, 200, '4', 2018, '2018-12-02 10:41:12', '2018-12-02 10:41:12');

-- --------------------------------------------------------

--
-- Table structure for table `student_types`
--

CREATE TABLE `student_types` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `student_types`
--

INSERT INTO `student_types` (`id`, `created_at`, `updated_at`, `name`) VALUES
(1, '2018-10-04 21:21:51', '2018-10-04 21:21:51', 'Male'),
(2, '2018-10-04 21:22:00', '2018-10-04 21:22:00', 'Female'),
(3, '2018-10-04 21:22:16', '2018-10-04 21:22:16', 'Orphan'),
(4, '2018-10-04 21:22:35', '2018-10-04 21:22:35', 'Autistic');

-- --------------------------------------------------------

--
-- Table structure for table `subjects`
--

CREATE TABLE `subjects` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `subjects`
--

INSERT INTO `subjects` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Bangla', '2018-10-08 05:40:54', '2018-10-08 05:40:54'),
(2, 'English', NULL, NULL),
(3, 'Math', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `last_name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Tansi', 'Tansi', 'student@gmail.com', NULL, '$2y$10$ptUOAuFav7VBPYpEwhe5OuUCHGkmi62/rplnsfdGIKn3uuG1WOi0m', NULL, '2018-09-29 23:38:27', '2018-09-29 23:38:27'),
(2, 'galib', 'galib', 'galibmoral@gmail.com', NULL, '$2y$10$ptUOAuFav7VBPYpEwhe5OuUCHGkmi62/rplnsfdGIKn3uuG1WOi0m', NULL, '2018-11-16 02:16:58', '2018-11-16 02:16:58'),
(3, 'Sabbir', 'Sabbir', 'khan@gmail.com', NULL, '$2y$10$ptUOAuFav7VBPYpEwhe5OuUCHGkmi62/rplnsfdGIKn3uuG1WOi0m', NULL, '2018-11-24 03:26:17', '2018-11-24 03:26:17'),
(4, 'PUBG', 'PUBG', 'pubg@gmail.com', NULL, '$2y$10$ptUOAuFav7VBPYpEwhe5OuUCHGkmi62/rplnsfdGIKn3uuG1WOi0m', NULL, '2018-11-24 23:09:28', '2018-11-24 23:09:28');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `academics`
--
ALTER TABLE `academics`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `academics_email_unique` (`email`);

--
-- Indexes for table `administrations`
--
ALTER TABLE `administrations`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `administrations_email_unique` (`email`);

--
-- Indexes for table `admissions`
--
ALTER TABLE `admissions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admission_fees`
--
ALTER TABLE `admission_fees`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admission_fee_pays`
--
ALTER TABLE `admission_fee_pays`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `attendances`
--
ALTER TABLE `attendances`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `class_fees`
--
ALTER TABLE `class_fees`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employee_attendances`
--
ALTER TABLE `employee_attendances`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employee_designations`
--
ALTER TABLE `employee_designations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employee_designation_fees`
--
ALTER TABLE `employee_designation_fees`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employee_fee_manages`
--
ALTER TABLE `employee_fee_manages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `exams`
--
ALTER TABLE `exams`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `exam_types`
--
ALTER TABLE `exam_types`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `my_classes`
--
ALTER TABLE `my_classes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `my_class_sections`
--
ALTER TABLE `my_class_sections`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `my_class_subjects`
--
ALTER TABLE `my_class_subjects`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notices`
--
ALTER TABLE `notices`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `profiles`
--
ALTER TABLE `profiles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `results`
--
ALTER TABLE `results`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rooms`
--
ALTER TABLE `rooms`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sections`
--
ALTER TABLE `sections`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student_fees`
--
ALTER TABLE `student_fees`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student_types`
--
ALTER TABLE `student_types`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subjects`
--
ALTER TABLE `subjects`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT for table `academics`
--
ALTER TABLE `academics`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `administrations`
--
ALTER TABLE `administrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `admissions`
--
ALTER TABLE `admissions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `admission_fees`
--
ALTER TABLE `admission_fees`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `admission_fee_pays`
--
ALTER TABLE `admission_fee_pays`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `attendances`
--
ALTER TABLE `attendances`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=87;

--
-- AUTO_INCREMENT for table `class_fees`
--
ALTER TABLE `class_fees`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `employee_attendances`
--
ALTER TABLE `employee_attendances`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `employee_designations`
--
ALTER TABLE `employee_designations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `employee_designation_fees`
--
ALTER TABLE `employee_designation_fees`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `employee_fee_manages`
--
ALTER TABLE `employee_fee_manages`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `exams`
--
ALTER TABLE `exams`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `exam_types`
--
ALTER TABLE `exam_types`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `my_classes`
--
ALTER TABLE `my_classes`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `my_class_sections`
--
ALTER TABLE `my_class_sections`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `my_class_subjects`
--
ALTER TABLE `my_class_subjects`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `notices`
--
ALTER TABLE `notices`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `profiles`
--
ALTER TABLE `profiles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `results`
--
ALTER TABLE `results`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=135;

--
-- AUTO_INCREMENT for table `rooms`
--
ALTER TABLE `rooms`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `sections`
--
ALTER TABLE `sections`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `student_fees`
--
ALTER TABLE `student_fees`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `student_types`
--
ALTER TABLE `student_types`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `subjects`
--
ALTER TABLE `subjects`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
