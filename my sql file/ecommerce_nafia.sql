-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 07, 2021 at 03:52 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.4.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ecommerce_nafia`
--

-- --------------------------------------------------------

--
-- Table structure for table `batches`
--

CREATE TABLE `batches` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `number` bigint(20) UNSIGNED NOT NULL,
  `date` datetime NOT NULL,
  `labour_cost` bigint(20) UNSIGNED NOT NULL,
  `transportation_cost` bigint(20) UNSIGNED NOT NULL,
  `other_cost_one` bigint(20) UNSIGNED DEFAULT NULL,
  `other_cost_two` bigint(20) UNSIGNED DEFAULT NULL,
  `owner` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `vendor` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `batches`
--

INSERT INTO `batches` (`id`, `name`, `number`, `date`, `labour_cost`, `transportation_cost`, `other_cost_one`, `other_cost_two`, `owner`, `vendor`, `created_at`, `updated_at`) VALUES
(1, 'Batch - 1', 1, '2021-04-20 13:29:00', 100, 200, NULL, NULL, 'Ali', 'Ahmed', '2021-04-19 22:29:36', '2021-04-19 22:29:36'),
(2, 'Batch - 2', 2, '2021-04-20 13:29:00', 200, 100, NULL, NULL, 'Hammad', 'Hameed', '2021-04-19 22:30:05', '2021-04-19 22:30:05');

-- --------------------------------------------------------

--
-- Table structure for table `batch_product`
--

CREATE TABLE `batch_product` (
  `batch_id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `batch_product`
--

