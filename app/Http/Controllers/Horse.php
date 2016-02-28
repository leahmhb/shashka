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
		View::composers(['App\Composers\HomeComposer'  => ['stall']]);
        View::composers(['App\Composers\HomeComposer'  => ['add_horse']]);
    }//end construct

    public function add_horse(){      
        return view('add_horse', ['domain' => $this->getDomain()]);
    }//end add_horse

    public function add_horse_validate(){
        echo "<pre>" . print_r($_POST, true) . "</pre>";
        exit;

        $horse = new Model\Horse;
        $horse->call_name = $_POST['call_name'];
        $horse->save();

        return view('add_horse', [
            'domain' => $this->getDomain()
            ]);
    }//end add_horse_validate


    public function getDomain(){
        $domain = [];
        $domain['grades'] = Models\Grade::get()->toArray();
        $domain['leg_types'] = Models\Leg_Type::get()->toArray();
        $domain['sexes'] = Models\Sex::get()->toArray();
        $domain['pos_abilities'] = Models\Ability::where('type', 'positive')->get()->toArray();
        $domain['neg_abilities'] = Models\Ability::where('type', 'negative')->get()->toArray();
        $domain['sires'] = Models\Horse::select('horse_id', 'call_name')->where('sex', 'Stallion')->get()->toArray();
        $domain['dams'] = Models\Horse::select('horse_id', 'call_name')->where('sex', 'Mare')->get()->toArray();
        return $domain;
    }//end getDomain

    public function stall_page($horse_id){

    	$horse = Models\Horse::where('horse_id', $horse_id)->first()->toArray();
		//echo "<pre>" . print_r($horse, true) . "</pre>";
    	$ability = Models\Horse_Ability::where('horse_id', $horse_id)->first()->toArray();
		//echo "<pre>" . print_r($ability, true) . "</pre>";

    	$prefix = Models\Person::select('stable_prefix')
    	->where('username', $horse['hexer'])
    	->first()->toArray();

    	$progeny = $this->getParents($horse_id);
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

    public function getParents($horse_id){
        $progeny = Models\Horse_Progeny::where('horse_id', $horse_id)->first();
        
        if($progeny != null){
            $progeny = $progeny->toArray();

            $sire = Models\Horse::select('call_name')
            ->where('horse_id', $progeny['sire_id'])
            ->first();

            if($sire != null){
                $sire = $sire->toArray();
                $progeny['sire'] = $sire['call_name'];
                $progeny['sire_link'] = "stall/" . $progeny['sire_id'];
            } else if ($progeny['sire_name'] != null){
                $progeny['sire'] = $progeny['sire_name'];
            }//end if 

            $dam = Models\Horse::select('call_name')
            ->where('horse_id', $progeny['dam_id'])
            ->first();

            if($dam != null){
                $dam = $dam->toArray();
                $progeny['dam'] = $dam['call_name'];
                $progeny['dam_link'] = "stall/" . $progeny['dam_id'];
            } else if ($progeny['dam_name'] != null){
                $progeny['dam'] = $progeny['dam_name'];             
            }//end if 

        }  else {
            $progeny['dam'] = $progeny['sire'] = "Foundation";
            $progeny['dam_link'] = $progeny['sire_link'] = "#";
            }//end if

            return $progeny;

    }//end getParents
}//end class
