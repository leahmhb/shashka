-- phpMyAdmin SQL Dump
-- version 4.4.13.1deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 17, 2016 at 09:51 PM
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
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `grades`
--

INSERT INTO `grades` (`id`, `grade`, `description`, `created_at`, `updated_at`) VALUES
(1, 'Open Level', 'Three highest stats are below 65', '2016-03-14 01:48:17', '2016-03-14 01:48:17'),
(2, 'GIII', '65 in any three or more stats', '2016-03-14 01:48:17', '2016-03-14 01:48:17'),
(3, 'GII', '75 in any two or more stats', '2016-03-14 01:48:17', '2016-03-14 01:48:17'),
(4, 'GI', '85 in any one or more stats', '2016-03-14 01:48:17', '2016-03-14 01:48:17'),
(5, 'All', '', '', '');

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
  `distance_min` double(8,1) NOT NULL,
  `distance_max` double(8,1) NOT NULL,
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
) ENGINE=MyISAM AUTO_INCREMENT=32 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `horses`
--

INSERT INTO `horses` (`id`, `owner`, `breeder`, `hexer`, `call_name`, `registered_name`, `sex`, `color`, `phenotype`, `grade`, `leg_type`, `speed`, `staying`, `stamina`, `breaking`, `power`, `feel`, `fierce`, `tenacity`, `courage`, `response`, `pos_ability_1`, `pos_ability_2`, `neg_ability_1`, `distance_min`, `distance_max`, `surface_dirt`, `surface_turf`, `bandages`, `neck_height`, `run_style`, `hood`, `shadow_roll`, `notes`, `stall_path`, `img_path`, `created_at`, `updated_at`) VALUES
(1, 'Haubing', 'Neco', 'Neco', 'Riparian', 'Lessons Learned', 'Stallion', 'Black', 'EE', 'GI', 'Front Runner', 87, 76, 85, 72, 77, 71, 71, 71, 75, 77, 'Front Runner', 'Second Wind', 'Stubborn', 8.0, 12.0, 'Good', 'Good', 'Both', 'Normal', 'Normal', 'Yes', 'Yes', 'One of my most successful racehorses. I posted a request on Neco''s TB breeding service from two of my favorite real-life racehorses, Ruffian and Seattle Slew.', '/stall/1', 'http://leahmhb.info/stall_img/Riparian.png', '2016-03-14 01:48:17', '2016-03-18 05:37:43'),
(2, 'Haubing', '', 'Katann', 'American Pharoah', 'Divine Right', 'Stallion', 'Bay', 'EeAa', 'GIII', 'Front Runner', 87, 69, 69, 68, 69, 69, 67, 68, 67, 68, 'Last Corner Leader', 'Second Wind', 'Dust Not OK', 8.0, 12.0, 'Great', 'Okay', 'Both', 'Normal', 'Normal', 'No', 'Yes', 'Part of the Triple Crown 2015 raffle. Still can''t believe I won him!!', '/stall/2', 'http://leahmhb.info/stall_img/American%20Pharoah.png', '2016-03-14 01:48:17', '2016-03-14 03:07:18'),
(3, 'Haubing', 'Neco', 'Neco', 'Sovenance', 'A Kinder Reminiscence', 'Mare', 'Bay', 'EeAA', 'GII', 'Closer', 76, 71, 80, 70, 72, 67, 73, 63, 65, 73, 'Stretch Burst', 'Closer', 'Slow Start', 8.0, 12.0, 'Great', 'Okay', 'Both', 'Normal', 'Normal', 'No', 'Yes', '', '/stall/3', 'http://leahmhb.info/stall_img/Sovenance.png', '2016-03-14 01:48:17', '2016-03-14 01:48:17'),
(4, 'Haubing', 'Artemis', 'Artemis', 'Trickery', 'Beneath Still Waters', 'Stallion', 'Bay', 'EeAA', 'Open Level', 'Closer', 67, 70, 70, 60, 60, 61, 62, 60, 58, 58, 'Stretch Burst', 'Instant Response', 'Stubborn', 7.0, 10.0, 'Good', 'Good', 'Both', 'Normal', 'Normal', 'No', 'Yes', '', '/stall/4', 'http://leahmhb.info/stall_img/Trickery.png', '2016-03-14 01:48:17', '2016-03-14 01:48:17'),
(19, 'Haubing', 'Neco', 'Neco', 'Antebellum', 'Southern Belle', 'Mare', '', '', 'GIII', 'Stalker', 77, 71, 71, 65, 67, 65, 67, 70, 68, 74, 'Stretch Burst', 'Persistency', 'Inflexible', 8.0, 12.0, 'Good', 'Good', 'Both', 'Normal', 'Normal', 'Yes', 'Yes', '', '/stall/19', 'http://leahmhb.info/stall_img/Antebellum.png', '2016-03-09 08:23:42', '2016-03-14 19:40:23'),
(14, 'Neco', '', '', 'Reverence', 'Think Of Me Fondly', 'Mare', '', '', 'Open Level', '', 50, 50, 50, 50, 50, 50, 50, 50, 50, 50, '', '', '', 0.0, 0.0, '', '', 'None', 'Normal', 'Normal', 'No', 'No', '', 'Http://seeingstars.boards.net/thread/2395', '', '2016-03-06 04:11:22', '2016-03-06 04:11:22'),
(13, 'Artemis', '', '', 'Ziio', 'Kaniehtí:io', 'Mare', '', '', '', '', 50, 50, 50, 50, 50, 50, 50, 50, 50, 50, '', '', '', 0.0, 0.0, '', '', 'None', 'Normal', 'Normal', 'No', 'No', '', 'Http://seeingstars.boards.net/thread/2009', '', '2016-03-05 14:42:33', '2016-03-05 14:42:33'),
(20, 'Haubing', 'Haubing', 'Haubing', 'Manu', 'Pouring Smoke and Rain', 'Stallion', 'Chestnut', '', 'GII', 'Front Runner', 81, 69, 82, 68, 69, 64, 69, 64, 64, 64, 'Front Runner', 'Second Wind', 'Hates Pack', 6.0, 10.0, 'Good', 'Good', 'Both', 'High', 'Leg Lift', 'Yes', 'Yes', '', '/stall/20', 'http://leahmhb.info/stall_img/Manu.png', '2016-03-14 04:54:11', '2016-03-14 04:54:11'),
(21, 'Haubing', 'Haubing', 'Haubing', 'Savarni', 'Without the Sun', 'Stallion', 'Gray', '', 'GIII', 'Stalker', 75, 62, 72, 64, 67, 62, 66, 60, 67, 65, 'Stretch Burst', 'Second Wind', 'Hates Pack', 5.0, 9.0, 'Good', 'Good', 'Both', 'Normal', 'Normal', 'Yes', 'Yes', '', '/stall/21', 'http://leahmhb.info/stall_img/Savarni.png', '2016-03-14 04:56:20', '2016-03-14 04:56:20'),
(22, 'Haubing', 'Gor', 'Gor', 'River Street', 'Better Bank On It', 'Stallion', 'Bay', '', 'GIII', 'Stalker', 71, 72, 69, 61, 64, 66, 64, 63, 63, 67, 'Likes Pack', 'Stretch Burst', 'Stubborn', 8.0, 12.0, 'Good', 'Good', 'Both', 'Normal', 'Normal', 'Yes', 'Yes', '', '/stall/22', 'http://leahmhb.info/stall_img/River Street.png', '2016-03-14 04:58:41', '2016-03-14 04:58:41'),
(23, 'Haubing', 'Gor', 'Gor', 'Longevity', 'Love the Quiet Life', 'Stallion', '', '', 'Open Level', 'Follower', 70, 59, 60, 59, 60, 58, 59, 59, 58, 58, 'Instant Response', 'Whip', 'Slow Start', 10.0, 14.0, 'Great', 'Okay', 'Both', 'High', 'Leg Lift', 'Yes', 'Yes', '', '/stall/23', 'http://leahmhb.info/stall_img/Longevity.png', '2016-03-14 05:02:44', '2016-03-14 05:02:44'),
(24, 'Haubing', '', 'Daveena', 'Leise', 'Always the Quiet Ones', 'Mare', '', '', 'GIII', 'Closer', 69, 66, 67, 63, 65, 61, 62, 60, 62, 63, 'Spurt', 'Persistency', 'Bears', 12.0, 16.0, 'Good', 'Good', 'Both', 'Normal', 'Normal', 'Yes', 'Yes', '', '/stall/24', 'http://leahmhb.info/stall_img/Leise.png', '2016-03-14 05:05:24', '2016-03-14 05:22:22'),
(25, 'Haubing', '', 'Neco', 'Zippa', 'Buzzin'' By', 'Mare', 'Bay', '', 'GIII', 'Follower', 73, 68, 69, 59, 65, 58, 61, 57, 60, 63, 'Instant Response', 'Grit', 'Bears', 8.0, 10.0, 'Good', 'Good', 'Both', 'Normal', 'Normal', 'No', 'No', '', '/stall/25', 'http://leahmhb.info/stall_img/Zippa.png', '2016-03-14 05:09:21', '2016-03-14 05:09:21'),
(26, 'Haubing', '', 'Mak', 'Capricious', 'Flirt', 'Mare', 'Gray', '', 'GI', 'Stalker', 87, 73, 80, 70, 80, 71, 71, 72, 72, 72, 'Stretch Burst', 'Whip', 'Delicate', 5.0, 8.0, 'Good', 'Good', 'Front', 'Normal', 'Normal', 'Yes', 'Yes', '', '/stall/26', 'http://leahmhb.info/stall_img/Capricious.png', '2016-03-14 05:11:05', '2016-03-14 05:11:05'),
(27, 'Haubing', '', 'Gor', 'Winnie', 'Watch Me', 'Mare', '', '', 'GIII', 'Stalker', 67, 65, 64, 64, 67, 62, 64, 62, 61, 66, 'Free', 'Grit', 'Stubborn', 7.0, 11.0, 'Good', 'Good', 'Front', 'Normal', 'Leg Lift', 'No', 'Yes', '', '/stall/27', 'http://leahmhb.info/stall_img/Winnie.png', '2016-03-14 05:12:54', '2016-03-14 05:12:54'),
(28, 'Haubing', 'Katann', 'Katann', 'Pollyanna', 'Paint a Smile', 'Mare', 'Gray', '', 'Open Level', 'Follower', 60, 59, 57, 56, 59, 55, 61, 59, 61, 63, 'Whip', 'Instant Response', 'Bears', 9.0, 14.0, 'Good', 'Good', 'Both', 'Normal', 'Normal', 'Yes', 'Yes', '', '/stall/28', 'http://leahmhb.info/stall_img/Pollyanna.png', '2016-03-14 05:14:55', '2016-03-14 05:14:55'),
(29, 'Haubing', '', 'Haubing', 'Nouvar', 'Bring on the Rain', 'Mare', 'Gray', '', 'GIII', 'Follower', 73, 71, 72, 60, 70, 62, 63, 59, 63, 65, 'Likes Pack', 'Tough', 'Inflexible', 8.0, 12.0, 'Okay', 'Great', 'Both', 'Normal', 'Normal', 'Yes', 'Yes', '', '/stall/29', 'http://leahmhb.info/stall_img/Nouvar.png', '2016-03-14 05:16:17', '2016-03-14 05:16:17'),
(30, 'Haubing', '', 'Haubing', 'Illegal', 'That Can''t Be Legal', 'Mare', 'Black', '', 'Open Level', 'Closer', 69, 63, 70, 58, 59, 61, 59, 58, 62, 60, 'From Outside', 'Whip', 'Bears', 11.0, 14.0, 'Okay', 'Great', 'Both', 'Normal', 'Normal', 'No', 'No', '', '/stall/30', 'http://leahmhb.info/stall_img/Illegal.png', '2016-03-14 05:18:07', '2016-03-14 05:18:07'),
(31, 'Neco', '', '', 'Ruffian', '', 'Mare', '', '', '', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '', '', 0.0, 0.0, '', '', '', '', '', '', '', '', 'http://seeingstars.boards.net/thread/448', '#', '2016-03-18 05:48:25', '2016-03-18 05:48:25');

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
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `horses_progeny`
--

