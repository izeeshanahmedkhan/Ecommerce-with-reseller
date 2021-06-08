-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 08, 2021 at 06:42 PM
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
-- Table structure for table `abouts`
--

CREATE TABLE `abouts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `abouts`
--

INSERT INTO `abouts` (`id`, `title`, `image`, `description`, `status`, `created_at`, `updated_at`) VALUES
(1, 'About', '1568788430-1206740205d81cfce2b4423-60645169.png', 'this is about', '1', '2021-06-07 12:31:41', '2021-06-07 12:31:46');

-- --------------------------------------------------------

--
-- Table structure for table `assets`
--

CREATE TABLE `assets` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `guid` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `amount` double(36,2) NOT NULL,
  `date` date DEFAULT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `assets`
--

INSERT INTO `assets` (`id`, `guid`, `name`, `amount`, `date`, `category_id`, `created_at`, `updated_at`) VALUES
(1, '12c0936c-272a-45ce-82ff-f5e373bdc6c7', 'Asset', 2333.00, '2021-06-08', 1, '2021-06-08 16:06:57', '2021-06-08 16:06:57'),
(3, '38a29c3d-7c05-4d6c-a405-027ecd115bd0', 'Asset 2', 233.00, '2021-06-08', 2, '2021-06-08 16:20:46', '2021-06-08 16:20:46');

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
(1, 'batch - 1', 542, '2021-05-18 16:23:00', 100, 3, NULL, NULL, 'Ahmed', 'Aslam', '2021-05-18 11:23:26', '2021-05-18 11:23:26');

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
(1, 14, 'reseller', 'reseller@example.com', 'Ghulshan Iqbal, Karachi', 1, 1, 54, '75300', '+923345652528', 700.00, '34RCz', '2021-05-21 12:25:23', '2021-05-21 12:25:23'),
(2, 14, 'reseller', 'reseller@example.com', 'Ghulshan Iqbal, Karachi', 1, 1, 54, '75300', '+923345652528', 700.00, 'UT4BL', '2021-05-21 12:32:21', '2021-05-21 12:32:21'),
(3, 14, 'reseller', 'reseller@example.com', 'Ghulshan Iqbal, Karachi', 1, 1, 54, '72400', '+923345652528', 700.00, 'lLa65', '2021-05-21 12:34:33', '2021-05-21 12:34:33'),
(4, 14, 'reseller', 'reseller@example.com', 'Ghulshan Iqbal, Karachi', 1, 1, 54, '55500', '+923345652528', 860.00, '0n4b1', '2021-05-24 09:58:14', '2021-05-24 09:58:14'),
(5, 14, 'reseller', 'reseller@example.com', 'Ghulshan Iqbal, Karachi', 1, 1, 54, '55500', '+923345652528', 380.00, 'QOQxU', '2021-05-24 10:08:58', '2021-05-24 10:08:58'),
(6, 14, 'reseller', 'reseller@example.com', 'Ghulshan Iqbal, Karachi', 1, 1, 54, '55500', '+923345652528', 700.00, '57MvZ', '2021-05-31 09:37:31', '2021-05-31 09:37:31'),
(7, 1, 'user', 'user@example.com', 'Gulshan Iqbal 13-C Karachi', 1, 1, 54, '75300', '+923353287084', 400.00, 'KHFGT', '2021-05-31 09:45:35', '2021-05-31 09:45:35'),
(8, 1, 'user', 'user@example.com', 'Gulshan Iqbal 13-C Karachi', 1, 1, 54, '75300', '+923353287084', 400.00, '1FG7I', '2021-05-31 09:47:53', '2021-05-31 09:47:53'),
(9, 1, 'user', 'user@example.com', 'Gulshan Iqbal 13-C Karachi', 1, 1, 54, '75300', '+923353287084', 400.00, 'ifHqC', '2021-05-31 09:49:19', '2021-05-31 09:49:19'),
(10, 1, 'user', 'user@example.com', 'Gulshan Iqbal 13-C Karachi', 1, 1, 54, '75300', '+923353287084', 400.00, 'wNRgj', '2021-05-31 09:51:29', '2021-05-31 09:51:29'),
(11, 1, 'user', 'user@example.com', 'Gulshan Iqbal 13-C Karachi', 1, 1, 54, '75300', '+923353287084', 400.00, 'tbWrl', '2021-05-31 09:54:06', '2021-05-31 09:54:06'),
(12, 14, 'reseller', 'reseller@example.com', 'Ghulshan Iqbal, Karachi', 1, 1, 54, '55500', '+923345652528', 700.00, 'SAFYD', '2021-05-31 09:56:25', '2021-05-31 09:56:25'),
(13, 3, 'super admin', 'superadmin@example.com', 'Gulshan Iqbal 13-C Karachi', 1, 1, 54, '75300', '+923353287084', 600.00, 'dSMmK', '2021-06-01 10:27:37', '2021-06-01 10:27:37'),
(14, 3, 'super admin', 'superadmin@example.com', 'Gulshan Iqbal 13-C Karachi', 1, 1, 54, '75300', '+923353287084', 600.00, 'KXJ5g', '2021-06-01 10:29:40', '2021-06-01 10:29:40'),
(15, 3, 'super admin', 'superadmin@example.com', 'Gulshan Iqbal 13-C Karachi', 1, 1, 54, '75300', '+923353287084', 1750.00, 'oORum', '2021-06-02 10:59:32', '2021-06-02 10:59:32'),
(16, 3, 'super admin', 'superadmin@example.com', 'Gulshan Iqbal 13-C Karachi', 1, 1, 54, '75300', '+923353287084', 760.00, 'GxBvX', '2021-06-07 11:55:49', '2021-06-07 11:55:49'),
(17, 14, 'reseller', 'reseller@example.com', 'Gulshan Iqbal 13-C Karachi', 1, 1, 54, '75300', '+923345652528', 1150.00, 'JukuV', '2021-06-07 12:04:58', '2021-06-07 12:04:58'),
(18, 14, 'reseller', 'reseller@example.com', 'Gulshan Iqbal 13-C Karachi', 1, 1, 54, '75300', '+923345652528', 1150.00, 'PpajU', '2021-06-07 12:12:25', '2021-06-07 12:12:25'),
(19, 14, 'reseller', 'reseller@example.com', 'Gulshan Iqbal 13-C Karachi', 1, 1, 54, '75300', '+923345652528', 1150.00, 'QCsaT', '2021-06-07 12:12:59', '2021-06-07 12:12:59'),
(20, 14, 'reseller', 'reseller@example.com', 'Gulshan Iqbal 13-C Karachi', 1, 1, 54, '75300', '+923345652528', 1150.00, 'LRfOf', '2021-06-07 12:16:05', '2021-06-07 12:16:05'),
(21, 14, 'reseller', 'reseller@example.com', 'Gulshan Iqbal 13-C Karachi', 1, 1, 54, '75300', '+923345652528', 1150.00, 'aMPdN', '2021-06-07 12:19:23', '2021-06-07 12:19:23');

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
(1, 'FASHION', 'fas fa-tshirt', 'banner1-1.jpg', 'banner1-2.jpg', 'baner-floor1.jpg', '#ff3366', 2, 3, 4, 5, 6, 7, 5, 1, '2021-05-19 11:30:45', '2021-05-19 11:30:49');

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
(17, 5, 1, 2, 9, 3, '2021-06-07 11:53:35', '2021-06-07 11:53:35');

-- --------------------------------------------------------

--
-- Table structure for table `catalogues`
--

CREATE TABLE `catalogues` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `catalogue` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `catalogues`
--

INSERT INTO `catalogues` (`id`, `catalogue`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 'catelogue - 1', 14, '2021-05-25 18:38:25', '2021-05-25 18:38:25'),
(2, 'catelogue - 2', 14, '2021-05-25 19:30:24', '2021-05-25 19:30:24');

-- --------------------------------------------------------

--
-- Table structure for table `catalogue_products`
--

CREATE TABLE `catalogue_products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `size_id` int(11) NOT NULL,
  `colour_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `catalogue_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `catalogue_products`
--

