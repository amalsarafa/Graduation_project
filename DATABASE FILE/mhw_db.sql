-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 08, 2025 at 11:22 AM
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
-- Database: `mhw_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `appointments`
--

CREATE TABLE `appointments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `appointment_date` date NOT NULL,
  `appointment_time` time NOT NULL,
  `status` enum('confirmed','pending','cancelled') NOT NULL DEFAULT 'pending',
  `doctor_id` bigint(20) UNSIGNED NOT NULL,
  `patient_id` bigint(20) UNSIGNED NOT NULL,
  `service_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) NOT NULL,
  `value` mediumtext NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cache`
--

INSERT INTO `cache` (`key`, `value`, `expiration`) VALUES
('moh@gmail.com|127.0.0.1', 'i:1;', 1740915584),
('moh@gmail.com|127.0.0.1:timer', 'i:1740915584;', 1740915584),
('mohnasman@gmailcom|127.0.0.1', 'i:1;', 1740721885),
('mohnasman@gmailcom|127.0.0.1:timer', 'i:1740721885;', 1740721885),
('mohsaleh123@gmail.com|127.0.0.1', 'i:1;', 1741265227),
('mohsaleh123@gmail.com|127.0.0.1:timer', 'i:1741265227;', 1741265227),
('warren.raynor@example.com|127.0.0.1', 'i:1;', 1740559763),
('warren.raynor@example.com|127.0.0.1:timer', 'i:1740559763;', 1740559763);

-- --------------------------------------------------------

--
-- Table structure for table `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(255) NOT NULL,
  `owner` varchar(255) NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `contact_us`
--

CREATE TABLE `contact_us` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `subject` text NOT NULL,
  `message` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contact_us`
--

INSERT INTO `contact_us` (`id`, `name`, `email`, `subject`, `message`, `created_at`, `updated_at`) VALUES
(1, 'سارة سليم', 'sara2002@gmail.com', 'استفسار حول خدمة.', 'أرغب بالاستفسار حول سعر خدمة الرعاية الطبية المنزلية.', '2025-03-03 10:14:45', '2025-03-03 10:14:45');

-- --------------------------------------------------------

--
-- Table structure for table `doctors`
--

CREATE TABLE `doctors` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `gender` varchar(255) DEFAULT NULL,
  `specialization` varchar(255) NOT NULL,
  `license_number` varchar(255) NOT NULL,
  `academic_qualifications` text DEFAULT NULL,
  `years_experience` int(11) DEFAULT NULL,
  `training_courses` text DEFAULT NULL,
  `professional_certificate` varchar(255) DEFAULT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `doctors`
--

INSERT INTO `doctors` (`id`, `gender`, `specialization`, `license_number`, `academic_qualifications`, `years_experience`, `training_courses`, `professional_certificate`, `user_id`, `created_at`, `updated_at`) VALUES
(39, 'male', 'بكالوريس الطب والجراحة -جامعة القاهرة', '12369874', 'بكالوريس الطب والحراحة', 5, NULL, NULL, 2, '2025-03-01 01:19:28', '2025-03-06 07:51:08'),
(40, 'male', 'بكالوريس تمريض عام-الجامعة الإسلامية', '1122334455', 'بكالوريس تمريض', 4, NULL, NULL, 121, '2025-03-06 07:40:46', '2025-03-06 07:40:46'),
(41, 'female', 'بكالوريس الطب والجراحة', '778899663', 'بكالوريس الطب والجراحة', 7, NULL, NULL, 122, '2025-03-06 07:43:00', '2025-03-06 07:43:00');

-- --------------------------------------------------------

--
-- Table structure for table `doctor_ratings`
--