INSERT INTO `batch_product` (`batch_id`, `product_id`, `created_at`, `updated_at`) VALUES
(1, 1, NULL, NULL),
(1, 3, NULL, NULL),
(1, 4, NULL, NULL),
(1, 5, NULL, NULL),
(2, 2, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `billings`
--

CREATE TABLE `billings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `country` int(11) NOT NULL,
  `province` int(11) NOT NULL,
  `city` int(11) NOT NULL,
  `postal_code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contact` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `total_amount` double(36,2) NOT NULL,
  `order_number` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `billings`
--

INSERT INTO `billings` (`id`, `user_id`, `name`, `email`, `address`, `country`, `province`, `city`, `postal_code`, `contact`, `total_amount`, `order_number`, `created_at`, `updated_at`) VALUES
(1, 3, 'super admin', 'superadmin@example.com', 'Gulshan Iqbal 13-C Karachi', 1, 1, 927, '75300', '+923353287084', 510.00, 'faAL7', '2021-04-27 04:04:36', '2021-04-27 04:04:36'),
(2, 3, 'super admin', 'superadmin@example.com', 'Model Town Lahore', 1, 5, 1208, '74400', '+923353287084', 602.00, 'MBPfD', '2021-04-27 04:32:14', '2021-04-27 04:32:14'),
(3, 3, 'super admin', 'superadmin@example.com', 'Gulshan Iqbal 13-C Karachi', 1, 1, 927, '75300', '+923353287084', 102.00, 'OtTF2', '2021-04-27 04:46:27', '2021-04-27 04:46:27'),
(4, 3, 'super admin', 'superadmin@example.com', 'Gulshan Iqbal 13-C Karachi', 1, 1, 927, '75300', '+923353287084', 102.00, 'HEZtb', '2021-04-27 06:06:22', '2021-04-27 06:06:22'),
(5, 3, 'super admin', 'superadmin@example.com', 'Gulshan Iqbal 13-C Karachi', 1, 1, 927, '75300', '+923353287084', 102.00, 'u91La', '2021-04-27 06:08:18', '2021-04-27 06:08:18'),
(6, 3, 'super admin', 'superadmin@example.com', 'Gulshan Iqbal 13-C Karachi', 1, 1, 927, '75300', '+923353287084', 102.00, 'Z8A62', '2021-04-27 06:22:22', '2021-04-27 06:22:22'),
(7, 3, 'super admin', 'superadmin@example.com', 'Gulshan Iqbal 13-C Karachi', 1, 1, 927, '75300', '+923353287084', 102.00, 'Pc8wZ', '2021-04-27 06:31:13', '2021-04-27 06:31:13'),
(8, 3, 'super admin', 'superadmin@example.com', 'Gulshan Iqbal 13-C Karachi', 1, 1, 927, '75300', '+923353287084', 102.00, '2Cd8x', '2021-04-27 06:31:55', '2021-04-27 06:31:55'),
(9, 3, 'super admin', 'superadmin@example.com', 'Gulshan Iqbal 13-C Karachi', 1, 1, 927, '75300', '+923353287084', 204.00, 'gVro7', '2021-04-27 06:45:53', '2021-04-27 06:45:53'),
(10, 3, 'super admin', 'superadmin@example.com', 'Gulshan Iqbal 13-C Karachi', 1, 1, 927, '75300', '+923353287084', 102.00, 'qgPG9', '2021-04-27 07:00:27', '2021-04-27 07:00:27'),
(11, 3, 'super admin', 'superadmin@example.com', 'Gulshan Iqbal 13-C Karachi', 1, 1, 927, '75300', '00923353287084', 102.00, 'yj00i', '2021-04-27 07:12:39', '2021-04-27 07:12:39'),
(12, 3, 'super admin', 'superadmin@example.com', 'Gulshan Iqbal 13-C Karachi', 1, 1, 927, '75300', '+923353287084', 102.00, 'HEMFL', '2021-04-28 03:07:19', '2021-04-28 03:07:19'),
(13, 3, 'super admin', 'superadmin@example.com', 'Gulshan Iqbal 13-C Karachi', 1, 1, 927, '75300', '03353287084', 102.00, 'YVLBz', '2021-04-28 03:12:48', '2021-04-28 03:12:48'),
(14, 3, 'super admin', 'superadmin@example.com', 'Gulshan Iqbal 13-C Karachi', 1, 1, 927, '75300', '+923353287084', 102.00, 'aUHna', '2021-04-28 04:08:00', '2021-04-28 04:08:00'),
(15, 3, 'super admin', 'superadmin@example.com', 'Gulshan Iqbal 13-C Karachi', 1, 1, 927, '75300', '+923353287084', 102.00, 'UywT9', '2021-04-28 04:11:28', '2021-04-28 04:11:28'),
(16, 3, 'super admin', 'superadmin@example.com', 'Gulshan Iqbal 13-C Karachi', 1, 1, 927, '75300', '+923353287084', 102.00, '7CFYg', '2021-04-28 04:22:58', '2021-04-28 04:22:58'),
(17, 3, 'super admin', 'superadmin@example.com', 'Gulshan Iqbal 13-C Karachi', 1, 1, 927, '75300', '+923353287084', 102.00, 'cYZY7', '2021-04-28 04:33:17', '2021-04-28 04:33:17'),
(18, 3, 'super admin', 'superadmin@example.com', 'Gulshan Iqbal 13-C Karachi', 1, 1, 927, '75300', '+923353287084', 102.00, 'h24bT', '2021-04-28 04:35:33', '2021-04-28 04:35:33'),
(19, 3, 'super admin', 'superadmin@example.com', 'Gulshan Iqbal 13-C Karachi', 1, 1, 927, '75300', '+923353287084', 102.00, 'bjdXw', '2021-04-28 04:47:03', '2021-04-28 04:47:03'),
(20, 3, 'super admin', 'superadmin@example.com', 'Gulshan Iqbal 13-C Karachi', 1, 1, 927, '75300', '+923353287084', 102.00, '0r7JK', '2021-04-28 04:55:22', '2021-04-28 04:55:22'),
(21, 3, 'super admin', 'superadmin@example.com', 'Gulshan Iqbal 13-C Karachi', 1, 1, 927, '75300', '03353287084', 102.00, 'DzDUd', '2021-04-28 06:52:42', '2021-04-28 06:52:42'),
(22, 3, 'super admin', 'superadmin@example.com', 'Gulshan Iqbal 13-C Karachi', 1, 1, 927, '75300', '+923322041233', 102.00, 'BKBkZ', '2021-04-29 03:27:19', '2021-04-29 03:27:19'),
(23, 3, 'super admin', 'superadmin@example.com', 'Gulshan Iqbal 13-C Karachi', 1, 1, 927, '75300', '+923322041233', 102.00, 'B4mtK', '2021-04-29 03:33:51', '2021-04-29 03:33:51');

-- --------------------------------------------------------

--
-- Table structure for table `block_floor_products`
--

CREATE TABLE `block_floor_products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `icon` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `banner_1` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `banner_2` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `featured_banner` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `colourCode` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_one` int(11) NOT NULL,
  `category_two` int(11) NOT NULL,
  `category_three` int(11) NOT NULL,
  `category_four` int(11) NOT NULL,
  `category_five` int(11) NOT NULL,
  `category_six` int(11) NOT NULL,
  `category_seven` int(11) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `block_floor_products`
--

INSERT INTO `block_floor_products` (`id`, `title`, `icon`, `banner_1`, `banner_2`, `featured_banner`, `colourCode`, `category_one`, `category_two`, `category_three`, `category_four`, `category_five`, `category_six`, `category_seven`, `status`, `created_at`, `updated_at`) VALUES
(1, 'FASHION', 'fas fa-tshirt', 'banner1-1.jpg', 'banner1-2.jpg', 'baner-floor1.jpg', '#ff3366', 2, 3, 4, 5, 6, 7, 8, 1, '2021-04-27 03:58:18', '2021-04-27 03:58:21');

-- --------------------------------------------------------

--
-- Table structure for table `carts`
--

CREATE TABLE `carts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `quantity` bigint(20) UNSIGNED NOT NULL,
  `size_id` int(11) NOT NULL,
  `colour_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `carts`
--

INSERT INTO `carts` (`id`, `quantity`, `size_id`, `colour_id`, `product_id`, `user_id`, `created_at`, `updated_at`) VALUES
(43, 1, 3, 1, 5, 3, '2021-05-06 07:02:54', '2021-05-06 07:02:54'),
(44, 1, 1, 3, 1, 3, '2021-05-06 07:17:07', '2021-05-06 07:17:07'),
(45, 1, 2, 3, 4, 3, '2021-05-06 07:17:29', '2021-05-06 07:17:29'),
(46, 2, 2, 4, 2, 3, '2021-05-06 07:18:22', '2021-05-06 07:19:20'),
(47, 1, 1, 1, 3, 3, '2021-05-06 07:19:04', '2021-05-06 07:19:04');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `parent_id` int(11) NOT NULL DEFAULT 0,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `icon` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `parent_id`, `title`, `icon`, `image`, `slug`, `created_at`, `updated_at`) VALUES
(1, 0, 'Electronics', 'fas fa-tv', 'bgmenu.jpg', 'electronics', '2021-04-27 03:42:20', '2021-04-27 03:42:20'),
(2, 1, 'SMARTPHONE', NULL, NULL, 'smartphone', '2021-04-27 03:42:44', '2021-04-27 03:42:44'),
(3, 1, 'TELEVISION', NULL, NULL, 'television', '2021-04-27 03:43:00', '2021-04-27 03:43:00'),
(4, 1, 'CAMERA', NULL, NULL, 'camera', '2021-04-27 03:43:11', '2021-04-27 03:43:11'),
(5, 2, 'Skirts', NULL, NULL, 'skirts', '2021-04-27 03:43:29', '2021-04-27 03:43:29'),
(6, 2, 'Jackets', NULL, NULL, 'jackets', '2021-04-27 03:43:43', '2021-04-27 03:43:43'),
(7, 2, 'Jumpusuits', NULL, NULL, 'jumpusuits', '2021-04-27 03:43:59', '2021-04-27 03:43:59'),
(8, 2, 'Scarvest', NULL, NULL, 'scarvest', '2021-04-27 03:44:09', '2021-04-27 03:44:09'),
(9, 2, 'T-Shirts', NULL, NULL, 't-shirts', '2021-04-27 03:44:26', '2021-04-27 03:44:26');

-- --------------------------------------------------------

--
-- Table structure for table `category_product`
--

CREATE TABLE `category_product` (
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `category_product`
--

INSERT INTO `category_product` (`category_id`, `product_id`, `created_at`, `updated_at`) VALUES
(2, 1, NULL, NULL),
(2, 4, NULL, NULL),
(2, 5, NULL, NULL),
(5, 2, NULL, NULL),
(5, 3, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `cities`
--

CREATE TABLE `cities` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `state_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cities`
--

INSERT INTO `cities` (`id`, `name`, `state_id`) VALUES
(873, 'Adilpur', 1),
(874, 'Badah', 1),
(875, 'Badin', 1),
(876, 'Bagarji', 1),
(877, 'Bakshshapur', 1),
(878, 'Bandhi', 1),
(879, 'Berani', 1),
(880, 'Bhan', 1),
(881, 'Bhiria City', 1),
(882, 'Bhiria Road', 1),
(883, 'Bhit Shah', 1),
(884, 'Bozdar', 1),
(885, 'Bulri', 1),
(886, 'Chak', 1),
(887, 'Chambar', 1),
(888, 'Chohar Jamali', 1),
(889, 'Chor', 1),
(890, 'Dadu', 1),
(891, 'Daharki', 1),
(892, 'Daro', 1),
(893, 'Darya Khan Mari', 1),
(894, 'Daulatpur', 1),
(895, 'Daur', 1),
(896, 'Dhoronaro', 1),
(897, 'Digri', 1),
(898, 'Diplo', 1),
(899, 'Dokri', 1),
(900, 'Faqirabad', 1),
(901, 'Gambat', 1),
(902, 'Garello', 1),
(903, 'Garhi Khairo', 1),
(904, 'Garhi Yasin', 1),
(905, 'Gharo', 1),
(906, 'Ghauspur', 1),
(907, 'Ghotki', 1),
(908, 'Golarchi', 1),
(909, 'Guddu', 1),
(910, 'Gulistan-E-Jauhar', 1),
(911, 'Hala', 1),
(912, 'Hingorja', 1),
(913, 'Hyderabad', 1),
(914, 'Islamkot', 1),
(915, 'Jacobabad', 1),
(916, 'Jam Nawaz Ali', 1),
(917, 'Jam Sahib', 1),
(918, 'Jati', 1),
(919, 'Jhol', 1),
(920, 'Jhudo', 1),
(921, 'Johi', 1),
(922, 'Kadhan', 1),
(923, 'Kambar', 1),
(924, 'Kandhra', 1),
(925, 'Kandiari', 1),
(926, 'Kandiaro', 1),
(927, 'Karachi', 1),
(928, 'Karampur', 1),
(929, 'Kario Ghanwar', 1),
(930, 'Karoondi', 1),
(931, 'Kashmor', 1),
(932, 'Kazi Ahmad', 1),
(933, 'Keti Bandar', 1),
(934, 'Khadro', 1),
(935, 'Khairpur', 1),
(936, 'Khairpur Nathan Shah', 1),
(937, 'Khandh Kot', 1),
(938, 'Khanpur', 1),
(939, 'Khipro', 1),
(940, 'Khoski', 1),
(941, 'Khuhra', 1),
(942, 'Khyber', 1),
(943, 'Kot Diji', 1),
(944, 'Kot Ghulam Mohammad', 1),
(945, 'Kotri', 1),
(946, 'Kumb', 1),
(947, 'Kunri', 1),
(948, 'Lakhi', 1),
(949, 'Larkana', 1),
(950, 'Madeji', 1),
(951, 'Matiari', 1),
(952, 'Matli', 1),
(953, 'Mehar', 1),
(954, 'Mehrabpur', 1),
(955, 'Miro Khan', 1),
(956, 'Mirpur Bathoro', 1),
(957, 'Mirpur Khas', 1),
(958, 'Mirpur Mathelo', 1),
(959, 'Mirpur Sakro', 1),
(960, 'Mirwah', 1),
(961, 'Mithi', 1),
(962, 'Moro', 1),
(963, 'Nabisar', 1),
(964, 'Nasarpur', 1),
(965, 'Nasirabad', 1),
(966, 'Naudero', 1),
(967, 'Naukot', 1),
(968, 'Naushahro Firoz', 1),
(969, 'Nawabshah', 1),
(970, 'Oderolal Station', 1),
(971, 'Pacca Chang', 1),
(972, 'Padidan', 1),
(973, 'Pano Aqil', 1),
(974, 'Perumal', 1),
(975, 'Phulji', 1),
(976, 'Pirjo Goth', 1),
(977, 'Piryaloi', 1),
(978, 'Pithoro', 1),
(979, 'Radhan', 1),
(980, 'Rajo Khanani', 1),
(981, 'Ranipur', 1),
(982, 'Ratodero', 1),
(983, 'Rohri', 1),
(984, 'Rustam', 1),
(985, 'Saeedabad', 1),
(986, 'Sakrand', 1),
(987, 'Samaro', 1),
(988, 'Sanghar', 1),
(989, 'Sann', 1),
(990, 'Sarhari', 1),
(991, 'Sehwan', 1),
(992, 'Setharja', 1),
(993, 'Shah Dipalli', 1),
(994, 'Shahdadkot', 1),
(995, 'Shahdadpur', 1),
(996, 'Shahpur Chakar', 1),
(997, 'Shahpur Jahania', 1),
(998, 'Shikarpur', 1),
(999, 'Sinjhoro', 1),
(1000, 'Sita Road', 1),
(1001, 'Sobhodero', 1),
(1002, 'Sujawal', 1),
(1003, 'Sukkur', 1),
(1004, 'Talhar', 1),
(1005, 'Tando Adam', 1),
(1006, 'Tando Allah Yar', 1),
(1007, 'Tando Bagho', 1),
(1008, 'Tando Ghulam Ali', 1),
(1009, 'Tando Jam', 1),
(1010, 'Tando Jan Mohammad', 1),
(1011, 'Tando Mitha Khan', 1),
(1012, 'Tando Muhammad Khan', 1),
(1013, 'Tangwani', 1),
(1014, 'Thano Bula Khan', 1),
(1015, 'Thari Mirwah', 1),
(1016, 'Tharushah', 1),
(1017, 'Thatta', 1),
(1018, 'Ther I', 1),
(1019, 'Ther I Mohabat', 1),
(1020, 'Thul', 1),
(1021, 'Ubauro', 1),
(1022, 'Umarkot', 1),
(1023, 'Warah', 1),
(1024, 'Amir chah', 2),
(1025, 'Awaran', 2),
(1026, 'Barkhan', 2),
(1027, 'Bela', 2),
(1028, 'Bhag', 2),
(1029, 'Chaman', 2),
(1030, 'Chitkan', 2),
(1031, 'Dalbandin', 2),
(1032, 'Dera Allah Yar', 2),
(1033, 'Dera Bugti', 2),
(1034, 'Dera Murad Jamali', 2),
(1035, 'Dhadar', 2),
(1036, 'Duki', 2),
(1037, 'Gaddani', 2),
(1038, 'Gwadar', 2),
(1039, 'Harnai', 2),
(1040, 'Hub', 2),
(1041, 'Jiwani', 2),
(1042, 'Kalat', 2),
(1043, 'Kharan', 2),
(1044, 'Khuzdar', 2),
(1045, 'Kohlu', 2),
(1046, 'Loralai', 2),
(1047, 'Mach', 2),
(1048, 'Mastung', 2),
(1049, 'Nushki', 2),
(1050, 'Ormara', 2),
(1051, 'Pasni', 2),
(1052, 'Pishin', 2),
(1053, 'Quetta', 2),
(1054, 'Sibi', 2),
(1055, 'Sohbatpur', 2),
(1056, 'Surab', 2),
(1057, 'Turbat', 2),
(1058, 'Usta Muhammad', 2),
(1059, 'Uthal', 2),
(1060, 'Wadh', 2),
(1061, 'Winder', 2),
(1062, 'Zehri', 2),
(1063, 'Zhob', 2),
(1064, 'Ziarat', 2),
(1065, 'Astore', 3),
(1066, 'Chilas', 3),
(1067, 'Dambudas', 3),
(1068, 'Danyor', 3),
(1069, 'Gahkuch', 3),
(1070, 'Gilgit', 3),
(1071, 'Skardu', 3),
(1072, 'Peshawar', 4),
(1073, 'Mardan', 4),
(1074, 'Mingora', 4),
(1075, 'Kohat', 4),
(1076, 'Abbottabad', 4),
(1077, 'Dera Ismail Khan', 4),
(1078, 'Nowshera', 4),
(1079, 'Charsada', 4),
(1080, 'Swabi', 4),
(1081, 'Abdul Hakim', 5),
(1082, 'Ahmadpur East', 5),
(1083, 'Ahmadpur Lumma', 5),
(1084, 'Ahmadpur Sial', 5),
(1085, 'Ahmedabad', 5),
(1086, 'Alipur', 5),
(1087, 'Alipur Chatha', 5),
(1088, 'Arifwala', 5),
(1089, 'Attock', 5),
(1090, 'Baddomalhi', 5),
(1091, 'Bagh', 5),
(1092, 'Bahawalnagar', 5),
(1093, 'Bahawalpur', 5),
(1094, 'Bai Pheru', 5),
(1095, 'Basirpur', 5),
(1096, 'Begowala', 5),
(1097, 'Bhakkar', 5),
(1098, 'Bhalwal', 5),
(1099, 'Bhawana', 5),
(1100, 'Bhera', 5),
(1101, 'Bhopalwala', 5),
(1102, 'Burewala', 5),
(1103, 'Chak Azam Sahu', 5),
(1104, 'Chak Jhumra', 5),
(1105, 'Chak Sarwar Shahid', 5),
(1106, 'Chakwal', 5),
(1107, 'Chawinda', 5),
(1108, 'Chichawatni', 5),
(1109, 'Chiniot', 5),
(1110, 'Chishtian Mandi', 5),
(1111, 'Choa Saidan Shah', 5),
(1112, 'Chuhar Kana', 5),
(1113, 'Chunian', 5),
(1114, 'Dajal', 5),
(1115, 'Darya Khan', 5),
(1116, 'Daska', 5),
(1117, 'Daud Khel', 5),
(1118, 'Daultala', 5),
(1119, 'Dera Din Panah', 5),
(1120, 'Dera Ghazi Khan', 5),
(1121, 'Dhanote', 5),
(1122, 'Dhonkal', 5),
(1123, 'Dijkot', 5),
(1124, 'Dina', 5),
(1125, 'Dinga', 5),
(1126, 'Dipalpur', 5),
(1127, 'Dullewala', 5),
(1128, 'Dunga Bunga', 5),
(1129, 'Dunyapur', 5),
(1130, 'Eminabad', 5),
(1131, 'Faisalabad', 5),
(1132, 'Faqirwali', 5),
(1133, 'Faruka', 5),
(1134, 'Fateh Jang', 5),
(1135, 'Fatehpur', 5),
(1136, 'Fazalpur', 5),
(1137, 'Ferozwala', 5),
(1138, 'Fort Abbas', 5),
(1139, 'Garh Maharaja', 5),
(1140, 'Ghakar', 5),
(1141, 'Ghurgushti', 5),
(1142, 'Gojra', 5),
(1143, 'Gujar Khan', 5),
(1144, 'Gujranwala', 5),
(1145, 'Gujrat', 5),
(1146, 'Hadali', 5),
(1147, 'Hafizabad', 5),
(1148, 'Harnoli', 5),
(1149, 'Harunabad', 5),
(1150, 'Hasan Abdal', 5),
(1151, 'Hasilpur', 5),
(1152, 'Haveli', 5),
(1153, 'Hazro', 5),
(1154, 'Hujra Shah Muqim', 5),
(1155, 'Isa Khel', 5),
(1156, 'Jahanian', 5),
(1157, 'Jalalpur Bhattian', 5),
(1158, 'Jalalpur Jattan', 5),
(1159, 'Jalalpur Pirwala', 5),
(1160, 'Jalla Jeem', 5),
(1161, 'Jamke Chima', 5),
(1162, 'Jampur', 5),
(1163, 'Jand', 5),
(1164, 'Jandanwala', 5),
(1165, 'Jandiala Sherkhan', 5),
(1166, 'Jaranwala', 5),
(1167, 'Jatoi', 5),
(1168, 'Jauharabad', 5),
(1169, 'Jhang', 5),
(1170, 'Jhawarian', 5),
(1171, 'Jhelum', 5),
(1172, 'Kabirwala', 5),
(1173, 'Kahna Nau', 5),
(1174, 'Kahror Pakka', 5),
(1175, 'Kahuta', 5),
(1176, 'Kalabagh', 5),
(1177, 'Kalaswala', 5),
(1178, 'Kaleke', 5),
(1179, 'Kalur Kot', 5),
(1180, 'Kamalia', 5),
(1181, 'Kamar Mashani', 5),
(1182, 'Kamir', 5),
(1183, 'Kamoke', 5),
(1184, 'Kamra', 5),
(1185, 'Kanganpur', 5),
(1186, 'Karampur', 5),
(1187, 'Karor Lal Esan', 5),
(1188, 'Kasur', 5),
(1189, 'Khairpur Tamewali', 5),
(1190, 'Khanewal', 5),
(1191, 'Khangah Dogran', 5),
(1192, 'Khangarh', 5),
(1193, 'Khanpur', 5),
(1194, 'Kharian', 5),
(1195, 'Khewra', 5),
(1196, 'Khundian', 5),
(1197, 'Khurianwala', 5),
(1198, 'Khushab', 5),
(1199, 'Kot Abdul Malik', 5),
(1200, 'Kot Addu', 5),
(1201, 'Kot Mithan', 5),
(1202, 'Kot Moman', 5),
(1203, 'Kot Radha Kishan', 5),
(1204, 'Kot Samaba', 5),
(1205, 'Kotli Loharan', 5),
(1206, 'Kundian', 5),
(1207, 'Kunjah', 5),
(1208, 'Lahore', 5),
(1209, 'Lalamusa', 5),
(1210, 'Lalian', 5),
(1211, 'Liaqatabad', 5),
(1212, 'Liaqatpur', 5),
(1213, 'Lieah', 5),
(1214, 'Liliani', 5),
(1215, 'Lodhran', 5),
(1216, 'Ludhewala Waraich', 5),
(1217, 'Mailsi', 5),
(1218, 'Makhdumpur', 5),
(1219, 'Makhdumpur Rashid', 5),
(1220, 'Malakwal', 5),
(1221, 'Mamu Kanjan', 5),
(1222, 'Mananwala Jodh Singh', 5),
(1223, 'Mandi Bahauddin', 5),
(1224, 'Mandi Sadiq Ganj', 5),
(1225, 'Mangat', 5),
(1226, 'Mangla', 5),
(1227, 'Mankera', 5),
(1228, 'Mian Channun', 5),
(1229, 'Miani', 5),
(1230, 'Mianwali', 5),
(1231, 'Minchinabad', 5),
(1232, 'Mitha Tiwana', 5),
(1233, 'Multan', 5),
(1234, 'Muridke', 5),
(1235, 'Murree', 5),
(1236, 'Mustafabad', 5),
(1237, 'Muzaffargarh', 5),
(1238, 'Nankana Sahib', 5),
(1239, 'Narang', 5),
(1240, 'Narowal', 5),
(1241, 'Noorpur Thal', 5),
(1242, 'Nowshera', 5),
(1243, 'Nowshera Virkan', 5),
(1244, 'Okara', 5),
(1245, 'Pakpattan', 5),
(1246, 'Pasrur', 5),
(1247, 'Pattoki', 5),
(1248, 'Phalia', 5),
(1249, 'Phularwan', 5),
(1250, 'Pind Dadan Khan', 5),
(1251, 'Pindi Bhattian', 5),
(1252, 'Pindi Gheb', 5),
(1253, 'Pirmahal', 5),
(1254, 'Qadirabad', 5),
(1255, 'Qadirpur Ran', 5),
(1256, 'Qila Disar Singh', 5),
(1257, 'Qila Sobha Singh', 5),
(1258, 'Quaidabad', 5),
(1259, 'Rabwah', 5),
(1260, 'Rahim Yar Khan', 5),
(1261, 'Raiwind', 5),
(1262, 'Raja Jang', 5),
(1263, 'Rajanpur', 5),
(1264, 'Rasulnagar', 5),
(1265, 'Rawalpindi', 5),
(1266, 'Renala Khurd', 5),
(1267, 'Rojhan', 5),
(1268, 'Saddar Gogera', 5),
(1269, 'Sadiqabad', 5),
(1270, 'Safdarabad', 5),
(1271, 'Sahiwal', 5),
(1272, 'Samasatta', 5),
(1273, 'Sambrial', 5),
(1274, 'Sammundri', 5),
(1275, 'Sangala Hill', 5),
(1276, 'Sanjwal', 5),
(1277, 'Sarai Alamgir', 5),
(1278, 'Sarai Sidhu', 5),
(1279, 'Sargodha', 5),
(1280, 'Shadiwal', 5),
(1281, 'Shahkot', 5),
(1282, 'Shahpur City', 5),
(1283, 'Shahpur Saddar', 5),
(1284, 'Shakargarh', 5),
(1285, 'Sharqpur', 5),
(1286, 'Shehr Sultan', 5),
(1287, 'Shekhupura', 5),
(1288, 'Shujaabad', 5),
(1289, 'Sialkot', 5),
(1290, 'Sillanwali', 5),
(1291, 'Sodhra', 5),
(1292, 'Sohawa', 5),
(1293, 'Sukheke', 5),
(1294, 'Talagang', 5),
(1295, 'Tandlianwala', 5),
(1296, 'Taunsa', 5),
(1297, 'Taxila', 5),
(1298, 'Tibba Sultanpur', 5),
(1299, 'Toba Tek Singh', 5),
(1300, 'Tulamba', 5),
(1301, 'Uch', 5),
(1302, 'Vihari', 5),
(1303, 'Wah', 5),
(1304, 'Warburton', 5),
(1305, 'Wazirabad', 5),
(1306, 'Yazman', 5),
(1307, 'Zafarwal', 5),
(1308, 'Zahir Pir', 5);

-- --------------------------------------------------------

--
-- Table structure for table `colours`
--

CREATE TABLE `colours` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `colourCode` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `colours`
--

INSERT INTO `colours` (`id`, `colourCode`, `created_at`, `updated_at`) VALUES
(1, '#000000', '2021-04-19 22:30:45', '2021-04-19 22:30:45'),
(2, '#bd4747', '2021-04-19 22:30:52', '2021-04-19 22:30:52'),
(3, '#dd2727', '2021-04-19 22:30:59', '2021-04-19 22:30:59'),
(4, '#d6436f', '2021-04-19 22:31:07', '2021-04-19 22:31:07'),
(5, '#2adfa3', '2021-04-19 22:31:17', '2021-04-19 22:31:17');

-- --------------------------------------------------------

--
-- Table structure for table `colour_image_product_sizes`
--

CREATE TABLE `colour_image_product_sizes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `colour_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `size_id` int(11) NOT NULL,
  `image` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `colour_image_product_sizes`
--

INSERT INTO `colour_image_product_sizes` (`id`, `colour_id`, `product_id`, `size_id`, `image`, `created_at`, `updated_at`) VALUES
(1, 3, 1, 1, '1619513456floor2-1.jpg', '2021-04-27 03:50:56', '2021-04-27 03:50:56'),
(2, 3, 1, 1, '1619513456floor2-2.jpg', '2021-04-27 03:50:56', '2021-04-27 03:50:56'),
(3, 3, 1, 1, '1619513456floor2-3.jpg', '2021-04-27 03:50:56', '2021-04-27 03:50:56'),
(4, 3, 1, 1, '1619513456floor2-4.jpg', '2021-04-27 03:50:56', '2021-04-27 03:50:56'),
(5, 4, 2, 2, '1619513520floor4-1.jpg', '2021-04-27 03:52:00', '2021-04-27 03:52:00'),
(6, 4, 2, 2, '1619513520floor4-2.jpg', '2021-04-27 03:52:00', '2021-04-27 03:52:00'),
(7, 4, 2, 2, '1619513520floor4-3.jpg', '2021-04-27 03:52:00', '2021-04-27 03:52:00'),
(8, 4, 2, 2, '1619513520floor4-4.jpg', '2021-04-27 03:52:00', '2021-04-27 03:52:00'),
(9, 1, 3, 1, '1619697895floor5-1.jpg', '2021-04-29 07:04:55', '2021-04-29 07:04:55'),
(10, 1, 3, 1, '1619697895floor5-2.jpg', '2021-04-29 07:04:55', '2021-04-29 07:04:55'),
(11, 2, 3, 2, '1619697895floor5-3.jpg', '2021-04-29 07:04:55', '2021-04-29 07:04:55'),
(12, 2, 3, 2, '1619697895floor5-4.jpg', '2021-04-29 07:04:55', '2021-04-29 07:04:55'),
(13, 3, 3, 3, '1619697895floor6-1.jpg', '2021-04-29 07:04:55', '2021-04-29 07:04:55'),
(14, 3, 3, 3, '1619697895floor6-2.jpg', '2021-04-29 07:04:55', '2021-04-29 07:04:55'),
(15, 4, 3, 4, '1619697895floor6-3.jpg', '2021-04-29 07:04:55', '2021-04-29 07:04:55'),
(16, 4, 3, 4, '1619697895floor6-4.jpg', '2021-04-29 07:04:55', '2021-04-29 07:04:55'),
(17, 3, 4, 2, '1620129062floor6-1.jpg', '2021-05-04 06:51:02', '2021-05-04 06:51:02'),
(18, 3, 4, 2, '1620129062floor6-2.jpg', '2021-05-04 06:51:02', '2021-05-04 06:51:02'),
(19, 3, 4, 2, '1620129062floor6-3.jpg', '2021-05-04 06:51:02', '2021-05-04 06:51:02'),
(20, 3, 4, 2, '1620129062floor6-4.jpg', '2021-05-04 06:51:02', '2021-05-04 06:51:02'),
(21, 2, 1, 1, '1620141453floor4-3.jpg', '2021-05-04 10:17:33', '2021-05-04 10:17:33'),
(22, 2, 1, 1, '1620141453floor4-4.jpg', '2021-05-04 10:17:33', '2021-05-04 10:17:33'),
(23, 1, 5, 3, '1620209303floor3-1.jpg', '2021-05-05 05:08:23', '2021-05-05 05:08:23'),
(24, 2, 5, 3, '1620209303floor5-3.jpg', '2021-05-05 05:08:23', '2021-05-05 05:08:23'),
(25, 3, 5, 3, '1620209303floor4-2.jpg', '2021-05-05 05:08:23', '2021-05-05 05:08:23');

-- --------------------------------------------------------

--
-- Table structure for table `countries`
--

CREATE TABLE `countries` (
  `id` int(10) UNSIGNED NOT NULL,
  `code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phonecode` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `countries`
--

INSERT INTO `countries` (`id`, `code`, `name`, `phonecode`) VALUES
(1, 'PK', 'Pakistan', 92);

-- --------------------------------------------------------

--
-- Table structure for table `couriers`
--

CREATE TABLE `couriers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `courier_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `person_one` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone_num_one` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `person_two` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone_num_two` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `person_three` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone_num_three` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `deals`
--

CREATE TABLE `deals` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `deal` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_id` int(11) NOT NULL,
  `size_id` int(11) NOT NULL,
  `discount` bigint(20) NOT NULL,
  `start_date` datetime NOT NULL,
  `end_date` datetime NOT NULL,
  `status` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `deals`
--

INSERT INTO `deals` (`id`, `deal`, `product_id`, `size_id`, `discount`, `start_date`, `end_date`, `status`, `created_at`, `updated_at`) VALUES
(5, 'pack_of_two', 1, 1, 10, '2021-05-06 16:59:00', '2021-05-07 16:59:00', 0, '2021-05-06 06:59:55', '2021-05-07 05:37:37');

-- --------------------------------------------------------

--
-- Table structure for table `delivery_charges`
--

CREATE TABLE `delivery_charges` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `city_id` int(11) NOT NULL,
  `delivery_charge` double(36,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `delivery_charges`
--

INSERT INTO `delivery_charges` (`id`, `city_id`, `delivery_charge`, `created_at`, `updated_at`) VALUES
(2, 927, 200.00, '2021-05-07 05:36:54', '2021-05-07 05:36:54');

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
-- Table structure for table `front_ends`
--

CREATE TABLE `front_ends` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `general_discounts`
--

CREATE TABLE `general_discounts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `general_discount` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_id` int(11) DEFAULT NULL,
  `category_id` int(11) DEFAULT NULL,
  `reseller_id` int(11) DEFAULT NULL,
  `customer_id` int(11) DEFAULT NULL,
  `discount` bigint(20) NOT NULL,
  `start_date` datetime NOT NULL,
  `end_date` datetime NOT NULL,
  `status` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `general_discounts`
--

INSERT INTO `general_discounts` (`id`, `general_discount`, `product_id`, `category_id`, `reseller_id`, `customer_id`, `discount`, `start_date`, `end_date`, `status`, `created_at`, `updated_at`) VALUES
(6, 'Category', NULL, 2, NULL, NULL, 12, '2021-05-03 01:50:00', '2021-05-04 01:50:00', 0, '2021-05-02 15:50:37', '2021-05-07 05:38:03'),
(8, 'Customer', NULL, NULL, NULL, 7, 7, '2021-05-03 02:18:00', '2021-05-04 02:18:00', 1, '2021-05-02 16:18:48', '2021-05-02 16:18:48'),
(10, 'Reseller', NULL, NULL, 2, NULL, 15, '2021-05-03 15:31:00', '2021-05-04 15:31:00', 1, '2021-05-03 05:31:41', '2021-05-03 05:31:41'),
(12, 'Product', 4, NULL, NULL, NULL, 15, '2021-05-06 17:01:00', '2021-05-07 17:01:00', 1, '2021-05-06 07:01:46', '2021-05-07 06:57:52');

-- --------------------------------------------------------

--
-- Table structure for table `home_settings`
--

CREATE TABLE `home_settings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `page_name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `key` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `home_settings`
--

INSERT INTO `home_settings` (`id`, `page_name`, `key`, `value`, `status`, `created_at`, `updated_at`) VALUES
(1, 'all-pages', 'logo', 'logo.png', 1, '2021-04-27 03:53:28', '2021-05-02 06:57:06'),
(2, 'all-pages', 'address', 'Example Street 68, Mahattan,New York, USA', 1, '2021-04-27 03:54:10', '2021-04-27 03:54:13'),
(3, 'all-pages', 'phone', '12345678912', 1, '2021-04-27 03:54:10', '2021-04-27 03:54:15'),
(4, 'all-pages', 'email', 'Support@ovicsoft.com', 1, '2021-04-27 03:54:10', '2021-04-27 03:54:18'),
(5, 'all-pages', 'slider', 'slide1.jpg~Slider - 1~Slider -1 Sub Title', 1, '2021-04-27 03:54:39', '2021-04-27 03:54:42'),
(6, 'all-pages', 'slider', 'slide3.jpg~Slider - 2~Slider -2 Sub Title', 1, '2021-04-27 03:54:59', '2021-04-27 03:55:02'),
(7, 'home-page', 'banner-1', 'banner-slide1.jpg', 1, '2021-04-27 03:55:17', '2021-04-27 03:55:20'),
(8, 'home-page', 'banner-2', 'banner-slide2.jpg', 1, '2021-04-27 03:55:17', '2021-04-27 03:55:22'),
(9, 'home-page', 'service', 'FREE SHIPPING~On order over $200~fa fa-plane', 1, '2021-04-27 03:55:50', '2021-04-27 03:56:47'),
(10, 'home-page', 'service', '30-DAY RETURN~Moneyback guarantee~fa fa-clock', 1, '2021-04-27 03:56:03', '2021-04-27 03:56:44'),
(11, 'home-page', 'service', '24/7 SUPPORT~Online consultations~fas fa-phone-alt', 1, '2021-04-27 03:56:19', '2021-04-27 03:56:41'),
(12, 'home-page', 'service', 'SAFE SHOPPING~Safe Shopping Guarantee~fas fa-umbrella', 1, '2021-04-27 03:56:32', '2021-04-27 03:56:37');

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
(3, '2017_05_06_172817_create_cities_table', 1),
(4, '2017_05_06_173711_create_states_table', 1),
(5, '2017_05_06_173745_create_countries_table', 1),
(6, '2019_08_19_000000_create_failed_jobs_table', 1),
(7, '2021_02_24_093759_create_categories_table', 1),
(8, '2021_02_24_165722_create_colours_table', 1),
(9, '2021_02_25_174606_create_sizes_table', 1),
(10, '2021_02_26_093145_create_batches_table', 1),
(11, '2021_02_28_105713_create_front_ends_table', 1),
(12, '2021_03_02_064731_create_products_table', 1),
(13, '2021_03_02_094320_create_batches_products_table', 1),
(14, '2021_03_02_094340_create_categories_products_table', 1),
(15, '2021_03_09_114539_create_colour_image_product_sizes_table', 1),
(16, '2021_03_11_084835_create_sale_centers_table', 1),
(17, '2021_03_14_130041_create_riders_table', 1),
(18, '2021_03_18_142153_create_suppliers_table', 1),
(19, '2021_03_19_110016_create_home_settings_table', 1),
(20, '2021_03_24_164037_create_couriers_table', 1),
(21, '2021_04_06_092618_create_block_floor_products_table', 1),
(22, '2021_04_11_104148_create_permission_tables', 1),
(23, '2021_04_14_113300_create_reviews_table', 1),
(24, '2021_04_14_113930_create_review_replies_table', 1),
(25, '2021_04_20_085500_create_carts_table', 1),
(26, '2021_04_22_195942_create_orders_table', 1),
(27, '2021_04_23_075419_create_billings_table', 1),
(29, '2021_04_29_103029_create_deals_table', 2),
(31, '2021_05_02_125706_create_offers_table', 3),
(32, '2021_05_02_184217_create_general_discounts_table', 4),
(33, '2021_05_03_075314_create_resellers_table', 5),
(35, '2021_05_07_092806_create_delivery_charges_table', 6);

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
(7, 'App\\Models\\User', 1),
(8, 'App\\Models\\User', 2),
(9, 'App\\Models\\User', 3);

-- --------------------------------------------------------

--
-- Table structure for table `offers`
--

CREATE TABLE `offers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `offer` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_id` int(11) DEFAULT NULL,
  `size_id` int(11) DEFAULT NULL,
  `start_date` datetime NOT NULL,
  `end_date` datetime NOT NULL,
  `code` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `min_amount` double(36,2) DEFAULT NULL,
  `discount` bigint(20) DEFAULT NULL,
  `status` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `offers`
--

INSERT INTO `offers` (`id`, `offer`, `product_id`, `size_id`, `start_date`, `end_date`, `code`, `min_amount`, `discount`, `status`, `created_at`, `updated_at`) VALUES
(9, 'Free Delivery', 3, NULL, '2021-05-04 16:53:00', '2021-05-04 16:54:00', NULL, NULL, NULL, 0, '2021-05-04 06:54:16', '2021-05-07 08:36:07'),
(10, 'Buy One Get One Free', 2, 2, '2021-05-06 17:00:00', '2021-05-07 17:00:00', NULL, NULL, NULL, 0, '2021-05-06 07:00:45', '2021-05-07 06:55:42');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `order_number` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `quantity` bigint(20) UNSIGNED NOT NULL,
  `size_id` int(11) NOT NULL,
  `colour_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `payment_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `total_amount` double(36,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `order_number`, `quantity`, `size_id`, `colour_id`, `product_id`, `user_id`, `payment_type`, `status`, `total_amount`, `created_at`, `updated_at`) VALUES
(1, 'faAL7', 5, 1, 3, 1, 3, 'cash on delivery', 1, 510.00, '2021-04-27 04:04:36', '2021-04-27 04:04:36'),
(2, 'MBPfD', 1, 1, 3, 1, 3, 'cash on delivery', 1, 602.00, '2021-04-27 04:32:14', '2021-04-27 04:32:14'),
(3, 'MBPfD', 1, 2, 4, 2, 3, 'cash on delivery', 1, 602.00, '2021-04-27 04:32:14', '2021-04-27 04:32:14'),
(4, 'OtTF2', 1, 1, 3, 1, 3, 'cash on delivery', 1, 102.00, '2021-04-27 04:46:27', '2021-04-27 04:46:27'),
(5, 'HEZtb', 1, 1, 3, 1, 3, 'cash on delivery', 1, 102.00, '2021-04-27 06:06:22', '2021-04-27 06:06:22'),
(6, 'u91La', 1, 1, 3, 1, 3, 'cash on delivery', 1, 102.00, '2021-04-27 06:08:18', '2021-04-27 06:08:18'),
(7, 'Z8A62', 1, 1, 3, 1, 3, 'cash on delivery', 1, 102.00, '2021-04-27 06:22:22', '2021-04-27 06:22:22'),
(8, 'Pc8wZ', 1, 1, 3, 1, 3, 'cash on delivery', 1, 102.00, '2021-04-27 06:31:13', '2021-04-27 06:31:13'),
(9, '2Cd8x', 1, 1, 3, 1, 3, 'cash on delivery', 1, 102.00, '2021-04-27 06:31:55', '2021-04-27 06:31:55'),
(10, 'gVro7', 2, 1, 3, 1, 3, 'cash on delivery', 1, 204.00, '2021-04-27 06:45:53', '2021-04-27 06:45:53'),
(11, 'qgPG9', 1, 1, 3, 1, 3, 'cash on delivery', 1, 102.00, '2021-04-27 07:00:27', '2021-04-27 07:00:27'),
(12, 'yj00i', 1, 1, 3, 1, 3, 'cash on delivery', 1, 102.00, '2021-04-27 07:12:39', '2021-04-27 07:12:39'),
(13, 'HEMFL', 1, 1, 3, 1, 3, 'cash on delivery', 1, 102.00, '2021-04-28 03:07:19', '2021-04-28 03:07:19'),
(14, 'YVLBz', 1, 1, 3, 1, 3, 'cash on delivery', 1, 102.00, '2021-04-28 03:12:48', '2021-04-28 03:12:48'),
(15, 'aUHna', 1, 1, 3, 1, 3, 'cash on delivery', 1, 102.00, '2021-04-28 04:08:00', '2021-04-28 04:08:00'),
(16, 'UywT9', 1, 1, 3, 1, 3, 'cash on delivery', 1, 102.00, '2021-04-28 04:11:28', '2021-04-28 04:11:28'),
(17, '7CFYg', 1, 1, 3, 1, 3, 'cash on delivery', 1, 102.00, '2021-04-28 04:22:58', '2021-04-28 04:22:58'),
(18, 'cYZY7', 1, 1, 3, 1, 3, 'cash on delivery', 1, 102.00, '2021-04-28 04:33:17', '2021-04-28 04:33:17'),
(19, 'h24bT', 1, 1, 3, 1, 3, 'cash on delivery', 1, 102.00, '2021-04-28 04:35:33', '2021-04-28 04:35:33'),
(20, 'bjdXw', 1, 1, 3, 1, 3, 'cash on delivery', 1, 102.00, '2021-04-28 04:47:03', '2021-04-28 04:47:03'),
(21, '0r7JK', 1, 1, 3, 1, 3, 'cash on delivery', 1, 102.00, '2021-04-28 04:55:22', '2021-04-28 04:55:22'),
(22, 'DzDUd', 1, 1, 3, 1, 3, 'cash on delivery', 1, 102.00, '2021-04-28 06:52:42', '2021-04-28 06:52:42'),
(23, 'BKBkZ', 1, 1, 3, 1, 3, 'cash on delivery', 1, 102.00, '2021-04-29 03:27:19', '2021-04-29 03:27:19'),
(24, 'B4mtK', 1, 1, 3, 1, 3, 'cash on delivery', 1, 102.00, '2021-04-29 03:33:51', '2021-04-29 03:33:51');

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
(166, 'create users', 'web', '2021-04-29 06:04:53', '2021-04-29 06:04:53'),
(167, 'show users', 'web', '2021-04-29 06:04:53', '2021-04-29 06:04:53'),
(168, 'edit users', 'web', '2021-04-29 06:04:53', '2021-04-29 06:04:53'),
(169, 'delete users', 'web', '2021-04-29 06:04:53', '2021-04-29 06:04:53'),
(170, 'users status', 'web', '2021-04-29 06:04:54', '2021-04-29 06:04:54'),
(171, 'create roles', 'web', '2021-04-29 06:04:54', '2021-04-29 06:04:54'),
(172, 'show roles', 'web', '2021-04-29 06:04:54', '2021-04-29 06:04:54'),
(173, 'edit roles', 'web', '2021-04-29 06:04:54', '2021-04-29 06:04:54'),
(174, 'delete roles', 'web', '2021-04-29 06:04:54', '2021-04-29 06:04:54'),
(175, 'create categories', 'web', '2021-04-29 06:04:54', '2021-04-29 06:04:54'),
(176, 'show categories', 'web', '2021-04-29 06:04:54', '2021-04-29 06:04:54'),
(177, 'edit categories', 'web', '2021-04-29 06:04:54', '2021-04-29 06:04:54'),
(178, 'delete categories', 'web', '2021-04-29 06:04:54', '2021-04-29 06:04:54'),
(179, 'create products', 'web', '2021-04-29 06:04:54', '2021-04-29 06:04:54'),
(180, 'show products', 'web', '2021-04-29 06:04:54', '2021-04-29 06:04:54'),
(181, 'edit products', 'web', '2021-04-29 06:04:54', '2021-04-29 06:04:54'),
(182, 'delete products', 'web', '2021-04-29 06:04:54', '2021-04-29 06:04:54'),
(183, 'Products status', 'web', '2021-04-29 06:04:54', '2021-04-29 06:04:54'),
(184, 'create colours', 'web', '2021-04-29 06:04:54', '2021-04-29 06:04:54'),
(185, 'show colours', 'web', '2021-04-29 06:04:54', '2021-04-29 06:04:54'),
(186, 'edit colours', 'web', '2021-04-29 06:04:54', '2021-04-29 06:04:54'),
(187, 'delete colours', 'web', '2021-04-29 06:04:54', '2021-04-29 06:04:54'),
(188, 'create sizes', 'web', '2021-04-29 06:04:54', '2021-04-29 06:04:54'),
(189, 'show sizes', 'web', '2021-04-29 06:04:55', '2021-04-29 06:04:55'),
(190, 'edit sizes', 'web', '2021-04-29 06:04:55', '2021-04-29 06:04:55'),
(191, 'delete sizes', 'web', '2021-04-29 06:04:55', '2021-04-29 06:04:55'),
(192, 'create batches', 'web', '2021-04-29 06:04:55', '2021-04-29 06:04:55'),
(193, 'show batches', 'web', '2021-04-29 06:04:55', '2021-04-29 06:04:55'),
(194, 'edit batches', 'web', '2021-04-29 06:04:55', '2021-04-29 06:04:55'),
(195, 'delete batches', 'web', '2021-04-29 06:04:55', '2021-04-29 06:04:55'),
(196, 'view batches', 'web', '2021-04-29 06:04:55', '2021-04-29 06:04:55'),
(197, 'create sale centers', 'web', '2021-04-29 06:04:55', '2021-04-29 06:04:55'),
(198, 'show sale centers', 'web', '2021-04-29 06:04:55', '2021-04-29 06:04:55'),
(199, 'edit sale centers', 'web', '2021-04-29 06:04:55', '2021-04-29 06:04:55'),
(200, 'delete sale centers', 'web', '2021-04-29 06:04:55', '2021-04-29 06:04:55'),
(201, 'create riders', 'web', '2021-04-29 06:04:55', '2021-04-29 06:04:55'),
(202, 'show riders', 'web', '2021-04-29 06:04:55', '2021-04-29 06:04:55'),
(203, 'edit riders', 'web', '2021-04-29 06:04:55', '2021-04-29 06:04:55'),
(204, 'delete riders', 'web', '2021-04-29 06:04:55', '2021-04-29 06:04:55'),
(205, 'create suppliers', 'web', '2021-04-29 06:04:55', '2021-04-29 06:04:55'),
(206, 'show suppliers', 'web', '2021-04-29 06:04:55', '2021-04-29 06:04:55'),
(207, 'edit suppliers', 'web', '2021-04-29 06:04:55', '2021-04-29 06:04:55'),
(208, 'delete suppliers', 'web', '2021-04-29 06:04:55', '2021-04-29 06:04:55'),
(209, 'create logos', 'web', '2021-04-29 06:04:55', '2021-04-29 06:04:55'),
(210, 'show logos', 'web', '2021-04-29 06:04:55', '2021-04-29 06:04:55'),
(211, 'edit logos', 'web', '2021-04-29 06:04:55', '2021-04-29 06:04:55'),
(212, 'delete logos', 'web', '2021-04-29 06:04:55', '2021-04-29 06:04:55'),
(213, 'logos status', 'web', '2021-04-29 06:04:55', '2021-04-29 06:04:55'),
(214, 'create ape', 'web', '2021-04-29 06:04:55', '2021-04-29 06:04:55'),
(215, 'show ape', 'web', '2021-04-29 06:04:55', '2021-04-29 06:04:55'),
(216, 'edit ape', 'web', '2021-04-29 06:04:55', '2021-04-29 06:04:55'),
(217, 'delete ape', 'web', '2021-04-29 06:04:55', '2021-04-29 06:04:55'),
(218, 'ape status', 'web', '2021-04-29 06:04:55', '2021-04-29 06:04:55'),
(219, 'create sliders', 'web', '2021-04-29 06:04:55', '2021-04-29 06:04:55'),
(220, 'show sliders', 'web', '2021-04-29 06:04:55', '2021-04-29 06:04:55'),
(221, 'edit sliders', 'web', '2021-04-29 06:04:55', '2021-04-29 06:04:55'),
(222, 'delete sliders', 'web', '2021-04-29 06:04:55', '2021-04-29 06:04:55'),
(223, 'sliders status', 'web', '2021-04-29 06:04:55', '2021-04-29 06:04:55'),
(224, 'create banners', 'web', '2021-04-29 06:04:55', '2021-04-29 06:04:55'),
(225, 'show banners', 'web', '2021-04-29 06:04:55', '2021-04-29 06:04:55'),
(226, 'edit banners', 'web', '2021-04-29 06:04:55', '2021-04-29 06:04:55'),
(227, 'delete banners', 'web', '2021-04-29 06:04:55', '2021-04-29 06:04:55'),
(228, 'banners status', 'web', '2021-04-29 06:04:55', '2021-04-29 06:04:55'),
(229, 'create services', 'web', '2021-04-29 06:04:55', '2021-04-29 06:04:55'),
(230, 'show services', 'web', '2021-04-29 06:04:55', '2021-04-29 06:04:55'),
(231, 'edit services', 'web', '2021-04-29 06:04:55', '2021-04-29 06:04:55'),
(232, 'delete services', 'web', '2021-04-29 06:04:55', '2021-04-29 06:04:55'),
(233, 'services status', 'web', '2021-04-29 06:04:55', '2021-04-29 06:04:55'),
(234, 'create floors', 'web', '2021-04-29 06:04:55', '2021-04-29 06:04:55'),
(235, 'show floors', 'web', '2021-04-29 06:04:55', '2021-04-29 06:04:55'),
(236, 'edit floors', 'web', '2021-04-29 06:04:55', '2021-04-29 06:04:55'),
(237, 'delete floors', 'web', '2021-04-29 06:04:55', '2021-04-29 06:04:55'),
(238, 'floors status', 'web', '2021-04-29 06:04:56', '2021-04-29 06:04:56'),
(239, 'create couriers', 'web', '2021-04-29 06:04:56', '2021-04-29 06:04:56'),
(240, 'show couriers', 'web', '2021-04-29 06:04:56', '2021-04-29 06:04:56'),
(241, 'edit couriers', 'web', '2021-04-29 06:04:56', '2021-04-29 06:04:56'),
(242, 'delete couriers', 'web', '2021-04-29 06:04:56', '2021-04-29 06:04:56'),
(243, 'review reply', 'web', '2021-04-29 06:04:56', '2021-04-29 06:04:56'),
(244, 'show orders', 'web', '2021-04-29 06:04:56', '2021-04-29 06:04:56'),
(245, 'edit orders', 'web', '2021-04-29 06:04:56', '2021-04-29 06:04:56'),
(246, 'delete orders', 'web', '2021-04-29 06:04:56', '2021-04-29 06:04:56'),
(247, 'view orders', 'web', '2021-04-29 06:04:56', '2021-04-29 06:04:56'),
(248, 'create deals', 'web', '2021-04-29 06:04:56', '2021-04-29 06:04:56'),
(249, 'show deals', 'web', '2021-04-29 06:04:56', '2021-04-29 06:04:56'),
(250, 'edit deals', 'web', '2021-04-29 06:04:56', '2021-04-29 06:04:56'),
(251, 'delete deals', 'web', '2021-04-29 06:04:56', '2021-04-29 06:04:56'),
(252, 'deals status', 'web', '2021-04-29 06:04:56', '2021-04-29 06:04:56');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL,
  `stock_availability` tinyint(1) NOT NULL,
  `sku_code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `owner` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `vendor` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `video_link` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `quantity` bigint(20) UNSIGNED NOT NULL,
  `price` double(36,2) NOT NULL,
  `purchase_discount` double(36,2) DEFAULT NULL,
  `purchase_cost` double(36,2) DEFAULT NULL,
  `labour_cost` double(36,2) DEFAULT NULL,
  `transportation_cost` double(36,2) DEFAULT NULL,
  `list_price_for_salesman` double(36,2) DEFAULT NULL,
  `commission` bigint(20) DEFAULT NULL,
  `inventory_category` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `status`, `stock_availability`, `sku_code`, `description`, `owner`, `vendor`, `video_link`, `quantity`, `price`, `purchase_discount`, `purchase_cost`, `labour_cost`, `transportation_cost`, `list_price_for_salesman`, `commission`, `inventory_category`, `created_at`, `updated_at`) VALUES