INSERT INTO `catalogue_products` (`id`, `size_id`, `colour_id`, `product_id`, `catalogue_id`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 1, 1, 14, '2021-05-25 20:11:48', '2021-05-25 20:11:48');

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
(1, 0, 'Electronics', 'fas fa-tv', 'bgmenu.jpg', 'electronics', '2021-05-18 11:27:32', '2021-05-18 11:27:32'),
(2, 1, 'SMARTPHONE', NULL, NULL, 'smartphone', '2021-05-18 11:27:55', '2021-05-18 11:27:55'),
(3, 2, 'Skirts', NULL, NULL, 'skirts', '2021-05-18 11:28:08', '2021-05-18 11:28:08'),
(4, 2, 'Jackets', NULL, NULL, 'jackets', '2021-05-18 11:28:24', '2021-05-18 11:28:24'),
(5, 2, 'Jumpusuits', NULL, NULL, 'jumpusuits', '2021-05-18 11:28:35', '2021-05-18 11:28:35'),
(6, 2, 'Scarvest', NULL, NULL, 'scarvest', '2021-05-18 11:28:46', '2021-05-18 11:28:46'),
(7, 2, 'T - Shirts', NULL, NULL, 't-shirts', '2021-05-18 11:29:00', '2021-05-18 11:29:00'),
(8, 1, 'Mouse', NULL, NULL, 'mouse', '2021-06-07 15:09:47', '2021-06-07 15:09:47'),
(9, 8, 'Lazer Mouse', NULL, NULL, 'lazer-mouse', '2021-06-07 15:10:42', '2021-06-07 15:10:42'),
(10, 9, 'USB', NULL, NULL, 'usb', '2021-06-07 15:11:22', '2021-06-07 15:11:22'),
(11, 0, 'Fan', NULL, NULL, 'fan', '2021-06-07 15:11:43', '2021-06-07 15:11:43');

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
(3, 9, NULL, NULL);

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
(1, 'Adilpur', 1),
(2, 'Badah', 1),
(3, 'Badin', 1),
(4, 'Bagarji', 1),
(5, 'Bakshshapur', 1),
(6, 'Bandhi', 1),
(7, 'Berani', 1),
(8, 'Bhan', 1),
(9, 'Bhiria City', 1),
(10, 'Bhiria Road', 1),
(11, 'Bhit Shah', 1),
(12, 'Bozdar', 1),
(13, 'Bulri', 1),
(14, 'Chak', 1),
(15, 'Chambar', 1),
(16, 'Chohar Jamali', 1),
(17, 'Chor', 1),
(18, 'Dadu', 1),
(19, 'Daharki', 1),
(20, 'Daro', 1),
(21, 'Darya Khan Mari', 1),
(22, 'Daulatpur', 1),
(23, 'Daur', 1),
(24, 'Dhoronaro', 1),
(25, 'Digri', 1),
(26, 'Diplo', 1),
(27, 'Dokri', 1),
(28, 'Faqirabad', 1),
(29, 'Gambat', 1),
(30, 'Garello', 1),
(31, 'Garhi Khairo', 1),
(32, 'Garhi Yasin', 1),
(33, 'Gharo', 1),
(34, 'Ghauspur', 1),
(35, 'Ghotki', 1),
(36, 'Golarchi', 1),
(37, 'Guddu', 1),
(38, 'Hala', 1),
(39, 'Hingorja', 1),
(40, 'Hyderabad', 1),
(41, 'Islamkot', 1),
(42, 'Jacobabad', 1),
(43, 'Jam Nawaz Ali', 1),
(44, 'Jam Sahib', 1),
(45, 'Jati', 1),
(46, 'Jhol', 1),
(47, 'Jhudo', 1),
(48, 'Johi', 1),
(49, 'Kadhan', 1),
(50, 'Kambar', 1),
(51, 'Kandhra', 1),
(52, 'Kandiari', 1),
(53, 'Kandiaro', 1),
(54, 'Karachi', 1),
(55, 'Karampur', 1),
(56, 'Kario Ghanwar', 1),
(57, 'Karoondi', 1),
(58, 'Kashmor', 1),
(59, 'Kazi Ahmad', 1),
(60, 'Keti Bandar', 1),
(61, 'Khadro', 1),
(62, 'Khairpur', 1),
(63, 'Khairpur Nathan Shah', 1),
(64, 'Khandh Kot', 1),
(65, 'Khanpur', 1),
(66, 'Khipro', 1),
(67, 'Khoski', 1),
(68, 'Khuhra', 1),
(69, 'Khyber', 1),
(70, 'Kot Diji', 1),
(71, 'Kot Ghulam Mohammad', 1),
(72, 'Kotri', 1),
(73, 'Kumb', 1),
(74, 'Kunri', 1),
(75, 'Lakhi', 1),
(76, 'Larkana', 1),
(77, 'Madeji', 1),
(78, 'Matiari', 1),
(79, 'Matli', 1),
(80, 'Mehar', 1),
(81, 'Mehrabpur', 1),
(82, 'Miro Khan', 1),
(83, 'Mirpur Bathoro', 1),
(84, 'Mirpur Khas', 1),
(85, 'Mirpur Mathelo', 1),
(86, 'Mirpur Sakro', 1),
(87, 'Mirwah', 1),
(88, 'Mithi', 1),
(89, 'Moro', 1),
(90, 'Nabisar', 1),
(91, 'Nasarpur', 1),
(92, 'Nasirabad', 1),
(93, 'Naudero', 1),
(94, 'Naukot', 1),
(95, 'Naushahro Firoz', 1),
(96, 'Nawabshah', 1),
(97, 'Oderolal Station', 1),
(98, 'Pacca Chang', 1),
(99, 'Padidan', 1),
(100, 'Pano Aqil', 1),
(101, 'Perumal', 1),
(102, 'Phulji', 1),
(103, 'Pirjo Goth', 1),
(104, 'Piryaloi', 1),
(105, 'Pithoro', 1),
(106, 'Radhan', 1),
(107, 'Rajo Khanani', 1),
(108, 'Ranipur', 1),
(109, 'Ratodero', 1),
(110, 'Rohri', 1),
(111, 'Rustam', 1),
(112, 'Saeedabad', 1),
(113, 'Sakrand', 1),
(114, 'Samaro', 1),
(115, 'Sanghar', 1),
(116, 'Sann', 1),
(117, 'Sarhari', 1),
(118, 'Sehwan', 1),
(119, 'Setharja', 1),
(120, 'Shah Dipalli', 1),
(121, 'Shahdadkot', 1),
(122, 'Shahdadpur', 1),
(123, 'Shahpur Chakar', 1),
(124, 'Shahpur Jahania', 1),
(125, 'Shikarpur', 1),
(126, 'Sinjhoro', 1),
(127, 'Sita Road', 1),
(128, 'Sobhodero', 1),
(129, 'Sujawal', 1),
(130, 'Sukkur', 1),
(131, 'Talhar', 1),
(132, 'Tando Adam', 1),
(133, 'Tando Allah Yar', 1),
(134, 'Tando Bagho', 1),
(135, 'Tando Ghulam Ali', 1),
(136, 'Tando Jam', 1),
(137, 'Tando Jan Mohammad', 1),
(138, 'Tando Mitha Khan', 1),
(139, 'Tando Muhammad Khan', 1),
(140, 'Tangwani', 1),
(141, 'Thano Bula Khan', 1),
(142, 'Thari Mirwah', 1),
(143, 'Tharushah', 1),
(144, 'Thatta', 1),
(145, 'Ther I', 1),
(146, 'Ther I Mohabat', 1),
(147, 'Thul', 1),
(148, 'Ubauro', 1),
(149, 'Umarkot', 1),
(150, 'Warah', 1),
(151, 'Amir chah', 2),
(152, 'Awaran', 2),
(153, 'Barkhan', 2),
(154, 'Bela', 2),
(155, 'Bhag', 2),
(156, 'Chaman', 2),
(157, 'Chitkan', 2),
(158, 'Dalbandin', 2),
(159, 'Dera Allah Yar', 2),
(160, 'Dera Bugti', 2),
(161, 'Dera Murad Jamali', 2),
(162, 'Dhadar', 2),
(163, 'Duki', 2),
(164, 'Gaddani', 2),
(165, 'Gwadar', 2),
(166, 'Harnai', 2),
(167, 'Hub', 2),
(168, 'Jiwani', 2),
(169, 'Kalat', 2),
(170, 'Kharan', 2),
(171, 'Khuzdar', 2),
(172, 'Kohlu', 2),
(173, 'Loralai', 2),
(174, 'Mach', 2),
(175, 'Mastung', 2),
(176, 'Nushki', 2),
(177, 'Ormara', 2),
(178, 'Pasni', 2),
(179, 'Pishin', 2),
(180, 'Quetta', 2),
(181, 'Sibi', 2),
(182, 'Sohbatpur', 2),
(183, 'Surab', 2),
(184, 'Turbat', 2),
(185, 'Usta Muhammad', 2),
(186, 'Uthal', 2),
(187, 'Wadh', 2),
(188, 'Winder', 2),
(189, 'Zehri', 2),
(190, 'Zhob', 2),
(191, 'Ziarat', 2),
(192, 'Astore', 3),
(193, 'Chilas', 3),
(194, 'Dambudas', 3),
(195, 'Danyor', 3),
(196, 'Gahkuch', 3),
(197, 'Gilgit', 3),
(198, 'Skardu', 3),
(199, 'Peshawar', 4),
(200, 'Mardan', 4),
(201, 'Mingora', 4),
(202, 'Kohat', 4),
(203, 'Abbottabad', 4),
(204, 'Dera Ismail Khan', 4),
(205, 'Nowshera', 4),
(206, 'Charsada', 4),
(207, 'Swabi', 4),
(208, 'Abdul Hakim', 5),
(209, 'Ahmadpur East', 5),
(210, 'Ahmadpur Lumma', 5),
(211, 'Ahmadpur Sial', 5),
(212, 'Ahmedabad', 5),
(213, 'Alipur', 5),
(214, 'Alipur Chatha', 5),
(215, 'Arifwala', 5),
(216, 'Attock', 5),
(217, 'Baddomalhi', 5),
(218, 'Bagh', 5),
(219, 'Bahawalnagar', 5),
(220, 'Bahawalpur', 5),
(221, 'Bai Pheru', 5),
(222, 'Basirpur', 5),
(223, 'Begowala', 5),
(224, 'Bhakkar', 5),
(225, 'Bhalwal', 5),
(226, 'Bhawana', 5),
(227, 'Bhera', 5),
(228, 'Bhopalwala', 5),
(229, 'Burewala', 5),
(230, 'Chak Azam Sahu', 5),
(231, 'Chak Jhumra', 5),
(232, 'Chak Sarwar Shahid', 5),
(233, 'Chakwal', 5),
(234, 'Chawinda', 5),
(235, 'Chichawatni', 5),
(236, 'Chiniot', 5),
(237, 'Chishtian Mandi', 5),
(238, 'Choa Saidan Shah', 5),
(239, 'Chuhar Kana', 5),
(240, 'Chunian', 5),
(241, 'Dajal', 5),
(242, 'Darya Khan', 5),
(243, 'Daska', 5),
(244, 'Daud Khel', 5),
(245, 'Daultala', 5),
(246, 'Dera Din Panah', 5),
(247, 'Dera Ghazi Khan', 5),
(248, 'Dhanote', 5),
(249, 'Dhonkal', 5),
(250, 'Dijkot', 5),
(251, 'Dina', 5),
(252, 'Dinga', 5),
(253, 'Dipalpur', 5),
(254, 'Dullewala', 5),
(255, 'Dunga Bunga', 5),
(256, 'Dunyapur', 5),
(257, 'Eminabad', 5),
(258, 'Faisalabad', 5),
(259, 'Faqirwali', 5),
(260, 'Faruka', 5),
(261, 'Fateh Jang', 5),
(262, 'Fatehpur', 5),
(263, 'Fazalpur', 5),
(264, 'Ferozwala', 5),
(265, 'Fort Abbas', 5),
(266, 'Garh Maharaja', 5),
(267, 'Ghakar', 5),
(268, 'Ghurgushti', 5),
(269, 'Gojra', 5),
(270, 'Gujar Khan', 5),
(271, 'Gujranwala', 5),
(272, 'Gujrat', 5),
(273, 'Hadali', 5),
(274, 'Hafizabad', 5),
(275, 'Harnoli', 5),
(276, 'Harunabad', 5),
(277, 'Hasan Abdal', 5),
(278, 'Hasilpur', 5),
(279, 'Haveli', 5),
(280, 'Hazro', 5),
(281, 'Hujra Shah Muqim', 5),
(282, 'Isa Khel', 5),
(283, 'Jahanian', 5),
(284, 'Jalalpur Bhattian', 5),
(285, 'Jalalpur Jattan', 5),
(286, 'Jalalpur Pirwala', 5),
(287, 'Jalla Jeem', 5),
(288, 'Jamke Chima', 5),
(289, 'Jampur', 5),
(290, 'Jand', 5),
(291, 'Jandanwala', 5),
(292, 'Jandiala Sherkhan', 5),
(293, 'Jaranwala', 5),
(294, 'Jatoi', 5),
(295, 'Jauharabad', 5),
(296, 'Jhang', 5),
(297, 'Jhawarian', 5),
(298, 'Jhelum', 5),
(299, 'Kabirwala', 5),
(300, 'Kahna Nau', 5),
(301, 'Kahror Pakka', 5),
(302, 'Kahuta', 5),
(303, 'Kalabagh', 5),
(304, 'Kalaswala', 5),
(305, 'Kaleke', 5),
(306, 'Kalur Kot', 5),
(307, 'Kamalia', 5),
(308, 'Kamar Mashani', 5),
(309, 'Kamir', 5),
(310, 'Kamoke', 5),
(311, 'Kamra', 5),
(312, 'Kanganpur', 5),
(313, 'Karampur', 5),
(314, 'Karor Lal Esan', 5),
(315, 'Kasur', 5),
(316, 'Khairpur Tamewali', 5),
(317, 'Khanewal', 5),
(318, 'Khangah Dogran', 5),
(319, 'Khangarh', 5),
(320, 'Khanpur', 5),
(321, 'Kharian', 5),
(322, 'Khewra', 5),
(323, 'Khundian', 5),
(324, 'Khurianwala', 5),
(325, 'Khushab', 5),
(326, 'Kot Abdul Malik', 5),
(327, 'Kot Addu', 5),
(328, 'Kot Mithan', 5),
(329, 'Kot Moman', 5),
(330, 'Kot Radha Kishan', 5),
(331, 'Kot Samaba', 5),
(332, 'Kotli Loharan', 5),
(333, 'Kundian', 5),
(334, 'Kunjah', 5),
(335, 'Lahore', 5),
(336, 'Lalamusa', 5),
(337, 'Lalian', 5),
(338, 'Liaqatabad', 5),
(339, 'Liaqatpur', 5),
(340, 'Lieah', 5),
(341, 'Liliani', 5),
(342, 'Lodhran', 5),
(343, 'Ludhewala Waraich', 5),
(344, 'Mailsi', 5),
(345, 'Makhdumpur', 5),
(346, 'Makhdumpur Rashid', 5),
(347, 'Malakwal', 5),
(348, 'Mamu Kanjan', 5),
(349, 'Mananwala Jodh Singh', 5),
(350, 'Mandi Bahauddin', 5),
(351, 'Mandi Sadiq Ganj', 5),
(352, 'Mangat', 5),
(353, 'Mangla', 5),
(354, 'Mankera', 5),
(355, 'Mian Channun', 5),
(356, 'Miani', 5),
(357, 'Mianwali', 5),
(358, 'Minchinabad', 5),
(359, 'Mitha Tiwana', 5),
(360, 'Multan', 5),
(361, 'Muridke', 5),
(362, 'Murree', 5),
(363, 'Mustafabad', 5),
(364, 'Muzaffargarh', 5),
(365, 'Nankana Sahib', 5),
(366, 'Narang', 5),
(367, 'Narowal', 5),
(368, 'Noorpur Thal', 5),
(369, 'Nowshera', 5),
(370, 'Nowshera Virkan', 5),
(371, 'Okara', 5),
(372, 'Pakpattan', 5),
(373, 'Pasrur', 5),
(374, 'Pattoki', 5),
(375, 'Phalia', 5),
(376, 'Phularwan', 5),
(377, 'Pind Dadan Khan', 5),
(378, 'Pindi Bhattian', 5),
(379, 'Pindi Gheb', 5),
(380, 'Pirmahal', 5),
(381, 'Qadirabad', 5),
(382, 'Qadirpur Ran', 5),
(383, 'Qila Disar Singh', 5),
(384, 'Qila Sobha Singh', 5),
(385, 'Quaidabad', 5),
(386, 'Rabwah', 5),
(387, 'Rahim Yar Khan', 5),
(388, 'Raiwind', 5),
(389, 'Raja Jang', 5),
(390, 'Rajanpur', 5),
(391, 'Rasulnagar', 5),
(392, 'Rawalpindi', 5),
(393, 'Renala Khurd', 5),
(394, 'Rojhan', 5),
(395, 'Saddar Gogera', 5),
(396, 'Sadiqabad', 5),
(397, 'Safdarabad', 5),
(398, 'Sahiwal', 5),
(399, 'Samasatta', 5),
(400, 'Sambrial', 5),
(401, 'Sammundri', 5),
(402, 'Sangala Hill', 5),
(403, 'Sanjwal', 5),
(404, 'Sarai Alamgir', 5),
(405, 'Sarai Sidhu', 5),
(406, 'Sargodha', 5),
(407, 'Shadiwal', 5),
(408, 'Shahkot', 5),
(409, 'Shahpur City', 5),
(410, 'Shahpur Saddar', 5),
(411, 'Shakargarh', 5),
(412, 'Sharqpur', 5),
(413, 'Shehr Sultan', 5),
(414, 'Shekhupura', 5),
(415, 'Shujaabad', 5),
(416, 'Sialkot', 5),
(417, 'Sillanwali', 5),
(418, 'Sodhra', 5),
(419, 'Sohawa', 5),
(420, 'Sukheke', 5),
(421, 'Talagang', 5),
(422, 'Tandlianwala', 5),
(423, 'Taunsa', 5),
(424, 'Taxila', 5),
(425, 'Tibba Sultanpur', 5),
(426, 'Toba Tek Singh', 5),
(427, 'Tulamba', 5),
(428, 'Uch', 5),
(429, 'Vihari', 5),
(430, 'Wah', 5),
(431, 'Warburton', 5),
(432, 'Wazirabad', 5),
(433, 'Yazman', 5),
(434, 'Zafarwal', 5),
(435, 'Zahir Pir', 5);

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
(1, '#000000', '2021-05-18 11:24:33', '2021-05-18 11:24:33'),
(2, '#ac3e3e', '2021-05-18 11:24:40', '2021-05-18 11:24:40'),
(3, '#b42d2d', '2021-05-18 11:24:46', '2021-05-18 11:24:46'),
(4, '#4b1fb2', '2021-05-18 11:24:57', '2021-05-18 11:24:57');

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
  `quantity` bigint(20) UNSIGNED DEFAULT NULL,
  `variant_sku_code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `colour_image_product_sizes`
--

INSERT INTO `colour_image_product_sizes` (`id`, `colour_id`, `product_id`, `size_id`, `image`, `quantity`, `variant_sku_code`, `created_at`, `updated_at`) VALUES
(11, 2, 9, 1, '16228097811568788430-1206740205d81cfce2b4423-60645169.png', 100, 'PHO_61201788-0', '2021-06-04 12:29:41', '2021-06-08 10:20:28'),
(12, 2, 9, 1, '1622809781images (1).png', 100, 'PHO_61201788-1', '2021-06-04 12:29:41', '2021-06-08 10:20:28'),
(13, 2, 9, 1, '1622809781images (2).jpg', 100, 'PHO_61201788-2', '2021-06-04 12:29:41', '2021-06-08 10:20:28');

-- --------------------------------------------------------

--
-- Table structure for table `contactuses`
--

CREATE TABLE `contactuses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contact` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contactuses`
--

