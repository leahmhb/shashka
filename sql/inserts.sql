INSERT INTO `abilities` (`id`, `ability`, `type`, `description`) VALUES
(37, 'Bears', 'negative', 'Bears right and left when stamina runs out'),
(1, 'Best Course', 'positive', 'Does better if it runs a course it likes'),
(2, 'Close Race Not OK ', 'negative', 'Performs poorly in close races'),
(3, 'Close race OK', 'positive', 'Excels in close races'),
(4, 'Closer', 'positive', 'Races well when overtaking horses around the final corner'),
(5, 'Delicate', 'negative', 'Easily upset by bumping'),
(6, 'Dust Not OK', 'negative', 'Does not do well with dust'),
(7, 'Fast Pace Not OK', 'negative', 'Races worse the faster the pace'),
(8, 'Fast Pace OK', 'positive', 'Races better in faster paced races'),
(9, 'Free', 'positive', 'Races well even when out of position'),
(10, 'From Outside', 'positive', 'Gives an impressive burst on the outside after staying towards the back during the race'),
(11, 'Front Runner', 'positive', 'Races well when leading the pack by a large margin. Only for front running horses'),
(12, 'Grit', 'positive', 'Excels going head-to-head with another horse to the finish line'),
(13, 'Hates Pack', 'negative', 'Upset when caught in a crowd'),
(14, 'Inflexible', 'negative', 'Cannot race out of position'),
(15, 'Instant Response', 'positive', 'Reacts quickly to the jockey'),
(16, 'Last Corner Leader', 'positive', 'Performs well after taking lead around the last corner'),
(17, 'Last to First', 'positive', 'Explodes in the stretch when trailing through the race'),
(18, 'Likes Pack', 'positive', 'Comfortable running in a pack'),
(19, 'Loses Will', 'negative', 'Easily distracted after taking lead around the last corner'),
(20, 'Pace Down', 'positive', 'Pace slower is okay'),
(21, 'Pace Split', 'positive', 'Okay if pack splits'),
(22, 'Persistency', 'positive', 'Keeps going'),
(23, 'Rough Track Not OK', 'negative', 'Races poorly in rough track conditions'),
(24, 'Rough Track OK', 'positive', 'Performs well even in rough track conditions'),
(25, 'Second Wind', 'positive', 'When leading the pack all race long, further separates from the pack in the final stretch'),
(26, 'Slow OK', 'positive', 'Races better in slower races'),
(27, 'Slow Pace Not OK', 'negative', 'Races poorly in slower races'),
(28, 'Slow Start', 'negative', 'Slow at the beginning of the race'),
(29, 'Solo Runner', 'positive', 'Performs well when more than two lengths in the lead'),
(30, 'Spurt', 'positive', 'Excels when spurting from the back of the pack to '),
(31, 'Start Dash', 'positive', 'Starts well at the beginning of the race'),
(32, 'Stretch Burst', 'positive', 'Shows a tremendous burst of speed to the finish line'),
(33, 'Strong Heart', 'positive', 'Whip gauge falls slower than other horses in the stretch if the horse still has stamina'),
(34, 'Stubborn', 'negative', 'Sprints uncontrollably when spooked'),
(35, 'Tough', 'positive', 'Unfazed by bumping'),
(36, 'Whip', 'positive', 'Accelerates faster than usual when whipped at the start of the race');

INSERT INTO `grades` (`id`, `grade`, `description`) VALUES
(1, 'Open Level', 'Three highest stats are below 65'),
(2, 'GIII', '65 in any three or more stats'),
(3, 'GII', '75 in any two or more stats'),
(4, 'GI', '85 in any one or more stats'),
(5, 'All', '');

INSERT INTO `sexes` (`id`, `sex`, `description`) VALUES
(1, 'Gelding', 'Altered male horse'),
(2, 'Mare', 'Unaltered female horse'),
(3, 'Stallion', 'Unaltered male horse');

INSERT INTO `leg_types` (`id`, `type`, `description`) VALUES
(1, 'Closer', 'This type of horse often drops to the back of the field and trails the field throughout the race, until it lets loose an explosive turn of foot. These horses will often look to be hopelessly beaten, then suddenly turn it on in the middle or deep stretch and charge down the track hellbent for the finish line. They can often overwhelm horses that ran near the pace and repel challenges from other closers.'),
(2, 'Follower', 'This type of horse is often found in the middle of the pack, happily running along and bumping into its fellows without a care in the world. They’re content to run five or more lengths off the leaders and make their moves near the middle of the stretch and can sometimes simply overwhelm a tiring leader or kick back a challenging closer. They are similar to closers, but run closer to the stalkers and leaders.'),
(3, 'Front Runner', 'This type of horse loves the lead and loves to run uncontested at the front of the pack. Often these horses hate the idea of other horses bumping or pushing them in the middle of the pack and will run away at the start to lead the rest of the field on a merry chase. These horses may or may not be able to hold off closers – more often they can fold under pressure.'),
(4, 'Stalker', 'This type of horse is usually only a few lengths off the pace and tracking the leaders through each turn. These horses will bide their time then throw in a big move near the top or middle of a stretch, wearing down the leader to take over the top spot and hold on for the wire. Much like front runners, they may or may not be able to fend off the challengers of deep closers.');

