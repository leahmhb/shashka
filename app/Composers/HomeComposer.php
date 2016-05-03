<?php 
namespace App\Composers;
use App\Models as Models;

class HomeComposer{

	public function compose($view){        
		$view->with('nav_list', $this->getNav());
	}//end compose

  public function getNav(){
    $nav_list = [
    'OL' => [],
    'GIII' => [],
    'GII' => [],
    'GI' => []
    ];

    $horses = Models\Horse::select('id', 'call_name', 'grade', 'sex', 'stall_path')   
    ->orderBy('call_name')
    ->get()->toArray();

    foreach($horses as $h){
      foreach($nav_list as $i=>$n){
        if($h['grade'] == $i){
          array_push($nav_list[$i], $h);
        }//end if
      }//end foreach
    }//end foreach

    return $nav_list;

  }//end getNav



}