INSERT INTO `contactuses` (`id`, `name`, `email`, `contact`, `message`, `status`, `created_at`, `updated_at`) VALUES
(2, 'abc', 'abc@gmail.com', '12345678911', 'ddfdf', '1', '2021-06-07 13:07:29', '2021-06-07 13:08:44');

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
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `area` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contact` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `messaging_service_no` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `messaging_service_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `social_media_name_1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `link_1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `social_media_name_2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `link_2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `name`, `city`, `area`, `contact`, `email`, `messaging_service_no`, `messaging_service_name`, `social_media_name_1`, `link_1`, `social_media_name_2`, `link_2`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Customer', 'Karachi', 'Gulshan', '03335465743', 'customer@example.com', NULL, NULL, NULL, NULL, NULL, NULL, 1, '2021-05-27 09:11:37', '2021-05-27 09:11:37');

-- --------------------------------------------------------

--
-- Table structure for table `customer_user`
--

CREATE TABLE `customer_user` (
  `customer_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `customer_user`
--

INSERT INTO `customer_user` (`customer_id`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 15, NULL, NULL);

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
  `deal_for` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `specific_deal_for` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `deals`
--

INSERT INTO `deals` (`id`, `deal`, `product_id`, `size_id`, `discount`, `start_date`, `end_date`, `deal_for`, `specific_deal_for`, `status`, `created_at`, `updated_at`) VALUES
(3, 'pack_of_two', 1, 1, 10, '2021-05-27 15:18:00', '2021-05-28 15:18:00', 'reseller', '4', 0, '2021-05-27 10:18:18', '2021-05-27 11:57:45');

-- --------------------------------------------------------

--
-- Table structure for table `delivery_charges`
--

CREATE TABLE `delivery_charges` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `city_id` int(11) NOT NULL,
  `delivery_charge` double(36,2) NOT NULL DEFAULT 250.00,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `delivery_charges`
--

INSERT INTO `delivery_charges` (`id`, `city_id`, `delivery_charge`, `created_at`, `updated_at`) VALUES
(1, 54, 250.00, '2021-06-01 10:42:13', '2021-06-01 10:42:13');

-- --------------------------------------------------------

--
-- Table structure for table `equity`
--

CREATE TABLE `equity` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `guid` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `amount` double(36,2) NOT NULL,
  `date` date DEFAULT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `equity`
--

INSERT INTO `equity` (`id`, `guid`, `name`, `amount`, `date`, `category_id`, `created_at`, `updated_at`) VALUES
(2, '47e2dae7-c0b3-4754-823c-beca8a60eaf5', 'Equity', 2333.00, '2021-06-08', 1, '2021-06-08 16:35:15', '2021-06-08 16:35:41');

-- --------------------------------------------------------

--
-- Table structure for table `expense`
--

CREATE TABLE `expense` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `guid` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `amount` double(36,2) NOT NULL,
  `date` date DEFAULT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
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
  `deal_for` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `specific_deal_for` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(1, 'all-pages', 'logo', 'logo.png', 1, '2021-05-19 11:18:07', '2021-05-31 08:42:27'),
(2, 'all-pages', 'address', 'Example Street 68, Mahattan,New York, USA', 1, '2021-05-19 11:19:38', '2021-05-19 11:19:43'),
(3, 'all-pages', 'phone', '12345678952', 1, '2021-05-19 11:19:38', '2021-05-19 11:19:46'),
(4, 'all-pages', 'email', 'Support@ovicsoft.com', 1, '2021-05-19 11:19:38', '2021-05-19 11:19:49'),
(5, 'all-pages', 'slider', 'slide1.jpg~Slider - 1~Slider -1 Sub Title', 1, '2021-05-19 11:20:43', '2021-05-19 11:20:59'),
(6, 'all-pages', 'slider', 'slide3.jpg~Slider - 2~Slider -2 Sub Title', 1, '2021-05-19 11:20:55', '2021-05-19 11:21:02'),
(7, 'home-page', 'banner-1', 'banner-slide1.jpg', 1, '2021-05-19 11:25:38', '2021-05-19 11:25:44'),
(8, 'home-page', 'banner-2', 'banner-slide2.jpg', 1, '2021-05-19 11:25:38', '2021-05-19 11:25:48'),
(13, 'home-page', 'service', 'FREE SHIPPING~On order over $200~fa fa-plane', 1, '2021-05-19 11:27:36', '2021-05-19 11:27:40'),
(14, 'home-page', 'service', '30-DAY RETURN~Moneyback guarantee~fa fa-clock', 1, '2021-05-19 11:27:54', '2021-05-19 11:27:59'),
(15, 'home-page', 'service', '24/7 SUPPORT~Online consultations~fas fa-phone-alt', 1, '2021-05-19 11:28:13', '2021-05-19 11:28:17'),
(17, 'home-page', 'service', 'SAFE SHOPPING~Safe Shopping Guarantee~fas fa-umbrella', 1, '2021-05-31 08:53:35', '2021-05-31 08:53:57');

-- --------------------------------------------------------

--
-- Table structure for table `income`
--

CREATE TABLE `income` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `guid` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `amount` double(36,2) NOT NULL,
  `date` date DEFAULT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `liabilities`
--

CREATE TABLE `liabilities` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `guid` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `amount` double(36,2) NOT NULL,
  `date` date DEFAULT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `liabilities`
--

INSERT INTO `liabilities` (`id`, `guid`, `name`, `amount`, `date`, `category_id`, `created_at`, `updated_at`) VALUES
(2, 'b9af5ce2-edec-483b-9848-307b6731448b', 'Liabilities', 444.00, '2021-06-08', 1, '2021-06-08 16:31:07', '2021-06-08 16:31:10');

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
(16, '2021_03_19_110016_create_home_settings_table', 1),
(17, '2021_03_24_164037_create_couriers_table', 1),
(18, '2021_04_06_092618_create_block_floor_products_table', 1),
(19, '2021_04_11_104148_create_permission_tables', 1),
(20, '2021_04_14_113300_create_reviews_table', 1),
(21, '2021_04_14_113930_create_review_replies_table', 1),
(22, '2021_04_20_085500_create_carts_table', 1),
(23, '2021_04_22_195942_create_orders_table', 1),
(24, '2021_04_23_075419_create_billings_table', 1),
(25, '2021_04_29_103029_create_deals_table', 1),
(26, '2021_05_02_184217_create_general_discounts_table', 1),
(27, '2021_05_07_092806_create_delivery_charges_table', 1),
(28, '2021_05_07_092807_create_offers_table', 1),
(29, '2021_05_11_160419_create_sale_centers_table', 1),
(30, '2021_05_11_160420_create_riders_table', 1),
(31, '2021_05_11_160421_create_suppliers_table', 1),
(32, '2021_05_11_160422_create_resellers_table', 1),
(33, '2021_05_11_160424_create_customers_table', 1),
(34, '2021_05_12_162134_create_customer_users_table', 1),
(35, '2021_05_11_160425_create_resellers_table', 2),
(36, '2021_05_17_143127_create_reseller_users_table', 3),
(37, '2021_05_11_160426_create_resellers_table', 4),
(38, '2021_05_17_143128_create_reseller_users_table', 4),
(39, '2021_05_11_160427_create_sale_centers_table', 5),
(40, '2021_05_17_160147_create_sale_center_users_table', 6),
(41, '2021_05_11_160429_create_suppliers_table', 7),
(42, '2021_05_11_160430_create_riders_table', 8),
(43, '2021_05_17_215937_create_rider_users_table', 9),
(44, '2021_05_20_153637_create_reseller_carts_table', 10),
(45, '2021_04_29_103030_create_deals_table', 11),
(47, '2021_05_25_211241_create_catalogues_table', 12),
(48, '2021_05_25_211242_create_catalogues_table', 13),
(49, '2021_05_25_232418_create_catalogue_products_table', 13),
(50, '2021_05_02_184218_create_general_discounts_table', 14),
(51, '2021_05_07_092808_create_offers_table', 14),
(53, '2021_04_22_195943_create_orders_table', 15),
(54, '2021_04_22_195944_create_orders_table', 16),
(55, '2021_04_22_195945_create_orders_table', 17),
(56, '2021_06_01_153928_create_sale_center_orders_table', 18),
(57, '2021_03_02_064732_create_products_table', 19),
(58, '2021_03_09_114540_create_colour_image_product_sizes_table', 19),
(59, '2021_03_02_094321_create_batches_products_table', 20),
(60, '2021_03_02_094341_create_categories_products_table', 20),
(61, '2021_05_31_142651_create_abouts_table', 21),
(62, '2021_06_02_020957_create_contactuses_table', 22),
(63, '2021_04_22_195946_create_orders_table', 23),
(64, '2021_06_07_185353_create_product_for_sale_centers_table', 24),
(65, '2021_02_15_085316_create_assets_table', 25);

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
(1, 'App\\Models\\User', 1),
(1, 'App\\Models\\User', 15),
(2, 'App\\Models\\User', 2),
(3, 'App\\Models\\User', 3),
(4, 'App\\Models\\User', 4),
(4, 'App\\Models\\User', 5),
(4, 'App\\Models\\User', 14),
(5, 'App\\Models\\User', 7),
(5, 'App\\Models\\User', 16),
(5, 'App\\Models\\User', 19),
(6, 'App\\Models\\User', 9),
(6, 'App\\Models\\User', 10),
(6, 'App\\Models\\User', 11),
(6, 'App\\Models\\User', 12),
(6, 'App\\Models\\User', 13);

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
  `no_of_times` int(11) DEFAULT NULL,
  `deal_for` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `specific_deal_for` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
  `order_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `discount` double(36,2) NOT NULL,
  `sub_total_amount` double(36,2) NOT NULL,
  `delivery_charges` double(36,2) NOT NULL,
  `total_amount` double(36,2) NOT NULL,
  `n_status` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(1, 'create users', 'web', '2021-05-17 09:24:12', '2021-05-17 09:24:12'),
(2, 'show users', 'web', '2021-05-17 09:24:12', '2021-05-17 09:24:12'),
(3, 'edit users', 'web', '2021-05-17 09:24:12', '2021-05-17 09:24:12'),
(4, 'delete users', 'web', '2021-05-17 09:24:12', '2021-05-17 09:24:12'),
(5, 'users status', 'web', '2021-05-17 09:24:12', '2021-05-17 09:24:12'),
(6, 'create roles', 'web', '2021-05-17 09:24:12', '2021-05-17 09:24:12'),
(7, 'show roles', 'web', '2021-05-17 09:24:12', '2021-05-17 09:24:12'),
(8, 'edit roles', 'web', '2021-05-17 09:24:12', '2021-05-17 09:24:12'),
(9, 'delete roles', 'web', '2021-05-17 09:24:12', '2021-05-17 09:24:12'),
(10, 'create categories', 'web', '2021-05-17 09:24:12', '2021-05-17 09:24:12'),
(11, 'show categories', 'web', '2021-05-17 09:24:12', '2021-05-17 09:24:12'),
(12, 'edit categories', 'web', '2021-05-17 09:24:12', '2021-05-17 09:24:12'),
(13, 'delete categories', 'web', '2021-05-17 09:24:12', '2021-05-17 09:24:12'),
(14, 'create products', 'web', '2021-05-17 09:24:12', '2021-05-17 09:24:12'),
(15, 'show products', 'web', '2021-05-17 09:24:12', '2021-05-17 09:24:12'),
(16, 'edit products', 'web', '2021-05-17 09:24:12', '2021-05-17 09:24:12'),
(17, 'delete products', 'web', '2021-05-17 09:24:12', '2021-05-17 09:24:12'),
(18, 'Products status', 'web', '2021-05-17 09:24:13', '2021-05-17 09:24:13'),
(19, 'create colours', 'web', '2021-05-17 09:24:13', '2021-05-17 09:24:13'),
(20, 'show colours', 'web', '2021-05-17 09:24:13', '2021-05-17 09:24:13'),
(21, 'edit colours', 'web', '2021-05-17 09:24:13', '2021-05-17 09:24:13'),
(22, 'delete colours', 'web', '2021-05-17 09:24:13', '2021-05-17 09:24:13'),
(23, 'create sizes', 'web', '2021-05-17 09:24:13', '2021-05-17 09:24:13'),
(24, 'show sizes', 'web', '2021-05-17 09:24:13', '2021-05-17 09:24:13'),
(25, 'edit sizes', 'web', '2021-05-17 09:24:13', '2021-05-17 09:24:13'),
(26, 'delete sizes', 'web', '2021-05-17 09:24:13', '2021-05-17 09:24:13'),
(27, 'create batches', 'web', '2021-05-17 09:24:13', '2021-05-17 09:24:13'),
(28, 'show batches', 'web', '2021-05-17 09:24:13', '2021-05-17 09:24:13'),
(29, 'edit batches', 'web', '2021-05-17 09:24:13', '2021-05-17 09:24:13'),
(30, 'delete batches', 'web', '2021-05-17 09:24:13', '2021-05-17 09:24:13'),
(31, 'view batches', 'web', '2021-05-17 09:24:13', '2021-05-17 09:24:13'),
(32, 'create sale centers', 'web', '2021-05-17 09:24:13', '2021-05-17 09:24:13'),
(33, 'show sale centers', 'web', '2021-05-17 09:24:13', '2021-05-17 09:24:13'),
(34, 'edit sale centers', 'web', '2021-05-17 09:24:13', '2021-05-17 09:24:13'),
(35, 'delete sale centers', 'web', '2021-05-17 09:24:13', '2021-05-17 09:24:13'),
(36, 'create riders', 'web', '2021-05-17 09:24:13', '2021-05-17 09:24:13'),
(37, 'show riders', 'web', '2021-05-17 09:24:13', '2021-05-17 09:24:13'),
(38, 'edit riders', 'web', '2021-05-17 09:24:13', '2021-05-17 09:24:13'),
(39, 'delete riders', 'web', '2021-05-17 09:24:13', '2021-05-17 09:24:13'),
(40, 'create suppliers', 'web', '2021-05-17 09:24:13', '2021-05-17 09:24:13'),
(41, 'show suppliers', 'web', '2021-05-17 09:24:13', '2021-05-17 09:24:13'),
(42, 'edit suppliers', 'web', '2021-05-17 09:24:13', '2021-05-17 09:24:13'),
(43, 'delete suppliers', 'web', '2021-05-17 09:24:13', '2021-05-17 09:24:13'),
(44, 'create logos', 'web', '2021-05-17 09:24:13', '2021-05-17 09:24:13'),
(45, 'show logos', 'web', '2021-05-17 09:24:13', '2021-05-17 09:24:13'),
(46, 'edit logos', 'web', '2021-05-17 09:24:13', '2021-05-17 09:24:13'),
(47, 'delete logos', 'web', '2021-05-17 09:24:13', '2021-05-17 09:24:13'),
(48, 'logos status', 'web', '2021-05-17 09:24:13', '2021-05-17 09:24:13'),
(49, 'create ape', 'web', '2021-05-17 09:24:13', '2021-05-17 09:24:13'),
(50, 'show ape', 'web', '2021-05-17 09:24:13', '2021-05-17 09:24:13'),
(51, 'edit ape', 'web', '2021-05-17 09:24:13', '2021-05-17 09:24:13'),
(52, 'delete ape', 'web', '2021-05-17 09:24:14', '2021-05-17 09:24:14'),
(53, 'ape status', 'web', '2021-05-17 09:24:14', '2021-05-17 09:24:14'),
(54, 'create sliders', 'web', '2021-05-17 09:24:14', '2021-05-17 09:24:14'),
(55, 'show sliders', 'web', '2021-05-17 09:24:14', '2021-05-17 09:24:14'),
(56, 'edit sliders', 'web', '2021-05-17 09:24:14', '2021-05-17 09:24:14'),
(57, 'delete sliders', 'web', '2021-05-17 09:24:14', '2021-05-17 09:24:14'),
(58, 'sliders status', 'web', '2021-05-17 09:24:14', '2021-05-17 09:24:14'),
(59, 'create banners', 'web', '2021-05-17 09:24:14', '2021-05-17 09:24:14'),
(60, 'show banners', 'web', '2021-05-17 09:24:14', '2021-05-17 09:24:14'),
(61, 'edit banners', 'web', '2021-05-17 09:24:14', '2021-05-17 09:24:14'),
(62, 'delete banners', 'web', '2021-05-17 09:24:14', '2021-05-17 09:24:14'),
(63, 'banners status', 'web', '2021-05-17 09:24:14', '2021-05-17 09:24:14'),
(64, 'create services', 'web', '2021-05-17 09:24:14', '2021-05-17 09:24:14'),
(65, 'show services', 'web', '2021-05-17 09:24:14', '2021-05-17 09:24:14'),
(66, 'edit services', 'web', '2021-05-17 09:24:14', '2021-05-17 09:24:14'),
(67, 'delete services', 'web', '2021-05-17 09:24:14', '2021-05-17 09:24:14'),
(68, 'services status', 'web', '2021-05-17 09:24:14', '2021-05-17 09:24:14'),
(69, 'create floors', 'web', '2021-05-17 09:24:14', '2021-05-17 09:24:14'),
(70, 'show floors', 'web', '2021-05-17 09:24:14', '2021-05-17 09:24:14'),
(71, 'edit floors', 'web', '2021-05-17 09:24:14', '2021-05-17 09:24:14'),
(72, 'delete floors', 'web', '2021-05-17 09:24:14', '2021-05-17 09:24:14'),
(73, 'floors status', 'web', '2021-05-17 09:24:14', '2021-05-17 09:24:14'),
(74, 'create couriers', 'web', '2021-05-17 09:24:14', '2021-05-17 09:24:14'),
(75, 'show couriers', 'web', '2021-05-17 09:24:14', '2021-05-17 09:24:14'),
(76, 'edit couriers', 'web', '2021-05-17 09:24:14', '2021-05-17 09:24:14'),
(77, 'delete couriers', 'web', '2021-05-17 09:24:14', '2021-05-17 09:24:14'),
(78, 'review reply', 'web', '2021-05-17 09:24:14', '2021-05-17 09:24:14'),
(79, 'show orders', 'web', '2021-05-17 09:24:14', '2021-05-17 09:24:14'),
(80, 'edit orders', 'web', '2021-05-17 09:24:14', '2021-05-17 09:24:14'),
(81, 'delete orders', 'web', '2021-05-17 09:24:14', '2021-05-17 09:24:14'),
(82, 'view orders', 'web', '2021-05-17 09:24:14', '2021-05-17 09:24:14'),
(83, 'create deals', 'web', '2021-05-17 09:24:14', '2021-05-17 09:24:14'),
(84, 'show deals', 'web', '2021-05-17 09:24:14', '2021-05-17 09:24:14'),
(85, 'edit deals', 'web', '2021-05-17 09:24:14', '2021-05-17 09:24:14'),
(86, 'delete deals', 'web', '2021-05-17 09:24:14', '2021-05-17 09:24:14'),
(87, 'deals status', 'web', '2021-05-17 09:24:14', '2021-05-17 09:24:14');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL,
  `product_sku_code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `owner` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `vendor` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `video_link` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product_weight` bigint(20) UNSIGNED NOT NULL,
  `price` double(36,2) NOT NULL,
  `purchase_cost` double(36,2) DEFAULT NULL,
  `purchase_discount` double(36,2) DEFAULT NULL,
  `purchase_discount_percentage` bigint(20) DEFAULT NULL,
  `labour_cost` double(36,2) DEFAULT NULL,
  `transportation_cost` double(36,2) DEFAULT NULL,
  `list_price_for_salesman` double(36,2) DEFAULT NULL,
  `commission_amount` double(36,2) DEFAULT NULL,
  `commission` bigint(20) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `slug`, `status`, `product_sku_code`, `description`, `owner`, `vendor`, `video_link`, `product_weight`, `price`, `purchase_cost`, `purchase_discount`, `purchase_discount_percentage`, `labour_cost`, `transportation_cost`, `list_price_for_salesman`, `commission_amount`, `commission`, `created_at`, `updated_at`) VALUES
