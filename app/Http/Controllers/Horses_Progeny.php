<?php  
namespace App\Http\Controllers;
use App\Models as Models;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Horses_Progeny extends Base{


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

    return view('forms.add_ancestory', [
      'horse' => $horse, 
      'sire' => $sire, 
      'dam' => $dam, 
      'relationship' => $relationship,
      'validate' => false]);
  }//end add_ancestory

  public function add_ancestory_validate($sex = false, $horse_id = false){

    $relationship = "Ancestory";
    if(($sex == 'Stallion' || $sex == 'Mare') && $horse_id){
      $relationship = "Progeny";
      }//end if 
      
      if(is_numeric($sex) && $horse_id){
        $relationship = "Lineage";
      }//end if

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

    $horse = Models\Horse::select('id', 'call_name')->where('id', $horse_id)->first();
    $sire = Models\Horse::select('id', 'call_name')->where('id', $horse_id)->first();
    $dam = Models\Horse::select('id', 'call_name')->where('id', $horse_id)->first();

    return view('forms.add_ancestory', [      
      'relationship' => $relationship,
      'horse' => $horse, 
      'sire' => $sire, 
      'dam' => $dam, 
      'validate' => true]);
   }//end add_lineage_validate


  }//end class