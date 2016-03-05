<?php  
namespace App\Http\Controllers;
use App\Models as Models;
use View;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Horses_Progeny extends Base{


  public function __construct(){
    View::composers(['App\Composers\HomeComposer'  => ['add_lineage']]);
    View::composers(['App\Composers\HomeComposer'  => ['add_progeny_sire']]);
    View::composers(['App\Composers\HomeComposer'  => ['add_progeny_dam']]);
    View::composers(['App\Composers\HomeComposer'  => ['add_other_horse']]);
    View::composers(['App\Composers\HomeComposer'  => ['index']]);
  }//end construct


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


  public function add_other_horse(){     
    return view('add_other_horse', ['domain' => $this->getDomain()]);
    }//end add_horse 

    public function add_other_horse_validate(){
     $data = $_POST;

     //ensure proper capitalization
     foreach($data as $d=>$dt){
      $data[$d] = ucwords($dt); 
      }//end foreach

      $horse = Models\Horse::firstOrCreate($data);

      return view('add_other_horse', ['domain' => $this->getDomain()]);
    }//end add_horse_validate

public function add_progeny($horse_id){ //add sire and dam
  if(isset($_POST)){
    //var_dump($_POST);
    //exit;
    $record = Models\Horse_Progeny::create($_POST);
  }

  $horse = Models\Horse::select('id', 'call_name', 'registered_name', 'sex')->where('id', $horse_id)->first();

  if($horse['sex'] == 'Mare'){
   return view('add_progeny_dam', ['domain' => $this->getHorseDomain(), 'horse' => $horse]);
      }//end if

      if($horse['sex'] == 'Stallion'){
       return view('add_progeny_sire', ['domain' => $this->getHorseDomain(), 'horse' => $horse]);
     }//end if

  }//end add_lineage



  public function add_lineage($horse_id){ //add sire and dam
    if(isset($_POST)){
      $record = Models\Horse_Progeny::create($_POST);
    }

    $horse = Models\Horse::select('id', 'call_name', 'registered_name', 'sex')->where('id', $horse_id)->first();

    $record = Models\Horse_Progeny::where('horse_id', $horse['id'])->first();

    $data = [];

    if(!$record){ //create new
      $data['horse'] = $horse->toArray();
      $data['sire_id'] = 0;
      $data['dam_id'] = 0;   
    } else {
      $data = $_POST;
      $data['horse'] = $horse->toArray();
    }
    
    return view('add_lineage', ['domain' => $this->getHorseDomain(), 'data' => $data]);
  }//end add_lineage


  }//end class