CREATE TABLE `doctor_ratings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `patient_id` bigint(20) UNSIGNED NOT NULL,
  `doctor_id` bigint(20) UNSIGNED DEFAULT NULL,
  `rating` int(11) DEFAULT NULL,
  `comment` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `doctor_ratings`
--

INSERT INTO `doctor_ratings` (`id`, `patient_id`, `doctor_id`, `rating`, `comment`, `created_at`, `updated_at`) VALUES
(1, 3, 39, 5, 'طبيب رائع ومميز.', '2025-03-05 06:01:18', '2025-03-05 06:01:18'),
(2, 3, 40, 5, 'طبيب رائع ومميز\r\n', '2025-03-12 14:44:45', '2025-03-10 14:44:52'),
(14, 38, 39, 5, 'طبيب رائع وخدمة متميزة.', '2025-03-07 08:09:34', '2025-03-07 08:09:34'),
(15, 38, 40, 5, 'طبيب رائع.', '2025-03-07 10:37:13', '2025-03-07 10:37:13');

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
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `queue` varchar(255) NOT NULL,
  `payload` longtext NOT NULL,
  `attempts` tinyint(3) UNSIGNED NOT NULL,
  `reserved_at` int(10) UNSIGNED DEFAULT NULL,
  `available_at` int(10) UNSIGNED NOT NULL,
  `created_at` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `job_batches`
--

CREATE TABLE `job_batches` (
  `id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `total_jobs` int(11) NOT NULL,
  `pending_jobs` int(11) NOT NULL,
  `failed_jobs` int(11) NOT NULL,
  `failed_job_ids` longtext NOT NULL,
  `options` mediumtext DEFAULT NULL,
  `cancelled_at` int(11) DEFAULT NULL,
  `created_at` int(11) NOT NULL,
  `finished_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `medical_reports`
--

CREATE TABLE `medical_reports` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `report_name` varchar(255) NOT NULL,
  `report_date` date NOT NULL,
  `report_type` varchar(255) NOT NULL,
  `patient_id` bigint(20) UNSIGNED NOT NULL,
  `doctor_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `file_path` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `medical_reports`
--

INSERT INTO `medical_reports` (`id`, `report_name`, `report_date`, `report_type`, `patient_id`, `doctor_id`, `created_at`, `updated_at`, `file_path`) VALUES
(8, 'تقرير فحص سكري', '2025-02-19', 'طبي', 38, 39, '2025-03-07 11:01:31', '2025-03-07 11:01:31', 'reports/Gio73v6TxNwEplNSdD35EhuHOGI8cRm4hd62u95J.pdf'),
(9, 'تقرير فحص دم', '2025-03-11', 'طبي', 38, 40, '2025-03-07 11:57:24', '2025-03-07 11:57:24', 'reports/IY0fDED5BRdqRrOpRrrPJOKGXvCqf6za9miFXw5N.pdf'),
(10, 'تقرير فحص سكري', '2025-03-13', 'طبي', 3, 40, '2025-03-07 12:02:37', '2025-03-07 12:02:37', 'reports/pvZxE5ZZKToMxPqWDCphxGvIc3Rn8l8Qf3ZTbKxh.pdf');

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
(184, '0001_01_01_000000_create_users_table', 1),
(185, '0001_01_01_000001_create_cache_table', 1),
(186, '0001_01_01_000002_create_jobs_table', 1),
(187, '2025_02_05_145155_create_patients_table', 1),
(188, '2025_02_05_145220_create_doctors_table', 1),
(189, '2025_02_05_145610_create_services_table', 1),
(190, '2025_02_05_145629_create_appointments_table', 1),
(191, '2025_02_05_145732_create_notifications_table', 1),
(192, '2025_02_05_150122_create_medical_reports_table', 1),
(193, '2025_02_05_150522_create_doctor_ratings_table', 1),
(194, '2025_02_07_111100_create_contact_us_table', 1),
(195, '2025_02_07_130113_create_patient_reservations_table', 1),
(196, '2025_02_09_084912_create_patient_services_table', 1),
(199, '2025_02_17_121426_create_tasks_table', 2),
(200, '2025_03_05_085219_add_file_path_to_medical_reports_table', 3),
(201, '2025_03_07_133001_drop_patient_services_table', 4),
(202, '2025_03_07_133123_create_patient_services_table', 5);

-- --------------------------------------------------------

--
-- Table structure for table `notifications`
--

CREATE TABLE `notifications` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `notification_type` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `notification_date` date NOT NULL,
  `notification_time` time NOT NULL,
  `status` enum('completed','pending','unread') NOT NULL DEFAULT 'unread',
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
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

