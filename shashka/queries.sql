--List all horses' abilities
SELECT 
horse.horse_id ID,
horse.call_name NAME, 
horse_ability.pos_ability_1 POS1, 
horse_ability.pos_ability_2 POS2, 
horse_ability.neg_ability_1 NEG 
FROM horse INNER JOIN horse_ability 
ON horse.horse_id = horse_ability.horse_id; 

--List ONE horse's abilities, use horse_id to choose
SELECT 
horse.horse_id ID,
horse.call_name NAME, 
horse_ability.pos_ability_1 POS1, 
horse_ability.pos_ability_2 POS2, 
horse_ability.neg_ability_1 NEG 
FROM horse INNER JOIN horse_ability 
ON horse.horse_id = horse_ability.horse_id
WHERE horse.horse_id = 1; 

--List ONE horse's full info, use horse_id to choose
SELECT horse.*, 
horse_ability.pos_ability_1 POS1, 
horse_ability.pos_ability_2 POS2, 
horse_ability.neg_ability_1 NEG,
horse_progeny.sire_id SIRE,
horse_progeny.dam_id DAM
FROM horse 
INNER JOIN horse_ability
ON horse.horse_id = horse_ability.horse_id
INNER JOIN horse_progeny
ON horse.horse_id = horse_progeny.horse_id
WHERE horse.horse_id = 1; 

--Check Constraints not supported by msql
ALTER TABLE horse ADD CONSTRAINT distance_ck CHECK(max_distance >= min_distance);
ALTER TABLE horse ADD CONSTRAINT bandages_ck check (bandages in ('None', 'Both', 'Front', 'Back'));
ALTER TABLE horse ADD CONSTRAINT hood_ck check (hood in ('Yes', 'No'));
ALTER TABLE horse ADD CONSTRAINT shadow_roll_ck check (shadow_roll in ('Yes', 'No'));
ALTER TABLE horse ADD CONSTRAINT neck_height_ck check (neck_height in ('Normal', 'High'));
ALTER TABLE horse ADD CONSTRAINT run_style_ck check (run_style in ('Normal', 'Leg Lift'));

