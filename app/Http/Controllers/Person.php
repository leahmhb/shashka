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

public function quick_person(){
  return view('forms.quick_person');
}

public function quick_person_validate(Request $request){

  $data = Base::trimWhiteSpace($request->except(['_token']));
  Base::output($data);

  exit;

  $person = Models\Person::firstOrNew(['id' => $data['id']]);
  $person->username = (isset($data['username']) ? $data['username'] : '');
  $person->stable_name = (isset($data['stable_name']) ? $data['stable_name'] : '');
  $person->stable_prefix = (isset($data['stable_preifx']) ? $data['stable_preifx'] : '');
  $person->racing_colors = (isset($data['racing_colors']) ? $data['racing_colors'] : '');
  $person->save();


}//end quick_person_validate

public function person_validate(){
  $data = Base::trimWhiteSpace($_POST);


  $person = Models\Person::firstOrNew(['id' => $data['id']]);
  $person->username = (isset($data['username']) ? $data['username'] : '');
  $person->stable_name = (isset($data['stable_name']) ? $data['stable_name'] : '');
  $person->stable_prefix = (isset($data['stable_preifx']) ? $data['stable_preifx'] : '');
  $person->racing_colors = (isset($data['racing_colors']) ? $data['racing_colors'] : '');
  $person->save();
  
  return $this->person_list();  

}//end update_person_validate

public function person($person_id = false){   
  $action = "";
  $person = [
  'id' => 0,
  'username' => '',
  'stable_name'=> '',
  'stable_prefix' => '',
  'racing_colors' => ''
  ];

  if($person_id){
    $person = Models\Person::where('id', $person_id)->first();
    $action = "Update";
  } else {
    $action = "Add";
  }//end if-else

  return view('forms.person', ['person' => $person, 'action' => $action, 'validate' => false]);
}//end person


}//end class