<?php

namespace App\Http\Controllers;
use App\Models as Models;

use Carbon\Carbon;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Races extends Base{

  public function remove_race($race_id){

}//end remove_race

public function remove_entry($entry_id){

}//end remove_entry

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

  public function race($race_id = false){
    $race = [
    'id' => 0,
    'name' => '',
    'surface' => '',
    'distance' => '',
    'grade' => '',
    'ran_dt' => '1000-01-01',
    'url' => ''
    ];

    if($race_id){
      $race = Models\Race::where('id', $race_id)->first();
  }//end if

  if($race){
    $action = "Update";      
  } else {
    $action = "Add";      
  }//end if-else

  return view('forms.race', ['race' => $race, 'action' => $action, 'validate' => false]);
}//end race

public function race_validate($race_id = false){
  $data = Base::trimWhiteSpace($_POST);

  if($data['id'] == -1){
    unset($data['_token']);
  }

  $race = Models\Race::firstOrNew(['id' => $data['id']]);

  if(! isset($data['ran_dt'])){
    $data['ran_dt'] = '1000-01-01';
  }

  $date = Carbon::createFromFormat('Y-m-d', $data['ran_dt'])->startOfDay();

  $race->name = (isset($data['name']) ? $data['name'] : '');
  $race->distance = (isset($data['distance']) ? $data['distance'] : '');
  $race->grade = (isset($data['grade']) ? $data['grade'] : '');
  $race->surface = (isset($data['surface']) ? $data['surface'] : '');
  $race->url = (isset($data['url']) ? $data['url'] : '');
  $race->ran_dt = $date;
  $race->save();

  if($data['id'] != -1){
    return $this->race_list();
  }
}//end update_race_validation

public function race_and_entry(){
  return view('forms.race_and_entry', ['validate' => false]);
}//end race_and_entrant

public function race_and_entry_validate(){
  $data = Base::trimWhiteSpace($_POST); 


  if(! isset($data['ran_dt'])){
    $data['ran_dt'] = '1000-01-01';
  }

  $date = Carbon::createFromFormat('Y-m-d', $data['ran_dt'])->startOfDay();

  $race = Models\Race::firstOrNew([
    'name' => $data['name'],
    'distance' => $data['distance'],
    'surface' => $data['surface'],
    'grade' => $data['grade'],
    ]);

  $race->name = (isset($data['name']) ? $data['name'] : '');
  $race->distance = (isset($data['distance']) ? $data['distance'] : '');
  $race->grade = (isset($data['grade']) ? $data['grade'] : '');
  $race->surface = (isset($data['surface']) ? $data['surface'] : '');
  $race->url = (isset($data['url']) ? $data['url'] : '');
  $race->ran_dt = $date;
  $race->save();

  $entry = Models\Race_Entrant::firstOrNew([
    'horse_id' => $data['horse_id'], 
    'race_id' => $race->id
    ]);

  $entry->horse_id = (isset($data['horse_id']) ? $data['horse_id'] : '');
  $entry->race_id = $race->id;
  $entry->placing = (isset($data['placing']) ? $data['placing'] : '');
  $entry->save();


  return view('forms.race_and_entry', ['validate' => true]);

}//end race_and_entrant_validate


public function quick_race(){
  return view('forms.quick_race');
}//end quick_race


public function race_entrant($horse_id = false, $entry_id = false){
  $entry = [
  'id' => 0,
  'race_id' => 0,
  'horse_id' => 0,
  'placing' => 0
  ];

  if(!$entry_id && $horse_id){
    $entry['horse_id'] = $horse_id;
  } else if ($entry_id && $horse_id){
   $entry  = Models\Race_Entrant::where('id', $entry_id)->first();
  }//end if-else

  if($entry){
    $action = "Update";
  } else {
    $action = "Add";
  }//end if-else

  return view('forms.race_entrant', ['entry' => $entry, 'action' => $action, 'validate' => false]);
}//end race_entrant

public function race_entrant_validate(){
  $action = "";
  $data = Base::trimWhiteSpace($_POST);

  $entry = Models\Race_Entrant::firstOrNew([
    'horse_id' => $data['horse_id'], 
    'race_id' => $data['race_id']
    ]);
  
  $entry->horse_id = (isset($data['horse_id']) ? $data['horse_id'] : '');
  $entry->race_id = (isset($data['race_id']) ? $data['race_id'] : '');
  $entry->placing = (isset($data['placing']) ? $data['placing'] : '');
  $entry->save();

  if($data['id'] == 0){
    $action = 'Add';
  } else {
    $action = 'Update';
  }//end if-else

  return $this->entry_list();

}//end race_entrant_validate


}