--
-- Dumping data for table `password_reset_tokens`
--

INSERT INTO `password_reset_tokens` (`email`, `token`, `created_at`) VALUES
('mohnasman@gmail.com', '$2y$12$tJWRAlZX47gxZ7kIIrSFu.iUM0C8rLi.q1kV3T1q0a7HKrHwLE4xO', '2025-03-03 23:55:32');

-- --------------------------------------------------------

--
-- Table structure for table `patients`
--

CREATE TABLE `patients` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_number` varchar(9) DEFAULT NULL,
  `gender` enum('male','female') NOT NULL,
  `chronic_diseases_history` text DEFAULT NULL,
  `previous_report_file` varchar(255) DEFAULT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `patients`
--

INSERT INTO `patients` (`id`, `id_number`, `gender`, `chronic_diseases_history`, `previous_report_file`, `user_id`, `created_at`, `updated_at`) VALUES
(3, '966371659', 'female', 'أمراض مزمنة', 'reports/M5MU79RLpYaYBzf9P9qfiFzK2a1DwANexWvunHN3.pdf', 3, '2025-03-02 22:15:53', '2025-03-04 11:33:57'),
(38, '966381333', 'male', 'أمراض مزمنة', NULL, 123, '2025-03-07 07:47:10', '2025-03-07 07:47:42');

-- --------------------------------------------------------

--
-- Table structure for table `patient_reservations`
--

CREATE TABLE `patient_reservations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `patient_id` bigint(20) UNSIGNED NOT NULL,
  `doctor_id` bigint(20) UNSIGNED NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `service` varchar(255) NOT NULL,
  `status` enum('pending','canceled','confirmed') DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `patient_reservations`
--

INSERT INTO `patient_reservations` (`id`, `patient_id`, `doctor_id`, `date`, `time`, `service`, `status`, `created_at`, `updated_at`) VALUES
(89, 38, 39, '2025-03-30', '16:26:00', 'الرعاية الطبية المنزلية', 'pending', '2025-03-07 11:56:16', '2025-03-07 11:56:16'),
(90, 38, 40, '2025-03-12', '17:25:00', 'الإستشارات الطبية عن بُعد', 'pending', '2025-03-07 11:56:43', '2025-03-07 11:56:43'),
(91, 3, 40, '2025-03-19', '14:58:00', 'الإستشارات الطبية عن بُعد', 'pending', '2025-03-07 12:01:46', '2025-03-07 12:03:17');

-- --------------------------------------------------------

--
-- Table structure for table `patient_services`
--

CREATE TABLE `patient_services` (
  `patient_id` bigint(20) UNSIGNED NOT NULL,
  `service_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `patient_services`
--

INSERT INTO `patient_services` (`patient_id`, `service_id`, `created_at`, `updated_at`) VALUES
(38, 1, '2025-03-07 11:56:16', '2025-03-07 11:56:16'),
(38, 5, '2025-03-07 11:56:43', '2025-03-07 11:56:43');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text DEFAULT NULL,
  `price` decimal(10,2) NOT NULL DEFAULT 0.00,
  `medical_specialization` varchar(255) NOT NULL,
  `status` enum('approved','pending','rejected') NOT NULL DEFAULT 'pending',
  `doctor_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `name`, `description`, `price`, `medical_specialization`, `status`, `doctor_id`, `created_at`, `updated_at`) VALUES
