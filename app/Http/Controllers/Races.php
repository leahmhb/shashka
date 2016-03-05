<?php

namespace App\Http\Controllers;
use App\Models as Models;
use View;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Races extends Base{

	public function __construct(){
		View::composers([
			'App\Composers\HomeComposer'  => ['add_race'] 
			]);
    }//end construct

    public function getDomain(){
        $domain['horses'] = Models\Horse::select('id', 'call_name')
        ->get()->toArray();
        return $domain;
}//end getDomain

public function add_race(){
    if(isset($_POST)){

    }//end if

    
   return view('add_race', ['domain' => $this->getDomain()]);
    }//end add_race





}
