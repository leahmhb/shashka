-- phpMyAdmin SQL Dump
-- version 4.4.13.1deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Feb 28, 2016 at 07:20 PM
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
(37, 'Bears', 'negative', 'Bears right and left when stamina runs out', '2016-02-29 03:57:27', '2016-02-29 03:57:27'),
(1, 'Best Course', 'positive', 'Does better if it runs a course it likes', '2016-02-29 03:57:27', '2016-02-29 03:57:27'),
(2, 'Close Race Not OK ', 'negative', 'Performs poorly in close races', '2016-02-29 03:57:27', '2016-02-29 03:57:27'),
(3, 'Close race OK', 'positive', 'Excels in close races', '2016-02-29 03:57:27', '2016-02-29 03:57:27'),
(4, 'Closer', 'positive', 'races well when overtaking horses around the final corner', '2016-02-29 03:57:27', '2016-02-29 03:57:27'),
(5, 'Delicate', 'negative', 'Easily upset by bumping', '2016-02-29 03:57:27', '2016-02-29 03:57:27'),
(6, 'Dust Not OK', 'negative', 'Does not do well with dust', '2016-02-29 03:57:27', '2016-02-29 03:57:27'),
(7, 'Fast Pace Not OK', 'negative', 'races worse the faster the pace', '2016-02-29 03:57:27', '2016-02-29 03:57:27'),
(8, 'Fast Pace OK', 'positive', 'races better in faster paced races', '2016-02-29 03:57:27', '2016-02-29 03:57:27'),
(9, 'Free', 'positive', 'races well even when out of position', '2016-02-29 03:57:27', '2016-02-29 03:57:27'),
(10, 'From Outside', 'positive', 'Gives an impressive burst on the outside after staying towards the back during the race', '2016-02-29 03:57:27', '2016-02-29 03:57:27'),
(11, 'Front Runner', 'positive', ' races well when leading the pack by a large margin. Only for front running horses', '2016-02-29 03:57:27', '2016-02-29 03:57:27'),
(12, 'Grit', 'positive', 'Excels going head-to-head with another horse to the finish line', '2016-02-29 03:57:27', '2016-02-29 03:57:27'),
(13, 'Hates Pack', 'negative', 'Upset when caught in a crowd', '2016-02-29 03:57:27', '2016-02-29 03:57:27'),
(14, 'Inflexible', 'negative', 'Cannot race out of position', '2016-02-29 03:57:27', '2016-02-29 03:57:27'),
(15, 'Instant Response', 'positive', 'Reacts quickly to the jockey', '2016-02-29 03:57:27', '2016-02-29 03:57:27'),
(16, 'Last Corner Leader', 'positive', 'Performs well after taking lead around the last corner', '2016-02-29 03:57:27', '2016-02-29 03:57:27'),
(17, 'Last to First', 'positive', 'Explodes in the stretch when trailing through the race', '2016-02-29 03:57:27', '2016-02-29 03:57:27'),
(18, 'Likes Pack', 'positive', 'Comfortable running in a pack', '2016-02-29 03:57:27', '2016-02-29 03:57:27'),
(19, 'Loses Will', 'negative', 'Easily distracted after taking lead around the last corner', '2016-02-29 03:57:27', '2016-02-29 03:57:27'),
(20, 'Pace Down', 'positive', 'Pace slower is okay', '2016-02-29 03:57:27', '2016-02-29 03:57:27'),
(21, 'Pace Split', 'positive', 'Okay if pack splits', '2016-02-29 03:57:27', '2016-02-29 03:57:27'),
(22, 'Persistency', 'positive', 'Keeps going', '2016-02-29 03:57:27', '2016-02-29 03:57:27'),
(23, 'Rough Track Not OK', 'negative', 'races poorly in rough track conditions', '2016-02-29 03:57:27', '2016-02-29 03:57:27'),
(24, 'Rough Track OK', 'positive', 'Performs well even in rough track conditions', '2016-02-29 03:57:27', '2016-02-29 03:57:27'),
(25, 'Second Wind', 'positive', 'When leading the pack all race long, further separates from the pack in the final stretch', '2016-02-29 03:57:27', '2016-02-29 03:57:27'),
(26, 'Slow OK', 'positive', 'races better in slower races', '2016-02-29 03:57:27', '2016-02-29 03:57:27'),
(27, 'Slow Pace Not OK', 'negative', 'races poorly in slower races', '2016-02-29 03:57:27', '2016-02-29 03:57:27'),
(28, 'Slow Start', 'negative', 'Slow at the beginning of the race', '2016-02-29 03:57:27', '2016-02-29 03:57:27'),
(29, 'Solo Runner', 'positive', 'Performs well when more than two lengths in the lead', '2016-02-29 03:57:27', '2016-02-29 03:57:27'),
(30, 'Spurt', 'positive', 'Excels when spurting from the back of the pack to ', '2016-02-29 03:57:27', '2016-02-29 03:57:27'),
(31, 'Start Dash', 'positive', 'Starts well at the beginning of the race', '2016-02-29 03:57:27', '2016-02-29 03:57:27'),
(32, 'Stretch Burst', 'positive', 'Shows a tremendous burst of speed to the finish line', '2016-02-29 03:57:27', '2016-02-29 03:57:27'),
(33, 'Strong Heart', 'positive', 'Whip gauge falls slower than other horses in the stretch if the horse still has stamina', '2016-02-29 03:57:27', '2016-02-29 03:57:27'),
(34, 'Stubborn', 'negative', 'Sprints uncontrollably when spooked', '2016-02-29 03:57:27', '2016-02-29 03:57:27'),
(35, 'Tough', 'positive', 'Unfazed by bumping', '2016-02-29 03:57:27', '2016-02-29 03:57:27'),
(36, 'Whip', 'positive', 'Accelerates faster than usual when whipped at the start of the race', '2016-02-29 03:57:27', '2016-02-29 03:57:27');

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
(1, 'Open Level', 'Three highest stats are below 65', '2016-02-29 03:57:27', '2016-02-29 03:57:27'),
(2, 'GIII', '65 in any three or more stats', '2016-02-29 03:57:27', '2016-02-29 03:57:27'),
(3, 'GII', '75 in any two or more stats', '2016-02-29 03:57:27', '2016-02-29 03:57:27'),
(4, 'GI', '85 in any one or more stats', '2016-02-29 03:57:27', '2016-02-29 03:57:27');

