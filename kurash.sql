-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 27, 2022 at 04:12 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 7.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kurash`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `created_at`, `updated_at`) VALUES
(27, '2022-02-14 10:15:48', '2022-02-14 10:15:48'),
(28, '2022-02-14 10:16:10', '2022-02-14 10:16:10'),
(29, '2022-02-14 10:16:26', '2022-02-14 10:16:26'),
(30, '2022-02-14 10:16:43', '2022-02-14 10:16:43'),
(31, '2022-02-14 10:17:01', '2022-02-14 10:17:01'),
(32, '2022-03-10 04:26:30', '2022-03-10 04:26:30'),
(33, '2022-03-13 07:59:41', '2022-03-13 07:59:41');

-- --------------------------------------------------------

--
-- Table structure for table `category_translations`
--

CREATE TABLE `category_translations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `locale` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `category_translations`
--

INSERT INTO `category_translations` (`id`, `title`, `category_id`, `locale`, `created_at`, `updated_at`) VALUES
(51, 'INDOOR FURNITURE', 27, 'en', '2022-02-14 10:15:48', '2022-02-14 10:15:48'),
(52, 'أثاث داخلي', 27, 'ar', '2022-02-14 10:15:48', '2022-02-14 10:15:48'),
(53, 'RENOVAION OF HOUSE', 28, 'en', '2022-02-14 10:16:10', '2022-02-14 10:16:10'),
(54, 'تجديد المنزل', 28, 'ar', '2022-02-14 10:16:10', '2022-02-14 10:16:10'),
(55, 'HARDWOOD FLOORING', 29, 'en', '2022-02-14 10:16:26', '2022-02-14 10:16:26'),
(56, 'الأرضيات الصلبة', 29, 'ar', '2022-02-14 10:16:26', '2022-02-14 10:16:26'),
(57, 'WOOD SUPPLY', 30, 'en', '2022-02-14 10:16:43', '2022-02-14 10:16:43'),
(58, 'توريد الخشب', 30, 'ar', '2022-02-14 10:16:43', '2022-02-14 10:16:43'),
(59, 'FURNITURE MANUFACTURING', 31, 'en', '2022-02-14 10:17:01', '2022-02-14 10:17:01'),
(60, 'تصنيع الأثاث', 31, 'ar', '2022-02-14 10:17:01', '2022-02-14 10:17:01'),
(61, 'furniture', 32, 'en', '2022-03-10 04:26:30', '2022-03-13 10:04:50'),
(62, 'اثات', 32, 'ar', '2022-03-10 04:26:30', '2022-03-10 04:26:30'),
(63, 'ادوات صناعية', 33, 'ar', '2022-03-13 07:59:41', '2022-03-13 07:59:41'),
(64, 'industrial materials', 33, 'en', '2022-03-13 07:59:41', '2022-03-13 07:59:41');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `comment` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `comment_status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `recipe_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `name`, `email`, `phone`, `message`, `created_at`, `updated_at`) VALUES
(1, 'ahmed', 'thabeta@gmail.com', 'sdadasd', 'asdasdasd', NULL, NULL),
(2, 'ahmed', 'eam@eam.com', 'hello', 'ehhhhhhhhhhhhhhhhhh', '2022-02-17 07:58:40', '2022-02-17 07:58:40'),
(3, 'ahmed', 'eam@eam.com', 'hello', 'ehhhhhhhhhhhhhhhhhh', '2022-02-17 09:28:01', '2022-02-17 09:28:01'),
(4, 'ahmed', 'eam@eam.com', 'hello', 'ehhhhhhhhhhhhhhhhhh', '2022-02-17 09:35:32', '2022-02-17 09:35:32'),
(5, 'ahmed', 'eam@eam.com', 'hello', 'ehhhhhhhhhhhhhhhhhh', '2022-02-17 09:35:35', '2022-02-17 09:35:35'),
(6, 'ahmed', 'eam@eam.com', 'hello', 'ehhhhhhhhhhhhhhhhhh', '2022-02-17 09:35:42', '2022-02-17 09:35:42'),
(7, 'ahmed', 'eam@eam.com', 'hello', 'ehhhhhhhhhhhhhhhhhh', '2022-02-17 09:36:20', '2022-02-17 09:36:20'),
(8, 'ahmed', 'eam@eam.com', 'hello', 'ehhhhhhhhhhhhhhhhhh', '2022-02-17 09:36:22', '2022-02-17 09:36:22'),
(9, 'ahmed', 'eam@eam.com', 'hello', 'ehhhhhhhhhhhhhhhhhh', '2022-02-17 09:36:29', '2022-02-17 09:36:29'),
(10, 'ahmed', 'eam@eam.com', 'hello', 'ehhhhhhhhhhhhhhhhhh', '2022-02-17 09:41:39', '2022-02-17 09:41:39'),
(11, 'ahmed', 'eam@eam.com', 'hello', 'ehhhhhhhhhhhhhhhhhh', '2022-02-17 09:44:20', '2022-02-17 09:44:20'),
(12, 'ahmed', 'eam@eam.com', 'hello', 'ehhhhhhhhhhhhhhhhhh', '2022-02-17 09:50:11', '2022-02-17 09:50:11'),
(13, 'ahmed', 'eam@eam.com', 'hello', 'ehhhhhhhhhhhhhhhhhh', '2022-02-17 09:50:47', '2022-02-17 09:50:47'),
(14, 'fsd72021', 'fsd72021@gmail.com', 'ujjht', 'test', '2022-03-07 10:51:42', '2022-03-07 10:51:42'),
(15, 'fsd72021', 'fsd72021@gmail.com', 'ujjht', 'test', '2022-03-07 10:51:42', '2022-03-07 10:51:42'),
(16, 'mohamed minesy', 'admin@admin.com', 'test', 'tesst', '2022-03-07 10:58:39', '2022-03-07 10:58:39'),
(17, 'mohamed minesy', 'admin@admin.com', 'test', 'tesst', '2022-03-07 10:58:39', '2022-03-07 10:58:39'),
(18, 'mohamed minesy', 'admin@admin.com', 'test', 'testtest', '2022-03-08 11:17:10', '2022-03-08 11:17:10'),
(19, 'mohamed minesy', 'admin@admin.com', 'test', 'testtest', '2022-03-08 11:17:10', '2022-03-08 11:17:10'),
(20, 'mohamed minesy', 'admin@admin.com', 'test', 'tereet', '2022-03-08 12:10:49', '2022-03-08 12:10:49'),
(21, 'mohamed minesy', 'admin@admin.com', 'test', 'tereet', '2022-03-08 12:10:49', '2022-03-08 12:10:49'),
(22, 'فاطمة', 'admin@admn.com', 'اتتالالنلالن', 'ناناتناتلتال', '2022-03-10 06:16:22', '2022-03-10 06:16:22'),
(23, 'فاطمة', 'admin@admn.com', 'اتتالالنلالن', 'ناناتناتلتال', '2022-03-10 06:16:23', '2022-03-10 06:16:23'),
(24, 'Olympia Baird', 'kogyhes@mailinator.com', 'Elit vel et quisqua', 'Dolores blanditiis o', '2022-03-13 05:55:25', '2022-03-13 05:55:25'),
(25, 'Olympia Baird', 'kogyhes@mailinator.com', 'Elit vel et quisqua', 'Dolores blanditiis o', '2022-03-13 05:55:25', '2022-03-13 05:55:25'),
(26, 'Laurel Deleon', 'zacohuj@mailinator.com', 'Vero dolores vero vo', 'Aliqua Incidunt qu', '2022-03-13 05:55:44', '2022-03-13 05:55:44'),
(27, 'Laurel Deleon', 'zacohuj@mailinator.com', 'Vero dolores vero vo', 'Aliqua Incidunt qu', '2022-03-13 05:55:44', '2022-03-13 05:55:44'),
(28, 'Carly Boyd', 'huzaz@mailinator.com', 'Eveniet iste ad ass', 'Velit soluta neque i', '2022-03-13 05:55:55', '2022-03-13 05:55:55'),
(29, 'Carly Boyd', 'huzaz@mailinator.com', 'Eveniet iste ad ass', 'Velit soluta neque i', '2022-03-13 05:55:55', '2022-03-13 05:55:55'),
(30, 'mohamed minesy', 'admin@admin.com', 'test', 'test', '2022-03-13 05:56:14', '2022-03-13 05:56:14'),
(31, 'mohamed minesy', 'admin@admin.com', 'test', 'test', '2022-03-13 05:56:15', '2022-03-13 05:56:15'),
(32, 'mohamed minesy', 'admin@admin.com', 'After installing wp plugin, it\'s not working', 'test', '2022-03-13 05:56:25', '2022-03-13 05:56:25'),
(33, 'mohamed minesy', 'admin@admin.com', 'After installing wp plugin, it\'s not working', 'test', '2022-03-13 05:56:25', '2022-03-13 05:56:25'),
(34, 'mohamed minesy', 'admin@admin.com', 'test', 'test', '2022-03-13 05:59:01', '2022-03-13 05:59:01'),
(35, 'mohamed minesy', 'admin@admin.com', 'test', 'test', '2022-03-13 05:59:01', '2022-03-13 05:59:01'),
(36, 'mohamed minesy', 'admin@admin.com', 'test', 'فثسف', '2022-03-13 06:02:32', '2022-03-13 06:02:32'),
(37, 'mohamed minesy', 'admin@admin.com', 'test', 'فثسف', '2022-03-13 06:02:32', '2022-03-13 06:02:32'),
(38, 'mohamed minesy', 'admin@admin.com', 'test', 'بسيشبسيش', '2022-03-13 06:03:02', '2022-03-13 06:03:02'),
(39, 'mohamed minesy', 'admin@admin.com', 'test', 'بسيشبسيش', '2022-03-13 06:03:02', '2022-03-13 06:03:02'),
(40, 'mohamed minesy', 'fsd72021@gmail.com', 'After installing wp plugin, it\'s not working', 'test', '2022-03-13 06:05:17', '2022-03-13 06:05:17'),
(41, 'mohamed minesy', 'fsd72021@gmail.com', 'After installing wp plugin, it\'s not working', 'test', '2022-03-13 06:05:17', '2022-03-13 06:05:17'),
(42, 'mohamed minesy', 'admin@admin.com', 'test', 'test', '2022-03-13 06:07:43', '2022-03-13 06:07:43'),
(43, 'mohamed minesy', 'admin@admin.com', 'test', 'test', '2022-03-13 06:07:43', '2022-03-13 06:07:43'),
(44, 'mohamed minesy', 'admin@admin.com', 'test', 'message-success', '2022-03-13 06:09:18', '2022-03-13 06:09:18'),
(45, 'mohamed minesy', 'admin@admin.com', 'test', 'message-success', '2022-03-13 06:09:18', '2022-03-13 06:09:18'),
(46, 'mohamed minesy', 'admin@admin.com', 'After installing wp plugin, it\'s not working', 'test', '2022-03-13 06:11:12', '2022-03-13 06:11:12'),
(47, 'mohamed minesy', 'admin@admin.com', 'After installing wp plugin, it\'s not working', 'test', '2022-03-13 06:11:12', '2022-03-13 06:11:12'),
(48, 'mohamed minesy', 'admin@admin.com', 'After installing wp plugin, it\'s not working', 'test', '2022-03-13 06:12:17', '2022-03-13 06:12:17'),
(49, 'mohamed minesy', 'admin@admin.com', 'After installing wp plugin, it\'s not working', 'test', '2022-03-13 06:12:17', '2022-03-13 06:12:17'),
(50, 'mohamed minesy', 'admin@admin.com', 'test', 'testy', '2022-03-13 06:12:28', '2022-03-13 06:12:28'),
(51, 'mohamed minesy', 'admin@admin.com', 'test', 'testy', '2022-03-13 06:12:28', '2022-03-13 06:12:28'),
(52, 'mohamed minesy', 'super_admin@app.com', 'After installing wp plugin, it\'s not working', 'test', '2022-03-13 06:14:08', '2022-03-13 06:14:08'),
(53, 'mohamed minesy', 'super_admin@app.com', 'After installing wp plugin, it\'s not working', 'test', '2022-03-13 06:14:08', '2022-03-13 06:14:08'),
(54, 'Test Account', 'super_admin@app.com', 'gfdgwdfds', 'test', '2022-03-13 06:14:23', '2022-03-13 06:14:23'),
(55, 'Test Account', 'super_admin@app.com', 'gfdgwdfds', 'test', '2022-03-13 06:14:23', '2022-03-13 06:14:23'),
(56, 'mohamed', 'mohamed@gmail.com', '01020828482', 'message', '2022-03-23 11:34:17', '2022-03-23 11:34:17'),
(57, 'mohamed', 'mohamed@gmail.com', '01020828482', 'message', '2022-03-23 11:35:11', '2022-03-23 11:35:11'),
(58, 'mohamed', 'mohamed@minesy.com', '01020828482', 'message', '2022-03-23 12:42:49', '2022-03-23 12:42:49');

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
-- Table structure for table `faqs`
--