INSERT INTO `horses` (`id`, `call_name`, `registered_name`, `sex`, `color`, `phenotype`, `grade`, `leg_type`, `owner`, `breeder`, `hexer`, `speed`, `staying`, `stamina`, `breaking`, `power`, `feel`, `fierce`, `tenacity`, `courage`, `response`, `pos_ability_1`, `pos_ability_2`, `neg_ability_1`, `distance_min`, `distance_max`, `surface_dirt`, `surface_turf`, `bandages`, `neck_height`, `run_style`, `hood`, `shadow_roll`, `notes`, `stall_path`, `img_path`) VALUES
(1, 'Riparian', 'Lessons Learned', 'Stallion', 'Black', 'EE', 'GI', 'Front Runner', 'Haubing', 'Neco', 'Neco', 87, 76, 85, 72, 77, 71, 75, 71, 75, 77, 'Front Runner', 'Second Wind', 'Stubborn', 8.0, 12.0, 'Good', 'Good', 'Both', 'Normal', 'Normal', 'Yes', 'Yes', '', '/stall/1', 'http://leahmhb.info/stall_img/Riparian.png'),
(35, 'Example Horse', '', 'Gelding', '', '', '', '', 'ExampleUser', '', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '', '', 0.0, 0.0, '', '', '', '', '', '', '', '...', '', ''),
(2, 'American Pharoah', 'Divine Right', 'Stallion', 'Bay', 'EeAa', 'GIII', 'Front Runner', 'Haubing', '', 'Katann', 87, 69, 69, 68, 69, 69, 67, 68, 67, 68, 'Last Corner Leader', 'Second Wind', 'Dust Not OK', 8.0, 12.0, 'Great', 'Okay', 'Both', 'Normal', 'Normal', 'No', 'Yes', 'Part of the Triple Crown 2015 raffle. Still can''t believe I won him!!', '/stall/2', 'http://leahmhb.info/stall_img/American%20Pharoah.png'),
(3, 'Sovenance', 'A Kinder Reminiscence', 'Mare', 'Bay', 'EeAA', 'GII', 'Closer', 'Haubing', 'Neco', 'Neco', 76, 71, 80, 70, 72, 67, 73, 63, 67, 73, 'Stretch Burst', 'Closer', 'Slow Start', 8.0, 12.0, 'Great', 'Okay', 'Both', 'Normal', 'Normal', 'No', 'Yes', '', '/stall/3', 'http://leahmhb.info/stall_img/Sovenance.png'),
(4, 'Trickery', 'Beneath Still Waters', 'Stallion', 'Bay', 'EeAA', 'Open Level', 'Closer', 'Haubing', 'Artemis', 'Artemis', 67, 58, 70, 60, 60, 61, 62, 60, 58, 58, 'Stretch Burst', 'Instant Response', 'Stubborn', 7.0, 10.0, 'Good', 'Good', 'Both', 'Normal', 'Normal', 'No', 'Yes', '...', '/stall/4', 'http://leahmhb.info/stall_img/Trickery.png'),
(19, 'Antebellum', 'Southern Belle', 'Mare', '', '', 'GIII', 'Stalker', 'Haubing', 'Neco', 'Neco', 77, 71, 71, 65, 67, 65, 67, 70, 68, 74, 'Stretch Burst', 'Persistency', 'Inflexible', 8.0, 12.0, 'Good', 'Good', 'Both', 'Normal', 'Normal', 'Yes', 'Yes', '', '/stall/19', 'http://leahmhb.info/stall_img/Antebellum.png'),
(14, 'Reverence', '', 'Mare', '', '', '', '', 'Neco', '', '', 50, 50, 50, 50, 50, 50, 50, 50, 50, 50, '', '', '', 0.0, 0.0, '', '', 'None', 'Normal', 'Normal', 'No', 'No', '', 'Http://seeingstars.boards.net/thread/2395', ''),
(13, 'Ziio', '', 'Mare', '', '', '', '', 'Artemis', '', '', 50, 50, 50, 50, 50, 50, 50, 50, 50, 50, '', '', '', 0.0, 0.0, '', '', 'None', 'Normal', 'Normal', 'No', 'No', '', 'Http://seeingstars.boards.net/thread/2009', ''),
(20, 'Manu', 'Pouring Smoke and Rain', 'Stallion', 'Chestnut', '', 'GII', 'Front Runner', 'Haubing', 'Haubing', 'Haubing', 81, 69, 82, 68, 69, 64, 69, 64, 64, 64, 'Front Runner', 'Second Wind', 'Hates Pack', 6.0, 10.0, 'Good', 'Good', 'Both', 'High', 'Leg Lift', 'Yes', 'Yes', '', '/stall/20', 'http://leahmhb.info/stall_img/Manu.png'),
(21, 'Savarni', 'Without the Sun', 'Stallion', 'Gray', '', 'GIII', 'Stalker', 'Haubing', 'Haubing', 'Haubing', 75, 62, 73, 64, 67, 62, 66, 60, 67, 65, 'Stretch Burst', 'Second Wind', 'Hates Pack', 5.0, 9.0, 'Good', 'Good', 'Both', 'Normal', 'Normal', 'Yes', 'Yes', '', '/stall/21', 'http://leahmhb.info/stall_img/Savarni.png'),
(22, 'River Street', 'Better Bank On It', 'Stallion', 'Bay', '', 'GIII', 'Stalker', 'Haubing', 'Gor', 'Gor', 71, 72, 69, 61, 64, 66, 64, 63, 63, 67, 'Likes Pack', 'Stretch Burst', 'Stubborn', 8.0, 12.0, 'Good', 'Good', 'Both', 'Normal', 'Normal', 'Yes', 'Yes', '', '/stall/22', 'http://leahmhb.info/stall_img/River Street.png'),
(23, 'Longevity', 'Love the Quiet Life', 'Stallion', '', '', 'Open Level', 'Follower', 'Haubing', 'Gor', 'Gor', 70, 59, 60, 59, 60, 58, 59, 59, 58, 58, 'Instant Response', 'Whip', 'Slow Start', 10.0, 14.0, 'Great', 'Okay', 'Both', 'High', 'Leg Lift', 'Yes', 'Yes', '', '/stall/23', 'http://leahmhb.info/stall_img/Longevity.png'),
(24, 'Leise', 'Always the Quiet Ones', 'Mare', '', '', 'GIII', 'Closer', 'Haubing', '', 'Daveena', 69, 66, 67, 63, 65, 61, 62, 60, 62, 63, 'Spurt', 'Persistency', 'Bears', 12.0, 16.0, 'Good', 'Good', 'Both', 'Normal', 'Normal', 'Yes', 'Yes', '', '/stall/24', 'http://leahmhb.info/stall_img/Leise.png'),
(25, 'Zippa', 'Buzzin'' By', 'Mare', 'Bay', '', 'GIII', 'Follower', 'Haubing', '', 'Neco', 73, 68, 69, 59, 65, 58, 61, 57, 60, 63, 'Instant Response', 'Grit', 'Bears', 8.0, 10.0, 'Good', 'Good', 'Both', 'Normal', 'Normal', 'No', 'No', '', '/stall/25', 'http://leahmhb.info/stall_img/Zippa.png'),
(26, 'Capricious', 'Flirt', 'Mare', 'Gray', '', 'GI', 'Stalker', 'Haubing', '', 'Mak', 87, 73, 80, 73, 80, 71, 71, 72, 72, 72, 'Stretch Burst', 'Whip', 'Delicate', 5.0, 8.0, 'Good', 'Good', 'Front', 'High', 'Normal', 'Yes', 'Yes', '', '/stall/26', 'http://leahmhb.info/stall_img/Capricious.png'),
(27, 'Winnie', 'Watch Me', 'Mare', '', '', 'GIII', 'Stalker', 'Haubing', '', 'Gor', 67, 65, 65, 64, 67, 62, 64, 62, 61, 66, 'Free', 'Grit', 'Stubborn', 7.0, 11.0, 'Good', 'Good', 'Front', 'Normal', 'Leg Lift', 'No', 'Yes', '', '/stall/27', 'http://leahmhb.info/stall_img/Winnie.png'),
(28, 'Pollyanna', 'Paint a Smile', 'Mare', 'Gray', '', 'Open Level', 'Follower', 'Haubing', 'Katann', 'Katann', 60, 59, 57, 56, 59, 55, 61, 59, 61, 63, 'Whip', 'Instant Response', 'Bears', 9.0, 14.0, 'Good', 'Good', 'Both', 'Normal', 'Normal', 'Yes', 'Yes', '', '/stall/28', 'http://leahmhb.info/stall_img/Pollyanna.png'),
(29, 'Nouvar', 'Bring on the Rain', 'Mare', 'Gray', '', 'GIII', 'Follower', 'Haubing', '', 'Haubing', 73, 71, 72, 60, 70, 62, 63, 59, 63, 65, 'Likes Pack', 'Tough', 'Inflexible', 8.0, 12.0, 'Okay', 'Great', 'Both', 'Normal', 'Normal', 'Yes', 'Yes', '', '/stall/29', 'http://leahmhb.info/stall_img/Nouvar.png'),
(30, 'Illegal', 'That Can''t Be Legal', 'Mare', 'Black', '', 'Open Level', 'Closer', 'Haubing', '', 'Haubing', 69, 63, 70, 58, 59, 61, 59, 58, 62, 60, 'From Outside', 'Whip', 'Bears', 11.0, 14.0, 'Okay', 'Great', 'Both', 'Normal', 'Normal', 'No', 'No', '', '/stall/30', 'http://leahmhb.info/stall_img/Illegal.png'),
(31, 'Ruffian', '', 'Mare', '', '', '', '', 'Neco', '', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '', '', 0.0, 0.0, '', '', '', '', '', '', '', '', 'http://seeingstars.boards.net/thread/448', '#'),
(32, 'Seattle Slew', '', 'Stallion', '', '', '', '', 'Neco', '', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '', '', 0.0, 0.0, '', '', '', '', '', '', '', '', 'http://seeingstars.boards.net/thread/444', '#'),
(33, 'Seabiscuit', '', 'Stallion', '', '', '', '', 'Neco', '', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '', '', 0.0, 0.0, '', '', '', '', '', '', '', '', 'http://seeingstars.boards.net/thread/445', '#'),
(34, 'Zenyatta', '', 'Mare', '', '', '', '', 'Neco', '', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '', '', 0.0, 0.0, '', '', '', '', '', '', '', '', 'http://seeingstars.boards.net/thread/425', '#'),
(38, 'Sass Street Wonder', '', 'Mare', '', '', '', '', 'Gor', '', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '', '', 0.0, 0.0, '', '', '', '', '', '', '', '...', '', ''),
(39, 'Nico', '', 'Stallion', '', '', '', '', 'Brynn', '', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '', '', 0.0, 0.0, '', '', '', '', '', '', '', '...', '', ''),
(40, 'Man O War', '', 'Stallion', '', '', '', '', 'Neco', '', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '', '', 0.0, 0.0, '', '', '', '', '', '', '', '...', '#', '#'),
(41, 'Southern Dancer', '', 'Mare', '', '', '', '', 'Neco', '', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '', '', 0.0, 0.0, '', '', '', '', '', '', '', '', '#', '#');


