<?php  
namespace App\Http\Controllers;
use App\Models as Models;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Lineages extends Base{
/*
|--------------------------------------------------------------------------
| Table Controls
|--------------------------------------------------------------------------
*/
public function lineage_table($ancestors_of = false, $descendants_of = false){
  $lineages = Models\Lineage::orderBy('horse_id');

  if($ancestors_of != '0'){
    $horse = Models\Horse::select('id', 'sex')->where('id', $ancestors_of)->first();
    $lineages->whereIn('horse_id', $horse->id);
    //return sire and dam
    //return sire's sire and sire's dam
    //return dam's sire and dam's dam
  }//end if

  $lineages = $lineages->get()->toArray();

  foreach($lineages as $i=>$record){
    $horse = Models\Horse::select('call_name', 'stall_path')->where('id', $record['horse_id'])->first();
    $sire = Models\Horse::select('call_name', 'stall_path')->where('id', $record['sire_id'])->first();
    $dam = Models\Horse::select('call_name', 'stall_path')->where('id', $record['dam_id'])->first();

    $lineages[$i]['horse_name'] = $horse['call_name'];
    $lineages[$i]['horse_link'] = $horse['stall_path'];

    $lineages[$i]['sire_name'] = $sire['call_name'];
    $lineages[$i]['sire_link'] = $sire['stall_path'];

    $lineages[$i]['dam_name'] = $dam['call_name'];
    $lineages[$i]['dam_link'] = $dam['stall_path'];
    }//end foreach

    return view('tables.lineages', [
      'lineage' => $lineages,
      'ancestors_of' => $ancestors_of,
      'descendants_of' => $descendants_of,
      'domain' => $this->lineagesTableDomain()
      ]);
  }//end person_table

  public function returnAncestors($horse_id, $ids){
    //collect ids of all sires and dams

    $sire = Models\Lineage::select('sire_id')->where('horse_id', $horse_id)->first();
    if($sire){
      array_push($ids, $sire['sire_id']);
      $this->returnAncestors($sire['sire_id'], $ids);
    }         

    $dam = Models\Lineage::select('dam_id')->where('horse_id', $horse_id)->first();  
    if($dam){
      array_push($ids, $dam['dam_id']);
      $this->returnAncestors($dam['dam_id'], $ids);
    }

    return $ids;
  }//end returnAncestors

  public function lineage_table_validate(){
    $data = Base::trimWhiteSpace($_POST);

    return redirect()->route('lineage_table', [      
      'ancestors_of' => $data['ancestors_of'],
      'descendants_of' => $data['descendants_of']
      ]);
  }//end lineage_table_validate

  public function lineagesTableDomain(){
    $domain = [];
    $domain['horses']  = Models\Horse::select('id', 'call_name')->orderBy('call_name')->get()->toArray(); 
    return $domain;
  }//end lineagesTableDomain

/*
|--------------------------------------------------------------------------
| Form Controls
|--------------------------------------------------------------------------
*/

  public function lineage($sex = false, $horse_id = false){ //add sire and dam
   $horse = Models\Horse::where('id', $horse_id)->first();   
   $check = Users::verifyOwner($horse);

   $lineage = $this->getLineageRecord($sex, $horse_id);

   $options = Base::getLineageDomain();

   return view('pages.lineage', [
    'options' => $options,
    'horse' => $lineage['horse'], 
    'sire' => $lineage['sire'], 
    'dam' => $lineage['dam'], 
    'validate' => false]);
  }//end lineage

  public function lineage_validate($sex = false, $horse_id = false){
    $data = Base::trimWhiteSpace($_POST);
    $lineage = $this->createLineage($data);
    return redirect()->route('lineage_table');
  }//end lineage_validate

/*
|--------------------------------------------------------------------------
| Utility Controls
|--------------------------------------------------------------------------
*/

public function createLineage($data){
 $lineage = Models\Lineage::firstOrNew(['horse_id' => $data['horse_id']]);
 $lineage->horse_id = $data['horse_id'];
 $lineage->sire_id = $data['sire_id'];
 $lineage->dam_id = $data['dam_id'];
 $lineage->save();
 return $lineage;
}//end createLineage

public function remove_lineage($horse_id){
  $lineage = Models\Lineage::where('horse_id', $horse_id)->first();  
  $lineages = Models\Lineage::where('sire_id', $horse_id)->orWhere('dam_id', $horse_id)->first(); 
   
  $horse = Models\Horse::find($horse_id);
  Users::verifyOwner($horse);

  if(empty($_POST)){
    $horse = Models\Horse::select('id','call_name')->where('id', $lineage->horse_id)->first();
    return view('pages.remove_lineage', [
      'lineages' => $lineages,
      'horse' => $horse   
      ]);
  } else {  
    $lineage->delete();
    return redirect()->route('lineage_table');
  }
  }//end remove_lineage

  
  public function getLineageRecord($sex = false, $horse_id = false){
    $horse = ['id' => 0, 'call_name' => ''];
    $sire = ['id' => 0, 'call_name' => ''];
    $dam = ['id' => 0, 'call_name' => ''];    

    if($sex == "Mare" && $horse_id){
      $dam = Models\Horse::select('id', 'call_name', 'owner')->where('id', $horse_id)->first();      
    }//end if

    if($sex == "Stallion" && $horse_id){
      $sire = Models\Horse::select('id', 'call_name')->where('id', $horse_id)->first();
    }//end if

    if(is_numeric($sex) && $horse_id){
      $horse = Models\Horse::select('id', 'call_name')->where('id', $horse_id)->first();
      $record = Models\Lineage::where('horse_id', $horse['id'])->first();

      $sire = Models\Horse::select('id', 'call_name')->where('id', $record['sire_id'])->first();
      $dam = Models\Horse::select('id', 'call_name')->where('id', $record['dam_id'])->first();
    }//end if

    $lineage = [
    'horse' => $horse,
    'sire' => $sire,
    'dam' =>$dam
    ];

    return $lineage;
  }//end getLineageRecord


}//end class