<?php

namespace App\Http\Controllers;
use App\Models as Models;
use View;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Races extends Base{

 public function __construct(){
  View::composers(['App\Composers\HomeComposer'  => ['add_race']]);
  View::composers(['App\Composers\HomeComposer' => ['add_race_entrant']]);
        }//end construct

        public function getDomain(){
         $domain['grades'] = Models\Grade::get()->toArray();
         $domain['races'] = Models\Race::all()->toArray();
         $domain['horses'] = Models\Horse::select('id', 'call_name')->get()->toArray();
         return $domain;
    }//end getDomain

    public function add_race(){
        if(isset($_POST)){
            $race = Models\Race::firstOrCreate($_POST);
        }//end if


        return view('add_race', ['domain' => $this->getDomain()]);
        }//end add_race

        public function add_race_entrant($horse_id){
            if(isset($_POST)){

        }//end if

        $horse = Models\Horse::select('id', 'call_name')->where('id', $horse_id)->first();

        
        return view('add_race_entrant', ['domain' => $this->getDomain(), 'horse' => $horse]);
        }//end add_race



    }
