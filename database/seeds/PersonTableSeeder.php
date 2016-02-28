<?php

use Illuminate\Database\Seeder;

class PersonTableSeeder extends Seeder {

    public function run() {
        // Uncomment the below to wipe the table clean before populating
        DB::table('person')->delete();


        $person = array(
            ['id' => 1, 
            'username' => 'Haubing', 
            'stable_name' => 'Shashka Stables', 
            'stable_prefix' => 'Haubing', 
            'created_at' => new DateTime, 
            'updated_at' => new DateTime],
            ['id' => 2, 
            'username' => 'Neco', 
            'stable_name' => 'Hard Tack', 
            'stable_prefix' => 'Hard Tack', 
            'created_at' => new DateTime, 
            'updated_at' => new DateTime],
            ['id' => 3, 
            'username' => 'Katann', 
            'stable_name' => 'RKO Haven', 
            'stable_prefix' => 'RKO', 
            'created_at' => new DateTime, 
            'updated_at' => new DateTime],
            ['id' => 4, 
            'username' => 'Artemis', 
            'stable_name' => 'Three Peaks Manor', 
            'stable_prefix' => 'Three Peaks', 
            'created_at' => new DateTime, 
            'updated_at' => new DateTime]
            );


        // Uncomment the below to run the seeder
        DB::table('person')->insert($person);

    }//end run

}
