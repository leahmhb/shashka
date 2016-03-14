-- phpMyAdmin SQL Dump
-- version 4.4.13.1deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 13, 2016 at 05:51 PM
-- Server version: 5.6.28-0ubuntu0.15.10.1
-- PHP Version: 5.6.11-1ubuntu3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rodinia`
--

-- --------------------------------------------------------

--
-- Table structure for table `abilities`
--

CREATE TABLE IF NOT EXISTS `abilities` (
  `id` int(10) unsigned NOT NULL,
  `ability` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM AUTO_INCREMENT=38 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `abilities`
--

INSERT INTO `abilities` (`id`, `ability`, `type`, `description`, `created_at`, `updated_at`) VALUES
(37, 'Bears', 'negative', 'Bears right and left when stamina runs out', '2016-03-14 01:48:17', '2016-03-14 01:48:17'),
(1, 'Best Course', 'positive', 'Does better if it runs a course it likes', '2016-03-14 01:48:17', '2016-03-14 01:48:17'),
(2, 'Close Race Not OK ', 'negative', 'Performs poorly in close races', '2016-03-14 01:48:17', '2016-03-14 01:48:17'),
(3, 'Close race OK', 'positive', 'Excels in close races', '2016-03-14 01:48:17', '2016-03-14 01:48:17'),
(4, 'Closer', 'positive', 'Races well when overtaking horses around the final corner', '2016-03-14 01:48:17', '2016-03-14 01:48:17'),
(5, 'Delicate', 'negative', 'Easily upset by bumping', '2016-03-14 01:48:17', '2016-03-14 01:48:17'),
(6, 'Dust Not OK', 'negative', 'Does not do well with dust', '2016-03-14 01:48:17', '2016-03-14 01:48:17'),
(7, 'Fast Pace Not OK', 'negative', 'Races worse the faster the pace', '2016-03-14 01:48:17', '2016-03-14 01:48:17'),
(8, 'Fast Pace OK', 'positive', 'Races better in faster paced races', '2016-03-14 01:48:17', '2016-03-14 01:48:17'),
(9, 'Free', 'positive', 'Races well even when out of position', '2016-03-14 01:48:17', '2016-03-14 01:48:17'),
(10, 'From Outside', 'positive', 'Gives an impressive burst on the outside after staying towards the back during the race', '2016-03-14 01:48:17', '2016-03-14 01:48:17'),
(11, 'Front Runner', 'positive', 'Races well when leading the pack by a large margin. Only for front running horses', '2016-03-14 01:48:17', '2016-03-14 01:48:17'),
(12, 'Grit', 'positive', 'Excels going head-to-head with another horse to the finish line', '2016-03-14 01:48:17', '2016-03-14 01:48:17'),
(13, 'Hates Pack', 'negative', 'Upset when caught in a crowd', '2016-03-14 01:48:17', '2016-03-14 01:48:17'),
(14, 'Inflexible', 'negative', 'Cannot race out of position', '2016-03-14 01:48:17', '2016-03-14 01:48:17'),
(15, 'Instant Response', 'positive', 'Reacts quickly to the jockey', '2016-03-14 01:48:17', '2016-03-14 01:48:17'),
(16, 'Last Corner Leader', 'positive', 'Performs well after taking lead around the last corner', '2016-03-14 01:48:17', '2016-03-14 01:48:17'),
(17, 'Last to First', 'positive', 'Explodes in the stretch when trailing through the race', '2016-03-14 01:48:17', '2016-03-14 01:48:17'),
(18, 'Likes Pack', 'positive', 'Comfortable running in a pack', '2016-03-14 01:48:17', '2016-03-14 01:48:17'),
(19, 'Loses Will', 'negative', 'Easily distracted after taking lead around the last corner', '2016-03-14 01:48:17', '2016-03-14 01:48:17'),
(20, 'Pace Down', 'positive', 'Pace slower is okay', '2016-03-14 01:48:17', '2016-03-14 01:48:17'),
(21, 'Pace Split', 'positive', 'Okay if pack splits', '2016-03-14 01:48:17', '2016-03-14 01:48:17'),
(22, 'Persistency', 'positive', 'Keeps going', '2016-03-14 01:48:17', '2016-03-14 01:48:17'),
(23, 'Rough Track Not OK', 'negative', 'Races poorly in rough track conditions', '2016-03-14 01:48:17', '2016-03-14 01:48:17'),
(24, 'Rough Track OK', 'positive', 'Performs well even in rough track conditions', '2016-03-14 01:48:17', '2016-03-14 01:48:17'),
(25, 'Second Wind', 'positive', 'When leading the pack all race long, further separates from the pack in the final stretch', '2016-03-14 01:48:17', '2016-03-14 01:48:17'),
(26, 'Slow OK', 'positive', 'Races better in slower races', '2016-03-14 01:48:17', '2016-03-14 01:48:17'),
(27, 'Slow Pace Not OK', 'negative', 'Races poorly in slower races', '2016-03-14 01:48:17', '2016-03-14 01:48:17'),
(28, 'Slow Start', 'negative', 'Slow at the beginning of the race', '2016-03-14 01:48:17', '2016-03-14 01:48:17'),
(29, 'Solo Runner', 'positive', 'Performs well when more than two lengths in the lead', '2016-03-14 01:48:17', '2016-03-14 01:48:17'),
(30, 'Spurt', 'positive', 'Excels when spurting from the back of the pack to ', '2016-03-14 01:48:17', '2016-03-14 01:48:17'),
(31, 'Start Dash', 'positive', 'Starts well at the beginning of the race', '2016-03-14 01:48:17', '2016-03-14 01:48:17'),
(32, 'Stretch Burst', 'positive', 'Shows a tremendous burst of speed to the finish line', '2016-03-14 01:48:17', '2016-03-14 01:48:17'),
(33, 'Strong Heart', 'positive', 'Whip gauge falls slower than other horses in the stretch if the horse still has stamina', '2016-03-14 01:48:17', '2016-03-14 01:48:17'),
(34, 'Stubborn', 'negative', 'Sprints uncontrollably when spooked', '2016-03-14 01:48:17', '2016-03-14 01:48:17'),
(35, 'Tough', 'positive', 'Unfazed by bumping', '2016-03-14 01:48:17', '2016-03-14 01:48:17'),
(36, 'Whip', 'positive', 'Accelerates faster than usual when whipped at the start of the race', '2016-03-14 01:48:17', '2016-03-14 01:48:17');

-- --------------------------------------------------------

--
-- Table structure for table `grades`
--

CREATE TABLE IF NOT EXISTS `grades` (
  `id` int(10) unsigned NOT NULL,
  `grade` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `grades`
--

INSERT INTO `grades` (`id`, `grade`, `description`, `created_at`, `updated_at`) VALUES
(1, 'Open Level', 'Three highest stats are below 65', '2016-03-14 01:48:17', '2016-03-14 01:48:17'),
(2, 'GIII', '65 in any three or more stats', '2016-03-14 01:48:17', '2016-03-14 01:48:17'),
(3, 'GII', '75 in any two or more stats', '2016-03-14 01:48:17', '2016-03-14 01:48:17'),
(4, 'GI', '85 in any one or more stats', '2016-03-14 01:48:17', '2016-03-14 01:48:17');

-- --------------------------------------------------------

--
-- Table structure for table `horses`
--

CREATE TABLE IF NOT EXISTS `horses` (
  `id` int(10) unsigned NOT NULL,
  `owner` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `breeder` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `hexer` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `call_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `registered_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `sex` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `color` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `phenotype` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `grade` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'Open Level',
  `leg_type` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `speed` int(11) NOT NULL DEFAULT '50',
  `staying` int(11) NOT NULL DEFAULT '50',
  `stamina` int(11) NOT NULL DEFAULT '50',
  `breaking` int(11) NOT NULL DEFAULT '50',
  `power` int(11) NOT NULL DEFAULT '50',
  `feel` int(11) NOT NULL DEFAULT '50',
  `fierce` int(11) NOT NULL DEFAULT '50',
  `tenacity` int(11) NOT NULL DEFAULT '50',
  `courage` int(11) NOT NULL DEFAULT '50',
  `response` int(11) NOT NULL DEFAULT '50',
  `pos_ability_1` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `pos_ability_2` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `neg_ability_1` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `distance_min` double(8,2) NOT NULL,
  `distance_max` double(8,2) NOT NULL,
  `surface_dirt` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `surface_turf` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `bandages` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'None',
  `neck_height` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'Normal',
  `run_style` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'Normal',
  `hood` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'No',
  `shadow_roll` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'No',
  `notes` longtext COLLATE utf8_unicode_ci NOT NULL,
  `stall_path` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT '#',
  `img_path` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT '#',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM AUTO_INCREMENT=31 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `horses`
--

INSERT INTO `horses` (`id`, `owner`, `breeder`, `hexer`, `call_name`, `registered_name`, `sex`, `color`, `phenotype`, `grade`, `leg_type`, `speed`, `staying`, `stamina`, `breaking`, `power`, `feel`, `fierce`, `tenacity`, `courage`, `response`, `pos_ability_1`, `pos_ability_2`, `neg_ability_1`, `distance_min`, `distance_max`, `surface_dirt`, `surface_turf`, `bandages`, `neck_height`, `run_style`, `hood`, `shadow_roll`, `notes`, `stall_path`, `img_path`, `created_at`, `updated_at`) VALUES
(1, 'Haubing', 'Neco', 'Neco', 'Riparian', 'Lessons Learned', 'Stallion', 'Black', 'EE', 'GI', 'Front Runner', 87, 76, 85, 72, 77, 71, 71, 71, 75, 77, 'Front Runner', 'Second Wind', 'Stubborn', 8.00, 12.00, 'Good', 'Good', 'Both', 'Normal', 'Normal', 'Yes', 'Yes', '', '/stall/1', 'http://leahmhb.info/stall_img/Riparian.png', '2016-03-14 01:48:17', '2016-03-14 01:48:17'),
(2, 'Haubing', '', 'Katann', 'American Pharoah', 'Divine Right', 'Stallion', 'Bay', 'EeAa', 'GIII', 'Front Runner', 87, 69, 69, 68, 69, 69, 67, 68, 67, 68, 'Last Corner Leader', 'Second Wind', 'Dust Not OK', 8.00, 12.00, 'Great', 'Okay', 'Both', 'Normal', 'Normal', 'No', 'Yes', '', '/stall/2', 'http://leahmhb.info/stall_img/American%20Pharoah.png', '2016-03-14 01:48:17', '2016-03-14 01:48:17'),
(3, 'Haubing', 'Neco', 'Neco', 'Sovenance', 'A Kinder Reminiscence', 'Mare', 'Bay', 'EeAA', 'GII', 'Closer', 76, 71, 80, 70, 72, 67, 73, 63, 65, 73, 'Stretch Burst', 'Closer', 'Slow Start', 8.00, 12.00, 'Great', 'Okay', 'Both', 'Normal', 'Normal', 'No', 'Yes', '', '/stall/3', 'http://leahmhb.info/stall_img/Sovenance.png', '2016-03-14 01:48:17', '2016-03-14 01:48:17'),
(4, 'Haubing', 'Artemis', 'Artemis', 'Trickery', 'Beneath Still Waters', 'Stallion', 'Bay', 'EeAA', 'Open Level', 'Closer', 67, 70, 70, 60, 60, 61, 62, 60, 58, 58, 'Stretch Burst', 'Instant Response', 'Stubborn', 7.00, 10.00, 'Good', 'Good', 'Both', 'Normal', 'Normal', 'No', 'Yes', '', '/stall/4', 'http://leahmhb.info/stall_img/Trickery.png', '2016-03-14 01:48:17', '2016-03-14 01:48:17'),
(19, 'Haubing', 'Neco', 'Neco', 'Antebellum', 'Southern Belle', 'Mare', '', '', 'GIII', 'Stalker', 76, 65, 71, 65, 67, 65, 64, 65, 66, 67, 'Stretch Burst', 'Persistency', 'Inflexible', 8.00, 12.00, 'Good', 'Good', 'Both', 'Normal', 'Normal', 'Yes', 'Yes', '', '/stall/19', 'http://leahmhb.info/stall_img/Antebellum.png', '2016-03-09 08:23:42', '2016-03-14 04:51:25'),
(14, 'Neco', '', '', 'Reverence', 'Think Of Me Fondly', 'Mare', '', '', 'Open Level', '', 50, 50, 50, 50, 50, 50, 50, 50, 50, 50, '', '', '', 0.00, 0.00, '', '', 'None', 'Normal', 'Normal', 'No', 'No', '', 'Http://seeingstars.boards.net/thread/2395', '', '2016-03-06 04:11:22', '2016-03-06 04:11:22'),
(13, 'Artemis', '', '', 'Ziio', 'Kaniehtí:io', 'Mare', '', '', '', '', 50, 50, 50, 50, 50, 50, 50, 50, 50, 50, '', '', '', 0.00, 0.00, '', '', 'None', 'Normal', 'Normal', 'No', 'No', '', 'Http://seeingstars.boards.net/thread/2009', '', '2016-03-05 14:42:33', '2016-03-05 14:42:33'),
(20, 'Haubing', 'Haubing', 'Haubing', 'Manu', 'Pouring Smoke and Rain', 'Stallion', 'Chestnut', '', 'GII', 'Front Runner', 81, 69, 82, 68, 69, 64, 69, 64, 64, 64, 'Front Runner', 'Second Wind', 'Hates Pack', 6.00, 10.00, 'Good', 'Good', 'Both', 'High', 'Leg Lift', 'Yes', 'Yes', '', '/stall/20', 'http://leahmhb.info/stall_img/Manu.png', '2016-03-14 04:54:11', '2016-03-14 04:54:11'),
(21, 'Haubing', 'Haubing', 'Haubing', 'Savarni', 'Without the Sun', 'Stallion', 'Gray', '', 'GIII', 'Stalker', 75, 62, 72, 64, 67, 62, 66, 60, 67, 65, 'Stretch Burst', 'Second Wind', 'Hates Pack', 5.00, 9.00, 'Good', 'Good', 'Both', 'Normal', 'Normal', 'Yes', 'Yes', '', '/stall/21', 'http://leahmhb.info/stall_img/Savarni.png', '2016-03-14 04:56:20', '2016-03-14 04:56:20'),
(22, 'Haubing', 'Gor', 'Gor', 'River Street', 'Better Bank On It', 'Stallion', 'Bay', '', 'GIII', 'Stalker', 71, 72, 69, 61, 64, 66, 64, 63, 63, 67, 'Likes Pack', 'Stretch Burst', 'Stubborn', 8.00, 12.00, 'Good', 'Good', 'Both', 'Normal', 'Normal', 'Yes', 'Yes', '', '/stall/22', 'http://leahmhb.info/stall_img/River Street.png', '2016-03-14 04:58:41', '2016-03-14 04:58:41'),
(23, 'Haubing', 'Gor', 'Gor', 'Longevity', 'Love the Quiet Life', 'Stallion', '', '', 'Open Level', 'Follower', 70, 59, 60, 59, 60, 58, 59, 59, 58, 58, 'Instant Response', 'Whip', 'Slow Start', 10.00, 14.00, 'Great', 'Okay', 'Both', 'High', 'Leg Lift', 'Yes', 'Yes', '', '/stall/23', 'http://leahmhb.info/stall_img/Longevity.png', '2016-03-14 05:02:44', '2016-03-14 05:02:44'),
(24, 'Haubing', '', 'Daveena', 'Leise', 'Always the Quiet Ones', 'Mare', '', '', 'GIII', 'Closer', 69, 66, 67, 63, 65, 61, 62, 60, 62, 63, 'Spurt', 'Persistency', 'Bears', 12.00, 16.00, 'Good', 'Good', 'Both', 'Normal', 'Normal', 'Yes', 'Yes', '', '/stall/24', 'http://leahmhb.info/stall_img/Leise.png', '2016-03-14 05:05:24', '2016-03-14 05:22:22'),
(25, 'Haubing', '', 'Neco', 'Zippa', 'Buzzin'' By', 'Mare', 'Bay', '', 'GIII', 'Follower', 73, 68, 69, 59, 65, 58, 61, 57, 60, 63, 'Instant Response', 'Grit', 'Bears', 8.00, 10.00, 'Good', 'Good', 'Both', 'Normal', 'Normal', 'No', 'No', '', '/stall/25', 'http://leahmhb.info/stall_img/Zippa.png', '2016-03-14 05:09:21', '2016-03-14 05:09:21'),
(26, 'Haubing', '', 'Mak', 'Capricious', 'Flirt', 'Mare', 'Gray', '', 'GI', 'Stalker', 87, 73, 80, 70, 80, 71, 71, 72, 72, 72, 'Stretch Burst', 'Whip', 'Delicate', 5.00, 8.00, 'Good', 'Good', 'Front', 'Normal', 'Normal', 'Yes', 'Yes', '', '/stall/26', 'http://leahmhb.info/stall_img/Capricious.png', '2016-03-14 05:11:05', '2016-03-14 05:11:05'),
(27, 'Haubing', '', 'Gor', 'Winnie', 'Watch Me', 'Mare', '', '', 'GIII', 'Stalker', 67, 65, 64, 64, 67, 62, 64, 62, 61, 66, 'Free', 'Grit', 'Stubborn', 7.00, 11.00, 'Good', 'Good', 'Front', 'Normal', 'Leg Lift', 'No', 'Yes', '', '/stall/27', 'http://leahmhb.info/stall_img/Winnie.png', '2016-03-14 05:12:54', '2016-03-14 05:12:54'),
(28, 'Haubing', 'Katann', 'Katann', 'Pollyanna', 'Paint a Smile', 'Mare', 'Gray', '', 'Open Level', 'Follower', 60, 59, 57, 56, 59, 55, 61, 59, 61, 63, 'Whip', 'Instant Response', 'Bears', 9.00, 14.00, 'Good', 'Good', 'Both', 'Normal', 'Normal', 'Yes', 'Yes', '', '/stall/28', 'http://leahmhb.info/stall_img/Pollyanna.png', '2016-03-14 05:14:55', '2016-03-14 05:14:55'),
(29, 'Haubing', '', 'Haubing', 'Nouvar', 'Bring on the Rain', 'Mare', 'Gray', '', 'GIII', 'Follower', 73, 71, 72, 60, 70, 62, 63, 59, 63, 65, 'Likes Pack', 'Tough', 'Inflexible', 8.00, 12.00, 'Okay', 'Great', 'Both', 'Normal', 'Normal', 'Yes', 'Yes', '', '/stall/29', 'http://leahmhb.info/stall_img/Nouvar.png', '2016-03-14 05:16:17', '2016-03-14 05:16:17'),
(30, 'Haubing', '', 'Haubing', 'Illegal', 'That Can''t Be Legal', 'Mare', 'Black', '', 'Open Level', 'Closer', 69, 63, 70, 58, 59, 61, 59, 58, 62, 60, 'From Outside', 'Whip', 'Bears', 11.00, 14.00, 'Okay', 'Great', 'Both', 'Normal', 'Normal', 'No', 'No', '', '/stall/30', 'http://leahmhb.info/stall_img/Illegal.png', '2016-03-14 05:18:07', '2016-03-14 05:18:07');

-- --------------------------------------------------------

--
-- Table structure for table `horses_progeny`
--

CREATE TABLE IF NOT EXISTS `horses_progeny` (
  `id` int(10) unsigned NOT NULL,
  `horse_id` int(10) unsigned NOT NULL,
  `sire_id` int(10) unsigned NOT NULL,
  `dam_id` int(10) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `horses_progeny`
--

INSERT INTO `horses_progeny` (`id`, `horse_id`, `sire_id`, `dam_id`, `created_at`, `updated_at`) VALUES
(1, 21, 20, 29, '2016-03-14 01:51:16', '2016-03-14 01:51:16');

-- --------------------------------------------------------

--
-- Table structure for table `leg_types`
--

CREATE TABLE IF NOT EXISTS `leg_types` (
  `id` int(10) unsigned NOT NULL,
  `type` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `leg_types`
--

INSERT INTO `leg_types` (`id`, `type`, `description`, `created_at`, `updated_at`) VALUES
(1, 'Closer', 'This type of horse often drops to the back of the field and trails the field throughout the race, until it lets loose an explosive turn of foot. These horses will often look to be hopelessly beaten, then suddenly turn it on in the middle or deep stretch and charge down the track hellbent for the finish line. They can often overwhelm horses that ran near the pace and repel challenges from other closers.', '2016-03-14 01:48:17', '2016-03-14 01:48:17'),
(2, 'Follower', 'This type of horse is often found in the middle of the pack, happily running along and bumping into its fellows without a care in the world. They’re content to run five or more lengths off the leaders and make their moves near the middle of the stretch and can sometimes simply overwhelm a tiring leader or kick back a challenging closer. They are similar to closers, but run closer to the stalkers and leaders.', '2016-03-14 01:48:17', '2016-03-14 01:48:17'),
(3, 'Front Runner', 'This type of horse loves the lead and loves to run uncontested at the front of the pack. Often these horses hate the idea of other horses bumping or pushing them in the middle of the pack and will run away at the start to lead the rest of the field on a merry chase. These horses may or may not be able to hold off closers – more often they can fold under pressure. ', '2016-03-14 01:48:17', '2016-03-14 01:48:17'),
(4, 'Stalker', 'This type of horse is usually only a few lengths off the pace and tracking the leaders through each turn. These horses will bide their time then throw in a big move near the top or middle of a stretch, wearing down the leader to take over the top spot and hold on for the wire. Much like front runners, they may or may not be able to fend off the challengers of deep closers. ', '2016-03-14 01:48:17', '2016-03-14 01:48:17');

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
('2016_02_27_172548_create_rodinia_tables', 1);

-- --------------------------------------------------------

--
-- Table structure for table `person`
--

CREATE TABLE IF NOT EXISTS `person` (
  `id` int(10) unsigned NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `stable_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT '',
  `stable_prefix` varchar(255) COLLATE utf8_unicode_ci DEFAULT '',
  `racing_colors` varchar(255) COLLATE utf8_unicode_ci DEFAULT '',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `person`