(1, 'Product - 1', 1, 1, 'SKU-01', '<p>Product-1 Description</p>', NULL, NULL, NULL, 72, 102.00, NULL, NULL, NULL, NULL, NULL, NULL, '0', '2021-04-27 03:50:56', '2021-04-29 03:33:51'),
(2, 'Product - 2', 1, 1, 'SKU-02', '<p>Product - 2 Description</p>', NULL, NULL, NULL, 199, 500.00, NULL, NULL, NULL, NULL, NULL, NULL, '1', '2021-04-27 03:52:00', '2021-04-27 04:32:14'),
(3, 'Product - 3', 1, 1, 'SKU-03', '<p>Product - 3 Description</p>', NULL, NULL, NULL, 200, 500.00, NULL, NULL, NULL, NULL, NULL, NULL, '0', '2021-04-29 07:04:55', '2021-04-29 07:04:55'),
(4, 'Product - 4', 1, 1, 'SKU-04', '<p>Product - 4 Description</p>', NULL, NULL, NULL, 200, 765.00, NULL, NULL, NULL, NULL, NULL, NULL, '0', '2021-05-04 06:51:01', '2021-05-04 06:51:01'),
(5, 'Product - 5', 1, 1, 'SKU-05', '<p>Product - 5 Description</p>', NULL, NULL, NULL, 300, 110.00, NULL, NULL, NULL, NULL, NULL, NULL, '0', '2021-05-05 05:08:23', '2021-05-05 05:08:23');

