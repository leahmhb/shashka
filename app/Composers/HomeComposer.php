<?php 

namespace App\Composers;
use App\Models as Models;

class HomeComposer{

	public function compose($view){        
		$view
    ->with('my_stallions', $this->getStallions())
    ->with('my_mares', $this->getMares())
    ->with('domain', $this->getDomain())
    ->with('my_horses', $this->getMyHorses());
	}//end compose

  public function getDomain(){
    $domain = [];

    //add horse forms
    $domain['grades'] = Models\Domain_Value::where('domain', 'GRADE')->get();
    $domain['leg_types'] = Models\Domain_Value::where('domain', 'LEG_TYPE')->get();
    $domain['sexes'] = Models\Domain_Value::where('domain', 'SEX')->get();    
    $domain['surface_pref'] = Models\Domain_Value::where('domain', 'SURFACE_PREF')->get();    
    $domain['bandages'] = Models\Domain_Value::where('domain', 'BANDAGES')->get();    
    $domain['shadow_roll'] = Models\Domain_Value::where('domain', 'SHADOW_ROLL')->get(); 
    $domain['neck_height'] = Models\Domain_Value::where('domain', 'NECK_HEIGHT')->get();
    $domain['run_style'] = Models\Domain_Value::where('domain', 'RUN_STYLE')->get();
    $domain['hood'] = Models\Domain_Value::where('domain', 'HOOD')->get();    
    $domain['person'] = Models\Person::orderBy('username')->get();

    $domain['pos_abilities'] = Models\Ability::where('type', 'positive')
    ->orderBy('ability')
    ->get();

    $domain['neg_abilities'] = Models\Ability::where('type', 'negative')
    ->orderBy('ability')
    ->get();


    //race forms
   


    return $domain;
  }//end getDomain

  public function getMyHorses(){
    return Models\Horse::select('call_name', 'grade', 'id', 'sex', 'grade', 'registered_name', 'stall_path')
    ->where('owner', 'Haubing')  
    ->orderBy('call_name')
    ->get()
    ;
    }//end getMyHorses

    public function getStallions(){
      $stallions = Models\Horse::select('call_name', 'grade', 'id')
      ->where('sex', 'Stallion')
      ->where('owner', 'Haubing')
      ->orderBy('grade')
      ->orderBy('call_name')
      ->get()
      ;    
      return $stallions;
    }//end getStallions

    public function getMares(){  
      $mares = Models\Horse::select('call_name', 'grade', 'id')
      ->where('sex', 'Mare')
      ->where('owner', 'Haubing')  
      ->orderBy('grade')
      ->orderBy('call_name')
      ->get()
      ;    
      return $mares;
    }//end getMares
  }