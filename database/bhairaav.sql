-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 12, 2024 at 03:34 AM
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
-- Database: `bhairaav`
--

-- --------------------------------------------------------

--
-- Table structure for table `backing_partners`
--

CREATE TABLE `backing_partners` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `bank_logo` varchar(255) DEFAULT NULL,
  `inserted_by` int(11) DEFAULT NULL,
  `inserted_at` timestamp NULL DEFAULT NULL,
  `modified_by` int(11) DEFAULT NULL,
  `modified_at` timestamp NULL DEFAULT NULL,
  `deleted_by` int(11) DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `backing_partners`
--

INSERT INTO `backing_partners` (`id`, `bank_logo`, `inserted_by`, `inserted_at`, `modified_by`, `modified_at`, `deleted_by`, `deleted_at`) VALUES
(1, '1725861735642.png', 1, '2024-09-09 06:02:15', NULL, NULL, NULL, NULL),
(2, '1725861758180.png', 1, '2024-09-09 06:02:38', NULL, NULL, NULL, NULL),
(3, '1725861775751.jpg', 1, '2024-09-09 06:02:55', NULL, NULL, NULL, NULL),
(4, '1725861796170.png', 1, '2024-09-09 06:03:16', NULL, NULL, NULL, NULL),
(5, '1725862436151.png', 1, '2024-09-09 06:13:56', NULL, NULL, NULL, NULL),
(6, '1725862450404.png', 1, '2024-09-09 06:14:10', NULL, NULL, NULL, NULL),
(7, '1725862468380.png', 1, '2024-09-09 06:14:28', NULL, NULL, NULL, NULL),
(8, '1725862488938.png', 1, '2024-09-09 06:14:48', NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `blog_title` varchar(255) DEFAULT NULL,
  `blog_image` varchar(255) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `category_id` bigint(20) UNSIGNED DEFAULT NULL,
  `tags` text DEFAULT NULL,
  `posted_dt` timestamp NULL DEFAULT NULL,
  `inserted_by` int(11) DEFAULT NULL,
  `inserted_at` timestamp NULL DEFAULT NULL,
  `modified_by` int(11) DEFAULT NULL,
  `modified_at` timestamp NULL DEFAULT NULL,
  `deleted_by` int(11) DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `blog_title`, `blog_image`, `description`, `category_id`, `tags`, `posted_dt`, `inserted_by`, `inserted_at`, `modified_by`, `modified_at`, `deleted_by`, `deleted_at`) VALUES