(9, 'Phone', 'phone', 1, 'PHO_61201788', '<p>dfdfdf</p>', NULL, NULL, NULL, 1, 102.00, 50.00, NULL, NULL, NULL, NULL, 90.00, 5.10, 5, '2021-06-04 11:48:45', '2021-06-04 11:48:45');

-- --------------------------------------------------------

--
-- Table structure for table `product_for_sale_centers`
--

CREATE TABLE `product_for_sale_centers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` int(11) NOT NULL,
  `inventroy` int(11) NOT NULL,
  `batch_id` int(11) DEFAULT NULL,
  `quantity` bigint(20) UNSIGNED DEFAULT NULL,
  `salecenter_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product_for_sale_centers`
--

INSERT INTO `product_for_sale_centers` (`id`, `product_id`, `inventroy`, `batch_id`, `quantity`, `salecenter_id`, `created_at`, `updated_at`) VALUES
(5, 9, 0, 1, 20, 3, '2021-06-08 10:16:12', '2021-06-08 10:19:11'),
(6, 9, 0, 1, 80, 5, '2021-06-08 10:19:39', '2021-06-08 10:20:28');

-- --------------------------------------------------------

--
-- Table structure for table `resellers`
--

CREATE TABLE `resellers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `area` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `contact` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `messaging_service_no` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `messaging_service_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cnic_no` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cnic_front` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `cnic_back` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `social_media_name_1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `link_1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `social_media_name_2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `link_2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
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