-- --------------------------------------------------------

--
-- Table structure for table `resellers`
--

CREATE TABLE `resellers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `area` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `contact` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `messaging_service_no` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `messaging_service_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cnic_no` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cnic_front` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `cnic_back` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `social_media_name_1` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `link_1` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `social_media_name_2` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `link_2` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bank_account_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bank_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bank_branch` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `account_or_iban_no` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `money_transfer_no` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `money_transfer_service` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `resellers`
--

INSERT INTO `resellers` (`id`, `name`, `city`, `area`, `address`, `contact`, `messaging_service_no`, `messaging_service_name`, `cnic_no`, `cnic_front`, `cnic_back`, `social_media_name_1`, `link_1`, `social_media_name_2`, `link_2`, `bank_account_title`, `bank_name`, `bank_branch`, `account_or_iban_no`, `money_transfer_no`, `money_transfer_service`, `status`, `created_at`, `updated_at`) VALUES
(2, 'Mustafa', 'Karachi', 'Gulshan', 'Gulshan Iqbal 13-C Karachi', '01112345654', '123', 'ufone', '34456-6475867-4', 'unnamed.jpg', 'visiting card-02.png', 'facebook', 'fb.com', 'twitter', 'twitter.com', 'Mustafa', 'Meezan', 'Gulshan', '123456789012', '321', 'Jazz Cash', 1, '2021-05-03 04:54:32', '2021-05-03 04:54:32');

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE `reviews` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `comment` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `rating` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `review_replies`
--

CREATE TABLE `review_replies` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `review_id` int(11) NOT NULL,
  `reply` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `riders`
--

CREATE TABLE `riders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `area` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contact` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cnic_no` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `picture_of_cnic` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `messaging_service_no` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `messaging_service_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bank_account_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bank_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bank_branch` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `account_or_iban_no` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `money_transfer_no` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `money_transfer_service` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(7, 'customer', 'web', '2021-04-29 06:04:56', '2021-04-29 06:04:56'),
(8, 'admin', 'web', '2021-04-29 06:04:56', '2021-04-29 06:04:56'),
(9, 'super-admin', 'web', '2021-04-29 06:04:56', '2021-04-29 06:04:56');

