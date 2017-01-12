-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 31, 2016 at 10:13 AM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `languages`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE IF NOT EXISTS `categories` (
  `menu_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `parent` int(11) NOT NULL,
  `translate` int(11) NOT NULL,
  `lang_id` int(11) NOT NULL,
  `menu_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `menu_code` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `ordering` tinyint(4) NOT NULL,
  `menu_status` tinyint(4) NOT NULL,
  `trush` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`menu_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=13 ;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`menu_id`, `user_id`, `parent`, `translate`, `lang_id`, `menu_name`, `menu_code`, `ordering`, `menu_status`, `trush`, `created_at`, `updated_at`) VALUES
(1, 1, 0, 1, 1, 'ទំព័រដើម', '001', 0, 1, 0, '2016-08-29 18:16:21', '2016-08-29 18:16:21'),
(2, 1, 0, 1, 2, 'Home', '001en', 0, 1, 0, '2016-08-29 18:37:09', '2016-08-29 18:37:09'),
(3, 1, 0, 3, 1, 'ផលិតផល', '002en', 0, 1, 0, '2016-08-29 20:26:50', '2016-08-29 20:26:50'),
(4, 1, 0, 3, 2, 'Product', '002en', 0, 1, 0, '2016-08-29 20:27:24', '2016-08-29 20:27:24'),
(5, 1, 4, 4, 2, 'Dell', 'sadasd', 12, 1, 0, '2016-08-29 21:28:09', '2016-08-29 21:28:09'),
(6, 1, 4, 4, 2, 'Apple', '002ensd', 123, 1, 0, '2016-08-29 21:28:43', '2016-08-29 21:28:43'),
(7, 1, 3, 3, 1, 'ឌែល', '0012kh', 2, 1, 0, '2016-08-29 22:11:27', '2016-08-29 22:11:27'),
(8, 1, 0, 0, 2, 'About', 'sdsfdsfdsf', 2, 1, 0, '2016-08-29 22:13:27', '2016-08-29 22:13:27'),
(9, 1, 8, 0, 1, 'sdfff', 'dsfdsfd', 0, 1, 1, '2016-08-29 22:13:54', '2016-08-29 22:13:54'),
(10, 1, 3, 0, 1, 'saran', 'sadasddss', 123, 1, 1, '2016-08-29 23:58:36', '2016-08-29 23:58:36'),
(12, 1, 0, 0, 1, 'dsfsdfd', 'dsfdsfdf', 127, 1, 1, '2016-08-30 00:55:26', '2016-08-30 00:55:26');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE IF NOT EXISTS `comments` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `content` text COLLATE utf8_unicode_ci NOT NULL,
  `seen` tinyint(1) NOT NULL DEFAULT '0',
  `user_id` int(10) unsigned NOT NULL,
  `post_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `comments_user_id_foreign` (`user_id`),
  KEY `comments_post_id_foreign` (`post_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=4 ;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `created_at`, `updated_at`, `content`, `seen`, `user_id`, `post_id`) VALUES
(1, '2016-08-27 13:25:37', '2016-08-27 13:25:37', '<p>\nLorem ipsum a placerat sociosqu ultrices consectetur ullamcorper tincidunt quisque, tellus ante nostra euismod nec suspendisse sem curabitur elit, malesuada lacus viverra sagittis sit ornare orci augue. \nNullam adipiscing pulvinar libero aliquam vestibulum, platea cursus pellentesque leo, dui lectus curabitur euismod. \nAd erat curae non elit ultrices placerat netus metus feugiat non, conubia fusce porttitor sociosqu diam commodo metus in himenaeos vitae aptent, consequat luctus purus eleifend enim sollicitudin eleifend porta malesuada. \nAc class conubia condimentum mauris facilisis conubia quis scelerisque lacinia, tempus nullam felis fusce ac potenti netus ornare, semper molestie iaculis fermentum ornare curabitur tincidunt imperdiet. \n</p>\n<p>\nScelerisque imperdiet euismod scelerisque torquent curae rhoncus sollicitudin tortor placerat, aptent hac nec posuere suscipit sed tortor neque urna, hendrerit vehicula duis litora tristique congue nec auctor. \nFelis libero ornare habitasse nec elit felis inceptos tellus, inceptos cubilia quis mattis faucibus sem non, odio fringilla class aliquam metus ipsum lorem. \nLuctus pharetra dictum vehicula tempus in venenatis gravida ut, gravida proin orci quis sed platea mi quisque, hendrerit semper hendrerit facilisis ante sapien faucibus. \nLigula commodo vestibulum rutrum pretium varius sem aliquet himenaeos, dolor cursus nunc habitasse aliquam ut curabitur ipsum, luctus ut rutrum odio condimentum donec suscipit. \n</p>\n<p>\nMolestie est etiam, sit. \n</p>', 0, 2, 1),
(2, '2016-08-27 13:25:37', '2016-08-27 13:25:37', '<p>\nLorem ipsum consequat amet nostra sem aliquet conubia nullam sollicitudin, rhoncus venenatis vivamus rhoncus netus risus tortor non, mauris turpis eget integer nibh dolor commodo venenatis. \nUt molestie semper adipiscing amet cras class donec sapien malesuada, auctor sapien arcu inceptos aenean consequat metus litora mattis, vivamus feugiat arcu adipiscing mauris primis ante ullamcorper. \nAd nisi lobortis arcu per orci malesuada blandit metus, tortor urna turpis consectetur porttitor egestas sed, eleifend eget tincidunt pharetra varius tincidunt morbi. \nMalesuada elementum mi torquent mollis eu lobortis curae purus amet vivamus amet, nulla torquent nibh eu diam aliquam pretium donec aliquam tempus lacus tempus, feugiat lectus cras non velit mollis sit et integer egestas. \n</p>\n<p>\nHabitant auctor integer sem at nam massa himenaeos, netus vel dapibus nibh malesuada leo fusce, tortor sociosqu semper facilisis semper class. \nTempus faucibus tristique duis eros cubilia quisque habitasse aliquam fringilla orci non vel, laoreet dolor enim justo facilisis neque accumsan in ad venenatis. \nHac per dictumst nulla ligula donec mollis massa porttitor ullamcorper risus eu, platea fringilla habitasse suscipit pellentesque donec est habitant vehicula tempor, ultrices placerat sociosqu ultrices consectetur ullamcorper tincidunt quisque tellus ante. \nNostra euismod nec suspendisse sem curabitur elit malesuada, lacus viverra sagittis sit ornare orci. \n</p>', 0, 2, 2),
(3, '2016-08-27 13:25:38', '2016-08-27 13:25:38', '<p>\nLorem ipsum massa nullam adipiscing pulvinar libero aliquam vestibulum platea, cursus pellentesque leo dui lectus curabitur euismod ad, erat curae non elit ultrices placerat netus metus. \nFeugiat non conubia fusce porttitor sociosqu diam commodo, metus in himenaeos vitae aptent consequat luctus, purus eleifend enim sollicitudin eleifend porta. \nMalesuada ac class conubia condimentum mauris facilisis conubia quis, scelerisque lacinia tempus nullam felis fusce ac potenti, netus ornare semper molestie iaculis fermentum ornare. \nCurabitur tincidunt imperdiet scelerisque imperdiet euismod, scelerisque torquent curae rhoncus, sollicitudin tortor placerat aptent. \nHac nec posuere suscipit sed tortor neque urna hendrerit vehicula duis, litora tristique congue nec auctor felis libero ornare habitasse nec, elit felis inceptos tellus inceptos cubilia quis mattis faucibus. \n</p>\n<p>\nSem non odio fringilla class aliquam metus ipsum lorem luctus, pharetra dictum vehicula tempus in venenatis gravida ut, gravida proin orci quis sed platea mi quisque. \nHendrerit semper hendrerit facilisis ante sapien faucibus ligula, commodo vestibulum rutrum pretium varius sem, aliquet himenaeos dolor cursus nunc habitasse. \nAliquam ut curabitur ipsum luctus ut rutrum odio, condimentum donec suscipit molestie est etiam sit rutrum, dui nostra sem aliquet conubia nullam. \nSollicitudin rhoncus venenatis vivamus rhoncus netus risus, tortor non mauris turpis eget, integer nibh dolor commodo venenatis. \n</p>', 0, 3, 1);

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE IF NOT EXISTS `contacts` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `text` text COLLATE utf8_unicode_ci NOT NULL,
  `seen` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=4 ;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `name`, `email`, `text`, `seen`, `created_at`, `updated_at`) VALUES
(1, 'Dupont', 'dupont@la.fr', 'Lorem ipsum inceptos malesuada leo fusce tortor sociosqu semper, facilisis semper class tempus faucibus tristique duis eros, cubilia quisque habitasse aliquam fringilla orci non. Vel laoreet dolor enim justo facilisis neque accumsan, in ad venenatis hac per dictumst nulla ligula, donec mollis massa porttitor ullamcorper risus. Eu platea fringilla, habitasse.', 0, '2016-08-27 13:25:36', '2016-08-27 13:25:36'),
(2, 'Durand', 'durand@la.fr', ' Lorem ipsum erat non elit ultrices placerat, netus metus feugiat non conubia fusce porttitor, sociosqu diam commodo metus in. Himenaeos vitae aptent consequat luctus purus eleifend enim, sollicitudin eleifend porta malesuada ac class conubia, condimentum mauris facilisis conubia quis scelerisque. Lacinia tempus nullam felis fusce ac potenti netus ornare semper molestie, iaculis fermentum ornare curabitur tincidunt imperdiet scelerisque imperdiet euismod.', 0, '2016-08-27 13:25:36', '2016-08-27 13:25:36'),
(3, 'Martin', 'martin@la.fr', 'Lorem ipsum tempor netus aenean ligula habitant vehicula tempor ultrices, placerat sociosqu ultrices consectetur ullamcorper tincidunt quisque tellus, ante nostra euismod nec suspendisse sem curabitur elit. Malesuada lacus viverra sagittis sit ornare orci, augue nullam adipiscing pulvinar libero aliquam vestibulum, platea cursus pellentesque leo dui. Lectus curabitur euismod ad, erat.', 1, '2016-08-27 13:25:36', '2016-08-27 13:25:36');

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
('2014_10_12_000000_create_users_table', 1),
('2014_10_12_100000_create_password_resets_table', 1),
('2014_10_21_105844_create_roles_table', 1),
('2014_10_21_110325_create_foreign_keys', 1),
('2014_10_24_205441_create_contact_table', 1),
('2014_10_26_172107_create_posts_table', 1),
('2014_10_26_172631_create_tags_table', 1),
('2014_10_26_172904_create_post_tag_table', 1),
('2014_10_26_222018_create_comments_table', 1),
('2016_08_29_170655_create_categories_table', 2),
('2016_08_30_074128_create_positions_table', 3),
('2016_08_30_132302_create_articles_table', 4),
('2016_08_30_155539_create_table_articles_table', 5),
('2016_08_31_044935_create_tableproducts_table', 6);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL,
  KEY `password_resets_email_index` (`email`),
  KEY `password_resets_token_index` (`token`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `positions`
--

CREATE TABLE IF NOT EXISTS `positions` (
  `position_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(11) unsigned NOT NULL,
  `lang_id` int(11) NOT NULL,
  `position` int(11) NOT NULL,
  `position_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL,
  `trush` tinyint(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`position_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=4 ;

--
-- Dumping data for table `positions`
--

INSERT INTO `positions` (`position_id`, `user_id`, `lang_id`, `position`, `position_name`, `description`, `status`, `trush`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 1, 'Top Left', '<p>Call Us: (641)-734-4763 - Mail: <a href="mailto:info@example.com"> info@example.com </a></p>\r\n', 1, 0, '2016-08-30 02:06:35', '2016-08-30 02:06:35'),
(2, 1, 2, 2, 'Position Top Left', '<div class="col-sm-6"><!-- start: TOP BAR SOCIAL ICONS -->\r\n<div class="social-icons">\r\n<ul>\r\n	<li><a href="http://www.twitter.com" target="_blank">Twitter </a></li>\r\n	<li><a href="http://dribbble.com" target="_blank">Dribbble </a></li>\r\n	<li><a href="http://facebook.com" target="_blank">Facebook </a></li>\r\n	<li><a href="http://google.com" target="_blank">Google+ </a></li>\r\n	<li><a href="http://linkedin.com" target="_blank">LinkedIn </a></li>\r\n	<li><a href="http://youtube.com/" target="_blank">YouTube </a></li>\r\n</ul>\r\n</div>\r\n<!-- end: TOP BAR SOCIAL ICONS --></div>\r\n', 1, 0, '2016-08-31 00:18:29', '2016-08-31 00:18:29'),
(3, 1, 1, 3, 'Position Logo', '<p><img alt="" src="/language/public/admin/kcfinder/upload/images/Logo_army.png" /></p>\r\n', 1, 0, '2016-08-31 00:59:36', '2016-08-31 00:59:36');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE IF NOT EXISTS `posts` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `summary` text COLLATE utf8_unicode_ci NOT NULL,
  `content` text COLLATE utf8_unicode_ci NOT NULL,
  `seen` tinyint(1) NOT NULL DEFAULT '0',
  `active` tinyint(1) NOT NULL DEFAULT '0',
  `user_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `posts_slug_unique` (`slug`),
  KEY `posts_user_id_foreign` (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=5 ;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `created_at`, `updated_at`, `title`, `slug`, `summary`, `content`, `seen`, `active`, `user_id`) VALUES
(1, '2016-08-27 13:25:36', '2016-08-27 13:25:36', 'Post 1', 'post-1', '<img alt="" src="/filemanager/userfiles/user2/mega-champignon.png" style="float:left; height:128px; width:128px" /><p>\nLorem ipsum amet rutrum pretium varius, sem aliquet himenaeos dolor cursus, nunc habitasse aliquam ut. \nCurabitur ipsum luctus ut rutrum odio condimentum donec suscipit, molestie est etiam sit rutrum dui nostra sem, aliquet conubia nullam sollicitudin rhoncus venenatis vivamus. \nRhoncus netus risus tortor non, mauris turpis eget, integer nibh dolor. \n</p>', '<p>\nLorem ipsum nibh venenatis ut molestie semper adipiscing amet cras, class donec sapien malesuada auctor sapien arcu inceptos aenean, consequat metus litora mattis vivamus feugiat arcu adipiscing. \nMauris primis ante ullamcorper ad nisi lobortis arcu per orci, malesuada blandit metus tortor urna turpis consectetur. \nPorttitor egestas sed eleifend eget tincidunt pharetra, varius tincidunt morbi malesuada elementum mi torquent, mollis eu lobortis curae purus. \nAmet vivamus amet nulla torquent nibh eu diam aliquam, pretium donec aliquam tempus lacus tempus feugiat lectus cras, non velit mollis sit et integer egestas. \n</p>\n<p>\nHabitant auctor integer sem at nam massa himenaeos netus, vel dapibus nibh malesuada leo fusce tortor sociosqu, semper facilisis semper class tempus faucibus tristique. \nDuis eros cubilia quisque habitasse aliquam fringilla, orci non vel laoreet dolor. \nEnim justo facilisis neque accumsan in ad venenatis hac per dictumst, nulla ligula donec mollis massa porttitor ullamcorper risus eu platea fringilla, habitasse suscipit pellentesque donec est habitant vehicula tempor ultrices. \nPlacerat sociosqu ultrices consectetur ullamcorper tincidunt quisque tellus ante nostra euismod nec, suspendisse sem curabitur elit malesuada lacus viverra sagittis sit. \n</p>\n<p>\nOrnare orci augue nullam adipiscing pulvinar libero aliquam, vestibulum platea cursus pellentesque leo dui. \nLectus curabitur euismod ad erat curae non elit ultrices placerat netus, metus feugiat non conubia fusce porttitor sociosqu diam. \nCommodo metus in himenaeos vitae aptent consequat luctus purus eleifend, enim sollicitudin eleifend porta malesuada ac class conubia condimentum mauris, facilisis conubia quis scelerisque lacinia tempus nullam felis. \nFusce ac potenti netus ornare semper molestie iaculis fermentum ornare curabitur, tincidunt imperdiet scelerisque imperdiet euismod scelerisque torquent curae rhoncus, sollicitudin tortor placerat aptent hac nec posuere suscipit sed. \n</p>\n<p>\nTortor neque urna hendrerit vehicula duis litora tristique congue nec auctor, felis libero ornare habitasse nec elit felis inceptos tellus. \nInceptos cubilia quis mattis faucibus sem non odio fringilla class aliquam metus, ipsum lorem luctus pharetra dictum vehicula tempus in venenatis gravida, ut gravida proin orci quis sed platea mi quisque hendrerit. \nSemper hendrerit facilisis ante sapien faucibus ligula commodo vestibulum, rutrum pretium varius sem aliquet himenaeos dolor cursus nunc, habitasse aliquam ut curabitur ipsum luctus ut. \nRutrum odio condimentum donec suscipit molestie est etiam sit rutrum dui, nostra sem aliquet conubia nullam sollicitudin rhoncus venenatis vivamus, rhoncus netus risus tortor non mauris turpis eget integer. \n</p>\n<p>\nNibh dolor commodo venenatis ut molestie semper adipiscing amet cras, class donec sapien malesuada auctor sapien arcu inceptos aenean consequat, metus litora mattis vivamus feugiat arcu adipiscing mauris. \nPrimis ante ullamcorper ad nisi lobortis arcu per orci, malesuada blandit metus tortor urna turpis consectetur porttitor, egestas sed eleifend eget tincidunt pharetra varius. \nTincidunt morbi malesuada elementum mi torquent mollis eu lobortis curae purus, amet vivamus amet nulla torquent nibh eu diam aliquam pretium, donec aliquam tempus lacus tempus feugiat lectus cras non. \nVelit mollis sit et integer egestas habitant auctor integer sem at nam massa himenaeos netus vel dapibus, nibh malesuada leo fusce tortor sociosqu semper facilisis semper class tempus faucibus tristique duis. \n</p>\n<p>\nEros cubilia quisque habitasse aliquam fringilla, orci non vel laoreet dolor, enim justo facilisis neque. \n</p>', 0, 1, 1),
(2, '2016-08-27 13:25:36', '2016-08-27 13:25:36', 'Post 2', 'post-2', '<img alt="" src="/filemanager/userfiles/user2/goomba.png" style="float:left; height:128px; width:128px" /><p>\nLorem ipsum commodo venenatis hac per dictumst nulla ligula donec, mollis massa porttitor ullamcorper risus eu platea fringilla, habitasse suscipit pellentesque donec est habitant vehicula tempor. \nUltrices placerat sociosqu ultrices consectetur ullamcorper tincidunt quisque tellus, ante nostra euismod nec suspendisse sem curabitur elit, malesuada lacus viverra sagittis sit ornare orci. \n</p>', '<p>Lorem ipsum convallis ac curae non elit ultrices placerat netus metus feugiat, non conubia fusce porttitor sociosqu diam commodo metus in himenaeos, vitae aptent consequat luctus purus eleifend enim sollicitudin eleifend porta. Malesuada ac class conubia condimentum mauris facilisis conubia quis scelerisque lacinia, tempus nullam felis fusce ac potenti netus ornare semper. Molestie iaculis fermentum ornare curabitur tincidunt imperdiet scelerisque, imperdiet euismod scelerisque torquent curae rhoncus, sollicitudin tortor placerat aptent hac nec. Posuere suscipit sed tortor neque urna hendrerit vehicula duis litora tristique congue nec auctor felis libero, ornare habitasse nec elit felis inceptos tellus inceptos cubilia quis mattis faucibus sem non.</p>\n\n<p>Odio fringilla class aliquam metus ipsum lorem luctus pharetra dictum, vehicula tempus in venenatis gravida ut gravida proin orci, quis sed platea mi quisque hendrerit semper hendrerit. Facilisis ante sapien faucibus ligula commodo vestibulum rutrum pretium, varius sem aliquet himenaeos dolor cursus nunc habitasse, aliquam ut curabitur ipsum luctus ut rutrum. Odio condimentum donec suscipit molestie est etiam sit rutrum dui nostra, sem aliquet conubia nullam sollicitudin rhoncus venenatis vivamus rhoncus netus, risus tortor non mauris turpis eget integer nibh dolor. Commodo venenatis ut molestie semper adipiscing amet cras, class donec sapien malesuada auctor sapien arcu inceptos, aenean consequat metus litora mattis vivamus.</p>\n\n<pre>\n<code class="language-php">protected function getUserByRecaller($recaller)\n{\n	if ($this-&gt;validRecaller($recaller) &amp;&amp; ! $this-&gt;tokenRetrievalAttempted)\n	{\n		$this-&gt;tokenRetrievalAttempted = true;\n\n		list($id, $token) = explode("|", $recaller, 2);\n\n		$this-&gt;viaRemember = ! is_null($user = $this-&gt;provider-&gt;retrieveByToken($id, $token));\n\n		return $user;\n	}\n}</code></pre>\n\n<p>Feugiat arcu adipiscing mauris primis ante ullamcorper ad nisi, lobortis arcu per orci malesuada blandit metus tortor, urna turpis consectetur porttitor egestas sed eleifend. Eget tincidunt pharetra varius tincidunt morbi malesuada elementum mi torquent mollis, eu lobortis curae purus amet vivamus amet nulla torquent, nibh eu diam aliquam pretium donec aliquam tempus lacus. Tempus feugiat lectus cras non velit mollis sit et integer, egestas habitant auctor integer sem at nam massa himenaeos, netus vel dapibus nibh malesuada leo fusce tortor. Sociosqu semper facilisis semper class tempus faucibus tristique duis eros, cubilia quisque habitasse aliquam fringilla orci non vel, laoreet dolor enim justo facilisis neque accumsan in.</p>\n\n<p>Ad venenatis hac per dictumst nulla ligula donec, mollis massa porttitor ullamcorper risus eu platea, fringilla habitasse suscipit pellentesque donec est. Habitant vehicula tempor ultrices placerat sociosqu ultrices consectetur ullamcorper tincidunt quisque tellus, ante nostra euismod nec suspendisse sem curabitur elit malesuada lacus. Viverra sagittis sit ornare orci augue nullam adipiscing pulvinar libero aliquam vestibulum platea cursus pellentesque leo dui lectus, curabitur euismod ad erat curae non elit ultrices placerat netus metus feugiat non conubia fusce porttitor. Sociosqu diam commodo metus in himenaeos vitae aptent consequat luctus purus eleifend enim sollicitudin eleifend, porta malesuada ac class conubia condimentum mauris facilisis conubia quis scelerisque lacinia.</p>\n\n<p>Tempus nullam felis fusce ac potenti netus ornare semper molestie iaculis, fermentum ornare curabitur tincidunt imperdiet scelerisque imperdiet euismod. Scelerisque torquent curae rhoncus sollicitudin tortor placerat aptent hac, nec posuere suscipit sed tortor neque urna hendrerit, vehicula duis litora tristique congue nec auctor. Felis libero ornare habitasse nec elit felis, inceptos tellus inceptos cubilia quis mattis, faucibus sem non odio fringilla. Class aliquam metus ipsum lorem luctus pharetra dictum vehicula, tempus in venenatis gravida ut gravida proin orci, quis sed platea mi quisque hendrerit semper.</p>\n', 0, 1, 2),
(3, '2016-08-27 13:25:37', '2016-08-27 13:25:37', 'Post 3', 'post-3', '<img alt="" src="/filemanager/userfiles/user2/rouge-shell.png" style="float:left; height:128px; width:128px" /><p>\nLorem ipsum in nullam adipiscing pulvinar libero aliquam vestibulum platea, cursus pellentesque leo dui lectus curabitur euismod ad erat curae, non elit ultrices placerat netus metus feugiat non. \nConubia fusce porttitor sociosqu diam commodo metus in, himenaeos vitae aptent consequat luctus purus eleifend enim, sollicitudin eleifend porta malesuada ac class. \n</p>', '<p>\nLorem ipsum class condimentum mauris facilisis conubia quis scelerisque lacinia, tempus nullam felis fusce ac potenti netus ornare semper, molestie iaculis fermentum ornare curabitur tincidunt imperdiet scelerisque. \nImperdiet euismod scelerisque torquent curae rhoncus, sollicitudin tortor placerat aptent, hac nec posuere suscipit. \nSed tortor neque urna hendrerit vehicula duis litora tristique congue nec, auctor felis libero ornare habitasse nec elit felis inceptos tellus inceptos, cubilia quis mattis faucibus sem non odio fringilla class. \nAliquam metus ipsum lorem luctus pharetra dictum vehicula tempus in, venenatis gravida ut gravida proin orci quis sed, platea mi quisque hendrerit semper hendrerit facilisis ante. \n</p>\n<p>\nSapien faucibus ligula commodo vestibulum rutrum pretium varius sem aliquet, himenaeos dolor cursus nunc habitasse aliquam ut curabitur ipsum, luctus ut rutrum odio condimentum donec suscipit molestie. \nEst etiam sit rutrum dui nostra sem aliquet conubia, nullam sollicitudin rhoncus venenatis vivamus rhoncus netus, risus tortor non mauris turpis eget integer. \nNibh dolor commodo venenatis ut molestie semper adipiscing amet, cras class donec sapien malesuada auctor sapien arcu, inceptos aenean consequat metus litora mattis vivamus. \nFeugiat arcu adipiscing mauris primis ante ullamcorper ad nisi, lobortis arcu per orci malesuada blandit metus tortor, urna turpis consectetur porttitor egestas sed eleifend. \n</p>\n<p>\nEget tincidunt pharetra varius tincidunt morbi malesuada elementum, mi torquent mollis eu lobortis curae purus amet, vivamus amet nulla torquent nibh eu. \nDiam aliquam pretium donec aliquam tempus, lacus tempus feugiat lectus cras non, velit mollis sit et. \nInteger egestas habitant auctor integer sem at nam massa himenaeos netus vel dapibus, nibh malesuada leo fusce tortor sociosqu semper facilisis semper class tempus. \nFaucibus tristique duis eros cubilia quisque habitasse aliquam fringilla, orci non vel laoreet dolor enim justo, facilisis neque accumsan in ad venenatis hac. \nPer dictumst nulla ligula donec mollis massa porttitor ullamcorper, risus eu platea fringilla habitasse suscipit pellentesque, donec est habitant vehicula tempor ultrices placerat. \n</p>\n<p>\nSociosqu ultrices consectetur ullamcorper tincidunt quisque tellus ante, nostra euismod nec suspendisse sem curabitur elit, malesuada lacus viverra sagittis sit ornare. \nOrci augue nullam adipiscing pulvinar libero aliquam vestibulum platea cursus pellentesque, leo dui lectus curabitur euismod ad erat curae non elit, ultrices placerat netus metus feugiat non conubia fusce porttitor. \nSociosqu diam commodo metus in himenaeos vitae aptent consequat luctus purus, eleifend enim sollicitudin eleifend porta malesuada ac class conubia, condimentum mauris facilisis conubia quis scelerisque lacinia tempus nullam. \nFelis fusce ac potenti netus ornare semper molestie, iaculis fermentum ornare curabitur tincidunt imperdiet, scelerisque imperdiet euismod scelerisque torquent curae rhoncus, sollicitudin tortor placerat aptent hac. \n</p>\n<p>\nNec posuere suscipit sed tortor neque urna hendrerit vehicula duis litora tristique, congue nec auctor felis libero ornare habitasse nec elit felis. \nInceptos tellus inceptos cubilia quis mattis faucibus sem non odio fringilla class, aliquam metus ipsum lorem luctus pharetra dictum vehicula tempus in, venenatis gravida ut gravida proin orci quis sed platea mi. \nQuisque hendrerit semper hendrerit facilisis ante sapien faucibus, ligula commodo vestibulum rutrum pretium varius sem, aliquet himenaeos dolor cursus nunc habitasse. \nAliquam ut curabitur ipsum luctus ut rutrum odio condimentum, donec suscipit molestie est etiam sit. \n</p>', 0, 1, 2),
(4, '2016-08-27 13:25:37', '2016-08-27 13:25:37', 'Post 4', 'post-4', '<img alt="" src="/filemanager/userfiles/user2/rouge-shyguy.png" style="float:left; height:128px; width:128px" /><p>\nLorem ipsum egestas amet nostra sem aliquet conubia nullam sollicitudin rhoncus, venenatis vivamus rhoncus netus risus tortor non mauris turpis. \nEget integer nibh dolor commodo venenatis ut molestie semper adipiscing amet, cras class donec sapien malesuada auctor sapien arcu inceptos aenean, consequat metus litora mattis vivamus feugiat arcu adipiscing mauris. \n</p>', '<p>\nLorem ipsum fringilla ante ullamcorper ad nisi lobortis arcu per orci malesuada blandit, metus tortor urna turpis consectetur porttitor egestas sed eleifend eget. \nTincidunt pharetra varius tincidunt morbi malesuada elementum mi torquent mollis eu lobortis curae purus amet vivamus, amet nulla torquent nibh eu diam aliquam pretium donec aliquam tempus lacus tempus feugiat. \nLectus cras non velit mollis sit et integer, egestas habitant auctor integer sem at nam, massa himenaeos netus vel dapibus nibh. \nMalesuada leo fusce tortor sociosqu semper facilisis semper class, tempus faucibus tristique duis eros cubilia quisque habitasse aliquam, fringilla orci non vel laoreet dolor enim. \n</p>\n<p>\nJusto facilisis neque accumsan in ad venenatis hac per dictumst, nulla ligula donec mollis massa porttitor ullamcorper risus eu platea, fringilla habitasse suscipit pellentesque donec est habitant vehicula. \nTempor ultrices placerat sociosqu ultrices consectetur ullamcorper tincidunt, quisque tellus ante nostra euismod nec, suspendisse sem curabitur elit malesuada lacus. \nViverra sagittis sit ornare orci augue nullam adipiscing, pulvinar libero aliquam vestibulum platea cursus, pellentesque leo dui lectus curabitur euismod. \nAd erat curae non elit ultrices placerat netus metus feugiat non conubia, fusce porttitor sociosqu diam commodo metus in himenaeos vitae. \n</p>\n<p>\nAptent consequat luctus purus eleifend enim sollicitudin eleifend porta malesuada ac, class conubia condimentum mauris facilisis conubia quis scelerisque lacinia, tempus nullam felis fusce ac potenti netus ornare semper. \nMolestie iaculis fermentum ornare curabitur tincidunt imperdiet scelerisque, imperdiet euismod scelerisque torquent curae rhoncus sollicitudin tortor, placerat aptent hac nec posuere suscipit. \nSed tortor neque urna hendrerit vehicula duis litora tristique, congue nec auctor felis libero ornare habitasse nec, elit felis inceptos tellus inceptos cubilia quis. \nMattis faucibus sem non odio fringilla class, aliquam metus ipsum lorem luctus pharetra, dictum vehicula tempus in venenatis. \n</p>\n<p>\nGravida ut gravida proin orci quis sed platea mi quisque, hendrerit semper hendrerit facilisis ante sapien faucibus ligula, commodo vestibulum rutrum pretium varius sem aliquet himenaeos. \nDolor cursus nunc habitasse aliquam ut curabitur ipsum luctus ut, rutrum odio condimentum donec suscipit molestie est etiam sit, rutrum dui nostra sem aliquet conubia nullam sollicitudin. \nRhoncus venenatis vivamus rhoncus netus risus tortor non mauris turpis, eget integer nibh dolor commodo venenatis ut molestie semper, adipiscing amet cras class donec sapien malesuada auctor sapien, arcu inceptos aenean consequat metus litora mattis vivamus. \n</p>\n<p>\nFeugiat arcu adipiscing mauris primis ante ullamcorper ad nisi lobortis arcu per, orci malesuada blandit metus tortor urna turpis consectetur porttitor egestas sed eleifend, eget tincidunt pharetra varius tincidunt morbi malesuada elementum mi torquent. \nMollis eu lobortis curae purus amet vivamus amet nulla, torquent nibh eu diam aliquam pretium donec, aliquam tempus lacus tempus feugiat lectus cras. \nNon velit mollis sit et integer egestas habitant auctor integer sem, at nam massa himenaeos netus vel dapibus nibh malesuada leo fusce, tortor sociosqu semper facilisis semper class tempus faucibus tristique. \n</p>\n<p>\nDuis eros cubilia quisque habitasse aliquam fringilla orci, non vel laoreet dolor enim justo facilisis neque, accumsan in ad venenatis hac per. \nDictumst nulla ligula donec mollis massa porttitor ullamcorper, risus eu platea fringilla habitasse suscipit, pellentesque donec est habitant vehicula tempor. \n</p>', 0, 1, 2);

-- --------------------------------------------------------

--
-- Table structure for table `post_tag`
--

CREATE TABLE IF NOT EXISTS `post_tag` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `post_id` int(10) unsigned NOT NULL,
  `tag_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `post_tag_post_id_foreign` (`post_id`),
  KEY `post_tag_tag_id_foreign` (`tag_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=9 ;

--
-- Dumping data for table `post_tag`
--

INSERT INTO `post_tag` (`id`, `post_id`, `tag_id`) VALUES
(1, 1, 1),
(2, 1, 2),
(3, 2, 1),
(4, 2, 2),
(5, 2, 3),
(6, 3, 1),
(7, 3, 2),
(8, 3, 4);

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE IF NOT EXISTS `roles` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `slug` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=4 ;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `title`, `slug`, `created_at`, `updated_at`) VALUES
(1, 'Administrator', 'admin', '2016-08-27 13:25:35', '2016-08-27 13:25:35'),
(2, 'Redactor', 'redac', '2016-08-27 13:25:35', '2016-08-27 13:25:35'),
(3, 'User', 'user', '2016-08-27 13:25:35', '2016-08-27 13:25:35');

-- --------------------------------------------------------

--
-- Table structure for table `tableproducts`
--

CREATE TABLE IF NOT EXISTS `tableproducts` (
  `p_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `p_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `p_url` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `p_code` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `p_image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `p_description` text COLLATE utf8_unicode_ci NOT NULL,
  `p_status` tinyint(4) NOT NULL,
  `p_ordering` tinyint(4) NOT NULL,
  `trush` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`p_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=3 ;

--
-- Dumping data for table `tableproducts`
--

INSERT INTO `tableproducts` (`p_id`, `p_name`, `p_url`, `p_code`, `p_image`, `p_description`, `p_status`, `p_ordering`, `trush`, `created_at`, `updated_at`) VALUES
(1, 'T-shirt With', '{{ old(''{{ old(''{{ old(''http://localhost/language/public/admin/product/add'') }}'') }}'') }}', '00182@32', 'camera-loader.gif', '', 1, 1, 0, '2016-08-30 22:57:56', '2016-08-30 22:57:56'),
(2, 'T-shirt With 12434', 'http://localhost/language/public/admin/product/add', '00182@32dsd', 'cakephp.png', '<p><img alt="" src="/language/public/admin/kcfinder/upload/images/Logo-1.png" style="height:129px; width:130px" /><img alt="" src="/language/public/admin/kcfinder/upload/images/logo123.png" style="height:130px; width:200px" /></p>\r\n', 1, 2, 0, '2016-08-30 23:08:38', '2016-08-30 23:08:38');

-- --------------------------------------------------------

--
-- Table structure for table `table_articles`
--

CREATE TABLE IF NOT EXISTS `table_articles` (
  `article_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `lang_ids` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `images` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL,
  `ordering` tinyint(4) NOT NULL,
  `trush` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`article_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- Dumping data for table `table_articles`
--

INSERT INTO `table_articles` (`article_id`, `user_id`, `lang_ids`, `menu_id`, `title`, `images`, `description`, `status`, `ordering`, `trush`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 7, 'Saran', 'blog-thumb3.jpg', '<p><img alt="" src="/language/public/admin/kcfinder/upload/images/laravel-logo-white.png" style="height:49px; width:130px" /><img alt="" src="/language/public/admin/kcfinder/upload/images/logo-white.png" style="height:129px; width:150px" /></p>\r\n', 1, 1, 0, '2016-08-30 10:04:30', '2016-08-30 10:04:30');

-- --------------------------------------------------------

--
-- Table structure for table `tags`
--

CREATE TABLE IF NOT EXISTS `tags` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `tag` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `tags_tag_unique` (`tag`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=5 ;

--
-- Dumping data for table `tags`
--

INSERT INTO `tags` (`id`, `created_at`, `updated_at`, `tag`) VALUES
(1, '2016-08-27 13:25:36', '2016-08-27 13:25:36', 'Tag1'),
(2, '2016-08-27 13:25:36', '2016-08-27 13:25:36', 'Tag2'),
(3, '2016-08-27 13:25:36', '2016-08-27 13:25:36', 'Tag3'),
(4, '2016-08-27 13:25:36', '2016-08-27 13:25:36', 'Tag4');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `role_id` int(10) unsigned NOT NULL,
  `seen` tinyint(1) NOT NULL DEFAULT '0',
  `valid` tinyint(1) NOT NULL DEFAULT '0',
  `confirmed` tinyint(1) NOT NULL DEFAULT '0',
  `confirmation_code` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_username_unique` (`username`),
  UNIQUE KEY `users_email_unique` (`email`),
  KEY `users_role_id_foreign` (`role_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=5 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `role_id`, `seen`, `valid`, `confirmed`, `confirmation_code`, `created_at`, `updated_at`, `remember_token`) VALUES
(1, 'GreatAdmin', 'admin@la.fr', '$2y$10$covGN6iKMrGgMbrmo4Mg/OKGiDMnEIbxnjhJw4Q92of4/zFv7xQ7a', 1, 1, 0, 1, NULL, '2016-08-27 13:25:35', '2016-08-29 00:50:11', 'oUzgqt24Zo8upadIQ4iHV17KffswfONsUSXSbrJFEmiU3Bkq8sX5L0Ipg8Mc'),
(2, 'GreatRedactor', 'redac@la.fr', '$2y$10$T1Y4lqCvMsbI6pF/0pkKo.XEEmoNt/jIVaaGrkq6FmNFvqxq3Ylxi', 2, 1, 1, 1, NULL, '2016-08-27 13:25:35', '2016-08-27 13:25:35', NULL),
(3, 'Walker', 'walker@la.fr', '$2y$10$p.9g.F/.hnC/6MUkQHtPLOXeQf8Rq94UvxWWxqTEjEA5OaDhPV4bK', 3, 0, 0, 1, NULL, '2016-08-27 13:25:35', '2016-08-27 13:25:35', NULL),
(4, 'Slacker', 'slacker@la.fr', '$2y$10$GJL4sGXmAKgI/aA1ppUGGOrlZBMTFVrHdjs8lbuCxraUJUjZucQai', 3, 0, 0, 1, NULL, '2016-08-27 13:25:36', '2016-08-27 13:25:36', NULL);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `comments_post_id_foreign` FOREIGN KEY (`post_id`) REFERENCES `posts` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `comments_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `posts`
--
ALTER TABLE `posts`
  ADD CONSTRAINT `posts_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `post_tag`
--
ALTER TABLE `post_tag`
  ADD CONSTRAINT `post_tag_post_id_foreign` FOREIGN KEY (`post_id`) REFERENCES `posts` (`id`),
  ADD CONSTRAINT `post_tag_tag_id_foreign` FOREIGN KEY (`tag_id`) REFERENCES `tags` (`id`);

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
