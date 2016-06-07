<?php  
namespace App\Http\Controllers;
use App\Models as Models;
use DB;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Person extends Base{

/*
|--------------------------------------------------------------------------
| ------------------------------Table Controls
|--------------------------------------------------------------------------
*/

public static function person_table_data(){
  $person = Models\Person::orderBy('username')->get()->toArray();
  return $person;
}

/*
|--------------------------------------------------------------------------
| ------------------------------Form Controls
|--------------------------------------------------------------------------
*/

public function person($person_id = false){   
  $users = [];
  $title = 'Create Person';

  $person = Models\Person::where('id', $person_id)->first();  

  if($person){
    $title = 'Edit '. $person->username;
  }

  return view('forms.person_page', [
    'person' => $person, 
    'title' => $title,
    'validate' => false
    ]);
}

public function person_validate(){
  $data = Base::trimWhiteSpace($_POST);
  $person_id = Person::createPerson($data);
  return redirect()->route('people_tables');
}

/*
|--------------------------------------------------------------------------
| Stable Controls
|--------------------------------------------------------------------------
*/

public function stable($person_id){
  $person = Models\Person::where('id', $person_id)->first();
  $horses = Horses::tableData($person_id, false, false, false);   
  $placingsData = Person::getPlacingsData(Person::getEntryRecords($horses));
  $gradesData = Person::getGradesData($horses);

  return view('pages.stable', [
    'person' => $person, 
    'horses' => $horses,
    'type' => 'stable',
    'placingsData' => $placingsData,
    'gradesData' => $gradesData,
    'domain' => Base::getHorseDomain()
    ]);
}

/*
|--------------------------------------------------------------------------
| Stable Helpers
|--------------------------------------------------------------------------
*/

public function getGradesData($horses){
  $grades = Models\Domain_Value::where('domain', 'GRADE')->whereNotIn('value', ['All'])->get()->toArray();

  $results = [];

  foreach($grades as $g){
    $results[$g['value']] = [$g['description'], 0];
  }

  foreach($horses as $h){
    foreach($results as $i=>$r){     

      if($h['grade'] == $i){
        $results[$i][1] += 1;
      }
    }
  }

  return json_encode(array_values($results));
}

public function getPlacingsData($placings){
  $results = [];

  for($i = 1; $i < 15; $i++){
    $results[$i] = [$i, 0];
  }

  $results[0] = ['TBA', 0];

  foreach($placings as $p){
    $place = $p['placing'];
    foreach($results as $i=>$r){
      $curr_place = $r[0];
      if($place == $curr_place){
        $results[$i][1] += 1;
      }
    }    
  }

  foreach($results as $i=>$r){
    if($results[$i][0] != 'TBA'){
      $results[$i][0] = Base::ordinal($results[$i][0]);
    }
  }

  return json_encode(array_values($results));
}

public function getEntryRecords($horses){
  $results = [];
  $records = [];
  foreach($horses as $h){
    $records = array_values(Horses::getRaceRecords($h['id']));
    foreach($records as $r){
      array_push($results, $r);
    }
    $records = [];
  }
  return $results;
}

/*
|--------------------------------------------------------------------------
| ------------------------------Utility Controls
|--------------------------------------------------------------------------
*/

public function createPerson($data){
 $person = Models\Person::firstOrNew(['id' => $data['id']]);
 $person->username = (!empty($data['username']) ? $data['username'] : '');
 $person->stable_name = (!empty($data['stable_name']) ? $data['stable_name'] : '');
 $person->stable_prefix = (!empty($data['stable_prefix']) ? $data['stable_prefix'] : '');
 $person->racing_colors = (!empty($data['racing_colors']) ? $data['racing_colors'] : '');
 $person->save();
 return $person;
}

public function remove_person($person_id){
  $person = Models\Person::find($person_id);

  $horses = Models\Horse::select('call_name', 'owner')->where('owner', $person_id)->get();

  if(empty($_POST)){
    return view('pages.remove_person', [
      'person' => $person,
      'horses' => $horses   
      ]);
  } else {

    $person->delete();

    return redirect()->route('people_tables');
  }

}

}