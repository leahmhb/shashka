<?php
namespace App\Http\Controllers;
use App\Models as Models;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Horses extends Base{
  public function horse_list(){
    $horse = Models\Horse::get()->toArray();
    return view('pages.horse_list', ['horse' => $horse]);
}//end horse_list

public function quick_horse(){
  return view('forms.quick_horse');
}

public function horse($horse_id = false){
  $horse = Models\Horse::where('id', $horse_id)->first();

  if($horse){
    $action = "Update";
  } else {
    $action = "Add";
  }
  return view('forms.horse', ['horse' => $horse, 'action' => $action, 'validate' => false]);
}//end horse

public function horse_validate(){
  $action = "";
  $data = Base::trimWhiteSpace($_POST);

  $horse = Models\Horse::firstOrNew(['id' => $data['id']]);

  $horse->call_name = $data['call_name'];
  $horse->registered_name = $data['registered_name'];
  $horse->sex = $data['sex'];
  $horse->color = $data['color'];
  $horse->phenotype = $data['phenotype'];
  $horse->grade = $data['grade'];

  $horse->owner = $data['owner'];
  $horse->breeder = $data['breeder'];
  $horse->hexer = $data['hexer'];

  $horse->pos_ability_1 = $data['pos_ability_1'];
  $horse->pos_ability_2 = $data['pos_ability_2'];
  $horse->neg_ability_1 = $data['neg_ability_1'];

  $horse->distance_min = $data['distance_min'];
  $horse->distance_max = $data['distance_max'];

  $horse->surface_dirt = $data['surface_dirt'];
  $horse->surface_turf = $data['surface_turf'];

  $horse->speed = $data['speed'];
  $horse->staying = $data['staying'];
  $horse->stamina = $data['stamina'];
  $horse->breaking = $data['breaking'];
  $horse->power = $data['power'];
  $horse->feel = $data['feel'];
  $horse->fierce = $data['fierce'];
  $horse->tenacity = $data['tenacity'];
  $horse->courage = $data['courage'];
  $horse->response = $data['response'];

  $horse->leg_type = $data['leg_type'];
  $horse->neck_height = $data['neck_height'];
  $horse->run_style = $data['run_style'];
  $horse->bandages = $data['bandages'];
  $horse->hood = $data['hood'];
  $horse->shadow_roll = $data['shadow_roll'];
  $horse->notes = $data['notes'];

  if($horse->owner == "Haubing"){
    $horse->stall_path = "/stall/" . $horse->id;
    $horse->img_path = "http://leahmhb.info/stall_img/" .$horse->call_name . ".png";
    $horse->save();
  }//end if

  $horse->save();

  if($data['id'] == 0){
    $action = 'Add';
  } else {
    $action = 'Create';
  }

  return view('forms.horse', ['horse' => $horse, 'action' => $action, 'validate' => true]);
}//end horse_validate

public function stall_page($horse_id){
  $horse = Models\Horse::where('id', $horse_id)->first();

  $abilities = Models\Ability::where('ability', $horse['pos_ability_1'])
  ->orWhere('ability', $horse['pos_ability_2'])
  ->orWhere('ability', $horse['neg_ability_1'])
  ->orderBy('type', 'desc')
  ->get();      

  $parents = $this->getParents($horse_id);
  $offspring = $this->getOffspring($horse_id, $horse['sex']);
  $race_records = $this->getRaceRecords($horse_id);

  $entry = Models\Person::select('stable_name', 'racing_colors')->where('username', $horse['owner'])->first();
  $prefix = Models\Person::select('stable_prefix')->where('username', $horse['hexer'])->first();

  $leg_type = Models\Leg_Type::select('description')->where('type', $horse['leg_type'])->first();

  return view('pages.stall', [
    'horse' => $horse,               
    'abilities' => $abilities,
    'offspring' => $offspring, 
    'parents' => $parents, 
    'race_records' => $race_records,
    'prefix' => $prefix,
    'leg_type' => $leg_type,
    'entry' => $entry
    ]);
}//end stall

public function getOffspring($horse_id, $sex){ 
  $offspring = [];

  if($sex == 'Stallion'){
    $offspring = Models\Horse_Progeny::where('sire_id', $horse_id)->get();

    foreach($offspring as $i=>$o){
      $foal = Models\Horse::where('id', $o['horse_id'])->first();
      $offspring[$i]['horse_name'] = $foal['call_name'];
      $offspring[$i]['horse_link']= $foal['stall_path'];

      $dam = Models\Horse::where('id', $o['dam_id'])->first();
      $offspring[$i]['dam_name'] = $dam['call_name'];
      $offspring[$i]['dam_link'] = $dam['stall_path'];
    }//end foreach

  } else if($sex == 'Mare'){
    $offspring = Models\Horse_Progeny::where('dam_id', $horse_id)->get();

    foreach($offspring as $i=>$o){
      $foal = Models\Horse::where('id', $o['horse_id'])->first();
      $offspring[$i]['horse_name'] = $foal['call_name'];
      $offspring[$i]['horse_link']= $foal['stall_path'];

      $sire = Models\Horse::where('id', $o['sire_id'])->first();
      $offspring[$i]['sire_name'] = $sire['call_name'];
      $offspring[$i]['sire_link'] = $sire['stall_path'];
      }//end foreach
  }//end if-else  

  return $offspring;
}//end getOffspring

public function getParents($horse_id){
  $record = Models\Horse_Progeny::where('horse_id', $horse_id)->first();
  $parents = [];

  if($record){ //exists
    $sire = Models\Horse::where('id', $record['sire_id'])
    ->first();
    $parents['sire_name'] = $sire['call_name'];
    $parents['sire_link'] = $sire['stall_path'];

    $dam = Models\Horse::where('id', $record['dam_id'])
    ->first();
    $parents['dam_name'] = $dam['call_name'];
    $parents['dam_link'] = $dam['stall_path'];
  }//end if

  return $parents;

}//end getParents

public function getRaceRecords($horse_id){
  $records = [];
  $placings = Models\Race_Entrant::select('id', 'race_id', 'horse_id', 'placing')
  ->where('horse_id', $horse_id)
  ->orderBy('placing')
  ->get()->toArray();

  foreach($placings as $p){
    $race = Models\Race::select('id', 'name', 'surface', 'grade', 'distance', 'ran_dt', 'url')
    ->where('id', $p['race_id'])->first()->toArray();
    
    $placement = Base::ordinal($p['placing']);
    if($placement == '0th'){
      $placement = 'TBA';
    }

    array_push($records, ['race' => $race, 'placing' => $placement]);     
  }//end foreach

  return $records;
}//end getRaceRecords


}//end class
