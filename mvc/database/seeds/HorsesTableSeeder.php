<?php

use Illuminate\Database\Seeder;

class HorsesTableSeeder extends Seeder {

    public function run() {
        // Uncomment the below to wipe the table clean before populating
        DB::table('horses')->delete();
        DB::table('horses_abilities')->delete();
        DB::table('horses_progeny')->delete();

        $horses = array(

            ['id' => 1, 'call_name' => 'Riparian', 'registered_name' => 'Lessons Learned', 
            'sex' => 'Stallion', 'grade' => 'GII', 'leg_type' => 'Front Runner', 'owner' => 'Haubing', 'breeder' => 'Neco', 'hexer' => 'Neco', 
            'distance_min' => 8, 'distance_max' => 12, 
            'surface_dirt' => 'Good', 'surface_turf' => 'Good',             
            'created_at' => new DateTime, 
            'updated_at' => new DateTime],

            ['id' => 3, 'call_name' => 'American Pharoah', 'registered_name' => 'Divine Right', 
            'sex' => 'Stallion', 'grade' => 'GIII', 'leg_type' => 'Front Runner', 'owner' => 'Haubing', 'hexer' => 'Katann', 
            'distance_min' => 8, 'distance_max' => 12, 
            'surface_dirt' => 'Great', 'surface_turf' => 'Okay',             
            'created_at' => new DateTime, 
            'updated_at' => new DateTime],

            ['id' => 4, 'call_name' => 'Seattle Slew', 'registered_name' => 'Rainy Day Blues', 
            'sex' => 'Stallion', 'grade' => 'GI', 'leg_type' => 'Front Runner', 'owner' => 'Neco', 'hexer' => 'Neco', 
            'distance_min' => 8, 'distance_max' => 12, 
            'surface_dirt' => 'Good', 'surface_turf' => 'Good',             
            'created_at' => new DateTime, 
            'updated_at' => new DateTime],

            ['id' => 5, 'call_name' => 'Ruffian', 'registered_name' => 'Let Me Run', 
            'sex' => 'Mare', 'grade' => 'GI', 'leg_type' => 'Front Runner', 'owner' => 'Neco', 'hexer' => 'Neco',  
            'distance_min' => 7, 'distance_max' => 10, 
            'surface_dirt' => 'Great', 'surface_turf' => 'Okay',             
            'created_at' => new DateTime, 
            'updated_at' => new DateTime]
            );

        $horses_abilities = array(
            ['id' => 1, 
            'horse_id' =>  1, 
            'pos_ability_1' => 'Front Runner', 
            'pos_ability_2' => 'Second Wind', 
            'neg_ability_1' => 'Stubborn', 
            'created_at' => new DateTime, 
            'updated_at' => new DateTime],
            ['id' => 2, 
            'horse_id' => 5, 
            'pos_ability_1' => 'Front Runner', 
            'pos_ability_2' => 'Grit', 
            'neg_ability_1' => 'Inflexible', 
            'created_at' => new DateTime, 
            'updated_at' => new DateTime],
            ['id' => 3, 
            'horse_id' => 3, 
            'pos_ability_1' => 'Last Corner LEader', 
            'pos_ability_2' => 'Second Wind', 
            'neg_ability_1' => 'Dust Not OK', 
            'created_at' => new DateTime, 
            'updated_at' => new DateTime],
            ['id' => 4, 
            'horse_id' => 4, 
            'pos_ability_1' => 'Stretch Burst', 
            'pos_ability_2' => 'Second Wind', 
            'neg_ability_1' => 'Bears', 
            'created_at' => new DateTime, 
            'updated_at' => new DateTime],
            );


        $horses_progeny = array(
            ['id' => 1, 
            'horse_id' => 1, 
            'sire_id' => 4, 
            'dam_id' => 5, 
            'created_at' => new DateTime, 
            'updated_at' => new DateTime]
            );

        // Uncomment the below to run the seeder
        DB::table('horses')->insert($horses);
        DB::table('horses_abilities')->insert($horses_abilities);
        DB::table('horses_progeny')->insert($horses_progeny);
    }//end run

}