-- --------------------------------------------------------

--
-- Table structure for table `horses`
--

CREATE TABLE IF NOT EXISTS `horses` (
  `id` int(10) unsigned NOT NULL,
  `call_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `registered_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `sex` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `color` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `phenotype` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `grade` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'Open Level',
  `leg_type` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `owner` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `breeder` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `hexer` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
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
  `distance_min` int(11) NOT NULL,
  `distance_max` int(11) NOT NULL,
  `surface_dirt` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `surface_turf` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `bandages` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'None',
  `neck_height` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'Normal',
  `run_style` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'Normal',
  `hood` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'No',
  `shadow_roll` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'No',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `horses`
--

INSERT INTO `horses` (`id`, `call_name`, `registered_name`, `sex`, `color`, `phenotype`, `grade`, `leg_type`, `owner`, `breeder`, `hexer`, `speed`, `staying`, `stamina`, `breaking`, `power`, `feel`, `fierce`, `tenacity`, `courage`, `response`, `distance_min`, `distance_max`, `surface_dirt`, `surface_turf`, `bandages`, `neck_height`, `run_style`, `hood`, `shadow_roll`, `created_at`, `updated_at`) VALUES
(1, 'Riparian', 'Lessons Learned', 'Stallion', 'Black', 'EE', 'GI', 'Front Runner', 'Haubing', 'Neco', 'Neco', 87, 76, 85, 72, 77, 71, 71, 71, 75, 77, 8, 12, 'Good', 'Good', 'Both', 'Normal', 'Normal', 'Yes', 'Yes', '2016-02-29 03:57:27', '2016-02-29 03:57:27'),
(2, 'American Pharoah', 'Divine Right', 'Stallion', 'Bay', 'EeAa', 'GIII', 'Front Runner', 'Haubing', '', 'Katann', 87, 69, 69, 68, 69, 69, 67, 68, 67, 68, 8, 12, 'Great', 'Okay', 'Both', 'Normal', 'Normal', 'No', 'Yes', '2016-02-29 03:57:27', '2016-02-29 03:57:27'),
(3, 'Sovenance', 'A Kinder Reminiscence', 'Mare', 'Bay', 'EeAA', 'GII', 'Closer', 'Haubing', 'Neco', 'Neco', 76, 71, 80, 70, 72, 67, 73, 63, 65, 73, 8, 12, 'Great', 'Okay', 'Both', 'Normal', 'Normal', 'No', 'Yes', '2016-02-29 03:57:27', '2016-02-29 03:57:27'),
(4, 'Trickery', 'Beneath Still Waters', 'Stallion', 'Bay', 'EeAA', 'Open Level', 'Closer', 'Haubing', 'Artemis', 'Artemis', 67, 70, 70, 60, 60, 61, 62, 60, 58, 58, 7, 10, 'Good', 'Good', 'Both', 'Normal', 'Normal', 'No', 'Yes', '2016-02-29 03:57:27', '2016-02-29 03:57:27');

-- --------------------------------------------------------

--
-- Table structure for table `horses_abilities`
--

CREATE TABLE IF NOT EXISTS `horses_abilities` (
  `id` int(10) unsigned NOT NULL,
  `horse_id` int(10) unsigned NOT NULL,
  `pos_ability_1` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `pos_ability_2` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `neg_ability_1` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `horses_abilities`
--

INSERT INTO `horses_abilities` (`id`, `horse_id`, `pos_ability_1`, `pos_ability_2`, `neg_ability_1`, `created_at`, `updated_at`) VALUES
(1, 1, 'Front Runner', 'Second Wind', 'Stubborn', '2016-02-29 03:57:27', '2016-02-29 03:57:27'),
(2, 2, 'Last Corner Leader', 'Second Wind', 'Dust Not OK', '2016-02-29 03:57:27', '2016-02-29 03:57:27'),
(3, 3, 'Stretch Burst', 'Closer', 'Slow Start', '2016-02-29 03:57:27', '2016-02-29 03:57:27'),
(4, 4, 'Stretch Burst', 'Instant Response', 'Stubborn', '2016-02-29 03:57:27', '2016-02-29 03:57:27');

-- --------------------------------------------------------

--
-- Table structure for table `horses_progeny`
--

CREATE TABLE IF NOT EXISTS `horses_progeny` (
  `id` int(10) unsigned NOT NULL,
  `horse_id` int(10) unsigned NOT NULL,
  `horse_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'Offspring',
  `horse_link` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT '#',
  `sire_id` int(10) unsigned NOT NULL,
  `sire_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'Foundation',
  `sire_link` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT '#',
  `dam_id` int(10) unsigned NOT NULL,
  `dam_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'Foundation',
  `dam_link` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT '#',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `horses_progeny`
--

INSERT INTO `horses_progeny` (`id`, `horse_id`, `horse_name`, `horse_link`, `sire_id`, `sire_name`, `sire_link`, `dam_id`, `dam_name`, `dam_link`, `created_at`, `updated_at`) VALUES
(1, 1, '', '', 0, 'Seattle Slew', 'http://seeingstars.boards.net/thread/444/', 0, 'Ruffian', 'http://seeingstars.boards.net/thread/448/', '2016-02-29 03:57:27', '2016-02-29 03:57:27'),
(2, 0, 'Reverence', 'http://seeingstars.boards.net/thread/2395/', 1, '', '', 3, '', '', '2016-02-29 03:57:27', '2016-02-29 03:57:27'),
(3, 3, '', '', 0, 'Seabiscuit', 'http://seeingstars.boards.net/thread/445/', 0, 'Zenyatta', 'http://seeingstars.boards.net/thread/425/', '2016-02-29 03:57:27', '2016-02-29 03:57:27'),
(4, 4, '', '', 1, '', '', 0, 'Zio', 'http://seeingstars.boards.net/thread/2009/', '2016-02-29 03:57:27', '2016-02-29 03:57:27');

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
(1, 'Closer', 'This type of horse often drops to the back of the field and trails the field throughout the race, until it lets loose an explosive turn of foot. These horses will often look to be hopelessly beaten, then suddenly turn it on in the middle or deep stretch and charge down the track hellbent for the finish line. They can often overwhelm horses that ran near the pace and repel challenges from other closers.', '2016-02-29 03:57:27', '2016-02-29 03:57:27'),
(2, 'Follower', 'This type of horse is often found in the middle of the pack, happily running along and bumping into its fellows without a care in the world. They’re content to run five or more lengths off the leaders and make their moves near the middle of the stretch and can sometimes simply overwhelm a tiring leader or kick back a challenging closer. They are similar to closers, but run closer to the stalkers and leaders.', '2016-02-29 03:57:27', '2016-02-29 03:57:27'),
(3, 'Front Runner', 'This type of horse loves the lead and loves to run uncontested at the front of the pack. Often these horses hate the idea of other horses bumping or pushing them in the middle of the pack and will run away at the start to lead the rest of the field on a merry chase. These horses may or may not be able to hold off closers – more often they can fold under pressure. ', '2016-02-29 03:57:27', '2016-02-29 03:57:27'),
(4, 'Stalker', 'This type of horse is usually only a few lengths off the pace and tracking the leaders through each turn. These horses will bide their time then throw in a big move near the top or middle of a stretch, wearing down the leader to take over the top spot and hold on for the wire. Much like front runners, they may or may not be able to fend off the challengers of deep closers. ', '2016-02-29 03:57:27', '2016-02-29 03:57:27');

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
  `stable_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `stable_prefix` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `person`
--

INSERT INTO `person` (`id`, `username`, `stable_name`, `stable_prefix`, `created_at`, `updated_at`) VALUES
(1, 'Haubing', 'Shashka Stables', 'Haubing', '2016-02-29 03:57:27', '2016-02-29 03:57:27'),
(2, 'Neco', 'Hard Tack', 'Hard Tack', '2016-02-29 03:57:27', '2016-02-29 03:57:27'),
(3, 'Katann', 'RKO Haven', 'RKO', '2016-02-29 03:57:27', '2016-02-29 03:57:27'),
(4, 'Artemis', 'Three Peaks Manor', 'Three Peaks', '2016-02-29 03:57:27', '2016-02-29 03:57:27');

-- --------------------------------------------------------

--
-- Table structure for table `races`
--

CREATE TABLE IF NOT EXISTS `races` (
  `id` int(10) unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `surface` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `grade` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `distance` int(11) NOT NULL,
  `ran_dt` date NOT NULL,
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
(1, 'Gelding', 'Altered male horse', '2016-02-29 03:57:27', '2016-02-29 03:57:27'),
(2, 'Mare', 'Unaltered female horse', '2016-02-29 03:57:27', '2016-02-29 03:57:27'),
(3, 'Stallion', 'Unaltered male horse', '2016-02-29 03:57:27', '2016-02-29 03:57:27');

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
  ADD KEY `horses_sex_foreign` (`sex`),
  ADD KEY `horses_grade_foreign` (`grade`),
  ADD KEY `horses_leg_type_foreign` (`leg_type`),
  ADD KEY `horses_owner_foreign` (`owner`),
  ADD KEY `horses_breeder_foreign` (`breeder`),
  ADD KEY `horses_hexer_foreign` (`hexer`);

--
-- Indexes for table `horses_abilities`
--
ALTER TABLE `horses_abilities`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `horses_abilities_horse_id_unique` (`horse_id`),
  ADD KEY `horses_abilities_horse_id_index` (`horse_id`),
  ADD KEY `horses_abilities_pos_ability_1_foreign` (`pos_ability_1`),
  ADD KEY `horses_abilities_pos_ability_2_foreign` (`pos_ability_2`),
  ADD KEY `horses_abilities_neg_ability_1_foreign` (`neg_ability_1`);

--
-- Indexes for table `horses_progeny`
--
ALTER TABLE `horses_progeny`
  ADD PRIMARY KEY (`id`),
  ADD KEY `horses_progeny_horse_id_index` (`horse_id`);

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
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `horses_abilities`
--
ALTER TABLE `horses_abilities`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `horses_progeny`
--
ALTER TABLE `horses_progeny`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `leg_types`
--
ALTER TABLE `leg_types`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `person`
--
ALTER TABLE `person`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
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
