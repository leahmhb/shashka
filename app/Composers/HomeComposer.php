<?php 

namespace App\Composers;
use App\Models as Models;

class HomeComposer{

	public function compose($view){        
		$view
    ->with('my_stallions', $this->getStallions())
    ->with('my_mares', $this->getMares())
    ->with('domain', $this->getDomain())
    ->with('my_horses', $this->getMyHorses())
    ->with('others_horses', $this->getOthersHorses());
	}//end compose

  public function getDomain(){
    $domain = [];
    $domain['horses'] = Models\Horse::select('call_name', 'grade', 'id')->get()->toArray();
    $domain['grades'] = Models\Grade::get()->toArray();
    $domain['leg_types'] = Models\Leg_Type::get()->toArray();
    $domain['sexes'] = Models\Sex::get()->toArray();
    $domain['pos_abilities'] = Models\Ability::where('type', 'positive')->get()->toArray();
    $domain['neg_abilities'] = Models\Ability::where('type', 'negative')->get()->toArray();
    $domain['person'] = Models\Person::get()->toArray();
    $domain['sires'] = Models\Horse::select('id', 'call_name')->where('sex', 'Stallion')->get()->toArray();
    $domain['dams'] = Models\Horse::select('id', 'call_name')->where('sex', 'Mare')->get()->toArray();
    $domain['races'] = Models\Race::all()->toArray();
    return $domain;
    }//end getDomain

    public function getMyHorses(){
      return Models\Horse::select('call_name', 'grade', 'id', 'sex', 'grade', 'registered_name', 'stall_path')
      ->where('owner', 'Haubing')  
      ->get()
      ->toArray();
    }//end getMyHorses

    public function getOthersHorses(){
      return Models\Horse::select('call_name', 'grade', 'id', 'sex', 'grade', 'registered_name', 'stall_path')
      ->whereNotIn('owner', ['Haubing'])  
      ->get()
      ->toArray();
    }//end getOthersHorses

    public function getStallions(){
      $gi_stallions = Models\Horse::select('call_name', 'grade', 'id')
      ->where('sex', 'Stallion')
      ->where('owner', 'Haubing')
      ->where('grade', 'GI')
      ->get()
      ->toArray();
      $gii_stallions = Models\Horse::select('call_name', 'grade', 'id')
      ->where('sex', 'Stallion')
      ->where('owner', 'Haubing')
      ->where('grade', 'GII')
      ->get()
      ->toArray();
      $giii_stallions = Models\Horse::select('call_name', 'grade', 'id')
      ->where('sex', 'Stallion')
      ->where('owner', 'Haubing')
      ->where('grade', 'GIII')
      ->get()
      ->toArray();
      $ol_stallions = Models\Horse::select('call_name', 'grade', 'id')
      ->where('sex', 'Stallion')
      ->where('owner', 'Haubing')
      ->where('grade', 'Open Level')
      ->get()
      ->toArray();
      $stallions = array (
       'gi_stallions' => $gi_stallions,
       'gii_stallions' => $gii_stallions,
       'giii_stallions' => $giii_stallions,     
       'ol_stallions' => $ol_stallions,   
       );

      return $stallions;
    }//end getStallions

    public function getMares(){
      $mares =  [];
      $mares['gi_mares'] = Models\Horse::select('call_name', 'grade', 'id')
      ->where('sex', 'Mare')
      ->where('owner', 'Haubing')
      ->where('grade', 'GI')
      ->get()
      ->toArray();
      $mares['gii_mares'] = Models\Horse::select('call_name', 'grade', 'id')
      ->where('sex', 'Mare')
      ->where('owner', 'Haubing')
      ->where('grade', 'GII')
      ->get()
      ->toArray();
      $mares['giii_mares'] = Models\Horse::select('call_name', 'grade', 'id')
      ->where('sex', 'Mare')
      ->where('owner', 'Haubing')
      ->where('grade', 'GIII')
      ->get()
      ->toArray();
      $mares['ol_mares'] = Models\Horse::select('call_name', 'grade', 'id')
      ->where('sex', 'Mare')
      ->where('owner', 'Haubing')
      ->where('grade', 'Open Level')
      ->get()
      ->toArray();
      return $mares;
    }//end getMares
  }