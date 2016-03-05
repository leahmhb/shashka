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
    return view('add_person');
    }//end add_horse 


  }//end class