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
    $race = Models\Race::find($race_id);    
    $race->delete();

    $entries = Models\Race_Entrant::where('race_id', $race_id);
    $entries->delete();

    return $this->race_list();
}//end remove_race

public function remove_entry($entry_id){
  $entry = Models\Race_Entrant::find($entry_id);
  $entry->delete();
  return $this->entry_list();
}//end remove_entry

public function race_list($active_id = false){
  $races_query = Models\Race::select('id', 'series',  'name', 'grade', 'surface', 'distance', 'ran_dt', 'url')
  ->orderBy('ran_dt', 'desc')->get();    
  
  return view('pages.race_list', ['races' => $races_query, 'active_id' => $active_id]);
}//end race_list

public function entry_list($active_id = false){
  $entries = [];

  $entries_query = Models\Race_Entrant::select('id', 'horse_id', 'race_id', 'placing')
  ->orderBy('placing')->get();

  foreach($entries_query as $e){ //add horse and race info
    $horse = Models\Horse::select('call_name')
    ->where('id', $e['horse_id'])->first(); 

    $e['horse_name'] = $horse['call_name'];

    $race = Models\Race::select('series', 'name', 'grade', 'surface', 'distance', 'url', 'ran_dt')
    ->where('id', $e['race_id'])->first();

      $e['race_series'] = $race->series;
      $e['race_name'] = $race->name;
      $e['race_grade'] = $race->grade;
      $e['race_surface'] = $race->surface;
      $e['race_distance'] = $race->distance;
      $e['race_randt'] = $race->ran_dt;
      $e['url'] = $race->url;      

    array_push($entries, $e);

    

  }//end foreach

  return view('pages.entry_list', ['entries' => $entries, 'active_id' => $active_id]);
  }//end entry_list

  public function race($race_id = false){
    $race = [
    'id' => '',
    'series' => '',
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

  if($race_id){
    $action = "Update";      
  } else {
    $action = "Add";      
  }//end if-else

  return view('forms.race', ['race' => $race, 'action' => $action, 'validate' => false]);
}//end race

public function race_validate($race_id = false){
  $data = Base::trimWhiteSpace($_POST);

  $race = $this->createRace($data);
  return $this->race_list($race->id);
}//end update_race_validation

public function race_and_entry(){
  return view('forms.race_and_entry', ['validate' => false]);
}//end race_and_entrant

public function race_and_entry_validate(){
  $data = Base::trimWhiteSpace($_POST); 

  $race = $this->createRace($data);
  $data['race_id'] = $race->id;
  $entry = $this->createEntry($data);

  return view('forms.race_and_entry', ['validate' => true]);
}//end race_and_entrant_validate


public function quick_race(){
  return view('forms.quick_race');
}//end quick_race

public function quick_race_validate(Request $request){
  $data = Base::trimWhiteSpace($request->except(['_token']));
  $race = $this->createRace($data);
  echo json_encode("Success!");
}//end quick_race_validate

public function race_entry($horse_id = false, $entry_id = false){
  $entry = [
  'id' => '',
  'race_id' => '',
  'horse_id' => '',
  'placing' => ''
  ];

  if(!$entry_id && $horse_id){
    $entry['horse_id'] = $horse_id;
  } else if ($entry_id && $horse_id){
   $entry  = Models\Race_Entrant::where('id', $entry_id)->first();
  }//end if-else

  if($entry_id){
    $action = "Update";
  } else {
    $action = "Add";
  }//end if-else

  return view('forms.race_entry', ['entry' => $entry, 'action' => $action, 'validate' => false]);
}//end race_entrant

public function race_entry_validate(){
  $action = "";
  $data = Base::trimWhiteSpace($_POST);

  $entry = $this->createEntry($data);

  if($data['id'] == 0){
    $action = 'Add';
  } else {
    $action = 'Update';
  }//end if-else

  return view('forms.race_entry', ['entry' => $entry, 'action' => $action, 'validate' => true]);
}//end race_entrant_validate

public function createEntry($data){
  $entry = Models\Race_Entrant::firstOrNew([
    'horse_id' => $data['horse_id'], 
    'race_id' => $data['race_id']
    ]);
  
  $entry->horse_id = (isset($data['horse_id']) ? $data['horse_id'] : '');
  $entry->race_id = (isset($data['race_id']) ? $data['race_id'] : '');
  $entry->placing = (isset($data['placing']) ? $data['placing'] : '');
  $entry->save();

  return $entry;
}//end createEntry

public function createRace($data){

  $race = Models\Race::firstOrNew([
    'name' => $data['name'],
    'distance' => $data['distance'],
    'surface' => $data['surface'],
    'grade' => $data['grade'],
    ]);

  if(!$data['ran_dt']){
    $data['ran_dt'] = '1000-01-01';
  }

  $date = Carbon::createFromFormat('Y-m-d', $data['ran_dt'])->startOfDay();
  
  $race->series = (isset($data['series']) ? $data['series'] : '');
  $race->name = (isset($data['name']) ? $data['name'] : '');
  $race->distance = (isset($data['distance']) ? $data['distance'] : '');
  $race->grade = (isset($data['grade']) ? $data['grade'] : '');
  $race->surface = (isset($data['surface']) ? $data['surface'] : '');
  $race->url = (isset($data['url']) ? $data['url'] : '');
  $race->ran_dt = $date;
  $race->save();

  return $race;
}//end createRace

}
