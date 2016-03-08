<?php

namespace App\Http\Controllers;
use App\Models as Models;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Races extends Base{


  public function getDomain(){
    $domain['grades'] = Models\Grade::get()->toArray();
    $domain['races'] = Models\Race::all()->toArray();
    $domain['horses'] = Models\Horse::select('id', 'call_name')->get()->toArray();
    return $domain;
}//end getDomain

public function add_race($type = false){
  if(!$type){
   return view('forms.add_race', ['domain' => $this->getDomain(),'validate' => false]);
 } else if ($type == "quick"){
  return view('modals.add_race_modal', ['domain' => $this->getDomain(),'validate' => false]);
      }//end if-else
}//end add_race

public function add_race_validate($type = false){
  $data = $_POST;     
  $race = Models\Race::firstOrCreate($data);
  if(!$type){
   return view('forms.add_race', ['domain' => $this->getDomain(),'validate' => false]);
 } else if ($type == "quick"){
  return view('modals.add_race_modal', ['domain' => $this->getDomain(),'validate' => false]);
      }//end if-else
}//end add_race_validate

public function add_race_entrant($horse_id = false){
  $horse = Models\Horse::select('id', 'call_name')->where('id', $horse_id)->first();
  return view('forms.add_race_entrant', ['domain' => $this->getDomain(), 'horse' => $horse, 'validate' => false]);
}//end add_race_entrant

public function add_race_entrant_validate(){
  $data = $_POST;
  var_dump($data);
  $entry = Models\Race_Entrant::firstorCreate($data);
  return view('forms.add_race_entrant', ['domain' => $this->getDomain(), 'horse' => [], 'validate' => true]);
}//end add_race_entrant





}
