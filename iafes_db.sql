-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 01, 2014 at 08:25 PM
-- Server version: 5.6.16
-- PHP Version: 5.5.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `iafes_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `autumn_pages`
--

CREATE TABLE IF NOT EXISTS `autumn_pages` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(10) unsigned DEFAULT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `content` text COLLATE utf8_unicode_ci,
  `content_html` text COLLATE utf8_unicode_ci NOT NULL,
  `active` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `meta_description` text COLLATE utf8_unicode_ci,
  `meta_keywords` text COLLATE utf8_unicode_ci,
  PRIMARY KEY (`id`),
  KEY `autumn_pages_user_id_index` (`user_id`),
  KEY `autumn_pages_slug_index` (`slug`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=6 ;

--
-- Dumping data for table `autumn_pages`
--

INSERT INTO `autumn_pages` (`id`, `user_id`, `title`, `slug`, `content`, `content_html`, `active`, `created_at`, `updated_at`, `meta_description`, `meta_keywords`) VALUES
(1, NULL, 'About IAFeS', 'about-iafes', 'This is IAFeeeeeeeeeeeeeeeeeeeeeeeS', '', 0, '2014-05-23 19:10:33', '2014-05-23 19:10:33', NULL, NULL),
(2, NULL, 'privacy policy', 'privacy-policy', 'This is privacy policy page', '', 0, '2014-05-23 19:11:09', '2014-05-23 19:11:09', NULL, NULL),
(5, NULL, 'contact us', 'contact-us', '<span></span>', '', 0, '2014-05-24 10:27:43', '2014-05-25 16:13:07', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `backend_users`
--

CREATE TABLE IF NOT EXISTS `backend_users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `first_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `last_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `login` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `activation_code` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `persist_code` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `reset_password_code` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `permissions` text COLLATE utf8_unicode_ci,
  `activated` tinyint(1) NOT NULL DEFAULT '0',
  `activated_at` timestamp NULL DEFAULT NULL,
  `last_login` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  UNIQUE KEY `backend_users_login_unique` (`login`),
  UNIQUE KEY `backend_users_email_unique` (`email`),
  KEY `backend_users_activation_code_index` (`activation_code`),
  KEY `backend_users_reset_password_code_index` (`reset_password_code`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- Dumping data for table `backend_users`
--

INSERT INTO `backend_users` (`id`, `first_name`, `last_name`, `login`, `email`, `password`, `activation_code`, `persist_code`, `reset_password_code`, `permissions`, `activated`, `activated_at`, `last_login`, `created_at`, `updated_at`) VALUES
(1, 'raoul', 'cristian', 'raul', 'admin@admin.admin', '$2y$10$CiqZjnZQ2wv/QbXTimivp.K.n2geQv4mIz2f9Y.n6uaC65dZn8x1W', NULL, '$2y$10$B1ogEO1DTT21wx6nO2BBsuwIQClgW1a5UdTXGfRbZ97QUHluswlr2', NULL, '{"superuser":1}', 1, NULL, '2014-06-01 13:58:35', '2014-05-19 17:58:58', '2014-06-01 13:58:35');

-- --------------------------------------------------------

--
-- Table structure for table `backend_users_groups`
--

CREATE TABLE IF NOT EXISTS `backend_users_groups` (
  `user_id` int(10) unsigned NOT NULL,
  `user_group_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`user_id`,`user_group_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `backend_users_groups`
--

INSERT INTO `backend_users_groups` (`user_id`, `user_group_id`) VALUES
(1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `backend_user_groups`
--

CREATE TABLE IF NOT EXISTS `backend_user_groups` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `permissions` text COLLATE utf8_unicode_ci,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  UNIQUE KEY `backend_user_groups_name_unique` (`name`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- Dumping data for table `backend_user_groups`
--

INSERT INTO `backend_user_groups` (`id`, `name`, `permissions`, `created_at`, `updated_at`) VALUES
(1, 'Admins', NULL, '2014-05-19 17:58:57', '2014-05-19 17:58:57');

-- --------------------------------------------------------

--
-- Table structure for table `backend_user_preferences`
--

CREATE TABLE IF NOT EXISTS `backend_user_preferences` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(10) unsigned NOT NULL,
  `namespace` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `group` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `item` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `value` text COLLATE utf8_unicode_ci,
  PRIMARY KEY (`id`),
  KEY `user_item_index` (`user_id`,`namespace`,`group`,`item`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- Dumping data for table `backend_user_preferences`
--

INSERT INTO `backend_user_preferences` (`id`, `user_id`, `namespace`, `group`, `item`, `value`) VALUES
(1, 1, 'backend', 'reportwidgets', 'dashboard', '{"systemStatus":{"class":"System\\\\ReportWidgets\\\\Status","sortOrder":1,"configuration":{"title":"System status","ocWidgetWidth":"10","ocWidgetNewRow":0}}}');

-- --------------------------------------------------------

--
-- Table structure for table `backend_user_throttle`
--

CREATE TABLE IF NOT EXISTS `backend_user_throttle` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(10) unsigned NOT NULL,
  `ip_address` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `attempts` int(11) NOT NULL DEFAULT '0',
  `suspended` tinyint(1) NOT NULL DEFAULT '0',
  `banned` tinyint(1) NOT NULL DEFAULT '0',
  `last_attempt_at` timestamp NULL DEFAULT NULL,
  `suspended_at` timestamp NULL DEFAULT NULL,
  `banned_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- Dumping data for table `backend_user_throttle`
--

INSERT INTO `backend_user_throttle` (`id`, `user_id`, `ip_address`, `attempts`, `suspended`, `banned`, `last_attempt_at`, `suspended_at`, `banned_at`) VALUES
(1, 1, '::1', 0, 0, 0, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `deferred_bindings`
--

CREATE TABLE IF NOT EXISTS `deferred_bindings` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `master_type` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `master_field` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `slave_type` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `slave_id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `session_key` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `bind` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  KEY `deferred_bindings_master_type_index` (`master_type`),
  KEY `deferred_bindings_master_field_index` (`master_field`),
  KEY `deferred_bindings_slave_type_index` (`slave_type`),
  KEY `deferred_bindings_slave_id_index` (`slave_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=4 ;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE IF NOT EXISTS `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`migration`, `batch`) VALUES
('2013_10_01_000001_Db_Deferred_Bindings', 1),
('2013_10_01_000002_Db_System_Files', 1),
('2013_10_01_000003_Db_System_Plugin_Versions', 1),
('2013_10_01_000004_Db_System_Plugin_History', 1),
('2013_10_01_000005_Db_System_Settings', 1),
('2013_10_01_000006_Db_System_Parameters', 1),
('2013_10_01_000001_Db_Backend_Users', 2),
('2013_10_01_000002_Db_Backend_User_Groups', 2),
('2013_10_01_000003_Db_Backend_Users_Groups', 2),
('2013_10_01_000004_Db_Backend_User_Throttle', 2),
('2014_01_04_000005_Db_Backend_User_Preferences', 2);

-- --------------------------------------------------------

--
-- Table structure for table `rainlab_blog_categories`
--

CREATE TABLE IF NOT EXISTS `rainlab_blog_categories` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `code` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8_unicode_ci,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  KEY `rainlab_blog_categories_slug_index` (`slug`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=10 ;

--
-- Dumping data for table `rainlab_blog_categories`
--

INSERT INTO `rainlab_blog_categories` (`id`, `name`, `slug`, `code`, `description`, `created_at`, `updated_at`) VALUES
(2, 'summer schools', 'summer-schools', NULL, NULL, '2014-05-19 18:06:09', '2014-05-19 18:06:09'),
(3, 'seminars workshop', 'seminars-workshop', NULL, NULL, '2014-05-21 12:50:44', '2014-05-21 12:50:44'),
(4, 'netties conference', 'netties-conference', NULL, NULL, '2014-05-21 13:04:11', '2014-05-21 13:04:11'),
(5, 'home', 'home', NULL, NULL, '2014-05-21 16:03:19', '2014-05-21 18:23:18'),
(6, 'iafes association', 'iafes-association', NULL, NULL, '2014-05-21 16:03:37', '2014-05-21 16:03:37'),
(7, 'student research conference', 'student-research-conference', NULL, NULL, '2014-05-21 16:03:57', '2014-05-21 16:03:57'),
(8, 'projects', 'projects', NULL, NULL, '2014-05-21 16:04:07', '2014-05-21 16:04:07'),
(9, 'training', 'training', NULL, NULL, '2014-05-21 16:04:14', '2014-05-21 16:04:14');

-- --------------------------------------------------------

--
-- Table structure for table `rainlab_blog_posts`
--

CREATE TABLE IF NOT EXISTS `rainlab_blog_posts` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(10) unsigned DEFAULT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `excerpt` text COLLATE utf8_unicode_ci,
  `content` text COLLATE utf8_unicode_ci,
  `published_at` timestamp NULL DEFAULT NULL,
  `published` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `content_html` text COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  KEY `rainlab_blog_posts_user_id_index` (`user_id`),
  KEY `rainlab_blog_posts_slug_index` (`slug`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=9 ;

--
-- Dumping data for table `rainlab_blog_posts`
--

INSERT INTO `rainlab_blog_posts` (`id`, `user_id`, `name`, `slug`, `excerpt`, `content`, `published_at`, `published`, `created_at`, `updated_at`, `content_html`) VALUES
(1, NULL, 'first post', 'first-post', NULL, 'first post', '2014-05-19 21:00:00', 1, '2014-05-19 18:11:22', '2014-05-19 18:11:22', '<p>first post</p>'),
(2, NULL, 'second post', 'second-post', NULL, 'second post', '2014-05-19 21:00:00', 1, '2014-05-19 18:13:40', '2014-05-19 18:13:40', '<p>second post</p>'),
(4, NULL, 'seminar smecher', 'seminar-smecher', '', 'seminar-smecher&nbsp;seminar-smecher ntru a crea o carte demonstrativă pentru literele respective. Nu doar că a supravieţuit timp de cinci secole, dar şi a facut saltul în tipografia electronică practic neschimbată. A fost popularizată în anii ''60 odată cu ieşirea colilor Letraset carntru a crea o carte demonstrativă pentru literele respective. Nu doar că a supravieţuit timp de cinci secole, dar şi a facut saltul în tipografia electronică practic neschimbată. A fost popularizată în anii ''60 odată cu ieşirea colilor Letraset ca\r\n<iframe width="560" height="315" src="//www.youtube.com/embed/F3wpq-i150c" frameborder="0" allowfullscreen=""></iframe>\r\n<iframe width="560" height="315" src="//www.youtube.com/embed/WgUEe-Wqgdk" frameborder="0" allowfullscreen></iframe>', '2014-05-20 21:00:00', 1, '2014-05-21 12:51:04', '2014-05-25 19:36:50', '<p>seminar-smecher&nbsp;seminar-smecher ntru a crea o carte demonstrativă pentru literele respective. Nu doar că a supravieţuit timp de cinci secole, dar şi a facut saltul în tipografia electronică practic neschimbată. A fost popularizată în anii ''60 odată cu ieşirea colilor Letraset carntru a crea o carte demonstrativă pentru literele respective. Nu doar că a supravieţuit timp de cinci secole, dar şi a facut saltul în tipografia electronică practic neschimbată. A fost popularizată în anii ''60 odată cu ieşirea colilor Letraset ca\n<iframe width="560" height="315" src="//www.youtube.com/embed/F3wpq-i150c" frameborder="0" allowfullscreen=""></iframe>\n<iframe width="560" height="315" src="//www.youtube.com/embed/WgUEe-Wqgdk" frameborder="0" allowfullscreen></iframe></p>'),
(5, NULL, 'netties conference post', 'netties-conference-post', '', 'netties conference post wiiiiiiiiiiiiiiiiiiiiiiiiiiiii', '2014-05-20 21:00:00', 1, '2014-05-21 13:04:37', '2014-05-24 15:44:41', '<p>netties conference post wiiiiiiiiiiiiiiiiiiiiiiiiiiiii</p>'),
(6, NULL, 'Statute', 'statute', '', 'Statute haha', '2014-05-20 21:00:00', 1, '2014-05-21 16:10:54', '2014-05-24 13:40:48', '<p>Statute haha</p>'),
(7, NULL, 'information', 'information', NULL, 'information', '2014-05-21 21:00:00', 1, '2014-05-21 18:19:23', '2014-05-21 18:21:41', '<p>information</p>'),
(8, NULL, 'iafes', 'iafes', NULL, 'new iafes stuff', '2014-05-21 21:00:00', 1, '2014-05-21 18:25:13', '2014-05-21 18:25:13', '<p>new iafes stuff</p>');

-- --------------------------------------------------------

--
-- Table structure for table `rainlab_blog_posts_categories`
--

CREATE TABLE IF NOT EXISTS `rainlab_blog_posts_categories` (
  `post_id` int(10) unsigned NOT NULL,
  `category_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`post_id`,`category_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `rainlab_blog_posts_categories`
--

INSERT INTO `rainlab_blog_posts_categories` (`post_id`, `category_id`) VALUES
(1, 2),
(2, 2),
(4, 3),
(5, 4),
(6, 6),
(7, 8),
(8, 5);

-- --------------------------------------------------------

--
-- Table structure for table `rainlab_blog_posts_subcategories`
--

CREATE TABLE IF NOT EXISTS `rainlab_blog_posts_subcategories` (
  `post_id` int(10) unsigned NOT NULL,
  `sub_category_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`post_id`,`sub_category_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `rainlab_blog_posts_subcategories`
--

INSERT INTO `rainlab_blog_posts_subcategories` (`post_id`, `sub_category_id`) VALUES
(6, 8),
(7, 16),
(8, 1);

-- --------------------------------------------------------

--
-- Table structure for table `rainlab_blog_posts_tags`
--

CREATE TABLE IF NOT EXISTS `rainlab_blog_posts_tags` (
  `post_id` int(11) NOT NULL,
  `tag_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `rainlab_blog_posts_tags`
--

INSERT INTO `rainlab_blog_posts_tags` (`post_id`, `tag_id`) VALUES
(6, 1),
(6, 2),
(6, 4),
(5, 4),
(4, 3),
(5, 2);

-- --------------------------------------------------------

--
-- Table structure for table `rainlab_blog_subcategories`
--

CREATE TABLE IF NOT EXISTS `rainlab_blog_subcategories` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `category_id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `code` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8_unicode_ci,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  KEY `rainlab_blog_subCategories_slug_index` (`slug`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=19 ;

--
-- Dumping data for table `rainlab_blog_subcategories`
--

INSERT INTO `rainlab_blog_subcategories` (`id`, `category_id`, `name`, `slug`, `code`, `description`, `created_at`, `updated_at`) VALUES
(1, 5, 'iafes', 'iafes', NULL, NULL, '2014-05-21 16:04:45', '2014-05-21 16:04:45'),
(2, 5, 'netties', 'netties', NULL, NULL, '2014-05-21 16:05:01', '2014-05-21 16:05:01'),
(3, 5, 'library', 'library', NULL, NULL, '2014-05-21 16:05:19', '2014-05-21 16:05:19'),
(4, 6, 'eata', 'eata', NULL, NULL, '2014-05-21 16:05:47', '2014-05-21 16:05:47'),
(5, 6, 'netties conference', 'netties-conference', NULL, NULL, '2014-05-21 16:06:24', '2014-05-21 16:06:24'),
(6, 6, 'photos', 'photos', NULL, NULL, '2014-05-21 16:06:41', '2014-05-21 16:06:41'),
(7, 6, 'blog', 'blog', NULL, NULL, '2014-05-21 16:06:50', '2014-05-21 16:06:50'),
(8, 6, 'statute', 'statute', NULL, NULL, '2014-05-21 16:07:06', '2014-05-21 16:07:06'),
(9, 6, 'how to join', 'how-to-join', NULL, NULL, '2014-05-21 16:07:23', '2014-05-21 16:07:23'),
(10, 6, 'personal', 'personal', NULL, NULL, '2014-05-21 16:07:35', '2014-05-21 16:07:35'),
(11, 6, 'institution', 'institution', NULL, NULL, '2014-05-21 16:07:51', '2014-05-21 16:07:51'),
(12, 6, 'members list', 'members-list', NULL, NULL, '2014-05-21 16:08:09', '2014-05-21 16:08:09'),
(13, 6, 'board', 'board', NULL, NULL, '2014-05-21 16:08:22', '2014-05-21 16:08:22'),
(14, 6, 'gregory zeibekakis scholarship', 'gregory-zeibekakis-scholarship', NULL, NULL, '2014-05-21 16:09:09', '2014-05-21 16:09:09'),
(15, 6, 'meetings', 'meetings', NULL, NULL, '2014-05-21 16:09:22', '2014-05-21 16:09:22'),
(16, 8, 'information', 'information', NULL, NULL, '2014-05-21 18:20:14', '2014-05-21 18:20:14'),
(17, 8, 'website projects', 'website-projects', NULL, NULL, '2014-05-21 18:20:46', '2014-06-01 15:18:22');

-- --------------------------------------------------------

--
-- Table structure for table `rainlab_blog_subposts`
--

CREATE TABLE IF NOT EXISTS `rainlab_blog_subposts` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(10) unsigned DEFAULT NULL,
  `post_id` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `content` text COLLATE utf8_unicode_ci,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `content_html` text COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  KEY `rainlab_blog_subposts_user_id_index` (`user_id`),
  KEY `rainlab_blog_subposts_slug_index` (`slug`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=8 ;

--
-- Dumping data for table `rainlab_blog_subposts`
--

INSERT INTO `rainlab_blog_subposts` (`id`, `user_id`, `post_id`, `title`, `slug`, `content`, `created_at`, `updated_at`, `content_html`) VALUES
(6, NULL, 4, 'speakers', 'speakers', 'speakers page', '2014-05-23 17:16:35', '2014-05-23 17:16:35', '<p>speakers page</p>'),
(7, NULL, 4, 'venue', 'venue', 'venue stuf', '2014-05-23 18:38:16', '2014-05-23 18:38:16', '<p>venue stuf</p>');

-- --------------------------------------------------------

--
-- Table structure for table `rainlab_blog_tags`
--

CREATE TABLE IF NOT EXISTS `rainlab_blog_tags` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=5 ;

--
-- Dumping data for table `rainlab_blog_tags`
--

INSERT INTO `rainlab_blog_tags` (`id`, `name`, `slug`, `created_at`, `updated_at`) VALUES
(1, 'iafes', 'iafes', '2014-05-24 13:00:11', '2014-05-24 13:00:11'),
(2, 'james', 'james', '2014-05-24 13:00:34', '2014-05-24 13:00:34'),
(3, 'jiji', 'jiji', '2014-05-24 13:01:52', '2014-05-24 13:01:52'),
(4, 'yuy', 'yuy', '2014-05-24 13:08:58', '2014-05-24 13:08:58');

-- --------------------------------------------------------

--
-- Table structure for table `rainlab_user_countries`
--

CREATE TABLE IF NOT EXISTS `rainlab_user_countries` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `enabled` tinyint(1) NOT NULL DEFAULT '0',
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `code` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  KEY `rainlab_user_countries_name_index` (`name`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=249 ;

--
-- Dumping data for table `rainlab_user_countries`
--

INSERT INTO `rainlab_user_countries` (`id`, `enabled`, `name`, `code`) VALUES
(1, 1, 'United States', 'US'),
(2, 1, 'Canada', 'CA'),
(3, 1, 'Australia', 'AU'),
(4, 0, 'France', 'FR'),
(5, 0, 'Germany', 'DE'),
(6, 0, 'Iceland', 'IS'),
(7, 0, 'Ireland', 'IE'),
(8, 0, 'Italy', 'IT'),
(9, 0, 'Spain', 'ES'),
(10, 0, 'Sweden', 'SE'),
(11, 0, 'Austria', 'AT'),
(12, 0, 'Belgium', 'BE'),
(13, 0, 'Finland', 'FI'),
(14, 0, 'Czech Republic', 'CZ'),
(15, 0, 'Denmark', 'DK'),
(16, 0, 'Norway', 'NO'),
(17, 1, 'United Kingdom', 'GB'),
(18, 0, 'Switzerland', 'CH'),
(19, 0, 'New Zealand', 'NZ'),
(20, 0, 'Russian Federation', 'RU'),
(21, 0, 'Portugal', 'PT'),
(22, 0, 'Netherlands', 'NL'),
(23, 0, 'Isle of Man', 'IM'),
(24, 0, 'Afghanistan', 'AF'),
(25, 0, 'Aland Islands ', 'AX'),
(26, 0, 'Albania', 'AL'),
(27, 0, 'Algeria', 'DZ'),
(28, 0, 'American Samoa', 'AS'),
(29, 0, 'Andorra', 'AD'),
(30, 0, 'Angola', 'AO'),
(31, 0, 'Anguilla', 'AI'),
(32, 0, 'Antarctica', 'AQ'),
(33, 0, 'Antigua and Barbuda', 'AG'),
(34, 0, 'Argentina', 'AR'),
(35, 0, 'Armenia', 'AM'),
(36, 0, 'Aruba', 'AW'),
(37, 0, 'Azerbaijan', 'AZ'),
(38, 0, 'Bahamas', 'BS'),
(39, 0, 'Bahrain', 'BH'),
(40, 0, 'Bangladesh', 'BD'),
(41, 0, 'Barbados', 'BB'),
(42, 0, 'Belarus', 'BY'),
(43, 0, 'Belize', 'BZ'),
(44, 0, 'Benin', 'BJ'),
(45, 0, 'Bermuda', 'BM'),
(46, 0, 'Bhutan', 'BT'),
(47, 0, 'Bolivia, Plurinational State of', 'BO'),
(48, 0, 'Bonaire, Sint Eustatius and Saba', 'BQ'),
(49, 0, 'Bosnia and Herzegovina', 'BA'),
(50, 0, 'Botswana', 'BW'),
(51, 0, 'Bouvet Island', 'BV'),
(52, 0, 'Brazil', 'BR'),
(53, 0, 'British Indian Ocean Territory', 'IO'),
(54, 0, 'Brunei Darussalam', 'BN'),
(55, 0, 'Bulgaria', 'BG'),
(56, 0, 'Burkina Faso', 'BF'),
(57, 0, 'Burundi', 'BI'),
(58, 0, 'Cambodia', 'KH'),
(59, 0, 'Cameroon', 'CM'),
(60, 0, 'Cape Verde', 'CV'),
(61, 0, 'Cayman Islands', 'KY'),
(62, 0, 'Central African Republic', 'CF'),
(63, 0, 'Chad', 'TD'),
(64, 0, 'Chile', 'CL'),
(65, 0, 'China', 'CN'),
(66, 0, 'Christmas Island', 'CX'),
(67, 0, 'Cocos (Keeling) Islands', 'CC'),
(68, 0, 'Colombia', 'CO'),
(69, 0, 'Comoros', 'KM'),
(70, 0, 'Congo', 'CG'),
(71, 0, 'Congo, the Democratic Republic of the', 'CD'),
(72, 0, 'Cook Islands', 'CK'),
(73, 0, 'Costa Rica', 'CR'),
(74, 0, 'Cote d''Ivoire', 'CI'),
(75, 0, 'Croatia', 'HR'),
(76, 0, 'Cuba', 'CU'),
(77, 0, 'Curaçao', 'CW'),
(78, 0, 'Cyprus', 'CY'),
(79, 0, 'Djibouti', 'DJ'),
(80, 0, 'Dominica', 'DM'),
(81, 0, 'Dominican Republic', 'DO'),
(82, 0, 'Ecuador', 'EC'),
(83, 0, 'Egypt', 'EG'),
(84, 0, 'El Salvador', 'SV'),
(85, 0, 'Equatorial Guinea', 'GQ'),
(86, 0, 'Eritrea', 'ER'),
(87, 0, 'Estonia', 'EE'),
(88, 0, 'Ethiopia', 'ET'),
(89, 0, 'Falkland Islands (Malvinas)', 'FK'),
(90, 0, 'Faroe Islands', 'FO'),
(91, 0, 'Fiji', 'FJ'),
(92, 0, 'French Guiana', 'GF'),
(93, 0, 'French Polynesia', 'PF'),
(94, 0, 'French Southern Territories', 'TF'),
(95, 0, 'Gabon', 'GA'),
(96, 0, 'Gambia', 'GM'),
(97, 0, 'Georgia', 'GE'),
(98, 0, 'Ghana', 'GH'),
(99, 0, 'Gibraltar', 'GI'),
(100, 0, 'Greece', 'GR'),
(101, 0, 'Greenland', 'GL'),
(102, 0, 'Grenada', 'GD'),
(103, 0, 'Guadeloupe', 'GP'),
(104, 0, 'Guam', 'GU'),
(105, 0, 'Guatemala', 'GT'),
(106, 0, 'Guernsey', 'GG'),
(107, 0, 'Guinea', 'GN'),
(108, 0, 'Guinea-Bissau', 'GW'),
(109, 0, 'Guyana', 'GY'),
(110, 0, 'Haiti', 'HT'),
(111, 0, 'Heard Island and McDonald Islands', 'HM'),
(112, 0, 'Holy See (Vatican City State)', 'VA'),
(113, 0, 'Honduras', 'HN'),
(114, 0, 'Hong Kong', 'HK'),
(115, 0, 'Hungary', 'HU'),
(116, 0, 'India', 'IN'),
(117, 0, 'Indonesia', 'ID'),
(118, 0, 'Iran, Islamic Republic of', 'IR'),
(119, 0, 'Iraq', 'IQ'),
(120, 0, 'Israel', 'IL'),
(121, 0, 'Jamaica', 'JM'),
(122, 0, 'Japan', 'JP'),
(123, 0, 'Jersey', 'JE'),
(124, 0, 'Jordan', 'JO'),
(125, 0, 'Kazakhstan', 'KZ'),
(126, 0, 'Kenya', 'KE'),
(127, 0, 'Kiribati', 'KI'),
(128, 0, 'Korea, Democratic People''s Republic of', 'KP'),
(129, 0, 'Korea, Republic of', 'KR'),
(130, 0, 'Kuwait', 'KW'),
(131, 0, 'Kyrgyzstan', 'KG'),
(132, 0, 'Lao People''s Democratic Republic', 'LA'),
(133, 0, 'Latvia', 'LV'),
(134, 0, 'Lebanon', 'LB'),
(135, 0, 'Lesotho', 'LS'),
(136, 0, 'Liberia', 'LR'),
(137, 0, 'Libyan Arab Jamahiriya', 'LY'),
(138, 0, 'Liechtenstein', 'LI'),
(139, 0, 'Lithuania', 'LT'),
(140, 0, 'Luxembourg', 'LU'),
(141, 0, 'Macao', 'MO'),
(142, 0, 'Macedonia', 'MK'),
(143, 0, 'Madagascar', 'MG'),
(144, 0, 'Malawi', 'MW'),
(145, 0, 'Malaysia', 'MY'),
(146, 0, 'Maldives', 'MV'),
(147, 0, 'Mali', 'ML'),
(148, 0, 'Malta', 'MT'),
(149, 0, 'Marshall Islands', 'MH'),
(150, 0, 'Martinique', 'MQ'),
(151, 0, 'Mauritania', 'MR'),
(152, 0, 'Mauritius', 'MU'),
(153, 0, 'Mayotte', 'YT'),
(154, 0, 'Mexico', 'MX'),
(155, 0, 'Micronesia, Federated States of', 'FM'),
(156, 0, 'Moldova, Republic of', 'MD'),
(157, 0, 'Monaco', 'MC'),
(158, 0, 'Mongolia', 'MN'),
(159, 0, 'Montenegro', 'ME'),
(160, 0, 'Montserrat', 'MS'),
(161, 0, 'Morocco', 'MA'),
(162, 0, 'Mozambique', 'MZ'),
(163, 0, 'Myanmar', 'MM'),
(164, 0, 'Namibia', 'NA'),
(165, 0, 'Nauru', 'NR'),
(166, 0, 'Nepal', 'NP'),
(167, 0, 'New Caledonia', 'NC'),
(168, 0, 'Nicaragua', 'NI'),
(169, 0, 'Niger', 'NE'),
(170, 0, 'Nigeria', 'NG'),
(171, 0, 'Niue', 'NU'),
(172, 0, 'Norfolk Island', 'NF'),
(173, 0, 'Northern Mariana Islands', 'MP'),
(174, 0, 'Oman', 'OM'),
(175, 0, 'Pakistan', 'PK'),
(176, 0, 'Palau', 'PW'),
(177, 0, 'Palestinian Territory, Occupied', 'PS'),
(178, 0, 'Panama', 'PA'),
(179, 0, 'Papua New Guinea', 'PG'),
(180, 0, 'Paraguay', 'PY'),
(181, 0, 'Peru', 'PE'),
(182, 0, 'Philippines', 'PH'),
(183, 0, 'Pitcairn', 'PN'),
(184, 0, 'Poland', 'PL'),
(185, 0, 'Puerto Rico', 'PR'),
(186, 0, 'Qatar', 'QA'),
(187, 0, 'Reunion', 'RE'),
(188, 0, 'Romania', 'RO'),
(189, 0, 'Rwanda', 'RW'),
(190, 0, 'Saint Barthélemy', 'BL'),
(191, 0, 'Saint Helena', 'SH'),
(192, 0, 'Saint Kitts and Nevis', 'KN'),
(193, 0, 'Saint Lucia', 'LC'),
(194, 0, 'Saint Martin (French part)', 'MF'),
(195, 0, 'Saint Pierre and Miquelon', 'PM'),
(196, 0, 'Saint Vincent and the Grenadines', 'VC'),
(197, 0, 'Samoa', 'WS'),
(198, 0, 'San Marino', 'SM'),
(199, 0, 'Sao Tome and Principe', 'ST'),
(200, 0, 'Saudi Arabia', 'SA'),
(201, 0, 'Senegal', 'SN'),
(202, 0, 'Serbia', 'RS'),
(203, 0, 'Seychelles', 'SC'),
(204, 0, 'Sierra Leone', 'SL'),
(205, 0, 'Singapore', 'SG'),
(206, 0, 'Sint Maarten (Dutch part)', 'SX'),
(207, 0, 'Slovakia', 'SK'),
(208, 0, 'Slovenia', 'SI'),
(209, 0, 'Solomon Islands', 'SB'),
(210, 0, 'Somalia', 'SO'),
(211, 0, 'South Africa', 'ZA'),
(212, 0, 'South Georgia and the South Sandwich Islands', 'GS'),
(213, 0, 'Sri Lanka', 'LK'),
(214, 0, 'Sudan', 'SD'),
(215, 0, 'Suriname', 'SR'),
(216, 0, 'Svalbard and Jan Mayen', 'SJ'),
(217, 0, 'Swaziland', 'SZ'),
(218, 0, 'Syrian Arab Republic', 'SY'),
(219, 0, 'Taiwan, Province of China', 'TW'),
(220, 0, 'Tajikistan', 'TJ'),
(221, 0, 'Tanzania, United Republic of', 'TZ'),
(222, 0, 'Thailand', 'TH'),
(223, 0, 'Timor-Leste', 'TL'),
(224, 0, 'Togo', 'TG'),
(225, 0, 'Tokelau', 'TK'),
(226, 0, 'Tonga', 'TO'),
(227, 0, 'Trinidad and Tobago', 'TT'),
(228, 0, 'Tunisia', 'TN'),
(229, 0, 'Turkey', 'TR'),
(230, 0, 'Turkmenistan', 'TM'),
(231, 0, 'Turks and Caicos Islands', 'TC'),
(232, 0, 'Tuvalu', 'TV'),
(233, 0, 'Uganda', 'UG'),
(234, 0, 'Ukraine', 'UA'),
(235, 0, 'United Arab Emirates', 'AE'),
(236, 0, 'United States Minor Outlying Islands', 'UM'),
(237, 0, 'Uruguay', 'UY'),
(238, 0, 'Uzbekistan', 'UZ'),
(239, 0, 'Vanuatu', 'VU'),
(240, 0, 'Venezuela, Bolivarian Republic of', 'VE'),
(241, 0, 'Viet Nam', 'VN'),
(242, 0, 'Virgin Islands, British', 'VG'),
(243, 0, 'Virgin Islands, U.S.', 'VI'),
(244, 0, 'Wallis and Futuna', 'WF'),
(245, 0, 'Western Sahara', 'EH'),
(246, 0, 'Yemen', 'YE'),
(247, 0, 'Zambia', 'ZM'),
(248, 0, 'Zimbabwe', 'ZW');

-- --------------------------------------------------------

--
-- Table structure for table `rainlab_user_financial`
--

CREATE TABLE IF NOT EXISTS `rainlab_user_financial` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `code` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `content` text COLLATE utf8_unicode_ci,
  `content_html` text COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=6 ;

-- --------------------------------------------------------

--
-- Table structure for table `rainlab_user_general`
--

CREATE TABLE IF NOT EXISTS `rainlab_user_general` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `code` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `content` text COLLATE utf8_unicode_ci,
  `content_html` text COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=11 ;

--
-- Dumping data for table `rainlab_user_general`
--

INSERT INTO `rainlab_user_general` (`id`, `user_id`, `name`, `slug`, `code`, `content`, `content_html`, `created_at`, `updated_at`) VALUES
(10, 0, 'ion de ion', 'ion-de-ion', NULL, 'are general', '<p>are general</p>', '2014-06-01 13:44:01', '2014-06-01 13:44:01');

-- --------------------------------------------------------

--
-- Table structure for table `rainlab_user_information`
--

CREATE TABLE IF NOT EXISTS `rainlab_user_information` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `code` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `content` text COLLATE utf8_unicode_ci,
  `content_html` text COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=10 ;

--
-- Dumping data for table `rainlab_user_information`
--

INSERT INTO `rainlab_user_information` (`id`, `user_id`, `name`, `slug`, `code`, `content`, `content_html`, `created_at`, `updated_at`) VALUES
(8, 0, 'new information', 'new-information', NULL, 'gogu de ion', '<p>gogu de ion</p>', '2014-06-01 16:48:31', '2014-06-01 13:48:31');

-- --------------------------------------------------------

--
-- Table structure for table `rainlab_user_states`
--

CREATE TABLE IF NOT EXISTS `rainlab_user_states` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `country_id` int(10) unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `code` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  KEY `rainlab_user_states_country_id_index` (`country_id`),
  KEY `rainlab_user_states_name_index` (`name`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=136 ;

--
-- Dumping data for table `rainlab_user_states`
--

INSERT INTO `rainlab_user_states` (`id`, `country_id`, `name`, `code`) VALUES
(1, 1, 'Alabama', 'AL'),
(2, 1, 'Alaska', 'AK'),
(3, 1, 'American Samoa', 'AS'),
(4, 1, 'Arizona', 'AZ'),
(5, 1, 'Arkansas', 'AR'),
(6, 1, 'California', 'CA'),
(7, 1, 'Colorado', 'CO'),
(8, 1, 'Connecticut', 'CT'),
(9, 1, 'Delaware', 'DE'),
(10, 1, 'Dist. of Columbia', 'DC'),
(11, 1, 'Florida', 'FL'),
(12, 1, 'Georgia', 'GA'),
(13, 1, 'Guam', 'GU'),
(14, 1, 'Hawaii', 'HI'),
(15, 1, 'Idaho', 'ID'),
(16, 1, 'Illinois', 'IL'),
(17, 1, 'Indiana', 'IN'),
(18, 1, 'Iowa', 'IA'),
(19, 1, 'Kansas', 'KS'),
(20, 1, 'Kentucky', 'KY'),
(21, 1, 'Louisiana', 'LA'),
(22, 1, 'Maine', 'ME'),
(23, 1, 'Maryland', 'MD'),
(24, 1, 'Marshall Islands', 'MH'),
(25, 1, 'Massachusetts', 'MA'),
(26, 1, 'Michigan', 'MI'),
(27, 1, 'Micronesia', 'FM'),
(28, 1, 'Minnesota', 'MN'),
(29, 1, 'Mississippi', 'MS'),
(30, 1, 'Missouri', 'MO'),
(31, 1, 'Montana', 'MT'),
(32, 1, 'Nebraska', 'NE'),
(33, 1, 'Nevada', 'NV'),
(34, 1, 'New Hampshire', 'NH'),
(35, 1, 'New Jersey', 'NJ'),
(36, 1, 'New Mexico', 'NM'),
(37, 1, 'New York', 'NY'),
(38, 1, 'North Carolina', 'NC'),
(39, 1, 'North Dakota', 'ND'),
(40, 1, 'Northern Marianas', 'MP'),
(41, 1, 'Ohio', 'OH'),
(42, 1, 'Oklahoma', 'OK'),
(43, 1, 'Oregon', 'OR'),
(44, 1, 'Palau', 'PW'),
(45, 1, 'Pennsylvania', 'PA'),
(46, 1, 'Puerto Rico', 'PR'),
(47, 1, 'Rhode Island', 'RI'),
(48, 1, 'South Carolina', 'SC'),
(49, 1, 'South Dakota', 'SD'),
(50, 1, 'Tennessee', 'TN'),
(51, 1, 'Texas', 'TX'),
(52, 1, 'Utah', 'UT'),
(53, 1, 'Vermont', 'VT'),
(54, 1, 'Virginia', 'VA'),
(55, 1, 'Virgin Islands', 'VI'),
(56, 1, 'Washington', 'WA'),
(57, 1, 'West Virginia', 'WV'),
(58, 1, 'Wisconsin', 'WI'),
(59, 1, 'Wyoming', 'WY'),
(60, 2, 'Alberta', 'AB'),
(61, 2, 'British Columbia', 'BC'),
(62, 2, 'Manitoba', 'MB'),
(63, 2, 'New Brunswick', 'NB'),
(64, 2, 'Newfoundland and Labrador', 'NL'),
(65, 2, 'Northwest Territories', 'NT'),
(66, 2, 'Nova Scotia', 'NS'),
(67, 2, 'Nunavut', 'NU'),
(68, 2, 'Ontario', 'ON'),
(69, 2, 'Prince Edward Island', 'PE'),
(70, 2, 'Quebec', 'QC'),
(71, 2, 'Saskatchewan', 'SK'),
(72, 2, 'Yukon', 'YT'),
(73, 3, 'New South Wales', 'NSW'),
(74, 3, 'Queensland', 'QLD'),
(75, 3, 'South Australia', 'SA'),
(76, 3, 'Tasmania', 'TAS'),
(77, 3, 'Victoria', 'VIC'),
(78, 3, 'Western Australia', 'WA'),
(79, 3, 'Northern Territory', 'NT'),
(80, 3, 'Australian Capital Territory', 'ACT'),
(81, 5, 'Baden-Württemberg', 'BW'),
(82, 5, 'Bavaria', 'BY'),
(83, 5, 'Berlin', 'BE'),
(84, 5, 'Brandenburg', 'BB'),
(85, 5, 'Bremen', 'HB'),
(86, 5, 'Hamburg', 'HH'),
(87, 5, 'Hesse', 'HE'),
(88, 5, 'Mecklenburg-Vorpommern', 'MV'),
(89, 5, 'Lower Saxony', 'NI'),
(90, 5, 'North Rhine-Westphalia', 'NW'),
(91, 5, 'Rhineland-Palatinate', 'RP'),
(92, 5, 'Saarland', 'SL'),
(93, 5, 'Saxony', 'SN'),
(94, 5, 'Saxony-Anhalt', 'ST'),
(95, 5, 'Schleswig-Holstein', 'SH'),
(96, 5, 'Thuringia', 'TH'),
(97, 7, 'Dublin', 'D'),
(98, 7, 'Wicklow', 'WW'),
(99, 7, 'Wexford', 'WX'),
(100, 7, 'Carlow', 'CW'),
(101, 7, 'Kildare', 'KE'),
(102, 7, 'Meath', 'MH'),
(103, 7, 'Louth', 'LH'),
(104, 7, 'Monaghan', 'MN'),
(105, 7, 'Cavan', 'CN'),
(106, 7, 'Longford', 'LD'),
(107, 7, 'Westmeath', 'WH'),
(108, 7, 'Offaly', 'OY'),
(109, 7, 'Laois', 'LS'),
(110, 7, 'Kilkenny', 'KK'),
(111, 7, 'Waterford', 'WD'),
(112, 7, 'Cork', 'C'),
(113, 7, 'Kerry', 'KY'),
(114, 7, 'Limerick', 'LK'),
(115, 7, 'North Tipperary', 'TN'),
(116, 7, 'South Tipperary', 'TS'),
(117, 7, 'Clare', 'CE'),
(118, 7, 'Galway', 'G'),
(119, 7, 'Mayo', 'MO'),
(120, 7, 'Roscommon', 'RN'),
(121, 7, 'Sligo', 'SO'),
(122, 7, 'Leitrim', 'LM'),
(123, 7, 'Donegal', 'DL'),
(124, 22, 'Drenthe', 'DR'),
(125, 22, 'Flevoland', 'FL'),
(126, 22, 'Friesland', 'FR'),
(127, 22, 'Gelderland', 'GE'),
(128, 22, 'Groningen', 'GR'),
(129, 22, 'Limburg', 'LI'),
(130, 22, 'Noord-Brabant', 'NB'),
(131, 22, 'Noord-Holland', 'NH'),
(132, 22, 'Overijssel', 'OV'),
(133, 22, 'Utrecht', 'UT'),
(134, 22, 'Zeeland', 'ZE'),
(135, 22, 'Zuid-Holland', 'ZH');

-- --------------------------------------------------------

--
-- Table structure for table `system_files`
--

CREATE TABLE IF NOT EXISTS `system_files` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `disk_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `file_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `file_size` int(11) NOT NULL,
  `content_type` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8_unicode_ci,
  `field` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `attachment_id` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `attachment_type` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `public` tinyint(1) NOT NULL DEFAULT '1',
  `sort_order` int(11) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  KEY `system_files_field_index` (`field`),
  KEY `system_files_attachment_id_index` (`attachment_id`),
  KEY `system_files_attachment_type_index` (`attachment_type`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=5 ;

--
-- Dumping data for table `system_files`
--

INSERT INTO `system_files` (`id`, `disk_name`, `file_name`, `file_size`, `content_type`, `title`, `description`, `field`, `attachment_id`, `attachment_type`, `public`, `sort_order`, `created_at`, `updated_at`) VALUES
(2, '5382322c961c9852532883.jpg', 'IMAG0292.jpg', 1012145, 'image/jpeg', NULL, NULL, NULL, NULL, NULL, 1, 2, '2014-05-25 15:10:52', '2014-05-25 15:27:01'),
(4, '538b3a71e553f482397689.jpg', 'IMG_20130112_201247.jpg', 239646, 'image/jpeg', NULL, NULL, NULL, NULL, NULL, 1, 4, '2014-06-01 11:36:33', '2014-06-01 12:00:13');

-- --------------------------------------------------------

--
-- Table structure for table `system_parameters`
--

CREATE TABLE IF NOT EXISTS `system_parameters` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `namespace` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `group` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `item` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `value` text COLLATE utf8_unicode_ci,
  PRIMARY KEY (`id`),
  KEY `item_index` (`namespace`,`group`,`item`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=8 ;

--
-- Dumping data for table `system_parameters`
--

INSERT INTO `system_parameters` (`id`, `namespace`, `group`, `item`, `value`) VALUES
(1, 'system', 'update', 'count', '0'),
(2, 'system', 'core', 'hash', '"90c6d8bdffe9019d7209b5df42df0c68"'),
(3, 'system', 'core', 'build', '"99"'),
(4, 'system', 'project', 'id', '"0ZGHgZwxjYGN5LwAyAGH4MQpmBTSyBGIyAGyuBQN1A2H5LJH1AmAx"'),
(5, 'system', 'project', 'name', '"iafes"'),
(6, 'system', 'project', 'owner', '"nesste"'),
(7, 'system', 'update', 'retry', '1401716502');

-- --------------------------------------------------------

--
-- Table structure for table `system_plugin_history`
--

CREATE TABLE IF NOT EXISTS `system_plugin_history` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `code` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `type` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `version` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `detail` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  KEY `system_plugin_history_code_index` (`code`),
  KEY `system_plugin_history_type_index` (`type`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=54 ;

--
-- Dumping data for table `system_plugin_history`
--

INSERT INTO `system_plugin_history` (`id`, `code`, `type`, `version`, `detail`, `created_at`) VALUES
(1, 'RainLab.Blog', 'script', '1.0.1', 'create_posts_table.php', '2014-05-19 17:58:32'),
(2, 'RainLab.Blog', 'script', '1.0.1', 'create_categories_table.php', '2014-05-19 17:58:40'),
(3, 'RainLab.Blog', 'script', '1.0.1', 'seed_all_tables.php', '2014-05-19 17:58:41'),
(4, 'RainLab.Blog', 'comment', '1.0.1', 'Initialize plugin', '2014-05-19 17:58:41'),
(5, 'RainLab.Blog', 'script', '1.0.2', 'create_posts_content_html.php', '2014-05-19 17:58:42'),
(6, 'RainLab.Blog', 'comment', '1.0.2', 'Added the processed HTML content column to the posts table', '2014-05-19 17:58:42'),
(7, 'RainLab.GoogleAnalytics', 'comment', '1.0.1', 'Initialize plugin', '2014-05-19 17:58:42'),
(8, 'RainLab.MailChimp', 'comment', '1.0.1', 'Initialize plugin', '2014-05-19 17:58:42'),
(9, 'RainLab.TwitterFeed', 'comment', '1.0.1', 'Initialize plugin', '2014-05-19 17:58:43'),
(10, 'RainLab.User', 'script', '1.0.1', 'create_users_table.php', '2014-05-19 17:58:47'),
(11, 'RainLab.User', 'script', '1.0.1', 'create_throttle_table.php', '2014-05-19 17:58:47'),
(12, 'RainLab.User', 'script', '1.0.1', 'create_states_table.php', '2014-05-19 17:58:49'),
(13, 'RainLab.User', 'script', '1.0.1', 'create_countries_table.php', '2014-05-19 17:58:50'),
(14, 'RainLab.User', 'comment', '1.0.1', 'Initialize plugin', '2014-05-19 17:58:50'),
(15, 'RainLab.User', 'script', '1.0.2', 'seed_all_tables.php', '2014-05-19 17:58:57'),
(16, 'RainLab.User', 'comment', '1.0.2', 'Add seed data for countries and states', '2014-05-19 17:58:57'),
(17, 'Eein.Wysiwyg', 'script', '0.1.0', 'very much beta', '2014-05-19 18:00:56'),
(18, 'Eein.Wysiwyg', 'comment', '0.1.0', 'Initialize Plugin', '2014-05-19 18:00:56'),
(19, 'Eein.Wysiwyg', 'script', '0.1.1', 'The plugin adds a file into /uploads/public/wysiwyg/:slug/', '2014-05-21 15:39:48'),
(20, 'Eein.Wysiwyg', 'script', '0.1.1', 'Alt text still not working', '2014-05-21 15:39:48'),
(21, 'Eein.Wysiwyg', 'comment', '0.1.1', 'Adding Trumbowyg uploader Plugin', '2014-05-21 15:39:48'),
(22, 'Eein.Wysiwyg', 'comment', '0.1.2', 'Quick fix to non-blog paths.', '2014-05-21 15:39:48'),
(23, 'Radiantweb.Disqus', 'comment', '1.0.0', 'Initialize plugin', '2014-05-21 17:43:04'),
(24, 'Radiantweb.Disqus', 'comment', '1.0.1', 'Register', '2014-05-21 17:43:04'),
(25, 'Radiantweb.Disqus', 'comment', '1.0.2', 'Disqus Key Moved to Settings', '2014-05-21 17:43:04'),
(26, 'Eein.Wysiwyg', 'script', '0.2.0', 'Updated plugin upload paths.', '2014-05-23 18:35:44'),
(27, 'Eein.Wysiwyg', 'script', '0.2.0', 'Simplified Documenation to meet guidelines.', '2014-05-23 18:35:44'),
(28, 'Eein.Wysiwyg', 'comment', '0.2.0', 'Updated plugin name.', '2014-05-23 18:35:44'),
(29, 'Eein.Wysiwyg', 'comment', '0.2.1', 'replace_content_editor.php', '2014-05-23 18:35:44'),
(30, 'RainLab.Editable', 'comment', '1.0.1', 'First version of Editable', '2014-05-23 18:40:16'),
(31, 'Hariadi.Share', 'comment', '1.0.1', 'First version of Share', '2014-05-23 19:06:18'),
(32, 'Autumn.Pages', 'script', '1.0.0', 'create_pages_table.php', '2014-05-23 19:09:52'),
(33, 'Autumn.Pages', 'comment', '1.0.0', 'Init plugin', '2014-05-23 19:09:52'),
(34, 'Autumn.Pages', 'comment', '1.0.1', '404 error support when page not found ( shows 404 system page )', '2014-05-23 19:09:52'),
(35, 'Autumn.Pages', 'comment', '1.0.2', 'Add plugin dependency to Eein.Wysiwyg', '2014-05-23 19:09:52'),
(36, 'LaminSanneh.FlexiContact', 'comment', '1.0.0', 'First Version with basic functionality', '2014-05-24 10:11:39'),
(37, 'LaminSanneh.FlexiContact', 'comment', '1.0.1', 'Fixed email subject to send actual subject set in backend', '2014-05-24 10:11:39'),
(38, 'LaminSanneh.FlexiContact', 'comment', '1.0.2', 'Added validation to contact form fields', '2014-05-24 10:11:39'),
(39, 'LaminSanneh.FlexiContact', 'comment', '1.0.3', 'Changed body input field type from text to textarea', '2014-05-24 10:11:39'),
(40, 'LaminSanneh.FlexiContact', 'comment', '1.0.4', 'Updated default component markup to use more appropriate looking twitter bootstrap classes', '2014-05-24 10:11:40'),
(41, 'Alxy.Facebook', 'comment', '1.0.1', 'First version of Facebook', '2014-05-24 11:52:24'),
(42, 'Autumn.Pages', 'script', '1.0.3', 'Auto inject page titlte without onEnd method in page code section', '2014-05-25 07:55:22'),
(43, 'Autumn.Pages', 'comment', '1.0.3', 'Normal 404 notfound page, out /404 before system 404', '2014-05-25 07:55:23'),
(44, 'Autumn.Pages', 'script', '1.0.4', 'add_seo_fields_pages_table.php', '2014-05-25 07:55:24'),
(45, 'Autumn.Pages', 'comment', '1.0.4', 'Add support SEO description and SEO meta data', '2014-05-25 07:55:24'),
(46, 'Hariadi.Share', 'script', '1.0.2', 'Remove unused method', '2014-05-25 07:55:24'),
(47, 'Hariadi.Share', 'script', '1.0.2', 'Update documentation', '2014-05-25 07:55:25'),
(48, 'Hariadi.Share', 'comment', '1.0.2', 'Support onRender', '2014-05-25 07:55:25'),
(49, 'Autumn.Pages', 'comment', '1.0.5', 'Fixes custom output with support component alias, please fix custom page out, rename to Autumn pages', '2014-05-28 09:34:36'),
(50, 'RainLab.User', 'comment', '1.0.3', 'Fixes various bugs', '2014-05-28 09:34:36'),
(51, 'RainLab.Blog', 'comment', '1.0.3', 'Category component has been merged with Posts component', '2014-05-30 15:11:27'),
(52, 'RainLab.Blog', 'comment', '1.0.4', 'Improvements to the Posts list management UI', '2014-05-30 15:11:27'),
(53, 'RainLab.Blog', 'script', '1.0.1', 'create_subCategories_table.php', '2014-06-01 13:58:35');

-- --------------------------------------------------------

--
-- Table structure for table `system_plugin_versions`
--

CREATE TABLE IF NOT EXISTS `system_plugin_versions` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `code` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `version` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  KEY `system_plugin_versions_code_index` (`code`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=13 ;

--
-- Dumping data for table `system_plugin_versions`
--

INSERT INTO `system_plugin_versions` (`id`, `code`, `version`, `created_at`) VALUES
(1, 'RainLab.Blog', '1.0.4', '2014-06-01 14:35:52'),
(2, 'RainLab.GoogleAnalytics', '1.0.1', '2014-05-19 17:58:42'),
(3, 'RainLab.MailChimp', '1.0.1', '2014-05-19 17:58:43'),
(4, 'RainLab.TwitterFeed', '1.0.1', '2014-05-19 17:58:43'),
(5, 'RainLab.User', '1.0.3', '2014-06-01 14:35:52'),
(6, 'Eein.Wysiwyg', '0.2.1', '2014-05-23 18:35:44'),
(7, 'Radiantweb.Disqus', '1.0.2', '2014-05-21 17:43:04'),
(8, 'RainLab.Editable', '1.0.1', '2014-05-23 18:40:16'),
(9, 'Hariadi.Share', '1.0.2', '2014-05-25 07:55:25'),
(10, 'Autumn.Pages', '1.0.5', '2014-05-28 09:34:36'),
(11, 'LaminSanneh.FlexiContact', '1.0.4', '2014-05-24 10:11:40'),
(12, 'Alxy.Facebook', '1.0.1', '2014-05-24 11:52:24');

-- --------------------------------------------------------

--
-- Table structure for table `system_settings`
--

CREATE TABLE IF NOT EXISTS `system_settings` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `item` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `value` text COLLATE utf8_unicode_ci,
  PRIMARY KEY (`id`),
  KEY `system_settings_item_index` (`item`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=9 ;

--
-- Dumping data for table `system_settings`
--

INSERT INTO `system_settings` (`id`, `item`, `value`) VALUES
(1, 'user_settings', '{"require_activation":true,"auto_activation":true,"use_throttle":true}'),
(2, 'disqus_settings', NULL),
(3, 'hariadi_share_settings', '{"facebook":true,"twitter":true,"googleplus":true}'),
(4, 'laminsanneh_flexicontact_settings', '{"recipient_email":"raoul.bivolaru@gmail.com","recipient_name":"Raoul Cristian","subject":"IAFeS","confirmation_text":"Email has been sent."}'),
(5, 'alxy_facebook_settings', '{"app_id":"505366312924506"}'),
(6, 'rainlab_mailchimp_settings', NULL),
(7, 'rainlab_googleanalytics_settings', NULL),
(8, 'system_email_settings', '{"send_mode":"smtp","sender_name":null,"sender_email":null,"sendmail_path":"\\/usr\\/sbin\\/sendmail -bs","smtp_address":"smtp.mailgun.org","smtp_port":"587","smtp_user":null,"smtp_password":null,"smtp_authorization":"0"}');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `country_id` int(10) unsigned DEFAULT NULL,
  `state_id` int(10) unsigned DEFAULT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `activation_code` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `persist_code` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `reset_password_code` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `permissions` text COLLATE utf8_unicode_ci,
  `activated` tinyint(1) NOT NULL DEFAULT '0',
  `activated_at` timestamp NULL DEFAULT NULL,
  `last_login` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`),
  KEY `users_country_id_index` (`country_id`),
  KEY `users_state_id_index` (`state_id`),
  KEY `users_activation_code_index` (`activation_code`),
  KEY `users_reset_password_code_index` (`reset_password_code`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=11 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `country_id`, `state_id`, `name`, `email`, `password`, `activation_code`, `persist_code`, `reset_password_code`, `permissions`, `activated`, `activated_at`, `last_login`, `created_at`, `updated_at`) VALUES
(9, NULL, NULL, 'gogu', 'gogu@gogu.com', '$2y$10$j0g0qCdKHBivCKe.k2M9lOiYEbY1IihrpC6vYa0m9Jd1AmWGaj.NS', NULL, NULL, NULL, NULL, 1, '2014-06-01 13:48:15', NULL, '2014-06-01 13:48:11', '2014-06-01 13:48:15'),
(10, 26, 1, 'james', 'james@james.com', '$2y$10$OtO522h4f5XzlQDWp0ou7u6.xq0MqwCVoXW5JlkJ9VaDnBC3GLLoW', NULL, NULL, NULL, NULL, 1, '2014-06-01 14:03:01', NULL, '2014-06-01 14:02:55', '2014-06-01 15:17:57');

-- --------------------------------------------------------

--
-- Table structure for table `user_throttle`
--

CREATE TABLE IF NOT EXISTS `user_throttle` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(10) unsigned NOT NULL,
  `ip_address` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `attempts` int(11) NOT NULL DEFAULT '0',
  `suspended` tinyint(1) NOT NULL DEFAULT '0',
  `banned` tinyint(1) NOT NULL DEFAULT '0',
  `last_attempt_at` timestamp NULL DEFAULT NULL,
  `suspended_at` timestamp NULL DEFAULT NULL,
  `banned_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=3 ;

--
-- Dumping data for table `user_throttle`
--

INSERT INTO `user_throttle` (`id`, `user_id`, `ip_address`, `attempts`, `suspended`, `banned`, `last_attempt_at`, `suspended_at`, `banned_at`) VALUES
(1, 4, '::1', 0, 0, 0, NULL, NULL, NULL),
(2, 1, '::1', 0, 0, 0, NULL, NULL, NULL);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
