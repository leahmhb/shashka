<?php
namespace App\Http\Controllers;
use App\Models as Models;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Horses extends Base{

  public function remove_horse($horse_id){
    $horse = Models\Horse::find($horse_id);
    $horse->delete();
    return $this->horse_list();
}//end remove_race

public function horse_list(){
  $horses = Models\Horse::select('call_name', 'registered_name', 'grade', 'owner', 'sex', 'id', 'stall_path')
  ->orderBy('call_name')
  ->get()->toArray();
  return view('pages.horse_list', ['horses' => $horses]);
}//end horse_list

public function quick_horse(){
  return view('modals.quick_horse');
}//end quick_horse

public function quick_horse_validate(Request $request){
  $data = Base::trimWhiteSpace($request->except(['_token']));
  $horse_id = $this->createHorse($data);  
  echo json_encode("Success!");
}//end quick_horse_validate

public function horse($horse_id = false){
  $horse = Models\Horse::where('id', $horse_id)->first();

  if($horse){
    $action = "Update";
  } else {
    $action = "Add";
  }//end if-else

  return view('forms.horse', ['horse' => $horse, 'action' => $action, 'validate' => false]);
}//end horse

public function horse_validate(){
  $action = "";
  $data = Base::trimWhiteSpace($_POST);
  
  $horse = $this->createHorse($data);

  if($data['id'] == 0){
    $action = 'Add';
  } else {
    $action = 'Update';
    
  }//end if-else
  
  return view('forms.horse', ['horse' => $horse, 'action' => $action, 'validate' => true]);
}//end horse_validate

public function stall_page($horse_id){
  $horse = Models\Horse::where('id', $horse_id)->first();

  $abilities = Models\Ability::where('ability', $horse['pos_ability_1'])
  ->orWhere('ability', $horse['pos_ability_2'])
  ->orWhere('ability', $horse['neg_ability_1'])
  ->orderBy('type', 'desc')->get();      

  $parents = $this->getParents($horse_id);
  $offspring = $this->getOffspring($horse_id, $horse['sex']);
  $race_records = $this->getRaceRecords($horse_id);
  
  $entry = Models\Person::select('stable_name', 'racing_colors')->where('username', $horse['owner'])->first();
  $prefix = Models\Person::select('stable_prefix')->where('username', $horse['hexer'])->first();
  $leg_type = Models\Domain_Value::select('description')
  ->where('domain', 'LEG_TYPE')
  ->where('value', $horse['leg_type'])
  ->first();


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
      $offspring[$i]['horse_id'] = $foal['id'];
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
      $offspring[$i]['horse_id'] = $foal['id'];
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
    $sire = Models\Horse::where('id', $record['sire_id'])->first();
    $parents['sire_name'] = $sire['call_name'];
    $parents['sire_link'] = $sire['stall_path'];

    $dam = Models\Horse::where('id', $record['dam_id'])->first();
    $parents['dam_name'] = $dam['call_name'];
    $parents['dam_link'] = $dam['stall_path'];
  }//end if

  return $parents;
}//end getParents

public function getRaceRecords($horse_id){
  $records = [];
  $placings = Models\Race_Entrant::select('id', 'race_id', 'horse_id', 'placing')
  ->where('horse_id', $horse_id)
  ->orderBy('placing')->get();

  foreach($placings as $p){
    $race = Models\Race::select('id', 'series', 'name', 'surface', 'grade', 'distance', 'ran_dt', 'url')
    ->where('id', $p->race_id)->first();
    
    $placement = Base::ordinal($p->placing);
    if($placement == '0th'){
      $placement = 'TBA';
    }//end if
    array_push($records, ['race' => $race, 'placing' => $placement, 'entry_id' => $p->id]);     
  }//end 

  return $records;
}//end getRaceRecords

public function createHorse($data){
  $horse = Models\Horse::firstOrNew(['id' => $data['id']]);

  $horse->call_name = (isset($data['call_name']) ? $data['call_name'] : '');
  $horse->registered_name = (isset($data['registered_name']) ? $data['registered_name'] : '');
  $horse->sex = (isset($data['sex']) ? $data['sex'] : '');
  $horse->color = (isset($data['color']) ? $data['color'] : '');
  $horse->phenotype = (isset($data['phenotype']) ? $data['phenotype'] : '');
  $horse->grade = (isset($data['grade']) ? $data['grade'] : '');

  $horse->owner = (isset($data['owner']) ? $data['owner'] : '');
  $horse->breeder = (isset($data['breeder']) ? $data['breeder'] : '');
  $horse->hexer = (isset($data['hexer']) ? $data['hexer'] : '');

  $horse->pos_ability_1 = (isset($data['pos_ability_1']) ? $data['pos_ability_1'] : '');
  $horse->pos_ability_2 = (isset($data['pos_ability_2']) ? $data['pos_ability_2'] : '');
  $horse->neg_ability_1 = (isset($data['neg_ability_1']) ? $data['neg_ability_1'] : '');

  $horse->distance_min = (isset($data['distance_min']) ? $data['distance_min'] : '');
  $horse->distance_max = (isset($data['distance_max']) ? $data['distance_max'] : '');

  $horse->surface_dirt = (isset($data['surface_dirt']) ? $data['surface_dirt'] : '');
  $horse->surface_turf = (isset($data['surface_turf']) ? $data['surface_turf'] : '');

  $horse->speed = (isset($data['speed']) ? $data['speed'] : '');
  $horse->staying = (isset($data['staying']) ? $data['staying'] : '');
  $horse->stamina = (isset($data['stamina']) ? $data['stamina'] : '');
  $horse->breaking = (isset($data['breaking']) ? $data['breaking'] : '');
  $horse->power = (isset($data['power']) ? $data['power'] : '');
  $horse->feel = (isset($data['feel']) ? $data['feel'] : '');
  $horse->fierce = (isset($data['fierce']) ? $data['fierce'] : '');
  $horse->tenacity = (isset($data['tenacity']) ? $data['tenacity'] : '');
  $horse->courage = (isset($data['courage']) ? $data['courage'] : '');
  $horse->response = (isset($data['response']) ? $data['response'] : '');

  $horse->leg_type = (isset($data['leg_type']) ? $data['leg_type'] : '');
  $horse->neck_height = (isset($data['neck_height']) ? $data['neck_height'] : '');
  $horse->run_style = (isset($data['run_style']) ? $data['run_style'] : '');
  $horse->bandages = (isset($data['bandages']) ? $data['bandages'] : '');
  $horse->hood = (isset($data['hood']) ? $data['hood'] : '');
  $horse->shadow_roll = (isset($data['shadow_roll']) ? $data['shadow_roll'] : '');
  $horse->notes = (isset($data['notes']) ? $data['notes'] : '');

  $horse->stall_img = (isset($data['stall_img']) ? $data['stall_img'] : '');
  $horse->racing_img = (isset($data['racing_img']) ? $data['racing_img'] : '');

  if($horse->owner == "Haubing"){
    $horse->stall_path = "/stall/" . $horse->id;   
  } else {
    $horse->stall_path = (isset($data['stall_path']) ? $data['stall_path'] : '');   
  }//end if

  $horse->save();

  return $horse;
}//end createHorse

}//end class
