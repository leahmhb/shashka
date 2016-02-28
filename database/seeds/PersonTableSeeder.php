<?php

use Illuminate\Database\Seeder;

class PersonTableSeeder extends Seeder {

    public function run() {
        // Uncomment the below to wipe the table clean before populating
        DB::table('person')->delete();


        $person = array(
            ['id' => 1, 
            'username' => 'Haubing', 
            'stable_name' => '', 
            'stable_prefix' => '', 
            'created_at' => new DateTime, 
            'updated_at' => new DateTime],
            ['id' => 2, 
            'username' => 'Neco', 
            'stable_name' => '', 
            'stable_prefix' => '', 
            'created_at' => new DateTime, 
            'updated_at' => new DateTime],
            ['id' => 3, 
            'username' => 'Katann', 
            'stable_name' => '', 
            'stable_prefix' => '', 
            'created_at' => new DateTime, 
            'updated_at' => new DateTime]

            );


        // Uncomment the below to run the seeder
        DB::table('person')->insert($person);

    }//end run

}
