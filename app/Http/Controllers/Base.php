<?php

namespace App\Http\Controllers;
use App\Models as Models;
use View;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Base extends BaseController{
	use AuthorizesRequests, DispatchesJobs, ValidatesRequests;


     public function __construct(){
        View::composers([
            'App\Composers\HomeComposer'  => ['layouts.master'] 
        ]);
    }//end construct


	public function index(){
     
        return view('index');
    }//end stall

   
}
