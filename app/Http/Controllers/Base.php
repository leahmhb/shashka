<?php

namespace App\Http\Controllers;
use App\Models as Models;
use View;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Base extends Controller{

 public function __construct(){
   View::composers(['App\Composers\HomeComposer'  => ['layout.*', 'includes.*', 'forms.*', 'errors.*']]);
    }//end construct

    public function index(){
      return view('index');
    }//end index

    public function theme(){
      return view('theme');
    }//end credits

    public function credits(){
      return view('credits');
    }//end credits


  }
