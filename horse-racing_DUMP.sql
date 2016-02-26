-- phpMyAdmin SQL Dump
-- version 4.4.13.1deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Feb 25, 2016 at 11:17 PM
-- Server version: 5.6.28-0ubuntu0.15.10.1
-- PHP Version: 5.6.11-1ubuntu3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `horse-racing`
--

-- --------------------------------------------------------

--
-- Table structure for table `Abilities`
--

CREATE TABLE IF NOT EXISTS `Abilities` (
  `ability_name` varchar(30) NOT NULL,
  `type` varchar(8) NOT NULL,
  `ability_description` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Abilities`
--

INSERT INTO `Abilities` (`ability_name`, `type`, `ability_description`) VALUES
('Bears', 'negative', 'Bears right and left when stamina runs out.'),
('Best Course', 'positive', 'Does better if it runs a course it likes.'),
('Close Race Not ', 'negative', 'Performs poorly in close races.'),
('Close Race OK', 'positive', 'Excels in close races.'),
('Closer', 'positive', 'Races well when overtaking horses around the final corner.'),
('Delicate', 'negative', 'Easily upset by bumping.'),
('Dust Not OK', 'negative', 'Does not do well with dust.'),
('Fast Pace Not OK', 'negative', 'Races worse the faster the pace.'),
('Fast Pace OK', 'positive', 'Races better in faster paced races.'),
('Free', 'positive', 'Races well even when out of position.'),
('From Outside', 'positive', 'Gives an impressive burst on the outside after staying towards the back during the race.'),
('Front Runner', 'positive', ' Races well when leading the pack by a large margin. Only for front running horses.'),
('Grit', 'positive', 'Excels going head-to-head with another horse to the finish line.'),
('Hates Pack', 'negative', 'Upset when caught in a crowd.'),
('Inflexible', 'negative', 'Cannot race out of position.'),
('Instant Response', 'positive', 'Reacts quickly to the jockey.'),
('Last Corner Leader', 'positive', 'Performs well after taking lead around the last corner.'),
('Last to First', 'positive', 'Explodes in the stretch when trailing through the race.'),
('Likes Pack', 'positive', 'Comfortable running in a pack.'),
('Loses Will', 'negative', 'Easily distracted after taking lead around the last corner.'),
('Pace Down', 'positive', 'Pace slower is okay.'),
('Pace Split', 'positive', 'Okay if pack splits.'),
('Persistency', 'positive', 'Keeps going.'),
('Rough Track Not OK', 'negative', 'Races poorly in rough track conditions.'),
('Rough Track OK', 'positive', 'Performs well even in rough track conditions.'),
('Second Wind', 'positive', 'When leading the pack all race long, further separates from the pack in the final stretch.'),
('Slow OK', 'positive', 'Races better in slower races.'),
('Slow Pace Not OK', 'negative', 'Races poorly in slower races.'),
('Slow Start', 'negative', 'Slow at the beginning of the race.'),
('Solo Runner', 'positive', 'Performs well when more than two lengths in the lead.'),
('Spurt', 'positive', 'Excels when spurting from the back of the pack to '),
('Start Dash', 'positive', 'Starts well at the beginning of the race.'),
('Stretch Burst', 'positive', 'Shows a tremendous burst of speed to the finish line.'),
('Strong Heart', 'positive', 'Whip gauge falls slower than other horses in the stretch if the horse still has stamina.'),
('Stubborn', 'negative', 'Sprints uncontrollably when spooked.'),
('Tough', 'positive', 'Unfazed by bumping.'),
('Whip', 'positive', 'Accelerates faster than usual when whipped at the start of the race.');

-- --------------------------------------------------------

--
-- Stand-in structure for view `Abilities_Negative`
--
CREATE TABLE IF NOT EXISTS `Abilities_Negative` (
`ability_name` varchar(30)
,`type` varchar(8)
,`ability_description` varchar(100)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `Abilities_Positive`
--
CREATE TABLE IF NOT EXISTS `Abilities_Positive` (
`ability_name` varchar(30)
,`type` varchar(8)
,`ability_description` varchar(100)
);

-- --------------------------------------------------------

--
-- Table structure for table `Horses`
--

CREATE TABLE IF NOT EXISTS `Horses` (
  `horse_id` int(3) NOT NULL,
  `call_name` varchar(25) NOT NULL,
  `registered_name` varchar(30) NOT NULL,
  `sex` varchar(15) NOT NULL,
  `color` varchar(15) DEFAULT NULL,
  `phenotype` varchar(10) DEFAULT NULL,
  `grade` varchar(10) NOT NULL,
  `leg_type` varchar(20) NOT NULL,
  `owner` varchar(50) NOT NULL,
  `breeder` varchar(50) DEFAULT 'Foundation',
  `hexer` varchar(50) NOT NULL,
  `speed` int(3) DEFAULT '50',
  `staying` int(3) DEFAULT '50',
  `stamina` int(3) DEFAULT '50',
  `breaking` int(3) DEFAULT '50',
  `power` int(3) DEFAULT '50',
  `feel` int(3) DEFAULT '50',
  `fierce` int(3) DEFAULT '50',
  `tenacity` int(3) DEFAULT '50',
  `courage` int(3) DEFAULT '50',
  `response` int(3) DEFAULT '50',
  `distance_min` int(2) NOT NULL,
  `distance_max` int(2) NOT NULL,
  `surface_dirt` varchar(5) NOT NULL,
  `surface_turf` varchar(5) NOT NULL,
  `bandages` varchar(4) DEFAULT NULL,
  `neck_height` varchar(10) DEFAULT NULL,
  `run_style` varchar(10) DEFAULT NULL,
  `hood` varchar(10) DEFAULT NULL,
  `shadow_roll` varchar(10) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Horses`
--

INSERT INTO `Horses` (`horse_id`, `call_name`, `registered_name`, `sex`, `color`, `phenotype`, `grade`, `leg_type`, `owner`, `breeder`, `hexer`, `speed`, `staying`, `stamina`, `breaking`, `power`, `feel`, `fierce`, `tenacity`, `courage`, `response`, `distance_min`, `distance_max`, `surface_dirt`, `surface_turf`, `bandages`, `neck_height`, `run_style`, `hood`, `shadow_roll`) VALUES
(1, 'Riparian', 'Lessons Learned', 'Stallion', 'Black', 'EE', 'GII', 'Front Runner', 'Haubing', 'Neco', 'Neco', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 8, 12, 'Good', 'Good', 'Both', 'Normal', 'Normal', 'Yes', 'Yes'),
(3, 'American Pharoah', 'Divine Right', 'Stallion', 'Bay', '', 'GIII', 'Front Runner', 'Haubing', NULL, 'Katann', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 8, 12, 'Great', 'Okay', 'Back', 'Normal', 'Normal', 'No', 'Yes'),
(4, 'Seattle Slew', 'Rainy Day Blues', 'Stallion', 'Black', 'EE', 'GI', 'Front Runner', 'Neco', NULL, 'Neco', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 8, 12, 'Good', 'Good', 'No', 'Normal', 'Normal', 'No', 'No'),
(5, 'Ruffian', 'Let Me Run', 'Mare', 'Black', 'EE', 'GI', 'Front Runner', 'Neco', NULL, 'Neco', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 7, 10, 'Great', 'Okay', 'No', 'Normal', 'Normal', 'No', 'No');

-- --------------------------------------------------------

--
-- Table structure for table `Horse_Abilities`
--

CREATE TABLE IF NOT EXISTS `Horse_Abilities` (
  `horse_id` int(3) NOT NULL,
  `pos_ability_1` varchar(30) NOT NULL,
  `pos_ability_2` varchar(30) NOT NULL,
  `neg_ability_1` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Horse_Abilities`
--

INSERT INTO `Horse_Abilities` (`horse_id`, `pos_ability_1`, `pos_ability_2`, `neg_ability_1`) VALUES
(1, 'Front Runner', 'Second Wind', 'Stubborn'),
(5, 'Front Runner', 'Grit', 'Inflexible'),
(3, 'Last Corner Leader', 'Second Wind', 'Dust Not OK'),
(4, 'Stretch Burst', 'Second Wind', 'Bears');

-- --------------------------------------------------------

--
-- Table structure for table `Horse_Progeny`
--

CREATE TABLE IF NOT EXISTS `Horse_Progeny` (
  `horse_id` int(3) NOT NULL,
  `sire_id` int(3) DEFAULT NULL,
  `dam_id` int(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Horse_Progeny`
--

INSERT INTO `Horse_Progeny` (`horse_id`, `sire_id`, `dam_id`) VALUES
(1, 4, 5);

-- --------------------------------------------------------

--
-- Table structure for table `Leg_Types`
--

CREATE TABLE IF NOT EXISTS `Leg_Types` (
  `type_name` varchar(30) NOT NULL,
  `type_description` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Leg_Types`
--

INSERT INTO `Leg_Types` (`type_name`, `type_description`) VALUES
('Closer', 'This type of horse often drops to the back of the field and trails the field throughout the race, until it lets loose an explosive turn of foot. These horses will often look to be hopelessly beaten, then suddenly turn it on in the middle or deep stretch and charge down the track hellbent for the finish line. They can often overwhelm horses that ran near the pace and repel challenges from other closers.\r\n'),
('Follower', 'This type of horse is often found in the middle of the pack, happily running along and bumping into its fellows without a care in the world. They’re content to run five or more lengths off the leaders and make their moves near the middle of the stretch and can sometimes simply overwhelm a tiring leader or kick back a challenging closer. They are similar to closers, but run closer to the stalkers and leaders. '),
('Front Runner', 'This type of horse loves the lead and loves to run uncontested at the front of the pack. Often these horses hate the idea of other horses bumping or pushing them in the middle of the pack and will run away at the start to lead the rest of the field on a merry chase. These horses may or may not be able to hold off closers – more often they can fold under pressure. '),
('Stalker', 'This type of horse is usually only a few lengths off the pace and tracking the leaders through each turn. These horses will bide their time then throw in a big move near the top or middle of a stretch, wearing down the leader to take over the top spot and hold on for the wire. Much like front runners, they may or may not be able to fend off the challengers of deep closers. ');

-- --------------------------------------------------------

--
-- Table structure for table `Person`
--

CREATE TABLE IF NOT EXISTS `Person` (
  `username` varchar(50) NOT NULL,
  `stable_name` varchar(50) DEFAULT NULL,
  `stable_prefix` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Person`
--

INSERT INTO `Person` (`username`, `stable_name`, `stable_prefix`) VALUES
('Haubing', 'Shashka Stables', 'Haubing'),
('katann', 'RKO Haven', 'RKO'),
('Neco', 'Hard Tack', 'Hard Tack');

-- --------------------------------------------------------

--
-- Table structure for table `Race`
--

CREATE TABLE IF NOT EXISTS `Race` (
  `race_id` int(10) NOT NULL,
  `race_name` varchar(50) NOT NULL,
  `surface` varchar(8) NOT NULL,
  `grade` varchar(10) NOT NULL,
  `distance` int(3) NOT NULL,
  `ran_dt` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `Race_Entrants`
--

CREATE TABLE IF NOT EXISTS `Race_Entrants` (
  `race_id` int(10) NOT NULL DEFAULT '0',
  `horse_id` int(3) NOT NULL DEFAULT '0',
  `place` int(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `Sex`
--

CREATE TABLE IF NOT EXISTS `Sex` (
  `name` varchar(10) NOT NULL,
  `description` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Sex`
--

INSERT INTO `Sex` (`name`, `description`) VALUES
('Gelding', 'Altered male horse'),
('Mare', 'Unaltered female horse'),
('Stallion', 'Unaltered male horse');

-- --------------------------------------------------------

--
-- Structure for view `Abilities_Negative`
--
DROP TABLE IF EXISTS `Abilities_Negative`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `Abilities_Negative` AS select `Abilities`.`ability_name` AS `ability_name`,`Abilities`.`type` AS `type`,`Abilities`.`ability_description` AS `ability_description` from `Abilities` where (`Abilities`.`type` = 'negative');

-- --------------------------------------------------------

--
-- Structure for view `Abilities_Positive`
--
DROP TABLE IF EXISTS `Abilities_Positive`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `Abilities_Positive` AS select `Abilities`.`ability_name` AS `ability_name`,`Abilities`.`type` AS `type`,`Abilities`.`ability_description` AS `ability_description` from `Abilities` where (`Abilities`.`type` = 'positive');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Abilities`
--
ALTER TABLE `Abilities`
  ADD PRIMARY KEY (`ability_name`);

--
-- Indexes for table `Horses`
--
ALTER TABLE `Horses`
  ADD PRIMARY KEY (`horse_id`),
  ADD UNIQUE KEY `registered_name` (`registered_name`),
  ADD KEY `sex` (`sex`),
  ADD KEY `leg_type_fk` (`leg_type`),
  ADD KEY `owner` (`owner`),
  ADD KEY `breeder` (`breeder`),
  ADD KEY `hexer` (`hexer`);

--
-- Indexes for table `Horse_Abilities`
--
ALTER TABLE `Horse_Abilities`
  ADD PRIMARY KEY (`horse_id`,`pos_ability_1`,`pos_ability_2`,`neg_ability_1`),
  ADD KEY `pos_ability_1` (`pos_ability_1`),
  ADD KEY `pos_ability_2` (`pos_ability_2`),
  ADD KEY `neg_ability_1` (`neg_ability_1`);

--
-- Indexes for table `Horse_Progeny`
--
ALTER TABLE `Horse_Progeny`
  ADD PRIMARY KEY (`horse_id`),
  ADD KEY `sire_id` (`sire_id`),
  ADD KEY `dam_id` (`dam_id`);

--
-- Indexes for table `Leg_Types`
--
ALTER TABLE `Leg_Types`
  ADD PRIMARY KEY (`type_name`);

--
-- Indexes for table `Person`
--
ALTER TABLE `Person`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `Race`
--
ALTER TABLE `Race`
  ADD PRIMARY KEY (`race_id`);

--
-- Indexes for table `Race_Entrants`
--
ALTER TABLE `Race_Entrants`
  ADD PRIMARY KEY (`race_id`,`horse_id`),
  ADD KEY `horse_id` (`horse_id`);

--
-- Indexes for table `Sex`
--
ALTER TABLE `Sex`
  ADD PRIMARY KEY (`name`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Horses`
--
ALTER TABLE `Horses`
  MODIFY `horse_id` int(3) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `Race`
--
ALTER TABLE `Race`
  MODIFY `race_id` int(10) NOT NULL AUTO_INCREMENT;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `Horses`
--
ALTER TABLE `Horses`
  ADD CONSTRAINT `breeder_fk` FOREIGN KEY (`breeder`) REFERENCES `Person` (`username`),
  ADD CONSTRAINT `hexer_fk` FOREIGN KEY (`hexer`) REFERENCES `Person` (`username`),
  ADD CONSTRAINT `leg_type_fk` FOREIGN KEY (`leg_type`) REFERENCES `Leg_Types` (`type_name`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `owner_fk` FOREIGN KEY (`owner`) REFERENCES `Person` (`username`),
  ADD CONSTRAINT `sex_fk` FOREIGN KEY (`sex`) REFERENCES `Sex` (`name`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `Horse_Abilities`
--
ALTER TABLE `Horse_Abilities`
  ADD CONSTRAINT `Horse_Abilities_ibfk_1` FOREIGN KEY (`horse_id`) REFERENCES `Horses` (`horse_id`) ON DELETE CASCADE,
  ADD CONSTRAINT `Horse_Abilities_ibfk_2` FOREIGN KEY (`pos_ability_1`) REFERENCES `Abilities` (`ability_name`) ON DELETE CASCADE,
  ADD CONSTRAINT `Horse_Abilities_ibfk_3` FOREIGN KEY (`pos_ability_2`) REFERENCES `Abilities` (`ability_name`) ON DELETE CASCADE,
  ADD CONSTRAINT `Horse_Abilities_ibfk_4` FOREIGN KEY (`neg_ability_1`) REFERENCES `Abilities` (`ability_name`) ON DELETE CASCADE;

--
-- Constraints for table `Horse_Progeny`
--
ALTER TABLE `Horse_Progeny`
  ADD CONSTRAINT `Horse_Progeny_ibfk_1` FOREIGN KEY (`horse_id`) REFERENCES `Horses` (`horse_id`) ON DELETE CASCADE,
  ADD CONSTRAINT `Horse_Progeny_ibfk_2` FOREIGN KEY (`sire_id`) REFERENCES `Horses` (`horse_id`) ON DELETE CASCADE,
  ADD CONSTRAINT `Horse_Progeny_ibfk_3` FOREIGN KEY (`dam_id`) REFERENCES `Horses` (`horse_id`) ON DELETE CASCADE;

--
-- Constraints for table `Race_Entrants`
--
ALTER TABLE `Race_Entrants`
  ADD CONSTRAINT `Race_Entrants_ibfk_1` FOREIGN KEY (`race_id`) REFERENCES `Race` (`race_id`) ON DELETE CASCADE,
  ADD CONSTRAINT `Race_Entrants_ibfk_2` FOREIGN KEY (`horse_id`) REFERENCES `Horses` (`horse_id`) ON DELETE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
