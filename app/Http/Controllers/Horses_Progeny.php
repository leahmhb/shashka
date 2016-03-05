<?php  
  namespace App\Http\Controllers;
  use App\Models as Models;
  use View;

  use Illuminate\Foundation\Bus\DispatchesJobs;
  use Illuminate\Routing\Controller as BaseController;
  use Illuminate\Foundation\Validation\ValidatesRequests;
  use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

  class Horses_Progeny extends BaseController{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function __construct(){
      View::composers(['App\Composers\HomeComposer'  => ['add_lineage']]);
      View::composers(['App\Composers\HomeComposer'  => ['add_progeny_sire']]);
      View::composers(['App\Composers\HomeComposer'  => ['add_progeny_dam']]);
  }//end construct

  public function add_progeny($horse_id){ //add offspring
    $horse = Models\Horse_Progeny::where('id', $horse_id)->first()->toArray();

    if($horse['sex'] == 'Stallion'){
      return view('add_progeny_sire', ['domain' => $this->getDomain(), 'horse' => $horse]);
    }//end if

    if($horse['sex'] == 'Mare'){
      return view('add_progeny_dam', ['domain' => $this->getDomain(), 'horse' => $horse]);
    }//end if

  }//end add_progeny

  public function add_progeny_validate($horse_id){
    return view('add_progeny', ['domain' => $this->getDomain()]);
  }//end add_progeny_validate


  public function add_lineage($horse_id){ //add sire and dam
    $horse = Models\Horse_Progeny::where('id', $horse_id)->first()->toArray();

    echo "<pre>" . print_r($horse, true) . "</pre>";
    
    return view('add_lineage', ['domain' => $this->getDomain(), 'horse' => $horse]);
  }//end add_lineage


  public function add_lineage_validate($horse_id){
    $data = $_POST;

  //do validation here

  //ensure fields are correct
    if($data['horse_id'] != ""){
      $data['horse_link'] = "/stall/" . $data['horse_id'];
      $data['horse_name'] = Models\Horse::select('call_name')->where('id', $data['horse_id'])->first();
    } else {
      $data['horse_name'] = ucwords($data['horse_name']); 
  }//end if

  if($data['sire_id'] != ""){
    $data['sire_link'] = "/stall/" . $data['sire_id'];
    $data['sire_name'] = Models\Horse::select('call_name')->where('id', $data['horse_id'])->first();
  } else {
    $data['sire_name'] = ucwords($data['sire_name']); 
  }//end if

  if($data['dam_id'] != ""){
    $data['dam_link'] = "/stall/" . $data['dam_id'];
    $data['dam_name'] = Models\Horse::select('call_name')->where('id', $data['horse_id'])->first();
  } else {
    $data['dam_name'] = ucwords($data['dam_name']); 
  }//end if

  //test if horse is already in records  
  if($data['horse_name'] == "" && $data['horse_id'] != ""){
    $exists_mine = Models\Horse_Progeny::where('horse_id', $data['horse_id'])->first();
  if(!$exists_mine){ //create new
    $lineage = Models\Horse_Progeny::create($data);        
  } else { //update existing        
    $exists_mine->sire_name = $data['sire_name'];
    $exists_mine->sire_link = $data['sire_link'];   
    $exists_mine->dam_name = $data['dam_name'];
    $exists_mine->dam_link = $data['dam_link'];  
    $exists_mine->save();    
  }//end if
  }//end if

  if($data['horse_id'] == "" && $data['horse_name'] != ""){
    $exists_other = Models\Horse_Progeny::where('horse_name', $data['horse_name'])->first();
  if(!$exists_other){ //create new
    $lineage = Models\Horse_Progeny::create($data);        
  } else { //update existing        
    $exists_other->sire_name = $data['sire_name'];
    $exists_other->sire_link = $data['sire_link'];   
    $exists_other->dam_name = $data['dam_name'];
    $exists_other->dam_link = $data['dam_link'];  
    $exists_other->save();     
  }//end if
  }//end if

  return view('add_lineage', ['domain' => $this->getDomain()]);
  }//end create_lineage_validate

  public function getDomain(){
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

  }//end class