-- --------------------------------------------------------

--
-- Table structure for table `role_has_permissions`
--

CREATE TABLE `role_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `role_has_permissions`
--

INSERT INTO `role_has_permissions` (`permission_id`, `role_id`) VALUES
(166, 9),
(167, 8),
(167, 9),
(168, 9),
(169, 9),
(170, 9),
(171, 9),
(172, 9),
(173, 9),
(174, 9),
(175, 9),
(176, 9),
(177, 9),
(178, 9),
(179, 9),
(180, 9),
(181, 9),
(182, 9),
(183, 9),
(184, 9),
(185, 9),
(186, 9),
(187, 9),
(188, 9),
(189, 9),
(190, 9),
(191, 9),
(192, 9),
(193, 9),
(194, 9),
(195, 9),
(196, 9),
(197, 9),
(198, 9),
(199, 9),
(200, 9),
(201, 9),
(202, 9),
(203, 9),
(204, 9),
(205, 9),
(206, 9),
(207, 9),
(208, 9),
(209, 9),
(210, 9),
(211, 9),
(212, 9),
(213, 9),
(214, 9),
(215, 9),
(216, 9),
(217, 9),
(218, 9),
(219, 9),
(220, 9),
(221, 9),
(222, 9),
(223, 9),
(224, 9),
(225, 8),
(225, 9),
(226, 9),
(227, 9),
(228, 9),
(229, 9),
(230, 8),
(230, 9),
(231, 9),
(232, 9),
(233, 9),
(234, 9),
(235, 8),
(235, 9),
(236, 9),
(237, 9),
(238, 9),
(239, 9),
(240, 8),
(240, 9),
(241, 9),
(242, 9),
(243, 9),
(244, 9),
(245, 9),
(246, 9),
(247, 9),
(248, 9),
(249, 9),
(250, 9),
(251, 9),
(252, 9);

-- --------------------------------------------------------

--
-- Table structure for table `sale_centers`
--

CREATE TABLE `sale_centers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `owner_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `area` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contact` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `picture_of_cnic` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `messaging_service_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `messaging_service_no` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `social_media_name_1` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `social_media_name_2` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `social_media_name_3` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `link_1` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `link_2` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `link_3` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bank_account_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bank_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `account_or_iban_no` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `money_transfer_no` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `money_transfer_service` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sizes`
--

