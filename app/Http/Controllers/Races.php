<?php

namespace App\Http\Controllers;
use App\Models as Models;

use Carbon\Carbon;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Races extends Base{

/*
|--------------------------------------------------------------------------
| Table Controls
|--------------------------------------------------------------------------
*/

public function race_table($grade = false, $surface = false, $series = false, $distance = false){
  $races = Models\Race::select('id', 'series',  'name', 'grade', 'surface', 'distance', 'ran_dt', 'url')
  ->orderBy('name', 'desc');

  if($grade && $grade != 0){
    $races->where('grade', $grade);
  }

  if($surface && $surface != 0){
    $races->where('surface', $surface);
  }

  if($series && $series != 0){
    $races->where('series', $series);
  }

  if($distance && $distance != 5){
    $races->where('distance', $distance);
  }

  if($races){

    $races = $races->get(); 

    foreach($races as $i=>$r){
      $races[$i]['grade'] = Models\Domain_Value::where('id', $r['grade'])->first()['value'];
      $races[$i]['surface'] = Models\Domain_Value::where('id', $r['surface'])->first()['value'];    

      if($r['series'] != 44){
        $races[$i]['series'] = Models\Domain_Value::where('id', $r['series'])->first()['description'];
      } else {
       $races[$i]['series'] = '';
    }//end if

  }//end foreach

}//end if

return view('tables.races', [
  'races' => $races,
  'grade' => $grade,
  'surface' => $surface,
  'series' => $series,
  'distance' => $distance,
  'domain' => $this->racesTableDomain()
  ]);
}//end race_table


public function race_table_validate(){
  $data = Base::trimWhiteSpace($_POST);


  return redirect()->route('race_table', 
    [
    'grade' => $data['grade'],
    'surface' => $data['surface'],
    'series' => $data['series'],
    'distance' => $data['distance']
    ]
    );


  }//end race_table_validate


  public function entry_table($race = false, $placing = false, $horse = false, $owner = false){
    $entries = [];

    $entries_query = Models\Race_Entry::select('id', 'horse_id', 'race_id', 'placing')
    ->orderBy('placing');

    if($owner && $owner != '0'){ 
      $horses = array_values(Models\Horse::select('id')->where('owner', $owner)->get()->toArray());
      $entries_query->whereIn('horse_id', $horses);
    }//end if

    if($horse && $horse != '0'){
      $entries_query->where('horse_id', $horse);
    }//end if

    if($placing && $placing != '0'){
      $entries_query->where('placing', $placing);
    }//end if

    if($race && $race != '0'){
      $entries_query->where('race_id', $race);
    }//end if

    if($entries_query){

      $entries_query = $entries_query->get();

        foreach($entries_query as $i=>$e){ //add horse and race info
          $ordinal_place =  Base::ordinal($e['placing']);

          if($ordinal_place == '0th'){
            $ordinal_place = 'TBA';
          }//end if

          $e['placing'] = $ordinal_place;

          $horse_tmp = Models\Horse::select('call_name')
          ->where('id', $e['horse_id'])->first(); 

          $e['horse_name'] = $horse_tmp['call_name'];

          $race_tmp = Models\Race::where('id', $e['race_id'])->first();

          $e['race_name'] = $race_tmp->name;
          $e['race_distance'] = $race_tmp->distance;
          $e['race_randt'] = $race_tmp->ran_dt;
          $e['url'] = $race_tmp->url;     

          $entries_query[$i]['race_grade'] = Models\Domain_Value::where('domain', 'GRADE')
          ->where('id', $race_tmp->grade)->first()['value'];

          $entries_query[$i]['race_surface'] = Models\Domain_Value::where('domain', 'SURFACE')
          ->where('id', $race_tmp->surface)->first()['value'];

          $entries_query[$i]['race_series'] = Models\Domain_Value::where('domain', 'RACE_SERIES')
          ->where('id', $race_tmp->series)->first()['description'];

          if($race_tmp->series != 44){
           $entries_query[$i]['race_series'] = Models\Domain_Value::where('domain', 'RACE_SERIES')
           ->where('id', $race_tmp->series)->first()['description'];
         } else {
          $entries_query[$i]['race_series'] = '';
    }//end if

    array_push($entries, $e);    
        }//end foreach
    }//end if



    return view('tables.entries', [
      'entries' => $entries, 
      'race' => $race,
      'placing' => $placing,
      'horse' => $horse,
      'owner' => $owner,
      'domain' => $this->entriesTableDomain()
      ]);
  }//end entry_table

  public function entry_table_validate(){
    $data = Base::trimWhiteSpace($_POST);

    return redirect()->route('entry_table', 
      [
      'race' => $data['race'],
      'placing' => $data['placing'],
      'horse' => $data['horse'],
      'owner' => $data['owner']
      ]
      );
  }//end entry_table_validate


  public function entriesTableDomain(){

    $domain = [];

    $domain['person'] = Models\Person::select('id', 'username')->orderBy('username', 'asc')->get();

    $races = Models\Race::orderBy('name')->get()->toArray();

    foreach($races as $i=>$r){   
      $races[$i]['series'] = Models\Domain_Value::where('domain', 'RACE_SERIES')->where('id', $r['series'])->first()['description'];   
      $races[$i]['surface'] = Models\Domain_Value::where('domain', 'SURFACE')->where('id', $r['surface'])->first()['value'];
      $races[$i]['grade'] = Models\Domain_Value::where('domain', 'GRADE')->where('id', $r['grade'])->first()['value'];      
    }

    $domain['horses']  = Models\Horse::select('id', 'call_name')->orderBy('call_name')->get()->toArray();

    $domain['races'] = $races;

    return $domain;
  }//end entriesTableDomain


  public function racesTableDomain(){
    $domain = [];

    $domain['series'] = Models\Domain_Value::where('domain', 'RACE_SERIES')->get()->toArray();   
    $domain['surface'] = Models\Domain_Value::where('domain', 'SURFACE')->get()->toArray();
    $domain['grade'] = Models\Domain_Value::where('domain', 'GRADE')->get()->toArray();   



    return $domain;
  }//end racesTableDomain

/*
|--------------------------------------------------------------------------
| Form Controls
|--------------------------------------------------------------------------
*/

public function race($race_id = false){
  $race = Models\Race::where('id', $race_id)->first();
  $title = 'Create Race';

  if($race){
    $title = 'Edit '. $race->name; 
  }

  return view('pages.race', [
    'race' => $race, 
    'options' => Base::getRaceDomain('%'), 
    'title' => $title,
    'validate' => false
    ]);
  }//end race

  public function race_validate(){
    $data = Base::trimWhiteSpace($_POST);
    $race = $this->createRace($data);

    if($data['id'] != 0){    
      return redirect()->route('race_table');
    }//end if-else

    return redirect()->route('race');
  }//end update_race_validation


  public function entry($horse_id = false, $entry_id = false){
    $entry  = Models\Race_Entry::where('id', $entry_id)->first();

    if($entry){
      $horse = Models\Horse::where('id', $horse_id)->first();
      $ownerCheck = Users::verifyOwner($horse);
    } else { 
      $entry['id'] = '';
      $entry['race_id'] = '';
      $entry['horse_id'] = '';
      $entry['placing'] = '';

      if($horse_id){
        $entry['horse_id'] = $horse_id;
      }//end if

    }//end if-else

    return view('pages.entry', [
      'options' => base::getRaceDomain(Users::getPerson()['id']),
      'entry' => $entry, 
      'validate' => false
      ]);
  }//end entry

  public function entry_validate(){
    $data = Base::trimWhiteSpace($_POST);

    $entry = $this->createEntry($data);

    return redirect()->route('stall', ['horse_id' => $data['horse_id']]);
  }//end entry_validate


/*
|--------------------------------------------------------------------------
| Utility Controls
|--------------------------------------------------------------------------
*/

public function createEntry($data){
  $entry = Models\Race_Entry::firstOrNew([
    'horse_id' => $data['horse_id'], 
    'race_id' => $data['race_id']
    ]);

  $entry->horse_id = (!empty($data['horse_id']) ? $data['horse_id'] : '');
  $entry->race_id = (!empty($data['race_id']) ? $data['race_id'] : '');
  $entry->placing = (!empty($data['placing']) ? $data['placing'] : '');
  $entry->save();

  return $entry;
  }//end createEntry

  public function createRace($data){
    $race = Models\Race::firstOrNew([
      'id' => $data['id']
      ]);

    if(!$data['ran_dt']){
      $data['ran_dt'] = '1000-01-01';
    }//end if

    $date = Carbon::createFromFormat('Y-m-d', $data['ran_dt'])->startOfDay();
    
    $race->series = (!empty($data['series']) ? $data['series'] : '');
    $race->name = (!empty($data['name']) ? $data['name'] : '');
    $race->distance = (!empty($data['distance']) ? $data['distance'] : '');
    $race->grade = (!empty($data['grade']) ? $data['grade'] : '');
    $race->surface = (!empty($data['surface']) ? $data['surface'] : '');
    $race->url = (!empty($data['url']) ? $data['url'] : '');
    $race->ran_dt = $date;
    $race->save();

    return $race;
  }//end createRace


  public function remove_race($race_id){
    $race = Models\Race::find($race_id); 

    if(empty($_POST)){
      $entries = Models\Race_Entry::where('race_id',$race_id)->get();
      return view('pages.remove_race', [
        'race' => $race,
        'entries' => $entries   
        ]);
    } else {

      $race->delete();

      $entries = Models\Race_Entry::where('race_id', $race_id);
      $entries->delete();

      return redirect()->route('race_table');
    }
  }//end remove_race

  public function remove_entry($entry_id){
    $entry = Models\Race_Entry::find($entry_id);

    $horse = Models\Horse::find($entry->horse_id);
    Users::verifyOwner($horse);

    if(empty($_POST)){
      $entry['horse'] = Models\Horse::select('call_name')->where('id', $entry->horse_id)->first();
      $entry['race'] = Models\Race::select('name', 'series')->where('id', $entry->race_id)->first();

      return view('pages.remove_entry', [
        'entry' => $entry   
        ]);
    } else {
      $entry->delete();
      return redirect()->route('entry_table');

    }
  }//end remove_entry

}//end class
