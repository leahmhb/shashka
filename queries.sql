--List all horses' abilities
SELECT 
Horses.horse_id ID,
Horses.call_name NAME, 
Horse_Abilities.pos_ability_1 POS1, 
Horse_Abilities.pos_ability_2 POS2, 
Horse_Abilities.neg_ability_1 NEG 
FROM Horses INNER JOIN Horse_Abilities 
ON Horses.horse_id = Horse_Abilities.horse_id; 

--List ONE horse's abilities, use horse_id to choose
SELECT 
Horses.horse_id ID,
Horses.call_name NAME, 
Horse_Abilities.pos_ability_1 POS1, 
Horse_Abilities.pos_ability_2 POS2, 
Horse_Abilities.neg_ability_1 NEG 
FROM Horses INNER JOIN Horse_Abilities 
ON Horses.horse_id = Horse_Abilities.horse_id
WHERE Horses.horse_id = 1; 

--List ONE horse's full info, use horse_id to choose
SELECT Horses.*, 
Horse_Abilities.pos_ability_1 POS1, 
Horse_Abilities.pos_ability_2 POS2, 
Horse_Abilities.neg_ability_1 NEG,
Horse_Progeny.sire_id SIRE,
Horse_Progeny.dam_id DAM
FROM Horses 
INNER JOIN Horse_Abilities
ON Horses.horse_id = Horse_Abilities.horse_id
INNER JOIN Horse_Progeny
ON Horses.horse_id = Horse_Progeny.horse_id
WHERE Horses.horse_id = 1; 

--Check Constraints not supported by msql
ALTER TABLE Horses ADD CONSTRAINT distance_ck CHECK(max_distance >= min_distance);
ALTER TABLE Horses ADD CONSTRAINT bandages_ck check (bandages in ('None', 'Both', 'Front', 'Back'));
ALTER TABLE Horses ADD CONSTRAINT hood_ck check (hood in ('Yes', 'No'));
ALTER TABLE Horses ADD CONSTRAINT shadow_roll_ck check (shadow_roll in ('Yes', 'No'));
ALTER TABLE Horses ADD CONSTRAINT neck_height_ck check (neck_height in ('Normal', 'High'));
ALTER TABLE Horses ADD CONSTRAINT run_style_ck check (run_style in ('Normal', 'Leg Lift'));