INSERT INTO `horses_progeny` (`id`, `horse_id`, `sire_id`, `dam_id`, `created_at`, `updated_at`) VALUES
(1, 21, 20, 29, '2016-03-14 01:51:16', '2016-03-14 01:51:16'),
(2, 14, 1, 3, '2016-03-18 05:36:05', '2016-03-18 05:36:05'),
(3, 4, 1, 13, '2016-03-18 05:36:28', '2016-03-18 05:36:28');

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
) ENGINE=MyISAM AUTO_INCREMENT=15 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `person`
--

INSERT INTO `person` (`id`, `username`, `stable_name`, `stable_prefix`, `racing_colors`, `created_at`, `updated_at`) VALUES
(1, 'Haubing', 'Shashka Stables', 'Haubing', 'Green and White', '2016-03-14 01:48:17', '2016-03-16 03:43:32'),
(2, 'Neco', 'Hard Tack', 'Hard Tack', '', '2016-03-14 01:48:17', '2016-03-14 01:48:17'),
(3, 'Katann', 'RKO Haven', 'RKO', '', '2016-03-14 01:48:17', '2016-03-14 01:48:17'),
(4, 'Artemis', 'Three Peaks Manor', 'Three Peaks', '', '2016-03-14 01:48:17', '2016-03-14 01:48:17'),
(5, 'Gor', 'BlueJay Racing', 'BlueJay', NULL, '2016-03-06 02:01:32', '2016-03-06 02:01:32'),
(6, 'Mak', 'Falling in Like', 'Falling', NULL, '2016-03-06 02:05:45', '2016-03-06 02:05:45'),
(13, 'Daveena', 'Moonmist', 'Daveena', NULL, '2016-03-14 05:22:09', '2016-03-14 05:22:09'),
(14, 'ExampleUser', 'ExampleStable', 'ExamplePrefix', 'ExampleColors', '2016-03-18 03:36:21', '2016-03-18 03:36:21');

