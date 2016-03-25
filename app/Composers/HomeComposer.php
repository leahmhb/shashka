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

    $domain['horses'] = Models\Horse::select('call_name', 'grade', 'owner', 'sex', 'id', 'stall_path')
    ->orderBy('call_name')
    ->get()->toArray();

    $domain['grades'] = Models\Grade::get()->toArray();

    $domain['leg_types'] = Models\Leg_Type::get()->toArray();

    $domain['sexes'] = Models\Sex::get()->toArray();

    $domain['pos_abilities'] = Models\Ability::where('type', 'positive')
    ->orderBy('ability')
    ->get()->toArray();

    $domain['neg_abilities'] = Models\Ability::where('type', 'negative')
    ->orderBy('ability')
    ->get()->toArray();

    $domain['person'] = Models\Person::orderBy('username')
    ->get()->toArray();

    $domain['sires'] = Models\Horse::select('id', 'call_name')
    ->where('sex', 'Stallion')
    ->orderBy('call_name')
    ->get()->toArray();

    $domain['dams'] = Models\Horse::select('id', 'call_name')
    ->where('sex', 'Mare')
    ->orderBy('call_name')
    ->get()->toArray();

    $domain['races'] = Models\Race::orderBy('name')
    ->get()->toArray();

    return $domain;
    }//end getDomain

    public function getMyHorses(){
      return Models\Horse::select('call_name', 'grade', 'id', 'sex', 'grade', 'registered_name', 'stall_path')
      ->where('owner', 'Haubing')  
      ->orderBy('call_name')
      ->get()
      ->toArray();
    }//end getMyHorses

    public function getOthersHorses(){
      return Models\Horse::select('call_name', 'grade', 'id', 'sex', 'grade', 'registered_name', 'stall_path')
      ->whereNotIn('owner', ['Haubing'])  
      ->orderBy('call_name')
      ->get()
      ->toArray();
    }//end getOthersHorses

    public function getStallions(){
      $stallions = Models\Horse::select('call_name', 'grade', 'id')
      ->where('sex', 'Stallion')
      ->where('owner', 'Haubing')
      ->orderBy('grade')
      ->orderBy('call_name')
      ->get()
      ->toArray();    
      return $stallions;
    }//end getStallions

    public function getMares(){  
      $mares = Models\Horse::select('call_name', 'grade', 'id')
      ->where('sex', 'Mare')
      ->where('owner', 'Haubing')  
      ->orderBy('grade')
      ->orderBy('call_name')
      ->get()
      ->toArray();    
      return $mares;
    }//end getMares
  }