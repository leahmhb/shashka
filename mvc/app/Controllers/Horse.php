<?php
 
namespace App\Http\Controllers;
 
use App\Horse;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
 
 
class Horse extends Controller{
	public function stall($horse_id = false){
		$horses  = Horse::find($horse_id); 
		return response()->json($horses); 
	}//end stall


	 public function getAllHorses(){ 
        $horses  = Horse::all(); 
        return response()->json($horses); 
    }//end getAllHorses
 
 }//end class