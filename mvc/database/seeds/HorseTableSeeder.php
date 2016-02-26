<?php

# database/seeds/QuoteTableSeeder.php

use App\Models\Horse;  
use Illuminate\Database\Seeder;

class HorseTableSeeder extends Seeder  
{
    public function run()
    {
        Horse::create([
            'horse_id' => '1',
            'call_name' => 'Cookie',
            'sex' => 'Stallion',
            'owner' => 'Haubing'
        ]);

       
        //... add more quotes if you want!
        
        $this->call('HorseTableSeeder');
    }
}