-- --------------------------------------------------------

--
-- Table structure for table `races`
--

CREATE TABLE IF NOT EXISTS `races` (
  `id` int(10) unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `surface` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `grade` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `distance` double(8,1) NOT NULL,
  `ran_dt` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `url` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM AUTO_INCREMENT=17 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `races`
--

INSERT INTO `races` (`id`, `name`, `surface`, `grade`, `distance`, `ran_dt`, `url`, `created_at`, `updated_at`) VALUES
(1, 'Sordid Affair Stakes', 'Dirt', 'GII', 7.0, '0000-00-00 00:00:00', 'http://seeingstars.boards.net/thread/5528/', '2016-03-15 05:20:46', '2016-03-15 05:20:46'),
(2, 'Dubai Millenium Stakes', 'Dirt', 'GIII', 10.0, '2016-03-14 00:00:00', 'http://seeingstars.boards.net/thread/5596', '2016-03-15 05:21:25', '2016-03-16 18:59:10'),
(3, 'Down and Out Stakes', 'Turf', 'Open Level', 12.0, '2015-09-02 00:00:00', 'http://seeingstars.boards.net/thread/3120', '2016-03-15 05:22:16', '2016-03-15 05:22:16'),
(4, 'Zabeel Mile', 'Turf', 'GIII', 8.0, '2016-03-17 00:00:00', 'http://seeingstars.boards.net/thread/5594', '2016-03-18 03:30:10', '2016-03-18 03:30:10'),
(5, 'Al Shindagha Sprint', 'Dirt', 'GIII', 6.0, '2016-03-17 00:00:00', 'http://seeingstars.boards.net/thread/5593', '2016-03-18 03:31:02', '2016-03-18 03:31:02'),
(6, '(DWC Series) Firebreak Stakes', 'Dirt', 'GIII', 8.0, '2016-03-17 00:00:00', 'http://seeingstars.boards.net/thread/5595', '2016-03-18 03:32:34', '2016-03-18 03:32:34'),
(7, 'Running Roses Stakes', 'Dirt', 'GIII', 8.0, '2016-03-17 00:00:00', 'http://seeingstars.boards.net/thread/5616', '2016-03-18 03:32:54', '2016-03-18 03:32:55'),
(8, 'Guns Blazing Stakes', 'Dirt', 'GIII', 7.0, '2016-03-17 00:00:00', 'http://seeingstars.boards.net/thread/5601', '2016-03-18 03:33:13', '2016-03-18 03:33:13'),
(9, 'Celtic Bride Stakes', 'Turf', 'All', 12.0, '2015-05-25 00:00:00', 'http://seeingstars.boards.net/thread/1762', '2016-03-18 05:04:49', '2016-03-18 05:13:30'),
(10, 'Summer Front Stakes', 'Dirt', 'Open Level', 11.5, '2015-05-24 00:00:00', 'http://seeingstars.boards.net/thread/1713', '2016-03-18 05:12:40', '2016-03-18 05:12:40'),
(11, '[World Tour: Canada] WOODBINE RACETRACK', 'Dirt', 'Open Level', 8.0, '2015-05-26 00:00:00', 'http://seeingstars.boards.net/thread/1793', '2016-03-18 05:17:12', '2016-03-18 05:17:12'),
(12, '[WT Canada] Breeders'' Stakes', 'Turf', 'Open Level', 12.0, '2015-05-30 00:00:00', 'http://seeingstars.boards.net/thread/1806', '2016-03-18 05:17:56', '2016-03-18 05:17:56'),
(13, 'Wirlwind Tour Handicap', 'Dirt', 'GIII', 9.0, '2015-06-27 00:00:00', 'http://seeingstars.boards.net/thread/2288', '2016-03-18 05:21:23', '2016-03-18 05:21:23'),
(14, 'Stars and Stripes Handicap', 'Turf', 'GIII', 8.0, '2015-07-08 00:00:00', 'http://seeingstars.boards.net/thread/2428', '2016-03-18 05:22:17', '2016-03-18 05:22:17'),
(15, 'Old Friends Stakes', 'Turf', 'GIII', 8.0, '2015-09-15 00:00:00', 'http://seeingstars.boards.net/thread/3140', '2016-03-18 05:30:27', '2016-03-18 05:30:27'),
(16, 'Breeder''s Cup Dirt Mile', 'Dirt', 'All', 8.0, '2015-11-01 00:00:00', 'http://seeingstars.boards.net/thread/4130', '2016-03-18 05:31:50', '2016-03-18 05:31:50');

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
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `race_entrants`
--

INSERT INTO `race_entrants` (`id`, `horse_id`, `race_id`, `placing`, `created_at`, `updated_at`) VALUES
(1, 30, 3, 2, '2016-03-15 05:35:23', '2016-03-15 05:35:23'),
(2, 1, 9, 1, '2016-03-18 05:10:10', '2016-03-18 05:10:10'),
(3, 1, 10, 1, '2016-03-18 05:12:40', '2016-03-18 05:12:40'),
(4, 1, 11, 1, '2016-03-18 05:17:12', '2016-03-18 05:17:12'),
(5, 1, 12, 1, '2016-03-18 05:17:56', '2016-03-18 05:17:56'),
(6, 1, 13, 1, '2016-03-18 05:21:23', '2016-03-18 05:21:23'),
(7, 1, 14, 1, '2016-03-18 05:22:17', '2016-03-18 05:22:17'),
(8, 1, 15, 1, '2016-03-18 05:30:27', '2016-03-18 05:30:27'),
(9, 1, 16, 1, '2016-03-18 05:31:50', '2016-03-18 05:31:50');

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
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `horses`
--
ALTER TABLE `horses`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=32;
--
-- AUTO_INCREMENT for table `horses_progeny`
--
ALTER TABLE `horses_progeny`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `leg_types`
--
ALTER TABLE `leg_types`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `person`
--
ALTER TABLE `person`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `races`
--
ALTER TABLE `races`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `race_entrants`
--
ALTER TABLE `race_entrants`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `sexes`
--
ALTER TABLE `sexes`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