INSERT INTO `horses_progeny` (`id`, `horse_id`, `sire_id`, `dam_id`) VALUES
(1, 21, 20, 26),
(2, 14, 1, 3),
(3, 4, 1, 13),
(4, 1, 32, 31),
(5, 3, 33, 34),
(6, 22, 1, 38),
(7, 20, 39, 29),
(8, 19, 40, 41);


INSERT INTO `person` (`id`, `username`, `stable_name`, `stable_prefix`, `racing_colors`) VALUES
(1, 'Haubing', 'Shashka Stables', 'Haubing', 'Green and White'),
(2, 'Neco', 'Hard Tack', 'Hard Tack', 'Black, Red'),
(3, 'Katann', 'RKO Haven', 'RKO', ''),
(4, 'Artemis', 'Three Peaks Manor', 'Three Peaks', ''),
(5, 'Gor', 'BlueJay Racing', 'BlueJay', ''),
(6, 'Mak', 'Falling in Like', 'Falling', ''),
(13, 'Daveena', 'Moonmist', 'Daveena', ''),
(14, 'ExampleUser', 'ExampleStable', 'ExamplePrefix', 'ExampleColors'),
(20, 'Brynn', '?', '?', '');


INSERT INTO `races` (`id`, `series`, `name`, `surface`, `grade`, `distance`, `ran_dt`, `url`) VALUES
(1, NULL, 'Sordid Affair Stakes', 'Dirt', 'GII', 7.0, '2016-03-23', 'http://seeingstars.boards.net/thread/5528/'),
(2, NULL, 'Dubai Millenium Stakes', 'Dirt', 'GIII', 10.0, '1000-01-01', 'http://seeingstars.boards.net/thread/5596'),
(3, NULL, 'Down and Out Stakes', 'Turf', 'Open Level', 12.0, '2015-09-02', 'http://seeingstars.boards.net/thread/3120'),
(4, '(DWC Series)', 'Zabeel Mile', 'Turf', 'GIII', 8.0, '1000-01-01', 'http://seeingstars.boards.net/thread/5594'),
(5, '(DWC Series)', 'Al Shindagha Sprint', 'Dirt', 'GIII', 6.0, '1000-01-01', 'http://seeingstars.boards.net/thread/5593'),
(105, '(DWC Series)', 'Firebreak Stakes', 'Dirt', 'GIII', 8.0, '2016-03-14', 'http://seeingstars.boards.net/thread/5595'),
(7, NULL, 'Running Roses Stakes', 'Dirt', 'GIII', 8.0, '2016-03-22', 'http://seeingstars.boards.net/thread/5616'),
(8, NULL, 'Guns Blazing Stakes', 'Dirt', 'GIII', 7.0, '2016-03-16', 'http://seeingstars.boards.net/thread/5601'),
(9, NULL, 'Celtic Bride Stakes', 'Turf', 'Open Level', 12.0, '2015-05-24', 'http://seeingstars.boards.net/thread/1762'),
(10, NULL, 'Summer Front Stakes', 'Dirt', 'Open Level', 11.5, '2015-05-24', 'http://seeingstars.boards.net/thread/1713'),
(11, '[WT Canada]', 'Woodbine Racetrack', 'Dirt', 'Open Level', 8.0, '2015-05-26', 'http://seeingstars.boards.net/thread/1793'),
(12, '[WT Canada]', 'Breeders'' Stakes', 'Turf', 'Open Level', 12.0, '2015-05-30', 'http://seeingstars.boards.net/thread/1806'),
(13, NULL, 'Wirlwind Tour Handicap', 'Dirt', 'GIII', 9.0, '2015-06-27', 'http://seeingstars.boards.net/thread/2288'),
(14, NULL, 'Stars and Stripes Handicap', 'Turf', 'GIII', 8.0, '2015-07-08', 'http://seeingstars.boards.net/thread/2428'),
(15, NULL, 'Old Friends Stakes', 'Turf', 'GIII', 8.0, '2015-09-15', 'http://seeingstars.boards.net/thread/3140'),
(16, '(Breeder''s Cup)', 'Dirt Mile', 'Dirt', 'All', 8.0, '2015-11-01', 'http://seeingstars.boards.net/thread/4130'),
(18, '(Kentucky Derby Prep)', 'Fountain of Youth', 'Dirt', 'All', 9.0, '2016-03-19', 'http://seeingstars.boards.net/thread/5571'),
(19, '(Kentucky Oaks Prep)', 'Fairground Oaks', 'Dirt', 'All', 8.5, '2016-03-18', 'http://seeingstars.boards.net/thread/5563'),
(20, NULL, 'Road Less Travelled', 'Dirt', 'GIII', 9.0, '2016-03-16', 'http://seeingstars.boards.net/thread/5602'),
(21, 'Maiden Special Weight', 'Dec 12', 'Dirt', 'Open Level', 8.0, '2015-12-12', ''),
(22, 'AOC/NW', 'Mar 27 NW x 3 / Optional Claimer', 'Turf', 'Open Level', 9.0, '2015-05-27', ''),
(23, NULL, 'Ice and Fire Handicap', 'Turf', 'GII', 8.0, '2015-07-30', 'http://seeingstars.boards.net/thread/2806'),
(24, NULL, 'Sycorax Handicap', 'Turf', 'Open Level', 11.0, '1000-01-01', ''),
(25, 'Maiden Special Weight', 'May 24', 'Turf', 'Open Level', 7.0, '2015-04-26', 'http://seeingstars.boards.net/thread/1808'),
(26, NULL, 'Dead Man''s Sprint Stakes', 'Turf', 'GIII', 7.0, '2015-10-20', 'http://seeingstars.boards.net/thread/4020'),
(27, NULL, 'The Tin Man Handicap', 'Turf', 'Open Level', 12.0, '2015-05-05', 'http://seeingstars.boards.net/thread/1591'),
(28, 'Maiden Special Weight', 'May 21', 'Dirt', 'Open Level', 8.0, '2015-05-21', 'http://seeingstars.boards.net/thread/1750'),
(29, '[WT Canada]', 'Toronto Cup', 'Turf', 'Open Level', 9.0, '2015-05-24', 'http://seeingstars.boards.net/thread/1805'),
(30, NULL, 'Above and Below Handicap', 'Turf', 'GIII', 8.0, '2015-07-24', 'http://seeingstars.boards.net/thread/2691'),
(31, NULL, 'Slow Burn Handicap', 'Turf', 'GIII', 9.0, '2015-09-05', 'http://seeingstars.boards.net/thread/3172'),
(32, '(Breeder''s Cup)', 'Corinthian Stakes', 'Dirt', 'All', 8.0, '2015-09-18', 'http://seeingstars.boards.net/thread/3412'),
(33, '(Breeder''s Cup)', 'Goldikova Stakes', 'Turf', 'All', 8.0, '2015-09-15', 'http://seeingstars.boards.net/thread/3411'),
(34, '(Breeder''s Cup)', 'Frankel Handicap', 'Turf', 'All', 8.0, '2015-09-26', 'http://seeingstars.boards.net/thread/3539'),
(35, NULL, 'Self Destruct Handicap', 'Turf', 'GIII', 12.0, '2015-10-02', 'http://seeingstars.boards.net/thread/3626'),
(36, NULL, 'Loveburn Handicap', 'Dirt', 'GII', 8.0, '2015-10-23', 'http://seeingstars.boards.net/thread/4106'),
(37, '(Breeder''s Cup)', 'Classic', 'Dirt', 'All', 10.0, '2015-10-25', 'http://seeingstars.boards.net/thread/4136'),
(38, NULL, 'Shadowrun Handicap', 'Dirt', 'GIII', 10.5, '2015-09-25', 'http://seeingstars.boards.net/thread/3516'),
(39, NULL, 'Mammoth Handicap', 'Turf', 'GIII', 12.0, '2015-06-03', 'http://seeingstars.boards.net/thread/1995'),
(40, NULL, 'Empire State Handicap', 'Dirt', 'GIII', 9.0, '2015-05-31', 'http://seeingstars.boards.net/thread/1941'),
(41, NULL, 'Paranormal Party Handicap', 'Dirt', 'GIII', 10.5, '2015-06-29', 'http://seeingstars.boards.net/thread/2372'),
(42, '[World Tour UAE]', 'Dubai Classic', 'Dirt', 'GIII', 10.0, '2015-07-05', 'http://seeingstars.boards.net/thread/2445'),
(43, NULL, 'Seize The Day Handicap', 'Turf', 'GIII', 12.0, '2015-07-24', 'http://seeingstars.boards.net/thread/2693'),
(44, '(Breeder''s Cup)', 'Cigar Handicap', 'Dirt', 'All', 10.0, '2015-08-03', 'http://seeingstars.boards.net/thread/2854'),
(45, NULL, 'Sink or Swim Stakes', 'Turf', 'GIII', 12.0, '2015-08-27', 'http://seeingstars.boards.net/thread/3092'),
(46, NULL, 'Mad House Handicap', 'Dirt', 'GII', 10.0, '2015-10-31', 'http://seeingstars.boards.net/thread/3881'),
(47, NULL, 'Warbler Handicap', 'Dirt', 'Open Level', 9.0, '2015-05-22', 'http://seeingstars.boards.net/thread/1751'),
(48, NULL, 'Rising Tide Stakes', 'Dirt', 'Open Level', 10.5, '2015-05-03', 'http://seeingstars.boards.net/thread/1566'),
(49, '[World Tour: Canada]', 'Nunavut Stakes', 'Turf', 'Open Level', 9.0, '2015-04-01', 'http://seeingstars.boards.net/thread/1904'),
(50, NULL, 'Winsome Handicap', 'Dirt', 'GIII', 8.0, '2016-03-18', 'http://seeingstars.boards.net/thread/2076'),
(51, NULL, 'Game On Dude Handicap', 'Dirt', 'GIII', 9.0, '2016-03-18', 'http://seeingstars.boards.net/thread/3141'),
(52, '(Breeder''s Cup)', 'Coaltown Handicap', 'Dirt', 'All', 8.0, '2016-03-18', 'http://seeingstars.boards.net/thread/3540'),
(53, NULL, 'Uninvited Guests Handicap', 'Turf', 'GII', 12.0, '2016-03-18', 'http://seeingstars.boards.net/thread/4023'),
(54, NULL, 'Together Forward Handicap', 'Dirt', 'GII', 9.0, '2016-03-18', 'http://seeingstars.boards.net/thread/4346'),
(55, NULL, 'Steamroller Stakes', 'Turf', 'GII', 10.0, '2016-03-18', 'http://seeingstars.boards.net/thread/4521'),
(56, 'Maiden Special Weight', 'May 7 (70 and Under)', 'Turf', 'GIII', 8.0, '2015-05-27', 'http://seeingstars.boards.net/thread/1602'),
(57, 'AOC/NW', 'May 24 NW x 3/Optional Claiming', 'Turf', 'Open Level', 9.0, '2015-05-24', 'http://seeingstars.boards.net/thread/1809'),
(58, NULL, 'Belmont Gold Cup', 'Turf', 'GIII', 12.0, '2015-05-31', 'http://seeingstars.boards.net/thread/1942'),
(59, NULL, 'Lead Me Home Stakes', 'Turf', 'GIII', 11.0, '2015-07-04', 'http://seeingstars.boards.net/thread/2429'),
(60, NULL, 'Funny Bone Handicap', 'Dirt', 'GIII', 9.0, '2015-07-08', 'http://seeingstars.boards.net/thread/2493'),
(61, NULL, 'Affirmed Handicap', 'Dirt', 'GIII', 10.0, '2015-07-24', 'http://seeingstars.boards.net/thread/2692'),
(62, NULL, 'Sea The Stars Handicap', 'Turf', 'GIII', 12.0, '2015-09-28', 'http://seeingstars.boards.net/thread/3585'),
(63, NULL, 'Paranormal Witness Handicap', 'Turf', 'GII', 9.0, '2015-10-09', 'http://seeingstars.boards.net/thread/3804'),
(64, NULL, 'Pender Harbor Stakes', 'Turf', 'GII', 10.0, '2015-11-29', 'http://seeingstars.boards.net/thread/4565'),
(65, NULL, 'Sort It Out Handicap', 'Turf', 'GIII', 12.0, '2015-09-17', 'http://seeingstars.boards.net/thread/3398'),
(71, NULL, 'Burnin'' From the Start Stakes', 'Turf', 'GIII', 9.0, '2016-03-23', 'http://seeingstars.boards.net/thread/5732'),
(72, NULL, 'Let It Go', 'Dirt', 'GIII', 9.5, '2016-03-23', 'http://seeingstars.boards.net/thread/5617'),
(73, NULL, 'Seeing Stars Handicap', 'Turf', 'GII', 9.0, '1000-01-01', 'http://seeingstars.boards.net/thread/5731'),
(74, 'Maiden Special Weight', 'May 5th', 'Turf', 'Open Level', 9.0, '2015-05-05', 'http://seeingstars.boards.net/thread/1592'),
(75, 'AOC/NW', 'May 5 NW x 2 / Optional Claiming', 'Dirt', 'All', 10.0, '2015-05-05', 'http://seeingstars.boards.net/thread/1593/optional-claiming-10f-dirt-aoc'),
(76, NULL, 'Sweet Amber Stakes', 'Dirt', 'GII', 10.0, '2015-06-25', 'http://seeingstars.boards.net/thread/2331/sweet-amber-stakes-10f-dirt'),
(77, NULL, 'Evergleam Stakes', 'Turf', 'GIII', 8.0, '2015-06-29', 'http://seeingstars.boards.net/thread/2379'),
(78, '[World Tour UAE]', 'Sheema Classic', 'Turf', 'GIII', 12.0, '2015-07-08', 'http://seeingstars.boards.net/thread/2491'),
(79, '(Breeder''s Cup)', 'Shergar Memorial Stakes', 'Turf', 'All', 11.0, '2015-07-18', 'http://seeingstars.boards.net/thread/2528'),
(80, '(Breeder''s Cup)', 'Tiznow Handicap', 'Dirt', 'All', 9.0, '2015-07-19', 'http://seeingstars.boards.net/thread/2618'),
(81, '(Breeder''s Cup)', 'English Channel Handicap', 'Turf', 'All', 12.0, '2015-07-19', 'http://seeingstars.boards.net/thread/2616'),
(82, '(Breeder''s Cup)', 'Spectacular Bid Stakes', 'Dirt', 'All', 10.0, '2015-07-26', 'http://seeingstars.boards.net/thread/2712'),
(83, '(Breeder''s Cup)', 'Orfevre Handicap', 'Turf', 'All', 12.0, '2015-08-03', 'http://seeingstars.boards.net/thread/2856'),
(84, NULL, 'Speed Demon Stakes', 'Dirt', 'GIII', 9.0, '2015-08-27', 'http://seeingstars.boards.net/thread/3091'),
(85, NULL, 'Jack Be Nimble', 'Dirt', 'GIII', 12.0, '2015-09-09', 'http://seeingstars.boards.net/thread/3306'),
(86, NULL, 'Left Behing Stakes', 'Dirt', 'GIII', 10.0, '2015-09-09', 'http://seeingstars.boards.net/thread/3305'),
(87, NULL, 'Macho Uno Stakes', 'Dirt', 'GII', 8.5, '2015-10-02', 'http://seeingstars.boards.net/thread/3627'),
(88, NULL, 'On Ice Handicap', 'Turf', 'GIII', 12.0, '2015-10-15', 'http://seeingstars.boards.net/thread/4022'),
(89, NULL, 'War Front Stakes', 'Dirt', 'GII', 10.0, '2016-11-03', 'http://seeingstars.boards.net/thread/4228'),
(90, NULL, 'Unobtainium Stakes', 'Turf', 'GII', 12.0, '2015-11-18', 'http://seeingstars.boards.net/thread/4442'),
(91, 'Maiden Special Weight', 'Oct 3', 'Turf', 'Open Level', 9.0, '2015-10-03', 'http://seeingstars.boards.net/thread/3646/oct-maiden-special-weight-turf'),
(92, 'Maiden Special Weight', 'Sept 22', 'Turf', 'Open Level', 8.0, '2015-09-22', 'http://seeingstars.boards.net/thread/3462'),
(93, 'Maiden Special Weight', 'Sept 27', 'Dirt', 'Open Level', 9.0, '2015-09-27', 'http://seeingstars.boards.net/thread/3566'),
(94, NULL, 'Claiborne Futurity Stakes', 'Dirt', 'Open Level', 9.0, '2015-11-01', 'http://seeingstars.boards.net/thread/4184'),
(95, NULL, 'Winter Showers Stakes', 'Dirt', 'Open Level', 12.0, '2015-11-09', 'http://seeingstars.boards.net/thread/4287'),
(96, NULL, 'Ghost of Me Stakes', 'Dirt', 'Open Level', 7.0, '2015-09-22', 'http://seeingstars.boards.net/thread/3468'),
(97, NULL, 'White Collar Stakes', 'Dirt', 'Open Level', 7.0, '2015-11-01', 'http://seeingstars.boards.net/thread/4180'),
(98, '(Kentucky Oaks Prep)', 'Ashland Stakes', 'Dirt', 'All', 8.5, '1000-01-01', 'http://seeingstars.boards.net/thread/5747'),
(99, 'Maiden Special Weight', 'August 30', 'Dirt', 'Open Level', 9.0, '2015-08-30', 'http://seeingstars.boards.net/thread/3114'),
(100, 'Maiden Special Weight', 'Sept 1', 'Dirt', 'Open Level', 9.0, '2015-09-01', 'http://seeingstars.boards.net/thread/3143'),
(101, 'Maiden Special Weight', 'Sept 8', 'Dirt', 'Open Level', 9.0, '2015-09-08', 'http://seeingstars.boards.net/thread/3286'),
(102, 'Maiden Special Weight', 'Sept 30', 'Dirt', 'Open Level', 8.0, '2015-09-30', 'http://seeingstars.boards.net/thread/3609'),
(103, NULL, 'Motivational Stakes', 'Dirt', 'Open Level', 7.0, '2015-11-17', 'http://seeingstars.boards.net/thread/4417');

