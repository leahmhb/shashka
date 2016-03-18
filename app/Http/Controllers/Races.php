<?php

namespace App\Http\Controllers;
use App\Models as Models;

use Carbon\Carbon;

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

    foreach($races_query as $i=>$r){foreach($races as $j=>$d){if($r['grade'] == $j){ array_push($races[$j], $r);}}}//end foreach

    return view('pages.race_list', ['races' => $races, 'entries' => $entries]);
}//end race_list

public function update_race($race_id){
  $race = Models\Race::where('id', $race_id)->first()->toArray();
  return view('forms.update_race', ['race' => $race, 'validate' => false]);
}//end update_race

public function update_race_validate($race_id){
  $data = Base::trimWhiteSpace($_POST);

  $date = Carbon::createFromFormat('Y-m-d', $data['ran_dt'])
  ->startOfDay();

  $race = Models\Race::where('id', $race_id)->first();
  $race->name = $data['name'];
  $race->ran_dt = $date;
  $race->surface = $data['surface'];
  $race->distance = $data['distance'];
  $race->grade = $data['grade'];
  $race->save();

  return $this->race_list();
}//end update_race_validation

public function add_race_and_entry(){
  return view('forms.add_race_and_entry', ['validate' => false]);
}//end add_race_and_entrant

public function add_race_and_entry_validate(){
  $data = Base::trimWhiteSpace($_POST);     

  $date = Carbon::createFromFormat('Y-m-d', $data['ran_dt'])
  ->startOfDay();

  $race = new Models\Race;
  $race->name = $data['name'];
  $race->distance = $data['distance'];
  $race->grade = $data['grade'];
  $race->surface = $data['surface'];
  $race->url = $data['url'];
  $race->ran_dt = $date;
  $race->save();

  $entry = new Models\Race_Entrant;
  $entry->horse_id = $data['horse_id'];
  $entry->race_id = $race->id;
  $entry->placing = $data['placing'];
  $entry->save();

  return view('forms.add_race_and_entry', ['validate' => true]);
}//end add_race_and_entrant_validate

public function add_race(){
  return view('forms.add_race', ['validate' => false]);
}//end add_race

public function add_race_quick_validate(){
  $data = Base::trimWhiteSpace($_POST); 

  return "Race Quick";
  exit;
}//end add_race_validate

public function add_race_validate(){
  $data = Base::trimWhiteSpace($_POST);     

  $date = Carbon::createFromFormat('Y-m-d', $data['ran_dt'])
  ->startOfDay();

  $race = Models\Race::firstOrCreate($data);

  $race->ran_dt = $date;
  $race->save();

  return view('forms.add_race', ['validate' => true]);
}//end add_race_validate

public function add_race_entrant($horse_id = false){
  $horse = Models\Horse::select('id', 'call_name')->where('id', $horse_id)->first();
  return view('forms.add_race_entrant', ['horse' => $horse, 'validate' => false]);
}//end add_race_entrant

public function add_race_entrant_validate(){
  $data = Base::trimWhiteSpace($_POST);
  
  $horse['id'] = $data['horse_id'];
  $entry = Models\Race_Entrant::firstorCreate($data);

  return view('forms.add_race_entrant', ['horse' => $horse, 'validate' => true]);
}//end add_race_entrant



}