(1, 'الرعاية الطبية المنزلية', 'ترتيب زيارات منزلية لأطباء عامين أو متخصصين لتقديم الاستشارات الطبية، الفحوصات، ووضع خطط علاجية.', 100.00, 'الطب العام', 'approved', 39, '2025-03-01 01:21:00', '2025-03-03 23:29:26'),
(2, 'الرعاية التمريضية المنزلية', 'تقديم خدمات تمريضية متخصصة تشمل تغيير الضمادات، إعطاء الحقن، مراقبة العلامات الحيوية، وإدارة حالات الطوارئ.', 70.00, 'تمريض', 'approved', 41, '2025-03-03 23:28:18', '2025-03-07 06:57:14'),
(3, 'العلاج الطبيعي والتأهيلي', 'تقديم جلسات علاج طبيعي وإعادة تأهيل بعد الجراحة أو الإصابات، بما يشمل دعم المرضى ذوي الاحتياجات الخاصة.', 70.00, 'علاج طبيعي', 'approved', 39, '2025-03-03 23:30:40', '2025-03-03 23:30:51'),
(4, 'رعاية الأطفال في المنزل', 'تقديم خدمات تمريضية مخصصة لرعاية الأطفال المرضى أو ذوي الحالات الصحية الخاصة.', 50.00, 'تمريض', 'pending', 41, '2025-03-03 23:32:36', '2025-03-07 06:57:36'),
(5, 'الإستشارات الطبية عن بُعد', 'تمكين العملاء من التواصل مع أطباء ومتخصصين عبر الإنترنت أو الهاتف لتقديم نصائح واستشارات طبية.', 80.00, 'الطب العام', 'approved', 40, '2025-03-03 23:33:40', '2025-03-07 06:57:00'),
(6, 'إدارة الأدوية وتوصيلها.', 'تقديم خدمات توصيل الأدوية إلى المنازل مع تذكير المرضى بجرعاتهم وتنظيمها.', 60.00, 'الصيدلة', 'approved', 39, '2025-03-03 23:34:47', '2025-03-04 11:11:51'),
(7, 'الفحوصات الطبية المنزلية', 'إرسال فرق طبية لإجراء تحاليل مخبرية مثل سحب الدم أو قياس السكر مباشرة في المنزل.', 40.00, 'تمريض', 'approved', 40, '2025-03-03 23:36:24', '2025-03-07 06:57:48'),
(8, 'الرعاية التلطيفية', 'توفير رعاية خاصة للمرضى في المراحل الأخيرة من المرض بهدف تخفيف الألم وتقديم الدعم النفسي والاجتماعي لهم ولعائلاتهم.', 70.00, 'تمريض', 'pending', 41, '2025-03-03 23:37:38', '2025-03-07 06:57:26');

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` text DEFAULT NULL,
  `payload` longtext NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('F6GmH6byMkJoPsl9dplwwwdeEyVeuzFjBgT6eSSO', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/133.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiSFRjTTJFVlBMYlpnOURGN1Nsd0VyejFzQ1pWVkY5dHYyQkR3RUdPOSI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mjc6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9sb2dpbiI7fX0=', 1741349687);

-- --------------------------------------------------------

--
-- Table structure for table `tasks`
--

CREATE TABLE `tasks` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text DEFAULT NULL,
  `due_date` datetime DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tasks`
--