CREATE TABLE `faqs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `faqs`
--

INSERT INTO `faqs` (`id`, `created_at`, `updated_at`) VALUES
(1, '2022-02-14 12:43:10', '2022-02-14 12:43:10');

-- --------------------------------------------------------

--
-- Table structure for table `faq_translations`
--

CREATE TABLE `faq_translations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `faq_id` bigint(20) UNSIGNED NOT NULL,
  `question` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `answer` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `locale` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `faq_translations`
--

INSERT INTO `faq_translations` (`id`, `faq_id`, `question`, `answer`, `locale`, `created_at`, `updated_at`) VALUES
(1, 1, 'asasasas', 'asasasssda', 'en', '2022-02-14 12:43:10', '2022-02-14 12:46:29'),
(2, 1, 'Ipsum omnis ipsam id', 'Ullam vel omnis erro', 'ar', '2022-02-14 12:43:10', '2022-02-14 12:43:10');

-- --------------------------------------------------------

--
-- Table structure for table `favorits`
--

CREATE TABLE `favorits` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `recipe_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `features`
--

CREATE TABLE `features` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `icon` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `features`
--

INSERT INTO `features` (`id`, `icon`, `created_at`, `updated_at`) VALUES
(2, 'storage/featue_update17-1648041518.jpg', '2022-03-08 05:11:00', '2022-03-23 11:18:38'),
(3, 'storage/featue_update838-1648041508.jpg', '2022-03-08 10:27:03', '2022-03-23 11:18:28'),
(4, 'storage/feature330-1648041316.jpg', '2022-03-23 11:15:16', '2022-03-23 11:15:16');

-- --------------------------------------------------------

--
-- Table structure for table `feature_translations`
--

CREATE TABLE `feature_translations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `feature_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `locale` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `feature_translations`
--

INSERT INTO `feature_translations` (`id`, `feature_id`, `name`, `description`, `locale`, `created_at`, `updated_at`) VALUES
(3, 2, 'The best construction contracting', '<p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Doloribus eligendi odio, velit error in perferendis numquam ex quisquam eveniet? Optio odio ipsum, delectus soluta nobis voluptatibus placeat velit aliquid ab.</p>', 'en', '2022-03-08 05:11:00', '2022-03-23 11:18:38'),
(4, 2, 'افضل المقاولات الانشائية', '<p>لدينا القدره على تطوير ورفع كفاءة المشاريع والتقدم نحو المزيد من التوسع</p>', 'ar', '2022-03-08 05:11:00', '2022-03-23 11:18:38'),
(5, 3, 'We have the ability to build and construct', '<p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Doloribus eligendi odio, velit error in perferendis numquam ex quisquam eveniet? Optio odio ipsum, delectus soluta nobis voluptatibus placeat velit aliquid ab.Lorem ipsum, dolor sit amet consectetur adipisicing elit. Doloribus eligendi odio, velit error in perferendis numquam ex quisquam eveniet? Optio odio ipsum, delectus soluta nobis voluptatibus placeat velit aliquid ab.Lorem ipsum, dolor sit amet consectetur adipisicing elit. Doloribus eligendi odio, velit error in perferendis numquam ex quisquam eveniet? Optio odio ipsum, delectus soluta nobis voluptatibus placeat velit aliquid ab.Lorem ipsum, dolor sit amet consectetur adipisicing elit. Doloribus eligendi odio, velit error in perferendis numquam ex quisquam eveniet? Optio odio ipsum, delectus soluta nobis voluptatibus placeat velit aliquid ab.Lorem ipsum, dolor sit amet consectetur adipisicing elit. Doloribus eligendi odio, velit error in perferendis numquam ex quisquam eveniet? Optio odio ipsum, delectus soluta nobis voluptatibus placeat velit aliquid ab.Lorem ipsum, dolor sit amet consectetur adipisicing elit. Doloribus eligendi odio, velit error in perferendis numquam ex quisquam eveniet? Optio odio ipsum, delectus soluta nobis voluptatibus placeat velit aliquid ab.Lorem ipsum, dolor sit amet consectetur adipisicing elit. Doloribus eligendi odio, velit error in perferendis numquam ex quisquam eveniet? Optio odio ipsum, delectus soluta nobis voluptatibus placeat velit aliquid ab.Lorem ipsum, dolor sit amet consectetur adipisicing elit. Doloribus eligendi odio, velit error in perferendis numquam ex quisquam eveniet? Optio odio ipsum, delectus soluta nobis voluptatibus placeat velit aliquid ab.</p>', 'en', '2022-03-08 10:27:03', '2022-03-23 11:18:28'),
(6, 3, 'لدينا القدرة علي البناء والانشاء', '<p>وعند موافقه العميل المبدئيه على التصميم يتم ازالة هذا النص من التصميموعند موافقه العميل المبدئيه على التصميم يتم ازالة هذا النص من التصميموعند موافقه العميل المبدئيه على التصميم يتم ازالة هذا النص من التصميموعند موافقه العميل المبدئيه على التصميم يتم ازالة هذا النص من التصميموعند موافقه العميل المبدئيه على التصميم يتم ازالة هذا النص من التصميموعند موافقه العميل المبدئيه على التصميم يتم ازالة هذا النص من التصميموعند موافقه العميل المبدئيه على التصميم يتم ازالة هذا النص من التصميموعند موافقه العميل المبدئيه على التصميم يتم ازالة هذا النص من التصميموعند موافقه العميل المبدئيه على التصميم يتم ازالة هذا النص من التصميموعند موافقه العميل المبدئيه على التصميم يتم ازالة هذا النص من التصميموعند موافقه العميل المبدئيه على التصميم يتم ازالة هذا النص من التصميموعند موافقه العميل المبدئيه على التصميم يتم ازالة هذا النص من التصميموعند موافقه العميل المبدئيه على التصميم يتم ازالة هذا النص من التصميموعند موافقه العميل المبدئيه على التصميم يتم ازالة هذا النص من التصميموعند موافقه العميل المبدئيه على التصميم يتم ازالة هذا النص من التصميموعند موافقه العميل المبدئيه على التصميم يتم ازالة هذا النص من التصميموعند موافقه العميل المبدئيه على التصميم يتم ازالة هذا النص من التصميموعند موافقه العميل المبدئيه على التصميم يتم ازالة هذا النص من التصميموعند موافقه العميل المبدئيه على التصميم يتم ازالة هذا النص من التصميموعند موافقه العميل المبدئيه على التصميم يتم ازالة هذا النص من التصميموعند موافقه العميل المبدئيه على التصميم يتم ازالة هذا النص من التصميموعند موافقه العميل المبدئيه على التصميم يتم ازالة هذا النص من التصميموعند موافقه العميل المبدئيه على التصميم يتم ازالة هذا النص من التصميموعند موافقه العميل المبدئيه على التصميم يتم ازالة هذا النص من التصميموعند موافقه العميل المبدئيه على التصميم يتم ازالة هذا النص من التصميموعند موافقه العميل المبدئيه على التصميم يتم ازالة هذا النص من التصميموعند موافقه العميل المبدئيه على التصميم يتم ازالة هذا النص من التصميم</p>', 'ar', '2022-03-08 10:27:03', '2022-03-23 11:18:28'),
(7, 4, 'نموذج لوريم ايبسوم عربي', '<p>&nbsp;نموذج لوريم ايبسوم عربي نموذج لوريم ايبسوم عربي نموذج لوريم ايبسوم عربي نموذج لوريم ايبسوم عربي نموذج لوريم ايبسوم عربي نموذج لوريم ايبسوم عربي نموذج لوريم ايبسوم عربي نموذج لوريم ايبسوم عربي نموذج لوريم ايبسوم عربي نموذج لوريم ايبسوم عربي نموذج لوريم ايبسوم عربي نموذج لوريم ايبسوم عربي نموذج لوريم ايبسوم عربي نموذج لوريم ايبسوم عربي نموذج لوريم ايبسوم عربي نموذج لوريم ايبسوم عربي نموذج لوريم ايبسوم عربي نموذج لوريم ايبسوم عربي نموذج لوريم ايبسوم عربي نموذج لوريم ايبسوم عربي نموذج لوريم ايبسوم عربي نموذج لوريم ايبسوم عربي نموذج لوريم ايبسوم عربي نموذج لوريم ايبسوم عربي نموذج لوريم ايبسوم عربي نموذج لوريم ايبسوم عربي نموذج لوريم ايبسوم عربي نموذج لوريم ايبسوم عربي نموذج لوريم ايبسوم عربي نموذج لوريم ايبسوم عربي نموذج لوريم ايبسوم عربي نموذج لوريم ايبسوم عربي نموذج لوريم ايبسوم عربي نموذج لوريم ايبسوم عربي نموذج لوريم ايبسوم عربي نموذج لوريم ايبسوم عربي نموذج لوريم ايبسوم عربي نموذج لوريم ايبسوم عربي نموذج لوريم ايبسوم عربي نموذج لوريم ايبسوم عربي نموذج لوريم ايبسوم عربي نموذج لوريم ايبسوم عربي نموذج لوريم ايبسوم عربي نموذج لوريم ايبسوم عربي نموذج لوريم ايبسوم عربي نموذج لوريم ايبسوم عربي نموذج لوريم ايبسوم عربي نموذج لوريم ايبسوم عربي نموذج لوريم ايبسوم عربي نموذج لوريم ايبسوم عربي نموذج لوريم ايبسوم عربي نموذج لوريم ايبسوم عربي نموذج لوريم ايبسوم عربي نموذج لوريم ايبسوم عربي نموذج لوريم ايبسوم عربي نموذج لوريم ايبسوم عربي نموذج لوريم ايبسوم عربي نموذج لوريم ايبسوم عربي نموذج لوريم ايبسوم عربي نموذج لوريم ايبسوم عربي نموذج لوريم ايبسوم عربي نموذج لوريم ايبسوم عربي نموذج لوريم ايبسوم عربي نموذج لوريم ايبسوم عربي نموذج لوريم ايبسوم عربي نموذج لوريم ايبسوم عربي نموذج لوريم ايبسوم عربي نموذج لوريم ايبسوم عربي</p>', 'ar', '2022-03-23 11:15:16', '2022-03-23 11:15:16'),
(8, 4, 'repeating testrepeating testrepeating test', '<p>repeating testrepeating testrepeating testrepeating testrepeating testrepeating testrepeating testrepeating testrepeating testrepeating testrepeating testrepeating testrepeating testrepeating testrepeating testrepeating testrepeating testrepeating testrepeating testrepeating testrepeating testrepeating testrepeating testrepeating testrepeating testrepeating testrepeating testrepeating testrepeating testrepeating testrepeating testrepeating testrepeating testrepeating testrepeating testrepeating testrepeating testrepeating testrepeating testrepeating testrepeating testrepeating testrepeating testrepeating testrepeating testrepeating testrepeating testrepeating testrepeating testrepeating testrepeating testrepeating testrepeating testrepeating testrepeating testrepeating testrepeating testrepeating testrepeating testrepeating testrepeating testrepeating testrepeating testrepeating testrepeating testrepeating testrepeating testrepeating testrepeating testrepeating testrepeating testrepeating testrepeating testrepeating testrepeating testrepeating testrepeating testrepeating testrepeating testrepeating testrepeating testrepeating testrepeating testrepeating testrepeating testrepeating testrepeating testrepeating testrepeating testrepeating testrepeating testrepeating testrepeating testrepeating testrepeating testrepeating testrepeating testrepeating testrepeating testrepeating testrepeating testrepeating testrepeating testrepeating testrepeating testrepeating testrepeating testrepeating testrepeating testrepeating testrepeating testrepeating testrepeating testrepeating testrepeating testrepeating testrepeating testrepeating testrepeating testrepeating testrepeating testrepeating testrepeating testrepeating testrepeating testrepeating testrepeating testrepeating testrepeating testrepeating testrepeating testrepeating testrepeating testrepeating testrepeating testrepeating testrepeating testrepeating testrepeating testrepeating testrepeating testrepeating testrepeating testrepeating testrepeating testrepeating testrepeating testrepeating testrepeating testrepeating testrepeating testrepeating testrepeating testrepeating testrepeating testrepeating testrepeating testrepeating testrepeating testrepeating testrepeating testrepeating testrepeating testrepeating testrepeating testrepeating testrepeating testrepeating testrepeating testrepeating testrepeating testrepeating testrepeating testrepeating testrepeating testrepeating testrepeating testrepeating testrepeating testrepeating testrepeating testrepeating testrepeating testrepeating testrepeating testrepeating testrepeating testrepeating testrepeating test</p>', 'en', '2022-03-23 11:15:16', '2022-03-23 11:15:16');

-- --------------------------------------------------------

--
-- Table structure for table `galleries`
--

CREATE TABLE `galleries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `galleries`
--

