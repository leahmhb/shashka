<?php  
namespace App\Http\Controllers;
use App\Models as Models;
use View;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Person extends Base{


  public function __construct(){
    View::composers(['App\Composers\HomeComposer'  => ['add_person']]);
  }//end construct



  public function add_person(){   
    $validate = "";
    if(isset($_POST['submit'])){
      $data['username'] = $_POST['username'];
      $data['stable_name'] = $_POST['stable_name'];
      $data['stable_prefix'] = $_POST['stable_prefix'];
      $person = Models\Person::firstOrCreate($data);
      $validate = true;
  }//end if

  return view('add_person', ['validate' => $validate]);
    }//end add_horse 


  }//end class