INSERT INTO `tasks` (`id`, `title`, `description`, `due_date`, `created_at`, `updated_at`) VALUES
(1, 'إضافة طبيب جديد', 'اضفة طبيب جديد الى النظام', '2025-03-01 00:00:00', '2025-02-26 09:58:36', '2025-02-26 09:58:36'),
(2, 'اضافة خدمة جديدة', 'إضافة خدمة الرعاية التلطيفية إلى النظام..', '2025-03-19 00:00:00', '2025-03-04 11:06:00', '2025-03-04 11:06:00');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `birth_date` date DEFAULT NULL,
  `country` varchar(255) DEFAULT NULL,
  `address` text DEFAULT NULL,
  `phone_number` varchar(255) DEFAULT NULL,
  `specialization` varchar(255) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `profile_image` varchar(255) DEFAULT NULL,
  `role` enum('admin','doctor','patient') NOT NULL DEFAULT 'patient',
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `birth_date`, `country`, `address`, `phone_number`, `specialization`, `email`, `email_verified_at`, `password`, `profile_image`, `role`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'محمد السيد', '1995-03-29', 'فلسطين', 'خانيونس', '0568634985', 'مدير تقني', 'admin123@gmail.com', '2021-02-03 05:49:36', '$2y$12$InAR.nrgdnI58ZOeQ7RrOeGyUSqPvXowJ8c.otv4.SX2n0cgy8sTW', 'profile_images/kQQz9EKKUMxSd2hoquwup43XDXb0eOImBQ0DeUuE.jpg', 'admin', 'iGAg8s9DBN5mgt5aLxkc7aGxMFZbfYu62hZnOgEYC32vhcsj5mZ0IyyEqun2', '2025-02-27 09:54:42', '2025-03-07 06:30:44'),
(2, 'د.هيثم الاسمر', '1980-07-19', 'فلسطين', 'غزة', '05997289423', NULL, 'halasmar@gmail.com', '2021-02-03 05:49:36', '$2y$12$Qr6b5jIDTL8YCO4he1uip.cNA1HeKfSVG1dNdTIuLFpT0F8GVN752', 'profile_images/fqQKA0xeUzs2erT2qdZJrmsjXWxF7aC5sSkGtczZ.jpg', 'doctor', NULL, '2025-03-01 01:19:28', '2025-03-06 12:05:28'),
(3, 'سارة سليم', '1990-08-19', 'فلسطين', 'رفح', '0599728956', NULL, 'sara2002@gmail.com', '2021-02-03 05:49:36', '$2y$12$vUQ47GzRBshjePUZxoy.ne.TwuLew3AjMltjr0lz3AhtHbiZDjple', 'profile_images/VKNOMJIbEYTathQrvwnFL92eaTI2bKrE57hIIGy5.jpg', 'patient', '2kQVUsaxFpxCOqeKEYbL4naHeS287UgbBDzYcjbtrOOjhuQcqw6caAxKRDHw', '2025-03-02 22:15:53', '2025-03-06 07:58:59'),
(121, 'محمد نسمان', '1990-09-13', 'فلسطين', 'خانيونس', '0599377812', NULL, 'mohnasman123@gmail.com', NULL, '$2y$12$Nt24R.y/m66uAeHLTk5/2.5fV0xqtyrz54zCPbG0qd435b4maRdbe', 'doctor_profiles/xlOAGLjAakIilKN06MUP4QHngWFX3L57b6rjYE47.jpg', 'doctor', NULL, '2025-03-06 07:40:46', '2025-03-06 07:40:46'),
(122, 'انتصار شتات', '1989-06-19', 'فلسطين', 'رفح', '0567888877', NULL, 'entisarsh123@gmail.com', NULL, '$2y$12$NySl0K7rko.PSCWlfJxMWuTu5jS1sl2c4I8F6.ZTTB8hFnKh9Qif6', 'doctor_profiles/WKxC4E7EgzCHltXqArFP6uNusuO5S9TddeMUo9s2.jpg', 'doctor', NULL, '2025-03-06 07:43:00', '2025-03-06 07:43:00'),
(123, 'علي السعدي', '1998-02-12', 'فلسطين', 'رفح', '0592010752', NULL, 'patient123@gmail.com', NULL, '$2y$12$q5Wo8dwQtWcbbpwIsAbfh.zLX.tLB4KdO82PQnRhyKYu6kfQydJiq', 'profile_images/KWaD4Pcj1389NebsznXL8AOoJ4zWUPVDVVNsAkWL.jpg', 'patient', NULL, '2025-03-07 07:47:10', '2025-03-07 07:53:22');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `appointments`
--
ALTER TABLE `appointments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `appointments_doctor_id_foreign` (`doctor_id`),
  ADD KEY `appointments_patient_id_foreign` (`patient_id`),
  ADD KEY `appointments_service_id_foreign` (`service_id`);

--
-- Indexes for table `cache`
--
ALTER TABLE `cache`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `cache_locks`
--
ALTER TABLE `cache_locks`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `contact_us`
--
ALTER TABLE `contact_us`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `doctors`
--
ALTER TABLE `doctors`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `doctors_license_number_unique` (`license_number`),
  ADD KEY `doctors_user_id_foreign` (`user_id`);

--
-- Indexes for table `doctor_ratings`
--
ALTER TABLE `doctor_ratings`
  ADD PRIMARY KEY (`id`),
  ADD KEY `doctor_ratings_doctor_id_foreign` (`doctor_id`),
  ADD KEY `doctor_ratings_patient_id_foreign` (`patient_id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Indexes for table `job_batches`
