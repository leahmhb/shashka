<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

use Carbon\Carbon;

class CreateRodiniaTables extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {

        Schema::create('person', function (Blueprint $table) {
            $table->engine = 'MyISAM';

            $table->increments('id');
            $table->string('username')->unique()->index();         
            $table->string('stable_name')->default('');
            $table->string('stable_prefix')->default('');
            $table->string('racing_colors')->default('');   
                 
            $table->timestamps = false;
        });

        Schema::create('grades', function (Blueprint $table) {
            $table->engine = 'MyISAM';

            $table->increments('id');            
            $table->string('grade')->unique()->index();     
            $table->string('description'); 

            $table->timestamps = false;
        });

        Schema::create('leg_types', function (Blueprint $table) {
            $table->engine = 'MyISAM';

            $table->increments('id');
            $table->string('type')->unique()->index();  
            $table->longText('description'); 
            $table->timestamps = false;
        });

        Schema::create('sexes', function (Blueprint $table) {
            $table->engine = 'MyISAM';

            $table->increments('id');
            $table->string('sex');
            $table->index('sex');
            $table->string('description');

            $table->timestamps = false;
        });

        Schema::create('horses', function (Blueprint $table) {
            $table->engine = 'MyISAM';
            $table->increments('id');

            $table->string('call_name')->index();
            $table->string('registered_name')->default('');
            $table->string('sex');           
            $table->string('color')->default('');
            $table->string('phenotype')->default('');
            $table->string('grade')->default('All');            
            $table->string('leg_type');          

            $table->string('owner')->default('');            
            $table->string('breeder')->default('');            
            $table->string('hexer')->default('');            

            $table->integer('speed')->default(0); 
            $table->integer('staying')->default(0); 
            $table->integer('stamina')->default(0); 
            $table->integer('breaking')->default(0); 
            $table->integer('power')->default(0); 
            $table->integer('feel')->default(0); 
            $table->integer('fierce')->default(0); 
            $table->integer('tenacity')->default(0); 
            $table->integer('courage')->default(0); 
            $table->integer('response')->default(0); 

            $table->string('pos_ability_1');            
            $table->string('pos_ability_2');
            $table->string('neg_ability_1');
            
            $table->decimal('distance_min', 8, 1);
            $table->decimal('distance_max', 8, 1); 

            $table->string('surface_dirt'); 
            $table->string('surface_turf'); 

            $table->string('bandages')->default('');
            $table->string('neck_height')->default('');
            $table->string('run_style')->default(''); 
            $table->string('hood')->default(''); 
            $table->string('shadow_roll')->default(''); 

            $table->longText('notes')->default(''); 

            $table->string('stall_path')->default('#');
            $table->string('img_path')->default('#');

            $table->foreign('sex')->references('sex')->on('sexes')->onDelete('cascade');;
            $table->foreign('grade')->references('grade')->on('grades')->onDelete('cascade');
            $table->foreign('leg_type')->references('type')->on('leg_types')->onDelete('cascade'); 
            $table->foreign('owner')->references('username')->on('person')->onDelete('cascade'); 
            $table->foreign('breeder')->references('username')->on('person')->onDelete('cascade');
            $table->foreign('hexer')->references('username')->on('person')->onDelete('cascade'); 
            $table->foreign('pos_ability_1')->references('ability')->on('abilities')->onDelete('cascade');
            $table->foreign('pos_ability_2')->references('ability')->on('abilities')->onDelete('cascade');
            $table->foreign('neg_ability_1')->references('ability')->on('abilities')->onDelete('cascade');

            $table->timestamps = false;
        });

        Schema::create('abilities', function (Blueprint $table) {
            $table->engine = 'MyISAM';
            $table->increments('id');
            $table->string('ability')->unique()->index();         
            $table->string('type'); 
            $table->longText('description'); 
            $table->timestamps = false;
        });

        Schema::create('races', function (Blueprint $table) {
            $table->engine = 'MyISAM';
            $table->increments('id');
            $table->string('name');
            $table->string('surface');
            $table->string('grade');
            $table->decimal('distance', 8, 1);
            $table->date('ran_dt')->default( Carbon::createFromFormat('Y-m-d', '1000-01-01'));
            $table->string('url');
            $table->timestamps = false;
        });        


        Schema::create('horses_progeny', function (Blueprint $table) {
            $table->engine = 'MyISAM';
            $table->increments('id');
            $table->integer('horse_id')->unsigned()->index();
            $table->integer('sire_id')->unsigned()->index(); 
            $table->integer('dam_id')->unsigned()->index(); 
            $table->timestamps = false;
        });

        Schema::create('race_entrants', function (Blueprint $table) {
            $table->engine = 'MyISAM';
            $table->increments('id');
            
            $table->integer('horse_id')->unsigned()->index();
            $table->integer('race_id')->unsigned()->index();
            $table->integer('placing');

            $table->foreign('horse_id')->references('id')->on('horses')->onDelete('cascade');
            $table->foreign('race_id')->references('id')->on('races')->onDelete('cascade');

            $table->timestamps = false;
        });

    }//end up

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {

     Schema::dropIfExists('race_entrants');

     Schema::dropIfExists('horses_progeny'); 

     Schema::dropIfExists('races'); 

     Schema::dropIfExists('abilities');

     Schema::dropIfExists('horses');

     Schema::dropIfExists('sexes');

     Schema::dropIfExists('leg_types');

     Schema::dropIfExists('grades');

     Schema::dropIfExists('person');

    }//end down
}
