<?php  
namespace App\Http\Controllers;
use App\Models as Models;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

use Illuminate\Http\Request;

class Person extends Base{


/*
|--------------------------------------------------------------------------
| Table Controls
|--------------------------------------------------------------------------
*/

public static function person_table_data(){
  $person = Models\Person::orderBy('username')->get()->toArray();
  return $person;
}//end person_table

/*
|--------------------------------------------------------------------------
| Form Controls
|--------------------------------------------------------------------------
*/

public function person_validate(){
  $data = Base::trimWhiteSpace($_POST);
  $person_id = $this->createPerson($data);
  return redirect()->route('people_tables');
}//end update_person_validate

public function person($person_id = false){   
  $users = [];
  $title = 'Create Person';

  $person = Models\Person::where('id', $person_id)->first();  
  if($person){
    $title = 'Edit '. $person->username;
  }
  
  if(Users::checkAdmin(Users::getCurrentUser())){
    $users = Users::getUsers();
  }//end if

  return view('pages.person', [
    'person' => $person, 
    'users' => $users,
    'title' => $title,
    'validate' => false
    ]);
}//end person

/*
|--------------------------------------------------------------------------
| Utility Controls
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
}//end createPerson

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
  }//end if

}//end remove_person

}//end class