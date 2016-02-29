<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->string('username')->unique();  
            $table->index('username');          
            $table->string('stable_name')->default('');
            $table->string('stable_prefix')->default('');
            $table->timestamps();
        });

        Schema::create('grades', function (Blueprint $table) {
            $table->engine = 'MyISAM';
            $table->increments('id');            
            $table->string('grade')->unique(); 
            $table->index('grade');
            $table->string('description'); 
            $table->timestamps();
        });

        Schema::create('leg_types', function (Blueprint $table) {
            $table->engine = 'MyISAM';
            $table->increments('id');
            $table->string('type')->unique(); 
            $table->index('type');
            $table->longText('description'); 
            $table->timestamps();
        });

        Schema::create('sexes', function (Blueprint $table) {
            $table->engine = 'MyISAM';
            $table->increments('id');
            $table->string('sex');
            $table->index('sex');
            $table->string('description');
            $table->timestamps();
        });

        Schema::create('horses', function (Blueprint $table) {
            $table->engine = 'MyISAM';
            $table->increments('id');
            $table->string('call_name');
            $table->string('registered_name')->unique();
            $table->string('sex');
            $table->foreign('sex')->references('sex')->on('sexes')->onDelete('cascade');;
            $table->string('color');
            $table->string('phenotype');
            $table->string('grade')->default('Open Level');
            $table->foreign('grade')->references('grade')->on('grades')->onDelete('cascade'); 
            $table->string('leg_type');
            $table->foreign('leg_type')->references('type')->on('leg_types')->onDelete('cascade');
            $table->integer('speed')->default(50); 
            $table->integer('staying')->default(50); 
            $table->integer('stamina')->default(50); 
            $table->integer('breaking')->default(50); 
            $table->integer('power')->default(50); 
            $table->integer('feel')->default(50); 
            $table->integer('fierce')->default(50); 
            $table->integer('tenacity')->default(50); 
            $table->integer('courage')->default(50); 
            $table->integer('response')->default(50); 
            $table->integer('distance_min'); 
            $table->integer('distance_max'); 
            $table->string('surface_dirt'); 
            $table->string('surface_turf'); 
            $table->string('bandages')->default('None');
            $table->string('neck_height')->default('Normal');
            $table->string('run_style')->default('Normal'); 
            $table->string('hood')->default('No'); 
            $table->string('shadow_roll')->default('No'); 
            $table->timestamps();
        });

        Schema::create('abilities', function (Blueprint $table) {
            $table->engine = 'MyISAM';
            $table->increments('id');
            $table->string('ability')->unique()->index();
            $table->index('ability'); 
            $table->string('type'); 
            $table->longText('description'); 
            $table->timestamps();
        });

        Schema::create('races', function (Blueprint $table) {
            $table->engine = 'MyISAM';
            $table->increments('id');
            $table->string('name');
            $table->string('surface');
            $table->string('grade');
            $table->integer('distance');
            $table->date('ran_dt');
            $table->timestamps();
        });
        
        Schema::create('horses_person', function (Blueprint $table) {
          $table->engine = 'MyISAM';
          $table->increments('id');
          $table->integer('horse_id')->unique()->unsigned()->index();
          $table->foreign('horse_id')->references('id')->on('horses')->onDelete('cascade');
          $table->string('owner');
          $table->foreign('owner')->references('username')->on('person')->onDelete('cascade'); 
          $table->string('breeder');
          $table->foreign('breeder')->references('username')->on('person')->onDelete('cascade');
          $table->string('hexer');
          $table->foreign('hexer')->references('username')->on('person')->onDelete('cascade');  
          $table->timestamps();
        });

        Schema::create('horses_abilities', function (Blueprint $table) {
            $table->engine = 'MyISAM';
            $table->increments('id');
            $table->integer('horse_id')->unique()->unsigned()->index();
            $table->index('horse_id');
            $table->foreign('horse_id')->references('id')->on('horses')->onDelete('cascade');
            $table->string('pos_ability_1');
            $table->foreign('pos_ability_1')->references('ability')->on('abilities')->onDelete('cascade');
            $table->string('pos_ability_2');
            $table->foreign('pos_ability_2')->references('ability')->on('abilities')->onDelete('cascade');
            $table->string('neg_ability_1');
            $table->foreign('neg_ability_1')->references('ability')->on('abilities')->onDelete('cascade');
            $table->timestamps();
        });

        Schema::create('horses_progeny', function (Blueprint $table) {
            $table->engine = 'MyISAM';
            $table->increments('id');
            $table->integer('horse_id')->unsigned()->index();    
            $table->string('horse_name')->default('Offspring');
            $table->string('horse_link')->default('#');        
            $table->integer('sire_id')->unsigned();
            $table->string('sire_name')->default('Foundation');
            $table->string('sire_link')->default('#');
            $table->integer('dam_id')->unsigned();
            $table->string('dam_name')->default('Foundation');
            $table->string('dam_link')->default('#');
            $table->timestamps();
        });

        Schema::create('race_entrants', function (Blueprint $table) {
            $table->engine = 'MyISAM';
            $table->increments('id');
            $table->integer('horse_id')->unsigned()->index();
            $table->foreign('horse_id')->references('id')->on('horses')->onDelete('cascade');
            $table->integer('race_id')->unsigned()->index();
            $table->foreign('race_id')->references('id')->on('races')->onDelete('cascade');
            $table->integer('placing');
            $table->timestamps();
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

     Schema::dropIfExists('horses_abilites');
     
      Schema::dropIfExists('horses_person');

     Schema::dropIfExists('races'); 

     Schema::dropIfExists('abilities');

     Schema::dropIfExists('horses');

     Schema::dropIfExists('sexes');

     Schema::dropIfExists('leg_types');

     Schema::dropIfExists('grades');

     Schema::dropIfExists('person');

    }//end down
}
