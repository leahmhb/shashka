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

  public function add_person(){   
    return view('forms.add_person', ['validate' => false]);
    }//end add_person

    public function add_person_validate(){ 
      $data = $_POST;
      //validation here
      $person = Models\Person::firstOrCreate($data);
      return view('forms.add_person', ['validate' => true]);
  }//end add_person_validate


  public function add_person_quick(){
    return view('modals.add_person_modal', ['validate' => false]);
  }//end add_person_quick

  public function add_person_quick_validate(Request $request){
    $data = $request->all();
    $person = Models\Person::firstOrCreate($data);
    return response()->json($data);
    //return view('modals.add_person_modal', ['validate' => true]);
  }//end add_person_quick_validate



  }//end class