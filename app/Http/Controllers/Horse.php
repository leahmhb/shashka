<?php

namespace App\Http\Controllers;
use App\Models as Models;
use View;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Horse extends BaseController{
	use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

	public function __construct(){
		View::composers([
			'App\Composers\HomeComposer'  => ['stall'],
			'App\Composers\HomeComposer'  => ['add_horse']  
			]);
    }//end construct

    public function add_horse(){
    	return view('add_horse');
    }//end add_horse

    public function stall_page($horse_id = 1){

    	$horse = Models\Horse::where('horse_id', $horse_id)->first()->toArray();
		//echo "<pre>" . print_r($horse, true) . "</pre>";
    	$ability = Models\Horse_Ability::where('horse_id', $horse_id)->first()->toArray();
		//echo "<pre>" . print_r($ability, true) . "</pre>";

    	$prefix = Models\Person::select('stable_prefix')
    	->where('username', $horse['owner'])
    	->first()->toArray();

    	$progeny = Models\Horse_Progeny::where('horse_id', $horse_id)->first();
    	
    	if($progeny != null){
    		$progeny = $progeny->toArray();

    		$sire = Models\Horse::select('call_name')
    		->where('horse_id', $progeny['sire_id'])
    		->first()->toArray();

    		$progeny['sire'] = $sire['call_name'];

    		$dam = Models\Horse::select('call_name')
    		->where('horse_id', $progeny['dam_id'])
    		->first()->toArray();

    		$progeny['dam'] = $dam['call_name'];		
    	}

    	if($horse['owner'] == "Haubing") {
    		$img_src = "stall/" . $horse['call_name'] . ".png";
    	} else {
    		$img_src = "stall/default.png";
    	}
    	
		//echo "<pre>" . print_r($progeny, true) . "</pre>";

    	return view('stall', [
    		'horse' => $horse, 
    		'ability' => $ability, 
    		'progeny' => $progeny, 
    		'prefix' => $prefix,
    		'img_src' => $img_src
    		]);
    }//end stall
  }