INSERT INTO `galleries` (`id`, `image`, `category_id`, `created_at`, `updated_at`) VALUES
(1, 'storage/Gallery_update213-1646921529.jpg', 31, '2022-02-14 11:02:07', '2022-03-13 07:38:57'),
(2, 'storage/Gallery_update990-1646921560.jpg', 28, '2022-02-14 11:05:04', '2022-03-13 07:39:12'),
(3, 'storage/image816-1644843904.jpg', 29, '2022-02-14 11:05:04', '2022-03-13 07:39:25'),
(4, 'storage/Gallery_update98-1647168324.jpg', 27, '2022-03-08 10:29:27', '2022-03-13 07:45:24'),
(5, 'storage/gallery752-1647168188.jpg', 32, '2022-03-13 07:43:08', '2022-03-13 07:43:08'),
(6, 'storage/gallery158-1647168945.jpg', 30, '2022-03-13 07:55:45', '2022-03-13 07:55:45'),
(7, 'storage/gallery945-1647169578.jpg', 33, '2022-03-13 08:06:18', '2022-03-13 08:06:18'),
(8, 'storage/gallery177-1647171035.jpg', 30, '2022-03-13 08:30:35', '2022-03-13 08:30:35'),
(9, 'storage/gallery704-1647171083.jpg', 29, '2022-03-13 08:31:23', '2022-03-13 08:31:23'),
(10, 'storage/gallery306-1647171187.png', 31, '2022-03-13 08:33:07', '2022-03-13 08:33:07');

-- --------------------------------------------------------

--
-- Table structure for table `gallery_translations`
--

