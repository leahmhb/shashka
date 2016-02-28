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


        //return view('add_horse', ['domain' => $this->getDomain()]);
    }//end add_horse_validate


    public function getDomain(){
        $domain = [];
        $domain['grades'] = Models\Grade::get()->toArray();
        $domain['leg_types'] = Models\Leg_Type::get()->toArray();
        $domain['sexes'] = Models\Sex::get()->toArray();
        $domain['pos_abilities'] = Models\Ability::where('type', 'positive')->get()->toArray();
        $domain['neg_abilities'] = Models\Ability::where('type', 'negative')->get()->toArray();
        $domain['sires'] = Models\Horse::select('id', 'call_name')->where('sex', 'Stallion')->get()->toArray();
        $domain['dams'] = Models\Horse::select('id', 'call_name')->where('sex', 'Mare')->get()->toArray();
        return $domain;
    }//end getDomain

    public function stall_page($horse_id){

    	$horse = Models\Horse::where('id', $horse_id)->first()->toArray();


    	$ability = Models\Horse_Ability::where('horse_id', $horse_id)->first()->toArray();

        $abilities = Models\Ability::where('ability', $ability['pos_ability_1'])
        ->orWhere('ability', $ability['pos_ability_2'])
        ->orWhere('ability', $ability['neg_ability_1'])->get()->toArray();

        $prefix = Models\Person::select('stable_prefix')
        ->where('username', $horse['hexer'])
        ->first()->toArray();

        $parents = $this->getParents($horse_id);
        $offspring = $this->getOffspring($horse_id, $horse['sex']);
        if($horse['owner'] == "Haubing") {
          $img_src = "stall/" . $horse['call_name'] . ".png";
      } else {
          $img_src = "stall/default.png";
      }

		//echo "<pre>" . print_r($parents, true) . "</pre>";

      return view('stall', [
          'horse' => $horse, 
          'ability' => $ability, 
          'abilities' => $abilities,
          'offspring' => $offspring, 
          'parents' => $parents, 
          'prefix' => $prefix,
          'img_src' => $img_src
          ]);
    }//end stall

    public function getOffspring($horse_id, $sex){       

        $offspring = [];

        if($sex == 'Stallion'){
            $offspring = Models\Horse_Progeny::where('sire_id', $horse_id)
            ->get();
        } else if($sex == 'Mare'){
            $offspring = Models\Horse_Progeny::where('dam_id', $horse_id)
            ->get();
        }//end if-else        

        if($offspring != null){
            $offspring = $offspring->toArray();

            //echo "<pre>" . print_r($offspring, true) . "</pre>";
            //exit;

            foreach($offspring as $i=>$o){
                if($o['horse_id'] != 0){
                   $foal = Models\Horse::select('call_name')
                   ->where('id', $o['horse_id'])
                   ->first()->toArray();
                   //echo "<pre>" . print_r($foal, true) . "</pre>";
                   $offspring[$i]['horse_name'] = $foal['call_name'];
                   $offspring[$i]['horse_link']= "/stall/" . $o['horse_id'];
               }//end if

               if($sex == 'Stallion'){
                if($o['dam_id'] != 0){
                    $dam = Models\Horse::select('call_name')
                    ->where('id', $o['dam_id'])
                    ->first()->toArray();
                    //echo "<pre>" . print_r($dam, true) . "</pre>";
                    $offspring[$i]['dam_name'] = $dam['call_name'];
                    $offspring[$i]['dam_link'] = "/stall/" . $o['dam_id'];
                }//end if
               }//end if

               if($sex == 'Mare'){
                if($o['sire_id'] != 0){
                    $sire = Models\Horse::select('call_name')
                    ->where('id', $o['sire_id'])
                    ->first()->toArray();
                    //echo "<pre>" . print_r($sire, true) . "</pre>";
                    $offspring[$i]['sire_name'] = $sire['call_name'];
                    $offspring[$i]['sire_link'] = "/stall/" . $o['sire_id'];
                }//end if
               }//end if

           }//end foreach
       }//end if


       //echo "<pre>" . print_r($offspring, true) . "</pre>";
       //exit;

       return $offspring;
    }//end getOffspring

    public function getParents($horse_id){
        $parents = Models\Horse_Progeny::where('horse_id', $horse_id)->first();
        
        if($parents != null){
            $parents = $parents->toArray();

            $sire = Models\Horse::select('call_name')
            ->where('id', $parents['sire_id'])
            ->first();

            if($sire != null){
                $sire = $sire->toArray();
                $parents['sire'] = $sire['call_name'];
                $parents['sire_link'] = "/stall/" . $parents['sire_id'];
            } else if ($parents['sire_name'] != null){
                $parents['sire'] = $parents['sire_name'];
            }//end if 

            $dam = Models\Horse::select('call_name')
            ->where('id', $parents['dam_id'])
            ->first();

            if($dam != null){
                $dam = $dam->toArray();
                $parents['dam'] = $dam['call_name'];
                $parents['dam_link'] = "/stall/" . $parents['dam_id'];
            } else if ($parents['dam_name'] != null){
                $parents['dam'] = $parents['dam_name'];             
            }//end if 

        }  else {
            $parents['dam'] = $parents['sire'] = "Foundation";
            $parents['dam_link'] = $parents['sire_link'] = "#";
        }//end if

        return $parents;

    }//end getParents
}//end class
