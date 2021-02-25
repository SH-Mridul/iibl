-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 24, 2021 at 06:00 AM
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
-- Database: `rocketec_iibl_project_development_db`
--

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
-- Table structure for table `iibl_at_a_glance`
--

CREATE TABLE `iibl_at_a_glance` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `english` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `bangla` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `iibl_at_a_glance`
--

INSERT INTO `iibl_at_a_glance` (`id`, `english`, `bangla`, `created_at`, `updated_at`) VALUES
(2, '<table border=\"0\" cellpadding=\"1\" cellspacing=\"1\" style=\"width:100%\">\n	<tbody>\n		<tr>\n			<td>\n			<h3><strong>Registered Office</strong></h3>\n\n			<p>Islami Insurance Bangladesh Limited<br />\n			DR Tower (11th Floor)<br />\n			Box Culvert Road<br />\n			65/2/2 Purana Paltan<br />\n			Dhaka-1000</p>\n\n			<h3><strong>Auditor&nbsp;</strong></h3>\n\n			<p>MahfelHuq&amp; Co.<br />\n			Chartered Accountants<br />\n			BGIC Tower (4th Floor)<br />\n			34 Topkhana Road<br />\n			Dhaka-1000, Bangladesh<br />\n			Ph: +880-2-9553143<br />\n			email: info@mahfelhuq.com</p>\n\n			<h3><strong>Membership (Native)&nbsp;</strong></h3>\n\n			<ul>\n				<li>Bangladesh Insurance Association</li>\n				<li>Bangladesh Insurance Academy</li>\n				<li>Bangladesh Association of Publicly Listed Companies (BAPLC)</li>\n				<li>.................</li>\n			</ul>\n\n			<h3><strong>Stock Exchange Listing</strong></h3>\n\n			<p>Ordinary Share of the Company listed with both<br />\n			Dhaka Stock Exchange Limited and Chittagong<br />\n			Stock Exchange Limited. Shares of IIBL are<br />\n			categorized as &lsquo;A&rsquo; in both the stock exchanges.</p>\n\n			<h3><strong>Listing Year</strong></h3>\n\n			<p>Dhaka Stock Exchange Lt. : 26 October 2009<br />\n			Chittagong Stock Exchange Ltd.: 26 October 2009</p>\n\n			<h3><strong>Accounting Year</strong></h3>\n\n			<p>1st January to 31st December</p>\n			</td>\n			<td>\n			<h3><strong>Corporate Website&nbsp;</strong></h3>\n\n			<p>www.islamiinsurance.com</p>\n\n			<h3><strong>E-mail&nbsp;</strong></h3>\n\n			<p>www.islamiinsurance.com</p>\n\n			<h3><strong>Nature of Business</strong></h3>\n\n			<p>All kinds of the non-life insurance business.</p>\n\n			<h3><strong>Corporate Governance Compliance Auditor</strong></h3>\n\n			<p>Ahmed Zaker&amp; Co.<br />\n			Chartered Accountants<br />\n			Green City Edge (10th Floor)<br />\n			89 Kakrail, Dhaka-1000<br />\n			Tel: 8300504-8, 8300501-2, Fax: +880-2-8300509<br />\n			Cell No. 01712900886, 01711-056363<br />\n			E-mail: azcbangladesh@ahmed-zaker.com<br />\n			zakerahmed@ahmed-zaker.com</p>\n\n			<h3><strong>Capital (31st December 2019)</strong></h3>\n\n			<p>Authorized capital : 1000,000,000.00<br />\n			Paid-up capital : 356,408,7880.00</p>\n\n			<h3><strong>Tax Consultant</strong></h3>\n\n			<p>Mahfil Huq &amp; Co.<br />\n			Chartered Accountants<br />\n			BGIC Tower (4 th Floor )<br />\n			34, Topkhana Road, Dhaka<br />\n			Tel: +88-02-9553143, 9581786<br />\n			Fax: +88-02-9571005<br />\n			E-mail: mah@mahfelhuq.com<br />\n			Web: www.mahfelhuq.com</p>\n			</td>\n		</tr>\n	</tbody>\n</table>', '<table border=\"0\" cellpadding=\"1\" cellspacing=\"1\" style=\"width:100%\">\n	<tbody>\n		<tr>\n			<td>\n			<h3><strong>নিবন্ধিত কার্য্যালয়</strong></h3>\n\n			<p>ইসলামী ইন্স্যুরেন্স বাংলাদেশ লিমিটেড<br />\n			ডিআর টাওয়ার (১২ তলা)<br />\n			বক্স কাল ভার্ট রোড<br />\n			৬৫/২/২ পুরানা পল্টন রোড<br />\n			ঢাকা-১০০০</p>\n\n			<h3><strong>নিরীক্ষক</strong></h3>\n\n			<p>মাহফেল হক এন্ড কোং<br />\n			চার্টার একাউন্ট্যান্টস<br />\n			বিজিআইসি টাওয়ার (৫ম তলা)<br />\n			৩৪ তোপখানা রোড<br />\n			ঢাকা-১০০০, বাংলাদেশ<br />\n			ফোনঃ +৮৮০-২-৯৫৫৩১৪৩<br />\n			ইমেইলঃinfo@mahfelhuq.com</p>\n\n			<h3><strong>সদস্যপদ (স্থানীয়)</strong></h3>\n\n			<ul>\n				<li>বাংলাদেশ ইন্স্যুরেন্স এসোসিয়েশন</li>\n				<li>বাংলাদেশ ইন্স্যুরেন্স একাডেমী</li>\n				<li>বাংলাদেশ এসোসিয়েশন অব পাবলিকলি লিস্টেড কোম্পানীজ (বিএপিএলসি)</li>\n				<li>.................</li>\n			</ul>\n\n			<h3><strong>স্টক এক্সচেঞ্জের তালিকা</strong></h3>\n\n			<p>অনুবাদ</p>\n\n			<h3><strong>তালিকা বছর</strong></h3>\n\n			<p>ঢাকা স্টক এক্সচেঞ্জ লিমিটেডঃ ২৬ অক্টোবর ২০০৯<br />\n			চিটাগাং স্টক এক্সচেঞ্জ লিমিটেডঃ ২৬ অক্টোবর ২০০৯</p>\n\n			<h3><strong>অ্যাকাউন্টিং বছর</strong></h3>\n\n			<p>১ জানুয়ারী থেকে ৩১ ডিসেম্বর</p>\n			</td>\n			<td>\n			<h3><strong>কর্পোরেট ওয়েবসাইট</strong></h3>\n\n			<p><strong>&nbsp;</strong>www.islamiinsurance.com</p>\n\n			<h3><strong>ই-মেইল</strong></h3>\n\n			<p>www.islamiinsurance.com</p>\n\n			<h3><strong>ব্যবসা প্রকৃতি</strong></h3>\n\n			<p>সমস্ত প্রকার জীবনহীন/সাধারণ বীমা ব্যবসা।</p>\n\n			<h3><strong>কর্পোরেট গভর্নেন্স কমপ্লায়েন্স অডিটর</strong></h3>\n\n			<p>আহমেদ জাকের এন্ড কোং<br />\n			চার্টারড একাউনট্যান্টস<br />\n			গ্রীন সিটি এজ (১১ তলা)<br />\n			৮৯ কাকরাইল, ঢাকা-১০০০<br />\n			টেলিফোনঃ ৮৩০০৫০৪-৮, ৮৩০০৫০১-২, ফ্যাক্সঃ<br />\n			৮৮০-২-৮৩০০৫০৯<br />\n			মোবাইলঃ ০১৭১২৯০০৮৮৬, ০১৭১১-০৫৬৩৬৩<br />\n			ই-মেইলঃ azcbangladesh@ahmed-zaker.com,<br />\n			zakerahmed@ahmed-zaker.com</p>\n\n			<h3><strong>মূলধন (31 ডিসেম্বর 2019)</strong></h3>\n\n			<p>অথোরাইজড ক্যাপিটাল : 1000,000,000.00<br />\n			পেইড আপ ক্যাপিটাল : 356,408,7880.00</p>\n\n			<h3><strong>ট্যাক্স কনসালট্যান্ট</strong></h3>\n\n			<p>মাহফেল হক এন্ড কোং<br />\n			চার্টার্ড একাউন্টেন্টস<br />\n			বিজিআইসি টাওয়ার (ফ্লোর ৪)<br />\n			৩৪ তোপখানা রোড, ঢাকা<br />\n			ফোন: +৮৮-০২-৯৫৫৩১৪৩, ৯৫৮১৭৮৬<br />\n			Fax: +৮৮-০২-৯৫৭১০০৫<br />\n			E-mail: mah@mahfelhuq.com<br />\n			Web: www.mahfelhuq.com</p>\n			</td>\n		</tr>\n	</tbody>\n</table>', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `key_corporate`
--

CREATE TABLE `key_corporate` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `english` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `bangla` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `key_corporate`
--

INSERT INTO `key_corporate` (`id`, `english`, `bangla`, `created_at`, `updated_at`) VALUES
(2, '<table border=\"1\" cellpadding=\"1\" cellspacing=\"1\" style=\"width:100%\">\n	<tbody>\n		<tr>\n			<td>Incorporation of the<br />\n			Company</td>\n			<td>25 October, 1999</td>\n		</tr>\n		<tr>\n			<td>Certificate for<br />\n			Commencement of<br />\n			Business</td>\n			<td>25 October, 1999</td>\n		</tr>\n		<tr>\n			<td>Registered with<br />\n			Department of<br />\n			Insurance<br />\n			(Now Insurance<br />\n			Development &amp;amp;<br />\n			Regulatory Authority<br />\n			(IDRA)</td>\n			<td>29 December, 1999</td>\n		</tr>\n	</tbody>\n</table>\n\n<p>&nbsp;</p>', '<table border=\"1\" cellpadding=\"1\" cellspacing=\"1\" style=\"width:100%\">\n	<tbody>\n		<tr>\n			<td>কোম্পানীর প্রতিষ্ঠা</td>\n			<td>২৫ অক্টোবর, ১৯৯৯</td>\n		</tr>\n		<tr>\n			<td>&nbsp;</td>\n			<td>২৫ অক্টোবর, ১৯৯৯</td>\n		</tr>\n		<tr>\n			<td>&nbsp;</td>\n			<td>২৯ ডিসেম্বর, ১৯৯৯</td>\n		</tr>\n	</tbody>\n</table>\n\n<p>&nbsp;</p>', NULL, NULL);

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
(3, '2016_06_01_000001_create_oauth_auth_codes_table', 1),
(4, '2016_06_01_000002_create_oauth_access_tokens_table', 1),
(5, '2016_06_01_000003_create_oauth_refresh_tokens_table', 1),
(6, '2016_06_01_000004_create_oauth_clients_table', 1),
(7, '2016_06_01_000005_create_oauth_personal_access_clients_table', 1),
(8, '2019_08_19_000000_create_failed_jobs_table', 1),
(9, '2019_12_09_044534_create_roles_table', 1),
(10, '2019_12_09_082630_create_role_user_table', 1),
(11, '2019_12_09_094511_create_social_accounts_table', 1),
(12, '2021_02_15_130350_create_who_we_ares_table', 2),
(13, '2021_02_16_070231_create_iibl_at_a_glance_table', 3);

-- --------------------------------------------------------

--
-- Table structure for table `oauth_access_tokens`
--

CREATE TABLE `oauth_access_tokens` (
  `id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `client_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `scopes` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `revoked` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `expires_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `oauth_auth_codes`
--

CREATE TABLE `oauth_auth_codes` (
  `id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `client_id` bigint(20) UNSIGNED NOT NULL,
  `scopes` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `revoked` tinyint(1) NOT NULL,
  `expires_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `oauth_clients`
--

CREATE TABLE `oauth_clients` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `secret` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `provider` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `redirect` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `personal_access_client` tinyint(1) NOT NULL,
  `password_client` tinyint(1) NOT NULL,
  `revoked` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `oauth_personal_access_clients`
--

CREATE TABLE `oauth_personal_access_clients` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `client_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `oauth_refresh_tokens`
--

CREATE TABLE `oauth_refresh_tokens` (
  `id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `access_token_id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `revoked` tinyint(1) NOT NULL,
  `expires_at` datetime DEFAULT NULL
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
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `role_user`
--

CREATE TABLE `role_user` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `role_id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `social_accounts`
--

CREATE TABLE `social_accounts` (
  `user_id` int(11) NOT NULL,
  `provider_user_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `provider` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
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
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
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

INSERT INTO `users` (`id`, `name`, `type`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Md.Shaikot Ikbal Hridoy', 'admin', 'ikbal15.1320.japan@gmail.com', NULL, '$2y$10$xiqQCzTmnhmh0qunzd2nUOZ.0b2p7SEjCqBxkkpMkpY9wpe1YaRk6', NULL, '2021-02-14 07:45:00', '2021-02-14 07:45:00');

-- --------------------------------------------------------

--
-- Table structure for table `who_we_ares`
--

CREATE TABLE `who_we_ares` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `english` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `bangla` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `who_we_ares`
--

INSERT INTO `who_we_ares` (`id`, `english`, `bangla`, `created_at`, `updated_at`) VALUES
(25, '<h3><strong>Who We Are</strong></h3>\n\n<p>Islami Insurance Bangladesh Limited (IIBL), the first General Insurance (Takaful) Company based on the Islami Shariah was registered and established under the Bangladesh Company Act, 1994 and the Bangladesh Insurance Act, 1938 on 29th December 1999 to transact all sorts of general Takaful business. The Company started functioning from 1st January 2000.</p>\n\n<h3><strong>Our Vision</strong></h3>\n\n<p>Islami Insurance Bangladesh Limited (IIBL), the first Islami Non-Life Insurance Company in Bangladesh, started its journey with the concept of Islamic Shariah. The Company&#39;s vision is to comply with Sharjah Principles in all business transactions and activities of the Company and to be a leader in the Insurance Industry of Bangladesh with Islamic values.</p>\n\n<h3><strong>Our Mission&nbsp;</strong></h3>\n\n<ul>\n	<li>To provide the maximum protection and security of wealth of our Clients.</li>\n	<li>To provide fast, accurate, and satisfactory services to the Clients.</li>\n	<li>To provide services to the Clients with sincerity and honesty along with the latest technology.</li>\n	<li>To maximize the interest of valued Clients and&nbsp;Shareholders.</li>\n	<li>To build a strong and dynamic institution and to make an effective contribution to national development.</li>\n</ul>\n\n<h3><strong>Our Commitments&nbsp;</strong></h3>\n\n<ul>\n	<li>To ensure maximum satisfaction of our valued Clients.</li>\n	<li>To settle claims of Clients very promptly.</li>\n	<li>To comply with the Sharjah Principles and maintain high-level ethical standards.</li>\n	<li>To provide the maximum protection of Investment of our Shareholders ensuring sustainable growth.</li>\n	<li>To develop good Governance and Corporate Culture.</li>\n	<li>To maintain the good relationship between Management and Clients, as well as, other concerns.</li>\n	<li>To endeavor for remarkable contribution to the&nbsp;national economy and development of the Country.</li>\n</ul>', '<h3><strong>আমাদের সম্পর্কে</strong></h3>\n\n<p>ইসলামী ইন্স্যুরেন্স বাংলাদেশ লিমিটেড (আইআইবিএল) হ&#39;ল প্রথম সাধারণ বীমা (তাকাফুল) সংস্থা যা ইসলামী শরিয়াহ ভিত্তিক বাংলাদেশ কোম্পানি আইন, ১৯৯৪ এবং বাংলাদেশ বীমা আইন, ১৯৩৮ এর অধীনে ২৯ ডিসেম্বর, ১৯৯৯-এ সমস্ত লেনদেনের জন্য নিবন্ধিত এবং প্রতিষ্ঠিত হয়েছিল বিভিন্ন ধরণের সাধারণ তাকফুল ব্যবসায়। সংস্থাটি ১ম জানুয়ারী, ২০০০ থেকে কাজ শুরু করে।</p>\n\n<h3><strong>আমাদের দৃষ্টিভঙ্গি&nbsp;</strong></h3>\n\n<p>ইসলামী ইন্স্যুরেন্স বাংলাদেশ লিমিটেড বাংলাদেশের প্রথম শরীয়াহ্ ভিত্তিক নন-লাইফ ইসলামী বীমা কোম্পানী যা ১৯৯৯ইং সালে কার্যক্রম শুরু করে। ইসলামী শরীয়াহ্র মূলনীতির আলোকে বীমার কার্যক্রম পরিচালনা এবং দেশের বীমা শিল্পে ইসলামী মূল্যবোধ ও ইসলামী অর্থনীতি প্রতিষ্ঠায় অবদান রাখা।</p>\n\n<h3><strong>আমাদের লক্ষ্য ও উদ্দেশ্য</strong></h3>\n\n<ul>\n	<li>ইসলামী শরীয়াহ্র অনুশাসন ও মুদারাবার ভিত্তিতে অংশীদারিত্বমূলক ব্যবস্থায় বীমা ব্যবসা পরিচালনা করা।</li>\n	<li>জনসাধারণ, ব্যবসায়ী, আমদানী-রফতানীকারক, কৃষিজীবিদের বীমা পলিসি গ্রহণে উদ্বুদ্ধ করে তহবিল গঠন করতঃ কল্যাণমূলক কর্মকান্ডে বিনিয়োগের মাধ্যমে অর্থনৈতিক উন্নয়নে ভূমিকা পালন করা।</li>\n	<li>সার্বিকভাবে কল্যাণমূলক বীমা ব্যবস্থা প্রবর্তন ও প্রসারেমানব সম্পদ উন্নয়ন ও কর্মসংস্থানের সুযোগ সৃষ্টিকরণে প্রত্যক্ষ অংশগ্রহণ করা।</li>\n	<li>সম্মানিত গ্রাহকদের সম্পদের সর্বোচ্চ সুরক্ষার নিশ্চয়তা প্রদান এবং দ্রুত বীমা সেবা প্রদান।</li>\n</ul>\n\n<h3><strong>আমাদের বৈশিষ্ট্য</strong></h3>\n\n<ul>\n	<li>ইসলামী শরীয়াহ্র ভিত্তিতে পরিচালিত</li>\n	<li>বীমাগ্রহীতা ও কোম্পানীর মধ্যে অংশীদারীত্বের ভিত্তিতে লাভ-লোকসান বন্টন</li>\n	<li>সুদমুক্ত খাতে বিনিয়োগ</li>\n	<li>ইসলামী ইন্স্যুরেন্স ফাউন্ডেশনের মাধ্যমে দুঃস্থ ও আর্ত-মানবতার সেবা</li>\n	<li>পরিচালনায় আল্লাহভীরুতা ও পেশাদারিত্বের চমৎকার সমন্বয়</li>\n</ul>', NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `iibl_at_a_glance`
--
ALTER TABLE `iibl_at_a_glance`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `key_corporate`
--
ALTER TABLE `key_corporate`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `oauth_access_tokens`
--
ALTER TABLE `oauth_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_access_tokens_user_id_index` (`user_id`);

--
-- Indexes for table `oauth_auth_codes`
--
ALTER TABLE `oauth_auth_codes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_auth_codes_user_id_index` (`user_id`);

--
-- Indexes for table `oauth_clients`
--
ALTER TABLE `oauth_clients`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_clients_user_id_index` (`user_id`);

--
-- Indexes for table `oauth_personal_access_clients`
--
ALTER TABLE `oauth_personal_access_clients`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `oauth_refresh_tokens`
--
ALTER TABLE `oauth_refresh_tokens`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_refresh_tokens_access_token_id_index` (`access_token_id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `role_user`
--
ALTER TABLE `role_user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `who_we_ares`
--
ALTER TABLE `who_we_ares`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `iibl_at_a_glance`
--
ALTER TABLE `iibl_at_a_glance`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `key_corporate`
--
ALTER TABLE `key_corporate`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `oauth_clients`
--
ALTER TABLE `oauth_clients`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `oauth_personal_access_clients`
--
ALTER TABLE `oauth_personal_access_clients`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `role_user`
--
ALTER TABLE `role_user`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `who_we_ares`
--
ALTER TABLE `who_we_ares`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