(1, 'Residential Apartments in Navi Mumbai endorse Smart Living', '172594658690.jpg', 'Home buyers have varied preferences. Keeping their customers in mind, Bhairaav Group has created residential apartments in CBD Belapur Navi Mumbai for sale that cater to buyer preferences. One such project, Bhairaav Signature, has become the talk of the town as this exclusively designed project has much to offer its residents.<br><br>The key highlight of this residential development is its location - CBD Belapur that offers good connectivity to major parts of Mumbai by varied means such as NMMT and BEST buses, and railways. The locality also enjoys a vast expanse of greenery that makes it stand apart from the modern-day concrete Mumbai. CBD Belapur is also a part of the prominent business district of Mumbai and has witnessed a continual improvement in social infrastructure, making it one of the most sought-after regions for commercial and residential developments.&nbsp;<br><b><br>Bhairaav Signature is one of the high-end residential properties in CBD Belapur Navi Mumbai for sale that offers luxurious 2 and 3-BHK residences with smart and efficient features such as:</b><ul><li>Wooden finish ceramic tiles in attached terraces / flower beds</li><li>Modular kitchen</li><li>Bathrooms with branded fittings, storage, geyser, exhaust fan</li><li>Counter-wash basins with mirrors and basin mixture</li><li>Video door security systems with color screen in each flat with cameras at the main door</li></ul><b>Apart from well-planned residential apartments in CBD Belapur Navi Mumbai for sale, Bhairaav Signature is loaded with plush amenities that make living more comfortable. These include:</b><ul><li>Well-designed landscaped garden</li><li>Children\'s play area</li><li>Paved area for strolling</li><li>Grand entrance lobby</li><li>Swimming pool with separate kids’ pool</li><li>Indoor Games</li><li>Fully equipped gymnasium with steam, bath &amp; changing room</li><li>Intercom facility</li><li>Provision for a small library lounge, drawing, and play area</li><li>Party lawn with Gazebo</li><li>Senior citizen corner</li><li>Multi-purpose Hall</li></ul>With abundant luxury and comfort, Bhairaav Signature Homes introduces you to a lifestyle you would love to experience.', 1, '#SmartLiving, #NaviMumbaiApartments, #ResidentialLiving, #ModernHomes, #TechSavvyLiving, #SmartHomes', '2024-09-10 05:41:40', 1, '2024-09-10 05:36:26', 1, '2024-09-10 05:41:40', NULL, NULL),
(2, 'State-Of-The-Art Commercial Projects in Navi Mumbai', '1725946876650.jpg', 'Home buyers have varied preferences. Keeping their customers in mind, Bhairaav Group has created residential apartments in CBD Belapur Navi Mumbai for sale that cater to buyer preferences. One such project, Bhairaav Signature, has become the talk of the town as this exclusively designed project has much to offer its residents. <br><br>The key highlight of this residential development is its location - CBD Belapur that offers good connectivity to major parts of Mumbai by varied means such as NMMT and BEST buses, and railways. The locality also enjoys a vast expanse of greenery that makes it stand apart from the modern-day concrete Mumbai. CBD Belapur is also a part of the prominent business district of Mumbai and has witnessed a continual improvement in social infrastructure, making it one of the most sought-after regions for commercial and residential developments.&nbsp;<br><b><br>Bhairaav Signature is one of the high-end residential properties in CBD Belapur Navi Mumbai for sale that offers luxurious 2 and 3-BHK residences with smart and efficient features such as:</b><ul><li>Wooden finish ceramic tiles in attached terraces / flower beds</li><li>Modular kitchen</li><li>Bathrooms with branded fittings, storage, geyser, exhaust fan</li><li>Counter-wash basins with mirrors and basin mixture</li><li>Video door security systems with color screen in each flat with cameras at the main door</li></ul><b>Apart from well-planned residential apartments in CBD Belapur Navi Mumbai for sale, Bhairaav Signature is loaded with plush amenities that make living more comfortable. These include:</b><ul><li>Well-designed landscaped garden</li><li>Children\'s play area</li><li>Paved area for strolling</li><li>Grand entrance lobby</li><li>Swimming pool with separate kids’ pool</li><li>Indoor Games</li><li>Fully equipped gymnasium with steam, bath &amp; changing room</li><li>Intercom facility</li><li>Provision for a small library lounge, drawing, and play area</li><li>Party lawn with Gazebo</li><li>Senior citizen corner</li><li>Multi-purpose Hall</li></ul>With abundant luxury and comfort, Bhairaav Signature Homes introduces you to a lifestyle you would love to experience.', 2, 'Luxury Real Estate, Modern Architecture, Commercial Development, Navi Mumbai Projects, High-Tech Buildings, Real Estate Investment', '2024-09-10 05:44:43', 1, '2024-09-10 05:41:16', 1, '2024-09-10 05:44:43', NULL, NULL),
(3, 'Bhairaav Signature Beckons You to Savour an Exciting New Lifestyle', '1725947103541.jpg', 'Home buyers have varied preferences. Keeping their customers in mind, Bhairaav Group has created residential apartments in CBD Belapur Navi Mumbai for sale that cater to buyer preferences. One such project, Bhairaav Signature, has become the talk of the town as this exclusively designed project has much to offer its residents.<br><br>The key highlight of this residential development is its location - CBD Belapur that offers good connectivity to major parts of Mumbai by varied means such as NMMT and BEST buses, and railways. The locality also enjoys a vast expanse of greenery that makes it stand apart from the modern-day concrete Mumbai. CBD Belapur is also a part of the prominent business district of Mumbai and has witnessed a continual improvement in social infrastructure, making it one of the most sought-after regions for commercial and residential developments.&nbsp;<br><b><br>Bhairaav Signature is one of the high-end residential properties in CBD Belapur Navi Mumbai for sale that offers luxurious 2 and 3-BHK residences with smart and efficient features such as:</b><ul><li>Wooden finish ceramic tiles in attached terraces/flower&nbsp;beds</li><li>Modular kitchen</li><li>Bathrooms with branded fittings, storage, geyser, exhaust fan</li><li>Counter-wash basins with mirrors and basin mixture</li><li>Video door security systems with color screen in each flat with cameras at the main door</li></ul><b>Apart from well-planned residential apartments in CBD Belapur Navi Mumbai for sale, Bhairaav Signature is loaded with plush amenities that make living more comfortable. These include:</b><ul><li>Well-designed landscaped garden</li><li>Children\'s play area</li><li>Paved area for strolling</li><li>Grand entrance lobby</li><li>Swimming pool with separate kids’ pool</li><li>Indoor Games</li><li>Fully equipped gymnasium with steam, bath &amp; changing room</li><li>Intercom facility</li><li>Provision for a small library lounge, drawing, and play area</li><li>Party lawn with Gazebo</li><li>Senior citizen corner</li><li>Multi-purpose Hall</li></ul>With abundant luxury and comfort, Bhairaav Signature Homes introduces you to a lifestyle you would love to experience.', 3, '#LuxuryLiving,#ModernLifestyle,#SignatureStyle,#ExclusiveHomes,#UrbanElegance,#DreamLiving', '2024-09-10 05:45:03', 1, '2024-09-10 05:45:03', NULL, NULL, NULL, NULL),
(4, 'What You Should Be Looking For In An Office Space', '1725947353536.jpg', 'Home buyers have varied preferences. Keeping their customers in mind, Bhairaav Group has created residential apartments in CBD Belapur Navi Mumbai for sale that cater to buyer preferences. One such project, Bhairaav Signature, has become the talk of the town as this exclusively designed project has much to offer its residents.<br><br>The key highlight of this residential development is its location - CBD Belapur that offers good connectivity to major parts of Mumbai by varied means such as NMMT and BEST buses, and railways. The locality also enjoys a vast expanse of greenery that makes it stand apart from the modern-day concrete Mumbai. CBD Belapur is also a part of the prominent business district of Mumbai and has witnessed a continual improvement in social infrastructure, making it one of the most sought-after regions for commercial and residential developments.&nbsp;<br><b><br>Bhairaav Signature is one of the high-end residential properties in CBD Belapur Navi Mumbai for sale that offers luxurious 2 and 3-BHK residences with smart and efficient features such as:</b><ul><li>Wooden finish ceramic tiles in attached terraces/flower&nbsp;beds</li><li>Modular kitchen</li><li>Bathrooms with branded fittings, storage, geyser, exhaust fan</li><li>Counter-wash basins with mirrors and basin mixture</li><li>Video door security systems with color screen in each flat with cameras at the main door</li></ul><b>Apart from well-planned residential apartments in CBD Belapur Navi Mumbai for sale, Bhairaav Signature is loaded with plush amenities that make living more comfortable. These include:</b><ul><li>Well-designed landscaped garden</li><li>Children\'s play area</li><li>Paved area for strolling</li><li>Grand entrance lobby</li><li>Swimming pool with separate kids’ pool</li><li>Indoor Games</li><li>Fully equipped gymnasium with steam, bath &amp; changing room</li><li>Intercom facility</li><li>Provision for a small library lounge, drawing, and play area</li><li>Party lawn with Gazebo</li><li>Senior citizen corner</li><li>Multi-purpose Hall</li></ul>With abundant luxury and comfort, Bhairaav Signature Homes introduces you to a lifestyle you would love to experience.', 4, 'Location,Size,Amenities,Cost,Flexibility,Environment', '2024-09-10 05:49:13', 1, '2024-09-10 05:49:13', NULL, NULL, NULL, NULL),
(5, 'Bhairaav Signature – The Picture Perfect Homes', '1725947546488.jpg', 'Home buyers have varied preferences. Keeping their customers in mind, Bhairaav Group has created residential apartments in CBD Belapur Navi Mumbai for sale that cater to buyer preferences. One such project, Bhairaav Signature, has become the talk of the town as this exclusively designed project has much to offer its residents.<br><br>The key highlight of this residential development is its location - CBD Belapur that offers good connectivity to major parts of Mumbai by varied means such as NMMT and BEST buses, and railways. The locality also enjoys a vast expanse of greenery that makes it stand apart from the modern-day concrete Mumbai. CBD Belapur is also a part of the prominent business district of Mumbai and has witnessed a continual improvement in social infrastructure, making it one of the most sought-after regions for commercial and residential developments.&nbsp;<br><b><br>Bhairaav Signature is one of the high-end residential properties in CBD Belapur Navi Mumbai for sale that offers luxurious 2 and 3-BHK residences with smart and efficient features such as:</b><ul><li>Wooden finish ceramic tiles in attached terraces/flower&nbsp;beds</li><li>Modular kitchen</li><li>Bathrooms with branded fittings, storage, geyser, exhaust fan</li><li>Counter-wash basins with mirrors and basin mixture</li><li>Video door security systems with color screen in each flat with cameras at the main door</li></ul><b>Apart from well-planned residential apartments in CBD Belapur Navi Mumbai for sale, Bhairaav Signature is loaded with plush amenities that make living more comfortable. These include:</b><ul><li>Well-designed landscaped garden</li><li>Children\'s play area</li><li>Paved area for strolling</li><li>Grand entrance lobby</li><li>Swimming pool with separate kids’ pool</li><li>Indoor Games</li><li>Fully equipped gymnasium with steam, bath &amp; changing room</li><li>Intercom facility</li><li>Provision for a small library lounge, drawing, and play area</li><li>Party lawn with Gazebo</li><li>Senior citizen corner</li><li>Multi-purpose Hall</li></ul>With abundant luxury and comfort, Bhairaav Signature Homes introduces you to a lifestyle you would love to experience.', 5, '#LuxuryLiving,#DreamHomes,#ElegantDesign,#ModernArchitecture,#HomeSweetHome,#PrimeLocation', '2024-09-10 05:52:26', 1, '2024-09-10 05:52:26', NULL, NULL, NULL, NULL),
(6, 'Understanding The New-Age Way Of Life: Bhairaav Lifestyles', '172594769121.jpg', '<i></i>Home buyers have varied preferences. Keeping their customers in mind, Bhairaav Group has created residential apartments in CBD Belapur Navi Mumbai for sale that cater to buyer preferences. One such project, Bhairaav Signature, has become the talk of the town as this exclusively designed project has much to offer its residents.<br><br>The key highlight of this residential development is its location - CBD Belapur that offers good connectivity to major parts of Mumbai by varied means such as NMMT and BEST buses, and railways. The locality also enjoys a vast expanse of greenery that makes it stand apart from the modern-day concrete Mumbai. CBD Belapur is also a part of the prominent business district of Mumbai and has witnessed a continual improvement in social infrastructure, making it one of the most sought-after regions for commercial and residential developments.&nbsp;<br><b><br>Bhairaav Signature is one of the high-end residential properties in CBD Belapur Navi Mumbai for sale that offers luxurious 2 and 3-BHK residences with smart and efficient features such as:</b><ul><li>Wooden finish ceramic tiles in attached terraces/flower&nbsp;beds</li><li>Modular kitchen</li><li>Bathrooms with branded fittings, storage, geyser, exhaust fan</li><li>Counter-wash basins with mirrors and basin mixture</li><li>Video door security systems with color screen in each flat with cameras at the main door</li></ul><b>Apart from well-planned residential apartments in CBD Belapur Navi Mumbai for sale, Bhairaav Signature is loaded with plush amenities that make living more comfortable. These include:</b><ul><li>Well-designed landscaped garden</li><li>Children\'s play area</li><li>Paved area for strolling</li><li>Grand entrance lobby</li><li>Swimming pool with separate kids’ pool</li><li>Indoor Games</li><li>Fully equipped gymnasium with steam, bath &amp; changing room</li><li>Intercom facility</li><li>Provision for a small library lounge, drawing, and play area</li><li>Party lawn with Gazebo</li><li>Senior citizen corner</li><li>Multi-purpose Hall</li></ul>With abundant luxury and comfort, Bhairaav Signature Homes introduces you to a lifestyle you would love to experience.', 3, '#ModernLiving,#LifestyleTrends,#BhairaavLifestyles,#NewAgeCulture,#WellnessJourney,#InnovativeLifestyle', '2024-09-10 05:54:51', 1, '2024-09-10 05:54:51', NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) NOT NULL,
  `value` mediumtext NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_name` varchar(255) DEFAULT NULL,
  `inserted_by` int(11) DEFAULT NULL,
  `inserted_at` timestamp NULL DEFAULT NULL,
  `modified_by` int(11) DEFAULT NULL,
  `modified_at` timestamp NULL DEFAULT NULL,
  `deleted_by` int(11) DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `category_name`, `inserted_by`, `inserted_at`, `modified_by`, `modified_at`, `deleted_by`, `deleted_at`) VALUES
(1, 'Residential', 1, '2024-09-10 05:30:27', NULL, NULL, NULL, NULL),
(2, 'Commercial', 1, '2024-09-10 05:30:48', NULL, NULL, NULL, NULL),
(3, 'Bhairaav Lifestyles', 1, '2024-09-10 05:31:42', NULL, NULL, NULL, NULL),
(4, 'Office Space', 1, '2024-09-10 05:46:33', NULL, NULL, NULL, NULL),
(5, 'Perfect Homes', 1, '2024-09-10 05:50:38', NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `channel_partners`
--

CREATE TABLE `channel_partners` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `companyNameOrIndividualName` varchar(255) DEFAULT NULL,
  `nameOfTheOwner` varchar(255) DEFAULT NULL,
  `entity` int(11) DEFAULT NULL COMMENT '\n            1 - Individual,\n            2 - Private Ltd. Co.,\n            3 - Public Ltd. Co.,\n            4 - Proprietorship,\n            5 - Partnership,\n            6 - LLP\n            ',
  `officeAddress` varchar(255) DEFAULT NULL,
  `telephoneNumber` varchar(255) DEFAULT NULL,
  `mobileNumber` varchar(255) DEFAULT NULL,
  `website` varchar(255) DEFAULT NULL,
  `emailId` varchar(255) DEFAULT NULL,
  `numberOfYearsInOperation` varchar(255) DEFAULT NULL,
  `preferredExpertise` int(11) DEFAULT NULL COMMENT '\n            1 - Residential,\n            2 - Commercial,\n            3 - Retail,\n            4 - Industrial Land,\n            5 - Other\n            ',
  `panCardNo` varchar(255) DEFAULT NULL,
  `gstNo` varchar(255) DEFAULT NULL,
  `reraNo` varchar(255) DEFAULT NULL,
  `brokerAffiliation` int(11) DEFAULT NULL COMMENT '\n            1 - Yes,\n            2 - No\n            ',
  `propertiesType` int(11) DEFAULT NULL COMMENT '\n            1 - Goldcrest Residency,\n            2 - Jewel of Queen,\n            3 - TCP Corporate Park,\n            4 - Bhairaav Milestone,\n            5 - Other\n            ',
  `authorizedSignatories` int(11) DEFAULT NULL COMMENT '\n            1 - Single,\n            2 - Jointly,\n            3 - Anyone,\n            ',
  `name` varchar(255) DEFAULT NULL,
  `designation` varchar(255) DEFAULT NULL,
  `pancard_doc` varchar(255) DEFAULT NULL,
  `aadhar_doc` varchar(255) DEFAULT NULL,
  `terms` tinyint(1) NOT NULL DEFAULT 0,
  `inserted_by` int(11) DEFAULT NULL,
  `inserted_at` timestamp NULL DEFAULT NULL,
  `modified_by` int(11) DEFAULT NULL,
  `modified_at` timestamp NULL DEFAULT NULL,
  `deleted_by` int(11) DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `contact_us`
--

CREATE TABLE `contact_us` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `phone_no` varchar(255) DEFAULT NULL,
  `subject` varchar(255) DEFAULT NULL,
  `message` text DEFAULT NULL,
  `status` varchar(255) DEFAULT '0' COMMENT '0 = pending, 1 = accepted, 2 = rejected',
  `inserted_by` int(11) DEFAULT NULL,
  `inserted_at` timestamp NULL DEFAULT NULL,
  `modified_by` int(11) DEFAULT NULL,
  `modified_at` timestamp NULL DEFAULT NULL,
  `deleted_by` int(11) DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
-- Table structure for table `how_work_loyalty_programs`
--

CREATE TABLE `how_work_loyalty_programs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `description` text DEFAULT NULL,
  `inserted_by` int(11) DEFAULT NULL,
  `inserted_at` timestamp NULL DEFAULT NULL,
  `modified_by` int(11) DEFAULT NULL,
  `modified_at` timestamp NULL DEFAULT NULL,
  `deleted_by` int(11) DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `how_work_loyalty_programs`
--

INSERT INTO `how_work_loyalty_programs` (`id`, `description`, `inserted_by`, `inserted_at`, `modified_by`, `modified_at`, `deleted_by`, `deleted_at`) VALUES
(1, 'The program has been designed exclusively for our members. All you have to do is recommend us to any of your friends, members of your family, or colleagues. If any of them books a Bhairaav property, you and the person recommended will be rewarded!', 1, '2024-09-09 05:25:49', NULL, NULL, NULL, NULL);

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
-- Table structure for table `journeys`
--