INSERT INTO `resellers` (`id`, `name`, `email`, `city`, `area`, `address`, `contact`, `messaging_service_no`, `messaging_service_name`, `cnic_no`, `cnic_front`, `cnic_back`, `social_media_name_1`, `link_1`, `social_media_name_2`, `link_2`, `bank_account_title`, `bank_name`, `bank_branch`, `account_or_iban_no`, `money_transfer_no`, `money_transfer_service`, `status`, `created_at`, `updated_at`) VALUES
(4, 'reseller', 'reseller@example.com', 'Karachi', 'Ghulshan', 'Ghulshan Iqbal, Karachi', '+923345652528', NULL, NULL, '98858658585852', 'photo-wide-3.jpg', 'photo-wide-4.jpg', NULL, NULL, NULL, NULL, 'Reseller', 'Meezan', 'Gulshan', '02154', '12154', 'Ufone', 1, '2021-05-19 11:43:59', '2021-05-19 11:43:59');

-- --------------------------------------------------------

--
-- Table structure for table `reseller_carts`
--

CREATE TABLE `reseller_carts` (
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
-- Dumping data for table `reseller_carts`
--

INSERT INTO `reseller_carts` (`id`, `quantity`, `size_id`, `colour_id`, `product_id`, `user_id`, `created_at`, `updated_at`) VALUES
(10, 10, 1, 2, 9, 14, '2021-06-07 11:58:56', '2021-06-07 12:02:08');

-- --------------------------------------------------------

--
-- Table structure for table `reseller_user`
--

CREATE TABLE `reseller_user` (
  `reseller_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `reseller_user`
--

INSERT INTO `reseller_user` (`reseller_id`, `user_id`, `created_at`, `updated_at`) VALUES
(4, 14, NULL, NULL);

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

--
-- Dumping data for table `reviews`
--

INSERT INTO `reviews` (`id`, `user_id`, `product_id`, `comment`, `rating`, `created_at`, `updated_at`) VALUES
(1, 3, 9, 'customer - review', 5, '2021-06-02 10:55:08', '2021-06-02 10:55:08');

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

--
-- Dumping data for table `review_replies`
--

INSERT INTO `review_replies` (`id`, `user_id`, `review_id`, `reply`, `created_at`, `updated_at`) VALUES
(1, 3, 1, 'admin first reply', '2021-06-02 10:55:36', '2021-06-02 10:55:36'),
(2, 3, 1, 'admin second reply', '2021-06-02 10:55:54', '2021-06-02 10:55:54');

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
  `cnic_front` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `cnic_back` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `messaging_service_no` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `messaging_service_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
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

--
-- Dumping data for table `riders`
--

INSERT INTO `riders` (`id`, `name`, `address`, `city`, `area`, `contact`, `cnic_no`, `cnic_front`, `cnic_back`, `messaging_service_no`, `messaging_service_name`, `email`, `bank_account_title`, `bank_name`, `bank_branch`, `account_or_iban_no`, `money_transfer_no`, `money_transfer_service`, `status`, `created_at`, `updated_at`) VALUES
(5, 'Hameed', 'Gulshan 13 - c', 'Karachi', 'Gulshan', '02225852520', '02236589652365', '7th Avenue Islamabad.jpg', 'A great spot for a beautiful morning walk under these colourful trees at Shalman Park, in Peshawar, captured by @imrankw.jpg', NULL, NULL, 'hameed@gmail.com', 'Hameed', 'Meezan', 'Gulshan', '5455454554', '4545', 'Ufone', 1, '2021-05-17 18:03:00', '2021-05-17 18:03:00');

-- --------------------------------------------------------

--
-- Table structure for table `rider_user`
--

CREATE TABLE `rider_user` (
  `rider_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `rider_user`
--

INSERT INTO `rider_user` (`rider_id`, `user_id`, `created_at`, `updated_at`) VALUES
(5, 13, NULL, NULL);

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
(1, 'customer', 'web', '2021-05-17 09:24:14', '2021-05-17 09:24:14'),
(2, 'admin', 'web', '2021-05-17 09:24:14', '2021-05-17 09:24:14'),
(3, 'super-admin', 'web', '2021-05-17 09:24:14', '2021-05-17 09:24:14'),
(4, 'reseller', 'web', '2021-05-17 10:03:25', '2021-05-17 10:03:25'),
(5, 'salecenter', 'web', '2021-05-17 11:28:48', '2021-05-17 11:28:48'),
(6, 'rider', 'web', '2021-05-17 17:28:44', '2021-05-17 17:28:44');

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
(1, 3),
(2, 2),
(2, 3),
(3, 3),
(4, 3),
(5, 3),
(6, 3),
(7, 3),
(8, 3),
(9, 3),
(10, 3),
(11, 3),
(12, 3),
(13, 3),
(14, 3),
(15, 3),
(16, 3),
(17, 3),
(18, 3),
(19, 3),
(20, 3),
(21, 3),
(22, 3),
(23, 3),
(24, 3),
(25, 3),
(26, 3),
(27, 3),
(28, 3),
(29, 3),
(30, 3),
(31, 3),
(32, 3),
(33, 3),
(34, 3),
(35, 3),
(36, 3),
(37, 3),
(38, 3),
(39, 3),
(40, 3),
(41, 3),
(42, 3),
(43, 3),
(44, 3),
(45, 3),
(46, 3),
(47, 3),
(48, 3),
(49, 3),
(50, 3),
(51, 3),
(52, 3),
(53, 3),
(54, 3),
(55, 3),
(56, 3),
(57, 3),
(58, 3),
(59, 3),
(60, 2),
(60, 3),
(61, 3),
(62, 3),
(63, 3),
(64, 3),
(65, 2),
(65, 3),
(66, 3),
(67, 3),
(68, 3),
(69, 3),
(70, 2),
(70, 3),
(71, 3),
(72, 3),
(73, 3),
(74, 3),
(75, 2),
(75, 3),
(76, 3),
(77, 3),
(78, 3),
(79, 3),
(80, 3),
(81, 3),
(82, 3),
(83, 3),
(84, 3),
(85, 3),
(86, 3),
(87, 3);

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
  `cnic_no` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cnic_front` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `cnic_back` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `messaging_service_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `messaging_service_no` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `social_media_name_1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `social_media_name_2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `social_media_name_3` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `link_1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `link_2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `link_3` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
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
-- Dumping data for table `sale_centers`
--

INSERT INTO `sale_centers` (`id`, `name`, `owner_name`, `address`, `city`, `area`, `contact`, `cnic_no`, `cnic_front`, `cnic_back`, `messaging_service_name`, `messaging_service_no`, `email`, `social_media_name_1`, `social_media_name_2`, `social_media_name_3`, `link_1`, `link_2`, `link_3`, `bank_account_title`, `bank_name`, `bank_branch`, `account_or_iban_no`, `money_transfer_no`, `money_transfer_service`, `status`, `created_at`, `updated_at`) VALUES
(3, 'Sale Center', 'Ahmed', 'Gulshan Iqbal 13-C Karachi', 'Karachi', 'Gulshan', '03335252546', '58896589652365', 'mi_gaming_laptop_2019_image_1565003115644.jpg', 'unnamed.jpg', NULL, '123', 'salecenter@example.com', NULL, NULL, NULL, NULL, NULL, NULL, 'Sale Center', 'Meezan', 'Ghulshan', '123456789', '455512', 'EasyPaisa', 1, '2021-05-28 11:34:49', '2021-05-28 11:34:49'),
(5, 'Sale Center - 2', 'Aslam', 'Gulshan Iqbal 13-C Karachi', 'Karachi', 'Gulshan', '03335252565', '58896589652876', 'mi_gaming_laptop_2019_image_1565003115644.jpg', 'unnamed.jpg', NULL, '123', 'salecenter2@example.com', NULL, NULL, NULL, NULL, NULL, NULL, 'Sale Center', 'Meezan', 'Ghulshan', '123456789', '455512', 'EasyPaisa', 1, '2021-05-28 11:34:49', '2021-05-28 11:34:49');

-- --------------------------------------------------------

--
-- Table structure for table `sale_center_orders`
--

CREATE TABLE `sale_center_orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `salecenter_id` int(11) NOT NULL,
  `order_number` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_id` int(11) NOT NULL,
  `quantity` bigint(20) UNSIGNED NOT NULL,
  `colour_id` int(11) NOT NULL,
  `size_id` int(11) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sale_center_orders`
--

INSERT INTO `sale_center_orders` (`id`, `salecenter_id`, `order_number`, `product_id`, `quantity`, `colour_id`, `size_id`, `status`, `created_at`, `updated_at`) VALUES
(3, 3, 'KXJ5g', 1, 3, 1, 1, 2, '2021-06-02 10:44:17', '2021-06-03 07:04:56'),
(4, 5, 'oORum', 1, 6, 1, 1, 1, '2021-06-02 11:23:24', '2021-06-02 12:27:43'),
(5, 3, 'oORum', 2, 3, 4, 1, 1, '2021-06-02 12:27:43', '2021-06-02 12:29:00');

-- --------------------------------------------------------

--
-- Table structure for table `sale_center_user`
--

CREATE TABLE `sale_center_user` (
  `sale_center_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sale_center_user`
--

INSERT INTO `sale_center_user` (`sale_center_id`, `user_id`, `created_at`, `updated_at`) VALUES
(3, 16, NULL, NULL),
(5, 19, NULL, NULL);

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
(1, 'S', 's', '2021-05-18 11:23:55', '2021-05-18 11:23:55'),
(2, 'M', 'm', '2021-05-18 11:24:00', '2021-05-18 11:24:00'),
(3, 'L', 'l', '2021-05-18 11:24:06', '2021-05-18 11:24:06'),
(4, 'Xl', 'xl', '2021-05-18 11:24:12', '2021-05-18 11:24:12');

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
  `cnic_front` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `cnic_back` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `messaging_service_no` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `messaging_service_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `social_media_name_1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `link_1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `social_media_name_2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `link_2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
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
-- Dumping data for table `suppliers`
--

INSERT INTO `suppliers` (`id`, `name`, `business_name`, `address`, `city`, `area`, `contact`, `cnic_no`, `cnic_front`, `cnic_back`, `messaging_service_no`, `messaging_service_name`, `email`, `social_media_name_1`, `link_1`, `social_media_name_2`, `link_2`, `bank_account_title`, `bank_name`, `bank_branch`, `account_or_iban_no`, `money_transfer_no`, `money_transfer_service`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Aslam', 'Aslam Cloths', 'Gulshan Iqbal 13-C Karachi', 'Karachi', 'gulshan', '02221252254', '02332336562356', 'download.jpg', 'EEEEEEEEEEE.jpg', NULL, NULL, 'aslam@gmail.com', NULL, NULL, NULL, NULL, 'Aslam', 'Meezan', 'gulshan', '021', '542', 'Ufone', 1, '2021-05-17 12:15:25', '2021-05-17 12:15:25');

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
(1, 'user', 'user@example.com', NULL, '$2y$10$sTlDcebkJQJ0hTINMqx9VeQFjcAa.IARuRmCcLH3buz9TRXcQoAUm', 'default-1.jpg', '12345', 1, NULL, '2021-05-17 09:24:14', '2021-05-17 09:24:14'),
(2, 'admin', 'admin@example.com', NULL, '$2y$10$Vyjll..ji9i0Afre0kYEUu7V89l2m69/krghDhHLjr.GN1MP.8Prm', 'default-2.jpg', '12345', 1, NULL, '2021-05-17 09:24:14', '2021-05-17 09:24:14'),
(3, 'super admin', 'superadmin@example.com', NULL, '$2y$10$jnXhHuryyAhBsG/HGvxjxuxJNoQzaXAwPdf9EbNAC.lLzVkYAX47S', 'default-3.jpg', '12345', 1, NULL, '2021-05-17 09:24:15', '2021-05-17 09:24:15'),
(4, 'Ahmed', 'ahmed@gmail.com', NULL, '$2y$10$dieKLla03pEc5mx3s3CgS.12i2d0soORXyiVpmmmkMn4VuKLAeFtO', NULL, '12345', 1, NULL, '2021-05-17 10:22:31', '2021-05-17 10:22:31'),
(5, 'Ahmed', 'ahmed1@gmail.com', NULL, '$2y$10$z1pCJYgeD5yVCaeh7PUBK.Iuv3aWCo8w7BFdqea/VaGUDqQd04E/C', NULL, '12345', 1, NULL, '2021-05-17 10:25:06', '2021-05-17 10:25:06'),
(7, 'Gulshan', 'ahmed5@gmail.com', NULL, '$2y$10$wXupEqDdSgtG4IhUrkR1eesvWyz9GbmMo8BnqrzAueXxu/cdcLOF.', NULL, '12345', 1, NULL, '2021-05-17 11:34:52', '2021-05-17 11:34:52'),
(13, 'Hameed', 'hameed@gmail.com', NULL, '$2y$10$bV1oG9BczjmSl1Cx1vAcSuIUqEVFVuMZgR64PbC6Ls77i1urnVVpK', NULL, '12345', 1, NULL, '2021-05-17 18:03:00', '2021-05-17 18:03:00'),
(14, 'reseller', 'reseller@example.com', NULL, '$2y$10$.Ujx5zqvGuL602sSyG8mLOu8TQc74UWQ1TBsG61ypNIVoEc.C2SzO', NULL, '12345', 0, NULL, '2021-05-19 11:43:59', '2021-05-28 12:02:43'),
(15, 'Customer', 'customer@example.com', NULL, '$2y$10$SydSMnNLZwMNywghF5GrlOxS3LdfVhb5dgjgApGqVylYQLKnBlW06', NULL, '12345', 1, NULL, '2021-05-27 09:11:37', '2021-05-27 09:11:37'),
(16, 'Sale Center', 'salecenter@example.com', NULL, '$2y$10$jbsycyAU2uKnPAj2zZ0EcOUVcGyKbQ0RyVaEGQblIX2hiXKzkyyqe', NULL, '12345', 0, NULL, '2021-05-28 11:34:50', '2021-05-28 11:34:50'),
(19, 'Sale Center - 2', 'salecenter2@example.com', NULL, '$2y$10$jQ/iVDkZlpGGvlkuZENoouFiNotmiRNuBC4VWS.BT0QNGHCkg23fy', NULL, '12345', 0, NULL, '2021-06-02 07:55:40', '2021-06-02 07:55:40');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `abouts`
--
ALTER TABLE `abouts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `assets`
--
ALTER TABLE `assets`
  ADD PRIMARY KEY (`id`),
  ADD KEY `assets_category_id_foreign` (`category_id`);

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
-- Indexes for table `catalogues`
--
ALTER TABLE `catalogues`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `catalogue_products`
--
ALTER TABLE `catalogue_products`
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
-- Indexes for table `contactuses`
--
ALTER TABLE `contactuses`
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
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customer_user`
--
ALTER TABLE `customer_user`
  ADD PRIMARY KEY (`customer_id`,`user_id`),
  ADD KEY `customer_user_user_id_foreign` (`user_id`);

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
-- Indexes for table `equity`
--
ALTER TABLE `equity`
  ADD PRIMARY KEY (`id`),
  ADD KEY `equity_category_id_foreign` (`category_id`);

--
-- Indexes for table `expense`
--
ALTER TABLE `expense`
  ADD PRIMARY KEY (`id`),
  ADD KEY `expense_category_id_foreign` (`category_id`);

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
-- Indexes for table `income`
--
ALTER TABLE `income`
  ADD PRIMARY KEY (`id`),
  ADD KEY `income_category_id_foreign` (`category_id`);

--
-- Indexes for table `liabilities`
--
ALTER TABLE `liabilities`
  ADD PRIMARY KEY (`id`),
  ADD KEY `liabilities_category_id_foreign` (`category_id`);

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
-- Indexes for table `product_for_sale_centers`
--
ALTER TABLE `product_for_sale_centers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `resellers`
--
ALTER TABLE `resellers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reseller_carts`
--
ALTER TABLE `reseller_carts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reseller_user`
--
ALTER TABLE `reseller_user`
  ADD PRIMARY KEY (`reseller_id`,`user_id`),
  ADD KEY `reseller_user_user_id_foreign` (`user_id`);

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
-- Indexes for table `rider_user`
--
ALTER TABLE `rider_user`
  ADD PRIMARY KEY (`rider_id`,`user_id`),
  ADD KEY `rider_user_user_id_foreign` (`user_id`);

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
-- Indexes for table `sale_center_orders`
--
ALTER TABLE `sale_center_orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sale_center_user`
--
ALTER TABLE `sale_center_user`
  ADD PRIMARY KEY (`sale_center_id`,`user_id`),
  ADD KEY `sale_center_user_user_id_foreign` (`user_id`);

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
-- AUTO_INCREMENT for table `abouts`
--
ALTER TABLE `abouts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `assets`
--
ALTER TABLE `assets`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `batches`
--
ALTER TABLE `batches`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `billings`
--
ALTER TABLE `billings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `block_floor_products`
--
ALTER TABLE `block_floor_products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `carts`
--
ALTER TABLE `carts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `catalogues`
--
ALTER TABLE `catalogues`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `catalogue_products`
--
ALTER TABLE `catalogue_products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `cities`
--
ALTER TABLE `cities`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=436;

--
-- AUTO_INCREMENT for table `colours`
--
ALTER TABLE `colours`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `colour_image_product_sizes`
--
ALTER TABLE `colour_image_product_sizes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `contactuses`
--
ALTER TABLE `contactuses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

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
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `deals`
--
ALTER TABLE `deals`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `delivery_charges`
--
ALTER TABLE `delivery_charges`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `equity`
--
ALTER TABLE `equity`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `expense`
--
ALTER TABLE `expense`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `home_settings`
--
ALTER TABLE `home_settings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `income`
--
ALTER TABLE `income`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `liabilities`
--
ALTER TABLE `liabilities`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;

--
-- AUTO_INCREMENT for table `offers`
--
ALTER TABLE `offers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=88;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `product_for_sale_centers`
--
ALTER TABLE `product_for_sale_centers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `resellers`
--
ALTER TABLE `resellers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `reseller_carts`
--
ALTER TABLE `reseller_carts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `reviews`
--
ALTER TABLE `reviews`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `review_replies`
--
ALTER TABLE `review_replies`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `riders`
--
ALTER TABLE `riders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `sale_centers`
--
ALTER TABLE `sale_centers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `sale_center_orders`
--
ALTER TABLE `sale_center_orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `assets`
--
ALTER TABLE `assets`
  ADD CONSTRAINT `assets_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

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
-- Constraints for table `customer_user`
--
ALTER TABLE `customer_user`
  ADD CONSTRAINT `customer_user_customer_id_foreign` FOREIGN KEY (`customer_id`) REFERENCES `customers` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `customer_user_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `equity`
--
ALTER TABLE `equity`
  ADD CONSTRAINT `equity_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `expense`
--
ALTER TABLE `expense`
  ADD CONSTRAINT `expense_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `income`
--
ALTER TABLE `income`
  ADD CONSTRAINT `income_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `liabilities`
--
ALTER TABLE `liabilities`
  ADD CONSTRAINT `liabilities_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

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
-- Constraints for table `reseller_user`
--
ALTER TABLE `reseller_user`
  ADD CONSTRAINT `reseller_user_reseller_id_foreign` FOREIGN KEY (`reseller_id`) REFERENCES `resellers` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `reseller_user_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `rider_user`
--
ALTER TABLE `rider_user`
  ADD CONSTRAINT `rider_user_rider_id_foreign` FOREIGN KEY (`rider_id`) REFERENCES `riders` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `rider_user_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD CONSTRAINT `role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `sale_center_user`
--
ALTER TABLE `sale_center_user`
  ADD CONSTRAINT `sale_center_user_sale_center_id_foreign` FOREIGN KEY (`sale_center_id`) REFERENCES `sale_centers` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `sale_center_user_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