CREATE TABLE `sizes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `sizeName` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sizes`
--

INSERT INTO `sizes` (`id`, `sizeName`, `slug`, `created_at`, `updated_at`) VALUES
(1, 'S', 's', '2021-04-19 22:30:16', '2021-04-19 22:30:16'),
(2, 'M', 'm', '2021-04-19 22:30:23', '2021-04-19 22:30:23'),
(3, 'L', 'l', '2021-04-19 22:30:30', '2021-04-19 22:30:30'),
(4, 'Xl', 'xl', '2021-04-19 22:30:36', '2021-04-19 22:30:36');

-- --------------------------------------------------------

--
-- Table structure for table `states`
--

CREATE TABLE `states` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `country_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `states`
--

INSERT INTO `states` (`id`, `name`, `country_id`) VALUES
(1, 'Sindh', 1),
(2, 'Balochistan', 1),
(3, 'Gilgit–baltistan', 1),
(4, 'Khyber Pakhtunkhwa', 1),
(5, 'Punjab', 1);

-- --------------------------------------------------------

--
-- Table structure for table `suppliers`
--

CREATE TABLE `suppliers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `business_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `area` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contact` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cnic_no` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `picture_of_cnic` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `messaging_service_no` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `messaging_service_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `social_media_name_1` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `link_1` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `social_media_name_2` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `link_2` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bank_account_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bank_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bank_branch` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `account_or_iban_no` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `money_transfer_no` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `money_transfer_service` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL,
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
  `image` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `o_auth` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `image`, `o_auth`, `status`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'user', 'user@example.com', NULL, '$2y$10$6UjMe7CkibQUUQaJpS6rhuPoF2Ym/5MFIyCrtjvDDGbHRtgY1Oulu', 'default-1.jpg', '12345', 1, NULL, '2021-04-29 06:04:56', '2021-04-29 06:04:56'),
(2, 'admin', 'admin@example.com', NULL, '$2y$10$zAU9pttU4yUl.qDeDIIN/O9LbjMjIn8xjQTjTDMHcHHXN2JHX7jtq', 'default-2.jpg', '12345', 1, NULL, '2021-04-29 06:04:56', '2021-04-29 06:04:56'),
(3, 'super admin', 'superadmin@example.com', NULL, '$2y$10$TUnD00Xld.wLr5CBYWiYHuJsVVcTH7Ai.U2YaVNdw4TBmFNixTEj2', 'default-3.jpg', '12345', 1, NULL, '2021-04-29 06:04:56', '2021-04-29 06:04:56');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `batches`
--
ALTER TABLE `batches`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `batch_product`
--
ALTER TABLE `batch_product`
  ADD PRIMARY KEY (`batch_id`,`product_id`),
  ADD KEY `batch_product_product_id_foreign` (`product_id`);

--
-- Indexes for table `billings`
--
ALTER TABLE `billings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `block_floor_products`
--
ALTER TABLE `block_floor_products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `carts`
--
ALTER TABLE `carts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `categories_slug_unique` (`slug`);