--
ALTER TABLE `job_batches`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `medical_reports`
--
ALTER TABLE `medical_reports`
  ADD PRIMARY KEY (`id`),
  ADD KEY `medical_reports_patient_id_foreign` (`patient_id`),
  ADD KEY `medical_reports_doctor_id_foreign` (`doctor_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notifications`
--
ALTER TABLE `notifications`
  ADD PRIMARY KEY (`id`),
  ADD KEY `notifications_user_id_foreign` (`user_id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `patients`
--
ALTER TABLE `patients`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `patients_id_number_unique` (`id_number`),
  ADD KEY `patients_user_id_foreign` (`user_id`);

--
-- Indexes for table `patient_reservations`
--
ALTER TABLE `patient_reservations`
  ADD PRIMARY KEY (`id`),
  ADD KEY `patient_reservations_patient_id_foreign` (`patient_id`),
  ADD KEY `patient_reservations_doctor_id_foreign` (`doctor_id`);

--
-- Indexes for table `patient_services`
--
ALTER TABLE `patient_services`
  ADD UNIQUE KEY `patient_services_patient_id_service_id_unique` (`patient_id`,`service_id`),
  ADD KEY `patient_services_service_id_foreign` (`service_id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`),
  ADD KEY `services_doctor_id_foreign` (`doctor_id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `tasks`
--
ALTER TABLE `tasks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD UNIQUE KEY `users_phone_number_unique` (`phone_number`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `appointments`
--
ALTER TABLE `appointments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `contact_us`
--
ALTER TABLE `contact_us`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `doctors`
--
ALTER TABLE `doctors`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `doctor_ratings`
--
ALTER TABLE `doctor_ratings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `medical_reports`
--
ALTER TABLE `medical_reports`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=203;

--
-- AUTO_INCREMENT for table `notifications`
--
ALTER TABLE `notifications`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `patients`
--
ALTER TABLE `patients`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `patient_reservations`
--
ALTER TABLE `patient_reservations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=92;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `tasks`
--
ALTER TABLE `tasks`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=124;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `appointments`
--
ALTER TABLE `appointments`
  ADD CONSTRAINT `appointments_doctor_id_foreign` FOREIGN KEY (`doctor_id`) REFERENCES `doctors` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `appointments_patient_id_foreign` FOREIGN KEY (`patient_id`) REFERENCES `patients` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `appointments_service_id_foreign` FOREIGN KEY (`service_id`) REFERENCES `services` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `doctors`
--
ALTER TABLE `doctors`
  ADD CONSTRAINT `doctors_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `doctor_ratings`
--
ALTER TABLE `doctor_ratings`
  ADD CONSTRAINT `doctor_ratings_doctor_id_foreign` FOREIGN KEY (`doctor_id`) REFERENCES `doctors` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `doctor_ratings_patient_id_foreign` FOREIGN KEY (`patient_id`) REFERENCES `patients` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `medical_reports`
--
ALTER TABLE `medical_reports`
  ADD CONSTRAINT `medical_reports_doctor_id_foreign` FOREIGN KEY (`doctor_id`) REFERENCES `doctors` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `medical_reports_patient_id_foreign` FOREIGN KEY (`patient_id`) REFERENCES `patients` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `notifications`
--
ALTER TABLE `notifications`
  ADD CONSTRAINT `notifications_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `patients`
--
ALTER TABLE `patients`
  ADD CONSTRAINT `patients_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `patient_reservations`
--
ALTER TABLE `patient_reservations`
  ADD CONSTRAINT `patient_reservations_doctor_id_foreign` FOREIGN KEY (`doctor_id`) REFERENCES `doctors` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `patient_reservations_patient_id_foreign` FOREIGN KEY (`patient_id`) REFERENCES `patients` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `patient_services`
--
ALTER TABLE `patient_services`
  ADD CONSTRAINT `patient_services_patient_id_foreign` FOREIGN KEY (`patient_id`) REFERENCES `patients` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `patient_services_service_id_foreign` FOREIGN KEY (`service_id`) REFERENCES `services` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `services`
--
ALTER TABLE `services`
  ADD CONSTRAINT `services_doctor_id_foreign` FOREIGN KEY (`doctor_id`) REFERENCES `doctors` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
