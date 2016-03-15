<?php

namespace App\Http\Controllers;
use App\Models as Models;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Races extends Base{
  public function race_list(){
    $races_query = Models\Race::get()->toArray();
    $entries = Models\Race_Entrant::get()->toArray();

    $races = [
    'Open Level' => [], 
    'GIII' => [], 
    'GII' => [], 
    'GI' => []
    ];

    //seperate by grade
    foreach($races_query as $i=>$r){
      foreach($races as $j=>$d){
        if($r['grade'] == $j){
          array_push($races[$j], $r);
        }//end if
    }//end foreach
    }//end foreach


  //echo "<pre>" . print_r($raceData, true) . "</pre>";
    //exit;

    return view('pages.race_list', ['races' => $races, 'entries' => $entries]);
}//end race_list


public function add_race(){
 return view('forms.add_race', ['validate' => false]);
}//end add_race

public function add_race_quick_validate(){
  $data = $_POST;     
  return "Race Quick";
  exit;
  //echo "<pre>" . print_r($data, true) . "</pre>";
  
  //$race = Models\Race::firstOrCreate($data);
}//end add_race_validate

public function add_race_validate(){
  $data = $_POST;     
  $race = Models\Race::firstOrCreate($data);
  return view('forms.add_race', ['validate' => false]);
}//end add_race_validate

public function add_race_entrant($horse_id = false){
  $horse = Models\Horse::select('id', 'call_name')->where('id', $horse_id)->first();
  return view('forms.add_race_entrant', ['horse' => $horse, 'validate' => false]);
}//end add_race_entrant

public function add_race_entrant_validate(){
  $data = $_POST;
  $horse['id'] = $data['horse_id'];
  $entry = Models\Race_Entrant::firstorCreate($data);

  return view('forms.add_race_entrant', ['horse' => $horse, 'validate' => true]);
}//end add_race_entrant



}