CREATE TABLE `journeys` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `description` text DEFAULT NULL,
  `journey_image` varchar(255) DEFAULT NULL,
  `inserted_by` int(11) DEFAULT NULL,
  `inserted_at` timestamp NULL DEFAULT NULL,
  `modified_by` int(11) DEFAULT NULL,
  `modified_at` timestamp NULL DEFAULT NULL,
  `deleted_by` int(11) DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `journeys`
--

INSERT INTO `journeys` (`id`, `description`, `journey_image`, `inserted_by`, `inserted_at`, `modified_by`, `modified_at`, `deleted_by`, `deleted_at`) VALUES
(1, '<b>Shri. Madan Jain</b> through his dynamism as an entrepreneur established Bhairaav Group in the year 1972. In his initial years as a businessman, he had a largely successful stint in the garment industry. Later on, the&nbsp;<b>21st</b>&nbsp;year saw the group diversify into real estate, foraying into building a robust portfolio of world-class residential and commercial realty.', '1726093261890.jpeg', 1, '2024-09-09 05:30:12', 1, '2024-09-11 22:21:01', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `latest_updates`
--

CREATE TABLE `latest_updates` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `media_image` varchar(255) DEFAULT NULL,
  `inserted_by` int(11) DEFAULT NULL,
  `inserted_at` timestamp NULL DEFAULT NULL,
  `modified_by` int(11) DEFAULT NULL,
  `modified_at` timestamp NULL DEFAULT NULL,
  `deleted_by` int(11) DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `latest_updates`
--

INSERT INTO `latest_updates` (`id`, `name`, `media_image`, `inserted_by`, `inserted_at`, `modified_by`, `modified_at`, `deleted_by`, `deleted_at`) VALUES
(1, 'Residential Apartments in Navi Mumbai endorse Smart Living', '172585819035.jpg', 1, '2024-09-09 05:03:10', NULL, NULL, NULL, NULL),
(2, 'State-Of-The-Art Commercial Projects in Navi Mumbai', '1725858244818.jpg', 1, '2024-09-09 05:04:04', NULL, NULL, NULL, NULL),
(3, 'Bhairaav Signature Beckons You to Savour an Exciting New Lifestyle', '1725858272792.jpg', 1, '2024-09-09 05:04:32', NULL, NULL, NULL, NULL),
(4, 'What You Should Be Looking For In An Office Space', '1725858331768.jpg', 1, '2024-09-09 05:05:31', NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `leaders`
--

CREATE TABLE `leaders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `designation` varchar(255) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `other_description` text DEFAULT NULL,
  `inserted_by` int(11) DEFAULT NULL,
  `inserted_at` timestamp NULL DEFAULT NULL,
  `modified_by` int(11) DEFAULT NULL,
  `modified_at` timestamp NULL DEFAULT NULL,
  `deleted_by` int(11) DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `leaders`
--

INSERT INTO `leaders` (`id`, `name`, `designation`, `description`, `other_description`, `inserted_by`, `inserted_at`, `modified_by`, `modified_at`, `deleted_by`, `deleted_at`) VALUES
(1, 'Shri Madan Jain', 'Chairman', '<span>A foresighted and humble gentleman with a sharp Business acumen, Shri Madan Jain, is the Founder &amp; Chairman of Bhairaav Group. Since 1969, the incorporation year of Bhairaav Group, due to his most able leadership values he has constantly upgraded the systems to match the modernity in all the business arms of the Enterprise. As the group ventured into the Real Estate Industry a decade ago, which was again a brainchild of Shri Madan Jain, the Group acquired The Western India Spinning &amp; Weaving Mills Ltd.\' at Lalbaug - Parel, by a bidding process for a Textile Mill Land Tender. This is where the Group\'s most prestigious project \'Muthaliya Residency\' stands today.<br><br></span>On the Social front also he has been very active. His selfless attitude has earned him the following honors, amongst many other achievements.<br>', '[\"For his consistent work towards Society, he was awarded again as a \\u2018Samaj Ratna\' at the hands of Shri Prithviraj Chauhan, former Chief Minister of Maharashtra on Maha Vir Jayanti Day in the year 2013.\",\"Awarded as a \'Samaj Ratna\' in the year 2012 from the hands of our immediate past President Smt. Pratibhatai Patil.\",\"In the year 1997, he was conferred with the title of \'Sanghvi\', in Jainism this is the highest honor to be bestowed upon a Jain.\",\"Has been appointed as a Member of the Earthquake Relief Committee by the Government of Maharashtra.\",\"Founder & Chief Patron of JITO (Jain International Trade Organisation).\",\"Is on the Executive Council of Bharat Jain Mahamandal.\",\"Is a patron member of Bhagwan Mahavir Hospital at Sumerpur, Rajasthan.\",\"Designated as a \'Special Executive Officer\' by the Government of Maharashtra.\"]', 1, '2024-09-09 05:52:14', NULL, NULL, NULL, NULL),
(2, 'Shri Vivek Jain', 'Managing Director', 'Shri Vivek Jain, the Managing Director of the Group is a Commerce Graduate from Mumbai University and has done his management program. He began his career at a very young age, when still in college, handling major aspects of both the businesses the Group was involved in and very rapidly picking up the finest nuances of successfully managing a huge Business House. His vision has helped the company grow at a rapid pace with systems and values in the perfect place. A dynamic entrepreneur has an endeavor to create ultra-modern residential townships &amp; business hubs to match quality lifestyles, he works non-stop to transform his reality vision into reality. His meticulous working style, eye for detail, and firm grip on all aspects of the Real Estate Industry make him a true leader at the helm.', '[null]', 1, '2024-09-09 05:53:28', NULL, NULL, NULL, NULL),
(3, 'Shri Akshay Jain', 'Executive Director', 'Shri Akshay Jain, the Director of the Group is a Commerce Graduate from Mumbai University and a Law Graduate from the prestigious Lala Lajpatrai College, Mumbai. Apart from handling the legal aspects of the Real Estate Division he also has a good knowledge of minute property matters including representation to the appropriate Authorities. He also possesses a good working knowledge of specific rules and enactments about the Industry. In his capacity as Director of Bhairaav Group, he also handles and assures the smooth functioning and regular up-gradation of other departments. Despite being very soft-spoken, his silence speaks volumes. His very techno-savvy nature and flair for the latest technology are the main motivation behind the effective systems in the company.', '[null]', 1, '2024-09-09 05:55:09', NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `legacies`
--

CREATE TABLE `legacies` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `description` text DEFAULT NULL,
  `legacies_image` varchar(255) DEFAULT NULL,
  `inserted_by` int(11) DEFAULT NULL,
  `inserted_at` timestamp NULL DEFAULT NULL,
  `modified_by` int(11) DEFAULT NULL,
  `modified_at` timestamp NULL DEFAULT NULL,
  `deleted_by` int(11) DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `legacies`
--

INSERT INTO `legacies` (`id`, `description`, `legacies_image`, `inserted_by`, `inserted_at`, `modified_by`, `modified_at`, `deleted_by`, `deleted_at`) VALUES
(1, 'Bhairaav Group will be celebrating its 52nd&nbsp;year of existence in the year 2024. The group ventured into real estate in the year 1997 under the able guidance of Chairman Shri Madan Jain. Since then dedication, reliability, commitment and quality have been the four core values of the group. The group has constructed several multi-storied contemporary structures with high-class amenities to suit modern needs of life in sync with its signature line - better lifestyle, better life.<br>', '1725860027621.jpg', 1, '2024-09-09 05:33:47', NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `legacy_of_excellences`
--

CREATE TABLE `legacy_of_excellences` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `inserted_by` int(11) DEFAULT NULL,
  `inserted_at` timestamp NULL DEFAULT NULL,
  `modified_by` int(11) DEFAULT NULL,
  `modified_at` timestamp NULL DEFAULT NULL,
  `deleted_by` int(11) DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `legacy_of_excellences`
--

INSERT INTO `legacy_of_excellences` (`id`, `title`, `description`, `image`, `inserted_by`, `inserted_at`, `modified_by`, `modified_at`, `deleted_by`, `deleted_at`) VALUES
(1, 'Driven by a Mission to Deliver Superior Homes Ahead of Schedule.', 'Our Chairman, Shri Madan Jain, founded the Bhairaav Group in 1972. Following a successful career in the garment industry, he transitioned into the real estate sector. Today, Bhairaav Group has established a formidable reputation and is recognized as one of the most promising real estate developers in Mumbai and Navi Mumbai. Since its inception, the company has grown steadily and flourished through relentless hard work, dedication, and an unwavering commitment to quality.', '1726093432528.png', 1, '2024-09-09 04:52:52', 1, '2024-09-11 22:23:52', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `location_advantages`
--

CREATE TABLE `location_advantages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `feature_name` varchar(255) DEFAULT NULL,
  `inserted_by` int(11) DEFAULT NULL,
  `inserted_at` timestamp NULL DEFAULT NULL,
  `modified_by` int(11) DEFAULT NULL,
  `modified_at` timestamp NULL DEFAULT NULL,
  `deleted_by` int(11) DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `location_advantages`
--

INSERT INTO `location_advantages` (`id`, `feature_name`, `inserted_by`, `inserted_at`, `modified_by`, `modified_at`, `deleted_by`, `deleted_at`) VALUES
(1, 'Supreme Connectivity', 1, '2024-09-10 09:49:29', NULL, NULL, NULL, NULL),
(2, 'Proximity To It Hubs & Major Landmarks', 1, '2024-09-10 09:49:42', NULL, NULL, NULL, NULL),
(3, 'Site Address', 1, '2024-09-10 09:49:57', NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `loyalty_programs`
--

CREATE TABLE `loyalty_programs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `other_description` text DEFAULT NULL,
  `inserted_by` int(11) DEFAULT NULL,
  `inserted_at` timestamp NULL DEFAULT NULL,
  `modified_by` int(11) DEFAULT NULL,
  `modified_at` timestamp NULL DEFAULT NULL,
  `deleted_by` int(11) DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `loyalty_programs`
--

INSERT INTO `loyalty_programs` (`id`, `title`, `description`, `other_description`, `inserted_by`, `inserted_at`, `modified_by`, `modified_at`, `deleted_by`, `deleted_at`) VALUES
(1, 'Welcome To Bhairaav\'s Loyalty Program!', 'BHAIRAAV values you and your support. We believe there is no advertising that is superior to the brand advocacy of our customers. As someone who has trusted us with building your home, your satisfaction, happiness, and delight is supremely important to us. As a token of appreciation, we would like to introduce you to BHAIRAAV’s Loyalty and Referral program.<br><br>Should you feel the need to consider a second (or maybe even a third) real estate investment, you need to look no further. With multiple world-class developments panning the length and breadth of Mumbai &amp; Navi Mumbai, Bhairaav has something for everyone. From inspiring sea-view residences to the best-integrated office spaces, everything you will ever need in real estate is just a call away.<br><br>A friend or a family member looking to buy a home or office? What better advice can you give, than referring them to a Bhairaav property? They too will benefit from the expertise, trust, appreciation, and of course, the thoughtfulness of Bhairaav.<br><br>We have fabulous referral rewards for both, you and your friends and family! But the best reward you will get is the gratitude and happiness that your friends and family will shower on you for helping them choose a Bhairaav property.<br><br>Welcome to a world of happiness, welcome to your very own loyalty program.<br><span><br>As a member, you can enjoy a host of promotion offers and privileges, all of them crafted specifically for your requirements.</span>', '[\"Invitation for a special preview of our new projects.\",\"Enjoy top priority in case of any special offers, events, and promotions.\",\"An opportunity to be a part of a unique reward program.\"]', 1, '2024-09-09 05:25:12', NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `media`
--

CREATE TABLE `media` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `media_name` varchar(255) DEFAULT NULL,
  `media_dec` text DEFAULT NULL,
  `media_image` varchar(255) DEFAULT NULL,
  `inserted_by` int(11) DEFAULT NULL,
  `inserted_at` timestamp NULL DEFAULT NULL,
  `modified_by` int(11) DEFAULT NULL,
  `modified_at` timestamp NULL DEFAULT NULL,
  `deleted_by` int(11) DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `media`
--

INSERT INTO `media` (`id`, `media_name`, `media_dec`, `media_image`, `inserted_by`, `inserted_at`, `modified_by`, `modified_at`, `deleted_by`, `deleted_at`) VALUES
(1, 'Samaj Ratna', 'SHRI MADAN JAIN being conferred with&nbsp;<b>\"SAMAJ RATNA</b><b>\"</b>&nbsp;at the hands of Her Excellency&nbsp;Smt. Pratibhatai Patil, President of India on 13th March 2012, at Rajbhavan, Mumbai.', '1725858745510.jpg', 1, '2024-09-09 05:12:25', NULL, NULL, NULL, NULL),
(2, 'Jain Samaj Ratna', 'On the occasion of Mahavir Jayanti, SHRI MADAN JAIN was conferred                with <b>\"JAIN SAMAJ RATNA\"</b>&nbsp;at the hands of the Chief Minister of Maharashtra Shri. Prithviraj Chavan                on 24th April 2013.', '1725858839452.jpg', 1, '2024-09-09 05:13:59', NULL, NULL, NULL, NULL),
(3, 'Quality Excellence Award', '<b>\"QUALITY EXCELLENCE AWARD</b><span><b>\" </b>2015, conferred to Mis. Bhairaav Group at the                hands of the honorable                Housing Minister of Maharashtra, Shri. Prakash Mehta is being received by SHRI MADAN JAIN.</span>', '1725858927218.jpg', 1, '2024-09-09 05:15:27', NULL, NULL, NULL, NULL),
(4, 'Mid-day Real Estate Icons Award', 'Goldcrest Residency\'s&nbsp;<b>iconic affordable luxury&nbsp;homes</b>&nbsp;were Awarded With the&nbsp;<b>Mid-day Real Estate Icons Award</b>.', '1725859081373.jpg', 1, '2024-09-09 05:18:01', NULL, NULL, NULL, NULL),
(5, 'Corporate & Excellence Award', 'Bhairaav Housing Corporation Limited was Awarded with <b>CORPORATE EXCELLENCE AWARD</b>.', '1725859145118.jpg', 1, '2024-09-09 05:19:05', NULL, NULL, NULL, NULL),
(6, 'Times Real Estate Icons Award 2017', NULL, '1725859175498.jpg', 1, '2024-09-09 05:19:35', NULL, NULL, NULL, NULL),
(7, 'Project Showcase - Bhairaav Housing Corporation Ltd.', NULL, '1725859196602.jpg', 1, '2024-09-09 05:19:56', NULL, NULL, NULL, NULL),
(8, 'Media Coverage - Bhairaav Lifestyles', NULL, '1725859216933.jpg', 1, '2024-09-09 05:20:16', NULL, NULL, NULL, NULL),
(9, 'A Luxurious Project That, Raises The Benchmark In Extraordinary Living', NULL, '1725859236532.jpg', 1, '2024-09-09 05:20:36', NULL, NULL, NULL, NULL),
(10, 'Akkshay Jain\'s Interview With Ishq FM', NULL, '1725859258425.jpg', 1, '2024-09-09 05:20:58', NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

CREATE TABLE `members` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `members_image` varchar(255) DEFAULT NULL,
  `inserted_by` int(11) DEFAULT NULL,
  `inserted_at` timestamp NULL DEFAULT NULL,
  `modified_by` int(11) DEFAULT NULL,
  `modified_at` timestamp NULL DEFAULT NULL,
  `deleted_by` int(11) DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `members`
--

INSERT INTO `members` (`id`, `members_image`, `inserted_by`, `inserted_at`, `modified_by`, `modified_at`, `deleted_by`, `deleted_at`) VALUES
(1, '1725859834439.png', 1, '2024-09-09 05:30:34', NULL, NULL, NULL, NULL),
(2, '1725859851176.png', 1, '2024-09-09 05:30:51', NULL, NULL, NULL, NULL),
(3, '1725859873744.jpeg', 1, '2024-09-09 05:31:14', NULL, NULL, NULL, NULL);

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
(47, '0001_01_01_000000_create_users_table', 1),
(48, '0001_01_01_000001_create_cache_table', 1),
(49, '0001_01_01_000002_create_jobs_table', 1),
(50, '2024_08_13_073818_create_sliders_table', 1),
(51, '2024_08_14_053724_create_blogs_table', 1),
(52, '2024_08_14_092034_create_categories_table', 1),
(53, '2024_08_14_102047_remove_categories_from_blogs_table', 1),
(54, '2024_08_14_102412_add_category_id_to_blogs_table', 1),
(55, '2024_08_16_152158_create_media_table', 1),
(56, '2024_08_16_165922_create_legacy_of_excellences_table', 1),
(57, '2024_08_17_101643_create_why_choose_bhairaavs_table', 1),
(58, '2024_08_17_112713_create_testimonials_table', 1),
(59, '2024_08_18_124519_create_latest_updates_table', 1),
(60, '2024_08_25_101439_create_journeys_table', 1),
(61, '2024_08_25_161209_create_members_table', 1),
(62, '2024_08_25_193858_create_the_progress_details_table', 1),
(63, '2024_08_25_201653_create_legacies_table', 1),
(64, '2024_08_25_201802_create_strengths_table', 1),
(65, '2024_08_25_201852_create_our_logos_table', 1),
(66, '2024_08_26_115118_create_leaders_table', 1),
(67, '2024_08_26_124855_create_our_teams_table', 1),
(68, '2024_08_26_151602_create_backing_partners_table', 1),
(69, '2024_08_29_210745_create_ongoing_projects_table', 1),
(70, '2024_08_29_210917_create_completed_projects_table', 1),
(71, '2024_08_29_210945_create_upcoming_projects_table', 1),
(72, '2024_08_31_111434_create_location_advantages_table', 1),
(73, '2024_08_31_120844_add_feature_name_to_location_advantages', 1),
(74, '2024_08_31_130242_remove_title_from_location_advantages_table', 1),
(75, '2024_09_02_095718_create_loyalty_programs_table', 1),
(76, '2024_09_02_114738_create_how_work_loyalty_programs_table', 1),
(77, '2024_09_02_115122_create_re_investment_loyalty_programs_table', 1),
(78, '2024_09_02_120459_create_refer_loyalty_programs_table', 1),
(79, '2024_09_02_160132_create_project_hallmarks_table', 1),
(80, '2024_09_02_160314_create_project_location_advantages_table', 1),
(81, '2024_09_02_160346_create_project_amenities_table', 1),
(82, '2024_09_02_160412_create_project_galleries_table', 1),
(83, '2024_09_02_160503_create_project_details_table', 1),
(84, '2024_09_03_121843_add_location_advantages_title_to_project_details', 1),
(85, '2024_09_03_142104_create_projects_table', 1),
(86, '2024_09_05_100710_create_partners_table', 1),
(87, '2024_09_05_121951_create_statistics_table', 1),
(88, '2024_09_05_144055_add_profile_image_to_our_teams', 1),
(89, '2024_09_05_150552_add_profile_image_to_leaders', 1),
(90, '2024_09_05_152641_drop_completed_projects_table', 1),
(91, '2024_09_05_153002_drop_ongoing_projects_table', 1),
(92, '2024_09_05_153036_drop_upcoming_projects_table', 1),
(93, '2024_09_07_112554_modify_description_in_strengths', 1),
(94, '2024_09_07_113135_add_other_description_to_strengths', 1),
(95, '2024_09_07_143126_add_logo_image_to_our_logos', 1),
(96, '2024_09_07_174431_add_other_description_to_leaders', 1),
(97, '2024_09_07_181052_drop_profile_image_from_leaders', 1),
(98, '2024_09_07_191855_drop_profile_image_from_our_teams', 1),
(99, '2024_09_07_201140_modify_description_in_partners', 1),
(100, '2024_09_07_215744_add_other_description_to_loyalty_programs', 1),
(101, '2024_09_09_150308_create_channel_partners_table', 2),
(102, '2024_09_09_173630_create_contact_us_table', 3),
(103, '2024_09_10_142506_remove_project_type_or_status_from_projects', 4),
(104, '2024_09_10_143223_add_project_type_or_properties_type_projects', 5);

-- --------------------------------------------------------

--
-- Table structure for table `our_logos`
--

CREATE TABLE `our_logos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `logo_image` text DEFAULT NULL,
  `description` text DEFAULT NULL,
  `inserted_by` int(11) DEFAULT NULL,
  `inserted_at` timestamp NULL DEFAULT NULL,
  `modified_by` int(11) DEFAULT NULL,
  `modified_at` timestamp NULL DEFAULT NULL,
  `deleted_by` int(11) DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `our_logos`
--

INSERT INTO `our_logos` (`id`, `logo_image`, `description`, `inserted_by`, `inserted_at`, `modified_by`, `modified_at`, `deleted_by`, `deleted_at`) VALUES
(1, '1725860761143.png', '<span>The bird in the form of the letter&nbsp;<b>\'B\'</b>&nbsp;is an ambassador, with unlimited vision &amp; strong commitment. The yellow color symbolizes the purity of Gold. The flying bird demonstrates the company, poised to soar to greater heights, stirred with a new vision and mighty wave of hope, faith, and delight.<br></span><br>The tall red blocks suggest the reality aspect of the company. Vermillion (red) is a sacred color and symbolizes strength. It also stands for a brick, which is molded from mother earth - the true foundation for mankind\'s existence.<br><span><br>The baseline&nbsp;<b>Better Lifestyle. Better Life</b>&nbsp;reflects the company\'s motto to craft art destinations and thereby create world-class lifestyles for Mumbaites. It signifies the core philosophy of the company –&nbsp;<b>in its pursuit to emerge as a premium brand to reckon with and be the better choice for its clientele.</b></span>', 1, '2024-09-09 05:46:01', NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `our_teams`
--

CREATE TABLE `our_teams` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `designation` varchar(255) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `inserted_by` int(11) DEFAULT NULL,
  `inserted_at` timestamp NULL DEFAULT NULL,
  `modified_by` int(11) DEFAULT NULL,
  `modified_at` timestamp NULL DEFAULT NULL,
  `deleted_by` int(11) DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `our_teams`
--

INSERT INTO `our_teams` (`id`, `name`, `designation`, `description`, `inserted_by`, `inserted_at`, `modified_by`, `modified_at`, `deleted_by`, `deleted_at`) VALUES
(1, 'Ashika Jain', 'Director', 'Ashika Jain has graduated in commerce from the renowned Jai Hind College. She is heading the HR department which oversees all aspects of human resource management and industrial relations policies, practices, and operations for the organization. She perfectly fits in this position as her Qualities complement with her role as required for an HR - Sympathetic Attitude, Quick Decisions, Integrity, Patience, Formal Authority, Leadership, Social Responsibility, and Good Communication Skills.', 1, '2024-09-09 05:57:06', NULL, NULL, NULL, NULL),
(2, 'Prachi Jain', 'Director', 'A College Topper in Interior design from the renowned Rachna Sansad Institute, Mumbai. Is the Chief Head of the designing of aesthetic features of projects &amp; also the main head behind the beautiful Lounges, Show Flats &amp; Lobbies for various projects of the Group.', 1, '2024-09-09 05:57:47', NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `partners`
--

CREATE TABLE `partners` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `partner_name` text NOT NULL,
  `inserted_by` int(11) DEFAULT NULL,
  `inserted_at` timestamp NULL DEFAULT NULL,
  `modified_by` int(11) DEFAULT NULL,
  `modified_at` timestamp NULL DEFAULT NULL,
  `deleted_by` int(11) DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `partners`
--

INSERT INTO `partners` (`id`, `name`, `partner_name`, `inserted_by`, `inserted_at`, `modified_by`, `modified_at`, `deleted_by`, `deleted_at`) VALUES
(1, 'Architects', '[\"M\\/s. Varde Paralkar & Associates\",\"M\\/s. Apices Studio Private Ltd.\",\"Arch. Deepak Mehta\",\"M\\/s. Soyuz Talib Architects Pvt. Ltd.\",\"M\\/s. Ulhas Raut & Associates\"]', 1, '2024-09-09 06:00:02', NULL, NULL, NULL, NULL),
(2, 'Structural Engineers', '[\"Shantilal H. Jain of M\\/s Structural Bombay Consultant\",\"Virendra Kumar Jain of M\\/s Vinit Consultants\",\"Rajesh Ladhad of M\\/s Structural Concept\",\"M\\/s. J + W Consultants\",\"EPICONS Consultants Pvt. Ltd.\"]', 1, '2024-09-09 06:01:04', NULL, NULL, NULL, NULL),
(3, 'Landscape Architects', '[\"Mrs. Shobha Bhopatkar\",\"M\\/s. Newarch Designs\"]', 1, '2024-09-09 06:01:35', NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

CREATE TABLE `projects` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `project_name` varchar(255) NOT NULL,
  `address` text DEFAULT NULL,
  `configuration` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `mobile_no` varchar(255) DEFAULT NULL,
  `project_type` varchar(255) DEFAULT '0' COMMENT '1 - Ongoing Projects, 2 - Completed Projects, 3 - Upcoming Projects',
  `property_type` varchar(255) DEFAULT '0' COMMENT '1 - Residential Projects, 2 - Commercial Projects',
  `inserted_by` int(11) DEFAULT NULL,
  `inserted_at` timestamp NULL DEFAULT NULL,
  `modified_by` int(11) DEFAULT NULL,
  `modified_at` timestamp NULL DEFAULT NULL,
  `deleted_by` int(11) DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `projects`
--

INSERT INTO `projects` (`id`, `project_name`, `address`, `configuration`, `image`, `mobile_no`, `project_type`, `property_type`, `inserted_by`, `inserted_at`, `modified_by`, `modified_at`, `deleted_by`, `deleted_at`) VALUES
(1, 'Goldcrest Residency', 'Ghansoli', '1 & 2 BHK', '1725960585605.png', '9071056755', '1', '1', 1, '2024-09-10 09:29:45', 1, '2024-09-10 09:36:30', NULL, NULL),
(2, 'Jewel of Queen', 'Girgaum', '2, 3, 3.5, 4, 4.5, 5 BHK', '1725960934805.jpg', '9071123428', '1', '1', 1, '2024-09-10 09:35:34', NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `project_amenities`
--

CREATE TABLE `project_amenities` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `project_details_id` bigint(20) UNSIGNED DEFAULT NULL,
  `amenite_image` varchar(255) DEFAULT NULL,
  `amenite_image_name` varchar(255) DEFAULT NULL,
  `inserted_by` int(11) DEFAULT NULL,
  `inserted_at` timestamp NULL DEFAULT NULL,
  `modified_by` int(11) DEFAULT NULL,
  `modified_at` timestamp NULL DEFAULT NULL,
  `deleted_by` int(11) DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `project_amenities`
--

INSERT INTO `project_amenities` (`id`, `project_details_id`, `amenite_image`, `amenite_image_name`, `inserted_by`, `inserted_at`, `modified_by`, `modified_at`, `deleted_by`, `deleted_at`) VALUES
(1, 1, '1726092243865.png', 'Lavish Clubhouse', 1, '2024-09-11 22:04:03', NULL, NULL, NULL, NULL),
(2, 1, '1726092243264.png', 'Gymnasium with Cardio Section & Fitness Studio', 1, '2024-09-11 22:04:03', NULL, NULL, NULL, NULL),
(3, 1, '1726092243645.png', 'Herbal Garden with Organic Plantations', 1, '2024-09-11 22:04:03', NULL, NULL, NULL, NULL),
(4, 1, '1726092243139.png', 'Jogging Track', 1, '2024-09-11 22:04:03', NULL, NULL, NULL, NULL),
(5, 1, '1726092243644.png', 'Swimming Pool with Kid’s Pool & Deck', 1, '2024-09-11 22:04:03', NULL, NULL, NULL, NULL),
(6, 1, '1726092243240.png', 'Community Banquet Hall with Pre-function Area', 1, '2024-09-11 22:04:03', NULL, NULL, NULL, NULL),
(7, 1, '1726092243365.png', 'Multipurpose Court & Cricket Pitch', 1, '2024-09-11 22:04:03', NULL, NULL, NULL, NULL),
(8, 1, '1726092243621.png', 'Yoga & Meditation Lawn', 1, '2024-09-11 22:04:03', NULL, NULL, NULL, NULL),
(9, 1, '1726092243409.png', 'World-class Spa with Sauna & Jacuzzi', 1, '2024-09-11 22:04:03', NULL, NULL, NULL, NULL),
(10, 1, '1726092243630.png', 'Indoor Game’s Zone with Snooker', 1, '2024-09-11 22:04:03', NULL, NULL, NULL, NULL),
(11, 1, '1726092243398.png', 'Kid’s Play Area with Toddler Zone', 1, '2024-09-11 22:04:03', NULL, NULL, NULL, NULL),
(12, 1, '1726092243851.png', 'Seniors’ Citizen Lounge', 1, '2024-09-11 22:04:03', NULL, NULL, NULL, NULL),
(13, 2, '1726093054502.png', 'Lavish Clubhouse', 1, '2024-09-11 22:17:34', NULL, NULL, NULL, NULL),
(14, 2, '1726093054313.png', 'Gymnasium with Cardio Section & Fitness Studio', 1, '2024-09-11 22:17:34', NULL, NULL, NULL, NULL),
(15, 2, '172609305441.png', 'Herbal Garden with Organic Plantations', 1, '2024-09-11 22:17:34', NULL, NULL, NULL, NULL),
(16, 2, '1726093054584.png', 'Jogging Track', 1, '2024-09-11 22:17:34', NULL, NULL, NULL, NULL),
(17, 2, '1726093054588.png', 'Swimming Pool with Kid’s Pool & Deck', 1, '2024-09-11 22:17:34', NULL, NULL, NULL, NULL),
(18, 2, '1726093054672.png', 'Community Banquet Hall with Pre-function Area', 1, '2024-09-11 22:17:34', NULL, NULL, NULL, NULL),
(19, 2, '1726093054182.png', 'Multipurpose Court & Cricket Pitch', 1, '2024-09-11 22:17:34', NULL, NULL, NULL, NULL),
(20, 2, '1726093054892.png', 'Yoga & Meditation Lawn', 1, '2024-09-11 22:17:34', NULL, NULL, NULL, NULL),
(21, 2, '1726093054314.png', 'World-class Spa with Sauna & Jacuzzi', 1, '2024-09-11 22:17:34', NULL, NULL, NULL, NULL),
(22, 2, '172609305434.png', 'Indoor Game’s Zone with Snooker', 1, '2024-09-11 22:17:34', NULL, NULL, NULL, NULL),
(23, 2, '1726093054529.png', 'Kid’s Play Area with Toddler Zone', 1, '2024-09-11 22:17:34', NULL, NULL, NULL, NULL),
(24, 2, '1726093054356.png', 'Seniors’ Citizen Lounge', 1, '2024-09-11 22:17:34', NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `project_details`
--

CREATE TABLE `project_details` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `project_type_id` int(11) DEFAULT NULL COMMENT '\n            1 - Ongoing Projects,\n            2 - Completed Projects,\n            3 - Upcoming Projects\n            ',
  `project_name_id` int(11) DEFAULT NULL,
  `banner_image` text DEFAULT NULL,
  `maha_rera_registration_number` varchar(255) DEFAULT NULL,
  `project_link` varchar(255) DEFAULT NULL,
  `overview_image` varchar(255) DEFAULT NULL,
  `project_description` text DEFAULT NULL,
  `project_hallmarks_id` text DEFAULT NULL,
  `project_location_advantages_id` text DEFAULT NULL,
  `location_advantages_title` varchar(255) DEFAULT NULL,
  `project_amenities_id` text DEFAULT NULL,
  `amenities_title` varchar(255) DEFAULT NULL,
  `project_gallery_id` text DEFAULT NULL,
  `gallery_title` varchar(255) DEFAULT NULL,
  `inserted_by` int(11) DEFAULT NULL,
  `inserted_at` timestamp NULL DEFAULT NULL,
  `modified_by` int(11) DEFAULT NULL,
  `modified_at` timestamp NULL DEFAULT NULL,
  `deleted_by` int(11) DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `project_details`
--

INSERT INTO `project_details` (`id`, `project_type_id`, `project_name_id`, `banner_image`, `maha_rera_registration_number`, `project_link`, `overview_image`, `project_description`, `project_hallmarks_id`, `project_location_advantages_id`, `location_advantages_title`, `project_amenities_id`, `amenities_title`, `project_gallery_id`, `gallery_title`, `inserted_by`, `inserted_at`, `modified_by`, `modified_at`, `deleted_by`, `deleted_at`) VALUES
(1, 1, 1, '[\"172609224331.jpg\",\"172609224324.jpg\",\"172609224362.jpg\"]', 'Phase I - P51700012365 | Phase II - P51700010579', 'https://maharera.maha.online.gov.in', '1726092243266.png', '<img alt=\"\" src=\"https://mbihosting.in/bhairaav/assets/img/project-logo/goldcrest-logo.png\"><br><div><div>Overview - Landmark at Ghansoli<h2>Navi Mumbai\'s Most Premium Water Front Living</h2></div></div>Uninterrupted Sea View. Unbound Lush Mangroves Trail. Unparalleled Connectivity &amp; Conveniences. Unmatched Luxury &amp; Indulgences.', '[1,2,3,4,5,6,7,8,9,10]', '[1,2,3,4,5,6,7,8,9,10,11,12,13]', 'Luxury Within Reach Of Everything', '[1,2,3,4,5,6,7,8,9,10,11,12]', 'Exclusive Indulgences Crafted With World-Class Amenities', '[1,2,3,4]', 'Explore Your Residence Of Bliss Mastercrafted With Comforts', 1, '2024-09-11 22:04:03', NULL, NULL, NULL, NULL),
(2, 2, 2, '[\"1726093054379.jpg\",\"1726093054924.jpg\",\"172609305496.jpg\"]', 'Phase I - P51700012365 | Phase II - P51700010579', 'https://maharera.maha.online.gov.in', '1726093054977.png', '<img alt=\"\" src=\"https://mbihosting.in/bhairaav/assets/img/project-logo/goldcrest-logo.png\"><br><div><div>Overview - Landmark at Ghansoli<h2>Navi Mumbai\'s Most Premium Water Front Living</h2></div></div>Uninterrupted Sea View. Unbound Lush Mangroves Trail. Unparalleled Connectivity &amp; Conveniences. Unmatched Luxury &amp; Indulgences.', '[11,12,13,14,15,16,17,18,19,20]', '[14,15,16,17,18,19,20,21,22,23,24,25,26]', 'Luxury Within Reach Of Everything', '[13,14,15,16,17,18,19,20,21,22,23,24]', 'Exclusive Indulgences Crafted With World-Class Amenities', '[5,6,7,8]', 'Explore Your Residence Of Bliss Mastercrafted With Comforts', 1, '2024-09-11 22:17:34', NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `project_galleries`
--

CREATE TABLE `project_galleries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `project_details_id` bigint(20) UNSIGNED DEFAULT NULL,
  `gallery_image` varchar(255) DEFAULT NULL,
  `gallery_image_name` varchar(255) DEFAULT NULL,
  `inserted_by` int(11) DEFAULT NULL,
  `inserted_at` timestamp NULL DEFAULT NULL,
  `modified_by` int(11) DEFAULT NULL,
  `modified_at` timestamp NULL DEFAULT NULL,
  `deleted_by` int(11) DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `project_galleries`
--

INSERT INTO `project_galleries` (`id`, `project_details_id`, `gallery_image`, `gallery_image_name`, `inserted_by`, `inserted_at`, `modified_by`, `modified_at`, `deleted_by`, `deleted_at`) VALUES
(1, 1, '1726092243421.jpg', 'Construction updates', 1, '2024-09-11 22:04:03', NULL, NULL, NULL, NULL),
(2, 1, '172609224383.jpg', 'Plans', 1, '2024-09-11 22:04:03', NULL, NULL, NULL, NULL),
(3, 1, '1726092243111.jpg', 'Virtual Tour', 1, '2024-09-11 22:04:03', NULL, NULL, NULL, NULL),
(4, 1, '1726092243675.jpg', 'Walkthrough', 1, '2024-09-11 22:04:03', NULL, NULL, NULL, NULL),
(5, 2, '1726093054627.jpg', 'Construction updates', 1, '2024-09-11 22:17:34', NULL, NULL, NULL, NULL),
(6, 2, '1726093054722.jpg', 'Plans', 1, '2024-09-11 22:17:34', NULL, NULL, NULL, NULL),
(7, 2, '1726093054605.jpg', 'Virtual Tour', 1, '2024-09-11 22:17:34', NULL, NULL, NULL, NULL),
(8, 2, '1726093054578.jpg', 'Walkthrough', 1, '2024-09-11 22:17:34', NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `project_hallmarks`
--

CREATE TABLE `project_hallmarks` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `project_details_id` bigint(20) UNSIGNED DEFAULT NULL,
  `hallmarks` varchar(255) DEFAULT NULL,
  `inserted_by` int(11) DEFAULT NULL,
  `inserted_at` timestamp NULL DEFAULT NULL,
  `modified_by` int(11) DEFAULT NULL,
  `modified_at` timestamp NULL DEFAULT NULL,
  `deleted_by` int(11) DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `project_hallmarks`
--

INSERT INTO `project_hallmarks` (`id`, `project_details_id`, `hallmarks`, `inserted_by`, `inserted_at`, `modified_by`, `modified_at`, `deleted_by`, `deleted_at`) VALUES
(1, 1, '5 Towers of G + 28 Storeys', 1, '2024-09-11 22:04:03', NULL, NULL, NULL, NULL),
(2, 1, '1, 2, 2.5 & 3.5 BHK Sea-view Residences', 1, '2024-09-11 22:04:03', NULL, NULL, NULL, NULL),
(3, 1, '60,000 Sq. Ft. Podium Garden', 1, '2024-09-11 22:04:03', NULL, NULL, NULL, NULL),
(4, 1, 'Superfast connectivity to Vashi, ATAL SETU, Mulund and Ghatkopar.', 1, '2024-09-11 22:04:03', NULL, NULL, NULL, NULL),
(5, 1, 'Grand Entrance Lobby & Designer Lifts', 1, '2024-09-11 22:04:03', NULL, NULL, NULL, NULL),
(6, 1, 'Uber-modern Club House', 1, '2024-09-11 22:04:03', NULL, NULL, NULL, NULL),
(7, 1, '5 Minutes\' drive from the Palm Beach Road', 1, '2024-09-11 22:04:03', NULL, NULL, NULL, NULL),
(8, 1, 'Upcoming 150 acres Sports Complex', 1, '2024-09-11 22:04:03', NULL, NULL, NULL, NULL),
(9, 1, '45 acres Recreational Park at Neighbourhood', 1, '2024-09-11 22:04:03', NULL, NULL, NULL, NULL),
(10, 1, 'Undisrupted Sea & Green Mangroves Views', 1, '2024-09-11 22:04:03', NULL, NULL, NULL, NULL),
(11, 2, '5 Towers of G + 28 Storeys', 1, '2024-09-11 22:17:34', NULL, NULL, NULL, NULL),
(12, 2, '1, 2, 2.5 & 3.5 BHK Sea-view Residences', 1, '2024-09-11 22:17:34', NULL, NULL, NULL, NULL),
(13, 2, '60,000 Sq. Ft. Podium Garden', 1, '2024-09-11 22:17:34', NULL, NULL, NULL, NULL),
(14, 2, 'Superfast connectivity to Vashi, ATAL SETU, Mulund and Ghatkopar.', 1, '2024-09-11 22:17:34', NULL, NULL, NULL, NULL),
(15, 2, 'Grand Entrance Lobby & Designer Lifts', 1, '2024-09-11 22:17:34', NULL, NULL, NULL, NULL),
(16, 2, 'Uber-modern Club House', 1, '2024-09-11 22:17:34', NULL, NULL, NULL, NULL),
(17, 2, '5 Minutes\' drive from the Palm Beach Road', 1, '2024-09-11 22:17:34', NULL, NULL, NULL, NULL),
(18, 2, 'Upcoming 150 acres Sports Complex', 1, '2024-09-11 22:17:34', NULL, NULL, NULL, NULL),
(19, 2, '45 acres Recreational Park at Neighbourhood', 1, '2024-09-11 22:17:34', NULL, NULL, NULL, NULL),
(20, 2, 'Undisrupted Sea & Green Mangroves Views', 1, '2024-09-11 22:17:34', NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `project_location_advantages`
--

CREATE TABLE `project_location_advantages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `project_details_id` bigint(20) UNSIGNED DEFAULT NULL,
  `location_advantage_id` bigint(20) UNSIGNED DEFAULT NULL,
  `feature_value` varchar(255) DEFAULT NULL,
  `inserted_by` int(11) DEFAULT NULL,
  `inserted_at` timestamp NULL DEFAULT NULL,
  `modified_by` int(11) DEFAULT NULL,
  `modified_at` timestamp NULL DEFAULT NULL,
  `deleted_by` int(11) DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `project_location_advantages`
--

INSERT INTO `project_location_advantages` (`id`, `project_details_id`, `location_advantage_id`, `feature_value`, `inserted_by`, `inserted_at`, `modified_by`, `modified_at`, `deleted_by`, `deleted_at`) VALUES
(1, 1, 1, 'Proposed Navi Mumbai International Airport - 30 Mins', 1, '2024-09-11 22:04:03', NULL, NULL, NULL, NULL),
(2, 1, 1, 'Thane Railway Station - 15 Mins', 1, '2024-09-11 22:04:03', NULL, NULL, NULL, NULL),
(3, 1, 1, 'Vashi - 10 Mins', 1, '2024-09-11 22:04:03', NULL, NULL, NULL, NULL),
(4, 1, 1, 'Reliance Hospital - 7 Mins', 1, '2024-09-11 22:04:03', NULL, NULL, NULL, NULL),
(5, 1, 1, 'Ghansoli Railway Station - 5 Mins', 1, '2024-09-11 22:04:03', NULL, NULL, NULL, NULL),
(6, 1, 1, 'Palm Beach Road - 2 Mins', 1, '2024-09-11 22:04:03', NULL, NULL, NULL, NULL),
(7, 1, 1, 'Proposed Ghatkopar-Ghansoli Link Road - 1 Min', 1, '2024-09-11 22:04:03', NULL, NULL, NULL, NULL),
(8, 1, 2, 'Close to D-Mart, Inorbit & Raghuleela Mall', 1, '2024-09-11 22:04:03', NULL, NULL, NULL, NULL),
(9, 1, 2, 'Close to renowned Educational Institutions & Hospitals', 1, '2024-09-11 22:04:03', NULL, NULL, NULL, NULL),
(10, 1, 2, 'Hotels like Ramada, Courtyard and eateries like McDonald\'s nearby', 1, '2024-09-11 22:04:03', NULL, NULL, NULL, NULL),
(11, 1, 2, 'Well-known IT Parks, Dhirubhai Ambani Knowledge Centre', 1, '2024-09-11 22:04:03', NULL, NULL, NULL, NULL),
(12, 1, 2, 'Mind Space, Millennium Business Park, etc., are in close proximity', 1, '2024-09-11 22:04:03', NULL, NULL, NULL, NULL),
(13, 1, 3, 'Gagangiri Maharaj Marg, Jijamata Nagar, Sector 11, Ghansoli, Navi Mumbai, Maharashtra 400701, India', 1, '2024-09-11 22:04:03', NULL, NULL, NULL, NULL),
(14, 2, 1, 'Proposed Navi Mumbai International Airport - 30 Mins', 1, '2024-09-11 22:17:34', NULL, NULL, NULL, NULL),
(15, 2, 1, 'Thane Railway Station - 15 Mins', 1, '2024-09-11 22:17:34', NULL, NULL, NULL, NULL),
(16, 2, 1, 'Vashi - 10 Mins', 1, '2024-09-11 22:17:34', NULL, NULL, NULL, NULL),
(17, 2, 1, 'Reliance Hospital - 7 Mins', 1, '2024-09-11 22:17:34', NULL, NULL, NULL, NULL),
(18, 2, 1, 'Ghansoli Railway Station - 5 Mins', 1, '2024-09-11 22:17:34', NULL, NULL, NULL, NULL),
(19, 2, 1, 'Palm Beach Road - 2 Mins', 1, '2024-09-11 22:17:34', NULL, NULL, NULL, NULL),
(20, 2, 1, 'Proposed Ghatkopar-Ghansoli Link Road - 1 Min', 1, '2024-09-11 22:17:34', NULL, NULL, NULL, NULL),
(21, 2, 2, 'Close to D-Mart, Inorbit & Raghuleela Mall', 1, '2024-09-11 22:17:34', NULL, NULL, NULL, NULL),
(22, 2, 2, 'Close to renowned Educational Institutions & Hospitals', 1, '2024-09-11 22:17:34', NULL, NULL, NULL, NULL),
(23, 2, 2, 'Hotels like Ramada, Courtyard and eateries like McDonald\'s nearby', 1, '2024-09-11 22:17:34', NULL, NULL, NULL, NULL),
(24, 2, 2, 'Well-known IT Parks, Dhirubhai Ambani Knowledge Centre', 1, '2024-09-11 22:17:34', NULL, NULL, NULL, NULL),
(25, 2, 2, 'Mind Space, Millennium Business Park, etc., are in close proximity', 1, '2024-09-11 22:17:34', NULL, NULL, NULL, NULL),
(26, 2, 3, 'Gagangiri Maharaj Marg, Jijamata Nagar, Sector 11, Ghansoli, Navi Mumbai, Maharashtra 400701, India', 1, '2024-09-11 22:17:34', NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `refer_loyalty_programs`
--

CREATE TABLE `refer_loyalty_programs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `description` text DEFAULT NULL,
  `inserted_by` int(11) DEFAULT NULL,
  `inserted_at` timestamp NULL DEFAULT NULL,
  `modified_by` int(11) DEFAULT NULL,
  `modified_at` timestamp NULL DEFAULT NULL,
  `deleted_by` int(11) DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `refer_loyalty_programs`
--

INSERT INTO `refer_loyalty_programs` (`id`, `description`, `inserted_by`, `inserted_at`, `modified_by`, `modified_at`, `deleted_by`, `deleted_at`) VALUES
(1, 'Step 1 :&nbsp;Fill up the form, and provide the name, email address and mobile number of your friend or family member who wishes to buy a home.<br>', 1, '2024-09-09 05:26:57', NULL, NULL, NULL, NULL),
(2, 'Step 2 :&nbsp;We will speak to your friends and family and introduce them to the world of Bhairaav. We will also not forget to inform them that since they have been referred by an existing Bhairaav customer, they have some very special benefits!<br>', 1, '2024-09-09 05:27:17', NULL, NULL, NULL, NULL),
(3, 'Step 3 :&nbsp;Once the person you have referred buys a property with us, you get rewarded too!<br>', 1, '2024-09-09 05:27:36', NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `re_investment_loyalty_programs`
--

CREATE TABLE `re_investment_loyalty_programs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `description` text DEFAULT NULL,
  `inserted_by` int(11) DEFAULT NULL,
  `inserted_at` timestamp NULL DEFAULT NULL,
  `modified_by` int(11) DEFAULT NULL,
  `modified_at` timestamp NULL DEFAULT NULL,
  `deleted_by` int(11) DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `re_investment_loyalty_programs`
--

INSERT INTO `re_investment_loyalty_programs` (`id`, `description`, `inserted_by`, `inserted_at`, `modified_by`, `modified_at`, `deleted_by`, `deleted_at`) VALUES
(1, 'We will be happy to welcome you back! The Bhairaav loyalty program also rewards customers who choose to re-invest with us. Never-before offers at never-before prices are waiting for you!', 1, '2024-09-09 05:26:15', NULL, NULL, NULL, NULL);

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
('IfDI6Lus5oOT6X4PMjowjFgNFe8siSLfqvDOnUkw', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/128.0.0.0 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiQlN6MEFvSXYxNkFTdmRaeGxKSFluWktybHlpM01BTmE5bFB4bzF5TSI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czoxMDoiY3NyZl90b2tlbiI7czo0MDoiQlN6MEFvSXYxNkFTdmRaeGxKSFluWktybHlpM01BTmE5bFB4bzF5TSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMCI7fX0=', 1726093669),
('LMzNTNkdjjxQBBCdehUoaA2q7xtk75NWL3w1YWmt', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/128.0.0.0 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoibUQ3MFdCUFZTNHhaSFBTclA0Zm5VM0lLTGFLOXhSYkkxMzNvbmgwayI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJuZXciO2E6MDp7fXM6Mzoib2xkIjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6OTg6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9iaGFpcmFhdi9wcm9qZWN0cy9vbmdvaW5nLXByb2plY3QvcmVzaWRlbnRpYWwtcHJvamVjdC92aWV3LXByb2plY3QtZGV0YWlscy8xIjt9czoxMDoiY3NyZl90b2tlbiI7czo0MDoibUQ3MFdCUFZTNHhaSFBTclA0Zm5VM0lLTGFLOXhSYkkxMzNvbmgwayI7fQ==', 1726104748);

-- --------------------------------------------------------

--
-- Table structure for table `sliders`
--

CREATE TABLE `sliders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `subtitle` varchar(255) DEFAULT NULL,
  `banner_imag` varchar(255) DEFAULT NULL,
  `inserted_by` int(11) DEFAULT NULL,
  `inserted_at` timestamp NULL DEFAULT NULL,
  `modified_by` int(11) DEFAULT NULL,
  `modified_at` timestamp NULL DEFAULT NULL,
  `deleted_by` int(11) DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sliders`
--

INSERT INTO `sliders` (`id`, `title`, `subtitle`, `banner_imag`, `inserted_by`, `inserted_at`, `modified_by`, `modified_at`, `deleted_by`, `deleted_at`) VALUES
(1, 'Thane\'s Newest Tech Landmark', 'Office Spaces Starting at 665 sq. Ft.', '1725856564424.jpg', 1, '2024-09-09 04:36:04', NULL, NULL, NULL, NULL),
(2, 'Invest in luxury for a better lifestyle, better life', 'Welcome to Bhairaav Group', '172585662741.jpg', 1, '2024-09-09 04:37:07', NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `statistics`
--

CREATE TABLE `statistics` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `inserted_by` int(11) DEFAULT NULL,
  `inserted_at` timestamp NULL DEFAULT NULL,
  `modified_by` int(11) DEFAULT NULL,
  `modified_at` timestamp NULL DEFAULT NULL,
  `deleted_by` int(11) DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `statistics`
--

INSERT INTO `statistics` (`id`, `name`, `description`, `inserted_by`, `inserted_at`, `modified_by`, `modified_at`, `deleted_by`, `deleted_at`) VALUES
(1, 'Years of Experience', '20', 1, '2024-09-09 04:53:24', NULL, NULL, NULL, NULL),
(2, 'Established Creations', '1.5 Million sq. ft.', 1, '2024-09-09 04:54:31', NULL, NULL, NULL, NULL),
(3, 'Ongoing & Upcoming Projects', '<div>5 Million sq. ft.</div>', 1, '2024-09-09 04:55:08', NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `strengths`
--

CREATE TABLE `strengths` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `icon_name` varchar(255) NOT NULL,
  `icon_image` varchar(255) DEFAULT NULL,
  `other_description` text DEFAULT NULL,
  `inserted_by` int(11) DEFAULT NULL,
  `inserted_at` timestamp NULL DEFAULT NULL,
  `modified_by` int(11) DEFAULT NULL,
  `modified_at` timestamp NULL DEFAULT NULL,
  `deleted_by` int(11) DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `strengths`
--

INSERT INTO `strengths` (`id`, `title`, `icon_name`, `icon_image`, `other_description`, `inserted_by`, `inserted_at`, `modified_by`, `modified_at`, `deleted_by`, `deleted_at`) VALUES
(1, 'Setting the Standard in Real Estate with Commitment to Excellent Craftsmanship', 'Vision', '1725860204711.png', '[\"We are committed to our customers by providing high-class Residential & Commercial spaces with lifestyle amenities, top-class quality & timely possession, thereby elevating their values and lifestyles.\",\"We pride ourselves on being the preferred choice for prospective customers.\"]', 1, '2024-09-09 05:36:44', NULL, NULL, NULL, NULL),
(2, 'Setting the Standard in Real Estate with Commitment to Excellent Craftsmanship', 'Mission', '1725860427518.png', '[\"Design living spaces in tune with the lifestyle of customers.\",\"Emerge is a premium brand to reckon with.\",\"Constantly innovate and expand creative repertoire through meticulous planning and move with changing trends.\",\"Carve landmark projects in residential and commercial arenas.\",\"Institutionalize transparent and upfront dealing.\",\"Involve and evolve our core asset and partners in progress - employees.\",\"Constantly elevate standards and create benchmarks in the real estate field.\"]', 1, '2024-09-09 05:40:27', NULL, NULL, NULL, NULL),
(3, 'Setting the Standard in Real Estate with Commitment to Excellent Craftsmanship', 'Values', '1725860492909.png', '[\"Professionalism For us it symbolizes consistency in quality, as quality is remembered long after the price is forgotten.\"]', 1, '2024-09-09 05:41:32', NULL, NULL, NULL, NULL),
(4, 'Setting the Standard in Real Estate with Commitment to Excellent Craftsmanship', 'Quality', '1725860571807.png', '[\"As a working system, we do not accept anything but the best - the result is quality.\"]', 1, '2024-09-09 05:42:51', NULL, NULL, NULL, NULL),
(5, 'Setting the Standard in Real Estate with Commitment to Excellent Craftsmanship', 'Innovation', '172586066699.png', '[\"We endeavor to constantly innovate and improvise our designs, products, layout, processes, and procedures to deliver improved products with timely possession.\"]', 1, '2024-09-09 05:44:26', NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `testimonials`
--

CREATE TABLE `testimonials` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `star_count` int(11) DEFAULT NULL,
  `profile_image` varchar(255) DEFAULT NULL,
  `inserted_by` int(11) DEFAULT NULL,
  `inserted_at` timestamp NULL DEFAULT NULL,
  `modified_by` int(11) DEFAULT NULL,
  `modified_at` timestamp NULL DEFAULT NULL,
  `deleted_by` int(11) DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `testimonials`
--

INSERT INTO `testimonials` (`id`, `name`, `description`, `star_count`, `profile_image`, `inserted_by`, `inserted_at`, `modified_by`, `modified_at`, `deleted_by`, `deleted_at`) VALUES
(1, 'Mr. Pramod Bonde', '<span>Recently                        booked a 3.5 BHK flat in Goldcrest Residency Ghansoli. Briefing about the project                        by staff is excellent and very accommodative. Construction quality is also                        good. The overall project is good.</span>', 6, '1725857986419.jpg', 1, '2024-09-09 04:59:46', NULL, NULL, NULL, NULL),
(2, 'Mrs. Rinky Juneja', '<span>An emotional moment,                        thank you Team Bhairaav for making it                        so special with the decoration and hospitality.                        Thank You again</span>', 5, '1725858066769.jpg', 1, '2024-09-09 05:01:06', NULL, NULL, NULL, NULL),
(3, 'Mr. Paresh Doyle', '<span>Executives                        assist in getting home loans through various financial                        institutions and banks and assisting with all the aspects that go on in any                        real-estate deal. The project is occupied with all amenities like Club House,                        Swimming Pool, Jogging Track, etc. The flats are worth the                        value.</span>', 5, '1725858134579.jpg', 1, '2024-09-09 05:02:14', NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `the_progress_details`
--

CREATE TABLE `the_progress_details` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `description` text DEFAULT NULL,
  `progress_image` varchar(255) DEFAULT NULL,
  `inserted_by` int(11) DEFAULT NULL,
  `inserted_at` timestamp NULL DEFAULT NULL,
  `modified_by` int(11) DEFAULT NULL,
  `modified_at` timestamp NULL DEFAULT NULL,
  `deleted_by` int(11) DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `the_progress_details`
--

INSERT INTO `the_progress_details` (`id`, `description`, `progress_image`, `inserted_by`, `inserted_at`, `modified_by`, `modified_at`, `deleted_by`, `deleted_at`) VALUES
(1, 'Since its inception, the company has grown multi-fold and flourished over the years through sheer hard work, dedication, and commitment to quality. By clinching numerous strategic land deals and delivering several multi-storied apartments comprising contemporary world-class amenities, Bhairaav Group crafts lifestyles and life spaces that suit contemporary times. Bhairaav Housing Corporation Limited, the Realty Division of the Bhairaav Group is acknowledged for high-quality construction and transparency in dealings, the group is steadily forging ahead to create its niche in the Real Estate Industry.', '172585996647.jpg', 1, '2024-09-09 05:32:46', NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `inserted_by` int(11) DEFAULT NULL,
  `inserted_dt` timestamp NULL DEFAULT NULL,
  `modified_by` int(11) DEFAULT NULL,
  `modified_dt` timestamp NULL DEFAULT NULL,
  `deleted_by` int(11) DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `inserted_by`, `inserted_dt`, `modified_by`, `modified_dt`, `deleted_by`, `deleted_at`) VALUES
(1, 'Admin', 'admin@gmail.com', NULL, '$2y$12$fIZQf6b.DoJLAEkhVKh8ou353ZPSgBj3U0JGANcLEqzgm/..RZmKm', 'TDnvnZ4KiWCd83YF7WP5GhOjFVso8oWCRDsxGYsmstN7bQLDD19akW7CbDo8', 1, '2024-09-09 04:07:57', NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `why_choose_bhairaavs`
--

CREATE TABLE `why_choose_bhairaavs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `inserted_by` int(11) DEFAULT NULL,
  `inserted_at` timestamp NULL DEFAULT NULL,
  `modified_by` int(11) DEFAULT NULL,
  `modified_at` timestamp NULL DEFAULT NULL,
  `deleted_by` int(11) DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `why_choose_bhairaavs`
--

INSERT INTO `why_choose_bhairaavs` (`id`, `title`, `description`, `image`, `inserted_by`, `inserted_at`, `modified_by`, `modified_at`, `deleted_by`, `deleted_at`) VALUES
(1, 'Why Choose Bhairaav', 'Lorem Ipsum is simply the printing and typesetting industry\'s standard dummy text. It has been so since the 1500s when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived five centuries and the leap into electronic typesetting, remaining essentially unchanged.', '1725857867550.jpg', 1, '2024-09-09 04:57:47', NULL, NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `backing_partners`
--
ALTER TABLE `backing_partners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `blogs_category_id_foreign` (`category_id`);

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
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `channel_partners`
--
ALTER TABLE `channel_partners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_us`
--
ALTER TABLE `contact_us`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `how_work_loyalty_programs`
--
ALTER TABLE `how_work_loyalty_programs`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `journeys`
--
ALTER TABLE `journeys`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `latest_updates`
--
ALTER TABLE `latest_updates`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `leaders`
--
ALTER TABLE `leaders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `legacies`
--
ALTER TABLE `legacies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `legacy_of_excellences`
--
ALTER TABLE `legacy_of_excellences`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `location_advantages`
--
ALTER TABLE `location_advantages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `loyalty_programs`
--
ALTER TABLE `loyalty_programs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `media`
--
ALTER TABLE `media`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `members`
--
ALTER TABLE `members`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `our_logos`
--
ALTER TABLE `our_logos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `our_teams`
--
ALTER TABLE `our_teams`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `partners`
--
ALTER TABLE `partners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `project_amenities`
--
ALTER TABLE `project_amenities`
  ADD PRIMARY KEY (`id`),
  ADD KEY `project_amenities_project_details_id_index` (`project_details_id`);

--
-- Indexes for table `project_details`
--
ALTER TABLE `project_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `project_galleries`
--
ALTER TABLE `project_galleries`
  ADD PRIMARY KEY (`id`),
  ADD KEY `project_galleries_project_details_id_index` (`project_details_id`);

--
-- Indexes for table `project_hallmarks`
--
ALTER TABLE `project_hallmarks`
  ADD PRIMARY KEY (`id`),
  ADD KEY `project_hallmarks_project_details_id_index` (`project_details_id`);

--
-- Indexes for table `project_location_advantages`
--
ALTER TABLE `project_location_advantages`
  ADD PRIMARY KEY (`id`),
  ADD KEY `project_location_advantages_project_details_id_index` (`project_details_id`),
  ADD KEY `project_location_advantages_location_advantage_id_index` (`location_advantage_id`);

--
-- Indexes for table `refer_loyalty_programs`
--
ALTER TABLE `refer_loyalty_programs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `re_investment_loyalty_programs`
--
ALTER TABLE `re_investment_loyalty_programs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `sliders`
--
ALTER TABLE `sliders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `statistics`
--
ALTER TABLE `statistics`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `strengths`
--
ALTER TABLE `strengths`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `testimonials`
--
ALTER TABLE `testimonials`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `the_progress_details`
--
ALTER TABLE `the_progress_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `why_choose_bhairaavs`
--
ALTER TABLE `why_choose_bhairaavs`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `backing_partners`
--
ALTER TABLE `backing_partners`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `channel_partners`
--
ALTER TABLE `channel_partners`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `contact_us`
--
ALTER TABLE `contact_us`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `how_work_loyalty_programs`
--
ALTER TABLE `how_work_loyalty_programs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `journeys`
--
ALTER TABLE `journeys`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `latest_updates`
--
ALTER TABLE `latest_updates`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `leaders`
--
ALTER TABLE `leaders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `legacies`
--
ALTER TABLE `legacies`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `legacy_of_excellences`
--
ALTER TABLE `legacy_of_excellences`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `location_advantages`
--
ALTER TABLE `location_advantages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `loyalty_programs`
--
ALTER TABLE `loyalty_programs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `media`
--
ALTER TABLE `media`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `members`
--
ALTER TABLE `members`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=105;

--
-- AUTO_INCREMENT for table `our_logos`
--
ALTER TABLE `our_logos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `our_teams`
--
ALTER TABLE `our_teams`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `partners`
--
ALTER TABLE `partners`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `projects`
--
ALTER TABLE `projects`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `project_amenities`
--
ALTER TABLE `project_amenities`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `project_details`
--
ALTER TABLE `project_details`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `project_galleries`
--
ALTER TABLE `project_galleries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `project_hallmarks`
--
ALTER TABLE `project_hallmarks`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `project_location_advantages`
--
ALTER TABLE `project_location_advantages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `refer_loyalty_programs`
--
ALTER TABLE `refer_loyalty_programs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `re_investment_loyalty_programs`
--
ALTER TABLE `re_investment_loyalty_programs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `sliders`
--
ALTER TABLE `sliders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `statistics`
--
ALTER TABLE `statistics`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `strengths`
--
ALTER TABLE `strengths`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `testimonials`
--
ALTER TABLE `testimonials`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `the_progress_details`
--
ALTER TABLE `the_progress_details`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `why_choose_bhairaavs`
--
ALTER TABLE `why_choose_bhairaavs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `blogs`
--
ALTER TABLE `blogs`
  ADD CONSTRAINT `blogs_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