INSERT INTO `race_entrants` (`id`, `horse_id`, `race_id`, `placing`) VALUES
(1, 30, 3, 2),
(2, 1, 9, 1),
(3, 1, 10, 1),
(4, 1, 11, 1),
(5, 1, 12, 1),
(6, 1, 13, 1),
(7, 1, 14, 1),
(8, 1, 15, 1),
(9, 1, 16, 1),
(10, 26, 1, 3),
(11, 19, 2, 0),
(12, 29, 2, 0),
(13, 19, 4, 0),
(14, 29, 4, 0),
(15, 21, 5, 0),
(16, 2, 17, 0),
(17, 21, 17, 0),
(65, 1, 58, 5),
(64, 1, 57, 5),
(63, 1, 56, 5),
(21, 21, 8, 8),
(22, 2, 18, 2),
(23, 19, 19, 1),
(24, 19, 20, 3),
(25, 20, 21, 1),
(26, 20, 22, 1),
(27, 20, 23, 1),
(28, 20, 24, 2),
(29, 21, 25, 1),
(30, 21, 26, 1),
(31, 1, 27, 2),
(32, 1, 28, 2),
(33, 1, 29, 2),
(34, 1, 30, 2),
(35, 1, 31, 2),
(36, 1, 32, 2),
(37, 1, 33, 2),
(38, 1, 34, 2),
(39, 1, 35, 2),
(40, 1, 36, 2),
(41, 1, 37, 2),
(42, 1, 38, 2),
(43, 1, 39, 3),
(44, 1, 40, 3),
(45, 1, 42, 3),
(46, 1, 43, 3),
(47, 1, 44, 3),
(48, 1, 45, 3),
(49, 1, 46, 3),
(50, 1, 41, 3),
(51, 1, 47, 4),
(52, 1, 48, 4),
(53, 1, 49, 4),
(54, 1, 50, 4),
(55, 1, 51, 4),
(56, 1, 52, 4),
(57, 1, 53, 4),
(58, 1, 54, 4),
(59, 1, 55, 4),
(60, 19, 7, 5),
(61, 21, 7, 8),
(62, 27, 7, 13),
(66, 1, 59, 5),
(67, 1, 60, 5),
(68, 1, 61, 5),
(69, 1, 62, 5),
(70, 1, 63, 5),
(71, 1, 64, 2),
(72, 1, 65, 4),
(76, 19, 71, 1),
(77, 19, 72, 11),
(79, 3, 73, 0),
(80, 20, 73, 0),
(81, 1, 74, 11),
(82, 1, 75, 7),
(83, 1, 76, 7),
(84, 1, 77, 6),
(85, 1, 78, 6),
(86, 1, 79, 9),
(87, 1, 80, 7),
(88, 1, 81, 8),
(89, 1, 82, 9),
(90, 1, 23, 6),
(91, 1, 83, 6),
(92, 1, 84, 8),
(93, 1, 85, 10),
(94, 1, 86, 14),
(95, 1, 87, 6),
(96, 1, 88, 6),
(97, 1, 89, 8),
(98, 1, 90, 6),
(99, 21, 11, 4),
(100, 25, 11, 2),
(101, 24, 12, 4),
(102, 25, 13, 4),
(103, 3, 13, 7),
(104, 3, 14, 7),
(105, 22, 14, 4),
(106, 29, 15, 3),
(107, 22, 15, 5),
(108, 3, 16, 11),
(109, 29, 30, 7),
(110, 22, 30, 6),
(111, 29, 31, 5),
(112, 3, 32, 11),
(113, 24, 27, 12),
(114, 29, 33, 7),
(115, 29, 35, 3),
(116, 22, 35, 9),
(117, 20, 36, 4),
(118, 3, 36, 6),
(119, 3, 37, 7),
(120, 3, 38, 4),
(121, 3, 39, 8),
(122, 3, 40, 8),
(123, 21, 40, 14),
(124, 3, 41, 6),
(125, 22, 41, 7),
(126, 22, 42, 10),
(127, 3, 42, 8),
(128, 29, 43, 5),
(129, 22, 43, 4),
(130, 3, 44, 6),
(131, 29, 45, 6),
(132, 3, 46, 4),
(133, 4, 91, 1),
(134, 4, 92, 2),
(135, 4, 93, 2),
(136, 4, 94, 2),
(137, 4, 95, 3),
(138, 4, 96, 4),
(139, 4, 97, 4),
(140, 19, 98, 0),
(141, 4, 99, 5),
(142, 4, 100, 5),
(143, 4, 101, 5),
(144, 4, 102, 5),
(145, 4, 103, 5);

