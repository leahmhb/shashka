<?php
namespace App\Http\Controllers;
use App\Models as Models;
use Input;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Horses extends Base{

/*
|--------------------------------------------------------------------------
| Table Controls
|--------------------------------------------------------------------------
*/

public function horse_table($owner = false, $breeding_status = false, $sex = false, $grade = false){
  $horses = Models\Horse::orderBy('id', 'desc');

  if($owner != "false" && $owner && $owner != '0'){
    $horses->where('owner', $owner);
  }//end if

  if($breeding_status != "false" && $breeding_status && $breeding_status != '0'){
    $horses->where('breeding_status', $breeding_status);
}//end if

if($sex != "false" && $sex && $sex != '0'){
  $horses->where('sex', $sex);    
}//end if

if($grade != "false" && $grade && $grade != '0'){
  $horses->where('grade', $grade);  
}//end if


if($horses){
  $horses = $horses->get()->toArray();

  foreach($horses as $i=>$h){
    $horses[$i]['breeding_status'] = Models\Domain_Value::where('id', $h['breeding_status'])->first()['value'];

    $horses[$i]['pos_ability_1'] = Models\Ability::where('id', $h['pos_ability_1'])->first()['ability'];
    $horses[$i]['pos_ability_2'] = Models\Ability::where('id', $h['pos_ability_2'])->first()['ability'];
    $horses[$i]['neg_ability_1'] = Models\Ability::where('id', $h['neg_ability_1'])->first()['ability'];

    $horses[$i]['surface_dirt'] = Models\Domain_Value::where('id', $h['surface_dirt'])->first()['value'];
    $horses[$i]['surface_turf'] = Models\Domain_Value::where('id', $h['surface_turf'])->first()['value'];

    $horses[$i]['grade'] = Models\Domain_Value::where('id', $h['grade'])->first()['value'];
    $horses[$i]['sex'] = Models\Domain_Value::where('id', $h['sex'])->first()['value'];
    $horses[$i]['owner'] = Models\Person::where('id', $h['owner'])->first()['username'];

    foreach($horses[$i] as $j=>$v){     
      if($v == 'Unknown'){
        $horses[$i][$j] = '';
      }
    }//end foreach


  }//end foreach
  
  }//end if

  return view('tables.horses', [
    'horses' => $horses, 
    'owner' => $owner, 
    'breeding_status' => $breeding_status, 
    'sex' => $sex, 
    'grade' => $grade, 
    'domain' => Base::getHorseDomain()
    ]);
}//end horse_table

public function horse_table_validate(){
  $data = Base::trimWhiteSpace($_POST);

  return redirect()->route('horse_table', 
    [
    'owner' => $data['owner'], 
    'breeding_status' => $data['breeding_status'],
    'sex' => $data['sex'],
    'grade' => $data['grade']
    ]
    );
  
}//end horses_table_validate

/*
|--------------------------------------------------------------------------
| Form Controls
|--------------------------------------------------------------------------
*/

public function horse($horse_id = false){
  $horse = Models\Horse::where('id', $horse_id)->first();
  $owner = '';
  $title = 'Create Horse';

  if($horse){
    $horse = $horse->toArray();
    Users::verifyOwner($horse);
    $title = 'Edit '. $horse['call_name'];
  } else {  
    $owner = Users::getPerson();
    if($owner['id'] == '%'){
      $owner = false;
    }//end if
  }//end if-else

  return view('pages.horse', [
   'domain' => Base::getHorseDomain(), 
   'horse' => $horse, 
   'owner' => $owner,
   'title' => $title,
   'validate' => false
   ]);
}//end horse

public function horse_validate(){
  $data = Base::trimWhiteSpace($_POST);


  Users::verifyOwner($data);
  $horse = $this->createHorse($data);
  return redirect()->route('stall', ['horse_id' => $horse->id]);
}//end horse_validate

/*
|--------------------------------------------------------------------------
| Stall Controls
|--------------------------------------------------------------------------
*/

public function stall($horse_id){
  $horse = Models\Horse::where('id', $horse_id)->first();

  $abilities = Models\Ability::where('id', $horse['pos_ability_1'])
  ->orWhere('id', $horse['pos_ability_2'])
  ->orWhere('id', $horse['neg_ability_1'])
  ->orderBy('type', 'desc')->get();     

  $data = $this->generateStall($horse);

  $parents = $this->getParents($horse_id);
  $offspring = $this->getOffspring($horse_id, $horse['sex']);
  $race_records = $this->getRaceRecords($horse_id); 

  return view('pages.stall', [
    'horse' => $horse,               
    'abilities' => $abilities,
    'offspring' => $offspring, 
    'parents' => $parents, 
    'race_records' => $race_records,
    'data' => $data
    ]);
}//end stall

/*
|--------------------------------------------------------------------------
| Create Controls
|--------------------------------------------------------------------------
*/

public function generateStall($horse){
  $data = [];
  $data['sex'] = Models\Domain_Value::where('id', $horse->sex)->first()['value'];

  $data['breeding_status'] = Models\Domain_Value::where('id', $horse->breeding_status)->first()['value'];
  $data['grade'] = Models\Domain_Value::where('id', $horse->grade)->first()['description'];

  $data['owner'] = Models\Person::where('id', $horse->owner)->first();
  $data['breeder'] = Models\Person::select('username')->where('id', $horse->breeder)->first()['username'];
  $data['hexer'] = Models\Person::where('id', $horse->hexer)->first();

  $data['surface_dirt'] = Models\Domain_Value::where('id', $horse->surface_dirt)->first()['value']; 
  $data['surface_turf'] = Models\Domain_Value::where('id', $horse->surface_turf)->first()['value']; 

  $data['leg_type'] = Models\Domain_Value::where('id', $horse->leg_type)->first();
  $data['neck_height'] = Models\Domain_Value::where('id', $horse->neck_height)->first()['value']; 
  $data['run_style'] = Models\Domain_Value::where('id', $horse->run_style)->first()['value'];
  $data['bandages'] = Models\Domain_Value::where('id', $horse->bandages)->first()['value'];
  $data['hood'] = Models\Domain_Value::where('id', $horse->hood)->first()['value'];
  $data['shadow_roll']  = Models\Domain_Value::where('id', $horse->shadow_roll)->first()['value'];

  return $data;
}//end generateStall

public function getOffspring($horse_id, $sex){ 
  $offspring = [];

  if($sex == 10){ //stallion
    $offspring = Models\Lineage::where('sire_id', $horse_id)->get();

    foreach($offspring as $i=>$o){
      $foal = Models\Horse::where('id', $o['horse_id'])->first();
      $offspring[$i]['horse_id'] = $foal['id'];
      $offspring[$i]['horse_name'] = $foal['call_name'];
      $offspring[$i]['horse_link']= $foal['stall_path'];

      $dam = Models\Horse::where('id', $o['dam_id'])->first();
      $offspring[$i]['dam_name'] = $dam['call_name'];
      $offspring[$i]['dam_link'] = $dam['stall_path'];
    }//end foreach

  } else if($sex == 9){ //mare
    $offspring = Models\Lineage::where('dam_id', $horse_id)->get();

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
  $record = Models\Lineage::where('horse_id', $horse_id)->first();
  $parents = [];

  if($record){ //exists
    $sire = Models\Horse::where('id', $record['sire_id'])->first();
    $parents['sire_name'] = $sire['call_name'];
    $parents['sire_link'] = (($sire['stall_path'] != '') ? $sire['stall_path'] : '/stall/' . $record['sire_id']);

    $dam = Models\Horse::where('id', $record['dam_id'])->first();
    $parents['dam_name'] = $dam['call_name'];
    $parents['dam_link'] = (($dam['stall_path'] != '') ? $dam['stall_path'] : '/stall/' . $record['dam_id']);
  }//end if

  return $parents;
}//end getParents

public function getRaceRecords($horse_id){
  $records = [];

  $placements = Models\Race_Entry::select('placing')
  ->distinct()
  ->where('horse_id', $horse_id)
  ->orderBy('placing')
  ->get();

  if($placements){
    $placements = $placements->toArray();

    foreach($placements as $i=>$p){
      $num_place = $p['placing'];
      $ordinal_place =  Base::ordinal($p['placing']);

      if($ordinal_place == '0th'){
        $ordinal_place = 'TBA';
      }//end if

      $records[$ordinal_place] = [];   

      $entries = Models\Race_Entry::select('id', 'race_id', 'horse_id', 'placing')
      ->where('horse_id', $horse_id)
      ->where('placing', $num_place)
      ->get();

      if($entries){
        $entries = $entries->toArray();

        foreach($entries as $p){
          $race = Models\Race::select('id', 'series', 'name', 'surface', 'grade', 'distance', 'url', 'ran_dt')
          ->orderBy('ran_dt')
          ->where('id', $p['race_id'])->first();

          if($race){
            $race = $race->toArray();

            if($race['series'] != 44){
             $race['series'] = Models\Domain_Value::select('description')
             ->where('id', $race['series'])
             ->first()
             ->toArray()['description'];
             
           } else {
             $race['series'] = '';
            }//end if - series

            $race['surface'] = Models\Domain_Value::select('value')->where('id', $race['surface'])->first()->toArray()['value']; 
            $race['grade'] = Models\Domain_Value::select('value')->where('id', $race['grade'])->first()->toArray()['value']; 

            array_push($records[$ordinal_place], ['race' => $race, 'entry_id' => $p['id']]);     
          }//end if - race
        }//end foreach - entry
      }//end if - entry   
    }//end foreach - placing
  }//end if - placements

  return $records;
}//end getRaceRecords

public function createHorse($data){
  $horse = Models\Horse::firstOrNew(['id' => $data['id']]);

  $horse->call_name = (!empty($data['call_name']) ? $data['call_name'] : '');
  $horse->registered_name = (!empty($data['registered_name']) ? $data['registered_name'] : '');

  $horse->sex = (!empty($data['sex']) ? $data['sex'] : '44');
  $horse->color = (!empty($data['color']) ? $data['color'] : '');
  $horse->phenotype = (!empty($data['phenotype']) ? $data['phenotype'] : '');
  $horse->breeding_status = (!empty($data['breeding_status']) ? $data['breeding_status'] : '44');

  $horse->grade = (!empty($data['grade']) ? $data['grade'] : '44');

  $horse->owner = (!empty($data['owner']) ? $data['owner'] : '44');
  $horse->breeder = (!empty($data['breeder']) ? $data['breeder'] : '44');
  $horse->hexer = (!empty($data['hexer']) ? $data['hexer'] : '44');

  $horse->pos_ability_1 = (!empty($data['pos_ability_1']) ? $data['pos_ability_1'] : '44');
  $horse->pos_ability_2 = (!empty($data['pos_ability_2']) ? $data['pos_ability_2'] : '44');
  $horse->neg_ability_1 = (!empty($data['neg_ability_1']) ? $data['neg_ability_1'] : '44');

  $horse->distance_min = (!empty($data['distance_min']) ? $data['distance_min'] : '');
  $horse->distance_max = (!empty($data['distance_max']) ? $data['distance_max'] : '');

  $horse->surface_dirt = (!empty($data['surface_dirt']) ? $data['surface_dirt'] : '44');
  $horse->surface_turf = (!empty($data['surface_turf']) ? $data['surface_turf'] : '44');

  $horse->speed = (!empty($data['speed']) ? $data['speed'] : '');
  $horse->staying = (!empty($data['staying']) ? $data['staying'] : '');
  $horse->stamina = (!empty($data['stamina']) ? $data['stamina'] : '');
  $horse->breaking = (!empty($data['breaking']) ? $data['breaking'] : '');
  $horse->power = (!empty($data['power']) ? $data['power'] : '');
  $horse->feel = (!empty($data['feel']) ? $data['feel'] : '');
  $horse->fierce = (!empty($data['fierce']) ? $data['fierce'] : '');
  $horse->tenacity = (!empty($data['tenacity']) ? $data['tenacity'] : '');
  $horse->courage = (!empty($data['courage']) ? $data['courage'] : '');
  $horse->response = (!empty($data['response']) ? $data['response'] : '');

  $horse->leg_type = (!empty($data['leg_type']) ? $data['leg_type'] : '44');
  $horse->neck_height = (!empty($data['neck_height']) ? $data['neck_height'] : '44');
  $horse->run_style = (!empty($data['run_style']) ? $data['run_style'] : '44');
  $horse->bandages = (!empty($data['bandages']) ? $data['bandages'] : '44');
  $horse->hood = (!empty($data['hood']) ? $data['hood'] : '44');
  $horse->shadow_roll = (!empty($data['shadow_roll']) ? $data['shadow_roll'] : '44');
  $horse->notes = (!empty($data['notes']) ? $data['notes'] : '');

  $horse->stall_img = (!empty($data['stall_img']) ? $data['stall_img'] : '');
  $horse->racing_img = (!empty($data['racing_img']) ? $data['racing_img'] : '');

  $horse->save();

  if($data['stall_path'] != ''){
   $horse->stall_path = $data['stall_path'];
 }


 $horse->save();

 return $horse;
}//end createHorse

/*
|--------------------------------------------------------------------------
| Utitlity Controls
|--------------------------------------------------------------------------
*/

public function remove_horse($horse_id){
 $horse = Models\Horse::find($horse_id);
 Users::verifyOwner($horse);
 $horse = Models\Horse::find($horse_id);
 $lineages = Models\Lineage::where('horse_id', $horse_id)->orWhere('sire_id', $horse_id)->orWhere('dam_id', $horse_id)->first();
 $entries = Models\Race_Entry::where('horse_id', $horse_id)->first();

 if(empty($_POST)){
  return view('pages.remove_horse', [
    'horse' => $horse,
    'lineages' => $lineages,
    'entries' => $entries   
    ]);
} else {
  $horse->delete();
  return redirect()->route('horse_table');
}
}//end remove_race

}//end class