--
-- Indexes for table `category_product`
--
ALTER TABLE `category_product`
  ADD PRIMARY KEY (`category_id`,`product_id`),
  ADD KEY `category_product_product_id_foreign` (`product_id`);

--
-- Indexes for table `cities`
--
ALTER TABLE `cities`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cities_id_index` (`id`);

--
-- Indexes for table `colours`
--
ALTER TABLE `colours`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `colours_colourcode_unique` (`colourCode`);

--
-- Indexes for table `colour_image_product_sizes`
--
ALTER TABLE `colour_image_product_sizes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `countries`
--
ALTER TABLE `countries`
  ADD PRIMARY KEY (`id`),
  ADD KEY `countries_id_index` (`id`);

--
-- Indexes for table `couriers`
--
ALTER TABLE `couriers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `deals`
--
ALTER TABLE `deals`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `delivery_charges`
--
ALTER TABLE `delivery_charges`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `front_ends`
--
ALTER TABLE `front_ends`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `general_discounts`
--
ALTER TABLE `general_discounts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `home_settings`
--
ALTER TABLE `home_settings`
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
-- Indexes for table `offers`
--
ALTER TABLE `offers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `resellers`
--
ALTER TABLE `resellers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `review_replies`
--
ALTER TABLE `review_replies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `riders`
--
ALTER TABLE `riders`
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
-- Indexes for table `sale_centers`
--
ALTER TABLE `sale_centers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sizes`
--
ALTER TABLE `sizes`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `sizes_sizename_unique` (`sizeName`),
  ADD UNIQUE KEY `sizes_slug_unique` (`slug`);

--
-- Indexes for table `states`
--
ALTER TABLE `states`
  ADD PRIMARY KEY (`id`),
  ADD KEY `states_id_index` (`id`);

--
-- Indexes for table `suppliers`
--
ALTER TABLE `suppliers`
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
-- AUTO_INCREMENT for table `batches`
--
ALTER TABLE `batches`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `billings`
--
ALTER TABLE `billings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `block_floor_products`
--
ALTER TABLE `block_floor_products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `carts`
--
ALTER TABLE `carts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `cities`
--
ALTER TABLE `cities`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1309;