--

INSERT INTO `person` (`id`, `username`, `stable_name`, `stable_prefix`, `racing_colors`, `created_at`, `updated_at`) VALUES
(1, 'Haubing', 'Shashka Stables', 'Haubing', '', '2016-03-14 01:48:17', '2016-03-14 01:48:17'),
(2, 'Neco', 'Hard Tack', 'Hard Tack', '', '2016-03-14 01:48:17', '2016-03-14 01:48:17'),
(3, 'Katann', 'RKO Haven', 'RKO', '', '2016-03-14 01:48:17', '2016-03-14 01:48:17'),
(4, 'Artemis', 'Three Peaks Manor', 'Three Peaks', '', '2016-03-14 01:48:17', '2016-03-14 01:48:17'),
(5, 'Gor', 'BlueJay Racing', 'BlueJay', NULL, '2016-03-06 02:01:32', '2016-03-06 02:01:32'),
(6, 'Mak', 'Falling in Like', 'Falling', NULL, '2016-03-06 02:05:45', '2016-03-06 02:05:45'),
(13, 'Daveena', 'Moonmist', 'Daveena', NULL, '2016-03-14 05:22:09', '2016-03-14 05:22:09');

-- --------------------------------------------------------

--
-- Table structure for table `races`
--

CREATE TABLE IF NOT EXISTS `races` (
  `id` int(10) unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `surface` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `grade` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `distance` double(8,2) NOT NULL,
  `ran_dt` date NOT NULL,
  `url` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `race_entrants`
--

CREATE TABLE IF NOT EXISTS `race_entrants` (
  `id` int(10) unsigned NOT NULL,
  `horse_id` int(10) unsigned NOT NULL,
  `race_id` int(10) unsigned NOT NULL,
  `placing` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sexes`
--

CREATE TABLE IF NOT EXISTS `sexes` (
  `id` int(10) unsigned NOT NULL,
  `sex` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `sexes`
--

INSERT INTO `sexes` (`id`, `sex`, `description`, `created_at`, `updated_at`) VALUES
(1, 'Gelding', 'Altered male horse', '2016-03-14 01:48:17', '2016-03-14 01:48:17'),
(2, 'Mare', 'Unaltered female horse', '2016-03-14 01:48:17', '2016-03-14 01:48:17'),
(3, 'Stallion', 'Unaltered male horse', '2016-03-14 01:48:17', '2016-03-14 01:48:17');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `abilities`
--
ALTER TABLE `abilities`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `abilities_ability_unique` (`ability`),
  ADD KEY `abilities_ability_index` (`ability`);

--
-- Indexes for table `grades`
--
ALTER TABLE `grades`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `grades_grade_unique` (`grade`),
  ADD KEY `grades_grade_index` (`grade`);

--
-- Indexes for table `horses`
--
ALTER TABLE `horses`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `horses_registered_name_unique` (`registered_name`),
  ADD KEY `horses_owner_foreign` (`owner`),
  ADD KEY `horses_breeder_foreign` (`breeder`),
  ADD KEY `horses_hexer_foreign` (`hexer`),
  ADD KEY `horses_sex_foreign` (`sex`),
  ADD KEY `horses_grade_foreign` (`grade`),
  ADD KEY `horses_leg_type_foreign` (`leg_type`),
  ADD KEY `horses_pos_ability_1_foreign` (`pos_ability_1`),
  ADD KEY `horses_pos_ability_2_foreign` (`pos_ability_2`),
  ADD KEY `horses_neg_ability_1_foreign` (`neg_ability_1`);

--
-- Indexes for table `horses_progeny`
--
ALTER TABLE `horses_progeny`
  ADD PRIMARY KEY (`id`),
  ADD KEY `horses_progeny_horse_id_index` (`horse_id`),
  ADD KEY `horses_progeny_sire_id_index` (`sire_id`),
  ADD KEY `horses_progeny_dam_id_index` (`dam_id`);

--
-- Indexes for table `leg_types`
--
ALTER TABLE `leg_types`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `leg_types_type_unique` (`type`),
  ADD KEY `leg_types_type_index` (`type`);

--
-- Indexes for table `person`
--
ALTER TABLE `person`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `person_username_unique` (`username`),
  ADD KEY `person_username_index` (`username`);

--
-- Indexes for table `races`
--
ALTER TABLE `races`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `race_entrants`
--
ALTER TABLE `race_entrants`
  ADD PRIMARY KEY (`id`),
  ADD KEY `race_entrants_horse_id_index` (`horse_id`),
  ADD KEY `race_entrants_race_id_index` (`race_id`);

--
-- Indexes for table `sexes`
--
ALTER TABLE `sexes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sexes_sex_index` (`sex`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `abilities`
--
ALTER TABLE `abilities`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=38;
--
-- AUTO_INCREMENT for table `grades`
--
ALTER TABLE `grades`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `horses`
--
ALTER TABLE `horses`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=31;
--
-- AUTO_INCREMENT for table `horses_progeny`
--
ALTER TABLE `horses_progeny`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `leg_types`
--
ALTER TABLE `leg_types`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `person`
--
ALTER TABLE `person`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `races`
--
ALTER TABLE `races`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `race_entrants`
--
ALTER TABLE `race_entrants`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `sexes`
--
ALTER TABLE `sexes`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
