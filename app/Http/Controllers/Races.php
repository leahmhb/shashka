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
    $races_query = Models\Race::select('id', 'name', 'grade', 'surface', 'distance', 'ran_dt', 'url')
    ->orderBy('ran_dt')
    ->get()->toArray();    

    $races = [    
    'GI' => [],    
    'GII' => [], 
    'GIII' => [], 
    'Open Level' => [], 
    'All' => [],
    ];

    foreach($races_query as $i=>$r){
      $r['entries'] = [];
      foreach($races as $j=>$d){

        if($r['grade'] == $j){ 
          array_push($races[$j], $r);
        }        
      }
    }//end foreach

    $races['OpenLevel'] = $races['Open Level'];
    unset($races['Open Level']);
    
    return view('pages.race_list', ['races' => $races]);
}//end race_list

public function entry_list(){
  $entries_query = Models\Race_Entrant::select('id', 'horse_id', 'race_id', 'placing')
  ->orderBy('horse_id')
  ->get()->toArray();

  $final = [
  '1st' => [], 
  '2nd' => [], 
  '3rd' => [], 
  '4th' => [],
  '5th' => [],
  'Other' => [],
  'TBA' => []
  ];

  $entries = [];

  foreach($entries_query as $e){ //add horse and race info
    $horse = Models\Horse::select('call_name')
    ->where('id', $e['horse_id'])
    ->first()->toArray(); 

    $e['horse_name'] = $horse['call_name'];

    $race = Models\Race::select('name', 'grade', 'surface', 'distance', 'url', 'ran_dt')
    ->where('id', $e['race_id'])
    ->first()->toArray();

    $e['race_name'] = $race['name'];
    $e['race_grade'] = $race['grade'];
    $e['race_surface'] = $race['surface'];
    $e['race_distance'] = $race['distance'];
    $e['race_randt'] = $race['ran_dt'];
    $e['url'] = $race['url'];
    
    array_push($entries, $e);
  }//end foreach

  foreach($entries as $e){ //format
    if($e['placing'] == 1){
      array_push($final['1st'], $e);
    } 
    if ($e['placing'] == 2){
      array_push($final['2nd'], $e);
    } 
    if ($e['placing'] == 3){
      array_push($final['3rd'], $e);
    } 
    if ($e['placing'] == 4){
      array_push($final['4th'], $e);
    } 
    if ($e['placing'] == 5){
      array_push($final['5th'], $e);
    } 
    if ($e['placing'] == 0){
      array_push($final['TBA'], $e);
    } 
    if ($e['placing'] > 5){
      array_push($final['Other'], $e);
      }//end if-else
    }//end foreach

    return view('pages.entry_list', ['entries' => $final]);
  }//end entry_list

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

public function quick_add_race(){
  return view('forms.quick_add_race');
}//end quick_add_race

public function add_race_validate(){
  $data = Base::trimWhiteSpace($_POST);  

  unset($data['_token']);
  Base::output($data);   

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


public function update_race_entrant($entry_id){
  $entry  = Models\Race_Entrant::where('id', $entry_id)->first()->toArray();

  return view('forms.update_race_entrant', ['entry' => $entry, 'validate' => false]);

}//end update_race_entrant

public function update_race_entrant_validate($entry_id){
  $data = $_POST;

  $entry = Models\Race::where('id', $entry_id)->first();
  $entry->horse_name = $data['horse_name'];
  $entry->race_name = $data['race_name'];
  $entry->placing = $data['placing'];
  $entry->save();

  return view('forms.update_race_entrant', ['entry' => $entry, 'validate' => true]);
}//end update_race_entrant_validate


}
