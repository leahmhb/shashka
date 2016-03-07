<?php  
namespace App\Http\Controllers;
use App\Models as Models;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Person extends Base{

  public function add_person($type = false){   
    if(!$type){
     return view('add_person', ['validate' => false]);
   } else if ($type == "quick"){
    return view('modals.add_person_modal', ['validate' => false]);
      }//end if-else
    }//end add_person

  public function add_person_validate($type = false){   
    $data = $_POST;     

    //validation here
    $person = Models\Person::firstOrCreate($data);

    if(!$type){
     return view('add_person', ['validate' => true]);
    } else if ($type == "quick"){
    return view('modals.add_person_modal', ['validate' => true]);
    }//end if-else

  }//end add_person


  }//end class