--
-- AUTO_INCREMENT for table `colours`
--
ALTER TABLE `colours`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `colour_image_product_sizes`
--
ALTER TABLE `colour_image_product_sizes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `countries`
--
ALTER TABLE `countries`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `couriers`
--
ALTER TABLE `couriers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `deals`
--
ALTER TABLE `deals`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `delivery_charges`
--
ALTER TABLE `delivery_charges`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `front_ends`
--
ALTER TABLE `front_ends`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `general_discounts`
--
ALTER TABLE `general_discounts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `home_settings`
--
ALTER TABLE `home_settings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `offers`
--
ALTER TABLE `offers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=253;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `resellers`
--
ALTER TABLE `resellers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `reviews`
--
ALTER TABLE `reviews`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `review_replies`
--
ALTER TABLE `review_replies`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `riders`
--
ALTER TABLE `riders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `sale_centers`
--
ALTER TABLE `sale_centers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sizes`
--
ALTER TABLE `sizes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `states`
--
ALTER TABLE `states`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `suppliers`
--
ALTER TABLE `suppliers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `batch_product`
--
ALTER TABLE `batch_product`
  ADD CONSTRAINT `batch_product_batch_id_foreign` FOREIGN KEY (`batch_id`) REFERENCES `batches` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `batch_product_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `category_product`
--
ALTER TABLE `category_product`
  ADD CONSTRAINT `category_product_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `category_product_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE;

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
