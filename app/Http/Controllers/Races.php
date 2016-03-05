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
  View::composers(['App\Composers\HomeComposer'  => ['add_race']]);
  View::composers(['App\Composers\HomeComposer' => ['add_race_entrant']]);
}//end construct

public function getDomain(){
  $domain['grades'] = Models\Grade::get()->toArray();
  $domain['races'] = Models\Race::all()->toArray();
  $domain['horses'] = Models\Horse::select('id', 'call_name')->get()->toArray();
  return $domain;
}//end getDomain

public function add_race(){
  return view('add_race', ['domain' => $this->getDomain(), 'validate' => false]);
}//end add_race

public function add_race_entrant($horse_id){
  $horse = Models\Horse::select('id', 'call_name')->where('id', $horse_id)->first();
  return view('add_race_entrant', ['domain' => $this->getDomain(), 'horse' => $horse, 'validate' => false]);
}//end add_race_entrant


public function add_race_entrant_validate($horse_id){
  $horse = Models\Horse::select('id', 'call_name')->where('id', $horse_id)->first();
  $data = $_POST;
  $entry = Models\Race_Entrant::firstorCreate($data);
  return view('add_race_entrant', ['domain' => $this->getDomain(), 'horse' => $horse, 'validate' => true]);
}//end add_race_entrant

public function add_race_validate(){
  $data = $_POST;     
  $race = Models\Race::firstOrCreate($data);
  return view('add_race', ['domain' => $this->getDomain(),  'validate' => true]);
}//end add_race_validate



}
