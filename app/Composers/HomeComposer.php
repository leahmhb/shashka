<?php 

namespace App\Composers;
use App\Models as Models;

class HomeComposer{

	public function compose($view){        
		$view->with('stallions', $this->getStallions())->with('mares', $this->getMares());
	}

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
    }//end getStallions
  }