<?php  
namespace App\Http\Controllers;
use App\Models as Models;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Horses_Progeny extends Base{

  public function index(){

    return view('index');
    }//end stall


    public function getDomain(){
      $domain = [];
      $domain['horses'] = Models\Horse::select('id', 'call_name')->get()->toArray();
      $domain['grades'] = Models\Grade::get()->toArray();
      $domain['leg_types'] = Models\Leg_Type::get()->toArray();
      $domain['sexes'] = Models\Sex::get()->toArray();
      $domain['pos_abilities'] = Models\Ability::where('type', 'positive')->get()->toArray();
      $domain['neg_abilities'] = Models\Ability::where('type', 'negative')->get()->toArray();
      $domain['person'] = Models\Person::select('username')->get()->toArray();
      return $domain;
    }//end getDomain


    public function getHorseDomain(){
      $domain['sires'] = Models\Horse::select('id', 'call_name')
      ->where('sex', 'Stallion')
      ->get()->toArray();

      $domain['dams'] = Models\Horse::select('id', 'call_name')
      ->where('sex', 'Mare')
      ->get()->toArray();

      $domain['horses'] = Models\Horse::select('id', 'call_name')
      ->get()->toArray();

      return $domain;
  }//end getDomain

  public function add_ancestory($sex = false, $horse_id = false){ //add sire and dam
    $horse = ['id' => 0, 'call_name' => ''];
    $sire = ['id' => 0, 'call_name' => ''];
    $dam = ['id' => 0, 'call_name' => ''];
    $relationship = "Ancestory";

    if($sex == "Mare" && $horse_id){
      $dam = Models\Horse::select('id', 'call_name')->where('id', $horse_id)->first();
      $relationship = "Progeny";
    }//end if

    if($sex == "Stallion" && $horse_id){
      $sire = Models\Horse::select('id', 'call_name')->where('id', $horse_id)->first();
      $relationship = "Progeny";
    }//end if

    if(is_numeric($sex) && $horse_id){
      $horse = Models\Horse::select('id', 'call_name')->where('id', $horse_id)->first();
      $record = Models\Horse_Progeny::where('horse_id', $horse['id'])->first();
      $relationship = "Lineage"; 
    }//end if

    return view('forms.add_ancestory', ['domain' => $this->getHorseDomain(), 
      'horse' => $horse, 
      'sire' => $sire, 
      'dam' => $dam, 
      'relationship' => $relationship,
      'validate' => false]);
  }//end add_ancestory

    public function add_ancestory_validate($relationship, $horse_id){ //add sire and dam
      $record = $_POST;
      //validate here
      $ancestory = Models\Horse_Progeny::where('horse_id', $record['horse_id'])->first();

    if(!$ancestory){ //create new
      $ancestory = Models\Horse_Progeny::create($record)->first();
    } else { //update existing
       $ancestory->horse_id = $record['horse_id'];
       $ancestory->sire_id = $record['sire_id'];
       $ancestory->dam_id = $record['dam_id'];
    }//end if else  


   return view('forms.add_ancestory', ['domain' => $this->getHorseDomain(), 'validate' => true]);
   }//end add_lineage_validate


  }//end class