<?php  
namespace App\Http\Controllers;
use App\Models as Models;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

use Illuminate\Http\Request;
use Illuminate\Http\Response;


class Person extends Base{

public function person_list(){
    $person = Models\Person::get()->toArray();
    return view('pages.person_list', ['person' => $person]);
}//end person_list

public function update_person($person_id){
  $person = Models\Person::where('id', $person_id)->first()->toArray();
  return view('forms.update_person', ['person' => $person, 'validate' => false]);
}//end update_person

public function update_person_validate($person_id){
  $data = $_POST;

  $person = Models\Person::where('id', $person_id)->first();
  $person->username = $data['username'];
  $person->stable_name = $data['stable_name'];
  $person->stable_prefix = $data['stable_prefix'];
  $person->racing_colors = $data['racing_colors'];
  $person->save();

  return view('forms.update_person', ['person' => $person, 'validate' => true]);
}//end update_person_validate

public function add_person(){   
  return view('forms.add_person', ['validate' => false]);
}//end add_person

public function add_person_validate(){ 
  $data = $_POST;

  $person = Models\Person::firstOrCreate($data);
  return view('forms.add_person', ['validate' => true]);
}//end add_person_validate

public function add_person_quick_validate(){ 
  $data = $_POST;
  return "Person Quick";
  exit;
}//end add_person_validate

}//end class