CREATE TABLE `gallery_translations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image_alt` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gallery_id` bigint(20) UNSIGNED NOT NULL,
  `locale` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `gallery_translations`
--

INSERT INTO `gallery_translations` (`id`, `title`, `description`, `image_alt`, `gallery_id`, `locale`, `created_at`, `updated_at`) VALUES
(1, 'Occaecat officiis po', 'Officia rerum nobis', 'Eu aut vel necessita', 1, 'en', '2022-02-14 11:02:07', '2022-02-14 11:02:07'),
(2, 'أفضل شركات المقولات', 'لدينا قدره على بناء كل ما يحتاج اليه المستثمر من مباني لمشروعه.', 'تقنية المعلومات', 1, 'ar', '2022-02-14 11:02:07', '2022-03-10 05:19:43'),
(3, 'Repudiandae iste qui', 'Lorem ipsum', 'client 1', 2, 'en', '2022-02-14 11:05:04', '2022-02-14 11:05:04'),
(4, 'اخر عروضنا المميزة', 'او نماذج مواقع انترنت', 'عميل واحد', 2, 'ar', '2022-02-14 11:05:04', '2022-02-14 11:05:04'),
(5, 'Repudiandae iste qui', 'Lorem ipsum', 'client 1', 3, 'en', '2022-02-14 11:05:04', '2022-02-14 11:05:04'),
(6, 'اخر عروضنا المميزة', 'او نماذج مواقع انترنت', 'عميل واحد', 3, 'ar', '2022-02-14 11:05:04', '2022-02-14 11:05:04'),
(7, 'test', 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Doloribus eligendi odio, velit error in perferendis numquam ex quisquam eveniet? Optio odio ipsum, delectus soluta nobis voluptatibus placeat velit aliquid ab.', 'test', 4, 'en', '2022-03-08 10:29:27', '2022-03-08 10:29:27'),
(8, 'موقع ومساحة مشروع شركة مقاولات', 'تحتاج إلى التواجد في موقع الحدث. وموقع الحدث بالنسبة لمشروع شركة مقاولات يتمثل في المناطق التي تشهد أعمال البناء والتعمير. كالمدن الجديدة التي تُبنى في الصحراء وأطراف المدن لتخفيف الضغط عن المدن الرئيسية.', 'نموذج لوريم ايبسوم عربي', 4, 'ar', '2022-03-08 10:29:27', '2022-03-10 11:03:11'),
(9, 'مواد صناعية', 'لدينا قدره على بناء كل ما يحتاج اليه المستثمر من مباني لمشروعه.', 'تقنية المعلومات', 5, 'ar', '2022-03-13 07:43:08', '2022-03-13 07:43:08'),
(10, 'industrial materials', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque at ligula id quam volutpat feugiat. Morbi ac odio ante. Curabitur sed augue semper ante', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque at ligula id quam volutpat feugiat. Morbi ac odio ante. Curabitur sed augue semper ante', 5, 'en', '2022-03-13 07:43:08', '2022-03-13 07:43:08'),
(11, 'أفضل شركات المقولات', 'أفضل شركات المقولات', 'أفضل شركات المقولات', 6, 'ar', '2022-03-13 07:55:45', '2022-03-13 07:55:45'),
(12, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque at ligula id quam volutpat feugiat. Morbi ac odio ante. Curabitur sed augue semper ante', 'the best contracting and construction companies', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque at ligula id quam volutpat feugiat. Morbi ac odio ante. Curabitur sed augue semper ante', 6, 'en', '2022-03-13 07:55:45', '2022-03-13 07:55:45'),
(13, 'مشروعات ضخمة', 'لدينا القدره على تطوير ورفع كفاءة المشاريع والتقدم نحو المزيد من التوسع', 'وعند موافقه العميل المبدئيه على التصميم يتم ازالة هذا النص من التصميم ويتم وضع النصوص النهائية المطلوبة للتصميم ويقول البعض ان وضع النصوص التجريبية بالتصميم قد تشغل المشاهد عن وضع الكثير من الملاحظات او الانتقادات للتصميم الاساسي.', 7, 'ar', '2022-03-13 08:06:18', '2022-03-13 08:06:18'),
(14, 'mega projects', 'We have the ability to build all the buildings that the investor needs for his project.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque at ligula id quam volutpat feugiat. Morbi ac odio ante. Curabitur sed augue semper ante', 7, 'en', '2022-03-13 08:06:18', '2022-03-13 08:06:18'),
(15, 'أفضل شركات المقولات', 'لدينا القدره على تطوير ورفع كفاءة المشاريع والتقدم نحو المزيد من التوسع', 'تقنية المعلومات', 8, 'ar', '2022-03-13 08:30:35', '2022-03-13 08:30:35'),
(16, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque at ligula id quam volutpat feugiat. Morbi ac odio ante. Curabitur sed augue semper ante', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque at ligula id quam volutpat feugiat. Morbi ac odio ante. Curabitur sed augue semper ante', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque at ligula id quam volutpat feugiat. Morbi ac odio ante. Curabitur sed augue semper ante', 8, 'en', '2022-03-13 08:30:35', '2022-03-13 08:30:35'),
(17, 'أفضل شركات المقولات', 'أفضل شركات مقاولات وانشاءات', 'تقنية المعلومات', 9, 'ar', '2022-03-13 08:31:23', '2022-03-13 08:31:23'),
(18, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque at ligula id quam volutpat feugiat. Morbi ac odio ante. Curabitur sed augue semper ante', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque at ligula id quam volutpat feugiat. Morbi ac odio ante. Curabitur sed augue semper ante', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque at ligula id quam volutpat feugiat. Morbi ac odio ante. Curabitur sed augue semper ante', 9, 'en', '2022-03-13 08:31:23', '2022-03-13 08:31:23'),
(19, 'لدينا قدرة فائقة في بناء المستقبل', 'وعند موافقه العميل المبدئيه على التصميم يتم ازالة هذا النص من التصميم ويتم وضع النصوص النهائية المطلوبة', 'وعند موافقه العميل المبدئيه على التصميم يتم ازالة هذا النص من التصميم ويتم وضع النصوص النهائية المطلوبة', 10, 'ar', '2022-03-13 08:33:07', '2022-03-13 08:33:07'),
(20, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque at ligula id quam volutpat feugiat. Morbi ac odio ante. Curabitur sed augue semper ante', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque at ligula id quam volutpat feugiat. Morbi ac odio ante. Curabitur sed augue semper ante', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque at ligula id quam volutpat feugiat. Morbi ac odio ante. Curabitur sed augue semper ante', 10, 'en', '2022-03-13 08:33:07', '2022-03-13 08:33:07');

-- --------------------------------------------------------

--
-- Table structure for table `kitchen_types`
--

CREATE TABLE `kitchen_types` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kitchen_types`
--

INSERT INTO `kitchen_types` (`id`, `created_at`, `updated_at`) VALUES
(1, '2022-02-14 11:12:21', '2022-02-14 11:12:21');

-- --------------------------------------------------------

--
-- Table structure for table `kitchen_type_translations`
--

CREATE TABLE `kitchen_type_translations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kitchen_type_id` bigint(20) UNSIGNED NOT NULL,
  `locale` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kitchen_type_translations`
--

INSERT INTO `kitchen_type_translations` (`id`, `title`, `kitchen_type_id`, `locale`, `created_at`, `updated_at`) VALUES
(1, 'We Are The Leader In Construction Company', 1, 'en', '2022-02-14 11:12:21', '2022-02-14 11:12:21'),
(2, 'Quam voluptatem exce', 1, 'ar', '2022-02-14 11:12:21', '2022-02-14 11:12:21');

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
(5, '2021_12_27_140726_create_categories_table', 2),
(6, '2021_12_27_140808_create_category_translations_table', 2),
(7, '2021_12_27_140838_create_recipes_table', 2),
(8, '2021_12_27_140859_create_recipe_translations_table', 2),
(11, '2021_12_27_141138_create_pages_table', 2),
(12, '2021_12_27_141154_create_page_translations_table', 2),
(13, '2021_12_27_141222_create_settings_table', 2),
(14, '2021_12_27_141243_create_setting_translations_table', 2),
(15, '2021_12_27_141350_create_comments_table', 2),
(16, '2021_12_27_141429_create_contacts_table', 2),
(17, '2022_01_02_133308_create_permission_tables', 3),
(18, '2022_01_04_132948_create_favorits_table', 3),
(19, '2022_01_05_093321_create_views_table', 3),
(20, '2022_01_10_080857_create_kitchen_types_table', 3),
(21, '2022_01_10_081132_create_kitchen_type_translations_table', 3),
(22, '2022_02_13_112241_create_sliders_table', 4),
(23, '2022_02_13_112303_create_slider_translations_table', 4),
(24, '2022_01_11_074538_create_testimonials_table', 5),
(25, '2022_01_11_074840_create_testimonial_translations_table', 5),
(26, '2022_01_10_174724_create_partners_table', 6),
(27, '2022_01_10_180616_create_partner_translations_table', 6),
(28, '2022_01_10_184248_create_agents_table', 7),
(29, '2022_01_10_184525_create_agent_translations_table', 7),
(30, '2022_01_10_184248_create_teams_table', 8),
(31, '2022_01_10_184525_create_team_translations_table', 8),
(32, '2022_02_14_070143_create_services_table', 9),
(33, '2022_02_14_070222_create_service_translations_table', 9),
(34, '2022_02_14_070625_create_options_table', 9),
(35, '2022_02_14_071218_create_option_translations_table', 9),
(36, '2022_02_14_072700_create_serv_images_table', 9),
(39, '2021_12_27_141004_create_galleries_table', 10),
(40, '2021_12_27_141018_create_gallery_translations_table', 10),
(41, '2021_11_23_104538_create_features_table', 11),
(42, '2021_11_23_104629_create_feature_translations_table', 11),
(43, '2021_11_23_112317_create_faqs_table', 11),
(44, '2021_11_23_112923_create_faq_translations_table', 11);

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

-- --------------------------------------------------------

--
-- Table structure for table `options`
--

CREATE TABLE `options` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `service_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `option_translations`
--

CREATE TABLE `option_translations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `option_id` bigint(20) UNSIGNED NOT NULL,
  `value` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `locale` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE `pages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `identifier` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `video` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pages`
--

INSERT INTO `pages` (`id`, `identifier`, `image`, `video`, `created_at`, `updated_at`) VALUES
(3, 'popular_post', '', '', '2021-12-29 12:55:15', '2021-12-29 12:55:15'),
(5, 'about', 'storage/image982-1646640948.jpg', '0124587368', NULL, '2022-03-10 11:15:06'),
(6, 'construction', 'storage/image996-1646916164.jpg', '01125425246', NULL, '2022-03-10 09:42:44'),
(7, 'renovation', 'storage/image978-1646916485.jpg', '01125425246', NULL, '2022-03-13 08:10:14'),
(8, 'video', 'storage/image653-1646646622.jpg', 'https://www.youtube.com/embed/kt4Z2AA5Kj0', NULL, '2022-03-07 07:50:22'),
(9, 'welcome', 'welcome', '', NULL, NULL),
(10, 'subscribe', 'storage/image653-1646646622.jpg', '01865 524 8503', NULL, '2022-03-07 09:44:23'),
(11, 'feature', 'feature', 'feature', NULL, NULL),
(12, 'faq', 'faq', 'faq', NULL, NULL),
(13, 'projects', 'projects', '0114785695', NULL, '2022-03-10 10:50:59'),
(14, 'contact', 'contact', '01125425246', NULL, '2022-03-13 09:28:31'),
(15, 'our-mission', 'storage/image103-1646722492.jpg', '01125425246', NULL, '2022-03-10 05:03:21'),
(16, 'service', 'storage/image137-1646642164.jpg', '', NULL, '2022-03-07 06:36:04');

-- --------------------------------------------------------

--
-- Table structure for table `page_translations`
--

CREATE TABLE `page_translations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `img_alt` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `page_id` bigint(20) UNSIGNED NOT NULL,
  `locale` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `page_translations`
--

