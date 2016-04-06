<?php

namespace App\Http\Controllers;

use App\Models as Models;

use Auth;
use Hash;
use View;
use Validator;
use Illuminate\Http\Request;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Base extends Controller{

public function __construct(){
  View::composers(['App\Composers\HomeComposer'  => 
    [
    'layout.*', 
    'includes.*', 
    'forms.*',      
    'pages.*',  
    'errors.*'
    ]]);
}//end construct

public function getRaceDomain(){
  $domain = [];
  $domain['races'] = Models\Race::select('id', 'name', 'grade', 'surface', 'distance')
  ->orderBy('name')
  ->get();

  $domain['race_series'] =  Models\Domain_Value::where('domain', 'RACE_SERIES')->get();
  return $domain;
}//end getRaceDomain

public function getProgenyDomain(){
  $domain = [];

  $domain['sires'] = Models\Horse::select('id', 'call_name')
  ->where('sex', 'Stallion')
  ->orderBy('call_name')
  ->get()->toArray();

  $domain['dams'] = Models\Horse::select('id', 'call_name')
  ->where('sex', 'Mare')
  ->orderBy('call_name')
  ->get()->toArray();

  $domain['horses'] = Models\Horse::select('call_name', 'id')
  ->orderBy('call_name')
  ->get()->toArray();

  return $domain;
}//end getProgenyDomain

public function index(){
    return view('pages.index');
}//end index

public function theme(){
  return view('pages.theme');
}//end credits

public function credits(){
  return view('pages.credits');
}//end credits

public function contact(){
  return view('pages.contact');
}//end credits

public function trimWhiteSpace($data){
  foreach($data as $i=>$d){
    $data[$i] = trim($d);
}//strip whitespace
return $data;
}//end trimWhitespace

public function output($a){
  echo "<pre>" . print_r($a, true) . "</pre>";
  exit;
}//end printArray

public function ordinal($number) {
  $ends = array('th','st','nd','rd','th','th','th','th','th','th');
  if ((($number % 100) >= 11) && (($number%100) <= 13))
    return $number. 'th';
  else
    return $number. $ends[$number % 10];
}//end ordinal



}
