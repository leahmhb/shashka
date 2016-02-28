<?php 

namespace App\Composers;
use App\Models as Models;

class HomeComposer{

	public function compose($view){        
		$view->with('stallions', $this->getStallions())->with('mares', $this->getMares());
	}

	public function getStallions(){
		return Models\Horse::select('call_name', 'grade', 'horse_id')
		->where('sex', 'Stallion')->where('owner', 'Haubing')
		->get()->toArray();
    }//end getStallions

    public function getMares(){
    	return Models\Horse::select('call_name', 'grade', 'horse_id')
    	->where('sex', 'Mare')->where('owner', 'Haubing')
    	->get()->toArray();
    }//end getStallions
  }