INSERT INTO `page_translations` (`id`, `title`, `description`, `img_alt`, `page_id`, `locale`, `created_at`, `updated_at`) VALUES
(1, 'التصميم', '<p>وعند موافقه العميل المبدئيه على التصميم يتم ازالة هذا النص من التصميم ويتم وضع النصوص النهائية المطلوبة للتصميم ويقول البعض ان وضع النصوص التجريبية بالتصميم قد تشغل المشاهد عن وضع الكثير من الملاحظات او الانتقادات للتصميم الاساسي.</p>', 'التصميم', 7, 'ar', NULL, '2022-03-13 08:10:14'),
(5, 'In adipisci minima qaasdasdaacc', 'Ipsa ut quia sit fusssss', '', 3, 'en', '2021-12-29 12:55:15', '2022-02-15 05:00:03'),
(6, 'Molestiae odio labor', 'Vitae nihil consequa', '', 3, 'ar', '2021-12-29 12:55:15', '2021-12-29 12:55:15'),
(9, 'Welcome to Marassi Al Arabia', '<p>We care about the growing needs of our community. We build systems to deliver health services to individuals, families, communities and the general population.</p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p><br>&nbsp;</p>', 'about', 5, 'en', NULL, '2022-03-13 06:21:30'),
(10, 'مرحبا بكم في مراسي العربية', '<p><br><strong>نحن نهتم بالاحتياجات المتزايدة لمجتمعنا. نبني أنظمة لتقديم الخدمات الصحية للأفراد والأسر والمجتمعات والسكان بشكل عام.</strong><br>&nbsp;</p><p>&nbsp;</p>', 'مرحبا بكم في مراسي العربية', 5, 'ar', NULL, '2022-03-13 08:26:29'),
(11, 'البناء', '<p>وعند موافقه العميل المبدئيه على التصميم يتم ازالة هذا النص من التصميم ويتم وضع النصوص النهائية المطلوبة للتصميم ويقول البعض ان وضع النصوص التجريبية بالتصميم قد تشغل المشاهد عن وضع الكثير من الملاحظات او الانتقادات للتصميم الاساسي.</p>', 'شركات المقولات العالمية', 6, 'ar', NULL, '2022-03-13 06:23:16'),
(12, 'Construction', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque at ligula id quam volutpat feugiat. Morbi ac odio ante. Curabitur sed augue semper ante&nbsp;</p>', 'image', 6, 'en', NULL, '2022-03-13 06:23:16'),
(13, 'Renovation', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque at ligula id quam volutpat feugiat. Morbi ac odio ante. Curabitur sed augue semper ante fringilla gravida at at erat. Phasellus maximus turpis quis dui suscipit, in faucibus ligula fermentum. Aenean sed luctus sapien. Nunc vel imperdiet sem. Nullam eget arcu nec augue molestie tincidunt ut in nisi. In bibendum lorem a urna euismod pellentesque. Vivamus quis ante porta, condimentum turpis quis, tempor ipsum. Nullam lorem ex, molestie nec leo vel, sodales feugiat erat.</p>', 'Renovation', 7, 'en', NULL, '2022-03-13 08:10:14'),
(14, 'Checkout our video for featured work', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque at ligula id quam volutpat feugiat. Morbi ac odio ante. Curabitur sed augue semper ante fringilla gravida at at erat. Phasellus maximus turpis quis dui suscipit, in faucibus ligula fermentum. Aenean sed luctus sapien. Nunc vel imperdiet sem. Nullam eget arcu nec augue molestie tincidunt ut in nisi. In bibendum lorem a urna euismod pellentesque. Vivamus quis ante porta, condimentum turpis quis, tempor ipsum. Nullam lorem ex, molestie nec leo vel, sodales feugiat erat.</p>', 'video', 8, 'en', NULL, '2022-03-13 06:45:16'),
(15, 'فيديو  توضيحي للمقاولات الانشائية', '<p>وعند موافقه العميل المبدئيه على التصميم يتم ازالة هذا النص من التصميم ويتم وضع النصوص النهائية المطلوبة للتصميم ويقول البعض ان وضع النصوص التجريبية بالتصميم قد تشغل المشاهد عن وضع الكثير من الملاحظات او الانتقادات للتصميم الاساسي.</p>', 'video', 8, 'ar', NULL, '2022-03-13 06:38:53'),
(16, 'Welcome to construct press\r\n', 'Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore etdolore magnam aliq uam quae rat voluptatem. Ut enim ad minima veniam, quis nostrum.\r\n\r\nWe are available for 24/7 for you requirements\r\n', 'welcome', 9, 'en', NULL, NULL),
(17, 'اهلا بكم ', 'لوريم ايبسوم هو نموذج افتراضي يوضع في التصاميم لتعرض على العميل ليتصور طريقه وضع النصوص بالتصاميم سواء كانت تصاميم مطبوعه ... بروشور او فلاير على سبيل المثال ... او نماذج مواقع انترنت ...\r\n\r\n', 'hello', 9, 'ar', NULL, NULL),
(18, 'faq', 'faqfaqfaqfaqfaq', 'faq', 12, 'en', NULL, NULL),
(19, 'الاسئلة الشائعة ', 'الاسئلة الشائعة الاسئلة الشائعة الاسئلة الشائعة الاسئلة الشائعة الاسئلة الشائعة الاسئلة الشائعة ', 'faq', 12, 'ar', NULL, NULL),
(20, 'feature', '<p>We are available 24 to meet your requirements</p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p><br>&nbsp;</p>', 'feature', 11, 'en', NULL, '2022-03-13 08:19:13'),
(21, 'نحن متواجدون على مدار الساعة طوال أيام الأسبوع لتلبية متطلباتك', '<h4>نحن متواجدون على مدار الساعة طوال أيام الأسبوع لتلبية متطلباتك</h4>', 'feature', 11, 'ar', NULL, '2022-03-13 08:16:18'),
(22, 'projects', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque at ligula id quam volutpat feugiat. Morbi ac odio ante. Curabitur sed augue semper ante fringilla gravida at at erat. Phasellus maximus turpis quis dui suscipit, in faucibus&nbsp;</p>', 'projects', 13, 'en', NULL, '2022-03-13 06:26:55'),
(23, 'المشاريع', '<p>من خلال دراسة جدوى مشروع شركة مقاولات تستطيع التعرف على الأمور الفنية المتعلقة بموقع المشروع والمعدات المطلوب توفيرها “عن طريق الايجار” ومواصفات العمالة والتكاليف المتوقعة، من خلال دراسة جدوى مشروع شركة مقاولات تستطيع التعرف على الأمور الفنية المتعلقة بموقع المشروع والمعدات المطلوب توفيرها “عن طريق الايجار” ومواصفات العمالة والتكاليف المتوقعة،من خلال دراسة جدوى مشروع شركة مقاولات تستطيع التعرف على الأمور الفنية المتعلقة بموقع المشروع والمعدات المطلوب توفيرها “عن طريق الايجار” ومواصفات العمالة والتكاليف المتوقعة،من خلال دراسة جدوى مشروع شركة مقاولات تستطيع التعرف على الأمور الفنية المتعلقة بموقع المشروع والمعدات المطلوب توفيرها “عن طريق الايجار” ومواصفات العمالة والتكاليف المتوقعة،</p>', 'المشاريع', 13, 'ar', NULL, '2022-03-10 10:51:37'),
(24, 'contact', '<p>Be in touch with us so that we can answer your inquiries by filling out the following form</p><p><br>&nbsp;</p>', 'contact', 14, 'en', NULL, '2022-03-13 09:42:43'),
(25, 'اتصل بنا', '<p>كن علي تواصل معانا لنقوم بالرد علي استفساراتك من خلال ملئ النموذج الاتي&nbsp;</p>', 'contact', 14, 'ar', NULL, '2022-03-13 09:34:54'),
(26, 'our-mission', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque at ligula id quam volutpat feugiat. Morbi ac odio ante. Curabitur sed augue semper ante fringilla gravida at at erat. Phasellus maximus turpis quis dui suscipit, in faucibus&nbsp;</p>', 'our-mission', 15, 'en', NULL, '2022-03-13 06:26:07'),
(27, 'مهمتنا', '<p>&nbsp;لدينا القدره على تطوير ورفع كفاءة المشاريع والتقدم نحو المزيد من التوسع&nbsp;</p>', 'أفضل شركات مقاولات وانشاءات', 15, 'ar', NULL, '2022-03-10 05:03:21'),
(28, 'الخدمات التي نقدمها', '<p>نقدم العديد من الخدمات التي تجعلك مميز عن الاخرين ولن تنسي&nbsp;</p>', 'service', 16, 'ar', NULL, '2022-03-10 10:03:58'),
(29, 'Services That We Offers', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque at ligula id quam volutpat feugiat. Morbi ac odio ante. Curabitur sed augue semper ante fringilla gravida at at erat. Phasellus maximus turpis quis dui suscipit, in faucibus ligula fermentum. Aenean sed luctus sapien. Nunc vel imperdiet sem. Nullam eget arcu nec augue molestie tincidunt ut in nisi. In bibendum lorem a urna euismod pellentesque. Vivamus quis ante porta, condimentum turpis quis, tempor ipsum. Nullam lorem ex, molestie nec leo vel, sodales feugiat erat.</p>', 'service', 16, 'en', NULL, '2022-03-13 09:48:06'),
(30, 'اشترك الان', '<p>اذا كان لديك أي أعمال بناء وتجديد ، فما عليك سوى الاتصال برقم الطوارئ على مدار 24 ساعة.</p>', 'subscribe', 10, 'ar', NULL, '2022-03-13 06:36:47'),
(31, 'Great Construction Company', '<p><i>If you have any construction and renovation work need, simply call our 24 hour emergecny number.</i></p><p><br>&nbsp;</p>', 'subscribe', 10, 'en', NULL, '2022-03-07 09:44:23');

-- --------------------------------------------------------

--
-- Table structure for table `partners`
--

CREATE TABLE `partners` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `partners`
--

INSERT INTO `partners` (`id`, `image`, `created_at`, `updated_at`) VALUES
(1, 'storage/image671-1644852111.gif', '2022-02-14 13:21:51', '2022-02-14 13:21:51'),
(2, 'storage/partner_update55-1646742729.png', '2022-03-08 10:31:51', '2022-03-08 10:32:09'),
(3, 'storage/partner_update189-1646913641.png', '2022-03-10 09:00:15', '2022-03-10 09:00:41'),
(4, 'storage/partner100-1646921490.png', '2022-03-10 11:11:30', '2022-03-10 11:11:30');

-- --------------------------------------------------------

--
-- Table structure for table `partner_translations`
--

CREATE TABLE `partner_translations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `img_alt` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `partner_id` bigint(20) UNSIGNED NOT NULL,
  `locale` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `partner_translations`
--

INSERT INTO `partner_translations` (`id`, `img_alt`, `partner_id`, `locale`, `created_at`, `updated_at`) VALUES
(1, 'testimonial', 1, 'en', '2022-02-14 13:21:51', '2022-02-14 13:21:51'),
(2, 'testimonial image', 1, 'ar', '2022-02-14 13:21:51', '2022-02-14 13:21:51'),
(3, 'Fugiat quidem maxim', 2, 'en', '2022-03-08 10:31:51', '2022-03-08 10:31:51'),
(4, 'نموذج لوريم ايبسوم عربي', 2, 'ar', '2022-03-08 10:31:51', '2022-03-08 10:31:51'),
(5, 'athasathasathas', 3, 'en', '2022-03-10 09:00:15', '2022-03-10 09:00:15'),
(6, 'التصميم', 3, 'ar', '2022-03-10 09:00:15', '2022-03-10 09:00:15'),
(7, 'test', 4, 'en', '2022-03-10 11:11:30', '2022-03-10 11:11:30'),
(8, 'نموذج لوريم ايبسوم عربي', 4, 'ar', '2022-03-10 11:11:30', '2022-03-10 11:11:30');

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

-- --------------------------------------------------------

--
-- Table structure for table `recipes`
--

CREATE TABLE `recipes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_slider` enum('on','off') COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `recipes`
--

INSERT INTO `recipes` (`id`, `image`, `date`, `is_slider`, `category_id`, `created_at`, `updated_at`) VALUES
(4, 'storage/image690-1640704853.jpg', '12/07/2021', 'on', 26, '2021-12-28 13:20:53', '2021-12-28 13:20:53'),
(5, 'storage/image127-1640784059.jpg', '11/30/2021', 'on', 25, '2021-12-28 13:28:44', '2021-12-29 11:20:59');

-- --------------------------------------------------------

--
-- Table structure for table `recipe_translations`
--

CREATE TABLE `recipe_translations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `ingredients` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `instructions` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image_alt` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `recipe_id` bigint(20) UNSIGNED NOT NULL,
  `locale` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `recipe_translations`
--

INSERT INTO `recipe_translations` (`id`, `title`, `description`, `ingredients`, `instructions`, `image_alt`, `recipe_id`, `locale`, `created_at`, `updated_at`) VALUES
(7, 'Accusantium omnis su', '<p>cc</p>', '<p>cc</p>', '<p>cc</p>', 'Nisi autem accusanti', 4, 'en', '2021-12-28 13:20:53', '2021-12-28 13:20:53'),
(8, 'Eiusmod ratione elig', '<p>cc</p>', '<p>ccc</p>', '<p>cc</p>', 'Reiciendis illo non', 4, 'ar', '2021-12-28 13:20:54', '2021-12-28 13:20:54'),
(9, 'Est quidem aut sint', '<p>xx</p>', '<p>xxx</p>', '<p>xx</p>', 'Rem quisquam quasi n', 5, 'en', '2021-12-28 13:28:44', '2021-12-28 13:28:44'),
(10, 'Sint lorem ut dolore', '<p>xx</p>', '<p>xx</p>', '<p>xx</p>', 'Voluptate ut quisqua', 5, 'ar', '2021-12-28 13:28:44', '2021-12-28 13:28:44');

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
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `image`, `created_at`, `updated_at`) VALUES
(3, 'storage/image346-1646725987.jpg', '2022-03-08 05:53:07', '2022-03-08 05:53:07'),
(10, 'storage/Service793-1648040486.jpg', '2022-03-23 11:01:26', '2022-03-23 11:01:26');

-- --------------------------------------------------------

--
-- Table structure for table `service_translations`
--

CREATE TABLE `service_translations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `summary` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `img_alt` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `service_id` bigint(20) UNSIGNED NOT NULL,
  `locale` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `service_translations`
--

INSERT INTO `service_translations` (`id`, `title`, `description`, `summary`, `img_alt`, `service_id`, `locale`, `created_at`, `updated_at`) VALUES
(5, 'Fugiat quidem maxim', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque at ligula id quam volutpat feugiat. Morbi ac odio ante. Curabitur sed augue semper ante fringilla gravida at at erat. Phasellus maximus turpis quis dui suscipit, in faucibus ligula fermentum. Aenean sed luctus sapien. Nunc vel imperdiet sem. Nullam eget arcu nec augue molestie tincidunt ut in nisi. In bibendum lorem a urna euismod pellentesque. Vivamus quis ante porta, condimentum turpis quis, tempor ipsum. Nullam lorem ex, molestie nec leo vel, sodales feugiat erat.</p>', '<ul><li>Fugiat quidem maximFugiat quidem maxim</li><li>Fugiat quidem maximFugiat quidem maxim</li><li>Fugiat quidem maximFugiat quidem maxim</li><li>Fugiat quidem maximFugiat quidem maxim</li><li>Fugiat quidem maximFugiat quidem maxim</li></ul>', 'Fugiat quidem maxim', 3, 'en', '2022-03-08 05:53:07', '2022-03-13 09:44:51'),
(6, 'لدينا قدرة فائقة في بناء المستقبل', '<p>لدينا قدرة فائقة في بناء المستقبل&nbsp;لدينا قدرة فائقة في بناء المستقبل&nbsp;لدينا قدرة فائقة في بناء المستقبل&nbsp;لدينا قدرة فائقة في بناء المستقبل&nbsp;لدينا قدرة فائقة في بناء المستقبل&nbsp;لدينا قدرة فائقة في بناء المستقبل&nbsp;لدينا قدرة فائقة في بناء المستقبل&nbsp;لدينا قدرة فائقة في بناء المستقبل&nbsp;لدينا قدرة فائقة في بناء المستقبل&nbsp;</p>', '<ul><li>لدينا قدرة فائقة في بناء المستقبل</li><li>لدينا قدرة فائقة في بناء المستقبل</li><li>لدينا قدرة فائقة في بناء المستقبل</li><li>لدينا قدرة فائقة في بناء المستقبل</li></ul>', 'لدينا قدرة فائقة في في بناء مستقبل مصر', 3, 'ar', '2022-03-08 05:53:07', '2022-03-13 09:44:51'),
(19, 'نموذج لوريم ايبسوم عربي', '<p>نموذج لوريم ايبسوم عربي نموذج لوريم ايبسوم عربي نموذج لوريم ايبسوم عربي نموذج لوريم ايبسوم عربي نموذج لوريم ايبسوم عربي نموذج لوريم ايبسوم عربي نموذج لوريم ايبسوم عربي نموذج لوريم ايبسوم عربي نموذج لوريم ايبسوم عربي نموذج لوريم ايبسوم عربي نموذج لوريم ايبسوم عربي نموذج لوريم ايبسوم عربي نموذج لوريم ايبسوم عربي نموذج لوريم ايبسوم عربي نموذج لوريم ايبسوم عربي نموذج لوريم ايبسوم عربي نموذج لوريم ايبسوم عربي نموذج لوريم ايبسوم عربي نموذج لوريم ايبسوم عربي نموذج لوريم ايبسوم عربي نموذج لوريم ايبسوم عربي نموذج لوريم ايبسوم عربي نموذج لوريم ايبسوم عربي نموذج لوريم ايبسوم عربي نموذج لوريم ايبسوم عربي نموذج لوريم ايبسوم عربي نموذج لوريم ايبسوم عربي نموذج لوريم ايبسوم عربي نموذج لوريم ايبسوم عربي نموذج لوريم ايبسوم عربي نموذج لوريم ايبسوم عربي نموذج لوريم ايبسوم عربي نموذج لوريم ايبسوم عربي نموذج لوريم ايبسوم عربي نموذج لوريم ايبسوم عربي نموذج لوريم ايبسوم عربي نموذج لوريم ايبسوم عربي نموذج لوريم ايبسوم عربي نموذج لوريم ايبسوم عربي نموذج لوريم ايبسوم عربي نموذج لوريم ايبسوم عربي نموذج لوريم ايبسوم عربي نموذج لوريم ايبسوم عربي نموذج لوريم ايبسوم عربي نموذج لوريم ايبسوم عربي نموذج لوريم ايبسوم عربي نموذج لوريم ايبسوم عربي نموذج لوريم ايبسوم عربي نموذج لوريم ايبسوم عربي نموذج لوريم ايبسوم عربي نموذج لوريم ايبسوم عربي نموذج لوريم ايبسوم عربي نموذج لوريم ايبسوم عربي نموذج لوريم ايبسوم عربي نموذج لوريم ايبسوم عربي نموذج لوريم ايبسوم عربي نموذج لوريم ايبسوم عربي نموذج لوريم ايبسوم عربي نموذج لوريم ايبسوم عربي نموذج لوريم ايبسوم عربي نموذج لوريم ايبسوم عربي نموذج لوريم ايبسوم عربي&nbsp;</p>', NULL, 'نموذج لوريم ايبسوم عربي', 10, 'ar', '2022-03-23 11:01:26', '2022-03-23 11:01:26'),
(20, 'Fugiat quidem maxim', '<p>Fugiat quidem maximFugiat quidem maximFugiat quidem maximFugiat quidem maximFugiat quidem maximFugiat quidem maximFugiat quidem maximFugiat quidem maximFugiat quidem maximFugiat quidem maximFugiat quidem maximFugiat quidem maximFugiat quidem maximFugiat quidem maximFugiat quidem maximFugiat quidem maximFugiat quidem maximFugiat quidem maximFugiat quidem maximFugiat quidem maximFugiat quidem maximFugiat quidem maximFugiat quidem maximFugiat quidem maximFugiat quidem maximFugiat quidem maximFugiat quidem maximFugiat quidem maximFugiat quidem maximFugiat quidem maximFugiat quidem maximFugiat quidem maximFugiat quidem maximFugiat quidem maximFugiat quidem maximFugiat quidem maximFugiat quidem maximFugiat quidem maximFugiat quidem maximFugiat quidem maximFugiat quidem maximFugiat quidem maximFugiat quidem maximFugiat quidem maximFugiat quidem maximFugiat quidem maximFugiat quidem maximFugiat quidem maximFugiat quidem maximFugiat quidem maximFugiat quidem maximFugiat quidem maximFugiat quidem maximFugiat quidem maximFugiat quidem maximFugiat quidem maximFugiat quidem maximFugiat quidem maximFugiat quidem maximFugiat quidem maximFugiat quidem maximFugiat quidem maximFugiat quidem maxim</p>', NULL, 'Fugiat quidem maximFugiat quidem maxim', 10, 'en', '2022-03-23 11:01:26', '2022-03-23 11:01:26');

-- --------------------------------------------------------

--
-- Table structure for table `serv_images`
--

CREATE TABLE `serv_images` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `images` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `service_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `logo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `footer_logo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `facebook` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `twitter` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `instagram` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `linkedin` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `brochure` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `logo`, `footer_logo`, `facebook`, `twitter`, `instagram`, `linkedin`, `email`, `phone`, `brochure`, `created_at`, `updated_at`) VALUES
(1, 'storage/image49-1648380654.png', 'storage/files/image981-1648380693.png', 'https://www.facebook.com/', 'https://www.facebook.com/', 'https://www.facebook.com/', 'https://www.linkedin.com/', 'info@marasi.com', '0123456789', 'storage/files/file781-1645455137.pdf', NULL, '2022-03-27 09:31:33');

-- --------------------------------------------------------

--
-- Table structure for table `setting_translations`
--

CREATE TABLE `setting_translations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `website_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `copyrights` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_keywords` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `footer_description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `setting_id` bigint(20) UNSIGNED NOT NULL,
  `locale` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `setting_translations`
--

INSERT INTO `setting_translations` (`id`, `website_title`, `copyrights`, `meta_title`, `meta_description`, `meta_keywords`, `address`, `footer_description`, `setting_id`, `locale`, `created_at`, `updated_at`) VALUES
(1, 'marasi alarbia', 'Copyright © Marwan 2022. All Rights Reserved.', 'marasi alarbia', 'marasi alarbia', 'marasi alarbia', 'marasi alarbia', 'marasi alarbia', 1, 'en', NULL, '2022-03-27 09:30:12'),
(2, 'مراسي العربية', 'جميع الحقوق محفوظة مراسي العربية بواسطة مروان تك © 2022', 'مراسي العربية', 'مراسي العربية', 'مراسي العربية', 'مراسي العربية', 'مراسي العربية', 1, 'ar', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `sliders`
--

CREATE TABLE `sliders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sliders`
--

INSERT INTO `sliders` (`id`, `image`, `created_at`, `updated_at`) VALUES
(1, 'storage/image22-1644754910.jpg', '2022-02-13 10:21:50', '2022-02-13 10:21:50'),
(2, 'storage/image535-1645608403.jpg', '2022-02-15 09:29:05', '2022-02-23 07:26:43'),
(3, 'storage/image945-1648040312.jpg', '2022-03-23 10:58:32', '2022-03-23 10:58:32');

-- --------------------------------------------------------

--
-- Table structure for table `slider_translations`
--

CREATE TABLE `slider_translations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `img_alt` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slider_id` bigint(20) UNSIGNED NOT NULL,
  `locale` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `slider_translations`
--

INSERT INTO `slider_translations` (`id`, `img_alt`, `title`, `description`, `slider_id`, `locale`, `created_at`, `updated_at`) VALUES
(1, 'We have the ability to build all the buildings that the investor needs for his project.', 'Marassi Al Arabia Contracting Company', 'We have the ability to build all the buildings that the investor needs for his project.', 1, 'en', '2022-02-13 10:21:50', '2022-03-13 06:09:04'),
(2, 'لدينا قدره على بناء كل ما يحتاج اليه المستثمر من مباني لمشروعه.', 'شركة مراسي العربية للمقاولات', 'لدينا قدره على بناء كل ما يحتاج اليه المستثمر من مباني لمشروعه.', 1, 'ar', '2022-02-13 10:21:50', '2022-03-09 11:32:10'),
(3, 'We have the ability to develop and raise the efficiency of projects and progress towards further expansion', 'The best quotes companies', 'We have the ability to develop and raise the efficiency of projects and progress towards further expansion', 2, 'en', '2022-02-15 09:29:05', '2022-03-13 06:10:26'),
(4, 'لدينا القدره على تطوير ورفع كفاءة المشاريع والتقدم نحو المزيد من التوسع', 'أفضل شركات المقولات', 'لدينا القدره على تطوير ورفع كفاءة المشاريع والتقدم نحو المزيد من التوسع', 2, 'ar', '2022-02-15 09:29:05', '2022-03-09 11:34:19'),
(5, 'نموذج لوريم ايبسوم عربي', 'نموذج لوريم ايبسوم عربي', 'نموذج لوريم ايبسوم عربي', 3, 'ar', '2022-03-23 10:58:32', '2022-03-23 10:58:32'),
(6, 'Fugiat quidem maxim', 'Fugiat quidem maxim', 'Fugiat quidem maxim', 3, 'en', '2022-03-23 10:58:32', '2022-03-23 10:58:32');

-- --------------------------------------------------------

--
-- Table structure for table `teams`
--

CREATE TABLE `teams` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `facebook_link` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `twitter_link` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `instagram_link` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `linkedin_link` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `teams`
--

INSERT INTO `teams` (`id`, `image`, `facebook_link`, `twitter_link`, `instagram_link`, `linkedin_link`, `created_at`, `updated_at`) VALUES
(1, 'storage/image278-1644764645.png', 'Odio voluptate nihil', 'Vel laboriosam vita', NULL, 'Anim exercitationem', '2022-02-13 13:04:05', '2022-02-13 13:04:05'),
(2, 'storage/image661-1644764822.png', 'Odio voluptate nihil', 'Vel laboriosam vita', NULL, 'Anim exercitationem', '2022-02-13 13:07:02', '2022-02-13 13:07:02'),
(3, 'storage/image691-1648040682.png', NULL, NULL, NULL, NULL, '2022-03-23 11:04:15', '2022-03-23 11:04:42'),
(4, 'storage/image30-1648040778.png', NULL, NULL, NULL, NULL, '2022-03-23 11:06:18', '2022-03-23 11:06:18');

-- --------------------------------------------------------

--
-- Table structure for table `team_translations`
--

CREATE TABLE `team_translations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `img_alt` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `team_id` bigint(20) UNSIGNED NOT NULL,
  `locale` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `team_translations`
--

INSERT INTO `team_translations` (`id`, `name`, `description`, `img_alt`, `team_id`, `locale`, `created_at`, `updated_at`) VALUES
(1, 'Stewart Gibbs', 'Quo incidunt quia i', 'testimonial', 1, 'en', '2022-02-13 13:04:05', '2022-02-13 13:04:05'),
(2, 'محمد أحمد', 'لوريم ايبسوم هو نموذج افتراضي يوضع في التصاميم لتعرض على العميل ليتصور طريقه وضع النصوص بالتصاميم سواء كانت تصاميم مطبوع  ...', 'slider image', 1, 'ar', '2022-02-13 13:04:05', '2022-02-13 13:04:05'),
(3, 'Stewart Gibbs', 'Quo incidunt quia i', 'testimonial', 2, 'en', '2022-02-13 13:07:02', '2022-02-13 13:07:02'),
(4, 'محمد أحمد', 'لوريم ايبسوم هو نموذج افتراضي يوضع في التصاميم لتعرض على العميل ليتصور طريقه وضع النصوص بالتصاميم سواء كانت تصاميم مطبوع  ...', 'slider image', 2, 'ar', '2022-02-13 13:07:02', '2022-02-13 13:07:02'),
(5, 'نموذج لوريم ايبسوم عربي', 'نموذج لوريم ايبسوم عربي', 'نموذج لوريم ايبسوم عربي', 3, 'ar', '2022-03-23 11:04:15', '2022-03-23 11:04:15'),
(6, 'repeating testrepeating testrepeating test', 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Doloribus eligendi odio, velit error in perferendis numquam ex quisquam eveniet? Optio odio ipsum, delectus soluta nobis voluptatibus placeat velit aliquid ab.', 'Fugiat quidem maxim', 3, 'en', '2022-03-23 11:04:15', '2022-03-23 11:04:15'),
(7, 'نموذج لوريم ايبسوم عربي', 'وعند موافقه العميل المبدئيه على التصميم يتم ازالة هذا النص من التصميم ويتم وضع النصوص النهائية المطلوبة للتصميم ويقول البعض ان وضع النصوص التجريبية بالتصميم قد تشغل المشاهد عن وضع الكثير من الملاحظات او الانتقادات للتصميم الاساسي.', 'نموذج لوريم ايبسوم عربي', 4, 'ar', '2022-03-23 11:06:18', '2022-03-23 11:06:18'),
(8, 'repeating testrepeating testrepeating test', 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Doloribus eligendi odio, velit error in perferendis numquam ex quisquam eveniet? Optio odio ipsum, delectus soluta nobis voluptatibus placeat velit aliquid ab.', 'repeating test', 4, 'en', '2022-03-23 11:06:18', '2022-03-23 11:06:18');

-- --------------------------------------------------------

--
-- Table structure for table `testimonials`
--

CREATE TABLE `testimonials` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `testimonials`
--

INSERT INTO `testimonials` (`id`, `image`, `created_at`, `updated_at`) VALUES
(1, 'storage/image583-1644756226.jpg', '2022-02-13 10:43:46', '2022-02-13 10:43:46'),
(2, 'storage/image832-1646837821.jpg', '2022-03-09 11:55:37', '2022-03-09 11:57:01');

-- --------------------------------------------------------

--
-- Table structure for table `testimonial_translations`
--

CREATE TABLE `testimonial_translations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `img_alt` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `testimonial_id` bigint(20) UNSIGNED NOT NULL,
  `locale` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `testimonial_translations`
--

INSERT INTO `testimonial_translations` (`id`, `name`, `description`, `img_alt`, `testimonial_id`, `locale`, `created_at`, `updated_at`) VALUES
(1, 'mohamed ahmed', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloribus inventore nobis illum. Harum a voluptates in eius tenetur quidem Lorem ipsum dolor sit amet consectetur adipisicing elit.', 'testimonial', 1, 'en', '2022-02-13 10:43:46', '2022-02-13 10:43:46'),
(2, 'محمد أحمد', 'لديهم قدرة في احترام والالتزام في المواعيد', 'لديهم قدرة في احترام والالتزام في المواعيد', 1, 'ar', '2022-02-13 10:43:46', '2022-03-10 06:37:49'),
(3, 'samir', 'the best contracting and construction companies', 'the best contracting and construction companies', 2, 'en', '2022-03-09 11:55:37', '2022-03-09 11:55:37'),
(4, 'سمير', 'أفضل شركات مقاولات وانشاءات', 'أفضل شركات مقاولات وانشاءات', 2, 'ar', '2022-03-09 11:55:37', '2022-03-09 11:55:37');

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
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin@admin.com', NULL, '$2y$10$UNIgDXuRwQBlqJ9ElCXxn.aJCqqTRCuCEabnWbGmYxVvedW/xxRyi', 'nRa8nofbGaBBg6Xa54XUuUeHi2RN7G9qtSSHKHXnjuACkC3EkK9gV6u3HpsQ', '2021-12-22 13:24:45', '2021-12-22 13:24:45');

-- --------------------------------------------------------

--
-- Table structure for table `views`
--

CREATE TABLE `views` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_ip` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `recipe_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category_translations`
--
ALTER TABLE `category_translations`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `category_translations_category_id_locale_unique` (`category_id`,`locale`),
  ADD KEY `category_translations_locale_index` (`locale`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `comments_recipe_id_foreign` (`recipe_id`),
  ADD KEY `comments_user_id_foreign` (`user_id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `faqs`
--
ALTER TABLE `faqs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `faq_translations`
--
ALTER TABLE `faq_translations`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `faq_translations_faq_id_locale_unique` (`faq_id`,`locale`),
  ADD KEY `faq_translations_locale_index` (`locale`);

--
-- Indexes for table `favorits`
--
ALTER TABLE `favorits`
  ADD PRIMARY KEY (`id`),
  ADD KEY `favorits_recipe_id_foreign` (`recipe_id`),
  ADD KEY `favorits_user_id_foreign` (`user_id`);

--
-- Indexes for table `features`
--
ALTER TABLE `features`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `feature_translations`
--
ALTER TABLE `feature_translations`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `feature_translations_feature_id_locale_unique` (`feature_id`,`locale`),
  ADD KEY `feature_translations_locale_index` (`locale`);

--
-- Indexes for table `galleries`
--
ALTER TABLE `galleries`
  ADD PRIMARY KEY (`id`),
  ADD KEY `galleries_category_id_foreign` (`category_id`);

--
-- Indexes for table `gallery_translations`
--
ALTER TABLE `gallery_translations`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `gallery_translations_gallery_id_locale_unique` (`gallery_id`,`locale`),
  ADD KEY `gallery_translations_locale_index` (`locale`);

--
-- Indexes for table `kitchen_types`
--
ALTER TABLE `kitchen_types`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kitchen_type_translations`
--
ALTER TABLE `kitchen_type_translations`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `kitchen_type_translations_kitchen_type_id_locale_unique` (`kitchen_type_id`,`locale`),
  ADD KEY `kitchen_type_translations_locale_index` (`locale`);

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
-- Indexes for table `options`
--
ALTER TABLE `options`
  ADD PRIMARY KEY (`id`),
  ADD KEY `options_service_id_foreign` (`service_id`);

--
-- Indexes for table `option_translations`
--
ALTER TABLE `option_translations`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `option_translations_option_id_locale_unique` (`option_id`,`locale`),
  ADD KEY `option_translations_locale_index` (`locale`);

--
-- Indexes for table `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `page_translations`
--
ALTER TABLE `page_translations`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `page_translations_page_id_locale_unique` (`page_id`,`locale`),
  ADD KEY `page_translations_locale_index` (`locale`);

--
-- Indexes for table `partners`
--
ALTER TABLE `partners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `partner_translations`
--
ALTER TABLE `partner_translations`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `partner_translations_partner_id_locale_unique` (`partner_id`,`locale`),
  ADD KEY `partner_translations_locale_index` (`locale`);

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
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `recipes`
--
ALTER TABLE `recipes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `recipes_category_id_foreign` (`category_id`);

--
-- Indexes for table `recipe_translations`
--
ALTER TABLE `recipe_translations`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `recipe_translations_recipe_id_locale_unique` (`recipe_id`,`locale`),
  ADD KEY `recipe_translations_locale_index` (`locale`);

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
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `service_translations`
--
ALTER TABLE `service_translations`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `service_translations_service_id_locale_unique` (`service_id`,`locale`),
  ADD KEY `service_translations_locale_index` (`locale`);

--
-- Indexes for table `serv_images`
--
ALTER TABLE `serv_images`
  ADD PRIMARY KEY (`id`),
  ADD KEY `serv_images_service_id_foreign` (`service_id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `setting_translations`
--
ALTER TABLE `setting_translations`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `setting_translations_setting_id_locale_unique` (`setting_id`,`locale`),
  ADD KEY `setting_translations_locale_index` (`locale`);

--
-- Indexes for table `sliders`
--
ALTER TABLE `sliders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slider_translations`
--
ALTER TABLE `slider_translations`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `slider_translations_slider_id_locale_unique` (`slider_id`,`locale`),
  ADD KEY `slider_translations_locale_index` (`locale`);

--
-- Indexes for table `teams`
--
ALTER TABLE `teams`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `team_translations`
--
ALTER TABLE `team_translations`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `team_translations_team_id_locale_unique` (`team_id`,`locale`),
  ADD KEY `team_translations_locale_index` (`locale`);

--
-- Indexes for table `testimonials`
--
ALTER TABLE `testimonials`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `testimonial_translations`
--
ALTER TABLE `testimonial_translations`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `testimonial_translations_testimonial_id_locale_unique` (`testimonial_id`,`locale`),
  ADD KEY `testimonial_translations_locale_index` (`locale`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `views`
--
ALTER TABLE `views`
  ADD PRIMARY KEY (`id`),
  ADD KEY `views_recipe_id_foreign` (`recipe_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `category_translations`
--
ALTER TABLE `category_translations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `faqs`
--
ALTER TABLE `faqs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `faq_translations`
--
ALTER TABLE `faq_translations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `favorits`
--
ALTER TABLE `favorits`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `features`
--
ALTER TABLE `features`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `feature_translations`
--
ALTER TABLE `feature_translations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `galleries`
--
ALTER TABLE `galleries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `gallery_translations`
--
ALTER TABLE `gallery_translations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `kitchen_types`
--
ALTER TABLE `kitchen_types`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `kitchen_type_translations`
--
ALTER TABLE `kitchen_type_translations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `options`
--
ALTER TABLE `options`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `option_translations`
--
ALTER TABLE `option_translations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `pages`
--
ALTER TABLE `pages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `page_translations`
--
ALTER TABLE `page_translations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `partners`
--
ALTER TABLE `partners`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `partner_translations`
--
ALTER TABLE `partner_translations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `recipes`
--
ALTER TABLE `recipes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `recipe_translations`
--
ALTER TABLE `recipe_translations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `service_translations`
--
ALTER TABLE `service_translations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `serv_images`
--
ALTER TABLE `serv_images`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `setting_translations`
--
ALTER TABLE `setting_translations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `sliders`
--
ALTER TABLE `sliders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `slider_translations`
--
ALTER TABLE `slider_translations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `teams`
--
ALTER TABLE `teams`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `team_translations`
--
ALTER TABLE `team_translations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `testimonials`
--
ALTER TABLE `testimonials`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `testimonial_translations`
--
ALTER TABLE `testimonial_translations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `views`
--
ALTER TABLE `views`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `category_translations`
--
ALTER TABLE `category_translations`
  ADD CONSTRAINT `category_translations_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`);

--
-- Constraints for table `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `comments_recipe_id_foreign` FOREIGN KEY (`recipe_id`) REFERENCES `recipes` (`id`),
  ADD CONSTRAINT `comments_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `faq_translations`
--
ALTER TABLE `faq_translations`
  ADD CONSTRAINT `faq_translations_faq_id_foreign` FOREIGN KEY (`faq_id`) REFERENCES `faqs` (`id`);

--
-- Constraints for table `favorits`
--
ALTER TABLE `favorits`
  ADD CONSTRAINT `favorits_recipe_id_foreign` FOREIGN KEY (`recipe_id`) REFERENCES `recipes` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `favorits_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `feature_translations`
--
ALTER TABLE `feature_translations`
  ADD CONSTRAINT `feature_translations_feature_id_foreign` FOREIGN KEY (`feature_id`) REFERENCES `features` (`id`);

--
-- Constraints for table `galleries`
--
ALTER TABLE `galleries`
  ADD CONSTRAINT `galleries_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `gallery_translations`
--
ALTER TABLE `gallery_translations`
  ADD CONSTRAINT `gallery_translations_gallery_id_foreign` FOREIGN KEY (`gallery_id`) REFERENCES `galleries` (`id`);

--
-- Constraints for table `kitchen_type_translations`
--
ALTER TABLE `kitchen_type_translations`
  ADD CONSTRAINT `kitchen_type_translations_kitchen_type_id_foreign` FOREIGN KEY (`kitchen_type_id`) REFERENCES `kitchen_types` (`id`);

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
-- Constraints for table `options`
--
ALTER TABLE `options`
  ADD CONSTRAINT `options_service_id_foreign` FOREIGN KEY (`service_id`) REFERENCES `services` (`id`);

--
-- Constraints for table `option_translations`
--
ALTER TABLE `option_translations`
  ADD CONSTRAINT `option_translations_option_id_foreign` FOREIGN KEY (`option_id`) REFERENCES `options` (`id`);

--
-- Constraints for table `page_translations`
--
ALTER TABLE `page_translations`
  ADD CONSTRAINT `page_translations_page_id_foreign` FOREIGN KEY (`page_id`) REFERENCES `pages` (`id`);

--
-- Constraints for table `partner_translations`
--
ALTER TABLE `partner_translations`
  ADD CONSTRAINT `partner_translations_partner_id_foreign` FOREIGN KEY (`partner_id`) REFERENCES `partners` (`id`);

--
-- Constraints for table `recipe_translations`
--
ALTER TABLE `recipe_translations`
  ADD CONSTRAINT `recipe_translations_recipe_id_foreign` FOREIGN KEY (`recipe_id`) REFERENCES `recipes` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
