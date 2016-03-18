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
   View::composers(['App\Composers\HomeComposer'  => ['layout.*', 'includes.*', 'forms.*', 'pages.*',  'errors.*']]);
    }//end construct

    public function index(){
      return view('pages.index');
    }//end index

    public function theme(){
      return view('pages.theme');
    }//end credits

    public function credits(){
      return view('pages.credits');
    }//end credits

    public function trimWhiteSpace($data){
     foreach($data as $i=>$d){
      $data[$i] = trim($d);
    }//strip whitespace
    return $data;
    }//end trimWhitespace


  }
